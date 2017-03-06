<?php

/* blocks/transfers-list.twig */
class __TwigTemplate_d61e6b5535ccb159699773a49ae990e4de4c7ac53ec211284986aaf125a92085 extends Twig_Template
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
        if ((array_key_exists("completedtransfers", $context) && (twig_length_filter($this->env, (isset($context["completedtransfers"]) ? $context["completedtransfers"] : null)) > 0))) {
            // line 2
            echo "
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfer_date"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfer_from"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfer_to"), "method"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfer_bid_amount"), "method"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
  
\t  \t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["completedtransfers"]) ? $context["completedtransfers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
                // line 16
                echo "\t\t\t<tr>
\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDate", array(0 => $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "transfer_date")), "method"), "html", null, true);
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "player_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "player_firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "player_lastname"), "html", null, true);
                echo "</a></td>
\t\t\t\t<td>";
                // line 19
                if (($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "from_id") > 0)) {
                    // line 20
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "from_id"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "from_name"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 21
                    echo "-";
                }
                // line 22
                echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "team", 1 => ("id=" . $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "to_id"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "to_name"), "html", null, true);
                echo "</a></td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 25
                if (($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "hand_money") > 0)) {
                    // line 26
                    echo "\t\t\t\t\t\t<p><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfer_bid_handmoney"), "method"), "html", null, true);
                    echo "</small><br>
\t\t\t\t\t\t";
                    // line 27
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "hand_money"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t";
                // line 31
                if (($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "directtransfer_amount") > 0)) {
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "directtransfer_amount"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "amount"), 0, ",", " "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "game_currency"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 37
                if ((($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_id") > 0) || ($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_id") > 0))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t";
                    // line 39
                    if (($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_id") > 0)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t<li><small>+ <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_id"))), "method"), "html", null, true);
                        echo "\">";
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_pseudonym")) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_pseudonym"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_firstname"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer1_lastname"), "html", null, true);
                        }
                        echo "</a></small></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 43
                    if (($this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_id") > 0)) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t<li><small>+ <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_id"))), "method"), "html", null, true);
                        echo "\">";
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_pseudonym")) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_pseudonym"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_firstname"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transfer"]) ? $context["transfer"] : null), "exchangeplayer2_lastname"), "html", null, true);
                        }
                        echo "</a></small></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</td>
\t\t\t</tr>
\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transfer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t  \t
\t\t</tbody>
\t</table>


";
        } else {
            // line 59
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "transfers_no_transfers"), "method"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/transfers-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 59,  186 => 53,  176 => 48,  172 => 46,  156 => 43,  153 => 42,  139 => 40,  137 => 39,  132 => 37,  129 => 36,  121 => 34,  111 => 31,  107 => 29,  86 => 23,  83 => 22,  80 => 21,  72 => 20,  35 => 8,  22 => 2,  23 => 4,  27 => 6,  25 => 4,  76 => 13,  62 => 18,  44 => 5,  41 => 4,  101 => 33,  90 => 28,  81 => 26,  77 => 25,  69 => 23,  64 => 21,  59 => 19,  52 => 18,  43 => 10,  32 => 6,  21 => 2,  364 => 57,  354 => 93,  342 => 89,  332 => 87,  330 => 86,  319 => 79,  310 => 76,  305 => 75,  300 => 74,  293 => 71,  289 => 69,  286 => 68,  277 => 65,  267 => 63,  260 => 59,  258 => 56,  251 => 52,  247 => 50,  238 => 44,  235 => 43,  231 => 41,  218 => 35,  210 => 4,  201 => 122,  198 => 121,  187 => 119,  182 => 118,  170 => 115,  157 => 108,  149 => 106,  141 => 105,  134 => 38,  123 => 40,  119 => 38,  117 => 35,  100 => 27,  95 => 26,  89 => 23,  73 => 24,  61 => 17,  57 => 16,  51 => 15,  48 => 13,  45 => 5,  39 => 9,  37 => 3,  29 => 4,  102 => 28,  96 => 18,  93 => 25,  79 => 16,  63 => 12,  54 => 11,  46 => 18,  42 => 11,  38 => 13,  36 => 2,  24 => 3,  19 => 1,  772 => 264,  769 => 263,  767 => 262,  761 => 260,  759 => 259,  756 => 258,  750 => 256,  744 => 254,  742 => 253,  735 => 248,  729 => 246,  722 => 244,  719 => 243,  679 => 241,  676 => 240,  668 => 238,  665 => 237,  663 => 236,  659 => 235,  652 => 231,  643 => 225,  632 => 219,  623 => 213,  619 => 212,  614 => 210,  610 => 209,  605 => 207,  601 => 206,  596 => 204,  592 => 203,  587 => 201,  583 => 200,  578 => 198,  574 => 197,  568 => 194,  560 => 189,  556 => 188,  551 => 186,  547 => 185,  542 => 183,  538 => 182,  533 => 180,  529 => 179,  524 => 177,  520 => 176,  515 => 174,  511 => 173,  505 => 170,  495 => 162,  490 => 160,  484 => 159,  479 => 157,  473 => 156,  468 => 154,  462 => 153,  457 => 151,  451 => 150,  446 => 148,  440 => 147,  434 => 145,  432 => 144,  429 => 143,  425 => 141,  417 => 139,  415 => 138,  411 => 137,  408 => 136,  402 => 133,  399 => 132,  395 => 130,  387 => 128,  385 => 127,  381 => 126,  378 => 125,  376 => 124,  365 => 118,  361 => 56,  358 => 116,  351 => 92,  346 => 113,  344 => 112,  337 => 88,  333 => 109,  326 => 107,  322 => 80,  315 => 104,  311 => 103,  298 => 73,  294 => 94,  287 => 92,  283 => 91,  276 => 89,  272 => 64,  265 => 62,  261 => 85,  245 => 49,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 40,  224 => 37,  221 => 36,  216 => 73,  211 => 72,  204 => 70,  199 => 69,  197 => 68,  193 => 66,  185 => 63,  179 => 117,  177 => 60,  173 => 58,  169 => 56,  166 => 114,  160 => 53,  158 => 44,  150 => 50,  148 => 49,  143 => 47,  140 => 46,  135 => 44,  130 => 97,  128 => 43,  125 => 42,  120 => 39,  115 => 38,  113 => 32,  108 => 35,  104 => 34,  92 => 24,  84 => 22,  82 => 21,  78 => 21,  74 => 19,  70 => 19,  66 => 16,  58 => 17,  55 => 16,  53 => 8,  50 => 19,  47 => 16,  34 => 9,  31 => 7,  26 => 3,);
    }
}
