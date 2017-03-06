<?php

/* views/home.twig */
class __TwigTemplate_4b5ebd4843d2c25f21aa890802d18c5e62f02d323ec4d0e56548656c1bc5acea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'browser_title' => array($this, 'block_browser_title'),
            'page_header' => array($this, 'block_page_header'),
            'page_columns' => array($this, 'block_page_columns'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["msgbox"] = $this->env->loadTemplate("macros/messagebox.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_browser_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "home_title", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "projectname"), "method")), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page_header($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "id") == null)) {
            // line 13
            echo "<div class=\"master-head\">
\t<div class=\"hero-unit\">
\t  <h1>";
            // line 15
            $this->displayBlock("browser_title", $context, $blocks);
            echo "</h1>
\t  <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "home_teaser"), "method"), "html", null, true);
            echo "</p>
\t  
\t  \t";
            // line 18
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method") || (twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0))) {
                // line 19
                echo "\t\t\t";
                $context["registerUrl"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "register"), "method");
                // line 20
                echo "\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0)) {
                    // line 21
                    echo "\t\t\t\t";
                    $context["registerUrl"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method");
                    // line 22
                    echo "\t\t\t";
                }
                // line 23
                echo "\t\t\t<div style=\"text-align:center;\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["registerUrl"]) ? $context["registerUrl"] : null), "html", null, true);
                echo "\" class=\"btn btn-large\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "home_teaser_link_register"), "method"), "html", null, true);
                echo "</a></div>
\t\t";
            }
            // line 24
            echo " 
\t  
\t</div>
</div>
";
        }
        // line 29
        echo "
<div class=\"container main-container\">
\t";
        // line 31
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top", array(), "any", true, true)) {
            // line 32
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 33
                echo "\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t";
                // line 34
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t";
        }
        // line 38
        echo "\t
\t<div id=\"messages\">
\t";
        // line 40
        if (array_key_exists("frontMessages", $context)) {
            // line 41
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["frontMessages"]) ? $context["frontMessages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "\t\t\t";
                echo $context["msgbox"]->getbox($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "title"), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message"), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "type"));
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t";
        }
        // line 45
        echo "\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"span4\">
\t\t\t";
        // line 49
        echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => "news"), "method");
        echo "
\t\t\t
\t\t\t<div class=\"ajaxLoadedBlock\" id=\"projectStatisticsBlock\" 
\t\t\t\tdata-ajaxblock=\"projectstatistics\" data-ignoreemptymessages=\"true\">
\t\t</div>
\t\t</div>
\t\t<div class=\"span4\">
\t\t\t<div class=\"ajaxLoadedBlock\" id=\"latestResultsBlock\" 
\t\t\t\tdata-ajaxblock=\"latest-results-summary\" data-ignoreemptymessages=\"true\"></div>
\t\t\t\t
\t\t\t<div class=\"ajaxLoadedBlock\" id=\"latestActivitiesBlock\" 
\t\t\t\tdata-ajaxblock=\"user-activities-all\" data-ignoreemptymessages=\"true\"
\t\t\t\tdata-refreshperiod=\"10\"></div>
\t\t</div>
\t\t<div class=\"span4\">
\t\t\t";
        // line 64
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar", array(), "any", true, true)) {
            // line 65
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 66
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t";
        }
        // line 69
        echo "\t\t</div>
\t</div>
\t
\t
\t";
        // line 73
        if (($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom")) > 0))) {
            // line 74
            echo "\t<div class=\"row\">
\t\t<div class=\"box span8\">
\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 77
                echo "\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t";
                // line 78
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 84
        echo "\t
</div>
";
    }

    // line 88
    public function block_page_columns($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 88,  220 => 84,  215 => 81,  206 => 78,  201 => 77,  197 => 76,  193 => 74,  191 => 73,  185 => 69,  182 => 68,  173 => 66,  168 => 65,  166 => 64,  148 => 49,  142 => 45,  139 => 44,  130 => 42,  125 => 41,  123 => 40,  119 => 38,  116 => 37,  107 => 34,  102 => 33,  97 => 32,  95 => 31,  91 => 29,  84 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  62 => 18,  57 => 16,  53 => 15,  49 => 13,  47 => 12,  44 => 11,  41 => 10,  35 => 7,  32 => 6,  27 => 3,);
    }
}
