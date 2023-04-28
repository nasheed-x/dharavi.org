<?php

/* modular/stats.html.twig */
class __TwigTemplate_d27b9354ec778e0ed3596cbd318d34abfd8201b0c523cf37fd1aa989cc1b805e extends Twig_Template
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
        echo "<!-- s-stats ================================================== -->
<section id=\"";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-stats ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row block-1-4 block-tab-1-2 block-mob-full stats\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "stats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <div class=\"col-block stats__col ";
            if (($this->getAttribute($context["item"], "statHighlight", array()) == "1")) {
                echo "stats__col--highlight";
            }
            echo "\">
                ";
            // line 9
            if ($this->getAttribute($context["item"], "statIconClass", array())) {
                // line 10
                echo "                    <div class=\"stats__upsign\">
                        <a href=\"";
                // line 11
                echo $this->getAttribute($context["item"], "statIconLink", array());
                echo "\"><i class=\"";
                echo $this->getAttribute($context["item"], "statIconClass", array());
                echo "\" aria-hidden=\"true\"></i></a>
                    </div>
                ";
            }
            // line 14
            echo "                <div class=\"stats__count\">
                    ";
            // line 15
            echo $this->getAttribute($context["item"], "statCount", array());
            echo "
                </div>
                <h4>";
            // line 17
            echo $this->getAttribute($context["item"], "statDescription", array());
            echo "</h4>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    </div>

</section> <!-- end s-stats -->";
    }

    public function getTemplateName()
    {
        return "modular/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 17,  64 => 15,  61 => 14,  53 => 11,  50 => 10,  48 => 9,  41 => 8,  37 => 7,  30 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/stats.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/stats.html.twig");
    }
}
