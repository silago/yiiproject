<?php

/* /views/site/error.twig */
class __TwigTemplate_c01e1038a867e4a14a4fc4c457d8bdcbd3ba221dee99b53c43534cf5ce91a0c1 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"news-container content text-box\">
    <br/>
    <br/>
    
    <h2>Ошибка ";
        // line 8
        if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
        echo $_code_;
        echo "</h2>
    <p>
    ";
        // line 10
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo $_message_;
        echo "
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "/views/site/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}
