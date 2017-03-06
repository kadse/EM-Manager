<?php

/* blocks/teamplayers.twig */
class __TwigTemplate_562299264f962a9aca26f1e3cebd8e05ccafce9fea37918597391bb9f36df7fc extends Twig_Template
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
        $context["playerlists"] = $this->env->loadTemplate("macros/playerlists.twig");
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
            // line 4
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t
\t\t\t\t";
            // line 11
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                // line 12
                echo "\t\t\t\t\t<th><abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t\t<th><abbr title=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t\t<th><abbr title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t\t<th><abbr title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t\t<th><abbr title=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t
\t\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_age"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_blocked"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t
\t\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 26
                echo "\t\t\t\t";
                echo $context["playerlists"]->getteamlistItem((isset($context["player"]) ? $context["player"] : null));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t
\t\t</tbody>
\t</table>

";
        } else {
            // line 33
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "no_players_found"), "method"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/teamplayers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  105 => 28,  96 => 26,  92 => 25,  84 => 20,  80 => 19,  77 => 18,  70 => 16,  64 => 15,  58 => 14,  52 => 13,  45 => 12,  43 => 11,  38 => 9,  32 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
