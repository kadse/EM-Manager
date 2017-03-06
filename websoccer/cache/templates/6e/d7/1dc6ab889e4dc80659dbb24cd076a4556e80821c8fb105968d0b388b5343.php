<?php

/* blocks/upload_clublogo_link.twig */
class __TwigTemplate_6ed71dc6ab889e4dc80659dbb24cd076a4556e80821c8fb105968d0b388b5343 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "upload_clublogo_max_size"), "method") > 0) && ($this->getAttribute($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user"), "clubId") == $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method")))) {
            // line 2
            echo "<p style=\"margin-bottom: 20px;\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "upload-clublogo"), "method"), "html", null, true);
            echo "\" class=\"btn btn-small\">
\t<i class=\"icon-upload\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "upload-clublogo_navlabel"), "method"), "html", null, true);
            echo "
</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/upload_clublogo_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  46 => 5,  38 => 4,  21 => 2,  649 => 234,  643 => 230,  641 => 229,  638 => 228,  632 => 224,  630 => 223,  617 => 212,  612 => 210,  607 => 209,  605 => 208,  601 => 206,  595 => 204,  593 => 203,  589 => 201,  585 => 199,  578 => 197,  570 => 195,  568 => 194,  561 => 193,  557 => 192,  554 => 191,  552 => 190,  549 => 189,  545 => 187,  537 => 185,  528 => 184,  524 => 183,  520 => 181,  518 => 180,  506 => 171,  502 => 170,  497 => 168,  493 => 167,  488 => 165,  484 => 164,  479 => 162,  475 => 161,  470 => 159,  466 => 158,  461 => 156,  457 => 155,  452 => 153,  448 => 152,  442 => 149,  434 => 144,  430 => 143,  425 => 141,  421 => 140,  416 => 138,  412 => 137,  407 => 135,  403 => 134,  398 => 132,  394 => 131,  389 => 129,  385 => 128,  380 => 126,  376 => 125,  370 => 122,  362 => 116,  357 => 114,  353 => 113,  349 => 112,  344 => 111,  341 => 110,  333 => 107,  330 => 106,  328 => 105,  324 => 104,  320 => 103,  317 => 102,  309 => 99,  306 => 98,  304 => 97,  300 => 96,  297 => 95,  291 => 93,  288 => 92,  286 => 91,  283 => 90,  277 => 88,  275 => 87,  271 => 86,  267 => 85,  263 => 84,  260 => 83,  257 => 82,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  231 => 73,  229 => 72,  226 => 71,  223 => 70,  221 => 69,  218 => 68,  215 => 67,  212 => 66,  209 => 65,  206 => 64,  203 => 63,  201 => 62,  198 => 61,  195 => 60,  192 => 59,  190 => 58,  187 => 57,  184 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  165 => 49,  154 => 43,  151 => 42,  148 => 41,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  126 => 34,  123 => 33,  120 => 32,  118 => 31,  104 => 29,  96 => 26,  93 => 25,  87 => 24,  83 => 23,  79 => 21,  71 => 18,  68 => 17,  66 => 16,  62 => 14,  51 => 12,  47 => 11,  43 => 9,  40 => 8,  34 => 2,  31 => 4,  26 => 3,);
    }
}
