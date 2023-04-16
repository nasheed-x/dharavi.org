<?php

/* partials/footer.html.twig */
class __TwigTemplate_2e46c714b3c3bb5649a7d74e52839e17c8a8276aa249230714fd9074640e2eb8 extends Twig_Template
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
        echo "<footer>
    <div class=\"row\">
        <div class=\"col-full\">

            <div class=\"footer-logo\">
                <a class=\"footer-site-logo\" href=\"";
        // line 6
        echo ($context["base_url_relative"] ?? null);
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/footer.html.twig", 6)->display($context);
        echo "</a>
            </div>

            <ul class=\"footer-social\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-social"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo $this->getAttribute($context["item"], "socialIconLink", array());
            echo "\">
                            <i class=\"";
            // line 13
            echo $this->getAttribute($context["item"], "socialIconClass", array());
            echo "\" aria-hidden=\"true\"></i>
                            <span>";
            // line 14
            echo $this->getAttribute($context["item"], "socialIconText", array());
            echo "</span>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>

    <div class=\"row footer-bottom\">

        <div class=\"col-twelve\">
            <div class=\"copyright\">
                <span>";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-text");
        echo "</span>
                <span>";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-design");
        echo "</span>
                <span>";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-additional-text");
        echo "</span>
            </div>

            <div class=\"go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <i class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>

    </div> <!-- end footer-bottom -->

    <!-- Please leave this as a credit.It's not visible. Thank you. -->
    <a href=\"https://devlom.com\" style=\"display: none;\">Grav CMS Development by Devlom</a>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  74 => 27,  70 => 26,  60 => 18,  50 => 14,  46 => 13,  42 => 12,  39 => 11,  35 => 10,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/footer.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/partials/footer.html.twig");
    }
}
