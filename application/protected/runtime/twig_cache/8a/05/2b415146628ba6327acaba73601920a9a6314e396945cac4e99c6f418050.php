<?php

/* /views/pages/view.twig */
class __TwigTemplate_8a052b415146628ba6327acaba73601920a9a6314e396945cac4e99c6f418050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("//views/layouts/public_base.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if ($this->getAttribute($_model_, "html_title")) {
            // line 4
            echo "        ";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_model_, "html_title");
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_model_, "title");
            echo "
    ";
        }
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "html_description");
        echo "
";
    }

    // line 14
    public function block_keywords($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "htm_keywords");
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
\t<div class=\"news-container\">
\t
    \t<div class=\"nav\">
\t\t\t
            ";
        // line 24
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["breadcrumbs"] = $this->getAttribute($_model_, "getParentAsArray", array(0 => $this->getAttribute($_model_, "id")), "method");
        // line 25
        echo "            <a href=\"/\"> Главная  </a>
            ";
        // line 26
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_model_, "getParentAsArray", array(0 => $this->getAttribute($_model_, "id")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 27
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
        // line 29
        echo "            <!-- 
            <a href=\"#\">Главная 12</a>
\t\t\t<a href=\"#\">Структура</a>
\t\t\t<a class=\"active\" href=\"#\">Кафедра новейшей литературы</a>\t
\t\t    -->
        </div>

    

\t\t<div class=\"title\">
\t\t\t<p>";
        // line 39
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "title");
        echo "</p>\t
\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t\t\t\t
\t\t\t";
        // line 43
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "content");
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
        return array (  130 => 43,  122 => 39,  110 => 29,  97 => 27,  92 => 26,  89 => 25,  86 => 24,  79 => 19,  76 => 18,  68 => 15,  65 => 14,  57 => 11,  54 => 10,  45 => 6,  38 => 4,  34 => 3,  31 => 2,);
    }
}
