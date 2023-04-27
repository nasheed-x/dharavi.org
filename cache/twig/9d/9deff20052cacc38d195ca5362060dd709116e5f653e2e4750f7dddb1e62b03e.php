<?php

/* modular/cta.html.twig */
class __TwigTemplate_dc8cd2f8b711fb894d8c918a645d577a180ec174e14400cad3415f372c00d8c1 extends Twig_Template
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
         class=\"s-cta ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row narrow cta\">

        <div class=\"col-full cta__content\">

            <h2 class=\"h01\"><a href=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "titleLink", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a></h2>

            <p class=\"lead\">
                ";
        // line 11
        echo strip_tags(($context["content"] ?? null), "<a><span>");
        echo "
            </p>

            <div class=\"cta__action\">
                <a class=\"btn btn--primary btn--large\" href=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttonLink", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttonText", array());
        echo "</a>
            </div>

        </div>

    </div> <!-- end cta -->

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  45 => 11,  37 => 8,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/cta.html.twig", "/Users/shreyamanjrekar/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/cta.html.twig");
    }
}
