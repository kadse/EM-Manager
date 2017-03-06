<?php

/* blocks/projectstatistics.twig */
class __TwigTemplate_ff899ccf78ad7580d407fe1114668c2e0d400052abfa285e6cf2a8d6de537fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("box.twig");

        $this->blocks = array(
            'box_title' => array($this, 'block_box_title'),
            'box_content' => array($this, 'block_box_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "box.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_box_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_box_content($context, array $blocks = array())
    {
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "who-is-online"), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "who-is-online_navlabel"), "method"), "html", null, true);
        echo "\">";
        if (((isset($context["usersOnline"]) ? $context["usersOnline"] : null) == 1)) {
            echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_onlineusers_single"), "method");
        } else {
            echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_onlineusers", 1 => (isset($context["usersOnline"]) ? $context["usersOnline"] : null)), "method");
        }
        echo ".</a> ";
        echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_totalusers", 1 => (isset($context["usersTotal"]) ? $context["usersTotal"] : null)), "method");
        echo ".</p>

<p>";
        // line 11
        echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_leagues", 1 => (isset($context["numberOfLeagues"]) ? $context["numberOfLeagues"] : null)), "method");
        echo ". <br>
<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "freeclubs"), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "projectstatistics_freeteams", 1 => (isset($context["numberOfFreeTeams"]) ? $context["numberOfFreeTeams"] : null)), "method");
        echo ".</a></p>

";
    }

    public function getTemplateName()
    {
        return "blocks/projectstatistics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
