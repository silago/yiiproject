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
        echo "\t<h2> Новости </h2>
\t ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "\t\t<div class=\"large-3 columns panel\t\">
\t\t\t<div class=\"\">
\t\t\t\t<h6>\t ";
            // line 5
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
            echo " </h6>
\t\t\t\t<small>  ";
            // line 6
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pubDate");
            echo " </small>
\t\t\t\t<p>
\t\t\t\t\t\t ";
            // line 8
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "preview");
            echo "
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t</div> 
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
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
        return array (  51 => 14,  39 => 8,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
