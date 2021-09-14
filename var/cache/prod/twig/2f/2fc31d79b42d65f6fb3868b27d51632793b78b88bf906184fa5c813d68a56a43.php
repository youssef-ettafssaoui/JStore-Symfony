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

/* @EasyAdmin/page/login_minimal.html.twig */
class __TwigTemplate_6787ae585d7371e8e1903f9e00a1ca3616ef36c801b33a377f4f0796bbf533aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_e635af828acc71644dd763a94d59558e512820998a55c319836cb9fc034d2482"] = (($context["translation_domain"]) ?? ("messages"));
        // line 4
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 13
        echo strip_tags(        $this->renderBlock("page_title", $context, $blocks));
        echo "</title>

        ";
        // line 15
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 22
        echo "    </head>

    <body id=\"";
        // line 24
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        ";
        // line 25
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 26
        echo "    </body>
</html>

";
    }

    // line 15
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 19
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 24
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login_minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  108 => 24,  101 => 20,  97 => 19,  90 => 16,  86 => 15,  79 => 26,  77 => 25,  71 => 24,  67 => 22,  65 => 19,  62 => 18,  60 => 15,  55 => 13,  44 => 4,  42 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login_minimal.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login_minimal.html.twig");
    }
}
