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
class __TwigTemplate_e9362b0900e70234126fabd450b11caaa94f771c8d3daa6b3572b88237300c3c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Checkout AgriExpress ! ";
    }

    // line 5
    public function block_scriptStripe($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_replace_filter(($context["address"] ?? null), ["[spr]" => "<br>"]);
        echo "
                                 <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
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
        echo twig_replace_filter(($context["carrier"] ?? null), ["[spr]" => "<br>"]);
        echo "
                            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_edit");
        echo "\" class=\"btn btn-fill-out mt-1\">Change The carrier</a>
                    </div>
                </div>
                ";
        // line 34
        if (($context["information"] ?? null)) {
            // line 35
            echo "                    <div class=\"heading_s1\">
                        <h4>Additional information</h4>
                            <div class=\"form-group mb-1\">
                                ";
            // line 38
            echo twig_escape_filter($this->env, ($context["information"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 58));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 69), "subTotalHT", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Taxe : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 73), "Taxe", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Shipping (";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        echo ") : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 78
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 78) / 100), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Total TTC : </th>
                                    <td class=\"product-subtotal\">\$";
        // line 83
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 83), "subTotalTTC", [], "any", false, false, false, 83) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 83) / 100)), "html", null, true);
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
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 94), "subTotalTTC", [], "any", false, false, false, 94) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 94) / 100)), "html", null, true);
        echo "
                    </button>
                    </div>

                </div>
                </div>
        </div>
    </div>
</div>


";
    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "    <script type=\"text/javascript\">
        var stripe = Stripe('pk_test_51JFTNKHaYaU3WTp93tJA5ARz0MDsIxObHj4jVk1yFx8o8buKDAWmhCUTlAOtACR1Ep3UWBUzZKmGLDnKztPyhkcZ00Nf19ZFXA');
        var checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function() {
            fetch(\"/create-checkout-session/";
        // line 113
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
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
        return array (  241 => 113,  234 => 108,  230 => 107,  214 => 94,  200 => 83,  192 => 78,  188 => 77,  181 => 73,  174 => 69,  167 => 64,  158 => 61,  152 => 60,  149 => 59,  145 => 58,  127 => 42,  120 => 38,  115 => 35,  113 => 34,  107 => 31,  103 => 30,  93 => 23,  89 => 22,  85 => 21,  73 => 12,  70 => 11,  66 => 10,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/confirm.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/checkout/confirm.html.twig");
    }
}
