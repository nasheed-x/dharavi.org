<?php

/* modular/works.html.twig */
class __TwigTemplate_bb61aba461e23da574f4326b8c80178757238fdfd7f3ae18e279a3a6f566e1ea extends Twig_Template
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
         class=\"s-works ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionBackground", array());
        echo " target-section\">

    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full\">
            <h3>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
        echo "</h3>
            <h1>";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo ".</h1>

            <p class=\"lead\">";
        // line 9
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", array()));
        echo "</p>
        </div>
    </div>

    <div class=\"row masonry-wrap\">
        <div class=\"masonry\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"gallery-wrapper\">
                            <div class=\"item-folio__thumb\">
                                <a href=\"";
            // line 23
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array(), "method");
            echo "\" class=\"thumb-link\" title=\"The Beetle Car\" data-size=\"1050x700\">
                                    <img src=\"";
            // line 24
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
            echo "\"
                                         srcset=\"";
            // line 25
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "imageSize1", array()), array(), "array"), "url", array());
            echo " 1x, ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "imageSize2", array()), array(), "array"), "url", array());
            echo " 2x\" alt=\"\">
                                    <span class=\"shadow-overlay\"></span>
                                </a>
                            </div>

                            <div class=\"item-folio__text\">
                                <h3 class=\"item-folio__title\">
                                    ";
            // line 32
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                                </h3>
                                <p class=\"item-folio__cat\">
                                    ";
            // line 35
            echo $this->getAttribute($context["item"], "category", array());
            echo "
                                </p>
                            </div>

                            <div class=\"item-folio__caption\">
                                <p>";
            // line 40
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                            </div>
                        </div>

                        <a href=\"";
            // line 44
            echo $this->getAttribute($context["item"], "link", array());
            echo "\" target=\"_blank\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"fa fa-link\"></i>
                        </a>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </div>
    </div> <!-- end masonry -->

</section> <!-- end works -->

<div aria-hidden=\"true\" class=\"pswp\" role=\"dialog\" tabindex=\"-1\">

    <div class=\"pswp__bg\"></div>
    <div class=\"pswp__scroll-wrap\">

        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>

        <div class=\"pswp__ui pswp__ui--hidden\">
            <div class=\"pswp__top-bar\">
                <div class=\"pswp__counter\"></div>
                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>
                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div>
            </div>
            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->

<div id=\"preloader\">
    <div id=\"loader\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  107 => 44,  100 => 40,  92 => 35,  86 => 32,  74 => 25,  70 => 24,  66 => 23,  58 => 17,  54 => 16,  44 => 9,  39 => 7,  35 => 6,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/works.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/themes/hola/templates/modular/works.html.twig");
    }
}
