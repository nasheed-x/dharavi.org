<?php

/* item.html.twig */
class __TwigTemplate_468e0ec5598ed2b81805ff342f11353af3ef6868e05e906eeb62913d6d2dddaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <article class=\"blog-single\">

        <!-- page header/blog hero ================================================== -->
        <div class=\"page-header page-header--single page-hero\" style=\"background-image:url(";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array"), "url", array(), "method");
        echo ")\">

            <div class=\"row page-header__content narrow\">
                <article class=\"col-full\">
                    <div class=\"page-header__info\">
                        <div class=\"page-header__cat\">
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                                <a href=\"";
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
        // line 16
        echo "
                        </div>
                    </div>
                    <h1 class=\"page-header__title\">
                        <a href=\"";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\" title=\"\">
                            ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
                        </a>
                    </h1>
                    <ul class=\"page-header__meta\">
                        <li class=\"date\">";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "F d, Y");
        echo "</li>
                        <li class=\"author\">
                            By
                            <span>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "taxonomy", array()), "author", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 30
            echo "                                    ";
            echo $context["author"];
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </span>
                        </li>
                    </ul>

                </article>
            </div>

        </div> <!-- end page-header -->

        <div class=\"row blog-content\">
            <div class=\"col-full blog-content__main\">

                <p class=\"lead\">";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "lead", array());
        echo "</p>

                ";
        // line 46
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

                <p class=\"blog-content__tags\">
                    <span>Post Tags</span>

                    <span class=\"blog-content__tag-list\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "                            <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array(0 => true), "method");
            echo "/tag:";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </span>

                </p>

                <div class=\"blog-content__pagenav\">
                    <div class=\"blog-content__nav\">
                        <div class=\"blog-content__prev\">
                            ";
        // line 62
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 63
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\">
                                    <span>Next Post</span>";
            // line 64
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "title", array());
            echo "</a>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"blog-content__next\">
                            ";
        // line 68
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 69
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\">
                                    <span>Previus Post</span>
                                    ";
            // line 71
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "title", array());
            echo "</a>
                            ";
        }
        // line 73
        echo "                        </div>
                    </div>

                    <div class=\"blog-content__all\">
                        <a href=\"";
        // line 77
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array(), "method");
        echo "\" class=\"btn btn--primary\">
                            View All Post
                        </a>
                    </div>
                </div>

            </div> <!-- end blog-content__main -->
        </div> <!-- end blog-content -->

    </article>

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 77,  183 => 73,  178 => 71,  172 => 69,  170 => 68,  166 => 66,  161 => 64,  156 => 63,  154 => 62,  145 => 55,  132 => 53,  128 => 52,  119 => 46,  114 => 44,  100 => 32,  91 => 30,  87 => 29,  80 => 25,  73 => 21,  69 => 20,  63 => 16,  50 => 14,  46 => 13,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "item.html.twig", "/Users/curtis/Documents/GitHub/dharavi.org/user/themes/hola/templates/item.html.twig");
    }
}
