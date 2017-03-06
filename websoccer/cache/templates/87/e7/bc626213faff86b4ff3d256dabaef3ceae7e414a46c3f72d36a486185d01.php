<?php

/* macros/formelements.twig */
class __TwigTemplate_87e7bc626213faff86b4ff3d256dabaef3ceae7e414a46c3f72d36a486185d01 extends Twig_Template
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
        // line 23
        echo "
";
        // line 46
        echo "
";
        // line 58
        echo "
";
        // line 79
        echo "
";
        // line 91
        echo "
";
        // line 101
        echo "
";
    }

    // line 1
    public function gettextfield($_fieldId = null, $_label = null, $_value = null, $_required = false, $_errormsg = null, $_type = "text", $_helptext = null, $_disabled = false)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "label" => $_label,
            "value" => $_value,
            "required" => $_required,
            "errormsg" => $_errormsg,
            "type" => $_type,
            "helptext" => $_helptext,
            "disabled" => $_disabled,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 4
                echo "\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
            } else {
                // line 6
                echo "\t";
                $context["error"] = "";
            }
            // line 8
            echo "<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t<label class=\"control-label\" for=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t";
            // line 10
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 11
                echo "\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t";
            } else {
                // line 13
                echo "\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t";
            }
            // line 15
            echo "\t</label>
\t<div class=\"controls\">
\t\t<input type=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["type"]) ? $context["type"] : null) == "number")) {
                echo " class=\"input-small\"";
            }
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\"";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " required";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                echo " disabled";
            }
            echo ">
\t\t";
            // line 18
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 19
            echo "\t\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 20
            echo "\t</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getautocomplete($_fieldId = null, $_label = null, $_value = null, $_required = false, $_errormsg = null, $_ajaxblock = null, $_helptext = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "label" => $_label,
            "value" => $_value,
            "required" => $_required,
            "errormsg" => $_errormsg,
            "ajaxblock" => $_ajaxblock,
            "helptext" => $_helptext,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "
";
            // line 26
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 27
                echo "\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
            } else {
                // line 29
                echo "\t";
                $context["error"] = "";
            }
            // line 31
            echo "<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t<label class=\"control-label\" for=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t";
            // line 33
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 34
                echo "\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t";
            } else {
                // line 36
                echo "\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t";
            }
            // line 38
            echo "\t</label>
\t<div class=\"controls\">
\t\t<input type=\"text\" id=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" class=\"autocomplete\" autocomplete=\"off\" data-provide=\"typeahead\" data-ajaxblock=\"";
            echo twig_escape_filter($this->env, (isset($context["ajaxblock"]) ? $context["ajaxblock"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\"";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " required";
            }
            echo ">
\t\t";
            // line 41
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 42
            echo "\t\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 43
            echo "\t</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getcheckbox($_fieldId = null, $_label = null, $_value = null, $_colspan = false, $_errormsg = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "label" => $_label,
            "value" => $_value,
            "colspan" => $_colspan,
            "errormsg" => $_errormsg,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : null)) > 0)) {
                echo " error";
            }
            echo "\"\">
\t";
            // line 49
            if (((isset($context["colspan"]) ? $context["colspan"] : null) == false)) {
                echo "<div class=\"controls\">";
            }
            // line 50
            echo "\t
\t    <label class=\"checkbox\">
\t      <input type=\"checkbox\" id=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"1\"";
            if (((isset($context["value"]) ? $context["value"] : null) == 1)) {
                echo " checked";
            }
            echo "> ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
\t    </label>\t
\t
\t";
            // line 55
            if (((isset($context["colspan"]) ? $context["colspan"] : null) == false)) {
                echo "</div>";
            }
            // line 56
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function gettextarea($_fieldId = null, $_label = null, $_value = null, $_required = false, $_errormsg = null, $_helptext = null, $_rows = 10)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "label" => $_label,
            "value" => $_value,
            "required" => $_required,
            "errormsg" => $_errormsg,
            "helptext" => $_helptext,
            "rows" => $_rows,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "
