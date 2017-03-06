<?php

/* help.twig */
class __TwigTemplate_7df35fbff1b9ea2eec298f6c900177a8a66b574e17c4a7fd7da90932141d283a extends Twig_Template
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
        echo "<div class=\"text-right\"><a href=\"#helpModal\" class=\"btn btn-info\" role=\"button\" data-toggle=\"modal\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "help_button"), "method"), "html", null, true);
        echo "</a></div>

<div id=\"helpModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" 
\taria-labelledby=\"helpModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"helpModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "help_dialog_title"), "method"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"modal-body\">
\t";
        // line 10
        $this->displayBlock("help_content", $context, $blocks);
        echo "
  </div>
  <div class=\"modal-footer\">
    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_close"), "method"), "html", null, true);
        echo "</a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  29 => 7,  28 => 3,  592 => 156,  589 => 155,  585 => 153,  581 => 151,  577 => 149,  573 => 147,  571 => 146,  568 => 145,  557 => 144,  542 => 140,  539 => 139,  531 => 137,  529 => 136,  523 => 135,  517 => 134,  512 => 131,  501 => 128,  490 => 124,  479 => 121,  475 => 120,  470 => 118,  466 => 117,  461 => 115,  451 => 112,  441 => 109,  438 => 108,  430 => 106,  422 => 104,  420 => 103,  417 => 102,  411 => 100,  406 => 98,  402 => 96,  395 => 94,  386 => 92,  384 => 91,  381 => 90,  378 => 89,  365 => 87,  360 => 86,  358 => 85,  345 => 82,  343 => 81,  340 => 80,  337 => 79,  327 => 77,  325 => 76,  313 => 73,  299 => 71,  283 => 67,  281 => 66,  278 => 65,  275 => 64,  272 => 63,  269 => 62,  265 => 61,  257 => 58,  253 => 57,  247 => 56,  238 => 49,  235 => 48,  232 => 47,  229 => 46,  226 => 45,  214 => 44,  201 => 40,  189 => 38,  181 => 36,  179 => 35,  162 => 30,  154 => 29,  138 => 27,  129 => 26,  127 => 25,  123 => 23,  117 => 21,  111 => 19,  108 => 18,  102 => 16,  99 => 15,  91 => 12,  78 => 11,  75 => 10,  66 => 9,  58 => 8,  52 => 7,  44 => 4,  41 => 13,  30 => 2,  25 => 143,  22 => 43,  19 => 1,  514 => 167,  508 => 165,  496 => 158,  486 => 123,  480 => 153,  471 => 149,  468 => 148,  462 => 147,  457 => 114,  449 => 144,  447 => 143,  443 => 110,  433 => 139,  431 => 138,  425 => 137,  421 => 136,  418 => 135,  409 => 99,  403 => 130,  397 => 129,  391 => 93,  385 => 127,  379 => 126,  373 => 125,  367 => 124,  361 => 123,  355 => 84,  351 => 120,  349 => 119,  344 => 116,  341 => 115,  334 => 111,  328 => 110,  323 => 107,  317 => 105,  315 => 74,  310 => 102,  302 => 99,  296 => 96,  291 => 69,  289 => 94,  284 => 91,  276 => 89,  274 => 88,  271 => 87,  263 => 85,  261 => 84,  258 => 83,  250 => 81,  248 => 80,  245 => 79,  241 => 77,  233 => 75,  231 => 74,  224 => 72,  219 => 71,  211 => 69,  208 => 68,  206 => 67,  200 => 64,  197 => 63,  195 => 57,  191 => 55,  185 => 53,  182 => 52,  174 => 33,  171 => 32,  166 => 47,  161 => 46,  158 => 45,  153 => 43,  148 => 42,  146 => 28,  133 => 40,  130 => 39,  122 => 37,  120 => 36,  114 => 35,  110 => 34,  103 => 33,  100 => 32,  95 => 31,  93 => 13,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  67 => 21,  65 => 20,  60 => 18,  54 => 17,  48 => 6,  46 => 12,  43 => 11,  40 => 10,  34 => 7,  31 => 4,  26 => 4,);
    }
}
