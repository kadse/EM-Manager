<?php

/* blocks/team_history.twig */
class __TwigTemplate_7a3f96fc215afc678e5fbbc14f387818bb26ff7615409f56645aca27f2a552ae extends Twig_Template
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
        // line 2
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 3
        echo "
";
        // line 4
        if (((twig_length_filter($this->env, (isset($context["leagues"]) ? $context["leagues"] : null)) == 0) && (twig_length_filter($this->env, (isset($context["cups"]) ? $context["cups"] : null)) == 0))) {
            // line 5
            echo "\t";
            echo $context["messagebox"]->getbox("", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "team_details_noleaguevictories"), "method"), "info");
            echo "
";
        } else {
            // line 7
            echo "
\t";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leagues"]) ? $context["leagues"] : null));
            foreach ($context['_seq'] as $context["leagueName"] => $context["seasons"]) {
                // line 9
                echo "\t\t<h4>";
                echo twig_escape_filter($this->env, (isset($context["leagueName"]) ? $context["leagueName"] : null), "html", null, true);
                echo "</h4>
\t\t
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_season"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_place"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) ? $context["seasons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
                    // line 21
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "season_name"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td><a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "user_name"), "html", null, true);
                    echo "</a></td>
\t\t\t\t\t<td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "season_rank"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['leagueName'], $context['seasons'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t
\t";
            // line 31
            if ((twig_length_filter($this->env, (isset($context["cups"]) ? $context["cups"] : null)) > 0)) {
                // line 32
                echo "\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_cup"), "method"), "html", null, true);
                echo "</h4>
\t\t
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_cup"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_cup_rounds"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cups"]) ? $context["cups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["cup"]) {
                    // line 44
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cup"]) ? $context["cup"] : null), "cup_name"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td><a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["cup"]) ? $context["cup"] : null), "user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cup"]) ? $context["cup"] : null), "user_name"), "html", null, true);
                    echo "</a></td>
\t\t\t\t\t<td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cup"]) ? $context["cup"] : null), "cup_round_name"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDate", array(0 => $this->getAttribute((isset($context["cup"]) ? $context["cup"] : null), "achievement_date")), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            }
            // line 53
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/team_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  157 => 50,  146 => 47,  140 => 46,  136 => 45,  133 => 44,  129 => 43,  122 => 39,  118 => 38,  114 => 37,  105 => 32,  103 => 31,  100 => 30,  92 => 27,  83 => 24,  77 => 23,  73 => 22,  70 => 21,  66 => 20,  59 => 16,  55 => 15,  51 => 14,  42 => 9,  38 => 8,  35 => 7,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
