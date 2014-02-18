<?php

/* //views/layouts/zurb.twig */
class __TwigTemplate_140ad364ec59b5644b9a172b1c8af43f18b73eea82be7cfb4ea6b386f92cacff extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/application/zurb/css/foundation.css\" />
    <script src=\"/application/zurb/js/modernizr.js\"></script>
    <link rel=\"stylesheet\" href=\"/application/zurb/foundation-icons/foundation-icons.css\" />
    <link rel=\"stylesheet\" href=\"/application/zurb/foundation_icons_general/stylesheets/general_foundicons.css\" />
  </head>
  <body>
    
    
   
  
\t\t<div id=\"mainmenu row\">
            
\t\t\t\t<nav  class=\"top-bar columns large-2\" data-topbar>
\t\t\t\t</nav>
                <nav class=\"top-bar columns large-10\" data-topbar>
\t\t\t\t<!--\t<ul class=\"title-area\">
\t\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t\t<h1><a href=\"/\"><img src=\"/application/images/logo.png\" alt=\"\" style=\"height:35px;\" /></a></h1> </li>
\t\t\t\t\t\t\t<li class=\"toggle-topbar menu-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\">Меню</a></li>
\t\t\t\t\t</ul>
\t\t\t\t-->
                <section class=\"top-bar-section\"> 
\t\t\t\t\t\t\t<ul class=\"columns\">
\t\t\t\t\t\t\t\t";
        // line 31
        $this->displayBlock('topRight', $context, $blocks);
        // line 76
        echo "\t\t\t\t\t\t\t</ul>
                                
                            <ul class=\"right\">
    <li class=\"\"><a href=\"/application/site/logout/\">Выход</a>
\t\t\t\t\t\t\t\t\t</li>
                            </ul>
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
        // line 92
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 31
    public function block_topRight($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"/application/pages/admin\">Страницы</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/create\"> Добавить страницу </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/admin\"> Список страниц </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"/application/news/admin\">Новости</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/create\"> Добавить новость </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/admin\"> Список новостей </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"/application/slides/admin\">Слайдер</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/create\"> Добавить слайд </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/admin\"> Список слайдов </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"/application/sitewidgets/admin\">Виджеты</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/sitewidgets/create\">Добавить виджет </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/sitewidgets/admin\"> Список виджетов </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
                                    <li class=\"has-dropdown not-click\"><a href=\"/application/user/admin\">Пользователи</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/user/create\"> Добавить пользователя </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/user/admin\"> Список пользователей </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
                                    <li class=\"has-dropdown not-click\"><a href=\"/application/user/admin\">Галерея</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/galleryGroups/create\"> Добавить группу</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/galleryGroups/admin\"> Список групп </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/galleryItems/create\"> Добавить элемент</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/galleryItems/admin\"> Список элементов </a></li>
                                        </ul>
\t\t\t\t\t\t\t\t\t</li>
                                    <li class=\"\"><a href=\"/application/configpage/wts/\">Настройки</a>


                                
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
    }

    // line 92
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
    }

    public function getTemplateName()
    {
        return "//views/layouts/zurb.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 92,  103 => 32,  100 => 31,  95 => 6,  77 => 92,  59 => 76,  57 => 31,  29 => 6,  22 => 1,);
    }
}
