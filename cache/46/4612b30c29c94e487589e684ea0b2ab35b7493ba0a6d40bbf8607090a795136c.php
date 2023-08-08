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

/* layout-form-edit.twig */
class __TwigTemplate_16346c40923cd436b9a9d13ab4b110df9a93267651407908472d6e1f94362f66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
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
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo __("Edit Layout");
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
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 40
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("Description");
        echo "</span></a></li>
            </ul>
            <form id=\"layoutEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.edit", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 46
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        ob_start();
        echo __("The Name of the Layout - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "layout", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 50
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        ob_start();
        echo __("Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        echo $context["forms"]->getinputWithTags("tags", ($context["title"] ?? null), ($context["tags"] ?? null), ($context["helpText"] ?? null), "tags-with-value");
        echo "

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        ";
        // line 56
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        echo $context["forms"]->getdropdown("tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value");
        echo "

                        <div id=\"tagValueContainer\">
                            ";
        // line 60
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                            ";
        ob_start();
        echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                            ";
        echo $context["forms"]->getinput("tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>";
        // line 66
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
                        </div>

                        ";
        // line 69
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        ob_start();
        echo __("Retire this layout or not? It will no longer be visible in lists");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        echo $context["forms"]->getcheckbox("retired", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "retired", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 73
        ob_start();
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Layout. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        echo $context["forms"]->getcheckbox("enableStat", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "enableStat", []), ($context["helpText"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 78
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        ob_start();
        echo __("An optional description of the Layout. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        echo $context["forms"]->gettextarea("description", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "description", []), ($context["helpText"] ?? null));
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
        return "layout-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  198 => 79,  194 => 78,  187 => 75,  182 => 74,  178 => 73,  172 => 71,  167 => 70,  163 => 69,  157 => 66,  149 => 62,  144 => 61,  140 => 60,  133 => 57,  129 => 56,  121 => 52,  116 => 51,  112 => 50,  106 => 48,  101 => 47,  97 => 46,  89 => 43,  84 => 41,  80 => 40,  75 => 37,  72 => 36,  66 => 33,  62 => 32,  55 => 31,  52 => 30,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
 * Xibo - Digital Signage - http://www.xibo.org.uk
 * Copyright (C) 2015-2018 Spring Signage Ltd
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
 *
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

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Description\" %}</span></a></li>
            </ul>
            <form id=\"layoutEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"layout.edit\", {id: layout.layoutId}) }}\" data-gettag=\"{{ urlFor(\"tag.getByName\") }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"The Name of the Layout - (1 - 50 characters)\" %}{% endset %}
                        {{ forms.input(\"name\", title, layout.layout, helpText) }}

                        {% set title %}{% trans \"Tags\" %}{% endset %}
                        {% set helpText %}{% trans \"Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.\" %}{% endset %}
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

                        {% set title %}{% trans \"Retired\" %}{% endset %}
                        {% set helpText %}{% trans \"Retire this layout or not? It will no longer be visible in lists\" %}{% endset %}
                        {{ forms.checkbox(\"retired\", title, layout.retired, helpText) }}

                        {% set title %}{% trans \"Enable Stats Collection?\" %}{% endset %}
                        {% set helpText %}{% trans \"Enable the collection of Proof of Play statistics for this Layout. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.\" %}{% endset %}
                        {{ forms.checkbox(\"enableStat\", title, layout.enableStat, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        {% set title %}{% trans \"Description\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional description of the Layout. (1 - 250 characters)\" %}{% endset %}
                        {{ forms.textarea(\"description\", title, layout.description, helpText) }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "layout-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-form-edit.twig");
    }
}
