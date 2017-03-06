<?php

/* views/team-details.twig */
class __TwigTemplate_68144855b0cb2837965ff11d038138ef0ec9b880360b119fb8b59d31274c0d2a extends Twig_Template
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
        $context["profile"] = $this->env->loadTemplate("macros/profileelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_name"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "
<p style=\"font-size: 20px; margin-top: -15px\">
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["strengthlevel"]) {
            // line 12
            echo "\t<i class=\"icon-star";
            if (((30 + ((isset($context["strengthlevel"]) ? $context["strengthlevel"] : null) * 10)) > $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_strength"))) {
                echo "-empty";
            }
            echo "\"></i>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strengthlevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>

";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_logo")) > 0)) {
            // line 17
            echo "<div style=\"text-align: center; margin-bottom: 10px;\">
<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
            echo "/uploads/club/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_logo"), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"max-width: 120px; max-height: 120px\">
</div>
";
        }
        // line 21
        echo "
<ul class=\"nav nav-tabs\" id=\"teamTab\">
  <li class=\"active\"><a href=\"#general\" data-toggle=\"tab\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_tab_general"), "method"), "html", null, true);
        echo "</a></li>
  ";
        // line 24
        if ((!$this->getAttribute((isset($context["team"]) ? $context["team"] : null), "is_nationalteam"))) {
            echo "<li><a href=\"#statistic\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_tab_statistic"), "method"), "html", null, true);
            echo "</a></li>";
        }
        // line 25
        echo "  <li><a href=\"#results\" data-toggle=\"tab\" class=\"ajaxLink\"
  \tdata-ajaxtarget=\"resultslist\" data-ajaxblock=\"team-results\" data-ajaxquerystr=\"teamid=";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "results_tab_latest_results"), "method"), "html", null, true);
        echo "</a></li>
  
  <li><a href=\"#players\" data-toggle=\"tab\"
  \tdata-ajaxtarget=\"playerslist\" data-ajaxblock=\"teamplayers\" data-ajaxquerystr=\"teamid=";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_id"), "html", null, true);
        if ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "is_nationalteam")) {
            echo "&nationalteam=1";
        }
        if ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "captain_id")) {
            echo "&captain=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "captain_id"), "html", null, true);
        }
        echo "\" class=\"ajaxLink\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_tab_players"), "method"), "html", null, true);
        echo "</a></li>
  
  ";
        // line 31
        if ((!$this->getAttribute((isset($context["team"]) ? $context["team"] : null), "is_nationalteam"))) {
            // line 32
            echo "\t  ";
            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_enabled"), "method")) {
                // line 33
                echo "\t  <li><a href=\"#youthplayers\" data-toggle=\"tab\"
\t  \tdata-ajaxtarget=\"youthplayerslist\" data-ajaxblock=\"youthplayers_of_team\" data-ajaxquerystr=\"teamid=";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_id"), "html", null, true);
                echo "\" class=\"ajaxLink\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_tab_youthplayers"), "method"), "html", null, true);
                echo "</a></li>
\t  ";
            }
            // line 36
            echo "\t
\t  ";
            // line 37
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method") || $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transferoffers_enabled"), "method"))) {
                // line 38
                echo "\t  <li><a href=\"#transfers\" data-toggle=\"tab\" class=\"ajaxLink\"
\t  \tdata-ajaxtarget=\"transferslist\" data-ajaxblock=\"teamtransfers\" data-ajaxquerystr=\"teamid=";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfers_tab"), "method"), "html", null, true);
                echo "</a></li>
\t  ";
            }
            // line 41
            echo "  ";
        }
        // line 42
        echo "  <li><a href=\"#victories\" data-toggle=\"tab\" class=\"ajaxLink\"
  \tdata-ajaxtarget=\"historycontent\" data-ajaxblock=\"team-history\" data-ajaxquerystr=\"teamid=";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_tab_victories"), "method"), "html", null, true);
        echo "</a></li>
</ul>
 
