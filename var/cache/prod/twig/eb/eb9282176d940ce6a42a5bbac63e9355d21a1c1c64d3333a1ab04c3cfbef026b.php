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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_e08ec38e941eb81cc62e2cd68aeecfcbee1380aaef841b4c1fa508d1fb4afbd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('date_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('time_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('file_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('form_row', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('collection_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('button_row', $context, $blocks);
        // line 157
        echo "
";
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 257
        echo "
";
        // line 258
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 262
        echo "
";
        // line 263
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 321
        echo "
";
        // line 323
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 414
        echo "
";
        // line 416
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 419
        echo "
";
        // line 420
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 424
        echo "
";
        // line 426
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 443
        echo "
";
        // line 445
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 463
        echo "
";
        // line 465
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 477
        echo "
";
        // line 479
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 524
        echo "
";
        // line 525
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 541
        echo "
";
        // line 542
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 612
        echo "
";
        // line 613
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
    }

    // line 16
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 18
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")))]);
        }
        // line 20
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 21
            echo "        ";
            // line 22
            $context["required"] = false;
        }
        // line 24
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " form-inline"))]);
        // line 29
        echo "    ";
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        echo "
";
    }

    // line 32
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 34
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 35
        echo "</div>";
    }

    // line 38
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 40
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 41
        echo "</div>";
    }

    // line 44
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 46
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 47
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 55
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 57
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 57), "")) : ("")) . " form-group")]);
        // line 59
        echo "
    <div ";
        // line 60
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 60, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 62
        echo "<div class=\"form-widget\">
            ";
        // line 63
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 63), "prepend_html", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 63), "prepend_html", [], "any", false, false, false, 63), null)) : (null)));
        // line 64
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 64), "append_html", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 64), "append_html", [], "any", false, false, false, 64), null)) : (null)));
        // line 65
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 66
        echo "
            ";
        // line 67
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 68
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 69
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 70), "prepend_html", [], "any", false, false, false, 70);
            echo "</span>
                    </div>
                ";
        }
        // line 73
        echo "
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                ";
        // line 76
        if (($context["has_append_html"] ?? null)) {
            // line 77
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 78), "append_html", [], "any", false, false, false, 78);
            echo "</span>
                    </div>
                ";
        }
        // line 81
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 82
        echo "
            ";
        // line 83
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 88
        echo "            ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 88), "ea_crud_form", [], "any", false, true, false, 88), "ea_field", [], "any", false, true, false, 88), "fieldFqcn", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 88), "ea_crud_form", [], "any", false, true, false, 88), "ea_field", [], "any", false, true, false, 88), "fieldFqcn", [], "any", false, false, false, 88), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 88), "nullable", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 88), "nullable", [], "any", false, false, false, 88), false)) : (false)))) {
            // line 89
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 91
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 96
        echo "
            ";
        // line 97
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 97), "help", [], "any", true, true, false, 97) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 97), "help", [], "any", false, false, false, 97)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 97), "help", [], "any", false, false, false, 97)) : (false))) {
            // line 98
            echo "                <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 98), "help", [], "any", false, false, false, 98);
            echo "</small>
            ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["form"] ?? null), "vars", [], "any", false, true, false, 99), "help", [], "any", true, true, false, 99) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 99), "help", [], "any", false, false, false, 99)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 99), "help", [], "any", false, false, false, 99)) : (false))) {
            // line 100
            echo "                <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "help", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "help_translation_parameters", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "translation_domain", [], "any", false, false, false, 100));
            echo "</small>
            ";
        }
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 104
        echo "</div>
    </div>
