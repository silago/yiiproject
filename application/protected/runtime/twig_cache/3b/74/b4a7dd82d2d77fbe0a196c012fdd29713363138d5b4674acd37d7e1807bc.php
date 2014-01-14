<?php

/* /views/pages/view.twig */
class __TwigTemplate_3b74b4a7dd82d2d77fbe0a196c012fdd29713363138d5b4674acd37d7e1807bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/main.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1> ";
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "title");
        echo "</h1>
 ";
        // line 4
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/pages/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,);
    }
}
