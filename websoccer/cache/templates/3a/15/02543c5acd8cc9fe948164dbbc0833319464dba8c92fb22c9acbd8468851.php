<?php

/* views/training.twig */
class __TwigTemplate_3a1502543c5acd8cc9fe948164dbbc0833319464dba8c92fb22c9acbd8468851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["formelements"] = $this->env->loadTemplate("macros/formelements.twig");
        // line 2
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        // line 3
        $context["pagination"] = $this->env->loadTemplate("macros/paginator.twig");
        // line 4
        $context["profile"] = $this->env->loadTemplate("macros/profileelements.twig");
        // line 5
        $context["premium"] = $this->env->loadTemplate("macros/premium.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 16
        echo "
";
        // line 17
        echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_units_count"), "method"), (isset($context["unitsCount"]) ? $context["unitsCount"] : null));
        echo "

";
        // line 19
        if (((isset($context["lastExecution"]) ? $context["lastExecution"] : null) > 0)) {
            // line 20
            echo "\t";
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_last_execution"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => (isset($context["lastExecution"]) ? $context["lastExecution"] : null)), "method"));
            echo "
";
        }
        // line 22
        echo "
";
        // line 23
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "training_min_hours_between_execution"), "method") > 0)) {
            // line 24
            echo "<p style=\"margin-top: 10px; margin-bottom: 20px;\"><i class=\"icon-info-sign\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_training_note", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "training_min_hours_between_execution"), "method")), "method"), "html", null, true);
            echo "</p>
";
        }
        // line 25
        echo "\t

";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["trainingEffects"]) ? $context["trainingEffects"] : null)) > 0)) {
            // line 29
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_effects_title"), "method"), "html", null, true);
            echo "</h3>
\t
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_technik"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_kondition"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_frische"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_zufriedenheit"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trainingEffects"]) ? $context["trainingEffects"] : null));
            foreach ($context['_seq'] as $context["playerId"] => $context["effect"]) {
                // line 43
                echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . (isset($context["playerId"]) ? $context["playerId"] : null))), "method"), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_navlabel"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "name"), "html", null, true);
                echo "</a></td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 46
                $context["changeLabel"] = $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "technique");
                // line 47
                echo "\t\t\t\t\t";
                if (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) > 0)) {
                    // line 48
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-success";
                    // line 49
                    echo "\t\t\t\t\t\t";
                    $context["changeLabel"] = ("+" . (isset($context["changeLabel"]) ? $context["changeLabel"] : null));
                    // line 50
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) < 0)) {
                    // line 51
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-important";
                    // line 52
                    echo "\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "";
                    // line 54
                    echo "\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t<span class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["changeCssClass"]) ? $context["changeCssClass"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["changeLabel"]) ? $context["changeLabel"] : null), "html", null, true);
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 58
                $context["changeLabel"] = $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "stamina");
                // line 59
                echo "\t\t\t\t\t";
                if (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) > 0)) {
                    // line 60
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-success";
                    // line 61
                    echo "\t\t\t\t\t\t";
                    $context["changeLabel"] = ("+" . (isset($context["changeLabel"]) ? $context["changeLabel"] : null));
                    // line 62
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) < 0)) {
                    // line 63
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-important";
                    // line 64
                    echo "\t\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "";
                    // line 66
                    echo "\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t<span class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["changeCssClass"]) ? $context["changeCssClass"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["changeLabel"]) ? $context["changeLabel"] : null), "html", null, true);
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 70
                $context["changeLabel"] = $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "freshness");
                // line 71
                echo "\t\t\t\t\t";
                if (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) > 0)) {
                    // line 72
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-success";
                    // line 73
                    echo "\t\t\t\t\t\t";
                    $context["changeLabel"] = ("+" . (isset($context["changeLabel"]) ? $context["changeLabel"] : null));
                    // line 74
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) < 0)) {
                    // line 75
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-important";
                    // line 76
                    echo "\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "";
                    // line 78
                    echo "\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t<span class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["changeCssClass"]) ? $context["changeCssClass"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["changeLabel"]) ? $context["changeLabel"] : null), "html", null, true);
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 82
                $context["changeLabel"] = $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "satisfaction");
                // line 83
                echo "\t\t\t\t\t";
                if (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) > 0)) {
                    // line 84
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-success";
                    // line 85
                    echo "\t\t\t\t\t\t";
                    $context["changeLabel"] = ("+" . (isset($context["changeLabel"]) ? $context["changeLabel"] : null));
                    // line 86
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["changeLabel"]) ? $context["changeLabel"] : null) < 0)) {
                    // line 87
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-important";
                    // line 88
                    echo "\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "";
                    // line 90
                    echo "\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t<span class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["changeCssClass"]) ? $context["changeCssClass"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["changeLabel"]) ? $context["changeLabel"] : null), "html", null, true);
                echo "</span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['playerId'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t</tbody>
\t</table>

";
        }
        // line 99
        echo "
