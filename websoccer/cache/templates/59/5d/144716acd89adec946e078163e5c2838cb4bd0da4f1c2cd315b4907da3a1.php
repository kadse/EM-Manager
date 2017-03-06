<?php

/* blocks/user-activities-box.twig */
class __TwigTemplate_595d144716acd89adec946e078163e5c2838cb4bd0da4f1c2cd315b4907da3a1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "activitylog_box_title"), "method"), "html", null, true);
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
        if ((array_key_exists("activities", $context) && (twig_length_filter($this->env, (isset($context["activities"]) ? $context["activities"] : null)) > 0))) {
            // line 10
            echo "\t
\t<table class=\"table table-striped\">
\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 13
                echo "\t\t";
                $context["username"] = (((("<a href=\"" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "user", 1 => ("id=" . $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "user_id"))), "method")) . "\">") . twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "user_name"))) . "</a>");
                // line 14
                echo "\t\t<tr>
\t\t\t<td>";
                // line 15
                echo sprintf($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("activitylog_" . $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "action_id"))), "method"), (isset($context["username"]) ? $context["username"] : null));
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</table>
\t
";
        }
        // line 21
        echo "

";
    }

    public function getTemplateName()
    {
        return "blocks/user-activities-box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 18,  60 => 15,  57 => 14,  54 => 13,  50 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
