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
class __TwigTemplate_f78c9e7a8db0911a484a79ef54ede23ceffa1ab6bd033642fd11a6d8623b3b68 extends Template
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
        echo "                            <div class=\"col-lg-3 col-md-4 col-6\">
                                <div class=\"product\">
                                    <div class=\"product_img\">
                                        <a href=\"\">
                                            <img height=\"300\" src=\"/assets/uploads/products/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 5), "html", null, true);
        echo "\" alt=\"product_img1\">
                                        </a>
                                        <div class=\"product_action_box\">
                                            <ul class=\"list_none pr_action_btn\">
                                                <li class=\"add-to-cart\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"><i class=\"icon-basket-loaded\"></i> Add To Cart</a></li>
                                                <li><a href=\"\" class=\"\"><i class=\"icon-shuffle\"></i></a></li>
                                                <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_details", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"\"><i class=\"icon-magnifier-add\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"product_info\">
                                        <h6 class=\"product_title\"><a href=\"\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></h6>
                                        <div class=\"product_price\">
                                            <span class=\"price\">\$";
        // line 19
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 19) / 100), "html", null, true);
        echo "</span>
                                            <del>\$";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 20) * 1.35) / 100), "html", null, true);
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
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviewsProducts", [], "any", false, false, false, 29)), "html", null, true);
        echo ")</span>
                                        </div>
                                        <div class=\"pr_desc\">
                                            <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>";
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
        return array (  91 => 32,  85 => 29,  73 => 20,  69 => 19,  64 => 17,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/product.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/product.html.twig");
    }
}
