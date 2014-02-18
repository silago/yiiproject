<?php

/* //views/layouts/public_base.twig */
class __TwigTemplate_49960c6e7ef3c3bd08b538fd9dcce3c7b89606c2df8572854e5741306ec4e3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 <title>
 ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo " 
 </title>
<meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
<meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
 

<link rel=\"stylesheet\" type=\"text/css\" href=\"/application/css/main.css\" />
<script type=\"text/javascript\" src=\"/application/js/jquery.slides.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
      \$('#slides').slidesjs({
        width: 957,
        height: 297
      });
    });
</script>
\t
 <style type=\"text/css\">
\t#feedback-form .errorMessage {color:white; background-color:#800000;  margin-right:18px; padding:5px;  margin-bottom:5px; margin-top:-5px; }
 </style>

</head>



<body>
\t<div class=\"top-menu\">
\t\t<div class=\"top-wrap\">
\t\t\t\t";
        // line 36
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "TuhesMenu", 1 => array("showHidden" => "0", "id" => 0), 2 => true), "method");
        echo "
\t\t\t
\t\t</div>\t
\t</div>
<div id=\"wrap\">
\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"logo\">
\t\t\t<a href=\"/\"><img src=\"/application/images/logo.jpg\" height=\"91\" width=\"124\" alt=\"\" /></a>\t
\t\t</div>

\t\t<div class=\"head-info\">
\t\t\t<a href=\"http://isu.ru/\" class=\"univer-link\">&nbsp;</a>
\t\t\t<p>Иркутский государственный университет<br />Факультет филологии и журналистики</p>\t
\t\t\t<span>Филология лежит в основе не только науки,<br />
\t\t\tно и всей человеческой культуры</span>
\t\t\t<span class=\"author\">Академик Д.С. Лихачев</span>
\t\t</div>

\t\t<div class=\"phone\">
\t\t\t<p><strong>Адрес:</strong> Иркутск, ул. Чкалова, 2</p>
\t\t\t<p><strong>Телефон:</strong> +7 (3952) <strong>24-39-09</strong></p>\t
\t\t\t<a href=\"/application/pages/read/skhema-proyezda/\">Схема проезда</a>
\t\t\t    ";
        // line 59
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "feedback.components.FeedbackForm", 1 => array(), 2 => true), "method");
        echo "
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$(\".virt\").click(function() {
\t\t\t\t\$(\".virt-box\").toggle();
\t\t\t});
\t\t});
\t</script>
\t
\t";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
\t<div class=\"partner\">
";
        // line 77
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SitewidgetsItems", 1 => array(), 2 => true), "method");
        echo "
\t\t</div>




    

\t<!-- footer -->
\t<div class=\"footer_blank\"></div>
</div>
<div id=\"footer\">
\t<div class=\"sub-info\">
\t\t<p>Иркутск, ул. Чкалова, 2. </p>\t
\t\t<p>Телефон: +7 (3952) 24-39-09</p>
\t\t<p><a href=\"/application/pages/read/skhema-proyezda/\">схема проезда</a></p>
\t</div>

\t<div class=\"working\">
\t\t<p>Создание сайта</p>\t
\t\t<a href=\"http://www.in-site.ru\">In-site</a>
\t</div>

\t<p class=\"copyright\">Факультет филологии и журналистики ИГУ</p>
</div>

<script type=\"text/javascript\">
    \$('.nav-menu li.active').parents('ul').addClass('active').show();
    \$('.nav-menu li.active').parents('li').addClass('active').show();
    \$('.top-menu li.active').parents('li').addClass('active');
    //var a = (\$('.nav-menu ul ul.active').first().html());
    //if (typeof(a)!='undefined')
    \$('.nav-menu').html(\$('.nav-menu ul li.active ul').first().first());
    //else
    //    \$('.nav-menu').html(\$('.nav-menu ul li.active ul').first

</script>

</body>
</html>




";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "\tФакультет филологии и журналистики ИГУ
 ";
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        echo " ";
    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        echo " ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "\t\t
\t
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
        return array (  190 => 72,  187 => 71,  181 => 11,  175 => 10,  170 => 7,  167 => 6,  117 => 77,  113 => 75,  111 => 71,  95 => 59,  68 => 36,  40 => 11,  36 => 10,  32 => 8,  30 => 6,  23 => 1,);
    }
}
