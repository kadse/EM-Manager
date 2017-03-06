<?php

/* views/formation_base.twig */
class __TwigTemplate_05ccd0ec281a2085761e16c82b118683caf6b892d5d85b29061065ec508e27c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutwithoutsidebar.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
            'formation_setup' => array($this, 'block_formation_setup'),
            'form_footer' => array($this, 'block_form_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutwithoutsidebar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["formelements"] = $this->env->loadTemplate("macros/formelements.twig");
        // line 4
        $context["statisticelements"] = $this->env->loadTemplate("macros/statisticelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('formation_setup', $context, $blocks);
        // line 14
        echo "
<form id=\"formationForm\" method=\"post\">
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["playerNo"]) {
            // line 17
            echo "\t\t<input type=\"hidden\" id=\"player";
            echo twig_escape_filter($this->env, (isset($context["playerNo"]) ? $context["playerNo"] : null), "html", null, true);
            echo "\" name=\"player";
            echo twig_escape_filter($this->env, (isset($context["playerNo"]) ? $context["playerNo"] : null), "html", null, true);
            echo "\" class=\"playerField\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), ("player" . (isset($context["playerNo"]) ? $context["playerNo"] : null)), array(), "array"), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" id=\"player";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["playerNo"]) ? $context["playerNo"] : null), "html", null, true);
            echo "_pos\" name=\"player";
            echo twig_escape_filter($this->env, (isset($context["playerNo"]) ? $context["playerNo"] : null), "html", null, true);
            echo "_pos\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("player" . (isset($context["playerNo"]) ? $context["playerNo"] : null)) . "_pos"), array(), "array"), "html", null, true);
            echo "\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playerNo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["benchNo"]) {
            // line 22
            echo "\t\t<input type=\"hidden\" id=\"bench";
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" name=\"bench";
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), ("bench" . (isset($context["benchNo"]) ? $context["benchNo"] : null)), array(), "array"), "html", null, true);
            echo "\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['benchNo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t
\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["subsNo"]) {
            // line 26
            echo "\t\t<input type=\"hidden\" id=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_out\" name=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_out\" class=\"subsInputOutPlayer\" data-subno=\"";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "\"
\t\t\t value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("sub" . (isset($context["subsNo"]) ? $context["subsNo"] : null)) . "_out"), array(), "array"), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" id=\"sub";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_in\" name=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_in\"
\t\t\tvalue=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("sub" . (isset($context["subsNo"]) ? $context["subsNo"] : null)) . "_in"), array(), "array"), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" id=\"sub";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_minute\" name=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_minute\"
\t\t\tvalue=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("sub" . (isset($context["subsNo"]) ? $context["subsNo"] : null)) . "_minute"), array(), "array"), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" id=\"sub";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_condition\" name=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_condition\"
\t\t\tvalue=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("sub" . (isset($context["subsNo"]) ? $context["subsNo"] : null)) . "_condition"), array(), "array"), "html", null, true);
            echo "\">
\t\t\t<input type=\"hidden\" id=\"sub";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_position\" name=\"sub";
            echo twig_escape_filter($this->env, (isset($context["subsNo"]) ? $context["subsNo"] : null), "html", null, true);
            echo "_position\"
\t\t\tvalue=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), (("sub" . (isset($context["subsNo"]) ? $context["subsNo"] : null)) . "_position"), array(), "array"), "html", null, true);
            echo "\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsNo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  


<h4>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_playground_title"), "method"), "html", null, true);
        echo "</h4> 


<div class=\"row\" style=\"margin-top:10px\">
\t<div class=\"span5 pitchColumn\">
\t
\t\t<div id=\"pitch\">
\t\t
\t\t\t<div class=\"position T freePosition\" data-position=\"goaly\" data-mainposition=\"T\">
\t\t\t\t<div class=\"positionLabel\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_T"), "method"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 52
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") > 3)) {
            // line 53
            echo "\t\t\t\t<div class=\"position LV freePosition";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") > 4)) {
                echo " goalyRow";
            }
            echo "\" data-position=\"defense\" data-mainposition=\"LV\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_LV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 57
        echo "\t\t\t
