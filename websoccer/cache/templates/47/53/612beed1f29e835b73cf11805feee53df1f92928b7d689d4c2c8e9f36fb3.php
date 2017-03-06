<?php

/* views/player-details.twig */
class __TwigTemplate_4753612beed1f29e835b73cf11805feee53df1f92928b7d689d4c2c8e9f36fb3 extends Twig_Template
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
        // line 3
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_firstname"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_pseudonym")) > 0)) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_pseudonym"), "html", null, true);
            echo "\" ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_lastname"), "html", null, true);
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
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_picture")) > 0)) {
            // line 12
            echo "<div style=\"text-align: center; margin-bottom: 10px;\">
<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
            echo "/uploads/player/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_picture"), "html", null, true);
            echo "\" class=\"img-rounded\">
</div>
";
        }
        // line 16
        echo "
<ul class=\"nav nav-tabs\" id=\"playerTab\">
  <li class=\"active\"><a href=\"#general\" data-toggle=\"tab\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_tab_general"), "method"), "html", null, true);
        echo "</a></li>
  <li><a href=\"#statistic\" data-toggle=\"tab\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_tab_statistic"), "method"), "html", null, true);
        echo "</a></li>
  <li><a href=\"#history\" data-toggle=\"tab\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_tab_history"), "method"), "html", null, true);
        echo "</a></li>
  ";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_tm")) > 0)) {
            // line 22
            echo "  <li><a href=\"#tm\" onclick=\"document.location.href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_tm"), "html", null, true);
            echo "'\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_tm"), "method"), "html", null, true);
            echo "</a></li>
  ";
        }
        // line 24
        echo "</ul>

<div class=\"tab-content\">
  <div class=\"tab-pane active\" id=\"general\">
  
  
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span6\">
\t\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_position"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_position"))), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  ";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_position_main")) > 0)) {
            // line 38
            echo "\t\t\t\t  <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_position_main"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t  <dd>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_position_main"))), "method"), "html", null, true);
            echo "</dd>
\t\t\t\t  ";
        }
        // line 41
        echo "\t\t\t\t  
\t\t\t\t  ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_position_second")) > 0)) {
            // line 43
            echo "\t\t\t\t  <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_position_second"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t  <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_position_second"))), "method"), "html", null, true);
            echo "</dd>
\t\t\t\t  ";
        }
        // line 46
        echo "\t\t\t\t  
\t\t\t\t  <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_verein_id"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>
\t\t\t\t  ";
        // line 49
        if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id") > 0)) {
            // line 50
            echo "\t\t\t\t  \t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_name"), "html", null, true);
            echo "</a>
\t\t\t\t  \t
\t\t\t\t  \t";
            // line 52
            if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") > 0)) {
                // line 53
                echo "\t\t\t\t\t\t<i class=\"icon-star-empty\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_tooltip"), "method"), "html", null, true);
                echo "\"></i></em>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t  ";
        } else {
            // line 56
            echo "\t\t\t\t  \t-
\t\t\t\t  ";
        }
        // line 58
        echo "\t\t\t\t  </dd>
\t\t\t\t  
\t\t\t\t  ";
        // line 60
        if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") > 0)) {
            // line 61
            echo "\t\t\t\t\t  <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_lending_owner_id"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t\t  <dd>
\t\t\t\t\t  \t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_name"), "html", null, true);
            echo "</a>
\t\t\t\t\t  </dd>
\t\t\t\t  ";
        }
        // line 66
        echo "\t\t\t\t  
\t\t\t\t  
\t\t\t\t  ";
        // line 68
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "players_aging"), "method") == "birthday")) {
            // line 69
            echo "\t\t\t\t  \t<dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_geburtstag"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t  \t<dd>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_birthday"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "date_format"), "method")), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_age"), "html", null, true);
            echo ")</dd>
\t\t\t\t  ";
        } else {
            // line 72
            echo "\t\t\t\t  \t<dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_age"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t  \t<dd>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_age"), "html", null, true);
            echo "</dd>
\t\t\t\t  ";
        }
        // line 75
        echo "\t\t\t\t  
