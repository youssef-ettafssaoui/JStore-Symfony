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

/* contact/_form.html.twig */
class __TwigTemplate_f59a2996844469527d883f248ec0b6840558b537b589b5ac4a730771ef3ff7fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        echo "
<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Address</span>
                        <p>3 Rue Léon Gambetta, 59260 Hellemmes</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Email Address</span>
                        <a href=\"mailto:info@sitename.com\">contact@agriexpress.ma </a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Phone</span>
                        <p>(+212) 6 58 14 27 66</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", [0 => "contact_success"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "                <div class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", [0 => "contact_error"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "                <div class=\"col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        \t<div class=\"col-lg-12\">
            \t<div class=\"heading_s1\">
                \t<h2>Contact Us</h2>
                </div>
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), 'row');
        echo "
                             </div>
                            <div class=\"form-group col-md-6\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "phone", [], "any", false, false, false, 76), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "subject", [], "any", false, false, false, 79), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "content", [], "any", false, false, false, 82), 'row', ["label" => "Your Message : "]);
        echo "
                            </div>



                            <div class=\"col-md-12\">
                                <button class=\"btn btn-fill-out\">";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Send Your Message")) : ("Send Your Message")), "html", null, true);
        echo "</button>
                            </div>

                        </div>
                    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 92,  174 => 88,  165 => 82,  159 => 79,  153 => 76,  147 => 73,  141 => 70,  135 => 67,  127 => 61,  114 => 55,  110 => 54,  107 => 53,  94 => 47,  90 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Address</span>
                        <p>3 Rue Léon Gambetta, 59260 Hellemmes</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Email Address</span>
                        <a href=\"mailto:info@sitename.com\">contact@agriexpress.ma </a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Phone</span>
                        <p>(+212) 6 58 14 27 66</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
            {% for message in app.flashes('contact_success') %}
                <div class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }} 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {% for message in app.flashes('contact_error') %}
                <div class=\"col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\"> {{ message }} 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}
        \t<div class=\"col-lg-12\">
            \t<div class=\"heading_s1\">
                \t<h2>Contact Us</h2>
                </div>
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                    {{ form_row(form.name) }}
                             </div>
                            <div class=\"form-group col-md-6\">
                                    {{ form_row(form.email) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                    {{ form_row(form.phone) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                    {{ form_row(form.subject) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                    {{ form_row(form.content, {\"label\": \"Your Message : \"}) }}
                            </div>



                            <div class=\"col-md-12\">
                                <button class=\"btn btn-fill-out\">{{ button_label|default('Send Your Message') }}</button>
                            </div>

                        </div>
                    {{ form_end(form) }}
                </div>
            </div>

        </div>
    </div>
</div>

", "contact/_form.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/contact/_form.html.twig");
    }
}