\t\t\t";
        // line 58
        if ((($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") == 4) || ($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") == 2))) {
            // line 59
            echo "\t\t\t\t<div class=\"position IV leftPos freePosition\" data-position=\"defense\" data-mainposition=\"IV.leftPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position IV rightPos freePosition\" data-position=\"defense\" data-mainposition=\"IV.rightPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif ((($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") == 3) || ($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") > 4))) {
            // line 66
            echo "\t\t\t\t<div class=\"position IV leftWing freePosition\" data-position=\"defense\" data-mainposition=\"IV.leftWing\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position IV centre freePosition\" data-position=\"defense\" data-mainposition=\"IV.centre\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position IV rightWing freePosition\" data-position=\"defense\" data-mainposition=\"IV.rightWing\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t<div class=\"position IV freePosition\" data-position=\"defense\" data-mainposition=\"IV\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_IV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 80
        echo "\t\t\t
\t\t\t";
        // line 81
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") > 3)) {
            // line 82
            echo "\t\t\t\t<div class=\"position RV freePosition";
            if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "defense") > 4)) {
                echo " goalyRow";
            }
            echo "\" data-position=\"defense\" data-mainposition=\"RV\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_RV"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 86
        echo "\t\t\t
\t\t\t";
        // line 87
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "dm") == 2)) {
            // line 88
            echo "\t\t\t\t<div class=\"position DM leftPos freePosition\" data-position=\"midfield\" data-mainposition=\"DM.leftPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position DM rightPos freePosition\" data-position=\"midfield\" data-mainposition=\"DM.rightPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "dm") == 1)) {
            // line 95
            echo "\t\t\t\t<div class=\"position DM freePosition\" data-position=\"midfield\" data-mainposition=\"DM\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "dm") == 3)) {
            // line 99
            echo "\t\t\t\t<div class=\"position DM leftOuterPos freePosition\" data-position=\"midfield\" data-mainposition=\"DM.leftOuterPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position DM innerPos freePosition\" data-position=\"midfield\" data-mainposition=\"DM.innerPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position DM rightOuterPos freePosition\" data-position=\"midfield\" data-mainposition=\"DM.rightOuterPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_DM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "\t\t\t
\t\t\t";
        // line 110
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") > 1)) {
            // line 111
            echo "\t\t\t\t<div class=\"position LM freePosition\" data-position=\"midfield\" data-mainposition=\"LM\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_LM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 115
        echo "\t\t\t
\t\t\t";
        // line 116
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") == 4)) {
            // line 117
            echo "\t\t\t\t<div class=\"position ZM leftPos freePosition\" data-position=\"midfield\" data-mainposition=\"ZM.leftPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_ZM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position ZM rightPos freePosition\" data-position=\"midfield\" data-mainposition=\"ZM.rightPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_ZM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif ((($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") != 2) && ($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") != 0))) {
            // line 124
            echo "\t\t\t\t<div class=\"position ZM freePosition\" data-position=\"midfield\" data-mainposition=\"ZM\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_ZM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 128
        echo "\t\t\t
\t\t\t";
        // line 129
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "midfield") > 1)) {
            // line 130
            echo "\t\t\t\t<div class=\"position RM freePosition\" data-position=\"midfield\" data-mainposition=\"RM\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_RM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 134
        echo "\t\t\t
\t\t\t";
        // line 135
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "om") == 2)) {
            // line 136
            echo "\t\t\t\t<div class=\"position OM leftPos freePosition\" data-position=\"midfield\" data-mainposition=\"OM.leftPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position OM rightPos freePosition\" data-position=\"midfield\" data-mainposition=\"OM.rightPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "om") == 1)) {
            // line 143
            echo "\t\t\t\t<div class=\"position OM freePosition\" data-position=\"midfield\" data-mainposition=\"OM\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "om") == 3)) {
            // line 147
            echo "\t\t\t\t<div class=\"position OM leftOuterPos freePosition\" data-position=\"midfield\" data-mainposition=\"OM.leftOuterPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position OM innerPos freePosition\" data-position=\"midfield\" data-mainposition=\"OM.innerPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position OM rightOuterPos freePosition\" data-position=\"midfield\" data-mainposition=\"OM.rightOuterPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_OM"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 157
        echo "\t\t\t
\t\t\t";
        // line 158
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "striker") == 1)) {
            // line 159
            echo "\t\t\t\t<div class=\"position MS freePosition\" data-position=\"striker\" data-mainposition=\"MS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_MS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "striker") == 2)) {
            // line 163
            echo "\t\t\t\t<div class=\"position MS leftPos freePosition\" data-position=\"striker\" data-mainposition=\"MS.leftPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_MS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position MS rightPos freePosition\" data-position=\"striker\" data-mainposition=\"MS.rightPos\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_MS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "striker") == 3)) {
            // line 170
            echo "\t\t\t\t<div class=\"position LS freePosition\" data-position=\"striker\" data-mainposition=\"LS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_LS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position MS freePosition\" data-position=\"striker\" data-mainposition=\"MS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_MS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position RS freePosition\" data-position=\"striker\" data-mainposition=\"RS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_RS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 180
        echo "\t\t\t
\t\t\t";
        // line 181
        if (($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "outsideforward", array(), "any", true, true) && ($this->getAttribute((isset($context["setup"]) ? $context["setup"] : null), "outsideforward") == 2))) {
            // line 182
            echo "\t\t\t\t<div class=\"position LS freePosition\" data-position=\"striker\" data-mainposition=\"LS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_LS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"position RS freePosition\" data-position=\"striker\" data-mainposition=\"RS\">
\t\t\t\t\t<div class=\"positionLabel\">";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_mainposition_RS"), "method"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 189
        echo "\t\t
\t\t</div>
\t\t
\t\t<h4>";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_bench"), "method"), "html", null, true);
        echo "</h4>
