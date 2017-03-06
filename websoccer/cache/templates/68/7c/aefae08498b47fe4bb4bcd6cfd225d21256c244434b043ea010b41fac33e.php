<?php

/* blocks/results-list-smallblock.twig */
class __TwigTemplate_687caefae08498b47fe4bb4bcd6cfd225d21256c244434b043ea010b41fac33e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "results_block_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_box_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["matches"]) ? $context["matches"] : null)) > 0)) {
            // line 10
            echo "<table class=\"table table-borderless table-striped\">
\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) ? $context["matches"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 12
                echo "\t  <tr>
\t    <td><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_team"), "html", null, true);
                echo "</a> - <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_team"), "html", null, true);
                echo "</a></td>
\t    <td><a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "match", 1 => ("id=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "id"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_navlabel"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "home_goals"), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "guest_goals"), "html", null, true);
                echo "</a></td>
\t  </tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</table>
";
        }
        // line 19
        echo "
<p><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "results"), "method"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "button_more"), "method"), "html", null, true);
        echo "</a></p>

";
    }

    public function getTemplateName()
    {
        return "blocks/results-list-smallblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  85 => 19,  81 => 17,  66 => 14,  56 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
