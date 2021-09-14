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
class __TwigTemplate_dae6f69f003405a823ada5b389c22c128910865230338eece02588284822f051 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "checkout/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Checkout AgriExpress ! ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_confirm")]);
        echo "
            <div class=\"row\">
        \t    <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Your delivery Address</h4>
                        <div class=\"content\" id=\"address\">
                                ";
        // line 17
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["checkout"] ?? null), "address", [], "any", false, false, false, 17), 'widget'), ["[spr]" => "<br>"]);
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
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["checkout"] ?? null), "carrier", [], "any", false, false, false, 24), 'widget'), ["[spr]" => "<br>"]);
        echo "
                    </div>
                </div>
                <div class=\"heading_s1\">
                    <h4>Additional information</h4>
                    <div class=\"form-group mb-1\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["checkout"] ?? null), "information", [], "any", false, false, false, 30), 'widget');
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 49));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 60), "subTotalHT", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td class=\"product-subtotal\">\$";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 64), "Taxe", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class=\"product-subtotal\">\$";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 68), "subTotalTTC", [], "any", false, false, false, 68), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout"] ?? null), 'form_end');
        echo "
    </div>
</div>


";
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
        return array (  182 => 83,  164 => 68,  157 => 64,  150 => 60,  143 => 55,  134 => 52,  128 => 51,  125 => 50,  121 => 49,  99 => 30,  90 => 24,  82 => 19,  77 => 17,  68 => 11,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/checkout/index.html.twig");
    }
}
