<?php

/* /views/pages/view.twig */
class __TwigTemplate_3b74b4a7dd82d2d77fbe0a196c012fdd29713363138d5b4674acd37d7e1807bc extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t<div class=\"news-container\">
\t\t<div class=\"nav\">
\t\t\t<a href=\"#\">Главная</a>
\t\t\t<a href=\"#\">Структура</a>
\t\t\t<a class=\"active\" href=\"#\">Кафедра новейшей литературы</a>\t
\t\t</div>
\t\t<div class=\"title\">
\t\t\t<p>Баннеры Кафедр</p>\t
\t\t\t<img src=\"images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t\t\t\t
\t\t\t";
        // line 15
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "/views/pages/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  31 => 3,  28 => 2,);
    }
}
