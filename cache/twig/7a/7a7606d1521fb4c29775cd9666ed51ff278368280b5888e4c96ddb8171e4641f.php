<?php

/* partials/pagination.html.twig */
class __TwigTemplate_2c14e4e8d5a5ecc0e0166709e7300764b32d9c2cfb9390186ca46aa917a25ea3 extends Twig_Template
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
        $context["pagination"] = (((isset($context["pagination"]) || array_key_exists("pagination", $context))) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array())));
        // line 2
        $context["base_url"] = (((isset($context["base_url"]) || array_key_exists("base_url", $context))) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
    <ul class=\"pagination\">
        ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 8
                echo "            ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "            <li>
                <a class=\"prev\" rel=\"prev\" href=\"";
                // line 10
                echo ($context["url"] ?? null);
                echo "\">
                    <i class=\"fa fa-long-arrow-left\"></i>
                </a>
            </li>
        ";
            } else {
                // line 15
                echo "            <li>
                <span>
                    <i class=\"fa fa-long-arrow-left\"></i>
                </span>
            </li>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 23
                echo "
            ";
                // line 24
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 25
                    echo "                <li>
                    <span>";
                    // line 26
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 28
$context["paginate"], "isInDelta", array())) {
                    // line 29
                    echo "                ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 30
                    echo "                <li>
                    <a href=\"";
                    // line 31
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 33
$context["paginate"], "isDeltaBorder", array())) {
                    // line 34
                    echo "                <li class=\"gap\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 38
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 41
                echo "            ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 42
                echo "            <li>
                <a class=\"next\" rel=\"next\" href=\"";
                // line 43
                echo ($context["url"] ?? null);
                echo "\">
                    <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </li>
        ";
            } else {
                // line 48
                echo "            <li>
                <span>
                    <i class=\"fa fa-long-arrow-right\"></i>
                </span>
            </li>
        ";
            }
            // line 54
            echo "    </ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  123 => 48,  115 => 43,  112 => 42,  109 => 41,  106 => 40,  99 => 38,  93 => 34,  91 => 33,  84 => 31,  81 => 30,  78 => 29,  76 => 28,  71 => 26,  68 => 25,  66 => 24,  63 => 23,  59 => 22,  56 => 21,  48 => 15,  40 => 10,  37 => 9,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/pagination.html.twig", "/Users/curtis/Documents/GitHub/dharavi.org/user/themes/hola/templates/partials/pagination.html.twig");
    }
}
