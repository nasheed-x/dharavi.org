<?php

/* modular/about.html.twig */
class __TwigTemplate_ce9f58c517927628892290752048c0309c2824b1d92d1d8f768b253a5655be26 extends Twig_Template
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
         class=\"s-about ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">
    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
        echo "</h3>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
            <p class=\"lead\">";
        // line 7
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", array()));
        echo "</p>
        </div>
    </div>

    <div class=\"row about-content\">

        <div class=\"col-six tab-full left\">
            <h3>";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bioTitle", array());
        echo "</h3>

            <p class=\"lead\">";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bioDescription", array()));
        echo "
            </p>
        </div>

        <div class=\"col-six tab-full right\">
            <h3>";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "skillsTitle", array());
        echo "</h3>

            <ul class=\"skill-bars\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "
                    <li>
                        <div class=\"progress\" style=\"width: ";
            // line 27
            echo $this->getAttribute($context["item"], "percentValue", array());
            echo "\">
                            <span>";
            // line 28
            echo $this->getAttribute($context["item"], "percentValue", array());
            echo "</span>
                        </div>
                        <strong>";
            // line 30
            echo $this->getAttribute($context["item"], "skillName", array());
            echo "</strong>
                    </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </ul>
        </div>

    </div>
    <!-- end about-content -->

    <div class=\"row about-content about-content--buttons\">

        <div class=\"col-six tab-full left\">
            <a href=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Link", array());
        echo "\" class=\"btn btn--primary full-width\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Text", array());
        echo "</a>
        </div>
        <div class=\"col-six tab-full right\">
            <a href=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Link", array());
        echo "\" class=\"btn full-width\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Text", array());
        echo "</a>
        </div>

    </div>
    <!-- end about-content buttons -->

</section>
<!-- end about -->";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  109 => 43,  98 => 34,  88 => 30,  83 => 28,  79 => 27,  75 => 25,  71 => 24,  65 => 21,  57 => 16,  52 => 14,  42 => 7,  38 => 6,  34 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/about.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/modular/about.html.twig");
    }
}
