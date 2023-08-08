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

/* display-page.twig */
class __TwigTemplate_18e67522a7ba24ec5b33547d8c66de91ad984100101ce490055eeb98bd789ca6 extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "display-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "display-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add a Display via user_code displayed on the Player screen");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.addViaCode.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Display (Code)");
        echo "</a></li>
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" id=\"refreshGrid\" title=\"";
        // line 15
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> ";
        echo __("Refresh");
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
        echo __("Displays");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"active\"><a href=\"#filter-general\" role=\"tab\" data-toggle=\"tab\">";
        // line 27
        echo __("General");
        echo "</a></li>
                            <li><a href=\"#filter-advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 28
        echo __("Advanced");
        echo "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 33
        ob_start();
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                                    ";
        echo $context["inline"]->getnumber("displayId", ($context["title"] ?? null));
        echo "

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"display\" accesskey=\"\">";
        // line 37
        echo __("Name");
        echo "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"display\" type=\"text\" id=\"display\" value=\"\">
                                                <span class=\"input-group-addon\">
                                                    <input title=\"";
        // line 42
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 48
        ob_start();
        echo __("Status");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                                    ";
        ob_start();
        echo __("Up to date");
        $context["check"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                                    ";
        ob_start();
        echo __("Out of date");
        $context["cloud"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                                    ";
        ob_start();
        echo __("Downloading");
        $context["cross"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "1", "option" =>         // line 54
($context["check"] ?? null)], 2 => ["optionid" => "3", "option" =>         // line 55
($context["cloud"] ?? null)], 3 => ["optionid" => "2", "option" =>         // line 56
($context["cross"] ?? null)]];
        // line 58
        echo "                                    ";
        echo $context["inline"]->getdropdown("mediaInventoryStatus", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                                    ";
        // line 60
        ob_start();
        echo __("Logged In?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                                    ";
        ob_start();
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                                    ";
        ob_start();
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "1", "option" =>         // line 65
($context["yesOption"] ?? null)], 2 => ["optionid" => "0", "option" =>         // line 66
($context["noOption"] ?? null)]];
        // line 68
        echo "                                    ";
        echo $context["inline"]->getdropdown("loggedIn", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                                    ";
        // line 70
        ob_start();
        echo __("Authorised?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                                    ";
        ob_start();
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                                    ";
        ob_start();
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "1", "option" =>         // line 75
($context["yesOption"] ?? null)], 2 => ["optionid" => "0", "option" =>         // line 76
($context["noOption"] ?? null)]];
        // line 78
        echo "                                    ";
        echo $context["inline"]->getdropdown("authorised", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                                    ";
        // line 80
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                                    ";
        ob_start();
        echo __("Exact match?");
        $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                                    ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                                    ";
        echo $context["inline"]->getinputWithTags("tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null));
        echo "

                                    ";
        // line 85
        ob_start();
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                                    ";
        echo $context["inline"]->getdropdown("displayGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["displayGroupId" => null, "displayGroup" => ""]], ($context["displayGroups"] ?? null)), "displayGroupId", "displayGroup");
        echo "

                                    ";
        // line 88
        ob_start();
        echo __("Display Profile");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                                    ";
        echo $context["inline"]->getdropdown("displayProfileId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["displayProfileId" => null, "name" => ""]], ($context["displayProfiles"] ?? null)), "displayProfileId", "name");
        echo "

                                </div>

                                <div class=\"tab-pane\" id=\"filter-advanced\">
                                    ";
        // line 94
        ob_start();
        echo __("Last Accessed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"lastAccessed\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                                        <div class=\"input-group date\" style=\"display:table;\">
                                            <input type=\"hidden\" name=\"lastAccessed\" id=\"lastAccessed\" />
                                            <input class=\"form-control datePicker dateControl\" name=\"lastAccessedLink\"
                                                   type=\"text\" id=\"lastAccessedLink\" data-link-field=\"lastAccessed\"
                                                   data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly />
                                            <span class=\"input-group-addon\" id=\"lastAccessedControlCancel\">
                                                <span class=\"fa fa-times-circle\"></span>
                                            </span>
                                        </div>
                                    </div>

                                    ";
        // line 108
        ob_start();
        echo __("Player Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        echo "                                    ";
        ob_start();
        echo __("Android");
        $context["android"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                                    ";
        ob_start();
        echo __("Windows");
        $context["windows"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                                    ";
        ob_start();
        echo __("webOS");
        $context["webos"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                                    ";
        ob_start();
        echo __("Tizen");
        $context["sssp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "                                    ";
        ob_start();
        echo __("Linux");
        $context["linux"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "android", "option" =>         // line 116
($context["android"] ?? null)], 2 => ["optionid" => "windows", "option" =>         // line 117
($context["windows"] ?? null)], 3 => ["optionid" => "lg", "option" =>         // line 118
($context["webos"] ?? null)], 4 => ["optionid" => "sssp", "option" =>         // line 119
($context["sssp"] ?? null)], 5 => ["optionid" => "linux", "option" =>         // line 120
($context["linux"] ?? null)]];
        // line 122
        echo "                                    ";
        echo $context["inline"]->getdropdown("clientType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                                    ";
        // line 124
        ob_start();
        echo __("Player Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                                    ";
        echo $context["inline"]->getinput("clientCode", ($context["title"] ?? null));
        echo "

                                    ";
        // line 127
        ob_start();
        echo __("Mac Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                                    ";
        echo $context["inline"]->getinput("macAddress", ($context["title"] ?? null));
        echo "

                                    ";
        // line 130
        ob_start();
        echo __("IP Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                                    ";
        echo $context["inline"]->getinput("clientAddress", ($context["title"] ?? null));
        echo "

                                    ";
        // line 133
        ob_start();
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                                    ";
        ob_start();
        echo __("Landscape");
        $context["landscape"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                                    ";
        ob_start();
        echo __("Portrait");
        $context["portrait"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "landscape", "option" =>         // line 138
($context["landscape"] ?? null)], 2 => ["optionid" => "portrait", "option" =>         // line 139
($context["portrait"] ?? null)]];
        // line 141
        echo "                                    ";
        echo $context["inline"]->getdropdown("orientation", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "

                                    ";
        // line 143
        ob_start();
        echo __("Commercial Licence");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                                    ";
        ob_start();
        echo __("Licensed fully");
        $context["licensed"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        echo "                                    ";
        ob_start();
        echo __("Trial");
        $context["trial"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        echo "                                    ";
        ob_start();
        echo __("Not licenced");
        $context["notLinceced"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        echo "                                    ";
        ob_start();
        echo __("Not applicable");
        $context["notApplicable"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        echo "                                    ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "1", "option" =>         // line 150
($context["licensed"] ?? null)], 2 => ["optionid" => "2", "option" =>         // line 151
($context["trial"] ?? null)], 3 => ["optionid" => "0", "option" =>         // line 152
($context["notLinceced"] ?? null)], 4 => ["optionid" => "3", "option" =>         // line 153
($context["notApplicable"] ?? null)]];
        // line 155
        echo "                                    ";
        echo $context["inline"]->getdropdown("commercialLicence", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option");
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displays\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 165
        echo __("ID");
        echo "</th>
                                <th>";
        // line 166
        echo __("Display");
        echo "</th>
                                <th>";
        // line 167
        echo __("Status");
        echo "</th>
                                <th>";
        // line 168
        echo __("Authorised?");
        echo "</th>
                                <th>";
        // line 169
        echo __("Current Layout");
        echo "</th>
                                <th>";
        // line 170
        echo __("Storage Available");
        echo "</th>
                                <th>";
        // line 171
        echo __("Storage Total");
        echo "</th>
                                <th>";
        // line 172
        echo __("Storage Free %");
        echo "</th>
                                <th>";
        // line 173
        echo __("Description");
        echo "</th>
                                <th>";
        // line 174
        echo __("Orientation");
        echo "</th>
                                <th>";
        // line 175
        echo __("Resolution");
        echo "</th>
                                <th>";
        // line 176
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 177
        echo __("Default Layout");
        echo "</th>
                                <th>";
        // line 178
        echo __("Interleave Default");
        echo "</th>
                                <th>";
        // line 179
        echo __("Email Alert");
        echo "</th>
                                <th>";
        // line 180
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 181
        echo __("Last Accessed");
        echo "</th>
                                <th>";
        // line 182
        echo __("Display Profile");
        echo "</th>
                                <th>";
        // line 183
        echo __("Version");
        echo "</th>
                                <th>";
        // line 184
        echo __("Device Name");
        echo "</th>
                                <th>";
        // line 185
        echo __("IP Address");
        echo "</th>
                                <th>";
        // line 186
        echo __("Mac Address");
        echo "</th>
                                <th>";
        // line 187
        echo __("Timezone");
        echo "</th>
                                <th>";
        // line 188
        echo __("Latitude");
        echo "</th>
                                <th>";
        // line 189
        echo __("Longitude");
        echo "</th>
                                <th>";
        // line 190
        echo __("Screen shot?");
        echo "</th>
                                <th>";
        // line 191
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 192
        echo __("CMS Transfer?");
        echo "</th>
                                <th>";
        // line 193
        echo __("Bandwidth Limit");
        echo "</th>
                                <th>";
        // line 194
        echo __("Last Command");
        echo "</th>
                                <th>";
        // line 195
        echo __("XMR Registered");
        echo "</th>
                                <th>";
        // line 196
        echo __("Commercial Licence");
        echo "</th>
                                <th>";
        // line 197
        echo __("Remote");
        echo "</th>
                                <th>";
        // line 198
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

    // line 211
    public function block_javaScript($context, array $blocks = [])
    {
        // line 212
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#displays\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=displayGrid\",
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
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"displayGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                order: [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.search"), "html", null, true);
        echo "\",
                    \"data\": function (dataToSend) {
                        //make a new object so as not to destroy the input.
                        var data = {};
                        data.draw = dataToSend.draw;
                        data.length = dataToSend.length;
                        data.start = dataToSend.start;
                        data.order = dataToSend.order;
                        data.columns = [];

                        \$.each(dataToSend.columns, function (index, e) {
                            var col = {};
                            col.data = e.data;
                            if (e.name != null && e.name != \"\")
                                col.name = e.name;
                            data.columns.push(col);
                        });

                        \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                        return data;
                    }
                },
                createdRow: function (row, data, index) {
                    if (data.mediaInventoryStatus === 1) {
                        \$(row).addClass('success');
                    } else if (data.mediaInventoryStatus === 1) {
                        \$(row).addClass('danger');
                    } else {
                        \$(row).addClass('warning');
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {
                        \"data\": \"mediaInventoryStatus\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 2)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-cloud-download\";

                            return \"<span class='fa \" + icon + \"' title='\" + (row.statusDescription) + \"'></span>\";
                        }
                    },
                    {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false},
                    {
                        \"data\": \"storageAvailableSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageAvailableSpaceFormatted;
                        }
                    },
                    {
                        \"data\": \"storageTotalSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageTotalSpaceFormatted;
                        }
                    },
                    {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false},
                    {\"data\": \"description\", \"visible\": false},
                    {\"data\": \"orientation\", \"visible\": false},
                    {\"data\": \"resolution\", \"visible\": false},
                    {
                        \"name\": \"tags\",
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {\"data\": \"defaultLayout\", \"visible\": false},
                    {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix},
                    {
                        \"name\": \"displayProfileId\",
                        \"data\": function (data, type) {
                            return data.displayProfile;
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"clientSort\",
                        \"data\": function (data) {
                            return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                        },
                        \"visible\": false
                    },
                    {\"data\": \"deviceName\", \"visible\": false},
                    {\"data\": \"clientAddress\", \"visible\": false},
                    {\"data\": \"macAddress\"},
                    {\"data\": \"timeZone\", \"visible\": false},
                    {\"data\": \"latitude\", \"visible\": false},
                    {\"data\": \"longitude\", \"visible\": false},
                    {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\"},
                    {
                        \"name\": \"thumbnail\",
                        \"orderable\": false,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.thumbnail;

                            if (data.thumbnail != \"\") {
                                return '<a data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" /></a>';
                            }
                            else {
                                return \"\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"isCmsTransferInProgress\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"name\": \"isCmsTransferInProgress\"
                    },
                    {
                        \"name\": \"bandwidthLimit\",
                        \"data\": null,
                        \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                        \"visible\": false
                    },
                    {
                        \"data\": \"lastCommandSuccess\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 0)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-question\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"xmrChannel\",
                        \"render\": function (data, type, row) {
                            if (type === \"export\") {
                                return (data !== null && data !== \"\") ? 1 : 0;
                            }

                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data != null && data != \"\")
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"commercialLicence\",
                        \"name\": \"commercialLicence\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 3) {
                                return \"N/A\";
                            } else {
                                if (data == 1) {
                                    icon = \"fa-check\";
                                } else if (data == 0) {
                                    icon = \"fa-times\";
                                } else if (data == 2) {
                                    icon = \"fa-clock-o\";
                                }

                                return \"<span class='fa \" + icon + \"' title='\" + (row.commercialLicenceDescription) + \"'></span>\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"remote\",
                        \"render\": function (data, type, row) {
                            if (type === \"display\") {
                                var html = \"<div class='remote-icons'>\";
                                if (\"";
        // line 458
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", []), "html", null, true);
        echo "\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                    var link = \"";
        // line 459
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", []), "html", null, true);
        echo "\".replace('%s', row.clientAddress);
                                    html += '<a href=\"' + link + '\" title=\"";
        // line 460
        echo __("VNC to this Display");
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", []), "html", null, true);
        echo "\">'
                                        + '<i class=\"fa fa-eye\"></i></a>';
                                }

                                if (row.teamViewerLink !== \"\") {
                                    html += '<a href=\"' + row.teamViewerLink + '\" title=\"";
        // line 465
        echo __("TeamViewer to this Display");
        echo "\" target=\"_blank\">'
                                        + '<img src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                }

                                if (row.webkeyLink !== \"\") {
                                    html += '<a href=\"' + row.webkeyLink + '\" title=\"";
        // line 470
        echo __("Webkey to this Display");
        echo "\" target=\"_blank\">'
                                        + '<img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                }

                                return html + \"</div>\";

                            } else if (type === \"export\") {
                                if (row.teamViewerLink !== \"\") {
                                    return \"TeamViewer: \" + row.teamViewerLink;
                                }
                                if (row.webkeyLink !== \"\") {
                                    return \"Webkey: \" + row.webkeyLink;
                                }
                            } else {
                                return \"\";
                            }
                        },
                        \"visible\": true,
                        \"orderable\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#displays_wrapper').find('.col-sm-6').eq(1));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });

            \$(\"#lastAccessedControlCancel\").on('click', function() {
                // Clear the date picker
                var \$lastAccessed = \$(\"#lastAccessed\");
                \$lastAccessed.val(\"\");
                \$(\"#lastAccessedLink\").val(\"\");

                table.ajax.reload();

                // Reset local storage
                localStorage.setItem(\"displayView\", JSON.stringify(\$lastAccessed.closest(\"form\").serializeArray()));
            });
        });

        ";
        // line 519
        $context["showThumbnailColumn"] = $this->getAttribute(($context["currentUser"] ?? null), "getOptionValue", [0 => "showThumbnailColumn", 1 => 1], "method");
        // line 520
        echo "
        function displayRequestScreenshotFormSubmit() {
            \$(\"#displayRequestScreenshotForm\").submit();
            XiboDialogClose();

            ";
        // line 525
        if ((($context["showThumbnailColumn"] ?? null) == 1)) {
            // line 526
            echo "                var table = \$('#displays').DataTable();
                if (!table.column([\"thumbnail:name\"]).visible()) {
                    table.columns([\"screenShotRequested:name\", \"thumbnail:name\"]).visible(true);
                }
            ";
        }
        // line 531
        echo "        }


        function setDefaultMultiSelectFormOpen(dialog) {
            console.log('Multi-select form opened for default layout');

            // Inject a list of layouts into the form, in a drop down.
            var \$select = \$('<select name=\"layoutId\" class=\"form-control\" data-search-url=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search"), "html", null, true);
        echo "\" data-search-term=\"layout\" data-search-term-tags=\"tags\" data-id-property=\"layoutId\" data-text-property=\"layout\">');
            \$select.on('change', function() {
                console.log('Setting commit data to ' + \$(this).val());
                dialog.data().commitData = {layoutId: \$(this).val()};
            });

            // Add the list to the body.
            \$(dialog).find('.modal-body').append(\$select);

            makePagedSelect(\$select, dialog);
        }

        function displayFormLicenceCheckSubmit(form) {
            // Display commercial licence table column 
            \$('table#displays').DataTable().column('commercialLicence:name').visible(true);

            // Submit form
            form.submit();
        }

        function setMoveCmsMultiSelectFormOpen(dialog) {
            console.log('Multi-select form opened for move CMS');

            let \$message = \$(
                '<div class=\"col-sm-12 alert alert-info\">' +
                    \"<p>";
        // line 563
        echo __("Please note: Once the CMS Address and Key are authenticated in this form the Display will attempt to register with the CMS Instance details entered. Once transferred the Display will stop communicating with this CMS Instance.");
        echo "</p>\" +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$message);

            let \$cmsAddress =   \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsAddress\" accesskey=\"\">New CMS Address</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsAddress\" type=\"text\" id=\"newCmsAddress\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 574
        echo __("Full URL to the new CMS, including https:// ");
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            let \$cmsKey = \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsKey\" accesskey=\"\">New CMS Key</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsKey\" type=\"text\" id=\"newCmsKey\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 584
        echo __("CMS Secret Key associated with the provided new CMS Address");
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            let \$authenticationCode =   \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"twoFactorCode\" accesskey=\"\">Two Factor Code</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"twoFactorCode\" type=\"text\" id=\"twoFactorCode\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 594
        echo __("Please enter your Two Factor authentication code");
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$cmsAddress, \$cmsKey, \$authenticationCode);

            \$('#twoFactorCode, #newCmsAddress, #newCmsKey').on('change', function() {

                dialog.data().commitData = {
                        newCmsAddress: \$('#newCmsAddress').val(),
                        newCmsKey: \$('#newCmsKey').val(),
                        twoFactorCode: \$('#twoFactorCode').val()
                    };
            });
        }

        function displayEditFormOpen(dialog) {

            // Setup display profile form
            displayProfileFormOpen();
            XiboInitialise('#settings-from-display-profile');

            var \$settings = \$(dialog).find('#settings-from-display-profile').find('.form-group');
            var \$table = \$(dialog).find('#settings-from-profile tbody').empty();
            var override = \$(dialog).data('extra');

            // Parse special fields
            override.forEach(function(field, index) {
                if(['lockOptions','pictureOptions', 'timers'].includes(field.name)) {
                    let parsedValues = JSON.parse(field.value);
                    
                    // Add values to the override array
                    \$.each(parsedValues, function(name, value){

                        if(name == 'keylock') {
                            \$.each(value, function(keylockName, keylockValue){
                                if(keylockName == 'local') {
                                    keylockName = 'keylockLocal';
                                }

                                if(keylockName == 'remote') {
                                    keylockName = 'keylockRemote';
                                }

                                override.push({name: keylockName, value: keylockValue})
                            });
                        }
                        // Convert boolean and numbers to string
                        value = (['boolean','number'].includes(typeof value)) ? value.toString() : value;

                        override.push({name: name, value: value})
                    });
                }
            });

            // Method to create a new input field based on the hidden form
            const createInputField = function(target, inputName, newValue = null) {
                
                let select2FixFlag = false;

                // Grab input field from hidden table
                let \$inputFields = \$settings.find('#' + inputName);

                // If no input field is capture by ID, get special fields
                if(\$inputFields.length == 0) {
                    if( \$settings.find('.multiSelect').length > 0) {
                        // Copy special fields ( timers, pictureOptions ) by selected option
                        \$inputFields = \$settings.find('.multiSelect option:selected[value=\"' + inputName + '\"]').parents('.form-group:first').find('.multiSelect, .multiSelectInputs');
                    } 
                } else if(\$inputFields.length == 1 && \$inputFields.attr('type') == 'hidden') {
                    // Time inputs
                    \$inputFields = \$inputFields.parent().find('input');
                } else if(\$inputFields.length == 1 && \$inputFields.hasClass('select2-hidden-accessible')) {
                    select2FixFlag = true;
                    // Destroy select2 before copying
                    \$inputFields.select2('destroy');
                }

                // Save old field before cloning
                \$inputFieldsOld = \$inputFields;

                // Clone input fields ( to be able to reuse the originals )
                \$inputFields = \$inputFields.clone(true);

                if(select2FixFlag) {
                    // Restore old field to a select2
                    makePagedSelect(\$inputFieldsOld);
                }
                // Add input field to the target
                \$(target).html(\$inputFields);

                // Set value if defined
                if(newValue != null) {
                    if(\$(target).find('.multiSelectInputs .timePickerDisplayEditForm').length > 0) {
                        // MULTI TIMERS
                        \$(target).find('#' + \$(target).find('.timersOn').attr('id') + 'Link').timepicker('setTime', newValue.on);
                        \$(target).find('#' + \$(target).find('.timersOff').attr('id') + 'Link').timepicker('setTime', newValue.off);
                    } else if(\$(target).find('.multiSelectInputs .pictureControlsSlider').length > 0) {
                        // SLIDER
                        if(!\$.isNumeric(newValue)) { // If value is a label, get index
                            \$(target).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                                if(\$(el).html() == newValue) {
                                    newValue = idx;
                                    return false; 
                                }
                            });
                        }
                        
                        // Set value
                        \$(target).find('.pictureControlsSlider').slider('setAttribute', 'value', newValue);
                    } else if(\$inputFields.attr('type') == 'checkbox') {
                        // CHECKBOX
                        \$(\$inputFields).prop('checked', newValue);
                    } else {
                        \$(\$inputFields).val(newValue);
                    }
                }

                // Reload select 2 with new value
                if(select2FixFlag) {
                    // Restore select2 after value set
                    makePagedSelect(\$inputFields);
                }

                // If there's a multiselect, set the value of the dropdown ( it's not kept on cloning ) and hide it
                \$(target).find('.multiSelect').val(inputName).hide();

                // Style multi selects
                if(\$(target).find('.multiSelectInputs').length > 0) {
                    // Calculate column size for bootstrap
                    let colSize = Math.round(12/\$(target).find('.multiSelectInputs').length);
                    
                    //Remove all style classes and add the new size class
                    \$(target).find('.multiSelectInputs').attr('class', 'multiSelectInputs col-sm-' + colSize)
                }

                // Set data propeties
                \$(target).attr('data-editing', 'true');
                \$(target).attr('data-input-name', inputName);

                // Remove click to edit event
                \$(target).unbind('click');

                // Fixes for slider
                \$(target).find('.slider').addClass('scaled-slider');
                \$(target).find('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });

                // Add help text if exists on label
                var inputHelpText = \$(target).parent('tr').find('td:first strong').attr('title');
                if(inputHelpText) {
                    \$(target).append('<div class=\"text-muted\">' + inputHelpText + '</div>');
                }

                let \$newButton = \$('<button class=\"btn btn-danger btn-xs pull-right button-close-override\" type=\"button\"><i class=\"fa fa-times\"></i></button>').click(function (e) {
                    e.stopPropagation();
                    restoreInputField(target, inputName);
                 });
                \$(target).append(\$newButton);
            };


            // Method to restore the input field to the edit button
            const restoreInputField = function(target, inputName) {

                \$(target).html('<button class=\"btn btn-block\" type=\"button\"><i class=\"fa fa-edit\"></i></button>');

                // Handlers for field edit
                \$(target).off().click(function() {
                    if(!\$(this).data('editing')) {
                        createInputField(\$(this), inputName);
                    }
                });

                \$(target).attr('data-editing', 'false');
            };

            // Build table
            \$.each(\$settings, function(index, element) {
                var \$label = \$(element).find('label');
                var \$input = \$(element).find('input,select');
                var \$help = \$(element).find('.help-block');
                var over = \$label.prop(\"for\");
                var value = '';
                var text = '';
                var help = \$help.length > 0 ? \$help.text() : '';

                // Skip for some fields
                if(['name', 'isDefault'].includes(over)) {
                    return true;
                }

                if(\$(element).hasClass('form-group-timers')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();
                    
                    // Get value
                    value = \$(element).find('.timersOn').val() + ' - ' + \$(element).find('.timersOff').val(); 
                } else if(\$(element).hasClass('form-group-picture-options')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();

                    // Get labels
                    var labels = [];
                    \$(element).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                        labels.push(\$(el).html());
                    });

                    // Get value
                    value = \$(element).find('.multiSelectInputs .pictureControlsSlider').slider('getValue');

                    // If specific value has a label, use it as value
                    if(labels[value] != undefined) {
                        value = labels[value];
                    }
                } else if(\$input.attr('type') == 'checkbox'){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.is(\":checked\");

                } else if(\$input.is('select')){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.find('option:selected').text();
                } else {
                    // Get text and value
                    text = \$label.text();
                    value = \$input.val();
                }

                // Skip empty fields
                if(over == '' || over == undefined || over == null) {
                    return true;
                }

                // Append new row to the table
                var \$tableNewRow = \$('<tr class=\"row-fluid\"><td class=\"col-xs-5\"><strong title=\"' + help + '\">' + text + '</strong></td><td class=\"col-xs-3\"><div>' + value + '</div></td><td class=\"col-xs-4 override-input\" data-editing=\"false\" data-input-name=\"' + over + '\"><button class=\"btn btn-block\" type=\"button\"><i class=\"fa fa-edit\"></i></button></td></tr>').appendTo(\$table);

                // Get override element
                var overrideEl = override.find((x) => { return x.name === over; });
                if(overrideEl != undefined) { //If element was found, create an input

                    // Create input with override value
                    createInputField(\$tableNewRow.find('.override-input'), over, overrideEl.value);
                }
            });

            // Handlers for field edit
            \$(dialog).find('.override-input[data-editing=\"false\"]').click(function() {
                const inputName = \$(this).data('inputName');
                createInputField(\$(this), inputName);
            });

            // Refresh on tab switch to fix broken labels
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', () =>  {
                \$('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });
            });

            // Call XiboInitialise on table
            XiboInitialise('#settings-from-profile');
        }

        // Custom submit for display form
        function displayEditFormSubmit() {
            let \$form = \$('#displayEditForm');
            // Grab and alter the value in the bandwidth limit field
            let bandwidthLimitField = \$form.find(\"input[name=bandwidthLimit]\");
            let bandwidthLimitUnitsField = \$form.find(\"select[name=bandwidthLimitUnits]\");
            let bandwidthLimit = bandwidthLimitField.val();

            if (bandwidthLimitUnitsField.val() == 'mb') {
                bandwidthLimit = bandwidthLimit * 1024;
            } else if (bandwidthLimitUnitsField.val() == 'gb') {
                bandwidthLimit = bandwidthLimit * 1024 * 1024;
            }

            // Set the field
            bandwidthLimitField.prop('value', bandwidthLimit);

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
    </script>

    <style>
        #settings-from-profile tr.row-fluid { 
            height: 50px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "display-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1001 => 594,  988 => 584,  975 => 574,  961 => 563,  933 => 538,  924 => 531,  917 => 526,  915 => 525,  908 => 520,  906 => 519,  855 => 471,  851 => 470,  844 => 466,  840 => 465,  830 => 460,  826 => 459,  822 => 458,  614 => 253,  598 => 240,  578 => 223,  565 => 212,  562 => 211,  546 => 198,  542 => 197,  538 => 196,  534 => 195,  530 => 194,  526 => 193,  522 => 192,  518 => 191,  514 => 190,  510 => 189,  506 => 188,  502 => 187,  498 => 186,  494 => 185,  490 => 184,  486 => 183,  482 => 182,  478 => 181,  474 => 180,  470 => 179,  466 => 178,  462 => 177,  458 => 176,  454 => 175,  450 => 174,  446 => 173,  442 => 172,  438 => 171,  434 => 170,  430 => 169,  426 => 168,  422 => 167,  418 => 166,  414 => 165,  400 => 155,  398 => 153,  397 => 152,  396 => 151,  395 => 150,  393 => 148,  388 => 147,  383 => 146,  378 => 145,  373 => 144,  369 => 143,  363 => 141,  361 => 139,  360 => 138,  358 => 136,  353 => 135,  348 => 134,  344 => 133,  338 => 131,  334 => 130,  328 => 128,  324 => 127,  318 => 125,  314 => 124,  308 => 122,  306 => 120,  305 => 119,  304 => 118,  303 => 117,  302 => 116,  300 => 114,  295 => 113,  290 => 112,  285 => 111,  280 => 110,  275 => 109,  271 => 108,  256 => 96,  253 => 95,  249 => 94,  240 => 89,  236 => 88,  230 => 86,  226 => 85,  220 => 83,  215 => 82,  210 => 81,  206 => 80,  200 => 78,  198 => 76,  197 => 75,  195 => 73,  190 => 72,  185 => 71,  181 => 70,  175 => 68,  173 => 66,  172 => 65,  170 => 63,  165 => 62,  160 => 61,  156 => 60,  150 => 58,  148 => 56,  147 => 55,  146 => 54,  144 => 52,  139 => 51,  134 => 50,  129 => 49,  125 => 48,  116 => 42,  108 => 37,  101 => 34,  97 => 33,  89 => 28,  85 => 27,  78 => 23,  73 => 21,  70 => 20,  67 => 19,  58 => 15,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a Display via user_code displayed on the Player screen\" %}\" href=\"{{ urlFor(\"display.addViaCode.form\") }}\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Display (Code)\" %}</a></li>
        <li class=\"btn btn-success btn-xs\"><a class=\"btns\" id=\"refreshGrid\" title=\"{% trans \"Refresh the Table\" %}\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> {% trans \"Refresh\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Displays\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"active\"><a href=\"#filter-general\" role=\"tab\" data-toggle=\"tab\">{% trans \"General\" %}</a></li>
                            <li><a href=\"#filter-advanced\" role=\"tab\" data-toggle=\"tab\">{% trans \"Advanced\" %}</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    {% set title %}{% trans \"ID\" %}{% endset %}
                                    {{ inline.number(\"displayId\", title) }}

                                    <div class=\"form-group \">
                                        <label class=\"control-label\" title=\"\" for=\"display\" accesskey=\"\">{% trans \"Name\" %}</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"display\" type=\"text\" id=\"display\" value=\"\">
                                                <span class=\"input-group-addon\">
                                                    <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    {% set title %}{% trans \"Status\" %}{% endset %}
                                    {% set check %}{% trans \"Up to date\" %}{% endset %}
                                    {% set cloud %}{% trans \"Out of date\" %}{% endset %}
                                    {% set cross %}{% trans \"Downloading\" %}{% endset %}
                                    {% set options = [
                                        { optionid: \"\", option: \"\" },
                                        { optionid: \"1\", option: check},
                                        { optionid: \"3\", option: cloud},
                                        { optionid: \"2\", option: cross}
                                    ] %}
                                    {{ inline.dropdown(\"mediaInventoryStatus\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                                    {% set title %}{% trans \"Logged In?\" %}{% endset %}
                                    {% set yesOption %}{% trans \"Yes\" %}{% endset %}
                                    {% set noOption %}{% trans \"No\" %}{% endset %}
                                    {% set options = [
                                        { optionid: \"\", option: \"\" },
                                        { optionid: \"1\", option: yesOption},
                                        { optionid: \"0\", option: noOption}
                                    ] %}
                                    {{ inline.dropdown(\"loggedIn\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                                    {% set title %}{% trans \"Authorised?\" %}{% endset %}
                                    {% set yesOption %}{% trans \"Yes\" %}{% endset %}
                                    {% set noOption %}{% trans \"No\" %}{% endset %}
                                    {% set options = [
                                        { optionid: \"\", option: \"\" },
                                        { optionid: \"1\", option: yesOption },
                                        { optionid: \"0\", option: noOption},
                                    ] %}
                                    {{ inline.dropdown(\"authorised\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                                    {% set title %}{% trans \"Tags\" %}{% endset %}
                                    {% set exactTagTitle %}{% trans \"Exact match?\" %}{% endset %}
                                    {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.\" %}{% endset %}
                                    {{ inline.inputWithTags(\"tags\", title, null, helpText, null, null, null, \"exactTags\", exactTagTitle) }}

                                    {% set title %}{% trans \"Display Group\" %}{% endset %}
                                    {{ inline.dropdown(\"displayGroupId\", \"single\", title, \"\", [{displayGroupId:null, displayGroup:\"\"}]|merge(displayGroups), \"displayGroupId\", \"displayGroup\") }}

                                    {% set title %}{% trans \"Display Profile\" %}{% endset %}
                                    {{ inline.dropdown(\"displayProfileId\", \"single\", title, \"\", [{displayProfileId:null, name:\"\"}]|merge(displayProfiles), \"displayProfileId\", \"name\") }}

                                </div>

                                <div class=\"tab-pane\" id=\"filter-advanced\">
                                    {% set title %}{% trans \"Last Accessed\" %}{% endset %}
                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"lastAccessed\">{{ title }}</label>
                                        <div class=\"input-group date\" style=\"display:table;\">
                                            <input type=\"hidden\" name=\"lastAccessed\" id=\"lastAccessed\" />
                                            <input class=\"form-control datePicker dateControl\" name=\"lastAccessedLink\"
                                                   type=\"text\" id=\"lastAccessedLink\" data-link-field=\"lastAccessed\"
                                                   data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly />
                                            <span class=\"input-group-addon\" id=\"lastAccessedControlCancel\">
                                                <span class=\"fa fa-times-circle\"></span>
                                            </span>
                                        </div>
                                    </div>

                                    {% set title %}{% trans \"Player Type\" %}{% endset %}
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
                                    {{ inline.dropdown(\"clientType\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                                    {% set title %}{% trans \"Player Code\" %}{% endset %}
                                    {{ inline.input(\"clientCode\", title) }}

                                    {% set title %}{% trans \"Mac Address\" %}{% endset %}
                                    {{ inline.input(\"macAddress\", title) }}

                                    {% set title %}{% trans \"IP Address\" %}{% endset %}
                                    {{ inline.input(\"clientAddress\", title) }}

                                    {% set title %}{% trans \"Orientation\" %}{% endset %}
                                    {% set landscape %}{% trans \"Landscape\" %}{% endset %}
                                    {% set portrait %}{% trans \"Portrait\" %}{% endset %}
                                    {% set options = [
                                        { optionid: \"\", option: \"\" },
                                        { optionid: \"landscape\", option: landscape},
                                        { optionid: \"portrait\", option: portrait}
                                    ] %}
                                    {{ inline.dropdown(\"orientation\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                                    {% set title %}{% trans \"Commercial Licence\" %}{% endset %}
                                    {% set licensed %}{% trans \"Licensed fully\" %}{% endset %}
                                    {% set trial %}{% trans \"Trial\" %}{% endset %}
                                    {% set notLinceced %}{% trans \"Not licenced\" %}{% endset %}
                                    {% set notApplicable %}{% trans \"Not applicable\" %}{% endset %}
                                    {% set options = [
                                        { optionid: \"\", option: \"\" },
                                        { optionid: \"1\", option: licensed},
                                        { optionid: \"2\", option: trial},
                                        { optionid: \"0\", option: notLinceced},
                                        { optionid: \"3\", option: notApplicable}
                                    ] %}
                                    {{ inline.dropdown(\"commercialLicence\", \"single\", title, \"\", options, \"optionid\", \"option\") }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displays\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Display\" %}</th>
                                <th>{% trans \"Status\" %}</th>
                                <th>{% trans \"Authorised?\" %}</th>
                                <th>{% trans \"Current Layout\" %}</th>
                                <th>{% trans \"Storage Available\" %}</th>
                                <th>{% trans \"Storage Total\" %}</th>
                                <th>{% trans \"Storage Free %\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Orientation\" %}</th>
                                <th>{% trans \"Resolution\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Default Layout\" %}</th>
                                <th>{% trans \"Interleave Default\" %}</th>
                                <th>{% trans \"Email Alert\" %}</th>
                                <th>{% trans \"Logged In\" %}</th>
                                <th>{% trans \"Last Accessed\" %}</th>
                                <th>{% trans \"Display Profile\" %}</th>
                                <th>{% trans \"Version\" %}</th>
                                <th>{% trans \"Device Name\" %}</th>
                                <th>{% trans \"IP Address\" %}</th>
                                <th>{% trans \"Mac Address\" %}</th>
                                <th>{% trans \"Timezone\" %}</th>
                                <th>{% trans \"Latitude\" %}</th>
                                <th>{% trans \"Longitude\" %}</th>
                                <th>{% trans \"Screen shot?\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"CMS Transfer?\" %}</th>
                                <th>{% trans \"Bandwidth Limit\" %}</th>
                                <th>{% trans \"Last Command\" %}</th>
                                <th>{% trans \"XMR Registered\" %}</th>
                                <th>{% trans \"Commercial Licence\" %}</th>
                                <th>{% trans \"Remote\" %}</th>
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
            var table = \$(\"#displays\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=displayGrid\",
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
                                option: \"displayGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                filter: false,
                searchDelay: 3000,
                order: [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"display.search\") }}\",
                    \"data\": function (dataToSend) {
                        //make a new object so as not to destroy the input.
                        var data = {};
                        data.draw = dataToSend.draw;
                        data.length = dataToSend.length;
                        data.start = dataToSend.start;
                        data.order = dataToSend.order;
                        data.columns = [];

                        \$.each(dataToSend.columns, function (index, e) {
                            var col = {};
                            col.data = e.data;
                            if (e.name != null && e.name != \"\")
                                col.name = e.name;
                            data.columns.push(col);
                        });

                        \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                        return data;
                    }
                },
                createdRow: function (row, data, index) {
                    if (data.mediaInventoryStatus === 1) {
                        \$(row).addClass('success');
                    } else if (data.mediaInventoryStatus === 1) {
                        \$(row).addClass('danger');
                    } else {
                        \$(row).addClass('warning');
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {
                        \"data\": \"mediaInventoryStatus\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 2)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-cloud-download\";

                            return \"<span class='fa \" + icon + \"' title='\" + (row.statusDescription) + \"'></span>\";
                        }
                    },
                    {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false},
                    {
                        \"data\": \"storageAvailableSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageAvailableSpaceFormatted;
                        }
                    },
                    {
                        \"data\": \"storageTotalSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageTotalSpaceFormatted;
                        }
                    },
                    {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false},
                    {\"data\": \"description\", \"visible\": false},
                    {\"data\": \"orientation\", \"visible\": false},
                    {\"data\": \"resolution\", \"visible\": false},
                    {
                        \"name\": \"tags\",
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {\"data\": \"defaultLayout\", \"visible\": false},
                    {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix},
                    {
                        \"name\": \"displayProfileId\",
                        \"data\": function (data, type) {
                            return data.displayProfile;
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"clientSort\",
                        \"data\": function (data) {
                            return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                        },
                        \"visible\": false
                    },
                    {\"data\": \"deviceName\", \"visible\": false},
                    {\"data\": \"clientAddress\", \"visible\": false},
                    {\"data\": \"macAddress\"},
                    {\"data\": \"timeZone\", \"visible\": false},
                    {\"data\": \"latitude\", \"visible\": false},
                    {\"data\": \"longitude\", \"visible\": false},
                    {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\"},
                    {
                        \"name\": \"thumbnail\",
                        \"orderable\": false,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.thumbnail;

                            if (data.thumbnail != \"\") {
                                return '<a data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" /></a>';
                            }
                            else {
                                return \"\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"isCmsTransferInProgress\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"name\": \"isCmsTransferInProgress\"
                    },
                    {
                        \"name\": \"bandwidthLimit\",
                        \"data\": null,
                        \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                        \"visible\": false
                    },
                    {
                        \"data\": \"lastCommandSuccess\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 0)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-question\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"xmrChannel\",
                        \"render\": function (data, type, row) {
                            if (type === \"export\") {
                                return (data !== null && data !== \"\") ? 1 : 0;
                            }

                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data != null && data != \"\")
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"commercialLicence\",
                        \"name\": \"commercialLicence\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 3) {
                                return \"N/A\";
                            } else {
                                if (data == 1) {
                                    icon = \"fa-check\";
                                } else if (data == 0) {
                                    icon = \"fa-times\";
                                } else if (data == 2) {
                                    icon = \"fa-clock-o\";
                                }

                                return \"<span class='fa \" + icon + \"' title='\" + (row.commercialLicenceDescription) + \"'></span>\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"remote\",
                        \"render\": function (data, type, row) {
                            if (type === \"display\") {
                                var html = \"<div class='remote-icons'>\";
                                if (\"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                    var link = \"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\".replace('%s', row.clientAddress);
                                    html += '<a href=\"' + link + '\" title=\"{% trans \"VNC to this Display\" %}\" target=\"{{ settings.SHOW_DISPLAY_AS_VNC_TGT }}\">'
                                        + '<i class=\"fa fa-eye\"></i></a>';
                                }

                                if (row.teamViewerLink !== \"\") {
                                    html += '<a href=\"' + row.teamViewerLink + '\" title=\"{% trans \"TeamViewer to this Display\" %}\" target=\"_blank\">'
                                        + '<img src=\"{{ theme.rootUri() }}theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                }

                                if (row.webkeyLink !== \"\") {
                                    html += '<a href=\"' + row.webkeyLink + '\" title=\"{% trans \"Webkey to this Display\" %}\" target=\"_blank\">'
                                        + '<img src=\"{{ theme.rootUri() }}theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                }

                                return html + \"</div>\";

                            } else if (type === \"export\") {
                                if (row.teamViewerLink !== \"\") {
                                    return \"TeamViewer: \" + row.teamViewerLink;
                                }
                                if (row.webkeyLink !== \"\") {
                                    return \"Webkey: \" + row.webkeyLink;
                                }
                            } else {
                                return \"\";
                            }
                        },
                        \"visible\": true,
                        \"orderable\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#displays_wrapper').find('.col-sm-6').eq(1));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });

            \$(\"#lastAccessedControlCancel\").on('click', function() {
                // Clear the date picker
                var \$lastAccessed = \$(\"#lastAccessed\");
                \$lastAccessed.val(\"\");
                \$(\"#lastAccessedLink\").val(\"\");

                table.ajax.reload();

                // Reset local storage
                localStorage.setItem(\"displayView\", JSON.stringify(\$lastAccessed.closest(\"form\").serializeArray()));
            });
        });

        {% set showThumbnailColumn = currentUser.getOptionValue(\"showThumbnailColumn\", 1) %}

        function displayRequestScreenshotFormSubmit() {
            \$(\"#displayRequestScreenshotForm\").submit();
            XiboDialogClose();

            {% if showThumbnailColumn == 1 %}
                var table = \$('#displays').DataTable();
                if (!table.column([\"thumbnail:name\"]).visible()) {
                    table.columns([\"screenShotRequested:name\", \"thumbnail:name\"]).visible(true);
                }
            {% endif %}
        }


        function setDefaultMultiSelectFormOpen(dialog) {
            console.log('Multi-select form opened for default layout');

            // Inject a list of layouts into the form, in a drop down.
            var \$select = \$('<select name=\"layoutId\" class=\"form-control\" data-search-url=\"{{ urlFor(\"layout.search\") }}\" data-search-term=\"layout\" data-search-term-tags=\"tags\" data-id-property=\"layoutId\" data-text-property=\"layout\">');
            \$select.on('change', function() {
                console.log('Setting commit data to ' + \$(this).val());
                dialog.data().commitData = {layoutId: \$(this).val()};
            });

            // Add the list to the body.
            \$(dialog).find('.modal-body').append(\$select);

            makePagedSelect(\$select, dialog);
        }

        function displayFormLicenceCheckSubmit(form) {
            // Display commercial licence table column 
            \$('table#displays').DataTable().column('commercialLicence:name').visible(true);

            // Submit form
            form.submit();
        }

        function setMoveCmsMultiSelectFormOpen(dialog) {
            console.log('Multi-select form opened for move CMS');

            let \$message = \$(
                '<div class=\"col-sm-12 alert alert-info\">' +
                    \"<p>{% trans 'Please note: Once the CMS Address and Key are authenticated in this form the Display will attempt to register with the CMS Instance details entered. Once transferred the Display will stop communicating with this CMS Instance.' %}</p>\" +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$message);

            let \$cmsAddress =   \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsAddress\" accesskey=\"\">New CMS Address</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsAddress\" type=\"text\" id=\"newCmsAddress\" value=\"\">' +
                        '<span class=\"help-block\">{% trans \"Full URL to the new CMS, including https:// \"%}</span>' +
                    '</div>' +
                '</div>'
            );

            let \$cmsKey = \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsKey\" accesskey=\"\">New CMS Key</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsKey\" type=\"text\" id=\"newCmsKey\" value=\"\">' +
                        '<span class=\"help-block\">{% trans \"CMS Secret Key associated with the provided new CMS Address\"%}</span>' +
                    '</div>' +
                '</div>'
            );

            let \$authenticationCode =   \$(
                '<div class=\"form-group\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"twoFactorCode\" accesskey=\"\">Two Factor Code</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"twoFactorCode\" type=\"text\" id=\"twoFactorCode\" value=\"\">' +
                        '<span class=\"help-block\">{% trans \"Please enter your Two Factor authentication code\"%}</span>' +
                    '</div>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$cmsAddress, \$cmsKey, \$authenticationCode);

            \$('#twoFactorCode, #newCmsAddress, #newCmsKey').on('change', function() {

                dialog.data().commitData = {
                        newCmsAddress: \$('#newCmsAddress').val(),
                        newCmsKey: \$('#newCmsKey').val(),
                        twoFactorCode: \$('#twoFactorCode').val()
                    };
            });
        }

        function displayEditFormOpen(dialog) {

            // Setup display profile form
            displayProfileFormOpen();
            XiboInitialise('#settings-from-display-profile');

            var \$settings = \$(dialog).find('#settings-from-display-profile').find('.form-group');
            var \$table = \$(dialog).find('#settings-from-profile tbody').empty();
            var override = \$(dialog).data('extra');

            // Parse special fields
            override.forEach(function(field, index) {
                if(['lockOptions','pictureOptions', 'timers'].includes(field.name)) {
                    let parsedValues = JSON.parse(field.value);
                    
                    // Add values to the override array
                    \$.each(parsedValues, function(name, value){

                        if(name == 'keylock') {
                            \$.each(value, function(keylockName, keylockValue){
                                if(keylockName == 'local') {
                                    keylockName = 'keylockLocal';
                                }

                                if(keylockName == 'remote') {
                                    keylockName = 'keylockRemote';
                                }

                                override.push({name: keylockName, value: keylockValue})
                            });
                        }
                        // Convert boolean and numbers to string
                        value = (['boolean','number'].includes(typeof value)) ? value.toString() : value;

                        override.push({name: name, value: value})
                    });
                }
            });

            // Method to create a new input field based on the hidden form
            const createInputField = function(target, inputName, newValue = null) {
                
                let select2FixFlag = false;

                // Grab input field from hidden table
                let \$inputFields = \$settings.find('#' + inputName);

                // If no input field is capture by ID, get special fields
                if(\$inputFields.length == 0) {
                    if( \$settings.find('.multiSelect').length > 0) {
                        // Copy special fields ( timers, pictureOptions ) by selected option
                        \$inputFields = \$settings.find('.multiSelect option:selected[value=\"' + inputName + '\"]').parents('.form-group:first').find('.multiSelect, .multiSelectInputs');
                    } 
                } else if(\$inputFields.length == 1 && \$inputFields.attr('type') == 'hidden') {
                    // Time inputs
                    \$inputFields = \$inputFields.parent().find('input');
                } else if(\$inputFields.length == 1 && \$inputFields.hasClass('select2-hidden-accessible')) {
                    select2FixFlag = true;
                    // Destroy select2 before copying
                    \$inputFields.select2('destroy');
                }

                // Save old field before cloning
                \$inputFieldsOld = \$inputFields;

                // Clone input fields ( to be able to reuse the originals )
                \$inputFields = \$inputFields.clone(true);

                if(select2FixFlag) {
                    // Restore old field to a select2
                    makePagedSelect(\$inputFieldsOld);
                }
                // Add input field to the target
                \$(target).html(\$inputFields);

                // Set value if defined
                if(newValue != null) {
                    if(\$(target).find('.multiSelectInputs .timePickerDisplayEditForm').length > 0) {
                        // MULTI TIMERS
                        \$(target).find('#' + \$(target).find('.timersOn').attr('id') + 'Link').timepicker('setTime', newValue.on);
                        \$(target).find('#' + \$(target).find('.timersOff').attr('id') + 'Link').timepicker('setTime', newValue.off);
                    } else if(\$(target).find('.multiSelectInputs .pictureControlsSlider').length > 0) {
                        // SLIDER
                        if(!\$.isNumeric(newValue)) { // If value is a label, get index
                            \$(target).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                                if(\$(el).html() == newValue) {
                                    newValue = idx;
                                    return false; 
                                }
                            });
                        }
                        
                        // Set value
                        \$(target).find('.pictureControlsSlider').slider('setAttribute', 'value', newValue);
                    } else if(\$inputFields.attr('type') == 'checkbox') {
                        // CHECKBOX
                        \$(\$inputFields).prop('checked', newValue);
                    } else {
                        \$(\$inputFields).val(newValue);
                    }
                }

                // Reload select 2 with new value
                if(select2FixFlag) {
                    // Restore select2 after value set
                    makePagedSelect(\$inputFields);
                }

                // If there's a multiselect, set the value of the dropdown ( it's not kept on cloning ) and hide it
                \$(target).find('.multiSelect').val(inputName).hide();

                // Style multi selects
                if(\$(target).find('.multiSelectInputs').length > 0) {
                    // Calculate column size for bootstrap
                    let colSize = Math.round(12/\$(target).find('.multiSelectInputs').length);
                    
                    //Remove all style classes and add the new size class
                    \$(target).find('.multiSelectInputs').attr('class', 'multiSelectInputs col-sm-' + colSize)
                }

                // Set data propeties
                \$(target).attr('data-editing', 'true');
                \$(target).attr('data-input-name', inputName);

                // Remove click to edit event
                \$(target).unbind('click');

                // Fixes for slider
                \$(target).find('.slider').addClass('scaled-slider');
                \$(target).find('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });

                // Add help text if exists on label
                var inputHelpText = \$(target).parent('tr').find('td:first strong').attr('title');
                if(inputHelpText) {
                    \$(target).append('<div class=\"text-muted\">' + inputHelpText + '</div>');
                }

                let \$newButton = \$('<button class=\"btn btn-danger btn-xs pull-right button-close-override\" type=\"button\"><i class=\"fa fa-times\"></i></button>').click(function (e) {
                    e.stopPropagation();
                    restoreInputField(target, inputName);
                 });
                \$(target).append(\$newButton);
            };


            // Method to restore the input field to the edit button
            const restoreInputField = function(target, inputName) {

                \$(target).html('<button class=\"btn btn-block\" type=\"button\"><i class=\"fa fa-edit\"></i></button>');

                // Handlers for field edit
                \$(target).off().click(function() {
                    if(!\$(this).data('editing')) {
                        createInputField(\$(this), inputName);
                    }
                });

                \$(target).attr('data-editing', 'false');
            };

            // Build table
            \$.each(\$settings, function(index, element) {
                var \$label = \$(element).find('label');
                var \$input = \$(element).find('input,select');
                var \$help = \$(element).find('.help-block');
                var over = \$label.prop(\"for\");
                var value = '';
                var text = '';
                var help = \$help.length > 0 ? \$help.text() : '';

                // Skip for some fields
                if(['name', 'isDefault'].includes(over)) {
                    return true;
                }

                if(\$(element).hasClass('form-group-timers')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();
                    
                    // Get value
                    value = \$(element).find('.timersOn').val() + ' - ' + \$(element).find('.timersOff').val(); 
                } else if(\$(element).hasClass('form-group-picture-options')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();

                    // Get labels
                    var labels = [];
                    \$(element).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                        labels.push(\$(el).html());
                    });

                    // Get value
                    value = \$(element).find('.multiSelectInputs .pictureControlsSlider').slider('getValue');

                    // If specific value has a label, use it as value
                    if(labels[value] != undefined) {
                        value = labels[value];
                    }
                } else if(\$input.attr('type') == 'checkbox'){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.is(\":checked\");

                } else if(\$input.is('select')){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.find('option:selected').text();
                } else {
                    // Get text and value
                    text = \$label.text();
                    value = \$input.val();
                }

                // Skip empty fields
                if(over == '' || over == undefined || over == null) {
                    return true;
                }

                // Append new row to the table
                var \$tableNewRow = \$('<tr class=\"row-fluid\"><td class=\"col-xs-5\"><strong title=\"' + help + '\">' + text + '</strong></td><td class=\"col-xs-3\"><div>' + value + '</div></td><td class=\"col-xs-4 override-input\" data-editing=\"false\" data-input-name=\"' + over + '\"><button class=\"btn btn-block\" type=\"button\"><i class=\"fa fa-edit\"></i></button></td></tr>').appendTo(\$table);

                // Get override element
                var overrideEl = override.find((x) => { return x.name === over; });
                if(overrideEl != undefined) { //If element was found, create an input

                    // Create input with override value
                    createInputField(\$tableNewRow.find('.override-input'), over, overrideEl.value);
                }
            });

            // Handlers for field edit
            \$(dialog).find('.override-input[data-editing=\"false\"]').click(function() {
                const inputName = \$(this).data('inputName');
                createInputField(\$(this), inputName);
            });

            // Refresh on tab switch to fix broken labels
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', () =>  {
                \$('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });
            });

            // Call XiboInitialise on table
            XiboInitialise('#settings-from-profile');
        }

        // Custom submit for display form
        function displayEditFormSubmit() {
            let \$form = \$('#displayEditForm');
            // Grab and alter the value in the bandwidth limit field
            let bandwidthLimitField = \$form.find(\"input[name=bandwidthLimit]\");
            let bandwidthLimitUnitsField = \$form.find(\"select[name=bandwidthLimitUnits]\");
            let bandwidthLimit = bandwidthLimitField.val();

            if (bandwidthLimitUnitsField.val() == 'mb') {
                bandwidthLimit = bandwidthLimit * 1024;
            } else if (bandwidthLimitUnitsField.val() == 'gb') {
                bandwidthLimit = bandwidthLimit * 1024 * 1024;
            }

            // Set the field
            bandwidthLimitField.prop('value', bandwidthLimit);

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
    </script>

    <style>
        #settings-from-profile tr.row-fluid { 
            height: 50px;
        }
    </style>
{% endblock %}", "display-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-page.twig");
    }
}
