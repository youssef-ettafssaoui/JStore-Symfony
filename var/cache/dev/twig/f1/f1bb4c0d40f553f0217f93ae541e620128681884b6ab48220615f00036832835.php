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

/* checkout/index.html.twig */
class __TwigTemplate_457cef2feb3603b3f75d6e967d29e847c5b1d76a229172cc910ce2ae2bf2917d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/index.html.twig", 1);
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Checkout"]);
        echo "

<div class=\"section checkout\">
\t<div class=\"container\">
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_confirm")]);
        echo "
            <div class=\"row\">
        \t    <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Your delivery Address</h4>
                        <div class=\"content\" id=\"address\">
                                ";
        // line 17
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 17, $this->source); })()), "address", [], "any", false, false, false, 17), 'widget'), ["[spr]" => "<br>"]);
        echo "
                        </div>
                         <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        echo "\" class=\"btn btn-fill-out btn-block mt-1\">Add New address</a>
                </div>
                <div class=\"heading_s1\">
                    <h4>Your carrier</h4>
                    <div class=\"content\" id=\"carrier\">
                            ";
        // line 24
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 24, $this->source); })()), "carrier", [], "any", false, false, false, 24), 'widget'), ["[spr]" => "<br>"]);
        echo "
                    </div>
                </div>
                <div class=\"heading_s1\">
                    <h4>Additional information</h4>
                    <div class=\"form-group mb-1\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 30, $this->source); })()), "information", [], "any", false, false, false, 30), 'widget');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"order_review\">
                    <div class=\"heading_s1\">
                        <h4>Your Orders</h4>
                    </div>
                    <div class=\"table-responsive order_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 49, $this->source); })()), "products", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 50
            echo "                                    <tr>
                                        <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo " <span class=\"product-qty\">x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 51), "html", null, true);
            echo "</span></td>
                                        <td>\$";
            // line 52
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) / 100), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal HT</th>
                                    <td class=\"product-subtotal\">\$";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, false, 60), "subTotalHT", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td class=\"product-subtotal\">\$";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64), "Taxe", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class=\"product-subtotal\">\$";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 68, $this->source); })()), "data", [], "any", false, false, false, 68), "subTotalTTC", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>

                    </div>
                    <button type=\"submit\" id=\"checkout-button\" class=\"btn btn-fill-out btn-block\">Place Order</button>
                </div>
                </div>
        </div>
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 83,  194 => 68,  187 => 64,  180 => 60,  173 => 55,  164 => 52,  158 => 51,  155 => 50,  151 => 49,  129 => 30,  120 => 24,  112 => 19,  107 => 17,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Checkout AgriExpress ! {% endblock %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Checkout'}) }}

<div class=\"section checkout\">
\t<div class=\"container\">
    {{ form_start(checkout, {action: path('checkout_confirm')}) }}
            <div class=\"row\">
        \t    <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Your delivery Address</h4>
                        <div class=\"content\" id=\"address\">
                                {{ form_widget(checkout.address) | replace({'[spr]' : '<br>'}) | raw }}
                        </div>
                         <a href=\"{{ path('address_new') }}\" class=\"btn btn-fill-out btn-block mt-1\">Add New address</a>
                </div>
                <div class=\"heading_s1\">
                    <h4>Your carrier</h4>
                    <div class=\"content\" id=\"carrier\">
                            {{ form_widget(checkout.carrier) | replace({'[spr]' : '<br>'}) | raw }}
                    </div>
                </div>
                <div class=\"heading_s1\">
                    <h4>Additional information</h4>
                    <div class=\"form-group mb-1\">
                        {{ form_widget(checkout.information) }}
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"order_review\">
                    <div class=\"heading_s1\">
                        <h4>Your Orders</h4>
                    </div>
                    <div class=\"table-responsive order_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for element in cart.products %}
                                    <tr>
                                        <td> {{ element.product.name }} <span class=\"product-qty\">x {{ element.quantity }}</span></td>
                                        <td>\${{ element.product.price/100 }}</td>
                                    </tr>
                                {% endfor %}
                                    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal HT</th>
                                    <td class=\"product-subtotal\">\${{cart.data.subTotalHT}}</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td class=\"product-subtotal\">\${{ cart.data.Taxe }}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class=\"product-subtotal\">\${{ cart.data.subTotalTTC }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>

                    </div>
                    <button type=\"submit\" id=\"checkout-button\" class=\"btn btn-fill-out btn-block\">Place Order</button>
                </div>
                </div>
        </div>
    {{ form_end(checkout) }}
    </div>
</div>


{% endblock %}
", "checkout/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/checkout/index.html.twig");
    }
}
