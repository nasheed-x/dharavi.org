<?php

/* modular/basic.html.twig */
class __TwigTemplate_2c893e414e2609e313625fd891837ff7f3342a95e0dcb2727c85986f8e3f5d43 extends Twig_Template
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
         class=\"s-basic ";
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
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "
        ";
            // line 12
            if ($this->getAttribute($context["column"], "secondColumnContent", array())) {
                // line 13
                echo "            <div class=\"row basic-content\">
                <div class=\"col-six tab-full left\">
                    <h3>";
                // line 15
                echo $this->getAttribute($context["column"], "firstColumnTitle", array());
                echo "</h3>

                    <p class=\"lead\">";
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "firstColumnContent", array()));
                echo "
                    </p>
                </div>

                <div class=\"col-six tab-full right\">
                    <h3>";
                // line 22
                echo $this->getAttribute($context["column"], "secondColumnTitle", array());
                echo "</h3>

                    <p class=\"lead\">";
                // line 24
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "secondColumnContent", array()));
                echo "
                    </p>
                </div>
            </div>
        ";
            } else {
                // line 29
                echo "            <div class=\"row basic-content one-column\">
                <div class=\"col-eight tab-full\">
                    <h3>";
                // line 31
                echo $this->getAttribute($context["column"], "firstColumnTitle", array());
                echo "</h3>

                    <p class=\"lead\">";
                // line 33
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "firstColumnContent", array()));
                echo "
                    </p>
                </div>
            </div>
        ";
            }
            // line 38
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <!-- end basic-content -->

</section>
<!-- end basic -->";
    }

    public function getTemplateName()
    {
        return "modular/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  104 => 38,  96 => 33,  91 => 31,  87 => 29,  79 => 24,  74 => 22,  66 => 17,  61 => 15,  57 => 13,  55 => 12,  52 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/basic.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/basic.html.twig");
    }
}
