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

/* stats-library-page.twig */
class __TwigTemplate_9e5f2f69e9482fa2a97e35ee2f6d0cabfc96df2753ba481ff4c995805d11304e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $context["inline"] = $this->loadTemplate("inline.twig", "stats-library-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "stats-library-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 16
        echo __("Library Usage");
        echo "</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                        <div class=\"XiboFilter well\">
                            <div class=\"FilterDiv\" id=\"Filter\">
                                <form class=\"form-inline\">
                                    ";
        // line 22
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""]];
        // line 27
        echo "
                                    ";
        // line 28
        ob_start();
        echo __("User");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                                    ";
        $context["userFilterOptions"] = twig_array_merge([0 => ["userId" => null, "user" => ""]], ($context["users"] ?? null));
        // line 30
        echo "                                    ";
        echo $context["inline"]->getdropdown("userId", "single", ($context["title"] ?? null), "", ($context["userFilterOptions"] ?? null), "userId", "userName", "", "selectPicker", "", "u", "", ($context["attributes"] ?? null));
        echo "

                                    ";
        // line 32
        ob_start();
        echo __("User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                                    ";
        $context["groupFilterOptions"] = twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null));
        // line 34
        echo "                                    ";
        echo $context["inline"]->getdropdown("groupId", "single", ($context["title"] ?? null), "", ($context["groupFilterOptions"] ?? null), "groupId", "group", "", "selectPicker", "", "g", "", ($context["attributes"] ?? null));
        echo "
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <table id=\"libraryUsage\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 42
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 43
        echo __("User");
        echo "</th>
                                        <th>";
        // line 44
        echo __("Usage");
        echo "</th>
                                        <th>";
        // line 45
        echo __("Count Files");
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
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 63
        if ((($context["libraryLimitSet"] ?? null) != "")) {
            // line 64
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => ($context["libraryLimit"] ?? null), ));
            // line 65
            echo "                    ";
        } else {
            // line 66
            echo "                        ";
            echo __("Library Usage");
            // line 67
            echo "                    ";
        }
        // line 68
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-user\"></i>
                    ";
        // line 79
        echo __("User Percentage Usage");
        // line 80
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"userChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 91
    public function block_javaScript($context, array $blocks = [])
    {
        // line 92
        echo "    <script type=\"text/javascript\">
        var userChart = null;

        var table = \$(\"#libraryUsage\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true, stateDuration: 0,
            filter: false,
            searchDelay: 3000,
            ajax: {
                url: \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.library.grid"), "html", null, true);
        echo "\",
                data: function (d) {
                    \$.extend(d, \$(\"#libraryUsage\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { data: \"userId\" },
                { data: \"userName\" },
                { data: \"bytesUsedFormatted\" },
                { data: \"numFiles\" }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', function(e, settings, processing) {
            dataTableProcessing(e, settings, processing);

            if (!processing) {
                // Render a pie chart
                if (userChart !== undefined && userChart !== null) {
                    console.log('Destroying Chart');
                    userChart.destroy();
                }

                // Organise our rows into datasets for the chart
                var totalSize = 0;
                var userData = new Array();
                var userLabels = new Array();

                \$.each(table.data(), function(index, el) {
                    totalSize += el.bytesUsed;
                });

                \$.each(table.data(), function(index, el) {
                    userData.push(((el.bytesUsed/totalSize)*100).toFixed(2));
                    userLabels.push(el.userName);
                });

                var colours = new Array();
                for(var i = 0; i < userData.length; i++) {
                    colours.push(\$c.rand());
                }

                userChart = new Chart(\$(\"#userChart\"), {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: userData,
                            backgroundColor: colours
                        }],
                        labels: userLabels
                    },
                    options: {
                        maintainAspectRatio: false
                    }
                });
            }
        });

        // Create a lovely library pie chart
        var libraryData = ";
        // line 162
        echo ($context["libraryWidgetData"] ?? null);
        echo ";
        var colours = new Array();
        for(var i = 0; i < libraryData.length; i++) {
            colours.push(\$c.rand());
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: ";
        // line 174
        echo ($context["libraryWidgetLabels"] ?? null);
        echo "
            },
            options: {
                maintainAspectRatio: false
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "stats-library-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 174,  253 => 162,  190 => 102,  178 => 92,  175 => 91,  162 => 80,  160 => 79,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  133 => 63,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  88 => 34,  85 => 33,  81 => 32,  75 => 30,  72 => 29,  68 => 28,  65 => 27,  63 => 22,  56 => 18,  51 => 16,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
 * Copyright (C) 2017 Spring Signage Ltd
 * (stats-library-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"Library Usage\" %}</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"{{ random() }}\">
                        <div class=\"XiboFilter well\">
                            <div class=\"FilterDiv\" id=\"Filter\">
                                <form class=\"form-inline\">
                                    {% set attributes = [
                                        { name: \"data-allow-clear\", value: \"true\" },
                                        { name: \"data-placeholder--id\", value: null },
                                        { name: \"data-placeholder--value\", value: \"\" }
                                    ] %}

                                    {% set title %}{% trans \"User\" %}{% endset %}
                                    {% set userFilterOptions = [{userId: null, user: \"\"}]|merge(users) %}
                                    {{ inline.dropdown(\"userId\", \"single\", title, \"\", userFilterOptions, \"userId\", \"userName\", \"\", \"selectPicker\", \"\", \"u\", \"\", attributes) }}

                                    {% set title %}{% trans \"User Group\" %}{% endset %}
                                    {% set groupFilterOptions = [{groupId: null, group: \"\"}]|merge(groups) %}
                                    {{ inline.dropdown(\"groupId\", \"single\", title, \"\", groupFilterOptions, \"groupId\", \"group\", \"\", \"selectPicker\", \"\", \"g\", \"\", attributes) }}
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <table id=\"libraryUsage\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>{% trans \"ID\" %}</th>
                                        <th>{% trans \"User\" %}</th>
                                        <th>{% trans \"Usage\" %}</th>
                                        <th>{% trans \"Count Files\" %}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    {% if libraryLimitSet != \"\" %}
                        {% trans %}Library Usage. Limit {{ libraryLimit }}{% endtrans %}
                    {% else %}
                        {% trans \"Library Usage\" %}
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-user\"></i>
                    {% trans \"User Percentage Usage\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"userChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        var userChart = null;

        var table = \$(\"#libraryUsage\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true, stateDuration: 0,
            filter: false,
            searchDelay: 3000,
            ajax: {
                url: \"{{ urlFor(\"stats.library.grid\") }}\",
                data: function (d) {
                    \$.extend(d, \$(\"#libraryUsage\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { data: \"userId\" },
                { data: \"userName\" },
                { data: \"bytesUsedFormatted\" },
                { data: \"numFiles\" }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', function(e, settings, processing) {
            dataTableProcessing(e, settings, processing);

            if (!processing) {
                // Render a pie chart
                if (userChart !== undefined && userChart !== null) {
                    console.log('Destroying Chart');
                    userChart.destroy();
                }

                // Organise our rows into datasets for the chart
                var totalSize = 0;
                var userData = new Array();
                var userLabels = new Array();

                \$.each(table.data(), function(index, el) {
                    totalSize += el.bytesUsed;
                });

                \$.each(table.data(), function(index, el) {
                    userData.push(((el.bytesUsed/totalSize)*100).toFixed(2));
                    userLabels.push(el.userName);
                });

                var colours = new Array();
                for(var i = 0; i < userData.length; i++) {
                    colours.push(\$c.rand());
                }

                userChart = new Chart(\$(\"#userChart\"), {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: userData,
                            backgroundColor: colours
                        }],
                        labels: userLabels
                    },
                    options: {
                        maintainAspectRatio: false
                    }
                });
            }
        });

        // Create a lovely library pie chart
        var libraryData = {{ libraryWidgetData|raw }};
        var colours = new Array();
        for(var i = 0; i < libraryData.length; i++) {
            colours.push(\$c.rand());
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: {{ libraryWidgetLabels|raw }}
            },
            options: {
                maintainAspectRatio: false
            }
        });
    </script>
{% endblock %}", "stats-library-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\stats-library-page.twig");
    }
}
