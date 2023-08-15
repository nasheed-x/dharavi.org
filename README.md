## Installing For Local Development

### Option A

1. `git clone https://github.com/dharavi-org/dharavi.org.git`
   
2. `cd dharavi.org`

To check that the basic installation is working run `php -S localhost:4000 system/router.php` from within `dharavi.org`. The site should be live on `localhost:4000`.

Clear grav cache by running `bin/grav clear-cache` from within `dharavi.org`.

### Option B (Preferred)

1. `git clone https://github.com/dharavi-org/dharavi.org.git`
   
2. `cd dharavi.org`

To check that the basic installation is working run, we can run a local web server using [MAMP](https://www.mamp.info/en/mamp).

Once installed, configure MAMP to point to `dharavi.org` as the document root. This can be accessed inside the prefrences menu. Set the PHP version to `8.2` and hit `Start`. The site should be live on `localhost:8888`.

Clear grav cache by running `bin/grav clear-cache` from within `dharavi.org`.

## Installing On a Digital Ocean Droplet

Create a new droplet and SSH into it. Make sure the account you're using is `root` or has `sudo` privileges.

The first thing you will want to do is update and upgrade all the installed packages.

```
# apt update
# apt upgrade
```

Just answer `Y` if prompted.

Before we go any further, let's remove **Apache2** which we will replace with **Nginx**:

```
# apt remove apache2*
# apt autoremove
```

> NOTE: You might not have this installed.  But better safe than sorry!

Next you will want to install some essential packages:

```
# apt install zip unzip nginx git php-fpm php-cli php-gd php-curl php-mbstring php-xml php-zip php-apcu
```

This will install the complete VIM editor (rather than the mini version that ships with Ubuntu), Nginx web server, GIT commands, and **PHP X**. Replace **X** with the version of PHP you're running (e.g. 8.1).

### Configure PHP8.1 FPM
Once php-fpm is installed, there is a slight configuration change that needs to take place for a more secure setup.

```
# nano /etc/php/8.1/fpm/php.ini
```
Search for `cgi.fix_pathinfo`. This will be commented out by default and set to '1'.

This is an extremely insecure setting because it tells PHP to attempt to execute the closest file it can find if the requested PHP file cannot be found. This basically would allow users to craft PHP requests in a way that would allow them to execute scripts that they shouldn't be allowed to execute.

Uncomment this line and change '1' to '0' so it looks like this

```
cgi.fix_pathinfo=0
```
Save and close the file, and then restart the service.

```
# systemctl restart php8.1-fpm 
```

Nginx has already been installed, but you should configure is so that it uses a user-specific PHP connection pool.  This will ensure you are secure and avoid any potential file permissions when working on the files as your user account, and via the web server.

Navigate to the pool directory and create a new `grav` configuration:

```
# cd /etc/php/8.1/fpm/pool.d
# mv www.conf www.conf.bak
# nano grav.conf
```
In Nano, you can paste the following pool configuration:

```
user = grav
group = grav

listen = /var/run/php/php7.2-fpm.sock

listen.owner = www-data
listen.group = www-data

pm = dynamic
pm.max_children = 5
pm.start_servers = 2
pm.min_spare_servers = 1
pm.max_spare_servers = 3

chdir = /
```

The key things here are the `user` and `group` being set to a user called `grav`, and the listen socket having a unique name from the standard socket.  Save and exit this file.

We need to create the dedicated `grav` user now:

```
# adduser grav
```

Provide a strong password, and leave the other values as default. We need to next create an appropriate location for Nginx to serve files from, so let's switch user and create those folder, and create a couple of test files:

```
# su - grav
$ mkdir -p www/html
$ cd www/html
```

Create a simple `index.html` with the contents of:

```
 <h1>Working!</h1>
```

..and a file called `info.php` with the contents of:

```
<?php phpinfo();
```

Now we can exit out of this user and return to root in order to setup the Nginx server configuration:

```
$ exit
# cd /etc/nginx/sites-available/
# nano grav
```
Then simply paste in this configuration:

```
server {
    #listen 80;
    index index.html index.php;

    ## Begin - Server Info
    root /home/grav/www/html;
    server_name dharavi.nyuad.io;
    ## End - Server Info

    ## Begin - Index
    # for subfolders, simply adjust:
    # `location /subfolder {`
    # and the rewrite to use `/subfolder/index.php`
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    ## End - Index

    ## Begin - Security
    # deny all direct access for these folders
    location ~* /(\.git|cache|bin|logs|backup|tests)/.*$ { return 403; }
    # deny running scripts inside core system folders
    location ~* /(system|vendor)/.*\.(txt|xml|md|html|yaml|yml|php|pl|py|cgi|twig|sh|bat)$ { return 403; }
    # deny running scripts inside user folder
    location ~* /user/.*\.(txt|md|yaml|yml|php|pl|py|cgi|twig|sh|bat)$ { return 403; }
    # deny access to specific files in the root folder
    location ~ /(LICENSE\.txt|composer\.lock|composer\.json|nginx\.conf|web\.config|htaccess\.txt|\.htaccess) { return 403; }
    ## End - Security

    ## Begin - PHP
    location ~ \.php$ {
        # Choose either a socket or TCP/IP address
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        # fastcgi_pass unix:/var/run/php5-fpm.sock; #legacy
        # fastcgi_pass 127.0.0.1:9000;

        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
    }
    ## End - PHP
}
```
This is the stock `nginx.conf` file that comes with Grav with 2 changes. 1) the `root` has been adapted to our user/folder we just created and the `fastcgi_pass` option has been set to the socket we defined in our `grav` pool. Now we just need to link this file appropriately so that it's **enabled**:

```
# cd ../sites-enabled
# ln -s ../sites-available/grav
# rm default
```

You can test the configuration with the command `nginx -t`. It should return the following.

```
nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
```

Nginx operates within the directory, so if you can't cd to that directory from the nginx user then it will fail (as does the stat command in your log). Make sure the www-user can cd all the way to the grav/www/html. You can confirm that the stat will fail or succeed by running

```
sudo -u www-data stat /home/grav/www/html
```

To given Nginx access to the webroot directory:

```
chmod +x /home/
chmod +x /home/grav
chmod +x /home/grav/www
chmod +x /home/grav/www/html
```

Now all we have to do is restart Nginx and the php8-fpm process and test to ensure we have configured Nginx and the PHP connection pool correctly:

```
# systemctl restart nginx 
# systemctl restart php8.1-fpm
```
Now point your browser at your server and you should see the text: **Working!**
You can also test to ensure that PHP is installed and working correctly by pointing your browser to: `/info.php`.  You should see a standard PHP info page with APCu, Opcache, etc listed.
### Installing The Site

This is the "easy" part!  First we need to jump back over to the Grav user, so either SSH as `grav@server-domain` or `su - grav` from the root login. then follow these steps:

```
$ cd ~/www
$ git clone https://github.com/dharavi-org/dharavi.org.git
$ rm -Rf html
$ mv dharavi.org html
```

Now That's done you can confirm Grav is installed by pointing your browser to the server's domain and you should be greeted with the `dharavi.org` landing page. You should also be able to access the Grav Admin Page to further configure the site.

### Updating The Site
### Adding Content




# ![](https://avatars1.githubusercontent.com/u/8237355?v=2&s=50) Grav

[![PHPStan](https://img.shields.io/badge/PHPStan-en## Installing for local development from scratchabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)
[![Discord](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Discord%20Chat)](https://chat.getgrav.org)
 [![PHP Tests](https://github.com/getgrav/grav/workflows/PHP%20Tests/badge.svg?branch=develop)](https://github.com/getgrav/grav/actions?query=workflow%3A%22PHP+Tests%22) [![OpenCollective](https://opencollective.com/grav/tiers/backers/badge.svg?label=Backers&color=brightgreen)](#backers) [![OpenCollective](https://opencollective.com/grav/tiers/supporters/badge.svg?label=Supporters&color=brightgreen)](#supporters) [![OpenCollective](https://opencollective.com/grav/tiers/sponsors/badge.svg?label=Sponsors&color=brightgreen)](#sponsors)

Grav is a **Fast**, **Simple**, and **Flexible**, file-based Web-platform.  There is **Zero** installation required.  Just extract the ZIP archive, and you are already up and running.  It follows similar principles to other flat-file CMS platforms, but has a different design philosophy than most. Grav comes with a powerful **Package Management System** to allow for simple installation and upgrading of plugins and themes, as well as simple updating of Grav itself.

The underlying architecture of Grav is designed to use well-established and _best-in-class_ technologies to ensure that Grav is simple to use and easy to extend. Some of these key technologies include:

* [Twig Templating](https://twig.symfony.com/): for powerful control of the user interface
* [Markdown](https://en.wikipedia.org/wiki/Markdown): for easy content creation
* [YAML](https://yaml.org): for simple configuration
* [Parsedown](https://parsedown.org/): for fast Markdown and Markdown Extra support
* [Doctrine Cache](https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/caching.html): layer for performance
* [Pimple Dependency Injection Container](https://github.com/silexphp/Pimple): for extensibility and maintainability
* [Symfony Event Dispatcher](https://symfony.com/doc/current/components/event_dispatcher/introduction.html): for plugin event handling
* [Symfony Console](https://symfony.com/doc/current/components/console/introduction.html): for CLI interface
* [Gregwar Image Library](https://github.com/Gregwar/Image): for dynamic image manipulation

# Requirements

- PHP 7.3.6 or higher. Check the [required modules list](https://learn.getgrav.org/basics/requirements#php-requirements)
- Check the [Apache](https://learn.getgrav.org/basics/requirements#apache-requirements) or [IIS](https://learn.getgrav.org/basics/requirements#iis-requirements) requirements

# Documentation

The full documentation can be found from [learn.getgrav.org](https://learn.getgrav.org).

# QuickStart

These are the options to get Grav:

### Downloading a Grav Package

You can download a **ready-built** package from the [Downloads page on https://getgrav.org](https://getgrav.org/downloads)

### With Composer

You can create a new project with the latest **stable** Grav release with the following command:

```
$ composer create-project getgrav/grav ~/webroot/grav
```

### From GitHub

1. Clone the Grav repository from [https://github.com/getgrav/grav]() to a folder in the webroot of your server, e.g. `~/webroot/grav`. Launch a **terminal** or **console** and navigate to the webroot folder:
   ```
   $ cd ~/webroot
   $ git clone https://github.com/getgrav/grav.git
   ```

2. Install the **plugin** and **theme dependencies** by using the [Grav CLI application](https://learn.getgrav.org/advanced/grav-cli) `bin/grav`:
   ```
   $ cd ~/webroot/grav
   $ bin/grav install
   ```

Check out the [install procedures](https://learn.getgrav.org/basics/installation) for more information.

# Adding Functionality

You can download [plugins](https://getgrav.org/downloads/plugins) or [themes](https://getgrav.org/downloads/themes) manually from the appropriate tab on the [Downloads page on https://getgrav.org](https://getgrav.org/downloads), but the preferred solution is to use the [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) or `GPM`:

```
$ bin/gpm index
```

This will display all the available plugins and then you can install one or more with:

```
$ bin/gpm install <plugin/theme>
```

# Updating

To update Grav you should use the [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) or `GPM`:

```
$ bin/gpm selfupgrade
```

To update plugins and themes:

```
$ bin/gpm update
```

## Upgrading from older version

* [Upgrading to Grav 1.7](https://learn.getgrav.org/16/advanced/grav-development/grav-17-upgrade-guide)
* [Upgrading to Grav 1.6](https://learn.getgrav.org/16/advanced/grav-development/grav-16-upgrade-guide)
* [Upgrading from Grav <1.6](https://learn.getgrav.org/16/advanced/grav-development/grav-15-upgrade-guide)

# Contributing
We appreciate any contribution to Grav, whether it is related to bugs, grammar, or simply a suggestion or improvement! Please refer to the [Contributing guide](CONTRIBUTING.md) for more guidance on this topic.

## Security issues
If you discover a possible security issue related to Grav or one of its plugins, please email the core team at contact@getgrav.org and we'll address it as soon as possible.

# Getting Started

* [What is Grav?](https://learn.getgrav.org/basics/what-is-grav)
* [Install](https://learn.getgrav.org/basics/installation) Grav in few seconds
* Understand the [Configuration](https://learn.getgrav.org/basics/grav-configuration)
* Take a peek at our available free [Skeletons](https://getgrav.org/downloads/skeletons)
* If you have questions, jump on our [Discord Chat Server](https://chat.getgrav.org)!
* Have fun!

# Exploring More

* Have a look at our [Basic Tutorial](https://learn.getgrav.org/basics/basic-tutorial)
* Dive into more [advanced](https://learn.getgrav.org/advanced) functions
* Learn about the [Grav CLI](https://learn.getgrav.org/cli-console/grav-cli)
* Review examples in the [Grav Cookbook](https://learn.getgrav.org/cookbook)
* More [Awesome Grav Stuff](https://github.com/getgrav/awesome-grav)

# Backers
Support Grav with a monthly donation to help us continue development. [[Become a backer](https://opencollective.com/grav/contribute)]

<img src="https://opencollective.com/grav/tiers/backers.svg?avatarHeight=36&width=600" />


# Supporters
Support Grav with a monthly donation to help us continue development. [[Become a supporter](https://opencollective.com/grav/contribute)]

<img src="https://opencollective.com/grav/tiers/supporters.svg?avatarHeight=36&width=600" />


# Sponsors
Support Grav with a yearly donation to help us continue development. [[Become a sponsor](https://opencollective.com/grav/contribute)]

<img src="https://opencollective.com/grav/tiers/sponsors.svg?avatarHeight=36&width=600" />

# License

See [LICENSE](LICENSE.txt)


[gitflow-model]: http://nvie.com/posts/a-successful-git-branching-model/
[gitflow-extensions]: https://github.com/nvie/gitflow

# Running Tests

First install the dev dependencies by running `composer install` from the Grav root.

Then `composer test` will run the Unit Tests, which should be always executed successfully on any site.
Windows users should use the `composer test-windows` command.
You can also run a single unit test file, e.g. `composer test tests/unit/Grav/Common/AssetsTest.php`

To run phpstan tests, you should run:

* `composer phpstan` for global tests
* `composer phpstan-framework` for more strict tests
* `composer phpstan-plugins` to test all installed plugins
