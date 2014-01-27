<?php

/* /components/views/TuhesMenu.twig */
class __TwigTemplate_1ab6bcb7c7b8b7ea8757d75a21d0cdf3388dbe5d766c38d3b2f9ea7852aeaa11 extends Twig_Template
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
\t\t<ul>
\t\t\t ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t\t\t<li>
\t\t\t\t <a href=\"/application/pages/read/";
            // line 5
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slug");
            echo "\">";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
            echo "</a><span class=\"one\"></span>
\t\t\t\t";
            // line 6
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) {
                echo "\t\t\t\t
\t\t\t\t\t";
                // line 7
                $this->env->loadTemplate("//components/views/TuhesMenu.twig")->display(array("items" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children")));
                echo "\t\t\t\t
\t\t\t\t";
            }
            // line 9
            echo "\t\t\t</li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</ul> 
";
    }

    public function getTemplateName()
    {
        return "/components/views/TuhesMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 9,  40 => 7,  36 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
