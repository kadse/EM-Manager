<?php

/* views/youth_scouting.twig */
class __TwigTemplate_c37bea67b1d9fef068337e8166854f9f29689ae08460779408098c722882b57b extends Twig_Template
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
        // line 3
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 4
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youth-scouting_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t";
        // line 12
        if (((isset($context["lastExecutionTimestamp"]) ? $context["lastExecutionTimestamp"] : null) == 0)) {
            // line 13
            echo "\t\t";
            $context["lastScouting"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_lastexecution_never"), "method");
            // line 14
            echo "\t";
        } else {
            // line 15
            echo "\t\t";
            $context["lastScouting"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => (isset($context["lastExecutionTimestamp"]) ? $context["lastExecutionTimestamp"] : null)), "method");
            // line 16
            echo "\t";
        }
        // line 17
        echo "\t";
        echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_lastexecution"), "method"), (isset($context["lastScouting"]) ? $context["lastScouting"] : null));
        echo "
\t
\t";
        // line 19
        if ((!(isset($context["scoutingPossible"]) ? $context["scoutingPossible"] : null))) {
            // line 20
            echo "\t\t<hr>
\t\t";
            // line 21
            echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_nextpossibleexecution", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => (isset($context["nextPossibleExecutionTimestamp"]) ? $context["nextPossibleExecutionTimestamp"] : null)), "method")), "method"), "", "warning");
            // line 22
            echo "
\t";
        } else {
            // line 24
            echo "\t
\t\t";
            // line 25
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "scoutid"), "method") == null)) {
                // line 26
                echo "\t\t\t<h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_schoosescout"), "method"), "html", null, true);
                echo "</h3>
\t\t\t
\t\t\t";
                // line 28
                if ((twig_length_filter($this->env, (isset($context["scouts"]) ? $context["scouts"] : null)) == 0)) {
                    // line 29
                    echo "\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_noscoutavailable"), "method"), "html", null, true);
                    echo "</p>
\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthscout_name"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t<th>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthscout_expertise"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t<th>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthscout_fee"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t<th>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_youthscout_speciality"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 43
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["scouts"]) ? $context["scouts"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["scout"]) {
                        // line 44
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "name"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t<td>";
                        // line 46
                        echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "expertise"));
                        echo "</td>
\t\t\t\t\t\t\t<td>";
                        // line 47
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "fee"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t<td>";
                        // line 48
                        if (twig_length_filter($this->env, $this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "speciality"))) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "speciality"))), "method"), "html", null, true);
                        } else {
                            echo "-";
                        }
                        echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youth-scouting", 1 => ("scoutid=" . $this->getAttribute((isset($context["scout"]) ? $context["scout"] : null), "id"))), "method"), "html", null, true);
                        echo "\" class=\"btn btn-small\"><i class=\"icon-hand-right\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_choose"), "method"), "html", null, true);
                        echo "</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scout'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t
\t\t\t";
                }
                // line 56
                echo "\t\t";
            } else {
                // line 57
                echo "\t\t\t<h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "youthteam_scouting_schoosecountry"), "method"), "html", null, true);
                echo "</h3>
\t\t
\t\t\t";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 60
                    echo "\t\t\t\t";
                    $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . (isset($context["country"]) ? $context["country"] : null)) . ".png")), "method");
                    // line 61
                    echo "\t\t\t\t";
                    if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => ("option_" . (isset($context["country"]) ? $context["country"] : null))), "method")) {
                        // line 62
                        echo "\t\t\t\t\t";
                        $context["countryLabel"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . (isset($context["country"]) ? $context["country"] : null))), "method");
                        // line 63
                        echo "\t\t\t\t";
                    } else {
                        // line 64
                        echo "\t\t\t\t\t";
                        $context["countryLabel"] = (isset($context["country"]) ? $context["country"] : null);
                        // line 65
                        echo "\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "scout-youthplayer", 1 => ((("scoutid=" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "scoutid"), "method")) . "&country=") . (isset($context["country"]) ? $context["country"] : null))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-large btn-block\">";
                    if ((isset($context["nationImg"]) ? $context["nationImg"] : null)) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["nationImg"]) ? $context["nationImg"] : null), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                        echo "\" /> ";
                    }
                    echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t
\t\t\t<p style=\"margin-top: 10px\"><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "youth-scouting"), "method"), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_cancel"), "method"), "html", null, true);
                echo "</a></p>
\t\t
\t\t";
            }
            // line 72
            echo "\t
\t";
        }
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/youth_scouting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 74,  232 => 72,  224 => 69,  221 => 68,  203 => 66,  200 => 65,  197 => 64,  194 => 63,  191 => 62,  188 => 61,  185 => 60,  181 => 59,  175 => 57,  172 => 56,  166 => 52,  155 => 49,  147 => 48,  141 => 47,  137 => 46,  133 => 45,  130 => 44,  126 => 43,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  100 => 31,  94 => 29,  92 => 28,  86 => 26,  84 => 25,  81 => 24,  77 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  44 => 10,  38 => 7,  35 => 6,  30 => 4,  28 => 3,  26 => 2,);
    }
}
