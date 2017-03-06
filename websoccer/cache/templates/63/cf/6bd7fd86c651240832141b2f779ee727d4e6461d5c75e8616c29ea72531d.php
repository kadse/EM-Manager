<?php

/* blocks/nextmatch.twig */
class __TwigTemplate_63cf6bd7fd86c651240832141b2f779ee727d4e6461d5c75e8616c29ea72531d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nextmatch_footer' => array($this, 'block_nextmatch_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_title"), "method"), "html", null, true);
        echo "</h4>
";
        // line 2
        if (array_key_exists("match_date", $context)) {
            // line 3
            echo "<div class=\"row\">
\t<div class=\"span4\">
\t\t<p><em>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => (isset($context["match_date"]) ? $context["match_date"] : null)), "method"), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("matchtype_" . (isset($context["match_type"]) ? $context["match_type"] : null))), "method"), "html", null, true);
            echo "</em></p>
\t\t<p><strong><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . (isset($context["match_home_id"]) ? $context["match_home_id"] : null))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["match_home_name"]) ? $context["match_home_name"] : null), "html", null, true);
            echo "</a> 
\t\t\t";
            // line 7
            if ((isset($context["match_home_formation_id"]) ? $context["match_home_formation_id"] : null)) {
                // line 8
                echo "\t\t\t\t<i class=\"icon-check-sign wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_submitted_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t<i class=\"icon-minus-sign-alt wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_notsubmitted_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t";
            }
            // line 11
            echo " 
\t\t\t- 
\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . (isset($context["match_guest_id"]) ? $context["match_guest_id"] : null))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["match_guest_name"]) ? $context["match_guest_name"] : null), "html", null, true);
            echo "</a>
\t\t\t";
            // line 14
            if ((isset($context["match_guest_formation_id"]) ? $context["match_guest_formation_id"] : null)) {
                // line 15
                echo "\t\t\t\t<i class=\"icon-check-sign wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_submitted_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t<i class=\"icon-minus-sign-alt wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_notsubmitted_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t";
            }
            // line 18
            echo " 
\t\t\t</strong></p>
\t\t<p><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . (isset($context["match_id"]) ? $context["match_id"] : null))), "method"), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_navlabel"), "method"), "html", null, true);
            echo "</a></p>
\t</div>
\t<div class=\"span3\">
\t\t<p><em>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_previous_matches"), "method"), "html", null, true);
            echo "</em></p>
\t\t";
            // line 24
            if ((array_key_exists("previous_matches", $context) && (twig_length_filter($this->env, (isset($context["previous_matches"]) ? $context["previous_matches"] : null)) > 0))) {
                // line 25
                echo "\t\t<table class=\"table\">
\t\t";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["previous_matches"]) ? $context["previous_matches"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["previousMatch"]) {
                    // line 27
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "home_team"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "guest_team"), "html", null, true);
                    echo "</td>
\t\t\t\t<td><a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "home_goals"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previousMatch"]) ? $context["previousMatch"] : null), "guest_goals"), "html", null, true);
                    echo "</a></td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousMatch'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t</table>
\t\t";
            } else {
                // line 34
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_no_previous_matches"), "method"), "html", null, true);
                echo "</p>
\t\t";
            }
            // line 36
            echo "\t</div>
</div>
";
        } else {
            // line 39
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "next_match_block_no_nextmatch"), "method"), "html", null, true);
            echo "</p>
";
        }
        // line 41
        $this->displayBlock('nextmatch_footer', $context, $blocks);
    }

    public function block_nextmatch_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "blocks/nextmatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  143 => 39,  138 => 36,  132 => 34,  128 => 32,  115 => 29,  109 => 28,  106 => 27,  102 => 26,  99 => 25,  97 => 24,  93 => 23,  85 => 20,  81 => 18,  75 => 17,  69 => 15,  67 => 14,  61 => 13,  57 => 11,  51 => 10,  45 => 8,  43 => 7,  37 => 6,  27 => 3,  25 => 2,  20 => 1,  34 => 5,  31 => 5,  28 => 3,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
