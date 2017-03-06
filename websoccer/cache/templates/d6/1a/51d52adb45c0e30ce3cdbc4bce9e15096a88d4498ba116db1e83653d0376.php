<?php

/* blocks/nextmatch_with_formationlink.twig */
class __TwigTemplate_d61a51d52adb45c0e30ce3cdbc4bce9e15096a88d4498ba116db1e83653d0376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("blocks/nextmatch.twig");

        $this->blocks = array(
            'nextmatch_footer' => array($this, 'block_nextmatch_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blocks/nextmatch.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nextmatch_footer($context, array $blocks = array())
    {
        // line 4
        echo "
<p><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "formation"), "method"), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_navlabel"), "method"), "html", null, true);
        echo "</a></p>

";
    }

    public function getTemplateName()
    {
        return "blocks/nextmatch_with_formationlink.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
