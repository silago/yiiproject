<?php

/* /views/sitewidgets/admin.twig */
class __TwigTemplate_5ac1e00700ef9f6d801cee0f7b80a5f7c6b4007071e0686a2f449082e3a633c3 extends Twig_Template
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



<h1> Управление виджетами  </h1>
<table style=\"margin-top:10px;\" class=\"columns large-12\">
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\thtml\t</td>
<td> </td>
<td> </td>
    
    
    </tr>
\t</thead>
\t<tbody>
";
        // line 20
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_view"), 2 => true), "method");
        // line 23
        echo "
\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "/views/sitewidgets/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 23,  50 => 20,  31 => 3,  28 => 2,);
    }
}