<div class=\"tab-content\">
  <div class=\"tab-pane active\" id=\"general\">
  
  ";
        // line 49
        if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_league_id") > 0)) {
            // line 50
            echo "\t";
            $context["league"] = (((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "league", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_league_id"))), "method")) . "\">") . twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_league_name"))) . "</a>");
            // line 51
            echo "  ";
        } else {
            // line 52
            echo "  \t";
            $context["league"] = "-";
            // line 53
            echo "  ";
        }
        // line 54
        echo "  
  ";
        // line 55
        if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_user_id") > 0)) {
            // line 56
            echo "\t";
            $context["manager"] = (((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_user_id"))), "method")) . "\">") . twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_user_name"))) . "</a>");
            // line 57
            echo "
\t";
            // line 58
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_picture")) > 0)) {
                // line 59
                echo "\t\t";
                $context["manager"] = ((((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_user_id"))), "method")) . "\"><img src=\"") . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_picture")) . "\" style=\"width: 20px; height: 20px\"/></a> ") . (isset($context["manager"]) ? $context["manager"] : null));
                // line 60
                echo "\t";
            }
            // line 61
            echo "\t
\t";
            // line 62
            if ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "interimmanager")) {
                // line 63
                echo "\t\t";
                $context["manager"] = ((((isset($context["manager"]) ? $context["manager"] : null) . "<br/><em>") . $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_interimmanager"), "method")) . "</em>");
                // line 64
                echo "\t";
            }
            // line 65
            echo "  ";
        } else {
            // line 66
            echo "  \t";
            $context["manager"] = "-";
            // line 67
            echo "  ";
        }
        // line 68
        echo "  
  ";
        // line 69
        if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_deputyuser_id") > 0)) {
            // line 70
            echo "\t";
            $context["deputy"] = (((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_deputyuser_id"))), "method")) . "\">") . twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_deputyuser_name"))) . "</a>");
            // line 71
            echo "
\t";
            // line 72
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_picture")) > 0)) {
                // line 73
                echo "\t\t";
                $context["deputy"] = ((((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_deputyuser_id"))), "method")) . "\"><img src=\"") . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "deputyuser_picture")) . "\" style=\"width: 20px; height: 20px\"/></a> ") . (isset($context["deputy"]) ? $context["deputy"] : null));
                // line 74
                echo "\t";
            }
            // line 75
            echo "  ";
        }
        // line 76
        echo "  
  ";
        // line 77
        if (($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "stadium_id", array(), "any", true, true) && ($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "stadium_id") > 0))) {
            // line 78
            echo "  \t";
            $context["capacity"] = (((($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "places_stands") + $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "places_seats")) + $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "places_stands_grand")) + $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "places_seats_grand")) + $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "places_vip"));
            // line 79
            echo "\t";
            $context["stadiumLabel"] = ((($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "name") . " (") . twig_number_format_filter($this->env, (isset($context["capacity"]) ? $context["capacity"] : null), 0, ",", " ")) . ")");
            // line 80
            echo "  ";
        } else {
            // line 81
            echo "  \t";
            $context["stadiumLabel"] = "-";
            // line 82
            echo "  ";
        }
        // line 83
        echo "  
  ";
        // line 84
        echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_kurz"), "method"), $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_short"));
        echo "
  ";
        // line 85
        echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_liga_id"), "method"), (isset($context["league"]) ? $context["league"] : null), true);
        echo "
  ";
        // line 86
        echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_manager"), "method"), (isset($context["manager"]) ? $context["manager"] : null), true);
        echo "
  ";
        // line 87
        if (array_key_exists("deputy", $context)) {
            // line 88
            echo "  \t";
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_user_id_actual"), "method"), (isset($context["deputy"]) ? $context["deputy"] : null), true);
            echo "
  ";
        }
        // line 90
        echo "  
  ";
        // line 91
        if ((!$this->getAttribute((isset($context["team"]) ? $context["team"] : null), "is_nationalteam"))) {
            // line 92
            echo "\t  ";
            if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_min_target_rank") > 0)) {
                // line 93
                echo "\t  \t";
                echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_min_target_rank"), "method"), $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_season_place", 1 => $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_min_target_rank")), "method"));
                echo "
\t  ";
            }
            // line 95
            echo "\t  
\t  ";
            // line 96
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_stadion_id"), "method"), (isset($context["stadiumLabel"]) ? $context["stadiumLabel"] : null), true);
            echo "
