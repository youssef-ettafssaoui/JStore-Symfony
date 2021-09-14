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

/* home/single_product.html.twig */
class __TwigTemplate_4ae50f464d1d6cdad3932d1d6f3336ef7dbb5675f1f53e2333819e4a0c377f49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/single_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/single_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/single_product.html.twig", 1);
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

        echo " AgriExpress Shopping !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Product Details"]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
              <div class=\"product-image\">
                    <div class=\"product_img_box\">
                        <img width=\"550\" id=\"product_img\" src=\"/assets/uploads/products/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" data-zoom-image=\"/assets/uploads/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "\" />
                        <a href=\"#\" class=\"product_img_zoom\" title=\"Zoom\">
                            <span class=\"linearicons-zoom-in\"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"pr_detail\">
                    <div class=\"product_description\">
                        <h4 class=\"product_title\"><a href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></h4>
                        <div class=\"product_price\">
                            <span class=\"price\">\$";
        // line 28
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28) / 100), "html", null, true);
        echo "</span>
                            <del>\$";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "price", [], "any", false, false, false, 29) * 1.35) / 100), "html", null, true);
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
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "reviewsProducts", [], "any", false, false, false, 38)), "html", null, true);
        echo ")</span>
                            </div>
                        <div class=\"pr_desc\">
                            <p>";
        // line 41
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41);
        echo "</p>
                        </div>
                        <div class=\"product_sort_info\">
                            <ul>
                                <li><i class=\"linearicons-shield-check\"></i> 1 Year AL Jazeera Brand Warranty</li>
                                <li><i class=\"linearicons-sync\"></i> 30 Day Return Policy</li>
                                <li><i class=\"linearicons-bag-dollar\"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class=\"cart_extra\">
                        <div class=\"cart_btn\">
                            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\"><i class=\"icon-basket-loaded\"></i> Add to cart</a>
                        </div>
                    </div>
                    <hr />
                    <ul class=\"product-meta\">
                        <li>Category: <a href=\"#\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "Category", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 61
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </a></li>
                        <li>Tags: ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "tags", [], "any", false, false, false, 64), "html", null, true);
        echo " </li>
                    </ul>

                    <div class=\"product_share\">
                        <span>Share:</span>
                        <ul class=\"social_icons\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"large_divider clearfix\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style3\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"Description-tab\" data-toggle=\"tab\" href=\"#Description\" role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\">Description</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Additional-info-tab\" data-toggle=\"tab\" href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\" aria-selected=\"true\">Additional info</a>
                      \t</li>

                    </ul>
                \t<div class=\"tab-content shop_info_tab\">
                      \t<div class=\"tab-pane fade show active\" id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\">
                        \t<p>";
        // line 99
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99);
        echo "</p>
                      \t</div>
                \t</div>
                </div>
            </div>
        </div>

        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"heading_s1\">
                \t<h3>Releted Products</h3>
                </div>
            \t<div class=\"releted_product_slider carousel_slider owl-carousel owl-theme\" data-margin=\"20\" data-responsive='{\"0\":{\"items\": \"1\"}, \"481\":{\"items\": \"2\"}, \"768\":{\"items\": \"3\"}, \"1199\":{\"items\": \"4\"}}'>

                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()), "category", [], "any", false, false, false, 113));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 114
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 114));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["productReleted"]) {
                // line 115
                echo "                                    ";
                if ( !((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()) === $context["productReleted"])) {
                    // line 116
                    echo "                                        ";
                    echo twig_include($this->env, $context, "partials/product_item.html.twig", ["product" => $context["productReleted"]]);
                    echo "
                                    ";
                }
                // line 118
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productReleted'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 120,  301 => 119,  287 => 118,  281 => 116,  278 => 115,  260 => 114,  243 => 113,  226 => 99,  188 => 64,  185 => 63,  176 => 61,  172 => 60,  163 => 54,  147 => 41,  141 => 38,  129 => 29,  125 => 28,  120 => 26,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} AgriExpress Shopping !{% endblock %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Product Details'}) }}

<div class=\"section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
              <div class=\"product-image\">
                    <div class=\"product_img_box\">
                        <img width=\"550\" id=\"product_img\" src=\"/assets/uploads/products/{{product.image}}\" data-zoom-image=\"/assets/uploads/products/{{product.image}}\" alt=\"{{product.name}}\" />
                        <a href=\"#\" class=\"product_img_zoom\" title=\"Zoom\">
                            <span class=\"linearicons-zoom-in\"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"pr_detail\">
                    <div class=\"product_description\">
                        <h4 class=\"product_title\"><a href=\"#\">{{product.name}}</a></h4>
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
                            <p>{{product.description | raw}}</p>
                        </div>
                        <div class=\"product_sort_info\">
                            <ul>
                                <li><i class=\"linearicons-shield-check\"></i> 1 Year AL Jazeera Brand Warranty</li>
                                <li><i class=\"linearicons-sync\"></i> 30 Day Return Policy</li>
                                <li><i class=\"linearicons-bag-dollar\"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class=\"cart_extra\">
                        <div class=\"cart_btn\">
                            <a href=\"{{path('cart_add',{'id':product.id})}}\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\"><i class=\"icon-basket-loaded\"></i> Add to cart</a>
                        </div>
                    </div>
                    <hr />
                    <ul class=\"product-meta\">
                        <li>Category: <a href=\"#\">
                                {% for category in product.Category %}
                                    {{category.name}}
                                {% endfor %}
                        </a></li>
                        <li>Tags: {{product.tags}} </li>
                    </ul>

                    <div class=\"product_share\">
                        <span>Share:</span>
                        <ul class=\"social_icons\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"large_divider clearfix\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style3\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"Description-tab\" data-toggle=\"tab\" href=\"#Description\" role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\">Description</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Additional-info-tab\" data-toggle=\"tab\" href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\" aria-selected=\"true\">Additional info</a>
                      \t</li>

                    </ul>
                \t<div class=\"tab-content shop_info_tab\">
                      \t<div class=\"tab-pane fade show active\" id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\">
                        \t<p>{{product.description | raw}}</p>
                      \t</div>
                \t</div>
                </div>
            </div>
        </div>

        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"heading_s1\">
                \t<h3>Releted Products</h3>
                </div>
            \t<div class=\"releted_product_slider carousel_slider owl-carousel owl-theme\" data-margin=\"20\" data-responsive='{\"0\":{\"items\": \"1\"}, \"481\":{\"items\": \"2\"}, \"768\":{\"items\": \"3\"}, \"1199\":{\"items\": \"4\"}}'>

                            {% for category in product.category %}
                                {% for productReleted in category.products %}
                                    {% if product is not same as (productReleted)  %}
                                        {{ include (\"partials/product_item.html.twig\", {'product': productReleted}) }}
                                    {% endif %}
                                {% endfor %}
                            {% endfor %}

                </div>
            </div>
        </div>
    </div>
</div>


{% endblock body %}", "home/single_product.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/home/single_product.html.twig");
    }
}
