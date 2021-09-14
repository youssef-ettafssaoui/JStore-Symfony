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

/* partials/footer.html.twig */
class __TwigTemplate_48baff4acd152e243ad4b89f8b5ad662fa0ee883372c746a0b46c53b6018272e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<div class=\"section bg_default small_pt small_pb\">
    <div class=\"container\">\t
        <div class=\"row align-items-center\">\t
            <div class=\"col-md-6\">

            </div>

        </div>
    </div>
</div>
<footer class=\"footer_light\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\"><img width=\"250\" src=\"/assets/images/logo_web.png\" alt=\"logo\"/></a>
                        </div>
                        <p>Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.</p>
                    </div>
                    <div class=\"widget\">
                        <ul class=\"social_icons social_white\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Useful Links</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Shop</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Category</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Special Offer</a></li>
                            <li><a href=\"#\">Featured</a></li>
                            <li><a href=\"#\">Best Saller</a></li>
                            <li><a href=\"#\">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">My Account</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Discount</a></li>
                            <li><a href=\"#\">Returns</a></li>
                            <li><a href=\"#\">Orders History</a></li>
                            <li><a href=\"#\">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-4\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Contact Info</h6>
                        <ul class=\"contact_info contact_info_light\">
                            <li>
                                <i style=\"color: orange;\" class=\"ti-location-pin\"></i>
                                <p> 3 Rue Léon Gambetta 59260 Hellemmes</p>
                            </li>
                            <li>
                                <i style=\"color: orange;\" class=\"ti-email\"></i>
                                <p>AgriRxpressContact@gmail.com</p>
                            </li>
                            <li>
                                <i style=\"color: orange;\" class=\"ti-mobile\"></i>
                                <p>+212 650 009 203</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_footer border-top-tran\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-md-0 text-center text-md-left\">© 2021 All Rights Reserved - IRISI</p>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"footer_payment text-center text-lg-right\">
                        <li><a href=\"#\"><img src=\"/assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/discover.png\" alt=\"discover\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/master_card.png\" alt=\"master_card\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/amarican_express.png\" alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\"><i class=\"ion-ios-arrow-up\"></i></a> 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section bg_default small_pt small_pb\">
    <div class=\"container\">\t
        <div class=\"row align-items-center\">\t
            <div class=\"col-md-6\">

            </div>

        </div>
    </div>
</div>
<footer class=\"footer_light\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\"><img width=\"250\" src=\"/assets/images/logo_web.png\" alt=\"logo\"/></a>
                        </div>
                        <p>Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.</p>
                    </div>
                    <div class=\"widget\">
                        <ul class=\"social_icons social_white\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Useful Links</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Shop</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Category</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Special Offer</a></li>
                            <li><a href=\"#\">Featured</a></li>
                            <li><a href=\"#\">Best Saller</a></li>
                            <li><a href=\"#\">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">My Account</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Discount</a></li>
                            <li><a href=\"#\">Returns</a></li>
                            <li><a href=\"#\">Orders History</a></li>
                            <li><a href=\"#\">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-4\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Contact Info</h6>
                        <ul class=\"contact_info contact_info_light\">
                            <li>
                                <i style=\"color: orange;\" class=\"ti-location-pin\"></i>
                                <p> 3 Rue Léon Gambetta 59260 Hellemmes</p>
                            </li>
                            <li>
                                <i style=\"color: orange;\" class=\"ti-email\"></i>
                                <p>AgriRxpressContact@gmail.com</p>
                            </li>
                            <li>
                                <i style=\"color: orange;\" class=\"ti-mobile\"></i>
                                <p>+212 650 009 203</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_footer border-top-tran\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-md-0 text-center text-md-left\">© 2021 All Rights Reserved - IRISI</p>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"footer_payment text-center text-lg-right\">
                        <li><a href=\"#\"><img src=\"/assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/discover.png\" alt=\"discover\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/master_card.png\" alt=\"master_card\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li><a href=\"#\"><img src=\"/assets/images/amarican_express.png\" alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\"><i class=\"ion-ios-arrow-up\"></i></a> 
", "partials/footer.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/footer.html.twig");
    }
}