\t  ";
            // line 97
            if ((($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "stadium_id", array(), "any", true, true) && ($this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "stadium_id") > 0)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "picture")) > 0))) {
                // line 98
                echo "\t\t<div style=\"text-align: center; margin: 10px;\">
\t\t<img src=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/uploads/stadium/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stadium"]) ? $context["stadium"] : null), "picture"), "html", null, true);
                echo "\" class=\"img-rounded\">
\t\t</div>
\t  ";
            }
            // line 102
            echo "\t
\t\t";
            // line 103
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_sponsor_name")) > 0)) {
                echo "\t
\t\t\t";
                // line 104
                echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_sponsor_id"), "method"), $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_sponsor_name"));
                echo "
\t\t\t";
                // line 105
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_sponsor_picture")) > 0)) {
                    // line 106
                    echo "\t\t\t\t<div style=\"text-align: center; margin: 10px;\">
\t\t\t\t<img src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/sponsor/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_sponsor_picture"), "html", null, true);
                    echo "\" class=\"img-rounded\">
\t\t\t\t</div>
\t\t\t";
                }
                // line 110
                echo "\t\t";
            }
            // line 111
            echo "\t\t";
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player"), "method"), $this->getAttribute((isset($context["playerfacts"]) ? $context["playerfacts"] : null), "numberOfPlayers"));
            echo "
\t\t";
            // line 112
            echo $context["profile"]->getinfofield(("&empty; " . $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_age"), "method")), twig_round($this->getAttribute((isset($context["playerfacts"]) ? $context["playerfacts"] : null), "avgAge"), 2), true);
            echo "
\t\t";
            // line 113
            echo $context["profile"]->getinfofield(("&sum; " . $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_marktwert"), "method")), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["playerfacts"]) ? $context["playerfacts"] : null), "sumMarketValue"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")), true);
            echo "
\t\t";
            // line 114
            echo $context["profile"]->getinfofield(("&empty; " . $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_marktwert"), "method")), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["playerfacts"]) ? $context["playerfacts"] : null), "avgMarketValue"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")), true);
            echo "
  ";
        }
        // line 116
        echo "  </div>
  
  <div class=\"tab-pane\" id=\"statistic\">
  
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h4>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_season"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_matches"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_matches"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_goals"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_goals"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_againsts"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_againsts"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_wins"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_wins"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_losses"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_losses"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_draws"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_draws"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_score"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_season_score"), "html", null, true);
        echo "</dd>
\t\t\t\t</dl>
\t\t
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<h4>";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_total"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_matches"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_matches"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_goals"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_goals"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_againsts"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_againsts"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_wins"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_wins"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_losses"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_losses"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_draws"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_draws"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_statistic_score"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_total_score"), "html", null, true);
        echo "</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>
  
  </div>
  
  <div class=\"tab-pane\" id=\"victories\">
  
  \t";
        // line 180
        if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "victories", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "victories")) > 0))) {
            // line 181
            echo "  \t
  \t\t<ul>
  \t\t";
            // line 183
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "victories"));
            foreach ($context['_seq'] as $context["_key"] => $context["victory"]) {
                // line 184
                echo "  \t\t\t<li><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_season"), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["victory"]) ? $context["victory"] : null), "season_name"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["victory"]) ? $context["victory"] : null), "league_name"), "html", null, true);
                echo ":</strong> 
  \t\t\t";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_season_place", 1 => $this->getAttribute((isset($context["victory"]) ? $context["victory"] : null), "season_place")), "method"), "html", null, true);
                echo "</li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['victory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "  \t\t</ul>
  \t";
        }
        // line 189
        echo "  \t
  \t";
        // line 190
        if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "cupvictories", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "cupvictories")) > 0))) {
            // line 191
            echo "  \t\t<ul>
  \t\t";
            // line 192
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "cupvictories"));
            foreach ($context['_seq'] as $context["_key"] => $context["cupvictory"]) {
                // line 193
                echo "  \t\t\t<li><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_cup"), "method"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupvictory"]) ? $context["cupvictory"] : null), "cup_name"), "html", null, true);
                echo "</strong>
  \t\t\t";
                // line 194
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cupvictory"]) ? $context["cupvictory"] : null), "cup_logo")) > 0)) {
                    // line 195
                    echo "  \t\t\t<br><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/cup/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupvictory"]) ? $context["cupvictory"] : null), "cup_logo"), "html", null, true);
                    echo "\" class=\"img-rounded\">
  \t\t\t";
                }
                // line 197
                echo "  \t\t\t</li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cupvictory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "  \t\t</ul>
  \t";
        }
        // line 201
        echo "  \t
  \t<div id=\"historycontent\">
  \t";
        // line 203
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "victories")) == 0)) {
            // line 204
            echo "  \t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_noleaguevictories"), "method"), "html", null, true);
            echo "</p>
  \t";
        }
        // line 206
        echo "  \t</div>
  
  \t";
        // line 208
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_history")) > 0)) {
            // line 209
            echo "  \t\t<h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_history"), "method"), "html", null, true);
            echo "</h4>
