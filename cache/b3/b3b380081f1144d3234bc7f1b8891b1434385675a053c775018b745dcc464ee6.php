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

/* display-page-manage.twig */
class __TwigTemplate_2ce733052e9af5a57cef0da7e787fa8d1940c9f43453dd7135c3e379c062f58d extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "display-page-manage.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "display-page-manage.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_pageContent($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $context["displayName"] = $this->getAttribute(($context["display"] ?? null), "display", []);
        // line 15
        echo "    ";
        $context["displayLastAccessed"] = $this->getAttribute(($context["display"] ?? null), "lastAccessed", []);
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["display"] ?? null), "loggedIn", []) == 1)) {
            // line 17
            echo "        ";
            ob_start();
            /* xgettext:no-php-format */            echo strtr(__("Display %displayName% is currently logged-in, seen %timeAgo%."), array("%displayName%" => ($context["displayName"] ?? null), "%timeAgo%" => ($context["timeAgo"] ?? null), ));
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            ob_start();
            /* xgettext:no-php-format */            echo strtr(__("Display %displayName% is not logged in at the moment and last accessed at <span class=\"unixDate\">%displayLastAccessed%</span>"), array("%displayName%" => ($context["displayName"] ?? null), "%displayLastAccessed%" => ($context["displayLastAccessed"] ?? null), ));
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    ";
        // line 22
        if (($this->getAttribute(($context["display"] ?? null), "mediaInventoryStatus", []) == 3)) {
            // line 23
            echo "    <p class=\"text-center\">";
            echo __("This Display hasn't connected since updates have been made in the CMS. The below information will be updated when it has.");
            echo "</p>
    ";
        }
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 28
        echo __("File Status - Count of Files");
        echo "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedCountPie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 36
        echo __("File Status - Size of Files");
        echo "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedSizePie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <button id=\"refreshLog\" class=\"btn btn-sm pull-right\"><span class=\"fa fa-refresh\"></span></button>
                    ";
        // line 48
        echo __("Errors in the Last 12 hours");
        // line 49
        echo "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table id=\"logs\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 54
        echo __("ID");
        echo "</th>
                            <th>";
        // line 55
        echo __("Date");
        echo "</th>
                            <th>";
        // line 56
        echo __("Message");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 68
        echo __("Layouts");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 73
        echo __("ID");
        echo "</th>
                            <th>";
        // line 74
        echo __("Name");
        echo "</th>
                            <th>";
        // line 75
        echo __("Size");
        echo "</th>
                            <th>";
        // line 76
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 77
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["inventory"] ?? null), "layouts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 82
            echo "                                <tr>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemId", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Xibo\Twig\ByteFormatterTwigExtension')->byteFormat($this->getAttribute($context["item"], "size", [])), "html", null, true);
            echo "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 87
            if (($this->getAttribute($context["item"], "complete", []) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                    </td>
                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Xibo\Twig\ByteFormatterTwigExtension')->byteFormat($this->getAttribute($context["item"], "bytesRequested", [])), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    ";
        // line 102
        echo __("Media");
        // line 103
        echo "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 108
        echo __("ID");
        echo "</th>
                            <th>";
        // line 109
        echo __("Name");
        echo "</th>
                            <th>";
        // line 110
        echo __("Type");
        echo "</th>
                            <th>";
        // line 111
        echo __("File Name");
        echo "</th>
                            <th>";
        // line 112
        echo __("Size");
        echo "</th>
                            <th>";
        // line 113
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 114
        echo __("Downloaded");
        echo "</th>
                            <th>";
        // line 115
        echo __("Released");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["inventory"] ?? null), "media", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            echo "                                <tr>
                                    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemId", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "storedAs", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Xibo\Twig\ByteFormatterTwigExtension')->byteFormat($this->getAttribute($context["item"], "size", [])), "html", null, true);
            echo "</td>
                                    <td title=\"";
            // line 126
            if (($this->getAttribute($context["item"], "lastUsed", []) == 0)) {
                echo twig_escape_filter($this->env, ($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ($context["nonceUsed"] ?? null), "html", null, true);
            }
            echo "\">
                                        <span class=\"fa ";
            // line 127
            if (($this->getAttribute($context["item"], "complete", []) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                    </td>
                                    <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Xibo\Twig\ByteFormatterTwigExtension')->byteFormat($this->getAttribute($context["item"], "bytesRequested", [])), "html", null, true);
            echo "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 131
            if (($this->getAttribute($context["item"], "released", []) == 1)) {
                echo "fa-check";
            } elseif (($this->getAttribute($context["item"], "released", []) == 0)) {
                echo "fa-cogs";
            } elseif (($this->getAttribute($context["item"], "released", []) == 2)) {
                echo "fa-times";
            }
            echo "\"></span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 142
        echo __("Widgets");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 147
        echo __("ID");
        echo "</th>
                            <th>";
        // line 148
        echo __("Name");
        echo "</th>
                            <th>";
        // line 149
        echo __("Type");
        echo "</th>
                            <th>";
        // line 150
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 151
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["inventory"] ?? null), "widgets", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 156
            echo "                                <tr>
                                    <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemId", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "widgetName", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", []), "html", null, true);
            echo "</td>
                                    <td title=\"";
            // line 160
            if (($this->getAttribute($context["item"], "lastUsed", []) == 0)) {
                echo twig_escape_filter($this->env, ($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ($context["nonceUsed"] ?? null), "html", null, true);
            }
            echo "\">
                                        <span class=\"fa ";
            // line 161
            if (($this->getAttribute($context["item"], "complete", []) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                    </td>
                                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Xibo\Twig\ByteFormatterTwigExtension')->byteFormat($this->getAttribute($context["item"], "bytesRequested", [])), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 172
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
            // line 173
            echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
            // line 176
            echo __("Bandwidth");
            echo "</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo "\">
                        <div class=\"XiboFilter\">
                            <div class=\"FilterDiv\" id=\"bandwidthFilter\">
                                <form class=\"form-inline\">
                                    ";
            // line 182
            echo $context["inline"]->getdate("fromDt", "From Date", $this->getAttribute(($context["defaults"] ?? null), "fromDate", []), "", "", "", "");
            echo "
                                    ";
            // line 183
            echo $context["inline"]->getdate("toDt", "To Date", $this->getAttribute(($context["defaults"] ?? null), "toDate", []), "", "", "", "");
            echo "
                                    ";
            // line 184
            echo $context["inline"]->gethidden("displayId", $this->getAttribute(($context["display"] ?? null), "displayId", []));
            echo "
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
    }

    // line 199
    public function block_javaScript($context, array $blocks = [])
    {
        // line 200
        echo "    <script type=\"text/javascript\">

        \$(document).ready(function() {
            var table = \$(\"#logs\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("log.search"), "html", null, true);
        echo "?";
        echo ($context["errorSearch"] ?? null);
        echo "\",
                },
                \"columns\": [
                    {\"data\": \"logId\"},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromIso},
                    {\"data\": \"message\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshLog\").click(function () {
                table.ajax.reload();
            });
        });

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.bandwidth.data"), "html", null, true);
        echo "\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        console.log('Destroying Chart');
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"";
        // line 252
        echo __("Bandwidth");
        echo "\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {

            ";
        // line 278
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
            // line 279
            echo "            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
            ";
        }
        // line 286
        echo "
            // Find all Unix Dates and sort them out
            \$(\"span.unixDate\").each(function() {
                \$(this).html(moment(\$(this).html(), \"X\").format(jsDateFormat));
            });

            // Find all ISO Dates and sort them out
            \$(\"span.isoDate\").each(function() {
                \$(this).html(moment(\$(this).html()).format(jsDateFormat));
            });

            // Handle the Pie chart for download status
            var downloadedCountPie = new Chart(\$(\"#downloadedCountPie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "countComplete", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "countRemaining", []), "html", null, true);
        echo "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 306
        echo __("Downloaded");
        echo "\", \"";
        echo __("Pending");
        echo "\"
                    ]
                }
            });

            var downloadedSizePie = new Chart(\$(\"#downloadedSizePie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "sizeComplete", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "sizeRemaining", []), "html", null, true);
        echo "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 319
        echo __("Downloaded");
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "units", []), "html", null, true);
        echo "\", \"";
        echo __("Pending");
        echo "\" + \" ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "units", []), "html", null, true);
        echo "\"
                    ]
                },
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "display-page-manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 319,  621 => 315,  607 => 306,  598 => 302,  580 => 286,  571 => 279,  569 => 278,  540 => 252,  517 => 232,  490 => 210,  478 => 200,  475 => 199,  457 => 184,  453 => 183,  449 => 182,  442 => 178,  437 => 176,  432 => 173,  430 => 172,  422 => 166,  413 => 163,  404 => 161,  396 => 160,  392 => 159,  388 => 158,  384 => 157,  381 => 156,  377 => 155,  370 => 151,  366 => 150,  362 => 149,  358 => 148,  354 => 147,  346 => 142,  337 => 135,  321 => 131,  316 => 129,  307 => 127,  299 => 126,  295 => 125,  291 => 124,  287 => 123,  283 => 122,  279 => 121,  276 => 120,  272 => 119,  265 => 115,  261 => 114,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  241 => 109,  237 => 108,  230 => 103,  228 => 102,  216 => 92,  207 => 89,  198 => 87,  193 => 85,  189 => 84,  185 => 83,  182 => 82,  178 => 81,  171 => 77,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  147 => 68,  132 => 56,  128 => 55,  124 => 54,  117 => 49,  115 => 48,  100 => 36,  89 => 28,  84 => 25,  78 => 23,  76 => 22,  71 => 21,  68 => 20,  63 => 19,  60 => 18,  55 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  38 => 9,  36 => 10,  30 => 9,);
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


