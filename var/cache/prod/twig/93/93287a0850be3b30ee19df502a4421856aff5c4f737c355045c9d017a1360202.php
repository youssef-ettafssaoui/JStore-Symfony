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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_7fb2c4e51fbfc7cc5df0fae67794ef034c7bb2260a6b684ffea676c36e26abe9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_071f7b42375e88f9651005b46da7017412a481b242d3e9d3395c8d1a34cc2f74"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => ($context["pageName"] ?? null), 1 => ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 12)) : (null))], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
($context["__internal_071f7b42375e88f9651005b46da7017412a481b242d3e9d3395c8d1a34cc2f74"] ?? null))));
        $___internal_58c5f7811d0c1ecaeb25688ff4484f9130d3bd364c7d47d40185417295b0269e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_58c5f7811d0c1ecaeb25688ff4484f9130d3bd364c7d47d40185417295b0269e_);
    }

    // line 19
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 21
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 21), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 62
        echo "
    ";
        // line 63
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 28
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        ";
        $context["row_number"] = 0;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 31
            echo "            ";
            $context["is_decoration_field"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 31));
            // line 32
            echo "
            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 33) &&  !($context["is_decoration_field"] ?? null))) {
                // line 34
                echo "                ";
                $context["row_number"] = 0;
                // line 35
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 35, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 37
            echo "
            ";
            // line 38
            if (($context["is_decoration_field"] ?? null)) {
                // line 39
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 40, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 42
                echo "
                ";
                // line 43
                $context["row_number"] = 0;
                // line 44
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 44)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "help", [], "any", false, false, false, 44)))) {
                    // line 45
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 45, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 47
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_content_panel_with_header", [$context["field"]], 47, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 49
                echo "            ";
            }
            // line 50
            echo "
            ";
            // line 51
            $this->displayBlock('detail_field', $context, $blocks);
            // line 56
            echo "
            ";
            // line 57
            $context["row_number"] = ((($context["is_decoration_field"] ?? null)) ? (($context["row_number"] ?? null)) : ((($context["row_number"] ?? null) + 1)));
            // line 58
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        ";
        // line 60
        echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 60, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 51
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
        if ( !($context["is_decoration_field"] ?? null)) {
            // line 53
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null), ($context["row_number"] ?? null)], 53, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 55
        echo "            ";
    }

    // line 63
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 64)], false);
        echo "
    ";
    }

    // line 68
    public function macro_open_empty_content_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 69
            echo "
<div class=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
    <div class=\"content-panel\">
        <div class=\"content-panel-body without-header without-footer without-padding\">
            <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 76
    public function macro_close_content_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 77
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 83
    public function macro_open_content_panel_with_header($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 84
            echo "    ";
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 84);
            // line 85
            echo "    ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 85);
            // line 86
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
        <div class=\"content-panel\">
            <div class=\"content-panel-header ";
            // line 88
            echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
            echo " ";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 88))) ? ("with-help") : (""));
            echo "\">
                ";
            // line 89
            if (($context["collapsible"] ?? null)) {
                // line 90
                echo "                    <a href=\"#content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 90), "html", null, true);
                echo "\" data-bs-toggle=\"collapse\" class=\"content-panel-collapse ";
                echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                echo "\" aria-expanded=\"";
                echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                echo "\" aria-controls=\"content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 90), "html", null, true);
                echo "\">
                        <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                ";
            }
            // line 93
            echo "
                        ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 94)) {
                // line 95
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 95), "html", null, true);
                echo "\"></i>
                        ";
            }
            // line 97
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 97);
            echo "

                ";
            // line 99
            if (($context["collapsible"] ?? null)) {
                // line 100
                echo "                    </a>
                ";
            }
            // line 102
            echo "
                ";
            // line 103
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103))) {
                // line 104
                echo "                    <div class=\"content-panel-header-help\">";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 104);
                echo "</div>
                ";
            }
            // line 106
            echo "            </div>

            <div id=\"content-";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 108), "html", null, true);
            echo "\" class=\"content-panel-body without-footer without-padding ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 112
    public function macro_render_field($__entity__ = null, $__field__ = null, $__row_number__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "row_number" => $__row_number__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 113
            echo "    <div class=\"data-row ";
            echo (((($context["row_number"] ?? null) % 2 == 0)) ? ("with-background") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 113), "html", null, true);
            echo "\">
        <dd>
            ";
            // line 115
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 115);
            echo "

            ";
            // line 117
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 117))) {
                // line 118
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 119), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 122
            echo "        </dd>
        <dt>
            ";
            // line 124
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 124), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dt>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 124,  465 => 122,  459 => 119,  456 => 118,  454 => 117,  449 => 115,  441 => 113,  426 => 112,  410 => 108,  406 => 106,  400 => 104,  398 => 103,  395 => 102,  391 => 100,  389 => 99,  383 => 97,  377 => 95,  375 => 94,  372 => 93,  359 => 90,  357 => 89,  351 => 88,  345 => 86,  342 => 85,  339 => 84,  326 => 83,  313 => 77,  301 => 76,  287 => 70,  284 => 69,  271 => 68,  264 => 64,  260 => 63,  256 => 55,  250 => 53,  247 => 52,  243 => 51,  237 => 60,  234 => 59,  220 => 58,  218 => 57,  215 => 56,  213 => 51,  210 => 50,  207 => 49,  201 => 47,  195 => 45,  192 => 44,  190 => 43,  187 => 42,  181 => 40,  178 => 39,  176 => 38,  173 => 37,  167 => 35,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  138 => 30,  135 => 29,  131 => 28,  127 => 63,  124 => 62,  121 => 28,  117 => 27,  110 => 25,  99 => 21,  94 => 20,  90 => 19,  86 => 11,  83 => 5,  82 => 15,  81 => 14,  79 => 13,  77 => 12,  75 => 11,  71 => 10,  64 => 8,  57 => 7,  53 => 3,  51 => 5,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
