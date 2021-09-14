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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_9c4412bac3e71a7d338fd0b2e88906697f7b2713490a0e713c224c366a008332 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["__internal_a09ace5aba35654c88443dcbabd3feb883b8c3f49c5865f2d9fca1a647b4087f"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-login";
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
    }

    // line 11
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 13
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 6
($context["__internal_a09ace5aba35654c88443dcbabd3feb883b8c3f49c5865f2d9fca1a647b4087f"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 14
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 6
($context["__internal_a09ace5aba35654c88443dcbabd3feb883b8c3f49c5865f2d9fca1a647b4087f"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 15
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 6
($context["__internal_a09ace5aba35654c88443dcbabd3feb883b8c3f49c5865f2d9fca1a647b4087f"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 16
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                ";
        // line 20
        $this->displayBlock('header_logo', $context, $blocks);
        // line 33
        echo "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 38
        if (((array_key_exists("error", $context)) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 39
            echo "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 41), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 44
        echo "
            <form method=\"post\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("action", $context)) ? (_twig_default_filter(($context["action"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 46
        if (((array_key_exists("csrf_token_intention", $context)) ? (_twig_default_filter(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 47
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            echo "\">
                ";
        }
        // line 49
        echo "
                <input type=\"hidden\" name=\"";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter(($context["target_path"] ?? null), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 50))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 50))) : ("/")))), "html", null, true);
        echo "\" />

                <div class=\"mb-3\">
                    <label for=\"username\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["_username_label"] ?? null), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("username_parameter", $context)) ? (_twig_default_filter(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        echo "\" required autofocus autocomplete=\"username\">
                </div>

                <div class=\"mb-4\">
                    <label for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["_password_label"] ?? null), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("password_parameter", $context)) ? (_twig_default_filter(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" required autocomplete=\"current-password\">
                </div>

                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
        echo "</button>
            </form>

            <script type=\"text/javascript\">
                const loginForm = document.querySelector('form');
                loginForm.addEventListener('submit', () => {
                    loginForm.querySelector('button[type=\"submit\"]').setAttribute('disabled', 'disabled');
                }, false);
            </script>
        </section>
    </div>
";
    }

    // line 20
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                    ";
        if (($context["page_title"] ?? null)) {
            // line 22
            echo "                        ";
            if (array_key_exists("ea", $context)) {
                // line 23
                echo "                            <a class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags(($context["page_title"] ?? null)), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 23));
                echo "\">
                                ";
                // line 24
                echo ($context["page_title"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 27
                echo "                            <div class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\">
                                ";
                // line 28
                echo ($context["page_title"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 31
            echo "                    ";
        }
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 32,  212 => 31,  206 => 28,  201 => 27,  195 => 24,  186 => 23,  183 => 22,  180 => 21,  176 => 20,  160 => 62,  154 => 59,  150 => 58,  141 => 54,  137 => 53,  129 => 50,  126 => 49,  120 => 47,  118 => 46,  114 => 45,  111 => 44,  105 => 41,  101 => 39,  99 => 38,  92 => 33,  90 => 20,  84 => 16,  82 => 6,  80 => 15,  78 => 6,  76 => 14,  74 => 6,  72 => 13,  69 => 12,  65 => 11,  58 => 9,  51 => 8,  47 => 5,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login.html.twig");
    }
}
