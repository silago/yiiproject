<?php

/* /components/views/TuhesMenu.twig */
class __TwigTemplate_3e81cf5e4c74248a1f4b035263a19a88f23fac883241d837e6cf9c7cea56e681 extends Twig_Template
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
        echo "\t\t";
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 2
            echo "        <ul>
\t\t\t ";
            // line 3
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "             ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context["item_url"] = ("/application/pages/read/" . $this->getAttribute($_item_, "slug"));
                echo " 
\t\t\t<li ";
                // line 5
                if (isset($context["item_url"])) { $_item_url_ = $context["item_url"]; } else { $_item_url_ = null; }
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                if (($_item_url_ == $_url_)) {
                    echo "  class=\"active\" ";
                }
                echo "  >
\t\t\t\t<a href=\"/application/pages/read/";
                // line 6
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "slug");
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "title");
                echo "</a><span class=\"one\"></span>
\t\t\t\t";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "children", array(), "any", true, true)) {
                    echo "\t\t\t\t
\t\t\t\t\t";
                    // line 8
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                    $this->env->loadTemplate("//components/views/TuhesMenu.twig")->display(array("items" => $this->getAttribute($_item_, "children"), "url" => $_url_));
                    echo "\t\t\t\t
\t\t\t\t";
                }
                // line 10
                echo "\t\t\t</li>
\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t</ul> 
        ";
        }
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
        return array (  72 => 12,  65 => 10,  58 => 8,  53 => 7,  45 => 6,  37 => 5,  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
