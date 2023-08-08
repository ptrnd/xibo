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

/* library-page.twig */
class __TwigTemplate_36abdbcf93f17962445468e49ffee7e91a399af74248d5dec6b02c06db80fb66 extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "library-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "library-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"libraryUploadForm\" title=\"";
        // line 14
        echo __("Add a new media item to the library");
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Media");
        echo "</a></li>
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 15
        echo __("Add a new media item to the library via external URL");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.uploadUrl.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add media (URL)");
        echo "</a></li>

        ";
        // line 17
        if (($this->getAttribute(($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", []) == 1)) {
            // line 18
            echo "            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.tidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</a></li>
        ";
        }
        // line 20
        echo "    </ul>
";
    }

    // line 24
    public function block_pageContent($context, array $blocks = [])
    {
        // line 25
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 26
        echo __("Library");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 32
        ob_start();
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                            ";
        echo $context["inline"]->getnumber("mediaId", ($context["title"] ?? null));
        echo "

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"media\" accesskey=\"\">";
        // line 36
        echo __("Name");
        echo "</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"media\" type=\"text\" id=\"media\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"";
        // line 41
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 47
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        ob_start();
        echo __("Exact match?");
        $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                            ";
        echo $context["inline"]->getinputWithTags("tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null));
        echo "

                            ";
        // line 52
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""]];
        // line 57
        echo "
                            ";
        // line 58
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                            ";
        $context["users"] = twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null));
        // line 60
        echo "                            ";
        echo $context["inline"]->getdropdown("ownerId", "single", ($context["title"] ?? null), null, ($context["users"] ?? null), "userId", "userName", "", "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                            ";
        // line 62
        ob_start();
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                            ";
        ob_start();
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                            ";
        echo $context["inline"]->getdropdown("ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                            ";
        // line 66
        ob_start();
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                            ";
        echo $context["inline"]->getdropdown("type", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["type" => null, "name" => ""]], ($context["modules"] ?? null)), "type", "name");
        echo "

                            ";
        // line 69
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                            ";
        $context["values"] = [0 => ["id" => 1, "value" => "Yes"], 1 => ["id" => 0, "value" => "No"]];
        // line 71
        echo "                            ";
        echo $context["inline"]->getdropdown("retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value");
        echo "

                            ";
        // line 73
        ob_start();
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                            ";
        echo $context["inline"]->getnumber("layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"libraryItems\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 82
        echo __("ID");
        echo "</th>
                                <th>";
        // line 83
        echo __("Name");
        echo "</th>
                                <th>";
        // line 84
        echo __("Type");
        echo "</th>
                                <th>";
        // line 85
        echo __("Tag");
        echo "</th>
                                <th>";
        // line 86
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 87
        echo __("Duration");
        echo "</th>
                                <th>";
        // line 88
        echo __("Duration (seconds)");
        echo "</th>
                                <th>";
        // line 89
        echo __("Size");
        echo "</th>
                                <th>";
        // line 90
        echo __("Size (bytes)");
        echo "</th>
                                <th>";
        // line 91
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 92
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 93
        echo __("Revised");
        echo "</th>
                                <th>";
        // line 94
        echo __("Released");
        echo "</th>
                                <th>";
        // line 95
        echo __("File Name");
        echo "</th>
                                <th>";
        // line 96
        echo __("Stats?");
        echo "</th>
                                <th>";
        // line 97
        echo __("Created");
        echo "</th>
                                <th>";
        // line 98
        echo __("Modified");
        echo "</th>
                                <th>";
        // line 99
        echo __("Expires");
        echo "</th>
                                <th>";
        // line 100
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

    // line 113
    public function block_javaScript($context, array $blocks = [])
    {
        // line 114
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=libraryGrid\",
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
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"libraryGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\"},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                    {\"data\": \"mediaType\"},
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"mediaId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"mediaId\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    {\"data\": \"duration\", \"visible\": false},
                    {
                        \"name\": \"fileSize\",
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false},
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {
                        \"name\": \"released\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.released;

                            var icon = \"\";
                            if (data.released == 1)
                                icon = \"fa-check\";
                            else if (data.released == 0)
                                icon = \"fa-cogs\";
                            else if (data.released == 2)
                                icon = \"fa-times\";


                            return \"<span class='fa \" + icon + \"' title='\" + (data.releasedDescription) + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {\"data\": \"fileName\"},
                    {
                        \"name\": \"enableStat\",
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 'On')
                                icon = \"fa-check\";
                            else if (data.enableStat == 'Off')
                                icon = \"fa-times\";
                            else
                                icon = \"fa-level-down\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.enableStatDescription) + \"'></span>\";
                        }
                    },
                    {
                        \"data\": \"createdDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"name\": \"expires\",
                        \"data\": function (data, type) {
                            if (data.expires != null && data.expires != 0) {
                                let now = moment();
                                let expiresIn = moment.unix(data.expires);
                                let differenceMinutes = expiresIn.diff(now, 'minutes');
                                let momentDifference = moment(now).to(expiresIn);

                                if (differenceMinutes < -10 ) {
                                    return data.mediaExpiryFailed;
                                } else {
                                    return data.mediaExpiresIn.replace('%s', momentDifference);
                                }
                            } else {
                                return data.mediaNoExpiryDate;
                            }

                        }
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"";
        // line 279
        echo __("Add files");
        echo "\",
                    startUpload: \"";
        // line 280
        echo __("Start upload");
        echo "\",
                    cancelUpload: \"";
        // line 281
        echo __("Cancel upload");
        echo "\"
                },
                upload: {
                    maxSize: ";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo ",
                    maxSizeMessage: \"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSizeMessage", []), "html", null, true);
        echo "\",
                    validExt: \"";
        // line 286
        echo twig_escape_filter($this->env, ($context["validExt"] ?? null), "html", null, true);
        echo "\"
                },
                updateInAllChecked: ";
        // line 288
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                deleteOldRevisionsChecked: ";
        // line 289
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 290
        echo "            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"";
        // line 303
        echo __("Replace");
        echo "\");
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    oldMediaId: mediaId,
                    updateInAllChecked: ";
        // line 310
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 311
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    trans: {
                        addFiles: \"";
        // line 313
        echo __("Add Replacement");
        echo "\",
                        startUpload: \"";
        // line 314
        echo __("Start Replace");
        echo "\",
                        cancelUpload: \"";
        // line 315
        echo __("Cancel Replace");
        echo "\",
                        updateInLayouts: {
                            title: \"";
        // line 317
        echo __("Update this media in all layouts it is assigned to?");
        echo "\",
                            helpText: \"";
        // line 318
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        echo "\"
                        },
                        deleteOldRevisions: {
                            title: \"";
        // line 321
        echo __("Delete the old version?");
        echo "\",
                            helpText: \"";
        // line 322
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        echo "\"
                        }
                    },
                    upload: {
                        maxSize: ";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSizeMessage", []), "html", null, true);
        echo "\",
                        validExt: validExtensions
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

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
        // line 347
        echo __("Upload media");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 350
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
        // line 360
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

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.usage"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            \$(\"#mediaEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#mediaEventDateLink\").val(\"\")
                \$(\"#mediaEventDate\").val(\"\");
                \$(\"#mediaEventDateLink\").datetimepicker(\"update\");
                usageTable.ajax.reload();
            });

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.usage.layouts"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);

            // Tidy up timepickers on modal close
            if(dialog.hasClass('modal')) {
                dialog.on(\"hide.bs.modal\", function(e) {
                    if(e.namespace === 'bs.modal') {
                            // Remove colour pickers
                            dialog.find(\"#mediaEventDateLink\").datetimepicker('remove');
                    }
                });
            }
        }

        function setDefaultMultiSelectFormOpen(dialog) {
            ";
        // line 530
        $context["message"] = "Force delete from any existing layouts, assignments, etc";
        // line 531
        echo "
            var \$input = \$('<input type=checkbox id=\"forceDelete\" name=\"forceDelete\"> ";
        // line 532
        echo twig_escape_filter($this->env, __(($context["message"] ?? null)));
        echo " </input>');
            \$input.on('change', function() {
                dialog.data().commitData = {forceDelete: \$(this).val()};
            });
            \$(dialog).find('.modal-body').append(\$input);
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 542
        echo __("Off");
        echo "</option>' +
                '<option value=\"On\">";
        // line 543
        echo __("On");
        echo "</option>' +
                '<option value=\"Inherit\">";
        // line 544
        echo __("Inherit");
        echo "</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "library-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 544,  851 => 543,  847 => 542,  834 => 532,  831 => 531,  829 => 530,  798 => 502,  754 => 461,  650 => 360,  637 => 350,  631 => 347,  608 => 327,  604 => 326,  597 => 322,  593 => 321,  587 => 318,  583 => 317,  578 => 315,  574 => 314,  570 => 313,  561 => 311,  553 => 310,  543 => 303,  528 => 290,  522 => 289,  514 => 288,  509 => 286,  505 => 285,  501 => 284,  495 => 281,  491 => 280,  487 => 279,  360 => 155,  344 => 142,  324 => 125,  311 => 114,  308 => 113,  292 => 100,  288 => 99,  284 => 98,  280 => 97,  276 => 96,  272 => 95,  268 => 94,  264 => 93,  260 => 92,  256 => 91,  252 => 90,  248 => 89,  244 => 88,  240 => 87,  236 => 86,  232 => 85,  228 => 84,  224 => 83,  220 => 82,  208 => 74,  204 => 73,  198 => 71,  195 => 70,  191 => 69,  185 => 67,  181 => 66,  175 => 64,  170 => 63,  166 => 62,  160 => 60,  157 => 59,  153 => 58,  150 => 57,  148 => 52,  142 => 50,  137 => 49,  132 => 48,  128 => 47,  119 => 41,  111 => 36,  104 => 33,  100 => 32,  93 => 28,  88 => 26,  85 => 25,  82 => 24,  77 => 20,  67 => 18,  65 => 17,  56 => 15,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
 * (library-page)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"libraryUploadForm\" title=\"{% trans \"Add a new media item to the library\" %}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Media\" %}</a></li>
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new media item to the library via external URL\" %}\" href=\"{{ urlFor(\"library.uploadUrl.form\") }}\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add media (URL)\" %}</a></li>

        {% if settings.SETTING_LIBRARY_TIDY_ENABLED == 1 %}
            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Run through the library and remove unused and unnecessary files\" %}\" href=\"{{ urlFor(\"library.tidy.form\") }}\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {% trans \"Tidy Library\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Library\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"ID\" %}{% endset %}
                            {{ inline.number(\"mediaId\", title) }}

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"media\" accesskey=\"\">{% trans \"Name\" %}</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"media\" type=\"text\" id=\"media\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {% set title %}{% trans \"Tags\" %}{% endset %}
                            {% set exactTagTitle %}{% trans \"Exact match?\" %}{% endset %}
                            {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.\" %}{% endset %}
                            {{ inline.inputWithTags(\"tags\", title, null, helpText, null, null, null, \"exactTags\", exactTagTitle) }}

                            {% set attributes = [
                                { name: \"data-allow-clear\", value: \"true\" },
                                { name: \"data-placeholder--id\", value: null },
                                { name: \"data-placeholder--value\", value: \"\" }
                            ] %}

                            {% set title %}{% trans \"Owner\" %}{% endset %}
                            {% set users = [{userId: null, userName: \"\"}]|merge(users) %}
                            {{ inline.dropdown(\"ownerId\", \"single\", title, null, users, \"userId\", \"userName\", \"\", \"selectPicker\", \"\", \"\", \"\", attributes) }}

                            {% set title %}{% trans \"Owner User Group\" %}{% endset %}
                            {% set helpText %}{% trans \"Show items owned by users in the selected User Group.\" %}{% endset %}
                            {{ inline.dropdown(\"ownerUserGroupId\", \"single\", title, \"\", [{groupId:null, group:\"\"}]|merge(groups), \"groupId\", \"group\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                            {% set title %}{% trans \"Type\" %}{% endset %}
                            {{ inline.dropdown(\"type\", \"single\", title, \"\", [{\"type\": none, \"name\": \"\"}]|merge(modules), \"type\", \"name\") }}

                            {% set title %}{% trans \"Retired\" %}{% endset %}
                            {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                            {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}

                            {% set title %}{% trans \"Layout ID\" %}{% endset %}
                            {{ inline.number(\"layoutId\", title, layoutId) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"libraryItems\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Type\" %}</th>
                                <th>{% trans \"Tag\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
                                <th>{% trans \"Duration (seconds)\" %}</th>
                                <th>{% trans \"Size\" %}</th>
                                <th>{% trans \"Size (bytes)\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Revised\" %}</th>
                                <th>{% trans \"Released\" %}</th>
                                <th>{% trans \"File Name\" %}</th>
                                <th>{% trans \"Stats?\" %}</th>
                                <th>{% trans \"Created\" %}</th>
                                <th>{% trans \"Modified\" %}</th>
                                <th>{% trans \"Expires\" %}</th>
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
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=libraryGrid\",
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
                                option: \"libraryGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\"},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                    {\"data\": \"mediaType\"},
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"mediaId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"mediaId\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    {\"data\": \"duration\", \"visible\": false},
                    {
                        \"name\": \"fileSize\",
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false},
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {
                        \"name\": \"released\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.released;

                            var icon = \"\";
                            if (data.released == 1)
                                icon = \"fa-check\";
                            else if (data.released == 0)
                                icon = \"fa-cogs\";
                            else if (data.released == 2)
                                icon = \"fa-times\";


                            return \"<span class='fa \" + icon + \"' title='\" + (data.releasedDescription) + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {\"data\": \"fileName\"},
                    {
                        \"name\": \"enableStat\",
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 'On')
                                icon = \"fa-check\";
                            else if (data.enableStat == 'Off')
                                icon = \"fa-times\";
                            else
                                icon = \"fa-level-down\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.enableStatDescription) + \"'></span>\";
                        }
                    },
                    {
                        \"data\": \"createdDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"name\": \"expires\",
                        \"data\": function (data, type) {
                            if (data.expires != null && data.expires != 0) {
                                let now = moment();
                                let expiresIn = moment.unix(data.expires);
                                let differenceMinutes = expiresIn.diff(now, 'minutes');
                                let momentDifference = moment(now).to(expiresIn);

                                if (differenceMinutes < -10 ) {
                                    return data.mediaExpiryFailed;
                                } else {
                                    return data.mediaExpiresIn.replace('%s', momentDifference);
                                }
                            } else {
                                return data.mediaNoExpiryDate;
                            }

                        }
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"{% trans \"Add files\" %}\",
                    startUpload: \"{% trans \"Start upload\" %}\",
                    cancelUpload: \"{% trans \"Cancel upload\" %}\"
                },
                upload: {
                    maxSize: {{ libraryUpload.maxSize }},
                    maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                    validExt: \"{{ validExt }}\"
                },
                updateInAllChecked: {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == 1 %}true{% else %}false{% endif %},
                deleteOldRevisionsChecked: {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == 1 %}true{% else %}false{% endif %}
            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"{% trans \"Replace\" %}\");
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    oldMediaId: mediaId,
                    updateInAllChecked: {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == 1 %}true{% else %}false{% endif %},
                    deleteOldRevisionsChecked: {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == 1 %}true{% else %}false{% endif %},
                    trans: {
                        addFiles: \"{% trans \"Add Replacement\" %}\",
                        startUpload: \"{% trans \"Start Replace\" %}\",
                        cancelUpload: \"{% trans \"Cancel Replace\" %}\",
                        updateInLayouts: {
                            title: \"{% trans \"Update this media in all layouts it is assigned to?\" %}\",
                            helpText: \"{% trans \"Note: It will only be updated in layouts you have permission to edit.\" %}\"
                        },
                        deleteOldRevisions: {
                            title: \"{% trans \"Delete the old version?\" %}\",
                            helpText: \"{% trans \"Completely remove the old version of this media item if a new file is being uploaded.\" %}\"
                        }
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                        validExt: validExtensions
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        /**
         * Opens the upload form
         * @param templateOptions
         */
        function openUploadForm(templateOptions) {

            var template = Handlebars.compile(\$(\"#template-file-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template(templateOptions),
                title: \"{% trans \"Upload media\" %}\",
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

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.usage\") }}\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            \$(\"#mediaEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#mediaEventDateLink\").val(\"\")
                \$(\"#mediaEventDate\").val(\"\");
                \$(\"#mediaEventDateLink\").datetimepicker(\"update\");
                usageTable.ajax.reload();
            });

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.usage.layouts\") }}\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);

            // Tidy up timepickers on modal close
            if(dialog.hasClass('modal')) {
                dialog.on(\"hide.bs.modal\", function(e) {
                    if(e.namespace === 'bs.modal') {
                            // Remove colour pickers
                            dialog.find(\"#mediaEventDateLink\").datetimepicker('remove');
                    }
                });
            }
        }

        function setDefaultMultiSelectFormOpen(dialog) {
            {% set message = 'Force delete from any existing layouts, assignments, etc' %}

            var \$input = \$('<input type=checkbox id=\"forceDelete\" name=\"forceDelete\"> {{ message|trans|e }} </input>');
            \$input.on('change', function() {
                dialog.data().commitData = {forceDelete: \$(this).val()};
            });
            \$(dialog).find('.modal-body').append(\$input);
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">{% trans %} Off {% endtrans %}</option>' +
                '<option value=\"On\">{% trans %} On {% endtrans %}</option>' +
                '<option value=\"Inherit\">{% trans %} Inherit {% endtrans %}</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

    </script>
{% endblock %}", "library-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\library-page.twig");
    }
}
