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

/* partials/home_slider.html.twig */
class __TwigTemplate_ec775c59980b20b5649cc791fcab65754040f5ac9aab534075d4e6566868ee0a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home_slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/home_slider.html.twig"));

        // line 1
        echo "<div class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div id=\"carouselExampleControls\" class=\"carousel slide carousel-fade light_arrow\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "                            <div class=\"carousel-item ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 5) === 1)) ? ("active") : (""));
            echo " background_bg\" data-img-src=\"/assets/uploads/slider/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                            <div class=\"banner_slide_content\">
                                <div class=\"container\"><!-- STRART CONTAINER -->
                                    <div class=\"row\">
                                        <div class=\"col-lg-7 col-9\">
                                            <div class=\"banner_content overflow-hidden\">
                                                <h4 style=\"color: #fff;\" class=\"mb-3 staggered-animation font-weight-light\" data-animation=\"slideInLeft\" data-animation-delay=\"0.5s\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "</h4>
                                                <h2 style=\"color: #fff;\" class=\"staggered-animation\" data-animation=\"slideInLeft\" data-animation-delay=\"1s\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
                                                <a class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "buttonURL", [], "any", false, false, false, 13), "html", null, true);
            echo "\" data-animation=\"slideInLeft\" data-animation-delay=\"1.5s\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "buttonMessage", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END CONTAINER-->
                            </div>
                        </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"><i class=\"ion-chevron-left\"></i></a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"><i class=\"ion-chevron-right\"></i></a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/home_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  85 => 13,  81 => 12,  77 => 11,  65 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div id=\"carouselExampleControls\" class=\"carousel slide carousel-fade light_arrow\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
                {% for slide in slider %}
                            <div class=\"carousel-item {{ loop.index is same as(1) ? 'active' }} background_bg\" data-img-src=\"/assets/uploads/slider/{{ slide.image }}\">
                            <div class=\"banner_slide_content\">
                                <div class=\"container\"><!-- STRART CONTAINER -->
                                    <div class=\"row\">
                                        <div class=\"col-lg-7 col-9\">
                                            <div class=\"banner_content overflow-hidden\">
                                                <h4 style=\"color: #fff;\" class=\"mb-3 staggered-animation font-weight-light\" data-animation=\"slideInLeft\" data-animation-delay=\"0.5s\">{{ slide.description }}</h4>
                                                <h2 style=\"color: #fff;\" class=\"staggered-animation\" data-animation=\"slideInLeft\" data-animation-delay=\"1s\">{{ slide.title }}</h2>
                                                <a class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase\" href=\"{{ slide.buttonURL }}\" data-animation=\"slideInLeft\" data-animation-delay=\"1.5s\">{{ slide.buttonMessage }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END CONTAINER-->
                            </div>
                        </div>
                {% endfor %}

        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"><i class=\"ion-chevron-left\"></i></a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"><i class=\"ion-chevron-right\"></i></a>
    </div>
</div>
", "partials/home_slider.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/home_slider.html.twig");
    }
}
