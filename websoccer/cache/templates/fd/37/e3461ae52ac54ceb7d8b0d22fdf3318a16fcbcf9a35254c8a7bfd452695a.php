<?php

/* views/news-overview.twig */
class __TwigTemplate_fd37e3461ae52ac54ceb7d8b0d22fdf3318a16fcbcf9a35254c8a7bfd452695a extends Twig_Template
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
        // line 1
        $context["pagination"] = $this->env->loadTemplate("macros/paginator.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "news_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)) == 0)) {
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "news_no_items"), "method"), "html", null, true);
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "<h4><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "news-details", 1 => ("id=" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "</a></h4>
<p><em>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date"), "html", null, true);
            echo "</em></p>

<p>";
            // line 18
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "teaser");
            echo "</p>

<p style=\"margin-bottom: 30px;\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "news-details", 1 => ("id=" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "method"), "html", null, true);
            echo "\">Mehr</a></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        echo $context["pagination"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "

";
    }

    public function getTemplateName()
    {
        return "views/news-overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  85 => 22,  77 => 20,  72 => 18,  67 => 16,  60 => 15,  56 => 14,  53 => 13,  48 => 11,  46 => 10,  43 => 9,  40 => 8,  34 => 5,  31 => 4,  26 => 1,);
    }
}
