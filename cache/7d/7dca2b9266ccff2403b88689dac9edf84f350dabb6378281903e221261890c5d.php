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

/* datasetview-form-edit-step1.twig */
class __TwigTemplate_1f5c2343fb13617cac51474f07e581a657ee8107d6e07c0fe715a30083a456af extends \Twig\Template
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
        // line 22
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        $context["forms"] = $this->loadTemplate("forms.twig", "datasetview-form-edit-step1.twig", 23)->unwrap();
        // line 22
        $this->parent = $this->loadTemplate("form-base.twig", "datasetview-form-edit-step1.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_formTitle($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        echo __("Select your DataSet");
    }

    // line 29
    public function block_formHtml($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetEditFormStep1\" class=\"XiboForm form-horizontal\" data-form-step=\"1\" method=\"put\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\"
                  data-next-form-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit.form", ["type" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "type", [])]), "html", null, true);
        echo "?step=2\">

                ";
        // line 35
        ob_start();
        echo __("DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        ob_start();
        echo __("Please select the DataSet to use as a source of data for this view.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                ";
        $context["attributes"] = [0 => ["name" => "data-width", "value" => "200px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.dataset.search")], 5 => ["name" => "data-search-term", "value" => "dataSet"], 6 => ["name" => "data-id-property", "value" => "dataSetId"], 7 => ["name" => "data-text-property", "value" => "dataSet"]];
        // line 47
        echo "                ";
        echo $context["forms"]->getdropdown("dataSetId", "single", ($context["title"] ?? null), "", $this->getAttribute(($context["module"] ?? null), "getDataSet", [], "method"), "dataSetId", "dataSet", ($context["helpText"] ?? null), "dataset-fields pagedSelect", "", "", "", ($context["attributes"] ?? null));
        echo "
            
                <input type=\"hidden\" name=\"step\" value=\"1\" />
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "datasetview-form-edit-step1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 47,  76 => 37,  71 => 36,  67 => 35,  62 => 33,  58 => 32,  54 => 30,  51 => 29,  46 => 26,  43 => 25,  38 => 22,  36 => 23,  30 => 22,);
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
 * Copyright (C) 2012-2018 Xibo Signage Ltd
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
    {% trans \"Select your DataSet\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetEditFormStep1\" class=\"XiboForm form-horizontal\" data-form-step=\"1\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\"
                  data-next-form-url=\"{{ urlFor(\"module.widget.edit.form\", {type: module.widget.type}) }}?step=2\">

                {% set title %}{% trans \"DataSet\" %}{% endset %}
                {% set helpText %}{% trans \"Please select the DataSet to use as a source of data for this view.\" %}{% endset %}
                {% set attributes = [
                    { name: \"data-width\", value: \"200px\" },
                    { name: \"data-allow-clear\", value: \"true\" },
                    { name: \"data-placeholder--id\", value: null },
                    { name: \"data-placeholder--value\", value: \"\" },
                    { name: \"data-search-url\", value: urlFor(\"module.widget.dataset.search\") },
                    { name: \"data-search-term\", value: \"dataSet\" },
                    { name: \"data-id-property\", value: \"dataSetId\" },
                    { name: \"data-text-property\", value: \"dataSet\" }
                ] %}
                {{ forms.dropdown(\"dataSetId\", \"single\", title, \"\", module.getDataSet(), \"dataSetId\", \"dataSet\", helpText, \"dataset-fields pagedSelect\", \"\", \"\", \"\", attributes) }}
            
                <input type=\"hidden\" name=\"step\" value=\"1\" />
            </form>
        </div>
    </div>
{% endblock %}", "datasetview-form-edit-step1.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetview-form-edit-step1.twig");
    }
}
