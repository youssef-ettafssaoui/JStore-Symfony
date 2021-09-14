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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_d7f12407ec5d9848f1cd12d65f111e482b4d5439b82ead88f5be89942c82215f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_75324cd5e9b560ab636d1e7de5e19b80a4fe89787e6354159b4f2b5c245c0738"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content page-content-with-padding";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["has_page_title"] = (        $this->hasBlock("page_title", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks))));
        // line 9
        echo "    ";
        $context["has_page_actions"] = (        $this->hasBlock("page_actions", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_actions", $context, $blocks))));
        // line 10
        echo "    ";
        $context["has_page_footer"] = (        $this->hasBlock("page_footer", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_footer", $context, $blocks))));
        // line 11
        echo "
    <div class=\"content\">
        ";
        // line 13
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 34
        echo "
        <section id=\"main\">
            ";
        // line 36
        $this->displayBlock('main', $context, $blocks);
        // line 48
        echo "            
        </section>
    </div>
";
    }

    // line 13
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if ((($context["has_page_title"] ?? null) || ($context["has_page_actions"] ?? null))) {
            // line 15
            echo "                <section class=\"content-header\">
                    ";
            // line 16
            $this->displayBlock('content_header', $context, $blocks);
            // line 31
            echo "                </section>
            ";
        }
        // line 33
        echo "        ";
    }

    // line 16
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                            <div class=\"content-header-title\">
                                ";
        // line 19
        if (($context["has_page_title"] ?? null)) {
            // line 20
            echo "                                    <h1 class=\"title\">
                                        ";
            // line 21
            $this->displayBlock('page_title', $context, $blocks);
            // line 22
            echo "                                    </h1>
                                ";
        }
        // line 24
        echo "                            </div>

                            ";
        // line 26
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 29
        echo "                        </div>
                    ";
    }

    // line 21
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                <div class=\"content-panel\">
                    <div class=\"content-panel-body without-header ";
        // line 38
        echo (( !($context["has_page_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
                        ";
        // line 39
        $this->displayBlock('page_content', $context, $blocks);
        // line 40
        echo "                    </div>

                    ";
        // line 42
        if (($context["has_page_footer"] ?? null)) {
            // line 43
            echo "                        <section class=\"content-panel-footer without-padding\">
                            ";
            // line 44
            $this->displayBlock("page_footer", $context, $blocks);
            echo "
                        </section>
                    ";
        }
        // line 47
        echo "                </div>
            ";
    }

    // line 39
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 39,  195 => 47,  189 => 44,  186 => 43,  184 => 42,  180 => 40,  178 => 39,  174 => 38,  171 => 37,  167 => 36,  155 => 27,  151 => 26,  145 => 21,  140 => 29,  138 => 26,  134 => 24,  130 => 22,  128 => 21,  125 => 20,  123 => 19,  119 => 17,  115 => 16,  111 => 33,  107 => 31,  105 => 16,  102 => 15,  99 => 14,  95 => 13,  88 => 48,  86 => 36,  82 => 34,  80 => 13,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  63 => 7,  56 => 5,  52 => 2,  50 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/content.html.twig");
    }
}
