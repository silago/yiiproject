<?php

/* /components/views/SitewidgetsItems.twig */
class __TwigTemplate_ce165fa57e4fd3191bac843938b911778a5f3e2d37dc95f9d9482ae68badc72a extends Twig_Template
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
            echo "<div class=\"block\">
            ";
            // line 3
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "html");
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/components/views/SitewidgetsItems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,  63 => 28,  58 => 26,  47 => 18,  31 => 4,  28 => 3,);
    }
}
