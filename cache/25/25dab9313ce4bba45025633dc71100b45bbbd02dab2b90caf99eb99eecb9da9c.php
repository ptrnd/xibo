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

/* datasetview-form-edit.twig */
class __TwigTemplate_0e8efbdf950a3785bb29b8d3afc23563293b2b7eb0cd5aa6d383c7442c1b2f5b extends \Twig\Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["forms"] = $this->loadTemplate("forms.twig", "datasetview-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "datasetview-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $context["dataSetName"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "getExtra", [], "method"), "dataSet", []), "dataSet", []);
        // line 28
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Edit DataSet View: DataSet is %dataSetName%"), array("%dataSetName%" => ($context["dataSetName"] ?? null), ));
    }

    // line 31
    public function block_extra($context, array $blocks = [])
    {
        echo twig_jsonencode_filter($this->getAttribute(($context["module"] ?? null), "getExtra", [], "method"));
    }

    // line 33
    public function block_formHtml($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("General");
        echo "</span></a></li>
            <li><a href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 37
        echo __("Configuration");
        echo "</span></a></li>
            <li><a href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 38
        echo __("Appearance");
        echo "</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 41
        echo __("Templates");
        echo "<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li class=\"template-override-controls\"><a href=\"#optionalStylesheetTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Optional Stylesheet");
        echo "</span></a></li>
                    <li><a href=\"#noDataTemplateTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("No Data");
        echo "</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Optional JavaScript");
        echo "</span></a></li>
                </ul>
            </li>
            <li><a href=\"#orderCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Order");
        echo "</span></a></li>
            <li><a href=\"#filterCriteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Filter");
        echo "</span></a></li>
            <li><a href=\"#cachingTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 51
        echo __("Caching");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"dataSetViewEditForm2\" class=\"XiboForm form-horizontal\" data-form-step=\"2\" method=\"put\" action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 57
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "name"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 61
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getUseDuration", [], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 65
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this item should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        echo $context["forms"]->getnumber("duration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getDuration", [], "method"), ($context["helpText"] ?? null), "duration-fields", "required");
        echo "

                        ";
        // line 69
        ob_start();
        echo __("Duration is per page");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        ob_start();
        echo __("The duration specified is per page otherwise it is overall Widget duration.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        echo $context["forms"]->getcheckbox("durationIsPerPage", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "durationIsPerPage"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 73
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
                        ";
        // line 76
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 80
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 81
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 82
($context["inheritOption"] ?? null)]];
        // line 84
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 88
        ob_start();
        echo __("Below you can select the columns to be shown in the table - drag and drop to reorder and to move between lists.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"connectedlist col-sm-6\">
                                    <p class=\"text-info\">";
        // line 94
        echo __("Columns Selected");
        echo "</p>
                                    <ul id=\"columnsIn\" class=\"connectedSortable\">
                                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["module"] ?? null), "dataSetColumnsSelected", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 97
            echo "                                            <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "dataSetColumnId", []), "html", null, true);
            echo "\" class=\"li-sortable\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "heading", []), "html", null, true);
            echo "</li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </ul>
                                </div>
                                <div class=\"connectedlist col-sm-6\">
                                    <p class=\"text-info\">";
        // line 102
        echo __("Columns Available");
        echo "</p>
                                    <ul id=\"columnsOut\" class=\"connectedSortable\">
                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["module"] ?? null), "dataSetColumnsNotSelected", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 105
            echo "                                            <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "dataSetColumnId", []), "html", null, true);
            echo "\" class=\"li-sortable\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "heading", []), "html", null, true);
            echo "</li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                    </ul>
                                </div>
                            </div>
                        </div>

                        ";
        // line 112
        ob_start();
        echo __("Show the table headings?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "                        ";
        ob_start();
        echo __("Should the Table headings be shown?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                        ";
        echo $context["forms"]->getcheckbox("showHeadings", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "showHeadings"], "method"), ($context["helpText"] ?? null));
        echo "
                        
                        ";
        // line 116
        ob_start();
        echo __("Lower Row Limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                        ";
        ob_start();
        echo __("Please enter the Lower Row Limit for this DataSet (enter 0 for no limit)')");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                        ";
        echo $context["forms"]->getnumber("lowerLimit", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "lowerLimit"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 120
        ob_start();
        echo __("Upper Row Limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        ob_start();
        echo __("Please enter the Upper Row Limit for this DataSet (enter 0 for no limit)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                        ";
        echo $context["forms"]->getnumber("upperLimit", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "upperLimit"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 124
        ob_start();
        echo __("Rows per page");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                        ";
        ob_start();
        echo __("Please enter the number of rows per page. 0 for no pages.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                        ";
        echo $context["forms"]->getnumber("rowsPerPage", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "rowsPerPage"], "method"), ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">

                        ";
        // line 131
        ob_start();
        echo __("Template");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start();
        echo __("Select the template you would like to apply. This can be overridden using the check box below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo $context["forms"]->getdropdown("templateId", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "templateId"], "method"), $this->getAttribute(($context["module"] ?? null), "templatesAvailable", [], "method"), "id", "value", ($context["helpText"] ?? null), "template-selector-control");
        echo "

                        ";
        // line 135
        ob_start();
        echo __("Override the template?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start();
        echo __("Tick if you would like to override the template.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        echo $context["forms"]->getcheckbox("overrideTemplate", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "overrideTemplate", 1 => "1"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 139
        ob_start();
        // line 140
        echo "                           ";
        echo __("With Override the Template selected enter your own text, html and css by using the Templates drop down menu in the tab header above.");
        echo "                     
                        ";
        $context["useTemplatesMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        echo "                        ";
        echo $context["forms"]->getmessage(($context["useTemplatesMessage"] ?? null), "template-override-controls");
        echo "

                        ";
        // line 144
        ob_start();
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        echo "                        ";
        ob_start();
        echo __("Use the colour picker to select the background colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        echo "                        ";
        echo $context["forms"]->getinput("backgroundColor", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "backgroundColor"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 148
        ob_start();
        echo __("Border Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        echo "                        ";
        ob_start();
        echo __("Use the colour picker to select the border colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                        ";
        echo $context["forms"]->getinput("borderColor", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "borderColor"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 152
        ob_start();
        echo __("Font Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        echo "                        ";
        ob_start();
        echo __("Use the colour picker to select the font colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        echo "                        ";
        echo $context["forms"]->getinput("fontColor", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "fontColor"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 156
        ob_start();
        echo __("Font");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                        ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.list")], 1 => ["name" => "data-value", "value" => $this->getAttribute(        // line 159
($context["module"] ?? null), "getOption", [0 => "fontFamily"], "method")]];
        // line 161
        echo "                        ";
        ob_start();
        echo __("Select a custom font - leave empty to use the default font.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        echo $context["forms"]->getdropdown("fontFamily", "single", ($context["title"] ?? null), "", [0 => ["id" => "", "value" => ""]], "id", "value", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null));
        echo "

                        ";
        // line 164
        ob_start();
        echo __("Font Size");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        ob_start();
        echo __("Set the font size");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        echo "                        ";
        echo $context["forms"]->getnumber("fontSize", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "fontSize"], "method"), ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"noDataTemplateTab\">
                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">";
        // line 171
        echo __("No Data Template");
        echo "</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"noDataMessage_advanced\" name=\"noDataMessage_advanced\" ";
        // line 172
        if (($this->getAttribute(($context["module"] ?? null), "getOption", [0 => "noDataMessage_advanced", 1 => 0], "method") == 1)) {
            echo "checked";
        }
        echo " 
                                data-size=\"small\" 
                                data-label-text=\"";
        // line 174
        echo __("Visual editor");
        echo "\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"";
        // line 176
        echo __("On");
        echo "\" 
                                data-off-text=\"";
        // line 177
        echo __("Off");
        echo "\">
                        </div>
                        
                        ";
        // line 180
        ob_start();
        // line 181
        echo "                            ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                        ";
        $context["noDataMessageMessage1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        echo "                        ";
        echo $context["forms"]->getmessage(($context["noDataMessageMessage1"] ?? null), "noDataMessage-advanced-editor-hide");
        echo "

                        ";
        // line 185
        ob_start();
        // line 186
        echo "                            ";
        echo __("Enter the text to display.");
        // line 187
        echo "                            ";
        echo __("The red rectangle reflects the size of the region you are editing.");
        // line 188
        echo "                            ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 189
        echo "                        ";
        $context["noDataMessageMessage2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "                        ";
        echo $context["forms"]->getmessage(($context["noDataMessageMessage2"] ?? null), "noDataMessage-advanced-editor-show");
        echo "

                        ";
        // line 192
        ob_start();
        echo __("A message to display when no data is returned from the source");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        echo "                        ";
        echo $context["forms"]->gettextarea("noDataMessage", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "noDataMessage"], "method"), ($context["helpText"] ?? null), "", "", 5);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"optionalStylesheetTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 198
        echo __("Optional Stylesheet Template");
        echo "</h4>
                        </div>

                        ";
        // line 201
        ob_start();
        echo __("Enter a style sheet for the table");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        echo "                        ";
        echo $context["forms"]->gettextarea("styleSheet", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "styleSheet", 1 => $this->getAttribute(($context["module"] ?? null), "defaultStyleSheet", [], "method")], "method"), ($context["title"] ?? null), "template-override-controls", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 207
        echo __("Optional JavaScript");
        echo "</h4>
                        </div>

                        ";
        // line 210
        echo $context["forms"]->gettextarea("javaScript", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "javaScript"], "method"), "", "", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"orderCriteria\">

                        ";
        // line 215
        ob_start();
        echo __("The DataSet results can be ordered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated order be required the advanced checkbox can be selected to provide custom SQL syntax.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 216
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <div id=\"orderClause\">

                        </div>

                        ";
        // line 222
        ob_start();
        echo __("Use advanced order clause?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 223
        echo "                        ";
        ob_start();
        echo __("Provide a custom clause instead of using the clause builder above.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        echo "                        ";
        echo $context["forms"]->getcheckbox("useOrderingClause", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "useOrderingClause", 1 => 0], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 226
        ob_start();
        echo __("Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        echo "                        ";
        ob_start();
        echo __("Please enter a SQL clause for how this dataset should be ordered");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        echo "                        ";
        echo $context["forms"]->getinput("ordering", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "ordering"], "method"), ($context["helpText"] ?? null), "order-clause-field");
        echo "

                    </div>

                    <div class=\"tab-pane\" id=\"filterCriteria\">
                        ";
        // line 233
        ob_start();
        echo __("The DataSet results can be filtered by any column and set below. New fields can be added by selecting the plus icon at the end of the current row. Should a more complicated filter be required the advanced checkbox can be selected to provide custom SQL syntax.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 234
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        ";
        // line 236
        ob_start();
        echo __("The substitution [DisplayId] can be used in filter clauses and will be substituted at run time with the Display ID. When shown in the CMS it will be substituted with 0.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                        <div id=\"filterClause\">

                        </div>

                        ";
        // line 243
        ob_start();
        echo __("Use advanced filter clause?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        echo "                        ";
        ob_start();
        echo __("Provide a custom clause instead of using the clause builder above.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 245
        echo "                        ";
        echo $context["forms"]->getcheckbox("useFilteringClause", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "useFilteringClause", 1 => 0], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 247
        ob_start();
        echo __("Filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 248
        echo "                        ";
        ob_start();
        echo __("Please enter a SQL clause to filter this DataSet.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 249
        echo "                        ";
        echo $context["forms"]->getinput("filter", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "filter"], "method"), ($context["helpText"] ?? null), "filter-clause-field");
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"cachingTab\">
                        ";
        // line 253
        ob_start();
        echo __("Update Interval (mins)");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        echo "                        ";
        ob_start();
        echo __("Please enter the update interval in minutes. This should be kept as high as possible. For example, if the data will only change once per day this could be set to 60.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
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
        return "datasetview-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 255,  689 => 254,  685 => 253,  677 => 249,  672 => 248,  668 => 247,  662 => 245,  657 => 244,  653 => 243,  643 => 237,  639 => 236,  633 => 234,  629 => 233,  620 => 228,  615 => 227,  611 => 226,  605 => 224,  600 => 223,  596 => 222,  586 => 216,  582 => 215,  574 => 210,  568 => 207,  559 => 202,  555 => 201,  549 => 198,  540 => 193,  536 => 192,  530 => 190,  527 => 189,  524 => 188,  521 => 187,  518 => 186,  516 => 185,  510 => 183,  504 => 181,  502 => 180,  496 => 177,  492 => 176,  487 => 174,  480 => 172,  476 => 171,  467 => 166,  462 => 165,  458 => 164,  452 => 162,  447 => 161,  445 => 159,  443 => 157,  439 => 156,  433 => 154,  428 => 153,  424 => 152,  418 => 150,  413 => 149,  409 => 148,  403 => 146,  398 => 145,  394 => 144,  388 => 142,  382 => 140,  380 => 139,  374 => 137,  369 => 136,  365 => 135,  359 => 133,  354 => 132,  350 => 131,  341 => 126,  336 => 125,  332 => 124,  326 => 122,  321 => 121,  317 => 120,  311 => 118,  306 => 117,  302 => 116,  296 => 114,  291 => 113,  287 => 112,  280 => 107,  269 => 105,  265 => 104,  260 => 102,  255 => 99,  244 => 97,  240 => 96,  235 => 94,  226 => 89,  222 => 88,  214 => 84,  212 => 82,  211 => 81,  210 => 80,  208 => 79,  203 => 78,  198 => 77,  194 => 76,  191 => 75,  186 => 74,  182 => 73,  176 => 71,  171 => 70,  167 => 69,  161 => 67,  156 => 66,  152 => 65,  146 => 63,  141 => 62,  137 => 61,  131 => 59,  126 => 58,  122 => 57,  116 => 54,  110 => 51,  106 => 50,  102 => 49,  96 => 46,  92 => 45,  88 => 44,  82 => 41,  76 => 38,  72 => 37,  68 => 36,  64 => 34,  61 => 33,  55 => 31,  50 => 28,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
 * Xibo - Digital Signage - https://www.xibo.org.uk
 * Copyright (C) 2012-2020 Xibo Signage Ltd
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
    {% set dataSetName = module.getExtra().dataSet.dataSet %}
    {% trans %}Edit DataSet View: DataSet is {{ dataSetName }}{% endtrans %}
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
                    <li class=\"template-override-controls\"><a href=\"#optionalStylesheetTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Optional Stylesheet\" %}</span></a></li>
                    <li><a href=\"#noDataTemplateTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"No Data\" %}</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Optional JavaScript\" %}</span></a></li>
                </ul>
            </li>
            <li><a href=\"#orderCriteria\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Order\" %}</span></a></li>
            <li><a href=\"#filterCriteria\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Filter\" %}</span></a></li>
            <li><a href=\"#cachingTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Caching\" %}</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"dataSetViewEditForm2\" class=\"XiboForm form-horizontal\" data-form-step=\"2\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\">
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

                        {% set title %}{% trans \"Duration is per page\" %}{% endset %}
                        {% set helpText %}{% trans \"The duration specified is per page otherwise it is overall Widget duration.\" %}{% endset %}
                        {{ forms.checkbox(\"durationIsPerPage\", title, module.getOption(\"durationIsPerPage\"), helpText) }}

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
                        {% set message %}{% trans \"Below you can select the columns to be shown in the table - drag and drop to reorder and to move between lists.\" %}{% endset %}
                        {{ forms.message(message) }}

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"connectedlist col-sm-6\">
                                    <p class=\"text-info\">{% trans \"Columns Selected\" %}</p>
                                    <ul id=\"columnsIn\" class=\"connectedSortable\">
                                        {% for column in module.dataSetColumnsSelected() %}
                                            <li id=\"{{ column.dataSetColumnId }}\" class=\"li-sortable\">{{ column.heading }}</li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <div class=\"connectedlist col-sm-6\">
                                    <p class=\"text-info\">{% trans \"Columns Available\" %}</p>
                                    <ul id=\"columnsOut\" class=\"connectedSortable\">
                                        {% for column in module.dataSetColumnsNotSelected() %}
                                            <li id=\"{{ column.dataSetColumnId }}\" class=\"li-sortable\">{{ column.heading }}</li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {% set title %}{% trans \"Show the table headings?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should the Table headings be shown?\" %}{% endset %}
                        {{ forms.checkbox(\"showHeadings\", title, module.getOption(\"showHeadings\"), helpText) }}
                        
                        {% set title %}{% trans \"Lower Row Limit\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the Lower Row Limit for this DataSet (enter 0 for no limit)')\" %}{% endset %}
                        {{ forms.number(\"lowerLimit\", title, module.getOption(\"lowerLimit\"), helpText) }}

                        {% set title %}{% trans \"Upper Row Limit\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the Upper Row Limit for this DataSet (enter 0 for no limit)\" %}{% endset %}
                        {{ forms.number(\"upperLimit\", title, module.getOption(\"upperLimit\"), helpText ) }}

                        {% set title %}{% trans \"Rows per page\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the number of rows per page. 0 for no pages.\" %}{% endset %}
                        {{ forms.number(\"rowsPerPage\", title, module.getOption(\"rowsPerPage\"), helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">

                        {% set title %}{% trans \"Template\" %}{% endset %}
                        {% set helpText %}{% trans \"Select the template you would like to apply. This can be overridden using the check box below.\" %}{% endset %}
                        {{ forms.dropdown(\"templateId\", \"single\", title, module.getOption(\"templateId\"), module.templatesAvailable(), \"id\", \"value\", helpText, \"template-selector-control\") }}

                        {% set title %}{% trans \"Override the template?\" %}{% endset %}
                        {% set helpText %}{% trans \"Tick if you would like to override the template.\" %}{% endset %}
                        {{ forms.checkbox(\"overrideTemplate\", title, module.getOption(\"overrideTemplate\", \"1\"), helpText) }}

                        {% set useTemplatesMessage %}
                           {% trans \"With Override the Template selected enter your own text, html and css by using the Templates drop down menu in the tab header above.\" %}                     
                        {% endset %}
                        {{ forms.message(useTemplatesMessage, 'template-override-controls') }}

                        {% set title %}{% trans \"Background Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"Use the colour picker to select the background colour\" %}{% endset %}
                        {{ forms.input(\"backgroundColor\", title, module.getOption(\"backgroundColor\"), helpText) }}

                        {% set title %}{% trans \"Border Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"Use the colour picker to select the border colour\" %}{% endset %}
                        {{ forms.input(\"borderColor\", title, module.getOption(\"borderColor\"), helpText) }}

                        {% set title %}{% trans \"Font Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"Use the colour picker to select the font colour\" %}{% endset %}
                        {{ forms.input(\"fontColor\", title, module.getOption(\"fontColor\"), helpText) }}

                        {% set title %}{% trans \"Font\" %}{% endset %}
                        {% set attributes = [
                            { name: \"data-search-url\", value: urlFor(\"library.font.list\") },
                            { name: \"data-value\", value: module.getOption(\"fontFamily\") }
                        ] %}
                        {% set helpText %}{% trans \"Select a custom font - leave empty to use the default font.\" %}{% endset %}
                        {{ forms.dropdown(\"fontFamily\", \"single\", title, \"\", [{id: \"\", value: \"\"}], \"id\", \"value\", helpText, \"\", \"\", \"\", \"\", attributes) }}

                        {% set title %}{% trans \"Font Size\" %}{% endset %}
                        {% set helpText %}{% trans \"Set the font size\" %}{% endset %}
                        {{ forms.number(\"fontSize\", title, module.getOption(\"fontSize\"), helpText) }}
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

                        {% set title %}{% trans \"Enter a style sheet for the table\" %}{% endset %}
                        {{ forms.textarea(\"styleSheet\", \"\", module.getRawNode(\"styleSheet\", module.defaultStyleSheet()), title, \"template-override-controls\", \"\", 10) }}
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
                        {% set helpText %}{% trans \"Please enter the update interval in minutes. This should be kept as high as possible. For example, if the data will only change once per day this could be set to 60.\" %}{% endset %}
                        {{ forms.number(\"updateInterval\", title, module.getOption(\"updateInterval\", 5), helpText, \"\", \"required\") }}
                    </div>
                </div>

                <input type=\"hidden\" name=\"step\" value=\"2\" />
            </form>
        </div>
    </div>
{% endblock %}", "datasetview-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetview-form-edit.twig");
    }
}
