<?php

/* views/myteam-overview.twig */
class __TwigTemplate_88c5f56095d81b027f936a388d601b55c47298e29b47245a23239f0e951b67a7 extends Twig_Template
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
        // line 4
        $context["playerlists"] = $this->env->loadTemplate("macros/playerlists.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
            // line 13
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t
\t\t\t\t";
            // line 20
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                // line 21
                echo "\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t
\t\t\t\t<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_age"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_gehalt"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th><abbr title=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_spiele"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_matches_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 30
            $context["salarySum"] = 0;
            // line 31
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 32
                echo "\t\t\t";
                $context["salarySum"] = ((isset($context["salarySum"]) ? $context["salarySum"] : null) + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_salary"));
                // line 33
                echo "\t\t\t<tr";
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_matches") < 10)) {
                    echo " class=\"error\"";
                }
                echo ">
\t\t\t\t<td style=\"text-align: center\"><img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position")) . ".png")), "method"), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t";
                // line 36
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")) > 0)) {
                    // line 37
                    echo "\t\t\t\t\t<p title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t</td>
\t\t\t\t<td><p><a href=\"";
                // line 40
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
\t\t\t\t";
                // line 41
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "unsellable") == 1)) {
                    // line 42
                    echo "\t\t\t\t\t<a class=\"ajaxLink\" href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_unsellable_unmark_tooltip"), "method"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\tdata-ajaxtarget=\"pagecontent\" data-ajaxquerystr=\"page=myteam&action=unmarkUnsellable&id=";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\"><i class=\"icon-eye-close darkIcon\"></i></a>
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t";
                if ((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") > 0) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") == 0))) {
                    // line 46
                    echo "\t\t\t\t\t<a class=\"ajaxLink wstooltip\" href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_lendable_unmark", 1 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee")), "method"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\tdata-ajaxtarget=\"pagecontent\" data-ajaxquerystr=\"page=myteam&action=unmarkLendable&id=";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\"><i class=\"icon-share-alt darkIcon\"></i></a>
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfermarket")) {
                    // line 50
                    echo "\t\t\t\t\t<a class=\"wstooltip\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "transfer-bid", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_transfermarkt"), "method"), "html", null, true);
                    echo "\"><i class=\"icon-hand-up darkIcon\"></i></a>
\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id") == (isset($context["captain_id"]) ? $context["captain_id"] : null))) {
                    // line 53
                    echo "\t\t\t\t\t<i class=\"icon-group wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_captain_tooltip"), "method"), "html", null, true);
                    echo "\"></i>
\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t</p>
\t\t\t\t
\t\t\t\t";
                // line 57
                if ((((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") == 0) && ((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfermarket") == 0) || $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "enable_player_resignation"), "method")) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_matches") <= $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "contract_max_number_of_remaining_matches"), "method")))) || ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "lending_enabled"), "method") == 0)) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id") != (isset($context["captain_id"]) ? $context["captain_id"] : null)))) {
                    // line 63
                    echo "\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_action_button"), "method"), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 67
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "unsellable") == 0)) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "transfermarket_enabled"), "method") && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") == 0))) {
                            // line 69
                            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "sell-player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                            echo "\"><i class=\"icon-share\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_player_sell"), "method"), "html", null, true);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t<li><a class=\"ajaxLink\" href=\"#\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_unsellable_tooltip"), "method"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-ajaxtarget=\"pagecontent\" data-ajaxquerystr=\"page=myteam&action=markAsUnsellable&id=";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "\"><i class=\"icon-eye-close\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_unsellable"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                        // line 74
                        if (((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfermarket") == 0) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") == 0)) && $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "lending_enabled"), "method"))) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "lend-player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                            echo "\"><i class=\"icon-share-alt\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_lend_button"), "method"), "html", null, true);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 80
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_matches") <= $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "contract_max_number_of_remaining_matches"), "method"))) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "extend-contract", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                        echo "\"><i class=\"icon-briefcase\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_player_extend_contract"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 84
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id") != (isset($context["captain_id"]) ? $context["captain_id"] : null))) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "select-captain", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                        echo "\"><i class=\"icon-group\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_player_select_as_captain"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 88
                    if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "enable_player_resignation"), "method")) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t<li><a href=\"#fire";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "Modal\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove-circle\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "fireplayer_button"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
                    // line 94
                    if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "enable_player_resignation"), "method")) {
                        // line 95
                        echo "\t\t\t\t\t\t<div id=\"fire";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "Modal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" 
\t\t\t\t\t\t\taria-labelledby=\"fire";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "ModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t    <h3 id=\"fire";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "ModalLabel\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "fireplayer_modal_title"), "method"), "html", null, true);
                        echo "</h3>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t  \t<p>";
                        // line 102
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "fireplayer_modal_content", 1 => (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname") . " ") . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"))), "method"), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t  \t
\t\t\t\t\t\t  \t";
                        // line 104
                        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "player_resignation_compensation_matches"), "method") > 0)) {
                            // line 105
                            echo "\t\t\t\t\t\t  \t\t<p>";
                            echo sprintf($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "fireplayer_modal_compensation"), "method"), twig_number_format_filter($this->env, ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "player_resignation_compensation_matches"), "method") * $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_salary")), 0, ",", " "), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"));
                            echo "</p>
