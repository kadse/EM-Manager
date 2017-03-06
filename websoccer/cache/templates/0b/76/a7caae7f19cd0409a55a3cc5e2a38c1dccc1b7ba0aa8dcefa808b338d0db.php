<?php

/* macros/playerlists.twig */
class __TwigTemplate_0b76a7caae7f19cd0409a55a3cc5e2a38c1dccc1b7ba0aa8dcefa808b338d0db extends Twig_Template
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
        echo "
";
        // line 43
        echo "
";
        // line 143
        echo "
";
    }

    // line 2
    public function getteamlistItem($_player = null)
    {
        $context = $this->env->mergeGlobals(array(
            "player" => $_player,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t";
            $context["playerlists"] = $this;
            // line 4
            echo "
\t\t\t<tr>
\t\t\t\t<td><img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position")) . ".png")), "method"), "html", null, true);
            echo "\"
\t\t\t\t\talt=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
            echo "\" />
\t\t\t\t\t";
            // line 8
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")) > 0)) {
                echo "<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                echo "</abbr>";
            }
            // line 9
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second")) > 0)) {
                echo "/ <abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second"))), "method"), "html", null, true);
                echo "</abbr>";
            }
            // line 10
            echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym")) > 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym"), "html", null, true);
                echo "\" ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 12
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "captain"), "method") == $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))) {
                // line 13
                echo "\t\t\t\t\t\t<i class=\"icon-group wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_captain_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "unsellable")) {
                // line 16
                echo "\t\t\t\t\t\t<i class=\"icon-eye-close\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_unsellable"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") > 0)) {
                // line 19
                echo "\t\t\t\t\t\t<i class=\"icon-star-empty\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            } elseif ((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") > 0) && $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "lending_enabled"), "method"))) {
                // line 21
                echo "\t\t\t\t\t\t<i class=\"icon-share-alt\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_lendable"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t</td>
\t\t\t\t
\t\t\t\t";
            // line 25
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                // line 26
                echo "\t\t\t\t<td ";
                echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"));
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "html", null, true);
                echo "</strong></td>
\t\t\t\t<td ";
                // line 27
                echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic"));
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic"), "html", null, true);
                echo "</td>
\t\t\t\t<td ";
                // line 28
                echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness"));
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness"), "html", null, true);
                echo "</td>
\t\t\t\t<td ";
                // line 29
                echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina"));
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina"), "html", null, true);
                echo "</td>
