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

/* account/index.html.twig */
class __TwigTemplate_5d9b8fea5635916389c677a332504181b40ad33457123300b6c7a36d1a4f25d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Account AgriExpress !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Your Accuount"]);
        echo "


<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">

                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [0 => "address_message"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
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
        // line 43
        echo "

                <div class=\"tab-content dashboard_content\">
                      <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>HELLO ";
        // line 49
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "firstname", [], "any", false, false, false, 49)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "lastname", [], "any", false, false, false, 49)), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"card-body\">
                                <p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                                ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" target=\"_blank\" class=\"btn btn-fill-out\">Access To Backoffice</a>
                                ";
        }
        // line 56
        echo "                            </div>

                        </div>
                      </div>
                      <div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            ";
        // line 65
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 65, $this->source); })())) {
            // line 66
            echo "                                    <div class=\"card-body\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 80
                echo "                                                <tr>
                                                    <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 82), "m-d-Y"), "html", null, true);
                echo "</td>
                                                    <td>Processing</td>
                                                    <td>\$";
                // line 84
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "subTotalTTC", [], "any", false, false, false, 84) / 100), "html", null, true);
                echo " for <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 84), "html", null, true);
                echo " Items</strong></td>
                                                    <td><a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_details", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                                </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                            ";
        } else {
            // line 94
            echo "                                <div style=\"color: red;\">Sorry ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "fullName", [], "any", false, false, false, 94), "html", null, true);
            echo ". You have not yet placed an order !!</div>
                            ";
        }
        // line 96
        echo "
                        </div>
                      </div>
                    <div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        echo "\" class=\"btn btn-fill-out mb-3\">Add new address</a>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "addresses", [], "any", false, false, false, 106)) {
            // line 107
            echo "                                ";
            $context["index"] = 0;
            // line 108
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "addresses", [], "any", false, false, false, 108));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 109
                echo "                                    ";
                $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 109, $this->source); })()) + 1);
                // line 110
                echo "                                    <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h3> Your Address # ";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 113, $this->source); })()), "html", null, true);
                echo " </h3>
                                            </div>
                                            <div class=\"card-body\">
                                                <address>Full Name : ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "fullName", [], "any", false, false, false, 116), "html", null, true);
                echo "<br>
                                                    Address : ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 117), "html", null, true);
                echo "      <br>
                                                    Complement : ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "complement", [], "any", false, false, false, 118), "html", null, true);
                echo "        <br>
                                                    City : ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 119), "html", null, true);
                echo "      <br>
                                                    Code Postal : ";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 120), "html", null, true);
                echo "      <br>
                                                    Country : ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 121), "html", null, true);
                echo "

                                                </address>
                                                <div class=\"btn-group\">
                                                    <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\" class=\"btn btn-fill-out\">Edit</a>
                                                    ";
                // line 126
                echo twig_include($this->env, $context, "address/_delete_form.html.twig");
                echo "

                                                </div>

                                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
                            ";
        } else {
            // line 137
            echo "
                                <p>Sorry you haven't added an address to your account yet !</p>
                                    
                            ";
        }
        // line 141
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6\">
                                            <label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "firstname", [], "any", false, false, false, 154), "html", null, true);
        echo "\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6\">
                                            <label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "lastname", [], "any", false, false, false, 158), "html", null, true);
        echo "\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162), "html", null, true);
        echo "\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "email", [], "any", false, false, false, 166), "html", null, true);
        echo "\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\"  class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 166,  386 => 162,  379 => 158,  372 => 154,  357 => 141,  351 => 137,  347 => 135,  324 => 126,  320 => 125,  313 => 121,  309 => 120,  305 => 119,  301 => 118,  297 => 117,  293 => 116,  287 => 113,  282 => 110,  279 => 109,  261 => 108,  258 => 107,  256 => 106,  249 => 102,  241 => 96,  235 => 94,  227 => 88,  218 => 85,  212 => 84,  207 => 82,  203 => 81,  200 => 80,  196 => 79,  181 => 66,  179 => 65,  168 => 56,  162 => 54,  160 => 53,  151 => 49,  143 => 43,  130 => 37,  126 => 36,  116 => 29,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Account AgriExpress !{% endblock %}

{% block body %}

{{ include(\"partials/title_section.html.twig\", {'name':'Your Accuount'}) }}


<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout')}}\"><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">

                    {% for message in app.flashes('address_message') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }} 
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                    {% endfor %}


                <div class=\"tab-content dashboard_content\">
                      <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>HELLO {{ app.user.firstname | upper }} {{ app.user.lastname | upper }}</h3>
                            </div>
                            <div class=\"card-body\">
                                <p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{path('admin')}}\" target=\"_blank\" class=\"btn btn-fill-out\">Access To Backoffice</a>
                                {% endif %}
                            </div>

                        </div>
                      </div>
                      <div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            {% if orders %}
                                    <div class=\"card-body\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for order in orders %}
                                                <tr>
                                                    <td>{{order.id}}</td>
                                                    <td>{{order.createdAt | date(\"m-d-Y\")}}</td>
                                                    <td>Processing</td>
                                                    <td>\${{order.subTotalTTC/100}} for <strong>{{order.quantity}} Items</strong></td>
                                                    <td><a href=\"{{path('account_order_details', {'id':order.id})}}\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                            {% else %}
                                <div style=\"color: red;\">Sorry {{app.user.fullName}}. You have not yet placed an order !!</div>
                            {% endif %}

                        </div>
                      </div>
                    <div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <a href=\"{{path('address_new')}}\" class=\"btn btn-fill-out mb-3\">Add new address</a>
                            </div>
                        </div>
                        <div class=\"row\">
                            {% if app.user.addresses %}
                                {% set index = 0 %}
                                {% for address in app.user.addresses %}
                                    {% set index = index + 1 %}
                                    <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h3> Your Address # {{ index }} </h3>
                                            </div>
                                            <div class=\"card-body\">
                                                <address>Full Name : {{ address.fullName }}<br>
                                                    Address : {{ address.address }}      <br>
                                                    Complement : {{ address.complement }}        <br>
                                                    City : {{ address.city }}      <br>
                                                    Code Postal : {{ address.codePostal }}      <br>
                                                    Country : {{ address.country }}

                                                </address>
                                                <div class=\"btn-group\">
                                                    <a href=\"{{path('address_edit',{'id':address.id})}}\" class=\"btn btn-fill-out\">Edit</a>
                                                    {{ include('address/_delete_form.html.twig') }}

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                {% endfor %}

                            {% else %}

                                <p>Sorry you haven't added an address to your account yet !</p>
                                    
                            {% endif %}

                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6\">
                                            <label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.firstname }}\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6\">
                                            <label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.lastname }}\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.username }}\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.email }}\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\"  class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "account/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/account/index.html.twig");
    }
}
