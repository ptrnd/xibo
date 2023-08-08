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

/* region-form-edit.twig */
class __TwigTemplate_351b8a39166f4a17e2f46f5488efe430c87debb689121cf6fd0dbeeb9063e563 extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "region-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "region-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Region Options");
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"row\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("General");
        echo "</span></a></li>
            <li><a href=\"#positioningTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 21
        echo __("Positioning");
        echo "</span></a></li>
            <li><a href=\"#transitionTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 22
        echo __("Transition");
        echo "</span></a></li>
        </ul>

        <div class=\"col-md-12\">
            <form id=\"regionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.edit", ["id" => $this->getAttribute(($context["region"] ?? null), "regionId", [])]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"generalTab\">
                        ";
        // line 29
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                        ";
        ob_start();
        echo __("Name of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "name", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 33
        ob_start();
        echo __("Loop?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                        ";
        ob_start();
        echo __("If there is only one item in this region should it loop?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                        ";
        echo $context["forms"]->getcheckbox("loop", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "getOptionValue", [0 => "loop", 1 => 0], "method"), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 37
        $context["message"] = __("When should the Region Loop be enabled?");
        // line 38
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message"] ?? null), "alert-info");
        echo "
                        ";
        // line 39
        $context["message2"] = __("* If your Region contains more than one Widget, Loop should not be enabled.");
        // line 40
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message2"] ?? null), "alert-info");
        echo "
                        ";
        // line 41
        $context["message3"] = __("* If your Region contains one Widget, and that Widget is a 'fixed' item (eg Text), Loop should not be enabled.");
        // line 42
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message3"] ?? null), "alert-info");
        echo "
                        ";
        // line 43
        $context["message4"] = __("* If your Region contains one Widget, and that Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout.");
        // line 44
        echo "                        ";
        echo $context["forms"]->getmessage(($context["message4"] ?? null), "alert-info");
        echo "

                    </div>

                    <div class=\"tab-pane\" id=\"positioningTab\">
                        ";
        // line 49
        ob_start();
        echo __("Top");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        ob_start();
        echo __("Offset from the Top Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        echo $context["forms"]->getnumber("top", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "top", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 53
        ob_start();
        echo __("Left");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start();
        echo __("Offset from the Left Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo $context["forms"]->getnumber("left", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "left", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 57
        ob_start();
        echo __("Width");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        ob_start();
        echo __("Width of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        echo $context["forms"]->getnumber("width", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "width", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 61
        ob_start();
        echo __("Height");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start();
        echo __("Height of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        echo $context["forms"]->getnumber("height", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "height", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 65
        ob_start();
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start();
        echo __("The layering order of this region (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        echo $context["forms"]->getnumber("zIndex", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "zIndex", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 69
        ob_start();
        echo __("Make this Region full screen, dimensions will be set to [width] by [height].");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        <div>
                            <button type=\"button\" id=\"setFullScreenButton\" class=\"btn btn-block\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</button>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transitionTab\">
                        ";
        // line 76
        ob_start();
        echo __("Exit Transition");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start();
        echo __("What transition should be applied when this region is finished?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        echo $context["forms"]->getdropdown("transitionType", "single", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "getOptionValue", [0 => "transitionType"], "method"), twig_array_merge([0 => ["code" => null, "transition" => ""]], $this->getAttribute(($context["transitions"] ?? null), "out", [])), "code", "transition", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 80
        echo $context["forms"]->getnumber("transitionDuration", "Duration", $this->getAttribute(($context["region"] ?? null), "getOptionValue", [0 => "transitionDuration"], "method"), "The duration for this transition, in milliseconds.", "transition-group");
        echo "

                        ";
        // line 82
        ob_start();
        echo __("Direction");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        ob_start();
        echo __("The direction for this transition. Only appropriate for transitions that move, such as Fly.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        echo $context["forms"]->getdropdown("transitionDirection", "single", ($context["title"] ?? null), $this->getAttribute(($context["region"] ?? null), "getOptionValue", [0 => "transitionDirection"], "method"), $this->getAttribute(($context["transitions"] ?? null), "compassPoints", []), "id", "name", ($context["helpText"] ?? null), "transition-group transition-direction");
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
        return "region-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 84,  256 => 83,  252 => 82,  247 => 80,  241 => 78,  236 => 77,  232 => 76,  224 => 71,  221 => 70,  217 => 69,  211 => 67,  206 => 66,  202 => 65,  196 => 63,  191 => 62,  187 => 61,  181 => 59,  176 => 58,  172 => 57,  166 => 55,  161 => 54,  157 => 53,  151 => 51,  146 => 50,  142 => 49,  133 => 44,  131 => 43,  126 => 42,  124 => 41,  119 => 40,  117 => 39,  112 => 38,  110 => 37,  104 => 35,  99 => 34,  95 => 33,  89 => 31,  84 => 30,  80 => 29,  74 => 26,  67 => 22,  63 => 21,  59 => 20,  54 => 17,  51 => 16,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
    {% trans \"Region Options\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
            <li><a href=\"#positioningTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Positioning\" %}</span></a></li>
            <li><a href=\"#transitionTab\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Transition\" %}</span></a></li>
        </ul>

        <div class=\"col-md-12\">
            <form id=\"regionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"region.edit\", {id: region.regionId}) }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"generalTab\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"Name of the Region\" %}{% endset %}
                        {{ forms.input(\"name\", title, region.name, helpText) }}

                        {% set title %}{% trans \"Loop?\" %}{% endset %}
                        {% set helpText %}{% trans \"If there is only one item in this region should it loop?\" %}{% endset %}
                        {{ forms.checkbox(\"loop\", title, region.getOptionValue(\"loop\", 0), helpText) }}

                        {% set message = \"When should the Region Loop be enabled?\"|trans %}
                        {{ forms.message(message, 'alert-info') }}
                        {% set message2 = \"* If your Region contains more than one Widget, Loop should not be enabled.\"|trans %}
                        {{ forms.message(message2, 'alert-info') }}
                        {% set message3 = \"* If your Region contains one Widget, and that Widget is a 'fixed' item (eg Text), Loop should not be enabled.\"|trans %}
                        {{ forms.message(message3, 'alert-info') }}
                        {% set message4 = \"* If your Region contains one Widget, and that Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout.\"|trans %}
                        {{ forms.message(message4, 'alert-info') }}

                    </div>

                    <div class=\"tab-pane\" id=\"positioningTab\">
                        {% set title %}{% trans \"Top\" %}{% endset %}
                        {% set helpText %}{% trans \"Offset from the Top Corner\" %}{% endset %}
                        {{ forms.number(\"top\", title, region.top, helpText) }}

                        {% set title %}{% trans \"Left\" %}{% endset %}
                        {% set helpText %}{% trans \"Offset from the Left Corner\" %}{% endset %}
                        {{ forms.number(\"left\", title, region.left, helpText) }}

                        {% set title %}{% trans \"Width\" %}{% endset %}
                        {% set helpText %}{% trans \"Width of the Region\" %}{% endset %}
                        {{ forms.number(\"width\", title, region.width, helpText) }}

                        {% set title %}{% trans \"Height\" %}{% endset %}
                        {% set helpText %}{% trans \"Height of the Region\" %}{% endset %}
                        {{ forms.number(\"height\", title, region.height, helpText) }}

                        {% set title %}{% trans \"Layer\" %}{% endset %}
                        {% set helpText %}{% trans \"The layering order of this region (z-index). Advanced use only.\" %}{% endset %}
                        {{ forms.number(\"zIndex\", title, region.zIndex, helpText) }}

                        {% set title %}{% trans \"Make this Region full screen, dimensions will be set to [width] by [height].\" %}{% endset %}
                        <div>
                            <button type=\"button\" id=\"setFullScreenButton\" class=\"btn btn-block\">{{title}}</button>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transitionTab\">
                        {% set title %}{% trans \"Exit Transition\" %}{% endset %}
                        {% set helpText %}{% trans \"What transition should be applied when this region is finished?\" %}{% endset %}
                        {{ forms.dropdown(\"transitionType\", \"single\", title, region.getOptionValue(\"transitionType\"), [{code: null, transition: \"\"}]|merge(transitions.out), \"code\", \"transition\", helpText) }}

                        {{ forms.number(\"transitionDuration\", \"Duration\", region.getOptionValue(\"transitionDuration\"), \"The duration for this transition, in milliseconds.\", \"transition-group\") }}

                        {% set title %}{% trans \"Direction\" %}{% endset %}
                        {% set helpText %}{% trans \"The direction for this transition. Only appropriate for transitions that move, such as Fly.\" %}{% endset %}
                        {{ forms.dropdown(\"transitionDirection\", \"single\", title, region.getOptionValue(\"transitionDirection\"), transitions.compassPoints, \"id\", \"name\", helpText, \"transition-group transition-direction\") }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "region-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\region-form-edit.twig");
    }
}
