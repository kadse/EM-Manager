<?php

/* views/login.twig */
class __TwigTemplate_2d96544286cd4e111c47d37d0366cf2ff49bdc15df1553506275d6d9c7361163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["formelements"] = $this->env->loadTemplate("macros/formelements.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "login_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<form class=\"form-horizontal\" method=\"post\">


\t";
        // line 13
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_type"), "method") == "email")) {
            // line 14
            echo "    ";
            echo $context["formelements"]->gettextfield("loginstr", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_email"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "loginstr"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "email");
            echo "
 \t";
        } else {
            // line 16
            echo " \t";
            echo $context["formelements"]->gettextfield("loginstr", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_nick"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "loginstr"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null));
            echo "
 \t";
        }
        // line 18
        echo "
\t";
        // line 19
        echo $context["formelements"]->gettextfield("loginpassword", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_passwort"), "method"), "", true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "password");
        echo "
\t
\t";
        // line 21
        echo $context["formelements"]->getcheckbox("rememberme", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_option_rememberme"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "rememberme"), "method"));
        echo "
\t
\t<div class=\"form-actions\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_submit_button"), "method"), "html", null, true);
        echo "</button>
\t</div>
\t<input type=\"hidden\" name=\"page\" value=\"login\"/>
\t<input type=\"hidden\" name=\"action\" value=\"login\"/>
</form>

";
        // line 30
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method")) {
            // line 31
            echo "\t<p><i class=\"icon-arrow-right\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "register"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_register"), "method"), "html", null, true);
            echo "</a></p>
";
        }
        // line 33
        echo "
";
        // line 34
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_allow_sendingpassword"), "method")) {
            // line 35
            echo "\t<p><i class=\"icon-arrow-right\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "forgot-password"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_forgot_password"), "method"), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "views/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  98 => 34,  95 => 33,  87 => 31,  85 => 30,  76 => 24,  70 => 21,  65 => 19,  62 => 18,  56 => 16,  50 => 14,  48 => 13,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  26 => 1,);
    }
}
