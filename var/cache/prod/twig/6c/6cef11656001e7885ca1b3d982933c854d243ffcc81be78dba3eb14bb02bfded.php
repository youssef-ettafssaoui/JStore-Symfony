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

/* stripe_stripe_success_payment/index.html.twig */
class __TwigTemplate_c0f861450801e7d2dca8f5edafc06ee8269185d3c2bb40e97466aa08fa2e0786 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "stripe_stripe_success_payment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Order Completed !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Order Completed !"]);
        echo "

<div class=\"section checkout\">
\t<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"text-center order_complete\">
                \t<i class=\"fas fa-check-circle\"></i>
                    <div class=\"heading_s1\">
                      <h3>Thank you ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 16), "lastname", [], "any", false, false, false, 16), "html", null, true);
        echo " Payment made successfully !</h3><br>
                      <div>
                        <div>Payment for order number <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong>  has been accepted.</div>
                        <div>Your payment is currently <strong>“pending verification”</strong>.<br>
                            Payments are usually verified within 1 hour.<br>
                            After verification, the seller begins to process your order.<br>
                            During this lapse of time, you will not be able to change your order.</div>
                        <div>
                          <div>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. <br>
                          You will receive an email confirmation when your order is completed.</div><br>
                          <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-fill-out\">Continue Shopping</a>
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
        return "stripe_stripe_success_payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  80 => 18,  73 => 16,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "stripe_stripe_success_payment/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/stripe_stripe_success_payment/index.html.twig");
    }
}
