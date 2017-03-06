<?php

/* views/sponsor.twig */
class __TwigTemplate_f82712074858e7fbfb1adf66583da67bb160045323313a4d61d3d00e1f3370ff extends Twig_Template
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
        // line 1
        $context["pagination"] = $this->env->loadTemplate("macros/paginator.twig");
        // line 2
        $context["profile"] = $this->env->loadTemplate("macros/profileelements.twig");
        // line 3
        $context["messagebox"] = $this->env->loadTemplate("macros/messagebox.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "sponsor_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_page_content($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 14
        if ((array_key_exists("sponsor", $context) && (twig_length_filter($this->env, (isset($context["sponsor"]) ? $context["sponsor"] : null)) > 0))) {
            // line 15
            echo "

\t";
            // line 17
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "picture")) > 0)) {
                // line 18
                echo "\t<div style=\"text-align: center; margin-bottom: 10px;\">
\t<img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/uploads/sponsor/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "picture"), "html", null, true);
                echo "\" class=\"img-rounded\">
\t</div>
\t";
            }
            // line 22
            echo "
\t";
            // line 23
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_name"), "method"), $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "name"));
            echo "
\t";
            // line 24
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_spiel"), "method"), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_match"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")));
            echo "
\t";
            // line 25
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_heimzuschlag"), "method"), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_home_bonus"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")));
            echo "
\t";
            // line 26
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_sieg"), "method"), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_win"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")));
            echo "
\t";
            // line 27
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_meisterschaft"), "method"), ((twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_championship"), 0, ",", " ") . " ") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method")));
            echo "
\t";
            // line 28
            echo $context["profile"]->getinfofield($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_club_sponsor_spiele"), "method"), $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "matchdays"));
            echo "

";
        } else {
            // line 32
            echo "
\t";
            // line 33
            if (((isset($context["teamMatchday"]) ? $context["teamMatchday"] : null) < $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "sponsor_earliest_matchday"), "method"))) {
                // line 34
                echo "\t\t";
                echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "sponsor_choose_tooearly", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "sponsor_earliest_matchday"), "method")), "method"), "", "warning");
                echo "
\t";
            } else {
                // line 36
                echo "
\t\t<p style=\"margin-top: 10px; margin-bottom: 20px;\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "sponsor_contractduraction_info", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "sponsor_matches"), "method")), "method"), "html", null, true);
                echo "</p>
\t
\t\t";
                // line 39
                if ((twig_length_filter($this->env, (isset($context["sponsors"]) ? $context["sponsors"] : null)) > 0)) {
                    // line 40
                    echo "\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_name"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_spiel"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_heimzuschlag"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_sieg"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_sponsor_b_meisterschaft"), "method"), "html", null, true);
                    echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                    // line 51
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) ? $context["sponsors"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                        // line 52
                        echo "\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><p>";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "name"), "html", null, true);
                        echo "</p>
\t\t\t\t\t<p><a href=\"#\" class=\"btn ajaxLink\"
\t\t\t\t\t\tdata-ajaxtarget=\"pagecontent\" data-ajaxquerystr=\"page=";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getPageId", array(), "method"), "html", null, true);
                        echo "&amp;action=choose-sponsor&amp;id=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "sponsor_id"), "html", null, true);
                        echo "\"><i class=\"icon-hand-right\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_choose"), "method"), "html", null, true);
                        echo "</a></p></td>
\t\t\t\t\t<td>";
                        // line 57
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_match"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 58
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_home_bonus"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 59
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_win"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 60
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "amount_championship"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t</tr>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t</tbody>
\t\t</table>
\t\t";
                } else {
                    // line 66
                    echo "\t\t\t";
                    echo $context["messagebox"]->getbox($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "sponsor_no_offers"), "method"), "", "info");
                    echo "
\t\t";
                }
                // line 68
                echo "\t";
            }
            // line 69
            echo "
";
        }
        // line 71
        echo "
";
    }

    public function getTemplateName()
    {
        return "views/sponsor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 71,  211 => 69,  208 => 68,  202 => 66,  197 => 63,  186 => 60,  180 => 59,  174 => 58,  168 => 57,  160 => 56,  155 => 54,  151 => 52,  147 => 51,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  119 => 40,  117 => 39,  112 => 37,  109 => 36,  103 => 34,  101 => 33,  98 => 32,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  69 => 22,  61 => 19,  58 => 18,  56 => 17,  52 => 15,  50 => 14,  47 => 12,  44 => 11,  38 => 8,  35 => 7,  30 => 3,  28 => 2,  26 => 1,);
    }
}
