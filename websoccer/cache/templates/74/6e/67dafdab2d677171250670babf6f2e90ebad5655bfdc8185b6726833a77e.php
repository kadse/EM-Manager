<?php

/* blocks/topnews.twig */
class __TwigTemplate_746e67dafdab2d677171250670babf6f2e90ebad5655bfdc8185b6726833a77e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "news_block_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_box_content($context, array $blocks = array())
    {
        // line 8
        echo "
<ul class=\"unstyled\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topnews"]) ? $context["topnews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t\t<li><small>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date"), "html", null, true);
            echo "</small> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "news-details", 1 => ("id=" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
</ul>

<p><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "news"), "method"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_more"), "method"), "html", null, true);
        echo "</a></p>

";
    }

    public function getTemplateName()
    {
        return "blocks/topnews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  38 => 7,  29 => 3,  226 => 88,  220 => 84,  215 => 81,  206 => 78,  201 => 77,  197 => 76,  193 => 74,  191 => 73,  185 => 69,  182 => 68,  173 => 66,  168 => 65,  166 => 64,  148 => 49,  142 => 45,  139 => 44,  130 => 42,  125 => 41,  123 => 40,  119 => 38,  116 => 37,  107 => 34,  102 => 33,  97 => 32,  95 => 31,  91 => 29,  84 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 16,  64 => 19,  62 => 13,  57 => 16,  53 => 15,  49 => 11,  47 => 12,  44 => 11,  41 => 8,  35 => 7,  32 => 4,  27 => 3,);
    }
}
