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

/* playlist-page.twig */
class __TwigTemplate_a48b79c0af350e9560dc8e92b611dc5b650027f00cf61d4151312d9739740048 extends \Twig\Template
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
        // line 21
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        $context["inline"] = $this->loadTemplate("inline.twig", "playlist-page.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("authed.twig", "playlist-page.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 25
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Playlist");
        echo "</a></li>
    </ul>
";
    }

    // line 30
    public function block_pageContent($context, array $blocks = [])
    {
        // line 31
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 32
        echo __("Playlists");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"playlistView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 39
        echo __("General");
        echo "</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 40
        echo __("Advanced");
        echo "</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"name\" accesskey=\"\">";
        // line 46
        echo __("Name");
        echo "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"name\" type=\"text\" id=\"name\" value=\"\">
                                                <span class=\"input-group-addon\">
                                                    <input title=\"";
        // line 51
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 57
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                                    ";
        ob_start();
        echo __("Exact match?");
        $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                                    ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                                    ";
        echo $context["inline"]->getinputWithTags("tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null));
        echo "
                                    
                                    ";
        // line 62
        $context["attributes"] = [0 => ["name" => "data-live-search", "value" => "true"], 1 => ["name" => "data-selected-text-format", "value" => "count > 4"]];
        // line 66
        echo "
                                    ";
        // line 67
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                                    ";
        ob_start();
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                                    ";
        echo $context["inline"]->getdropdown("userId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                                    ";
        // line 71
        ob_start();
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                                    ";
        ob_start();
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                                    ";
        echo $context["inline"]->getdropdown("ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "

                                    ";
        // line 75
        ob_start();
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                                    ";
        echo $context["inline"]->getnumber("layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null));
        echo "

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    ";
        // line 81
        ob_start();
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => "All"], 1 => ["id" => 2, "value" => "Only Used"], 2 => ["id" => 3, "value" => "Only Unused"]];
        // line 83
        echo "                                    ";
        echo $context["inline"]->getdropdown("playlistStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value");
        echo "

                                    ";
        // line 85
        ob_start();
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                                    ";
        echo $context["inline"]->getinput("mediaLike", ($context["title"] ?? null));
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"playlists\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 96
        echo __("ID");
        echo "</th>
                                <th>";
        // line 97
        echo __("Name");
        echo "</th>
                                <th>";
        // line 98
        echo __("Duration");
        echo "</th>
                                <th>";
        // line 99
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 100
        echo __("Dynamic?");
        echo "</th>
                                <th>";
        // line 101
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 102
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 103
        echo __("Created");
        echo "</th>
                                <th>";
        // line 104
        echo __("Modified");
        echo "</th>
                                <th>";
        // line 105
        echo __("Stats?");
        echo "</th>
                                <th>";
        // line 106
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

    <div id=\"dummyLayout\" style=\"display:none\"></div>

    <div id=\"editor-container\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>
    
";
    }

    // line 128
    public function block_javaScript($context, array $blocks = [])
    {
        // line 129
        echo "    ";
        // line 130
        echo "    ";
        $this->loadTemplate("common.twig", "playlist-page.twig", 130)->display($context);
        // line 131
        echo "    
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/playlistEditor.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        ";
        // line 136
        echo "        ";
        // line 137
        echo "             ";
        // line 138
        echo "        ";
        // line 139
        echo "
        var table;
        \$(document).ready(function() {

            // Create ourselves a little hidden layout for preview sizing, etc
            \$(\"#dummyLayout\").html('<div id=\"layout\" data-background-color=\"#000000\" style=\"background-color: #000000\" designer_scale=\"1\"><div id=\"region_-1\" zindex=\"1\" tip_scale=\"1\" designer_scale=\"1\" width=\"800\" height=\"450\"></div></div>');

            // Configure the DataTable
            table = \$(\"#playlists\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=playlistGrid\",
                        dataType: 'json',
                        success: function (json) {
                            if (json.success)
                                data = JSON.parse(json.data.value);
                        }
                    });
                    return data;
                },
                stateSaveCallback: function (settings, data) {
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"playlistGrid\",
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
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"playlistId\"},
                    {
                        \"data\": \"name\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row) {
                            if (type !== \"display\" && type !== \"export\")
                                return data;

                            if (row.requiresDurationUpdate === 1) {
                                return '<span class=\"fa fa-clock-o\" title=\"";
        // line 200
        echo "Changes have been made and we are recalculating this Playlists duration";
        echo "\"></span>';
                            } else if (row.requiresDurationUpdate !== 0) {
                                return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\") + ' <span class=\"fa fa-clock-o\" title=\"";
        // line 202
        echo "This duration will be updated at ";
        echo "' + moment(row.requiresDurationUpdate, \"X\").format(jsDateFormat) + '\"></span>';
                            }

                            return dataTableTimeFromSeconds(data, type, row);
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    { \"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn },
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
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
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playlists_wrapper').find('.col-sm-6').eq(1));
        });

        // Playlist Add Form
        // contains a grid on the populate tab
        // hook up the grid
        var mediaTable;
        var nameFilter;
        var tagFilter;

        function playlistEditorFormOpen(formData) {

            // Clear container
            \$('#editor-container').empty();

            // Append form
            \$('#editor-container').append(formData.message);
        }

        function playlistFormOpen(dialog) {
            mediaTable = null;

            \$(dialog).find(\"input[name=filterMediaName]\").on(\"keyup\", _.debounce(function() {
                playlistFormPopulateMediaTable(dialog);
            }, 500));

            \$(dialog).find(\"input[name=filterMediaTag]\").on(\"change\", function() {
                playlistFormPopulateMediaTable(dialog);
            });

            // First time in there
            playlistFormPopulateMediaTable(dialog);

            // Run function to set the form submit behaviour
            playlistAddFormOpen();
        }

        ///
        /// Playlist Usage Form
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
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.usage"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().playlistId),
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

            \$(\"#playlistEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#playlistEventDateLink\").val(\"\")
                \$(\"#playlistEventDate\").val(\"\");
                \$(\"#playlistEventDateLink\").datetimepicker(\"update\");
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
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.usage.layouts"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().playlistId)
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
                        dialog.find(\"#playlistEventDateLink\").datetimepicker('remove');
                    }
                });
            }
        }



        function playlistFormPopulateMediaTable(dialog) {
            nameFilter = \$(dialog).find(\"input[name=filterMediaName]\").val();
            tagFilter = \$(dialog).find(\"input[name=filterMediaTag]\").val();

            if (nameFilter === \"\" && tagFilter === \"\") {
                if (mediaTable != null) {
                    mediaTable.destroy();
                    mediaTable = null;
                    \$(\"#playlistLibraryMedia tbody\").empty();
                }

                return;
            }

            if (mediaTable != null) {
                mediaTable.ajax.reload();
            } else {
                mediaTable = \$(\"#playlistLibraryMedia\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    filter: false,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                        \"data\": function (d) {
                            \$.extend(d, {media: nameFilter, tags: tagFilter, assignable:1});
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        {\"data\": dataTableCreateTags},
                        {
                            \"name\": \"duration\",
                            \"data\": function (data, type) {
                                if (type !== \"display\")
                                    return data.duration;

                                return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                            }
                        }
                    ]
                });

                mediaTable.on('processing.dt', dataTableProcessing);
                mediaTable.on('draw', { form: \$(\".playlistForm\") }, dataTableCreateTagEvents);
            }
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 430
        echo __("Off");
        echo "</option>' +
                '<option value=\"On\">";
        // line 431
        echo __("On");
        echo "</option>' +
                '<option value=\"Inherit\">";
        // line 432
        echo __("Inherit");
        echo "</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

        function playlistAddFormOpen() {
            \$(\"#playlistAddForm\").off(\"submit\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success && xhr.data.isDynamic == 0) {

                            // Open the editor
                            openPlaylistEditorForm(xhr.id);
                        }
                    }
                });
            });
        }

        function openPlaylistEditorForm (playlistId) {
            let requestPath = playlistEditorUrl;

            // replace id if necessary/exists
            requestPath = requestPath.replace(':id', playlistId);

            \$.ajax({
                url: requestPath,
                type: 'GET'
            }).done(function(res) {

                if(!res.success) {
                    // Login Form needed?
                    if(res.login) {
                        window.location.href = window.location.href;
                        location.reload(false);
                    } else {
                        // Just an error we dont know about
                        if(res.message == undefined) {
                            console.error(res);
                        } else {
                            console.error(res.message);
                        }
                    }
                } else {
                    // Clear container
                    \$('#editor-container').empty();

                    // Append form
                    \$('#editor-container').append(res.html);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                // Output error to console
                console.error(jqXHR, textStatus, errorThrown);
            });
        }
    </script>

    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 506
            echo "        ";
            if (($this->getAttribute($context["module"], "layoutDesignerJavaScript", [], "method") != "")) {
                // line 507
                echo "            ";
                $this->loadTemplate(($this->getAttribute($context["module"], "layoutDesignerJavaScript", [], "method") . ".twig"), "playlist-page.twig", 507)->display($context);
                // line 508
                echo "        ";
            }
            // line 509
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 510
        echo "
";
    }

    public function getTemplateName()
    {
        return "playlist-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 510,  724 => 509,  721 => 508,  718 => 507,  715 => 506,  698 => 505,  622 => 432,  618 => 431,  614 => 430,  581 => 400,  523 => 345,  479 => 304,  374 => 202,  369 => 200,  348 => 182,  332 => 169,  317 => 157,  297 => 139,  295 => 138,  293 => 137,  291 => 136,  283 => 132,  280 => 131,  277 => 130,  275 => 129,  272 => 128,  247 => 106,  243 => 105,  239 => 104,  235 => 103,  231 => 102,  227 => 101,  223 => 100,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  193 => 86,  189 => 85,  183 => 83,  180 => 82,  176 => 81,  167 => 76,  163 => 75,  157 => 73,  152 => 72,  148 => 71,  142 => 69,  137 => 68,  133 => 67,  130 => 66,  128 => 62,  122 => 60,  117 => 59,  112 => 58,  108 => 57,  99 => 51,  91 => 46,  82 => 40,  78 => 39,  70 => 34,  65 => 32,  62 => 31,  59 => 30,  50 => 26,  47 => 25,  44 => 24,  39 => 21,  37 => 22,  31 => 21,);
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
 * Copyright (C) 2019 Xibo Signage Ltd
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
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"{{ urlFor(\"playlist.add.form\") }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Playlist\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Playlists\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"playlistView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"name\" accesskey=\"\">{% trans \"Name\" %}</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"name\" type=\"text\" id=\"name\" value=\"\">
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
                                    { name: \"data-live-search\", value: \"true\" },
                                    { name: \"data-selected-text-format\", value: \"count > 4\" }
                                    ] %}

                                    {% set title %}{% trans \"Owner\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show items owned by the selected User.\" %}{% endset %}
                                    {{ inline.dropdown(\"userId\", \"single\", title, \"\", [{userId:null, userName:\"\"}]|merge(users), \"userId\", \"userName\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                    {% set title %}{% trans \"Owner User Group\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show items owned by users in the selected User Group.\" %}{% endset %}
                                    {{ inline.dropdown(\"ownerUserGroupId\", \"single\", title, \"\", [{groupId:null, group:\"\"}]|merge(groups), \"groupId\", \"group\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                    {% set title %}{% trans \"Layout ID\" %}{% endset %}
                                    {{ inline.number(\"layoutId\", title, layoutId) }}

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    {% set title %}{% trans \"Show\" %}{% endset %}
                                    {% set values = [{id: 1, value: \"All\"}, {id: 2, value: \"Only Used\"}, {id: 3, value: \"Only Unused\"}] %}
                                    {{ inline.dropdown(\"playlistStatusId\", \"single\", title, 1, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Media\" %}{% endset %}
                                    {{ inline.input(\"mediaLike\", title) }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"playlists\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Dynamic?\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Created\" %}</th>
                                <th>{% trans \"Modified\" %}</th>
                                <th>{% trans \"Stats?\" %}</th>
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

    <div id=\"dummyLayout\" style=\"display:none\"></div>

    <div id=\"editor-container\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>
    
{% endblock %}

{% block javaScript %}
    {# Add common file #}
    {% include \"common.twig\" %}
    
    <script src=\"{{ theme.rootUri() }}dist/playlistEditor.bundle.min.js?{{ version }}\"></script>
    <script type=\"text/javascript\">

        {# Custom translations #}
        {% autoescape \"js\" %}
             {# Insert custom translations here #}
        {% endautoescape %}

        var table;
        \$(document).ready(function() {

            // Create ourselves a little hidden layout for preview sizing, etc
            \$(\"#dummyLayout\").html('<div id=\"layout\" data-background-color=\"#000000\" style=\"background-color: #000000\" designer_scale=\"1\"><div id=\"region_-1\" zindex=\"1\" tip_scale=\"1\" designer_scale=\"1\" width=\"800\" height=\"450\"></div></div>');

            // Configure the DataTable
            table = \$(\"#playlists\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=playlistGrid\",
                        dataType: 'json',
                        success: function (json) {
                            if (json.success)
                                data = JSON.parse(json.data.value);
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
                                option: \"playlistGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"playlist.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"playlistId\"},
                    {
                        \"data\": \"name\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row) {
                            if (type !== \"display\" && type !== \"export\")
                                return data;

                            if (row.requiresDurationUpdate === 1) {
                                return '<span class=\"fa fa-clock-o\" title=\"{{ \"Changes have been made and we are recalculating this Playlists duration\" }}\"></span>';
                            } else if (row.requiresDurationUpdate !== 0) {
                                return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\") + ' <span class=\"fa fa-clock-o\" title=\"{{ \"This duration will be updated at \" }}' + moment(row.requiresDurationUpdate, \"X\").format(jsDateFormat) + '\"></span>';
                            }

                            return dataTableTimeFromSeconds(data, type, row);
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    { \"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn },
                    {\"data\": \"owner\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
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
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playlists_wrapper').find('.col-sm-6').eq(1));
        });

        // Playlist Add Form
        // contains a grid on the populate tab
        // hook up the grid
        var mediaTable;
        var nameFilter;
        var tagFilter;

        function playlistEditorFormOpen(formData) {

            // Clear container
            \$('#editor-container').empty();

            // Append form
            \$('#editor-container').append(formData.message);
        }

        function playlistFormOpen(dialog) {
            mediaTable = null;

            \$(dialog).find(\"input[name=filterMediaName]\").on(\"keyup\", _.debounce(function() {
                playlistFormPopulateMediaTable(dialog);
            }, 500));

            \$(dialog).find(\"input[name=filterMediaTag]\").on(\"change\", function() {
                playlistFormPopulateMediaTable(dialog);
            });

            // First time in there
            playlistFormPopulateMediaTable(dialog);

            // Run function to set the form submit behaviour
            playlistAddFormOpen();
        }

        ///
        /// Playlist Usage Form
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
                    \"url\": \"{{ urlFor(\"playlist.usage\") }}\".replace(\":id\", \$(\"#usageReportTable\").data().playlistId),
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

            \$(\"#playlistEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#playlistEventDateLink\").val(\"\")
                \$(\"#playlistEventDate\").val(\"\");
                \$(\"#playlistEventDateLink\").datetimepicker(\"update\");
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
                    \"url\": \"{{ urlFor(\"playlist.usage.layouts\") }}\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().playlistId)
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
                        dialog.find(\"#playlistEventDateLink\").datetimepicker('remove');
                    }
                });
            }
        }



        function playlistFormPopulateMediaTable(dialog) {
            nameFilter = \$(dialog).find(\"input[name=filterMediaName]\").val();
            tagFilter = \$(dialog).find(\"input[name=filterMediaTag]\").val();

            if (nameFilter === \"\" && tagFilter === \"\") {
                if (mediaTable != null) {
                    mediaTable.destroy();
                    mediaTable = null;
                    \$(\"#playlistLibraryMedia tbody\").empty();
                }

                return;
            }

            if (mediaTable != null) {
                mediaTable.ajax.reload();
            } else {
                mediaTable = \$(\"#playlistLibraryMedia\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    filter: false,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"{{ urlFor(\"library.search\") }}\",
                        \"data\": function (d) {
                            \$.extend(d, {media: nameFilter, tags: tagFilter, assignable:1});
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        {\"data\": dataTableCreateTags},
                        {
                            \"name\": \"duration\",
                            \"data\": function (data, type) {
                                if (type !== \"display\")
                                    return data.duration;

                                return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                            }
                        }
                    ]
                });

                mediaTable.on('processing.dt', dataTableProcessing);
                mediaTable.on('draw', { form: \$(\".playlistForm\") }, dataTableCreateTagEvents);
            }
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

        function playlistAddFormOpen() {
            \$(\"#playlistAddForm\").off(\"submit\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success && xhr.data.isDynamic == 0) {

                            // Open the editor
                            openPlaylistEditorForm(xhr.id);
                        }
                    }
                });
            });
        }

        function openPlaylistEditorForm (playlistId) {
            let requestPath = playlistEditorUrl;

            // replace id if necessary/exists
            requestPath = requestPath.replace(':id', playlistId);

            \$.ajax({
                url: requestPath,
                type: 'GET'
            }).done(function(res) {

                if(!res.success) {
                    // Login Form needed?
                    if(res.login) {
                        window.location.href = window.location.href;
                        location.reload(false);
                    } else {
                        // Just an error we dont know about
                        if(res.message == undefined) {
                            console.error(res);
                        } else {
                            console.error(res.message);
                        }
                    }
                } else {
                    // Clear container
                    \$('#editor-container').empty();

                    // Append form
                    \$('#editor-container').append(res.html);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                // Output error to console
                console.error(jqXHR, textStatus, errorThrown);
            });
        }
    </script>

    {% for module in modules %}
        {% if module.layoutDesignerJavaScript() != \"\" %}
            {% include module.layoutDesignerJavaScript() ~ \".twig\" %}
        {% endif %}
    {% endfor %}

{% endblock %}", "playlist-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\playlist-page.twig");
    }
}