{% block pageContent %}
    {% set displayName = display.display %}
    {% set displayLastAccessed = display.lastAccessed %}
    {% if display.loggedIn == 1 %}
        {% set title %}{% trans %}Display {{ displayName }} is currently logged-in, seen {{ timeAgo }}.{% endtrans %}{% endset %}
    {% else %}
        {% set title %}{% trans %}Display {{ displayName }} is not logged in at the moment and last accessed at <span class=\"unixDate\">{{ displayLastAccessed }}</span>{% endtrans %}{% endset %}
    {% endif %}
    <h1 class=\"text-center\">{{ title }}</h1>
    {% if display.mediaInventoryStatus == 3 %}
    <p class=\"text-center\">{% trans \"This Display hasn't connected since updates have been made in the CMS. The below information will be updated when it has.\" %}</p>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"File Status - Count of Files\" %}</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedCountPie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"File Status - Size of Files\" %}</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedSizePie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <button id=\"refreshLog\" class=\"btn btn-sm pull-right\"><span class=\"fa fa-refresh\"></span></button>
                    {% trans \"Errors in the Last 12 hours\" %}
                </div>
                <div class=\"widget-body medium no-padding\">
                    <table id=\"logs\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            <th>{% trans \"Date\" %}</th>
                            <th>{% trans \"Message\" %}</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"Layouts\" %}</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            <th>{% trans \"Name\" %}</th>
                            <th>{% trans \"Size\" %}</th>
                            <th>{% trans \"Complete\" %}</th>
                            <th>{% trans \"Downloaded\" %}</th>
                        </tr>
                        </thead>
                        <tbody>
                            {% for item in inventory.layouts %}
                                <tr>
                                    <td>{{ item.itemId }}</td>
                                    <td>{{ item.layout }}</td>
                                    <td>{{ item.size|byteFormat }}</td>
                                    <td>
                                        <span class=\"fa {% if item.complete == 1 %}fa-check{% else %}fa-download{% endif %}\"></span>
                                    </td>
                                    <td>{{ item.bytesRequested|byteFormat }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    {% trans \"Media\" %}
                </div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            <th>{% trans \"Name\" %}</th>
                            <th>{% trans \"Type\" %}</th>
                            <th>{% trans \"File Name\" %}</th>
                            <th>{% trans \"Size\" %}</th>
                            <th>{% trans \"Complete\" %}</th>
                            <th>{% trans \"Downloaded\" %}</th>
                            <th>{% trans \"Released\" %}</th>
                        </tr>
                        </thead>
                        <tbody>
                            {% for item in inventory.media %}
                                <tr>
                                    <td>{{ item.itemId }}</td>
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.type }}</td>
                                    <td>{{ item.storedAs }}</td>
                                    <td>{{ item.size|byteFormat }}</td>
                                    <td title=\"{% if item.lastUsed == 0 %}{{ nonceNotUsed }}{% else %}{{ nonceUsed }}{% endif %}\">
                                        <span class=\"fa {% if item.complete == 1 %}fa-check{% else %}fa-download{% endif %}\"></span>
                                    </td>
                                    <td>{{ item.bytesRequested|byteFormat }}</td>
                                    <td>
                                        <span class=\"fa {% if item.released == 1 %}fa-check{% elseif item.released == 0  %}fa-cogs{% elseif item.released == 2  %}fa-times{% endif %}\"></span>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"Widgets\" %}</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            <th>{% trans \"Name\" %}</th>
                            <th>{% trans \"Type\" %}</th>
                            <th>{% trans \"Complete\" %}</th>
                            <th>{% trans \"Downloaded\" %}</th>
                        </tr>
                        </thead>
                        <tbody>
                            {% for item in inventory.widgets %}
                                <tr>
                                    <td>{{ item.itemId }}</td>
                                    <td>{{ item.widgetName }}</td>
                                    <td>{{ item.type }}</td>
                                    <td title=\"{% if item.lastUsed == 0 %}{{ nonceNotUsed }}{% else %}{{ nonceUsed }}{% endif %}\">
                                        <span class=\"fa {% if item.complete == 1 %}fa-check{% else %}fa-download{% endif %}\"></span>
                                    </td>
                                    <td>{{ item.bytesRequested|byteFormat }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {% if currentUser.routeViewable(\"/stats\") %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">{% trans \"Bandwidth\" %}</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"{{ random() }}\">
                        <div class=\"XiboFilter\">
                            <div class=\"FilterDiv\" id=\"bandwidthFilter\">
                                <form class=\"form-inline\">
                                    {{ inline.date(\"fromDt\", \"From Date\", defaults.fromDate, \"\", \"\", \"\", \"\") }}
                                    {{ inline.date(\"toDt\", \"To Date\", defaults.toDate, \"\", \"\", \"\", \"\") }}
                                    {{ inline.hidden(\"displayId\", display.displayId) }}
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">

        \$(document).ready(function() {
            var table = \$(\"#logs\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"{{ urlFor(\"log.search\") }}?{{ errorSearch|raw }}\",
                },
                \"columns\": [
                    {\"data\": \"logId\"},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromIso},
                    {\"data\": \"message\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshLog\").click(function () {
                table.ajax.reload();
            });
        });

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"{{ urlFor(\"stats.bandwidth.data\") }}\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        console.log('Destroying Chart');
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"{% trans \"Bandwidth\" %}\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {

            {% if currentUser.routeViewable(\"/stats\") %}
            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
            {% endif %}

            // Find all Unix Dates and sort them out
            \$(\"span.unixDate\").each(function() {
                \$(this).html(moment(\$(this).html(), \"X\").format(jsDateFormat));
            });

            // Find all ISO Dates and sort them out
            \$(\"span.isoDate\").each(function() {
                \$(this).html(moment(\$(this).html()).format(jsDateFormat));
            });

            // Handle the Pie chart for download status
            var downloadedCountPie = new Chart(\$(\"#downloadedCountPie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [{{ status.countComplete }}, {{ status.countRemaining }}],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"{% trans \"Downloaded\" %}\", \"{% trans \"Pending\" %}\"
                    ]
                }
            });

            var downloadedSizePie = new Chart(\$(\"#downloadedSizePie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [{{ status.sizeComplete }}, {{ status.sizeRemaining }}],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"{% trans \"Downloaded\" %}\" + \" {{ status.units }}\", \"{% trans \"Pending\" %}\" + \" {{ status.units }}\"
                    ]
                },
            });
        });
    </script>
{% endblock %}", "display-page-manage.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-page-manage.twig");
    }
}
