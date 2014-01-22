<?php

/* //views/layouts/public_base.twig */
class __TwigTemplate_11a3455787345c7f4ddb83fbf1f9c995b2bd0fd4a0595a3e28604013c73ce092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/application/css/main.css\" />
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
<script src=\"/application/js/jquery.slides.min.js\"></script>
<script>
    \$(function() {
      \$('#slides').slidesjs({
        width: 957,
        height: 297
      });
    });
  </script>
</head>



<body>
\t<div class=\"top-menu\">
\t\t<div class=\"top-wrap\">
\t\t\t\t";
        // line 24
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "TuhesMenu", 1 => array("hui" => "TuhesMenu"), 2 => true), "method");
        echo "
\t\t\t
\t\t</div>\t
\t</div>
<div id=\"wrap\">
\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"logo\">
\t\t\t<a href=\"#\"><img src=\"images/logo.jpg\" height=\"91\" width=\"124\" alt=\"\" /></a>\t
\t\t</div>

\t\t<div class=\"head-info\">
\t\t\t<p>Факультет филологии и журналистики  ИГУ</p>\t
\t\t\t<span>Филология лежит в основе не только науки,<br />
\t\t\tно и всей человеческой культуры</span>
\t\t\t<span class=\"author\">Академик Д.С. Лихачев</span>
\t\t</div>

\t\t<div class=\"phone\">
\t\t\t<p><strong>Адрес:</strong> Иркутск, ул. Чкалова, 2</p>
\t\t\t<p><strong>Телефон:</strong> +7 (3952) <strong>24-39-09</strong></p>\t
\t\t\t<p><a href=\"#\">Схема проезда</a></p>
\t\t\t<p>
\t\t\t\t";
        // line 47
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "feedback.components.FeedbackForm", 1 => array(), 2 => true), "method");
        echo "
\t\t\t\t<!--
\t\t\t\t<a class=\"virt\" href=\"#\">Виртуальная приемная</a>
\t\t\t\t<div class=\"virt-box\">
\t\t\t\t\t<img src=\"images/virt-ln.png\" height=\"9\" width=\"15\" alt=\"\" />
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Имя\" />
\t\t\t\t\t\t<input type=\"text\" placeholder=\"E-mail\" />
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Тема\" />
\t\t\t\t\t\t<textarea placeholder=\"Сообщение\"></textarea>
\t\t\t\t\t\t<input type=\"submit\" value=\"Отправить\" />
\t\t\t\t\t</form>\t
\t\t\t\t</div>-->
\t\t\t</p>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$(\".virt\").click(function() {
\t\t\t\t\$(\".virt-box\").toggle();
\t\t\t});
\t\t});
\t</script>

\t<div class=\"slider-box\">
\t\t<div class=\"slide-plash\">
\t\t\t<p>В 2013 году<br /> исполняется</p>

\t\t\t<span>95 лет</span>

\t\t\t<p>ИРКУТСКОМУ<br />  
\t\t\tГОСУДАРСТВЕННОМУ<br /> 
\t\t\tУНИВЕРСИТЕТУ<br /> 
\t\t\tИ НАШЕМУ ФАКУЛЬТЕТУ
\t\t\t</p>\t
\t\t</div>
\t\t<div id=\"slides\">
\t\t\t<!-- start -->
\t\t\t\t";
        // line 86
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SlidesItems", 1 => array(), 2 => true), "method");
        echo "
\t\t\t<!-- end -->
\t\t</div>
\t</div>
\t
\t
\t";
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "
\t<!-- footer -->
\t<div class=\"footer_blank\"></div>
</div>
<div id=\"footer\">
\t<div class=\"sub-info\">
\t\t<p>Иркутск, ул. Чкалова, 2. </p>\t
\t\t<p>Телефон: +7 (3952) 24-39-09</p>
\t\t<p><a href=\"#\">схема проезда</a></p>
\t</div>

\t<div class=\"working\">
\t\t<p>Создание сайта</p>\t
\t\t<a href=\"#\">In-site</a>
\t</div>

\t<p class=\"copyright\">Факультет филологии и журналистики ИГУ</p>
</div>

</body>
</html>




";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 92
    public function block_content($context, array $blocks = array())
    {
        // line 93
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "//views/layouts/public_base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 93,  162 => 92,  157 => 5,  128 => 95,  126 => 92,  117 => 86,  75 => 47,  49 => 24,  27 => 5,  21 => 1,);
    }
}
