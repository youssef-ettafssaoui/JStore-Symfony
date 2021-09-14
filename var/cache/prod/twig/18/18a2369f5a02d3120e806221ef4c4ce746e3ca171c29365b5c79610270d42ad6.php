<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_f5852f069c081b340721f9afebed86d1d31eab8f8d150e0b0659131b50079e02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " AgriExpress Shopping !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        if (($context["homeSlider"] ?? null)) {
            // line 8
            echo "        ";
            echo twig_include($this->env, $context, "partials/home_slider.html.twig", ["slider" => ($context["homeSlider"] ?? null)]);
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Home Page"]);
            echo "
    ";
        }
        // line 12
        echo "

<div class=\"container\">
<div class=\"section small_pt pb_70\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
            \t<div class=\"heading_s1 text-center\">
                \t<h2>Exclusive Products</h2>
                </div>
            </div>
\t\t</div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style1\">
                    <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">

                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"arrival-tab\" data-toggle=\"tab\" href=\"#arrival\" role=\"tab\" aria-controls=\"arrival\" aria-selected=\"true\">New Arrival</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"sellers-tab\" data-toggle=\"tab\" href=\"#sellers\" role=\"tab\" aria-controls=\"sellers\" aria-selected=\"false\">Best Sellers</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"featured-tab\" data-toggle=\"tab\" href=\"#featured\" role=\"tab\" aria-controls=\"featured\" aria-selected=\"false\">Featured</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"specialoffer-tab\" data-toggle=\"tab\" href=\"#specialoffer\" role=\"tab\" aria-controls=\"specialoffer\" aria-selected=\"false\">Special Offer</a>
                        </li>

                    </ul>
                </div>
                <div class=\"tab-content\">
                \t<div class=\"tab-pane fade show active\" id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\">
                        <div class=\"row shop_container\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productNewArrival"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                                    ";
            echo twig_include($this->env, $context, "partials/product.html.twig", ["product" => $context["product"]]);
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\">
                        <div class=\"row shop_container\">
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productBestSeller"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 58
            echo "                                    ";
            echo twig_include($this->env, $context, "partials/product.html.twig", ["product" => $context["product"]]);
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"featured\" role=\"tabpanel\" aria-labelledby=\"featured-tab\">
                        <div class=\"row shop_container\">
                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productFeatured"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "                                    ";
            echo twig_include($this->env, $context, "partials/product.html.twig", ["product" => $context["product"]]);
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"specialoffer\" role=\"tabpanel\" aria-labelledby=\"specialoffer-tab\">
                        <div class=\"row shop_container\">
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productSpecialOffer"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "                                    ";
            echo twig_include($this->env, $context, "partials/product.html.twig", ["product" => $context["product"]]);
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 76,  254 => 74,  237 => 73,  230 => 68,  213 => 66,  196 => 65,  189 => 60,  172 => 58,  155 => 57,  149 => 53,  132 => 51,  115 => 50,  75 => 12,  69 => 10,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/home/index.html.twig");
    }
}
