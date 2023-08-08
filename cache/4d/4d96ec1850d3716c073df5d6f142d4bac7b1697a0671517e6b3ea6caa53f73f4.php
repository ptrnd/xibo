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

/* dataset-dataentry-page.twig */
class __TwigTemplate_4dd725c61ed6f43bfe4b4f94147e32644cd7793c3d5106984096eb45dd3c280b extends \Twig\Template
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
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["inline"] = $this->loadTemplate("inline.twig", "dataset-dataentry-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dataset-dataentry-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 27
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 28
        echo __("Add a row to the end of this DataSet");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.add.form", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Row");
        echo "</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.column.view", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i> ";
        echo __("View Columns");
        echo "</a></li>
    </ul>
";
    }

    // line 34
    public function block_pageContent($context, array $blocks = [])
    {
        // line 35
        echo "    ";
        $context["dataSetName"] = $this->getAttribute(($context["dataSet"] ?? null), "dataSet", []);
        // line 36
        echo "    ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("Data Entry for %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
        $context["widgetTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["widgetTitle"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataSet"] ?? null), "getColumn", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 45
            echo "                                ";
            if (((($this->getAttribute($context["col"], "dataSetColumnTypeId", []) == 1) && (($this->getAttribute($context["col"], "dataTypeId", []) == 1) || ($this->getAttribute($context["col"], "dataTypeId", []) == 2))) && ($this->getAttribute($context["col"], "showFilter", []) == 1))) {
                // line 46
                echo "                                    ";
                echo $context["inline"]->getinput($this->getAttribute($context["col"], "heading", []), $this->getAttribute($context["col"], "heading", []));
                echo "
                                ";
            }
            // line 48
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\" data-image-url=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1&width=150&height=150\">
                        <thead>
                        <tr>
                            <th>";
        // line 56
        echo __("ID");
        echo "</th>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataSet"] ?? null), "getColumn", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 58
            echo "                                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "heading", []), "html", null, true);
            echo "</th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
            <li class=\"btn btn-success btn-xs\"><a class=\"btns toggleMultiSelectMode\" id=\"toggleMultiSelectMode\" style=\"padding: 7px 7px;\" title=\"";
        // line 71
        echo __("Click to toggle between Data Edit and Multi Select modes");
        echo "\" > <i class=\"\" aria-hidden=\"true\"></i> ";
        echo __("Edit Mode");
        echo "</a></li>
        </ul>
        <ul class=\"nav nav-pills pull-right deleteRowsControl\" style=\"margin-left: 5px;\">
            <li class=\"btn btn-danger btn-xs\"><a class=\"btns deleteSelectedRows\" id=\"deleteSelectedRows\" style=\"padding: 7px 7px;\" title=\"";
        // line 74
        echo __("Click to delete selected rows");
        echo "\" > <i class=\"\" aria-hidden=\"true\"></i> ";
        echo __("Delete Selected Rows");
        echo "</a></li>
        </ul>
    </div>

