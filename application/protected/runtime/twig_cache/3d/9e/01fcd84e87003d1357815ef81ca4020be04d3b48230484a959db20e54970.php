<?php

/* /views/news/index.twig */
class __TwigTemplate_3d9e01fcd84e87003d1357815ef81ca4020be04d3b48230484a959db20e54970 extends Twig_Template
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
        echo "


<h1> Управление страницами </h1>
<table>
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\tДата создания\t</td>
\t\t<td>\tЗаголовок\t</td>
\t\t<td>\tКраткое описание\t</td>


\t    <td>  </td>
\t    <td>  </td>

    </tr>
\t</thead>
\t<tbody>
";
        // line 23
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_view"), 2 => true), "method");
        // line 26
        echo "
\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "/views/news/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 26,  52 => 23,  31 => 4,  28 => 3,);
    }
}
