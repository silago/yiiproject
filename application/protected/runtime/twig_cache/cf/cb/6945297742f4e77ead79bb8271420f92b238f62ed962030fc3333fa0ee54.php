<?php

/* /views/news/index.twig */
class __TwigTemplate_cfcb6945297742f4e77ead79bb8271420f92b238f62ed962030fc3333fa0ee54 extends Twig_Template
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


<h1> News </h1>
<table>
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\tpubDate\t</td>
\t\t<td>\ttitle\t</td>
\t\t<td>\tpreview\t</td>
\t</tr>
\t</thead>
\t<tbody>
";
        // line 18
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => (isset($context["dataProvider"]) ? $context["dataProvider"] : null), "itemView" => "_view"), 2 => true), "method");
        // line 21
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
        return array (  49 => 21,  47 => 18,  31 => 4,  28 => 3,);
    }
}
