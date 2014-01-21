<?php

/* /views/site/index.twig */
class __TwigTemplate_fdb3dc2ce64b4a67c2c797180c7066515885369a5ac750e104c7f631b5e18518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/public_base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/public_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "NewsItems", 1 => array(), 2 => true), "method");
        echo "
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




 ";
    }

    public function getTemplateName()
    {
        return "/views/site/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
