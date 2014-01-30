<?php

/* /views/pages/view_side.twig */
class __TwigTemplate_739bffba61ab777beac7266d1038bc3ce9c1214cd33bb7693ed96a2657a65d96 extends Twig_Template
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
\t\t\t<div class=\"aside\">
\t\t\t\t<div class=\"nav-menu\">
\t\t\t\t\t\t";
        // line 28
        $context["sidemenu"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "TuhesMenu", 1 => array("showHidden" => "1", "id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id")), 2 => true), "method");
        // line 29
        echo "\t\t\t\t        ";
        if ((isset($context["sidemenu"]) ? $context["sidemenu"] : null)) {
            // line 30
            echo "                            ";
            echo (isset($context["sidemenu"]) ? $context["sidemenu"] : null);
            echo "
                        ";
        } else {
            // line 32
            echo "                            ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "TuhesMenu", 1 => array("showHidden" => "1", "id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "owner")), 2 => true), "method");
            echo " 
                        ";
        }
        // line 34
        echo "                </div>\t
\t\t\t</div>

            <div class=\"content\">
\t\t\t    ";
        // line 38
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "content");
        echo "
            </div>
\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "/views/pages/view_side.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  95 => 34,  89 => 32,  83 => 30,  80 => 29,  78 => 28,  70 => 23,  58 => 13,  47 => 11,  43 => 10,  40 => 9,  38 => 8,  31 => 3,  28 => 2,);
    }
}
