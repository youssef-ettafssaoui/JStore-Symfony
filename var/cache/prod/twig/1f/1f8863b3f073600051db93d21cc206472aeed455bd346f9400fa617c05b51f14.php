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
class __TwigTemplate_cc6aee60e5311f32035698180582435469351508dfaebb9f0e3b4466db695163 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Cart AgriExpress ! ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 25));
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
                        <tfoot>
                          <tr>
                            \t<th class=\"product-thumbnail\">&nbsp;</th>
                                <th class=\"product-name\">Product</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">Total</th>
                                <th class=\"product-remove\">Remove</th>
                            </tr>
                        </tfoot>
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
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 80), "subTotalHT", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <td class=\"cart_total_label\">Taxe 20%</td>
                                    <td class=\"cart_total_amount\">\$ ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 85), "Taxe", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TTC</td>
                                    <td class=\"cart_total_amount\"><strong>\$ ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "data", [], "any", false, false, false, 89), "subTotalTTC", [], "any", false, false, false, 89), "html", null, true);
        echo "</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" class=\"btn btn-fill-out\">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>

";
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
        return array (  200 => 94,  192 => 89,  185 => 85,  177 => 80,  136 => 41,  127 => 38,  123 => 37,  120 => 36,  114 => 34,  112 => 33,  108 => 32,  104 => 31,  99 => 29,  95 => 28,  89 => 27,  86 => 26,  82 => 25,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/cart/index.html.twig");
    }
}
