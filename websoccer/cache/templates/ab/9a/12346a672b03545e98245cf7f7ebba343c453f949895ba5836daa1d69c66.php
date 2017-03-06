<?php

/* blocks/userlogin.twig */
class __TwigTemplate_ab9a12346a672b03545e98245cf7f7ebba343c453f949895ba5836daa1d69c66 extends Twig_Template
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
        // line 2
        $context["formelements"] = $this->env->loadTemplate("macros/formelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_box_title($context, array $blocks = array())
    {
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_block_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_box_content($context, array $blocks = array())
    {
        // line 9
        echo "
<form method=\"post\">

\t";
        // line 12
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_type"), "method") == "email")) {
            // line 13
            echo "    <label for=\"loginstr\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_email"), "method"), "html", null, true);
            echo "</label>
    <input type=\"email\" id=\"loginstr\" name=\"loginstr\" placeholder=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_email"), "method"), "html", null, true);
            echo "\" required>
 \t";
        } else {
            // line 16
            echo " \t<label for=\"loginstr\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_nick"), "method"), "html", null, true);
            echo "</label>
    <input type=\"text\" id=\"loginstr\" name=\"loginstr\" placeholder=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_nick"), "method"), "html", null, true);
            echo "\" required>
 \t";
        }
        // line 19
        echo " \t
    <label for=\"loginpassword\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_passwort"), "method"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"loginpassword\" name=\"loginpassword\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_passwort"), "method"), "html", null, true);
        echo "\" required>
    
    <label class=\"checkbox\">
      <input type=\"checkbox\" id=\"rememberme\" name=\"rememberme\" value=\"1\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_option_rememberme"), "method"), "html", null, true);
        echo "
    </label>
    
\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_submit_button"), "method"), "html", null, true);
        echo "</button>
\t<input type=\"hidden\" name=\"page\" value=\"login\"/>
\t<input type=\"hidden\" name=\"action\" value=\"login\"/>
</form>

\t";
        // line 32
        if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method") || $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_allow_sendingpassword"), "method")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0))) {
            // line 33
            echo "\t\t<p>
\t\t\t";
            // line 34
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method") || (twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0))) {
                // line 35
                echo "\t\t\t\t";
                $context["registerUrl"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "register"), "method");
                // line 36
                echo "\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0)) {
                    // line 37
                    echo "\t\t\t\t\t";
                    $context["registerUrl"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method");
                    // line 38
                    echo "\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["registerUrl"]) ? $context["registerUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_register"), "method"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 40
            echo " 
\t\t\t";
            // line 41
            if ((($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method") || (twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "registration_url"), "method")) > 0)) && $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_allow_sendingpassword"), "method"))) {
                echo " | ";
            }
            // line 42
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_allow_sendingpassword"), "method")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "forgot-password"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_forgot_password"), "method"), "html", null, true);
                echo "</a>";
            }
            // line 43
            echo "\t\t</p>
\t";
        }
    }

    public function getTemplateName()
    {
        return "blocks/userlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  131 => 42,  127 => 41,  124 => 40,  116 => 39,  113 => 38,  110 => 37,  107 => 36,  104 => 35,  102 => 34,  99 => 33,  97 => 32,  89 => 27,  83 => 24,  77 => 21,  73 => 20,  70 => 19,  65 => 17,  60 => 16,  55 => 14,  50 => 13,  48 => 12,  43 => 9,  40 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
