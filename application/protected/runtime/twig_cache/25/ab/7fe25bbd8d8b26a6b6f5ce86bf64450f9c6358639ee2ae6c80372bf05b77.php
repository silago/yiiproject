<?php

/* /views/news/view.twig */
class __TwigTemplate_25ab7fe25bbd8d8b26a6b6f5ce86bf64450f9c6358639ee2ae6c80372bf05b77 extends Twig_Template
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
\t\t<div class=\"nav\">
\t\t\t";
        // line 5
        $context["breadcrumbs"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getParentAsArray", array(0 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id")), "method");
        // line 6
        echo "            <a href=\"/\"> Главная </a>
            <a href=\"/application/news/\"> Новости </a>
            ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 9
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
        // line 11
        echo "            <!-- 
            <a href=\"#\">Главная 12</a>
\t\t\t<a href=\"#\">Структура</a>
\t\t\t<a class=\"active\" href=\"#\">Кафедра новейшей литературы</a>\t
\t\t    -->
        </div>
\t\t<div class=\"title\">
\t\t\t<p>";
        // line 18
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "title");
        echo " </p>\t

\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
        <div class=\"container\">\t\t\t\t\t
\t\t\t";
        // line 23
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/views/news/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  65 => 18,  56 => 11,  45 => 9,  41 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
