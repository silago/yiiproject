<?php

/* /views/site/login.twig */
class __TwigTemplate_b2b267dc5ef52ca69eb855786c86d320d37f71b6b2aa3b611bfd19479e6a9fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/zurb.twig");

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["breadcrumbs"] = array(0 => "login");
        // line 5
        echo "
<h1>Вход</h1>

<p>Пожалуйста, заполните следующие поля вашими админсими причиндалами:</p>

<div class=\"form\">
\t
\t";
        // line 12
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSumbit" => true)), 2 => false), "method");
        // line 19
        echo "\t
\t
\t<form id=\"";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id");
        echo "\" action=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action");
        echo "\" method=";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method");
        echo ">
<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t<div class=\"row\">
\t\t";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t\t";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t\t";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passwordField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t\t
\t</div>

\t<div class=\"row rememberMe\">
\t\t";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "checkBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t\t";
        // line 40
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
        return array (  98 => 40,  94 => 39,  90 => 38,  82 => 33,  78 => 32,  74 => 31,  67 => 27,  63 => 26,  59 => 25,  48 => 21,  44 => 19,  42 => 12,  33 => 5,  31 => 4,  28 => 3,);
    }
}
