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

/* display-form-edit.twig */
class __TwigTemplate_79954fa03418e7274bf44e938aa2719a741042e5263f1b7b88de0784236a3f19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'extra' => [$this, 'block_extra'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["forms"] = $this->loadTemplate("forms.twig", "display-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo __("Edit Display");
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 32
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        echo ", displayEditFormSubmit()
";
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        echo "displayEditFormOpen";
    }

    // line 38
    public function block_extra($context, array $blocks = [])
    {
        echo twig_jsonencode_filter($this->getAttribute(($context["display"] ?? null), "overrideConfig", []));
    }

    // line 40
    public function block_formHtml($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Location");
        echo "</span></a></li>
                <li><a href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Maintenance");
        echo "</span></a></li>
                <li><a href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Wake on LAN");
        echo "</span></a></li>
                <li><a href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Profile Settings");
        echo "</span></a></li>
                <li><a href=\"#remote\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Remote");
        echo "</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Advanced");
        echo "</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"DisplayForm XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.edit", ["id" => $this->getAttribute(($context["display"] ?? null), "displayId", [])]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 56
        ob_start();
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        if (($context["displayLockName"] ?? null)) {
            // line 58
            echo "                            ";
            ob_start();
            echo __("The Name of the Display - your administrator has locked this to the device name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "                            ";
            echo $context["forms"]->getdisabled("display", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "display", []), ($context["helpText"] ?? null), "", "required");
            echo "
                        ";
        } else {
            // line 61
            echo "                            ";
            ob_start();
            echo __("The Name of the Display - (1 - 50 characters).");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "                            ";
            echo $context["forms"]->getinput("display", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "display", []), ($context["helpText"] ?? null), "", "required");
            echo "
                        ";
        }
        // line 64
        echo "                
                        ";
        // line 65
        ob_start();
        echo __("Display's Hardware Key");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start();
        echo __("A unique identifier for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        echo $context["forms"]->getinput("license", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "license", []), ($context["helpText"] ?? null), "", "required", "", false);
        echo "

                        ";
        // line 69
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        ob_start();
        echo __("A description - (1 - 254 characters).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        echo $context["forms"]->getinput("description", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "description", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 73
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start();
        echo __("Tags for this Display - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        echo $context["forms"]->getinputWithTags("tags", ($context["title"] ?? null), ($context["tags"] ?? null), ($context["helpText"] ?? null), "tags-with-value");
        echo "

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        ";
        // line 79
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        echo $context["forms"]->getdropdown("tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value");
        echo "

                        <div id=\"tagValueContainer\">
                            ";
        // line 83
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                            ";
        ob_start();
        echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                            ";
        echo $context["forms"]->getinput("tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>";
        // line 89
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
                        </div>

                        ";
        // line 92
        ob_start();
        echo __("Authorise display?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        ob_start();
        echo __("Use one of the available slots for this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        $context["options"] = [0 => ["licensedid" => 1, "licensed" =>         // line 97
($context["yes"] ?? null)], 1 => ["licensedid" => 0, "licensed" =>         // line 98
($context["no"] ?? null)]];
        // line 100
        echo "                        ";
        echo $context["forms"]->getdropdown("licensed", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "licensed", []), ($context["options"] ?? null), "licensedid", "licensed", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 102
        ob_start();
        echo __("Default Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        ob_start();
        echo __("The Default Layout to display where there is no other content scheduled. If left empty with no other content scheduled the splash screen will be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search")], 1 => ["name" => "data-search-term", "value" => "layout"], 2 => ["name" => "data-search-term-tags", "value" => "tags"], 3 => ["name" => "data-id-property", "value" => "layoutId"], 4 => ["name" => "data-text-property", "value" => "layout"], 5 => ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 112
        echo "                        ";
        echo $context["forms"]->getdropdown("defaultLayoutId", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "defaultLayoutId", []), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        ";
        // line 115
        ob_start();
        echo __("Latitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        echo "                        ";
        ob_start();
        echo __("The Latitude of this display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                        ";
        echo $context["forms"]->getnumber("latitude", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "latitude", []), ($context["helpText"] ?? null));
        echo "
                        
                        ";
        // line 119
        ob_start();
        echo __("Longitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        ob_start();
        echo __("The Longitude of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        echo $context["forms"]->getnumber("longitude", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "longitude", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 123
        $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"]];
        // line 126
        echo "                        ";
        ob_start();
        echo __("Timezone");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        ob_start();
        echo __("The timezone for this display, or empty to use the CMS timezone");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        echo $context["forms"]->getdropdown("timeZone", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "timeZone", []), twig_array_merge([0 => ["id" => "", "value" => ""]], ($context["timeZones"] ?? null)), "id", "value", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        ";
        // line 132
        ob_start();
        echo __("Email Alerts");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        ob_start();
        echo __("Do you want to be notified by email if there is a problem with this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        $context["options"] = [0 => ["id" => 0, "value" =>         // line 137
($context["no"] ?? null)], 1 => ["id" => 1, "value" =>         // line 138
($context["yes"] ?? null)]];
        // line 140
        echo "                        ";
        echo $context["forms"]->getdropdown("emailAlert", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "emailAlert", []), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "


                        ";
        // line 143
        ob_start();
        echo __("Use the Global Timeout?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                        ";
        ob_start();
        echo __("Should this display be tested against the global time out or the Player collection interval?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        echo "                        ";
        echo $context["forms"]->getcheckbox("alertTimeout", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "alertTimeout", []), ($context["helpText"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        ";
        // line 149
        ob_start();
        echo __("Enable Wake on LAN");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                        ";
        ob_start();
        echo __("Wake on Lan requires the correct network configuration to route the magic packet to the display PC");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "                        ";
        echo $context["forms"]->getcheckbox("wakeOnLanEnabled", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "wakeOnLanEnabled", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 153
        ob_start();
        echo __("BroadCast Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        echo "                        ";
        ob_start();
        echo __("The IP address of the remote host's broadcast address (or gateway)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        echo "                        ";
        echo $context["forms"]->getinput("broadCastAddress", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "broadCastAddress", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 157
        ob_start();
        echo __("Wake on LAN SecureOn");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                        ";
        ob_start();
        echo __("Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: 'xx-xx-xx-xx-xx-xx'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        echo $context["forms"]->getinput("secureOn", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "secureOn", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 161
        ob_start();
        echo __("Wake on LAN Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        ob_start();
        echo __("The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        echo "                        ";
        echo $context["forms"]->getinput("wakeOnLanTime", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "wakeOnLanTime", []), ($context["helpText"] ?? null));
        echo "


                        ";
        // line 166
        ob_start();
        echo __("Wake on LAN CIDR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        echo "                        ";
        ob_start();
        echo __("Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host's broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo "                        ";
        echo $context["forms"]->getinput("cidr", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "cidr", []), ($context["helpText"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"settings\">
                        ";
        // line 171
        ob_start();
        echo __("Settings Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        echo "                        ";
        ob_start();
        echo __("What display profile should this display use? To use the default profile leave this empty.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        echo "                        ";
        echo $context["forms"]->getdropdown("displayProfileId", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "displayProfileId", []), twig_array_merge([0 => ["displayProfileId" => null, "name" => ""]], ($context["profiles"] ?? null)), "displayProfileId", "name", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 175
        ob_start();
        echo __("The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <table id=\"settings-from-profile\" class=\"table table-striped\">
                            <thead>
                                <th>";
        // line 180
        echo twig_escape_filter($this->env, __("Setting"), "html", null, true);
        echo "</th>
                                <th>";
        // line 181
        echo twig_escape_filter($this->env, __("Profile"), "html", null, true);
        echo "</th>
                                <th>";
        // line 182
        echo twig_escape_filter($this->env, __("Override"), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 189
        ob_start();
        echo __("Interleave Default");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "                        ";
        ob_start();
        echo __("Whether to always put the default layout into the cycle.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        echo "                        ";
        $context["options"] = [0 => ["id" => 0, "value" =>         // line 194
($context["no"] ?? null)], 1 => ["id" => 1, "value" =>         // line 195
($context["yes"] ?? null)]];
        // line 197
        echo "                        ";
        echo $context["forms"]->getdropdown("incSchedule", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "incSchedule", []), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 199
        ob_start();
        echo __("Auditing until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        echo "                        ";
        ob_start();
        echo __("Collect auditing from this Player. Should only be used if there is a problem with the display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        echo "                        ";
        if ($this->getAttribute(($context["display"] ?? null), "isAuditing", [], "method")) {
            // line 202
            echo "                            ";
            $context["auditing"] = $this->getAttribute(($context["display"] ?? null), "auditingUntilIso", []);
            // line 203
            echo "                        ";
        } else {
            // line 204
            echo "                            ";
            $context["auditing"] = "";
            // line 205
            echo "                        ";
        }
        // line 206
        echo "                        ";
        echo $context["forms"]->getdatetime("auditingUntil", ($context["title"] ?? null), ($context["auditing"] ?? null), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 208
        ob_start();
        echo __("Bandwidth limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 209
        echo "                        ";
        ob_start();
        echo __("The bandwidth limit that should be applied. Enter 0 for no limit.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">";
        // line 211
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["display"] ?? null), "bandwidthLimit", []), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">";
        // line 214
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 225
        ob_start();
        echo __("Clear Cached Data");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 226
        echo "                        ";
        ob_start();
        echo __("Remove any cached data for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        echo "                        ";
        echo $context["forms"]->getcheckbox("clearCachedData", ($context["title"] ?? null), 1, ($context["helpText"] ?? null));
        echo "

                        ";
        // line 229
        ob_start();
        echo __("Reconfigure XMR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 230
        echo "                        ";
        ob_start();
        echo __("Remove the XMR configuration for this Player and send a rekey action.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 231
        echo "                        ";
        echo $context["forms"]->getcheckbox("rekeyXmr", ($context["title"] ?? null), 0, ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"remote\">
                        ";
        // line 235
        ob_start();
        echo __("TeamViewer Serial");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        echo "                        ";
        ob_start();
        echo __("If TeamViewer is installed on the device, enter the serial number here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        echo "                        ";
        echo $context["forms"]->getinput("teamViewerSerial", ($context["title"] ?? null), ($context["teamViewerSerial"] ?? null), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 239
        ob_start();
        echo __("Webkey Serial");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 240
        echo "                        ";
        ob_start();
        echo __("If Webkey is installed on the device, enter the serial number here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        echo "                        ";
        echo $context["forms"]->getinput("webkeySerial", ($context["title"] ?? null), ($context["webkeySerial"] ?? null), ($context["helpText"] ?? null));
        echo "
                    </div>
                </div>
            </form>


            <div id=\"settings-from-display-profile\" style=\"display:none\">
                ";
        // line 249
        echo "                ";
        if (($this->getAttribute(($context["displayProfile"] ?? null), "getClientType", [], "method") == "android")) {
            // line 250
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-android.twig", "display-form-edit.twig", 250)->display($context);
            // line 251
            echo "                ";
        } elseif (($this->getAttribute(($context["displayProfile"] ?? null), "getClientType", [], "method") == "windows")) {
            // line 252
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-windows.twig", "display-form-edit.twig", 252)->display($context);
            // line 253
            echo "                ";
        } elseif (($this->getAttribute(($context["displayProfile"] ?? null), "getClientType", [], "method") == "linux")) {
            // line 254
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-linux.twig", "display-form-edit.twig", 254)->display($context);
            // line 255
            echo "                ";
        } elseif ((($this->getAttribute(($context["displayProfile"] ?? null), "getClientType", [], "method") == "lg") || ($this->getAttribute(($context["displayProfile"] ?? null), "getClientType", [], "method") == "sssp"))) {
            // line 256
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-soc.twig", "display-form-edit.twig", 256)->display($context);
            // line 257
            echo "                ";
        }
        // line 258
        echo "
                ";
        // line 259
        $this->loadTemplate("displayprofile-form-edit-javascript.twig", "display-form-edit.twig", 259)->display($context);
        // line 260
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 260,  706 => 259,  703 => 258,  700 => 257,  697 => 256,  694 => 255,  691 => 254,  688 => 253,  685 => 252,  682 => 251,  679 => 250,  676 => 249,  665 => 241,  660 => 240,  656 => 239,  650 => 237,  645 => 236,  641 => 235,  633 => 231,  628 => 230,  624 => 229,  618 => 227,  613 => 226,  609 => 225,  595 => 214,  591 => 213,  586 => 211,  583 => 210,  578 => 209,  574 => 208,  568 => 206,  565 => 205,  562 => 204,  559 => 203,  556 => 202,  553 => 201,  548 => 200,  544 => 199,  538 => 197,  536 => 195,  535 => 194,  533 => 193,  528 => 192,  523 => 191,  518 => 190,  514 => 189,  504 => 182,  500 => 181,  496 => 180,  488 => 176,  484 => 175,  478 => 173,  473 => 172,  469 => 171,  462 => 168,  457 => 167,  453 => 166,  446 => 163,  441 => 162,  437 => 161,  431 => 159,  426 => 158,  422 => 157,  416 => 155,  411 => 154,  407 => 153,  401 => 151,  396 => 150,  392 => 149,  384 => 145,  379 => 144,  375 => 143,  368 => 140,  366 => 138,  365 => 137,  363 => 136,  358 => 135,  353 => 134,  348 => 133,  344 => 132,  336 => 128,  331 => 127,  326 => 126,  324 => 123,  318 => 121,  313 => 120,  309 => 119,  303 => 117,  298 => 116,  294 => 115,  287 => 112,  284 => 104,  279 => 103,  275 => 102,  269 => 100,  267 => 98,  266 => 97,  264 => 96,  259 => 95,  254 => 94,  249 => 93,  245 => 92,  239 => 89,  231 => 85,  226 => 84,  222 => 83,  215 => 80,  211 => 79,  203 => 75,  198 => 74,  194 => 73,  188 => 71,  183 => 70,  179 => 69,  173 => 67,  168 => 66,  164 => 65,  161 => 64,  155 => 62,  150 => 61,  144 => 59,  139 => 58,  136 => 57,  132 => 56,  123 => 52,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  89 => 41,  86 => 40,  80 => 38,  74 => 36,  68 => 33,  64 => 32,  57 => 31,  54 => 30,  49 => 27,  46 => 26,  41 => 23,  39 => 24,  33 => 23,);
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
{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Display\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, displayEditFormSubmit()
{% endblock %}

{% block callBack %}displayEditFormOpen{% endblock %}

{% block extra %}{{ display.overrideConfig|json_encode|raw }}{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Location\" %}</span></a></li>
                <li><a href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Maintenance\" %}</span></a></li>
                <li><a href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Wake on LAN\" %}</span></a></li>
                <li><a href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Profile Settings\" %}</span></a></li>
                <li><a href=\"#remote\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Remote\" %}</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"DisplayForm XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"display.edit\", {id: display.displayId}) }}\" data-gettag=\"{{ urlFor(\"tag.getByName\") }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        {% set title %}{% trans \"Display\" %}{% endset %}
                        {% if displayLockName %}
                            {% set helpText %}{% trans \"The Name of the Display - your administrator has locked this to the device name\" %}{% endset %}
                            {{ forms.disabled(\"display\", title, display.display, helpText, \"\", \"required\") }}
                        {% else %}
                            {% set helpText %}{% trans \"The Name of the Display - (1 - 50 characters).\" %}{% endset %}
                            {{ forms.input(\"display\", title, display.display, helpText, \"\", \"required\") }}
                        {% endif %}
                
                        {% set title %}{% trans \"Display's Hardware Key\" %}{% endset %}
                        {% set helpText %}{% trans \"A unique identifier for this display.\" %}{% endset %}
                        {{ forms.input(\"license\", title, display.license, helpText, \"\", \"required\", \"\", false) }}

                        {% set title %}{% trans \"Description\" %}{% endset %}
                        {% set helpText %}{% trans \"A description - (1 - 254 characters).\" %}{% endset %}
                        {{ forms.input(\"description\", title, display.description, helpText) }}

                        {% set title %}{% trans \"Tags\" %}{% endset %}
                        {% set helpText %}{% trans \"Tags for this Display - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.\" %}{% endset %}
                        {{ forms.inputWithTags(\"tags\", title, tags, helpText, 'tags-with-value') }}

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        {% set title %}{% trans \"Tag value\" %}{% endset %}
                        {{ forms.dropdown(\"tagValue\", \"single\", title, \"\", options, \"key\", \"value\") }}

                        <div id=\"tagValueContainer\">
                            {% set title %}{% trans \"Tag value\" %}{% endset %}
                            {% set helpText %}{% trans \"Please provide the value for this Tag and confirm by pressing enter on your keyboard.\" %}{% endset %}
                            {{ forms.input(\"tagValueInput\", title, \"\", helpText) }}
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>{% trans \"This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.\" %}</p>
                        </div>

                        {% set title %}{% trans \"Authorise display?\" %}{% endset %}
                        {% set helpText %}{% trans \"Use one of the available slots for this display?\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { licensedid: 1, licensed: yes },
                        { licensedid: 0, licensed: no }
                        ] %}
                        {{ forms.dropdown(\"licensed\", \"single\", title, display.licensed, options, \"licensedid\", \"licensed\", helpText) }}

                        {% set title %}{% trans \"Default Layout\" %}{% endset %}
                        {% set helpText %}{% trans \"The Default Layout to display where there is no other content scheduled. If left empty with no other content scheduled the splash screen will be displayed\" %}{% endset %}
                        {% set attributes = [
                            { name: \"data-search-url\", value: urlFor(\"layout.search\") },
                            { name: \"data-search-term\", value: \"layout\" },
                            { name: \"data-search-term-tags\", value: \"tags\" },
                            { name: \"data-id-property\", value: \"layoutId\" },
                            { name: \"data-text-property\", value: \"layout\" },
                            { name: \"data-filter-options\", value: '{\"retired\":\"0\"}' }
                        ] %}
                        {{ forms.dropdown(\"defaultLayoutId\", \"single\", title, display.defaultLayoutId, layouts, \"layoutId\", \"layout\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        {% set title %}{% trans \"Latitude\" %}{% endset %}
                        {% set helpText %}{% trans \"The Latitude of this display\" %}{% endset %}
                        {{ forms.number(\"latitude\", title, display.latitude, helpText) }}
                        
                        {% set title %}{% trans \"Longitude\" %}{% endset %}
                        {% set helpText %}{% trans \"The Longitude of this Display\" %}{% endset %}
                        {{ forms.number(\"longitude\", title, display.longitude, helpText) }}

                        {% set attributes = [
                        { name: \"data-width\", value: \"100%\" }
                        ] %}
                        {% set title %}{% trans \"Timezone\" %}{% endset %}
                        {% set helpText %}{% trans \"The timezone for this display, or empty to use the CMS timezone\" %}{% endset %}
                        {{ forms.dropdown(\"timeZone\", \"single\", title, display.timeZone, [{id:\"\", value:\"\"}]|merge(timeZones), \"id\", \"value\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        {% set title %}{% trans \"Email Alerts\" %}{% endset %}
                        {% set helpText %}{% trans \"Do you want to be notified by email if there is a problem with this display?\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { id: 0, value: no },
                        { id: 1, value: yes }
                        ] %}
                        {{ forms.dropdown(\"emailAlert\", \"single\", title, display.emailAlert, options, \"id\", \"value\", helpText) }}


                        {% set title %}{% trans \"Use the Global Timeout?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should this display be tested against the global time out or the Player collection interval?\" %}{% endset %}
                        {{ forms.checkbox(\"alertTimeout\", title, display.alertTimeout, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        {% set title %}{% trans \"Enable Wake on LAN\" %}{% endset %}
                        {% set helpText %}{% trans \"Wake on Lan requires the correct network configuration to route the magic packet to the display PC\" %}{% endset %}
                        {{ forms.checkbox(\"wakeOnLanEnabled\", title, display.wakeOnLanEnabled, helpText) }}

                        {% set title %}{% trans \"BroadCast Address\" %}{% endset %}
                        {% set helpText %}{% trans \"The IP address of the remote host\\'s broadcast address (or gateway)\" %}{% endset %}
                        {{ forms.input(\"broadCastAddress\", title, display.broadCastAddress, helpText) }}

                        {% set title %}{% trans \"Wake on LAN SecureOn\" %}{% endset %}
                        {% set helpText %}{% trans \"Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: \\'xx-xx-xx-xx-xx-xx\\'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).\" %}{% endset %}
                        {{ forms.input(\"secureOn\", title, display.secureOn, helpText) }}

                        {% set title %}{% trans \"Wake on LAN Time\" %}{% endset %}
                        {% set helpText %}{% trans \"The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.\" %}{% endset %}
                        {{ forms.input(\"wakeOnLanTime\", title, display.wakeOnLanTime, helpText) }}


                        {% set title %}{% trans \"Wake on LAN CIDR\" %}{% endset %}
                        {% set helpText %}{% trans \"Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host\\'s broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.\" %}{% endset %}
                        {{ forms.input(\"cidr\", title, display.cidr, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"settings\">
                        {% set title %}{% trans \"Settings Profile?\" %}{% endset %}
                        {% set helpText %}{% trans \"What display profile should this display use? To use the default profile leave this empty.\" %}{% endset %}
                        {{ forms.dropdown(\"displayProfileId\", \"single\", title, display.displayProfileId, [{displayProfileId: null, name: \"\"}]|merge(profiles), \"displayProfileId\", \"name\", helpText) }}

                        {% set message %}{% trans \"The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.\" %}{% endset %}
                        {{ forms.message(message) }}

                        <table id=\"settings-from-profile\" class=\"table table-striped\">
                            <thead>
                                <th>{{ \"Setting\"|trans }}</th>
                                <th>{{ \"Profile\"|trans }}</th>
                                <th>{{ \"Override\"|trans }}</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        {% set title %}{% trans \"Interleave Default\" %}{% endset %}
                        {% set helpText %}{% trans \"Whether to always put the default layout into the cycle.\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { id: 0, value: no },
                        { id: 1, value: yes }
                        ] %}
                        {{ forms.dropdown(\"incSchedule\", \"single\", title, display.incSchedule, options, \"id\", \"value\", helpText) }}

                        {% set title %}{% trans \"Auditing until\" %}{% endset %}
                        {% set helpText %}{% trans \"Collect auditing from this Player. Should only be used if there is a problem with the display.\" %}{% endset %}
                        {% if display.isAuditing() %}
                            {% set auditing = display.auditingUntilIso %}
                        {% else %}
                            {% set auditing = \"\" %}
                        {% endif %}
                        {{ forms.datetime(\"auditingUntil\", title, auditing, helpText) }}

                        {% set title %}{% trans \"Bandwidth limit\" %}{% endset %}
                        {% set helpText %}{% trans \"The bandwidth limit that should be applied. Enter 0 for no limit.\" %}{% endset %}
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">{{ title }}</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"{{ display.bandwidthLimit }}\"/>
                                <span class=\"help-block\">{{ helpText }}</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        {% set title %}{% trans \"Clear Cached Data\" %}{% endset %}
                        {% set helpText %}{% trans \"Remove any cached data for this display.\" %}{% endset %}
                        {{ forms.checkbox(\"clearCachedData\", title, 1, helpText) }}

                        {% set title %}{% trans \"Reconfigure XMR\" %}{% endset %}
                        {% set helpText %}{% trans \"Remove the XMR configuration for this Player and send a rekey action.\" %}{% endset %}
                        {{ forms.checkbox(\"rekeyXmr\", title, 0, helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"remote\">
                        {% set title %}{% trans \"TeamViewer Serial\" %}{% endset %}
                        {% set helpText %}{% trans \"If TeamViewer is installed on the device, enter the serial number here.\" %}{% endset %}
                        {{ forms.input(\"teamViewerSerial\", title, teamViewerSerial, helpText) }}

                        {% set title %}{% trans \"Webkey Serial\" %}{% endset %}
                        {% set helpText %}{% trans \"If Webkey is installed on the device, enter the serial number here.\" %}{% endset %}
                        {{ forms.input(\"webkeySerial\", title, webkeySerial, helpText) }}
                    </div>
                </div>
            </form>


            <div id=\"settings-from-display-profile\" style=\"display:none\">
                {# Output the relevant form depending on the display profile player type #}
                {% if displayProfile.getClientType() == \"android\" %}
                    {% include \"displayprofile-form-edit-android.twig\" %}
                {% elseif displayProfile.getClientType() == \"windows\" %}
                    {% include \"displayprofile-form-edit-windows.twig\" %}
                {% elseif displayProfile.getClientType() == \"linux\" %}
                    {% include \"displayprofile-form-edit-linux.twig\" %}
                {% elseif displayProfile.getClientType() == \"lg\" or displayProfile.getClientType() == \"sssp\"  %}
                    {% include \"displayprofile-form-edit-soc.twig\" %}
                {% endif %}

                {% include \"displayprofile-form-edit-javascript.twig\" %}
            </div>
        </div>
    </div>
{% endblock %}", "display-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-form-edit.twig");
    }
}
