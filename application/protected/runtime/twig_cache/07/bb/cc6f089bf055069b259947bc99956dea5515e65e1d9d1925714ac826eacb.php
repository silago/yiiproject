<?php

/* /views//layouts/main.twig */
class __TwigTemplate_07bbcc6f089bf055069b259947bc99956dea5515e65e1d9d1925714ac826eacb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'topRight' => array($this, 'block_topRight'),
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\" />
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
<script src=\"js/jquery.slides.min.js\"></script>
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
\t\t\t\t</div>
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
\t\t\t<div class=\"slide-block\">
\t\t\t\t<img src=\"images/slider-img.jpg\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>

\t\t\t<div class=\"slide-block\">
\t\t\t\t<img src=\"images/slider-img.jpg\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>

\t\t\t<div class=\"slide-block\">
\t\t\t\t<img src=\"images/slider-img.jpg\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>

\t\t\t<div class=\"slide-block\">
\t\t\t\t<img src=\"images/slider-img.jpg\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>

\t\t\t<div class=\"slide-block\">
\t\t\t\t<img src=\"images/slider-img.jpg\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>\t
\t\t</div>\t
\t</div>

\t<div class=\"news-container\">
\t\t<div class=\"title\">
\t\t\t<p>НОВОСТИ</p>\t
\t\t\t<a href=\"#\">Все новости</a>
\t\t\t<img src=\"images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>\t

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"news-block\">
\t\t\t<a href=\"#\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t<div class=\"news-info\">
\t\t\t\t<p>22 октября</p>\t
\t\t\t\t<p><strong>Посвящены в филологи!</strong></p>
\t\t\t\t<p>Мы с нетерпением ждали Посвящения в филологи: готовились, репетировали свою сценку, и наконец, этот день настал!</p>
\t\t\t\t<a href=\"#\">Подробней</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"partner\">
\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner1.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Министерство образования и науки РФ</p>
\t\t</div>

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner2.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>\t

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner3.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner4.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner5.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner6.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>

\t\t<div class=\"block\">
\t\t\t<a href=\"#\"><img src=\"images/partner7.png\" height=\"86\" width=\"130\" alt=\"\" /></a>
\t\t\t<img src=\"images/line.png\" height=\"1\" width=\"125\" alt=\"\" />\t
\t\t\t<p>Научная электронная библиотека</p>
\t\t</div>
\t</div>

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
























  <body>
    
    
   
  
\t\t<div id=\"mainmenu\">
\t\t\t\t<nav class=\"top-bar\" data-topbar>
\t\t\t\t\t<ul class=\"title-area\">
\t\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t\t<h1><a href=\"#\"><img src=\"/application/images/logo.png\" alt=\"\" style=\"height:35px;\" /></a></h1> </li>
\t\t\t\t\t\t\t<li class=\"toggle-topbar menu-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\">Меню</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t\t<section class=\"top-bar-section\"> 
\t\t\t\t\t\t\t";
        // line 275
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "TuhesMenu", 1 => array(), 2 => true), "method");
        echo "
\t\t\t\t\t\t\t<ul class=\"right\">
\t\t\t\t\t\t\t\t";
        // line 277
        $this->displayBlock('topRight', $context, $blocks);
        // line 278
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section> </nav>
\t\t\t\t
\t\t\t\t
\t\t
\t\t</div><!-- mainmenu -->
\t\t
\t
\t   <div class=\"row\">
\t\t
\t\t<div class=\"large-12 columns\">
\t\t";
        // line 289
        $this->displayBlock('content', $context, $blocks);
        echo " 
\t\t</div>
    </div>
    
   
    <script src=\"/application/js/jquery.js\"></script>
    <script src=\"/application/js/foundation.min.js\"></script>
    <script>
      \$(document).foundation();
    </script>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 277
    public function block_topRight($context, array $blocks = array())
    {
        echo " ";
    }

    // line 289
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
        echo (isset($context["content"]) ? $context["content"] : null);
    }

    public function getTemplateName()
    {
        return "/views//layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 289,  346 => 277,  341 => 5,  324 => 289,  311 => 278,  309 => 277,  304 => 275,  50 => 24,  28 => 5,  22 => 1,);
    }
}