";
        // line 101
        if (((!array_key_exists("training_unit", $context)) || (twig_length_filter($this->env, (isset($context["training_unit"]) ? $context["training_unit"] : null)) == 0))) {
            // line 102
            echo "
\t<h3>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_choose_trainer"), "method"), "html", null, true);
            echo "</h3>

\t";
            // line 105
            if ((array_key_exists("trainers", $context) && (twig_length_filter($this->env, (isset($context["trainers"]) ? $context["trainers"] : null)) > 0))) {
                // line 106
                echo "\t
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_name"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t<th>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_salary"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t<th>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_p_technique"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t<th>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_p_stamina"), "method"), "html", null, true);
                echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 117
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["trainers"]) ? $context["trainers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["trainer"]) {
                    // line 118
                    echo "\t\t\t<tr>
\t\t\t\t<td><p>";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "name"), "html", null, true);
                    echo "</p>
\t\t\t\t";
                    // line 120
                    if ($this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "premiumfee")) {
                        // line 121
                        echo "\t\t\t\t\t<p>";
                        echo $context["premium"]->getpremiumbadge($this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "premiumfee"));
                        echo "</p>
\t\t\t\t";
                    }
                    // line 123
                    echo "\t\t\t\t<p><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "trainer-details", 1 => ("id=" . $this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "id"))), "method"), "html", null, true);
                    echo "\" class=\"btn\"><i class=\"icon-hand-right\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_choose"), "method"), "html", null, true);
                    echo "</a></p></td>
\t\t\t\t<td>";
                    // line 124
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "salary"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 125
                    echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "p_technique"));
                    echo "</td>
\t\t\t\t<td>";
                    // line 126
                    echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["trainer"]) ? $context["trainer"] : null), "p_stamina"));
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "\t\t</tbody>
\t</table>
\t
\t";
                // line 132
                echo $context["pagination"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
                echo "
\t
\t";
            } else {
                // line 135
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_no_trainers_available"), "method"), "html", null, true);
                echo "</p>
\t";
            }
            // line 137
            echo "
