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

/* cgu/index.html.twig */
class __TwigTemplate_f92d844198a7bf1a363c3be06436e814ec61607c1592959af75d4d717502385c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cgu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " CGU AgriExpress ! ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Conditions Générales Utilisation"]);
        echo "

<div class=\"container\">
    <h1 class=\"text-center\">General Conditions of Use of AgriExpress</h1>
    <p class=\"text-justify\">
        <h2>Item 1 - Object</h2>
        <h2>Item 2 - Products</h2>
        <h2>Item 3 - Price</h2>
        <h2>Item 4 - Orders</h2>
        <h2>Item 5 - Payment method</h2>
        <h2>Item 6 - Delivery</h2>
        <h2>Item 7 - Guarantee</h2>
        <h2>Item 8 - Applicable law in the event of disputes</h2>
        <h2>Item 9 - Intellectual property</h2>
        <h2>Item 10 - Personal data</h2>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "cgu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cgu/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/cgu/index.html.twig");
    }
}
