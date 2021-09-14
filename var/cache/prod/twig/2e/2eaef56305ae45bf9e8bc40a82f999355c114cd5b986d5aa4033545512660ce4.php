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

/* @EasyAdmin/inspector/data_collector.html.twig */
class __TwigTemplate_12420736500c3d30de6eec539d0811509f1d717c48f361df0c6fa576f634f7ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/inspector/data_collector.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@EasyAdmin/inspector/icon.svg.twig", ["fill_color" => "#AAA", "height" => "20"]);
            echo "
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 8
            echo "
        ";
            // line 9
            ob_start(function () { return ''; });
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>EasyAdmin version</b>
                <span class=\"sf-toolbar-status\">";
            // line 12
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
        ";
            // line 16
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
    }

    // line 20
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 21)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 22
        echo twig_include($this->env, $context, "@EasyAdmin/inspector/icon.svg.twig");
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <h2>EasyAdmin <small>(";
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isEasyAdminRequest", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    ";
        } else {
            // line 35
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 35)], false);
            echo "
    ";
        }
        // line 37
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/inspector/data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  124 => 35,  118 => 31,  116 => 30,  110 => 28,  106 => 27,  98 => 22,  93 => 21,  89 => 20,  82 => 16,  79 => 15,  73 => 12,  69 => 10,  67 => 9,  64 => 8,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/inspector/data_collector.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/inspector/data_collector.html.twig");
    }
}