\t\t
\t\t<table class=\"table table-bordered\" style=\"width: 450px\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player"), "method"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_title"), "method"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 202
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["benchNo"]) {
            // line 203
            echo "\t\t\t\t\t<tr class=\"benchposition freePosition\">
\t\t\t\t\t\t<td class=\"benchPlayerInfo\">
\t\t\t\t\t\t\t<span class=\"benchPlaceholder\">";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_bench_placeholder"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<a class=\"benchPlayerRemove\" href=\"#\" title=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_button_remove_from_pitch"), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove darkIcon\"></i></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"benchPlayerSubAdd btn btn-small\" href=\"#subModal";
            // line 209
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-circle-arrow-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_bench_sub_in"), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"subModal";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" 
\t\t\t\t\t\t\t\taria-labelledby=\"subModal";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "Label\" aria-hidden=\"true\">
\t\t\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t\t    <h3 id=\"subModal";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "Label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_bench_sub_title"), "method"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"modal-body form-horizontal\">
\t\t\t\t\t\t\t  \t";
            // line 218
            echo $context["formelements"]->gettextfield(("sub_minute" . (isset($context["benchNo"]) ? $context["benchNo"] : null)), $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_minute"), "method"), "", false, null, "number");
            echo "
\t\t\t\t\t\t\t  \t
\t\t\t\t\t\t\t  \t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"sub_out";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_out"), "method"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<select name=\"sub_out";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" id=\"sub_out";
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" class=\"playersOutSelection\">
\t\t\t\t\t\t\t\t\t\t\t<option> </option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"sub_condition";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition"), "method"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<select name=\"sub_condition";
            // line 232
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" id=\"sub_condition";
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_none"), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tie\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_tie"), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Leading\">";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_leading"), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Deficit\">";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_deficit"), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"sub_position";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_position"), "method"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<select name=\"sub_position";
            // line 244
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\" id=\"sub_position";
            echo twig_escape_filter($this->env, (isset($context["benchNo"]) ? $context["benchNo"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_position_default"), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 246
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "T", 1 => "LV", 2 => "IV", 3 => "RV", 4 => "LM", 5 => "DM", 6 => "ZM", 7 => "OM", 8 => "RM", 9 => "LS", 10 => "MS", 11 => "RS"));
            foreach ($context['_seq'] as $context["_key"] => $context["subPosition"]) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["subPosition"]) ? $context["subPosition"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . (isset($context["subPosition"]) ? $context["subPosition"] : null))), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t  \t<a href=\"#\" class=\"btn btn-primary saveSubstitutionBtn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_save"), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_cancel"), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"benchPlayerSubInfo\">
