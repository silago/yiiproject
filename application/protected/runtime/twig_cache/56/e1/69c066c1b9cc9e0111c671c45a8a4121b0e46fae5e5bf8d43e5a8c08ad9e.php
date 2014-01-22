<?php

/* /modules/feedback/components/views/FeedbackForm.twig */
class __TwigTemplate_56e169c066c1b9cc9e0111c671c45a8a4121b0e46fae5e5bf8d43e5a8c08ad9e extends Twig_Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "action" => "/application/feedback/create/", "enableAjaxValidation" => true), 2 => true), "method");
        // line 12
        echo "\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "name"), "method");
        echo "
\t\t\t\t\t\t";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "email"), "method");
        echo "
\t\t\t\t\t\t";
        // line 16
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "theme"), "method");
        echo "
\t\t\t\t\t\t";
        // line 17
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "text"), "method");
        echo "
\t\t\t\t\t\t<!--<input type=\"text\" placeholder=\"Имя\" />-->
\t\t\t\t\t\t<!--<input type=\"text\" placeholder=\"E-mail\" />
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Тема\" />
\t\t\t\t\t\t<textarea placeholder=\"Сообщение\"></textarea>-->
\t\t\t\t\t\t<input type=\"submit\" value=\"Отправить\" />
\t`\t\t\t\t";
        // line 23
        echo ETwigViewRendererVoidFunction($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget", array(), "method"));
        echo "

\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "/modules/feedback/components/views/FeedbackForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  43 => 17,  39 => 16,  35 => 15,  31 => 14,  27 => 12,  25 => 5,  19 => 1,);
    }
}
