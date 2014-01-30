<?php

/* //views/layouts/zurb.twig */
class __TwigTemplate_30a08627209ea7ad8befbfe2e68317045f9896a384964907f8c79135e632731c extends Twig_Template
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
        // line 26
        $this->displayBlock('topRight', $context, $blocks);
        // line 49
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
        // line 60
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

    // line 26
    public function block_topRight($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Страницы</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/create\"> Добавить </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/pages/admin\"> Редактировать </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Новости</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/create\"> Добавить </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/news/admin\"> Редактировать </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"has-dropdown not-click\"><a href=\"#\">Слайдер</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/create\"> Добавить </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/application/slides/admin\"> Редактировать </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"/application/site/logout/\">Выход</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
        echo (isset($context["content"]) ? $context["content"] : null);
    }

    public function getTemplateName()
    {
        return "//views/layouts/zurb.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 60,  93 => 27,  90 => 26,  85 => 6,  67 => 60,  54 => 49,  52 => 26,  29 => 6,  22 => 1,);
    }
}
