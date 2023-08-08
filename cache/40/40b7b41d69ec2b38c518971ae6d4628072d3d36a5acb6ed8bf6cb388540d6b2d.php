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

/* displayprofile-form-edit-windows.twig */
class __TwigTemplate_79303fd3d22e4845cab37a5c1fc1d48fb76a4ece984e54272385217261b255f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 26
        echo __("General");
        echo "</a></li>
            <li><a href=\"#network\" role=\"tab\" data-toggle=\"tab\">";
        // line 27
        echo __("Network");
        echo "</a></li>
            <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\">";
        // line 28
        echo __("Location");
        echo "</a></li>
            <li><a href=\"#troubleshooting\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        echo __("Troubleshooting");
        echo "</a></li>
            <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("Advanced");
        echo "</a></li>
            ";
        // line 31
        if ((twig_length_filter($this->env, ($context["commands"] ?? null)) > 0)) {
            // line 32
            echo "                <li><a href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            echo "</a></li>
            ";
        }
        // line 34
        echo "        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.edit", ["id" => $this->getAttribute(($context["displayProfile"] ?? null), "displayProfileId", [])]), "html", null, true);
        echo "\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    ";
        // line 38
        $this->loadTemplate("displayprofile-form-edit-common-fields.twig", "displayprofile-form-edit-windows.twig", 38)->display($context);
        // line 39
        echo "
                    ";
        // line 40
        $context["title"] = __("Collect interval");
        // line 41
        echo "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 42
        echo "                    ";
        $context["options"] = [0 => ["id" => 60, "value" => __("1 minute")], 1 => ["id" => 300, "value" => __("5 minutes")], 2 => ["id" => 600, "value" => __("10 minutes")], 3 => ["id" => 1800, "value" => __("30 minutes")], 4 => ["id" => 3600, "value" => __("1 hour")], 5 => ["id" => 5400, "value" => __("1 hour 30 minutes")], 6 => ["id" => 7200, "value" => __("2 hours")], 7 => ["id" => 9000, "value" => __("2 hours 30 minutes")], 8 => ["id" => 10800, "value" => __("3 hours")], 9 => ["id" => 12600, "value" => __("3 hours 30 minutes")], 10 => ["id" => 14400, "value" => __("4 hours")], 11 => ["id" => 18000, "value" => __("5 hours")], 12 => ["id" => 21600, "value" => __("6 hours")], 13 => ["id" => 25200, "value" => __("7 hours")], 14 => ["id" => 28800, "value" => __("8 hours")], 15 => ["id" => 32400, "value" => __("9 hours")], 16 => ["id" => 36000, "value" => __("10 hours")], 17 => ["id" => 39600, "value" => __("11 hours")], 18 => ["id" => 43200, "value" => __("12 hours")], 19 => ["id" => 86400, "value" => __("24 hours")]];
        // line 64
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "dropdown", [0 => "collectInterval", 1 => "single", 2 => ($context["title"] ?? null), 3 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "collectInterval"], "method"), 4 => ($context["options"] ?? null), 5 => "id", 6 => "value", 7 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 66
        $context["title"] = __("XMR Public Address");
        // line 67
        echo "                    ";
        $context["helpText"] = __("Please enter the public address for XMR.");
        // line 68
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "xmrNetworkAddress", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "xmrNetworkAddress"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 70
        $context["title"] = __("Enable stats reporting?");
        // line 71
        echo "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 72
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "statsEnabled", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "statsEnabled"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 74
        $context["title"] = __("Aggregation level");
        // line 75
        echo "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 76
        echo "                    ";
        $context["options"] = [0 => ["id" => "Individual", "value" => __("Individual")], 1 => ["id" => "Hourly", "value" => __("Hourly")], 2 => ["id" => "Daily", "value" => __("Daily")]];
        // line 81
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "dropdown", [0 => "aggregationLevel", 1 => "single", 2 => ($context["title"] ?? null), 3 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "aggregationLevel"], "method"), 4 => ($context["options"] ?? null), 5 => "id", 6 => "value", 7 => ($context["helpText"] ?? null), 8 => "aggregation-level"], "method"), "html", null, true);
        echo "

                    ";
        // line 83
        $context["title"] = __("Record geolocation on each Proof of Play?");
        // line 84
        echo "                    ";
        $context["helpText"] = __("If the geolocation of the Display is known, enable to record that location against each proof of play record.");
        // line 85
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "isRecordGeoLocationOnProofOfPlay", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "isRecordGeoLocationOnProofOfPlay"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 87
        $context["title"] = __("Enable PowerPoint?");
        // line 88
        echo "                    ";
        $context["helpText"] = __("Should Microsoft PowerPoint be Enabled? The Player will need PowerPoint installed to Display PowerPoint files.");
        // line 89
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "powerpointEnabled", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "powerpointEnabled"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                </div>

                <div class=\"tab-pane\" id=\"network\">

                    ";
        // line 95
        $context["title"] = __("Download Window Start Time");
        // line 96
        echo "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 97
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "time", [0 => "downloadStartWindow", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "downloadStartWindow"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 99
        $context["title"] = __("Download Window End Time");
        // line 100
        echo "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 101
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "time", [0 => "downloadEndWindow", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "downloadEndWindow"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 103
        $context["title"] = __("Force HTTPS?");
        // line 104
        echo "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 105
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "forceHttps", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "forceHttps"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 107
        $context["title"] = __("Operating Hours");
        // line 108
        echo "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 109
        echo "                    ";
        $context["attributes"] = [0 => ["name" => "data-width", "value" => "300px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.search")], 5 => ["name" => "data-search-term", "value" => "name"], 6 => ["name" => "data-id-property", "value" => "dayPartId"], 7 => ["name" => "data-text-property", "value" => "name"], 8 => ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 120
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "dropdown", [0 => "dayPartId", 1 => "single", 2 => ($context["title"] ?? null), 3 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "dayPartId"], "method"), 4 => twig_array_merge([0 => ["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), 5 => "dayPartId", 6 => "name", 7 => ($context["helpText"] ?? null), 8 => "pagedSelect", 9 => "", 10 => "", 11 => "", 12 => ($context["attributes"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 122
        $context["title"] = __("Authentication Whitelist");
        // line 123
        echo "                    ";
        $context["helpText"] = __("A comma separated list of domains which should be allowed to perform NTML/Negotiate authentication.");
        // line 124
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "authServerWhitelist", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "authServerWhitelist"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 126
        $context["title"] = __("Edge Browser Whitelist");
        // line 127
        echo "                    ";
        $context["helpText"] = __("A comma separated list of website urls which should be rendered by the Edge Browser instead of Chromium.");
        // line 128
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "edgeBrowserWhitelist", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "edgeBrowserWhitelist"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "
                </div>

                <div class=\"tab-pane\" id=\"location\">

                    ";
        // line 133
        $context["title"] = __("Width");
        // line 134
        echo "                    ";
        $context["helpText"] = __("The Width of the Display Window. 0 means full width.");
        // line 135
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "sizeX", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "sizeX"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 137
        $context["title"] = __("Height");
        // line 138
        echo "                    ";
        $context["helpText"] = __("The Height of the Display Window. 0 means full height.");
        // line 139
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "sizeY", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "sizeY"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 141
        $context["title"] = __("Left Coordinate");
        // line 142
        echo "                    ";
        $context["helpText"] = __("The left pixel position the display window should be sized from.");
        // line 143
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "offsetX", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "offsetX"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 145
        $context["title"] = __("Top Coordinate");
        // line 146
        echo "                    ";
        $context["helpText"] = __("The top pixel position the display window should be sized from.");
        // line 147
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "offsetY", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "offsetY"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    ";
        // line 153
        $context["title"] = __("CTRL Key required to access Player Information Screen?");
        // line 154
        echo "                    ";
        $context["helpText"] = __("Should the Player information screen require the CTRL key?");
        // line 155
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "clientInfomationCtrlKey", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "clientInfomationCtrlKey"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 157
        $context["title"] = __("Key for Player Information Screen");
        // line 158
        echo "                    ";
        $context["helpText"] = __("Which key should activate the Player information screen? A single character.");
        // line 159
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "clientInformationKeyCode", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "clientInformationKeyCode"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 161
        $context["title"] = __("Log Level");
        // line 162
        echo "                    ";
        $context["helpText"] = __("The logging level that should be recorded by the Player.");
        // line 163
        echo "                    ";
        $context["options"] = [0 => ["id" => "audit", "value" => __("Audit")], 1 => ["id" => "info", "value" => __("Information")], 2 => ["id" => "error", "value" => __("Error")], 3 => ["id" => "off", "value" => __("Off")]];
        // line 169
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "dropdown", [0 => "logLevel", 1 => "single", 2 => ($context["title"] ?? null), 3 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "logLevel"], "method"), 4 => ($context["options"] ?? null), 5 => "id", 6 => "value", 7 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 171
        $context["title"] = __("Log file path name.");
        // line 172
        echo "                    ";
        $context["helpText"] = __("Create a log file on disk in this location. Please enter a fully qualified path.");
        // line 173
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "logToDiskLocation", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "logToDiskLocation"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 179
        $context["title"] = __("Show the icon in the task bar?");
        // line 180
        echo "                    ";
        $context["helpText"] = __("Should the application icon be shown in the task bar?");
        // line 181
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "showInTaskbar", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "showInTaskbar"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 183
        $context["title"] = __("Cursor Start Position");
        // line 184
        echo "                    ";
        $context["helpText"] = __("The position of the cursor when the Player starts up.");
        // line 185
        echo "                    ";
        $context["options"] = [0 => ["id" => "Unchanged", "value" => __("Unchanged")], 1 => ["id" => "Top Left", "value" => __("Top Left")], 2 => ["id" => "Top Right", "value" => __("Top Right")], 3 => ["id" => "Bottom Left", "value" => __("Bottom Left")], 4 => ["id" => "Bottom Right", "value" => __("Bottom Right")]];
        // line 192
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "dropdown", [0 => "cursorStartPosition", 1 => "single", 2 => ($context["title"] ?? null), 3 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "cursorStartPosition"], "method"), 4 => ($context["options"] ?? null), 5 => "id", 6 => "value", 7 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 194
        $context["title"] = __("Enable Double Buffering");
        // line 195
        echo "                    ";
        $context["helpText"] = __("Double buffering helps smooth the playback but should be disabled if graphics errors occur");
        // line 196
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "doubleBuffering", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "doubleBuffering"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 198
        $context["title"] = __("Duration for Empty Layouts");
        // line 199
        echo "                    ";
        $context["helpText"] = __("If an empty layout is detected how long (in seconds) should it remain on screen? Must be greater than 1.");
        // line 200
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "emptyLayoutDuration", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "emptyLayoutDuration"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 202
        $context["title"] = __("Enable Mouse");
        // line 203
        echo "                    ";
        $context["helpText"] = __("Enable the mouse.");
        // line 204
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "enableMouse", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "enableMouse"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 206
        $context["title"] = __("Enable Shell Commands");
        // line 207
        echo "                    ";
        $context["helpText"] = __("Enable the Shell Command module.");
        // line 208
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "enableShellCommands", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "enableShellCommands"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 210
        if (($this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 1 => 0], "method") == 1)) {
            // line 211
            echo "                        ";
            $context["title"] = __("Notify current layout");
            // line 212
            echo "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 213
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "sendCurrentLayoutAsStatusUpdate", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "sendCurrentLayoutAsStatusUpdate"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
            echo "
                    ";
        }
        // line 215
        echo "
                    ";
        // line 216
        $context["title"] = __("Expire Modified Layouts?");
        // line 217
        echo "                    ";
        $context["helpText"] = __("Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS");
        // line 218
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "expireModifiedLayouts", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "expireModifiedLayouts"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 220
        $context["title"] = __("Maximum concurrent downloads");
        // line 221
        echo "                    ";
        $context["helpText"] = __("The maximum number of concurrent downloads the Player will attempt.");
        // line 222
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "maxConcurrentDownloads", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "maxConcurrentDownloads"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 224
        $context["title"] = __("Shell Command Allow List");
        // line 225
        echo "                    ";
        $context["helpText"] = __("Which shell commands should the Player execute?");
        // line 226
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "shellCommandAllowList", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "shellCommandAllowList"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 228
        if (($this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 1 => 0], "method") == 1)) {
            // line 229
            echo "                        ";
            $context["title"] = __("Screen shot interval");
            // line 230
            echo "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 231
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "screenShotRequestInterval", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "screenShotRequestInterval"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
            echo "
                    ";
        }
        // line 233
        echo "
                    ";
        // line 234
        $context["title"] = __("Screen Shot Size");
        // line 235
        echo "                    ";
        $context["helpText"] = __("The size of the largest dimension. Empty or 0 means the screen size.");
        // line 236
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "screenShotSize", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "screenShotSize"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 238
        $context["title"] = __("Limit the number of log files uploaded concurrently");
        // line 239
        echo "                    ";
        $context["helpText"] = __("The number of log files to upload concurrently. The lower the number the longer it will take, but the better for memory usage.");
        // line 240
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "maxLogFileUploads", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "maxLogFileUploads"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 242
        $context["title"] = __("Embedded Web Server Port");
        // line 243
        echo "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 244
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "number", [0 => "embeddedServerPort", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "embeddedServerPort"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                    ";
        // line 246
        $context["title"] = __("Prevent Sleep?");
        // line 247
        echo "                    ";
        $context["helpText"] = __("Stop the player PC power management from Sleeping the PC");
        // line 248
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "preventSleep", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "getSetting", [0 => "preventSleep"], "method"), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

                </div>

                ";
        // line 252
        if ((twig_length_filter($this->env, ($context["commands"] ?? null)) > 0)) {
            // line 253
            echo "                <div class=\"tab-pane\" id=\"commands\">
                    ";
            // line 254
            $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-windows.twig", 254)->display($context);
            // line 255
            echo "                </div>
                ";
        }
        // line 257
        echo "            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit-windows.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 257,  513 => 255,  511 => 254,  508 => 253,  506 => 252,  498 => 248,  495 => 247,  493 => 246,  487 => 244,  484 => 243,  482 => 242,  476 => 240,  473 => 239,  471 => 238,  465 => 236,  462 => 235,  460 => 234,  457 => 233,  451 => 231,  448 => 230,  445 => 229,  443 => 228,  437 => 226,  434 => 225,  432 => 224,  426 => 222,  423 => 221,  421 => 220,  415 => 218,  412 => 217,  410 => 216,  407 => 215,  401 => 213,  398 => 212,  395 => 211,  393 => 210,  387 => 208,  384 => 207,  382 => 206,  376 => 204,  373 => 203,  371 => 202,  365 => 200,  362 => 199,  360 => 198,  354 => 196,  351 => 195,  349 => 194,  343 => 192,  340 => 185,  337 => 184,  335 => 183,  329 => 181,  326 => 180,  324 => 179,  314 => 173,  311 => 172,  309 => 171,  303 => 169,  300 => 163,  297 => 162,  295 => 161,  289 => 159,  286 => 158,  284 => 157,  278 => 155,  275 => 154,  273 => 153,  263 => 147,  260 => 146,  258 => 145,  252 => 143,  249 => 142,  247 => 141,  241 => 139,  238 => 138,  236 => 137,  230 => 135,  227 => 134,  225 => 133,  216 => 128,  213 => 127,  211 => 126,  205 => 124,  202 => 123,  200 => 122,  194 => 120,  191 => 109,  188 => 108,  186 => 107,  180 => 105,  177 => 104,  175 => 103,  169 => 101,  166 => 100,  164 => 99,  158 => 97,  155 => 96,  153 => 95,  143 => 89,  140 => 88,  138 => 87,  132 => 85,  129 => 84,  127 => 83,  121 => 81,  118 => 76,  115 => 75,  113 => 74,  107 => 72,  104 => 71,  102 => 70,  96 => 68,  93 => 67,  91 => 66,  85 => 64,  82 => 42,  79 => 41,  77 => 40,  74 => 39,  72 => 38,  66 => 35,  63 => 34,  57 => 32,  55 => 31,  51 => 30,  47 => 29,  43 => 28,  39 => 27,  35 => 26,  30 => 23,);
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
 */
