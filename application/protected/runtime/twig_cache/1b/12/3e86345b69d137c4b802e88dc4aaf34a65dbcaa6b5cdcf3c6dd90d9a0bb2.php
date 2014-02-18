<?php

/* /views//layouts/main.twig */
class __TwigTemplate_1b123e86345b69d137c4b802e88dc4aaf34a65dbcaa6b5cdcf3c6dd90d9a0bb2 extends Twig_Template
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
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/application/zurb/css/foundation.css\" />
    <script src=\"/application/zurb/js/modernizr.js\"></script>
 
  </head>
  <body>
    
    
   
  
\t\t<div id=\"mainmenu\">
\t\t\t\t<nav class=\"top-bar\" data-topbar>
\t\t\t\t\t<ul class=\"title-area\">
\t\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t\t<h1><a href=\"/\"><img src=\"/application/images/logo.png\" alt=\"\" style=\"height:35px;\" /></a></h1> </li>
\t\t\t\t\t\t\t<li class=\"toggle-topbar menu-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\">Меню</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t\t<section class=\"top-bar-section\"> 
\t\t\t\t\t\t\t<ul class=\"right\">
\t\t\t\t\t\t\t\t";
        // line 27
        $this->displayBlock('topRight', $context, $blocks);
        // line 63
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
        // line 74
        $this->displayBlock('content', $context, $blocks);
        echo " 
\t\t</div>
    </div>
    
    <!--
   
    <script src=\"/application/js/foundation.min.js\"></script>
    <script>
      \$(document).foundation();
    </script>
\t-->
  </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_topRight($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Страницы</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/create\"> Добавить страницу </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/admin\"> Список страниц </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Новости</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/create\"> Добавить новость </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/admin\"> Список новостей </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Слайдер</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/create\"> Добавить слайд </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/admin\"> Список слайдов </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Виджеты</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/sitewidgets/create\">Добавить виджет </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/sitewidgets/admin\"> Список виджетов </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
                                    <li class=\"has-dropdown not-click\"><a href=\"#\">Пользователи</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/user/create\"> Добавить пользователя </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/user/admin\"> Список пользователей </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
                                    
                                    <li class=\"\"><a href=\"/application/site/logout/\">Выход</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
    }

    public function getTemplateName()
    {
        return "/views//layouts/main.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  94 => 28,  91 => 27,  86 => 7,  68 => 74,  55 => 63,  53 => 27,  30 => 7,  22 => 1,);
    }
}
