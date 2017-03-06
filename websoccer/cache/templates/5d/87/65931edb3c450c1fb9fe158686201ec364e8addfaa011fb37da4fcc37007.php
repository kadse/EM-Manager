<?php

/* views/formation.twig */
class __TwigTemplate_5d8765931edb3c450c1fb9fe158686201ec364e8addfaa011fb37da4fcc37007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/formation_base.twig");

        $this->blocks = array(
            'formation_setup' => array($this, 'block_formation_setup'),
            'form_footer' => array($this, 'block_form_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/formation_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formation_setup($context, array $blocks = array())
    {
        // line 4
        echo "\t<form method=\"post\" class=\"form-inline\">
\t\t<input type=\"hidden\" name=\"page\" value=\"formation\" />
\t\t<input type=\"hidden\" name=\"templateid\" value=\"\" />
\t\t<input type=\"hidden\" name=\"nationalteam\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nationalteam"), "method"), "html", null, true);
        echo "\" />
\t\t
\t\t<select class=\"input-xxlarge\" name=\"id\">
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nextMatches"]) ? $context["nextMatches"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nextMatch"]) {
            // line 11
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextMatch"]) ? $context["nextMatch"] : null), "match_id"), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method") == $this->getAttribute((isset($context["nextMatch"]) ? $context["nextMatch"] : null), "match_id"))) {
                echo " selected";
            }
            echo ">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => $this->getAttribute((isset($context["nextMatch"]) ? $context["nextMatch"] : null), "match_date")), "method"), "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextMatch"]) ? $context["nextMatch"] : null), "match_home_name"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextMatch"]) ? $context["nextMatch"] : null), "match_guest_name"), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nextMatch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</select>
\t\t
\t\t<button type=\"submit\" class=\"btn\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_choose"), "method"), "html", null, true);
        echo "</button>
\t</form>

\t<div class=\"row\">
\t\t<div class=\"span4\">
\t\t\t<p><em>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_date")), "method"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("matchtype_" . $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_type"))), "method"), "html", null, true);
        echo "</em></p>
\t\t\t<p><strong><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_home_id"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_home_name"), "html", null, true);
        echo "</a> - <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_guest_id"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_guest_name"), "html", null, true);
        echo "</a></strong></p>
\t\t</div>
\t\t<div class=\"span3\">
\t\t\t<p><em>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_previous_matches"), "method"), "html", null, true);
        echo "</em></p>
\t\t\t";
        // line 25
        if ((array_key_exists("previous_matches", $context) && (twig_length_filter($this->env, (isset($context["previous_matches"]) ? $context["previous_matches"] : null)) > 0))) {
            // line 26
            echo "\t\t\t<table class=\"table\">
\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["previous_matches"]) ? $context["previous_matches"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["previousMatch"]) {
                // line 28
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "home_team"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "guest_team"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "home_goals"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "guest_goals"), "html", null, true);
                echo "</a></td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousMatch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</table>
\t\t\t";
        } else {
            // line 35
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_no_previous_matches"), "method"), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 37
        echo "\t\t</div>
\t</div>

\t<form method=\"post\" class=\"form-inline\">
\t\t<input type=\"hidden\" name=\"page\" value=\"formation\" />
\t\t<input type=\"hidden\" id=\"preselect\" name=\"preselect\" value=\"\" />
\t\t<input type=\"hidden\" name=\"nationalteam\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nationalteam"), "method"), "html", null, true);
        echo "\" />
\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_id"), "html", null, true);
        echo "\" />
\t\t
\t\t<h4>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_setup_title"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t<select class=\"input-mini wstooltip\" name=\"formation_defense\" title=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_position_defense"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t</select>
\t\t<span>-</span>
\t\t<select class=\"input-mini wstooltip\" name=\"formation_defensemidfield\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_DM"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "dm") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</select>
\t\t<span>-</span>
\t\t<select class=\"input-mini wstooltip\" name=\"formation_midfield\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_position_midfield"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t</select>
\t\t<span>-</span>
\t\t<select class=\"input-mini wstooltip\" name=\"formation_offensivemidfield\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_OM"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "om") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t</select>
\t\t<span>-</span>
\t\t<select class=\"input-mini wstooltip\" name=\"formation_forward\" title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_MS"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 74
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "striker") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t</select>
\t\t<span>-</span>
\t\t<select class=\"input-mini wstooltip\" name=\"formation_outsideforward\" title=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_position_outsideforward"), "method"), "html", null, true);
        echo "\">
