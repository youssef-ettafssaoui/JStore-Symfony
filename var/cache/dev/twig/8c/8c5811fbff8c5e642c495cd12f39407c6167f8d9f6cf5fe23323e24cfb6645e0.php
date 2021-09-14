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

/* account/detail_order.html.twig */
class __TwigTemplate_a99beb927a63c35f1c87d2e49d6bfc2ebaf2dbf91638a8aad67555c0297d45de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/detail_order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/detail_order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/detail_order.html.twig", 1);
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

        echo " Checkout AgriExpress ! ";
        
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Order Details"]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
    <div>
        <div class=\"order-reference\">
            <div><strong>Order Reference : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "reference", [], "any", false, false, false, 13), "html", null, true);
        echo "</strong></div>
            <div><strong>Order Date : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "d-m-Y"), "html", null, true);
        echo "</strong></div>
        </di>
    </div><br><br>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">ID</th>
                                <th class=\"product-name\">Product Name</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">subTotal HT</th>
                                <th class=\"product-subtotal\">Taxe</th>
                                <th class=\"product-subtotal\">SubTotal TTC</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "orderDetails", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 34
            echo "                            <tr>
                            \t<td class=\"product-thumbnail\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "productName", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                                <td class=\"product-price\" data-title=\"Price\">\$";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "productPrice", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td class=\"product-quantity\" data-title=\"Quantity\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "subTotalHT", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "taxe", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "subTotalTTC", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
   
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
                        <h6>Order Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">\$";
        // line 75
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 75, $this->source); })()), "subTotalHT", [], "any", false, false, false, 75) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Carrier <strong>(";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 78, $this->source); })()), "carrierName", [], "any", false, false, false, 78), "html", null, true);
        echo ")</strong></td>
                                    <td class=\"cart_total_amount\">\$";
        // line 79
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 79, $this->source); })()), "carrierPrice", [], "any", false, false, false, 79) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ ";
        // line 83
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "Taxe", [], "any", false, false, false, 83) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ ";
        // line 87
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "subTotalTTC", [], "any", false, false, false, 87) / 100), "html", null, true);
        echo "</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" class=\"btn btn-fill-out\">Back To Account</a>
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
        return "account/detail_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 92,  223 => 87,  216 => 83,  209 => 79,  205 => 78,  199 => 75,  167 => 45,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  130 => 34,  126 => 33,  104 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Checkout AgriExpress ! {% endblock %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Order Details'}) }}

<div class=\"section\">
\t<div class=\"container\">
    <div>
        <div class=\"order-reference\">
            <div><strong>Order Reference : {{order.reference}}</strong></div>
            <div><strong>Order Date : {{order.createdAt | date(\"d-m-Y\")}}</strong></div>
        </di>
    </div><br><br>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">ID</th>
                                <th class=\"product-name\">Product Name</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">subTotal HT</th>
                                <th class=\"product-subtotal\">Taxe</th>
                                <th class=\"product-subtotal\">SubTotal TTC</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for element in order.orderDetails %}
                            <tr>
                            \t<td class=\"product-thumbnail\">{{element.id}}</td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">{{element.productName}}</a></td>
                                <td class=\"product-price\" data-title=\"Price\">\${{element.productPrice}}</td>
                                <td class=\"product-quantity\" data-title=\"Quantity\">{{element.quantity}}</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">{{element.subTotalHT}}</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">{{element.taxe}}</td>
                                <td class=\"product-subtotal\" data-title=\"Total\">{{element.subTotalTTC}}</td>
   
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
                        <h6>Order Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">\${{ order.subTotalHT/100 }}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Carrier <strong>({{order.carrierName}})</strong></td>
                                    <td class=\"cart_total_amount\">\${{ order.carrierPrice/100 }}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ {{ order.Taxe/100 }}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ {{ order.subTotalTTC/100 }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('account') }}\" class=\"btn btn-fill-out\">Back To Account</a>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "account/detail_order.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/account/detail_order.html.twig");
    }
}
