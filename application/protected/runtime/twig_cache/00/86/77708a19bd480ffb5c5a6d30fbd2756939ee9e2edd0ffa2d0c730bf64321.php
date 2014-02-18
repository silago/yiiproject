<?php

/* /modules/feedback/views/default/view.twig */
class __TwigTemplate_008677708a19bd480ffb5c5a6d30fbd2756939ee9e2edd0ffa2d0c730bf64321 extends Twig_Template
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
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["breadcrumbs"] = $this->getAttribute($_model_, "getParentAsArray", array(0 => $this->getAttribute($_model_, "id")), "method");
        // line 6
        echo "            <a href=\"/\"> Главная </a>
            <a href=\"/application/news/\"> Новости </a>
            ";
        // line 8
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 9
            echo "                <a href=\"";
            if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
            echo $this->getAttribute($_crumb_, "url");
            echo "\"> ";
            if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
            echo $this->getAttribute($_crumb_, "name");
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
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "title");
        echo " </p>\t

\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
        <div class=\"container text-box\">\t\t\t\t\t
\t\t\t";
        // line 23
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "content");
        echo " 
        </div>
        <div><hr/>
            <a href=\"/application/news\" style=\"float:right;\"> Все новости </a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/modules/feedback/views/default/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  69 => 18,  60 => 11,  47 => 9,  42 => 8,  38 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
