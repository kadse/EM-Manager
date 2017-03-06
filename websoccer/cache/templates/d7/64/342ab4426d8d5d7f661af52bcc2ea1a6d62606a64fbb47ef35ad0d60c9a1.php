<?php

/* blocks/table_base.twig */
class __TwigTemplate_d764342ab4426d8d5d7f661af52bcc2ea1a6d62606a64fbb47ef35ad0d60c9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'table_header' => array($this, 'block_table_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('table_header', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        if ((array_key_exists("teams", $context) && (twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : null)) > 0))) {
            // line 7
            echo "\t
\t<table class=\"table\">
\t\t<colgroup>
\t\t\t<col style=\"width: 40px\" />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t\t<col />
\t\t</colgroup>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_place"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_place_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_club"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th><abbr title=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_matches"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_matches_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th><abbr title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_wins"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_wins_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th><abbr title=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_draws"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_draws_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th><abbr title=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_defeats"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_defeats_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_goals"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th><abbr title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_goalsdiff"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_goalsdiff_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_head_score"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 35
                echo "\t\t\t\t";
                $context["place"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                // line 36
                echo "\t\t\t\t";
                $context["markerTitle"] = "";
                // line 37
                echo "\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td";
                // line 39
                if ((array_key_exists("markers", $context) && (twig_length_filter($this->env, (isset($context["markers"]) ? $context["markers"] : null)) > 0))) {
                    // line 40
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 41
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["markers"]) ? $context["markers"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
                        if ((($this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "place_from") <= (isset($context["place"]) ? $context["place"] : null)) && ($this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "place_to") >= (isset($context["place"]) ? $context["place"] : null)))) {
                            // line 42
                            echo "\t\t\t\t\t\t";
                            $context["markerTitle"] = $this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "name");
                            // line 43
                            echo "\t\t\t\t\t\t";
                            if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => (isset($context["markerTitle"]) ? $context["markerTitle"] : null)), "method")) {
                                // line 44
                                echo "\t\t\t\t\t\t\t";
                                $context["markerTitle"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => (isset($context["markerTitle"]) ? $context["markerTitle"] : null)), "method");
                                // line 45
                                echo "\t\t\t\t\t\t";
                            }
                            // line 46
                            echo "\t\t\t\t\t\tstyle=\"background-color: ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "color"), "html", null, true);
                            echo "\"
\t\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                }
                // line 49
                echo ">";
                if ((twig_length_filter($this->env, (isset($context["markerTitle"]) ? $context["markerTitle"] : null)) > 0)) {
                    echo "<div class=\"wstooltip\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["markerTitle"]) ? $context["markerTitle"] : null), "html", null, true);
                    echo "\" style=\"cursor: default;\">";
                }
                echo twig_escape_filter($this->env, (isset($context["place"]) ? $context["place"] : null), "html", null, true);
                if ((twig_length_filter($this->env, (isset($context["markerTitle"]) ? $context["markerTitle"] : null)) > 0)) {
                    echo "</div>";
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 50
                if ((($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "id") > 0) && ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_id") == $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "id")))) {
                    echo "<strong>";
                }
                // line 51
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 52
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "picture"))) {
                    // line 53
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/uploads/club/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "picture"), "html", null, true);
                    echo "\" style=\"max-width: 20px\"/>
\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t
\t\t\t\t\t<a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
                // line 57
                if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_id") > 0)) {
                    // line 58
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                    // line 59
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_picture")) > 0)) {
                        // line 60
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_id"))), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_picture"), "html", null, true);
                        echo "\" style=\"width: 20px; height: 20px\"/></a>
\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t<small><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_name"), "html", null, true);
                    echo "</a></small>
