<?php

/* /views/site/login.twig */
class __TwigTemplate_5bc701dbd8bc5a183e67f5af59edfa2053f9b0eb336efbae465ba7a080a660ac extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "widget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSumbit" => true)), 2 => false), "method");
        // line 34
        echo "\t
\t
\t<form id=\"";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "id");
        echo "\" action=\"";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "action");
        echo "\" method=";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "method");
        echo ">

\t<div class=\"row\">
\t\t";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "username", 2 => array("placeholder" => "Логин")), "method");
        echo "
\t\t";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "username"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "passwordField", array(0 => $_model_, 1 => "password", 2 => array("placeholder" => "Пароль")), "method");
        echo "
\t\t";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "password"), "method");
        echo "
\t\t
\t</div>

\t<div class=\"row rememberMe\">
\t\t";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "checkBox", array(0 => $_model_, 1 => "rememberMe"), "method");
        echo "
\t  <label for=\"LoginForm_rememberMe\">Запомнить меня</label>
\t\t";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "rememberMe"), "method");
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
        return array (  118 => 52,  111 => 50,  101 => 45,  95 => 44,  86 => 40,  80 => 39,  67 => 36,  63 => 34,  60 => 27,  39 => 8,  37 => 7,  34 => 6,  29 => 2,);
    }
}
