<?php

/* blocks/help_sponsor.twig */
class __TwigTemplate_ddbf58cf7b3054adf1d665a6e3f6c1e5d804c66988d082c748a9ae809bc6ae5f extends Twig_Template
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
        echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "help_sponsor"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "blocks/help_sponsor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  215 => 71,  211 => 69,  208 => 68,  202 => 66,  197 => 63,  186 => 60,  180 => 59,  174 => 58,  168 => 57,  160 => 56,  155 => 54,  151 => 52,  147 => 51,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  119 => 40,  117 => 39,  112 => 37,  109 => 36,  103 => 34,  101 => 33,  98 => 32,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  69 => 22,  61 => 19,  58 => 18,  56 => 17,  52 => 15,  50 => 14,  47 => 12,  44 => 11,  38 => 8,  35 => 7,  30 => 3,  28 => 3,  26 => 1,);
    }
}
