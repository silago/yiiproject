<?php

/* /views/pages/index.twig */
class __TwigTemplate_37cf47cba5aa87e205c45e5f429bdb3c6b1f3d653100e8080720e3168dddf2c2 extends Twig_Template
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


<h1> Управление страницами </h1>
<table style=\"margin-top:10px;\" class=\"columns large-12\">
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\tid владельца\t</td>
\t\t<td>\tЗаголовок\t</td>
\t\t<td>\tslug\t</td>
\t\t<td>\t</td>
\t\t<td>\t</td>
\t</tr>
\t</thead>
\t<tbody>
";
        // line 19
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_view"), 2 => true), "method");
        // line 22
        echo "
\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "/views/pages/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  49 => 19,  31 => 3,  28 => 2,);
    }
}
