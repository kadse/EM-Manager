<?php

/* views/register-form.twig */
class __TwigTemplate_cf8afa546078f55162a4de7b1a439b96873017704564f6956aa28638a8a1ddef extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "registration_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<form class=\"form-horizontal\" method=\"post\">

\t";
        // line 12
        echo $context["formelements"]->gettextfield("nick", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_nick"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "nick"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null));
        echo "
\t
\t";
        // line 14
        echo $context["formelements"]->gettextfield("email", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_email"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "email"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "email");
        echo "
\t
\t";
        // line 16
        echo $context["formelements"]->gettextfield("email_repeat", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "registration_email_repeat"), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "email_repeat"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "email");
        echo "
\t
\t";
        // line 18
        echo $context["formelements"]->gettextfield("pswd", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_passwort"), "method"), "", true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "password");
        echo "
\t
\t";
        // line 20
        echo $context["formelements"]->gettextfield("pswd_repeat", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "registration_password_repeat"), "method"), "", true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null), "password");
        echo "
\t
\t";
        // line 22
        echo $context["formelements"]->getcheckbox("termsandconditions", $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "termsandconditions_accept", 1 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "termsandconditions"), "method")), "method"), $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "termsandconditions"), "method"), true, (isset($context["validationMsg"]) ? $context["validationMsg"] : null));
        echo "
\t
\t";
        // line 24
        if ((array_key_exists("captchaCode", $context) && (twig_length_filter($this->env, (isset($context["captchaCode"]) ? $context["captchaCode"] : null)) > 0))) {
            // line 25
            echo "\t";
            echo (isset($context["captchaCode"]) ? $context["captchaCode"] : null);
            echo "
\t";
        }
        // line 27
        echo "\t
\t<div class=\"form-actions\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "registration_submit_button"), "method"), "html", null, true);
        echo "</button>
\t</div>
\t<input type=\"hidden\" name=\"page\" value=\"register\"/>
\t<input type=\"hidden\" name=\"action\" value=\"userregistration\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "views/register-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  85 => 27,  79 => 25,  77 => 24,  72 => 22,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  47 => 12,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  26 => 1,);
    }
}
