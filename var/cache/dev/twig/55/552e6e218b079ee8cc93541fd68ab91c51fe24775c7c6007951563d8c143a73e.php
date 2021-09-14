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

/* cart/index.html.twig */
class __TwigTemplate_7ebfdbb66cea11678293d99db39dcf802580a7dd604a632f1361a0c52598df07 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo " Cart AgriExpress ! ";
        
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Your Cart"]);
        echo "
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">&nbsp;</th>
                                <th class=\"product-name\">Product</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">Total</th>
                                <th class=\"product-remove\">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()), "products", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 26
            echo "                            <tr>
                            \t<td class=\"product-thumbnail\"><a href=\"#\"><img src=\"/assets/uploads/products/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\"></a></td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</a></td>
                                <td class=\"product-price\" data-title=\"Price\">\$";
            // line 29
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29) / 100), "html", null, true);
            echo "</td>
                                <td class=\"product-quantity\" data-title=\"Quantity\"><div class=\"quantity\">
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" type=\"button\" value=\"-\" class=\"minus\"> - </a>
                                <input type=\"text\" name=\"quantity\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "\" title=\"Qty\" class=\"qty\" size=\"4\">
                                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 33) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 33), "quantity", [], "any", false, false, false, 33))) {
                // line 34
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" type=\"button\" value=\"+\" class=\"plus\"> + </a>
                                ";
            }
            // line 36
            echo "                              </div></td>
                              \t<td class=\"product-subtotal\" data-title=\"Total\">\$";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 37) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37)) / 100), "html", null, true);
            echo "</td>
                                <td class=\"product-remove\" data-title=\"Remove\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"ti-close\"></i></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
            \t<div class=\"medium_divider\"></div>
            \t<div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
            \t<div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t  <div class=\"col-md-6\">


            </div>
            <div class=\"col-md-6\">
            \t<div class=\"border p-3 p-md-4\">
                    <div class=\"heading_s1 mb-3\">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">\$";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "subTotalHT", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 75, $this->source); })()), "data", [], "any", false, false, false, 75), "Taxe", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 79, $this->source); })()), "data", [], "any", false, false, false, 79), "subTotalTTC", [], "any", false, false, false, 79), "html", null, true);
        echo "</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" class=\"btn btn-fill-out\">Proceed To CheckOut</a>
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
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 84,  212 => 79,  205 => 75,  197 => 70,  166 => 41,  157 => 38,  153 => 37,  150 => 36,  144 => 34,  142 => 33,  138 => 32,  134 => 31,  129 => 29,  125 => 28,  119 => 27,  116 => 26,  112 => 25,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Cart AgriExpress ! {% endblock %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Your Cart'}) }}
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">&nbsp;</th>
                                <th class=\"product-name\">Product</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">Total</th>
                                <th class=\"product-remove\">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for element in cart.products %}
                            <tr>
                            \t<td class=\"product-thumbnail\"><a href=\"#\"><img src=\"/assets/uploads/products/{{element.product.image}}\" alt=\"{{element.product.name}}\"></a></td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">{{element.product.name}}</a></td>
                                <td class=\"product-price\" data-title=\"Price\">\${{element.product.price/100}}</td>
                                <td class=\"product-quantity\" data-title=\"Quantity\"><div class=\"quantity\">
                                <a href=\"{{path('cart_delete',{'id':element.product.id})}}\" type=\"button\" value=\"-\" class=\"minus\"> - </a>
                                <input type=\"text\" name=\"quantity\" value=\"{{element.quantity}}\" title=\"Qty\" class=\"qty\" size=\"4\">
                                {% if element.quantity < element.product.quantity %}
                                    <a href=\"{{path('cart_add',{'id':element.product.id})}}\" type=\"button\" value=\"+\" class=\"plus\"> + </a>
                                {% endif %}
                              </div></td>
                              \t<td class=\"product-subtotal\" data-title=\"Total\">\${{ element.quantity * element.product.price/100 }}</td>
                                <td class=\"product-remove\" data-title=\"Remove\"><a href=\"{{path('cart_delete_all',{'id':element.product.id})}}\"><i class=\"ti-close\"></i></a></td>
                            </tr>
                        {% endfor %}

                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
            \t<div class=\"medium_divider\"></div>
            \t<div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
            \t<div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t  <div class=\"col-md-6\">


            </div>
            <div class=\"col-md-6\">
            \t<div class=\"border p-3 p-md-4\">
                    <div class=\"heading_s1 mb-3\">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">\${{ cart.data.subTotalHT }}</td>
                                </tr>

                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ {{ cart.data.Taxe }}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ {{ cart.data.subTotalTTC }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('checkout') }}\" class=\"btn btn-fill-out\">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "cart/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/cart/index.html.twig");
    }
}
