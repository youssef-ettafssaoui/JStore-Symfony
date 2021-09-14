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

/* about_us/index.html.twig */
class __TwigTemplate_1581451bb0b51f40771687f3e86af8c826afe3f29db7272313b3bd3d16e094b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about_us/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about_us/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about_us/index.html.twig", 1);
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "About Us Page"]);
        echo "

 <div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Delivery</span>
                        <p>All orders placed will be shipped the same day. Free fees from 19\$</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-telephone\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Opening time</span>
                        <p>Monday - Friday: 9 a.m.-12.30 p.m. / 2 p.m.-7 p.m.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Payment</span>
                        <p>Payment on our shop secured by Stripe</p>
                    </div>
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
        return "about_us/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} AgriExpress Shopping !{% endblock %}

{% block body %}

 {{ include(\"partials/title_section.html.twig\", {'name':'About Us Page'}) }}

 <div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Delivery</span>
                        <p>All orders placed will be shipped the same day. Free fees from 19\$</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-telephone\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Opening time</span>
                        <p>Monday - Friday: 9 a.m.-12.30 p.m. / 2 p.m.-7 p.m.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Payment</span>
                        <p>Payment on our shop secured by Stripe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "about_us/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/about_us/index.html.twig");
    }
}
