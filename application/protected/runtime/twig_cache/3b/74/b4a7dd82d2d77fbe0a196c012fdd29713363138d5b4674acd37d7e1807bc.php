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
        echo "
\t<div class=\"news-container\">
\t
    \t<div class=\"nav\">
\t\t\t
            ";
        // line 8
        $context["breadcrumbs"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getParentAsArray", array(0 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id")), "method");
        // line 9
        echo "            <a href=\"/\"> Главная  </a>
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getParentAsArray", array(0 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 11
            echo "                <a href=\"";
            echo $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "url");
            echo "\"> ";
            echo $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "name");
            echo " </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            <!-- 
            <a href=\"#\">Главная 12</a>
\t\t\t<a href=\"#\">Структура</a>
\t\t\t<a class=\"active\" href=\"#\">Кафедра новейшей литературы</a>\t
\t\t    -->
        </div>

    

\t\t<div class=\"title\">
\t\t\t<p>";
        // line 23
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "title");
        echo "</p>\t
\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t\t\t\t
\t\t\t";
        // line 27
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
\t\t
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
        return array (  77 => 27,  70 => 23,  58 => 13,  47 => 11,  43 => 10,  40 => 9,  38 => 8,  31 => 3,  28 => 2,);
    }
}
