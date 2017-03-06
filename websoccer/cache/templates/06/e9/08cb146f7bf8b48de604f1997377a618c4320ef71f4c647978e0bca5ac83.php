<?php

/* views/todaysmatches.twig */
class __TwigTemplate_06e908cb146f7bf8b48de604f1997377a618c4320ef71f4c647978e0bca5ac83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
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

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "todaysmatches_navlabel"), "method"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
        echo "

";
    }

    public function getTemplateName()
    {
        return "views/todaysmatches.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
