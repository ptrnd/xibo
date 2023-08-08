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

/* datasetticker-form-edit.twig */
class __TwigTemplate_65a24306304b9b019c12ba8302acc91e36f7f8acd8039fbc1f90223885521938 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'extra' => [$this, 'block_extra'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        $context["forms"] = $this->loadTemplate("forms.twig", "datasetticker-form-edit.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("form-base.twig", "datasetticker-form-edit.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_formTitle($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $context["dataSetName"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "getExtra", [], "method"), "dataSet", []), "dataSet", []);
        // line 26
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Edit Ticker: DataSet is %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
    }

    // line 29
    public function block_extra($context, array $blocks = [])
    {
        echo twig_jsonencode_filter($this->getAttribute(($context["module"] ?? null), "getExtra", [], "method"));
    }

    // line 31
    public function block_formHtml($context, array $blocks = [])
    {
        // line 32
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 34
        echo __("General");
        echo "</span></a></li>
            <li><a href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("Configuration");
        echo "</span></a></li>
            <li><a href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("Appearance");
        echo "</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 39
        echo __("Templates");
        echo "<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#templateTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Main");
        echo "</span></a></li>
                    <li><a href=\"#noDataTemplateTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("No Data");
        echo "</span></a></li>
                    <li><a href=\"#optionalStylesheetTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Optional Stylesheet");
        echo "</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Optional JavaScript");
        echo "</span></a></li>
                </ul>
            </li>
            <li><a href=\"#orderCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Order");
        echo "</span></a></li>
            <li><a href=\"#filterCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Filter");
        echo "</span></a></li>
            <li><a href=\"#cachingTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Caching");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"dataSetTickerForm2\" class=\"XiboForm form-horizontal\" data-form-step=\"2\" method=\"put\" action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 56
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "name"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 60
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getUseDuration", [], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 64
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this item should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        echo $context["forms"]->getnumber("duration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getDuration", [], "method"), ($context["helpText"] ?? null), "duration-fields", "required");
        echo "

                        ";
        // line 68
        ob_start();
        echo __("Duration is per item");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start();
        echo __("The duration specified is per item otherwise it is per feed.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        echo $context["forms"]->getcheckbox("durationIsPerItem", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "durationIsPerItem"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 72
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
                        ";
        // line 75
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 79
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 80
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 81
($context["inheritOption"] ?? null)]];
        // line 83
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 87
        ob_start();
        echo __("Show items side by side?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        ob_start();
        echo __("Should items be shown side by side?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        echo $context["forms"]->getcheckbox("itemsSideBySide", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "itemsSideBySide"], "method"), ($context["helpText"] ?? null));
        echo "
                        
                        ";
        // line 91
        ob_start();
        echo __("Lower Row Limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                        ";
        ob_start();
        echo __("Please enter the Lower Row Limit for this DataSet (enter 0 for no limit)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        echo $context["forms"]->getnumber("lowerLimit", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "lowerLimit"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 95
        ob_start();
        echo __("Upper Row Limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        ob_start();
        echo __("Please enter the Upper Row Limit for this DataSet (enter 0 for no limit)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        ";
        echo $context["forms"]->getnumber("upperLimit", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "upperLimit"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 99
        ob_start();
        echo __("Number of Items");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                        ";
        ob_start();
        echo __("The Number of items you want to display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        echo $context["forms"]->getnumber("numItems", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "numItems"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 103
        ob_start();
        echo __("Randomise?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        ob_start();
        echo __("Should the order of the feed be randomised? When enabled each time the Widget is shown the items will be randomly shuffled and displayed in a random order.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                        ";
        echo $context["forms"]->getcheckbox("randomiseItems", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "randomiseItems"], "method"), ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        ";
        // line 109
        ob_start();
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                        ";
        ob_start();
        echo __("The selected effect works best with a background colour. Optionally add one here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        echo $context["forms"]->getinput("backgroundColor", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "backgroundColor"], "method"), ($context["helpText"] ?? null), "background-color-group");
        echo "

                        ";
        // line 113
        ob_start();
        echo __("Effect");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                        ";
        ob_start();
        echo __("Please select the effect that will be used to transition between items. Marquee effects are CPU intensive and may not be suitable for lower power displays.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo "
                        ";
        // line 116
        ob_start();
        echo __("Show all items");
        $context["showAll"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                        ";
        ob_start();
        echo __("Paged");
        $context["showPaged"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                        ";
        ob_start();
        echo __("Marquee Left");
        $context["marqueeLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        ob_start();
        echo __("Marquee Right");
        $context["marqueeRight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        ob_start();
        echo __("Marquee Up");
        $context["marqueeUp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        ob_start();
        echo __("Marquee Down");
        $context["marqueeDown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                        ";
        $context["optionGroups"] = [0 => ["id" => "showAll", "label" =>         // line 123
($context["showAll"] ?? null)], 1 => ["id" => "showPaged", "label" =>         // line 124
($context["showPaged"] ?? null)]];
        // line 126
        echo "
                        ";
        // line 127
        ob_start();
        echo __("No effect - all items are shown");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        $context["showAllOptions"] = [0 => ["effectid" => "none", "effect" =>         // line 129
($context["noneOption"] ?? null)], 1 => ["effectid" => "marqueeLeft", "effect" =>         // line 130
($context["marqueeLeft"] ?? null)], 2 => ["effectid" => "marqueeRight", "effect" =>         // line 131
($context["marqueeRight"] ?? null)], 3 => ["effectid" => "marqueeUp", "effect" =>         // line 132
($context["marqueeUp"] ?? null)], 4 => ["effectid" => "marqueeDown", "effect" =>         // line 133
($context["marqueeDown"] ?? null)]];
        // line 135
        echo "
                        ";
        // line 136
        ob_start();
        echo __("No transition");
        $context["noTransitionOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        ob_start();
        echo __("Fade");
        $context["fade"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        echo "                        ";
        ob_start();
        echo __("Fade Out");
        $context["fadeout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                        ";
        ob_start();
        echo __("Scroll Horizontal");
        $context["scrollHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        ob_start();
        echo __("Scroll Vertical");
        $context["scrollVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                        ";
        ob_start();
        echo __("Flip Horizontal");
        $context["flipHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        echo "                        ";
        ob_start();
        echo __("Flip Vertical");
        $context["flipVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                        ";
        ob_start();
        echo __("Shuffle");
        $context["shuffle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                        ";
        ob_start();
        echo __("Tile Slide");
        $context["tileSlide"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        echo "                        ";
        ob_start();
        echo __("Tile Blind");
        $context["tileBlind"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        echo "                        ";
        $context["showPagedOptions"] = [0 => ["effectid" => "noTransition", "effect" =>         // line 147
($context["noTransitionOption"] ?? null)], 1 => ["effectid" => "fade", "effect" =>         // line 148
($context["fade"] ?? null)], 2 => ["effectid" => "fadeout", "effect" =>         // line 149
($context["fadeout"] ?? null)], 3 => ["effectid" => "scrollHorz", "effect" =>         // line 150
($context["scrollHorz"] ?? null)], 4 => ["effectid" => "scrollVert", "effect" =>         // line 151
($context["scrollVert"] ?? null)], 5 => ["effectid" => "flipHorz", "effect" =>         // line 152
($context["flipHorz"] ?? null)], 6 => ["effectid" => "flipVert", "effect" =>         // line 153
($context["flipVert"] ?? null)], 7 => ["effectid" => "shuffle", "effect" =>         // line 154
($context["shuffle"] ?? null)], 8 => ["effectid" => "tileSlide", "effect" =>         // line 155
($context["tileSlide"] ?? null)], 9 => ["effectid" => "tileBlind", "effect" =>         // line 156
($context["tileBlind"] ?? null)]];
        // line 158
        echo "                        ";
        echo $context["forms"]->getdropdown("effect", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "effect"], "method"), ["showAll" => ($context["showAllOptions"] ?? null), "showPaged" => ($context["showPagedOptions"] ?? null)], "effectid", "effect", ($context["helpText"] ?? null), "l", "", "", "", "", ($context["optionGroups"] ?? null));
        echo "

                        ";
        // line 160
        ob_start();
        echo __("Speed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        ob_start();
        echo __("The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        echo $context["forms"]->getnumber("speed", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "speed", 1 => $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "scrollSpeed"], "method")], "method"), ($context["helpText"] ?? null), "effect-controls");
        echo "

                        ";
        // line 164
        ob_start();
        echo __("Items per page");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        ob_start();
        echo __("If an effect has been selected from the General tab, how many pages should we split the items across? If you don't enter anything here 1 item will be put on each page.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        echo "                        ";
        echo $context["forms"]->getnumber("itemsPerPage", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "itemsPerPage"], "method"), ($context["helpText"] ?? null), "effect-controls");
        echo "

                    </div>


                    <div class=\"tab-pane\" id=\"templateTab\">

                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">";
        // line 174
        echo __("Main Template");
        echo "</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"ta_text_advanced\" name=\"ta_text_advanced\" ";
        // line 175
        if (($this->getAttribute(($context["module"] ?? null), "getOption", [0 => "ta_text_advanced", 1 => 0], "method") == 1)) {
            echo "checked";
        }
        echo " 
                                data-size=\"small\" 
                                data-label-text=\"";
        // line 177
        echo __("Visual editor");
        echo "\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"";
        // line 179
        echo __("On");
        echo "\" 
                                data-off-text=\"";
        // line 180
        echo __("Off");
        echo "\">
                        </div>

                        <div class=\"editor-messages\">
                            ";
        // line 184
        ob_start();
        // line 185
        echo "                                ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                            ";
        $context["simpleTextEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "                            ";
        echo $context["forms"]->getmessage(($context["simpleTextEditorMessage"] ?? null), "ta_text-advanced-editor-hide inline-editor-hide");
        echo "

                            ";
        // line 190
        echo "                            ";
        ob_start();
        // line 191
        echo "                                ";
        echo __("Enter text to display using the inline editor which can be opened by clicking in the preview on the left.");
        // line 192
        echo "                                ";
        echo __("When using the inline editor Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 193
        echo "                            ";
        $context["layoutDesignerMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        echo "                            ";
        echo $context["forms"]->getmessage(($context["layoutDesignerMessage"] ?? null), "layout-designer-message inline-editor-show");
        echo "

                            ";
        // line 197
        echo "                            ";
        ob_start();
        // line 198
        echo "                                ";
        echo __("Enter the text to display. The red rectangle reflects the size of the region you are editing.");
        // line 199
        echo "                                ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 200
        echo "                            ";
        $context["playlistEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        echo "                            ";
        echo $context["forms"]->getmessage(($context["playlistEditorMessage"] ?? null), "playlist-editor-message ta_text-advanced-editor-show");
        echo "
                        </div>

                        <div class=\"ckeditor_controls inline-editor-hide container-fluid\" data-linked-to=\"ta_text\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_snippets_select\">";
        // line 207
        echo __("Snippets");
        echo "</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_snippets_select\" 
                                            class=\"ckeditor_snippets_select form-control\"
                                            data-linked-to=\"ta_text\">
                                            <option value=\"\"></option>

                                            ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["module"] ?? null), "dataSetColumns", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 215
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "heading", []), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "dataSetColumnId", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "heading", []), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_library_select3\">";
        // line 224
        echo __("Library");
        echo "</label>
                                    <div class=\"col-sm-8\">
                                        <select id=\"ckeditor_library_select3\"
                                                class=\"ckeditor_library_select form-control\"
                                                data-linked-to=\"ta_text\"
                                                data-search-url=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\"
                                                data-image-url=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1\">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 237
        echo $context["forms"]->gettextarea("ta_text", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "template"], "method"), "", "inline-editor-hide", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"noDataTemplateTab\">
                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">";
        // line 242
        echo __("No Data Template");
        echo "</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"noDataMessage_advanced\" name=\"noDataMessage_advanced\" ";
        // line 243
        if (($this->getAttribute(($context["module"] ?? null), "getOption", [0 => "noDataMessage_advanced", 1 => 0], "method") == 1)) {
            echo "checked";
        }
        echo " 
                                data-size=\"small\" 
                                data-label-text=\"";
        // line 245
        echo __("Visual editor");
        echo "\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"";
        // line 247
        echo __("On");
        echo "\" 
                                data-off-text=\"";
        // line 248
        echo __("Off");
        echo "\">
                        </div>

                        ";
        // line 251
        ob_start();
        // line 252
        echo "                            ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                        ";
        $context["noDataMessageMessage1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        echo "                        ";
        echo $context["forms"]->getmessage(($context["noDataMessageMessage1"] ?? null), "noDataMessage-advanced-editor-hide");
        echo "

                        ";
        // line 256
        ob_start();
        // line 257
        echo "                            ";
        echo __("Enter the text to display.");
        // line 258
        echo "                            ";
        echo __("The red rectangle reflects the size of the region you are editing.");
        // line 259
        echo "                            ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 260
        echo "                        ";
        $context["noDataMessageMessage2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        echo "                        ";
        echo $context["forms"]->getmessage(($context["noDataMessageMessage2"] ?? null), "noDataMessage-advanced-editor-show");
        echo "

                        ";
        // line 263
        ob_start();
        echo __("A message to display when no data is returned from the source");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 264
        echo "                        ";
        echo $context["forms"]->gettextarea("noDataMessage", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "noDataMessage"], "method"), ($context["helpText"] ?? null), "", "", 5);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"optionalStylesheetTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 269
        echo __("Optional Stylesheet Template");
        echo "</h4>
                        </div>

                        ";
        // line 272
        echo $context["forms"]->gettextarea("ta_css", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "css"], "method"), "", "", "", 10);
        echo "     
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 277
        echo __("Optional JavaScript");
        echo "</h4>
                        </div>

                        ";
        // line 280
        echo $context["forms"]->gettextarea("javaScript", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "javaScript"], "method"), "", "", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"orderCriteria\">

                        ";
        // line 285
        ob_start();
        echo __("The DataSet results can be ordered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated order be required the advanced checkbox can be selected to provide custom SQL syntax.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <div id=\"orderClause\">

                        </div>

                        ";
        // line 292
        ob_start();
        echo __("Use advanced order clause?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 293
        echo "                        ";
        ob_start();
        echo __("Provide a custom clause instead of using the clause builder above.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        echo "                        ";
        echo $context["forms"]->getcheckbox("useOrderingClause", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "useOrderingClause", 1 => 0], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 296
        ob_start();
        echo __("Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 297
        echo "                        ";
        ob_start();
        echo __("Please enter a SQL clause for how this dataset should be ordered");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        echo "                        ";
        echo $context["forms"]->getinput("ordering", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "ordering"], "method"), ($context["helpText"] ?? null), "order-clause-field");
        echo "

                    </div>
                    <div class=\"tab-pane\" id=\"filterCriteria\">
                        ";
        // line 302
        ob_start();
        echo __("The DataSet results can be filtered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated filter be required the advanced checkbox can be selected to provide custom SQL syntax.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 303
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        ";
        // line 305
        ob_start();
        echo __("The substitution [DisplayId] can be used in filter clauses and will be substituted at run time with the Display ID. When shown in the CMS it will be substituted with 0.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 306
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <div id=\"filterClause\">

                        </div>

                        ";
        // line 312
        ob_start();
        echo __("Use advanced filter clause?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 313
        echo "                        ";
        ob_start();
        echo __("Provide a custom clause instead of using the clause builder above.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 314
        echo "                        ";
        echo $context["forms"]->getcheckbox("useFilteringClause", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "useFilteringClause", 1 => 0], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 316
        ob_start();
        echo __("Filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 317
        echo "                        ";
        ob_start();
        echo __("Please enter a SQL clause to filter this DataSet.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 318
        echo "                        ";
        echo $context["forms"]->getinput("filter", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "filter"], "method"), ($context["helpText"] ?? null), "filter-clause-field");
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"cachingTab\">
                        
                        ";
        // line 323
        ob_start();
        echo __("Update Interval (mins)");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        echo "                        ";
        ob_start();
        echo __("Please enter the update interval in minutes. This should be kept as high as possible. For example, if the data will only change once per hour this could be set to 60.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 325
        echo "                        ";
        echo $context["forms"]->getnumber("updateInterval", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "updateInterval", 1 => 5], "method"), ($context["helpText"] ?? null), "", "required");
        echo "

                    </div>
                </div>
                
                <input type=\"hidden\" name=\"step\" value=\"2\" />
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "datasetticker-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 325,  841 => 324,  837 => 323,  828 => 318,  823 => 317,  819 => 316,  813 => 314,  808 => 313,  804 => 312,  794 => 306,  790 => 305,  784 => 303,  780 => 302,  772 => 298,  767 => 297,  763 => 296,  757 => 294,  752 => 293,  748 => 292,  738 => 286,  734 => 285,  726 => 280,  720 => 277,  712 => 272,  706 => 269,  697 => 264,  693 => 263,  687 => 261,  684 => 260,  681 => 259,  678 => 258,  675 => 257,  673 => 256,  667 => 254,  661 => 252,  659 => 251,  653 => 248,  649 => 247,  644 => 245,  637 => 243,  633 => 242,  625 => 237,  615 => 230,  611 => 229,  603 => 224,  594 => 217,  581 => 215,  577 => 214,  567 => 207,  557 => 201,  554 => 200,  551 => 199,  548 => 198,  545 => 197,  539 => 194,  536 => 193,  533 => 192,  530 => 191,  527 => 190,  521 => 187,  515 => 185,  513 => 184,  506 => 180,  502 => 179,  497 => 177,  490 => 175,  486 => 174,  474 => 166,  469 => 165,  465 => 164,  459 => 162,  454 => 161,  450 => 160,  444 => 158,  442 => 156,  441 => 155,  440 => 154,  439 => 153,  438 => 152,  437 => 151,  436 => 150,  435 => 149,  434 => 148,  433 => 147,  431 => 146,  426 => 145,  421 => 144,  416 => 143,  411 => 142,  406 => 141,  401 => 140,  396 => 139,  391 => 138,  386 => 137,  382 => 136,  379 => 135,  377 => 133,  376 => 132,  375 => 131,  374 => 130,  373 => 129,  371 => 128,  367 => 127,  364 => 126,  362 => 124,  361 => 123,  359 => 122,  354 => 121,  349 => 120,  344 => 119,  339 => 118,  334 => 117,  330 => 116,  327 => 115,  322 => 114,  318 => 113,  312 => 111,  307 => 110,  303 => 109,  295 => 105,  290 => 104,  286 => 103,  280 => 101,  275 => 100,  271 => 99,  265 => 97,  260 => 96,  256 => 95,  250 => 93,  245 => 92,  241 => 91,  235 => 89,  230 => 88,  226 => 87,  218 => 83,  216 => 81,  215 => 80,  214 => 79,  212 => 78,  207 => 77,  202 => 76,  198 => 75,  195 => 74,  190 => 73,  186 => 72,  180 => 70,  175 => 69,  171 => 68,  165 => 66,  160 => 65,  156 => 64,  150 => 62,  145 => 61,  141 => 60,  135 => 58,  130 => 57,  126 => 56,  120 => 53,  114 => 50,  110 => 49,  106 => 48,  100 => 45,  96 => 44,  92 => 43,  88 => 42,  82 => 39,  76 => 36,  72 => 35,  68 => 34,  64 => 32,  61 => 31,  55 => 29,  50 => 26,  47 => 25,  44 => 24,  39 => 21,  37 => 22,  31 => 21,);
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
 * Copyright (C) 2015-2020 Xibo Signage Ltd
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
{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% set dataSetName = module.getExtra().dataSet.dataSet %}
    {% trans %}Edit Ticker: DataSet is {{ dataSetName }}{% endtrans %}
{% endblock %}

{% block extra %}{{ module.getExtra()|json_encode|raw }}{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
            <li><a href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Configuration\" %}</span></a></li>
            <li><a href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Appearance\" %}</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% trans \"Templates\" %}<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#templateTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Main\" %}</span></a></li>
                    <li><a href=\"#noDataTemplateTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"No Data\" %}</span></a></li>
                    <li><a href=\"#optionalStylesheetTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Optional Stylesheet\" %}</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Optional JavaScript\" %}</span></a></li>
                </ul>
            </li>
            <li><a href=\"#orderCriteria\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Order\" %}</span></a></li>
            <li><a href=\"#filterCriteria\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Filter\" %}</span></a></li>
            <li><a href=\"#cachingTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Caching\" %}</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"dataSetTickerForm2\" class=\"XiboForm form-horizontal\" data-form-step=\"2\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional name for this widget\" %}{% endset %}
                        {{ forms.input(\"name\", title, module.getOption(\"name\"), helpText) }}

                        {% set title %}{% trans \"Set a duration?\" %}{% endset %}
                        {% set helpText %}{% trans \"Select to provide a specific duration for this Widget\" %}{% endset %}
                        {{ forms.checkbox(\"useDuration\", title, module.getUseDuration(), helpText) }}

                        {% set title %}{% trans \"Duration\" %}{% endset %}
                        {% set helpText %}{% trans \"The duration in seconds this item should be displayed\" %}{% endset %}
                        {{ forms.number(\"duration\", title, module.getDuration(), helpText, \"duration-fields\", \"required\") }}

                        {% set title %}{% trans \"Duration is per item\" %}{% endset %}
                        {% set helpText %}{% trans \"The duration specified is per item otherwise it is per feed.\" %}{% endset %}
                        {{ forms.checkbox(\"durationIsPerItem\", title, module.getOption(\"durationIsPerItem\"), helpText) }}

                        {% set title %}{% trans \"Enable Stats Collection?\" %}{% endset %}
                        {% set helpText %}{% trans \"Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.\" %}{% endset %}

                        {% set offOption %}{% trans \"Off\" %}{% endset %}
                        {% set onOption %}{% trans \"On\" %}{% endset %}
                        {% set inheritOption %}{% trans \"Inherit\" %}{% endset %}
                        {% set options = [
                            { id: \"Off\", value: offOption },
                            { id: \"On\", value: onOption },
                            { id: \"Inherit\", value: inheritOption }
                        ] %}
                        {{ forms.dropdown(\"enableStat\", \"single\", title, module.getOption(\"enableStat\", theme.getSetting(\"WIDGET_STATS_ENABLED_DEFAULT\")), options, \"id\", \"value\", helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        {% set title %}{% trans \"Show items side by side?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should items be shown side by side?\" %}{% endset %}
                        {{ forms.checkbox(\"itemsSideBySide\", title, module.getOption(\"itemsSideBySide\"), helpText) }}
                        
                        {% set title %}{% trans \"Lower Row Limit\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the Lower Row Limit for this DataSet (enter 0 for no limit)\" %}{% endset %}
                        {{ forms.number(\"lowerLimit\", title, module.getOption(\"lowerLimit\"), helpText) }}

                        {% set title %}{% trans \"Upper Row Limit\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the Upper Row Limit for this DataSet (enter 0 for no limit)\" %}{% endset %}
                        {{ forms.number(\"upperLimit\", title, module.getOption(\"upperLimit\"), helpText) }}

                        {% set title %}{% trans \"Number of Items\" %}{% endset %}
                        {% set helpText %}{% trans \"The Number of items you want to display\" %}{% endset %}
                        {{ forms.number(\"numItems\", title, module.getOption(\"numItems\"), helpText) }}

                        {% set title %}{% trans \"Randomise?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should the order of the feed be randomised? When enabled each time the Widget is shown the items will be randomly shuffled and displayed in a random order.\" %}{% endset %}
                        {{ forms.checkbox(\"randomiseItems\", title, module.getOption(\"randomiseItems\"), helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        {% set title %}{% trans \"Background Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"The selected effect works best with a background colour. Optionally add one here.\" %}{% endset %}
                        {{ forms.input(\"backgroundColor\", title, module.getOption(\"backgroundColor\"), helpText, \"background-color-group\") }}

                        {% set title %}{% trans \"Effect\" %}{% endset %}
                        {% set helpText %}{% trans \"Please select the effect that will be used to transition between items. Marquee effects are CPU intensive and may not be suitable for lower power displays.\" %}{% endset %}

                        {% set showAll %}{% trans \"Show all items\" %}{% endset %}
                        {% set showPaged %}{% trans \"Paged\" %}{% endset %}
                        {% set marqueeLeft %}{% trans \"Marquee Left\" %}{% endset %}
                        {% set marqueeRight %}{% trans \"Marquee Right\" %}{% endset %}
                        {% set marqueeUp %}{% trans \"Marquee Up\" %}{% endset %}
                        {% set marqueeDown %}{% trans \"Marquee Down\" %}{% endset %}
                        {% set optionGroups = [
                            {id: \"showAll\", label: showAll},
                            {id: \"showPaged\", label: showPaged}
                        ] %}

                        {% set noneOption %}{% trans \"No effect - all items are shown\" %}{% endset %}
                        {% set showAllOptions = [
                            { effectid: \"none\", effect: noneOption },
                            { effectid: \"marqueeLeft\", effect: marqueeLeft},
                            { effectid: \"marqueeRight\", effect: marqueeRight},
                            { effectid: \"marqueeUp\", effect: marqueeUp},
                            { effectid: \"marqueeDown\", effect: marqueeDown}
                        ] %}

                        {% set noTransitionOption %}{% trans \"No transition\" %}{% endset %}
                        {% set fade %}{% trans \"Fade\" %}{% endset %}
                        {% set fadeout %}{% trans \"Fade Out\" %}{% endset %}
                        {% set scrollHorz %}{% trans \"Scroll Horizontal\" %}{% endset %}
                        {% set scrollVert %}{% trans \"Scroll Vertical\" %}{% endset %}
                        {% set flipHorz %}{% trans \"Flip Horizontal\" %}{% endset %}
                        {% set flipVert %}{% trans \"Flip Vertical\" %}{% endset %}
                        {% set shuffle %}{% trans \"Shuffle\" %}{% endset %}
                        {% set tileSlide %}{% trans \"Tile Slide\" %}{% endset %}
                        {% set tileBlind %}{% trans \"Tile Blind\" %}{% endset %}
                        {% set showPagedOptions = [
                            { effectid: \"noTransition\", effect: noTransitionOption },
                            { effectid: \"fade\", effect: fade },
                            { effectid: \"fadeout\", effect: fadeout},
                            { effectid: \"scrollHorz\", effect: scrollHorz},
                            { effectid: \"scrollVert\", effect: scrollVert},
                            { effectid: \"flipHorz\", effect: flipHorz},
                            { effectid: \"flipVert\", effect: flipVert},
                            { effectid: \"shuffle\", effect: shuffle},
                            { effectid: \"tileSlide\", effect: tileSlide},
                            { effectid: \"tileBlind\", effect: tileBlind}
                        ] %}
                        {{ forms.dropdown(\"effect\", \"single\", title, module.getOption(\"effect\"), {showAll: showAllOptions, showPaged: showPagedOptions}, \"effectid\", \"effect\", helpText, \"l\", \"\", \"\", \"\", \"\", optionGroups) }}

                        {% set title %}{% trans \"Speed\" %}{% endset %}
                        {% set helpText %}{% trans \"The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).\" %}{% endset %}
                        {{ forms.number(\"speed\", title, module.getOption(\"speed\", module.getOption(\"scrollSpeed\")), helpText, \"effect-controls\") }}

                        {% set title %}{% trans \"Items per page\" %}{% endset %}
                        {% set helpText %}{% trans \"If an effect has been selected from the General tab, how many pages should we split the items across? If you don't enter anything here 1 item will be put on each page.\" %}{% endset %}
                        {{ forms.number(\"itemsPerPage\", title, module.getOption(\"itemsPerPage\"), helpText, \"effect-controls\") }}

                    </div>


                    <div class=\"tab-pane\" id=\"templateTab\">

                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">{% trans \"Main Template\" %}</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"ta_text_advanced\" name=\"ta_text_advanced\" {% if module.getOption(\"ta_text_advanced\", 0) == 1 %}checked{% endif %} 
                                data-size=\"small\" 
                                data-label-text=\"{% trans \"Visual editor\" %}\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"{% trans \"On\" %}\" 
                                data-off-text=\"{% trans \"Off\" %}\">
                        </div>

                        <div class=\"editor-messages\">
                            {% set simpleTextEditorMessage %}
                                {% trans \"Enter text or HTML in the box below.\" %}<br>
                            {% endset %}
                            {{ forms.message(simpleTextEditorMessage, 'ta_text-advanced-editor-hide inline-editor-hide') }}

                            {# Layout Designer messages #}
                            {% set layoutDesignerMessage %}
                                {% trans \"Enter text to display using the inline editor which can be opened by clicking in the preview on the left.\" %}
                                {% trans \"When using the inline editor Shift+Enter will drop a single line. Enter alone starts a new paragraph.\" %}
                            {% endset %}
                            {{ forms.message(layoutDesignerMessage, 'layout-designer-message inline-editor-show') }}

                            {# Playlist Editor messages #}
                            {% set playlistEditorMessage %}
                                {% trans \"Enter the text to display. The red rectangle reflects the size of the region you are editing.\" %}
                                {% trans \"Shift+Enter will drop a single line. Enter alone starts a new paragraph.\" %}
                            {% endset %}
                            {{ forms.message(playlistEditorMessage, 'playlist-editor-message ta_text-advanced-editor-show') }}
                        </div>

                        <div class=\"ckeditor_controls inline-editor-hide container-fluid\" data-linked-to=\"ta_text\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_snippets_select\">{% trans \"Snippets\" %}</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_snippets_select\" 
                                            class=\"ckeditor_snippets_select form-control\"
                                            data-linked-to=\"ta_text\">
                                            <option value=\"\"></option>

                                            {% for column in module.dataSetColumns() %}
                                                <option value=\"{{ column.heading }}|{{ column.dataSetColumnId }}\">{{ column.heading }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_library_select3\">{% trans \"Library\" %}</label>
                                    <div class=\"col-sm-8\">
                                        <select id=\"ckeditor_library_select3\"
                                                class=\"ckeditor_library_select form-control\"
                                                data-linked-to=\"ta_text\"
                                                data-search-url=\"{{ urlFor(\"library.search\") }}\"
                                                data-image-url=\"{{ urlFor(\"library.download\") }}?preview=1\">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{ forms.textarea(\"ta_text\", \"\", module.getRawNode(\"template\"), \"\", \"inline-editor-hide\", \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"noDataTemplateTab\">
                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">{% trans \"No Data Template\" %}</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"noDataMessage_advanced\" name=\"noDataMessage_advanced\" {% if module.getOption(\"noDataMessage_advanced\", 0) == 1 %}checked{% endif %} 
                                data-size=\"small\" 
                                data-label-text=\"{% trans \"Visual editor\" %}\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"{% trans \"On\" %}\" 
                                data-off-text=\"{% trans \"Off\" %}\">
                        </div>

                        {% set noDataMessageMessage1 %}
                            {% trans \"Enter text or HTML in the box below.\" %}<br>
                        {% endset %}
                        {{ forms.message(noDataMessageMessage1, 'noDataMessage-advanced-editor-hide') }}

                        {% set noDataMessageMessage2 %}
                            {% trans \"Enter the text to display.\" %}
                            {% trans \"The red rectangle reflects the size of the region you are editing.\" %}
                            {% trans \"Shift+Enter will drop a single line. Enter alone starts a new paragraph.\" %}
                        {% endset %}
                        {{ forms.message(noDataMessageMessage2, 'noDataMessage-advanced-editor-show') }}

                        {% set helpText %}{% trans \"A message to display when no data is returned from the source\" %}{% endset %}
                        {{ forms.textarea(\"noDataMessage\", \"\", module.getRawNode(\"noDataMessage\"), helpText, \"\", \"\", 5) }}
                    </div>

                    <div class=\"tab-pane\" id=\"optionalStylesheetTab\">
                        <div class=\"form-content-title\">
                            <h4>{% trans \"Optional Stylesheet Template\" %}</h4>
                        </div>

                        {{ forms.textarea(\"ta_css\", \"\", module.getRawNode(\"css\"), \"\", \"\", \"\", 10) }}     
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>{% trans \"Optional JavaScript\" %}</h4>
                        </div>

                        {{ forms.textarea(\"javaScript\", \"\", module.getRawNode(\"javaScript\"), \"\", \"\", \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"orderCriteria\">

                        {% set message %}{% trans \"The DataSet results can be ordered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated order be required the advanced checkbox can be selected to provide custom SQL syntax.\" %}{% endset %}
                        {{ forms.message(message) }}

                        <div id=\"orderClause\">

                        </div>

                        {% set title %}{% trans \"Use advanced order clause?\" %}{% endset %}
                        {% set helpText %}{% trans \"Provide a custom clause instead of using the clause builder above.\" %}{% endset %}
                        {{ forms.checkbox(\"useOrderingClause\", title, module.getOption(\"useOrderingClause\", 0), helpText) }}

                        {% set title %}{% trans \"Order\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter a SQL clause for how this dataset should be ordered\" %}{% endset %}
                        {{ forms.input(\"ordering\", title, module.getOption(\"ordering\"), helpText, \"order-clause-field\") }}

                    </div>
                    <div class=\"tab-pane\" id=\"filterCriteria\">
                        {% set message %}{% trans \"The DataSet results can be filtered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated filter be required the advanced checkbox can be selected to provide custom SQL syntax.\" %}{% endset %}
                        {{ forms.message(message) }}

                        {% set message %}{% trans \"The substitution [DisplayId] can be used in filter clauses and will be substituted at run time with the Display ID. When shown in the CMS it will be substituted with 0.\" %}{% endset %}
                        {{ forms.message(message) }}

                        <div id=\"filterClause\">

                        </div>

                        {% set title %}{% trans \"Use advanced filter clause?\" %}{% endset %}
                        {% set helpText %}{% trans \"Provide a custom clause instead of using the clause builder above.\" %}{% endset %}
                        {{ forms.checkbox(\"useFilteringClause\", title, module.getOption(\"useFilteringClause\", 0), helpText) }}

                        {% set title %}{% trans \"Filter\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter a SQL clause to filter this DataSet.\" %}{% endset %}
                        {{ forms.input(\"filter\", title, module.getOption(\"filter\"), helpText, \"filter-clause-field\") }}
                    </div>

                    <div class=\"tab-pane\" id=\"cachingTab\">
                        
                        {% set title %}{% trans \"Update Interval (mins)\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the update interval in minutes. This should be kept as high as possible. For example, if the data will only change once per hour this could be set to 60.\" %}{% endset %}
                        {{ forms.number(\"updateInterval\", title, module.getOption(\"updateInterval\", 5), helpText, \"\", \"required\") }}

                    </div>
                </div>
                
                <input type=\"hidden\" name=\"step\" value=\"2\" />
            </form>
        </div>
    </div>
{% endblock %}", "datasetticker-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetticker-form-edit.twig");
    }
}
