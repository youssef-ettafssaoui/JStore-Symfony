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

/* stripe_stripe_cancel_payment/index.html.twig */
class __TwigTemplate_015f58b67466c6ab62cb6503bf45631a080aa21422d233f7ed508ce8d01f11f6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "stripe_stripe_cancel_payment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Payment canceled !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Payment canceled !"]);
        echo "

<div class=\"section checkout\">
\t<div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-md-12\">
                <div class=\"text-center order_complete\">
                \t<i class=\"fas fa-ban\"></i>
                    <div class=\"heading_s1\">
                      <h3>Sorry ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 17), "firstname", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 17), "lastname", [], "any", false, false, false, 17), "html", null, true);
        echo ", Your payment has been canceled !</h3>
                      <div>
                        <div>Payment for order number <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 19), "html", null, true);
        echo "</strong>  has been canceled.</div>
                        <div>You have tried to pay for your order and we thank you.

                            Your payment has not been accepted. Your order has not been confirmed.
                            We invite you to connect to our site to renew your order.

                            See you soon on our online store.</div>
                                <div>

                                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" class=\"btn btn-fill-out\">Retry payment</a>

                                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-fill-out\">Go Shopping</a>
                              </div>
                      </div>

                      <div >
                    </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "stripe_stripe_cancel_payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  93 => 28,  81 => 19,  74 => 17,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "stripe_stripe_cancel_payment/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/stripe_stripe_cancel_payment/index.html.twig");
    }
}
