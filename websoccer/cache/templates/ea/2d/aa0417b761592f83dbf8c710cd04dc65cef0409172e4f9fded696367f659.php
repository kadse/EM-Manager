<?php

/* blocks/userprofile.twig */
class __TwigTemplate_ea2daa0417b761592f83dbf8c710cd04dc65cef0409172e4f9fded696367f659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("box.twig");

        $this->blocks = array(
            'box_title' => array($this, 'block_box_title'),
            'box_content' => array($this, 'block_box_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "box.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_box_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_box_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "profilepicture")) > 0)) {
            // line 12
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "id"))), "method"), "html", null, true);
            echo "\">
\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "profilepicture"), "html", null, true);
            echo "\" class=\"pull-left\" style=\"width: 40px; height: 40px; margin-right: 10px\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "username"), "html", null, true);
            echo "\"/>
\t</a>
";
        }
        // line 16
        echo "
<p><em>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_loggedin_as"), "method"), "html", null, true);
        echo "</em><br/>
<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "id"))), "method"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "username"), "html", null, true);
        echo "</strong></a>
";
        // line 19
        if (((isset($context["unseenMessages"]) ? $context["unseenMessages"] : null) > 0)) {
            // line 20
            echo "(<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "messages"), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "messages_new_messages", 1 => (isset($context["unseenMessages"]) ? $context["unseenMessages"] : null)), "method"), "html", null, true);
            echo "\"><i class=\"icon-envelope\"></i><small>";
            echo twig_escape_filter($this->env, (isset($context["unseenMessages"]) ? $context["unseenMessages"] : null), "html", null, true);
            echo "</small></a>)
";
        }
        // line 22
        echo "
<a id=\"notificationsLink\" href=\"#\" title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_notifications"), "method"), "html", null, true);
        echo "\"
\tclass=\"ajaxLink\" data-ajaxtarget=\"notificationspopup\" data-ajaxblock=\"notifications\"><span class=\"badge";
        // line 24
        if (((isset($context["unseenNotifications"]) ? $context["unseenNotifications"] : null) > 0)) {
            echo " badge-important";
        }
        echo "\"><i class=\"icon-bell icon-white\"></i>";
        if (((isset($context["unseenNotifications"]) ? $context["unseenNotifications"] : null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["unseenNotifications"]) ? $context["unseenNotifications"] : null), "html", null, true);
        }
        echo "</span></a>
</p>
<div id=\"notificationspopupwrapper\" style=\"display: none\"><div id=\"notificationspopup\">...</div></div>

<p><em>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_popularity"), "method"), "html", null, true);
        echo "</em> <i class=\"icon-question-sign wstooltip\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_tooltip_popularity"), "method"), "html", null, true);
        echo "\"></i></p>
";
        // line 29
        echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "user_popularity"));
        echo "

<p><em>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_highscore"), "method"), "html", null, true);
        echo "</em><br/>
<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "highscore"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "user_highscore"), 0, ",", " "), "html", null, true);
        echo "</a></p>

";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "clubId") > 0)) {
            // line 35
            echo "<p><em>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club"), "method"), "html", null, true);
            echo "</em>
";
            // line 36
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_picture"))) {
                // line 37
                echo "\t";
                $context["teamPicture"] = (((("<img src=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method")) . "/uploads/club/") . $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_picture")) . "\" style=\"width: 20px; height: 20px;\" />");
            } else {
                // line 39
                echo "\t";
                $context["teamPicture"] = "";
            }
            // line 41
            echo "
