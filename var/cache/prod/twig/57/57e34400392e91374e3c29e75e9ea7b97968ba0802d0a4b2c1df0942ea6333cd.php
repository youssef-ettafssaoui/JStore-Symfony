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

/* partials/title_section.html.twig */
class __TwigTemplate_c2666e19d09ca061cb910e691fa01ea191a7618ac8b05aeae44c45d68eb48d05 extends Template
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
        echo "<div class=\"breadcrumb_section bg_gray page-title-mini\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <div class=\"page-title\">
                    <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
                </div>
            </div>
            <div class=\"col-md-6\">
                <ol class=\"breadcrumb justify-content-md-end\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</li>
                </ol>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/title_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/title_section.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/partials/title_section.html.twig");
    }
}
