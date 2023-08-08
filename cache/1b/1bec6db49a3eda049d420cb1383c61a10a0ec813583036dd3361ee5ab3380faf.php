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

/* embedded-form-edit.twig */
class __TwigTemplate_97b72175c5bff54160346db7f241395c159d064bf5e735a439ec6a44dbd6e99f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "embedded-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "embedded-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Edit Embedded");
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 19
        echo __("General");
        echo "</span></a></li>
            <li><a href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("Configuration");
        echo "</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 23
        echo __("Templates");
        echo "<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#htmlTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 26
        echo __("HTML to Embed");
        echo "</span></a></li>
                    <li><a href=\"#customStyleSheetTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 27
        echo __("Custom Style Sheet");
        echo "</span></a></li>
                    <li><a href=\"#headContentTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("HEAD content to Embed");
        echo "</span></a></li>
                </ul>
            </li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"embeddedFormEdit\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 36
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "name"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 40
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getUseDuration", [], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 44
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        echo $context["forms"]->getnumber("duration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getDuration", [], "method"), ($context["helpText"] ?? null), "duration-fields", "required");
        echo "

                        ";
        // line 48
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
                        ";
        // line 51
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 55
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 56
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 57
($context["inheritOption"] ?? null)]];
        // line 59
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 63
        ob_start();
        echo __("Background transparent?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        ob_start();
        echo __("Should the HTML be shown with a transparent background. Not current available on the Windows Display Client.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        echo $context["forms"]->getcheckbox("transparency", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "transparency"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 67
        ob_start();
        echo __("Scale Content?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        ob_start();
        echo __("Should the embedded content be scaled along with the layout?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        echo $context["forms"]->getcheckbox("scaleContent", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "scaleContent"], "method"), ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"htmlTab\">
                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">";
        // line 74
        echo __("HTML to Embed");
        echo "</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"embedHtml_advanced\" name=\"embedHtml_advanced\" ";
        // line 75
        if (($this->getAttribute(($context["module"] ?? null), "getOption", [0 => "embedHtml_advanced", 1 => 0], "method") == 1)) {
            echo "checked";
        }
        echo " 
                                data-size=\"small\" 
                                data-label-text=\"";
        // line 77
        echo __("Visual editor");
        echo "\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"";
        // line 79
        echo __("On");
        echo "\" 
                                data-off-text=\"";
        // line 80
        echo __("Off");
        echo "\">
                        </div>

                        <div class=\"editor-messages\">
                            ";
        // line 84
        ob_start();
        // line 85
        echo "                                ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                            ";
        $context["simpleTextEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                            ";
        echo $context["forms"]->getmessage(($context["simpleTextEditorMessage"] ?? null), "embedHtml-advanced-editor-hide inline-editor-hide");
        echo "

                            ";
        // line 90
        echo "                            ";
        ob_start();
        // line 91
        echo "                                ";
        echo __("Enter text to display using the inline editor which can be opened by clicking in the preview on the left.");
        // line 92
        echo "                                ";
        echo __("When using the inline editor Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 93
        echo "                            ";
        $context["layoutDesignerMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                            ";
        echo $context["forms"]->getmessage(($context["layoutDesignerMessage"] ?? null), "layout-designer-message inline-editor-show");
        echo "

                            ";
        // line 97
        echo "                            ";
        ob_start();
        // line 98
        echo "                                ";
        echo __("Enter the text to display. The red rectangle reflects the size of the region you are editing.");
        // line 99
        echo "                                ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 100
        echo "                            ";
        $context["playlistEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                            ";
        echo $context["forms"]->getmessage(($context["playlistEditorMessage"] ?? null), "playlist-editor-message embedHtml-advanced-editor-show");
        echo "
                        </div>

                        ";
        // line 104
        echo $context["forms"]->gettextarea("embedHtml", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "embedHtml"], "method"), "", "inline-editor-hide", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"customStyleSheetTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 109
        echo __("Custom Style Sheets");
        echo "</h4>
                        </div>
                        
                        ";
        // line 112
        echo $context["forms"]->gettextarea("embedStyle", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "embedStyle"], "method"), "", "", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"headContentTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 117
        echo __("HEAD content to Embed");
        echo "</h4>
                        </div>

                        ";
        // line 120
        ob_start();
        echo __("HEAD content to Embed (including script tags)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        echo $context["forms"]->gettextarea("embedScript", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "embedScript"], "method"), ($context["helpText"] ?? null), "", "", 10);
        echo "
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "embedded-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 121,  320 => 120,  314 => 117,  306 => 112,  300 => 109,  292 => 104,  285 => 101,  282 => 100,  279 => 99,  276 => 98,  273 => 97,  267 => 94,  264 => 93,  261 => 92,  258 => 91,  255 => 90,  249 => 87,  243 => 85,  241 => 84,  234 => 80,  230 => 79,  225 => 77,  218 => 75,  214 => 74,  205 => 69,  200 => 68,  196 => 67,  190 => 65,  185 => 64,  181 => 63,  173 => 59,  171 => 57,  170 => 56,  169 => 55,  167 => 54,  162 => 53,  157 => 52,  153 => 51,  150 => 50,  145 => 49,  141 => 48,  135 => 46,  130 => 45,  126 => 44,  120 => 42,  115 => 41,  111 => 40,  105 => 38,  100 => 37,  96 => 36,  90 => 33,  82 => 28,  78 => 27,  74 => 26,  68 => 23,  62 => 20,  58 => 19,  54 => 17,  51 => 16,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Embedded\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
            <li><a href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Configuration\" %}</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% trans \"Templates\" %}<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#htmlTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"HTML to Embed\" %}</span></a></li>
                    <li><a href=\"#customStyleSheetTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Custom Style Sheet\" %}</span></a></li>
                    <li><a href=\"#headContentTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"HEAD content to Embed\" %}</span></a></li>
                </ul>
            </li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"embeddedFormEdit\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional name for this widget\" %}{% endset %}
                        {{ forms.input(\"name\", title, module.getOption(\"name\"), helpText) }}

                        {% set title %}{% trans \"Set a duration?\" %}{% endset %}
                        {% set helpText %}{% trans \"Select to provide a specific duration for this Widget\" %}{% endset %}
                        {{ forms.checkbox(\"useDuration\", title, module.getUseDuration(), helpText) }}

                        {% set title %}{% trans \"Duration\" %}{% endset %}
                        {% set helpText %}{% trans \"The duration in seconds this should be displayed\" %}{% endset %}
                        {{ forms.number(\"duration\", title, module.getDuration(), helpText, \"duration-fields\", \"required\") }}

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
                        {% set title %}{% trans \"Background transparent?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should the HTML be shown with a transparent background. Not current available on the Windows Display Client.\" %}{% endset %}
                        {{ forms.checkbox(\"transparency\", title, module.getOption(\"transparency\"), helpText) }}

                        {% set title %}{% trans \"Scale Content?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should the embedded content be scaled along with the layout?\" %}{% endset %}
                        {{ forms.checkbox(\"scaleContent\", title, module.getOption(\"scaleContent\"), helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"htmlTab\">
                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">{% trans \"HTML to Embed\" %}</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"embedHtml_advanced\" name=\"embedHtml_advanced\" {% if module.getOption(\"embedHtml_advanced\", 0) == 1 %}checked{% endif %} 
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
                            {{ forms.message(simpleTextEditorMessage, 'embedHtml-advanced-editor-hide inline-editor-hide') }}

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
                            {{ forms.message(playlistEditorMessage, 'playlist-editor-message embedHtml-advanced-editor-show') }}
                        </div>

                        {{ forms.textarea(\"embedHtml\", \"\", module.getRawNode('embedHtml'), \"\", \"inline-editor-hide\", \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"customStyleSheetTab\">
                        <div class=\"form-content-title\">
                            <h4>{% trans \"Custom Style Sheets\" %}</h4>
                        </div>
                        
                        {{ forms.textarea(\"embedStyle\", \"\", module.getRawNode('embedStyle'), \"\", \"\", \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"headContentTab\">
                        <div class=\"form-content-title\">
                            <h4>{% trans \"HEAD content to Embed\" %}</h4>
                        </div>

                        {% set helpText %}{% trans \"HEAD content to Embed (including script tags)\" %}{% endset %}
                        {{ forms.textarea(\"embedScript\", \"\", module.getRawNode('embedScript'), helpText, \"\", \"\", 10) }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "embedded-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\modules\\embedded-form-edit.twig");
    }
}
