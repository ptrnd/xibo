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

/* layout-page.twig */
class __TwigTemplate_dee9a7314d35a719f208c68b14c6eb7d952eea03fbeff8ec13935fb43a396a1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["inline"] = $this->loadTemplate("inline.twig", "layout-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "layout-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 5
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 6
        echo __("Add a new Layout and jump to the layout designer.");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Layout");
        echo "</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" id=\"layoutUploadForm\" title=\"";
        // line 7
        echo __("Import a Layout from a ZIP file.");
        echo "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
        echo __("Import");
        echo "</a></li>
    </ul>
";
    }

    // line 11
    public function block_pageContent($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 13
        echo __("Layouts");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("General");
        echo "</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 21
        echo __("Advanced");
        echo "</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">
                                    ";
        // line 25
        ob_start();
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                                    ";
        echo $context["inline"]->getnumber("layoutId", ($context["title"] ?? null));
        echo "

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"layout\" accesskey=\"\">";
        // line 29
        echo __("Name");
        echo "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"layout\" type=\"text\" id=\"layout\" value=\"\">
                                                <span class=\"input-group-addon\">
                                                    <input title=\"";
        // line 34
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 40
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                                    ";
        ob_start();
        echo __("Exact match?");
        $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                                    ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                                    ";
        echo $context["inline"]->getinputWithTags("tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null));
        echo "

                                    ";
        // line 45
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""]];
        // line 50
        echo "
                                    ";
        // line 51
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                                    ";
        ob_start();
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                                    ";
        echo $context["inline"]->getdropdown("userId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                                    ";
        // line 55
        ob_start();
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                                    ";
        ob_start();
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                                    ";
        echo $context["inline"]->getdropdown("ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                                    ";
        // line 59
        ob_start();
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                                    ";
        ob_start();
        echo __("Show Layouts active on the selected Display / Display Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                                    ";
        echo $context["inline"]->getdropdown("activeDisplayGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["displayGroupId" => null, "displayGroup" => ""]], ($context["displayGroups"] ?? null)), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    ";
        // line 66
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                                    ";
        $context["option1"] = __("Yes");
        // line 68
        echo "                                    ";
        $context["option2"] = __("No");
        // line 69
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 70
        echo "                                    ";
        echo $context["inline"]->getdropdown("retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value");
        echo "

                                    ";
        // line 72
        ob_start();
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                                    ";
        $context["option1"] = __("All");
        // line 74
        echo "                                    ";
        $context["option2"] = __("Only Used");
        // line 75
        echo "                                    ";
        $context["option3"] = __("Only Unused");
        // line 76
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 2, "value" => ($context["option2"] ?? null)], 2 => ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 77
        echo "                                    ";
        echo $context["inline"]->getdropdown("layoutStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value");
        echo "

                                    ";
        // line 79
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                                    ";
        $context["option1"] = __("All");
        // line 81
        echo "                                    ";
        $context["option2"] = __("1st line");
        // line 82
        echo "                                    ";
        $context["option3"] = __("Widget List");
        // line 83
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 2, "value" => ($context["option2"] ?? null)], 2 => ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 84
        echo "                                    ";
        echo $context["inline"]->getdropdown("showDescriptionId", "single", ($context["title"] ?? null), 2, ($context["values"] ?? null), "id", "value");
        echo "

                                    ";
        // line 86
        ob_start();
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                                    ";
        echo $context["inline"]->getinput("mediaLike", ($context["title"] ?? null));
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"layouts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 97
        echo __("ID");
        echo "</th>
                                <th>";
        // line 98
        echo __("Name");
        echo "</th>
                                <th>";
        // line 99
        echo __("Status");
        echo "</th>
                                <th>";
        // line 100
        echo __("Description");
        echo "</th>
                                <th>";
        // line 101
        echo __("Duration");
        echo "</th>
                                <th>";
        // line 102
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 103
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 104
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 105
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 106
        echo __("Valid?");
        echo "</th>
                                <th>";
        // line 107
        echo __("Stats?");
        echo "</th>
                                <th>";
        // line 108
        echo __("Created");
        echo "</th>
                                <th>";
        // line 109
        echo __("Modified");
        echo "</th>
                                <th>";
        // line 110
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

    // line 123
    public function block_javaScript($context, array $blocks = [])
    {
        // line 124
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#layouts\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=layoutGrid\",
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"layoutGrid\",
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"publishedStatus\",
                        \"data\": function (data, type) {
                            if (data.publishedDate != null) {
                                let now = moment();
                                let published = moment(data.publishedDate);
                                let differenceMinutes = published.diff(now, 'minutes');
                                let momentDifference = moment(now).to(published);

                                if (differenceMinutes < -5) {
                                    return data.publishedStatus.concat(\" - \", data.publishedStatusFailed);
                                } else {
                                    return data.publishedStatus.concat(\" - \", data.publishedStatusFuture.replace('%s', momentDifference));
                                }
                            } else {
                                return data.publishedStatus;
                            }

                        }
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"layoutId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"layoutId\"}
                    },
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"name\": \"status\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 2)
                                icon = \"fa-exclamation\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + \"'></span>\";
                        }
                    },
                    {
                        \"name\": \"enableStat\",
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

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
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-layout-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"";
        // line 291
        echo __("Add ZIP Files");
        echo "\",
                        startUpload: \"";
        // line 292
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 293
        echo __("Cancel upload");
        echo "\",
                        processing: \"";
        // line 294
        echo __("Processing...");
        echo "\",
                        replaceExistingMediaMessage: \"";
        // line 295
        echo __("Replace Existing Media?");
        echo "\",
                        importTagsMessage: \"";
        // line 296
        echo __("Import Tags?");
        echo "\",
                        useExistingDataSetsMessage: \"";
        // line 297
        echo __("Use existing DataSets matched by name?");
        echo "\",
                        dataSetDataMessage: \"";
        // line 298
        echo __("Import DataSet Data?");
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSizeMessage", []), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "validExt", []), "html", null, true);
        echo "\"
                    }
                }),
                title: \"";
        // line 306
        echo __("Upload Layout");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 309
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
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.import"), "html", null, true);
        echo "\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
                });

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
                }).bind('fileuploadprogressall', function(e, data) {
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

                // Configure the active behaviour of the checkboxes
                \$(\"#useExistingDataSets\").on(\"click\", function () {
                    \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                });
            });
        });

        function layoutAddFormOpen() {
            \$(\"#layoutAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: [{layoutId: form.data().layoutId}]},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {
            var \$input = \$('<input type=checkbox id=\"enableStat\" name=\"enableStat\"> ";
        // line 447
        echo __("Enable Stats Collection?");
        echo " </input>');
            var \$helpText = \$('<span class=\"help-block\">Check to enable the collection of Proof of Play statistics for the selected items. </span>');

            \$input.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);
        }

    </script>
";
    }

    // line 461
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        // line 462
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 597
        echo "

        <script type=\"text/x-handlebars-template\" id=\"template-layout-upload\">
            <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)zip\$/i\">
                <div class=\"row fileupload-buttonbar\">
                    <div class=\"col-md-7\">
                        <div class=\"well\">
                            {{ upload.maxSizeMessage }}
                        </div>
                        <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\" multiple>
                    </span>
                        <button type=\"submit\" class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                            <span>{{ trans.startUpload }}</span>
                        </button>
                        <button type=\"reset\" class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                            <span>{{ trans.cancelUpload }}</span>
                        </button>
                        <!-- The loading indicator is shown during file processing -->
                        <span class=\"fileupload-loading\"></span>
                    </div>
                    <!-- The global progress information -->
                    <div class=\"col-md-4 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"replaceExisting\" title=\"If the import finds existing media with the same name, should it be replaced in the Layout or should the Layout use that media.\">
                            <input type=\"checkbox\" id=\"replaceExisting\" name=\"replaceExisting\">
                            {{ trans.replaceExistingMediaMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importTags\" title=\"Would you like to import any tags contained on the layout.\">
                            <input type=\"checkbox\" id=\"importTags\" name=\"importTags\">
                            {{ trans.importTagsMessage }}
                        </label>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"useExistingDataSets\">
                            <input type=\"checkbox\" id=\"useExistingDataSets\" name=\"useExistingDataSets\" checked>
                            {{ trans.useExistingDataSetsMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importDataSetData\">
                            <input type=\"checkbox\" id=\"importDataSetData\" name=\"importDataSetData\" disabled>
                            {{ trans.dataSetDataMessage }}
                        </label>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
            </form>
        </script>

        <!-- The template to display files available for upload -->
        <script id=\"template-layout-upload\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload fade\">
                <td>
                    <span class=\"fileupload-preview\"></span>
                </td>
                <td class=\"title\">
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                    {% if (!file.error) { %}
                    <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                    {% } %}
                </td>
                <td>
                    <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    {% if (!o.files.error) { %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                    </div>
                    {% } %}
                </td>
                <td>
                    {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                        <button class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id=\"template-layout-download\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download fade\">
               <td>
                    <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                        {%=file.name%}
                    </p>
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                </td>
                <td>
                    <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
                </td>
            </tr>
        {% } %}
        </script>

    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 597,  747 => 462,  744 => 461,  727 => 447,  596 => 319,  583 => 309,  577 => 306,  571 => 303,  567 => 302,  563 => 301,  557 => 298,  553 => 297,  549 => 296,  545 => 295,  541 => 294,  537 => 293,  533 => 292,  529 => 291,  403 => 168,  387 => 155,  367 => 138,  351 => 124,  348 => 123,  332 => 110,  328 => 109,  324 => 108,  320 => 107,  316 => 106,  312 => 105,  308 => 104,  304 => 103,  300 => 102,  296 => 101,  292 => 100,  288 => 99,  284 => 98,  280 => 97,  266 => 87,  262 => 86,  256 => 84,  253 => 83,  250 => 82,  247 => 81,  244 => 80,  240 => 79,  234 => 77,  231 => 76,  228 => 75,  225 => 74,  222 => 73,  218 => 72,  212 => 70,  209 => 69,  206 => 68,  203 => 67,  199 => 66,  190 => 61,  185 => 60,  181 => 59,  175 => 57,  170 => 56,  166 => 55,  160 => 53,  155 => 52,  151 => 51,  148 => 50,  146 => 45,  140 => 43,  135 => 42,  130 => 41,  126 => 40,  117 => 34,  109 => 29,  102 => 26,  98 => 25,  91 => 21,  87 => 20,  79 => 15,  74 => 13,  71 => 12,  68 => 11,  59 => 7,  51 => 6,  48 => 5,  45 => 4,  40 => 1,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new Layout and jump to the layout designer.\" %}\" href=\"{{ urlFor(\"layout.add.form\") }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Layout\" %}</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" id=\"layoutUploadForm\" title=\"{% trans \"Import a Layout from a ZIP file.\" %}\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> {% trans \"Import\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Layouts\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">
                                    {% set title %}{% trans \"ID\" %}{% endset %}
                                    {{ inline.number(\"layoutId\", title) }}

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"layout\" accesskey=\"\">{% trans \"Name\" %}</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"layout\" type=\"text\" id=\"layout\" value=\"\">
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
                                    {% set helpText %}{% trans \"Show items owned by the selected User.\" %}{% endset %}
                                    {{ inline.dropdown(\"userId\", \"single\", title, \"\", [{userId:null, userName:\"\"}]|merge(users), \"userId\", \"userName\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                    {% set title %}{% trans \"Owner User Group\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show items owned by users in the selected User Group.\" %}{% endset %}
                                    {{ inline.dropdown(\"ownerUserGroupId\", \"single\", title, \"\", [{groupId:null, group:\"\"}]|merge(groups), \"groupId\", \"group\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                    {% set title %}{% trans \"Display Group\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show Layouts active on the selected Display / Display Group\" %}{% endset %}
                                    {{ inline.dropdown(\"activeDisplayGroupId\", \"single\", title, \"\", [{displayGroupId:null, displayGroup:\"\"}]|merge(displayGroups), \"displayGroupId\", \"displayGroup\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    {% set title %}{% trans \"Retired\" %}{% endset %}
                                    {% set option1 = \"Yes\"|trans %}
                                    {% set option2 = \"No\"|trans %}
                                    {% set values = [{id: 1, value: option1}, {id: 0, value: option2}] %}
                                    {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Show\" %}{% endset %}
                                    {% set option1 = \"All\"|trans %}
                                    {% set option2 = \"Only Used\"|trans %}
                                    {% set option3 = \"Only Unused\"|trans %}
                                    {% set values = [{id: 1, value: option1}, {id: 2, value: option2}, {id: 3, value: option3}] %}
                                    {{ inline.dropdown(\"layoutStatusId\", \"single\", title, 1, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Description\" %}{% endset %}
                                    {% set option1 = \"All\"|trans %}
                                    {% set option2 = \"1st line\"|trans %}
                                    {% set option3 = \"Widget List\"|trans %}
                                    {% set values = [{id: 1, value: option1}, {id: 2, value: option2}, {id: 3, value: option3}] %}
                                    {{ inline.dropdown(\"showDescriptionId\", \"single\", title, 2, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Media\" %}{% endset %}
                                    {{ inline.input(\"mediaLike\", title) }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"layouts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Status\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Valid?\" %}</th>
                                <th>{% trans \"Stats?\" %}</th>
                                <th>{% trans \"Created\" %}</th>
                                <th>{% trans \"Modified\" %}</th>
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
            table = \$(\"#layouts\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=layoutGrid\",
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
                                option: \"layoutGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"layout.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"publishedStatus\",
                        \"data\": function (data, type) {
                            if (data.publishedDate != null) {
                                let now = moment();
                                let published = moment(data.publishedDate);
                                let differenceMinutes = published.diff(now, 'minutes');
                                let momentDifference = moment(now).to(published);

                                if (differenceMinutes < -5) {
                                    return data.publishedStatus.concat(\" - \", data.publishedStatusFailed);
                                } else {
                                    return data.publishedStatus.concat(\" - \", data.publishedStatusFuture.replace('%s', momentDifference));
                                }
                            } else {
                                return data.publishedStatus;
                            }

                        }
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"layoutId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"layoutId\"}
                    },
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"name\": \"status\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 2)
                                icon = \"fa-exclamation\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + \"'></span>\";
                        }
                    },
                    {
                        \"name\": \"enableStat\",
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

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
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-layout-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"{% trans \"Add ZIP Files\" %}\",
                        startUpload: \"{% trans \"Start upload\" %}\",
                        cancelUpload: \"{% trans \"Cancel upload\" %}\",
                        processing: \"{% trans \"Processing...\" %}\",
                        replaceExistingMediaMessage: \"{% trans \"Replace Existing Media?\" %}\",
                        importTagsMessage: \"{% trans \"Import Tags?\" %}\",
                        useExistingDataSetsMessage: \"{% trans \"Use existing DataSets matched by name?\" %}\",
                        dataSetDataMessage: \"{% trans \"Import DataSet Data?\" %}\"
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                        validExt: \"{{ libraryUpload.validExt }}\"
                    }
                }),
                title: \"{% trans \"Upload Layout\" %}\",
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
                var url = \"{{ urlFor(\"layout.import\") }}\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
                });

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
                }).bind('fileuploadprogressall', function(e, data) {
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

                // Configure the active behaviour of the checkboxes
                \$(\"#useExistingDataSets\").on(\"click\", function () {
                    \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                });
            });
        });

        function layoutAddFormOpen() {
            \$(\"#layoutAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: [{layoutId: form.data().layoutId}]},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {
            var \$input = \$('<input type=checkbox id=\"enableStat\" name=\"enableStat\"> {% trans %} Enable Stats Collection? {% endtrans %} </input>');
            var \$helpText = \$('<span class=\"help-block\">Check to enable the collection of Proof of Play statistics for the selected items. </span>');

            \$input.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);
        }

    </script>
{% endblock %}

{% block javaScriptTemplates %}
    {{ parent() }}

    {% raw %}

        <script type=\"text/x-handlebars-template\" id=\"template-layout-upload\">
            <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)zip\$/i\">
                <div class=\"row fileupload-buttonbar\">
                    <div class=\"col-md-7\">
                        <div class=\"well\">
                            {{ upload.maxSizeMessage }}
                        </div>
                        <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\" multiple>
                    </span>
                        <button type=\"submit\" class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                            <span>{{ trans.startUpload }}</span>
                        </button>
                        <button type=\"reset\" class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                            <span>{{ trans.cancelUpload }}</span>
                        </button>
                        <!-- The loading indicator is shown during file processing -->
                        <span class=\"fileupload-loading\"></span>
                    </div>
                    <!-- The global progress information -->
                    <div class=\"col-md-4 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"replaceExisting\" title=\"If the import finds existing media with the same name, should it be replaced in the Layout or should the Layout use that media.\">
                            <input type=\"checkbox\" id=\"replaceExisting\" name=\"replaceExisting\">
                            {{ trans.replaceExistingMediaMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importTags\" title=\"Would you like to import any tags contained on the layout.\">
                            <input type=\"checkbox\" id=\"importTags\" name=\"importTags\">
                            {{ trans.importTagsMessage }}
                        </label>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"useExistingDataSets\">
                            <input type=\"checkbox\" id=\"useExistingDataSets\" name=\"useExistingDataSets\" checked>
                            {{ trans.useExistingDataSetsMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importDataSetData\">
                            <input type=\"checkbox\" id=\"importDataSetData\" name=\"importDataSetData\" disabled>
                            {{ trans.dataSetDataMessage }}
                        </label>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
            </form>
        </script>

        <!-- The template to display files available for upload -->
        <script id=\"template-layout-upload\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload fade\">
                <td>
                    <span class=\"fileupload-preview\"></span>
                </td>
                <td class=\"title\">
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                    {% if (!file.error) { %}
                    <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                    {% } %}
                </td>
                <td>
                    <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    {% if (!o.files.error) { %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                    </div>
                    {% } %}
                </td>
                <td>
                    {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                        <button class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id=\"template-layout-download\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download fade\">
               <td>
                    <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                        {%=file.name%}
                    </p>
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                </td>
                <td>
                    <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
                </td>
            </tr>
        {% } %}
        </script>

    {% endraw %}
{% endblock %}", "layout-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-page.twig");
    }
}
