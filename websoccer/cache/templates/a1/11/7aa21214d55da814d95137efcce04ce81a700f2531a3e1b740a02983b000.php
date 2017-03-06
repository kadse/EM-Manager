<?php

/* navigationbar.twig */
class __TwigTemplate_a1117aa21214d55da814d95137efcce04ce81a700f2531a3e1b740a02983b000 extends Twig_Template
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
        $context["navitemTemplate"] = $this->env->loadTemplate("macros/navitem.twig");
        // line 2
        echo "
<div class=\"navbar navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"> 
\t\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</a> 
\t\t\t<a class=\"brand\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getNavigationLabel", array(0 => "home"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "projectname"), "method"), "html", null, true);
        echo "</a>
\t\t\t
\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t<ul class=\"nav\" role=\"menu\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navItems"]) ? $context["navItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["navItem"]) {
            // line 16
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 17
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "children")) > 0)) {
                // line 18
                echo "\t\t\t\t\t<li role=\"menuitem\" class=\"dropdown";
                if ($this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "isActive")) {
                    echo "  active";
                }
                echo "\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" id=\"label";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "pageId"), "html", null, true);
                echo "\" role=\"button\"
\t\t\t\t\t\t\tdata-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "label"), "html", null, true);
                echo " <b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"label";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "pageId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 24
                echo $context["navitemTemplate"]->getitem($this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "pageId"), $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "label"), false);
                echo "
\t\t\t\t\t\t\t";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["navChild"]) {
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                    echo $context["navitemTemplate"]->getitem($this->getAttribute((isset($context["navChild"]) ? $context["navChild"] : null), "pageId"), $this->getAttribute((isset($context["navChild"]) ? $context["navChild"] : null), "label"), $this->getAttribute((isset($context["navChild"]) ? $context["navChild"] : null), "isActive"));
                    echo "
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navChild'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t\t";
                echo $context["navitemTemplate"]->getitem($this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "pageId"), $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "label"), $this->getAttribute((isset($context["navItem"]) ? $context["navItem"] : null), "isActive"));
                echo "
\t\t\t\t\t";
            }
            // line 33
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "navigationbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  90 => 28,  81 => 26,  77 => 25,  69 => 23,  64 => 21,  59 => 19,  52 => 18,  43 => 15,  32 => 11,  21 => 2,  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 106,  141 => 105,  134 => 104,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 31,  89 => 23,  73 => 24,  61 => 17,  57 => 16,  51 => 14,  48 => 13,  45 => 12,  39 => 10,  37 => 9,  29 => 4,  102 => 28,  96 => 18,  93 => 17,  79 => 16,  63 => 12,  54 => 11,  46 => 7,  42 => 11,  38 => 3,  36 => 2,  24 => 1,  19 => 1,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 114,  160 => 53,  158 => 52,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 37,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 13,  55 => 12,  53 => 11,  50 => 17,  47 => 16,  34 => 6,  31 => 5,  26 => 3,);
    }
}
