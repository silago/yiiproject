<?php

/* /components/views/SitewidgetsItems.twig */
class __TwigTemplate_ca2d917a9ae4b5f530b64807b8042ee595101d80ee9aba63dfa3f34fb9a585ee extends Twig_Template
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
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"block\">
            ";
            // line 3
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "html");
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
        return array (  73 => 21,  61 => 16,  56 => 15,  46 => 13,  36 => 10,  37 => 5,  24 => 2,  84 => 35,  75 => 31,  69 => 30,  63 => 29,  51 => 14,  45 => 26,  33 => 9,  29 => 22,  25 => 5,  57 => 28,  50 => 9,  44 => 7,  39 => 25,  23 => 3,  19 => 1,  144 => 71,  141 => 70,  136 => 5,  105 => 74,  103 => 70,  85 => 56,  58 => 33,  27 => 3,  21 => 1,  65 => 28,  59 => 26,  47 => 18,  31 => 5,  28 => 8,);
    }
}