\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "id") > 0) && ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "user_id") == $this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getUser", array(), "method"), "id")))) {
                    echo "<strong>";
                }
                // line 65
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "matches"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "wins"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "draws"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "defeats"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "goals"), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "goals_received"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "goals_diff"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "score"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 73
                if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "previous_rank", array(), "any", true, true) && ($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "previous_rank") > 0))) {
                    // line 74
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "tablehistory", 1 => ("id=" . $this->getAttribute((isset($context["team"]) ? $context["team"] : null), "id"))), "method"), "html", null, true);
                    echo "\" style=\"text-decoration: none\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "tablehistory_navlabel"), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 75
                    if (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "previous_rank") < (isset($context["place"]) ? $context["place"] : null))) {
                        // line 76
                        echo "\t\t\t\t\t\t\t<i class=\"icon-arrow-down text-error\"></i>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "previous_rank") > (isset($context["place"]) ? $context["place"] : null))) {
                        // line 78
                        echo "\t\t\t\t\t\t\t<i class=\"icon-arrow-up text-success\"></i>
\t\t\t\t\t\t";
                    } else {
                        // line 80
                        echo "\t\t\t\t\t\t\t<i class=\"icon-circle text-info\"></i>
\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t</tbody>
\t</table>
\t
\t";
            // line 90
            if ((array_key_exists("markers", $context) && (twig_length_filter($this->env, (isset($context["markers"]) ? $context["markers"] : null)) > 0))) {
                // line 91
                echo "\t\t<h5>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_tablemarker"), "method"), "html", null, true);
                echo "</h5>
\t\t<table class=\"table table-condensed\" style=\"width: auto;\">
\t\t\t<colgroup>
\t\t\t\t<col style=\"width: 40px\" />
\t\t\t\t<col />
\t\t\t</colgroup>
\t\t\t<tbody>
\t\t\t";
                // line 98
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["markers"]) ? $context["markers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
                    // line 99
                    echo "\t\t\t\t";
                    $context["markerTitle"] = $this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "name");
                    // line 100
                    echo "\t\t\t\t";
                    if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => (isset($context["markerTitle"]) ? $context["markerTitle"] : null)), "method")) {
                        // line 101
                        echo "\t\t\t\t\t";
                        $context["markerTitle"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => (isset($context["markerTitle"]) ? $context["markerTitle"] : null)), "method");
                        // line 102
                        echo "\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td style=\"background-color: ";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marker"]) ? $context["marker"] : null), "color"), "html", null, true);
                    echo "\">&nbsp;</td>
\t\t\t\t\t<td>";
                    // line 105
                    echo twig_escape_filter($this->env, (isset($context["markerTitle"]) ? $context["markerTitle"] : null), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            }
            // line 111
            echo "\t
";
        } else {
            // line 113
            echo "\t";
            echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_block_noteamsavailable"), "method"), "", "info");
            echo "
";
        }
    }

    // line 3
    public function block_table_header($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "blocks/table_base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 3,  365 => 113,  361 => 111,  356 => 108,  347 => 105,  343 => 104,  340 => 103,  337 => 102,  334 => 101,  331 => 100,  328 => 99,  324 => 98,  313 => 91,  311 => 90,  306 => 87,  290 => 84,  286 => 82,  282 => 80,  278 => 78,  274 => 76,  272 => 75,  265 => 74,  263 => 73,  259 => 72,  255 => 71,  249 => 70,  245 => 69,  241 => 68,  237 => 67,  233 => 66,  230 => 65,  225 => 64,  217 => 62,  209 => 60,  207 => 59,  204 => 58,  202 => 57,  196 => 56,  193 => 55,  185 => 53,  183 => 52,  180 => 51,  176 => 50,  163 => 49,  159 => 48,  149 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  132 => 41,  129 => 40,  123 => 37,  120 => 36,  117 => 35,  93 => 30,  87 => 29,  83 => 28,  77 => 27,  71 => 26,  59 => 24,  55 => 23,  49 => 22,  32 => 7,  30 => 6,  27 => 5,  25 => 3,  22 => 2,  20 => 1,  162 => 35,  160 => 34,  153 => 32,  141 => 27,  135 => 26,  127 => 39,  121 => 24,  113 => 23,  107 => 22,  100 => 34,  94 => 14,  74 => 12,  65 => 25,  48 => 10,  41 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
