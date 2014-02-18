<?php

/* /views/news/../../modules/feedback/components/views/FeedbackForm.twig */
class __TwigTemplate_a9ae0d94b6f14b28def0b6e1f21ea22e56472ae72c560217d57798a15709219c extends Twig_Template
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
\t\t\t\t\t<img src=\"/application/images/virt-ln.png\" height=\"9\" width=\"15\" alt=\"\" />
\t\t\t\t\t
\t\t\t\t\t";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "feedback-form", "action" => "/application/feedback/create/", "enableAjaxValidation" => true, "focus" => array(0 => $_model_, 1 => "name"), "clientOptions" => array("validateOnSubmit" => true, "validateOnChange" => true, "validateOnType" => true, "afterValidate" => "js:checkErrors"), "htmlOptions" => array("onsubmit" => "return false;")), 2 => false, 3 => true), "method");
        // line 22
        echo "\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "name", 2 => array("placeholder" => "Имя")), "method");
        echo "
\t\t\t\t\t\t";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "name"), "method");
        echo "
\t\t\t\t\t\t";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "email", 2 => array("placeholder" => "Email")), "method");
        echo "
\t\t\t\t\t\t";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "email"), "method");
        echo "
\t\t\t\t\t\t";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "theme", 2 => array("placeholder" => "Тема")), "method");
        echo "
\t\t\t\t\t\t";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "theme"), "method");
        echo "
\t\t\t\t\t\t";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "text", 2 => array("placeholder" => "Текст")), "method");
        echo "
\t\t\t\t\t\t";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "text"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t<input type=\"submit\" value=\"Отправить\" />
\t`\t\t\t\t";
        // line 35
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo ETwigViewRendererVoidFunction($this->getAttribute($_this_, "endWidget", array(), "method"));
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
        return array (  84 => 35,  75 => 31,  69 => 30,  63 => 29,  57 => 28,  51 => 27,  45 => 26,  39 => 25,  33 => 24,  29 => 22,  25 => 5,  19 => 1,);
    }
}