\t\t\t\t\t\t\t\t";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_minute"), "method"), "html", null, true);
            echo ": <strong class=\"benchPlayerSubInfoMinute\"></strong>, <br>
\t\t\t\t\t\t\t\t";
            // line 262
            if ($this->getAttribute((isset($context["validationMsg"]) ? $context["validationMsg"] : null), (("sub" . (isset($context["benchNo"]) ? $context["benchNo"] : null)) . "_minute"), array(), "array", true, true)) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-error\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["validationMsg"]) ? $context["validationMsg"] : null), (("sub" . (isset($context["benchNo"]) ? $context["benchNo"] : null)) . "_minute"), array(), "array"), "html", null, true);
                echo "</strong></span><br>
\t\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_out"), "method"), "html", null, true);
            echo ": <strong class=\"benchPlayerSubInfoPlayer\"></strong>
\t\t\t\t\t\t\t\t<span class=\"benchPlayerSubInfoConditionTie\">,<br> ";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_tie"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"benchPlayerSubInfoConditionLeading\">,<br> ";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_leading"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"benchPlayerSubInfoConditionDeficit\">,<br> ";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_substitutions_condition_deficit"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"benchPlayerSubInfoPosition\" style=\"display: none\">,<br> <span class=\"subPositionLabel\"></span></span>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"removeSubstitutionBtn\" title=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_button_remove_from_pitch"), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a>
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['benchNo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"span5 playersColumn\">
\t
\t
\t\t";
        // line 282
        if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
            // line 283
            echo "\t\t
\t\t\t<div class=\"accordion\" id=\"playersSelection\">
\t\t\t\t";
            // line 285
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
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
            foreach ($context['_seq'] as $context["playerPosition"] => $context["positionPlayers"]) {
                // line 286
                echo "\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t";
                // line 288
                $context["typeImage"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . (isset($context["playerPosition"]) ? $context["playerPosition"] : null)) . ".png")), "method");
                // line 289
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["typeImage"]) ? $context["typeImage"] : null) != null)) {
                    // line 290
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["typeImage"]) ? $context["typeImage"] : null), "html", null, true);
                    echo "\" class=\"pull-left\" style=\"margin: 5px 5px 0px 2px\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["playerPosition"]) ? $context["playerPosition"] : null))), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 292
                echo "\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" 
