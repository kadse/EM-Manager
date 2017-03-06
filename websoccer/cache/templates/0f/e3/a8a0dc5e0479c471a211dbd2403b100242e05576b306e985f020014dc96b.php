<?php

/* blocks/help_training.twig */
class __TwigTemplate_0fe3a8a0dc5e0479c471a211dbd2403b100242e05576b306e985f020014dc96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("help.twig");

        $this->blocks = array(
            'help_content' => array($this, 'block_help_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "help.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_help_content($context, array $blocks = array())
    {
        // line 4
        echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "help_training"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "blocks/help_training.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  21 => 1,  500 => 182,  493 => 180,  489 => 179,  480 => 173,  474 => 170,  460 => 163,  452 => 162,  444 => 161,  436 => 160,  429 => 156,  422 => 152,  415 => 148,  411 => 147,  407 => 146,  404 => 145,  401 => 144,  399 => 143,  394 => 141,  391 => 140,  387 => 137,  381 => 135,  375 => 132,  370 => 129,  361 => 126,  357 => 125,  351 => 124,  344 => 123,  338 => 121,  336 => 120,  332 => 119,  329 => 118,  325 => 117,  318 => 113,  314 => 112,  310 => 111,  306 => 110,  300 => 106,  298 => 105,  293 => 103,  290 => 102,  288 => 101,  285 => 99,  279 => 95,  266 => 91,  263 => 90,  260 => 89,  257 => 88,  254 => 87,  251 => 86,  248 => 85,  245 => 84,  242 => 83,  240 => 82,  231 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  216 => 74,  213 => 73,  210 => 72,  207 => 71,  205 => 70,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  175 => 60,  172 => 59,  170 => 58,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  140 => 48,  137 => 47,  135 => 46,  126 => 44,  123 => 43,  119 => 42,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  87 => 29,  85 => 28,  81 => 25,  75 => 24,  73 => 23,  70 => 22,  64 => 20,  62 => 19,  57 => 17,  54 => 16,  51 => 14,  48 => 13,  42 => 10,  39 => 9,  34 => 5,  32 => 2,  30 => 3,  28 => 3,  26 => 1,);
    }
}
