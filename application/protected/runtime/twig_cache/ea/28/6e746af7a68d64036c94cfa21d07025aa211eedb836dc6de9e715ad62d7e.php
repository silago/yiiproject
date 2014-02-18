<?php

/* /views/site/admin.twig */
class __TwigTemplate_ea286e746af7a68d64036c94cfa21d07025aa211eedb836dc6de9e715ad62d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/zurb.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/zurb.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1> Администрирование </h1>
<hr/>

    <div style=\"text-align:center;\" class=\"columns large-4\">
        <i class=\"fi-page ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/pages/admin/\"> Страницы </a>
        </p>
    </div>


     <div style=\"text-align:center;\" class=\"columns large-4\">
        <i class=\"fi-list-bullet ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/news/admin/\"> Новости </a>
        </p>
    </div>
    
    
    <div style=\"text-align:center;\" class=\"large-4 columns\">
        <i class=\"fi-photo ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/slides/admin/\"> Слайдер </a>
        </p>
    </div>


    <div style=\"text-align:center;\" class=\"large-4 columns\">
        <i class=\"fi-widget ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/sitewidgets/admin/\"> Виджеты </a>
        </p>
    </div>

    <div style=\"text-align:center;\" class=\"large-4 columns\">
        <i class=\"fi-torsos ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/users/admin/\"> Пользователи </a>
        </p>
    </div>

     <div style=\"text-align:center;\" class=\"large-4 columns\">
        <i class=\"fi-wrench ilarge\"> &nbsp; </i>
        <p> 
            <a href=\"/application/configpage/wts/\"> Настройки </a>
        </p>
    </div>

   <div style=\"text-align:center;\" class=\"large-12 columns\">
        <i class=\"fi-star ilarge\"> &nbsp; </i>
        <p> <span> Галерея: </span>
            <a href=\"/application/galleryGroups/admin\">Группы  </a> / <a href=\"/application/galleryItems/admin\"> Элементы </a> 
        </p>
    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "/views/site/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
