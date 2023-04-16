<?php

/* modular/services.html.twig */
class __TwigTemplate_876f0d6ee20e4dcf09d153d9fd09fe67cdbfeec36ac11984d49bcada50cec9c0 extends Twig_Template
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
         class=\"s-services ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"overlay\"></div>
    <div class=\"row section-intro\">
        <div class=\"col-twelve\">
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array())) {
            // line 8
            echo "                <h3>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
            echo "</h3>
            ";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "title", array())) {
            // line 11
            echo "                <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</h1>
            ";
        }
        // line 13
        echo "           ";
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 14
            echo "            <p class=\"lead\">";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
            ";
        }
        // line 16
        echo "        </div>
    </div> <!-- /section-intro -->

    <div class=\"row services-content\">

        <div id=\"owl-slider\" class=\"owl-carousel services-list\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "

                <div class=\"service\">
                    <span class=\"icon\"><i class=\"";
            // line 26
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></span>
                    <div class=\"service-content\">
                        <h3>";
            // line 28
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                        <p class=\"desc\">";
            // line 29
            echo $this->getAttribute($context["item"], "description", array());
            echo "
                        </p>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        </div> <!-- /services-list -->
    </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  88 => 29,  84 => 28,  79 => 26,  74 => 23,  70 => 22,  62 => 16,  56 => 14,  53 => 13,  47 => 11,  44 => 10,  38 => 8,  36 => 7,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/services.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/modular/services.html.twig");
    }
}