\t\t\t\t\t\t\t\tdata-parent=\"#playersSelection\" href=\"#collapse";
                // line 293
                echo twig_escape_filter($this->env, (isset($context["playerPosition"]) ? $context["playerPosition"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . (isset($context["playerPosition"]) ? $context["playerPosition"] : null))), "method"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"collapse";
                // line 295
                echo twig_escape_filter($this->env, (isset($context["playerPosition"]) ? $context["playerPosition"] : null), "html", null, true);
                echo "\" class=\"accordion-body collapse";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    echo " in";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 296
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["positionPlayers"]) ? $context["positionPlayers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 297
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym")) > 0))) {
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["playerName"] = $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym");
                        // line 299
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 300
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["playerName"] = ((twig_slice($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), 0, 1) . ". ") . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"));
                        // line 301
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 302
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"playerinfo";
                    // line 303
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\" class=\"playerinfo";
                    if ((((!$this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array(), "any", true, true)) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured") == 0)) && ((!$this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array(), "any", true, true)) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked") == 0)))) {
                        echo " playerDraggable";
                    } else {
                        echo " playerBlocked";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-playerid=\"";
                    // line 304
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-pname=\"";
                    // line 305
                    echo twig_escape_filter($this->env, (isset($context["playerName"]) ? $context["playerName"] : null), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-position=\"";
                    // line 306
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-mainposition=\"";
                    // line 307
                    if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"), "html", null, true);
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-secondposition=\"";
                    // line 308
                    if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second"), "html", null, true);
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tdata-matchesblocked=\"";
                    // line 309
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array(), "any", true, true) && $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array(), "any", true, true))) {
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured") + $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked")), "html", null, true);
                    } else {
                        echo "0";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\t";
                    // line 310
                    if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1") || (array_key_exists("youthFormation", $context) && (isset($context["youthFormation"]) ? $context["youthFormation"] : null)))) {
                        // line 311
                        echo "\t\t\t\t\t\t\t\t\tdata-strength=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\tdata-strengthsecondary=\"";
                        // line 312
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength") * (1 - ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "sim_strength_reduction_secondary"), "method") / 100)))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\tdata-strengthwrong=\"";
                        // line 313
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength") * (1 - ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "sim_strength_reduction_wrongposition"), "method") / 100)))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 315
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "picture", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "picture")) > 0))) {
                        // line 316
                        echo "\t\t\t\t\t\t\t\t\tdata-picture=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                        echo "/uploads/player/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "picture"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 318
                    echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"playerinfoBar\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 321
                    if (((((isset($context["playerPosition"]) ? $context["playerPosition"] : null) != "bench") && ((!$this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array(), "any", true, true)) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured") == 0))) && ((!$this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array(), "any", true, true)) || ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked") == 0)))) {
                        // line 322
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoIcons text-right \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"addLink";
                        // line 323
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "\" href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-mini dropdown-toggle playerAddToPitchLink\"><i class=\"icon-plus-sign\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_button_to_pitch"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu text-left\" role=\"menu\" aria-labelledby=\"addLink";
                        // line 324
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"T\" >";
                        // line 325
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_T"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"LV\" >";
                        // line 327
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_LV"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"IV\" >";
                        // line 328
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_IV"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"RV\" >";
                        // line 329
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_RV"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"DM\" >";
                        // line 331
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_DM"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"LM\" >";
                        // line 332
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_LM"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"ZM\" >";
                        // line 333
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_ZM"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"RM\" >";
                        // line 334
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_RM"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"OM\" >";
                        // line 335
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_OM"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"LS\" >";
                        // line 337
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_LS"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"MS\" >";
                        // line 338
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_MS"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"playerAddToPitchLinkItem\" data-target=\"RS\" >";
                        // line 339
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "option_RS"), "method"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-mini playerRemoveLink\"><i class=\"icon-remove\"></i> ";
                        // line 341
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_button_remove_from_pitch"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-mini playerAddToBenchLink\"><i class=\"icon-retweet\"></i> ";
                        // line 342
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_button_to_bench"), "method"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 343
                        if (((!array_key_exists("youthFormation", $context)) || (!(isset($context["youthFormation"]) ? $context["youthFormation"] : null)))) {
                            // line 344
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                            echo "\" class=\"btn btn-mini\" target=\"_blank\"><i class=\"icon-info-sign\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_navlabel"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 346
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 348
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")) > 0))) {
                        // line 349
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainposition\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 350
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second")) > 0)) {
                            // line 351
                            echo "\t\t\t\t\t\t\t\t\t\t\t/ <span class=\"secondposition\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second"))), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second"))), "method"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 353
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 354
                    echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 355
                    if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename", array(), "any", true, true)) {
                        // line 356
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["nationImg"] = $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("flags/players/" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality_filename")) . ".png")), "method");
                        // line 357
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((isset($context["nationImg"]) ? $context["nationImg"] : null)) {
                            echo "<img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["nationImg"]) ? $context["nationImg"] : null), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality"), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality"), "html", null, true);
                            echo "\"  
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width: 15px; height: 10px; vertical-align: baseline\"/>";
                        }
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 360
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 361
                    if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array(), "any", true, true) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured") > 0))) {
                        // line 362
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"playerBlockedLabel\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_injured"), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-medkit\"></i> ";
                        // line 363
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array(), "any", true, true) && ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked") > 0))) {
                        // line 366
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"playerBlockedLabel\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 367
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => "icons/blocked_cards.png"), "method"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                        echo "\" style=\"width: 13px; height: 13px\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 370
                    echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span>";
                    // line 373
                    echo twig_escape_filter($this->env, (isset($context["playerName"]) ? $context["playerName"] : null), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                    echo ") ";
                    if ((array_key_exists("captain_id", $context) && ((isset($context["captain_id"]) ? $context["captain_id"] : null) == $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id")))) {
                        echo "<i class=\"icon-group wstooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_captain_tooltip"), "method"), "html", null, true);
                        echo "\"></i>";
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                    // line 377
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_matches"), "method"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_matches"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t| ";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_goals"), "method"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_goals"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t| ";
                    // line 379
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_details_statistic_yellow"), "method"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "st_cards_yellow"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 380
                    if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "marketvalue", array(), "any", true, true)) {
                        // line 381
                        echo "\t\t\t\t\t\t\t\t\t\t| ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_marktwert"), "method"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "marketvalue"), 0, ",", " "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 383
                    echo "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 385
                    if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1") || (array_key_exists("youthFormation", $context) && (isset($context["youthFormation"]) ? $context["youthFormation"] : null)))) {
                        // line 386
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthRow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthLabelFull\">";
                        // line 387
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_staerke"), "method"), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 388
                        echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength"), "playerinfoStrength");
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 390
                        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technique", array(), "any", true, true)) {
                            // line 391
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthRow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthLabelFull\">";
                            // line 392
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_technik"), "method"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 393
                            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technique"), "playerinfoStrength");
                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthRow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthLabelFull\">";
                            // line 396
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_kondition"), "method"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 397
                            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina"), "playerinfoStrength");
                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthRow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthLabelFull\">";
                            // line 400
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_frische"), "method"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 401
                            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness"), "playerinfoStrength");
                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthRow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"playerinfoStrengthLabelFull\">";
                            // line 404
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_zufriedenheit"), "method"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 405
                            echo $context["statisticelements"]->getprogressbar($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction"), "playerinfoStrength");
                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 408
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 409
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['playerPosition'], $context['positionPlayers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "\t\t\t
\t\t\t</div>
\t\t\t
\t\t";
        } else {
            // line 418
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_noplayers"), "method"), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 420
        echo "\t
\t</div>
</div>

<p><em>";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_dragging_note_title"), "method"), "html", null, true);
        echo "</em><br/>
