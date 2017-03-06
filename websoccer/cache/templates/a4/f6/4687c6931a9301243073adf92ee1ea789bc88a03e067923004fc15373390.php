<?php

/* layoutwithoutsidebar.twig */
class __TwigTemplate_a4f64687c6931a9301243073adf92ee1ea789bc88a03e067923004fc15373390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'page_columns' => array($this, 'block_page_columns'),
            'messages_block' => array($this, 'block_messages_block'),
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

    // line 4
    public function block_page_columns($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container main-container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span12\" id=\"contentArea\">
\t\t\t\t<div class=\"box\">
\t\t\t\t
\t\t\t\t\t";
        // line 10
        $this->env->loadTemplate("breadcrumb.twig")->display($context);
        // line 11
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h1>";
        // line 13
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"messages\">
\t\t\t\t\t";
        // line 17
        $this->displayBlock('messages_block', $context, $blocks);
        // line 20
        echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"pagecontent\">
\t\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top", array(), "any", true, true)) {
            // line 24
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 25
                echo "\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t";
                // line 26
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 32
        $this->displayBlock("page_content", $context, $blocks);
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom", array(), "any", true, true)) {
            // line 35
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t";
                // line 37
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 17
    public function block_messages_block($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t\t\t";
        echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => "messagesblock"), "method");
        echo "
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "layoutwithoutsidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 18,  126 => 17,  116 => 41,  113 => 40,  99 => 36,  94 => 35,  92 => 34,  87 => 32,  83 => 30,  80 => 29,  71 => 26,  61 => 24,  59 => 23,  54 => 20,  45 => 13,  41 => 11,  39 => 10,  1228 => 428,  1225 => 427,  1220 => 12,  1215 => 429,  1213 => 427,  1208 => 425,  1204 => 424,  1198 => 420,  1192 => 418,  1186 => 414,  1170 => 411,  1163 => 409,  1160 => 408,  1154 => 405,  1150 => 404,  1144 => 401,  1140 => 400,  1134 => 397,  1130 => 396,  1124 => 393,  1120 => 392,  1117 => 391,  1115 => 390,  1110 => 388,  1106 => 387,  1103 => 386,  1101 => 385,  1097 => 383,  1087 => 381,  1085 => 380,  1079 => 379,  1073 => 378,  1067 => 377,  1052 => 373,  1047 => 370,  1037 => 367,  1032 => 366,  1026 => 363,  1021 => 362,  1019 => 361,  1016 => 360,  1013 => 359,  1001 => 357,  998 => 356,  996 => 355,  993 => 354,  990 => 353,  982 => 351,  980 => 350,  973 => 349,  970 => 348,  966 => 346,  958 => 344,  956 => 343,  952 => 342,  948 => 341,  943 => 339,  939 => 338,  935 => 337,  930 => 335,  926 => 334,  922 => 333,  918 => 332,  914 => 331,  909 => 329,  905 => 328,  901 => 327,  896 => 325,  892 => 324,  886 => 323,  883 => 322,  881 => 321,  876 => 318,  868 => 316,  865 => 315,  860 => 313,  856 => 312,  851 => 311,  849 => 310,  841 => 309,  835 => 308,  829 => 307,  825 => 306,  821 => 305,  817 => 304,  807 => 303,  804 => 302,  801 => 301,  798 => 300,  795 => 299,  792 => 298,  789 => 297,  785 => 296,  777 => 295,  770 => 293,  767 => 292,  759 => 290,  756 => 289,  754 => 288,  750 => 286,  733 => 285,  729 => 283,  727 => 282,  719 => 276,  708 => 271,  703 => 269,  699 => 268,  695 => 267,  691 => 266,  688 => 265,  682 => 263,  680 => 262,  676 => 261,  667 => 255,  663 => 254,  656 => 249,  645 => 247,  641 => 246,  637 => 245,  631 => 244,  624 => 242,  615 => 236,  611 => 235,  607 => 234,  603 => 233,  597 => 232,  590 => 230,  578 => 223,  571 => 221,  565 => 218,  557 => 215,  551 => 212,  547 => 211,  540 => 209,  526 => 203,  522 => 202,  515 => 198,  511 => 197,  503 => 192,  486 => 183,  483 => 182,  481 => 181,  478 => 180,  472 => 177,  460 => 171,  457 => 170,  445 => 164,  442 => 163,  436 => 160,  431 => 158,  428 => 157,  422 => 154,  416 => 151,  410 => 148,  407 => 147,  401 => 144,  398 => 143,  392 => 140,  386 => 137,  383 => 136,  381 => 135,  378 => 134,  372 => 131,  367 => 129,  364 => 128,  355 => 124,  349 => 121,  340 => 117,  338 => 116,  335 => 115,  329 => 112,  324 => 110,  315 => 106,  309 => 103,  303 => 100,  300 => 99,  291 => 95,  285 => 92,  276 => 88,  274 => 87,  265 => 83,  258 => 82,  256 => 81,  253 => 80,  247 => 77,  238 => 73,  232 => 70,  226 => 67,  223 => 66,  211 => 60,  208 => 59,  206 => 58,  203 => 57,  197 => 54,  188 => 52,  182 => 49,  170 => 40,  165 => 37,  157 => 35,  151 => 34,  147 => 33,  137 => 31,  127 => 29,  121 => 28,  117 => 27,  108 => 26,  104 => 37,  101 => 24,  88 => 22,  81 => 20,  69 => 18,  60 => 17,  56 => 16,  52 => 17,  50 => 12,  44 => 10,  38 => 7,  35 => 6,  30 => 4,  28 => 3,  534 => 206,  530 => 205,  514 => 170,  507 => 168,  504 => 167,  498 => 189,  492 => 186,  490 => 162,  485 => 159,  480 => 157,  477 => 156,  475 => 155,  466 => 174,  459 => 149,  451 => 167,  440 => 140,  433 => 159,  425 => 135,  418 => 131,  413 => 129,  406 => 125,  400 => 123,  397 => 122,  389 => 116,  380 => 110,  369 => 130,  362 => 101,  358 => 125,  356 => 98,  353 => 97,  347 => 94,  343 => 118,  339 => 92,  333 => 88,  331 => 87,  326 => 111,  321 => 109,  306 => 80,  302 => 79,  298 => 78,  294 => 96,  279 => 89,  275 => 73,  271 => 86,  267 => 70,  252 => 68,  248 => 67,  244 => 76,  240 => 64,  225 => 62,  221 => 61,  217 => 63,  213 => 58,  198 => 56,  194 => 55,  190 => 53,  186 => 52,  171 => 50,  167 => 49,  163 => 48,  158 => 46,  153 => 44,  149 => 43,  141 => 32,  135 => 35,  131 => 30,  118 => 30,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  84 => 21,  78 => 20,  70 => 15,  66 => 25,  47 => 11,  43 => 10,  37 => 7,  32 => 5,  29 => 4,);
    }
}