";
    }

    // line 108
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 109))) {
            // line 110
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 111
            echo "    ";
        }
        // line 112
        echo "
    ";
        // line 113
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["form"] ?? null), "vars", [], "any", false, false, false, 115), "ea_crud_form", [], "any", false, false, false, 115), "ea_field", [], "any", false, false, false, 115) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 115), "ea_crud_form", [], "any", false, false, false, 115), "ea_field", [], "any", false, false, false, 115), "customOptions", [], "any", false, false, false, 115), "get", [0 => "entryIsComplex"], "method", false, false, false, 115))) ? ("true") : ("false")), "data-allow-add" => ((        // line 116
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 117
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 118
($context["form"] ?? null), "children", [], "any", false, false, false, 118)), "data-form-type-name-placeholder" => ((        // line 119
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119)) : (""))]);
        // line 121
        echo "
    ";
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 125
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        // line 128
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 129
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 136
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", true, true, false, 137) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 137), "ea_crud_form", [], "any", false, true, false, 137), "ea_field", [], "any", false, true, false, 137), "customOptions", [], "any", false, true, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137)) : (false));
        // line 138
        echo "
    <div class=\"field-collection-item ";
        // line 139
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

        ";
        // line 142
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 142), "allow_delete", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 142), "allow_delete", [], "any", false, false, false, 142), false)) : (false))) {
            // line 143
            echo "            <button type=\"button\" class=\"btn btn-link field-collection-delete-button\"
                    title=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        ";
        }
        // line 149
        echo "    </div>
";
    }

    // line 152
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 153), "css_class", [], "any", true, true, false, 153)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 153), "css_class", [], "any", false, false, false, 153), "")) : ("")), "html", null, true);
        echo "\">";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 155
        echo "</div>";
    }

    // line 160
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        if ((($context["label"] ?? null) === false)) {
            // line 162
            echo "<label>";
            echo "</label>";
        } else {
            // line 164
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 165
                $context["element"] = "legend";
                // line 166
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 168
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 168), "")) : ("")) . " form-control-label"))]);
            }
            // line 170
            if (($context["required"] ?? null)) {
                // line 171
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 171), "")) : ("")) . " required"))]);
            }
            // line 173
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 174
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 175
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 176
($context["name"] ?? null), "%id%" =>                     // line 177
($context["id"] ?? null)]);
                } else {
                    // line 180
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 183
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 183, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 189
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 191
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 192
            echo "            ";
            // line 194
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 195
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 196
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 198
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 198), "prototype", [], "any", true, true, false, 198))) {
                // line 199
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 200
                echo "            ";
            }
            // line 201
            echo "        ";
        }
        // line 202
        echo "
        ";
        // line 203
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 207
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 209
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 209));
        echo "
    </div>