#}
<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\">{% trans \"General\" %}</a></li>
            <li><a href=\"#network\" role=\"tab\" data-toggle=\"tab\">{% trans \"Network\" %}</a></li>
            <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\">{% trans \"Location\" %}</a></li>
            <li><a href=\"#troubleshooting\" role=\"tab\" data-toggle=\"tab\">{% trans \"Troubleshooting\" %}</a></li>
            <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">{% trans \"Advanced\" %}</a></li>
            {% if commands|length > 0 %}
                <li><a href=\"#commands\" role=\"tab\" data-toggle=\"tab\">{% trans \"Commands\" %}</a></li>
            {% endif %}
        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"displayProfile.edit\", {id: displayProfile.displayProfileId}) }}\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    {% include \"displayprofile-form-edit-common-fields.twig\" %}

                    {% set title = \"Collect interval\"|trans %}
                    {% set helpText = \"How often should the Player check for new content.\"|trans %}
                    {% set options = [
                        { id: 60, value: \"1 minute\"|trans },
                        { id: 300, value: \"5 minutes\"|trans },
                        { id: 600, value: \"10 minutes\"|trans },
                        { id: 1800, value: \"30 minutes\"|trans },
                        { id: 3600, value: \"1 hour\"|trans },
                        { id: 5400, value: \"1 hour 30 minutes\"|trans },
                        { id: 7200, value: \"2 hours\"|trans },
                        { id: 9000, value: \"2 hours 30 minutes\"|trans },
                        { id: 10800, value: \"3 hours\"|trans },
                        { id: 12600, value: \"3 hours 30 minutes\"|trans },
                        { id: 14400, value: \"4 hours\"|trans },
                        { id: 18000, value: \"5 hours\"|trans },
                        { id: 21600, value: \"6 hours\"|trans },
                        { id: 25200, value: \"7 hours\"|trans },
                        { id: 28800, value: \"8 hours\"|trans },
                        { id: 32400, value: \"9 hours\"|trans },
                        { id: 36000, value: \"10 hours\"|trans },
                        { id: 39600, value: \"11 hours\"|trans },
                        { id: 43200, value: \"12 hours\"|trans },
                        { id: 86400, value: \"24 hours\"|trans }
                    ] %}
                    {{ forms.dropdown(\"collectInterval\", \"single\", title, displayProfile.getSetting(\"collectInterval\"), options, \"id\", \"value\", helpText) }}

                    {% set title = \"XMR Public Address\"|trans %}
                    {% set helpText = \"Please enter the public address for XMR.\"|trans %}
                    {{ forms.input(\"xmrNetworkAddress\", title, displayProfile.getSetting(\"xmrNetworkAddress\"), helpText) }}

                    {% set title = \"Enable stats reporting?\"|trans %}
                    {% set helpText = \"Should the application send proof of play stats to the CMS.\"|trans %}
                    {{ forms.checkbox(\"statsEnabled\", title, displayProfile.getSetting(\"statsEnabled\"), helpText) }}

                    {% set title = \"Aggregation level\"|trans %}
                    {% set helpText = \"Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.\"|trans %}
                    {% set options = [
                        { id: 'Individual', value: \"Individual\"|trans },
                        { id: 'Hourly', value: \"Hourly\"|trans },
                        { id: 'Daily', value: \"Daily\"|trans },
                    ] %}
                    {{ forms.dropdown(\"aggregationLevel\", \"single\", title, displayProfile.getSetting(\"aggregationLevel\"), options, \"id\", \"value\", helpText, \"aggregation-level\") }}

                    {% set title = \"Record geolocation on each Proof of Play?\"|trans %}
                    {% set helpText = \"If the geolocation of the Display is known, enable to record that location against each proof of play record.\"|trans %}
                    {{ forms.checkbox(\"isRecordGeoLocationOnProofOfPlay\", title, displayProfile.getSetting(\"isRecordGeoLocationOnProofOfPlay\"), helpText) }}

                    {% set title = \"Enable PowerPoint?\"|trans %}
                    {% set helpText = \"Should Microsoft PowerPoint be Enabled? The Player will need PowerPoint installed to Display PowerPoint files.\"|trans %}
                    {{ forms.checkbox(\"powerpointEnabled\", title, displayProfile.getSetting(\"powerpointEnabled\"), helpText) }}

                </div>

                <div class=\"tab-pane\" id=\"network\">

                    {% set title = \"Download Window Start Time\"|trans %}
                    {% set helpText = \"The start of the time window to connect to the CMS and download updates.\"|trans %}
                    {{ forms.time(\"downloadStartWindow\", title, displayProfile.getSetting(\"downloadStartWindow\"), helpText) }}

                    {% set title = \"Download Window End Time\"|trans %}
                    {% set helpText = \"The end of the time window to connect to the CMS and download updates.\"|trans %}
                    {{ forms.time(\"downloadEndWindow\", title, displayProfile.getSetting(\"downloadEndWindow\"), helpText) }}

                    {% set title = \"Force HTTPS?\"|trans %}
                    {% set helpText = \"Should Displays be forced to use HTTPS connection to the CMS?\"|trans %}
                    {{ forms.checkbox(\"forceHttps\", title, displayProfile.getSetting(\"forceHttps\"), helpText) }}

                    {% set title = \"Operating Hours\"|trans %}
                    {% set helpText = \"Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours\"|trans %}
                    {% set attributes = [
                        { name: \"data-width\", value: \"300px\" },
                        { name: \"data-allow-clear\", value: \"true\" },
                        { name: \"data-placeholder--id\", value: null },
                        { name: \"data-placeholder--value\", value: \"\" },
                        { name: \"data-search-url\", value: urlFor(\"daypart.search\") },
                        { name: \"data-search-term\", value: \"name\" },
                        { name: \"data-id-property\", value: \"dayPartId\" },
                        { name: \"data-text-property\", value: \"name\" },
                        { name: \"data-filter-options\", value: '{\"isAlways\":\"0\", \"isCustom\":\"0\"}' }
                    ] %}
                    {{ forms.dropdown(\"dayPartId\", \"single\", title, displayProfile.getSetting(\"dayPartId\"), [{dayPartId:null, name:\"\"}]|merge(dayParts), \"dayPartId\", \"name\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}

                    {% set title = \"Authentication Whitelist\"|trans %}
                    {% set helpText = \"A comma separated list of domains which should be allowed to perform NTML/Negotiate authentication.\"|trans %}
                    {{ forms.input(\"authServerWhitelist\", title, displayProfile.getSetting(\"authServerWhitelist\"), helpText) }}

                    {% set title = \"Edge Browser Whitelist\"|trans %}
                    {% set helpText = \"A comma separated list of website urls which should be rendered by the Edge Browser instead of Chromium.\"|trans %}
                    {{ forms.input(\"edgeBrowserWhitelist\", title, displayProfile.getSetting(\"edgeBrowserWhitelist\"), helpText) }}
                </div>

                <div class=\"tab-pane\" id=\"location\">

                    {% set title = \"Width\"|trans %}
                    {% set helpText = \"The Width of the Display Window. 0 means full width.\"|trans %}
                    {{ forms.number(\"sizeX\", title, displayProfile.getSetting(\"sizeX\"), helpText) }}

                    {% set title = \"Height\"|trans %}
                    {% set helpText = \"The Height of the Display Window. 0 means full height.\"|trans %}
                    {{ forms.number(\"sizeY\", title, displayProfile.getSetting(\"sizeY\"), helpText) }}

                    {% set title = \"Left Coordinate\"|trans %}
                    {% set helpText = \"The left pixel position the display window should be sized from.\"|trans %}
                    {{ forms.number(\"offsetX\", title, displayProfile.getSetting(\"offsetX\"), helpText) }}

                    {% set title = \"Top Coordinate\"|trans %}
                    {% set helpText = \"The top pixel position the display window should be sized from.\"|trans %}
                    {{ forms.number(\"offsetY\", title, displayProfile.getSetting(\"offsetY\"), helpText) }}

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    {% set title = \"CTRL Key required to access Player Information Screen?\"|trans %}
                    {% set helpText = \"Should the Player information screen require the CTRL key?\"|trans %}
                    {{ forms.checkbox(\"clientInfomationCtrlKey\", title, displayProfile.getSetting(\"clientInfomationCtrlKey\"), helpText) }}

                    {% set title = \"Key for Player Information Screen\"|trans %}
                    {% set helpText = \"Which key should activate the Player information screen? A single character.\"|trans %}
                    {{ forms.input(\"clientInformationKeyCode\", title, displayProfile.getSetting(\"clientInformationKeyCode\"), helpText) }}

                    {% set title = \"Log Level\"|trans %}
                    {% set helpText = \"The logging level that should be recorded by the Player.\"|trans %}
                    {% set options = [
                        { id: 'audit', value: \"Audit\"|trans },
                        { id: 'info', value: \"Information\"|trans },
                        { id: 'error', value: \"Error\"|trans },
                        { id: 'off', value: \"Off\"|trans }
                    ] %}
                    {{ forms.dropdown(\"logLevel\", \"single\", title, displayProfile.getSetting(\"logLevel\"), options, \"id\", \"value\", helpText) }}

                    {% set title = \"Log file path name.\"|trans %}
                    {% set helpText = \"Create a log file on disk in this location. Please enter a fully qualified path.\"|trans %}
                    {{ forms.input(\"logToDiskLocation\", title, displayProfile.getSetting(\"logToDiskLocation\"), helpText) }}

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    {% set title = \"Show the icon in the task bar?\"|trans %}
                    {% set helpText = \"Should the application icon be shown in the task bar?\"|trans %}
                    {{ forms.checkbox(\"showInTaskbar\", title, displayProfile.getSetting(\"showInTaskbar\"), helpText) }}

                    {% set title = \"Cursor Start Position\"|trans %}
                    {% set helpText = \"The position of the cursor when the Player starts up.\"|trans %}
                    {% set options = [
                        { id: \"Unchanged\", value: \"Unchanged\"|trans },
                        { id: \"Top Left\", value: \"Top Left\"|trans },
                        { id: \"Top Right\", value: \"Top Right\"|trans },
                        { id: \"Bottom Left\", value: \"Bottom Left\"|trans },
                        { id: \"Bottom Right\", value: \"Bottom Right\"|trans }
                    ] %}
                    {{ forms.dropdown(\"cursorStartPosition\", \"single\", title, displayProfile.getSetting(\"cursorStartPosition\"), options, \"id\", \"value\", helpText) }}

                    {% set title = \"Enable Double Buffering\"|trans %}
                    {% set helpText = \"Double buffering helps smooth the playback but should be disabled if graphics errors occur\"|trans %}
                    {{ forms.checkbox(\"doubleBuffering\", title, displayProfile.getSetting(\"doubleBuffering\"), helpText) }}

                    {% set title = \"Duration for Empty Layouts\"|trans %}
                    {% set helpText = \"If an empty layout is detected how long (in seconds) should it remain on screen? Must be greater than 1.\"|trans %}
                    {{ forms.number(\"emptyLayoutDuration\", title, displayProfile.getSetting(\"emptyLayoutDuration\"), helpText) }}

                    {% set title = \"Enable Mouse\"|trans %}
                    {% set helpText = \"Enable the mouse.\"|trans %}
                    {{ forms.checkbox(\"enableMouse\", title, displayProfile.getSetting(\"enableMouse\"), helpText) }}

                    {% set title = \"Enable Shell Commands\"|trans %}
                    {% set helpText = \"Enable the Shell Command module.\"|trans %}
                    {{ forms.checkbox(\"enableShellCommands\", title, displayProfile.getSetting(\"enableShellCommands\"), helpText) }}

                    {% if theme.getSetting('DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED', 0) == 1 %}
                        {% set title = \"Notify current layout\"|trans %}
                        {% set helpText = \"When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.\"|trans %}
                        {{ forms.checkbox(\"sendCurrentLayoutAsStatusUpdate\", title, displayProfile.getSetting(\"sendCurrentLayoutAsStatusUpdate\"), helpText) }}
                    {% endif %}

                    {% set title = \"Expire Modified Layouts?\"|trans %}
                    {% set helpText = \"Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS\"|trans %}
                    {{ forms.checkbox(\"expireModifiedLayouts\", title, displayProfile.getSetting(\"expireModifiedLayouts\"), helpText) }}

                    {% set title = \"Maximum concurrent downloads\"|trans %}
                    {% set helpText = \"The maximum number of concurrent downloads the Player will attempt.\"|trans %}
                    {{ forms.number(\"maxConcurrentDownloads\", title, displayProfile.getSetting(\"maxConcurrentDownloads\"), helpText) }}

                    {% set title = \"Shell Command Allow List\"|trans %}
                    {% set helpText = \"Which shell commands should the Player execute?\"|trans %}
                    {{ forms.input(\"shellCommandAllowList\", title, displayProfile.getSetting(\"shellCommandAllowList\"), helpText) }}

                    {% if theme.getSetting('DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED', 0) == 1 %}
                        {% set title = \"Screen shot interval\"|trans %}
                        {% set helpText = \"The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.\"|trans %}
                        {{ forms.number(\"screenShotRequestInterval\", title, displayProfile.getSetting(\"screenShotRequestInterval\"), helpText) }}
                    {% endif %}

                    {% set title = \"Screen Shot Size\"|trans %}
                    {% set helpText = \"The size of the largest dimension. Empty or 0 means the screen size.\"|trans %}
                    {{ forms.input(\"screenShotSize\", title, displayProfile.getSetting(\"screenShotSize\"), helpText) }}

                    {% set title = \"Limit the number of log files uploaded concurrently\"|trans %}
                    {% set helpText = \"The number of log files to upload concurrently. The lower the number the longer it will take, but the better for memory usage.\"|trans %}
                    {{ forms.number(\"maxLogFileUploads\", title, displayProfile.getSetting(\"maxLogFileUploads\"), helpText) }}

                    {% set title = \"Embedded Web Server Port\"|trans %}
                    {% set helpText = \"The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.\"|trans %}
                    {{ forms.number(\"embeddedServerPort\", title, displayProfile.getSetting(\"embeddedServerPort\"), helpText) }}

                    {% set title = \"Prevent Sleep?\"|trans %}
                    {% set helpText = \"Stop the player PC power management from Sleeping the PC\"|trans %}
                    {{ forms.checkbox(\"preventSleep\", title, displayProfile.getSetting(\"preventSleep\"), helpText) }}

                </div>

                {% if commands|length > 0 %}
                <div class=\"tab-pane\" id=\"commands\">
                    {% include \"displayprofile-form-edit-command-fields.twig\" %}
                </div>
                {% endif %}
            </div>
        </form>
    </div>
</div>", "displayprofile-form-edit-windows.twig", "E:\\app\\laragon\\www\\xibo\\views\\displayprofile-form-edit-windows.twig");
    }
}
