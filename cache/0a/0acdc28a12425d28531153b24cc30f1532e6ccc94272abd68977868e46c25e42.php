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

/* layout-form-background.twig */
class __TwigTemplate_1dfe53708d1ba0609fb2c8ee2a9dd44a740943d00079399bc86e478a1b111dca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-background.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-background.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        echo __("Edit Layout");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        echo "backGroundFormSetup";
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutEditForm\" class=\"form-horizontal\" method=\"put\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.edit.background", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\">
                ";
        // line 43
        ob_start();
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        ob_start();
        echo __("Use the colour picker to select the background colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                ";
        echo $context["forms"]->getinput("backgroundColor", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "backgroundColor", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 47
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""], 3 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search")], 4 => ["name" => "data-search-term", "value" => "media"], 5 => ["name" => "data-search-term-tags", "value" => "tags"], 6 => ["name" => "data-width", "value" => "100%"], 7 => ["name" => "data-id-property", "value" => "mediaId"], 8 => ["name" => "data-text-property", "value" => "name"], 9 => ["name" => "data-filter-options", "value" => "{\"type\":\"image\"}"]];
        // line 59
        echo "
                ";
        // line 60
        ob_start();
        echo __("Background Image");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                ";
        ob_start();
        echo __("Pick an image from the Library to use as your background. Please note that Windows Players only support JPG image files.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                ";
        ob_start();
        echo __("None");
        $context["noneMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                ";
        $context["backgrounds"] = twig_array_merge([0 => ["mediaId" => null, "name" => ($context["noneMessage"] ?? null)]], ($context["backgrounds"] ?? null));
        // line 64
        echo "                ";
        echo $context["forms"]->getdropdown("backgroundImageId", "single", ($context["title"] ?? null), ($context["backgroundId"] ?? null), ($context["backgrounds"] ?? null), "mediaId", "name", ($context["helpText"] ?? null), "pagedSelect background-image-fields", "", "b", "", ($context["attributes"] ?? null));
        echo "
                
                <div class=\"text-center\">
                    <div id=\"bg_not_found_icon\">
                        <i class=\"fa bg_not_found_icon fa-2x\"></i>
                        <span>";
        // line 69
        echo __("No Background Image");
        echo "</span>
                    </div>
            
                    <img id=\"bg_image_image\" data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1&width=200&height=100\" alt=\"";
        echo __("Background thumbnail");
        echo "\" />
                </div>

                <div class=\"row background-image-fields background-image-add-button text-center\">
                    <div class=\"col-xs-12\">
                        <button id=\"backgroundAddButton\" class=\"btn btn-default\" type=\"button\"><i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                            ";
        // line 78
        echo __("Add a new background image?");
        // line 79
        echo "                        </button>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div id=\"layoutEditFormBackgroundUpload\" style=\"display: none;\"></div>
                </div>

                ";
        // line 87
        ob_start();
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                ";
        ob_start();
        echo __("Change the resolution");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                ";
        echo $context["forms"]->getdropdown("resolutionId", "single", ($context["title"] ?? null), $this->getAttribute(($context["resolution"] ?? null), "resolutionId", []), ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "resolution-group");
        echo "

                ";
        // line 91
        ob_start();
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                ";
        ob_start();
        echo __("The layering order of the background image (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                ";
        echo $context["forms"]->getinput("backgroundzIndex", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "backgroundzIndex", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 95
        ob_start();
        echo __("Automatically apply Transitions?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                ";
        ob_start();
        echo __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                ";
        echo $context["forms"]->getcheckbox("autoApplyTransitions", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "autoApplyTransitions", []), ($context["helpText"] ?? null));
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-background.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 97,  199 => 96,  195 => 95,  189 => 93,  184 => 92,  180 => 91,  174 => 89,  169 => 88,  165 => 87,  155 => 79,  153 => 78,  142 => 72,  136 => 69,  127 => 64,  124 => 63,  119 => 62,  114 => 61,  110 => 60,  107 => 59,  105 => 47,  99 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 40,  79 => 39,  73 => 37,  67 => 34,  63 => 33,  56 => 32,  53 => 31,  48 => 28,  45 => 27,  40 => 24,  38 => 25,  32 => 24,);
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

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Layout\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#layoutEditForm\").submit()
{% endblock %}

{% block callBack %}backGroundFormSetup{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutEditForm\" class=\"form-horizontal\" method=\"put\" action=\"{{ urlFor(\"layout.edit.background\", {id: layout.layoutId}) }}\">
                {% set title %}{% trans \"Background Colour\" %}{% endset %}
                {% set helpText %}{% trans \"Use the colour picker to select the background colour\" %}{% endset %}
                {{ forms.input(\"backgroundColor\", title, layout.backgroundColor, helpText) }}

                {% set attributes = [
                    { name: \"data-allow-clear\", value: \"true\" },
                    { name: \"data-placeholder--id\", value: null },
                    { name: \"data-placeholder--value\", value: \"\" },
                    { name: \"data-search-url\", value: urlFor(\"library.search\") },
                    { name: \"data-search-term\", value: \"media\" },
                    { name: \"data-search-term-tags\", value: \"tags\" },
                    { name: \"data-width\", value: \"100%\" },
                    { name: \"data-id-property\", value: \"mediaId\" },
                    { name: \"data-text-property\", value: \"name\" },
                    { name: \"data-filter-options\", value: '{\"type\":\"image\"}' }
                ] %}

                {% set title %}{% trans \"Background Image\" %}{% endset %}
                {% set helpText %}{% trans \"Pick an image from the Library to use as your background. Please note that Windows Players only support JPG image files.\" %}{% endset %}
                {% set noneMessage %}{% trans \"None\" %}{% endset %}
                {% set backgrounds = [{mediaId: null, name: noneMessage}]|merge(backgrounds) %}
                {{ forms.dropdown(\"backgroundImageId\", \"single\", title, backgroundId, backgrounds, \"mediaId\", \"name\", helpText, \"pagedSelect background-image-fields\", \"\", \"b\", \"\", attributes) }}
                
                <div class=\"text-center\">
                    <div id=\"bg_not_found_icon\">
                        <i class=\"fa bg_not_found_icon fa-2x\"></i>
                        <span>{% trans \"No Background Image\" %}</span>
                    </div>
            
                    <img id=\"bg_image_image\" data-url=\"{{ urlFor(\"library.download\") }}?preview=1&width=200&height=100\" alt=\"{% trans \"Background thumbnail\" %}\" />
                </div>

                <div class=\"row background-image-fields background-image-add-button text-center\">
                    <div class=\"col-xs-12\">
                        <button id=\"backgroundAddButton\" class=\"btn btn-default\" type=\"button\"><i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                            {% trans \"Add a new background image?\" %}
                        </button>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div id=\"layoutEditFormBackgroundUpload\" style=\"display: none;\"></div>
                </div>

                {% set title %}{% trans \"Resolution\" %}{% endset %}
                {% set helpText %}{% trans \"Change the resolution\" %}{% endset %}
                {{ forms.dropdown(\"resolutionId\", \"single\", title, resolution.resolutionId, resolutions, \"resolutionId\", \"resolution\", helpText, \"resolution-group\") }}

                {% set title %}{% trans \"Layer\" %}{% endset %}
                {% set helpText %}{% trans \"The layering order of the background image (z-index). Advanced use only.\" %}{% endset %}
                {{ forms.input(\"backgroundzIndex\", title, layout.backgroundzIndex, helpText) }}

                {% set title %}{% trans \"Automatically apply Transitions?\" %}{% endset %}
                {% set helpText %}{% trans \"When enabled, the default Transition type and duration will be applied to all widgets on this Layout.\" %}{% endset %}
                {{ forms.checkbox(\"autoApplyTransitions\", title, layout.autoApplyTransitions, helpText) }}
            </form>
        </div>
    </div>
{% endblock %}", "layout-form-background.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-form-background.twig");
    }
}