";
            // line 42
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "max_number_teams_per_user"), "method") > 1)) {
                // line 43
                echo "</p>

<div class=\"dropdown\" style=\"margin-top: -11px; margin-bottom: 12px;\">
  ";
                // line 46
                echo (isset($context["teamPicture"]) ? $context["teamPicture"] : null);
                echo " <a class=\"dropdown-toggle ajaxLink\" data-toggle=\"dropdown\" href=\"#\" data-ajaxblock=\"user-clubs-selection\" data-ajaxtarget=\"clubsSelectionList\">
    ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_name"), "html", null, true);
                echo "
    <b class=\"caret\"></b>
  </a>
  <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_navlabel"), "method"), "html", null, true);
                echo "\" style=\"margin: 0 5px\"><i class=\"icon-info-sign darkIcon\"></i></a> 
  <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "league", 1 => ("id=" . $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_league_id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_link_table"), "method"), "html", null, true);
                echo "\"><i class=\"icon-table darkIcon\"></i></a>
  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\" id=\"clubsSelectionList\">
    
  </ul>
</div>
";
            } else {
                // line 57
                echo "\t<br>
\t";
                // line 58
                echo (isset($context["teamPicture"]) ? $context["teamPicture"] : null);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_navlabel"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_name"), "html", null, true);
                echo "</a> 
\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "league", 1 => ("id=" . $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_league_id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_link_table"), "method"), "html", null, true);
                echo "\"><i class=\"icon-table darkIcon\"></i></a>
\t</p>
";
            }
            // line 62
            echo "
<p><em>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_finanz_budget"), "method"), "html", null, true);
            echo "</em><br/>
<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "finances"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["userteam"]) ? $context["userteam"] : null), "team_budget"), 0, ",", " "), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
            echo "</a></p>
";
        }
        // line 66
        echo "
";
        // line 67
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "premium_enabled"), "method")) {
            // line 68
            echo "\t<p><em>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_premium_balance"), "method"), "html", null, true);
            echo "</em><br/>
\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "premiumaccount"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "premiumBalance"), 0, ",", " "), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "premium_credit_unit"), "method"), "html", null, true);
            echo "</a></p>
";
        }
        // line 71
        echo "
<p><i class=\"icon-off\"></i> <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "logout"), "method"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_link_logout"), "method"), "html", null, true);
        echo "</a>
| <i class=\"icon-user\"></i> <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "profile"), "method"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "userprofile_block_link_profile"), "method"), "html", null, true);
        echo "</a></p>

";
    }

    public function getTemplateName()
    {
        return "blocks/userprofile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 73,  225 => 68,  223 => 67,  220 => 66,  207 => 63,  196 => 59,  183 => 57,  151 => 43,  146 => 41,  142 => 39,  138 => 37,  136 => 36,  131 => 35,  122 => 32,  118 => 31,  68 => 18,  40 => 9,  194 => 59,  186 => 58,  176 => 48,  172 => 51,  156 => 46,  153 => 42,  139 => 40,  137 => 39,  132 => 37,  129 => 34,  121 => 34,  111 => 31,  107 => 28,  86 => 22,  83 => 22,  80 => 21,  72 => 20,  35 => 8,  22 => 2,  23 => 3,  27 => 6,  25 => 4,  76 => 20,  62 => 18,  44 => 5,  41 => 4,  101 => 33,  90 => 28,  81 => 26,  77 => 25,  69 => 23,  64 => 17,  59 => 19,  52 => 18,  43 => 10,  32 => 6,  21 => 2,  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 42,  141 => 105,  134 => 38,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 26,  89 => 23,  73 => 24,  61 => 16,  57 => 16,  51 => 15,  48 => 12,  45 => 5,  39 => 9,  37 => 3,  29 => 4,  102 => 28,  96 => 18,  93 => 24,  79 => 16,  63 => 12,  54 => 11,  46 => 11,  42 => 11,  38 => 13,  36 => 2,  24 => 3,  19 => 1,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 72,  239 => 71,  236 => 80,  233 => 79,  230 => 69,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 64,  204 => 62,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 50,  160 => 47,  158 => 44,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 29,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 17,  55 => 16,  53 => 13,  50 => 19,  47 => 16,  34 => 6,  31 => 5,  26 => 3,);
    }
}
