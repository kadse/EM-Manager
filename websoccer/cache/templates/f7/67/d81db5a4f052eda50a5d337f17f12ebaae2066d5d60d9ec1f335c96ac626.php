<?php

/* macros/premium.twig */
class __TwigTemplate_f767d81db5a4f052eda50a5d337f17f12ebaae2066d5d60d9ec1f335c96ac626 extends Twig_Template
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
    }

    // line 1
    public function getpremiumbadge($_fee = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fee" => $_fee,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t<span class=\"badge badge-important wstooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "premium_fature_fee_tooltip"), "method"), "html", null, true);
            echo "\" style=\"cursor: default;\"><i class=\"icon-key\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["fee"]) ? $context["fee"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "premium_credit_unit"), "method"), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/premium.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  500 => 182,  493 => 180,  489 => 179,  480 => 173,  474 => 170,  460 => 163,  452 => 162,  444 => 161,  436 => 160,  429 => 156,  422 => 152,  415 => 148,  411 => 147,  407 => 146,  404 => 145,  401 => 144,  399 => 143,  394 => 141,  391 => 140,  387 => 137,  381 => 135,  375 => 132,  370 => 129,  361 => 126,  357 => 125,  351 => 124,  344 => 123,  338 => 121,  336 => 120,  332 => 119,  329 => 118,  325 => 117,  318 => 113,  314 => 112,  310 => 111,  306 => 110,  300 => 106,  298 => 105,  293 => 103,  290 => 102,  288 => 101,  285 => 99,  279 => 95,  266 => 91,  263 => 90,  260 => 89,  257 => 88,  254 => 87,  251 => 86,  248 => 85,  245 => 84,  242 => 83,  240 => 82,  231 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  216 => 74,  213 => 73,  210 => 72,  207 => 71,  205 => 70,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  175 => 60,  172 => 59,  170 => 58,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  140 => 48,  137 => 47,  135 => 46,  126 => 44,  123 => 43,  119 => 42,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  87 => 29,  85 => 28,  81 => 25,  75 => 24,  73 => 23,  70 => 22,  64 => 20,  62 => 19,  57 => 17,  54 => 16,  51 => 14,  48 => 13,  42 => 10,  39 => 9,  34 => 5,  32 => 2,  30 => 3,  28 => 2,  26 => 1,);
    }
}