";
    }

    // line 213
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "    ";
        $context["force_error"] = true;
        // line 215
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 218
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 220
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 221
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 222
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 223
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 230
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 231
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 231) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["extension_icons"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["extension_icons"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 232
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 235
        echo "
        ";
        // line 236
        ob_start(function () { return ''; });
        // line 237
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 237), "vars", [], "any", false, false, false, 237), "id", [], "any", false, false, false, 237), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 245
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 247), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 250
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 250)) {
            // line 251
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 251), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 253
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 258
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        echo "    ";
        $context["force_error"] = true;
        // line 260
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 263
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 264), "formTypeOptions", [], "any", true, true, false, 264)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 264), "formTypeOptions", [], "any", false, false, false, 264), "")) : (""));
        // line 265
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 266
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 267
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 268
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 269
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 269) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 269)))) {
                    // line 270
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 270)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 272
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 274
                echo "                </div>
            ";
            } else {
                // line 276
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 277
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 278
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 279
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 279) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 279)))) {
                    // line 280
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 280)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 282
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 284
                echo "                </a>

                <div id=\"";
                // line 286
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 287
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 287) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 287)))) {
                    // line 288
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 288)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 290
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 292
                echo "                </div>
            ";
            }
            // line 294
            echo "        ";
        }
        // line 295
        echo "
        ";
        // line 296
        ob_start(function () { return ''; });
        // line 297
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 297), "vars", [], "any", false, false, false, 297), "id", [], "any", false, false, false, 297), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 300), "vars", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 305
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 307), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 310
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 310)) {
            // line 311
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 311), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 313
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 314), "vars", [], "any", false, false, false, 314), "id", [], "any", false, false, false, 314), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 318
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 319
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 323
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 324)) > 0)) {
            // line 325
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 329
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 330
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 330)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 331
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 331), false)) : (false))) {
                    // line 332
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 332), "html", null, true);
                    echo "\"></i>";
                }
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 334), "translationDomain", [], "any", false, false, false, 334)), "html", null, true);
                // line 335
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 335) > 0)) {
                    // line 336
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 336)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 337
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 337), "html", null, true);
                    // line 338
                    echo "</span>";
                }
                // line 340
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 346
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 346)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 346)) ? (_twig_default_filter((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["tab_config"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 347
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 347)) ? (_twig_default_filter((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["tab_config"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["help"] ?? null) : null), false)) : (false))) {
                    // line 348
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 349
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["tab_config"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 349), "translationDomain", [], "any", false, false, false, 349));
                    echo "
                                </div>
                            ";
                }
                // line 352
                echo "
                            ";
                // line 353
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 360
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 364
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 365), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 365) || (twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 365) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 366
            echo "        ";
            $context["panel_has_header"] = (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 366), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 366), false)) : (false)));
            // line 367
            echo "
        ";
            // line 368
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 368);
            // line 369
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 369);
            // line 370
            echo "
        <div class=\"";
            // line 371
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 371) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 371)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 371), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"content-panel\">
                ";
            // line 373
            if (($context["panel_has_header"] ?? null)) {
                // line 374
                echo "                    <div class=\"content-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 374)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 374), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        ";
                // line 375
                if (($context["collapsible"] ?? null)) {
                    // line 376
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\" class=\"content-panel-collapse ";
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\" aria-expanded=\"";
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\">
                                <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                        ";
                }
                // line 379
                echo "
                            ";
                // line 380
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 380)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 380), false)) : (false))) {
                    // line 381
                    echo "                                <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 381), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 383
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 383);
                echo "

                        ";
                // line 385
                if (($context["collapsible"] ?? null)) {
                    // line 386
                    echo "                            </a>
                        ";
                }
                // line 388
                echo "
                        ";
                // line 389
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 389)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 389), false)) : (false))) {
                    // line 390
                    echo "                            <div class=\"content-panel-header-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 390);
                    echo "</div>
                        ";
                }
                // line 392
                echo "                    </div>
                ";
            }
            // line 394
            echo "
                <div id=\"content-";
            // line 395
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"content-panel-body with-background ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " without-footer ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    ";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 396), "block_prefixes", [], "any", false, false, false, 396)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 396), "ea_crud_form", [], "any", false, false, false, 396), "form_panel", [], "any", false, false, false, 396) == $context["panel_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 397
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 397), "ea_crud_form", [], "any", false, false, false, 397), "form_tab", [], "any", false, false, false, 397) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 397), "ea_crud_form", [], "any", false, false, false, 397), "form_tab", [], "any", false, false, false, 397) == ($context["tab_name"] ?? null)))) {
                    // line 398
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                        ";
                }
                // line 400
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 405
            echo "        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">
                ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "block_prefixes", [], "any", false, false, false, 407)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "ea_crud_form", [], "any", false, false, false, 407), "form_tab", [], "any", false, false, false, 407) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "ea_crud_form", [], "any", false, false, false, 407), "form_tab", [], "any", false, false, false, 407) == ($context["tab_name"] ?? null)))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 408
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 410
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 416
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 417
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 417), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 420
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 421
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 421), "name", [], "any", false, false, false, 421);
        // line 422
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 426
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 427
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 429
($context["form"] ?? null), "vars", [], "any", false, false, false, 429), "ea_crud_form", [], "any", false, false, false, 429), "ea_field", [], "any", false, false, false, 429), "customOptions", [], "any", false, false, false, 429), "get", [0 => "language"], "method", false, false, false, 429), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 430
($context["form"] ?? null), "vars", [], "any", false, false, false, 430), "ea_crud_form", [], "any", false, false, false, 430), "ea_field", [], "any", false, false, false, 430), "customOptions", [], "any", false, false, false, 430), "get", [0 => "tabSize"], "method", false, false, false, 430), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 431
($context["form"] ?? null), "vars", [], "any", false, false, false, 431), "ea_crud_form", [], "any", false, false, false, 431), "ea_field", [], "any", false, false, false, 431), "customOptions", [], "any", false, false, false, 431), "get", [0 => "indentWithTabs"], "method", false, false, false, 431)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 432
($context["form"] ?? null), "vars", [], "any", false, false, false, 432), "ea_crud_form", [], "any", false, false, false, 432), "ea_field", [], "any", false, false, false, 432), "customOptions", [], "any", false, false, false, 432), "get", [0 => "showLineNumbers"], "method", false, false, false, 432)) ? ("true") : ("false"))])]);
        // line 433
        echo "

    ";
        // line 435
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 435), "ea_crud_form", [], "any", false, false, false, 435), "ea_field", [], "any", false, false, false, 435), "customOptions", [], "any", false, false, false, 435), "get", [0 => "numOfRows"], "method", false, false, false, 435);
        // line 436
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 437
            echo "        <style type=\"text/css\">
            ";
            // line 439
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 445
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 446
        echo "    ";
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 446), "ea_crud_form", [], "any", false, false, false, 446), "ea_field", [], "any", false, false, false, 446), "customOptions", [], "any", false, false, false, 446), "get", [0 => "numOfRows"], "method", false, false, false, 446);
        // line 447
        echo "
    ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 451
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 454
        if (($context["numOfRows"] ?? null)) {
            // line 455
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 456
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 458
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 465
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "icon", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "icon", [], "any", false, false, false, 466), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "label", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "label", [], "any", false, false, false, 466), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "css_class", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "css_class", [], "any", false, false, false, 466), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 468
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", false, false, false, 468), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 468), "icon", [], "any", false, false, false, 468), "html", null, true);
            echo "\"></i>";
        }
        // line 469
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", false, false, false, 469), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", false, false, false, 469), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 469), "translationDomain", [], "any", false, false, false, 469));
        }
        echo "</span>
        </h2>

        ";
        // line 472
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 472), "help", [], "any", true, true, false, 472)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 472), "help", [], "any", false, false, false, 472), false)) : (false))) {
            // line 473
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 473), "help", [], "any", false, false, false, 473), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 473), "translationDomain", [], "any", false, false, false, 473));
            echo "</p>
        ";
        }
        // line 475
        echo "    </div>