\t\t\t";
            // line 210
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "team_history"), "html", null, true));
            echo "
\t";
        }
        // line 212
        echo "  
  </div>
  
  <div class=\"tab-pane\" id=\"results\">
  \t<div id=\"resultslist\">...</div>
  </div>
  
  <div class=\"tab-pane\" id=\"players\">
  \t<div id=\"playerslist\">...</div>
  </div>
  
  ";
        // line 223
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "youth_enabled"), "method")) {
            // line 224
            echo "  <div class=\"tab-pane\" id=\"youthplayers\">
  \t<div id=\"youthplayerslist\">...</div>
  </div>
  ";
        }
        // line 228
        echo "  
  ";
        // line 229
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method") || $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transferoffers_enabled"), "method"))) {
            // line 230
            echo "  <div class=\"tab-pane\" id=\"transfers\">
  \t<div id=\"transferslist\">...</div>
  </div>
  ";
        }
        // line 234
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "views/team-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 234,  643 => 230,  641 => 229,  638 => 228,  632 => 224,  630 => 223,  617 => 212,  612 => 210,  607 => 209,  605 => 208,  601 => 206,  595 => 204,  593 => 203,  589 => 201,  585 => 199,  578 => 197,  570 => 195,  568 => 194,  561 => 193,  557 => 192,  554 => 191,  552 => 190,  549 => 189,  545 => 187,  537 => 185,  528 => 184,  524 => 183,  520 => 181,  518 => 180,  506 => 171,  502 => 170,  497 => 168,  493 => 167,  488 => 165,  484 => 164,  479 => 162,  475 => 161,  470 => 159,  466 => 158,  461 => 156,  457 => 155,  452 => 153,  448 => 152,  442 => 149,  434 => 144,  430 => 143,  425 => 141,  421 => 140,  416 => 138,  412 => 137,  407 => 135,  403 => 134,  398 => 132,  394 => 131,  389 => 129,  385 => 128,  380 => 126,  376 => 125,  370 => 122,  362 => 116,  357 => 114,  353 => 113,  349 => 112,  344 => 111,  341 => 110,  333 => 107,  330 => 106,  328 => 105,  324 => 104,  320 => 103,  317 => 102,  309 => 99,  306 => 98,  304 => 97,  300 => 96,  297 => 95,  291 => 93,  288 => 92,  286 => 91,  283 => 90,  277 => 88,  275 => 87,  271 => 86,  267 => 85,  263 => 84,  260 => 83,  257 => 82,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  231 => 73,  229 => 72,  226 => 71,  223 => 70,  221 => 69,  218 => 68,  215 => 67,  212 => 66,  209 => 65,  206 => 64,  203 => 63,  201 => 62,  198 => 61,  195 => 60,  192 => 59,  190 => 58,  187 => 57,  184 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  165 => 49,  154 => 43,  151 => 42,  148 => 41,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  126 => 34,  123 => 33,  120 => 32,  118 => 31,  104 => 29,  96 => 26,  93 => 25,  87 => 24,  83 => 23,  79 => 21,  71 => 18,  68 => 17,  66 => 16,  62 => 14,  51 => 12,  47 => 11,  43 => 9,  40 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
