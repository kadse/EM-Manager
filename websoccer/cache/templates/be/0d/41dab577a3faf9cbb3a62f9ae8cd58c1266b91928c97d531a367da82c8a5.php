<?php

/* blocks/socialrecommendations.twig */
class __TwigTemplate_be0d41dab577a3faf9cbb3a62f9ae8cd58c1266b91928c97d531a367da82c8a5 extends Twig_Template
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
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "social_likebutton_werkenntwen"), "method")) {
            // line 2
            echo "<script type=\"text/javascript\" id=\"wkwrecommendscript\" src=\"http://www.wer-kennt-wen.de/js/widgets/external/recommend.js?imgId=0\"></script>
<style>
#wkwRecommendAnchorTag > img {
\tvertical-align: top;
}
</style>
";
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "social_likebutton_xing"), "method")) {
            // line 11
            echo "<div data-counter=\"no_count\" data-type=\"XING/Share\" data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getCurrentLanguage", array(), "method"), "html", null, true);
            echo "\"></div>
<script>
  ;(function (d, s) {
    var x = d.createElement(s),
      s = d.getElementsByTagName(s)[0];
      x.src = \"https://www.xing-share.com/js/external/share.js\";
      s.parentNode.insertBefore(x, s);
  })(document, \"script\");
</script>
";
        }
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "social_likebutton_twitter"), "method")) {
            // line 23
            echo "<span style=\"margin: 0 2px;\">
<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-lang=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getCurrentLanguage", array(), "method"), "html", null, true);
            echo "\">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"https://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</span>";
        }
    }

    public function getTemplateName()
    {
        return "blocks/socialrecommendations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 23,  52 => 22,  33 => 10,  30 => 9,  24 => 3,  23 => 3,  21 => 2,  19 => 1,  45 => 10,  38 => 7,  29 => 3,  226 => 88,  220 => 84,  215 => 81,  206 => 78,  201 => 77,  197 => 76,  193 => 74,  191 => 73,  185 => 69,  182 => 68,  173 => 66,  168 => 65,  166 => 64,  148 => 49,  142 => 45,  139 => 44,  130 => 42,  125 => 41,  123 => 40,  119 => 38,  116 => 37,  107 => 34,  102 => 33,  97 => 32,  95 => 31,  91 => 29,  84 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 16,  64 => 19,  62 => 13,  57 => 24,  53 => 15,  49 => 21,  47 => 12,  44 => 11,  41 => 8,  35 => 11,  32 => 8,  27 => 4,);
    }
}
