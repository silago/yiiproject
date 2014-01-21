<?php

/* /views/pages/create.twig */
class __TwigTemplate_0be759ea527d1054e27ea6609926c182d4d6532a1512bee60fc6508d62f7f684 extends Twig_Template
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
        return "/views/pages/create.twig";
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
