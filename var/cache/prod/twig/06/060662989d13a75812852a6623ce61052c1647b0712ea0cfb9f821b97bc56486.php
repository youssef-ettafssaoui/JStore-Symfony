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

/* partials/header.html.twig */
class __TwigTemplate_a36239023f782b9083320178a14ef1bed9a19d430c761a8225637cb883944d53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"preloader\">
    <div class=\"preloader-content\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<header class=\"header_wrap fixed-top header_with_topbar\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                        <div class=\"lng_dropdown mr-2\">
                            <select name=\"countries\" class=\"custome_select\">
                                <option value='en' data-image=\"/assets/images/eng.png\" data-title=\"English\">Anglais</option>
                                <option value='fn' data-image=\"/assets/images/fn.png\" data-title=\"France\">France</option>
                                <option value='us' data-image=\"/assets/images/us.png\" data-title=\"United States\">États Unis</option>
                            </select>
                        </div>
                        <div class=\"mr-3\">
                            <select name=\"countries\" class=\"custome_select\">
                                <option value='USD' data-title=\"USD\">USD</option>
                                <option value='EUR' data-title=\"EUR\">EUR</option>
                                <option value='GBR' data-title=\"GBR\">GBR</option>
                            </select>
                        </div>
                        <ul class=\"contact_detail text-center text-lg-left\">
                            <li><i class=\"ti-mobile\"></i><span>000-000-000</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-right\">
                           <ul class=\"header_list\">
                            <li><a href=\"\"><i class=\"ti-control-shuffle\"></i><span>Comparer</span></a></li>
                            <li><a href=\"\"><i class=\"ti-heart\"></i><span>Wishlist</span></a></li>
                                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\"><i class=\"ti-user\"></i><span>Account</span></a></li>
                                    <li><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"ti-lock\"></i><span>Logout</span></a></li>
                                ";
        } else {
            // line 43
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"ti-user\"></i><span>Login</span></a></li>
                                    <li><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i><span>Register</span></a></li>
                                ";
        }
        // line 46
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"> 
                <a class=\"navbar-brand\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img width=\"240\" class=\"logo_light\" src=\"/assets/images/logo_web.png\" alt=\"logo\" />
                    <img width=\"240\" class=\"logo_dark\" src=\"/assets/images/logo_web.png\" alt=\"logo\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>   
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\">Pages</a>
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"#\">Products</a>
                           
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\">Blog</a>
                            
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                            
                        </li>
                        <li><a class=\"nav-link nav_item\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">Contact Us</a></li> 
                    </ul>
                </div>
                <ul class=\"navbar-nav attr-nav align-items-center\">
                    <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                        <div class=\"search_wrap\">
                            <span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                            <form>
                                <input type=\"text\" placeholder=\"Search\" class=\"form-control\" id=\"search_input\">
                                <button type=\"submit\" class=\"search_icon\"><i class=\"ion-ios-search-strong\"></i></button>
                            </form>
                        </div><div class=\"search_overlay\"></div>
                    </li>
                    <li class=\"dropdown cart_dropdown\"><a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\"><i class=\"linearicons-cart\"></i><span class=\"cart_count\">
                            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 96), "get", [0 => "cart"], "method", false, false, false, 96)) {
            // line 97
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 97), "get", [0 => "cartData"], "method", false, false, false, 97), "data", [], "any", false, false, false, 97), "quantity_cart", [], "any", false, false, false, 97), "html", null, true);
            echo "
                            ";
        } else {
            // line 99
            echo "                                0
                            ";
        }
        // line 101
        echo "                    </span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">

                                ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 105), "get", [0 => "cart"], "method", false, false, false, 105)) {
            // line 106
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 106), "get", [0 => "cartData"], "method", false, false, false, 106), "products", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 107
                echo "                                            <li>
                                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                                <a href=\"#\"><img src=\"/assets/uploads/products/";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 109), "image", [], "any", false, false, false, 109), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
                echo "</a>
                                                <span class=\"cart_quantity\"> ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 110), "html", null, true);
                echo " x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 110), "price", [], "any", false, false, false, 110) / 100), "html", null, true);
                echo "</span>
                                            </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                    </ul>
                                    <div class=\"cart_footer\">
                                            <p class=\"cart_total\"><strong>Subtotal TTC:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 115), "get", [0 => "cartData"], "method", false, false, false, 115), "data", [], "any", false, false, false, 115), "subTotalTTC", [], "any", false, false, false, 115), "html", null, true);
            echo "</p>
                                            <p class=\"cart_buttons\"><a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                                    </div>
                                ";
        } else {
            // line 119
            echo "                                        <li>Your Cart is empty !</li>
                                    </ul>
                                ";
        }
        // line 122
        echo "                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 122,  230 => 119,  222 => 116,  218 => 115,  214 => 113,  203 => 110,  195 => 109,  191 => 108,  188 => 107,  183 => 106,  181 => 105,  175 => 101,  171 => 99,  165 => 97,  163 => 96,  146 => 82,  140 => 79,  123 => 65,  110 => 55,  99 => 46,  94 => 44,  89 => 43,  84 => 41,  79 => 40,  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/header.html.twig");
    }
}
