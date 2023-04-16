<?php

/* modular/experience.html.twig */
class __TwigTemplate_6a3cdd52d02ecc0332a1bff7d63074ac537357dfef5db3091f97ca34bd5b2afe extends Twig_Template
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
         class=\"s-experience ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row experience-content experience-content--timeline\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "experienceTimeline", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <div class=\"col-six tab-full ";
            if (($context["item"] % 2 == 1)) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
                <div class=\"timeline\">
                    <div class=\"timeline__block\">
                        <div class=\"timeline__bullet\"></div>
                        <div class=\"timeline__header\">
                            <p class=\"timeline__timeframe\">";
            // line 14
            echo $this->getAttribute($context["item"], "date", array());
            echo "</p>
                            <h3>";
            // line 15
            echo $this->getAttribute($context["item"], "client", array());
            echo "</h3>
                            <h5>";
            // line 16
            echo $this->getAttribute($context["item"], "position", array());
            echo "</h5>
                        </div>
                        <div class=\"timeline__desc\">
                            <p>";
            // line 19
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                        </div>
                    </div> <!-- end timeline__block -->
                </div> <!-- end timeline -->
            </div> <!-- end left -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div> <!-- end experience-content timeline -->

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  44 => 9,  40 => 8,  35 => 6,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/experience.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/modular/experience.html.twig");
    }
}
