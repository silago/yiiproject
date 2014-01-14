<?php

/* /views/pages/create.twig */
class __TwigTemplate_0be759ea527d1054e27ea6609926c182d4d6532a1512bee60fc6508d62f7f684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/main.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'topRight' => array($this, 'block_topRight'),
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
        echo "\t";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    // line 6
    public function block_topRight($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<li> <a href=\"/application/index.php?r=pages/index\">List Pages</a></li>
\t\t<li> <a href=\"/application/index.php?r=pages/admin\">Manage Pages</a></li>
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
        return array (  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