\t\t\t\t<td ";
                // line 30
                echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction"));
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction"), "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t
\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 35
            if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured") > 0)) {
                // line 36
                echo "\t\t\t\t\t<i class=\"icon-medkit\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_injured"), "method"), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured"), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked") > 0)) {
                // line 38
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/blocked_cards.png"), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked"), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t</td>
\t\t\t</tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getmatchResultPlayers($_match = null, $_players = null)
    {
        $context = $this->env->mergeGlobals(array(
            "match" => $_match,
            "players" => $_players,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "\t";
            if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
                // line 46
                echo "\t\t";
                $context["ageSum"] = 0;
                // line 47
                echo "\t\t";
                $context["strengthSum"] = 0;
                // line 48
                echo "\t\t";
                $context["gradeSum"] = 0;
                // line 49
                echo "\t\t<table class=\"table table-striped table-condensed\">
\t\t\t<colgroup>
\t\t\t\t<col style=\"width: 40px\" />
\t\t\t\t<col />
\t\t\t\t<col style=\"width: 70px\" />
\t\t\t</colgroup>
\t\t\t<thead>
\t\t\t\t<th><abbr title=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t<th>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_name"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t<th>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade"), "method"), "html", null, true);
                echo " <i class=\"icon-question-sign wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade_helptext"), "method"), "html", null, true);
                echo "\"></i></th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 61
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 62
                    echo "\t\t\t\t";
                    $context["ageSum"] = ((isset($context["ageSum"]) ? $context["ageSum"] : null) + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"));
                    // line 63
                    echo "\t\t\t\t";
                    $context["strengthSum"] = ((isset($context["strengthSum"]) ? $context["strengthSum"] : null) + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"));
                    // line 64
                    echo "\t\t\t\t";
                    $context["gradeSum"] = ((isset($context["gradeSum"]) ? $context["gradeSum"] : null) + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "grade"));
                    // line 65
                    echo "\t\t\t\t<tr>
\t\t\t\t\t";
                    // line 66
                    if ((!twig_test_empty($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")))) {
                        // line 67
                        echo "\t\t\t\t\t<td title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t<td title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), 0, 2)), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                    echo "\">";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym")) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstName"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastName"), "html", null, true);
                    }
                    echo "</a>
\t\t\t\t\t
\t\t\t\t\t";
                    // line 73
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "yellowCards") > 0)) {
                        // line 74
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/card_yellow.png"), "method"), "html", null, true);
                        echo "\" style=\"width: 16px; height: 16px\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                        echo "\" />
\t\t\t\t\t
\t\t\t\t\t\t";
                        // line 76
                        if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "yellowCards") > 1)) {
                            // line 77
                            echo "\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/card_red.png"), "method"), "html", null, true);
                            echo "\" style=\"width: 16px; height: 16px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 81
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "redCard") > 0)) {
                        // line 82
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/card_red.png"), "method"), "html", null, true);
                        echo "\" width=\"16\" height=\"16\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 85
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "goals") > 0)) {
                        // line 86
                        echo "\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "goals")));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 87
                            echo "\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/goal_scorer.png"), "method"), "html", null, true);
                            echo "\" style=\"width: 16px; height: 15px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 91
                    if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "assists")) {
                        // line 92
                        echo "\t\t\t\t\t<span title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_assists"), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t";
                        // line 93
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "assists")));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 94
                            echo "\t\t\t\t\t\t<i class=\"icon-star\"></i>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 96
                        echo "\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 99
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "injured") > 0)) {
                        // line 100
                        echo "\t\t\t\t\t\t<i class=\"icon-medkit\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_injured"), "method"), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 103
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "playstatus") == "Ausgewechselt")) {
                        // line 104
                        echo "\t\t\t\t\t<span class=\"minutesPlayed\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_substitute_out"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-arrow-down\"></i>";
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "minutesPlayed") + 1), "html", null, true);
                        echo "'</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "minutesPlayed") < $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_minutes"))) {
                        // line 106
                        echo "\t\t\t\t\t<span class=\"minutesPlayed\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_substitute_in"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-arrow-up\"></i>";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_minutes") - $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "minutesPlayed")) + 1), "html", null, true);
                        echo "'</span>
\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 109
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "is_best_player_of_day", array(), "any", true, true) && $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "is_best_player_of_day"))) {
                        // line 110
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "teamoftheday", 1 => ((((("leagueid=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_league_id")) . "&seasonid=") . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_season_id")) . "&matchday=") . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_matchday"))), "method"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "teamoftheday_matchreport_tooltip"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-heart-empty darkIcon\"></i></a>
\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t<div id=\"playerstatistics";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\" class=\"collapse\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_shoots"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "shoots"), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_ballcontacts_player"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "ballcontacts"), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_successfulpasses"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "passes_successed"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "passes_successed") + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "passes_failed")), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_tackles_player"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "wontackles"), "html", null, true);
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "losttackles"))) {
                        echo "/";
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "losttackles") + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "wontackles")), "html", null, true);
                    }
                    echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"#playerstatistics";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\" data-toggle=\"collapse\"><i class=\"icon-zoom-in darkIcon\"></i></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "grade"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<p><strong>&#216; ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["gradeSum"]) ? $context["gradeSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 2), "html", null, true);
                echo "</p>
\t\t<p><strong>&#216; ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_age"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["ageSum"]) ? $context["ageSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 2), "html", null, true);
                echo "</p>
\t\t";
                // line 136
                if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                    // line 137
                    echo "\t\t<p><strong>&#216; ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_staerke"), "method"), "html", null, true);
                    echo ":</strong> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["strengthSum"]) ? $context["strengthSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 0), "html", null, true);
                    echo "%</p>
