<?php

/* //components/views/TuhesMenuItems.twig */
class __TwigTemplate_f8792c64d21261f20b466f3289bc5df69b43000b2b5ea2115d09cb26d5fab1c0 extends Twig_Template
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
        echo "\t\t\t<ul></ul>
\t\t\t ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "\t\t\t<li><a href=\"/application/pages/read/";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slug");
            echo "\">";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
            echo "</a>
\t\t\t
\t\t\t</li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "//components/views/TuhesMenuItems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  45 => 9,  38 => 7,  36 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
