<?php

/* /components/views/SlidesItems.twig */
class __TwigTemplate_9defc1af81eb8ae0c30a2c2ed7ef426fa8fdc806de5703c78d0a9362e4e50237 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "\t<div class=\"slide-block\">
\t\t\t\t<img src=\"/application/uploads/thumb_";
            // line 3
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "file");
            echo "\" height=\"297\" width=\"957\" alt=\"\" />\t
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t\t\t
";
    }

    public function getTemplateName()
    {
        return "/components/views/SlidesItems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 3,  23 => 2,  19 => 1,  139 => 68,  136 => 67,  131 => 5,  100 => 71,  98 => 67,  81 => 53,  55 => 30,  27 => 5,  21 => 1,);
    }
}
