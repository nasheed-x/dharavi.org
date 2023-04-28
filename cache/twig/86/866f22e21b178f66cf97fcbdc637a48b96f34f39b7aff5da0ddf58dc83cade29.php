<?php

/* partials/base.html.twig */
class __TwigTemplate_d0cbb38ce6392a8c63aff90e6c5be232be7fcdeb5db9cecc7044842da84dd995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "    </head>
    <body id=\"top\" class=\"";
        // line 47
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        <!-- header ================================================== -->
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "        <!-- end s-header -->

        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
        ";
        // line 89
        $this->displayBlock('bottom', $context, $blocks);
        // line 92
        echo "
    </body>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\"/>
            <title>
                ";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo "
                    |
                ";
        }
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
            <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" type=\"image/x-icon\">
            <link rel=\"icon\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" type=\"image/x-icon\">
            <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

            ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

            ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "                ";
        $this->getAttribute(        // line 21
($context["assets"] ?? null), "addCss", array(0 => "theme://css/base.css"), "method");
        // line 22
        echo "                ";
        $this->getAttribute(        // line 23
($context["assets"] ?? null), "addCss", array(0 => "theme://css/vendor.css"), "method");
        // line 24
        echo "                ";
        $this->getAttribute(        // line 25
($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 26
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 27
        echo "
            ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "                ";
        $this->getAttribute(        // line 33
($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.js"), "method");
        // line 34
        echo "                ";
        $this->getAttribute(        // line 35
($context["assets"] ?? null), "addJs", array(0 => "theme://js/pace.min.js"), "method");
        // line 36
        echo "                ";
        $this->getAttribute(        // line 37
($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101, 2 => array("group" => "bottom")), "method");
        // line 38
        echo "                ";
        $this->getAttribute(        // line 39
($context["assets"] ?? null), "addJs", array(0 => "theme://js/plugins.js", 1 => array("group" => "bottom")), "method");
        // line 40
        echo "                ";
        $this->getAttribute(        // line 41
($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js", 1 => array("group" => "bottom")), "method");
        // line 42
        echo "            ";
    }

    // line 47
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "            <header class=\"s-header\">
                <div class=\"header-logo\">
                    <a class=\"footer-site-logo\" href=\"";
        // line 52
        echo ($context["home_url"] ?? null);
        echo "\">
                        ";
        // line 53
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                    </a>
                </div>
                <nav class=\"header-nav-wrap\">

                    ";
        // line 58
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 61
        echo "
                    ";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 63
            echo "                        <span class=\"login-status-wrapper\">
                            <i class=\"fa fa-user\"></i>
                            ";
            // line 65
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 65)->display($context);
            echo "</span>
                    ";
        }
        // line 67
        echo "                </nav>
                <a class=\"header-menu-toggle\" href=\"#0\">
                    <span>Menu</span></a>
            </header>
            <div class=\"mobile-menu\">
                <div class=\"button_container\" id=\"toggle\">
                    <span class=\"top\"></span>
                    <span class=\"middle\"></span>
                    <span class=\"bottom\"></span>
                </div>
            </div>
        ";
    }

    // line 58
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 59
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "                    ";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "        ";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "        ";
    }

    // line 89
    public function block_bottom($context, array $blocks = array())
    {
        // line 90
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 90,  269 => 89,  265 => 87,  262 => 86,  259 => 85,  254 => 82,  250 => 83,  247 => 82,  244 => 81,  240 => 60,  237 => 59,  234 => 58,  219 => 67,  214 => 65,  210 => 63,  208 => 62,  205 => 61,  203 => 58,  197 => 54,  195 => 53,  191 => 52,  187 => 50,  184 => 49,  178 => 47,  174 => 42,  172 => 41,  170 => 40,  168 => 39,  166 => 38,  164 => 37,  162 => 36,  160 => 35,  158 => 34,  156 => 33,  154 => 32,  151 => 31,  146 => 27,  143 => 26,  141 => 25,  139 => 24,  137 => 23,  135 => 22,  133 => 21,  131 => 20,  128 => 19,  120 => 43,  118 => 31,  112 => 29,  110 => 19,  105 => 17,  101 => 16,  97 => 15,  94 => 14,  92 => 13,  85 => 9,  78 => 7,  74 => 5,  71 => 4,  65 => 92,  63 => 89,  60 => 88,  58 => 85,  55 => 84,  53 => 81,  49 => 79,  47 => 49,  42 => 47,  39 => 46,  37 => 4,  32 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/partials/base.html.twig");
    }
}
