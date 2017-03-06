<?php

/* blocks/league_table.twig */
class __TwigTemplate_35476e178657a5823c4faa2f7a2b042f8ff98cb54e5a2a14f82f806708e04d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("blocks/table_base.twig");

        $this->blocks = array(
            'table_header' => array($this, 'block_table_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blocks/table_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_table_header($context, array $blocks = array())
    {
        // line 5
        echo "\t<ul class=\"nav nav-pills\">
\t\t<li";
        // line 6
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method") == null)) {
            echo " class=\"active\"";
        }
        echo ">
\t\t\t<a href=\"#currentTable\" class=\"ajaxLink\"
\t\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\" data-ajaxquerystr=\"id=";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["leagueId"]) ? $context["leagueId"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_block_title"), "method"), "html", null, true);
        echo "</a>
\t\t</li>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) ? $context["seasons"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 11
            echo "\t\t<li";
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method") == $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "id"))) {
                echo " class=\"active\"";
            }
            echo "><a href=\"#season";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" class=\"ajaxLink\"
\t\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\" data-ajaxquerystr=\"id=";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["leagueId"]) ? $context["leagueId"] : null), "html", null, true);
            echo "&seasonid=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["season"]) ? $context["season"] : null), "name"), "html", null, true);
            echo "</a></li>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ul>
\t
\t<div class=\"btn-group\" style=\"margin-bottom: 10px;\">
\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#showAll\">
\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_button_type"), "method"), "html", null, true);
        echo "
\t\t\t<span class=\"caret\"></span>
\t\t</a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li";
        // line 22
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "type"), "method") == null)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"#wholeTable\" class=\"ajaxLink\"
\t\t\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\" data-ajaxquerystr=\"id=";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["leagueId"]) ? $context["leagueId"] : null), "html", null, true);
        echo "&seasonid=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list-alt\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_button_type_total"), "method"), "html", null, true);
        echo "</a></li>
\t\t\t<li";
        // line 24
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "type"), "method") == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"#homeTable\" class=\"ajaxLink\"
\t\t\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\" data-ajaxquerystr=\"id=";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["leagueId"]) ? $context["leagueId"] : null), "html", null, true);
        echo "&seasonid=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method"), "html", null, true);
        echo "&type=home\"><i class=\"icon-arrow-right\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_button_type_home"), "method"), "html", null, true);
        echo "</a></li>
\t\t\t<li";
        // line 26
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "type"), "method") == "guest")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"#guestTable\"class=\"ajaxLink\"
\t\t\t\tdata-ajaxtarget=\"leaguetable_block\" data-ajaxblock=\"leaguetable\" data-ajaxquerystr=\"id=";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["leagueId"]) ? $context["leagueId"] : null), "html", null, true);
        echo "&seasonid=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method"), "html", null, true);
        echo "&type=guest\"><i class=\"icon-arrow-left\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_button_type_guest"), "method"), "html", null, true);
        echo "</a></li>
\t\t</ul>
\t  
\t\t
\t</div>
\t<a class=\"btn\" style=\"margin-bottom: 10px;\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "results", 1 => ((("leagueid=" . (isset($context["leagueId"]) ? $context["leagueId"] : null)) . "&seasonid=") . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method"))), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "results_navlabel"), "method"), "html", null, true);
        echo "</a>
\t
\t";
        // line 34
        if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "seasonid"), "method") == null) && ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "type"), "method") != null))) {
            // line 35
            echo "\t<p><i class=\"icon-info-sign\"></i> <em>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "leaguetable_timedelay_info"), "method"), "html", null, true);
            echo "</em></p>
\t";
        }
    }

    public function getTemplateName()
    {
        return "blocks/league_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 35,  160 => 34,  153 => 32,  141 => 27,  135 => 26,  127 => 25,  121 => 24,  113 => 23,  107 => 22,  100 => 18,  94 => 14,  74 => 12,  65 => 11,  48 => 10,  41 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
