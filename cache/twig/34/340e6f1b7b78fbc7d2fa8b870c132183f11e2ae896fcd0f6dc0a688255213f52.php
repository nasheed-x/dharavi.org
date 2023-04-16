<?php

/* partials/form-messages.html.twig */
class __TwigTemplate_95a9d7403b56ba7d268549ca8b8663df916cdd054ae35fb0e6ad9c7e9b671221 extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
            // line 2
            echo "    ";
            $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", array()))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
            // line 3
            echo "    ";
            $context["status_mapping"] = array("success" => "green", "error" => "red", "warning" => "yellow");
            // line 4
            echo "    ";
            $context["message"] = (((($context["inline_errors"] ?? null) && $this->getAttribute(($context["form"] ?? null), "messages", array()))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", array())));
            // line 5
            echo "    <div class=\"notices ";
            echo $this->getAttribute(($context["form"] ?? null), "status", array());
            echo " ";
            echo (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", array()), array(), "array")) ? ($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", array()), array(), "array")) : ("green"));
            echo "\"><p>";
            echo ($context["message"] ?? null);
            echo "</p></div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/form-messages.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/plugins/form/templates/partials/form-messages.html.twig");
    }
}
