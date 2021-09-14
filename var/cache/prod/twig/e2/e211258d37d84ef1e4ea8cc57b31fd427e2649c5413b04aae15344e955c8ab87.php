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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_01abcbbd86d4709e51983a57db226eeda83bcf0762a6fb8e78d7f4e9d546f33a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_6cb2a21a8409255483faac36541d4794583d916f78255256e2cfddb3a660c54e"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "textDirection", [], "any", false, false, false, 39))) {
            // line 40
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 48
        echo "</head>

";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 17
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)) : ([]))], false);
        echo "
        ";
        // line 23
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
    ";
    }

    // line 26
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 27)), "html", null, true);
        echo "\">
    ";
    }

    // line 30
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 34
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)) : ([]))], false);
        echo "
        ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
    ";
    }

    // line 43
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", false, false, false, 44)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", false, false, false, 44)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 45
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 52
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 200
        echo "
    ";
        // line 201
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 202
        echo "
    ";
        // line 203
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 208
        echo "    </body>
";
    }

    // line 51
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 61
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 65
        echo "
        <div class=\"wrapper\">
            ";
        // line 67
        $this->displayBlock('wrapper', $context, $blocks);
        // line 198
        echo "        </div>
    ";
    }

    // line 62
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 63));
        echo "
        ";
    }

    // line 67
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                <header class=\"main-header\">
                    ";
        // line 69
        $this->displayBlock('header', $context, $blocks);
        // line 135
        echo "                </header>

                <aside class=\"main-sidebar\">
                    ";
        // line 138
        $this->displayBlock('sidebar', $context, $blocks);
        // line 146
        echo "                </aside>

                <div class=\"content-wrapper\">
                    <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                    ";
        // line 151
        $this->displayBlock('content', $context, $blocks);
        // line 194
        echo "
                    <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                </div>
            ";
    }

    // line 69
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            ";
        // line 71
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 84
        echo "                        </nav>

                        ";
        // line 86
        ob_start(function () { return ''; });
        // line 87
        echo "                            <div class=\"popover-content-section user-details ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 87), "items", [], "any", false, false, false, 87)) > 0)) ? ("user-has-actions") : (""));
        echo "\">
                                <p class=\"small text-muted mb-0\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                                <p class=\"user-details-name\">
                                    ";
        // line 90
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 90))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90))), "html", null, true);
        echo "
                                </p>
                            </div>

                            ";
        // line 94
        $this->displayBlock('user_menu', $context, $blocks);
        // line 110
        echo "                        ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "
                        <div class=\"content-top navbar-custom-menu\">
                            ";
        // line 113
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 133
        echo "                        </div>
                    ";
    }

    // line 71
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                                    <i class=\"fa fa-fw fa-bars\"></i>
                                </button>

                                <div id=\"header-logo\">
                                    ";
        // line 77
        $this->displayBlock('header_logo', $context, $blocks);
        // line 82
        echo "                                </div>
                            ";
    }

    // line 77
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                        <a class=\"logo ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 78)) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 78)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 78));
        echo "\">
                                            ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 79);
        echo "
                                        </a>
                                    ";
    }

    // line 94
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 95), "items", [], "any", false, false, false, 95)) > 0)) {
            // line 96
            echo "                                    <div class=\"popover-content-section user-menu\">
                                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 97), "items", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 98
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                                                <hr class=\"m-0\" />
                                            ";
                } else {
                    // line 101
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" class=\"user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                    ";
                    // line 102
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 102))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 102), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 103
                    echo "                                                    <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 103), "html", null, true);
                    echo "</span>
                                                </a>
                                            ";
                }
                // line 106
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                    </div>
                                ";
        }
        // line 109
        echo "                            ";
    }

    // line 113
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                                ";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 115
            echo "                                    ";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 116
            echo "                                ";
        } else {
            // line 117
            echo "                                    ";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 118
            echo "                                ";
        }
        // line 119
        echo "
                                <div class=\"user user-menu-wrapper ";
        // line 120
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\" data-bs-toggle=\"popover\" data-bs-placement=\"bottom\" data-bs-container=\".user-menu-wrapper\" data-bs-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-bs-html=\"true\">
                                    ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 121), "isAvatarDisplayed", [], "any", false, false, false, 121)) {
            // line 122
            echo "                                        ";
            if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 122), "avatarUrl", [], "any", false, false, false, 122))) {
                // line 123
                echo "                                            <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 123))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                        ";
            } else {
                // line 125
                echo "                                            <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 125), "avatarUrl", [], "any", false, false, false, 125), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 127
            echo "                                    ";
        }
        // line 128
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 128), "isNameDisplayed", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                        <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 131
        echo "                                </div>
                            ";
    }

    // line 138
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "                        <section class=\"sidebar\">
                            ";
        // line 140
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 143
        echo "                        </section>

                    ";
    }

    // line 140
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 141));
        echo "
                            ";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                        <div class=\"content\">
                            ";
        // line 153
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 179
        echo "
                            <section id=\"main\" class=\"content-body\">
                                ";
        // line 181
        $this->displayBlock('main', $context, $blocks);
        // line 182
        echo "                            </section>

                            ";
        // line 184
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 192
        echo "                        </div>
                    ";
    }

    // line 153
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                                ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 154), "helpMessage", [], "any", true, true, false, 154) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 154), "helpMessage", [], "any", false, false, false, 154)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 154), "helpMessage", [], "any", false, false, false, 154)) : ("")));
        // line 155
        echo "                                <section class=\"content-header\">
                                    ";
        // line 156
        $this->displayBlock('content_header', $context, $blocks);
        // line 177
        echo "                                </section>
                            ";
    }

    // line 156
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 160
        $this->displayBlock('content_title', $context, $blocks);
        // line 161
        echo "
                                                    ";
        // line 162
        $this->displayBlock('content_help', $context, $blocks);
        // line 169
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 172
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 175
        echo "                                        </div>
                                    ";
    }

    // line 160
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 162
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 164
            echo "                                                            <span class=\"content-header-help\">
                                                                <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 165), "helpMessage", [], "any", false, false, false, 165), "html_attr");
            echo "\"></i>
                                                            </span>
                                                        ";
        }
        // line 168
        echo "                                                    ";
    }

    // line 172
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 181
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 184
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 186
        echo "                                ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 187
            echo "                                    <section class=\"content-footer\">
                                        ";
            // line 188
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                    </section>
                                ";
        }
        // line 191
        echo "                            ";
    }

    // line 201
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 203
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 204), "bodyContents", [], "any", true, true, false, 204) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 204), "bodyContents", [], "any", false, false, false, 204)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 204), "bodyContents", [], "any", false, false, false, 204)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 205
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  771 => 207,  762 => 205,  757 => 204,  753 => 203,  747 => 201,  743 => 191,  737 => 188,  734 => 187,  731 => 186,  728 => 185,  724 => 184,  718 => 181,  706 => 173,  702 => 172,  698 => 168,  692 => 165,  689 => 164,  686 => 163,  682 => 162,  676 => 160,  671 => 175,  669 => 172,  664 => 169,  662 => 162,  659 => 161,  657 => 160,  652 => 157,  648 => 156,  643 => 177,  641 => 156,  638 => 155,  635 => 154,  631 => 153,  626 => 192,  624 => 184,  620 => 182,  618 => 181,  614 => 179,  612 => 153,  609 => 152,  605 => 151,  598 => 141,  594 => 140,  588 => 143,  586 => 140,  583 => 139,  579 => 138,  574 => 131,  568 => 129,  565 => 128,  562 => 127,  556 => 125,  550 => 123,  547 => 122,  545 => 121,  539 => 120,  536 => 119,  533 => 118,  530 => 117,  527 => 116,  524 => 115,  521 => 114,  517 => 113,  513 => 109,  509 => 107,  503 => 106,  496 => 103,  490 => 102,  479 => 101,  475 => 99,  472 => 98,  468 => 97,  465 => 96,  462 => 95,  458 => 94,  451 => 79,  442 => 78,  438 => 77,  433 => 82,  431 => 77,  424 => 72,  420 => 71,  415 => 133,  413 => 113,  409 => 111,  406 => 110,  404 => 94,  397 => 90,  392 => 88,  387 => 87,  385 => 86,  381 => 84,  379 => 71,  376 => 70,  372 => 69,  365 => 194,  363 => 151,  356 => 146,  354 => 138,  349 => 135,  347 => 69,  344 => 68,  340 => 67,  333 => 63,  329 => 62,  324 => 198,  322 => 67,  318 => 65,  315 => 62,  311 => 61,  303 => 56,  299 => 55,  295 => 53,  291 => 52,  280 => 51,  275 => 208,  273 => 203,  270 => 202,  268 => 201,  265 => 200,  263 => 61,  260 => 60,  258 => 52,  251 => 51,  247 => 50,  243 => 47,  234 => 45,  229 => 44,  225 => 43,  219 => 36,  214 => 35,  210 => 34,  203 => 31,  199 => 30,  192 => 27,  188 => 26,  182 => 23,  177 => 22,  173 => 21,  166 => 18,  162 => 17,  155 => 15,  146 => 8,  142 => 7,  137 => 210,  135 => 50,  131 => 48,  129 => 43,  126 => 42,  120 => 40,  118 => 39,  115 => 38,  113 => 34,  110 => 33,  108 => 30,  105 => 29,  103 => 26,  100 => 25,  98 => 21,  95 => 20,  93 => 17,  88 => 15,  85 => 14,  83 => 7,  76 => 5,  72 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/layout.html.twig");
    }
}
