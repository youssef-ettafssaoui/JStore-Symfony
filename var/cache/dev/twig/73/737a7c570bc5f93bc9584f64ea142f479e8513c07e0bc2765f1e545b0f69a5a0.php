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
class __TwigTemplate_3fd2c1df4b957831f80eee555a330d255095f8dc71c3e802bbe82afa3b85c760 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

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
                            <select name=\"countries\" class=\"custome_select\">
                                <option value='en' data-image=\"assets/images/eng.png\" data-title=\"English\">Anglais</option>
                                <option value='fn' data-image=\"assets/images/fn.png\" data-title=\"France\">France</option>
                                <option value='us' data-image=\"assets/images/us.png\" data-title=\"United States\">États Unis</option>
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
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
                <a class=\"navbar-brand\" href=\"\">
                    <img class=\"logo_light\" src=\"assets/images/logo_light.png\" alt=\"logo\" />
                    <img class=\"logo_dark\" src=\"assets/images/logo_dark.png\" alt=\"logo\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"#\">Accueil</a>   
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages</a>
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Produits</a>
                           
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Blog</a>
                            
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Shop</a>
                            
                        </li>
                        <li><a class=\"nav-link nav_item\" href=\"#\">Contact Us</a></li> 
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
                    <li class=\"dropdown cart_dropdown\"><a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\"><i class=\"linearicons-cart\"></i><span class=\"cart_count\">2</span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">
                                <li>
                                    <a href=\"#\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                    <a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
                                    <span class=\"cart_quantity\"> 1 x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                    <a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
                                    <span class=\"cart_quantity\"> 1 x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>78.00</span>
                                </li>
                                
                            </ul>
                            <div class=\"cart_footer\">
                                <p class=\"cart_total\"><strong>Subtotal:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>159.00</p>
                                <p class=\"cart_buttons\"><a href=\"#\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"#\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  105 => 46,  100 => 44,  95 => 43,  90 => 41,  85 => 40,  83 => 39,  43 => 1,);
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
                            <select name=\"countries\" class=\"custome_select\">
                                <option value='en' data-image=\"assets/images/eng.png\" data-title=\"English\">Anglais</option>
                                <option value='fn' data-image=\"assets/images/fn.png\" data-title=\"France\">France</option>
                                <option value='us' data-image=\"assets/images/us.png\" data-title=\"United States\">États Unis</option>
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
                <a class=\"navbar-brand\" href=\"\">
                    <img class=\"logo_light\" src=\"assets/images/logo_light.png\" alt=\"logo\" />
                    <img class=\"logo_dark\" src=\"assets/images/logo_dark.png\" alt=\"logo\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"#\">Accueil</a>   
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages</a>
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Produits</a>
                           
                        </li>
                        <li class=\"dropdown\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Blog</a>
                            
                        </li>
                        <li class=\"\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Shop</a>
                            
                        </li>
                        <li><a class=\"nav-link nav_item\" href=\"#\">Contact Us</a></li> 
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
                    <li class=\"dropdown cart_dropdown\"><a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\"><i class=\"linearicons-cart\"></i><span class=\"cart_count\">2</span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">
                                <li>
                                    <a href=\"#\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                    <a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
                                    <span class=\"cart_quantity\"> 1 x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                    <a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
                                    <span class=\"cart_quantity\"> 1 x <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>78.00</span>
                                </li>
                                
                            </ul>
                            <div class=\"cart_footer\">
                                <p class=\"cart_total\"><strong>Subtotal:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>159.00</p>
                                <p class=\"cart_buttons\"><a href=\"#\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"#\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>", "partials/header.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/header.html.twig");
    }
}
