<?php

/* /views/pages/index.twig */
class __TwigTemplate_589d7227bac35fdecd5afa8d6387c5b28739387122cfde7d6b8e951c19b0dbde extends Twig_Template
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


<h1>Pages</h1>
<table>
\t<thead>
\t<tr>
\t\t<td>\tid\t</td>
\t\t<td>\towner\t</td>
\t\t<td>\torder\t</td>
\t\t<td>\ttitle\t</td>
\t\t<td>\tslug\t</td>
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
        return "/views/pages/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  48 => 18,  31 => 3,  28 => 2,);
    }
}
