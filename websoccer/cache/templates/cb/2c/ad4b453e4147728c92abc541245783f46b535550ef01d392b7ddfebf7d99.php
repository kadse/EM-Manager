<?php

/* blocks/lent_players.twig */
class __TwigTemplate_cb2cad4b453e4147728c92abc541245783f46b535550ef01d392b7ddfebf7d99 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["lentplayers"]) ? $context["lentplayers"] : null)) > 0)) {
            // line 2
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lent_players"), "method"), "html", null, true);
            echo "</h3>
\t
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><abbr title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
            echo "</abbr></th>
\t\t\t\t<th>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_name"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_age"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_verein_id"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_lending_matches"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lentplayers"]) ? $context["lentplayers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 16
                echo "\t\t\t<tr>
\t\t\t\t<td style=\"text-align: center\"><img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getImage", array(0 => (("icons/playertype_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position")) . ".png")), "method"), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position"))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t";
                // line 19
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main")) > 0)) {
                    // line 20
                    echo "\t\t\t\t\t<p title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main"))), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname"), "html", null, true);
                echo " ";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym")) > 0)) {
                    echo "\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym"), "html", null, true);
                    echo "\" ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname"), "html", null, true);
                echo "</a></td>
\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age"), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "team_name"), "html", null, true);
                echo "</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_matches"), "html", null, true);
                echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t</tbody>
\t</table>
\t
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/lent_players.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  98 => 24,  85 => 23,  82 => 22,  74 => 20,  72 => 19,  62 => 17,  59 => 16,  55 => 15,  36 => 8,  21 => 2,  35 => 10,  29 => 7,  28 => 3,  592 => 156,  589 => 155,  585 => 153,  581 => 151,  577 => 149,  573 => 147,  571 => 146,  568 => 145,  557 => 144,  542 => 140,  539 => 139,  531 => 137,  529 => 136,  523 => 135,  517 => 134,  512 => 131,  501 => 128,  490 => 124,  479 => 121,  475 => 120,  470 => 118,  466 => 117,  461 => 115,  451 => 112,  441 => 109,  438 => 108,  430 => 106,  422 => 104,  420 => 103,  417 => 102,  411 => 100,  406 => 98,  402 => 96,  395 => 94,  386 => 92,  384 => 91,  381 => 90,  378 => 89,  365 => 87,  360 => 86,  358 => 85,  345 => 82,  343 => 81,  340 => 80,  337 => 79,  327 => 77,  325 => 76,  313 => 73,  299 => 71,  283 => 67,  281 => 66,  278 => 65,  275 => 64,  272 => 63,  269 => 62,  265 => 61,  257 => 58,  253 => 57,  247 => 56,  238 => 49,  235 => 48,  232 => 47,  229 => 46,  226 => 45,  214 => 44,  201 => 40,  189 => 38,  181 => 36,  179 => 35,  162 => 30,  154 => 29,  138 => 27,  129 => 26,  127 => 25,  123 => 23,  117 => 21,  111 => 29,  108 => 18,  102 => 16,  99 => 15,  91 => 12,  78 => 11,  75 => 10,  66 => 18,  58 => 8,  52 => 7,  44 => 10,  41 => 13,  30 => 7,  25 => 143,  22 => 43,  19 => 1,  514 => 167,  508 => 165,  496 => 158,  486 => 123,  480 => 153,  471 => 149,  468 => 148,  462 => 147,  457 => 114,  449 => 144,  447 => 143,  443 => 110,  433 => 139,  431 => 138,  425 => 137,  421 => 136,  418 => 135,  409 => 99,  403 => 130,  397 => 129,  391 => 93,  385 => 127,  379 => 126,  373 => 125,  367 => 124,  361 => 123,  355 => 84,  351 => 120,  349 => 119,  344 => 116,  341 => 115,  334 => 111,  328 => 110,  323 => 107,  317 => 105,  315 => 74,  310 => 102,  302 => 99,  296 => 96,  291 => 69,  289 => 94,  284 => 91,  276 => 89,  274 => 88,  271 => 87,  263 => 85,  261 => 84,  258 => 83,  250 => 81,  248 => 80,  245 => 79,  241 => 77,  233 => 75,  231 => 74,  224 => 72,  219 => 71,  211 => 69,  208 => 68,  206 => 67,  200 => 64,  197 => 63,  195 => 57,  191 => 55,  185 => 53,  182 => 52,  174 => 33,  171 => 32,  166 => 47,  161 => 46,  158 => 45,  153 => 43,  148 => 42,  146 => 28,  133 => 40,  130 => 39,  122 => 37,  120 => 36,  114 => 35,  110 => 34,  103 => 26,  100 => 32,  95 => 31,  93 => 13,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  67 => 21,  65 => 20,  60 => 18,  54 => 17,  48 => 11,  46 => 12,  43 => 11,  40 => 9,  34 => 7,  31 => 4,  26 => 4,);
    }
}
