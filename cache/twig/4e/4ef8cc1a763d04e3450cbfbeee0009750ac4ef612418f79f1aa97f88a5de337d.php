<?php

/* default.html.twig */
class __TwigTemplate_b0c822d9e07631d90691ec27015d4fa5523f2d68011d618a649c06289ce3e375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"small-page-header page-hero\" style=\"background-image:url(";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/default.jpg");
        echo "\">
        <div class=\"row page-header__content narrow text-center\">
            <h1 class=\"page-header__title\">
                ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
            </h1>
        </div>
    </section>

    <section id=\"default\" class=\"s-default\">
        <div class=\"row narrow section-intro\">
            <div class=\"col-full\">
                <div>
                    <p>
                        ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                    </p>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/default.html.twig");
    }
}
