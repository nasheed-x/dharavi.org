<?php

/* modular/contact.html.twig */
class __TwigTemplate_28cabc60f0b82c7777d4f916821347b8b300a78eac51bce3456f49df33479632 extends Twig_Template
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
         class=\"s-contact target-section\"
         style=\"background: url(";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), array(), "array"), "url", array());
        echo ");background-position: center;\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "opacity", array());
        echo ";\"></div>

    <div class=\"row narrow section-intro\">
        <div class=\"col-full\">
            <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "smallTitle", array());
        echo "</h3>
            <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

            <p class=\"lead\">";
        // line 12
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", array()));
        echo "</p>
        </div>
    </div>

    <div class=\"row contact__main\">
        <div class=\"col-eight tab-full contact__form\">
            ";
        // line 18
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 18)->display($context);
        // line 19
        echo "            <!-- contact-warning -->
            <div class=\"message-warning\">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class=\"message-success\">
                Your message was sent, thank you!<br>
            </div>

        </div>
        <div class=\"col-four tab-full contact__infos\">
            <h4 class=\"h06\">";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "phoneTitle", array());
        echo "</h4>
            <p>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "phonePhone", array());
        echo "<br>
                ";
        // line 33
        echo $this->getAttribute(($context["header"] ?? null), "phoneMobile", array());
        echo "<br>
                ";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "phoneFax", array());
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "emailTitle", array());
        echo "</h4>
            <p>";
        // line 38
        echo twig_replace_filter($this->getAttribute(($context["header"] ?? null), "emailAddress", array()), array("," => "<br>"));
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 41
        echo $this->getAttribute(($context["header"] ?? null), "addressTitle", array());
        echo "</h4>
            <p>
                ";
        // line 43
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["header"] ?? null), "addressDetails", array()));
        echo "
            </p>
        </div>

    </div>

    <script>
        \$(document).ready(function () {
            var form = \$('.contact__main form');
            form.submit(function (e) {
                // prevent form submission
                e.preventDefault();
                // submit the form via Ajax
                \$.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    dataType: 'html',
                    data: form.serialize(),
                    success: function (result) {
                        // Inject the result in the HTML
                        \$('.message-success').show();
                        \$('.message-success').html(result);
                    }
                });
            });
        });
    </script>

</section>
<!-- end s-contact -->";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  103 => 41,  97 => 38,  93 => 37,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  61 => 19,  59 => 18,  50 => 12,  45 => 10,  41 => 9,  34 => 5,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/contact.html.twig", "/Users/shreyamanjrekar/Documents/GitHub/dharavi.org/user/themes/hola/templates/modular/contact.html.twig");
    }
}
