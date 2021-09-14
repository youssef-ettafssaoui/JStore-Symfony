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

/* checkout/confirm.html.twig */
class __TwigTemplate_f24b64504cdb4a7cfc1ec64160f1898ebe906748a1b46aa4ddac41667e9443b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'scriptStripe' => [$this, 'block_scriptStripe'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirm.html.twig", 1);
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
    public function block_scriptStripe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptStripe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptStripe"));

        // line 6
        echo "    <script src=\"https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Checkout"]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
            <div class=\"row\">
        \t    <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Please, Verify Your delivery Address</h4><br>
                        <div class=\"content\" id=\"address\">
                                ";
        // line 21
        echo twig_replace_filter((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 21, $this->source); })()), ["[spr]" => "<br>"]);
        echo "
                                 <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-fill-out mt-1\">Edit Your address</a>
                                 <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_edit");
        echo "\" class=\"btn btn-fill-out mt-1\">Change Your address</a>
                        </div>
                        
                </div>
                <div class=\"heading_s1\">
                    <h4>Please, Verify Your carrier</h4>
                    <div class=\"content\" id=\"carrier\">
                            ";
        // line 30
        echo twig_replace_filter((isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 30, $this->source); })()), ["[spr]" => "<br>"]);
        echo "
                            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_edit");
        echo "\" class=\"btn btn-fill-out mt-1\">Change The carrier</a>
                    </div>
                </div>
                ";
        // line 34
        if ((isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new RuntimeError('Variable "information" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                    <div class=\"heading_s1\">
                        <h4>Additional information</h4>
                            <div class=\"form-group mb-1\">
                                ";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new RuntimeError('Variable "information" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "
                            </div>
                        </div>
                ";
        }
        // line 42
        echo "            </div>

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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 58, $this->source); })()), "products", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 59
            echo "                                    <tr>
                                        <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
            echo " <span class=\"product-qty\">x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 60), "html", null, true);
            echo "</span></td>
                                        <td>\$";
            // line 61
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) / 100), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal HT : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()), "data", [], "any", false, false, false, 69), "subTotalHT", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Taxe : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 73, $this->source); })()), "data", [], "any", false, false, false, 73), "Taxe", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Shipping (";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
        echo ") : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 78
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 78, $this->source); })()), "price", [], "any", false, false, false, 78) / 100), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Total TTC : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 83
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 83, $this->source); })()), "data", [], "any", false, false, false, 83), "subTotalTTC", [], "any", false, false, false, 83) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 83, $this->source); })()), "price", [], "any", false, false, false, 83) / 100)), "html", null, true);
        echo "</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>
                        <button type=\"submit\" id=\"checkout-button\"
                        class=\"btn btn-fill-out btn-block\">
                        Paid | \$";
        // line 94
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 94, $this->source); })()), "data", [], "any", false, false, false, 94), "subTotalTTC", [], "any", false, false, false, 94) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 94, $this->source); })()), "price", [], "any", false, false, false, 94) / 100)), "html", null, true);
        echo "
                    </button>
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

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    <script type=\"text/javascript\">
        var stripe = Stripe('pk_test_51JFTNKHaYaU3WTp93tJA5ARz0MDsIxObHj4jVk1yFx8o8buKDAWmhCUTlAOtACR1Ep3UWBUzZKmGLDnKztPyhkcZ00Nf19ZFXA');
        var checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function() {
            fetch(\"/create-checkout-session/";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\", {
                method: \"POST\",
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (session) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(function (result) {
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error(\"Error :\", error);
            });
        });
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 113,  288 => 108,  278 => 107,  256 => 94,  242 => 83,  234 => 78,  230 => 77,  223 => 73,  216 => 69,  209 => 64,  200 => 61,  194 => 60,  191 => 59,  187 => 58,  169 => 42,  162 => 38,  157 => 35,  155 => 34,  149 => 31,  145 => 30,  135 => 23,  131 => 22,  127 => 21,  115 => 12,  112 => 11,  102 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Checkout AgriExpress ! {% endblock %}

{% block scriptStripe %}
    <script src=\"https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock scriptStripe %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Checkout'}) }}

<div class=\"section\">
\t<div class=\"container\">
            <div class=\"row\">
        \t    <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Please, Verify Your delivery Address</h4><br>
                        <div class=\"content\" id=\"address\">
                                {{ address | replace({'[spr]' : '<br>'}) | raw }}
                                 <a href=\"{{ path('address_edit', {'id': address.id}) }}\" class=\"btn btn-fill-out mt-1\">Edit Your address</a>
                                 <a href=\"{{ path('checkout_edit') }}\" class=\"btn btn-fill-out mt-1\">Change Your address</a>
                        </div>
                        
                </div>
                <div class=\"heading_s1\">
                    <h4>Please, Verify Your carrier</h4>
                    <div class=\"content\" id=\"carrier\">
                            {{ carrier | replace({'[spr]' : '<br>'}) | raw }}
                            <a href=\"{{ path('checkout_edit') }}\" class=\"btn btn-fill-out mt-1\">Change The carrier</a>
                    </div>
                </div>
                {% if information %}
                    <div class=\"heading_s1\">
                        <h4>Additional information</h4>
                            <div class=\"form-group mb-1\">
                                {{ information }}
                            </div>
                        </div>
                {% endif %}
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
                                    <th>SubTotal HT : </th>
                                    <td class=\"product-subtotal\">\${{cart.data.subTotalHT}}</td>
                                </tr>
                                <tr>
                                    <th>Taxe : </th>
                                    <td class=\"product-subtotal\">\${{ cart.data.Taxe }}</td>
                                </tr>

                                <tr>
                                    <th>Shipping ({{carrier.name}}) : </th>
                                    <td class=\"product-subtotal\">\${{ carrier.price/100 }}</td>
                                </tr>

                                <tr>
                                    <th>Total TTC : </th>
                                    <td class=\"product-subtotal\">\${{ cart.data.subTotalTTC + carrier.price/100 }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>
                        <button type=\"submit\" id=\"checkout-button\"
                        class=\"btn btn-fill-out btn-block\">
                        Paid | \${{ cart.data.subTotalTTC + carrier.price/100 }}
                    </button>
                    </div>

                </div>
                </div>
        </div>
    </div>
</div>


{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        var stripe = Stripe('pk_test_51JFTNKHaYaU3WTp93tJA5ARz0MDsIxObHj4jVk1yFx8o8buKDAWmhCUTlAOtACR1Ep3UWBUzZKmGLDnKztPyhkcZ00Nf19ZFXA');
        var checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function() {
            fetch(\"/create-checkout-session/{{ reference }}\", {
                method: \"POST\",
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (session) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(function (result) {
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error(\"Error :\", error);
            });
        });
    </script>
    
{% endblock %}
", "checkout/confirm.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/checkout/confirm.html.twig");
    }
}
