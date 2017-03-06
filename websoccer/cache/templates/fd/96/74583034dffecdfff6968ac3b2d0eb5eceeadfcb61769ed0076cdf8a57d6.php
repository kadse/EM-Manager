<?php

/* views/youth_marketplace.twig */
class __TwigTemplate_fd9674583034dffecdfff6968ac3b2d0eb5eceeadfcb61769ed0076cdf8a57d6 extends Twig_Template
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
        // line 4
        $context["pagination"] = $this->env->loadTemplate("macros/paginator.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youth-marketplace_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <form class=\"form-inline\">
  \t\t<label for=\"position\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfermarket_filter_by_position"), "method"), "html", null, true);
        echo "</label>
  \t\t<select name=\"position\" id=\"position\">
  \t\t\t<option></option>
  \t\t\t<option value=\"Torwart\"";
        // line 16
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "position"), "method") == "Torwart")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Torwart"), "method"), "html", null, true);
        echo "</option>
  \t\t\t<option value=\"Abwehr\"";
        // line 17
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "position"), "method") == "Abwehr")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Abwehr"), "method"), "html", null, true);
        echo "</option>
  \t\t\t<option value=\"Mittelfeld\"";
        // line 18
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "position"), "method") == "Mittelfeld")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Mittelfeld"), "method"), "html", null, true);
        echo "</option>
  \t\t\t<option value=\"Sturm\"";
        // line 19
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "position"), "method") == "Sturm")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Sturm"), "method"), "html", null, true);
        echo "</option>
  \t\t</select>
\t  \t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_display"), "method"), "html", null, true);
        echo "</button>
\t  \t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youth-marketplace"), "method"), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_reset"), "method"), "html", null, true);
        echo "</a>
\t  \t
\t  \t<input type=\"hidden\" name=\"page\" value=\"youth-marketplace\" />
\t</form>

";
        // line 27
        if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
            // line 28
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_team_id"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_matches"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_transfer_fee"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t
\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 43
                echo "\t\t\t
\t\t\t";
                // line 44
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Torwart")) {
                    // line 45
                    echo "\t\t\t\t";
                    $context["positionId"] = "goaly";
                    // line 46
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Abwehr")) {
                    // line 47
                    echo "\t\t\t\t";
                    $context["positionId"] = "defense";
                    // line 48
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Mittelfeld")) {
                    // line 49
                    echo "\t\t\t\t";
                    $context["positionId"] = "midfield";
                    // line 50
                    echo "\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t";
                    $context["positionId"] = "striker";
                    // line 52
                    echo "\t\t\t";
                }
                // line 53
                echo "\t\t\t
\t\t\t";
                // line 54
                if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation"))), "method")) {
                    // line 55
                    echo "\t\t\t\t";
                    $context["countryLabel"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation"))), "method");
                    // line 56
                    echo "\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t";
                    $context["countryLabel"] = $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation");
                    // line 58
                    echo "\t\t\t";
                }
                // line 59
                echo "\t\t
\t\t\t<tr>
\t\t\t\t<td style=\"text-align: center\">
\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . (isset($context["positionId"]) ? $context["positionId"] : null)) . ".png")), "method"), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t<br>
\t\t\t\t\t<small>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "</small>
\t\t\t\t</td>
\t\t\t\t<td><p>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                echo ")
\t\t\t\t\t";
                // line 68
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation_flagfile")) > 0)) {
                    // line 69
                    echo "\t\t\t\t\t\t";
                    $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "nation_flagfile")) . ".png")), "method");
                    // line 70
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
                    // line 71
                    echo "\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId") == $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))) {
                    // line 73
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "remove-youthplayer-from-market", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"))), "method"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\ttitle=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_removefrommarket"), "method"), "html", null, true);
                    echo "\"><i class=\"icon-share darkIcon\"></i></a>
\t\t\t\t\t";
                }
                // line 75
                echo "</p>
\t\t\t\t\t
\t\t\t\t\t";
                // line 77
                if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId") != $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))) {
                    // line 78
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youthplayer-buy", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-small\"><i class=\"icon-shopping-cart\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_buy"), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 82
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_picture"))) {
                    // line 83
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/club/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_picture"), "html", null, true);
                    echo "\" style=\"max-width: 20px\"/>
\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_name"), "html", null, true);
                echo "</a>
\t\t\t\t\t
\t\t\t\t\t";
                // line 87
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_id") > 0)) {
                    // line 88
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                    // line 89
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_picture")) > 0)) {
                        // line 90
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_id"))), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_picture"), "html", null, true);
                        echo "\" style=\"width: 20px; height: 20px\"/></a>
\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t<small><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "user_nick"), "html", null, true);
                    echo "</a></small>
\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t</td>
\t\t\t\t<td>";
                // line 95
                echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "noBottomMargin");
                echo "</td>
\t\t\t\t<td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_matches"), "html", null, true);
                echo " <a href=\"#statistics";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"), "html", null, true);
                echo "\" data-toggle=\"collapse\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_showstatistics_tooltip"), "method"), "html", null, true);
                echo "\"><i class=\"icon-zoom-in darkIcon\"></i></a>
\t\t\t\t\t<div id=\"statistics";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"), "html", null, true);
                echo "\" class=\"collapse\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_goals"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_goals"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_assists"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_assists"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_yellow"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_yellow"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_yellow_red"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_yellow_red"), "html", null, true);
                echo "</dd>
\t\t\t\t\t\t
\t\t\t\t\t\t<dt>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_st_cards_red"), "method"), "html", null, true);
                echo "</dt>
\t\t\t\t\t\t<dd>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_red"), "html", null, true);
                echo "</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 117
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee"), 0, ",", " "), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                echo "<br>
\t\t\t\t\t<small><em>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_gehalt"), "method"), "html", null, true);
                echo ":</em><br>
\t\t\t\t\t";
                // line 119
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength") * $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_salary_per_strength"), "method")), 0, ",", " "), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                echo "</small>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t
\t\t</tbody>
\t</table>
\t
\t";
            // line 127
            echo $context["pagination"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
            echo "
\t
";
        } else {
            // line 130
            echo "\t";
            echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthmarketplace_no_players"), "method"), "", "info");
            echo "
";
        }
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/youth_marketplace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 132,  418 => 130,  412 => 127,  406 => 123,  394 => 119,  390 => 118,  384 => 117,  376 => 112,  372 => 111,  367 => 109,  363 => 108,  358 => 106,  354 => 105,  349 => 103,  345 => 102,  340 => 100,  336 => 99,  331 => 97,  323 => 96,  319 => 95,  316 => 94,  308 => 92,  300 => 90,  298 => 89,  295 => 88,  293 => 87,  285 => 85,  277 => 83,  275 => 82,  271 => 80,  263 => 78,  261 => 77,  257 => 75,  252 => 74,  247 => 73,  244 => 72,  241 => 71,  226 => 70,  223 => 69,  221 => 68,  213 => 67,  208 => 65,  201 => 63,  197 => 62,  192 => 59,  189 => 58,  186 => 57,  183 => 56,  180 => 55,  178 => 54,  175 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  149 => 44,  146 => 43,  142 => 42,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  112 => 32,  106 => 28,  104 => 27,  94 => 22,  90 => 21,  81 => 19,  73 => 18,  65 => 17,  57 => 16,  51 => 13,  47 => 11,  44 => 10,  38 => 7,  35 => 6,  30 => 4,  28 => 3,  26 => 2,);
    }
}
