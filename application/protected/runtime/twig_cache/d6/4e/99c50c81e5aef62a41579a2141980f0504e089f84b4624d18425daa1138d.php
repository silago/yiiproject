<?php

/* /components/views/NewsItems.twig */
class __TwigTemplate_d64e99c50c81e5aef62a41579a2141980f0504e089f84b4624d18425daa1138d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"news-container\">
\t\t<div class=\"title\">
\t\t\t<p>НОВОСТИ</p>\t
\t\t\t<a href=\"#\">Все новости</a>
\t\t\t<img src=\"images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t<div class=\"news-block\">
\t\t\t<a href=\"/application/news/read/";
            // line 10
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slug");
            echo "\"><img src=\"images/news-img.jpg\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t
\t\t\t\t<div class=\"news-info\">
\t\t\t\t\t<p>";
            // line 13
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pubDate");
            echo "</p>\t
\t\t\t\t\t<p><strong>";
            // line 14
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
            echo "</strong></p>
\t\t\t\t\t<p> ";
            // line 15
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "preview");
            echo "</p>
\t\t\t\t\t<a href=\"/application/news/read/";
            // line 16
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slug");
            echo "\">Подробней</a>
\t\t\t\t</div>
\t\t\t
\t\t</div>\t
\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/components/views/NewsItems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
