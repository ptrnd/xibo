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

/* resolution-page.twig */
class __TwigTemplate_cb4982c7abc08b18e0ec634a667671dc8b478041bf20f98d51b52814ad79dc75 extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "resolution-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "resolution-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add a new resolution for use on layouts");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.add.form"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus-sign\"></span> ";
        echo __("Add Resolution");
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
        echo __("Resolution");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"resolutionView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 27
        ob_start();
        echo __("Enabled");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                            ";
        ob_start();
        echo __("Yes");
        $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                            ";
        ob_start();
        echo __("No");
        $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                            ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 31
        echo "                            ";
        echo $context["inline"]->getdropdown("enabled", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"resolutions\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 39
        echo __("ID");
        echo "</th>
                                <th>";
        // line 40
        echo __("Resolution");
        echo "</th>
                                <th>";
        // line 41
        echo __("Width");
        echo "</th>
                                <th>";
        // line 42
        echo __("Height");
        echo "</th>
                                <th>";
        // line 43
        echo __("Enabled?");
        echo "</th>
                                <th>";
        // line 44
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

    // line 57
    public function block_javaScript($context, array $blocks = [])
    {
        // line 58
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#resolutions\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=resolutionGrid\",
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"resolutionGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#resolutions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"resolutionId\"},
                    {\"data\": \"resolution\"},
                    {\"data\": \"width\"},
                    {\"data\": \"height\"},
                    {\"data\": \"enabled\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#resolutions_wrapper').find('.col-sm-6').eq(1));
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "resolution-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 98,  179 => 85,  159 => 68,  147 => 58,  144 => 57,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  96 => 31,  93 => 30,  88 => 29,  83 => 28,  79 => 27,  72 => 23,  67 => 21,  64 => 20,  61 => 19,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
 * (resolution-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new resolution for use on layouts\" %}\" href=\"{{ urlFor(\"resolution.add.form\") }}\"><span class=\"glyphicon glyphicon-plus-sign\"></span> {% trans \"Add Resolution\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Resolution\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"resolutionView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Enabled\" %}{% endset %}
                            {% set option1 %}{% trans \"Yes\" %}{% endset %}
                            {% set option2 %}{% trans \"No\" %}{% endset %}
                            {% set values = [{id: 1, value: option1}, {id: 0, value: option2}] %}
                            {{ inline.dropdown(\"enabled\", \"single\", title, 1, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"resolutions\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Resolution\" %}</th>
                                <th>{% trans \"Width\" %}</th>
                                <th>{% trans \"Height\" %}</th>
                                <th>{% trans \"Enabled?\" %}</th>
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
        \$(document).ready(function() {
            var table = \$(\"#resolutions\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=resolutionGrid\",
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
                                option: \"resolutionGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"resolution.search\") }}\",
                    data: function (d) {
                        \$.extend(d, \$(\"#resolutions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"resolutionId\"},
                    {\"data\": \"resolution\"},
                    {\"data\": \"width\"},
                    {\"data\": \"height\"},
                    {\"data\": \"enabled\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#resolutions_wrapper').find('.col-sm-6').eq(1));
        });
    </script>
{% endblock %}", "resolution-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\resolution-page.twig");
    }
}
