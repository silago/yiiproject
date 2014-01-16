<?php

/* /views/site/login.twig */
class __TwigTemplate_b2b267dc5ef52ca69eb855786c86d320d37f71b6b2aa3b611bfd19479e6a9fb7 extends Twig_Template
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
        $context["breadcrumbs"] = array(0 => "login");
        // line 2
        echo "
<h1>Вход</h1>

<p>Пожалуйста, заполните следующие поля вашими админсими причиндалами:</p>

<div class=\"form\">
\t
\t";
        // line 9
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSumbit" => true)), 2 => false), "method");
        // line 16
        echo "\t
\t
\t<form id=\"";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id");
        echo "\" action=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action");
        echo "\" method=";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method");
        echo ">
<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t<div class=\"row\">
\t\t";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t\t";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t\t";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passwordField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t
\t</div>

\t<div class=\"row rememberMe\">
\t\t";
        // line 35
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "checkBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t</div>

\t<div class=\"row buttons\">
\t\t<input type=\"submit\" value=\"Вход\" class=\"tiny button\"/>
\t</div>

</div><!-- form -->
</form>
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
        return array (  86 => 37,  82 => 36,  78 => 35,  70 => 30,  66 => 29,  62 => 28,  55 => 24,  51 => 23,  47 => 22,  36 => 18,  32 => 16,  30 => 9,  21 => 2,  19 => 1,);
    }
}