\t\t\t";
        // line 425
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_dragging_note"), "method"), "html", null, true);
        echo "</p>

\t";
        // line 427
        $this->displayBlock('form_footer', $context, $blocks);
        // line 429
        echo "</form>
";
    }

    // line 12
    public function block_formation_setup($context, array $blocks = array())
    {
    }

    // line 427
    public function block_form_footer($context, array $blocks = array())
    {
        // line 428
        echo "\t";
    }

    public function getTemplateName()
    {
        return "views/formation_base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1228 => 428,  1225 => 427,  1220 => 12,  1215 => 429,  1213 => 427,  1208 => 425,  1204 => 424,  1198 => 420,  1192 => 418,  1186 => 414,  1170 => 411,  1163 => 409,  1160 => 408,  1154 => 405,  1150 => 404,  1144 => 401,  1140 => 400,  1134 => 397,  1130 => 396,  1124 => 393,  1120 => 392,  1117 => 391,  1115 => 390,  1110 => 388,  1106 => 387,  1103 => 386,  1101 => 385,  1097 => 383,  1087 => 381,  1085 => 380,  1079 => 379,  1073 => 378,  1067 => 377,  1052 => 373,  1047 => 370,  1037 => 367,  1032 => 366,  1026 => 363,  1021 => 362,  1019 => 361,  1016 => 360,  1013 => 359,  1001 => 357,  998 => 356,  996 => 355,  993 => 354,  990 => 353,  982 => 351,  980 => 350,  973 => 349,  970 => 348,  966 => 346,  958 => 344,  956 => 343,  952 => 342,  948 => 341,  943 => 339,  939 => 338,  935 => 337,  930 => 335,  926 => 334,  922 => 333,  918 => 332,  914 => 331,  909 => 329,  905 => 328,  901 => 327,  896 => 325,  892 => 324,  886 => 323,  883 => 322,  881 => 321,  876 => 318,  868 => 316,  865 => 315,  860 => 313,  856 => 312,  851 => 311,  849 => 310,  841 => 309,  835 => 308,  829 => 307,  825 => 306,  821 => 305,  817 => 304,  807 => 303,  804 => 302,  801 => 301,  798 => 300,  795 => 299,  792 => 298,  789 => 297,  785 => 296,  777 => 295,  770 => 293,  767 => 292,  759 => 290,  756 => 289,  754 => 288,  750 => 286,  733 => 285,  729 => 283,  727 => 282,  719 => 276,  708 => 271,  703 => 269,  699 => 268,  695 => 267,  691 => 266,  688 => 265,  682 => 263,  680 => 262,  676 => 261,  667 => 255,  663 => 254,  656 => 249,  645 => 247,  641 => 246,  637 => 245,  631 => 244,  624 => 242,  615 => 236,  611 => 235,  607 => 234,  603 => 233,  597 => 232,  590 => 230,  578 => 223,  571 => 221,  565 => 218,  557 => 215,  551 => 212,  547 => 211,  540 => 209,  526 => 203,  522 => 202,  515 => 198,  511 => 197,  503 => 192,  486 => 183,  483 => 182,  481 => 181,  478 => 180,  472 => 177,  460 => 171,  457 => 170,  445 => 164,  442 => 163,  436 => 160,  431 => 158,  428 => 157,  422 => 154,  416 => 151,  410 => 148,  407 => 147,  401 => 144,  398 => 143,  392 => 140,  386 => 137,  383 => 136,  381 => 135,  378 => 134,  372 => 131,  367 => 129,  364 => 128,  355 => 124,  349 => 121,  340 => 117,  338 => 116,  335 => 115,  329 => 112,  324 => 110,  315 => 106,  309 => 103,  303 => 100,  300 => 99,  291 => 95,  285 => 92,  276 => 88,  274 => 87,  265 => 83,  258 => 82,  256 => 81,  253 => 80,  247 => 77,  238 => 73,  232 => 70,  226 => 67,  223 => 66,  211 => 60,  208 => 59,  206 => 58,  203 => 57,  197 => 54,  188 => 52,  182 => 49,  170 => 40,  165 => 37,  157 => 35,  151 => 34,  147 => 33,  137 => 31,  127 => 29,  121 => 28,  117 => 27,  108 => 26,  104 => 25,  101 => 24,  88 => 22,  81 => 20,  69 => 18,  60 => 17,  56 => 16,  52 => 14,  50 => 12,  44 => 10,  38 => 7,  35 => 6,  30 => 4,  28 => 3,  534 => 206,  530 => 205,  514 => 170,  507 => 168,  504 => 167,  498 => 189,  492 => 186,  490 => 162,  485 => 159,  480 => 157,  477 => 156,  475 => 155,  466 => 174,  459 => 149,  451 => 167,  440 => 140,  433 => 159,  425 => 135,  418 => 131,  413 => 129,  406 => 125,  400 => 123,  397 => 122,  389 => 116,  380 => 110,  369 => 130,  362 => 101,  358 => 125,  356 => 98,  353 => 97,  347 => 94,  343 => 118,  339 => 92,  333 => 88,  331 => 87,  326 => 111,  321 => 109,  306 => 80,  302 => 79,  298 => 78,  294 => 96,  279 => 89,  275 => 73,  271 => 86,  267 => 70,  252 => 68,  248 => 67,  244 => 76,  240 => 64,  225 => 62,  221 => 61,  217 => 63,  213 => 58,  198 => 56,  194 => 55,  190 => 53,  186 => 52,  171 => 50,  167 => 49,  163 => 48,  158 => 46,  153 => 44,  149 => 43,  141 => 32,  135 => 35,  131 => 30,  118 => 30,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  84 => 21,  78 => 20,  70 => 15,  66 => 13,  47 => 11,  43 => 10,  37 => 7,  32 => 4,  29 => 3,);
    }
}