";
            // line 61
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 62
                echo "\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
            } else {
                // line 64
                echo "\t";
                $context["error"] = "";
            }
            // line 66
            echo "<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t<label for=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t";
            // line 68
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 69
                echo "\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t";
            } else {
                // line 71
                echo "\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t";
            }
            // line 73
            echo "\t</label>
\t<textarea id=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "\" class=\"span5\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
\t";
            // line 75
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 76
            echo "\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 77
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getreadonly($_label = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "
<div class=\"control-group\">
\t<label class=\"control-label\">
\t\t";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t</label>
\t<div class=\"controls\">
\t\t<span class=\"input-large uneditable-input\">";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</span>
\t</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getslider($_fieldId = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "  <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" class=\"span6 slider\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" 
  \tdata-slider-min=\"1\" data-slider-max=\"100\" 
  \tdata-slider-step=\"1\" 
  \tdata-slider-value=\"";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" 
  \tdata-slider-orientation=\"horizontal\" 
  \tdata-slider-selection=\"before\" />
  \t<span>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "unit_percent"), "method"), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getteamPlayerSelection($_fieldId = null, $_label = null, $_selectedPlayer = null, $_positionsAndPlayers = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $_fieldId,
            "label" => $_label,
            "selectedPlayer" => $_selectedPlayer,
            "positionsAndPlayers" => $_positionsAndPlayers,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "
<div class=\"control-group\">
\t<label class=\"control-label\" for=\"";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t</label>
\t<div class=\"controls\">
\t\t<select name=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t\t<option></option>
\t\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["positionsAndPlayers"]) ? $context["positionsAndPlayers"] : null));
            foreach ($context['_seq'] as $context["position"] => $context["players"]) {
                // line 112
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["position"]) ? $context["position"] : null))), "method"), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 113
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfermarket") != "1")) {
                        // line 114
                        echo "\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "\" ";
                        if (((isset($context["selectedPlayer"]) ? $context["selectedPlayer"] : null) == $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
                        echo " ";
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym")) > 0)) {
                            echo "&quot;";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym"), "html", null, true);
                            echo "&quot; ";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")) > 0)) {
                            echo " (";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                            echo ")";
                        }
                        echo "</option>
\t\t\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t</optgroup>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['position'], $context['players'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t</select>
\t</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/formelements.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 118,  559 => 116,  531 => 114,  526 => 113,  521 => 112,  517 => 111,  510 => 109,  504 => 106,  500 => 105,  496 => 103,  482 => 102,  469 => 99,  463 => 96,  452 => 93,  440 => 92,  425 => 87,  419 => 84,  414 => 81,  402 => 80,  390 => 77,  383 => 76,  377 => 75,  367 => 74,  364 => 73,  358 => 71,  352 => 69,  350 => 68,  346 => 67,  339 => 66,  335 => 64,  331 => 62,  329 => 61,  326 => 60,  309 => 59,  297 => 56,  293 => 55,  279 => 52,  275 => 50,  271 => 49,  264 => 48,  249 => 47,  236 => 43,  229 => 42,  223 => 41,  207 => 40,  203 => 38,  197 => 36,  191 => 34,  189 => 33,  185 => 32,  178 => 31,  174 => 29,  170 => 27,  168 => 26,  165 => 25,  148 => 24,  135 => 20,  128 => 19,  122 => 18,  99 => 17,  89 => 13,  83 => 11,  81 => 10,  77 => 9,  66 => 6,  60 => 3,  57 => 2,  39 => 1,  28 => 79,  25 => 58,  22 => 46,  19 => 23,  100 => 35,  98 => 34,  95 => 15,  87 => 31,  85 => 30,  76 => 24,  70 => 8,  65 => 19,  62 => 4,  56 => 16,  50 => 14,  48 => 13,  43 => 10,  40 => 9,  34 => 101,  31 => 91,  26 => 1,);
    }
}
