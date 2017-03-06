<?php

/* views/freeclubs.twig */
class __TwigTemplate_43d60820652bf514f4679de831435e26ba20bbf4da88a3f3269d066fafcb3df8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "freeclubs_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["countries"]) ? $context["countries"] : null)) > 0)) {
            // line 11
            echo "
<div class=\"accordion\" id=\"countries\">
\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
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
            foreach ($context['_seq'] as $context["country"] => $context["clubs"]) {
                // line 14
                echo "\t\t";
                $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . (isset($context["country"]) ? $context["country"] : null)) . ".png")), "method");
                // line 15
                echo "\t\t";
                if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => ("option_" . (isset($context["country"]) ? $context["country"] : null))), "method")) {
                    // line 16
                    echo "\t\t\t";
                    $context["countryLabel"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . (isset($context["country"]) ? $context["country"] : null))), "method");
                    // line 17
                    echo "\t\t";
                } else {
                    // line 18
                    echo "\t\t\t";
                    $context["countryLabel"] = (isset($context["country"]) ? $context["country"] : null);
                    // line 19
                    echo "\t\t";
                }
                // line 20
                echo "\t<div class=\"accordion-group\">
\t\t<div class=\"accordion-heading\">
\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\"
\t\t\t\tdata-parent=\"#countries\" href=\"#collapse";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">";
                if ((isset($context["nationImg"]) ? $context["nationImg"] : null)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["nationImg"]) ? $context["nationImg"] : null), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                    echo "\" /> ";
                }
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["countryLabel"]) ? $context["countryLabel"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["clubs"]) ? $context["clubs"] : null)), "html", null, true);
                echo ")</a>
\t\t</div>
\t\t<div id=\"collapse";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" class=\"accordion-body collapse\">
\t\t\t<div class=\"accordion-inner\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_name"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<th>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_liga_id"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t\t";
                // line 33
                if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "assign_team_automatically"), "method")) {
                    // line 34
                    echo "\t\t\t\t\t\t\t<th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "freeclubs_head_choose"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
                // line 39
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
                    // line 40
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 42
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_picture"))) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                        echo "/uploads/club/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_picture"), "html", null, true);
                        echo "\" style=\"max-width: 40px\"/>
\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_name"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "league", 1 => ("id=" . $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "league_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "league_name"), "html", null, true);
                    echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<p><strong>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_staerke"), "method"), "html", null, true);
                    echo "</strong><br>
\t\t\t\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["strengthlevel"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star";
                        if (((30 + ((isset($context["strengthlevel"]) ? $context["strengthlevel"] : null) * 10)) > $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_strength"))) {
                            echo "-empty";
                        }
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strengthlevel'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p><strong>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_finanz_budget"), "method"), "html", null, true);
                    echo "</strong><br>
\t\t\t\t\t\t\t\t\t";
                    // line 56
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_budget"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p><strong>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_stadium"), "method"), "html", null, true);
                    echo "</strong><br>
\t\t\t\t\t\t\t\t\t";
                    // line 59
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($this->getAttribute((isset($context["club"]) ? $context["club"] : null), "stadium_p_steh") + $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "stadium_p_sitz")) + $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "stadium_p_haupt_steh")) + $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "stadium_p_haupt_sitz")) + $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "stadium_p_vip")), 0, ",", " "), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 62
                    if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "assign_team_automatically"), "method")) {
                        // line 63
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 64
                        if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId") < 1)) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "choose-team", 1 => ("teamId=" . $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_id"))), "method"), "html", null, true);
                            echo "\" class=\"btn btn-small\"><i class=\"icon-file-text-alt\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "freeclubs_button_choose"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "max_number_teams_per_user"), "method") > 1)) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalActionUrl", array(0 => "choose-additional-team", 1 => ("teamId=" . $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "team_id"))), "method"), "html", null, true);
                            echo "\" class=\"btn btn-small\"><i class=\"icon-file-text-alt\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "freeclubs_button_choose_another"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['country'], $context['clubs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "</div>

";
        } else {
            // line 82
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "freeclubs_no_free_clubs_available"), "method"), "html", null, true);
            echo "</p>
";
        }
        // line 84
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/freeclubs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 84,  273 => 82,  268 => 79,  249 => 73,  242 => 71,  238 => 69,  230 => 67,  222 => 65,  220 => 64,  217 => 63,  215 => 62,  209 => 59,  205 => 58,  198 => 56,  194 => 55,  190 => 53,  179 => 52,  175 => 51,  171 => 50,  163 => 47,  155 => 45,  147 => 43,  145 => 42,  141 => 40,  137 => 39,  132 => 36,  126 => 34,  124 => 33,  119 => 31,  115 => 30,  107 => 25,  90 => 23,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  50 => 13,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  32 => 5,  29 => 4,);
    }
}
