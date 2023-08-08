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

/* datasetticker-form-edit-step1.twig */
class __TwigTemplate_f0290ad70c0de39497197112522d4a45aa4981a3b79985777e4789a234d2685f extends \Twig\Template
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
        // line 21
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        $context["forms"] = $this->loadTemplate("forms.twig", "datasetticker-form-edit-step1.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("form-base.twig", "datasetticker-form-edit-step1.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_formTitle($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        echo __("DataSet Ticker - Choose your DataSet");
    }

    // line 28
    public function block_formHtml($context, array $blocks = [])
    {
        // line 29
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetTickerForm\" class=\"XiboForm form-horizontal\" data-form-step=\"1\" method=\"put\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", ["id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "widgetId", [])]), "html", null, true);
        echo "\"
                  data-next-form-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit.form", ["type" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "widget", []), "type", [])]), "html", null, true);
        echo "?step=2\">

                ";
        // line 34
        ob_start();
        echo __("DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                ";
        ob_start();
        echo __("Please select the DataSet to use as a source of data for this ticker.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        $context["attributes"] = [0 => ["name" => "data-width", "value" => "200px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.dataset.search")], 5 => ["name" => "data-search-term", "value" => "dataSet"], 6 => ["name" => "data-id-property", "value" => "dataSetId"], 7 => ["name" => "data-text-property", "value" => "dataSet"]];
        // line 46
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
        return "datasetticker-form-edit-step1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 46,  76 => 36,  71 => 35,  67 => 34,  62 => 32,  58 => 31,  54 => 29,  51 => 28,  46 => 25,  43 => 24,  38 => 21,  36 => 22,  30 => 21,);
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
 * Copyright (C) 2015-2018 Xibo Signage Ltd
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
#}
{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"DataSet Ticker - Choose your DataSet\" %}
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetTickerForm\" class=\"XiboForm form-horizontal\" data-form-step=\"1\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\"
                  data-next-form-url=\"{{ urlFor(\"module.widget.edit.form\", {type: module.widget.type}) }}?step=2\">

                {% set title %}{% trans \"DataSet\" %}{% endset %}
                {% set helpText %}{% trans \"Please select the DataSet to use as a source of data for this ticker.\" %}{% endset %}
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
{% endblock %}", "datasetticker-form-edit-step1.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetticker-form-edit-step1.twig");
    }
}
