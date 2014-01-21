<?php

/* /views/pages/view.twig */
class __TwigTemplate_3b74b4a7dd82d2d77fbe0a196c012fdd29713363138d5b4674acd37d7e1807bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/public_base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "//views/layouts/public_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"news-container\">
\t<div class=\"title\"><h1> ";
        // line 4
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "title");
        echo "</h1> </div>
\t<div class=\"aside\"></div>
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t
\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
\t\t</div>
\t</div>
</div>

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
        return array (  42 => 9,  34 => 4,  31 => 3,  28 => 2,);
    }
}
