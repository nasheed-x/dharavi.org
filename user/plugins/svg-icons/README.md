# SVG Icons Plugin

The **SVG Icons** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav) that provides over 8000 SVG icons with various sets of SVG icons that can be used in your content and Twig templates by using either a unique shortcode (for content) or Twig function (for templates).

This package currently contains 6 primary SVG icon sets:

* [Tabler Icons (4333)](https://tabler-icons.io/) → [DEFAULT] Developed by [Csaba Kissi](https://twitter.com/csaba_kiss) (v2.26.0)
* [Hero Icons (292)](https://heroicons.dev/) → Developed by [Steve Schoger](https://twitter.com/steveschoger) with both `outline` and `solid` variants (v2.0.13)
* [Simple Icon Brands (2419)](https://simpleicons.org/) → Over 2100 popular brand icons (v8.20)
* [Social Icons (6)](#) → A few basic consistent social networking icons (v1.0)
* **NEW** [Bootstrap Icons (1958)](https://icons.getbootstrap.com/) → Over 1500 icons (v1.10.3)
* **NEW** [Iconsax icons (1792)](https://iconsax.io/) →  `outline` and `bold` variants (v1.0)
* **NEW** [Lucide icons (881)](https://lucide.dev/) → Forked from feather icons (v0.112.0)

## Installation

Installing the Svg Icons plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install svg-icons

This will install the Svg Icons plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/svg-icons`.

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Usage

#### Shortcode for Content

When you need to use an SVG icon in your content, you can use the `[svg-icon]` shortcode. Here are some examples:

```
[svg-icon=alien /] 
```

This is the quickest most basic approach. This will use the default `tabler` SVG icon set. Note, no extension is required for the icon name as they are all SVGs.

```
[svg-icon=award set=tabler]
```

Valid icon sets include:

* `tabler`
* `heroicons\solid`
* `heroicons\outline`
* `brands`
* `bootstrap`
* `iconsax\bold`
* `iconsax\outline`
* `lucide`
* `social`

Another example with an explicit set defined and no trailing slash.

```
[svg-icon icon="atom" /]
```

The more commonly used approach with icon specifically defined.

```
[svg-icon icon="battery-4" set="tabler"]
```

Icon and set defined, but no trailing slash.

```
[svg-icon icon="badge-check" class="w-12" set="heroicons/solid"]
```

Example from HeroIcons / Solid and a TailwindCSS class of `w-12` to specify a width.

```
[svg-icon icon="shield-check" class="w-12 h-12 text-primary" /]
```

More complex example with TailwindCSS classes for width/height and also a color.

```
[svg-icon icon="shield-check" class="w-24 h-24 text-secondary stroke-1 transform rotate-90" /]
```

Just showing off now with vector stroke modified and a custom rotation.

#### Twig Function for Templates

Using the plugin directly from Twig templates is a little different. There's an `svg_icon()` twig function available to use but it only takes a path to the SVG icon, plus classes. Some examples include:

```
{{ svg_icon('tabler/plus.svg', 'h-6 w-6 text-gray-600 stroke-3/2')|raw }}
```

This is using the `tabler/plus.svg` icon with various TailwindCS classes for width, height, color and stroke.  Note the use of `|raw` filter at the end. This is important as the output is the raw inline HTML of the SVG.

```
{{ svg_icon('heroicons/outline/star.svg', 'current-color h-8 w-8')|raw }}
```

Here we are using the `star.svg` from HeroIcons in Outline style.  The classes use the current color.

#### Custom Icons

If you want to add your own icons, you should clean them up to ensure any hardcoded colors are removed and `currentColor` is used instead.  For example, search and replace:

```
stroke=\"#(?:[0-9a-fA-F]{3}){1,2}\"
stroke="currentColor"

fill=\"#(?:[0-9a-fA-F]{3}){1,2}\"
fill="currentColor"
```



