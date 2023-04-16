<?php

/* modular/blog.html.twig */
class __TwigTemplate_d955eb8a8ac371073cf466d263617fc9769eacb5a61bc0eaac85863d88bdb86d extends Twig_Template
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 3
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))), "method");
        // line 4
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", array(0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null))), true);
        // line 5
        echo "
<!-- blog ================================================== -->
<section id=\"";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-blog ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full\">
            <h3>";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
        echo "</h3>
            <h1>";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
            <p class=\"lead\">";
        // line 14
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", array()));
        echo "</p>
        </div>
    </div>

    <div class=\"row blog-content\">
        <div class=\"col-full\">

            <div class=\"blog-list block-1-2 block-tab-full\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 23
            echo "
                    <article class=\"col-block\">

                        <div class=\"blog-date\">
                            <a href=\"";
            // line 27
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "F d, Y");
            echo "</a>
                        </div>

                        <h2 class=\"h01\">
                            <a href=\"";
            // line 31
            echo $this->getAttribute($context["page"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "title", array());
            echo "</a>
                        </h2>
                        <p>
                            ";
            // line 34
            echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", array()), "lead", array()), 0.3);
            echo "
                        </p>

                        <div class=\"blog-cat\">
                            <a href=\"";
            // line 38
            echo $this->getAttribute($context["page"], "categoryLink", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "postCategory", array());
            echo "</a>
                        </div>

                    </article>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div> <!-- end blog-list -->

        </div> <!-- end col-full -->
    </div> <!-- end blog-content -->
    
</section> <!-- end s-blog -->";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  99 => 38,  92 => 34,  84 => 31,  75 => 27,  69 => 23,  65 => 22,  54 => 14,  50 => 13,  46 => 12,  39 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/blog.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/modular/blog.html.twig");
    }
}
