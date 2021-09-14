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
class __TwigTemplate_140799a59a15cec2034e69a86c2229ab545e38a33c77de61884e4002801879ab extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/single_product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " AgriExpress Shopping !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" data-zoom-image=\"/assets/uploads/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></h4>
                        <div class=\"product_price\">
                            <span class=\"price\">\$";
        // line 28
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 28) / 100), "html", null, true);
        echo "</span>
                            <del>\$";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 29) * 1.35) / 100), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviewsProducts", [], "any", false, false, false, 38)), "html", null, true);
        echo ")</span>
                            </div>
                        <div class=\"pr_desc\">
                            <p>";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 41);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\"><i class=\"icon-basket-loaded\"></i> Add to cart</a>
                            <a class=\"add_compare\" href=\"#\"><i class=\"icon-shuffle\"></i></a>
                            <a class=\"add_wishlist\" href=\"#\"><i class=\"icon-heart\"></i></a>
                        </div>
                    </div>
                    <hr />
                    <ul class=\"product-meta\">
                        <li>Category: <a href=\"#\">
                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "Category", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 63
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo ",
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                        </a></li>
                        <li>Tags: ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tags", [], "any", false, false, false, 66), "html", null, true);
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
                        \t<a class=\"nav-link\" id=\"Additional-info-tab\" data-toggle=\"tab\" href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\" aria-selected=\"false\">Additional info</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Reviews-tab\" data-toggle=\"tab\" href=\"#Reviews\" role=\"tab\" aria-controls=\"Reviews\" aria-selected=\"false\">Reviews (2)</a>
                      \t</li>
                    </ul>
                \t<div class=\"tab-content shop_info_tab\">
                      \t<div class=\"tab-pane fade show active\" id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\">
                        \t<p>";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 103);
        echo "</p>
                      \t</div>

                      \t<div class=\"tab-pane fade\" id=\"Reviews\" role=\"tabpanel\" aria-labelledby=\"Reviews-tab\">
                        \t<div class=\"comments\">
                            \t<h5 class=\"product_tab_title\">2 Review For <span>Blue Dress For Woman</span></h5>
                                <ul class=\"list_none comment_list mt-4\">
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/50\" alt=\"user1\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:80%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Alea Brooks</span>
                                                <span class=\"comment-date\">March 5, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/300\" alt=\"user2\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:60%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Grace Wong</span>
                                                <span class=\"comment-date\">June 17, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        \t</div>
                            <div class=\"review_form field_form\">
                                <h5>Add a review</h5>
                                <form class=\"row mt-3\">
                                    <div class=\"form-group col-12\">
                                        <div class=\"star_rating\">
                                            <span data-value=\"1\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"2\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"3\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"4\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"5\"><i class=\"far fa-star\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-12\">
                                        <textarea required=\"required\" placeholder=\"Your review *\" class=\"form-control\" name=\"message\" rows=\"4\"></textarea>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Name *\" class=\"form-control\" name=\"name\" type=\"text\">
                                     </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Email *\" class=\"form-control\" name=\"email\" type=\"email\">
                                    </div>

                                    <div class=\"form-group col-12\">
                                        <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Submit Review</button>
                                    </div>
                                </form>
                            </div>
                      \t</div>
                \t</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"small_divider\"></div>
            \t<div class=\"divider\"></div>
                <div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"heading_s1\">
                \t<h3>Releted Products</h3>
                </div>
            \t<div class=\"releted_product_slider carousel_slider owl-carousel owl-theme\" data-margin=\"20\" data-responsive='{\"0\":{\"items\": \"1\"}, \"481\":{\"items\": \"2\"}, \"768\":{\"items\": \"3\"}, \"1199\":{\"items\": \"4\"}}'>

                            ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 196));
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
            // line 197
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 197));
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
                // line 198
                echo "                                    ";
                if ( !(($context["product"] ?? null) === $context["productReleted"])) {
                    // line 199
                    echo "                                        ";
                    echo twig_include($this->env, $context, "partials/product_item.html.twig", ["product" => $context["productReleted"]]);
                    echo "
                                    ";
                }
                // line 201
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
            // line 202
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
        // line 203
        echo "
                </div>
            </div>
        </div>
    </div>
</div>


";
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
        return array (  368 => 203,  354 => 202,  340 => 201,  334 => 199,  331 => 198,  313 => 197,  296 => 196,  200 => 103,  160 => 66,  157 => 65,  148 => 63,  144 => 62,  133 => 54,  117 => 41,  111 => 38,  99 => 29,  95 => 28,  90 => 26,  72 => 15,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/single_product.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/home/single_product.html.twig");
    }
}
