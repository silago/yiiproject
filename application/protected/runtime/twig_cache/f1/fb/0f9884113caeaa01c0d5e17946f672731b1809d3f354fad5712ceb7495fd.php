<?php

/* /views/user/admin.twig */
class __TwigTemplate_f1fb0f9884113caeaa01c0d5e17946f672731b1809d3f354fad5712ceb7495fd extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "


<h1> Управление пользователями </h1>
<table style=\"margin-top:10px;\" class=\"columns large-12\">
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\tИмя\t</td>
\t\t<td>\tХэш пароля\t</td>
\t\t<td>\temail\t</td>
\t\t<td>\tДоп. инф-я</td>


\t\t<td>\t</td>
\t\t<td>\t</td>
\t</tr>
\t</thead>
\t<tbody>
";
        // line 22
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $this->getAttribute($_model_, "search"), "itemView" => "_view"), 2 => true), "method");
        // line 25
        echo "
\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "/views/user/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  52 => 22,  31 => 3,  28 => 2,);
    }
}
