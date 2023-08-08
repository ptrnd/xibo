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

/* dashboard-status-page.twig */
class __TwigTemplate_957ba75c44eebbcbd7577e91cd42dc096339612aad7f79c72d6f4527cfc7f3d5 extends \Twig\Template
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
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["inline"] = $this->loadTemplate("inline.twig", "dashboard-status-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-status-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-status-page.twig", 27);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 28
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title displays-count\">0</div>
                        <div class=\"comment displays-comment\" data-title=\"";
        // line 37
        echo __("Display");
        echo "\" data-title-plural=\"";
        echo __("Displays");
        echo "\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["librarySize"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 51
        echo __("Library Size");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["countUsers"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 65
        if ((($context["countUsers"] ?? null) == 1)) {
            echo __("User");
        } else {
            echo __("Users");
        }
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 78
        if ((($context["embeddedWidget"] ?? null) != "")) {
            // line 79
            echo "                            ";
            echo ($context["embeddedWidget"] ?? null);
            echo "
                        ";
        } else {
            // line 81
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, ($context["nowShowing"] ?? null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 82
            echo __("Now Showing");
            echo "</div>
                        ";
        }
        // line 84
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 95
        if ((($context["xmdsLimit"] ?? null) != "")) {
            // line 96
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage. Limit %xmdsLimit%"), array("%xmdsLimit%" => ($context["xmdsLimit"] ?? null), ));
            // line 97
            echo "                    ";
        } else {
            // line 98
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage (%bandwidthSuffix%)"), array("%bandwidthSuffix%" => ($context["bandwidthSuffix"] ?? null), ));
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                    ";
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
            // line 101
            echo "                    <a class=\"pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.view"), "html", null, true);
            echo "\">";
            echo __("More Statistics");
            echo "</a>
                    ";
        }
        // line 103
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 114
        if ((($context["libraryLimitSet"] ?? null) != "")) {
            // line 115
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => ($context["libraryLimit"] ?? null), ));
            // line 116
            echo "                    ";
        } else {
            // line 117
            echo "                        ";
            echo __("Library Usage");
            // line 118
            echo "                    ";
        }
        // line 119
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 132
        echo __("Display Activity");
        // line 133
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 140
        echo __("Display");
        echo "</th>
                                <th>";
        // line 141
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 142
        echo __("Authorised");
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
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 157
        echo __("Latest News");
        // line 158
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    ";
        // line 161
        if ((twig_length_filter($this->env, ($context["latestNews"] ?? null)) > 0)) {
            // line 162
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 163
                echo "                            <div class=\"article\">
                                <h4 class=\"article_title\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", []), "html", null, true);
                echo " <small class=\"article_date\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "date", []), "html", null, true);
                echo "</small></h4>
                                <p>";
                // line 165
                echo $this->getAttribute($context["news"], "description", []);
                echo " ";
                if ($this->getAttribute($context["news"], "link", [])) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "link", []), "html", null, true);
                    echo "\" title=\"Read\" target=\"_blank\">";
                    echo __("Full Article");
                    echo "</a>.";
                }
                echo "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                    ";
        }
        // line 169
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 179
        echo __("Display Status");
        // line 180
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayStatusChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 191
        echo __("Display Content Status");
        // line 192
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayContentChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row hidden\" id=\"displayGroupStatusChartRow\">

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 207
        echo __("Display Groups Status");
        // line 208
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayGroupStatusChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 220
        echo __("Display Groups Content Status");
        // line 221
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayGroupContentStatusChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"widget hidden\" id=\"displaysGridTable\">
        <div class=\"widget-title\">";
        // line 231
        echo __("Displays");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 233
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayGridView\">
                <div class=\"XiboFilter well hidden\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">

                                    ";
        // line 240
        ob_start();
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        echo "                                    ";
        echo $context["inline"]->gethidden("displayGroupId", ($context["title"] ?? null));
        echo "

                                    ";
        // line 243
        ob_start();
        echo __("Content Status");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        echo "                                    ";
        echo $context["inline"]->gethidden("mediaInventoryStatus", ($context["title"] ?? null));
        echo "

                                    ";
        // line 246
        ob_start();
        echo __("Online Status");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 247
        echo "                                    ";
        echo $context["inline"]->gethidden("loggedIn", ($context["title"] ?? null));
        echo "

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displaysGrid\" class=\"table table-striped\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 258
        echo __("ID");
        echo "</th>
                            <th>";
        // line 259
        echo __("Display");
        echo "</th>
                            <th>";
        // line 260
        echo __("Status");
        echo "</th>
                            <th>";
        // line 261
        echo __("Authorised?");
        echo "</th>
                            <th>";
        // line 262
        echo __("Current Layout");
        echo "</th>
                            <th>";
        // line 263
        echo __("Storage Available");
        echo "</th>
                            <th>";
        // line 264
        echo __("Storage Total");
        echo "</th>
                            <th>";
        // line 265
        echo __("Storage Free %");
        echo "</th>
                            <th>";
        // line 266
        echo __("Description");
        echo "</th>
                            <th>";
        // line 267
        echo __("Tags");
        echo "</th>
                            <th>";
        // line 268
        echo __("Default Layout");
        echo "</th>
                            <th>";
        // line 269
        echo __("Interleave Default");
        echo "</th>
                            <th>";
        // line 270
        echo __("Email Alert");
        echo "</th>
                            <th>";
        // line 271
        echo __("Logged In");
        echo "</th>
                            <th>";
        // line 272
        echo __("Last Accessed");
        echo "</th>
                            <th>";
        // line 273
        echo __("Display Profile");
        echo "</th>
                            <th>";
        // line 274
        echo __("Version");
        echo "</th>
                            <th>";
        // line 275
        echo __("Device Name");
        echo "</th>
                            <th>";
        // line 276
        echo __("IP Address");
        echo "</th>
                            <th>";
        // line 277
        echo __("Mac Address");
        echo "</th>
                            <th>";
        // line 278
        echo __("Timezone");
        echo "</th>
                            <th>";
        // line 279
        echo __("Screen shot?");
        echo "</th>
                            <th>";
        // line 280
        echo __("Thumbnail");
        echo "</th>
                            <th>";
        // line 281
        echo __("Last Command");
        echo "</th>
                            <th>";
        // line 282
        echo __("XMR Registered");
        echo "</th>
                            <th></th>
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

    // line 296
    public function block_javaScript($context, array $blocks = [])
    {
        // line 297
        echo "    <script type=\"text/javascript\">

        let displayGroupStatusChart = null;
        let displayGroupContentStatusChart = null;

        let displayGroupId = null;
        let loggedInStatus = null;
        let mediaInventoryStatus = null;

        let displayGroupIdsContent = [];
        let displayGroupIdsStatus = [];

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: ";
        // line 312
        echo ($context["bandwidthWidget"] ?? null);
        echo ",
            options: {
                scales: {
                    xAxes: [{
                        stacked: ";
        // line 316
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 317
        echo "                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"";
        // line 321
        echo twig_escape_filter($this->env, ($context["bandwidthSuffix"] ?? null), "html", null, true);
        echo "\",
                        },
                        stacked: ";
        // line 323
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 324
        echo "                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = ";
        // line 333
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
        // line 345
        echo ($context["libraryWidgetLabels"] ?? null);
        echo "
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\".article_date\").each(function(index, element) {
            if(\$(\".article_date\").length > 1){
                // Replace the ISO date with a nice formatted date \"for humans\"
                \$(this).html(moment(\$(this).html(), systemDateFormat).fromNow());
            }
        });

        var table = \$(\"#displays\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=statusDashboardDisplays\",
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
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"statusDashboardDisplays\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            order: [[0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("statusdashboard.displays"), "html", null, true);
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
                        if (e.name != null && e.name !== \"\")
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
            lengthChange: false,
            \"columns\": [
                {\"data\": \"display\"},
                {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
            ]
        });

        table.on('processing.dt', dataTableProcessing);
        table.on('draw', function(e, settings) {
            var \$displaysComment = \$(\".displays-comment\");
            var total = table.page.info().recordsTotal;
            \$(\".displays-count\").html(total);
            \$displaysComment.html((total > 0) ? \$displaysComment.data().titlePlural : \$displaysComment.data().title)
        });

        var displayData = ";
        // line 447
        echo ($context["displayStatus"] ?? null);
        echo ";

        var displayStatusChart = new Chart(\$(\"#displayStatusChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [\"Online\", \"Offline\"]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        var displayMediaStatusData = ";
        // line 463
        echo ($context["displayMediaStatus"] ?? null);
        echo ";

        var displayContentChart = new Chart(\$(\"#displayContentChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayMediaStatusData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [\"Up to Date\", \"Not up to date\"]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\"#displayStatusChart\").click(function(evt){
                var activePoints = displayStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == \"Online\") {
                        loggedInStatus = 1;
                    } else {
                        loggedInStatus = 0;
                    }

                    if (displayGroupStatusChart !== undefined && displayGroupStatusChart !== null) {
                        displayGroupStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            status: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsStatus = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupStatusChart = new Chart(\$(\"#displayGroupStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        title: {
                                            display: true,
                                            text: label
                                        }
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('hidden');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayContentChart\").click(function(evt){
                var activePoints = displayContentChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == \"Up to Date\") {
                        mediaInventoryStatus = 1;
                    } else {
                        mediaInventoryStatus = -1;
                    }

                    if (displayGroupContentStatusChart !== undefined && displayGroupContentStatusChart !== null) {
                        displayGroupContentStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            inventoryStatus: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsContent = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupContentStatusChart = new Chart(\$(\"#displayGroupContentStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        title: {
                                            display: true,
                                            text: label
                                        }
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('hidden');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayGroupStatusChart\").click(function(evt) {
                var activePoints = displayGroupStatusChart.getElementsAtEvent(evt);

                \$('#displayGroupId').val(\"\");
                \$('#mediaInventoryStatus').val(\"\");
                \$('#loggedIn').val(\"\");
                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsStatus[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#loggedIn').val(loggedInStatus);
                    table2.ajax.reload();

                    \$(\"#displaysGridTable\").removeClass('hidden');
                }
            }
        );

        \$(\"#displayGroupContentStatusChart\").click(function(evt){
                var activePoints = displayGroupContentStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    \$('#displayGroupId').val(\"\");
                    \$('#mediaInventoryStatus').val(\"\");
                    \$('#loggedIn').val(\"\");

                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsContent[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#mediaInventoryStatus').val(mediaInventoryStatus);
                    table2.ajax.reload();

                    \$(\"#displaysGridTable\").removeClass('hidden');
                }
            }
        );

        let table2 = \$(\"#displaysGrid\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=displaysGrid\",
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
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"displaysGrid\",
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
        // line 689
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

                    \$.extend(data, \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

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
                {
                    \"name\": \"display\",
                    \"data\": function (data, type) {
                        if (type != \"display\")
                            return data.display;

                        if (\"";
        // line 729
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", []), "html", null, true);
        echo "\" != \"\" && data.clientAddress != null && data.clientAddress != \"\") {
                            var link = \"";
        // line 730
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", []), "html", null, true);
        echo "\".replace('%s', data.clientAddress);
                            return '<a href=\"' + link + '\" title=\"";
        // line 731
        echo __("VNC to this Display");
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", []), "html", null, true);
        echo "\">' + data.display + '</a>';
                        }
                        else {
                            return data.display;
                        }
                    }
                },
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
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table2.on('draw', dataTableDraw);
        table2.on('draw', { form: \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
        table2.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table2, \$('#displaysGrid_wrapper').find('.col-sm-6').eq(1));
    </script>
";
    }

    public function getTemplateName()
    {
        return "dashboard-status-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 731,  1048 => 730,  1044 => 729,  1001 => 689,  985 => 676,  965 => 659,  867 => 564,  800 => 500,  760 => 463,  741 => 447,  690 => 399,  674 => 386,  654 => 369,  627 => 345,  612 => 333,  601 => 324,  595 => 323,  590 => 321,  584 => 317,  578 => 316,  571 => 312,  554 => 297,  551 => 296,  534 => 282,  530 => 281,  526 => 280,  522 => 279,  518 => 278,  514 => 277,  510 => 276,  506 => 275,  502 => 274,  498 => 273,  494 => 272,  490 => 271,  486 => 270,  482 => 269,  478 => 268,  474 => 267,  470 => 266,  466 => 265,  462 => 264,  458 => 263,  454 => 262,  450 => 261,  446 => 260,  442 => 259,  438 => 258,  423 => 247,  419 => 246,  413 => 244,  409 => 243,  403 => 241,  399 => 240,  389 => 233,  384 => 231,  372 => 221,  370 => 220,  356 => 208,  354 => 207,  337 => 192,  335 => 191,  322 => 180,  320 => 179,  308 => 169,  305 => 168,  288 => 165,  282 => 164,  279 => 163,  274 => 162,  272 => 161,  267 => 158,  265 => 157,  247 => 142,  243 => 141,  239 => 140,  230 => 133,  228 => 132,  213 => 119,  210 => 118,  207 => 117,  204 => 116,  201 => 115,  199 => 114,  186 => 103,  178 => 101,  175 => 100,  172 => 99,  169 => 98,  166 => 97,  163 => 96,  161 => 95,  148 => 84,  143 => 82,  138 => 81,  132 => 79,  130 => 78,  110 => 65,  106 => 64,  90 => 51,  86 => 50,  68 => 37,  57 => 28,  46 => 27,  43 => 26,  38 => 23,  36 => 24,  30 => 23,);
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
 * Copyright (C) 2020 Xibo Signage Ltd
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

{% block pageContent %}
    {% include \"theme-dashboard-message.twig\" ignore missing %}
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title displays-count\">0</div>
                        <div class=\"comment displays-comment\" data-title=\"{% trans \"Display\" %}\" data-title-plural=\"{% trans \"Displays\" %}\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">{{ librarySize }}</div>
                        <div class=\"comment\">{% trans \"Library Size\" %}</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">{{ countUsers }}</div>
                        <div class=\"comment\">{% if countUsers == 1 %}{% trans \"User\" %}{% else %}{% trans \"Users\" %}{% endif %}</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        {% if embeddedWidget != \"\" %}
                            {{ embeddedWidget|raw }}
                        {% else %}
                            <div class=\"title\">{{ nowShowing }}</div>
                            <div class=\"comment\">{% trans \"Now Showing\" %}</div>
                        {% endif %}
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    {% if xmdsLimit != \"\" %}
                        {% trans %}Bandwidth Usage. Limit {{ xmdsLimit }}{% endtrans %}
                    {% else %}
                        {% trans %}Bandwidth Usage ({{ bandwidthSuffix }}){% endtrans %}
                    {% endif %}
                    {% if currentUser.routeViewable(\"/stats\") %}
                    <a class=\"pull-right\" href=\"{{ urlFor(\"stats.view\") }}\">{% trans \"More Statistics\" %}</a>
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
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
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    {% trans \"Display Activity\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>{% trans \"Display\" %}</th>
                                <th>{% trans \"Logged In\" %}</th>
                                <th>{% trans \"Authorised\" %}</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    {% trans \"Latest News\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    {% if latestNews|length > 0 %}
                        {% for news in latestNews %}
                            <div class=\"article\">
                                <h4 class=\"article_title\">{{ news.title }} <small class=\"article_date\">{{ news.date }}</small></h4>
                                <p>{{ news.description|raw }} {% if news.link %}<a href=\"{{ news.link }}\" title=\"Read\" target=\"_blank\">{% trans \"Full Article\" %}</a>.{% endif %}</p>
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    {% trans \"Display Status\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayStatusChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    {% trans \"Display Content Status\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayContentChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row hidden\" id=\"displayGroupStatusChartRow\">

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    {% trans \"Display Groups Status\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayGroupStatusChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    {% trans \"Display Groups Content Status\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"displayGroupContentStatusChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class=\"widget hidden\" id=\"displaysGridTable\">
        <div class=\"widget-title\">{% trans \"Displays\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"displayGridView\">
                <div class=\"XiboFilter well hidden\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">

                                    {% set title %}{% trans \"Display Group\" %}{% endset %}
                                    {{ inline.hidden(\"displayGroupId\", title) }}

                                    {% set title %}{% trans \"Content Status\" %}{% endset %}
                                    {{ inline.hidden(\"mediaInventoryStatus\", title) }}

                                    {% set title %}{% trans \"Online Status\" %}{% endset %}
                                    {{ inline.hidden(\"loggedIn\", title) }}

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displaysGrid\" class=\"table table-striped\" style=\"width: 100%;\">
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
                            <th>{% trans \"Screen shot?\" %}</th>
                            <th>{% trans \"Thumbnail\" %}</th>
                            <th>{% trans \"Last Command\" %}</th>
                            <th>{% trans \"XMR Registered\" %}</th>
                            <th></th>
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

        let displayGroupStatusChart = null;
        let displayGroupContentStatusChart = null;

        let displayGroupId = null;
        let loggedInStatus = null;
        let mediaInventoryStatus = null;

        let displayGroupIdsContent = [];
        let displayGroupIdsStatus = [];

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: {{ bandwidthWidget|raw }},
            options: {
                scales: {
                    xAxes: [{
                        stacked: {% if xmdsLimit %}true{% else %}false{% endif %}
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"{{ bandwidthSuffix }}\",
                        },
                        stacked: {% if xmdsLimit %}true{% else %}false{% endif %}
                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

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

        \$(\".article_date\").each(function(index, element) {
            if(\$(\".article_date\").length > 1){
                // Replace the ISO date with a nice formatted date \"for humans\"
                \$(this).html(moment(\$(this).html(), systemDateFormat).fromNow());
            }
        });

        var table = \$(\"#displays\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=statusDashboardDisplays\",
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
                            option: \"statusDashboardDisplays\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            order: [[0, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"statusdashboard.displays\") }}\",
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
                        if (e.name != null && e.name !== \"\")
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
            lengthChange: false,
            \"columns\": [
                {\"data\": \"display\"},
                {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
            ]
        });

        table.on('processing.dt', dataTableProcessing);
        table.on('draw', function(e, settings) {
            var \$displaysComment = \$(\".displays-comment\");
            var total = table.page.info().recordsTotal;
            \$(\".displays-count\").html(total);
            \$displaysComment.html((total > 0) ? \$displaysComment.data().titlePlural : \$displaysComment.data().title)
        });

        var displayData = {{ displayStatus|raw }};

        var displayStatusChart = new Chart(\$(\"#displayStatusChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [\"Online\", \"Offline\"]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        var displayMediaStatusData = {{ displayMediaStatus|raw }};

        var displayContentChart = new Chart(\$(\"#displayContentChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayMediaStatusData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [\"Up to Date\", \"Not up to date\"]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\"#displayStatusChart\").click(function(evt){
                var activePoints = displayStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == \"Online\") {
                        loggedInStatus = 1;
                    } else {
                        loggedInStatus = 0;
                    }

                    if (displayGroupStatusChart !== undefined && displayGroupStatusChart !== null) {
                        displayGroupStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"{{ urlFor(\"statusdashboard.displayGroups\") }}\",
                        data: {
                            status: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsStatus = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupStatusChart = new Chart(\$(\"#displayGroupStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        title: {
                                            display: true,
                                            text: label
                                        }
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('hidden');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayContentChart\").click(function(evt){
                var activePoints = displayContentChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == \"Up to Date\") {
                        mediaInventoryStatus = 1;
                    } else {
                        mediaInventoryStatus = -1;
                    }

                    if (displayGroupContentStatusChart !== undefined && displayGroupContentStatusChart !== null) {
                        displayGroupContentStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"{{ urlFor(\"statusdashboard.displayGroups\") }}\",
                        data: {
                            inventoryStatus: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsContent = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupContentStatusChart = new Chart(\$(\"#displayGroupContentStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        title: {
                                            display: true,
                                            text: label
                                        }
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('hidden');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayGroupStatusChart\").click(function(evt) {
                var activePoints = displayGroupStatusChart.getElementsAtEvent(evt);

                \$('#displayGroupId').val(\"\");
                \$('#mediaInventoryStatus').val(\"\");
                \$('#loggedIn').val(\"\");
                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsStatus[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#loggedIn').val(loggedInStatus);
                    table2.ajax.reload();

                    \$(\"#displaysGridTable\").removeClass('hidden');
                }
            }
        );

        \$(\"#displayGroupContentStatusChart\").click(function(evt){
                var activePoints = displayGroupContentStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    \$('#displayGroupId').val(\"\");
                    \$('#mediaInventoryStatus').val(\"\");
                    \$('#loggedIn').val(\"\");

                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsContent[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#mediaInventoryStatus').val(mediaInventoryStatus);
                    table2.ajax.reload();

                    \$(\"#displaysGridTable\").removeClass('hidden');
                }
            }
        );

        let table2 = \$(\"#displaysGrid\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=displaysGrid\",
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
                            option: \"displaysGrid\",
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

                    \$.extend(data, \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

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
                {
                    \"name\": \"display\",
                    \"data\": function (data, type) {
                        if (type != \"display\")
                            return data.display;

                        if (\"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\" != \"\" && data.clientAddress != null && data.clientAddress != \"\") {
                            var link = \"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\".replace('%s', data.clientAddress);
                            return '<a href=\"' + link + '\" title=\"{% trans \"VNC to this Display\" %}\" target=\"{{ settings.SHOW_DISPLAY_AS_VNC_TGT }}\">' + data.display + '</a>';
                        }
                        else {
                            return data.display;
                        }
                    }
                },
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
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table2.on('draw', dataTableDraw);
        table2.on('draw', { form: \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
        table2.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table2, \$('#displaysGrid_wrapper').find('.col-sm-6').eq(1));
    </script>
{% endblock %}", "dashboard-status-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\dashboard-status-page.twig");
    }
}
