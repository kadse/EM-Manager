<?php

/* views/league-details.twig */
class __TwigTemplate_23bd60fd3e0f4836cb7d1e3be4c43bc90bfe6104ebe652e473d6dfb45224ed2b extends Twig_Template
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

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "league_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
        echo "
<form class=\"form-inline\" method=\"post\">

\t<label class=\"control-label\" for=\"country\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_league"), "method"), "html", null, true);
        echo "</label> 
\t<select id=\"id\" name=\"id\" class=\"span3\">
\t\t<option></option>
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leagues"]) ? $context["leagues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["leagueItem"]) {
            // line 15
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leagueItem"]) ? $context["leagueItem"] : null), "league_id"), "html", null, true);
            echo "\"";
            if ((($this->getAttribute((isset($context["league"]) ? $context["league"] : null), "league_id", array(), "any", true, true) && ($this->getAttribute((isset($context["league"]) ? $context["league"] : null), "league_id") == $this->getAttribute((isset($context["leagueItem"]) ? $context["leagueItem"] : null), "league_id"))) || ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method") == $this->getAttribute((isset($context["leagueItem"]) ? $context["leagueItem"] : null), "league_id")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leagueItem"]) ? $context["leagueItem"] : null), "league_country"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leagueItem"]) ? $context["leagueItem"] : null), "league_name"), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leagueItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</select>

\t<button type=\"submit\" class=\"btn btn-primary ajaxSubmit\" 
\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_display"), "method"), "html", null, true);
        echo "</button>

\t<input type=\"hidden\" name=\"page\" value=\"leagues\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "views/league-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  73 => 17,  56 => 15,  52 => 14,  46 => 11,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
