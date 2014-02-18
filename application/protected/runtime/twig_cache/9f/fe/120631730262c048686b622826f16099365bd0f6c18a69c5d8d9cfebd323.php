<?php

/* /views/slides/admin.twig */
class __TwigTemplate_9ffe120631730262c048686b622826f16099365bd0f6c18a69c5d8d9cfebd323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo " 
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "


<h1> Управление слайдaми  </h1>
<table style=\"margin-top:10px;\" class=\"columns large-12\">
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\tФайл\t</td>
\t<td></td>
    <td></td>
    
    </tr>
\t</thead>
\t<tbody>
";
        // line 17
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_view"), 2 => true), "method");
        // line 20
        echo "
\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "/views/slides/admin.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  47 => 17,  30 => 2,  27 => 1,  22 => 24,  20 => 1,);
    }
}
