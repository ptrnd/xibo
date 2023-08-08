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

/* image-form-edit.twig */
class __TwigTemplate_01fcef821b6e46dba6413d50559ceeb07e69a3c9a7c4015d4f1ee46c62d9aaed extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "image-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "image-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Edit Image");
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
            <li><a href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("Appearance");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"imageEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", []), "html", null, true);
        echo "\" data-media-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "getMediaId", [], "method"), "html", null, true);
        echo "\" data-media-editable=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? null), "checkEditable", [0 => $this->getAttribute(($context["module"] ?? null), "getMedia", [], "method")], "method"), "html", null, true);
        echo "\" data-valid-extensions=\"";
        echo twig_escape_filter($this->env, ($context["validExtensions"] ?? null), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 26
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "name"], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 30
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getUseDuration", [], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 34
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                        ";
        echo $context["forms"]->getnumber("duration", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getDuration", [], "method"), ($context["helpText"] ?? null), "duration-fields", "required");
        echo "

                        ";
        // line 38
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                        ";
        ob_start();
        echo __("Setting for enabling statistic collection");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
                        ";
        // line 41
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 45
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 46
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 47
($context["inheritOption"] ?? null)]];
        // line 49
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method")], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        ";
        // line 53
        ob_start();
        echo __("Scale type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start();
        echo __("How should this image be scaled?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        ob_start();
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                        ";
        ob_start();
        echo __("Stretch");
        $context["stretch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        $context["options"] = [0 => ["scaleTypeId" => "center", "scaleType" =>         // line 58
($context["center"] ?? null)], 1 => ["scaleTypeId" => "stretch", "scaleType" =>         // line 59
($context["stretch"] ?? null)]];
        // line 61
        echo "                        ";
        echo $context["forms"]->getdropdown("scaleTypeId", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "scaleType"], "method"), ($context["options"] ?? null), "scaleTypeId", "scaleType", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 63
        ob_start();
        echo __("Horizontal Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        ob_start();
        echo __("How should this image be aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        ob_start();
        echo __("Left");
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start();
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        ob_start();
        echo __("Right");
        $context["right"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        $context["options"] = [0 => ["alignId" => "left", "align" =>         // line 69
($context["left"] ?? null)], 1 => ["alignId" => "center", "align" =>         // line 70
($context["center"] ?? null)], 2 => ["alignId" => "right", "align" =>         // line 71
($context["right"] ?? null)]];
        // line 73
        echo "                        ";
        echo $context["forms"]->getdropdown("alignId", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getOption", [0 => "align", 1 => "center"], "method"), ($context["options"] ?? null), "alignId", "align", ($context["helpText"] ?? null), "align-fields");
        echo "

                        ";
        // line 75
        ob_start();
        echo __("Vertical Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        ob_start();
        echo __("How should this image be vertically aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start();
        echo __("Top");
        $context["top"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        ob_start();
        echo __("Middle");
        $context["middle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        ob_start();
        echo __("Bottom");
        $context["bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        $context["options"] = [0 => ["valignId" => "top", "valign" =>         // line 81
($context["top"] ?? null)], 1 => ["valignId" => "middle", "valign" =>         // line 82
($context["middle"] ?? null)], 2 => ["valignId" => "bottom", "valign" =>         // line 83
($context["bottom"] ?? null)]];
        // line 85
        echo "                        ";
        echo $context["forms"]->getdropdown("valignId", "single", ($context["title"] ?? null), $this->getAttribute(($context["module"] ?? null), "getoption", [0 => "valign", 1 => "middle"], "method"), ($context["options"] ?? null), "valignId", "valign", ($context["helpText"] ?? null), "align-fields");
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
        return "image-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 85,  261 => 83,  260 => 82,  259 => 81,  257 => 80,  252 => 79,  247 => 78,  242 => 77,  237 => 76,  233 => 75,  227 => 73,  225 => 71,  224 => 70,  223 => 69,  221 => 68,  216 => 67,  211 => 66,  206 => 65,  201 => 64,  197 => 63,  191 => 61,  189 => 59,  188 => 58,  186 => 57,  181 => 56,  176 => 55,  171 => 54,  167 => 53,  159 => 49,  157 => 47,  156 => 46,  155 => 45,  153 => 44,  148 => 43,  143 => 42,  139 => 41,  136 => 40,  131 => 39,  127 => 38,  121 => 36,  116 => 35,  112 => 34,  106 => 32,  101 => 31,  97 => 30,  91 => 28,  86 => 27,  82 => 26,  68 => 23,  62 => 20,  58 => 19,  54 => 17,  51 => 16,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
    {% trans \"Edit Image\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
            <li><a href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Appearance\" %}</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"imageEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\" data-widget-id=\"{{ module.widget.widgetId }}\" data-media-id=\"{{ module.getMediaId() }}\" data-media-editable=\"{{ currentUser.checkEditable(module.getMedia()) }}\" data-valid-extensions=\"{{ validExtensions }}\">
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
                        {% set helpText %}{% trans \"Setting for enabling statistic collection\" %}{% endset %}

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

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        {% set title %}{% trans \"Scale type\" %}{% endset %}
                        {% set helpText %}{% trans \"How should this image be scaled?\" %}{% endset %}
                        {% set center %}{% trans \"Centre\" %}{% endset %}
                        {% set stretch %}{% trans \"Stretch\" %}{% endset %}
                        {% set options = [
                        { scaleTypeId: \"center\", scaleType: center },
                        { scaleTypeId: \"stretch\", scaleType: stretch }
                        ] %}
                        {{ forms.dropdown(\"scaleTypeId\", \"single\", title, module.getOption(\"scaleType\"), options, \"scaleTypeId\", \"scaleType\", helpText) }}

                        {% set title %}{% trans \"Horizontal Align\" %}{% endset %}
                        {% set helpText %}{% trans \"How should this image be aligned?\" %}{% endset %}
                        {% set left %}{% trans \"Left\" %}{% endset %}
                        {% set center %}{% trans \"Centre\" %}{% endset %}
                        {% set right %}{% trans \"Right\" %}{% endset %}
                        {% set options = [
                        { alignId: \"left\", align: left },
                        { alignId: \"center\", align: center },
                        { alignId: \"right\", align: right }
                        ] %}
                        {{ forms.dropdown(\"alignId\", \"single\", title, module.getOption(\"align\",\"center\"), options, \"alignId\", \"align\", helpText, \"align-fields\") }}

                        {% set title %}{% trans \"Vertical Align\" %}{% endset %}
                        {% set helpText %}{% trans \"How should this image be vertically aligned?\" %}{% endset %}
                        {% set top %}{% trans \"Top\" %}{% endset %}
                        {% set middle %}{% trans \"Middle\" %}{% endset %}
                        {% set bottom %}{% trans \"Bottom\" %}{% endset %}
                        {% set options = [
                        { valignId: \"top\", valign: top },
                        { valignId: \"middle\", valign: middle },
                        { valignId: \"bottom\", valign: bottom }
                        ] %}
                        {{ forms.dropdown(\"valignId\", \"single\", title, module.getoption(\"valign\", \"middle\"), options, \"valignId\", \"valign\", helpText, \"align-fields\") }}
                    </div>
                </div> 
            </form>
        </div>
    </div>
{% endblock %}", "image-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\modules\\image-form-edit.twig");
    }
}
