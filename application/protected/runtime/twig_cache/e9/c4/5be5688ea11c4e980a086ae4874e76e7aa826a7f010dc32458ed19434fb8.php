<?php

/* /views/site/index.twig */
class __TwigTemplate_e9c45be5688ea11c4e980a086ae4874e76e7aa826a7f010dc32458ed19434fb8 extends Twig_Template
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
        echo "\t<div class=\"slider-box\">
\t\t\t<div class=\"slide-plash\">
\t\t\t\t<!--<p>В 2013 году<br /> исполняется</p>-->

\t\t\t\t<span style=\"margin-top:47px;\">95 лет</span>

\t\t\t\t<p>ИРКУТСКОМУ<br />  
\t\t\t\tГОСУДАРСТВЕННОМУ<br /> 
\t\t\t\tУНИВЕРСИТЕТУ<br /> 
\t\t\t\tИ НАШЕМУ ФАКУЛЬТЕТУ
\t\t\t\t</p>\t
\t\t\t</div>
\t\t\t<div id=\"slides\">
\t\t\t\t<!-- start -->
\t\t\t\t\t";
        // line 18
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SlidesItems", 1 => array(), 2 => true), "method");
        echo "
\t\t\t\t<!-- end -->
\t\t\t</div>
\t\t</div>
\t
\t
\t
\t
\t";
        // line 26
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "NewsItems", 1 => array(), 2 => true), "method");
        echo "
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
        return array (  59 => 26,  47 => 18,  31 => 4,  28 => 3,);
    }
}
