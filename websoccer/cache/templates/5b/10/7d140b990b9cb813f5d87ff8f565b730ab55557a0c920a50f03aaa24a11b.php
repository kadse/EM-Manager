<?php

/* layout.twig */
class __TwigTemplate_5b107d140b990b9cb813f5d87ff8f565b730ab55557a0c920a50f03aaa24a11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'browser_title' => array($this, 'block_browser_title'),
            'navigation' => array($this, 'block_navigation'),
            'page_header' => array($this, 'block_page_header'),
            'page_columns' => array($this, 'block_page_columns'),
            'messages_block' => array($this, 'block_messages_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('browser_title', $context, $blocks);
        echo "</title>
\t\t
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t
\t\t";
        // line 9
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method") != null)) {
            // line 10
            echo "\t\t\t";
            $context["url"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => null, 1 => ("id=" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method")), 2 => true), "method");
            // line 11
            echo "\t\t";
        } else {
            // line 12
            echo "\t\t\t";
            $context["url"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => null, 1 => null, 2 => true), "method");
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "\t\t<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"/>
\t\t
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getCssSources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cssSource"]) {
            // line 17
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["cssSource"]) ? $context["cssSource"] : null), "html", null, true);
            echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssSource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t";
        if (array_key_exists("cssReferences", $context)) {
            // line 20
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cssReferences"]) ? $context["cssReferences"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssSource"]) {
                // line 21
                echo "\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/css/";
                echo twig_escape_filter($this->env, (isset($context["cssSource"]) ? $context["cssSource"] : null), "html", null, true);
                echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssSource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
        echo "/favicon.ico\" />
\t\t
\t\t";
        // line 27
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "facebook_appid"), "method")) {
            // line 28
            echo "\t\t<meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "facebook_appid"), "method"), "html", null, true);
            echo "\"/>
\t\t";
        }
        // line 30
        echo "\t\t";
        echo $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "head_code"), "method");
        echo "
\t</head>
\t<body>
\t
\t\t<div id=\"wrapper\">
\t\t\t";
        // line 35
        $this->displayBlock('navigation', $context, $blocks);
        // line 38
        echo "\t\t
\t\t\t
\t\t\t";
        // line 40
        $this->displayBlock('page_header', $context, $blocks);
        // line 42
        echo "\t\t\t
\t\t\t";
        // line 43
        $this->displayBlock('page_columns', $context, $blocks);
        // line 97
        echo "\t\t</div>
\t\t<footer>
\t\t\t";
        // line 104
        echo "        \t<p><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "termsandconditions"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "termsandconditions_navlabel"), "method"), "html", null, true);
        echo "</a> 
        \t";
        // line 105
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "privacypolicy_url"), "method")) > 0)) {
            echo "| <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "privacypolicy_url"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "privacypolicy_navlabel"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 106
        echo "        \t| <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "imprint"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "imprint_navlabel"), "method"), "html", null, true);
        echo "</a> 
        \t| Powered by <a href=\"http://www.websoccer-sim.com\" target=\"_blank\">OpenWebSoccer-Sim</a>
        \t| <i class=\"icon-time\"></i> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDatetime", array(0 => null), "method"), "html", null, true);
        echo "
        \t</p>
\t\t</footer>
\t\t
\t\t<div id=\"ajaxLoaderPage\"></div>
\t\t
\t\t";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getJavaScriptSources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["jsSource"]) {
            // line 115
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["jsSource"]) ? $context["jsSource"] : null), "html", null, true);
            echo "\" ></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsSource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t";
        if (array_key_exists("scriptReferences", $context)) {
            // line 118
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scriptReferences"]) ? $context["scriptReferences"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsSource"]) {
                // line 119
                echo "\t\t\t<script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/js/";
                echo twig_escape_filter($this->env, (isset($context["jsSource"]) ? $context["jsSource"] : null), "html", null, true);
                echo "\" ></script>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsSource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t";
        }
        // line 122
        echo "\t\t
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/extcanvas/excanvas.compiled.js\"></script>
\t\t<![endif]-->
\t</body>
</html>";
    }

    // line 4
    public function block_browser_title($context, array $blocks = array())
    {
        $this->displayBlock("page_title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "projectname"), "method"), "html", null, true);
    }

    // line 35
    public function block_navigation($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t";
        $this->env->loadTemplate("navigationbar.twig")->display($context);
        // line 37
        echo "\t\t\t";
    }

    // line 40
    public function block_page_header($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t";
    }

    // line 43
    public function block_page_columns($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t\t<div class=\"container main-container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span8\" id=\"contentArea\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 49
        $this->env->loadTemplate("breadcrumb.twig")->display($context);
        // line 50
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t<h1>";
        // line 52
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"messages\">
\t\t\t\t\t\t\t\t";
        // line 56
        $this->displayBlock('messages_block', $context, $blocks);
        // line 59
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"pagecontent\">
\t\t\t\t\t\t\t\t";
        // line 62
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top", array(), "any", true, true)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t\t\t\t";
                // line 65
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 71
        $this->displayBlock("page_content", $context, $blocks);
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 73
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom", array(), "any", true, true)) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t\t\t\t";
                // line 76
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 86
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar", array(), "any", true, true)) {
            // line 87
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar"));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t\t\t";
                // line 89
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute((isset($context["uiBlock"]) ? $context["uiBlock"] : null), "id"), 1 => (isset($context["uiBlock"]) ? $context["uiBlock"] : null)), "method");
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
    }

    // line 56
    public function block_messages_block($context, array $blocks = array())
    {
        // line 57
        echo "\t\t\t\t\t\t\t\t";
        echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => "messagesblock"), "method");
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 106,  141 => 105,  134 => 104,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 25,  89 => 23,  73 => 20,  61 => 17,  57 => 16,  51 => 14,  48 => 13,  45 => 12,  39 => 10,  37 => 9,  29 => 4,  102 => 28,  96 => 18,  93 => 17,  79 => 16,  63 => 12,  54 => 11,  46 => 7,  42 => 11,  38 => 3,  36 => 2,  24 => 1,  19 => 15,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 114,  160 => 53,  158 => 52,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 37,  108 => 30,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 13,  55 => 12,  53 => 11,  50 => 9,  47 => 9,  34 => 6,  31 => 5,  26 => 3,);
    }
}
