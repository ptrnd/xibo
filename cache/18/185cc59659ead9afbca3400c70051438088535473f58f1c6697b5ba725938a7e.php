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

/* text-form-edit.twig */
class __TwigTemplate_e501f568ed2098790105fa5c332f7d89f54c66823b9e30cb2810f578fc2eacca extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "text-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "text-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Edit Text");
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\" data-enlarge=\"1\"><span>";
        // line 19
        echo __("General");
        echo "</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 22
        echo __("Templates");
        echo "<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#templateTab\" class=\"template-override-controls\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 25
        echo __("Main");
        echo "</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 26
        echo __("Optional JavaScript");
        echo "</span></a></li>
                </ul>
            </li>
            <li><a href=\"#effectTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("Effect");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"textEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 35
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "name"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 39
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getUseDuration", [], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 43
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        echo $context["forms"]->getnumber("duration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getDuration", [], "method"), ($context["helpText"] ?? null), "duration-fields", "required");
        echo "

                        ";
        // line 47
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
                        ";
        // line 50
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 54
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 55
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 56
($context["inheritOption"] ?? null)]];
        // line 58
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"effectTab\">

                        ";
        // line 63
        ob_start();
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        ob_start();
        echo __("If you want to use a background colour for the Widget, select one here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        echo $context["forms"]->getinput("backgroundColor", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "backgroundColor"], "method"), ($context["helpText"] ?? null), "");
        echo "

                        ";
        // line 67
        ob_start();
        echo __("Effect");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        ob_start();
        echo __("Please select the effect that will be used to transition between items. If all items should be output, select None. Marquee effects are CPU intensive and may not be suitable for lower power displays.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start();
        echo __("None");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        ob_start();
        echo __("Fade");
        $context["fade"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        ob_start();
        echo __("Fade Out");
        $context["fadeout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                        ";
        ob_start();
        echo __("Scroll Horizontal");
        $context["scrollHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start();
        echo __("Scroll Vertical");
        $context["scrollVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start();
        echo __("Flip Horizontal");
        $context["flipHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        ob_start();
        echo __("Flip Vertical");
        $context["flipVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        ob_start();
        echo __("shuffle");
        $context["shuffle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start();
        echo __("Tile Slide");
        $context["tileSlide"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        ob_start();
        echo __("Tile Blind");
        $context["tileBlind"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        ob_start();
        echo __("Marquee Left");
        $context["marqueeLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        ob_start();
        echo __("Marquee Right");
        $context["marqueeRight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        ob_start();
        echo __("Marquee Up");
        $context["marqueeUp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        ob_start();
        echo __("Marquee Down");
        $context["marqueeDown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        $context["options"] = [0 => ["effectid" => "none", "effect" =>         // line 84
($context["noneOption"] ?? null)], 1 => ["effectid" => "fade", "effect" =>         // line 85
($context["fade"] ?? null)], 2 => ["effectid" => "fadeout", "effect" =>         // line 86
($context["fadeout"] ?? null)], 3 => ["effectid" => "scrollHorz", "effect" =>         // line 87
($context["scrollHorz"] ?? null)], 4 => ["effectid" => "scrollVert", "effect" =>         // line 88
($context["scrollVert"] ?? null)], 5 => ["effectid" => "flipHorz", "effect" =>         // line 89
($context["flipHorz"] ?? null)], 6 => ["effectid" => "flipVert", "effect" =>         // line 90
($context["flipVert"] ?? null)], 7 => ["effectid" => "shuffle", "effect" =>         // line 91
($context["shuffle"] ?? null)], 8 => ["effectid" => "tileSlide", "effect" =>         // line 92
($context["tileSlide"] ?? null)], 9 => ["effectid" => "tileBlind", "effect" =>         // line 93
($context["tileBlind"] ?? null)], 10 => ["effectid" => "marqueeLeft", "effect" =>         // line 94
($context["marqueeLeft"] ?? null)], 11 => ["effectid" => "marqueeRight", "effect" =>         // line 95
($context["marqueeRight"] ?? null)], 12 => ["effectid" => "marqueeUp", "effect" =>         // line 96
($context["marqueeUp"] ?? null)], 13 => ["effectid" => "marqueeDown", "effect" =>         // line 97
($context["marqueeDown"] ?? null)]];
        // line 99
        echo "                        ";
        echo $context["forms"]->getdropdown("effect", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "effect"], "method"), ($context["options"] ?? null), "effectid", "effect", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 101
        ob_start();
        echo __("Speed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                        ";
        ob_start();
        echo __("The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        echo $context["forms"]->getnumber("speed", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "speed"], "method"), ($context["helpText"] ?? null), "effect-controls");
        echo "
                        
                        ";
        // line 105
        ob_start();
        echo __("Marquee Selector");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                        ";
        ob_start();
        echo __("The selector to use for stacking marquee items in a line when scrolling Left/Right.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        ";
        echo $context["forms"]->getinput("marqueeInlineSelector", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "marqueeInlineSelector"], "method"), ($context["helpText"] ?? null), "effect-controls");
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"templateTab\">

                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">";
        // line 113
        echo __("Main Template");
        echo "</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"ta_text_advanced\" name=\"ta_text_advanced\" ";
        // line 114
        if (($this->getAttribute(($context["module"] ?? null), "getOption", [0 => "ta_text_advanced", 1 => 1], "method") == 1)) {
            echo "checked";
        }
        echo " 
                                data-size=\"small\" 
                                data-label-text=\"";
        // line 116
        echo __("Visual editor");
        echo "\" 
                                data-label-width=\"80px\" 
                                data-on-text=\"";
        // line 118
        echo __("On");
        echo "\" 
                                data-off-text=\"";
        // line 119
        echo __("Off");
        echo "\">
                        </div>

                        <div class=\"editor-messages\">
                            ";
        // line 123
        ob_start();
        // line 124
        echo "                                ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                            ";
        $context["simpleTextEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                            ";
        echo $context["forms"]->getmessage(($context["simpleTextEditorMessage"] ?? null), "ta_text-advanced-editor-hide inline-editor-hide");
        echo "

                            ";
        // line 129
        echo "                            ";
        ob_start();
        // line 130
        echo "                                ";
        echo __("Enter text to display using the inline editor which can be opened by clicking in the preview on the left.");
        // line 131
        echo "                                ";
        echo __("When using the inline editor Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 132
        echo "                            ";
        $context["layoutDesignerMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                            ";
        echo $context["forms"]->getmessage(($context["layoutDesignerMessage"] ?? null), "layout-designer-message inline-editor-show");
        echo "

                            ";
        // line 136
        echo "                            ";
        ob_start();
        // line 137
        echo "                                ";
        echo __("Enter the text to display. The red rectangle reflects the size of the region you are editing.");
        // line 138
        echo "                                ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 139
        echo "                            ";
        $context["playlistEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                            ";
        echo $context["forms"]->getmessage(($context["playlistEditorMessage"] ?? null), "playlist-editor-message ta_text-advanced-editor-show");
        echo "
                        </div>

                        <div class=\"ckeditor_controls inline-editor-hide container-fluid\" data-linked-to=\"ta_text\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_snippets_select\">";
        // line 146
        echo __("Snippets");
        echo "</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_snippets_select\" 
                                        class=\"ckeditor_snippets_select form-control\"
                                        data-linked-to=\"ta_text\">
                                            <option value=\"\"></option>
                                            <option value=\"Clock\">Clock</option>
                                            <option value=\"Clock|HH:mm\">Clock|HH:mm</option>
                                            <option value=\"Clock|DD/MM/YYYY\">Clock|DD/MM/YYYY</option>
                                            <option value=\"Date\">Date</option>
                                            <option value=\"Date|DD/MMMM/YYYY\">Date|DD/MMMM/YYYY</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_library_select\">";
        // line 163
        echo __("Library");
        echo "</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_library_select\"
                                                class=\"ckeditor_library_select form-control\"
                                                data-linked-to=\"ta_text\"
                                                data-search-url=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\"
                                                data-image-url=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1\">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 176
        echo $context["forms"]->gettextarea("ta_text", "", $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "text"], "method"), "", "inline-editor-hide", "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 181
        echo __("Optional JavaScript");
        echo "</h4>
                        </div>
                        
                        ";
        // line 184
        echo $context["forms"]->gettextarea("javaScript", "", $this->getAttribute(($context["module"] ?? null), "getRawNode", [0 => "javaScript"], "method"), "", "", "", 10);
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
        return "text-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 184,  460 => 181,  452 => 176,  442 => 169,  438 => 168,  430 => 163,  410 => 146,  400 => 140,  397 => 139,  394 => 138,  391 => 137,  388 => 136,  382 => 133,  379 => 132,  376 => 131,  373 => 130,  370 => 129,  364 => 126,  358 => 124,  356 => 123,  349 => 119,  345 => 118,  340 => 116,  333 => 114,  329 => 113,  319 => 107,  314 => 106,  310 => 105,  304 => 103,  299 => 102,  295 => 101,  289 => 99,  287 => 97,  286 => 96,  285 => 95,  284 => 94,  283 => 93,  282 => 92,  281 => 91,  280 => 90,  279 => 89,  278 => 88,  277 => 87,  276 => 86,  275 => 85,  274 => 84,  272 => 83,  267 => 82,  262 => 81,  257 => 80,  252 => 79,  247 => 78,  242 => 77,  237 => 76,  232 => 75,  227 => 74,  222 => 73,  217 => 72,  212 => 71,  207 => 70,  202 => 69,  197 => 68,  193 => 67,  187 => 65,  182 => 64,  178 => 63,  169 => 58,  167 => 56,  166 => 55,  165 => 54,  163 => 53,  158 => 52,  153 => 51,  149 => 50,  146 => 49,  141 => 48,  137 => 47,  131 => 45,  126 => 44,  122 => 43,  116 => 41,  111 => 40,  107 => 39,  101 => 37,  96 => 36,  92 => 35,  86 => 32,  80 => 29,  74 => 26,  70 => 25,  64 => 22,  58 => 19,  54 => 17,  51 => 16,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
    {% trans \"Edit Text\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\" data-enlarge=\"1\"><span>{% trans \"General\" %}</span></a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% trans \"Templates\" %}<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#templateTab\" class=\"template-override-controls\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Main\" %}</span></a></li>
                    <li><a href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Optional JavaScript\" %}</span></a></li>
                </ul>
            </li>
            <li><a href=\"#effectTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Effect\" %}</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"textEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\">
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

                    <div class=\"tab-pane\" id=\"effectTab\">

                        {% set title %}{% trans \"Background Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"If you want to use a background colour for the Widget, select one here.\" %}{% endset %}
                        {{ forms.input(\"backgroundColor\", title, module.getOption(\"backgroundColor\"), helpText, \"\") }}

                        {% set title %}{% trans \"Effect\" %}{% endset %}
                        {% set helpText %}{% trans \"Please select the effect that will be used to transition between items. If all items should be output, select None. Marquee effects are CPU intensive and may not be suitable for lower power displays.\" %}{% endset %}
                        {% set noneOption %}{% trans \"None\" %}{% endset %}
                        {% set fade %}{% trans \"Fade\" %}{% endset %}
                        {% set fadeout %}{% trans \"Fade Out\" %}{% endset %}
                        {% set scrollHorz %}{% trans \"Scroll Horizontal\" %}{% endset %}
                        {% set scrollVert %}{% trans \"Scroll Vertical\" %}{% endset %}
                        {% set flipHorz %}{% trans \"Flip Horizontal\" %}{% endset %}
                        {% set flipVert %}{% trans \"Flip Vertical\" %}{% endset %}
                        {% set shuffle %}{% trans \"shuffle\" %}{% endset %}
                        {% set tileSlide %}{% trans \"Tile Slide\" %}{% endset %}
                        {% set tileBlind %}{% trans \"Tile Blind\" %}{% endset %}
                        {% set marqueeLeft %}{% trans \"Marquee Left\" %}{% endset %}
                        {% set marqueeRight %}{% trans \"Marquee Right\" %}{% endset %}
                        {% set marqueeUp %}{% trans \"Marquee Up\" %}{% endset %}
                        {% set marqueeDown %}{% trans \"Marquee Down\" %}{% endset %}
                        {% set options = [
                        { effectid: \"none\", effect: noneOption },
                        { effectid: \"fade\", effect: fade },
                        { effectid: \"fadeout\", effect: fadeout},
                        { effectid: \"scrollHorz\", effect: scrollHorz},
                        { effectid: \"scrollVert\", effect: scrollVert},
                        { effectid: \"flipHorz\", effect: flipHorz},
                        { effectid: \"flipVert\", effect: flipVert},
                        { effectid: \"shuffle\", effect: shuffle},
                        { effectid: \"tileSlide\", effect: tileSlide},
                        { effectid: \"tileBlind\", effect: tileBlind},
                        { effectid: \"marqueeLeft\", effect: marqueeLeft},
                        { effectid: \"marqueeRight\", effect: marqueeRight},
                        { effectid: \"marqueeUp\", effect: marqueeUp},
                        { effectid: \"marqueeDown\", effect: marqueeDown}
                        ] %}
                        {{ forms.dropdown(\"effect\", \"single\", title, module.getOption(\"effect\"), options, \"effectid\", \"effect\", helpText) }}

                        {% set title %}{% trans \"Speed\" %}{% endset %}
                        {% set helpText %}{% trans \"The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).\" %}{% endset %}
                        {{ forms.number(\"speed\", title, module.getOption(\"speed\"), helpText, \"effect-controls\") }}
                        
                        {% set title %}{% trans \"Marquee Selector\" %}{% endset %}
                        {% set helpText %}{% trans \"The selector to use for stacking marquee items in a line when scrolling Left/Right.\" %}{% endset %}
                        {{ forms.input(\"marqueeInlineSelector\", title, module.getOption(\"marqueeInlineSelector\"), helpText, \"effect-controls\") }}
                    </div>

                    <div class=\"tab-pane\" id=\"templateTab\">

                        <div class=\"form-content-title container-fluid text-right\">
                            <h4 class=\"col-xs-6 text-left\">{% trans \"Main Template\" %}</h4>
                            <input type=\"checkbox\" class=\"col-xs-6 pull-right bootstrap-switch-target\" id=\"ta_text_advanced\" name=\"ta_text_advanced\" {% if module.getOption(\"ta_text_advanced\", 1) == 1 %}checked{% endif %} 
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
                                            <option value=\"Clock\">Clock</option>
                                            <option value=\"Clock|HH:mm\">Clock|HH:mm</option>
                                            <option value=\"Clock|DD/MM/YYYY\">Clock|DD/MM/YYYY</option>
                                            <option value=\"Date\">Date</option>
                                            <option value=\"Date|DD/MMMM/YYYY\">Date|DD/MMMM/YYYY</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_library_select\">{% trans \"Library\" %}</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_library_select\"
                                                class=\"ckeditor_library_select form-control\"
                                                data-linked-to=\"ta_text\"
                                                data-search-url=\"{{ urlFor(\"library.search\") }}\"
                                                data-image-url=\"{{ urlFor(\"library.download\") }}?preview=1\">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{ forms.textarea(\"ta_text\", \"\", module.getOption(\"text\"), \"\", \"inline-editor-hide\", \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>{% trans \"Optional JavaScript\" %}</h4>
                        </div>
                        
                        {{ forms.textarea(\"javaScript\", \"\", module.getRawNode(\"javaScript\"), \"\", \"\", \"\", 10) }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "text-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\modules\\text-form-edit.twig");
    }
}
