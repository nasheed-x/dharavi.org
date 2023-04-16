<?php

/* partials/logo.html.twig */
class __TwigTemplate_aacabe870b253a27fac20db6b2fa0779a7354056c01e9ffcd9d5526bb0528b8e extends Twig_Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_logo");
        // line 2
        if (($context["logo"] ?? null)) {
            // line 3
            echo "    ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", array());
            // line 4
            echo "    <img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null)));
            echo "\" alt=\"";
            echo ($context["logo_file"] ?? null);
            echo "\"/>
";
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@images/logo.png", "partials/logo.html.twig", 6)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/logo.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/partials/logo.html.twig");
    }
}
