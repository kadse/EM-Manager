<?php

/* macros/statisticelements.twig */
class __TwigTemplate_a969524713b51a6ce9ec8c1c32f62ba0796c221a7a3f4c314bd0f846d48c0686 extends Twig_Template
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
        // line 15
        echo "
";
    }

    // line 1
    public function getprogressbar($_percentvalue = 0, $_cssClass = "")
    {
        $context = $this->env->mergeGlobals(array(
            "percentvalue" => $_percentvalue,
            "cssClass" => $_cssClass,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 80)) {
                // line 3
                echo "\t";
                $context["progress_status"] = "success";
            } elseif (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 50)) {
                // line 5
                echo "\t";
                $context["progress_status"] = "info";
            } elseif (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 30)) {
                // line 7
                echo "\t";
                $context["progress_status"] = "warning";
            } else {
                // line 9
                echo "\t";
                $context["progress_status"] = "danger";
            }
            // line 11
            echo "<div class=\"progress progress-";
            echo twig_escape_filter($this->env, (isset($context["progress_status"]) ? $context["progress_status"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%\">
  <div class=\"bar\" style=\"width: ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getpiechart($_label1 = null, $_percentvalue1 = null, $_label2 = null, $_percentvalue2 = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label1" => $_label1,
            "percentvalue1" => $_percentvalue1,
            "label2" => $_label2,
            "percentvalue2" => $_percentvalue2,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "
<div class=\"pieChart\" style=\"width:250px;height:250px\" data-series='[{\"label\": \"";
            // line 18
            echo twig_escape_filter($this->env, trim((isset($context["label2"]) ? $context["label2"] : null)), "html", null, true);
            echo "\",  \"data\": \"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue2"]) ? $context["percentvalue2"] : null), "html", null, true);
            echo "\", \"color\": \"#FF6600\"},
{ \"label\": \"";
            // line 19
            echo twig_escape_filter($this->env, trim((isset($context["label1"]) ? $context["label1"] : null)), "html", null, true);
            echo "\",  \"data\": \"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue1"]) ? $context["percentvalue1"] : null), "html", null, true);
            echo "\", \"color\": \"#006699\"}]'></div>
<div class=\"pieChartLabel\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/statisticelements.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  96 => 18,  93 => 17,  79 => 16,  63 => 12,  54 => 11,  46 => 7,  42 => 5,  38 => 3,  36 => 2,  24 => 1,  19 => 15,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 117,  358 => 116,  351 => 114,  346 => 113,  344 => 112,  337 => 110,  333 => 109,  326 => 107,  322 => 106,  315 => 104,  311 => 103,  298 => 95,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 88,  265 => 86,  261 => 85,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  224 => 76,  221 => 75,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 61,  177 => 60,  173 => 58,  169 => 56,  166 => 55,  160 => 53,  158 => 52,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 43,  128 => 42,  125 => 41,  120 => 39,  115 => 38,  113 => 37,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 16,  58 => 13,  55 => 12,  53 => 11,  50 => 9,  47 => 9,  34 => 6,  31 => 5,  26 => 3,);
    }
}
