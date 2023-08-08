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

/* displayprofile-page.twig */
class __TwigTemplate_f879d255afec824a8fce5f1c481e03e12e3b45868b92d30661bf6898c32c702d extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "displayprofile-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "displayprofile-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add a new Display Settings Profile");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.add.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        echo __("Add Profile");
        echo "</a></li>
    </ul>
";
    }

    // line 18
    public function block_pageContent($context, array $blocks = [])
    {
        // line 19
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 20
        echo __("Display Setting Profiles");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"displayProfile\" accesskey=\"\">";
        // line 28
        echo __("Name");
        echo "</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"displayProfile\" type=\"text\" id=\"displayProfile\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"";
        // line 33
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 39
        ob_start();
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                            ";
        ob_start();
        echo __("Android");
        $context["android"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                            ";
        ob_start();
        echo __("Windows");
        $context["windows"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                            ";
        ob_start();
        echo __("webOS");
        $context["webos"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        ob_start();
        echo __("Tizen");
        $context["sssp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                            ";
        ob_start();
        echo __("Linux");
        $context["linux"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "android", "option" =>         // line 47
($context["android"] ?? null)], 2 => ["optionid" => "windows", "option" =>         // line 48
($context["windows"] ?? null)], 3 => ["optionid" => "lg", "option" =>         // line 49
($context["webos"] ?? null)], 4 => ["optionid" => "sssp", "option" =>         // line 50
($context["sssp"] ?? null)], 5 => ["optionid" => "linux", "option" =>         // line 51
($context["linux"] ?? null)]];
        // line 53
        echo "                            ";
        echo $context["inline"]->getdropdown("type", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displayProfiles\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 62
        echo __("Name");
        echo "</th>
                                <th>";
        // line 63
        echo __("Type");
        echo "</th>
                                <th>";
        // line 64
        echo __("Default");
        echo "</th>
                                <th>";
        // line 65
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

    // line 78
    public function block_javaScript($context, array $blocks = [])
    {
        // line 79
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=displayProfileGrid\",
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
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"displayProfileGrid\",
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
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#displayProfiles_wrapper').find('.col-sm-6').eq(1));

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            let \$form = \$(\"#displayProfileForm\");

            // Remove temp fields and enable checkbox after submit
            \$form.submit(function(event) {
                event.preventDefault();

                // Re-enable checkboxes
                \$form.find('input[type=\"checkbox\"]').each(function () {
                    // Enable checkbox
                    \$(this).attr('disabled', false);
                });

                // Remove temp input fields
                \$form.find('input.temp-input').each(function () {
                    \$(this).remove();
                });
            });

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                let value = \$(this).is(':checked') ? 'on' : 'off';
                let id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\" class=\"temp-input\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            // Submit form
            \$form.submit();
        }

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            let \$form = \$(\"#displayProfileForm\");

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                let value = \$(this).is(':checked') ? 'on' : 'off';
                let id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            \$form.submit();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 117,  209 => 104,  189 => 87,  179 => 79,  176 => 78,  160 => 65,  156 => 64,  152 => 63,  148 => 62,  135 => 53,  133 => 51,  132 => 50,  131 => 49,  130 => 48,  129 => 47,  127 => 45,  122 => 44,  117 => 43,  112 => 42,  107 => 41,  102 => 40,  98 => 39,  89 => 33,  81 => 28,  72 => 22,  67 => 20,  64 => 19,  61 => 18,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new Display Settings Profile\" %}\" href=\"{{ urlFor(\"displayProfile.add.form\") }}\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {% trans \"Add Profile\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Display Setting Profiles\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"displayProfile\" accesskey=\"\">{% trans \"Name\" %}</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"displayProfile\" type=\"text\" id=\"displayProfile\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {% set title %}{% trans \"Type\" %}{% endset %}
                            {% set android %}{% trans \"Android\" %}{% endset %}
                            {% set windows %}{% trans \"Windows\" %}{% endset %}
                            {% set webos %}{% trans \"webOS\" %}{% endset %}
                            {% set sssp %}{% trans \"Tizen\" %}{% endset %}
                            {% set linux %}{% trans \"Linux\" %}{% endset %}
                            {% set options = [
                                { optionid: \"\", option: \"\" },
                                { optionid: \"android\", option: android},
                                { optionid: \"windows\", option: windows},
                                { optionid: \"lg\", option: webos},
                                { optionid: \"sssp\", option: sssp},
                                { optionid: \"linux\", option: linux},
                            ] %}
                            {{ inline.dropdown(\"type\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displayProfiles\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Type\" %}</th>
                                <th>{% trans \"Default\" %}</th>
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
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=displayProfileGrid\",
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
                            option: \"displayProfileGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"displayProfile.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#displayProfiles_wrapper').find('.col-sm-6').eq(1));

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            let \$form = \$(\"#displayProfileForm\");

            // Remove temp fields and enable checkbox after submit
            \$form.submit(function(event) {
                event.preventDefault();

                // Re-enable checkboxes
                \$form.find('input[type=\"checkbox\"]').each(function () {
                    // Enable checkbox
                    \$(this).attr('disabled', false);
                });

                // Remove temp input fields
                \$form.find('input.temp-input').each(function () {
                    \$(this).remove();
                });
            });

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                let value = \$(this).is(':checked') ? 'on' : 'off';
                let id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\" class=\"temp-input\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            // Submit form
            \$form.submit();
        }

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            let \$form = \$(\"#displayProfileForm\");

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                let value = \$(this).is(':checked') ? 'on' : 'off';
                let id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            \$form.submit();
        }
    </script>
{% endblock %}
", "displayprofile-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\displayprofile-page.twig");
    }
}
