<?php

/* //views/layouts/main_with_right.twig */
class __TwigTemplate_3cd32cd8676b5dca834207ba2772df8eaeb5183cad89226e658df35886027bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/main.twig");

        $this->blocks = array(
            'topRight' => array($this, 'block_topRight'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topRight($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<li class=\"has-dropdown  not-click\"> <a href=\"#\">Страницы</a>
\t\t\t<ul class=\"dropdown\">
\t\t\t\t<li> <a href=\"/application/index.php?r=pages/index\"> Создать страницу </a></li>
\t\t\t\t<li> <a href=\"/application/index.php?r=pages/admin\"> Управление страницами</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"has-dropdown  not-click\"> <a href=\"#\">Новости</a>
\t\t\t<ul class=\"dropdown\">
\t\t\t\t<li> <a href=\"/application/index.php?r=news/index\"> Создать новость </a></li>
\t\t\t\t<li> <a href=\"/application/index.php?r=news/admin\"> Управление новостями </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"has-dropdown  not-click\"> <a href=\"#\">Пользователи</a>
\t\t\t<ul class=\"dropdown\">
\t\t\t\t<li> <a href=\"/application/index.php?r=news/index\"> Создать пользователя </a></li>
\t\t\t\t<li> <a href=\"/application/index.php?r=news/admin\"> Управление пользователями </a></li>
\t\t\t</ul>
\t\t</li>
\t\t
\t\t<li class=\"\"> <a href=\"#\">Конфигурация</a>
\t\t
\t\t</li>
\t\t
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "\t";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "renderPartial", array(0 => "_form", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null))), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "//views/layouts/main_with_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 31,  59 => 30,  32 => 5,  29 => 4,);
    }
}
