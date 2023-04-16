<?php

/* forms/default/field.html.twig */
class __TwigTemplate_a4a77405e9fc1e5cfa2b0b74957b41bfd1a71a0115a0a8c1b0bf6ac2de7f0663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", array())) . "-") . $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", array()), $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 8
        $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 9
        $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 10
        echo "
";
        // line 11
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 12
            echo "    ";
            $context["autofocus"] = true;
        }
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"";
        echo ((($context["form_field_outer_classes"] ?? null)) ? (($context["form_field_outer_classes"] ?? null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", array());
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 17
        $this->displayBlock('contents', $context, $blocks);
        // line 112
        echo "    </div>
";
    }

    // line 16
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contents($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        if (( !($this->getAttribute(($context["field"] ?? null), "label", array()) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", array()) === false))) {
            // line 19
            echo "                <div class=\"";
            echo ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "labelclasses", array());
            echo "\">
                    <label class=\"";
            // line 20
            echo ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline"));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
                echo "\" ";
            }
            echo " >
                    ";
            // line 21
            $this->displayBlock('label', $context, $blocks);
            // line 38
            echo "                    </label>
                </div>
            ";
        }
        // line 41
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", array());
        echo "\"
                ";
        // line 42
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 47
        echo "            >
                ";
        // line 48
        $this->displayBlock('group', $context, $blocks);
        // line 98
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 99
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 101
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 102
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "description", array())), false);
                echo "
                            ";
            } else {
                // line 104
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "description", array()));
                echo "
                            ";
            }
            // line 106
            echo "                        </span>
                    </div>
                ";
        }
        // line 109
        echo "
            </div>
        ";
    }

    // line 21
    public function block_label($context, array $blocks = array())
    {
        // line 22
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 23
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 24
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))));
                echo "</span>
                            ";
            } else {
                // line 26
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
                echo "</span>
                            ";
            }
            // line 28
            echo "                        ";
        } else {
            // line 29
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 30
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))), "html_attr");
                echo "
                            ";
            } else {
                // line 32
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))))), "html_attr");
                echo "
                            ";
            }
            // line 34
            echo "                        ";
        }
        // line 35
        echo "
                        ";
        // line 36
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 42
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 43
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 44
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 48
    public function block_group($context, array $blocks = array())
    {
        // line 49
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 97
        echo "                ";
    }

    // line 49
    public function block_input($context, array $blocks = array())
    {
        // line 50
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 51
        $this->displayBlock('prepend', $context, $blocks);
        // line 52
        echo "                            <input
                                ";
        // line 54
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
                                value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 57
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 86
        echo "                            />
                            ";
        // line 87
        $this->displayBlock('append', $context, $blocks);
        // line 88
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 89
            echo "                                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                </div>
                            ";
        }
        // line 95
        echo "                        </div>
                    ";
    }

    // line 51
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 57
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 58
        echo "                                    class=\"";
        echo ($context["form_field_input_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", array());
        echo "\"
                                    ";
        // line 59
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 60
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 61
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 62
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array())), "html_attr");
            echo "\"";
        }
        // line 63
        echo "                                    ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 64
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 65
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 66
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", array(), "any", true, true)) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", array());
            echo "\"";
        }
        // line 67
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", array()), array(0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"))) {
            echo "autocapitalize=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocapitalize", array());
            echo "\"";
        }
        // line 68
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", array()), array(0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"))) {
            echo "inputmode=\"";
            echo $this->getAttribute(($context["field"] ?? null), "inputmode", array());
            echo "\"";
        }
        // line 69
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", array()), array(0 => "true", 1 => "false"))) {
            echo "spellcheck=\"";
            echo $this->getAttribute(($context["field"] ?? null), "spellcheck", array());
            echo "\"";
        }
        // line 70
        echo "
                                    ";
        // line 71
        if ($this->getAttribute(($context["field"] ?? null), "attributes", array(), "any", true, true)) {
            // line 72
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 73
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                    ";
        }
        // line 76
        echo "                                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 77
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 78
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 79
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())));
            echo "\" ";
        }
        // line 80
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", array())) {
            // line 81
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", array()));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 82
                echo "                                            data-";
                echo $context["datakey"];
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                    ";
        }
        // line 85
        echo "                                ";
    }

    // line 87
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 87,  471 => 85,  468 => 84,  457 => 82,  452 => 81,  449 => 80,  443 => 79,  436 => 78,  429 => 77,  424 => 76,  421 => 75,  410 => 73,  405 => 72,  403 => 71,  400 => 70,  393 => 69,  386 => 68,  379 => 67,  372 => 66,  367 => 65,  362 => 64,  357 => 63,  350 => 62,  345 => 61,  338 => 60,  332 => 59,  325 => 58,  322 => 57,  317 => 51,  312 => 95,  308 => 93,  299 => 91,  295 => 90,  290 => 89,  287 => 88,  285 => 87,  282 => 86,  279 => 57,  275 => 55,  270 => 54,  267 => 52,  265 => 51,  256 => 50,  253 => 49,  249 => 97,  246 => 49,  243 => 48,  237 => 45,  233 => 44,  228 => 43,  225 => 42,  219 => 36,  216 => 35,  213 => 34,  207 => 32,  201 => 30,  198 => 29,  195 => 28,  187 => 26,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  164 => 109,  159 => 106,  153 => 104,  147 => 102,  145 => 101,  137 => 99,  134 => 98,  132 => 48,  129 => 47,  127 => 42,  120 => 41,  115 => 38,  113 => 21,  103 => 20,  96 => 19,  93 => 18,  90 => 17,  85 => 16,  80 => 112,  78 => 17,  65 => 16,  59 => 15,  56 => 14,  52 => 12,  50 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/default/field.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