\t\t\t\t  <dt>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_nation"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  ";
        // line 77
        $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename")) . ".png")), "method");
        // line 78
        echo "\t\t\t\t  \t";
        if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename"))), "method")) {
            // line 79
            echo "\t\t\t\t\t\t";
            $context["countryLabel"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename"))), "method");
            // line 80
            echo "\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t";
            $context["countryLabel"] = $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename");
            // line 82
            echo "\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t  <dd>";
        if ((isset($context["nationImg"]) ? $context["nationImg"] : null)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["nationImg"]) ? $context["nationImg"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
            echo "\" />";
        } else {
            echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
        }
        echo "</dd>
\t\t\t  
\t\t\t\t  <dt>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_verletzt"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_matches_injured"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_gesperrt"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_matches_blocked"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_gesperrt_cups"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_matches_blocked_cups"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_gesperrt_nationalteam"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_matches_blocked_nationalteam"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t</dl>
\t\t
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_gehalt"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 104
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_contract_salary"), 0, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_torpraemie"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 107
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_contract_goalbonus"), 0, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_spiele"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_contract_matches"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  ";
        // line 112
        if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_matches") > 0)) {
            // line 113
            echo "\t\t\t\t\t  <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_lending_matches"), "method"), "html", null, true);
            echo "</dt>
\t\t\t\t\t  <dd>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_matches"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unit_matches"), "method"), "html", null, true);
            echo "</dd>
\t\t\t\t  ";
        }
        // line 116
        echo "\t\t\t\t  
\t\t\t\t  <dt>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_marktwert"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_marketvalue"), 0, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>  
\t\t
\t\t";
        // line 124
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method") && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_transfermarket") > 0))) {
            // line 125
            echo "\t\t\t<div class=\"alert alert-info\">
\t\t\t<p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_avaiable_on_transfermarket"), "method"), "html", null, true);
            echo "</p>
\t\t\t";
            // line 127
            if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "getClubId", array(), "method") != $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))) {
                // line 128
                echo "\t\t\t\t<p><a class=\"btn btn-mini\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "transfer-bid", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-hand-up\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfermarket_bid"), "method"), "html", null, true);
                echo "</a></p>
\t\t\t";
            }
            // line 130
            echo "\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_unsellable") > 0)) {
            // line 132
            echo "\t\t\t<div class=\"alert\">
\t\t\t<p>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_unsellable"), "method"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t";
        } elseif (((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") == 0) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") > 0)) && $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "lending_enabled"), "method"))) {
            // line 136
            echo "\t\t\t<div class=\"alert alert-info\">
\t\t\t<p>";
            // line 137
            echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_lendable_info", 1 => ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"))), "method");
            echo "</p>
\t\t\t";
            // line 138
            if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "getClubId", array(), "method") != $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))) {
                // line 139
                echo "\t\t\t\t<p><a class=\"btn btn-mini\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "borrow-player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-share-alt\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_hire_button"), "method"), "html", null, true);
                echo "</a></p>
\t\t\t";
            }
            // line 141
            echo "\t\t\t</div>
\t\t";
        }
        // line 143
        echo "  
  \t\t";
        // line 144
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
            // line 145
            echo "\t\t\t<h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_strength_title"), "method"), "html", null, true);
            echo "</h4>
\t\t\t
\t\t\t<p><em>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_staerke"), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength"), "html", null, true);
            echo "%)</em></p>
\t\t\t";
            // line 148
            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength"));
            echo "
\t\t\t
\t\t\t<p><em>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_technik"), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_technique"), "html", null, true);
            echo "%)</em></p>
\t\t\t";
            // line 151
            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_technique"));
            echo "
\t\t\t
\t\t\t<p><em>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_kondition"), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_stamina"), "html", null, true);
            echo "%)</em></p>
\t\t\t";
            // line 154
            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_stamina"));
            echo "
\t\t\t
\t\t\t<p><em>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_frische"), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_freshness"), "html", null, true);
            echo "%)</em></p>
\t\t\t";
            // line 157
            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_freshness"));
            echo "
\t\t\t
\t\t\t<p><em>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_zufriedenheit"), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_satisfaction"), "html", null, true);
            echo "%)</em></p>
\t\t\t";
            // line 160
            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_strength_satisfaction"));
            echo "
\t\t";
        }
        // line 162
        echo "
  
  </div>
  
  <div class=\"tab-pane\" id=\"statistic\">
  
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span6\">
\t\t\t\t<h4>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_season"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_matches"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_matches"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_goals"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_goals"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_assists"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_assists"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_yellow"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_yellow"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_yellow_red"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_yellow_red"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_red"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_season_red"), "html", null, true);
        echo "</dd>
\t\t\t\t</dl>
\t\t
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<h4>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_total"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t  <dt>";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_matches"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_matches"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_goals"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_goals"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_assists"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_assists"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_yellow"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_yellow"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_yellow_red"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_yellow_red"), "html", null, true);
        echo "</dd>
