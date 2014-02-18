<?php

/* /views//layouts/column2.twig */
class __TwigTemplate_da6fb1b1b1f3344fcf86eea417671b1f17e979293a25037015ecbc05b4866857 extends Twig_Template
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
";
        // line 4
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views//layouts/column2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,);
    }
}
