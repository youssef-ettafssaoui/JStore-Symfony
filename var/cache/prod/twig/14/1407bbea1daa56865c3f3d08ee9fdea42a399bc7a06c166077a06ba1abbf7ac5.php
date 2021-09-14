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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_9affbb3484c527b9c0fce2b8a40eab02d92b20c444599bebf3949e271d58184f extends Template
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
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_b190c72ce066cf8690d290466f407d9bc8e90c75822b94efc27f0a7aa651dcfc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 19
        $context["has_batch_actions"] = (twig_length_filter($this->env, ($context["batch_actions"] ?? null)) > 0);
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => "index"], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [0 => "index"], "method", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
($context["__internal_b190c72ce066cf8690d290466f407d9bc8e90c75822b94efc27f0a7aa651dcfc"] ?? null))));
        $___internal_4516a23697273c7c425b8ed447197ff1f2f4deb3025a2229b2d4f05dda6ae24d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_4516a23697273c7c425b8ed447197ff1f2f4deb3025a2229b2d4f05dda6ae24d_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
        // line 28
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 21
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        <div class=\"global-actions\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 24
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 24), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    ";
    }

    // line 28
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 30
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 32
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 32), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </div>
        ";
        }
        // line 36
        echo "    ";
    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "get", [0 => "sort"], "method", false, false, false, 41)));
        // line 42
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "get", [0 => "sort"], "method", false, false, false, 42));
        // line 43
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 44
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, ($context["entities"] ?? null)) != 0);
        // line 45
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 45), "isSearchEnabled", [], "any", false, false, false, 45);
        // line 46
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, ($context["filters"] ?? null)) > 0);
        // line 47
        echo "    ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 48
        echo "
    ";
        // line 49
        if (($context["has_datagrid_tools"] ?? null)) {
            // line 50
            echo "        <div class=\"datagrid-header-tools\">
            ";
            // line 51
            $this->displayBlock('search', $context, $blocks);
            // line 85
            echo "
            <div class=\"datagrid-filters\">
                ";
            // line 87
            $this->displayBlock('filters', $context, $blocks);
            // line 102
            echo "            </div>
        </div>
    ";
        }
        // line 105
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding ";
        // line 107
        echo (( !($context["has_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top ";
        // line 108
        echo (( !($context["has_footer"] ?? null)) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 110
        $this->displayBlock('table_head', $context, $blocks);
        // line 139
        echo "                </thead>

                <tbody>
                ";
        // line 142
        $this->displayBlock('table_body', $context, $blocks);
        // line 200
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 204
        if ((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) {
            // line 205
            echo "            <div class=\"content-panel-footer without-padding without-border\">
                ";
            // line 206
            $this->displayBlock('paginator', $context, $blocks);
            // line 209
            echo "            </div>
        ";
        }
        // line 211
        echo "    </div>

    ";
        // line 213
        $this->displayBlock('delete_form', $context, $blocks);
        // line 216
        echo "
    ";
        // line 217
        if (($context["has_filters"] ?? null)) {
            // line 218
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 220
        echo "
    ";
        // line 221
        if (($context["has_batch_actions"] ?? null)) {
            // line 222
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
    }

    // line 51
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
        if (($context["has_search"] ?? null)) {
            // line 53
            echo "                    <div class=\"datagrid-search\">
                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 56
            $this->displayBlock('search_form', $context, $blocks);
            // line 80
            echo "                            </form>
                        </div>
                    </div>
                ";
        }
        // line 84
        echo "            ";
    }

    // line 56
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                                    ";
        // line 58
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "all", [], "any", false, false, false, 58), ["referrer" => null, "page" => 1]);
        // line 61
        echo "
                                    ";
        // line 64
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["query_parameters"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 65
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 70
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 70), "get", [0 => "query"], "method", true, true, false, 70) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 70), "get", [0 => "query"], "method", false, false, false, 70)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 70), "get", [0 => "query"], "method", false, false, false, 70), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 70), "translationParameters", [], "any", false, false, false, 70), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\">

                                            ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "get", [0 => "query"], "method", false, false, false, 72)) {
            // line 73
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 73), "html", null, true);
            echo "\" class=\"action-search-reset\">
                                                    <i class=\"fas fa-times-circle\"></i>
                                                </a>
                                            ";
        }
        // line 77
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 87
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                    ";
        if (($context["has_filters"] ?? null)) {
            // line 89
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 89), "query", [], "any", false, true, false, 89), "all", [], "any", false, true, false, 89), "filters", [], "array", true, true, false, 89)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 89), "query", [], "any", false, true, false, 89), "all", [], "any", false, true, false, 89)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["filters"] ?? null) : null), [])) : ([])));
            // line 90
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"#\" data-href=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 91), "includeReferrer", [], "method", false, false, false, 91), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
            echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 92), "translationParameters", [], "any", false, false, false, 92), "EasyAdminBundle"), "html", null, true);
            if (($context["applied_filters"] ?? null)) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
                echo ")</span>";
            }
            // line 93
            echo "                            </a>
                            ";
            // line 94
            if (($context["applied_filters"] ?? null)) {
                // line 95
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 95), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 99
            echo "                        </div>
                    ";
        }
        // line 101
        echo "                ";
    }

    // line 110
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                    <tr>
                        ";
        // line 112
        if (($context["has_batch_actions"] ?? null)) {
            // line 113
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 115
        echo "
                        ";
        // line 116
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 117
        echo "                        ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 118
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 118) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 118)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 118)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 119
            echo "                            ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 119), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 119)], "method", false, false, false, 119);
            // line 120
            echo "                            ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 120), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 120)], "method", false, false, false, 120) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 121
            echo "                            ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 122
            echo "
                            <th class=\"";
            // line 123
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 123)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 123), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 123), "textDirection", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                                ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 124)) {
                // line 125
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 125) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 125), "html", null, true);
                echo "\">
                                        ";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 126);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 129
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 129);
                echo "</span>
                                ";
            }
            // line 131
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                        <th ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 134), "showEntityActionsAsDropdown", [], "any", false, false, false, 134)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 134), "textDirection", [], "any", false, false, false, 134), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 135), "translationParameters", [], "any", false, false, false, 135), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        </th>
                    </tr>
                ";
    }

    // line 142
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 144
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 144)) {
                // line 145
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 146
                echo "                        ";
            } else {
                // line 147
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 147), "html", null, true);
                echo "\">
                                ";
                // line 148
                if (($context["has_batch_actions"] ?? null)) {
                    // line 149
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 149), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 151
                echo "
                                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 152));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 153
                    echo "                                    <td class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 153) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 153), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 153), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 153), "textDirection", [], "any", false, false, false, 153), "html", null, true);
                    echo "\">
                                        ";
                    // line 154
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 154), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "
                                ";
                // line 158
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 181
                echo "                            </tr>

                        ";
            }
            // line 184
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 185
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 187), "translationParameters", [], "any", false, false, false, 187), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
                    ";
        // line 192
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 193
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 194
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 194)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 199
        echo "                ";
    }

    // line 158
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                                    <td class=\"actions\">
                                        ";
        // line 160
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 160), "showEntityActionsAsDropdown", [], "any", false, false, false, 160)) {
            // line 161
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 162
                echo "                                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 162), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 162), "showEntityActionsAsDropdown", [], "any", false, false, false, 162)], false);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                                        ";
        } else {
            // line 165
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 165), "count", [], "any", false, false, false, 165) > 0)) {
                // line 166
                echo "                                                <div class=\"dropdown dropdown-actions\">
                                                    <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                    </a>

                                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                                        ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 172));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 173
                    echo "                                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 173), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 173), "showEntityActionsAsDropdown", [], "any", false, false, false, 173)], false);
                    echo "
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "                                                    </div>
                                                </div>
                                            ";
            }
            // line 178
            echo "                                        ";
        }
        // line 179
        echo "                                    </td>
                                ";
    }

    // line 206
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 207));
        echo "
                ";
    }

    // line 213
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 214,  710 => 213,  703 => 207,  699 => 206,  694 => 179,  691 => 178,  686 => 175,  677 => 173,  673 => 172,  665 => 166,  662 => 165,  659 => 164,  650 => 162,  645 => 161,  643 => 160,  640 => 159,  636 => 158,  632 => 199,  625 => 195,  621 => 194,  618 => 193,  616 => 192,  613 => 191,  603 => 187,  599 => 185,  586 => 184,  581 => 181,  579 => 158,  576 => 157,  567 => 154,  556 => 153,  552 => 152,  549 => 151,  543 => 149,  541 => 148,  536 => 147,  533 => 146,  530 => 145,  527 => 144,  508 => 143,  504 => 142,  496 => 135,  488 => 134,  485 => 133,  478 => 131,  472 => 129,  464 => 126,  459 => 125,  457 => 124,  447 => 123,  444 => 122,  441 => 121,  438 => 120,  435 => 119,  430 => 118,  427 => 117,  425 => 116,  422 => 115,  418 => 113,  416 => 112,  413 => 111,  409 => 110,  405 => 101,  401 => 99,  393 => 95,  391 => 94,  388 => 93,  381 => 92,  375 => 91,  372 => 90,  369 => 89,  366 => 88,  362 => 87,  356 => 77,  348 => 73,  346 => 72,  339 => 70,  334 => 67,  323 => 65,  318 => 64,  315 => 61,  312 => 58,  310 => 57,  306 => 56,  302 => 84,  296 => 80,  294 => 56,  289 => 53,  286 => 52,  282 => 51,  274 => 222,  272 => 221,  269 => 220,  263 => 218,  261 => 217,  258 => 216,  256 => 213,  252 => 211,  248 => 209,  246 => 206,  243 => 205,  241 => 204,  235 => 200,  233 => 142,  228 => 139,  226 => 110,  221 => 108,  217 => 107,  213 => 105,  208 => 102,  206 => 87,  202 => 85,  200 => 51,  197 => 50,  195 => 49,  192 => 48,  189 => 47,  186 => 46,  183 => 45,  180 => 44,  177 => 43,  174 => 42,  171 => 41,  169 => 40,  165 => 39,  161 => 36,  157 => 34,  148 => 32,  144 => 31,  141 => 30,  138 => 29,  134 => 28,  129 => 26,  120 => 24,  116 => 23,  113 => 22,  109 => 21,  104 => 28,  101 => 21,  97 => 20,  93 => 11,  90 => 5,  89 => 15,  88 => 14,  86 => 13,  84 => 12,  82 => 11,  78 => 10,  71 => 8,  64 => 7,  60 => 4,  58 => 19,  56 => 5,  49 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
