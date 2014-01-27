<?php

/* /views/news/../../modules/feedback/components/views/FeedbackForm.twig */
class __TwigTemplate_0ce7fa348aab43d095437f24b700efcc0e1d1336178a03d2039c1fd4d62f4dea extends Twig_Template
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
        echo "<a class=\"virt\" href=\"#\">Виртуальная приемная</a>
\t\t\t\t<div class=\"virt-box\">
\t\t\t\t\t<img src=\"images/virt-ln.png\" height=\"9\" width=\"15\" alt=\"\" />
\t\t\t\t\t
\t\t\t\t\t";
        // line 5
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "feedback-form", "action" => "/application/feedback/create/", "enableAjaxValidation" => true, "focus" => array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "name"), "clientOptions" => array("validateOnSubmit" => true, "validateOnChange" => true, "validateOnType" => true, "afterValidate" => "js:checkErrors"), "htmlOptions" => array("onsubmit" => "return false;")), 2 => false, 3 => true), "method");
        // line 22
        echo "\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "name", 2 => array("placeholder" => "Имя")), "method");
        echo "
\t\t\t\t\t\t";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "name"), "method");
        echo "
\t\t\t\t\t\t";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "email", 2 => array("placeholder" => "Email")), "method");
        echo "
\t\t\t\t\t\t";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "email"), "method");
        echo "
\t\t\t\t\t\t";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "theme", 2 => array("placeholder" => "Тема")), "method");
        echo "
\t\t\t\t\t\t";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "theme"), "method");
        echo "
\t\t\t\t\t\t";
        // line 30
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "text", 2 => array("placeholder" => "Текст")), "method");
        echo "
\t\t\t\t\t\t";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "text"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t<input type=\"submit\" value=\"Отправить\" />
\t`\t\t\t\t";
        // line 35
        echo ETwigViewRendererVoidFunction($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget", array(), "method"));
        echo "

\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t

<script type=\"text/javascript\">

     function checkErrors(form, data, hasError) {
             if (!hasError) {
\t\t\t document.location=\"/application/feedback/success/\";
             }
     }
</script>
\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "/views/news/../../modules/feedback/components/views/FeedbackForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 35,  59 => 31,  55 => 30,  51 => 29,  47 => 28,  43 => 27,  39 => 26,  35 => 25,  27 => 22,  25 => 5,  19 => 1,  44 => 14,  31 => 24,  28 => 2,);
    }
}
