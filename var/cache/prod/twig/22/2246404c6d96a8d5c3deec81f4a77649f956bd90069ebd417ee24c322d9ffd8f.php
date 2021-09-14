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
class __TwigTemplate_8f32758e79c9ea04b067c6df8359e7b344f439b48b41e5ee49588c22a88ed6e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

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

                        </div>
                        <div class=\"mr-3\">

                        </div>

                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-right\">
                           <ul class=\"header_list\">
                                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\"><i class=\"ti-user\"></i><span>Account</span></a></li>
                                    <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"ti-lock\"></i><span>Logout</span></a></li>
                                ";
        } else {
            // line 31
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"ti-user\"></i><span>Login</span></a></li>
                                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i><span>Register</span></a></li>
                                ";
        }
        // line 34
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
        // line 43
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
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>   
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Shop</a>
                            
                        </li>
                        <li><a class=\"nav-link nav_item\" href=\"";
        // line 59
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
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", [0 => "cart"], "method", false, false, false, 73)) {
            // line 74
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", [0 => "cartData"], "method", false, false, false, 74), "data", [], "any", false, false, false, 74), "quantity_cart", [], "any", false, false, false, 74), "html", null, true);
            echo "
                            ";
        } else {
            // line 76
            echo "                                0
                            ";
        }
        // line 78
        echo "                    </span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">

                                ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", [0 => "cart"], "method", false, false, false, 82)) {
            // line 83
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", [0 => "cartData"], "method", false, false, false, 83), "products", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 84
                echo "                                            <li>
                                                <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                                <a href=\"#\"><img src=\"/assets/uploads/products/";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 86), "image", [], "any", false, false, false, 86), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
                echo "</a>
                                                <span class=\"cart_quantity\"> ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 87), "html", null, true);
                echo " x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 87), "price", [], "any", false, false, false, 87) / 100), "html", null, true);
                echo "</span>
                                            </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                    </ul>
                                    <div class=\"cart_footer\">
                                            <p class=\"cart_total\"><strong>Subtotal TTC:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "get", [0 => "cartData"], "method", false, false, false, 92), "data", [], "any", false, false, false, 92), "subTotalTTC", [], "any", false, false, false, 92), "html", null, true);
            echo "</p>
                                            <p class=\"cart_buttons\"><a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                                    </div>
                                ";
        } else {
            // line 96
            echo "                                        <li>Your Cart is empty !</li>
                                    </ul>
                                ";
        }
        // line 99
        echo "                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  215 => 99,  210 => 96,  202 => 93,  198 => 92,  194 => 90,  183 => 87,  175 => 86,  171 => 85,  168 => 84,  163 => 83,  161 => 82,  155 => 78,  151 => 76,  145 => 74,  143 => 73,  126 => 59,  120 => 56,  114 => 53,  101 => 43,  90 => 34,  85 => 32,  80 => 31,  75 => 29,  70 => 28,  68 => 27,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preloader\">
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

                        </div>
                        <div class=\"mr-3\">

                        </div>

                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-right\">
                           <ul class=\"header_list\">
                                {% if app.user %}
                                    <li><a href=\"{{path('account')}}\"><i class=\"ti-user\"></i><span>Account</span></a></li>
                                    <li><a href=\"{{path('app_logout')}}\"><i class=\"ti-lock\"></i><span>Logout</span></a></li>
                                {% else %}
                                    <li><a href=\"{{path('app_login')}}\"><i class=\"ti-user\"></i><span>Login</span></a></li>
                                    <li><a href=\"{{path('app_register')}}\"><i class=\"fas fa-sign-in-alt\"></i><span>Register</span></a></li>
                                {% endif %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"> 
                <a class=\"navbar-brand\" href=\"{{path('home')}}\">
                    <img width=\"240\" class=\"logo_light\" src=\"/assets/images/logo_web.png\" alt=\"logo\" />
                    <img width=\"240\" class=\"logo_dark\" src=\"/assets/images/logo_web.png\" alt=\"logo\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"{{path('home')}}\">Home</a>   
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"{{path('shop')}}\">Shop</a>
                            
                        </li>
                        <li><a class=\"nav-link nav_item\" href=\"{{path('contact_new')}}\">Contact Us</a></li> 
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
                            {% if app.session.get('cart') %}
                                {{app.session.get('cartData').data.quantity_cart}}
                            {% else %}
                                0
                            {% endif %}
                    </span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">

                                {% if app.session.get('cart') %}
                                    {% for element in app.session.get('cartData').products %}
                                            <li>
                                                <a href=\"{{path('cart_delete_all',{'id':element.product.id})}}\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                                <a href=\"#\"><img src=\"/assets/uploads/products/{{element.product.image}}\" alt=\"{{element.product.name}}\">{{element.product.name}}</a>
                                                <span class=\"cart_quantity\"> {{element.quantity}} x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>{{element.product.price/100}}</span>
                                            </li>
                                    {% endfor %}
                                    </ul>
                                    <div class=\"cart_footer\">
                                            <p class=\"cart_total\"><strong>Subtotal TTC:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>{{ app.session.get('cartData').data.subTotalTTC }}</p>
                                            <p class=\"cart_buttons\"><a href=\"{{path('cart')}}\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"{{ path('checkout') }}\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                                    </div>
                                {% else %}
                                        <li>Your Cart is empty !</li>
                                    </ul>
                                {% endif %}
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
", "partials/header.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/header.html.twig");
    }
}
