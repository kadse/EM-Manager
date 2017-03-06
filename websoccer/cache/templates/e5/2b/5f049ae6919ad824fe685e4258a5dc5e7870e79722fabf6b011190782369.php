<?php

/* blocks/googleplus_like.twig */
class __TwigTemplate_e52b5f049ae6919ad824fe685e4258a5dc5e7870e79722fabf6b011190782369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "googleplus_enable_likebutton"), "method")) {
            // line 2
            $context["url"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => null, 1 => ("id=" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method")), 2 => true), "method");
            // line 3
            echo "<div data-href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" class=\"g-plusone\" data-size=\"medium\"></div>

<script type=\"text/javascript\">
  
  (function() {
\t  window.___gcfg = {lang: '";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getCurrentLanguage", array(), "method"), "html", null, true);
            echo "'};
\t  
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/googleplus_like.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,  45 => 10,  38 => 7,  29 => 3,  226 => 88,  220 => 84,  215 => 81,  206 => 78,  201 => 77,  197 => 76,  193 => 74,  191 => 73,  185 => 69,  182 => 68,  173 => 66,  168 => 65,  166 => 64,  148 => 49,  142 => 45,  139 => 44,  130 => 42,  125 => 41,  123 => 40,  119 => 38,  116 => 37,  107 => 34,  102 => 33,  97 => 32,  95 => 31,  91 => 29,  84 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 16,  64 => 19,  62 => 13,  57 => 16,  53 => 15,  49 => 11,  47 => 12,  44 => 11,  41 => 8,  35 => 7,  32 => 8,  27 => 3,);
    }
}
