<?php

/* blocks/messagesblock.twig */
class __TwigTemplate_ebece036f611ec810e5ff4a096c91fa65df5821db66b34b4dd59f1096eee979c extends Twig_Template
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
        $context["msgbox"] = $this->env->loadTemplate("macros/messagebox.twig");
        // line 2
        echo "

";
        // line 4
        if (array_key_exists("frontMessages", $context)) {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["frontMessages"]) ? $context["frontMessages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "\t\t";
                echo $context["msgbox"]->getbox($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "title"), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message"), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "type"));
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "blocks/messagesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  25 => 4,  76 => 13,  62 => 12,  44 => 5,  41 => 4,  101 => 33,  90 => 28,  81 => 26,  77 => 25,  69 => 23,  64 => 21,  59 => 19,  52 => 18,  43 => 15,  32 => 6,  21 => 2,  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 106,  141 => 105,  134 => 104,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 31,  89 => 23,  73 => 24,  61 => 17,  57 => 16,  51 => 14,  48 => 13,  45 => 12,  39 => 10,  37 => 9,  29 => 4,  102 => 28,  96 => 18,  93 => 17,  79 => 16,  63 => 12,  54 => 11,  46 => 7,  42 => 11,  38 => 3,  36 => 2,  24 => 3,  19 => 1,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 114,  160 => 53,  158 => 52,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 37,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 13,  55 => 12,  53 => 8,  50 => 7,  47 => 16,  34 => 2,  31 => 5,  26 => 3,);
    }
}
