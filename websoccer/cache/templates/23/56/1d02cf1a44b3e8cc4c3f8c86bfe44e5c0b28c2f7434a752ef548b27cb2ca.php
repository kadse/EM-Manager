<?php

/* views/youth_team.twig */
class __TwigTemplate_23561d02cf1a44b3e8cc4c3f8c86bfe44e5c0b28c2f7434a752ef548b27cb2ca extends Twig_Template
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
        // line 2
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 3
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_scouting_enabled"), "method")) {
            // line 12
            echo "<p><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youth-scouting"), "method"), "html", null, true);
            echo "\" class=\"btn\"><i class=\"icon-search\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scout_button"), "method"), "html", null, true);
            echo "</a></p>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
            // line 16
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_age"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_gehalt"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_matches"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t
\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 31
                echo "\t\t\t
\t\t\t";
                // line 32
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Torwart")) {
                    // line 33
                    echo "\t\t\t\t";
                    $context["positionId"] = "goaly";
                    // line 34
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Abwehr")) {
                    // line 35
                    echo "\t\t\t\t";
                    $context["positionId"] = "defense";
                    // line 36
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Mittelfeld")) {
                    // line 37
                    echo "\t\t\t\t";
                    $context["positionId"] = "midfield";
                    // line 38
                    echo "\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t";
                    $context["positionId"] = "striker";
                    // line 40
                    echo "\t\t\t";
                }
                // line 41
                echo "\t\t\t
\t\t\t";
                // line 42
                if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation"))), "method")) {
                    // line 43
                    echo "\t\t\t\t";
                    $context["countryLabel"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation"))), "method");
                    // line 44
                    echo "\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t";
                    $context["countryLabel"] = $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation");
                    // line 46
                    echo "\t\t\t";
                }
                // line 47
                echo "\t\t
\t\t
\t\t\t<tr";
                // line 49
                if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee")) {
                    echo " class=\"info\"";
                }
                echo ">
\t\t\t\t<td style=\"text-align: center\">
\t\t\t\t\t<img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . (isset($context["positionId"]) ? $context["positionId"] : null)) . ".png")), "method"), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t<br>
\t\t\t\t\t<small>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "</small>
\t\t\t\t</td>
\t\t\t\t<td><p>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 57
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation_flagfile")) > 0)) {
                    // line 58
                    echo "\t\t\t\t\t\t";
                    $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation_flagfile")) . ".png")), "method");
                    // line 59
                    echo "\t\t\t\t\t\t";
                    if ((isset($context["nationImg"]) ? $context["nationImg"] : null)) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["nationImg"]) ? $context["nationImg"] : null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                        echo "\" />";
                    } else {
                        echo "(";
                        echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                        echo ")";
                    }
                    // line 60
                    echo "\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee") > 0)) {
                    // line 62
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "remove-youthplayer-from-market", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\ttitle=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_removefrommarket"), "method"), "html", null, true);
                    echo "\"><i class=\"icon-share darkIcon\"></i></a>
\t\t\t\t\t";
                }
                // line 64
                echo "</p>
\t\t\t\t
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_action_button"), "method"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 70
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age") >= $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_min_age_professional"), "method"))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youthplayer-makeprofessional", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                    echo "\"><i class=\"icon-briefcase\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_make_professional"), "method"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 75
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee") == 0)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youthplayer-sell", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                    echo "\"><i class=\"icon-share\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_sell"), "method"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youthplayer-fire", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-remove-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_fire"), "method"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age") < $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_min_age_professional"), "method"))) {
                    echo " *";
                }
                echo "</td>
\t\t\t\t<td>";
                // line 84
                echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "noBottomMargin");
                echo "
\t\t\t\t\t";
                // line 85
                $context["changeLabel"] = $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_last_change");
                // line 86
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_last_change") > 0)) {
                    // line 87
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-success";
                    // line 88
                    echo "\t\t\t\t\t\t";
                    $context["changeLabel"] = ("+" . (isset($context["changeLabel"]) ? $context["changeLabel"] : null));
                    // line 89
                    echo "\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_last_change") < 0)) {
                    // line 90
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "badge-important";
                    // line 91
                    echo "\t\t\t\t\t";
                } else {
                    // line 92
                    echo "\t\t\t\t\t\t";
                    $context["changeCssClass"] = "";
                    // line 93
                    echo "\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t<span class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["changeCssClass"]) ? $context["changeCssClass"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_strength_last_change"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["changeLabel"]) ? $context["changeLabel"] : null), "html", null, true);
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 96
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength") * $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_salary_per_strength"), "method")), 0, ",", " "), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_matches"), "html", null, true);
                echo " <a href=\"#statistics";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                echo "\" data-toggle=\"collapse\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_showstatistics_tooltip"), "method"), "html", null, true);
                echo "\"><i class=\"icon-zoom-in darkIcon\"></i></a>
\t\t\t\t\t<div id=\"statistics";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                echo "\" class=\"collapse\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_goals"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_goals"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_assists"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_assists"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_yellow"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_yellow"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_yellow_red"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_yellow_red"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_red"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_red"), "html", null, true);
                echo "</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t
\t\t</tbody>
\t</table>
\t
\t<p>* <em>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_min_age_info", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_min_age_professional"), "method")), "method"), "html", null, true);
            echo "</em></p>

";
        } else {
            // line 126
            echo "\t";
            echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_no_players"), "method"), "", "info");
            echo "
";
        }
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/youth_team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 128,  395 => 126,  389 => 123,  383 => 119,  371 => 113,  367 => 112,  362 => 110,  358 => 109,  353 => 107,  349 => 106,  344 => 104,  340 => 103,  335 => 101,  331 => 100,  326 => 98,  318 => 97,  312 => 96,  302 => 94,  299 => 93,  296 => 92,  293 => 91,  290 => 90,  287 => 89,  284 => 88,  281 => 87,  278 => 86,  276 => 85,  272 => 84,  265 => 83,  256 => 79,  253 => 78,  245 => 76,  243 => 75,  240 => 74,  231 => 71,  229 => 70,  223 => 67,  218 => 64,  213 => 63,  208 => 62,  205 => 61,  202 => 60,  187 => 59,  184 => 58,  182 => 57,  176 => 56,  171 => 54,  164 => 52,  160 => 51,  153 => 49,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  135 => 42,  132 => 41,  129 => 40,  126 => 39,  123 => 38,  120 => 37,  117 => 36,  114 => 35,  111 => 34,  108 => 33,  106 => 32,  103 => 31,  99 => 30,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  69 => 20,  63 => 16,  61 => 15,  58 => 14,  50 => 12,  48 => 11,  45 => 10,  42 => 9,  36 => 6,  33 => 5,  28 => 3,  26 => 2,);
    }
}
