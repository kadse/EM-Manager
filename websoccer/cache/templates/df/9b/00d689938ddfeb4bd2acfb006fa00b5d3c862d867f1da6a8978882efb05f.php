<?php

/* blocks/ads_sidebar.twig */
class __TwigTemplate_df9b00d689938ddfeb4bd2acfb006fa00b5d3c862d867f1da6a8978882efb05f extends Twig_Template
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
        $context["adcode"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "frontend_ads_code_sidebar"), "method");
        // line 2
        if (twig_length_filter($this->env, (isset($context["adcode"]) ? $context["adcode"] : null))) {
            // line 3
            echo "\t";
            echo (isset($context["adcode"]) ? $context["adcode"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/ads_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 73,  225 => 68,  223 => 67,  220 => 66,  207 => 63,  196 => 59,  183 => 57,  151 => 43,  146 => 41,  142 => 39,  138 => 37,  136 => 36,  131 => 35,  122 => 32,  118 => 31,  68 => 18,  40 => 9,  194 => 59,  186 => 58,  176 => 48,  172 => 51,  156 => 46,  153 => 42,  139 => 40,  137 => 39,  132 => 37,  129 => 34,  121 => 34,  111 => 31,  107 => 28,  86 => 22,  83 => 22,  80 => 21,  72 => 20,  35 => 8,  22 => 2,  23 => 3,  27 => 6,  25 => 4,  76 => 20,  62 => 18,  44 => 5,  41 => 4,  101 => 33,  90 => 28,  81 => 26,  77 => 25,  69 => 23,  64 => 17,  59 => 19,  52 => 18,  43 => 10,  32 => 6,  21 => 2,  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 42,  141 => 105,  134 => 38,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 26,  89 => 23,  73 => 24,  61 => 16,  57 => 16,  51 => 15,  48 => 12,  45 => 5,  39 => 9,  37 => 3,  29 => 4,  102 => 28,  96 => 18,  93 => 24,  79 => 16,  63 => 12,  54 => 11,  46 => 11,  42 => 11,  38 => 13,  36 => 2,  24 => 3,  19 => 1,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 72,  239 => 71,  236 => 80,  233 => 79,  230 => 69,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 64,  204 => 62,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 50,  160 => 47,  158 => 44,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 29,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 17,  55 => 16,  53 => 13,  50 => 19,  47 => 16,  34 => 6,  31 => 5,  26 => 3,);
    }
}