\t\t";
                }
                // line 139
                echo "\t";
            } else {
                // line 140
                echo "\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_noplayersset"), "method"), "html", null, true);
                echo "</p>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function getstrengthClass($_strengthValue = null)
    {
        $context = $this->env->mergeGlobals(array(
            "strengthValue" => $_strengthValue,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 145
            echo "
";
            // line 146
            if (((isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 80)) {
                // line 147
                echo "\t";
                $context["strength_status"] = "success";
            } elseif (((isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 50)) {
                // line 149
                echo "\t";
                $context["strength_status"] = "info";
            } elseif (((isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 30)) {
                // line 151
                echo "\t";
                $context["strength_status"] = "warning";
            } else {
                // line 153
                echo "\t";
                $context["strength_status"] = "danger";
            }
            // line 155
            echo "
 class=\"strength_";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["strength_status"]) ? $context["strength_status"] : null), "html", null, true);
            echo "\"
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/playerlists.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 156,  589 => 155,  585 => 153,  581 => 151,  577 => 149,  573 => 147,  571 => 146,  568 => 145,  557 => 144,  542 => 140,  539 => 139,  531 => 137,  529 => 136,  523 => 135,  517 => 134,  512 => 131,  501 => 128,  490 => 124,  479 => 121,  475 => 120,  470 => 118,  466 => 117,  461 => 115,  451 => 112,  441 => 109,  438 => 108,  430 => 106,  422 => 104,  420 => 103,  417 => 102,  411 => 100,  406 => 98,  402 => 96,  395 => 94,  386 => 92,  384 => 91,  381 => 90,  378 => 89,  365 => 87,  360 => 86,  358 => 85,  345 => 82,  343 => 81,  340 => 80,  337 => 79,  327 => 77,  325 => 76,  313 => 73,  299 => 71,  283 => 67,  281 => 66,  278 => 65,  275 => 64,  272 => 63,  269 => 62,  265 => 61,  257 => 58,  253 => 57,  247 => 56,  238 => 49,  235 => 48,  232 => 47,  229 => 46,  226 => 45,  214 => 44,  201 => 40,  189 => 38,  181 => 36,  179 => 35,  162 => 30,  154 => 29,  138 => 27,  129 => 26,  127 => 25,  123 => 23,  117 => 21,  111 => 19,  108 => 18,  102 => 16,  99 => 15,  91 => 12,  78 => 11,  75 => 10,  66 => 9,  58 => 8,  52 => 7,  44 => 4,  41 => 3,  30 => 2,  25 => 143,  22 => 43,  19 => 1,  514 => 167,  508 => 165,  496 => 158,  486 => 123,  480 => 153,  471 => 149,  468 => 148,  462 => 147,  457 => 114,  449 => 144,  447 => 143,  443 => 110,  433 => 139,  431 => 138,  425 => 137,  421 => 136,  418 => 135,  409 => 99,  403 => 130,  397 => 129,  391 => 93,  385 => 127,  379 => 126,  373 => 125,  367 => 124,  361 => 123,  355 => 84,  351 => 120,  349 => 119,  344 => 116,  341 => 115,  334 => 111,  328 => 110,  323 => 107,  317 => 105,  315 => 74,  310 => 102,  302 => 99,  296 => 96,  291 => 69,  289 => 94,  284 => 91,  276 => 89,  274 => 88,  271 => 87,  263 => 85,  261 => 84,  258 => 83,  250 => 81,  248 => 80,  245 => 79,  241 => 77,  233 => 75,  231 => 74,  224 => 72,  219 => 71,  211 => 69,  208 => 68,  206 => 67,  200 => 64,  197 => 63,  195 => 57,  191 => 55,  185 => 53,  182 => 52,  174 => 33,  171 => 32,  166 => 47,  161 => 46,  158 => 45,  153 => 43,  148 => 42,  146 => 28,  133 => 40,  130 => 39,  122 => 37,  120 => 36,  114 => 35,  110 => 34,  103 => 33,  100 => 32,  95 => 31,  93 => 13,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  67 => 21,  65 => 20,  60 => 18,  54 => 17,  48 => 6,  46 => 12,  43 => 11,  40 => 10,  34 => 7,  31 => 6,  26 => 4,);
    }
}
