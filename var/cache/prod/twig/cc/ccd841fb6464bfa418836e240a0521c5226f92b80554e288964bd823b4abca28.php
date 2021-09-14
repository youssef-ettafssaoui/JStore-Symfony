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
class __TwigTemplate_cca1b0abca84c6981f2a995eeab93e10cd3bbf83302184d5c26633daff3e3782 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/detail_order.html.twig", 1);
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Order Details"]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
    <div>
        <div class=\"order-reference\">
            <div><strong>Order Reference : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 13), "html", null, true);
        echo "</strong></div>
            <div><strong>Order Date : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 14), "d-m-Y"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 33));
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
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "subTotalHT", [], "any", false, false, false, 75) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Carrier <strong>(";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierName", [], "any", false, false, false, 78), "html", null, true);
        echo ")</strong></td>
                                    <td class=\"cart_total_amount\">\$";
        // line 79
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 79) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ ";
        // line 83
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "Taxe", [], "any", false, false, false, 83) / 100), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ ";
        // line 87
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "subTotalTTC", [], "any", false, false, false, 87) / 100), "html", null, true);
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
        return array (  201 => 92,  193 => 87,  186 => 83,  179 => 79,  175 => 78,  169 => 75,  137 => 45,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  100 => 34,  96 => 33,  74 => 14,  70 => 13,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/detail_order.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/account/detail_order.html.twig");
    }
}