\t\t\t";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 0, 1 => 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 80
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "outsideforward") == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t</select>
\t\t
\t\t<div class=\"btn-group\">
\t\t\t<button type=\"submit\" class=\"btn\" name=\"buttonSetupChange\" value=\"1\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_setup_button"), "method"), "html", null, true);
        echo "</button>
\t\t\t
\t\t\t";
        // line 87
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
            // line 88
            echo "\t\t\t<button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t<span class=\"caret\"></span>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"#\" class=\"formationSetupSubmit\" data-preselect=\"strongest\"><i class=\"icon-rocket\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_setup_strongest"), "method"), "html", null, true);
            echo "</a></li>
\t\t\t\t<li><a href=\"#\" class=\"formationSetupSubmit\" data-preselect=\"freshest\"><i class=\"icon-heart\"></i> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_setup_freshest"), "method"), "html", null, true);
            echo "</a></li>
\t\t\t\t<li><a href=\"#\" class=\"formationSetupSubmit\" data-preselect=\"motivated\"><i class=\"icon-smile\"></i> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_setup_motivated"), "method"), "html", null, true);
            echo "</a></li>
\t\t\t</ul>
\t\t\t";
        }
        // line 97
        echo "\t\t</div>
\t\t";
        // line 98
        if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "formation_max_templates"), "method") > 0) && (!$this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nationalteam"), "method")))) {
            // line 99
            echo "\t\t<a class=\"btn ajaxLink\" href=\"#templatesModal\" role=\"button\" data-toggle=\"modal\"
\t\t\tdata-ajaxblock=\"formation_templates\" data-ajaxtarget=\"formation-templates-content\"
\t\t\tdata-ajaxquerystr=\"id=";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_id"), "html", null, true);
            echo "\"><i class=\"icon-folder-open-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_load_from_template"), "method"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 103
        echo "\t\t<a class=\"btn clearAllBtn\" href=\"#\"><i class=\"icon-trash\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_clearall"), "method"), "html", null, true);
        echo "</a>
\t</form>
\t
\t<div id=\"templatesModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" 
\t\taria-labelledby=\"templatesModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t    <h3 id=\"templatesModalLabel\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_load_from_template"), "method"), "html", null, true);
        echo "</h3>
\t  </div>
\t  <div class=\"modal-body\">
\t\t<div id=\"formation-templates-content\">...</div>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_close"), "method"), "html", null, true);
        echo "</a>
\t  </div>
\t</div>
";
    }

    // line 122
    public function block_form_footer($context, array $blocks = array())
    {
        // line 123
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_freekickplayer"), "method"), "html", null, true);
        echo "</h4>

<select name=\"freekickplayer\" id=\"freekickplayer\" class=\"span4\" data-preselect=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "freekickplayer"), "html", null, true);
        echo "\">
\t<option value=\"\"></option>
</select>

<h4>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_offensive_title"), "method"), "html", null, true);
        echo "</h4>

";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formelements"]) ? $context["formelements"] : null), "slider", array(0 => "offensive", 1 => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "offensive")), "method"), "html", null, true);
        echo "

\t<div class=\"form-horizontal\" style=\"margin-top: 10px\">
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"longpasses\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_option_longpasses"), "method"), "html", null, true);
        echo " <i class=\"icon-question-sign wstooltip\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_option_longpasses_help"), "method"), "html", null, true);
        echo "\"></i></label>
\t\t\t<div class=\"controls\">
\t\t\t\t<div class=\"make-switch\" 
\t\t\t\t\tdata-on-label=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_switch_on"), "method"), "html", null, true);
        echo "\" data-off-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_switch_off"), "method"), "html", null, true);
        echo "\" 
