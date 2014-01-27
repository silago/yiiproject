<?php

/* /components/views/TuhesSlides.twig */
class __TwigTemplate_df01e9db7e3d62f2eb2315db7438d9594f6ee9524b031a1f798326fd05acaf69 extends Twig_Template
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
\t\t
\t\t\t ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t\t\t <div class=\"slide-block\">
\t\t\t\t<img src=\"/application/uploads/thumb_";
            // line 5
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "file");
            echo "\" height=\"297\" width=\"957\" alt=\"\" />\t
\t\t\t</div>
\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "/components/views/TuhesSlides.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