";
    }

    // line 80
    public function block_javaScript($context, array $blocks = [])
    {
        // line 81
        echo "    <script type=\"text/javascript\">

        var imageUrl = \$(\"#datasets\").data(\"imageUrl\");
        var cols = [];
        let editMode = 'Edit';

        cols.push({ \"name\": \"id\", \"data\": \"id\" });
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataSet"] ?? null), "getColumn", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 89
            echo "            ";
            if (($this->getAttribute($context["col"], "dataTypeId", []) == 3)) {
                // line 90
                echo "                cols.push({ \"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "heading", []), "html", null, true);
                echo "\", \"orderable\": ";
                if (($this->getAttribute($context["col"], "showSort", []) == 1)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ", \"render\": dataTableDateFromIso });
            ";
            } elseif (($this->getAttribute(            // line 91
$context["col"], "dataTypeId", []) == 5)) {
                // line 92
                echo "                cols.push({ \"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "heading", []), "html", null, true);
                echo "\", \"orderable\": ";
                if (($this->getAttribute($context["col"], "showSort", []) == 1)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ", \"render\": function(data, type, row) {
                        if (type != \"display\")
                            return data;

                        if (data == null)
                            return \"\";

                        return '<img src=\"' + imageUrl.replace(\":id\", data) + '\"/>';
                    }
                });
            ";
            } else {
                // line 103
                echo "                cols.push({ \"data\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "heading", []), "html", null, true);
                echo "\", \"orderable\": ";
                if (($this->getAttribute($context["col"], "showSort", []) == 1)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo " });
            ";
            }
            // line 105
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
        cols.push({
            \"orderable\": false,
            \"data\": function(data, type, row, meta) {
                if (type != \"display\")
                    return \"\";

                var url = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.delete.form", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\".replace(\":rowId\", data.id);

                return \"<a href=\\\"\" + url + \"\\\" class=\\\"XiboFormButton\\\"><span class=\\\"fa fa-times\\\"></span></a>\";
            }
        });

        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.search", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\",
                \"data\": function(dataToSend) {
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];
                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.orderable) {
                            data.columns.push(col);
                        } else {
                            data.columns.push({});
                        }
                    });

                    \$.extend(data, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    return data;
                },
                complete: function (response) {

                    if (response.responseJSON.data.exception != '' && response.responseJSON.data.exception != undefined) {
                        let error = response.responseJSON.data.exception;
                        \$(\"#datasets tbody\").html(error)
                    }
                }
            },
            \"columns\": cols
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));

        var dataSetEditFormOpen = _.debounce(function() {
            var data = table.row(\$(this)).data();

            // Load the edit form.
            var editUrl = \"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.edit.form", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\".replace(\":rowId\", data.id);
            XiboFormRender(editUrl);
        }, 500, true);

        // default is Edit mode, hence this should be our onclick event and deleteRows button should be hidden.
        \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);
        \$(\".deleteRowsControl\").hide();

        // Toggle between Edit and Multi Select modes
        // we also switch between two different onclick events depending on the mode and show/hide deleteRows button.
        \$('#toggleMultiSelectMode').on(\"click\", function(e) {
            e.preventDefault();

            if (editMode === 'Edit') {

                editMode = 'multiSelect';
                \$(this).text('Multi Select Mode');
                \$(\"#datasets tbody\").off('click', 'tr');
                \$(\".deleteRowsControl\").show();
                \$('#datasets tbody').on('click', 'tr', (ev) => {

                    // See if element has class already
                    let hasClass = \$(ev.currentTarget).hasClass('selected')

                    // Add class to the clicked one ( or remove it if there was already there )
                    \$(ev.currentTarget).toggleClass('selected', !hasClass);
                });

            } else if (editMode === 'multiSelect') {

                editMode = 'Edit';
                \$(this).text('Edit Mode');
                \$(\".deleteRowsControl\").hide();
                \$(\"#datasets tbody\").off('click', 'tr');
                \$('#datasets tbody tr[role=\"row\"].selected').removeClass('selected');
                \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);
            }
        });

        // get selected rows and their ids then pass it to dataSet data delete ajax call and reload the grid when done.
        \$('#deleteSelectedRows').on(\"click\", function(e) {
            e.preventDefault();

            let rows = [];
            let rowIds = [];
            let processedRows = 0;

            \$('#datasets tbody tr[role=\"row\"].selected').each((idx, ele) => {
                rows.push(table.row(ele).data());
            });

            for (let i = 0; i < rows.length; i++) {
                rowIds.push(rows[i].id);
            }

            rowIds.forEach(function(id) {
                \$.ajax({
                    url: \"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.delete", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\".replace(\":rowId\", id),
                    type: \"DELETE\",
                    success: function (data) {
                        processedRows++;
                        if (processedRows === rowIds.length) {
                            table.ajax.reload();
                        }
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "dataset-dataentry-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 222,  311 => 165,  268 => 125,  253 => 113,  244 => 106,  238 => 105,  226 => 103,  205 => 92,  203 => 91,  192 => 90,  189 => 89,  185 => 88,  176 => 81,  173 => 80,  162 => 74,  154 => 71,  141 => 60,  132 => 58,  128 => 57,  124 => 56,  118 => 53,  112 => 49,  106 => 48,  100 => 46,  97 => 45,  93 => 44,  86 => 40,  81 => 38,  78 => 37,  73 => 36,  70 => 35,  67 => 34,  58 => 29,  50 => 28,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
 * Xibo - Digital Signage - http://www.xibo.org.uk
 * Copyright (C) 2015-2018 Spring Signage Ltd
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a row to the end of this DataSet\" %}\" href=\"{{ urlFor(\"dataSet.data.add.form\", {\"id\": dataSet.dataSetId}) }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Row\" %}</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" href=\"{{ urlFor(\"dataSet.column.view\", {\"id\": dataSet.dataSetId}) }}\"><i class=\"fa fa-columns\" aria-hidden=\"true\"></i> {% trans \"View Columns\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    {% set dataSetName = dataSet.dataSet %}
    {% set widgetTitle %}{% trans %}Data Entry for {{ dataSetName }}{% endtrans %}{% endset %}
    <div class=\"widget\">
        <div class=\"widget-title\">{{ widgetTitle }}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% for col in dataSet.getColumn() %}
                                {% if col.dataSetColumnTypeId == 1 and (col.dataTypeId == 1 or col.dataTypeId == 2) and col.showFilter == 1 %}
                                    {{ inline.input(col.heading, col.heading) }}
                                {% endif %}
                            {% endfor %}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\" data-image-url=\"{{ urlFor(\"library.download\") }}?preview=1&width=150&height=150\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            {% for col in dataSet.getColumn() %}
                                <th>{{ col.heading }}</th>
                            {% endfor %}
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
            <li class=\"btn btn-success btn-xs\"><a class=\"btns toggleMultiSelectMode\" id=\"toggleMultiSelectMode\" style=\"padding: 7px 7px;\" title=\"{% trans \"Click to toggle between Data Edit and Multi Select modes\" %}\" > <i class=\"\" aria-hidden=\"true\"></i> {% trans \"Edit Mode\" %}</a></li>
        </ul>
        <ul class=\"nav nav-pills pull-right deleteRowsControl\" style=\"margin-left: 5px;\">
            <li class=\"btn btn-danger btn-xs\"><a class=\"btns deleteSelectedRows\" id=\"deleteSelectedRows\" style=\"padding: 7px 7px;\" title=\"{% trans \"Click to delete selected rows\" %}\" > <i class=\"\" aria-hidden=\"true\"></i> {% trans \"Delete Selected Rows\" %}</a></li>
        </ul>
    </div>

{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">

        var imageUrl = \$(\"#datasets\").data(\"imageUrl\");
        var cols = [];
        let editMode = 'Edit';

        cols.push({ \"name\": \"id\", \"data\": \"id\" });
        {% for col in dataSet.getColumn() %}
            {% if col.dataTypeId == 3 %}
                cols.push({ \"data\": \"{{ col.heading }}\", \"orderable\": {% if col.showSort == 1 %}true{% else %}false{% endif %}, \"render\": dataTableDateFromIso });
            {% elseif col.dataTypeId == 5 %}
                cols.push({ \"data\": \"{{ col.heading }}\", \"orderable\": {% if col.showSort == 1 %}true{% else %}false{% endif %}, \"render\": function(data, type, row) {
                        if (type != \"display\")
                            return data;

                        if (data == null)
                            return \"\";

                        return '<img src=\"' + imageUrl.replace(\":id\", data) + '\"/>';
                    }
                });
            {% else %}
                cols.push({ \"data\": \"{{ col.heading }}\", \"orderable\": {% if col.showSort == 1 %}true{% else %}false{% endif %} });
            {% endif %}
        {% endfor %}

        cols.push({
            \"orderable\": false,
            \"data\": function(data, type, row, meta) {
                if (type != \"display\")
                    return \"\";

                var url = \"{{ urlFor(\"dataSet.data.delete.form\", {\"id\": dataSet.dataSetId}) }}\".replace(\":rowId\", data.id);

                return \"<a href=\\\"\" + url + \"\\\" class=\\\"XiboFormButton\\\"><span class=\\\"fa fa-times\\\"></span></a>\";
            }
        });

        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"dataSet.data.search\", {id: dataSet.dataSetId}) }}\",
                \"data\": function(dataToSend) {
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];
                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.orderable) {
                            data.columns.push(col);
                        } else {
                            data.columns.push({});
                        }
                    });

                    \$.extend(data, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    return data;
                },
                complete: function (response) {

                    if (response.responseJSON.data.exception != '' && response.responseJSON.data.exception != undefined) {
                        let error = response.responseJSON.data.exception;
                        \$(\"#datasets tbody\").html(error)
                    }
                }
            },
            \"columns\": cols
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));

        var dataSetEditFormOpen = _.debounce(function() {
            var data = table.row(\$(this)).data();

            // Load the edit form.
            var editUrl = \"{{ urlFor(\"dataSet.data.edit.form\", {\"id\": dataSet.dataSetId}) }}\".replace(\":rowId\", data.id);
            XiboFormRender(editUrl);
        }, 500, true);

        // default is Edit mode, hence this should be our onclick event and deleteRows button should be hidden.
        \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);
        \$(\".deleteRowsControl\").hide();

        // Toggle between Edit and Multi Select modes
        // we also switch between two different onclick events depending on the mode and show/hide deleteRows button.
        \$('#toggleMultiSelectMode').on(\"click\", function(e) {
            e.preventDefault();

            if (editMode === 'Edit') {

                editMode = 'multiSelect';
                \$(this).text('Multi Select Mode');
                \$(\"#datasets tbody\").off('click', 'tr');
                \$(\".deleteRowsControl\").show();
                \$('#datasets tbody').on('click', 'tr', (ev) => {

                    // See if element has class already
                    let hasClass = \$(ev.currentTarget).hasClass('selected')

                    // Add class to the clicked one ( or remove it if there was already there )
                    \$(ev.currentTarget).toggleClass('selected', !hasClass);
                });

            } else if (editMode === 'multiSelect') {

                editMode = 'Edit';
                \$(this).text('Edit Mode');
                \$(\".deleteRowsControl\").hide();
                \$(\"#datasets tbody\").off('click', 'tr');
                \$('#datasets tbody tr[role=\"row\"].selected').removeClass('selected');
                \$(\"#datasets tbody\").on('click', 'tr', dataSetEditFormOpen);
            }
        });

        // get selected rows and their ids then pass it to dataSet data delete ajax call and reload the grid when done.
        \$('#deleteSelectedRows').on(\"click\", function(e) {
            e.preventDefault();

            let rows = [];
            let rowIds = [];
            let processedRows = 0;

            \$('#datasets tbody tr[role=\"row\"].selected').each((idx, ele) => {
                rows.push(table.row(ele).data());
            });

            for (let i = 0; i < rows.length; i++) {
                rowIds.push(rows[i].id);
            }

            rowIds.forEach(function(id) {
                \$.ajax({
                    url: \"{{ urlFor(\"dataSet.data.delete\", {\"id\": dataSet.dataSetId}) }}\".replace(\":rowId\", id),
                    type: \"DELETE\",
                    success: function (data) {
                        processedRows++;
                        if (processedRows === rowIds.length) {
                            table.ajax.reload();
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}", "dataset-dataentry-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-dataentry-page.twig");
    }
}
