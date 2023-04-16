<?php

/* blog.html.twig */
class __TwigTemplate_6754a5a54ab7533a70fa266327304183a395f50bef2e9c0b047e451335028147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))), "method");
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", array(0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null))), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 10
                echo "
            <section class=\"page-header page-hero\" style=\"background-image:url(";
                // line 11
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "media", array()), $this->getAttribute($this->getAttribute($context["child"], "header", array()), "hero_image", array()), array(), "array"), "url", array(), "method");
                echo ")\">

                <div class=\"row page-header__content\">
                    <article class=\"col-full\">

                        <div class=\"page-header__info\">
                            <div class=\"page-header__cat\">
                                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 19
                    echo "                                    <a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                    echo "/category:";
                    echo $context["category"];
                    echo "\">";
                    echo $context["category"];
                    echo "</a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                            </div>
                            <div class=\"page-header__date\">
                                ";
                // line 23
                echo twig_date_format_filter($this->env, $this->getAttribute($context["child"], "date", array()), "F d, Y");
                echo "
                            </div>
                        </div>

                        <h1 class=\"page-header__title\">
                            <a href=\"";
                // line 28
                echo $this->getAttribute($context["child"], "url", array());
                echo "\" title=\"\">
                                ";
                // line 29
                echo $this->getAttribute($context["child"], "title", array());
                echo "
                            </a>
                        </h1>
                        <p>";
                // line 32
                echo twig_slice($this->env, $this->getAttribute($context["child"], "content", array()), 0, 150);
                echo "...</p>
                        <p>
                            <a href=\"";
                // line 34
                echo $this->getAttribute($context["child"], "url", array());
                echo "\" class=\"btn btn--stroke page-header__btn\">Read More</a>
                        </p>
                    </article>
                </div>

            </section> <!-- end highlighted-post -->

        ";
            }
            // line 42
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    <div class=\"blog-content-wrap\">
        <div class=\"row blog-content\">
            <div class=\"col-full\">
                <div class=\"blog-list block-1-2 block-tab-full\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 49
            echo "                        ";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 50
                echo "                            <article class=\"col-block\">

                                <div class=\"blog-date\">
                                    <a href=\"";
                // line 53
                echo $this->getAttribute($context["child"], "url", array());
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["child"], "date", array()), "F d, Y");
                echo "</a>
                                </div>

                                <h2 class=\"h01\">
                                    <a href=\"";
                // line 57
                echo $this->getAttribute($context["child"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["child"], "title", array());
                echo "</a>
                                </h2>
                                <p>
                                    ";
                // line 60
                echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", array()), "lead", array()), 0.3);
                echo "
                                </p>

                                <div class=\"blog-cat\">
                                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", array()), "taxonomy", array()), "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 65
                    echo "                                        <a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                    echo "/category:";
                    echo $context["category"];
                    echo "\">";
                    echo $context["category"];
                    echo "</a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
                                </div>

                            </article>
                        ";
            }
            // line 72
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div>
                ";
        // line 74
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 75
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 75)->display(array_merge($context, array("base_url" => $this->getAttribute(            // line 76
($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(            // line 77
($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 79
            echo "                ";
        }
        // line 80
        echo "            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 80,  247 => 79,  245 => 77,  244 => 76,  242 => 75,  240 => 74,  237 => 73,  223 => 72,  216 => 67,  203 => 65,  199 => 64,  192 => 60,  184 => 57,  175 => 53,  170 => 50,  167 => 49,  150 => 48,  143 => 43,  129 => 42,  118 => 34,  113 => 32,  107 => 29,  103 => 28,  95 => 23,  91 => 21,  78 => 19,  74 => 18,  64 => 11,  61 => 10,  58 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/blog.html.twig");
    }
}
