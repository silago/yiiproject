<?php

/* /views/news/index_view.twig */
class __TwigTemplate_af7d6d9705962826446db36fbd40b073857a05a3074d2d680f88ba07c34fb4d2 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["model"]) ? $context["model"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            <div class=\"block\">
\t\t\t    <h3> <a href='/application/news/read/";
            // line 16
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slug");
            echo "'>";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
            echo "</a> </h3>
                <div>
                ";
            // line 18
            echo twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content"), 0, 120);
            echo "...
                </div> 
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        return array (  68 => 22,  58 => 18,  51 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,);
    }
}
