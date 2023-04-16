<?php

/* modular/home.html.twig */
class __TwigTemplate_ef796a23ac33882a51fc326d35dfb792cc4cb4faa5e6c1b17a144fa64a9482d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), array(), "array"), "url", array(), "method");
        echo "\"
         data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bannerOpacity", array());
        echo ";\"></div>
    <div class=\"shadow-overlay\"></div>

    <div class=\"home-content\">

        <div class=\"row home-content__main\">

            <h3>";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>

            <h1>
                ";
        // line 15
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Text", array())) {
            // line 20
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Link", array());
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 21
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Text", array());
            echo "
                    </a>
                ";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Text", array())) {
            // line 25
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Link", array());
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 26
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Text", array());
            echo "
                    </a>
                ";
        }
        // line 29
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button3Link", array());
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button3Text", array());
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "social", array())) {
            // line 41
            echo "        <ul class=\"home-social\">
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 43
                echo "                <li>
                    <a href=\"";
                // line 44
                echo $this->getAttribute($context["icon"], "socialIconLink", array());
                echo "\">
                        <i class=\"";
                // line 45
                echo $this->getAttribute($context["icon"], "socialIconClass", array());
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 46
                echo $this->getAttribute($context["icon"], "socialIconText", array());
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 51
        echo "
</section> <!-- end s-home -->";
    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  132 => 49,  123 => 46,  119 => 45,  115 => 44,  112 => 43,  108 => 42,  105 => 41,  103 => 40,  93 => 33,  89 => 32,  84 => 29,  78 => 26,  73 => 25,  70 => 24,  64 => 21,  59 => 20,  57 => 19,  50 => 15,  44 => 12,  34 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/home.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/home.html.twig");
    }
}
