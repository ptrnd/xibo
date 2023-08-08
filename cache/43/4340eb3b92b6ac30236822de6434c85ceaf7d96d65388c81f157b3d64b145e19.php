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

/* settings-page.twig */
class __TwigTemplate_300e5f6ec6cb71182c3567ad00e32884be0e4e10865ff26e48012711b11cbe33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
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
        $context["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 27
        echo "    <ul class=\"nav nav-pills pull-right\">
        ";
        // line 28
        if ($this->getAttribute(($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [])) {
            // line 29
            echo "            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</a></li>
        ";
        }
        // line 31
        echo "    </ul>
";
    }

    // line 34
    public function block_pageContent($context, array $blocks = [])
    {
        // line 35
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 36
        echo __("Settings");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\"><a href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("Configuration");
        echo "</span></a></li>
                        <li><a href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Defaults");
        echo "</span></a></li>
                        <li><a href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Displays");
        echo "</span></a></li>
                        <li><a href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("General");
        echo "</span></a></li>
                        <li><a href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Maintenance");
        echo "</span></a></li>
                        <li><a href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Network");
        echo "</span></a></li>
                        <li><a href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Permissions");
        echo "</span></a></li>
                        <li><a href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Regional");
        echo "</span></a></li>
                        <li><a href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Troubleshooting");
        echo "</span></a></li>
                        <li><a href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Users");
        echo "</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("settings.update"), "html", null, true);
        echo "\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">";
        // line 55
        echo __("Configuration");
        echo "</h3>

                                ";
        // line 57
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_LOCATION"], "method")) {
            // line 58
            echo "                                    ";
            ob_start();
            echo __("Library Location");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "                                    ";
            ob_start();
            echo __("The fully qualified path to the CMS library location.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "
                                    ";
            // line 61
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_LOCATION"], "method")) {
                // line 62
                echo "                                        ";
                echo $context["forms"]->getinput("LIBRARY_LOCATION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_LOCATION"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 64
                echo "                                        ";
                echo $context["forms"]->getdisabled("LIBRARY_LOCATION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_LOCATION"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 66
            echo "                                ";
        }
        // line 67
        echo "
                                ";
        // line 68
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SERVER_KEY"], "method")) {
            // line 69
            echo "                                    ";
            ob_start();
            echo __("CMS Secret Key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "                                    ";
            ob_start();
            echo __("This key must be entered into each Player to authenticate the Player with the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            echo "
                                    ";
            // line 72
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SERVER_KEY"], "method")) {
                // line 73
                echo "                                        ";
                echo $context["forms"]->getinput("SERVER_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SERVER_KEY"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 75
                echo "                                        ";
                echo $context["forms"]->getdisabled("SERVER_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SERVER_KEY"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 77
            echo "                                ";
        }
        // line 78
        echo "
                                ";
        // line 79
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "GLOBAL_THEME_NAME"], "method")) {
            // line 80
            echo "                                    ";
            ob_start();
            echo __("CMS Theme");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            echo "                                    ";
            ob_start();
            echo __("The Theme to apply to all pages by default");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            echo "
                                    ";
            // line 83
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "GLOBAL_THEME_NAME"], "method")) {
                // line 84
                echo "                                        ";
                if (($context["hideThemes"] ?? null)) {
                    // line 85
                    echo "                                            ";
                    // line 86
                    echo "                                            ";
                    echo $context["forms"]->getinput("GLOBAL_THEME_NAME", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method"), ($context["helpText"] ?? null));
                    echo "
                                        ";
                } else {
                    // line 88
                    echo "                                            ";
                    echo $context["forms"]->getdropdown("GLOBAL_THEME_NAME", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method"), ($context["themes"] ?? null), "id", "value", ($context["helpText"] ?? null));
                    echo "
                                        ";
                }
                // line 90
                echo "                                    ";
            } else {
                // line 91
                echo "                                        ";
                echo $context["forms"]->getdisabled("GLOBAL_THEME_NAME", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 93
            echo "                                ";
        }
        // line 94
        echo "
                                ";
        // line 95
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "NAVIGATION_MENU_POSITION"], "method")) {
            // line 96
            echo "                                    ";
            ob_start();
            echo __("Navigation Menu");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            echo "                                    ";
            ob_start();
            echo __("Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            echo "
                                    ";
            // line 99
            ob_start();
            echo __("Horizontal along the top");
            $context["horizontalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "                                    ";
            ob_start();
            echo __("Vertically on the left");
            $context["verticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            echo "                                    ";
            $context["options"] = [0 => ["id" => "horizontal", "value" =>             // line 102
($context["horizontalOption"] ?? null)], 1 => ["id" => "vertical", "value" =>             // line 103
($context["verticalOption"] ?? null)]];
            // line 105
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "NAVIGATION_MENU_POSITION"], "method")) {
                // line 106
                echo "                                        ";
                echo $context["forms"]->getdropdown("NAVIGATION_MENU_POSITION", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 108
                echo "                                        ";
                echo $context["forms"]->getdisabled("NAVIGATION_MENU_POSITION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 110
            echo "                                ";
        }
        // line 111
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">";
        // line 113
        echo __("Defaults");
        echo "</h3>

                                ";
        // line 115
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method")) {
            // line 116
            echo "                                    ";
            ob_start();
            echo __("Default update media in all layouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            echo "                                    ";
            ob_start();
            echo __("Default the checkbox for updating media on all layouts when editing in the library");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "
                                    ";
            // line 119
            echo $context["forms"]->getcheckbox("LIBRARY_MEDIA_UPDATEINALL_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 121
        echo "
                                ";
        // line 122
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LAYOUT_COPY_MEDIA_CHECKB"], "method")) {
            // line 123
            echo "                                    ";
            ob_start();
            echo __("Default copy media when copying a layout?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            echo "                                    ";
            ob_start();
            echo __("Default the checkbox for making duplicates of media when copying layouts");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            echo "
                                    ";
            // line 126
            echo $context["forms"]->getcheckbox("LAYOUT_COPY_MEDIA_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_COPY_MEDIA_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 128
        echo "
                                ";
        // line 129
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method")) {
            // line 130
            echo "                                    ";
            ob_start();
            echo __("Default for \"Delete old version of Media\" checkbox. Shown when Editing Library Media.");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 131
            echo "                                    ";
            ob_start();
            echo __("Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "
                                    ";
            // line 133
            echo $context["forms"]->getcheckbox("LIBRARY_MEDIA_DELETEOLDVER_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 135
        echo "
                                ";
        // line 136
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method")) {
            // line 137
            echo "                                    ";
            ob_start();
            echo __("Should Layouts be automatically Published?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 138
            echo "                                    ";
            ob_start();
            echo __("When enabled draft Layouts will be automatically published 30 minutes after the last edit");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo "
                                    ";
            // line 140
            echo $context["forms"]->getcheckbox("DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 142
        echo "
                                ";
        // line 143
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_CASCADE_PERMISSION_CHECKB"], "method")) {
            // line 144
            echo "                                    ";
            ob_start();
            echo __("Default for \"Cascade permissions to all items underneath this one.\" checkbox. Shown when editing Permissions.");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 145
            echo "                                    ";
            ob_start();
            echo __("Default the checkbox for \"Cascade permissions to all items underneath this one.\" when assigning permisions to content");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            echo "
                                    ";
            // line 147
            echo $context["forms"]->getcheckbox("DEFAULT_CASCADE_PERMISSION_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_CASCADE_PERMISSION_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_CASCADE_PERMISSION_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 149
        echo "
                                ";
        // line 150
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_IN"], "method")) {
            // line 151
            echo "                                    ";
            ob_start();
            echo __("Default Transition In");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 152
            echo "                                    ";
            ob_start();
            echo __("Default Transition In that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
                                    ";
            // line 154
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_IN"], "method")) {
                // line 155
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("transition.search")], 2 => ["name" => "data-search-term", "value" => "transition"], 3 => ["name" => "data-id-property", "value" => "code"], 4 => ["name" => "data-text-property", "value" => "transition"], 5 => ["name" => "data-filter-options", "value" => "{\"availableAsIn\":\"1\"}"]];
                // line 163
                echo "                                        ";
                echo $context["forms"]->getdropdown("DEFAULT_TRANSITION_IN", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_IN"], "method"), [0 => ($context["defaultTransitionIn"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                echo "
                                    ";
            } else {
                // line 165
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_TRANSITION_IN", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_IN"], "method"), "");
                echo "
                                    ";
            }
            // line 167
            echo "                                ";
        }
        // line 168
        echo "
                                ";
        // line 169
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_OUT"], "method")) {
            // line 170
            echo "                                    ";
            ob_start();
            echo __("Default Transition Out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 171
            echo "                                    ";
            ob_start();
            echo __("Default Transition Out that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            echo "
                                    ";
            // line 173
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_OUT"], "method")) {
                // line 174
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("transition.search")], 2 => ["name" => "data-search-term", "value" => "transition"], 3 => ["name" => "data-id-property", "value" => "code"], 4 => ["name" => "data-text-property", "value" => "transition"], 5 => ["name" => "data-filter-options", "value" => "{\"availableAsOut\":\"1\"}"]];
                // line 182
                echo "                                        ";
                echo $context["forms"]->getdropdown("DEFAULT_TRANSITION_OUT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_OUT"], "method"), [0 => ($context["defaultTransitionOut"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                echo "
                                    ";
            } else {
                // line 184
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_TRANSITION_OUT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_OUT"], "method"), "");
                echo "
                                    ";
            }
            // line 186
            echo "                                ";
        }
        // line 187
        echo "
                                ";
        // line 188
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_DURATION"], "method")) {
            // line 189
            echo "                                    ";
            ob_start();
            echo __("Default Transition duration");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 190
            echo "                                    ";
            ob_start();
            echo __("Default duration for in and out transitions");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 191
            echo "
                                    ";
            // line 192
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_DURATION"], "method")) {
                // line 193
                echo "                                        ";
                echo $context["forms"]->getnumber("DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_DURATION", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 195
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_DURATION", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 197
            echo "                                ";
        }
        // line 198
        echo "
                                ";
        // line 199
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method")) {
            // line 200
            echo "                                    ";
            ob_start();
            echo __("Default value for \"Automatically apply Transitions?.\" checkbox on Layout add form");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 201
            echo "
                                    ";
            // line 202
            echo $context["forms"]->getcheckbox("DEFAULT_TRANSITION_AUTO_APPLY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method"));
            echo "
                                ";
        }
        // line 204
        echo "
                                ";
        // line 205
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_RESIZE_THRESHOLD"], "method")) {
            // line 206
            echo "                                    ";
            ob_start();
            echo __("Resize Threshold");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 207
            echo "                                    ";
            ob_start();
            echo __("The maximum dimensions to be considered when an image is resized, based on the longest side");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            echo "
                                    ";
            // line 209
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_RESIZE_THRESHOLD"], "method")) {
                // line 210
                echo "                                        ";
                echo $context["forms"]->getnumber("DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_THRESHOLD", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 212
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_THRESHOLD", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 214
            echo "                                ";
        }
        // line 215
        echo "
                                ";
        // line 216
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_RESIZE_LIMIT"], "method")) {
            // line 217
            echo "                                    ";
            ob_start();
            echo __("Resize Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 218
            echo "                                    ";
            ob_start();
            echo __("Images that exceed the resize limit, based on the longest side, will not be processed");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            echo "
                                    ";
            // line 220
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_RESIZE_LIMIT"], "method")) {
                // line 221
                echo "                                        ";
                echo $context["forms"]->getnumber("DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_LIMIT", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 223
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_LIMIT", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 225
            echo "                                ";
        }
        // line 226
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">";
        // line 228
        echo __("Displays");
        echo "</h3>

                                ";
        // line 230
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAYOUT"], "method")) {
            // line 231
            echo "                                    ";
            ob_start();
            echo __("Default Layout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 232
            echo "                                    ";
            ob_start();
            echo __("The default layout to assign for new displays and displays which have their current default deleted.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 233
            echo "
                                    ";
            // line 234
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAYOUT"], "method")) {
                // line 235
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search")], 2 => ["name" => "data-search-term", "value" => "layout"], 3 => ["name" => "data-search-term-tags", "value" => "tags"], 4 => ["name" => "data-id-property", "value" => "layoutId"], 5 => ["name" => "data-text-property", "value" => "layout"], 6 => ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
                // line 244
                echo "                                        ";
                echo $context["forms"]->getdropdown("DEFAULT_LAYOUT", "single", ($context["title"] ?? null), $this->getAttribute(($context["defaultLayout"] ?? null), "layoutId", []), [0 => ($context["defaultLayout"] ?? null)], "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                echo "
                                    ";
            } else {
                // line 246
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_LAYOUT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAYOUT"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 248
            echo "                                ";
        }
        // line 249
        echo "
                                ";
        // line 250
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "XMR_ADDRESS"], "method")) {
            // line 251
            echo "                                    ";
            ob_start();
            echo __("XMR Private Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            echo "                                    ";
            ob_start();
            echo __("Please enter the private address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            echo "
                                    ";
            // line 254
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "XMR_ADDRESS"], "method")) {
                // line 255
                echo "                                        ";
                echo $context["forms"]->getinput("XMR_ADDRESS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "XMR_ADDRESS", 1 => "tcp:://localhost:5555"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 257
                echo "                                        ";
                echo $context["forms"]->getdisabled("XMR_ADDRESS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "XMR_ADDRESS", 1 => "tcp:://localhost:5555"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 259
            echo "                                ";
        }
        // line 260
        echo "
                                ";
        // line 261
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "XMR_PUB_ADDRESS"], "method")) {
            // line 262
            echo "                                    ";
            ob_start();
            echo __("XMR Public Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 263
            echo "                                    ";
            ob_start();
            echo __("Please enter the public address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 264
            echo "
                                    ";
            // line 265
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "XMR_PUB_ADDRESS"], "method")) {
                // line 266
                echo "                                        ";
                echo $context["forms"]->getinput("XMR_PUB_ADDRESS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "XMR_PUB_ADDRESS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 268
                echo "                                        ";
                echo $context["forms"]->getdisabled("XMR_PUB_ADDRESS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "XMR_PUB_ADDRESS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 270
            echo "                                ";
        }
        // line 271
        echo "
                                ";
        // line 272
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAT"], "method")) {
            // line 273
            echo "                                    ";
            ob_start();
            echo __("Default Latitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 274
            echo "                                    ";
            ob_start();
            echo __("The Latitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 275
            echo "
                                    ";
            // line 276
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAT"], "method")) {
                // line 277
                echo "                                        ";
                echo $context["forms"]->getinput("DEFAULT_LAT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAT", 1 => "51.504"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 279
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_LAT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAT", 1 => "51.504"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 281
            echo "                                ";
        }
        // line 282
        echo "
                                ";
        // line 283
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LONG"], "method")) {
            // line 284
            echo "                                    ";
            ob_start();
            echo __("Default Longitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 285
            echo "                                    ";
            ob_start();
            echo __("The longitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 286
            echo "
                                    ";
            // line 287
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LONG"], "method")) {
                // line 288
                echo "                                        ";
                echo $context["forms"]->getinput("DEFAULT_LONG", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LONG", 1 => "-0.104"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 290
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_LONG", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LONG", 1 => "-0.104"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 292
            echo "                                ";
        }
        // line 293
        echo "
                                ";
        // line 294
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method")) {
            // line 295
            echo "                                    ";
            ob_start();
            echo __("Add a link to the Display name using this format mask?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 296
            echo "                                    ";
            ob_start();
            echo __("Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
                                    ";
            // line 298
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method")) {
                // line 299
                echo "                                        ";
                echo $context["forms"]->getinput("SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 301
                echo "                                        ";
                echo $context["forms"]->getdisabled("SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 303
            echo "                                ";
        }
        // line 304
        echo "
                                ";
        // line 305
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SHOW_DISPLAY_AS_VNC_TGT"], "method")) {
            // line 306
            echo "                                    ";
            ob_start();
            echo __("The target attribute for the above link");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 307
            echo "                                    ";
            ob_start();
            echo __("If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            echo "
                                    ";
            // line 309
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SHOW_DISPLAY_AS_VNC_TGT"], "method")) {
                // line 310
                echo "                                        ";
                echo $context["forms"]->getinput("SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNC_TGT", 1 => "_top"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 312
                echo "                                        ";
                echo $context["forms"]->getdisabled("SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNC_TGT", 1 => "_top"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 314
            echo "                                ";
        }
        // line 315
        echo "
                                ";
        // line 316
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAX_LICENSED_DISPLAYS"], "method")) {
            // line 317
            echo "                                    ";
            ob_start();
            echo __("Number of display slots");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 318
            echo "                                    ";
            ob_start();
            echo __("The maximum number of licensed Players for this server installation. 0 = unlimited");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            echo "
                                    ";
            // line 320
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAX_LICENSED_DISPLAYS"], "method")) {
                // line 321
                echo "                                        ";
                echo $context["forms"]->getnumber("MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAX_LICENSED_DISPLAYS", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 323
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAX_LICENSED_DISPLAYS", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 325
            echo "                                ";
        }
        // line 326
        echo "
                                ";
        // line 327
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method")) {
            // line 328
            echo "                                    ";
            ob_start();
            echo __("Aggregation level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 329
            echo "                                    ";
            ob_start();
            echo __("Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            echo "
                                    ";
            // line 331
            ob_start();
            echo __("Individual");
            $context["individualOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 332
            echo "                                    ";
            ob_start();
            echo __("Hourly");
            $context["hourlyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 333
            echo "                                    ";
            ob_start();
            echo __("Daily");
            $context["dailyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 334
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Individual", "value" =>             // line 335
($context["individualOption"] ?? null)], 1 => ["id" => "Hourly", "value" =>             // line 336
($context["hourlyOption"] ?? null)], 2 => ["id" => "Daily", "value" =>             // line 337
($context["dailyOption"] ?? null)]];
            // line 339
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method")) {
                // line 340
                echo "                                        ";
                echo $context["forms"]->getdropdown("DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 342
                echo "                                        ";
                echo $context["forms"]->getdisabled("DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 344
            echo "                                ";
        }
        // line 345
        echo "
                                ";
        // line 346
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method")) {
            // line 347
            echo "                                    ";
            ob_start();
            echo __("Enable Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 348
            echo "                                    ";
            ob_start();
            echo __("Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 349
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DISPLAY_PROFILE_STATS_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method"));
            echo "
                                ";
        }
        // line 351
        echo "
                                ";
        // line 352
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method")) {
            // line 353
            echo "                                    ";
            ob_start();
            echo __("Enable Layout Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 354
            echo "                                    ";
            ob_start();
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 355
            echo "                                    ";
            echo $context["forms"]->getcheckbox("LAYOUT_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method"));
            echo "
                                ";
        }
        // line 357
        echo "
                                ";
        // line 358
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method")) {
            // line 359
            echo "                                    ";
            ob_start();
            echo __("Enable Media Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 360
            echo "                                    ";
            ob_start();
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 361
            echo "
                                    ";
            // line 362
            ob_start();
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 363
            echo "                                    ";
            ob_start();
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 364
            echo "                                    ";
            ob_start();
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 365
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 366
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 367
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 368
($context["inheritOption"] ?? null)]];
            // line 370
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method")) {
                // line 371
                echo "                                        ";
                echo $context["forms"]->getdropdown("MEDIA_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 373
                echo "                                        ";
                echo $context["forms"]->getdisabled("MEDIA_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 375
            echo "                                ";
        }
        // line 376
        echo "
                                ";
        // line 377
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method")) {
            // line 378
            echo "                                    ";
            ob_start();
            echo __("Enable Playlist Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 379
            echo "                                    ";
            ob_start();
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 380
            echo "
                                    ";
            // line 381
            ob_start();
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 382
            echo "                                    ";
            ob_start();
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 383
            echo "                                    ";
            ob_start();
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 384
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 385
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 386
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 387
($context["inheritOption"] ?? null)]];
            // line 389
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method")) {
                // line 390
                echo "                                        ";
                echo $context["forms"]->getdropdown("PLAYLIST_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 392
                echo "                                        ";
                echo $context["forms"]->getdisabled("PLAYLIST_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 394
            echo "                                ";
        }
        // line 395
        echo "
                                ";
        // line 396
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")) {
            // line 397
            echo "                                    ";
            ob_start();
            echo __("Enable Widget Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 398
            echo "                                    ";
            ob_start();
            echo __("Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 399
            echo "
                                    ";
            // line 400
            ob_start();
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 401
            echo "                                    ";
            ob_start();
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 402
            echo "                                    ";
            ob_start();
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 403
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 404
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 405
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 406
($context["inheritOption"] ?? null)]];
            // line 408
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")) {
                // line 409
                echo "                                        ";
                echo $context["forms"]->getdropdown("WIDGET_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 411
                echo "                                        ";
                echo $context["forms"]->getdisabled("WIDGET_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 413
            echo "                                ";
        }
        // line 414
        echo "
                                ";
        // line 415
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method")) {
            // line 416
            echo "                                    ";
            ob_start();
            echo __("Enable the option to report the current layout status?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 417
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method"));
            echo "
                                ";
        }
        // line 419
        echo "
                                ";
        // line 420
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method")) {
            // line 421
            echo "                                    ";
            ob_start();
            echo __("Lock the Display Name to the device name provided by the Player?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 422
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DISPLAY_LOCK_NAME_TO_DEVICENAME", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method"));
            echo "
                                ";
        }
        // line 424
        echo "
                                ";
        // line 425
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method")) {
            // line 426
            echo "                                    ";
            ob_start();
            echo __("Enable the option to set the screenshot interval?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 427
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method"));
            echo "
                                ";
        }
        // line 429
        echo "
                                ";
        // line 430
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method")) {
            // line 431
            echo "                                    ";
            ob_start();
            echo __("Display Screenshot Default Size");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 432
            echo "                                    ";
            ob_start();
            echo __("The default size in pixels for the Display Screenshots");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 433
            echo "
                                    ";
            // line 434
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method")) {
                // line 435
                echo "                                        ";
                echo $context["forms"]->getnumber("DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 1 => 200], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 437
                echo "                                        ";
                echo $context["forms"]->getdisabled("DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 1 => 200], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 439
            echo "                                ";
        }
        // line 440
        echo "
                                ";
        // line 441
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_AUTO_AUTH"], "method")) {
            // line 442
            echo "                                    ";
            ob_start();
            echo __("Automatically authorise new Displays?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 443
            echo "                                    ";
            ob_start();
            echo __("If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 444
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DISPLAY_AUTO_AUTH", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_AUTO_AUTH", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_AUTO_AUTH"], "method"));
            echo "
                                ";
        }
        // line 446
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">";
        // line 448
        echo __("General");
        echo "</h3>

                                ";
        // line 450
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "HELP_BASE"], "method")) {
            // line 451
            echo "                                    ";
            ob_start();
            echo __("Location of the Manual");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 452
            echo "                                    ";
            ob_start();
            echo __("The address of the user manual, which will be used as a prefix for all help links.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 453
            echo "
                                    ";
            // line 454
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "HELP_BASE"], "method")) {
                // line 455
                echo "                                        ";
                echo $context["forms"]->getinput("HELP_BASE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "HELP_BASE", 1 => "https://xibo.org.uk/manual/"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 457
                echo "                                        ";
                echo $context["forms"]->getdisabled("HELP_BASE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "HELP_BASE", 1 => "https://xibo.org.uk/manual/"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 459
            echo "                                ";
        }
        // line 460
        echo "
                                ";
        // line 461
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "QUICK_CHART_URL"], "method")) {
            // line 462
            echo "                                    ";
            ob_start();
            echo __("Quick Chart URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 463
            echo "                                    ";
            ob_start();
            echo __("Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 464
            echo "
                                    ";
            // line 465
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "QUICK_CHART_URL"], "method")) {
                // line 466
                echo "                                        ";
                echo $context["forms"]->getinput("QUICK_CHART_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "QUICK_CHART_URL", 1 => "https://quickchart.io"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 468
                echo "                                        ";
                echo $context["forms"]->getdisabled("QUICK_CHART_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "QUICK_CHART_URL", 1 => "https://quickchart.io"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 470
            echo "                                ";
        }
        // line 471
        echo "
                                ";
        // line 472
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME"], "method")) {
            // line 473
            echo "                                    ";
            ob_start();
            echo __("Allow usage tracking?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 474
            echo "                                    ";
            ob_start();
            echo __("Should the CMS send anonymous statistics to help improve the software?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 475
            echo "
                                    ";
            // line 476
            echo $context["forms"]->getcheckbox("PHONE_HOME", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME"], "method"));
            echo "
                                ";
        }
        // line 478
        echo "
                                ";
        // line 479
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_KEY"], "method")) {
            // line 480
            echo "                                    ";
            ob_start();
            echo __("Phone home key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 481
            echo "                                    ";
            ob_start();
            echo __("Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 482
            echo "
                                    ";
            // line 483
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_KEY"], "method")) {
                // line 484
                echo "                                        ";
                echo $context["forms"]->getinput("PHONE_HOME_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_KEY"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 486
                echo "                                        ";
                echo $context["forms"]->getdisabled("PHONE_HOME_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_KEY"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 488
            echo "                                ";
        }
        // line 489
        echo "
                                ";
        // line 490
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_DATE"], "method")) {
            // line 491
            echo "                                    ";
            ob_start();
            echo __("Phone home time");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 492
            echo "                                    ";
            ob_start();
            echo __("The last time we PHONED_HOME in seconds since the epoch");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 493
            echo "
                                    ";
            // line 494
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_DATE"], "method")) {
                // line 495
                echo "                                        ";
                echo $context["forms"]->getinput("PHONE_HOME_DATE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_DATE"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 497
                echo "                                        ";
                echo $context["forms"]->getdisabled("PHONE_HOME_DATE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_DATE"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 499
            echo "                                ";
        }
        // line 500
        echo "
                                ";
        // line 501
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_URL"], "method")) {
            // line 502
            echo "                                    ";
            ob_start();
            echo __("Phone home URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 503
            echo "                                    ";
            ob_start();
            echo __("The URL to connect to to PHONE_HOME (if enabled)");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 504
            echo "
                                    ";
            // line 505
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_URL"], "method")) {
                // line 506
                echo "                                        ";
                echo $context["forms"]->getinput("PHONE_HOME_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_URL", 1 => "http://www.xibo.org.uk/stats/track.php"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 508
                echo "                                        ";
                echo $context["forms"]->getdisabled("PHONE_HOME_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_URL", 1 => "http://www.xibo.org.uk/stats/track.php"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 510
            echo "                                ";
        }
        // line 511
        echo "
                                ";
        // line 512
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_LOOKAHEAD"], "method")) {
            // line 513
            echo "                                    ";
            ob_start();
            echo __("Send Schedule in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 514
            echo "                                    ";
            ob_start();
            echo __("Should the CMS send future schedule information to Players?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 515
            echo "
                                    ";
            // line 516
            echo $context["forms"]->getcheckbox("SCHEDULE_LOOKAHEAD", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_LOOKAHEAD", 1 => 1], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_LOOKAHEAD"], "method"));
            echo "
                                ";
        }
        // line 518
        echo "
                                ";
        // line 519
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "EVENT_SYNC"], "method")) {
            // line 520
            echo "                                    ";
            ob_start();
            echo __("Show Synchronise this Event checkbox on applicable events?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 521
            echo "                                    ";
            ob_start();
            echo __("If checked you will have an option to enable Synchronise this Event checkbox for applicable events");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 522
            echo "
                                    ";
            // line 523
            echo $context["forms"]->getcheckbox("EVENT_SYNC", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "EVENT_SYNC", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "EVENT_SYNC"], "method"));
            echo "
                                ";
        }
        // line 525
        echo "
                                ";
        // line 526
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "REQUIRED_FILES_LOOKAHEAD"], "method")) {
            // line 527
            echo "                                    ";
            ob_start();
            echo __("Send files in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 528
            echo "                                    ";
            ob_start();
            echo __("How many seconds in to the future should the calls to RequiredFiles look?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 529
            echo "
                                    ";
            // line 530
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "REQUIRED_FILES_LOOKAHEAD"], "method")) {
                // line 531
                echo "                                        ";
                echo $context["forms"]->getnumber("REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "REQUIRED_FILES_LOOKAHEAD", 1 => "172800"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 533
                echo "                                        ";
                echo $context["forms"]->getdisabled("REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "REQUIRED_FILES_LOOKAHEAD", 1 => "172800"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 535
            echo "                                ";
        }
        // line 536
        echo "
                                ";
        // line 537
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SETTING_IMPORT_ENABLED"], "method")) {
            // line 538
            echo "                                    ";
            ob_start();
            echo __("Allow Import?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 539
            echo "
                                    ";
            // line 540
            echo $context["forms"]->getcheckbox("SETTING_IMPORT_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SETTING_IMPORT_ENABLED", 1 => 0], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SETTING_IMPORT_ENABLED"], "method"));
            echo "
                                ";
        }
        // line 542
        echo "
                                ";
        // line 543
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SETTING_LIBRARY_TIDY_ENABLED"], "method")) {
            // line 544
            echo "                                    ";
            ob_start();
            echo __("Enable Library Tidy?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 545
            echo "
                                    ";
            // line 546
            echo $context["forms"]->getcheckbox("SETTING_LIBRARY_TIDY_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SETTING_LIBRARY_TIDY_ENABLED", 1 => 1], "method"), "", "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SETTING_LIBRARY_TIDY_ENABLED"], "method"));
            echo "
                                ";
        }
        // line 548
        echo "
                                ";
        // line 549
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "EMBEDDED_STATUS_WIDGET"], "method")) {
            // line 550
            echo "                                    ";
            ob_start();
            echo __("Status Dashboard Widget");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            echo "                                    ";
            ob_start();
            echo __("HTML to embed in an iframe on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 552
            echo "
                                    ";
            // line 553
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "EMBEDDED_STATUS_WIDGET"], "method")) {
                // line 554
                echo "                                        ";
                echo $context["forms"]->getinput("EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "EMBEDDED_STATUS_WIDGET"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 556
                echo "                                        ";
                echo $context["forms"]->getdisabled("EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "EMBEDDED_STATUS_WIDGET"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 558
            echo "                                ";
        }
        // line 559
        echo "
                                ";
        // line 560
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULTS_IMPORTED"], "method")) {
            // line 561
            echo "                                    ";
            ob_start();
            echo __("Defaults Imported?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 562
            echo "                                    ";
            ob_start();
            echo __("Has the default layout been imported?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 563
            echo "
                                    ";
            // line 564
            echo $context["forms"]->getcheckbox("DEFAULTS_IMPORTED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULTS_IMPORTED", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULTS_IMPORTED"], "method"));
            echo "
                                ";
        }
        // line 566
        echo "
                                ";
        // line 567
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DASHBOARD_LATEST_NEWS_ENABLED"], "method")) {
            // line 568
            echo "                                    ";
            ob_start();
            echo __("Enable Latest News?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 569
            echo "                                    ";
            ob_start();
            echo __("Should the Dashboard show latest news? The address is provided by the theme.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 570
            echo "
                                    ";
            // line 571
            echo $context["forms"]->getcheckbox("DASHBOARD_LATEST_NEWS_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DASHBOARD_LATEST_NEWS_ENABLED", 1 => 1], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DASHBOARD_LATEST_NEWS_ENABLED"], "method"));
            echo "
                                ";
        }
        // line 573
        echo "
                                ";
        // line 574
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "INSTANCE_SUSPENDED"], "method")) {
            // line 575
            echo "                                    ";
            ob_start();
            echo __("Instance Suspended");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 576
            echo "                                    ";
            ob_start();
            echo __("Is this instance suspended?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 577
            echo "
                                    ";
            // line 578
            echo $context["forms"]->getcheckbox("INSTANCE_SUSPENDED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "INSTANCE_SUSPENDED", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "INSTANCE_SUSPENDED"], "method"));
            echo "
                                ";
        }
        // line 580
        echo "
                                ";
        // line 581
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LATEST_NEWS_URL"], "method")) {
            // line 582
            echo "                                    ";
            ob_start();
            echo __("Latest News URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 583
            echo "                                    ";
            ob_start();
            echo __("RSS/Atom Feed to be displayed on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 584
            echo "
                                    ";
            // line 585
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LATEST_NEWS_URL"], "method")) {
                // line 586
                echo "                                        ";
                echo $context["forms"]->getinput("LATEST_NEWS_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LATEST_NEWS_URL"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 588
                echo "                                        ";
                echo $context["forms"]->getdisabled("LATEST_NEWS_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LATEST_NEWS_URL"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 590
            echo "                                ";
        }
        // line 591
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">";
        // line 593
        echo __("Maintenance");
        echo "</h3>

                                ";
        // line 595
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ENABLED"], "method")) {
            // line 596
            echo "                                    ";
            ob_start();
            echo __("Enable Maintenance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 597
            echo "                                    ";
            ob_start();
            echo __("Allow the maintenance script to run if it is called?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 598
            echo "
                                    ";
            // line 599
            ob_start();
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 600
            echo "                                    ";
            ob_start();
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 601
            echo "                                    ";
            ob_start();
            echo __("Protected");
            $context["protectedOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 602
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 603
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 604
($context["onOption"] ?? null)], 2 => ["id" => "Protected", "value" =>             // line 605
($context["protectedOption"] ?? null)]];
            // line 607
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ENABLED"], "method")) {
                // line 608
                echo "                                        ";
                echo $context["forms"]->getdropdown("MAINTENANCE_ENABLED", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ENABLED", 1 => "Off"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 610
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAINTENANCE_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ENABLED", 1 => "Off"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 612
            echo "                                ";
        }
        // line 613
        echo "
                                ";
        // line 614
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_EMAIL_ALERTS"], "method")) {
            // line 615
            echo "                                    ";
            ob_start();
            echo __("Enable Email Alerts?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 616
            echo "                                    ";
            ob_start();
            echo __("Global switch for email alerts to be sent");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 617
            echo "
                                    ";
            // line 618
            echo $context["forms"]->getcheckbox("MAINTENANCE_EMAIL_ALERTS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_EMAIL_ALERTS", 1 => 1], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_EMAIL_ALERTS"], "method"));
            echo "
                                ";
        }
        // line 620
        echo "
                                ";
        // line 621
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_KEY"], "method")) {
            // line 622
            echo "                                    ";
            ob_start();
            echo __("Maintenance Key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 623
            echo "                                    ";
            ob_start();
            echo __("String appended to the maintenance script to prevent malicious calls to the script.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 624
            echo "
                                    ";
            // line 625
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_KEY"], "method")) {
                // line 626
                echo "                                        ";
                echo $context["forms"]->getinput("MAINTENANCE_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_KEY", 1 => "changeme"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 628
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAINTENANCE_KEY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_KEY", 1 => "changeme"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 630
            echo "                                ";
        }
        // line 631
        echo "
                                ";
        // line 632
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_LOG_MAXAGE"], "method")) {
            // line 633
            echo "                                    ";
            ob_start();
            echo __("Max Log Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 634
            echo "                                    ";
            ob_start();
            echo __("Maximum age for log entries in days. Set to 0 to keep logs indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 635
            echo "
                                    ";
            // line 636
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_LOG_MAXAGE"], "method")) {
                // line 637
                echo "                                        ";
                echo $context["forms"]->getnumber("MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_LOG_MAXAGE", 1 => 30], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 639
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_LOG_MAXAGE", 1 => 30], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 641
            echo "                                ";
        }
        // line 642
        echo "
                                ";
        // line 643
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_STAT_MAXAGE"], "method")) {
            // line 644
            echo "                                    ";
            ob_start();
            echo __("Max Statistics Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 645
            echo "                                    ";
            ob_start();
            echo __("Maximum age for statistics entries in days. Set to 0 to keep statistics indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 646
            echo "
                                    ";
            // line 647
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_STAT_MAXAGE"], "method")) {
                // line 648
                echo "                                        ";
                echo $context["forms"]->getnumber("MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_STAT_MAXAGE", 1 => 30], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 650
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_STAT_MAXAGE", 1 => 30], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 652
            echo "                                ";
        }
        // line 653
        echo "
                                ";
        // line 654
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ALERT_TOUT"], "method")) {
            // line 655
            echo "                                    ";
            ob_start();
            echo __("Max Display Timeout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 656
            echo "                                    ";
            ob_start();
            echo __("How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 657
            echo "
                                    ";
            // line 658
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ALERT_TOUT"], "method")) {
                // line 659
                echo "                                        ";
                echo $context["forms"]->getnumber("MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALERT_TOUT", 1 => 12], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 661
                echo "                                        ";
                echo $context["forms"]->getdisabled("MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALERT_TOUT", 1 => 12], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 663
            echo "                                ";
        }
        // line 664
        echo "
                                ";
        // line 665
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ALWAYS_ALERT"], "method")) {
            // line 666
            echo "                                    ";
            ob_start();
            echo __("Send repeat Display Timeouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 667
            echo "                                    ";
            ob_start();
            echo __("Should the CMS send an email if a display is in an error state every time maintenance runs?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 668
            echo "
                                    ";
            // line 669
            echo $context["forms"]->getcheckbox("MAINTENANCE_ALWAYS_ALERT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALWAYS_ALERT", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ALWAYS_ALERT"], "method"));
            echo "
                                ";
        }
        // line 671
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">";
        // line 674
        echo __("Network");
        echo "</h3>

                                ";
        // line 676
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "mail_to"], "method")) {
            // line 677
            echo "                                    ";
            ob_start();
            echo __("Admin email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 678
            echo "                                    ";
            ob_start();
            echo __("This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 679
            echo "
                                    ";
            // line 680
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "mail_to"], "method")) {
                // line 681
                echo "                                        ";
                echo $context["forms"]->getinput("mail_to", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_to"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 683
                echo "                                        ";
                echo $context["forms"]->getdisabled("mail_to", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_to"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 685
            echo "                                ";
        }
        // line 686
        echo "
                                ";
        // line 687
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "mail_from"], "method")) {
            // line 688
            echo "                                    ";
            ob_start();
            echo __("Sending email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 689
            echo "                                    ";
            ob_start();
            echo __("Mail will be sent from this address");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 690
            echo "
                                    ";
            // line 691
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "mail_from"], "method")) {
                // line 692
                echo "                                        ";
                echo $context["forms"]->getinput("mail_from", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_from"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 694
                echo "                                        ";
                echo $context["forms"]->getdisabled("mail_from", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_from"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 696
            echo "                                ";
        }
        // line 697
        echo "
                                ";
        // line 698
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "mail_from_name"], "method")) {
            // line 699
            echo "                                    ";
            ob_start();
            echo __("Sending email name");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 700
            echo "                                    ";
            ob_start();
            echo __("Mail will be sent under this name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 701
            echo "
                                    ";
            // line 702
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "mail_from_name"], "method")) {
                // line 703
                echo "                                        ";
                echo $context["forms"]->getinput("mail_from_name", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_from_name"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 705
                echo "                                        ";
                echo $context["forms"]->getdisabled("mail_from_name", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "mail_from_name"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 707
            echo "                                ";
        }
        // line 708
        echo "
                                ";
        // line 709
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SENDFILE_MODE"], "method")) {
            // line 710
            echo "                                    ";
            ob_start();
            echo __("File download mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 711
            echo "                                    ";
            ob_start();
            echo __("Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 712
            echo "
                                    ";
            // line 713
            ob_start();
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 714
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 715
($context["offOption"] ?? null)], 1 => ["id" => "Apache", "value" => "Apache"], 2 => ["id" => "Nginx", "value" => "Nginx"]];
            // line 719
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SENDFILE_MODE"], "method")) {
                // line 720
                echo "                                        ";
                echo $context["forms"]->getdropdown("SENDFILE_MODE", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SENDFILE_MODE", 1 => "Off"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 722
                echo "                                        ";
                echo $context["forms"]->getdisabled("SENDFILE_MODE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SENDFILE_MODE", 1 => "Off"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 724
            echo "                                ";
        }
        // line 725
        echo "
                                ";
        // line 726
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_HOST"], "method")) {
            // line 727
            echo "                                    ";
            ob_start();
            echo __("Proxy URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 728
            echo "                                    ";
            ob_start();
            echo __("The Proxy URL");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 729
            echo "
                                    ";
            // line 730
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_HOST"], "method")) {
                // line 731
                echo "                                        ";
                echo $context["forms"]->getinput("PROXY_HOST", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_HOST"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 733
                echo "                                        ";
                echo $context["forms"]->getdisabled("PROXY_HOST", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_HOST"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 735
            echo "                                ";
        }
        // line 736
        echo "
                                ";
        // line 737
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_PORT"], "method")) {
            // line 738
            echo "                                    ";
            ob_start();
            echo __("Proxy Port");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 739
            echo "                                    ";
            ob_start();
            echo __("The Proxy Port");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 740
            echo "
                                    ";
            // line 741
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_PORT"], "method")) {
                // line 742
                echo "                                        ";
                echo $context["forms"]->getnumber("PROXY_PORT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_PORT", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 744
                echo "                                        ";
                echo $context["forms"]->getdisabled("PROXY_PORT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_PORT", 1 => 0], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 746
            echo "                                ";
        }
        // line 747
        echo "
                                ";
        // line 748
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_AUTH"], "method")) {
            // line 749
            echo "                                    ";
            ob_start();
            echo __("Proxy Credentials");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 750
            echo "                                    ";
            ob_start();
            echo __("The Authentication information for this proxy. username:password");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 751
            echo "
                                    ";
            // line 752
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_AUTH"], "method")) {
                // line 753
                echo "                                        ";
                echo $context["forms"]->getinput("PROXY_AUTH", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_AUTH"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 755
                echo "                                        ";
                echo $context["forms"]->getdisabled("PROXY_AUTH", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_AUTH"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 757
            echo "                                ";
        }
        // line 758
        echo "
                                ";
        // line 759
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_EXCEPTIONS"], "method")) {
            // line 760
            echo "                                    ";
            ob_start();
            echo __("Proxy Exceptions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 761
            echo "                                    ";
            ob_start();
            echo __("Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 762
            echo "
                                    ";
            // line 763
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_EXCEPTIONS"], "method")) {
                // line 764
                echo "                                        ";
                echo $context["forms"]->getinput("PROXY_EXCEPTIONS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_EXCEPTIONS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 766
                echo "                                        ";
                echo $context["forms"]->getdisabled("PROXY_EXCEPTIONS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PROXY_EXCEPTIONS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 768
            echo "                                ";
        }
        // line 769
        echo "
                                ";
        // line 770
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "CDN_URL"], "method")) {
            // line 771
            echo "                                    ";
            ob_start();
            echo __("CDN Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 772
            echo "                                    ";
            ob_start();
            echo __("Content Delivery Network Address for serving file requests to Players");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 773
            echo "
                                    ";
            // line 774
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "CDN_URL"], "method")) {
                // line 775
                echo "                                        ";
                echo $context["forms"]->getinput("CDN_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "CDN_URL"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 777
                echo "                                        ";
                echo $context["forms"]->getdisabled("CDN_URL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "CDN_URL"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 779
            echo "                                ";
        }
        // line 780
        echo "
                                ";
        // line 781
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method")) {
            // line 782
            echo "                                    ";
            ob_start();
            echo __("Monthly bandwidth Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 783
            echo "                                    ";
            ob_start();
            echo __("XMDS Transfer Limit in KB/month");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 784
            echo "
                                    ";
            // line 785
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method")) {
                // line 786
                echo "                                        ";
                echo $context["forms"]->getnumber("MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 788
                echo "                                        ";
                echo $context["forms"]->getdisabled("MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 790
            echo "                                ";
        }
        // line 791
        echo "
                                ";
        // line 792
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method")) {
            // line 793
            echo "                                    ";
            ob_start();
            echo __("Library Size Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 794
            echo "                                    ";
            ob_start();
            echo __("The Limit for the Library Size in KB");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 795
            echo "
                                    ";
            // line 796
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method")) {
                // line 797
                echo "                                        ";
                echo $context["forms"]->getnumber("LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 799
                echo "                                        ";
                echo $context["forms"]->getdisabled("LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 801
            echo "                                ";
        }
        // line 802
        echo "
                                ";
        // line 803
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "FORCE_HTTPS"], "method")) {
            // line 804
            echo "                                    ";
            ob_start();
            echo __("Force HTTPS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 805
            echo "                                    ";
            ob_start();
            echo __("Force the portal into HTTPS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 806
            echo "
                                    ";
            // line 807
            echo $context["forms"]->getcheckbox("FORCE_HTTPS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "FORCE_HTTPS", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "FORCE_HTTPS"], "method"));
            echo "
                                ";
        }
        // line 809
        echo "
                                ";
        // line 810
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "ISSUE_STS"], "method")) {
            // line 811
            echo "                                    ";
            ob_start();
            echo __("Enable STS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 812
            echo "                                    ";
            ob_start();
            echo __("Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 813
            echo "
                                    ";
            // line 814
            echo $context["forms"]->getcheckbox("ISSUE_STS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "ISSUE_STS", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "ISSUE_STS"], "method"));
            echo "
                                ";
        }
        // line 816
        echo "
                                ";
        // line 817
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "STS_TTL"], "method")) {
            // line 818
            echo "                                    ";
            ob_start();
            echo __("STS Time out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 819
            echo "                                    ";
            ob_start();
            echo __("The Time to Live (maxage) of the STS header expressed in seconds.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 820
            echo "
                                    ";
            // line 821
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "STS_TTL"], "method")) {
                // line 822
                echo "                                        ";
                echo $context["forms"]->getnumber("STS_TTL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "STS_TTL", 1 => "600"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 824
                echo "                                        ";
                echo $context["forms"]->getdisabled("STS_TTL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "STS_TTL", 1 => "600"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 826
            echo "                                ";
        }
        // line 827
        echo "
                                ";
        // line 828
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "WHITELIST_LOAD_BALANCERS"], "method")) {
            // line 829
            echo "                                    ";
            ob_start();
            echo __("Whitelist Load Balancers");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 830
            echo "                                    ";
            ob_start();
            echo __("If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 831
            echo "
                                    ";
            // line 832
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "WHITELIST_LOAD_BALANCERS"], "method")) {
                // line 833
                echo "                                        ";
                echo $context["forms"]->getinput("WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WHITELIST_LOAD_BALANCERS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 835
                echo "                                        ";
                echo $context["forms"]->getdisabled("WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WHITELIST_LOAD_BALANCERS"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 837
            echo "                                ";
        }
        // line 838
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">";
        // line 840
        echo __("Permissions");
        echo "</h3>

                                ";
        // line 842
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "LAYOUT_DEFAULT"], "method")) {
            // line 843
            echo "                                    ";
            ob_start();
            echo __("Layout Permissions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 844
            echo "                                    ";
            ob_start();
            echo __("New layouts will be created with these settings. If public everyone will be able to view and use this layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 845
            echo "
                                    ";
            // line 846
            ob_start();
            echo __("Private");
            $context["privateOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 847
            echo "                                    ";
            ob_start();
            echo __("Group Read");
            $context["groupOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 848
            echo "                                    ";
            ob_start();
            echo __("Group Write");
            $context["groupWriteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 849
            echo "                                    ";
            ob_start();
            echo __("Group Delete");
            $context["groupDeleteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 850
            echo "                                    ";
            ob_start();
            echo __("Public Read");
            $context["publicOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 851
            echo "                                    ";
            ob_start();
            echo __("Public Write");
            $context["publicWriteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 852
            echo "                                    ";
            $context["options"] = [0 => ["id" => "private", "value" =>             // line 853
($context["privateOption"] ?? null)], 1 => ["id" => "group", "value" =>             // line 854
($context["groupOption"] ?? null)], 2 => ["id" => "group write", "value" =>             // line 855
($context["groupWriteOption"] ?? null)], 3 => ["id" => "group delete", "value" =>             // line 856
($context["groupDeleteOption"] ?? null)], 4 => ["id" => "public", "value" =>             // line 857
($context["publicOption"] ?? null)], 5 => ["id" => "public write", "value" =>             // line 858
($context["publicWriteOption"] ?? null)]];
            // line 860
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "LAYOUT_DEFAULT"], "method")) {
                // line 861
                echo "                                        ";
                echo $context["forms"]->getdropdown("LAYOUT_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_DEFAULT", 1 => "private"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 863
                echo "                                        ";
                echo $context["forms"]->getdisabled("LAYOUT_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_DEFAULT", 1 => "private"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 865
            echo "                                ";
        }
        // line 866
        echo "
                                ";
        // line 867
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MEDIA_DEFAULT"], "method")) {
            // line 868
            echo "                                    ";
            ob_start();
            echo __("Media Permissions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 869
            echo "                                    ";
            ob_start();
            echo __("Media will be created with these settings. If public everyone will be able to view and use this media.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 870
            echo "
                                    ";
            // line 871
            ob_start();
            echo __("Private");
            $context["privateOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 872
            echo "                                    ";
            ob_start();
            echo __("Group Read");
            $context["groupOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 873
            echo "                                    ";
            ob_start();
            echo __("Group Write");
            $context["groupWriteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 874
            echo "                                    ";
            ob_start();
            echo __("Group Delete");
            $context["groupDeleteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 875
            echo "                                    ";
            ob_start();
            echo __("Public Read");
            $context["publicOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 876
            echo "                                    ";
            ob_start();
            echo __("Public Write");
            $context["publicWriteOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 877
            echo "                                    ";
            $context["options"] = [0 => ["id" => "private", "value" =>             // line 878
($context["privateOption"] ?? null)], 1 => ["id" => "group", "value" =>             // line 879
($context["groupOption"] ?? null)], 2 => ["id" => "group write", "value" =>             // line 880
($context["groupWriteOption"] ?? null)], 3 => ["id" => "group delete", "value" =>             // line 881
($context["groupDeleteOption"] ?? null)], 4 => ["id" => "public", "value" =>             // line 882
($context["publicOption"] ?? null)], 5 => ["id" => "public write", "value" =>             // line 883
($context["publicWriteOption"] ?? null)]];
            // line 885
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MEDIA_DEFAULT"], "method")) {
                // line 886
                echo "                                        ";
                echo $context["forms"]->getdropdown("MEDIA_DEFAULT", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MEDIA_DEFAULT", 1 => "private"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 888
                echo "                                        ";
                echo $context["forms"]->getdisabled("MEDIA_DEFAULT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MEDIA_DEFAULT", 1 => "private"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 890
            echo "                                ";
        }
        // line 891
        echo "
                                ";
        // line 892
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "REGION_OPTIONS_COLOURING"], "method")) {
            // line 893
            echo "                                    ";
            ob_start();
            echo __("How to colour Media on the Region Timeline");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 894
            echo "
                                    ";
            // line 895
            ob_start();
            echo __("Media Colouring");
            $context["privateOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 896
            echo "                                    ";
            ob_start();
            echo __("Permissions Colouring");
            $context["groupOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 897
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Media Colouring", "value" =>             // line 898
($context["privateOption"] ?? null)], 1 => ["id" => "Permissions Colouring", "value" =>             // line 899
($context["groupOption"] ?? null)]];
            // line 901
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "REGION_OPTIONS_COLOURING"], "method")) {
                // line 902
                echo "                                        ";
                echo $context["forms"]->getdropdown("REGION_OPTIONS_COLOURING", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "REGION_OPTIONS_COLOURING", 1 => "Media Colouring"], "method"), ($context["options"] ?? null), "id", "value");
                echo "
                                    ";
            } else {
                // line 904
                echo "                                        ";
                echo $context["forms"]->getdisabled("REGION_OPTIONS_COLOURING", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "REGION_OPTIONS_COLOURING", 1 => "Media Colouring"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 906
            echo "                                ";
        }
        // line 907
        echo "
                                ";
        // line 908
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_WITH_VIEW_PERMISSION"], "method")) {
            // line 909
            echo "                                    ";
            ob_start();
            echo __("Schedule with view permissions?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 910
            echo "                                    ";
            ob_start();
            echo __("Should users with View permissions on displays be allowed to schedule to them?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 911
            echo "                                    ";
            echo $context["forms"]->getcheckbox("SCHEDULE_WITH_VIEW_PERMISSION", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_WITH_VIEW_PERMISSION", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_WITH_VIEW_PERMISSION"], "method"));
            echo "
                                ";
        }
        // line 913
        echo "
                                ";
        // line 914
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_SHOW_LAYOUT_NAME"], "method")) {
            // line 915
            echo "                                    ";
            ob_start();
            echo __("Show event Layout regardless of User permission?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 916
            echo "                                    ";
            ob_start();
            echo __("If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 917
            echo "                                    ";
            echo $context["forms"]->getcheckbox("SCHEDULE_SHOW_LAYOUT_NAME", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_SHOW_LAYOUT_NAME", 1 => 0], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_SHOW_LAYOUT_NAME"], "method"));
            echo "
                                ";
        }
        // line 919
        echo "
                                ";
        // line 920
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "INHERIT_PARENT_PERMISSIONS"], "method")) {
            // line 921
            echo "                                    ";
            ob_start();
            echo __("Inherit permissions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 922
            echo "                                    ";
            ob_start();
            echo __("Inherit permissions from Parent when adding a new item?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 923
            echo "                                    ";
            echo $context["forms"]->getcheckbox("INHERIT_PARENT_PERMISSIONS", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "INHERIT_PARENT_PERMISSIONS", 1 => 1], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "INHERIT_PARENT_PERMISSIONS"], "method"));
            echo "
                                ";
        }
        // line 925
        echo "
                                ";
        // line 926
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method")) {
            // line 927
            echo "                                    ";
            ob_start();
            echo __("Lock Module Config");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 928
            echo "                                    ";
            ob_start();
            echo __("Is the module config locked? Useful for Service providers.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 929
            echo "                                    ";
            echo $context["forms"]->getcheckbox("MODULE_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 931
        echo "
                                ";
        // line 932
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method")) {
            // line 933
            echo "                                    ";
            ob_start();
            echo __("Lock Task Config");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 934
            echo "                                    ";
            ob_start();
            echo __("Is the task config locked? Useful for Service providers.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 935
            echo "                                    ";
            echo $context["forms"]->getcheckbox("TASK_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 937
        echo "
                                ";
        // line 938
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method")) {
            // line 939
            echo "                                    ";
            ob_start();
            echo __("Is the Transition config locked?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 940
            echo "                                    ";
            ob_start();
            echo __("Allow modifications to the transition configuration?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 941
            echo "                                    ";
            echo $context["forms"]->getcheckbox("TRANSITION_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method"));
            echo "
                                ";
        }
        // line 943
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">";
        // line 945
        echo __("Regional");
        echo "</h3>

                                ";
        // line 947
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LANGUAGE"], "method")) {
            // line 948
            echo "                                    ";
            ob_start();
            echo __("Default Language");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 949
            echo "                                    ";
            ob_start();
            echo __("The default language to use");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 950
            echo "
                                    ";
            // line 951
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LANGUAGE"], "method")) {
                // line 952
                echo "                                        ";
                echo $context["forms"]->getdropdown("DEFAULT_LANGUAGE", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LANGUAGE", 1 => "en_GB"], "method"), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 954
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_LANGUAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LANGUAGE", 1 => "en_GB"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 956
            echo "                                ";
        }
        // line 957
        echo "
                                ";
        // line 958
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "defaultTimezone"], "method")) {
            // line 959
            echo "                                    ";
            ob_start();
            echo __("Timezone");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 960
            echo "                                    ";
            ob_start();
            echo __("Set the default timezone for the application");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 961
            echo "
                                    ";
            // line 962
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "defaultTimezone"], "method")) {
                // line 963
                echo "                                        ";
                echo $context["forms"]->getdropdown("defaultTimezone", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "defaultTimezone", 1 => "Europe/London"], "method"), ($context["timeZones"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 965
                echo "                                        ";
                echo $context["forms"]->getdisabled("defaultTimezone", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "defaultTimezone", 1 => "Europe/London"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 967
            echo "                                ";
        }
        // line 968
        echo "
                                ";
        // line 969
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DATE_FORMAT"], "method")) {
            // line 970
            echo "                                    ";
            ob_start();
            echo __("Date Format");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 971
            echo "                                    ";
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute(($context["helpService"] ?? null), "address", [0 => "advanced_dateFormat.html"], "method"), "html", null, true);
            $context["manualUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 972
            echo "                                    ";
            ob_start();
            /* xgettext:no-php-format */            echo strtr(__("The Date Format to use when displaying dates in the CMS. See the <a href=\"%manualUrl%\">Manual</a> for allowed formats."), array("%manualUrl%" => ($context["manualUrl"] ?? null), ));
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 973
            echo "
                                    ";
            // line 974
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DATE_FORMAT"], "method")) {
                // line 975
                echo "                                        ";
                echo $context["forms"]->getinput("DATE_FORMAT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DATE_FORMAT", 1 => "Y-m-d"], "method"), ($context["helpText"] ?? null), "required");
                echo "
                                    ";
            } else {
                // line 977
                echo "                                        ";
                echo $context["forms"]->getdisabled("DATE_FORMAT", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DATE_FORMAT", 1 => "Y-m-d"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 979
            echo "                                ";
        }
        // line 980
        echo "
                                ";
        // line 981
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DETECT_LANGUAGE"], "method")) {
            // line 982
            echo "                                    ";
            ob_start();
            echo __("Detect language?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 983
            echo "                                    ";
            ob_start();
            echo __("Detect the browser language?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 984
            echo "                                    ";
            echo $context["forms"]->getcheckbox("DETECT_LANGUAGE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DETECT_LANGUAGE"], "method"), ($context["helpText"] ?? null), "", "",  !$this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DETECT_LANGUAGE"], "method"));
            echo "
                                ";
        }
        // line 986
        echo "
                                ";
        // line 987
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "CALENDAR_TYPE"], "method")) {
            // line 988
            echo "                                    ";
            ob_start();
            echo __("Calendar Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 989
            echo "                                    ";
            ob_start();
            echo __("Which Calendar Type should the CMS use?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 990
            echo "
                                    ";
            // line 991
            ob_start();
            echo __("Gregorian");
            $context["gregorianOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 992
            echo "                                    ";
            ob_start();
            echo __("Jalali");
            $context["jalaliOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 993
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Gregorian", "value" =>             // line 994
($context["gregorianOption"] ?? null)], 1 => ["id" => "Jalali", "value" =>             // line 995
($context["jalaliOption"] ?? null)]];
            // line 997
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "CALENDAR_TYPE"], "method")) {
                // line 998
                echo "                                        ";
                echo $context["forms"]->getdropdown("CALENDAR_TYPE", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "CALENDAR_TYPE", 1 => "Gregorian"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1000
                echo "                                        ";
                echo $context["forms"]->getdisabled("CALENDAR_TYPE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "CALENDAR_TYPE", 1 => "Gregorian"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1002
            echo "                                ";
        }
        // line 1003
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">";
        // line 1005
        echo __("Troubleshooting");
        echo "</h3>

                                ";
        // line 1007
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "RESTING_LOG_LEVEL"], "method")) {
            // line 1008
            echo "                                    ";
            ob_start();
            echo __("Resting Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1009
            echo "                                    ";
            ob_start();
            echo __("Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1010
            echo "
                                    ";
            // line 1011
            ob_start();
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1012
            echo "                                    ";
            ob_start();
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1013
            echo "                                    ";
            ob_start();
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1014
            echo "                                    ";
            ob_start();
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1015
            echo "                                    ";
            $context["options"] = [0 => ["id" => "emergency", "value" =>             // line 1016
($context["emergencyOption"] ?? null)], 1 => ["id" => "alert", "value" =>             // line 1017
($context["alertOption"] ?? null)], 2 => ["id" => "critical", "value" =>             // line 1018
($context["criticalOption"] ?? null)], 3 => ["id" => "error", "value" =>             // line 1019
($context["errorOption"] ?? null)]];
            // line 1021
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "RESTING_LOG_LEVEL"], "method")) {
                // line 1022
                echo "                                        ";
                echo $context["forms"]->getdropdown("RESTING_LOG_LEVEL", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "RESTING_LOG_LEVEL", 1 => "error"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1024
                echo "                                        ";
                echo $context["forms"]->getdisabled("RESTING_LOG_LEVEL", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "RESTING_LOG_LEVEL", 1 => "error"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1026
            echo "                                ";
        }
        // line 1027
        echo "
                                ";
        // line 1028
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "audit"], "method")) {
            // line 1029
            echo "                                    ";
            ob_start();
            echo __("Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1030
            echo "                                    ";
            ob_start();
            echo __("Set the level of logging the CMS should record. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1031
            echo "
                                    ";
            // line 1032
            ob_start();
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1033
            echo "                                    ";
            ob_start();
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1034
            echo "                                    ";
            ob_start();
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1035
            echo "                                    ";
            ob_start();
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1036
            echo "                                    ";
            ob_start();
            echo __("Warning");
            $context["warningOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1037
            echo "                                    ";
            ob_start();
            echo __("Notice");
            $context["noticeOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1038
            echo "                                    ";
            ob_start();
            echo __("Information");
            $context["infoOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1039
            echo "                                    ";
            ob_start();
            echo __("Debug");
            $context["debugOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1040
            echo "                                    ";
            $context["options"] = [0 => ["id" => "emergency", "value" =>             // line 1041
($context["emergencyOption"] ?? null)], 1 => ["id" => "alert", "value" =>             // line 1042
($context["alertOption"] ?? null)], 2 => ["id" => "critical", "value" =>             // line 1043
($context["criticalOption"] ?? null)], 3 => ["id" => "error", "value" =>             // line 1044
($context["errorOption"] ?? null)], 4 => ["id" => "warning", "value" =>             // line 1045
($context["warningOption"] ?? null)], 5 => ["id" => "notice", "value" =>             // line 1046
($context["noticeOption"] ?? null)], 6 => ["id" => "info", "value" =>             // line 1047
($context["infoOption"] ?? null)], 7 => ["id" => "debug", "value" =>             // line 1048
($context["debugOption"] ?? null)]];
            // line 1050
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "audit"], "method")) {
                // line 1051
                echo "                                        ";
                echo $context["forms"]->getdropdown("audit", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "audit", 1 => "error"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1053
                echo "                                        ";
                echo $context["forms"]->getdisabled("audit", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "audit", 1 => "error"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1055
            echo "                                ";
        }
        // line 1056
        echo "
                                ";
        // line 1057
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "ELEVATE_LOG_UNTIL"], "method")) {
            // line 1058
            echo "                                    ";
            ob_start();
            echo __("Elevate Log Until");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1059
            echo "                                    ";
            ob_start();
            echo __("Elevate the log level until this date.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1060
            echo "
                                    ";
            // line 1061
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "ELEVATE_LOG_UNTIL"], "method")) {
                // line 1062
                echo "                                        ";
                echo $context["forms"]->getdatetime("ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1064
                echo "                                        ";
                echo $context["forms"]->getdisabled("ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1066
            echo "                                ";
        }
        // line 1067
        echo "
                                ";
        // line 1068
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "SERVER_MODE"], "method")) {
            // line 1069
            echo "                                    ";
            ob_start();
            echo __("Server Mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1070
            echo "                                    ";
            ob_start();
            echo __("This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1071
            echo "
                                    ";
            // line 1072
            ob_start();
            echo __("Production");
            $context["productionOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1073
            echo "                                    ";
            ob_start();
            echo __("Test");
            $context["testOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1074
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Production", "value" =>             // line 1075
($context["productionOption"] ?? null)], 1 => ["id" => "Test", "value" =>             // line 1076
($context["testOption"] ?? null)]];
            // line 1078
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "SERVER_MODE"], "method")) {
                // line 1079
                echo "                                        ";
                echo $context["forms"]->getdropdown("SERVER_MODE", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SERVER_MODE", 1 => "Production"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1081
                echo "                                        ";
                echo $context["forms"]->getdisabled("SERVER_MODE", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "SERVER_MODE", 1 => "Production"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1083
            echo "                                ";
        }
        // line 1084
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">";
        // line 1086
        echo __("Users");
        echo "</h3>

                                ";
        // line 1088
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_USERGROUP"], "method")) {
            // line 1089
            echo "                                    ";
            ob_start();
            echo __("Default User Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1090
            echo "                                    ";
            ob_start();
            echo __("The default User Group for new Users");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1091
            echo "
                                    ";
            // line 1092
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_USERGROUP"], "method")) {
                // line 1093
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.search")], 2 => ["name" => "data-search-term", "value" => "group"], 3 => ["name" => "data-id-property", "value" => "groupId"], 4 => ["name" => "data-text-property", "value" => "group"]];
                // line 1100
                echo "                                        ";
                echo $context["forms"]->getdropdown("DEFAULT_USERGROUP", "single", ($context["title"] ?? null), $this->getAttribute(($context["defaultUserGroup"] ?? null), "groupId", []), [0 => ($context["defaultUserGroup"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                echo "
                                    ";
            } else {
                // line 1102
                echo "                                        ";
                echo $context["forms"]->getdisabled("DEFAULT_USERGROUP", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_USERGROUP"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1104
            echo "                                ";
        }
        // line 1105
        echo "
                                ";
        // line 1106
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "defaultUsertype"], "method")) {
            // line 1107
            echo "                                    ";
            ob_start();
            echo __("Default User Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1108
            echo "                                    ";
            ob_start();
            echo __("Sets the default user type selected when creating a user. We recommend that this is set to User");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1109
            echo "
                                    ";
            // line 1110
            ob_start();
            echo __("User");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1111
            echo "                                    ";
            ob_start();
            echo __("Group Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1112
            echo "                                    ";
            ob_start();
            echo __("Super Admin");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1113
            echo "                                    ";
            $context["options"] = [0 => ["id" => "User", "value" =>             // line 1114
($context["option1"] ?? null)], 1 => ["id" => "Group Admin", "value" =>             // line 1115
($context["option2"] ?? null)], 2 => ["id" => "Super Admin", "value" =>             // line 1116
($context["option3"] ?? null)]];
            // line 1118
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "defaultUsertype"], "method")) {
                // line 1119
                echo "                                        ";
                echo $context["forms"]->getdropdown("defaultUsertype", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "defaultUsertype", 1 => "User"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1121
                echo "                                        ";
                echo $context["forms"]->getdisabled("defaultUsertype", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "defaultUsertype", 1 => "User"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1123
            echo "                                ";
        }
        // line 1124
        echo "
                                ";
        // line 1125
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "USER_PASSWORD_POLICY"], "method")) {
            // line 1126
            echo "                                    ";
            ob_start();
            echo __("Password Policy Regular Expression");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1127
            echo "                                    ";
            ob_start();
            echo __("Regular Expression for password complexity, leave blank for no policy.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1128
            echo "
                                    ";
            // line 1129
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "USER_PASSWORD_POLICY"], "method")) {
                // line 1130
                echo "                                        ";
                echo $context["forms"]->getinput("USER_PASSWORD_POLICY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_POLICY"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1132
                echo "                                        ";
                echo $context["forms"]->getdisabled("USER_PASSWORD_POLICY", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_POLICY"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1134
            echo "                                ";
        }
        // line 1135
        echo "
                                ";
        // line 1136
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "USER_PASSWORD_ERROR"], "method")) {
            // line 1137
            echo "                                    ";
            ob_start();
            echo __("Description of Password Policy");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1138
            echo "                                    ";
            ob_start();
            echo __("A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1139
            echo "
                                    ";
            // line 1140
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "USER_PASSWORD_ERROR"], "method")) {
                // line 1141
                echo "                                        ";
                echo $context["forms"]->getinput("USER_PASSWORD_ERROR", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_ERROR"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1143
                echo "                                        ";
                echo $context["forms"]->getdisabled("USER_PASSWORD_ERROR", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_ERROR"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1145
            echo "                                ";
        }
        // line 1146
        echo "
                                ";
        // line 1147
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "PASSWORD_REMINDER_ENABLED"], "method")) {
            // line 1148
            echo "                                    ";
            ob_start();
            echo __("Password Reminder");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1149
            echo "                                    ";
            ob_start();
            echo __("Enable password reminder on CMS login page? Valid sending email address is required");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1150
            echo "
                                    ";
            // line 1151
            ob_start();
            echo __("Off");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1152
            echo "                                    ";
            ob_start();
            echo __("On except Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1153
            echo "                                    ";
            ob_start();
            echo __("On");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1154
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 1155
($context["option1"] ?? null)], 1 => ["id" => "On except Admin", "value" =>             // line 1156
($context["option2"] ?? null)], 2 => ["id" => "On", "value" =>             // line 1157
($context["option3"] ?? null)]];
            // line 1159
            echo "                                    ";
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "PASSWORD_REMINDER_ENABLED"], "method")) {
                // line 1160
                echo "                                        ";
                echo $context["forms"]->getdropdown("PASSWORD_REMINDER_ENABLED", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PASSWORD_REMINDER_ENABLED", 1 => "Off"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1162
                echo "                                        ";
                echo $context["forms"]->getdisabled("PASSWORD_REMINDER_ENABLED", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PASSWORD_REMINDER_ENABLED", 1 => "Off"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1164
            echo "                                ";
        }
        // line 1165
        echo "
                                ";
        // line 1166
        if ($this->getAttribute(($context["theme"] ?? null), "isSettingVisible", [0 => "TWOFACTOR_ISSUER"], "method")) {
            // line 1167
            echo "                                    ";
            ob_start();
            echo __("Two Factor Issuer");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1168
            echo "                                    ";
            ob_start();
            echo __("Name that should appear as Issuer when two factor authorisation is enabled");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1169
            echo "
                                    ";
            // line 1170
            if ($this->getAttribute(($context["theme"] ?? null), "isSettingEditable", [0 => "TWOFACTOR_ISSUER"], "method")) {
                // line 1171
                echo "                                        ";
                echo $context["forms"]->getinput("TWOFACTOR_ISSUER", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "TWOFACTOR_ISSUER"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            } else {
                // line 1173
                echo "                                        ";
                echo $context["forms"]->getdisabled("TWOFACTOR_ISSUER", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "TWOFACTOR_ISSUER"], "method"), ($context["helpText"] ?? null));
                echo "
                                    ";
            }
            // line 1175
            echo "                                ";
        }
        // line 1176
        echo "                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 1178
        echo __("Save");
        echo "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "settings-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3518 => 1178,  3514 => 1176,  3511 => 1175,  3505 => 1173,  3499 => 1171,  3497 => 1170,  3494 => 1169,  3489 => 1168,  3484 => 1167,  3482 => 1166,  3479 => 1165,  3476 => 1164,  3470 => 1162,  3464 => 1160,  3461 => 1159,  3459 => 1157,  3458 => 1156,  3457 => 1155,  3455 => 1154,  3450 => 1153,  3445 => 1152,  3441 => 1151,  3438 => 1150,  3433 => 1149,  3428 => 1148,  3426 => 1147,  3423 => 1146,  3420 => 1145,  3414 => 1143,  3408 => 1141,  3406 => 1140,  3403 => 1139,  3398 => 1138,  3393 => 1137,  3391 => 1136,  3388 => 1135,  3385 => 1134,  3379 => 1132,  3373 => 1130,  3371 => 1129,  3368 => 1128,  3363 => 1127,  3358 => 1126,  3356 => 1125,  3353 => 1124,  3350 => 1123,  3344 => 1121,  3338 => 1119,  3335 => 1118,  3333 => 1116,  3332 => 1115,  3331 => 1114,  3329 => 1113,  3324 => 1112,  3319 => 1111,  3315 => 1110,  3312 => 1109,  3307 => 1108,  3302 => 1107,  3300 => 1106,  3297 => 1105,  3294 => 1104,  3288 => 1102,  3282 => 1100,  3279 => 1093,  3277 => 1092,  3274 => 1091,  3269 => 1090,  3264 => 1089,  3262 => 1088,  3257 => 1086,  3253 => 1084,  3250 => 1083,  3244 => 1081,  3238 => 1079,  3235 => 1078,  3233 => 1076,  3232 => 1075,  3230 => 1074,  3225 => 1073,  3221 => 1072,  3218 => 1071,  3213 => 1070,  3208 => 1069,  3206 => 1068,  3203 => 1067,  3200 => 1066,  3194 => 1064,  3188 => 1062,  3186 => 1061,  3183 => 1060,  3178 => 1059,  3173 => 1058,  3171 => 1057,  3168 => 1056,  3165 => 1055,  3159 => 1053,  3153 => 1051,  3150 => 1050,  3148 => 1048,  3147 => 1047,  3146 => 1046,  3145 => 1045,  3144 => 1044,  3143 => 1043,  3142 => 1042,  3141 => 1041,  3139 => 1040,  3134 => 1039,  3129 => 1038,  3124 => 1037,  3119 => 1036,  3114 => 1035,  3109 => 1034,  3104 => 1033,  3100 => 1032,  3097 => 1031,  3092 => 1030,  3087 => 1029,  3085 => 1028,  3082 => 1027,  3079 => 1026,  3073 => 1024,  3067 => 1022,  3064 => 1021,  3062 => 1019,  3061 => 1018,  3060 => 1017,  3059 => 1016,  3057 => 1015,  3052 => 1014,  3047 => 1013,  3042 => 1012,  3038 => 1011,  3035 => 1010,  3030 => 1009,  3025 => 1008,  3023 => 1007,  3018 => 1005,  3014 => 1003,  3011 => 1002,  3005 => 1000,  2999 => 998,  2996 => 997,  2994 => 995,  2993 => 994,  2991 => 993,  2986 => 992,  2982 => 991,  2979 => 990,  2974 => 989,  2969 => 988,  2967 => 987,  2964 => 986,  2958 => 984,  2953 => 983,  2948 => 982,  2946 => 981,  2943 => 980,  2940 => 979,  2934 => 977,  2928 => 975,  2926 => 974,  2923 => 973,  2918 => 972,  2913 => 971,  2908 => 970,  2906 => 969,  2903 => 968,  2900 => 967,  2894 => 965,  2888 => 963,  2886 => 962,  2883 => 961,  2878 => 960,  2873 => 959,  2871 => 958,  2868 => 957,  2865 => 956,  2859 => 954,  2853 => 952,  2851 => 951,  2848 => 950,  2843 => 949,  2838 => 948,  2836 => 947,  2831 => 945,  2827 => 943,  2821 => 941,  2816 => 940,  2811 => 939,  2809 => 938,  2806 => 937,  2800 => 935,  2795 => 934,  2790 => 933,  2788 => 932,  2785 => 931,  2779 => 929,  2774 => 928,  2769 => 927,  2767 => 926,  2764 => 925,  2758 => 923,  2753 => 922,  2748 => 921,  2746 => 920,  2743 => 919,  2737 => 917,  2732 => 916,  2727 => 915,  2725 => 914,  2722 => 913,  2716 => 911,  2711 => 910,  2706 => 909,  2704 => 908,  2701 => 907,  2698 => 906,  2692 => 904,  2686 => 902,  2683 => 901,  2681 => 899,  2680 => 898,  2678 => 897,  2673 => 896,  2669 => 895,  2666 => 894,  2661 => 893,  2659 => 892,  2656 => 891,  2653 => 890,  2647 => 888,  2641 => 886,  2638 => 885,  2636 => 883,  2635 => 882,  2634 => 881,  2633 => 880,  2632 => 879,  2631 => 878,  2629 => 877,  2624 => 876,  2619 => 875,  2614 => 874,  2609 => 873,  2604 => 872,  2600 => 871,  2597 => 870,  2592 => 869,  2587 => 868,  2585 => 867,  2582 => 866,  2579 => 865,  2573 => 863,  2567 => 861,  2564 => 860,  2562 => 858,  2561 => 857,  2560 => 856,  2559 => 855,  2558 => 854,  2557 => 853,  2555 => 852,  2550 => 851,  2545 => 850,  2540 => 849,  2535 => 848,  2530 => 847,  2526 => 846,  2523 => 845,  2518 => 844,  2513 => 843,  2511 => 842,  2506 => 840,  2502 => 838,  2499 => 837,  2493 => 835,  2487 => 833,  2485 => 832,  2482 => 831,  2477 => 830,  2472 => 829,  2470 => 828,  2467 => 827,  2464 => 826,  2458 => 824,  2452 => 822,  2450 => 821,  2447 => 820,  2442 => 819,  2437 => 818,  2435 => 817,  2432 => 816,  2427 => 814,  2424 => 813,  2419 => 812,  2414 => 811,  2412 => 810,  2409 => 809,  2404 => 807,  2401 => 806,  2396 => 805,  2391 => 804,  2389 => 803,  2386 => 802,  2383 => 801,  2377 => 799,  2371 => 797,  2369 => 796,  2366 => 795,  2361 => 794,  2356 => 793,  2354 => 792,  2351 => 791,  2348 => 790,  2342 => 788,  2336 => 786,  2334 => 785,  2331 => 784,  2326 => 783,  2321 => 782,  2319 => 781,  2316 => 780,  2313 => 779,  2307 => 777,  2301 => 775,  2299 => 774,  2296 => 773,  2291 => 772,  2286 => 771,  2284 => 770,  2281 => 769,  2278 => 768,  2272 => 766,  2266 => 764,  2264 => 763,  2261 => 762,  2256 => 761,  2251 => 760,  2249 => 759,  2246 => 758,  2243 => 757,  2237 => 755,  2231 => 753,  2229 => 752,  2226 => 751,  2221 => 750,  2216 => 749,  2214 => 748,  2211 => 747,  2208 => 746,  2202 => 744,  2196 => 742,  2194 => 741,  2191 => 740,  2186 => 739,  2181 => 738,  2179 => 737,  2176 => 736,  2173 => 735,  2167 => 733,  2161 => 731,  2159 => 730,  2156 => 729,  2151 => 728,  2146 => 727,  2144 => 726,  2141 => 725,  2138 => 724,  2132 => 722,  2126 => 720,  2123 => 719,  2121 => 715,  2119 => 714,  2115 => 713,  2112 => 712,  2107 => 711,  2102 => 710,  2100 => 709,  2097 => 708,  2094 => 707,  2088 => 705,  2082 => 703,  2080 => 702,  2077 => 701,  2072 => 700,  2067 => 699,  2065 => 698,  2062 => 697,  2059 => 696,  2053 => 694,  2047 => 692,  2045 => 691,  2042 => 690,  2037 => 689,  2032 => 688,  2030 => 687,  2027 => 686,  2024 => 685,  2018 => 683,  2012 => 681,  2010 => 680,  2007 => 679,  2002 => 678,  1997 => 677,  1995 => 676,  1990 => 674,  1985 => 671,  1980 => 669,  1977 => 668,  1972 => 667,  1967 => 666,  1965 => 665,  1962 => 664,  1959 => 663,  1953 => 661,  1947 => 659,  1945 => 658,  1942 => 657,  1937 => 656,  1932 => 655,  1930 => 654,  1927 => 653,  1924 => 652,  1918 => 650,  1912 => 648,  1910 => 647,  1907 => 646,  1902 => 645,  1897 => 644,  1895 => 643,  1892 => 642,  1889 => 641,  1883 => 639,  1877 => 637,  1875 => 636,  1872 => 635,  1867 => 634,  1862 => 633,  1860 => 632,  1857 => 631,  1854 => 630,  1848 => 628,  1842 => 626,  1840 => 625,  1837 => 624,  1832 => 623,  1827 => 622,  1825 => 621,  1822 => 620,  1817 => 618,  1814 => 617,  1809 => 616,  1804 => 615,  1802 => 614,  1799 => 613,  1796 => 612,  1790 => 610,  1784 => 608,  1781 => 607,  1779 => 605,  1778 => 604,  1777 => 603,  1775 => 602,  1770 => 601,  1765 => 600,  1761 => 599,  1758 => 598,  1753 => 597,  1748 => 596,  1746 => 595,  1741 => 593,  1737 => 591,  1734 => 590,  1728 => 588,  1722 => 586,  1720 => 585,  1717 => 584,  1712 => 583,  1707 => 582,  1705 => 581,  1702 => 580,  1697 => 578,  1694 => 577,  1689 => 576,  1684 => 575,  1682 => 574,  1679 => 573,  1674 => 571,  1671 => 570,  1666 => 569,  1661 => 568,  1659 => 567,  1656 => 566,  1651 => 564,  1648 => 563,  1643 => 562,  1638 => 561,  1636 => 560,  1633 => 559,  1630 => 558,  1624 => 556,  1618 => 554,  1616 => 553,  1613 => 552,  1608 => 551,  1603 => 550,  1601 => 549,  1598 => 548,  1593 => 546,  1590 => 545,  1585 => 544,  1583 => 543,  1580 => 542,  1575 => 540,  1572 => 539,  1567 => 538,  1565 => 537,  1562 => 536,  1559 => 535,  1553 => 533,  1547 => 531,  1545 => 530,  1542 => 529,  1537 => 528,  1532 => 527,  1530 => 526,  1527 => 525,  1522 => 523,  1519 => 522,  1514 => 521,  1509 => 520,  1507 => 519,  1504 => 518,  1499 => 516,  1496 => 515,  1491 => 514,  1486 => 513,  1484 => 512,  1481 => 511,  1478 => 510,  1472 => 508,  1466 => 506,  1464 => 505,  1461 => 504,  1456 => 503,  1451 => 502,  1449 => 501,  1446 => 500,  1443 => 499,  1437 => 497,  1431 => 495,  1429 => 494,  1426 => 493,  1421 => 492,  1416 => 491,  1414 => 490,  1411 => 489,  1408 => 488,  1402 => 486,  1396 => 484,  1394 => 483,  1391 => 482,  1386 => 481,  1381 => 480,  1379 => 479,  1376 => 478,  1371 => 476,  1368 => 475,  1363 => 474,  1358 => 473,  1356 => 472,  1353 => 471,  1350 => 470,  1344 => 468,  1338 => 466,  1336 => 465,  1333 => 464,  1328 => 463,  1323 => 462,  1321 => 461,  1318 => 460,  1315 => 459,  1309 => 457,  1303 => 455,  1301 => 454,  1298 => 453,  1293 => 452,  1288 => 451,  1286 => 450,  1281 => 448,  1277 => 446,  1271 => 444,  1266 => 443,  1261 => 442,  1259 => 441,  1256 => 440,  1253 => 439,  1247 => 437,  1241 => 435,  1239 => 434,  1236 => 433,  1231 => 432,  1226 => 431,  1224 => 430,  1221 => 429,  1215 => 427,  1210 => 426,  1208 => 425,  1205 => 424,  1199 => 422,  1194 => 421,  1192 => 420,  1189 => 419,  1183 => 417,  1178 => 416,  1176 => 415,  1173 => 414,  1170 => 413,  1164 => 411,  1158 => 409,  1155 => 408,  1153 => 406,  1152 => 405,  1151 => 404,  1149 => 403,  1144 => 402,  1139 => 401,  1135 => 400,  1132 => 399,  1127 => 398,  1122 => 397,  1120 => 396,  1117 => 395,  1114 => 394,  1108 => 392,  1102 => 390,  1099 => 389,  1097 => 387,  1096 => 386,  1095 => 385,  1093 => 384,  1088 => 383,  1083 => 382,  1079 => 381,  1076 => 380,  1071 => 379,  1066 => 378,  1064 => 377,  1061 => 376,  1058 => 375,  1052 => 373,  1046 => 371,  1043 => 370,  1041 => 368,  1040 => 367,  1039 => 366,  1037 => 365,  1032 => 364,  1027 => 363,  1023 => 362,  1020 => 361,  1015 => 360,  1010 => 359,  1008 => 358,  1005 => 357,  999 => 355,  994 => 354,  989 => 353,  987 => 352,  984 => 351,  978 => 349,  973 => 348,  968 => 347,  966 => 346,  963 => 345,  960 => 344,  954 => 342,  948 => 340,  945 => 339,  943 => 337,  942 => 336,  941 => 335,  939 => 334,  934 => 333,  929 => 332,  925 => 331,  922 => 330,  917 => 329,  912 => 328,  910 => 327,  907 => 326,  904 => 325,  898 => 323,  892 => 321,  890 => 320,  887 => 319,  882 => 318,  877 => 317,  875 => 316,  872 => 315,  869 => 314,  863 => 312,  857 => 310,  855 => 309,  852 => 308,  847 => 307,  842 => 306,  840 => 305,  837 => 304,  834 => 303,  828 => 301,  822 => 299,  820 => 298,  817 => 297,  812 => 296,  807 => 295,  805 => 294,  802 => 293,  799 => 292,  793 => 290,  787 => 288,  785 => 287,  782 => 286,  777 => 285,  772 => 284,  770 => 283,  767 => 282,  764 => 281,  758 => 279,  752 => 277,  750 => 276,  747 => 275,  742 => 274,  737 => 273,  735 => 272,  732 => 271,  729 => 270,  723 => 268,  717 => 266,  715 => 265,  712 => 264,  707 => 263,  702 => 262,  700 => 261,  697 => 260,  694 => 259,  688 => 257,  682 => 255,  680 => 254,  677 => 253,  672 => 252,  667 => 251,  665 => 250,  662 => 249,  659 => 248,  653 => 246,  647 => 244,  644 => 235,  642 => 234,  639 => 233,  634 => 232,  629 => 231,  627 => 230,  622 => 228,  618 => 226,  615 => 225,  609 => 223,  603 => 221,  601 => 220,  598 => 219,  593 => 218,  588 => 217,  586 => 216,  583 => 215,  580 => 214,  574 => 212,  568 => 210,  566 => 209,  563 => 208,  558 => 207,  553 => 206,  551 => 205,  548 => 204,  543 => 202,  540 => 201,  535 => 200,  533 => 199,  530 => 198,  527 => 197,  521 => 195,  515 => 193,  513 => 192,  510 => 191,  505 => 190,  500 => 189,  498 => 188,  495 => 187,  492 => 186,  486 => 184,  480 => 182,  477 => 174,  475 => 173,  472 => 172,  467 => 171,  462 => 170,  460 => 169,  457 => 168,  454 => 167,  448 => 165,  442 => 163,  439 => 155,  437 => 154,  434 => 153,  429 => 152,  424 => 151,  422 => 150,  419 => 149,  414 => 147,  411 => 146,  406 => 145,  401 => 144,  399 => 143,  396 => 142,  391 => 140,  388 => 139,  383 => 138,  378 => 137,  376 => 136,  373 => 135,  368 => 133,  365 => 132,  360 => 131,  355 => 130,  353 => 129,  350 => 128,  345 => 126,  342 => 125,  337 => 124,  332 => 123,  330 => 122,  327 => 121,  322 => 119,  319 => 118,  314 => 117,  309 => 116,  307 => 115,  302 => 113,  298 => 111,  295 => 110,  289 => 108,  283 => 106,  280 => 105,  278 => 103,  277 => 102,  275 => 101,  270 => 100,  266 => 99,  263 => 98,  258 => 97,  253 => 96,  251 => 95,  248 => 94,  245 => 93,  239 => 91,  236 => 90,  230 => 88,  224 => 86,  222 => 85,  219 => 84,  217 => 83,  214 => 82,  209 => 81,  204 => 80,  202 => 79,  199 => 78,  196 => 77,  190 => 75,  184 => 73,  182 => 72,  179 => 71,  174 => 70,  169 => 69,  167 => 68,  164 => 67,  161 => 66,  155 => 64,  149 => 62,  147 => 61,  144 => 60,  139 => 59,  134 => 58,  132 => 57,  127 => 55,  121 => 52,  116 => 50,  112 => 49,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  84 => 42,  80 => 41,  72 => 36,  69 => 35,  66 => 34,  61 => 31,  51 => 29,  49 => 28,  46 => 27,  43 => 26,  38 => 23,  36 => 24,  30 => 23,);
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
{% extends \"authed.twig\" %}
{% import \"forms.twig\" as forms %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        {% if settings.SETTING_LIBRARY_TIDY_ENABLED %}
            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Run through the library and remove unused and unnecessary files\" %}\" href=\"{{ urlFor(\"maintenance.libraryTidy.form\") }}\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {% trans \"Tidy Library\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Settings\" %}</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\"><a href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Configuration\" %}</span></a></li>
                        <li><a href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Defaults\" %}</span></a></li>
                        <li><a href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Displays\" %}</span></a></li>
                        <li><a href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                        <li><a href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Maintenance\" %}</span></a></li>
                        <li><a href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Network\" %}</span></a></li>
                        <li><a href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Permissions\" %}</span></a></li>
                        <li><a href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Regional\" %}</span></a></li>
                        <li><a href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Troubleshooting\" %}</span></a></li>
                        <li><a href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Users\" %}</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"settings.update\") }}\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">{% trans \"Configuration\" %}</h3>

                                {% if theme.isSettingVisible(\"LIBRARY_LOCATION\") %}
                                    {% set title %}{% trans \"Library Location\" %}{% endset %}
                                    {% set helpText %}{% trans \"The fully qualified path to the CMS library location.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"LIBRARY_LOCATION\") %}
                                        {{ forms.input(\"LIBRARY_LOCATION\", title, theme.getSetting(\"LIBRARY_LOCATION\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"LIBRARY_LOCATION\", title, theme.getSetting(\"LIBRARY_LOCATION\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SERVER_KEY\") %}
                                    {% set title %}{% trans \"CMS Secret Key\" %}{% endset %}
                                    {% set helpText %}{% trans \"This key must be entered into each Player to authenticate the Player with the CMS.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"SERVER_KEY\") %}
                                        {{ forms.input(\"SERVER_KEY\", title, theme.getSetting(\"SERVER_KEY\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"SERVER_KEY\", title, theme.getSetting(\"SERVER_KEY\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"GLOBAL_THEME_NAME\") %}
                                    {% set title %}{% trans \"CMS Theme\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Theme to apply to all pages by default\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"GLOBAL_THEME_NAME\") %}
                                        {% if hideThemes %}
                                            {# Show a edit box  #}
                                            {{ forms.input(\"GLOBAL_THEME_NAME\", title, theme.getSetting(\"GLOBAL_THEME_NAME\"), helpText) }}
                                        {% else %}
                                            {{ forms.dropdown(\"GLOBAL_THEME_NAME\", \"single\", title, theme.getSetting(\"GLOBAL_THEME_NAME\"), themes, \"id\", \"value\", helpText) }}
                                        {% endif %}
                                    {% else %}
                                        {{ forms.disabled(\"GLOBAL_THEME_NAME\", title, theme.getSetting(\"GLOBAL_THEME_NAME\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"NAVIGATION_MENU_POSITION\") %}
                                    {% set title %}{% trans \"Navigation Menu\" %}{% endset %}
                                    {% set helpText %}{% trans \"Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.\" %}{% endset %}

                                    {% set horizontalOption %}{% trans \"Horizontal along the top\" %}{% endset %}
                                    {% set verticalOption %}{% trans \"Vertically on the left\" %}{% endset %}
                                    {% set options = [
                                        { id: \"horizontal\", value: horizontalOption },
                                        { id: \"vertical\", value: verticalOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"NAVIGATION_MENU_POSITION\") %}
                                        {{ forms.dropdown(\"NAVIGATION_MENU_POSITION\", \"single\", title, theme.getSetting(\"NAVIGATION_MENU_POSITION\", \"vertical\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"NAVIGATION_MENU_POSITION\", title, theme.getSetting(\"NAVIGATION_MENU_POSITION\", \"vertical\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">{% trans \"Defaults\" %}</h3>

                                {% if theme.isSettingVisible(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\") %}
                                    {% set title %}{% trans \"Default update media in all layouts\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default the checkbox for updating media on all layouts when editing in the library\" %}{% endset %}

                                    {{ forms.checkbox(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\", title, theme.getSetting(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"LAYOUT_COPY_MEDIA_CHECKB\") %}
                                    {% set title %}{% trans \"Default copy media when copying a layout?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default the checkbox for making duplicates of media when copying layouts\" %}{% endset %}

                                    {{ forms.checkbox(\"LAYOUT_COPY_MEDIA_CHECKB\", title, theme.getSetting(\"LAYOUT_COPY_MEDIA_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"LIBRARY_MEDIA_DELETEOLDVER_CHECKB\") %}
                                    {% set title %}{% trans \"Default for \\\"Delete old version of Media\\\" checkbox. Shown when Editing Library Media.\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.\" %}{% endset %}

                                    {{ forms.checkbox(\"LIBRARY_MEDIA_DELETEOLDVER_CHECKB\", title, theme.getSetting(\"LIBRARY_MEDIA_DELETEOLDVER_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"LIBRARY_MEDIA_UPDATEINALL_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB\") %}
                                    {% set title %}{% trans \"Should Layouts be automatically Published?\" %}{% endset %}
                                    {% set helpText %}{% trans \"When enabled draft Layouts will be automatically published 30 minutes after the last edit\" %}{% endset %}

                                    {{ forms.checkbox(\"DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB\", title, theme.getSetting(\"DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_CASCADE_PERMISSION_CHECKB\") %}
                                    {% set title %}{% trans \"Default for \\\"Cascade permissions to all items underneath this one.\\\" checkbox. Shown when editing Permissions.\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default the checkbox for \\\"Cascade permissions to all items underneath this one.\\\" when assigning permisions to content\" %}{% endset %}

                                    {{ forms.checkbox(\"DEFAULT_CASCADE_PERMISSION_CHECKB\", title, theme.getSetting(\"DEFAULT_CASCADE_PERMISSION_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"DEFAULT_CASCADE_PERMISSION_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_TRANSITION_IN\") %}
                                    {% set title %}{% trans \"Default Transition In\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default Transition In that should be applied to widgets\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_TRANSITION_IN\") %}
                                        {% set attributes = [
                                            { name: \"data-width\", value: \"100%\" },
                                            { name: \"data-search-url\", value: urlFor(\"transition.search\") },
                                            { name: \"data-search-term\", value: \"transition\" },
                                            { name: \"data-id-property\", value: \"code\" },
                                            { name: \"data-text-property\", value: \"transition\" },
                                            { name: \"data-filter-options\", value: '{\"availableAsIn\":\"1\"}' },
                                        ] %}
                                        {{ forms.dropdown(\"DEFAULT_TRANSITION_IN\", \"single\", title, theme.getSetting(\"DEFAULT_TRANSITION_IN\"), [defaultTransitionIn], \"code\", \"transition\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_TRANSITION_IN\", title, theme.getSetting(\"DEFAULT_TRANSITION_IN\"), \"\") }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_TRANSITION_OUT\") %}
                                    {% set title %}{% trans \"Default Transition Out\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default Transition Out that should be applied to widgets\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_TRANSITION_OUT\") %}
                                        {% set attributes = [
                                            { name: \"data-width\", value: \"100%\" },
                                            { name: \"data-search-url\", value: urlFor(\"transition.search\") },
                                            { name: \"data-search-term\", value: \"transition\" },
                                            { name: \"data-id-property\", value: \"code\" },
                                            { name: \"data-text-property\", value: \"transition\" },
                                            { name: \"data-filter-options\", value: '{\"availableAsOut\":\"1\"}' },
                                        ] %}
                                        {{ forms.dropdown(\"DEFAULT_TRANSITION_OUT\", \"single\", title, theme.getSetting(\"DEFAULT_TRANSITION_OUT\"), [defaultTransitionOut], \"code\", \"transition\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_TRANSITION_OUT\", title, theme.getSetting(\"DEFAULT_TRANSITION_OUT\"), \"\") }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_TRANSITION_DURATION\") %}
                                    {% set title %}{% trans \"Default Transition duration\" %}{% endset %}
                                    {% set helpText %}{% trans \"Default duration for in and out transitions\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_TRANSITION_DURATION\") %}
                                        {{ forms.number(\"DEFAULT_TRANSITION_DURATION\", title, theme.getSetting(\"DEFAULT_TRANSITION_DURATION\", 0), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_TRANSITION_DURATION\", title, theme.getSetting(\"DEFAULT_TRANSITION_DURATION\", 0), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_TRANSITION_AUTO_APPLY\") %}
                                    {% set title %}{% trans \"Default value for \\\"Automatically apply Transitions?.\\\" checkbox on Layout add form\" %}{% endset %}

                                    {{ forms.checkbox(\"DEFAULT_TRANSITION_AUTO_APPLY\", title, theme.getSetting(\"DEFAULT_TRANSITION_AUTO_APPLY\"), \"\", \"\", \"\", not theme.isSettingEditable(\"DEFAULT_TRANSITION_AUTO_APPLY\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_RESIZE_THRESHOLD\") %}
                                    {% set title %}{% trans \"Resize Threshold\" %}{% endset %}
                                    {% set helpText %}{% trans \"The maximum dimensions to be considered when an image is resized, based on the longest side\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_RESIZE_THRESHOLD\") %}
                                        {{ forms.number(\"DEFAULT_RESIZE_THRESHOLD\", title, theme.getSetting(\"DEFAULT_RESIZE_THRESHOLD\", 0), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_RESIZE_THRESHOLD\", title, theme.getSetting(\"DEFAULT_RESIZE_THRESHOLD\", 0), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_RESIZE_LIMIT\") %}
                                    {% set title %}{% trans \"Resize Limit\" %}{% endset %}
                                    {% set helpText %}{% trans \"Images that exceed the resize limit, based on the longest side, will not be processed\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_RESIZE_LIMIT\") %}
                                        {{ forms.number(\"DEFAULT_RESIZE_LIMIT\", title, theme.getSetting(\"DEFAULT_RESIZE_LIMIT\", 0), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_RESIZE_LIMIT\", title, theme.getSetting(\"DEFAULT_RESIZE_LIMIT\", 0), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">{% trans \"Displays\" %}</h3>

                                {% if theme.isSettingVisible(\"DEFAULT_LAYOUT\") %}
                                    {% set title %}{% trans \"Default Layout\" %}{% endset %}
                                    {% set helpText %}{% trans \"The default layout to assign for new displays and displays which have their current default deleted.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_LAYOUT\") %}
                                        {% set attributes = [
                                            { name: \"data-width\", value: \"100%\" },
                                            { name: \"data-search-url\", value: urlFor(\"layout.search\") },
                                            { name: \"data-search-term\", value: \"layout\" },
                                            { name: \"data-search-term-tags\", value: \"tags\" },
                                            { name: \"data-id-property\", value: \"layoutId\" },
                                            { name: \"data-text-property\", value: \"layout\" },
                                            { name: \"data-filter-options\", value: '{\"retired\":\"0\"}' }
                                        ] %}
                                        {{ forms.dropdown(\"DEFAULT_LAYOUT\", \"single\", title, defaultLayout.layoutId, [defaultLayout], \"layoutId\", \"layout\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_LAYOUT\", title, theme.getSetting(\"DEFAULT_LAYOUT\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"XMR_ADDRESS\") %}
                                    {% set title %}{% trans \"XMR Private Address\" %}{% endset %}
                                    {% set helpText %}{% trans \"Please enter the private address for XMR.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"XMR_ADDRESS\") %}
                                        {{ forms.input(\"XMR_ADDRESS\", title, theme.getSetting(\"XMR_ADDRESS\", \"tcp:://localhost:5555\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"XMR_ADDRESS\", title, theme.getSetting(\"XMR_ADDRESS\", \"tcp:://localhost:5555\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"XMR_PUB_ADDRESS\") %}
                                    {% set title %}{% trans \"XMR Public Address\" %}{% endset %}
                                    {% set helpText %}{% trans \"Please enter the public address for XMR.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"XMR_PUB_ADDRESS\") %}
                                        {{ forms.input(\"XMR_PUB_ADDRESS\", title, theme.getSetting(\"XMR_PUB_ADDRESS\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"XMR_PUB_ADDRESS\", title, theme.getSetting(\"XMR_PUB_ADDRESS\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_LAT\") %}
                                    {% set title %}{% trans \"Default Latitude\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Latitude to apply for any Geo aware Previews\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_LAT\") %}
                                        {{ forms.input(\"DEFAULT_LAT\", title, theme.getSetting(\"DEFAULT_LAT\", \"51.504\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_LAT\", title, theme.getSetting(\"DEFAULT_LAT\", \"51.504\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULT_LONG\") %}
                                    {% set title %}{% trans \"Default Longitude\" %}{% endset %}
                                    {% set helpText %}{% trans \"The longitude to apply for any Geo aware Previews\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_LONG\") %}
                                        {{ forms.input(\"DEFAULT_LONG\", title, theme.getSetting(\"DEFAULT_LONG\", \"-0.104\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_LONG\", title, theme.getSetting(\"DEFAULT_LONG\", \"-0.104\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SHOW_DISPLAY_AS_VNCLINK\") %}
                                    {% set title %}{% trans \"Add a link to the Display name using this format mask?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"SHOW_DISPLAY_AS_VNCLINK\") %}
                                        {{ forms.input(\"SHOW_DISPLAY_AS_VNCLINK\", title, theme.getSetting(\"SHOW_DISPLAY_AS_VNCLINK\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"SHOW_DISPLAY_AS_VNCLINK\", title, theme.getSetting(\"SHOW_DISPLAY_AS_VNCLINK\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SHOW_DISPLAY_AS_VNC_TGT\") %}
                                    {% set title %}{% trans \"The target attribute for the above link\" %}{% endset %}
                                    {% set helpText %}{% trans \"If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"SHOW_DISPLAY_AS_VNC_TGT\") %}
                                        {{ forms.input(\"SHOW_DISPLAY_AS_VNC_TGT\", title, theme.getSetting(\"SHOW_DISPLAY_AS_VNC_TGT\", \"_top\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"SHOW_DISPLAY_AS_VNC_TGT\", title, theme.getSetting(\"SHOW_DISPLAY_AS_VNC_TGT\", \"_top\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAX_LICENSED_DISPLAYS\") %}
                                    {% set title %}{% trans \"Number of display slots\" %}{% endset %}
                                    {% set helpText %}{% trans \"The maximum number of licensed Players for this server installation. 0 = unlimited\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MAX_LICENSED_DISPLAYS\") %}
                                        {{ forms.number(\"MAX_LICENSED_DISPLAYS\", title, theme.getSetting(\"MAX_LICENSED_DISPLAYS\", 0), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAX_LICENSED_DISPLAYS\", title, theme.getSetting(\"MAX_LICENSED_DISPLAYS\", 0), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\") %}
                                    {% set title %}{% trans \"Aggregation level\" %}{% endset %}
                                    {% set helpText %}{% trans \"Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.\" %}{% endset %}

                                    {% set individualOption %}{% trans \"Individual\" %}{% endset %}
                                    {% set hourlyOption %}{% trans \"Hourly\" %}{% endset %}
                                    {% set dailyOption %}{% trans \"Daily\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Individual\", value: individualOption },
                                        { id: \"Hourly\", value: hourlyOption },
                                        { id: \"Daily\", value: dailyOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\") %}
                                        {{ forms.dropdown(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\", \"single\", title, theme.getSetting(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\", title, theme.getSetting(\"DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_PROFILE_STATS_DEFAULT\") %}
                                    {% set title %}{% trans \"Enable Stats Collection?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.\" %}{% endset %}
                                    {{ forms.checkbox(\"DISPLAY_PROFILE_STATS_DEFAULT\", title, theme.getSetting(\"DISPLAY_PROFILE_STATS_DEFAULT\"), helpText, \"\", \"\", not theme.isSettingEditable(\"DISPLAY_PROFILE_STATS_DEFAULT\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"LAYOUT_STATS_ENABLED_DEFAULT\") %}
                                    {% set title %}{% trans \"Enable Layout Stats Collection?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.\" %}{% endset %}
                                    {{ forms.checkbox(\"LAYOUT_STATS_ENABLED_DEFAULT\", title, theme.getSetting(\"LAYOUT_STATS_ENABLED_DEFAULT\"), helpText, \"\", \"\", not theme.isSettingEditable(\"LAYOUT_STATS_ENABLED_DEFAULT\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MEDIA_STATS_ENABLED_DEFAULT\") %}
                                    {% set title %}{% trans \"Enable Media Stats Collection?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.\" %}{% endset %}

                                    {% set offOption %}{% trans \"Off\" %}{% endset %}
                                    {% set onOption %}{% trans \"On\" %}{% endset %}
                                    {% set inheritOption %}{% trans \"Inherit\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: offOption },
                                        { id: \"On\", value: onOption },
                                        { id: \"Inherit\", value: inheritOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"MEDIA_STATS_ENABLED_DEFAULT\") %}
                                        {{ forms.dropdown(\"MEDIA_STATS_ENABLED_DEFAULT\", \"single\", title, theme.getSetting(\"MEDIA_STATS_ENABLED_DEFAULT\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MEDIA_STATS_ENABLED_DEFAULT\", title, theme.getSetting(\"MEDIA_STATS_ENABLED_DEFAULT\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PLAYLIST_STATS_ENABLED_DEFAULT\") %}
                                    {% set title %}{% trans \"Enable Playlist Stats Collection?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.\" %}{% endset %}

                                    {% set offOption %}{% trans \"Off\" %}{% endset %}
                                    {% set onOption %}{% trans \"On\" %}{% endset %}
                                    {% set inheritOption %}{% trans \"Inherit\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: offOption },
                                        { id: \"On\", value: onOption },
                                        { id: \"Inherit\", value: inheritOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"PLAYLIST_STATS_ENABLED_DEFAULT\") %}
                                        {{ forms.dropdown(\"PLAYLIST_STATS_ENABLED_DEFAULT\", \"single\", title, theme.getSetting(\"PLAYLIST_STATS_ENABLED_DEFAULT\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PLAYLIST_STATS_ENABLED_DEFAULT\", title, theme.getSetting(\"PLAYLIST_STATS_ENABLED_DEFAULT\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"WIDGET_STATS_ENABLED_DEFAULT\") %}
                                    {% set title %}{% trans \"Enable Widget Stats Collection?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.\" %}{% endset %}

                                    {% set offOption %}{% trans \"Off\" %}{% endset %}
                                    {% set onOption %}{% trans \"On\" %}{% endset %}
                                    {% set inheritOption %}{% trans \"Inherit\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: offOption },
                                        { id: \"On\", value: onOption },
                                        { id: \"Inherit\", value: inheritOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"WIDGET_STATS_ENABLED_DEFAULT\") %}
                                        {{ forms.dropdown(\"WIDGET_STATS_ENABLED_DEFAULT\", \"single\", title, theme.getSetting(\"WIDGET_STATS_ENABLED_DEFAULT\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"WIDGET_STATS_ENABLED_DEFAULT\", title, theme.getSetting(\"WIDGET_STATS_ENABLED_DEFAULT\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED\") %}
                                    {% set title %}{% trans \"Enable the option to report the current layout status?\" %}{% endset %}
                                    {{ forms.checkbox(\"DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED\", title, theme.getSetting(\"DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED\"), \"\", \"\", \"\", not theme.isSettingEditable(\"DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_LOCK_NAME_TO_DEVICENAME\") %}
                                    {% set title %}{% trans \"Lock the Display Name to the device name provided by the Player?\" %}{% endset %}
                                    {{ forms.checkbox(\"DISPLAY_LOCK_NAME_TO_DEVICENAME\", title, theme.getSetting(\"DISPLAY_LOCK_NAME_TO_DEVICENAME\"), \"\", \"\", \"\", not theme.isSettingEditable(\"DISPLAY_LOCK_NAME_TO_DEVICENAME\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED\") %}
                                    {% set title %}{% trans \"Enable the option to set the screenshot interval?\" %}{% endset %}
                                    {{ forms.checkbox(\"DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED\", title, theme.getSetting(\"DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED\"), \"\", \"\", \"\", not theme.isSettingEditable(\"DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\") %}
                                    {% set title %}{% trans \"Display Screenshot Default Size\" %}{% endset %}
                                    {% set helpText %}{% trans \"The default size in pixels for the Display Screenshots\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\") %}
                                        {{ forms.number(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\", title, theme.getSetting(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\", 200), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\", title, theme.getSetting(\"DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT\", 200), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DISPLAY_AUTO_AUTH\") %}
                                    {% set title %}{% trans \"Automatically authorise new Displays?\" %}{% endset %}
                                    {% set helpText %}{% trans \"If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.\" %}{% endset %}
                                    {{ forms.checkbox(\"DISPLAY_AUTO_AUTH\", title, theme.getSetting(\"DISPLAY_AUTO_AUTH\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"DISPLAY_AUTO_AUTH\")) }}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">{% trans \"General\" %}</h3>

                                {% if theme.isSettingVisible(\"HELP_BASE\") %}
                                    {% set title %}{% trans \"Location of the Manual\" %}{% endset %}
                                    {% set helpText %}{% trans \"The address of the user manual, which will be used as a prefix for all help links.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"HELP_BASE\") %}
                                        {{ forms.input(\"HELP_BASE\", title, theme.getSetting(\"HELP_BASE\", \"https://xibo.org.uk/manual/\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"HELP_BASE\", title, theme.getSetting(\"HELP_BASE\", \"https://xibo.org.uk/manual/\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"QUICK_CHART_URL\") %}
                                    {% set title %}{% trans \"Quick Chart URL\" %}{% endset %}
                                    {% set helpText %}{% trans \"Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"QUICK_CHART_URL\") %}
                                        {{ forms.input(\"QUICK_CHART_URL\", title, theme.getSetting(\"QUICK_CHART_URL\", \"https://quickchart.io\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"QUICK_CHART_URL\", title, theme.getSetting(\"QUICK_CHART_URL\", \"https://quickchart.io\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PHONE_HOME\") %}
                                    {% set title %}{% trans \"Allow usage tracking?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should the CMS send anonymous statistics to help improve the software?\" %}{% endset %}

                                    {{ forms.checkbox(\"PHONE_HOME\", title, theme.getSetting(\"PHONE_HOME\"), helpText, \"\", \"\", not theme.isSettingEditable(\"PHONE_HOME\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PHONE_HOME_KEY\") %}
                                    {% set title %}{% trans \"Phone home key\" %}{% endset %}
                                    {% set helpText %}{% trans \"Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PHONE_HOME_KEY\") %}
                                        {{ forms.input(\"PHONE_HOME_KEY\", title, theme.getSetting(\"PHONE_HOME_KEY\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PHONE_HOME_KEY\", title, theme.getSetting(\"PHONE_HOME_KEY\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PHONE_HOME_DATE\") %}
                                    {% set title %}{% trans \"Phone home time\" %}{% endset %}
                                    {% set helpText %}{% trans \"The last time we PHONED_HOME in seconds since the epoch\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PHONE_HOME_DATE\") %}
                                        {{ forms.input(\"PHONE_HOME_DATE\", title, theme.getSetting(\"PHONE_HOME_DATE\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PHONE_HOME_DATE\", title, theme.getSetting(\"PHONE_HOME_DATE\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PHONE_HOME_URL\") %}
                                    {% set title %}{% trans \"Phone home URL\" %}{% endset %}
                                    {% set helpText %}{% trans \"The URL to connect to to PHONE_HOME (if enabled)\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PHONE_HOME_URL\") %}
                                        {{ forms.input(\"PHONE_HOME_URL\", title, theme.getSetting(\"PHONE_HOME_URL\", \"http://www.xibo.org.uk/stats/track.php\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PHONE_HOME_URL\", title, theme.getSetting(\"PHONE_HOME_URL\", \"http://www.xibo.org.uk/stats/track.php\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SCHEDULE_LOOKAHEAD\") %}
                                    {% set title %}{% trans \"Send Schedule in advance?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should the CMS send future schedule information to Players?\" %}{% endset %}

                                    {{ forms.checkbox(\"SCHEDULE_LOOKAHEAD\", title, theme.getSetting(\"SCHEDULE_LOOKAHEAD\", 1), helpText, \"\", \"\", not theme.isSettingEditable(\"SCHEDULE_LOOKAHEAD\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"EVENT_SYNC\") %}
                                    {% set title %}{% trans \"Show Synchronise this Event checkbox on applicable events?\" %}{% endset %}
                                    {% set helpText %}{% trans \"If checked you will have an option to enable Synchronise this Event checkbox for applicable events\" %}{% endset %}

                                    {{ forms.checkbox(\"EVENT_SYNC\", title, theme.getSetting(\"EVENT_SYNC\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"EVENT_SYNC\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"REQUIRED_FILES_LOOKAHEAD\") %}
                                    {% set title %}{% trans \"Send files in advance?\" %}{% endset %}
                                    {% set helpText %}{% trans \"How many seconds in to the future should the calls to RequiredFiles look?\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"REQUIRED_FILES_LOOKAHEAD\") %}
                                        {{ forms.number(\"REQUIRED_FILES_LOOKAHEAD\", title, theme.getSetting(\"REQUIRED_FILES_LOOKAHEAD\", \"172800\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"REQUIRED_FILES_LOOKAHEAD\", title, theme.getSetting(\"REQUIRED_FILES_LOOKAHEAD\", \"172800\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SETTING_IMPORT_ENABLED\") %}
                                    {% set title %}{% trans \"Allow Import?\" %}{% endset %}

                                    {{ forms.checkbox(\"SETTING_IMPORT_ENABLED\", title, theme.getSetting(\"SETTING_IMPORT_ENABLED\", 0), \"\", \"\", \"\", not theme.isSettingEditable(\"SETTING_IMPORT_ENABLED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SETTING_LIBRARY_TIDY_ENABLED\") %}
                                    {% set title %}{% trans \"Enable Library Tidy?\" %}{% endset %}

                                    {{ forms.checkbox(\"SETTING_LIBRARY_TIDY_ENABLED\", title, theme.getSetting(\"SETTING_LIBRARY_TIDY_ENABLED\", 1), \"\", \"\", \"\", not theme.isSettingEditable(\"SETTING_LIBRARY_TIDY_ENABLED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"EMBEDDED_STATUS_WIDGET\") %}
                                    {% set title %}{% trans \"Status Dashboard Widget\" %}{% endset %}
                                    {% set helpText %}{% trans \"HTML to embed in an iframe on the Status Dashboard\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"EMBEDDED_STATUS_WIDGET\") %}
                                        {{ forms.input(\"EMBEDDED_STATUS_WIDGET\", title, theme.getSetting(\"EMBEDDED_STATUS_WIDGET\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"EMBEDDED_STATUS_WIDGET\", title, theme.getSetting(\"EMBEDDED_STATUS_WIDGET\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DEFAULTS_IMPORTED\") %}
                                    {% set title %}{% trans \"Defaults Imported?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Has the default layout been imported?\" %}{% endset %}

                                    {{ forms.checkbox(\"DEFAULTS_IMPORTED\", title, theme.getSetting(\"DEFAULTS_IMPORTED\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"DEFAULTS_IMPORTED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DASHBOARD_LATEST_NEWS_ENABLED\") %}
                                    {% set title %}{% trans \"Enable Latest News?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should the Dashboard show latest news? The address is provided by the theme.\" %}{% endset %}

                                    {{ forms.checkbox(\"DASHBOARD_LATEST_NEWS_ENABLED\", title, theme.getSetting(\"DASHBOARD_LATEST_NEWS_ENABLED\", 1), helpText, \"\", \"\", not theme.isSettingEditable(\"DASHBOARD_LATEST_NEWS_ENABLED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"INSTANCE_SUSPENDED\") %}
                                    {% set title %}{% trans \"Instance Suspended\" %}{% endset %}
                                    {% set helpText %}{% trans \"Is this instance suspended?\" %}{% endset %}

                                    {{ forms.checkbox(\"INSTANCE_SUSPENDED\", title, theme.getSetting(\"INSTANCE_SUSPENDED\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"INSTANCE_SUSPENDED\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"LATEST_NEWS_URL\") %}
                                    {% set title %}{% trans \"Latest News URL\" %}{% endset %}
                                    {% set helpText %}{% trans \"RSS/Atom Feed to be displayed on the Status Dashboard\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"LATEST_NEWS_URL\") %}
                                        {{ forms.input(\"LATEST_NEWS_URL\", title, theme.getSetting(\"LATEST_NEWS_URL\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"LATEST_NEWS_URL\", title, theme.getSetting(\"LATEST_NEWS_URL\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">{% trans \"Maintenance\" %}</h3>

                                {% if theme.isSettingVisible(\"MAINTENANCE_ENABLED\") %}
                                    {% set title %}{% trans \"Enable Maintenance?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Allow the maintenance script to run if it is called?\" %}{% endset %}

                                    {% set offOption %}{% trans \"Off\" %}{% endset %}
                                    {% set onOption %}{% trans \"On\" %}{% endset %}
                                    {% set protectedOption %}{% trans \"Protected\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: offOption },
                                        { id: \"On\", value: onOption },
                                        { id: \"Protected\", value: protectedOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"MAINTENANCE_ENABLED\") %}
                                        {{ forms.dropdown(\"MAINTENANCE_ENABLED\", \"single\", title, theme.getSetting(\"MAINTENANCE_ENABLED\", \"Off\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAINTENANCE_ENABLED\", title, theme.getSetting(\"MAINTENANCE_ENABLED\", \"Off\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_EMAIL_ALERTS\") %}
                                    {% set title %}{% trans \"Enable Email Alerts?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Global switch for email alerts to be sent\" %}{% endset %}

                                    {{ forms.checkbox(\"MAINTENANCE_EMAIL_ALERTS\", title, theme.getSetting(\"MAINTENANCE_EMAIL_ALERTS\", 1), helpText, \"\", \"\", not theme.isSettingEditable(\"MAINTENANCE_EMAIL_ALERTS\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_KEY\") %}
                                    {% set title %}{% trans \"Maintenance Key\" %}{% endset %}
                                    {% set helpText %}{% trans \"String appended to the maintenance script to prevent malicious calls to the script.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MAINTENANCE_KEY\") %}
                                        {{ forms.input(\"MAINTENANCE_KEY\", title, theme.getSetting(\"MAINTENANCE_KEY\", \"changeme\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAINTENANCE_KEY\", title, theme.getSetting(\"MAINTENANCE_KEY\", \"changeme\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_LOG_MAXAGE\") %}
                                    {% set title %}{% trans \"Max Log Age\" %}{% endset %}
                                    {% set helpText %}{% trans \"Maximum age for log entries in days. Set to 0 to keep logs indefinitely.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MAINTENANCE_LOG_MAXAGE\") %}
                                        {{ forms.number(\"MAINTENANCE_LOG_MAXAGE\", title, theme.getSetting(\"MAINTENANCE_LOG_MAXAGE\", 30), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAINTENANCE_LOG_MAXAGE\", title, theme.getSetting(\"MAINTENANCE_LOG_MAXAGE\", 30), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_STAT_MAXAGE\") %}
                                    {% set title %}{% trans \"Max Statistics Age\" %}{% endset %}
                                    {% set helpText %}{% trans \"Maximum age for statistics entries in days. Set to 0 to keep statistics indefinitely.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MAINTENANCE_STAT_MAXAGE\") %}
                                        {{ forms.number(\"MAINTENANCE_STAT_MAXAGE\", title, theme.getSetting(\"MAINTENANCE_STAT_MAXAGE\", 30), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAINTENANCE_STAT_MAXAGE\", title, theme.getSetting(\"MAINTENANCE_STAT_MAXAGE\", 30), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_ALERT_TOUT\") %}
                                    {% set title %}{% trans \"Max Display Timeout\" %}{% endset %}
                                    {% set helpText %}{% trans \"How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MAINTENANCE_ALERT_TOUT\") %}
                                        {{ forms.number(\"MAINTENANCE_ALERT_TOUT\", title, theme.getSetting(\"MAINTENANCE_ALERT_TOUT\", 12), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MAINTENANCE_ALERT_TOUT\", title, theme.getSetting(\"MAINTENANCE_ALERT_TOUT\", 12), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MAINTENANCE_ALWAYS_ALERT\") %}
                                    {% set title %}{% trans \"Send repeat Display Timeouts\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should the CMS send an email if a display is in an error state every time maintenance runs?\" %}{% endset %}

                                    {{ forms.checkbox(\"MAINTENANCE_ALWAYS_ALERT\", title, theme.getSetting(\"MAINTENANCE_ALWAYS_ALERT\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"MAINTENANCE_ALWAYS_ALERT\")) }}
                                {% endif %}

                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">{% trans \"Network\" %}</h3>

                                {% if theme.isSettingVisible(\"mail_to\") %}
                                    {% set title %}{% trans \"Admin email address\" %}{% endset %}
                                    {% set helpText %}{% trans \"This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"mail_to\") %}
                                        {{ forms.input(\"mail_to\", title, theme.getSetting(\"mail_to\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"mail_to\", title, theme.getSetting(\"mail_to\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"mail_from\") %}
                                    {% set title %}{% trans \"Sending email address\" %}{% endset %}
                                    {% set helpText %}{% trans \"Mail will be sent from this address\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"mail_from\") %}
                                        {{ forms.input(\"mail_from\", title, theme.getSetting(\"mail_from\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"mail_from\", title, theme.getSetting(\"mail_from\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"mail_from_name\") %}
                                    {% set title %}{% trans \"Sending email name\" %}{% endset %}
                                    {% set helpText %}{% trans \"Mail will be sent under this name\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"mail_from_name\") %}
                                        {{ forms.input(\"mail_from_name\", title, theme.getSetting(\"mail_from_name\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"mail_from_name\", title, theme.getSetting(\"mail_from_name\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SENDFILE_MODE\") %}
                                    {% set title %}{% trans \"File download mode\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?\" %}{% endset %}

                                    {% set offOption %}{% trans \"Off\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: offOption },
                                        { id: \"Apache\", value: \"Apache\" },
                                        { id: \"Nginx\", value: \"Nginx\" }
                                    ] %}
                                    {% if theme.isSettingEditable(\"SENDFILE_MODE\") %}
                                        {{ forms.dropdown(\"SENDFILE_MODE\", \"single\", title, theme.getSetting(\"SENDFILE_MODE\", \"Off\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"SENDFILE_MODE\", title, theme.getSetting(\"SENDFILE_MODE\", \"Off\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PROXY_HOST\") %}
                                    {% set title %}{% trans \"Proxy URL\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Proxy URL\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PROXY_HOST\") %}
                                        {{ forms.input(\"PROXY_HOST\", title, theme.getSetting(\"PROXY_HOST\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PROXY_HOST\", title, theme.getSetting(\"PROXY_HOST\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PROXY_PORT\") %}
                                    {% set title %}{% trans \"Proxy Port\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Proxy Port\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PROXY_PORT\") %}
                                        {{ forms.number(\"PROXY_PORT\", title, theme.getSetting(\"PROXY_PORT\", 0), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PROXY_PORT\", title, theme.getSetting(\"PROXY_PORT\", 0), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PROXY_AUTH\") %}
                                    {% set title %}{% trans \"Proxy Credentials\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Authentication information for this proxy. username:password\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PROXY_AUTH\") %}
                                        {{ forms.input(\"PROXY_AUTH\", title, theme.getSetting(\"PROXY_AUTH\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PROXY_AUTH\", title, theme.getSetting(\"PROXY_AUTH\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PROXY_EXCEPTIONS\") %}
                                    {% set title %}{% trans \"Proxy Exceptions\" %}{% endset %}
                                    {% set helpText %}{% trans \"Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"PROXY_EXCEPTIONS\") %}
                                        {{ forms.input(\"PROXY_EXCEPTIONS\", title, theme.getSetting(\"PROXY_EXCEPTIONS\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PROXY_EXCEPTIONS\", title, theme.getSetting(\"PROXY_EXCEPTIONS\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"CDN_URL\") %}
                                    {% set title %}{% trans \"CDN Address\" %}{% endset %}
                                    {% set helpText %}{% trans \"Content Delivery Network Address for serving file requests to Players\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"CDN_URL\") %}
                                        {{ forms.input(\"CDN_URL\", title, theme.getSetting(\"CDN_URL\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"CDN_URL\", title, theme.getSetting(\"CDN_URL\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\") %}
                                    {% set title %}{% trans \"Monthly bandwidth Limit\" %}{% endset %}
                                    {% set helpText %}{% trans \"XMDS Transfer Limit in KB/month\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\") %}
                                        {{ forms.number(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\", title, theme.getSetting(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\", title, theme.getSetting(\"MONTHLY_XMDS_TRANSFER_LIMIT_KB\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"LIBRARY_SIZE_LIMIT_KB\") %}
                                    {% set title %}{% trans \"Library Size Limit\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Limit for the Library Size in KB\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"LIBRARY_SIZE_LIMIT_KB\") %}
                                        {{ forms.number(\"LIBRARY_SIZE_LIMIT_KB\", title, theme.getSetting(\"LIBRARY_SIZE_LIMIT_KB\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"LIBRARY_SIZE_LIMIT_KB\", title, theme.getSetting(\"LIBRARY_SIZE_LIMIT_KB\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"FORCE_HTTPS\") %}
                                    {% set title %}{% trans \"Force HTTPS?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Force the portal into HTTPS?\" %}{% endset %}

                                    {{ forms.checkbox(\"FORCE_HTTPS\", title, theme.getSetting(\"FORCE_HTTPS\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"FORCE_HTTPS\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"ISSUE_STS\") %}
                                    {% set title %}{% trans \"Enable STS?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.\" %}{% endset %}

                                    {{ forms.checkbox(\"ISSUE_STS\", title, theme.getSetting(\"ISSUE_STS\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"ISSUE_STS\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"STS_TTL\") %}
                                    {% set title %}{% trans \"STS Time out\" %}{% endset %}
                                    {% set helpText %}{% trans \"The Time to Live (maxage) of the STS header expressed in seconds.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"STS_TTL\") %}
                                        {{ forms.number(\"STS_TTL\", title, theme.getSetting(\"STS_TTL\", \"600\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"STS_TTL\", title, theme.getSetting(\"STS_TTL\", \"600\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"WHITELIST_LOAD_BALANCERS\") %}
                                    {% set title %}{% trans \"Whitelist Load Balancers\" %}{% endset %}
                                    {% set helpText %}{% trans \"If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"WHITELIST_LOAD_BALANCERS\") %}
                                        {{ forms.input(\"WHITELIST_LOAD_BALANCERS\", title, theme.getSetting(\"WHITELIST_LOAD_BALANCERS\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"WHITELIST_LOAD_BALANCERS\", title, theme.getSetting(\"WHITELIST_LOAD_BALANCERS\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">{% trans \"Permissions\" %}</h3>

                                {% if theme.isSettingVisible(\"LAYOUT_DEFAULT\") %}
                                    {% set title %}{% trans \"Layout Permissions\" %}{% endset %}
                                    {% set helpText %}{% trans \"New layouts will be created with these settings. If public everyone will be able to view and use this layout.\" %}{% endset %}

                                    {% set privateOption %}{% trans \"Private\" %}{% endset %}
                                    {% set groupOption %}{% trans \"Group Read\" %}{% endset %}
                                    {% set groupWriteOption %}{% trans \"Group Write\" %}{% endset %}
                                    {% set groupDeleteOption %}{% trans \"Group Delete\" %}{% endset %}
                                    {% set publicOption %}{% trans \"Public Read\" %}{% endset %}
                                    {% set publicWriteOption %}{% trans \"Public Write\" %}{% endset %}
                                    {% set options = [
                                        { id: \"private\", value: privateOption },
                                        { id: \"group\", value: groupOption },
                                        { id: \"group write\", value: groupWriteOption },
                                        { id: \"group delete\", value: groupDeleteOption },
                                        { id: \"public\", value: publicOption },
                                        { id: \"public write\", value: publicWriteOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"LAYOUT_DEFAULT\") %}
                                        {{ forms.dropdown(\"LAYOUT_DEFAULT\", \"single\", title, theme.getSetting(\"LAYOUT_DEFAULT\", \"private\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"LAYOUT_DEFAULT\", title, theme.getSetting(\"LAYOUT_DEFAULT\", \"private\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MEDIA_DEFAULT\") %}
                                    {% set title %}{% trans \"Media Permissions\" %}{% endset %}
                                    {% set helpText %}{% trans \"Media will be created with these settings. If public everyone will be able to view and use this media.\" %}{% endset %}

                                    {% set privateOption %}{% trans \"Private\" %}{% endset %}
                                    {% set groupOption %}{% trans \"Group Read\" %}{% endset %}
                                    {% set groupWriteOption %}{% trans \"Group Write\" %}{% endset %}
                                    {% set groupDeleteOption %}{% trans \"Group Delete\" %}{% endset %}
                                    {% set publicOption %}{% trans \"Public Read\" %}{% endset %}
                                    {% set publicWriteOption %}{% trans \"Public Write\" %}{% endset %}
                                    {% set options = [
                                        { id: \"private\", value: privateOption },
                                        { id: \"group\", value: groupOption },
                                        { id: \"group write\", value: groupWriteOption },
                                        { id: \"group delete\", value: groupDeleteOption },
                                        { id: \"public\", value: publicOption },
                                        { id: \"public write\", value: publicWriteOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"MEDIA_DEFAULT\") %}
                                        {{ forms.dropdown(\"MEDIA_DEFAULT\", \"single\", title, theme.getSetting(\"MEDIA_DEFAULT\", \"private\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"MEDIA_DEFAULT\", title, theme.getSetting(\"MEDIA_DEFAULT\", \"private\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"REGION_OPTIONS_COLOURING\") %}
                                    {% set title %}{% trans \"How to colour Media on the Region Timeline\" %}{% endset %}

                                    {% set privateOption %}{% trans \"Media Colouring\" %}{% endset %}
                                    {% set groupOption %}{% trans \"Permissions Colouring\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Media Colouring\", value: privateOption },
                                        { id: \"Permissions Colouring\", value: groupOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"REGION_OPTIONS_COLOURING\") %}
                                        {{ forms.dropdown(\"REGION_OPTIONS_COLOURING\", \"single\", title, theme.getSetting(\"REGION_OPTIONS_COLOURING\", \"Media Colouring\"), options, \"id\", \"value\") }}
                                    {% else %}
                                        {{ forms.disabled(\"REGION_OPTIONS_COLOURING\", title, theme.getSetting(\"REGION_OPTIONS_COLOURING\", \"Media Colouring\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SCHEDULE_WITH_VIEW_PERMISSION\") %}
                                    {% set title %}{% trans \"Schedule with view permissions?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Should users with View permissions on displays be allowed to schedule to them?\" %}{% endset %}
                                    {{ forms.checkbox(\"SCHEDULE_WITH_VIEW_PERMISSION\", title, theme.getSetting(\"SCHEDULE_WITH_VIEW_PERMISSION\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"SCHEDULE_WITH_VIEW_PERMISSION\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SCHEDULE_SHOW_LAYOUT_NAME\") %}
                                    {% set title %}{% trans \"Show event Layout regardless of User permission?\" %}{% endset %}
                                    {% set helpText %}{% trans \"If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.\" %}{% endset %}
                                    {{ forms.checkbox(\"SCHEDULE_SHOW_LAYOUT_NAME\", title, theme.getSetting(\"SCHEDULE_SHOW_LAYOUT_NAME\", 0), helpText, \"\", \"\", not theme.isSettingEditable(\"SCHEDULE_SHOW_LAYOUT_NAME\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"INHERIT_PARENT_PERMISSIONS\") %}
                                    {% set title %}{% trans \"Inherit permissions\" %}{% endset %}
                                    {% set helpText %}{% trans \"Inherit permissions from Parent when adding a new item?\" %}{% endset %}
                                    {{ forms.checkbox(\"INHERIT_PARENT_PERMISSIONS\", title, theme.getSetting(\"INHERIT_PARENT_PERMISSIONS\", 1), helpText, \"\", \"\", not theme.isSettingEditable(\"INHERIT_PARENT_PERMISSIONS\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"MODULE_CONFIG_LOCKED_CHECKB\") %}
                                    {% set title %}{% trans \"Lock Module Config\" %}{% endset %}
                                    {% set helpText %}{% trans \"Is the module config locked? Useful for Service providers.\" %}{% endset %}
                                    {{ forms.checkbox(\"MODULE_CONFIG_LOCKED_CHECKB\", title, theme.getSetting(\"MODULE_CONFIG_LOCKED_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"MODULE_CONFIG_LOCKED_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"TASK_CONFIG_LOCKED_CHECKB\") %}
                                    {% set title %}{% trans \"Lock Task Config\" %}{% endset %}
                                    {% set helpText %}{% trans \"Is the task config locked? Useful for Service providers.\" %}{% endset %}
                                    {{ forms.checkbox(\"TASK_CONFIG_LOCKED_CHECKB\", title, theme.getSetting(\"TASK_CONFIG_LOCKED_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"TASK_CONFIG_LOCKED_CHECKB\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"TRANSITION_CONFIG_LOCKED_CHECKB\") %}
                                    {% set title %}{% trans \"Is the Transition config locked?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Allow modifications to the transition configuration?\" %}{% endset %}
                                    {{ forms.checkbox(\"TRANSITION_CONFIG_LOCKED_CHECKB\", title, theme.getSetting(\"TRANSITION_CONFIG_LOCKED_CHECKB\"), helpText, \"\", \"\", not theme.isSettingEditable(\"TRANSITION_CONFIG_LOCKED_CHECKB\")) }}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">{% trans \"Regional\" %}</h3>

                                {% if theme.isSettingVisible(\"DEFAULT_LANGUAGE\") %}
                                    {% set title %}{% trans \"Default Language\" %}{% endset %}
                                    {% set helpText %}{% trans \"The default language to use\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_LANGUAGE\") %}
                                        {{ forms.dropdown(\"DEFAULT_LANGUAGE\", \"single\", title, theme.getSetting(\"DEFAULT_LANGUAGE\", \"en_GB\"), languages, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_LANGUAGE\", title, theme.getSetting(\"DEFAULT_LANGUAGE\", \"en_GB\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"defaultTimezone\") %}
                                    {% set title %}{% trans \"Timezone\" %}{% endset %}
                                    {% set helpText %}{% trans \"Set the default timezone for the application\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"defaultTimezone\") %}
                                        {{ forms.dropdown(\"defaultTimezone\", \"single\", title, theme.getSetting(\"defaultTimezone\", \"Europe/London\"), timeZones, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"defaultTimezone\", title, theme.getSetting(\"defaultTimezone\", \"Europe/London\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DATE_FORMAT\") %}
                                    {% set title %}{% trans \"Date Format\" %}{% endset %}
                                    {% set manualUrl %}{{ helpService.address(\"advanced_dateFormat.html\") }}{% endset %}
                                    {% set helpText %}{% trans %}The Date Format to use when displaying dates in the CMS. See the <a href=\"{{ manualUrl }}\">Manual</a> for allowed formats.{% endtrans %}{% endset %}

                                    {% if theme.isSettingEditable(\"DATE_FORMAT\") %}
                                        {{ forms.input(\"DATE_FORMAT\", title, theme.getSetting(\"DATE_FORMAT\", \"Y-m-d\"), helpText, \"required\") }}
                                    {% else %}
                                        {{ forms.disabled(\"DATE_FORMAT\", title, theme.getSetting(\"DATE_FORMAT\", \"Y-m-d\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"DETECT_LANGUAGE\") %}
                                    {% set title %}{% trans \"Detect language?\" %}{% endset %}
                                    {% set helpText %}{% trans \"Detect the browser language?\" %}{% endset %}
                                    {{ forms.checkbox(\"DETECT_LANGUAGE\", title, theme.getSetting(\"DETECT_LANGUAGE\"), helpText, \"\", \"\", not theme.isSettingEditable(\"DETECT_LANGUAGE\")) }}
                                {% endif %}

                                {% if theme.isSettingVisible(\"CALENDAR_TYPE\") %}
                                    {% set title %}{% trans \"Calendar Type\" %}{% endset %}
                                    {% set helpText %}{% trans \"Which Calendar Type should the CMS use?\" %}{% endset %}

                                    {% set gregorianOption %}{% trans \"Gregorian\" %}{% endset %}
                                    {% set jalaliOption %}{% trans \"Jalali\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Gregorian\", value: gregorianOption },
                                        { id: \"Jalali\", value: jalaliOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"CALENDAR_TYPE\") %}
                                        {{ forms.dropdown(\"CALENDAR_TYPE\", \"single\", title, theme.getSetting(\"CALENDAR_TYPE\", \"Gregorian\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"CALENDAR_TYPE\", title, theme.getSetting(\"CALENDAR_TYPE\", \"Gregorian\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">{% trans \"Troubleshooting\" %}</h3>

                                {% if theme.isSettingVisible(\"RESTING_LOG_LEVEL\") %}
                                    {% set title %}{% trans \"Resting Log Level\" %}{% endset %}
                                    {% set helpText %}{% trans \"Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \\\"error\\\" is recommended.\" %}{% endset %}

                                    {% set emergencyOption %}{% trans \"Emergency\" %}{% endset %}
                                    {% set alertOption %}{% trans \"Alert\" %}{% endset %}
                                    {% set criticalOption %}{% trans \"Critical\" %}{% endset %}
                                    {% set errorOption %}{% trans \"Error\" %}{% endset %}
                                    {% set options = [
                                        { id: \"emergency\", value: emergencyOption },
                                        { id: \"alert\", value: alertOption },
                                        { id: \"critical\", value: criticalOption },
                                        { id: \"error\", value: errorOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"RESTING_LOG_LEVEL\") %}
                                        {{ forms.dropdown(\"RESTING_LOG_LEVEL\", \"single\", title, theme.getSetting(\"RESTING_LOG_LEVEL\", \"error\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"RESTING_LOG_LEVEL\", title, theme.getSetting(\"RESTING_LOG_LEVEL\", \"error\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"audit\") %}
                                    {% set title %}{% trans \"Log Level\" %}{% endset %}
                                    {% set helpText %}{% trans \"Set the level of logging the CMS should record. In production systems \\\"error\\\" is recommended.\" %}{% endset %}

                                    {% set emergencyOption %}{% trans \"Emergency\" %}{% endset %}
                                    {% set alertOption %}{% trans \"Alert\" %}{% endset %}
                                    {% set criticalOption %}{% trans \"Critical\" %}{% endset %}
                                    {% set errorOption %}{% trans \"Error\" %}{% endset %}
                                    {% set warningOption %}{% trans \"Warning\" %}{% endset %}
                                    {% set noticeOption %}{% trans \"Notice\" %}{% endset %}
                                    {% set infoOption %}{% trans \"Information\" %}{% endset %}
                                    {% set debugOption %}{% trans \"Debug\" %}{% endset %}
                                    {% set options = [
                                        { id: \"emergency\", value: emergencyOption },
                                        { id: \"alert\", value: alertOption },
                                        { id: \"critical\", value: criticalOption },
                                        { id: \"error\", value: errorOption },
                                        { id: \"warning\", value: warningOption },
                                        { id: \"notice\", value: noticeOption },
                                        { id: \"info\", value: infoOption },
                                        { id: \"debug\", value: debugOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"audit\") %}
                                        {{ forms.dropdown(\"audit\", \"single\", title, theme.getSetting(\"audit\", \"error\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"audit\", title, theme.getSetting(\"audit\", \"error\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"ELEVATE_LOG_UNTIL\") %}
                                    {% set title %}{% trans \"Elevate Log Until\" %}{% endset %}
                                    {% set helpText %}{% trans \"Elevate the log level until this date.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"ELEVATE_LOG_UNTIL\") %}
                                        {{ forms.datetime(\"ELEVATE_LOG_UNTIL\", title, elevateLogUntil, helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"ELEVATE_LOG_UNTIL\", title, elevateLogUntil, helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"SERVER_MODE\") %}
                                    {% set title %}{% trans \"Server Mode\" %}{% endset %}
                                    {% set helpText %}{% trans \"This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.\" %}{% endset %}

                                    {% set productionOption %}{% trans \"Production\" %}{% endset %}
                                    {% set testOption %}{% trans \"Test\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Production\", value: productionOption },
                                        { id: \"Test\", value: testOption }
                                    ] %}
                                    {% if theme.isSettingEditable(\"SERVER_MODE\") %}
                                        {{ forms.dropdown(\"SERVER_MODE\", \"single\", title, theme.getSetting(\"SERVER_MODE\", \"Production\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"SERVER_MODE\", title, theme.getSetting(\"SERVER_MODE\", \"Production\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">{% trans \"Users\" %}</h3>

                                {% if theme.isSettingVisible(\"DEFAULT_USERGROUP\") %}
                                    {% set title %}{% trans \"Default User Group\" %}{% endset %}
                                    {% set helpText %}{% trans \"The default User Group for new Users\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"DEFAULT_USERGROUP\") %}
                                        {% set attributes = [
                                            { name: \"data-width\", value: \"100%\" },
                                            { name: \"data-search-url\", value: urlFor(\"group.search\") },
                                            { name: \"data-search-term\", value: \"group\" },
                                            { name: \"data-id-property\", value: \"groupId\" },
                                            { name: \"data-text-property\", value: \"group\" }
                                        ] %}
                                        {{ forms.dropdown(\"DEFAULT_USERGROUP\", \"single\", title, defaultUserGroup.groupId, [defaultUserGroup], \"groupId\", \"group\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                                    {% else %}
                                        {{ forms.disabled(\"DEFAULT_USERGROUP\", title, theme.getSetting(\"DEFAULT_USERGROUP\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"defaultUsertype\") %}
                                    {% set title %}{% trans \"Default User Type\" %}{% endset %}
                                    {% set helpText %}{% trans \"Sets the default user type selected when creating a user. We recommend that this is set to User\" %}{% endset %}

                                    {% set option1 %}{% trans \"User\" %}{% endset %}
                                    {% set option2 %}{% trans \"Group Admin\" %}{% endset %}
                                    {% set option3 %}{% trans \"Super Admin\" %}{% endset %}
                                    {% set options = [
                                        { id: \"User\", value: option1 },
                                        { id: \"Group Admin\", value: option2 },
                                        { id: \"Super Admin\", value: option3 }
                                    ] %}
                                    {% if theme.isSettingEditable(\"defaultUsertype\") %}
                                        {{ forms.dropdown(\"defaultUsertype\", \"single\", title, theme.getSetting(\"defaultUsertype\", \"User\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"defaultUsertype\", title, theme.getSetting(\"defaultUsertype\", \"User\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"USER_PASSWORD_POLICY\") %}
                                    {% set title %}{% trans \"Password Policy Regular Expression\" %}{% endset %}
                                    {% set helpText %}{% trans \"Regular Expression for password complexity, leave blank for no policy.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"USER_PASSWORD_POLICY\") %}
                                        {{ forms.input(\"USER_PASSWORD_POLICY\", title, theme.getSetting(\"USER_PASSWORD_POLICY\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"USER_PASSWORD_POLICY\", title, theme.getSetting(\"USER_PASSWORD_POLICY\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"USER_PASSWORD_ERROR\") %}
                                    {% set title %}{% trans \"Description of Password Policy\" %}{% endset %}
                                    {% set helpText %}{% trans \"A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"USER_PASSWORD_ERROR\") %}
                                        {{ forms.input(\"USER_PASSWORD_ERROR\", title, theme.getSetting(\"USER_PASSWORD_ERROR\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"USER_PASSWORD_ERROR\", title, theme.getSetting(\"USER_PASSWORD_ERROR\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"PASSWORD_REMINDER_ENABLED\") %}
                                    {% set title %}{% trans \"Password Reminder\" %}{% endset %}
                                    {% set helpText %}{% trans \"Enable password reminder on CMS login page? Valid sending email address is required\" %}{% endset %}

                                    {% set option1 %}{% trans \"Off\" %}{% endset %}
                                    {% set option2 %}{% trans \"On except Admin\" %}{% endset %}
                                    {% set option3 %}{% trans \"On\" %}{% endset %}
                                    {% set options = [
                                        { id: \"Off\", value: option1 },
                                        { id: \"On except Admin\", value: option2 },
                                        { id: \"On\", value: option3 }
                                    ] %}
                                    {% if theme.isSettingEditable(\"PASSWORD_REMINDER_ENABLED\") %}
                                        {{ forms.dropdown(\"PASSWORD_REMINDER_ENABLED\", \"single\", title, theme.getSetting(\"PASSWORD_REMINDER_ENABLED\", \"Off\"), options, \"id\", \"value\", helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"PASSWORD_REMINDER_ENABLED\", title, theme.getSetting(\"PASSWORD_REMINDER_ENABLED\", \"Off\"), helpText) }}
                                    {% endif %}
                                {% endif %}

                                {% if theme.isSettingVisible(\"TWOFACTOR_ISSUER\") %}
                                    {% set title %}{% trans \"Two Factor Issuer\" %}{% endset %}
                                    {% set helpText %}{% trans \"Name that should appear as Issuer when two factor authorisation is enabled\" %}{% endset %}

                                    {% if theme.isSettingEditable(\"TWOFACTOR_ISSUER\") %}
                                        {{ forms.input(\"TWOFACTOR_ISSUER\", title, theme.getSetting(\"TWOFACTOR_ISSUER\"), helpText) }}
                                    {% else %}
                                        {{ forms.disabled(\"TWOFACTOR_ISSUER\", title, theme.getSetting(\"TWOFACTOR_ISSUER\"), helpText) }}
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>{% trans \"Save\" %}</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "settings-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\settings-page.twig");
    }
}
