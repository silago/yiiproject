<?php

/* /views/pages/view_side_one.twig */
class __TwigTemplate_3c7e21aeb8a15834f6ac748f7088b54fede4167863971a398f6c64ea29860a6b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if ($this->getAttribute($_model_, "html_title")) {
            // line 5
            echo "        ";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_model_, "html_title");
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_model_, "title");
            echo "
    ";
        }
    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "html_description");
        echo "
";
    }

    // line 15
    public function block_keywords($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "htm_keywords");
        echo "
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
\t<div class=\"news-container\">
\t
    \t<div class=\"nav\">
\t\t\t
            ";
        // line 27
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["breadcrumbs"] = $this->getAttribute($_model_, "getParentAsArray", array(0 => $this->getAttribute($_model_, "id")), "method");
        // line 28
        echo "            <a href=\"/\"> Главная  </a>
            ";
        // line 29
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_model_, "getParentAsArray", array(0 => $this->getAttribute($_model_, "id")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 30
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
        // line 32
        echo "        </div>

    

\t\t<div class=\"title\">
\t\t\t<p>";
        // line 37
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "title");
        echo "</p>\t
\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t";
        // line 40
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if ($this->getAttribute($_model_, "additional_content")) {
            // line 41
            echo "\t\t<div class=\"banner-box\">
\t\t\t";
            // line 42
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo $this->getAttribute($_model_, "additional_content");
            echo "
\t\t</div>
\t\t";
        }
        // line 45
        echo "\t\t
\t\t\t<div class=\"aside\">
\t\t\t\t<div class=\"nav-menu\">
\t\t\t\t\t
                            ";
        // line 49
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "TuhesMenu", 1 => array("showHidden" => "1", "id" => "0"), 2 => true), "method");
        echo " 
                </div>\t
\t\t\t</div>

            <div class=\"content\">
\t\t\t    ";
        // line 54
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "content");
        echo "
            </div>
\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "/views/pages/view_side_one.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  143 => 49,  137 => 45,  130 => 42,  127 => 41,  124 => 40,  117 => 37,  110 => 32,  97 => 30,  92 => 29,  89 => 28,  86 => 27,  79 => 22,  76 => 21,  68 => 16,  65 => 15,  57 => 12,  54 => 11,  45 => 7,  38 => 5,  34 => 4,  31 => 3,);
    }
}
