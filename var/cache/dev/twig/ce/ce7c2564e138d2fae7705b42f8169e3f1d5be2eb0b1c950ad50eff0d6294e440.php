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

/* partials/product.html.twig */
class __TwigTemplate_2373c95f3cec844d01e7dd7122df9772fcfdb6d570566fd631257898e16620ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/product.html.twig"));

        // line 1
        echo "                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"product\">
                                    <div class=\"product_img\">
                                        <a href=\"\">
                                            <img height=\"300\" src=\"/assets/uploads/products/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5), "html", null, true);
        echo "\" alt=\"product_img1\">
                                        </a>
                                        <div class=\"product_action_box\">
                                            <ul class=\"list_none pr_action_btn\">
                                                <li class=\"add-to-cart\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"><i class=\"icon-basket-loaded\"></i> Add To Cart</a></li>
                                                <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"\"><i class=\"icon-magnifier-add\"></i></a></li>
                        
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"product_info\">
                                        <h6 class=\"product_title\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></h6>
                                        <div class=\"product_price\">
                                            <span class=\"price\">\$";
        // line 18
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18) / 100), "html", null, true);
        echo "</span>
                                            <del>\$";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19) * 1.35) / 100), "html", null, true);
        echo "</del>
                                            <div class=\"on_sale\">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class=\"rating_wrap\">
                                            <div class=\"rating\">
                                                <div class=\"product_rate\" style=\"width:80%\"></div>
                                            </div>
                                            <span class=\"rating_num\">(";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "reviewsProducts", [], "any", false, false, false, 28)), "html", null, true);
        echo ")</span>
                                        </div>
                                        <div class=\"pr_desc\">
                                            <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  92 => 28,  80 => 19,  76 => 18,  69 => 16,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"product\">
                                    <div class=\"product_img\">
                                        <a href=\"\">
                                            <img height=\"300\" src=\"/assets/uploads/products/{{product.image}}\" alt=\"product_img1\">
                                        </a>
                                        <div class=\"product_action_box\">
                                            <ul class=\"list_none pr_action_btn\">
                                                <li class=\"add-to-cart\"><a href=\"{{path('cart_add',{'id':product.id})}}\"><i class=\"icon-basket-loaded\"></i> Add To Cart</a></li>
                                                <li><a href=\"{{path('product_details', {'slug': product.slug})}}\" class=\"\"><i class=\"icon-magnifier-add\"></i></a></li>
                        
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"product_info\">
                                        <h6 class=\"product_title\"><a href=\"{{path('product_details', {'slug': product.slug})}}\">{{product.name}}</a></h6>
                                        <div class=\"product_price\">
                                            <span class=\"price\">\${{product.price/100}}</span>
                                            <del>\${{product.price*1.35/100}}</del>
                                            <div class=\"on_sale\">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class=\"rating_wrap\">
                                            <div class=\"rating\">
                                                <div class=\"product_rate\" style=\"width:80%\"></div>
                                            </div>
                                            <span class=\"rating_num\">({{product.reviewsProducts | length }})</span>
                                        </div>
                                        <div class=\"pr_desc\">
                                            <p>{{product.description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>", "partials/product.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/product.html.twig");
    }
}
