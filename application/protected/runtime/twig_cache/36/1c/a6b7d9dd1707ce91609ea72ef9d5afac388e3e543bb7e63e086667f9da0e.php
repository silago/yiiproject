<?php

/* /views/pages/update.twig */
class __TwigTemplate_361ca6b7d9dd1707ce91609ea72ef9d5afac388e3e543bb7e63e086667f9da0e extends Twig_Template
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
        echo "\t";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "renderPartial", array(0 => "_form", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null))), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/pages/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