\t\t\t\t\tdata-on=\"success\" data-off=\"warning\">
\t\t\t\t\t<input type=\"checkbox\" id=\"longpasses\" name=\"longpasses\" value=\"1\"";
        // line 140
        if (($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "longpasses", array(), "any", true, true) && $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "longpasses"))) {
            echo " checked";
        }
        echo ">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"counterattacks\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_option_counterattacks"), "method"), "html", null, true);
        echo " <i class=\"icon-question-sign wstooltip\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_option_counterattacks_help"), "method"), "html", null, true);
        echo "\"></i></label>
\t\t\t<div class=\"controls\">
\t\t\t\t<div class=\"make-switch\" 
\t\t\t\t\tdata-on-label=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_switch_on"), "method"), "html", null, true);
        echo "\" data-off-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_switch_off"), "method"), "html", null, true);
        echo "\" 
\t\t\t\t\tdata-on=\"success\" data-off=\"warning\">
\t\t\t\t\t<input type=\"checkbox\" id=\"counterattacks\" name=\"counterattacks\" value=\"1\"";
        // line 151
        if (($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "counterattacks", array(), "any", true, true) && $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "counterattacks"))) {
            echo " checked";
        }
        echo ">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 155
        if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "formation_max_templates"), "method") > 0) && (!$this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nationalteam"), "method")))) {
            // line 156
            echo "\t\t<hr/>
\t\t";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formelements"]) ? $context["formelements"] : null), "textfield", array(0 => "templatename", 1 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_templatename_field"), "method"), 2 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "templatename"), "method"), 3 => false, 4 => (isset($context["validationMsg"]) ? $context["validationMsg"] : null), 5 => "text", 6 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_templatename_field_help"), "method")), "method"), "html", null, true);
            echo "
\t\t";
        }
        // line 159
        echo "\t</div>

\t<div class=\"form-actions\" style=\"text-align: center\">
\t\t";
        // line 162
        if ($this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_id", array(), "any", true, true)) {
            // line 163
            echo "\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_save"), "method"), "html", null, true);
            echo "</button>
\t\t";
        } else {
            // line 165
            echo "\t\t<a href=\"#disabledSave\" id=\"disabledSave\" class=\"btn btn-primary disabled\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_save"), "method"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 167
        echo "\t\t
\t\t<a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getPageId", array(), "method")), "method"), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_reset"), "method"), "html", null, true);
        echo "</a>
\t</div>
\t<input type=\"hidden\" name=\"setup\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "dm"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "om"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "striker"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "outsideforward"), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" name=\"page\" value=\"formation\"/>
\t<input type=\"hidden\" name=\"action\" value=\"save-formation\"/>
\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next_match"]) ? $context["next_match"] : null), "match_id"), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" name=\"nationalteam\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nationalteam"), "method"), "html", null, true);
        echo "\" />
\t
";
    }

    public function getTemplateName()
    {
        return "views/formation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 174,  530 => 173,  514 => 170,  507 => 168,  504 => 167,  498 => 165,  492 => 163,  490 => 162,  485 => 159,  480 => 157,  477 => 156,  475 => 155,  466 => 151,  459 => 149,  451 => 146,  440 => 140,  433 => 138,  425 => 135,  418 => 131,  413 => 129,  406 => 125,  400 => 123,  397 => 122,  389 => 116,  380 => 110,  369 => 103,  362 => 101,  358 => 99,  356 => 98,  353 => 97,  347 => 94,  343 => 93,  339 => 92,  333 => 88,  331 => 87,  326 => 85,  321 => 82,  306 => 80,  302 => 79,  298 => 78,  294 => 76,  279 => 74,  275 => 73,  271 => 72,  267 => 70,  252 => 68,  248 => 67,  244 => 66,  240 => 64,  225 => 62,  221 => 61,  217 => 60,  213 => 58,  198 => 56,  194 => 55,  190 => 54,  186 => 52,  171 => 50,  167 => 49,  163 => 48,  158 => 46,  153 => 44,  149 => 43,  141 => 37,  135 => 35,  131 => 33,  118 => 30,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  84 => 21,  78 => 20,  70 => 15,  66 => 13,  47 => 11,  43 => 10,  37 => 7,  32 => 4,  29 => 3,);
    }
}
