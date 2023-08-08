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

/* dataset-page.twig */
class __TwigTemplate_09f9a1b2667bfa8e405a8c59c6b82dd98e901920c6db0af80b8adea23b48fcc1 extends \Twig\Template
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
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "dataset-page.twig", 10)->unwrap();
        // line 11
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-page.twig", 11)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "dataset-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 14
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 15
        echo __("Add a new DataSet");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.add.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add DataSet");
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
        echo __("DataSets");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\" onsubmit=\"return false\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" title=\"\" for=\"dataSet\" accesskey=\"\">";
        // line 28
        echo __("Name");
        echo "</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"dataSet\" type=\"text\" id=\"dataSet\" value=\"\">

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
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                            ";
        ob_start();
        echo __("Show items which match the provided code");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                            ";
        echo $context["inline"]->getinput("code", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "

                            ";
        // line 44
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        ob_start();
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        echo $context["inline"]->getdropdown("userId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 55
        echo __("ID");
        echo "</th>
                                <th>";
        // line 56
        echo __("Name");
        echo "</th>
                                <th>";
        // line 57
        echo __("Description");
        echo "</th>
                                <th>";
        // line 58
        echo __("Code");
        echo "</th>
                                <th>";
        // line 59
        echo __("Remote?");
        echo "</th>
                                <th>";
        // line 60
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 61
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 62
        echo __("Last Sync");
        echo "</th>
                                <th>";
        // line 63
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

    // line 76
    public function block_javaScript($context, array $blocks = [])
    {
        // line 77
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=dataSetGrid\",
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
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"dataSetGrid\",
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"dataSetId\" },
                { \"data\": \"dataSet\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"code\" },
                {
                    \"data\": \"isRemote\",
                    \"render\": dataTableTickCrossColumn
                },
                { \"data\": \"owner\" },
                {
                    \"data\": \"groupsWithPermissions\",
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"data\": \"lastSync\",
                    \"render\": dataTableDateFromUnix
                },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', function(e, settings) {
            dataTableDraw(e, settings);

            // Upload form
            \$(\".dataSetImportForm\").click(function() {

                var template = Handlebars.compile(\$(\"#template-dataset-upload\").html());
                var data = table.row(\$(this).closest(\"tr\")).data();
                var columns = [];
                var i = 1;

                \$.each(data.columns, function (index, element) {
                    if (element.dataSetColumnTypeId === 1) {
                        element.index = i;
                        columns.push(element);
                        i++;
                    }
                });

                // Handle bars and open a dialog
                bootbox.dialog({
                    message: template({
                        trans: {
                            addFiles: \"";
        // line 168
        echo __("Add CSV Files");
        echo "\",
                            startUpload: \"";
        // line 169
        echo __("Start upload");
        echo "\",
                            cancelUpload: \"";
        // line 170
        echo __("Cancel upload");
        echo "\",
                            processing: \"";
        // line 171
        echo __("Processing...");
        echo "\"
                        },
                        upload: {
                            maxSize: ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSizeMessage", []), "html", null, true);
        echo "\",
                            validExt: \"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "validExt", []), "html", null, true);
        echo "\",
                            utf8Message: \"";
        // line 177
        echo __("If the CSV file contains non-ASCII characters please ensure the file is UTF-8 encoded");
        echo "\"
                        },
                        columns: columns
                    }),
                    title: \"";
        // line 181
        echo __("CSV Import");
        echo "\",
                    buttons: {
                        main: {
                            label: \"";
        // line 184
        echo __("Done");
        echo "\",
                            className: \"btn-primary\",
                            callback: function() {
                                table.ajax.reload();
                                XiboDialogClose();
                            }
                        },
                        help: {
                            label: \"";
        // line 192
        echo __("Help");
        echo "\",
                            className: \"default\",
                            callback: function() {
                                XiboHelpRender(\"";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["helpService"] ?? null), "link", [0 => "dataset"], "method"), "html", null, true);
        echo "#Importing_from_CSV_file\");
                            }
                        }
                    }
                }).on('shown.bs.modal', function() {
                    // Configure the upload form
                    var url = \"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.import"), "html", null, true);
        echo "\".replace(\":id\", data.dataSetId);
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
            });
        });
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));

        function dataSetFormOpen(dialog) {
            // Bind the test button
            \$(dialog).find(\"#dataSetRemoteTestButton\").on('click', function() {
                var \$form = \$(dialog).find(\"form\");
                XiboRemoteRequest(\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.test.remote"), "html", null, true);
        echo "\", \$form.serializeObject(), function(response) {
                    if (!\$.trim(response.data.entries)) {
                        response.data = response.message;
                    }
                    \$(\"#datasetRemoteTestRequestResult\").html('<pre style=\"height: 300px; overflow: scroll\">' + JSON.stringify(response.data, null, 3) + '</pre>');
                });
            });

            // Set up some dependencies between the isRemote checkbox and the tabs related to remote datasets
            onRemoteFieldChanged(dialog);

            \$(dialog).find(\"#isRemote\").on('change', function() {
                onRemoteFieldChanged(dialog);
            });

            // Auth field
            onAuthenticationFieldChanged(dialog);

            \$(dialog).find(\"#authentication\").on('change', function() {
                onAuthenticationFieldChanged(dialog);
            });

            // remote DataSet source
            onSourceFieldChanged(dialog);
            \$(dialog).find('#sourceId').on('change', function() {
                onSourceFieldChanged(dialog);
            });
        }

        function onRemoteFieldChanged(dialog) {
            var isRemote = \$(dialog).find(\"#isRemote\").is(\":checked\");
            var \$remoteTabs = \$(dialog).find(\".tabForRemoteDataSet\");

            if (isRemote) {
                \$remoteTabs.removeClass(\"hidden\");
            } else {
                \$remoteTabs.addClass(\"hidden\");
            }
        }

        function onAuthenticationFieldChanged(dialog) {
            var authentication = \$(dialog).find(\"#authentication\").val();
            var \$authFieldUserName = \$(dialog).find(\".auth-field-username\");
            var \$authFieldPassword = \$(dialog).find(\".auth-field-password\");

            if (authentication === \"none\") {
                \$authFieldUserName.addClass(\"hidden\");
                \$authFieldPassword.addClass(\"hidden\");
            } else if (authentication === \"bearer\") {
                \$authFieldUserName.addClass(\"hidden\");
                \$authFieldPassword.removeClass(\"hidden\");
            } else {
                \$authFieldUserName.removeClass(\"hidden\");
                \$authFieldPassword.removeClass(\"hidden\");
            }
        }

        function onSourceFieldChanged(dialog) {
            let sourceId = \$(dialog).find('#sourceId').val();
            let \$jsonSource =  \$(dialog).find(\".json-source-field\");
            let \$csvSource = \$(dialog).find(\".csv-source-field\");

            if (sourceId == 1) {
                \$jsonSource.removeClass('hidden');
                \$csvSource.addClass('hidden');
            } else {
                \$jsonSource.addClass('hidden');
                \$csvSource.removeClass('hidden');
            }
        }

        function deleteMultiSelectFormOpen(dialog) {
            ";
        // line 353
        $context["message"] = "Delete any associated data?";
        // line 354
        echo "
            var \$input = \$('<input type=checkbox id=\"deleteData\" name=\"deleteData\"> ";
        // line 355
        echo twig_escape_filter($this->env, __(($context["message"] ?? null)));
        echo " </input>');
            \$input.on('change', function() {
                dialog.data().commitData = {deleteData: \$(this).val()};
            });
            \$(dialog).find('.modal-body').append(\$input);
        }
    </script>
";
    }

    // line 364
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        // line 365
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 410
        echo "

    <script type=\"text/x-handlebars-template\" id=\"template-dataset-upload\">
        <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)csv/i\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"well\">
                    {{ upload.maxSizeMessage }} <br>
                    {{ upload.utf8Message }}
                </div>
                <div class=\"col-md-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files\">
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
                <div class=\"col-md-12\">
        ";
        echo "
                    ";
        // line 411
        ob_start();
        echo __("Overwrite existing data?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 412
        echo "                    ";
        ob_start();
        echo __("Erase all content in this DataSet and overwrite it with the new content in this import.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 413
        echo "                    ";
        echo $context["forms"]->getcheckbox("overwrite", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "

                    ";
        // line 415
        ob_start();
        echo __("Ignore first row?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 416
        echo "                    ";
        ob_start();
        echo __("Ignore the first row? Useful if the CSV has headings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 417
        echo "                    ";
        echo $context["forms"]->getcheckbox("ignorefirstrow", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "

                    ";
        // line 419
        ob_start();
        echo __("In the fields below please enter the column number in the CSV file that corresponds to the Column Heading listed. This should be done before Adding the file.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 420
        echo "                    ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

        ";
        // line 499
        echo "
                    {{#each columns}}
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"csvImport_{{dataSetColumnId}}\">{{heading}}</label>
                        <div class=\"col-sm-10\">
                            <input class=\"form-control\" name=\"csvImport_{{dataSetColumnId}}\" type=\"number\" id=\"csvImport_{{dataSetColumnId}}\" value=\"{{ index }}\" />
                        </div>
                    </div>
                    {{/each}}
                </div>
            </div>

            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-dataset-upload\" type=\"text/x-tmpl\">
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
    <script id=\"template-dataset-download\" type=\"text/x-tmpl\">
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
        return "dataset-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 499,  625 => 420,  621 => 419,  615 => 417,  610 => 416,  606 => 415,  600 => 413,  595 => 412,  591 => 411,  544 => 410,  538 => 365,  535 => 364,  523 => 355,  520 => 354,  518 => 353,  443 => 281,  360 => 201,  351 => 195,  345 => 192,  334 => 184,  328 => 181,  321 => 177,  317 => 176,  313 => 175,  309 => 174,  303 => 171,  299 => 170,  295 => 169,  291 => 168,  235 => 115,  219 => 102,  199 => 85,  189 => 77,  186 => 76,  170 => 63,  166 => 62,  162 => 61,  158 => 60,  154 => 59,  150 => 58,  146 => 57,  142 => 56,  138 => 55,  125 => 46,  120 => 45,  116 => 44,  110 => 42,  105 => 41,  101 => 40,  92 => 34,  83 => 28,  75 => 23,  70 => 21,  67 => 20,  64 => 19,  53 => 15,  50 => 14,  47 => 13,  42 => 9,  40 => 11,  38 => 10,  32 => 9,);
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
{% import \"forms.twig\" as forms %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new DataSet\" %}\" href=\"{{ urlFor(\"dataSet.add.form\") }}\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add DataSet\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"DataSets\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\" onsubmit=\"return false\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" title=\"\" for=\"dataSet\" accesskey=\"\">{% trans \"Name\" %}</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"dataSet\" type=\"text\" id=\"dataSet\" value=\"\">

                                        <span class=\"input-group-addon\">
                                            <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {% set title %}{% trans \"Code\" %}{% endset %}
                            {% set helpText %}{% trans \"Show items which match the provided code\" %}{% endset %}
                            {{ inline.input(\"code\", title, \"\", helpText) }}

                            {% set title %}{% trans \"Owner\" %}{% endset %}
                            {% set helpText %}{% trans \"Show items owned by the selected User.\" %}{% endset %}
                            {{ inline.dropdown(\"userId\", \"single\", title, \"\", [{userId:null, userName:\"\"}]|merge(users), \"userId\", \"userName\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"datasets\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Code\" %}</th>
                                <th>{% trans \"Remote?\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Last Sync\" %}</th>
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
        var table = \$(\"#datasets\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=dataSetGrid\",
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
                            option: \"dataSetGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"dataSet.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#datasets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"dataSetId\" },
                { \"data\": \"dataSet\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"code\" },
                {
                    \"data\": \"isRemote\",
                    \"render\": dataTableTickCrossColumn
                },
                { \"data\": \"owner\" },
                {
                    \"data\": \"groupsWithPermissions\",
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"data\": \"lastSync\",
                    \"render\": dataTableDateFromUnix
                },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', function(e, settings) {
            dataTableDraw(e, settings);

            // Upload form
            \$(\".dataSetImportForm\").click(function() {

                var template = Handlebars.compile(\$(\"#template-dataset-upload\").html());
                var data = table.row(\$(this).closest(\"tr\")).data();
                var columns = [];
                var i = 1;

                \$.each(data.columns, function (index, element) {
                    if (element.dataSetColumnTypeId === 1) {
                        element.index = i;
                        columns.push(element);
                        i++;
                    }
                });

                // Handle bars and open a dialog
                bootbox.dialog({
                    message: template({
                        trans: {
                            addFiles: \"{% trans \"Add CSV Files\" %}\",
                            startUpload: \"{% trans \"Start upload\" %}\",
                            cancelUpload: \"{% trans \"Cancel upload\" %}\",
                            processing: \"{% trans \"Processing...\" %}\"
                        },
                        upload: {
                            maxSize: {{ libraryUpload.maxSize }},
                            maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                            validExt: \"{{ libraryUpload.validExt }}\",
                            utf8Message: \"{% trans \"If the CSV file contains non-ASCII characters please ensure the file is UTF-8 encoded\" %}\"
                        },
                        columns: columns
                    }),
                    title: \"{% trans \"CSV Import\" %}\",
                    buttons: {
                        main: {
                            label: \"{% trans \"Done\" %}\",
                            className: \"btn-primary\",
                            callback: function() {
                                table.ajax.reload();
                                XiboDialogClose();
                            }
                        },
                        help: {
                            label: \"{% trans \"Help\" %}\",
                            className: \"default\",
                            callback: function() {
                                XiboHelpRender(\"{{ helpService.link(\"dataset\") }}#Importing_from_CSV_file\");
                            }
                        }
                    }
                }).on('shown.bs.modal', function() {
                    // Configure the upload form
                    var url = \"{{ urlFor(\"dataSet.import\") }}\".replace(\":id\", data.dataSetId);
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
            });
        });
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#datasets_wrapper').find('.col-sm-6').eq(1));

        function dataSetFormOpen(dialog) {
            // Bind the test button
            \$(dialog).find(\"#dataSetRemoteTestButton\").on('click', function() {
                var \$form = \$(dialog).find(\"form\");
                XiboRemoteRequest(\"{{ urlFor(\"dataSet.test.remote\") }}\", \$form.serializeObject(), function(response) {
                    if (!\$.trim(response.data.entries)) {
                        response.data = response.message;
                    }
                    \$(\"#datasetRemoteTestRequestResult\").html('<pre style=\"height: 300px; overflow: scroll\">' + JSON.stringify(response.data, null, 3) + '</pre>');
                });
            });

            // Set up some dependencies between the isRemote checkbox and the tabs related to remote datasets
            onRemoteFieldChanged(dialog);

            \$(dialog).find(\"#isRemote\").on('change', function() {
                onRemoteFieldChanged(dialog);
            });

            // Auth field
            onAuthenticationFieldChanged(dialog);

            \$(dialog).find(\"#authentication\").on('change', function() {
                onAuthenticationFieldChanged(dialog);
            });

            // remote DataSet source
            onSourceFieldChanged(dialog);
            \$(dialog).find('#sourceId').on('change', function() {
                onSourceFieldChanged(dialog);
            });
        }

        function onRemoteFieldChanged(dialog) {
            var isRemote = \$(dialog).find(\"#isRemote\").is(\":checked\");
            var \$remoteTabs = \$(dialog).find(\".tabForRemoteDataSet\");

            if (isRemote) {
                \$remoteTabs.removeClass(\"hidden\");
            } else {
                \$remoteTabs.addClass(\"hidden\");
            }
        }

        function onAuthenticationFieldChanged(dialog) {
            var authentication = \$(dialog).find(\"#authentication\").val();
            var \$authFieldUserName = \$(dialog).find(\".auth-field-username\");
            var \$authFieldPassword = \$(dialog).find(\".auth-field-password\");

            if (authentication === \"none\") {
                \$authFieldUserName.addClass(\"hidden\");
                \$authFieldPassword.addClass(\"hidden\");
            } else if (authentication === \"bearer\") {
                \$authFieldUserName.addClass(\"hidden\");
                \$authFieldPassword.removeClass(\"hidden\");
            } else {
                \$authFieldUserName.removeClass(\"hidden\");
                \$authFieldPassword.removeClass(\"hidden\");
            }
        }

        function onSourceFieldChanged(dialog) {
            let sourceId = \$(dialog).find('#sourceId').val();
            let \$jsonSource =  \$(dialog).find(\".json-source-field\");
            let \$csvSource = \$(dialog).find(\".csv-source-field\");

            if (sourceId == 1) {
                \$jsonSource.removeClass('hidden');
                \$csvSource.addClass('hidden');
            } else {
                \$jsonSource.addClass('hidden');
                \$csvSource.removeClass('hidden');
            }
        }

        function deleteMultiSelectFormOpen(dialog) {
            {% set message = 'Delete any associated data?' %}

            var \$input = \$('<input type=checkbox id=\"deleteData\" name=\"deleteData\"> {{ message|trans|e }} </input>');
            \$input.on('change', function() {
                dialog.data().commitData = {deleteData: \$(this).val()};
            });
            \$(dialog).find('.modal-body').append(\$input);
        }
    </script>
{% endblock %}

{% block javaScriptTemplates %}
    {{ parent() }}

    {% raw %}

    <script type=\"text/x-handlebars-template\" id=\"template-dataset-upload\">
        <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)csv/i\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"well\">
                    {{ upload.maxSizeMessage }} <br>
                    {{ upload.utf8Message }}
                </div>
                <div class=\"col-md-7\">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files\">
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
                <div class=\"col-md-12\">
        {% endraw %}
                    {% set title %}{% trans \"Overwrite existing data?\" %}{% endset %}
                    {% set helpText %}{% trans \"Erase all content in this DataSet and overwrite it with the new content in this import.\" %}{% endset %}
                    {{ forms.checkbox(\"overwrite\", title, \"\", helpText) }}

                    {% set title %}{% trans \"Ignore first row?\" %}{% endset %}
                    {% set helpText %}{% trans \"Ignore the first row? Useful if the CSV has headings.\" %}{% endset %}
                    {{ forms.checkbox(\"ignorefirstrow\", title, \"\", helpText) }}

                    {% set message %}{% trans \"In the fields below please enter the column number in the CSV file that corresponds to the Column Heading listed. This should be done before Adding the file.\" %}{% endset %}
                    {{ forms.message(message) }}

        {% raw %}
                    {{#each columns}}
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"csvImport_{{dataSetColumnId}}\">{{heading}}</label>
                        <div class=\"col-sm-10\">
                            <input class=\"form-control\" name=\"csvImport_{{dataSetColumnId}}\" type=\"number\" id=\"csvImport_{{dataSetColumnId}}\" value=\"{{ index }}\" />
                        </div>
                    </div>
                    {{/each}}
                </div>
            </div>

            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-dataset-upload\" type=\"text/x-tmpl\">
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
    <script id=\"template-dataset-download\" type=\"text/x-tmpl\">
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
{% endblock %}", "dataset-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-page.twig");
    }
}
