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

/* security/login.html.twig */
class __TwigTemplate_1844afaef3d42e1a79b6f7aa319738af2fa97ff39514aad325eeacccaa7ae128 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Login"]);
        echo "


    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"login_wrap\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>Login</h3>
                            </div>
                            <form method=\"post\">
                                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                                    <div class=\"mb-3\">
                                        You are logged in as ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                ";
        }
        // line 25
        echo "
                            <div class=\"message-flash\">
                                ";
        // line 27
        if (($context["error"] ?? null)) {
            // line 28
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 30
        echo "                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputEmail\">Email</label>
                                <input type=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputPassword\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                            <div class=\"login_footer form-group\">
                                    <div class=\"chek-form\">
                                        <div class=\"custome-checkbox\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox1\" value=\"\">
                                            <label class=\"form-check-label\" for=\"exampleCheckbox1\"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot password?</a>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"login\">Log in</button>
                                </div>
                            </form>
                            <div class=\"different_login\">
                                <span> or</span>
                            </div>
                            <ul class=\"btn-login list_none text-center\">
                                <li><a href=\"#\" class=\"btn btn-facebook\"><i class=\"ion-social-facebook\"></i>Facebook</a></li>
                                <li><a href=\"#\" class=\"btn btn-google\"><i class=\"ion-social-googleplus\"></i>Google</a></li>
                            </ul>
                            <div class=\"form-note text-center\">Don't Have an Account? <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  131 => 51,  119 => 42,  108 => 34,  102 => 30,  96 => 28,  94 => 27,  90 => 25,  82 => 22,  79 => 21,  77 => 20,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/security/login.html.twig");
    }
}
