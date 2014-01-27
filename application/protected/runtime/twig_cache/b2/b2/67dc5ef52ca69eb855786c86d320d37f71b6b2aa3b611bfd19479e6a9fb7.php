<?php

/* /views/site/login.twig */
class __TwigTemplate_b2b267dc5ef52ca69eb855786c86d320d37f71b6b2aa3b611bfd19479e6a9fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/zurb.twig");

        $this->blocks = array(
            'topRight' => array($this, 'block_topRight'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/zurb.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_topRight($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        $context["breadcrumbs"] = array(0 => "login");
        // line 8
        echo "
<div class=\"columns large-12\">
\t<p>
\t\t&nbsp;
\t</p>
\t<p>
\t\t&nbsp;
\t</p>
\t</div>
<div class=\"columns large-4\">
\t&nbsp;
\t</div>
<div class=\"columns large-4 panel\">


<h4>Вход:</h4>


\t
\t";
        // line 27
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSumbit" => true)), 2 => false), "method");
        // line 34
        echo "\t
\t
\t<form id=\"";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id");
        echo "\" action=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action");
        echo "\" method=";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method");
        echo ">

\t<div class=\"row\">
\t\t";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username", 2 => array("placeholder" => "Логин")), "method");
        echo "
\t\t";
        // line 40
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passwordField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password", 2 => array("placeholder" => "Пароль")), "method");
        echo "
\t\t";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t
\t</div>

\t<div class=\"row rememberMe\">
\t\t";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "checkBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 51
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 52
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t</div>

\t<div class=\"row buttons\">
\t\t<input style=\"width:100%;\" type=\"submit\" value=\"Вход\" class=\"tiny button\"/>
\t</div>
</form>
</div><!-- form -->


<div class=\"columns large-4\">
\t&nbsp;
\t</div>

 ";
    }

    public function getTemplateName()
    {
        return "/views/site/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 52,  103 => 51,  99 => 50,  91 => 45,  87 => 44,  80 => 40,  76 => 39,  66 => 36,  62 => 34,  60 => 27,  39 => 8,  37 => 7,  34 => 6,  29 => 2,);
    }
}
