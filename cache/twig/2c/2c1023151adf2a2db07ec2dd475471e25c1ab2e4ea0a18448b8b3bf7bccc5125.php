<?php

/* partials/navigation.html.twig */
class __TwigTemplate_e494009aac6ae72b791ecb6de86e49d9af22fcc74c8a88b51593378dc339b696 extends Twig_Template
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
        // line 29
        echo "<ul class=\"header-nav\">
    ";
        // line 32
        echo "    ";
        $context["home"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => "/"), "method");
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["home"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "        ";
            $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
            // line 35
            echo "
        ";
            // line 36
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($context["module"], "redirect", array()));
            echo "

        ";
            // line 38
            if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "visible", array())) {
                // line 39
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "slug", array()) == "home") && $this->getAttribute($context["module"], "modular_link", array()))) {
                    // line 40
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a class=\"smoothscroll\"
                       href=\"#";
                    // line 42
                    if ($this->getAttribute($context["module"], "redirect", array())) {
                        echo $this->getAttribute($context["module"], "redirect", array());
                    } else {
                        echo $this->getAttribute($context["module"], "modular_link", array());
                    }
                    echo "\">";
                    echo $this->getAttribute($context["module"], "item_name", array());
                    echo "</a>
                </li>
            ";
                } elseif ((($this->getAttribute(                // line 44
($context["page"] ?? null), "slug", array()) == "home") &&  !$this->getAttribute($context["module"], "modular_link", array()))) {
                    // line 45
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a class=\"smoothscroll\"
                       href=\"#";
                    // line 47
                    if ($this->getAttribute($context["module"], "redirect", array())) {
                        echo $this->getAttribute($context["module"], "redirect", array());
                    } else {
                        echo $this->getAttribute($context["module"], "menu", array());
                    }
                    echo "\">";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a>
                </li>
            ";
                } else {
                    // line 50
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a href=\"";
                    // line 51
                    echo ($context["base_url_absolute"] ?? null);
                    echo "#";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "\">
                        ";
                    // line 52
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "
                    </a>
                </li>
            ";
                }
                // line 56
                echo "        ";
            }
            // line 57
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 60
            echo "        ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
            // line 61
            echo "        <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
            <a href=\"";
            // line 62
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                ";
            // line 63
            if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                // line 64
                echo "                    <i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                echo "\"></i>
                ";
            }
            // line 66
            echo "                ";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("current") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        // line 8
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>
                    ";
                    }
                    // line 10
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                    <span></span>
                </a>
                <ul>
                    ";
                    // line 14
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 18
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 19
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        // line 21
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 27
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
            echo "
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 30,  233 => 27,  225 => 23,  219 => 21,  217 => 20,  213 => 19,  208 => 18,  201 => 14,  193 => 10,  187 => 8,  185 => 7,  181 => 6,  176 => 5,  173 => 4,  170 => 3,  165 => 2,  153 => 1,  148 => 70,  137 => 66,  131 => 64,  129 => 63,  125 => 62,  120 => 61,  117 => 60,  113 => 59,  110 => 58,  104 => 57,  101 => 56,  94 => 52,  88 => 51,  83 => 50,  71 => 47,  65 => 45,  63 => 44,  52 => 42,  46 => 40,  43 => 39,  41 => 38,  36 => 36,  33 => 35,  30 => 34,  25 => 33,  22 => 32,  19 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/navigation.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/partials/navigation.html.twig");
    }
}