\t\t\t\t\t\t  \t";
                        }
                        // line 107
                        echo "\t\t\t\t\t\t  \t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t  \t<a href=\"";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "fire-player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                        echo "\" class=\"btn btn-primary\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "fireplayer_modal_confirm"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                        // line 111
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_cancel"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t";
                }
                // line 116
                echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t\t";
                // line 119
                if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                    // line 120
                    echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t<li><span class=\"incell-strength-label\"><abbr title=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_abbr"), "method"), "html", null, true);
                    echo "</abbr>:</span> 
\t\t\t\t\t\t\t\t<span ";
                    // line 123
                    echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "html", null, true);
                    echo "</span></li>
\t\t\t\t\t\t\t<li><span class=\"incell-strength-label\"><abbr title=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic_abbr"), "method"), "html", null, true);
                    echo "</abbr>:</span> 
\t\t\t\t\t\t\t\t<span ";
                    // line 125
                    echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic"));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic"), "html", null, true);
                    echo "</span></li>
\t\t\t\t\t\t\t<li><span class=\"incell-strength-label\"><abbr title=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness_abbr"), "method"), "html", null, true);
                    echo "</abbr>:</span> 
\t\t\t\t\t\t\t\t<span ";
                    // line 127
                    echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness"));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness"), "html", null, true);
                    echo "</span></li>
\t\t\t\t\t\t\t<li><span class=\"incell-strength-label\"><abbr title=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina_abbr"), "method"), "html", null, true);
                    echo "</abbr>:</span> 
\t\t\t\t\t\t\t\t<span ";
                    // line 129
                    echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina"));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina"), "html", null, true);
                    echo "</span></li>
\t\t\t\t\t\t\t<li><span class=\"incell-strength-label\"><abbr title=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction_abbr"), "method"), "html", null, true);
                    echo "</abbr>:</span> 
\t\t\t\t\t\t\t\t<span ";
                    // line 131
                    echo $context["playerlists"]->getstrengthClass($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction"));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction"), "html", null, true);
                    echo "</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t
\t\t\t\t<td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 137
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_salary"), 0, ",", " "), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 138
                if ((($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee") > 0) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id") > 0))) {
                    // line 139
                    echo "\t\t\t\t\t\t<br><small>+ ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_lending_fee"), "method"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_fee"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "</small> 
\t\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 143
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_matches") > 0)) {
                    // line 144
                    echo "\t\t\t\t\t\t<em title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_tooltip"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_matches"), "html", null, true);
                    echo " <i class=\"icon-star-empty\"></i></em>
\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_matches"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 147
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "contract_matches") < 10)) {
                        echo "<i class=\"icon-warning-sign\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_player_contract_is_ending"), "method"), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 148
                    echo "\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t
\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"";
            // line 157
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                echo "4";
            } else {
                echo "3";
            }
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_vertrag_gehalt"), "method"), "html", null, true);
            echo "</strong></td>
\t\t\t\t<td><strong>";
            // line 158
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["salarySum"]) ? $context["salarySum"] : null), 0, ",", " "), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
            echo "</strong></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>

";
        } else {
            // line 165
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "no_players_found"), "method"), "html", null, true);
            echo "</p>
";
        }
        // line 167
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/myteam-overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 167,  508 => 165,  496 => 158,  486 => 157,  480 => 153,  471 => 149,  468 => 148,  462 => 147,  457 => 146,  449 => 144,  447 => 143,  443 => 141,  433 => 139,  431 => 138,  425 => 137,  421 => 136,  418 => 135,  409 => 131,  403 => 130,  397 => 129,  391 => 128,  385 => 127,  379 => 126,  373 => 125,  367 => 124,  361 => 123,  355 => 122,  351 => 120,  349 => 119,  344 => 116,  341 => 115,  334 => 111,  328 => 110,  323 => 107,  317 => 105,  315 => 104,  310 => 102,  302 => 99,  296 => 96,  291 => 95,  289 => 94,  284 => 91,  276 => 89,  274 => 88,  271 => 87,  263 => 85,  261 => 84,  258 => 83,  250 => 81,  248 => 80,  245 => 79,  241 => 77,  233 => 75,  231 => 74,  224 => 72,  219 => 71,  211 => 69,  208 => 68,  206 => 67,  200 => 64,  197 => 63,  195 => 57,  191 => 55,  185 => 53,  182 => 52,  174 => 50,  171 => 49,  166 => 47,  161 => 46,  158 => 45,  153 => 43,  148 => 42,  146 => 41,  133 => 40,  130 => 39,  122 => 37,  120 => 36,  114 => 35,  110 => 34,  103 => 33,  100 => 32,  95 => 31,  93 => 30,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  67 => 21,  65 => 20,  60 => 18,  54 => 17,  48 => 13,  46 => 12,  43 => 11,  40 => 10,  34 => 7,  31 => 6,  26 => 4,);
    }
}