\t\t\t\t  
\t\t\t\t  <dt>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_red"), "method"), "html", null, true);
        echo "</dt>
\t\t\t\t  <dd>";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_total_red"), "html", null, true);
        echo "</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<p><a href=\"#statModal\" class=\"btn btn-small ajaxLink\" role=\"button\" data-toggle=\"modal\" data-ajaxtarget=\"playerStatisticsPerCompetition\" 
\t\t\tdata-ajaxblock=\"playerstatistics\" data-ajaxquerystr=\"id=";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_id"), "html", null, true);
        echo "\" ><i class=\"icon-bar-chart\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_opendetails"), "method"), "html", null, true);
        echo "</a></p>
\t\t
\t\t<div id=\"statModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" 
\t\t\taria-labelledby=\"statModalLabel\" aria-hidden=\"true\">
\t\t  <div class=\"modal-header\">
\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t    <h3 id=\"statModalLabel\">";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_detailstitle"), "method"), "html", null, true);
        echo "</h3>
\t\t  </div>
\t\t  <div class=\"modal-body\">
\t\t  \t<div id=\"playerStatisticsPerCompetition\">...</div>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t    <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_close"), "method"), "html", null, true);
        echo "</a>
\t\t  </div>
\t\t</div>
\t\t
\t\t<h4>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_grades_title"), "method"), "html", null, true);
        echo "</h4>
  \t\t";
        // line 236
        if ((array_key_exists("grades", $context) && (twig_length_filter($this->env, (isset($context["grades"]) ? $context["grades"] : null)) > 0))) {
            // line 237
            echo "  \t\t\t";
            if ((twig_length_filter($this->env, (isset($context["grades"]) ? $context["grades"] : null)) == 1)) {
                // line 238
                echo "  \t\t\t\t<p><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_grade_last_match"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grades"]) ? $context["grades"] : null), 0, array(), "array"), "html", null, true);
                echo "</p>
  \t\t\t";
            } else {
                // line 240
                echo "  \t\t\t\t<div id=\"grades\" style=\"width: 600px; height: 300px; margin-left: 30px; margin-bottom: 30px\"
  \t\t\t\t\tdata-series=\"[";
                // line 241
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") > 1)) {
                        echo ", ";
                    }
                    echo "[";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["grade"]) ? $context["grade"] : null), "html", null, true);
                    echo "]";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "]\"></div>
  \t\t\t";
            }
            // line 243
            echo "  \t\t\t
  \t\t\t<p><strong>";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_grade_average"), "method"), "html", null, true);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_avg_grade"), "html", null, true);
            echo "</p>\t
  \t\t";
        } else {
            // line 246
            echo "  \t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_nogradesavailable"), "method"), "html", null, true);
            echo "</p>
  \t\t";
        }
        // line 248
        echo "  \t\t
  </div>
  
  <div class=\"tab-pane\" id=\"history\">
  
  \t";
        // line 253
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_history")) > 0)) {
            // line 254
            echo "\t\t<p>";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_history"), "html", null, true));
            echo "</p>
\t";
        } elseif ((((!array_key_exists("completedtransfers", $context)) || (twig_length_filter($this->env, (isset($context["completedtransfers"]) ? $context["completedtransfers"] : null)) == 0)) || (!$this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method")))) {
            // line 256
            echo "  \t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_nohistoryavailable"), "method"), "html", null, true);
            echo "</p>
\t";
        }
        // line 258
        echo "\t
\t";
        // line 259
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method") || $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transferoffers_enabled"), "method"))) {
            // line 260
            echo "\t\t<h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfers_tab"), "method"), "html", null, true);
            echo "</h4>
\t\t
\t\t";
            // line 262
            $this->env->loadTemplate("blocks/transfers-list.twig")->display($context);
            // line 263
            echo "\t";
        }
        // line 264
        echo "  
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "views/player-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 117,  358 => 116,  351 => 114,  346 => 113,  344 => 112,  337 => 110,  333 => 109,  326 => 107,  322 => 106,  315 => 104,  311 => 103,  298 => 95,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 88,  265 => 86,  261 => 85,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  224 => 76,  221 => 75,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 61,  177 => 60,  173 => 58,  169 => 56,  166 => 55,  160 => 53,  158 => 52,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 43,  128 => 42,  125 => 41,  120 => 39,  115 => 38,  113 => 37,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 16,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  47 => 9,  34 => 6,  31 => 5,  26 => 3,);
    }
}
