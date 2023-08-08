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

/* dataset-data-form-edit.twig */
class __TwigTemplate_7dc2ca60c30684370fbd9424bc9bf3a8052766bb450ff8581adb4e2224e9bfb6 extends \Twig\Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-data-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-data-form-edit.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        echo __("Edit Data");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo __("Delete");
        echo ", XiboSwapDialog(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.delete.form", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "rowId" => $this->getAttribute(($context["row"] ?? null), "id", [])]), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        echo ", \$(\"#dataSetEditData\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetEditData\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.edit", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "rowId" => $this->getAttribute(($context["row"] ?? null), "id", [])]), "html", null, true);
        echo "\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataSet"] ?? null), "getColumn", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 42
            echo "                    ";
            if (($this->getAttribute($context["col"], "dataSetColumnTypeId", []) == 1)) {
                // line 43
                echo "                        ";
                $context["fieldId"] = ("dataSetColumnId_" . $this->getAttribute($context["col"], "dataSetColumnId", []));
                // line 44
                echo "                        ";
                $context["heading"] = $this->getAttribute(($context["row"] ?? null), $this->getAttribute($context["col"], "heading", []));
                // line 45
                echo "
                        ";
                // line 47
                echo "                        ";
                if (($this->getAttribute($context["col"], "dataTypeId", []) == 2)) {
                    // line 48
                    echo "                            ";
                    echo $context["forms"]->getnumber(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 49
$context["col"], "dataTypeId", []) == 3)) {
                    // line 50
                    echo "                            ";
                    echo $context["forms"]->getdateTime(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 51
$context["col"], "dataTypeId", []) == 5)) {
                    // line 52
                    echo "                            ";
                    $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search")], 1 => ["name" => "data-search-term", "value" => "media"], 2 => ["name" => "data-search-term-tags", "value" => "tags"], 3 => ["name" => "data-id-property", "value" => "mediaId"], 4 => ["name" => "data-text-property", "value" => "name"], 5 => ["name" => "data-filter-options", "value" => "{\"type\":\"image\"}"], 6 => ["name" => "data-allow-clear", "value" => "true"], 7 => ["name" => "data-placeholder", "value" => "Select an Image"]];
                    // line 62
                    echo "                            ";
                    $context["images"] = $this->getAttribute(($context["row"] ?? null), "__images");
                    // line 63
                    echo "                            ";
                    $context["images"] = $this->getAttribute(($context["images"] ?? null), $this->getAttribute($context["col"], "dataSetColumnId", []));
                    // line 64
                    echo "                            ";
                    echo $context["forms"]->getdropdown(($context["fieldId"] ?? null), "single", $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null), [0 => ($context["images"] ?? null)], "mediaId", "name", "", "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 65
$context["col"], "listContent", []) != "")) {
                    // line 66
                    echo "                            ";
                    echo $context["forms"]->getdropdown(($context["fieldId"] ?? null), "single", $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null), twig_array_merge([0 => ""], $this->getAttribute($context["col"], "listContentArray", [], "method")));
                    echo "
                        ";
                } else {
                    // line 68
                    echo "                            ";
                    echo $context["forms"]->getinput(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null));
                    echo "
                        ";
                }
                // line 70
                echo "                    ";
            }
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dataset-data-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 72,  147 => 71,  144 => 70,  138 => 68,  132 => 66,  130 => 65,  125 => 64,  122 => 63,  119 => 62,  116 => 52,  114 => 51,  109 => 50,  107 => 49,  102 => 48,  99 => 47,  96 => 45,  93 => 44,  90 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 38,  72 => 37,  66 => 34,  62 => 33,  55 => 32,  52 => 31,  47 => 28,  44 => 27,  39 => 24,  37 => 25,  31 => 24,);
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
    {% trans \"Edit Data\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Delete\" %}, XiboSwapDialog(\"{{ urlFor(\"dataSet.data.delete.form\", {id: dataSet.dataSetId, rowId: row.id}) }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#dataSetEditData\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetEditData\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"dataSet.data.edit\", {id: dataSet.dataSetId, rowId: row.id}) }}\">
                {% for col in dataSet.getColumn() %}
                    {% if col.dataSetColumnTypeId == 1 %}
                        {% set fieldId = \"dataSetColumnId_#{col.dataSetColumnId}\" %}
                        {% set heading = attribute(row, col.heading) %}

                        {# Field depending on what data type we have #}
                        {% if col.dataTypeId == 2 %}
                            {{ forms.number(fieldId, col.heading, heading) }}
                        {% elseif col.dataTypeId == 3 %}
                            {{ forms.dateTime(fieldId, col.heading, heading) }}
                        {% elseif col.dataTypeId == 5 %}
                            {% set attributes = [
                                { name: \"data-search-url\", value: urlFor(\"library.search\") },
                                { name: \"data-search-term\", value: \"media\" },
                                { name: \"data-search-term-tags\", value: \"tags\" },
                                { name: \"data-id-property\", value: \"mediaId\" },
                                { name: \"data-text-property\", value: \"name\" },
                                { name: \"data-filter-options\", value: '{\"type\":\"image\"}' },
                                { name: \"data-allow-clear\", value: \"true\"},
                                { name: \"data-placeholder\", value: \"Select an Image\"}
                            ] %}
                            {% set images = attribute(row, \"__images\") %}
                            {% set images = attribute(images, col.dataSetColumnId) %}
                            {{ forms.dropdown(fieldId, \"single\", col.heading, heading, [images], \"mediaId\", \"name\", \"\", \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                        {% elseif col.listContent != \"\" %}
                            {{ forms.dropdown(fieldId, \"single\", col.heading, heading, [\"\"]|merge(col.listContentArray())) }}
                        {% else %}
                            {{ forms.input(fieldId, col.heading, heading) }}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </form>
        </div>
    </div>
{% endblock %}", "dataset-data-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-data-form-edit.twig");
    }
}
