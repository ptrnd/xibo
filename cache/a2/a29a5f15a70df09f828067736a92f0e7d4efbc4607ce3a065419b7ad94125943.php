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

/* daypart-page.twig */
class __TwigTemplate_4ffed03b19cbb90638c5417955be11c1d8bc610d89a576bcbc484e3ec41d568a extends \Twig\Template
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
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["inline"] = $this->loadTemplate("inline.twig", "daypart-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "daypart-page.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 28
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Daypart");
        echo "</a></li>
    </ul>
";
    }

    // line 33
    public function block_pageContent($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 35
        echo __("Dayparting");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"dayparts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 49
        echo __("Name");
        echo "</th>
                                <th>";
        // line 50
        echo __("Description");
        echo "</th>
                                <th>";
        // line 51
        echo __("Start Time");
        echo "</th>
                                <th>";
        // line 52
        echo __("End Time");
        echo "</th>
                                <th>";
        // line 53
        echo __("Row Menu");
        echo "</th>
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

    // line 66
    public function block_javaScript($context, array $blocks = [])
    {
        // line 67
        echo "    <script type=\"text/javascript\">

        var table = \$(\"#dayparts\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=daypartGrid\",
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"daypartGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#dayparts_wrapper').find('.col-sm-6').eq(1));

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"";
        // line 133
        echo __("Monday");
        echo "\" },
                { day: \"Tue\", title: \"";
        // line 134
        echo __("Tuesday");
        echo "\" },
                { day: \"Wed\", title: \"";
        // line 135
        echo __("Wednesday");
        echo "\" },
                { day: \"Thu\", title: \"";
        // line 136
        echo __("Thursday");
        echo "\" },
                { day: \"Fri\", title: \"";
        // line 137
        echo __("Friday");
        echo "\" },
                { day: \"Sat\", title: \"";
        // line 138
        echo __("Saturday");
        echo "\" },
                { day: \"Sun\", title: \"";
        // line 139
        echo __("Sunday");
        echo "\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            // check if we already have this day in exceptions array, if so remove the row with a message.
            \$exceptions.on(\"change\", \"select\", function() {
                var selectedDays = [];
                \$('select').not('#' + \$(this).attr('id')).each(function(i) {
                    selectedDays.push(\$(this).val());
                });

                if (selectedDays.includes(this.value)) {
                    toastr.error(translations.dayPartExceptionErrorMessage);
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            })
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>
    ";
        // line 253
        echo "
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
                <select class=\"form-control\" name=\"exceptionDays[]\" id=\"exceptionDays_{{ fieldId }}\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#eq day ../exceptionDay}}selected{{/eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionStartTimes[]\" id=\"exceptionStartTimes_{{ fieldId }}\" value=\"{{ exceptionStart }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionStartTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionStartTimesLink_{{ fieldId }}\" data-link-field=\"exceptionStartTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionEndTimes[]\" id=\"exceptionEndTimes_{{ fieldId }}\" value=\"{{ exceptionEnd }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionEndTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionEndTimesLink_{{ fieldId }}\" data-link-field=\"exceptionEndTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-1\">
                <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "daypart-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 253,  221 => 139,  217 => 138,  213 => 137,  209 => 136,  205 => 135,  201 => 134,  197 => 133,  167 => 106,  151 => 93,  131 => 76,  120 => 67,  117 => 66,  101 => 53,  97 => 52,  93 => 51,  89 => 50,  85 => 49,  70 => 37,  65 => 35,  62 => 34,  59 => 33,  50 => 29,  47 => 28,  44 => 27,  39 => 24,  37 => 25,  31 => 24,);
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
 * Copyright (C) 2012-2016 Spring Signage Ltd - http://www.springsignage.com
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
 * (daypart-page.twig)
 */
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"{{ urlFor(\"daypart.add.form\") }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Daypart\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Dayparting\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"dayparts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Start Time\" %}</th>
                                <th>{% trans \"End Time\" %}</th>
                                <th>{% trans \"Row Menu\" %}</th>
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

        var table = \$(\"#dayparts\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=daypartGrid\",
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
                            option: \"daypartGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"daypart.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#dayparts_wrapper').find('.col-sm-6').eq(1));

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"{% trans \"Monday\" %}\" },
                { day: \"Tue\", title: \"{% trans \"Tuesday\" %}\" },
                { day: \"Wed\", title: \"{% trans \"Wednesday\" %}\" },
                { day: \"Thu\", title: \"{% trans \"Thursday\" %}\" },
                { day: \"Fri\", title: \"{% trans \"Friday\" %}\" },
                { day: \"Sat\", title: \"{% trans \"Saturday\" %}\" },
                { day: \"Sun\", title: \"{% trans \"Sunday\" %}\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            // check if we already have this day in exceptions array, if so remove the row with a message.
            \$exceptions.on(\"change\", \"select\", function() {
                var selectedDays = [];
                \$('select').not('#' + \$(this).attr('id')).each(function(i) {
                    selectedDays.push(\$(this).val());
                });

                if (selectedDays.includes(this.value)) {
                    toastr.error(translations.dayPartExceptionErrorMessage);
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            })
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>
    {% raw %}
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
                <select class=\"form-control\" name=\"exceptionDays[]\" id=\"exceptionDays_{{ fieldId }}\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#eq day ../exceptionDay}}selected{{/eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionStartTimes[]\" id=\"exceptionStartTimes_{{ fieldId }}\" value=\"{{ exceptionStart }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionStartTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionStartTimesLink_{{ fieldId }}\" data-link-field=\"exceptionStartTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionEndTimes[]\" id=\"exceptionEndTimes_{{ fieldId }}\" value=\"{{ exceptionEnd }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionEndTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionEndTimesLink_{{ fieldId }}\" data-link-field=\"exceptionEndTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-1\">
                <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    {% endraw %}
{% endblock %}", "daypart-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\daypart-page.twig");
    }
}