";
        } else {
            // line 140
            echo "
\t<h3>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_trainer_details"), "method"), "html", null, true);
            echo "</h3>

\t";
            // line 143
            $context["bar_tech"] = $context["statisticelements"]->getprogressbar($this->getAttribute($this->getAttribute((isset($context["training_unit"]) ? $context["training_unit"] : null), "trainer"), "p_technique"));
            // line 144
            echo "\t";
            $context["bar_stamina"] = $context["statisticelements"]->getprogressbar($this->getAttribute($this->getAttribute((isset($context["training_unit"]) ? $context["training_unit"] : null), "trainer"), "p_stamina"));
            // line 145
            echo "\t
\t";
            // line 146
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_name"), "method"), $this->getAttribute($this->getAttribute((isset($context["training_unit"]) ? $context["training_unit"] : null), "trainer"), "name"));
            echo "
\t";
            // line 147
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_p_technique"), "method"), (isset($context["bar_tech"]) ? $context["bar_tech"] : null), true);
            echo "
\t";
            // line 148
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_trainer_p_stamina"), "method"), (isset($context["bar_stamina"]) ? $context["bar_stamina"] : null), true);
            echo "
\t
\t<form class=\"form-horizontal\" method=\"post\">
\t\t<fieldset>
\t    \t<legend>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_training_title"), "method"), "html", null, true);
            echo "</legend>
\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"focus\">
\t\t\t\t\t<strong>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_focus"), "method"), "html", null, true);
            echo "</strong>
\t\t\t\t</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<select id=\"focus\" name=\"focus\">
  \t\t\t\t\t\t<option value=\"TE\"";
            // line 160
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "focus"), "method") == "TE")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_focus_technique"), "method"), "html", null, true);
            echo "</option>
  \t\t\t\t\t\t<option value=\"STA\"";
            // line 161
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "focus"), "method") == "STA")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_focus_stamina"), "method"), "html", null, true);
            echo "</option>
  \t\t\t\t\t\t<option value=\"MOT\"";
            // line 162
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "focus"), "method") == "MOT")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_focus_motivation"), "method"), "html", null, true);
            echo "</option>
  \t\t\t\t\t\t<option value=\"FR\"";
            // line 163
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "focus"), "method") == "FR")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_focus_regeneration"), "method"), "html", null, true);
            echo "</option>
  \t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"intensity\">
\t\t\t\t\t<strong>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_intensity"), "method"), "html", null, true);
            echo "</strong>
\t\t\t\t</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t";
            // line 173
            echo $context["formelements"]->getslider("intensity", ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "intensity"), "method") > 0)) ? ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "intensity"), "method")) : (90)));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</fieldset>
\t\t<div class=\"form-actions\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "training_execute_button"), "method"), "html", null, true);
            echo "</button>
\t\t\t<a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "office"), "method"), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_cancel"), "method"), "html", null, true);
            echo "</a>
\t\t</div>
\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training_unit"]) ? $context["training_unit"] : null), "id"), "html", null, true);
            echo "\"/>
\t\t<input type=\"hidden\" name=\"page\" value=\"training\"/>
\t\t<input type=\"hidden\" name=\"action\" value=\"execute-training\"/>
\t</form>

";
        }
    }

    public function getTemplateName()
    {
        return "views/training.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 182,  493 => 180,  489 => 179,  480 => 173,  474 => 170,  460 => 163,  452 => 162,  444 => 161,  436 => 160,  429 => 156,  422 => 152,  415 => 148,  411 => 147,  407 => 146,  404 => 145,  401 => 144,  399 => 143,  394 => 141,  391 => 140,  387 => 137,  381 => 135,  375 => 132,  370 => 129,  361 => 126,  357 => 125,  351 => 124,  344 => 123,  338 => 121,  336 => 120,  332 => 119,  329 => 118,  325 => 117,  318 => 113,  314 => 112,  310 => 111,  306 => 110,  300 => 106,  298 => 105,  293 => 103,  290 => 102,  288 => 101,  285 => 99,  279 => 95,  266 => 91,  263 => 90,  260 => 89,  257 => 88,  254 => 87,  251 => 86,  248 => 85,  245 => 84,  242 => 83,  240 => 82,  231 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  216 => 74,  213 => 73,  210 => 72,  207 => 71,  205 => 70,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  175 => 60,  172 => 59,  170 => 58,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  140 => 48,  137 => 47,  135 => 46,  126 => 44,  123 => 43,  119 => 42,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  87 => 29,  85 => 28,  81 => 25,  75 => 24,  73 => 23,  70 => 22,  64 => 20,  62 => 19,  57 => 17,  54 => 16,  51 => 14,  48 => 13,  42 => 10,  39 => 9,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }
}
