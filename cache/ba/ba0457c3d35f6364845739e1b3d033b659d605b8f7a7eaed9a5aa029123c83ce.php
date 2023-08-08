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

/* command-page.twig */
class __TwigTemplate_7bf2327746fc213d28c30b87b90fd2931ecc2b4f29ce35c2db9346d0f24dcfba extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "command-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "command-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("command.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> ";
        echo __("Add Command");
        echo "</a></li>
    </ul>
";
    }

    // line 19
    public function block_pageContent($context, array $blocks = [])
    {
        // line 20
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 21
        echo __("Commands");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"commands\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 35
        echo __("Name");
        echo "</th>
                                <th>";
        // line 36
        echo __("Code");
        echo "</th>
                                <th>";
        // line 37
        echo __("Description");
        echo "</th>
                                <th>";
        // line 38
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 39
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

    // line 52
    public function block_javaScript($context, array $blocks = [])
    {
        // line 53
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#commands\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=commandGrid\",
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"commandGrid\",
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("command.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#commands\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"command\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"code\" },
                { \"data\": \"description\" },
                {
                    \"data\": \"groupsWithPermissions\",
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#commands_wrapper').find('.col-sm-6').eq(1));
    </script>
";
    }

    public function getTemplateName()
    {
        return "command-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 91,  150 => 78,  130 => 61,  120 => 53,  117 => 52,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  70 => 23,  65 => 21,  62 => 20,  59 => 19,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"{{ urlFor(\"command.add.form\") }}\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> {% trans \"Add Command\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Commands\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"commands\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Code\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
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
        var table = \$(\"#commands\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=commandGrid\",
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
                            option: \"commandGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"command.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#commands\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"command\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"code\" },
                { \"data\": \"description\" },
                {
                    \"data\": \"groupsWithPermissions\",
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#commands_wrapper').find('.col-sm-6').eq(1));
    </script>
{% endblock %}", "command-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\command-page.twig");
    }
}
