<?php

/* /components/views/NewsItems.twig */
class __TwigTemplate_5726819ed5f71064435e42ba7911ea3fe96a68de1800ed3b03329c7b0b89ad12 extends Twig_Template
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
\t\t\t<a href=\"/application/news/\">Все новости</a>
\t\t\t<img src=\"/application/images/title-ln.jpg\" height=\"12\" width=\"20\" alt=\"\" />
\t\t</div>
\t\t ";
        // line 8
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t<div class=\"news-block\">
\t\t\t
            ";
            // line 11
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "image")) {
                // line 12
                echo "                <a href=\"/application/news/read/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "slug");
                echo "\"><img src=\"/application/uploads/thumb_";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "image");
                echo "\" height=\"80\" width=\"112\" alt=\"\" /></a>\t
\t\t\t";
            }
            // line 14
            echo "\t\t\t\t<div class=\"news-info\">
\t\t\t\t\t<p>";
            // line 15
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "pubDate");
            echo "</p>\t
\t\t\t\t\t<p><strong>";
            // line 16
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title");
            echo "</strong></p>
\t\t\t\t\t<p> ";
            // line 17
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "preview");
            echo "</p>
\t\t\t\t\t<a href=\"/application/news/read/";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "slug");
            echo "\">Подробней</a>
\t\t\t\t</div>
\t\t\t
\t\t</div>\t
\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  80 => 23,  68 => 18,  63 => 17,  58 => 16,  53 => 15,  50 => 14,  40 => 12,  37 => 11,  33 => 9,  28 => 8,  19 => 1,);
    }
}
