<?php

/* /views/site/letter_success.twig */
class __TwigTemplate_4f8e509f0271bb2bfc6a25a304976f7d8e0082008790fb7df039cf6dfb3404ee extends Twig_Template
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
        echo "   \t<div style=\"width:100%;\" class=\"news-container\">
\t\t<div class=\"title\">
\t\t\t<p>Обратная связь</p>\t

\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
        <div class=\"container text-box\">\t\t\t\t\t
            Письмо успешно отправлено        
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/views/site/letter_success.twig";
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
