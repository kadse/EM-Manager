<?php

/* blocks/lastmatch.twig */
class __TwigTemplate_4ab678a7022ef79fa3b5ed809a5598655472f7539767acaa20ea5af850d3083e extends Twig_Template
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
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "last_match_block_title"), "method"), "html", null, true);
        echo "</h4>
";
        // line 2
        if ($this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_id", array(), "any", true, true)) {
            // line 3
            echo "
<p><em>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_date")), "method"), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("matchtype_" . $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_type"))), "method"), "html", null, true);
            echo "</em></p>
<p><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_home_id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_home_name"), "html", null, true);
            echo "</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_guest_id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_guest_name"), "html", null, true);
            echo "</a>: 
<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_id"))), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_navlabel"), "method"), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_goals_home"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_match"]) ? $context["last_match"] : null), "match_goals_guest"), "html", null, true);
            echo "</strong></a></p>

";
        } else {
            // line 9
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "last_match_block_no_lastmatch"), "method"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/lastmatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 3,  24 => 2,  19 => 1,  149 => 41,  143 => 39,  138 => 36,  132 => 34,  128 => 32,  115 => 29,  109 => 28,  106 => 27,  102 => 26,  99 => 25,  97 => 24,  93 => 23,  85 => 20,  81 => 18,  75 => 17,  69 => 15,  67 => 14,  61 => 13,  57 => 9,  51 => 10,  45 => 6,  43 => 7,  37 => 6,  27 => 3,  25 => 2,  20 => 1,  34 => 5,  31 => 5,  28 => 3,  41 => 8,  38 => 7,  32 => 4,  29 => 4,);
    }
}
