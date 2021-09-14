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
class __TwigTemplate_0f985e89e21f24323d04e67c13aa640ee6f2fe410aa57867f5a945a2ee118630 extends Template
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
        echo "<div class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div id=\"carouselExampleControls\" class=\"carousel slide carousel-fade light_arrow\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
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
        return array (  103 => 21,  79 => 13,  75 => 12,  71 => 11,  59 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/home_slider.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/home_slider.html.twig");
    }
}
