<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dataset-column-page.twig */
class __TwigTemplate_9a71c1a86b7fb5b1b989ed9cb456727b18c003e2d6d59d42cfc5a0c1e2b410fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "dataset-column-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "dataset-column-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add Column");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.column.add.form", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Column");
        echo "</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" title=\"";
        // line 15
        echo __("View Data");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.view.data", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("View Data");
        echo "</a></li>
    </ul>
";
    }

    // line 20
    public function block_pageContent($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $context["dataSetName"] = $this->getAttribute(($context["dataSet"] ?? null), "dataSet", []);
        // line 22
        echo "    ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("Columns for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
        $context["widgetTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["widgetTitle"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 38
        echo __("Heading");
        echo "</th>
                                <th>";
        // line 39
        echo __("DataType");
        echo "</th>
                                <th>";
        // line 40
        echo __("Column Type");
        echo "</th>
                                <th>";
        // line 41
        echo __("List Content");
        echo "</th>
                                <th>";
        // line 42
        echo __("Order");
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 56
    public function block_javaScript($context, array $blocks = [])
    {
        // line 57
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=dataSetColumnGrid\",
                    dataType: 'json',
                    success: function (json) {
                        try {
                            if (json.success) {
                                data = JSON.parse(json.data.value);
                            }
                        } catch (e) {
                            // Do nothing
                        }
                    }
                });
                return data;
            },
            stateSaveCallback: function (settings, data) {
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"dataSetColumnGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.column.search", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"heading\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"dataType\" },
                { \"data\": \"dataSetColumnType\" },
                { \"data\": \"listContent\" },
                { \"data\": \"columnOrder\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));
    </script>
";
    }

    public function getTemplateName()
    {
        return "dataset-column-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 95,  169 => 82,  149 => 65,  139 => 57,  136 => 56,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  88 => 26,  83 => 24,  80 => 23,  75 => 22,  72 => 21,  69 => 20,  58 => 15,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/*
 * Spring Signage Ltd - http://www.springsignage.com
 * Copyright (C) 2015 Spring Signage Ltd
 * (\${FILE_NAME})
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add Column\" %}\" href=\"{{ urlFor(\"dataSet.column.add.form\", {id: dataSet.dataSetId}) }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Column\" %}</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" title=\"{% trans \"View Data\" %}\" href=\"{{ urlFor(\"dataSet.view.data\", {id: dataSet.dataSetId}) }}\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {% trans \"View Data\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    {% set dataSetName = dataSet.dataSet %}
    {% set widgetTitle %}{% trans %}Columns for {{ dataSetName }}{% endtrans %}{% endset %}
    <div class=\"widget\">
        <div class=\"widget-title\">{{ widgetTitle }}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Heading\" %}</th>
                                <th>{% trans \"DataType\" %}</th>
                                <th>{% trans \"Column Type\" %}</th>
                                <th>{% trans \"List Content\" %}</th>
                                <th>{% trans \"Order\" %}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=dataSetColumnGrid\",
                    dataType: 'json',
                    success: function (json) {
                        try {
                            if (json.success) {
                                data = JSON.parse(json.data.value);
                            }
                        } catch (e) {
                            // Do nothing
                        }
                    }
                });
                return data;
            },
            stateSaveCallback: function (settings, data) {
                \$.ajax({
                    type: \"POST\",
                    url: \"{{ urlFor(\"user.pref\") }}\",
                    data: {
                        preference: [{
                            option: \"dataSetColumnGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"dataSet.column.search\", {id: dataSet.dataSetId}) }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"heading\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"dataType\" },
                { \"data\": \"dataSetColumnType\" },
                { \"data\": \"listContent\" },
                { \"data\": \"columnOrder\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));
    </script>
{% endblock %}", "dataset-column-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-column-page.twig");
    }
}
