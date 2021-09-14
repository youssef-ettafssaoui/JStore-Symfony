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
class __TwigTemplate_eac0c831294c87d19ea75a17e8d639c6fe4d86dcb12ce68787e25fb48e9796a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " AgriExpress Shopping !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["homeSlider"]) || array_key_exists("homeSlider", $context) ? $context["homeSlider"] : (function () { throw new RuntimeError('Variable "homeSlider" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        ";
            echo twig_include($this->env, $context, "partials/home_slider.html.twig", ["slider" => (isset($context["homeSlider"]) || array_key_exists("homeSlider", $context) ? $context["homeSlider"] : (function () { throw new RuntimeError('Variable "homeSlider" does not exist.', 8, $this->source); })())]);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productNewArrival"]) || array_key_exists("productNewArrival", $context) ? $context["productNewArrival"] : (function () { throw new RuntimeError('Variable "productNewArrival" does not exist.', 50, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productBestSeller"]) || array_key_exists("productBestSeller", $context) ? $context["productBestSeller"] : (function () { throw new RuntimeError('Variable "productBestSeller" does not exist.', 57, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productFeatured"]) || array_key_exists("productFeatured", $context) ? $context["productFeatured"] : (function () { throw new RuntimeError('Variable "productFeatured" does not exist.', 65, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productSpecialOffer"]) || array_key_exists("productSpecialOffer", $context) ? $context["productSpecialOffer"] : (function () { throw new RuntimeError('Variable "productSpecialOffer" does not exist.', 73, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  301 => 76,  284 => 74,  267 => 73,  260 => 68,  243 => 66,  226 => 65,  219 => 60,  202 => 58,  185 => 57,  179 => 53,  162 => 51,  145 => 50,  105 => 12,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} AgriExpress Shopping !{% endblock %}

{% block body %}

    {% if homeSlider %}
        {{ include(\"partials/home_slider.html.twig\", {'slider': homeSlider }) }}
    {% else %}
        {{ include(\"partials/title_section.html.twig\", {'name':'Home Page'}) }}
    {% endif %}


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
                                {% for product in productNewArrival %}
                                    {{ include(\"partials/product.html.twig\", {'product': product}) }}
                                {% endfor %}
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\">
                        <div class=\"row shop_container\">
                                {% for product in productBestSeller %}
                                    {{ include(\"partials/product.html.twig\", {'product': product}) }}
                                {% endfor %}
                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"featured\" role=\"tabpanel\" aria-labelledby=\"featured-tab\">
                        <div class=\"row shop_container\">
                                {% for product in productFeatured %}
                                    {{ include(\"partials/product.html.twig\", {'product': product}) }}
                                {% endfor %}
                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"specialoffer\" role=\"tabpanel\" aria-labelledby=\"specialoffer-tab\">
                        <div class=\"row shop_container\">
                                {% for product in productSpecialOffer %}
                                    {{ include(\"partials/product.html.twig\", {'product': product}) }}
                                {% endfor %}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</div>
{% endblock %}
", "home/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/home/index.html.twig");
    }
}
