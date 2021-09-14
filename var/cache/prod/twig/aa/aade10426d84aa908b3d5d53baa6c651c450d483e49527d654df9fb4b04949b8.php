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

/* base.html.twig */
class __TwigTemplate_64247767c487bfbf485485c93291be0b3130a224ac53706334966a9bf1787c06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'scriptStripe' => [$this, 'block_scriptStripe'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"AliExprass\" name=\"author\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.\">
        <meta name=\"keywords\" content=\"\">

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/favicon.png\">

        <link rel=\"stylesheet\" href=\"/assets/style.css\">
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('scriptStripe', $context, $blocks);
        // line 17
        echo "
    </head>
        <body>

        ";
        // line 21
        $this->loadTemplate("partials/header.html.twig", "base.html.twig", 21)->display($context);
        // line 22
        echo "
        <div class=\"main_content\">
        
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        
        </div>

    

        ";
        // line 31
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 31)->display($context);
        // line 32
        echo "
        <script src=\"/assets/js/jquery-1.12.4.min.js\"></script> 
        <script src=\"/assets/js/popper.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/assets/owlcarousel/js/owl.carousel.min.js\"></script>
        <script src=\"/assets/js/magnific-popup.min.js\"></script>
        <script src=\"/assets/js/waypoints.min.js\"></script> 
        <script src=\"/assets/js/parallax.js\"></script> 
        <script src=\"/assets/js/jquery.countdown.min.js\"></script> 
        <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
        <script src=\"/assets/js/isotope.min.js\"></script>
        <script src=\"/assets/js/jquery.dd.min.js\"></script>
        <script src=\"/assets/js/slick.min.js\"></script>
        <script src=\"/assets/js/jquery.elevatezoom.js\"></script>
        <script src=\"/assets/js/scripts.js\"></script>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "           
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "AgriExpress - Achats!";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 16
    public function block_scriptStripe($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  137 => 25,  130 => 16,  123 => 15,  116 => 5,  109 => 48,  107 => 47,  90 => 32,  88 => 31,  81 => 26,  79 => 25,  74 => 22,  72 => 21,  66 => 17,  63 => 16,  61 => 15,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/base.html.twig");
    }
}