";
    }

    // line 479
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 480
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 480), "query", [], "any", false, true, false, 480), "get", [0 => "filters"], "method", true, true, false, 480)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 480), "query", [], "any", false, true, false, 480), "get", [0 => "filters"], "method", false, false, false, 480), [])) : ([])));
        // line 481
        echo "
    ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
            // line 483
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 483)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 483)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 483), "name", [], "any", false, false, false, 483), "html", null, true);
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 484), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 485
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 486), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                    ";
            // line 487
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 487), "label", [], "any", true, true, false, 487)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 487), "label", [], "any", false, false, false, 487), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 487), "translationDomain", [], "any", false, false, false, 487)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 490), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 490), "name", [], "any", false, false, false, 490), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#";
        // line 512
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 512), "id", [], "any", false, false, false, 512), "html", null, true);
        echo "').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>
";
    }

    // line 525
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 526
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 527
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 527), 'row');
        echo "
        ";
        // line 528
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 528), 'row');
        echo "
        <div id=\"wrapper_";
        // line 529
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 529), "vars", [], "any", false, false, false, 529), "id", [], "any", false, false, false, 529), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 529), "vars", [], "any", false, false, false, 529), "value", [], "any", false, false, false, 529) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 530), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 533), "vars", [], "any", false, false, false, 533), "id", [], "any", false, false, false, 533), "html", null, true);
        echo "').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_";
        // line 534
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 534), "vars", [], "any", false, false, false, 534), "id", [], "any", false, false, false, 534), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 542
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 543
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 546
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 547
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 549
        $context["placeholder"] = "";
        // line 550
        echo "            ";
        $context["title"] = "";
        // line 551
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 552
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 553
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 554
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 555
                echo "                ";
            } else {
                // line 556
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 556);
                // line 557
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 557));
                // line 558
                echo "                ";
            }
            // line 559
            echo "            ";
        }
        // line 560
        echo "
            <div class=\"custom-file\">
                ";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 562), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "attr", [], "any", false, false, false, 562), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "style" => "display: none"])]);
        echo "
                ";
        // line 563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 563), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>

            <div class=\"input-group-text\" ";
        // line 566
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 567
        if (($context["currentFiles"] ?? null)) {
            // line 568
            if (($context["multiple"] ?? null)) {
                // line 569
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 569)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 571
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 571)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 575
        if (($context["allow_delete"] ?? null)) {
            // line 576
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 576), "vars", [], "any", false, false, false, 576), "id", [], "any", false, false, false, 576), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 580
        echo "
                <label class=\"btn\" for=\"";
        // line 581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 581), "vars", [], "any", false, false, false, 581), "id", [], "any", false, false, false, 581), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 586
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 587
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 590
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 591
                echo "                        <tr>
                            <td>
                                ";
                // line 593
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 593))), "html", null, true);
                    echo "\">";
                }
                // line 594
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 594)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 595
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 595), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 597
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 598
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 599
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 599)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 606
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 607
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 607), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 609
        echo "    </div>
    ";
        // line 610
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 610), 'errors');
        echo "
