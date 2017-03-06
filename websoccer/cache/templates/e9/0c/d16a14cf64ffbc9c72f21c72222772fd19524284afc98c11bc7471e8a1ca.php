<?php

/* blocks/results-list.twig */
class __TwigTemplate_e90cd16a14cf64ffbc9c72f21c72222772fd19524284afc98c11bc7471e8a1ca extends Twig_Template
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
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 2
        $context["pagination"] = $this->env->loadTemplate("macros/paginator.twig");
        // line 3
        echo "
";
        // line 4
        if ((array_key_exists("matches", $context) && (twig_length_filter($this->env, (isset($context["matches"]) ? $context["matches"] : null)) > 0))) {
            // line 5
            echo "\t
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_match_datum"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_match_home_verein"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_match_gast_verein"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_result"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) ? $context["matches"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 17
                echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 19
                if (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "type") == "Ligaspiel")) {
                    // line 20
                    echo "\t\t\t\t\t\t<i class=\"icon-shield wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Ligaspiel"), "method"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "type") == "Freundschaft")) {
                    // line 22
                    echo "\t\t\t\t\t\t<i class=\"icon-smile wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Freundschaft"), "method"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t<i class=\"icon-trophy wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_Pokalspiel"), "method"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "cup_name"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "cup_round"), "html", null, true);
                    echo ")\"></i>
\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "date"), 1 => (isset($context["i18n"]) ? $context["i18n"] : null)), "method"), "html", null, true);
                echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 29
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_team_picture"))) {
                    // line 30
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/club/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_team_picture"), "html", null, true);
                    echo "\" style=\"max-width: 20px\"/>
\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_team"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
                // line 33
                if ($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_noformation")) {
                    // line 34
                    echo "\t\t\t\t\t\t<i class=\"icon-bolt wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_noformation", 1 => $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_team")), "method"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_id") > 0)) {
                    // line 37
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                    // line 38
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_picture")) > 0)) {
                        // line 39
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_id"))), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_picture"), "html", null, true);
                        echo "\" style=\"width: 20px; height: 20px\"/></a>
\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t<small><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_user_nick"), "html", null, true);
                    echo "</a></small>
\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 45
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_team_picture"))) {
                    // line 46
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/club/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_team_picture"), "html", null, true);
                    echo "\" style=\"max-width: 20px\"/>
\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_team"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
                // line 49
                if ($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_noformation")) {
                    // line 50
                    echo "\t\t\t\t\t\t<i class=\"icon-bolt wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_noformation", 1 => $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_team")), "method"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_id") > 0)) {
                    // line 53
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                    // line 54
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_picture")) > 0)) {
                        // line 55
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_id"))), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_picture"), "html", null, true);
                        echo "\" style=\"width: 20px; height: 20px\"/></a>
\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t<small><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_user_nick"), "html", null, true);
                    echo "</a></small>
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_navlabel"), "method"), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 61
                if (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "simulated") == 1)) {
                    // line 62
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_goals"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_goals"), "html", null, true);
                    echo "
\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "minutes") > 0)) {
                    // line 64
                    echo "\t\t\t\t<i class=\"icon-fire\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_live_label"), "method"), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_goals"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_goals"), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_navlabel"), "method"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t</tbody>
\t</table>
\t
\t";
            // line 74
            if ((array_key_exists("paginator", $context) && (!(null === (isset($context["paginator"]) ? $context["paginator"] : null))))) {
                // line 75
                echo "\t\t";
                echo $context["pagination"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
                echo "
\t";
            }
            // line 77
            echo "\t
";
        } else {
            // line 79
            echo "\t";
            echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "results_no_matches_found"), "method"), "", "info");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/results-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 79,  250 => 77,  244 => 75,  242 => 74,  237 => 71,  229 => 68,  223 => 66,  213 => 64,  205 => 62,  203 => 61,  197 => 60,  194 => 59,  186 => 57,  178 => 55,  176 => 54,  173 => 53,  170 => 52,  164 => 50,  162 => 49,  155 => 48,  147 => 46,  145 => 45,  141 => 43,  133 => 41,  125 => 39,  123 => 38,  120 => 37,  117 => 36,  111 => 34,  109 => 33,  102 => 32,  94 => 30,  92 => 29,  85 => 26,  75 => 24,  69 => 22,  63 => 20,  61 => 19,  57 => 17,  53 => 16,  46 => 12,  42 => 11,  34 => 9,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,  41 => 8,  38 => 10,  32 => 4,  29 => 3,);
    }
}
