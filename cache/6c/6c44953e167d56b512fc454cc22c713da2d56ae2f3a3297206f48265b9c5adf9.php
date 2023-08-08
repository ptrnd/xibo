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

/* playersoftware-page.twig */
class __TwigTemplate_b9df3f967ae6e8e02ce56589a5c0a497bfc261c91b09f7e61a57d91081d46141 extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "playersoftware-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "playersoftware-page.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 28
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"playerSoftwareUploadForm\" title=\"";
        // line 29
        echo __("Add a new media item to the player software library");
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Version");
        echo "</a></li>
    </ul>
";
    }

    // line 34
    public function block_pageContent($context, array $blocks = [])
    {
        // line 35
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 36
        echo __("Player Software");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"playerSoftwareView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 42
        ob_start();
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        ob_start();
        echo __("Android");
        $context["android"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                            ";
        ob_start();
        echo __("Windows");
        $context["windows"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        ob_start();
        echo __("webOS");
        $context["webos"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        ob_start();
        echo __("Tizen");
        $context["sssp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "android", "option" =>         // line 49
($context["android"] ?? null)], 2 => ["optionid" => "windows", "option" =>         // line 50
($context["windows"] ?? null)], 3 => ["optionid" => "lg", "option" =>         // line 51
($context["webos"] ?? null)], 4 => ["optionid" => "sssp", "option" =>         // line 52
($context["sssp"] ?? null)]];
        // line 54
        echo "                            ";
        echo $context["inline"]->getdropdown("playerType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                            ";
        // line 56
        ob_start();
        echo __("Version");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                            ";
        echo $context["inline"]->getdropdown("playerVersion", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["version" => null, "version" => null]], ($context["versions"] ?? null)), "version", "version");
        echo "

                            ";
        // line 59
        ob_start();
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                            ";
        echo $context["inline"]->getinput("playerCode", ($context["title"] ?? null));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"playerSoftwareItems\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 68
        echo __("Version ID");
        echo "</th>
                            <th>";
        // line 69
        echo __("Player Version Name");
        echo "</th>
                            <th>";
        // line 70
        echo __("Type");
        echo "</th>
                            <th>";
        // line 71
        echo __("Version");
        echo "</th>
                            <th>";
        // line 72
        echo __("Code");
        echo "</th>
                            <th>";
        // line 73
        echo __("Media ID");
        echo "</th>
                            <th>";
        // line 74
        echo __("Original File Name");
        echo "</th>
                            <th>";
        // line 75
        echo __("Permissions");
        echo "</th>
                            <th>";
        // line 76
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

    // line 89
    public function block_javaScript($context, array $blocks = [])
    {
        // line 90
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#playerSoftwareItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=playerSoftwareGrid\",
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
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"playerSoftwareGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[2, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playersoftware.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playerSoftwareItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"versionId\"},
                    {\"data\": \"playerShowVersion\" },
                    {\"data\": \"type\"},
                    {\"data\": \"version\"},
                    {\"data\": \"code\"},
                    {\"data\": \"mediaId\"},
                    {\"data\": \"originalFileName\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ],

                createdRow: function (row, data, index) {
                    if (data.version === \"\" || data.version === null || data.code === 0) {
                        \$(row).addClass('danger');
                        \$(row).attr('Title', \"";
        // line 157
        echo twig_escape_filter($this->env, ($context["warningLabel"] ?? null), "html", null, true);
        echo "\");
                    }
                },
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playerSoftwareItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#playerSoftwareUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"";
        // line 172
        echo __("Add files");
        echo "\",
                    startUpload: \"";
        // line 173
        echo __("Start upload");
        echo "\",
                    cancelUpload: \"";
        // line 174
        echo __("Cancel upload");
        echo "\",
                    processing: \"";
        // line 175
        echo __("Processing...");
        echo "\"
                },
                upload: {
                    maxSize: ";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo ",
                    maxSizeMessage: \"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSizeMessage", []), "html", null, true);
        echo "\",
                    validExt: \"";
        // line 180
        echo twig_escape_filter($this->env, ($context["validExt"] ?? null), "html", null, true);
        echo "\"
                }
            });
        });

        /**
         * Opens the upload form
         * @param templateOptions
         */
        function openUploadForm(templateOptions) {

            var template = Handlebars.compile(\$(\"#template-file-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template(templateOptions),
                title: \"";
        // line 196
        echo __("Upload Version");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 199
        echo __("Done");
        echo "\",
                        className: \"btn-primary\",
                        callback: function() {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\";
                var form = \$(this).find(\"form\");
                var options = {
                    url: url,
                    disableImageResize: true,
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                };
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                if(templateOptions.oldMediaId === undefined || templateOptions.oldMediaId === null) {
                    form.fileupload(options);
                } else {
                    options = \$.extend({}, options, {
                        maxNumberOfFiles: 1,
                        limitMultiFileUploads: 1
                    });
                    form.fileupload(options);
                }

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                            .text('Upload server currently unavailable - ' + new Date())
                            .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                    'option',
                    'redirect',
                    window.location.href.replace(
                        /\\/[^\\/]*\$/,
                        '/cors/result.html?%s'
                    )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                }).bind('fileuploadstart', function (e, data) {
                    // Show progress data
                    form.find('.fileupload-progress .progress-extended').show();
                    form.find('.fileupload-progress .progress-end').hide();
                                        
                    if (form.fileupload(\"active\") <= 0)
                        refreshSessionInterval = setInterval(\"XiboPing('\" + pingUrl + \"?refreshSession=true')\", 1000 * 60 * 3);

                    return true;
                }).bind('fileuploaddone', function (e, data) {
                    if (refreshSessionInterval != null && form.fileupload(\"active\") <= 0)
                        clearInterval(refreshSessionInterval);
                    if (templateOptions.oldMediaId !== undefined && templateOptions.oldMediaId !== null) {
                        XiboDialogClose();
                        table.ajax.reload();
                    }
                }).bind('fileuploadprogressall', function (e, data) {
                    // Hide progress data and show processing
                    if(data.total > 0 && data.loaded == data.total) {
                        form.find('.fileupload-progress .progress-extended').hide();
                        form.find('.fileupload-progress .progress-end').show();
                    }
                }).bind('fileuploadadded fileuploadcompleted fileuploadfinished', function (e, data) {
                    // Get uploaded and downloaded files and toggle Done button
                    var filesToUploadCount = form.find('tr.template-upload').length;
                    var \$button = form.parents('.modal:first').find('button[data-bb-handler=\"main\"]');

                    if(filesToUploadCount == 0) {
                        \$button.removeAttr('disabled');
                    } else {
                        \$button.attr('disabled', 'disabled');
                    }
                });
            });
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "playersoftware-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 209,  338 => 199,  332 => 196,  313 => 180,  309 => 179,  305 => 178,  299 => 175,  295 => 174,  291 => 173,  287 => 172,  269 => 157,  240 => 131,  224 => 118,  204 => 101,  191 => 90,  188 => 89,  172 => 76,  168 => 75,  164 => 74,  160 => 73,  156 => 72,  152 => 71,  148 => 70,  144 => 69,  140 => 68,  128 => 60,  124 => 59,  118 => 57,  114 => 56,  108 => 54,  106 => 52,  105 => 51,  104 => 50,  103 => 49,  101 => 47,  96 => 46,  91 => 45,  86 => 44,  81 => 43,  77 => 42,  70 => 38,  65 => 36,  62 => 35,  59 => 34,  50 => 29,  47 => 28,  44 => 27,  39 => 24,  37 => 25,  31 => 24,);
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
/**
* Copyright (C) 2018 Xibo Signage Ltd
*
* Xibo - Digital Signage - http://www.xibo.org.uk
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
*/
#}

{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"playerSoftwareUploadForm\" title=\"{% trans \"Add a new media item to the player software library\" %}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Version\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Player Software\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"playerSoftwareView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Type\" %}{% endset %}
                            {% set android %}{% trans \"Android\" %}{% endset %}
                            {% set windows %}{% trans \"Windows\" %}{% endset %}
                            {% set webos %}{% trans \"webOS\" %}{% endset %}
                            {% set sssp %}{% trans \"Tizen\" %}{% endset %}
                            {% set options = [
                                { optionid: \"\", option: \"\" },
                                { optionid: \"android\", option: android},
                                { optionid: \"windows\", option: windows},
                                { optionid: \"lg\", option: webos},
                                { optionid: \"sssp\", option: sssp}
                            ] %}
                            {{ inline.dropdown(\"playerType\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                            {% set title %}{% trans \"Version\" %}{% endset %}
                            {{ inline.dropdown(\"playerVersion\", \"single\", title, \"\", [{\"version\": none, \"version\": none}]|merge(versions), \"version\", \"version\") }}

                            {% set title %}{% trans \"Code\" %}{% endset %}
                            {{ inline.input(\"playerCode\", title) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"playerSoftwareItems\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"Version ID\" %}</th>
                            <th>{% trans \"Player Version Name\" %}</th>
                            <th>{% trans \"Type\" %}</th>
                            <th>{% trans \"Version\" %}</th>
                            <th>{% trans \"Code\" %}</th>
                            <th>{% trans \"Media ID\" %}</th>
                            <th>{% trans \"Original File Name\" %}</th>
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
        var table;
        \$(document).ready(function() {
            table = \$(\"#playerSoftwareItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=playerSoftwareGrid\",
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
                                option: \"playerSoftwareGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[2, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"playersoftware.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playerSoftwareItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"versionId\"},
                    {\"data\": \"playerShowVersion\" },
                    {\"data\": \"type\"},
                    {\"data\": \"version\"},
                    {\"data\": \"code\"},
                    {\"data\": \"mediaId\"},
                    {\"data\": \"originalFileName\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ],

                createdRow: function (row, data, index) {
                    if (data.version === \"\" || data.version === null || data.code === 0) {
                        \$(row).addClass('danger');
                        \$(row).attr('Title', \"{{ warningLabel }}\");
                    }
                },
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playerSoftwareItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#playerSoftwareUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"{% trans \"Add files\" %}\",
                    startUpload: \"{% trans \"Start upload\" %}\",
                    cancelUpload: \"{% trans \"Cancel upload\" %}\",
                    processing: \"{% trans \"Processing...\" %}\"
                },
                upload: {
                    maxSize: {{ libraryUpload.maxSize }},
                    maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                    validExt: \"{{ validExt }}\"
                }
            });
        });

        /**
         * Opens the upload form
         * @param templateOptions
         */
        function openUploadForm(templateOptions) {

            var template = Handlebars.compile(\$(\"#template-file-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template(templateOptions),
                title: \"{% trans \"Upload Version\" %}\",
                buttons: {
                    main: {
                        label: \"{% trans \"Done\" %}\",
                        className: \"btn-primary\",
                        callback: function() {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"{{ urlFor(\"library.add\") }}\";
                var form = \$(this).find(\"form\");
                var options = {
                    url: url,
                    disableImageResize: true,
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                };
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                if(templateOptions.oldMediaId === undefined || templateOptions.oldMediaId === null) {
                    form.fileupload(options);
                } else {
                    options = \$.extend({}, options, {
                        maxNumberOfFiles: 1,
                        limitMultiFileUploads: 1
                    });
                    form.fileupload(options);
                }

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                            .text('Upload server currently unavailable - ' + new Date())
                            .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                    'option',
                    'redirect',
                    window.location.href.replace(
                        /\\/[^\\/]*\$/,
                        '/cors/result.html?%s'
                    )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                }).bind('fileuploadstart', function (e, data) {
                    // Show progress data
                    form.find('.fileupload-progress .progress-extended').show();
                    form.find('.fileupload-progress .progress-end').hide();
                                        
                    if (form.fileupload(\"active\") <= 0)
                        refreshSessionInterval = setInterval(\"XiboPing('\" + pingUrl + \"?refreshSession=true')\", 1000 * 60 * 3);

                    return true;
                }).bind('fileuploaddone', function (e, data) {
                    if (refreshSessionInterval != null && form.fileupload(\"active\") <= 0)
                        clearInterval(refreshSessionInterval);
                    if (templateOptions.oldMediaId !== undefined && templateOptions.oldMediaId !== null) {
                        XiboDialogClose();
                        table.ajax.reload();
                    }
                }).bind('fileuploadprogressall', function (e, data) {
                    // Hide progress data and show processing
                    if(data.total > 0 && data.loaded == data.total) {
                        form.find('.fileupload-progress .progress-extended').hide();
                        form.find('.fileupload-progress .progress-end').show();
                    }
                }).bind('fileuploadadded fileuploadcompleted fileuploadfinished', function (e, data) {
                    // Get uploaded and downloaded files and toggle Done button
                    var filesToUploadCount = form.find('tr.template-upload').length;
                    var \$button = form.parents('.modal:first').find('button[data-bb-handler=\"main\"]');

                    if(filesToUploadCount == 0) {
                        \$button.removeAttr('disabled');
                    } else {
                        \$button.attr('disabled', 'disabled');
                    }
                });
            });
        }

    </script>
{% endblock %}", "playersoftware-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\playersoftware-page.twig");
    }
}
