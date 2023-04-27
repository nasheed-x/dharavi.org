<?php

/* modular/resume.html.twig */
class __TwigTemplate_6f7289796c5dbc188a3d9285cabe029e9ccf0a2dc89ed8e149dbb5eb104fbc1f extends Twig_Template
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
        echo "<!-- resume Section
   ================================================== -->
<section id=\"";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-resume ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row section-intro\">
        <div class=\"col-twelve\">

            <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
        echo "</h3>
            <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

            <p class=\"lead\">";
        // line 12
        echo ($context["content"] ?? null);
        echo "</p>

        </div>
    </div> <!-- /section-intro-->

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "timeline", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 18
            echo "
        <div class=\"row resume-timeline\">

            <div class=\"col-twelve resume-header\">

                <h2>";
            // line 23
            echo $this->getAttribute($context["timeline"], "resumeTitle", array());
            echo "</h2>

            </div> <!-- /resume-header -->

            <div class=\"col-twelve\">

                <div class=\"timeline-wrap\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timeline"], "timelineItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "
                        <div class=\"timeline-block\">

                            <div class=\"timeline-ico\">
                                <i class=\"";
                // line 35
                echo $this->getAttribute($context["item"], "icon_class", array());
                echo "\"></i>
                            </div>

                            <div class=\"timeline-header\">
                                <h3>";
                // line 39
                echo $this->getAttribute($context["item"], "position", array());
                echo "</h3>
                                <p>";
                // line 40
                echo $this->getAttribute($context["item"], "date", array());
                echo "</p>
                            </div>

                            <div class=\"timeline-content\">
                                <h4>";
                // line 44
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h4>
                                <p>";
                // line 45
                echo $this->getAttribute($context["item"], "descripiton", array());
                echo "</p>
                            </div>

                        </div> <!-- /timeline-block -->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </div> <!-- /timeline-wrap -->

            </div> <!-- /col-twelve -->

        </div> <!-- /resume-timeline -->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
</section> <!-- /features -->";
    }

    public function getTemplateName()
    {
        return "modular/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  120 => 50,  109 => 45,  105 => 44,  98 => 40,  94 => 39,  87 => 35,  81 => 31,  77 => 30,  67 => 23,  60 => 18,  56 => 17,  48 => 12,  43 => 10,  39 => 9,  31 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/resume.html.twig", "/Users/shreyamanjrekar/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/resume.html.twig");
    }
}
