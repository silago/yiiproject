<?php

/* /views/news/index_view.twig */
class __TwigTemplate_46a0a523db13d8a5eeac80bbd8747bb47478d6fb95182070115b79a59cf8d672 extends Twig_Template
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
            <a href=\"/\">Главная</a>
\t\t\t<a href=\"/application/news/\">Новости</a>
        </div>
\t\t<div class=\"title\">
\t\t\t<p> Новости </p>\t

\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
        <div class=\"container\">
            ";
        // line 14
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_model_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            <div class=\"block\">
                <table> <tr> <td>
                ";
            // line 17
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "image")) {
                // line 18
                echo "                    <a style=\"margin-right:10px;\" href=\"/application/news/read/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "slug");
                echo "\"><img src=\"/application/uploads/thumb_";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "image");
                echo "\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t    ";
            }
            // line 20
            echo "                </td><td style=\"vertical-align:top;\">
                <small> ";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "pubDate");
            echo "</small>                
\t\t\t    <h3> <a href='/application/news/read/";
            // line 22
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "slug");
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title");
            echo "</a> </h3>
                    <div>
                    ";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_slice($this->env, strip_tags($this->getAttribute($_item_, "content")), 0, 120);
            echo "...
                    </div>
                </td></tr></table>
            <br/>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/views/news/index_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  83 => 24,  74 => 22,  69 => 21,  66 => 20,  56 => 18,  53 => 17,  49 => 15,  44 => 14,  31 => 3,  28 => 2,);
    }
}
