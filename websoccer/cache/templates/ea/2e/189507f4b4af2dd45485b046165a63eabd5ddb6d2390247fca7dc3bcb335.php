<?php

/* blocks/youth_players_of_team.twig */
class __TwigTemplate_ea2e189507f4b4af2dd45485b046165a63eabd5ddb6d2390247fca7dc3bcb335 extends Twig_Template
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
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) == 0)) {
            // line 4
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_no_players_in_team"), "method"), "html", null, true);
            echo "</p>
";
        } else {
            // line 6
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_age"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthplayer_transfer_fee"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t
\t\t";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 20
                echo "\t\t\t
\t\t\t";
                // line 21
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Torwart")) {
                    // line 22
                    echo "\t\t\t\t";
                    $context["positionId"] = "goaly";
                    // line 23
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Abwehr")) {
                    // line 24
                    echo "\t\t\t\t";
                    $context["positionId"] = "defense";
                    // line 25
                    echo "\t\t\t";
                } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position") == "Mittelfeld")) {
                    // line 26
                    echo "\t\t\t\t";
                    $context["positionId"] = "midfield";
                    // line 27
                    echo "\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t";
                    $context["positionId"] = "striker";
                    // line 29
                    echo "\t\t\t";
                }
                // line 30
                echo "\t\t
\t\t
\t\t\t<tr";
                // line 32
                if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee")) {
                    echo " class=\"info\"";
                }
                echo ">
\t\t\t\t<td style=\"text-align: center\">
\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . (isset($context["positionId"]) ? $context["positionId"] : null)) . ".png")), "method"), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["positionId"]) ? $context["positionId"] : null))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t<br>
\t\t\t\t\t<small>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "</small>
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 41
                echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "noBottomMargin");
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 43
                if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee") == 0)) {
                    // line 44
                    echo "\t\t\t\t\t\t-
\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "transfer_fee"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 48
                    if ((($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId") > 0) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id") != $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId")))) {
                        // line 49
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youthplayer-buy", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                        echo "\" class=\"btn btn-small\"><i class=\"icon-shopping-cart\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_action_buy"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t
\t\t</tbody>
\t</table>

";
        }
    }

    public function getTemplateName()
    {
        return "blocks/youth_players_of_team.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  166 => 52,  163 => 51,  155 => 49,  153 => 48,  145 => 46,  141 => 44,  139 => 43,  134 => 41,  130 => 40,  124 => 39,  119 => 37,  112 => 35,  108 => 34,  101 => 32,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  71 => 21,  68 => 20,  64 => 19,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  38 => 10,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