";
    }

    // line 613
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 614
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 616
($context["form"] ?? null), "parent", [], "any", false, false, false, 616), "children", [], "any", false, false, false, 616)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 616), "id", [], "any", false, false, false, 616)]);
        // line 618
        echo "
    <div class=\"input-group\">
        ";
        // line 620
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1769 => 620,  1765 => 618,  1763 => 616,  1761 => 614,  1757 => 613,  1751 => 610,  1748 => 609,  1742 => 607,  1739 => 606,  1733 => 602,  1724 => 599,  1721 => 598,  1717 => 597,  1712 => 595,  1707 => 594,  1701 => 593,  1697 => 591,  1693 => 590,  1688 => 587,  1686 => 586,  1678 => 581,  1675 => 580,  1663 => 576,  1661 => 575,  1654 => 571,  1648 => 569,  1646 => 568,  1644 => 567,  1639 => 566,  1633 => 563,  1629 => 562,  1625 => 560,  1622 => 559,  1619 => 558,  1616 => 557,  1613 => 556,  1610 => 555,  1607 => 554,  1604 => 553,  1601 => 552,  1598 => 551,  1595 => 550,  1593 => 549,  1589 => 547,  1585 => 546,  1578 => 543,  1574 => 542,  1570 => 539,  1563 => 534,  1559 => 533,  1553 => 530,  1545 => 529,  1541 => 528,  1537 => 527,  1534 => 526,  1530 => 525,  1514 => 512,  1497 => 497,  1478 => 492,  1467 => 490,  1461 => 487,  1453 => 486,  1447 => 485,  1443 => 484,  1430 => 483,  1413 => 482,  1410 => 481,  1407 => 480,  1403 => 479,  1398 => 475,  1392 => 473,  1390 => 472,  1381 => 469,  1375 => 468,  1367 => 466,  1363 => 465,  1353 => 458,  1349 => 456,  1346 => 455,  1344 => 454,  1338 => 451,  1332 => 448,  1329 => 447,  1326 => 446,  1322 => 445,  1311 => 439,  1308 => 437,  1305 => 436,  1303 => 435,  1299 => 433,  1297 => 432,  1296 => 431,  1295 => 430,  1294 => 429,  1292 => 427,  1288 => 426,  1281 => 422,  1278 => 421,  1274 => 420,  1267 => 417,  1263 => 416,  1253 => 410,  1244 => 408,  1240 => 407,  1236 => 405,  1228 => 401,  1222 => 400,  1216 => 398,  1213 => 397,  1209 => 396,  1199 => 395,  1196 => 394,  1192 => 392,  1186 => 390,  1184 => 389,  1181 => 388,  1177 => 386,  1175 => 385,  1169 => 383,  1163 => 381,  1161 => 380,  1158 => 379,  1145 => 376,  1143 => 375,  1136 => 374,  1134 => 373,  1129 => 371,  1126 => 370,  1123 => 369,  1121 => 368,  1118 => 367,  1115 => 366,  1109 => 365,  1105 => 364,  1097 => 360,  1091 => 356,  1074 => 353,  1071 => 352,  1065 => 349,  1062 => 348,  1060 => 347,  1049 => 346,  1032 => 345,  1028 => 343,  1020 => 340,  1017 => 338,  1015 => 337,  1011 => 336,  1009 => 335,  1007 => 334,  1002 => 332,  1000 => 331,  991 => 330,  988 => 329,  984 => 328,  979 => 325,  976 => 324,  972 => 323,  965 => 319,  961 => 318,  954 => 314,  951 => 313,  945 => 311,  943 => 310,  937 => 307,  933 => 306,  930 => 305,  926 => 302,  921 => 300,  914 => 297,  912 => 296,  909 => 295,  906 => 294,  902 => 292,  896 => 290,  890 => 288,  888 => 287,  884 => 286,  880 => 284,  874 => 282,  868 => 280,  866 => 279,  862 => 278,  859 => 277,  856 => 276,  852 => 274,  846 => 272,  840 => 270,  838 => 269,  835 => 268,  832 => 267,  830 => 266,  827 => 265,  824 => 264,  820 => 263,  813 => 260,  810 => 259,  806 => 258,  799 => 254,  796 => 253,  790 => 251,  788 => 250,  782 => 247,  778 => 246,  775 => 245,  771 => 242,  766 => 240,  759 => 237,  757 => 236,  754 => 235,  748 => 232,  744 => 231,  739 => 230,  736 => 223,  733 => 222,  730 => 221,  728 => 220,  725 => 219,  721 => 218,  714 => 215,  711 => 214,  707 => 213,  700 => 209,  697 => 208,  693 => 207,  686 => 203,  683 => 202,  680 => 201,  677 => 200,  674 => 199,  671 => 198,  665 => 196,  662 => 195,  659 => 194,  657 => 192,  655 => 191,  652 => 190,  648 => 189,  626 => 183,  622 => 180,  619 => 177,  618 => 176,  617 => 175,  615 => 174,  613 => 173,  610 => 171,  608 => 170,  605 => 168,  602 => 166,  600 => 165,  598 => 164,  594 => 162,  592 => 161,  588 => 160,  584 => 155,  582 => 154,  576 => 153,  572 => 152,  567 => 149,  559 => 144,  556 => 143,  554 => 142,  549 => 140,  545 => 139,  542 => 138,  539 => 137,  535 => 136,  527 => 131,  523 => 129,  521 => 128,  515 => 126,  511 => 125,  505 => 122,  502 => 121,  500 => 119,  499 => 118,  498 => 117,  497 => 116,  496 => 115,  495 => 113,  492 => 112,  489 => 111,  486 => 110,  483 => 109,  479 => 108,  473 => 104,  471 => 103,  465 => 100,  463 => 99,  458 => 98,  456 => 97,  453 => 96,  446 => 92,  440 => 91,  436 => 89,  433 => 88,  431 => 83,  428 => 82,  423 => 81,  417 => 78,  414 => 77,  412 => 76,  407 => 74,  404 => 73,  398 => 70,  395 => 69,  392 => 68,  388 => 67,  385 => 66,  382 => 65,  379 => 64,  377 => 63,  374 => 62,  372 => 61,  361 => 60,  358 => 59,  356 => 57,  354 => 56,  350 => 55,  345 => 49,  342 => 47,  340 => 46,  338 => 45,  334 => 44,  330 => 41,  328 => 40,  326 => 39,  322 => 38,  318 => 35,  316 => 34,  314 => 33,  310 => 32,  303 => 29,  300 => 28,  296 => 27,  292 => 24,  289 => 22,  287 => 21,  285 => 20,  282 => 18,  280 => 17,  276 => 16,  270 => 11,  265 => 9,  262 => 8,  256 => 6,  253 => 5,  249 => 4,  245 => 613,  242 => 612,  240 => 546,  237 => 545,  235 => 542,  232 => 541,  230 => 525,  227 => 524,  225 => 479,  222 => 477,  220 => 465,  217 => 463,  215 => 445,  212 => 443,  210 => 426,  207 => 424,  205 => 420,  202 => 419,  200 => 416,  197 => 414,  195 => 364,  192 => 363,  190 => 323,  187 => 321,  185 => 318,  182 => 317,  180 => 263,  177 => 262,  175 => 258,  172 => 257,  170 => 218,  167 => 217,  165 => 213,  162 => 212,  160 => 207,  157 => 206,  155 => 189,  152 => 188,  149 => 186,  147 => 160,  144 => 159,  141 => 157,  139 => 152,  136 => 151,  134 => 136,  131 => 135,  129 => 125,  126 => 124,  124 => 108,  121 => 107,  119 => 55,  116 => 54,  113 => 52,  111 => 44,  108 => 43,  106 => 38,  103 => 37,  101 => 32,  98 => 31,  96 => 27,  93 => 26,  91 => 16,  88 => 15,  85 => 13,  83 => 4,  80 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
