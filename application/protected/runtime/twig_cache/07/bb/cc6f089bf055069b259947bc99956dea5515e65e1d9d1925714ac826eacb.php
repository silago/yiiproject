<?php

/* //views/layouts/main.twig */
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
\t\t\t\t\t\t\t<h1><a href=\"#\"><img src=\"/application/images/logo.png\" alt=\"\" style=\"height:35px;\" /></a></h1> </li>
\t\t\t\t\t\t\t<li class=\"toggle-topbar menu-icon\">
\t\t\t\t\t\t\t\t<a href=\"#\">Меню</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t\t<section class=\"top-bar-section\"> 
\t\t\t\t\t\t\t";
        // line 24
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "TuhesMenu", 1 => array(), 2 => true), "method");
        echo "
\t\t\t\t\t\t\t<ul class=\"right\">
\t\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('topRight', $context, $blocks);
        // line 27
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
        // line 38
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 26
    public function block_topRight($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        echo "\t";
        echo (isset($context["content"]) ? $context["content"] : null);
    }

    public function getTemplateName()
    {
        return "//views/layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  92 => 26,  87 => 6,  70 => 38,  57 => 27,  55 => 26,  50 => 24,  29 => 6,  22 => 1,);
    }
}
