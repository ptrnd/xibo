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

/* dataset-data-form-add.twig */
class __TwigTemplate_696f957462ca012e8971a41c00c32e74904e223fec17f76cf3c68d3531a0fa5b extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-data-form-add.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-data-form-add.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo __("Add Data");
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 32
        echo __("Next");
        echo ", XiboDialogApply(\"#dataSetDataAdd\")
    ";
        // line 33
        echo __("Save");
        echo ", \$(\"#dataSetDataAdd\").submit()
";
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetDataAdd\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.add", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataSet"] ?? null), "getColumn", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 41
            echo "                    ";
            if (($this->getAttribute($context["col"], "dataSetColumnTypeId", []) == 1)) {
                // line 42
                echo "                        ";
                $context["fieldId"] = ("dataSetColumnId_" . $this->getAttribute($context["col"], "dataSetColumnId", []));
                // line 43
                echo "
                        ";
                // line 45
                echo "                        ";
                if (($this->getAttribute($context["col"], "dataTypeId", []) == 2)) {
                    // line 46
                    echo "                            ";
                    echo $context["forms"]->getnumber(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 47
$context["col"], "dataTypeId", []) == 3)) {
                    // line 48
                    echo "                            ";
                    echo $context["forms"]->getdateTime(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 49
$context["col"], "dataTypeId", []) == 5)) {
                    // line 50
                    echo "                            ";
                    ob_start();
                    echo __("Select an Image");
                    $context["selectImage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 51
                    echo "                            ";
                    $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search")], 1 => ["name" => "data-search-term", "value" => "media"], 2 => ["name" => "data-search-term-tags", "value" => "tags"], 3 => ["name" => "data-id-property", "value" => "mediaId"], 4 => ["name" => "data-text-property", "value" => "name"], 5 => ["name" => "data-filter-options", "value" => "{\"type\":\"image\"}"], 6 => ["name" => "data-allow-clear", "value" => "true"], 7 => ["name" => "data-placeholder", "value" =>                     // line 59
($context["selectImage"] ?? null)]];
                    // line 61
                    echo "                            ";
                    echo $context["forms"]->getdropdown(($context["fieldId"] ?? null), "single", $this->getAttribute($context["col"], "heading", []), "", null, "mediaId", "name", "", "pagedSelect", "", "", "", ($context["attributes"] ?? null));
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 62
$context["col"], "listContent", []) != "")) {
                    // line 63
                    echo "                            ";
                    echo $context["forms"]->getdropdown(($context["fieldId"] ?? null), "single", $this->getAttribute($context["col"], "heading", []), ($context["heading"] ?? null), twig_array_merge([0 => ""], $this->getAttribute($context["col"], "listContentArray", [], "method")));
                    echo "
                        ";
                } else {
                    // line 65
                    echo "                            ";
                    echo $context["forms"]->getinput(($context["fieldId"] ?? null), $this->getAttribute($context["col"], "heading", []));
                    echo "
                        ";
                }
                // line 67
                echo "                    ";
            }
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dataset-data-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 69,  142 => 68,  139 => 67,  133 => 65,  127 => 63,  125 => 62,  120 => 61,  118 => 59,  116 => 51,  111 => 50,  109 => 49,  104 => 48,  102 => 47,  97 => 46,  94 => 45,  91 => 43,  88 => 42,  85 => 41,  81 => 40,  77 => 39,  73 => 37,  70 => 36,  64 => 33,  60 => 32,  55 => 31,  52 => 30,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
    {% trans \"Add Data\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Next\" %}, XiboDialogApply(\"#dataSetDataAdd\")
    {% trans \"Save\" %}, \$(\"#dataSetDataAdd\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetDataAdd\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"{{ urlFor(\"dataSet.data.add\", {id: dataSet.dataSetId}) }}\">
                {% for col in dataSet.getColumn() %}
                    {% if col.dataSetColumnTypeId == 1 %}
                        {% set fieldId = \"dataSetColumnId_#{col.dataSetColumnId}\" %}

                        {# Field depending on what data type we have #}
                        {% if col.dataTypeId == 2 %}
                            {{ forms.number(fieldId, col.heading) }}
                        {% elseif col.dataTypeId == 3 %}
                            {{ forms.dateTime(fieldId, col.heading) }}
                        {% elseif col.dataTypeId == 5 %}
                            {% set selectImage %}{% trans \"Select an Image\" %}{% endset %}
                            {% set attributes = [
                                { name: \"data-search-url\", value: urlFor(\"library.search\") },
                                { name: \"data-search-term\", value: \"media\" },
                                { name: \"data-search-term-tags\", value: \"tags\" },
                                { name: \"data-id-property\", value: \"mediaId\" },
                                { name: \"data-text-property\", value: \"name\" },
                                { name: \"data-filter-options\", value: '{\"type\":\"image\"}' },
                                { name: \"data-allow-clear\", value: \"true\"},
                                { name: \"data-placeholder\", value: selectImage}
                            ] %}
                            {{ forms.dropdown(fieldId, \"single\", col.heading, \"\", null, \"mediaId\", \"name\", \"\", \"pagedSelect\", \"\", \"\", \"\", attributes) }}
                        {% elseif col.listContent != \"\" %}
                            {{ forms.dropdown(fieldId, \"single\", col.heading, heading, [\"\"]|merge(col.listContentArray())) }}
                        {% else %}
                            {{ forms.input(fieldId, col.heading) }}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </form>
        </div>
    </div>
{% endblock %}", "dataset-data-form-add.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-data-form-add.twig");
    }
}
