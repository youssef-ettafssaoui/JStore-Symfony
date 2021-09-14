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

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0fb5dbaeb38f69fa33f880bc223abe9b843540f4963a3982150ce7fc83aafcbf extends Template
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
        echo "<?php \$symbol = false !== \$symbol ? (\$symbol ? ' '.\$symbol : ' %') : '' ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => \$type ?? 'text']).\$view->escape(\$symbol) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Framework/Form/percent_widget.html.php", "/Users/mac/Desktop/AppSymfony/jstore/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
