<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_24da392774a542943cd3f77238e6dd135332b3c403fbcbc14e0fb7913674eeb3 extends Twig_Template
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
        echo "<!-- testimonials ================================================== -->
<section id=\"";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-testimonials ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\"
         style=\"background: url(";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionbackground", array()), array(), "array"), "url", array());
        echo ")\">

    <div class=\"overlay\" style=\"opacity:";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "backgroundOverlay", array());
        echo ";\"></div>

    <div class=\"row testimonials-header\">
        <div class=\"col-full\">
            <h1 class=\"h02\">";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        </div>
    </div>

    <div class=\"row testimonials\">

        <div class=\"col-full testimonials__slider\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "testimonials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "
                <div class=\"testimonials__slide\">
                    <img src=\"";
            // line 20
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"Author image\" class=\"testimonials__avatar\">
                    <p>";
            // line 21
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                    <div class=\"testimonials__author h06\">
                        ";
            // line 23
            echo $this->getAttribute($context["item"], "clientName", array());
            echo "
                        <span>";
            // line 24
            echo $this->getAttribute($context["item"], "position", array());
            echo "</span>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        </div> <!-- end testimonials__slider -->

    </div> <!-- end testimonials -->

</section> <!-- end s-testimonials -->
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  77 => 24,  73 => 23,  68 => 21,  64 => 20,  60 => 18,  56 => 17,  46 => 10,  39 => 6,  34 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/testimonials.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/testimonials.html.twig");
    }
}
