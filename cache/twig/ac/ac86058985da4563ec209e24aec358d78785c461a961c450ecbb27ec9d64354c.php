<?php

/* forms/default/form.html.twig */
class __TwigTemplate_5b74d6c44a52a860728176fef6eaa0a89d90b173aecc85f805d94d8738ed9c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", array()))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array()), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", array()))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 20
        echo "
";
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            // line 26
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.vendor.js", 1 => array("group" => "bottom", "loading" => "defer")), "method");
            // line 27
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js", 1 => array("group" => "bottom", "loading" => "defer")), "method");
        }
        // line 29
        echo "
";
        // line 30
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 33
($context["uri"] ?? null), "route", array(0 => true), "method")) . "',
        base_url_relative: '") .         // line 34
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 35
($context["config"] ?? null), "system", array()), "param_sep", array())) . "',
        form_nonce: '") . $this->getAttribute(        // line 36
($context["form"] ?? null), "getNonce", array())) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
($context["config"] ?? null), "system", array()), "session", array()), "timeout", array())) . "
    };
    window.GravForm.translations = jQuery.extend({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => array("group" => "bottom")), "method");
        // line 41
        echo "

<form name=\"";
        // line 43
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 44
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 45
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 46
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", array());
            echo "\"";
        }
        // line 47
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 50
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", array())) {
            echo "novalidate";
        }
        // line 51
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 52
        echo ">

  ";
        // line 54
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", array())));
        // line 57
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 58
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 59
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 59)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 60
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
  ";
        // line 62
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 62)->display($context);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 65
        echo "
  ";
        // line 66
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 69
        echo "
  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 71
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 72
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 73
                echo "              <a href=\"";
                echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 75
            echo "          <button
                ";
            // line 76
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 77
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 80
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 81
            echo "
                type=\"";
            // line 82
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 84
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 85
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 87
            echo "            >
                ";
            // line 88
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 90
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 91
                echo "              </a>
          ";
            }
            // line 93
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 94
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
  ";
        // line 96
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 99
        echo "
  ";
        // line 100
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 100)->display($context);
        // line 101
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>

";
        // line 104
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", array()), "dropzone", array()), "enabled", array())) {
            // line 105
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 106
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 106)->display($context);
            // line 107
            echo "</div>
";
        }
    }

    // line 47
    public function block_form_classes($context, array $blocks = array())
    {
        // line 48
        echo "      class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", array());
        echo "\"
      ";
    }

    // line 54
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 64
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 66
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 67
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 77
    public function block_button_classes($context, array $blocks = array())
    {
        // line 78
        echo "                class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", array());
        echo "\"
                ";
    }

    // line 96
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 97
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 97,  397 => 96,  388 => 78,  385 => 77,  378 => 67,  375 => 66,  370 => 64,  365 => 54,  356 => 48,  353 => 47,  347 => 107,  345 => 106,  342 => 105,  340 => 104,  333 => 101,  331 => 100,  328 => 99,  326 => 96,  323 => 95,  309 => 94,  304 => 93,  300 => 91,  298 => 90,  293 => 88,  290 => 87,  284 => 85,  282 => 84,  277 => 82,  274 => 81,  269 => 80,  266 => 77,  260 => 76,  257 => 75,  251 => 73,  248 => 72,  241 => 71,  224 => 70,  221 => 69,  219 => 66,  216 => 65,  214 => 64,  211 => 63,  209 => 62,  206 => 61,  192 => 60,  184 => 59,  181 => 58,  163 => 57,  161 => 56,  158 => 55,  156 => 54,  152 => 52,  147 => 51,  142 => 50,  139 => 47,  133 => 46,  127 => 45,  123 => 44,  119 => 43,  115 => 41,  110 => 37,  108 => 36,  106 => 35,  104 => 34,  102 => 33,  98 => 30,  95 => 29,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/default/form.html.twig", "/Users/nasheed-x/Downloads/dharavi.org/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
