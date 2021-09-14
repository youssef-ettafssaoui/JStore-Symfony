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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_177a8fe534d68081a4aacb40263cd39ded020e633522074c09b7c0094b51fa13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome to EasyAdmin 3";
    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <style>
        p { max-width: 600px; }
    </style>

    <p>
        <strong>You have successfully installed EasyAdmin 3 in your application!</strong>
    </p>

    <p>
        You are seeing this example page because you haven't configured the start page
        of your Dashboard. To do that, open the following file in your editor:
    </p>

    <pre>";
        // line 20
        echo twig_escape_filter($this->env, ($context["dashboard_controller_filepath"] ?? null), "html", null, true);
        echo "</pre>

    <p>
        Then, add the following method to it to customize the Dashboard start page:
    </p>

    <pre>
use EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AbstractDashboardController;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
// ...

class ";
        // line 33
        echo twig_escape_filter($this->env, ($context["dashboard_controller_class"] ?? null), "html", null, true);
        echo " extends AbstractDashboardController
{
    /**
     * @Route(\"/admin\")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        \$routeBuilder = \$this->get(AdminUrlGenerator::class);

        return \$this->redirect(\$routeBuilder->setController(OneOfYourCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        if ('jane' === \$this->getUser()->getUsername()) {
            return \$this->redirect('...');
        }

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        return \$this->render('some/path/my-dashboard.html.twig');
    }

    // ...
}
    </pre>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  73 => 20,  58 => 7,  54 => 6,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/welcome.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/welcome.html.twig");
    }
}
