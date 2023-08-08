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

/* dataset-column-form-edit.twig */
class __TwigTemplate_95aa1e788da84418e96a73a7891d89753390a1e2689f572f47c0dbc7526cf0b9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-column-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-column-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Edit Column");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 18
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Save");
        echo ", \$(\"#dataSetColumnEditForm\").submit()    
";
    }

    // line 22
    public function block_formFieldActions($context, array $blocks = [])
    {
        // line 23
        echo "[
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"block\" }, \".remoteField\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"block\" }, \".remoteField\": { \"display\": \"none\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"block\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"block\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"block\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"block\" } }
    }
]
";
    }

    // line 54
    public function block_formHtml($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetColumnEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.column.edit", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "colId" => $this->getAttribute(($context["dataSetColumn"] ?? null), "dataSetColumnId", [])]), "html", null, true);
        echo "\">
                ";
        // line 58
        ob_start();
        echo __("Heading");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                ";
        ob_start();
        echo __("The heading for this Column");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                ";
        echo $context["forms"]->getinput("heading", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "heading", []), ($context["helpText"] ?? null), "", "required");
        echo "

                ";
        // line 62
        ob_start();
        echo __("Column Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                ";
        ob_start();
        echo __("Select the Column Type");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                ";
        echo $context["forms"]->getdropdown("dataSetColumnTypeId", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "dataSetColumnTypeId", []), ($context["dataSetColumnTypes"] ?? null), "dataSetColumnTypeId", "dataSetColumnType", ($context["helpText"] ?? null));
        echo "

                ";
        // line 66
        ob_start();
        echo __("Data Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                ";
        ob_start();
        echo __("The DataType of the Intended Data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                ";
        echo $context["forms"]->getdropdown("dataTypeId", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "dataTypeId", []), ($context["dataTypes"] ?? null), "dataTypeId", "dataType", ($context["helpText"] ?? null));
        echo "

                ";
        // line 70
        ob_start();
        echo __("List Content");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                ";
        ob_start();
        echo __("A comma separated list of items to present in a combo box");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                ";
        echo $context["forms"]->getinput("listContent", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "listContent", []), ($context["helpText"] ?? null), "listContent");
        echo "

                ";
        // line 74
        ob_start();
        echo __("Remote Data Path");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                ";
        if (($this->getAttribute(($context["dataSet"] ?? null), "sourceId", []) == 1)) {
            // line 76
            echo "                    ";
            ob_start();
            echo __("Give the JSON-path in the remote data for the value that you want to fill this column. This path should be relative to the DataRoot configured on the DataSet.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            echo "                ";
        } else {
            // line 78
            echo "                    ";
            ob_start();
            echo __("Provide Column number relative to the spreadsheet, numeration starts from 0 ie to get values from Column A from spreadsheet to this column enter 0");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo "                ";
        }
        // line 80
        echo "                ";
        echo $context["forms"]->getinput("remoteField", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "remoteField", []), ($context["helpText"] ?? null), "remoteField");
        echo "

                ";
        // line 82
        ob_start();
        echo __("Column Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                ";
        ob_start();
        echo __("The order this column should be displayed in when entering data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                ";
        echo $context["forms"]->getnumber("columnOrder", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "columnOrder", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 86
        ob_start();
        echo __("Formula");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                ";
        ob_start();
        echo __("A formula to use as a calculation for formula column types");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                ";
        echo $context["forms"]->getinput("formula", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "formula", []), ($context["helpText"] ?? null), "formula");
        echo "

                ";
        // line 90
        ob_start();
        echo __("Filter?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                ";
        ob_start();
        echo __("Show as a filter option on the Data Entry Page?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                ";
        echo $context["forms"]->getcheckbox("showFilter", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "showFilter", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 94
        ob_start();
        echo __("Sort?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                ";
        ob_start();
        echo __("Enable sorting on the Data Entry Page? We recommend that the number of sortable columns is kept to a minimum.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                ";
        echo $context["forms"]->getcheckbox("showSort", ($context["title"] ?? null), $this->getAttribute(($context["dataSetColumn"] ?? null), "showSort", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 98
        ob_start();
        echo __("Two substitutions are available for formulas: [DisplayId] and [DisplayGeoLocation]. They will be substituted at run time with the Display ID / Display Geo Location (MySQL GEOMETRY).");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                ";
        echo $context["forms"]->getmessage(($context["message"] ?? null), "alert alert-info formula");
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dataset-column-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 99,  269 => 98,  263 => 96,  258 => 95,  254 => 94,  248 => 92,  243 => 91,  239 => 90,  233 => 88,  228 => 87,  224 => 86,  218 => 84,  213 => 83,  209 => 82,  203 => 80,  200 => 79,  195 => 78,  192 => 77,  187 => 76,  184 => 75,  180 => 74,  174 => 72,  169 => 71,  165 => 70,  159 => 68,  154 => 67,  150 => 66,  144 => 64,  139 => 63,  135 => 62,  129 => 60,  124 => 59,  120 => 58,  116 => 57,  112 => 55,  109 => 54,  76 => 23,  73 => 22,  67 => 19,  63 => 18,  56 => 17,  53 => 16,  48 => 13,  45 => 12,  40 => 9,  38 => 10,  32 => 9,);
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
    {% trans \"Edit Column\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#dataSetColumnEditForm\").submit()    
{% endblock %}

{% block formFieldActions %}
[
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"block\" }, \".remoteField\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"1\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"block\" }, \".remoteField\": { \"display\": \"none\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"block\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"2\",
      \"actions\": { \".formula\": { \"display\": \"block\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"none\" } }
    },
    {
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"init\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"block\" } }
    },{
      \"field\": \"dataSetColumnTypeId\", \"trigger\": \"change\",
      \"operation\": \"equals\", \"value\": \"3\",
      \"actions\": { \".formula\": { \"display\": \"none\" }, \".listContent\": { \"display\": \"none\" }, \".remoteField\": { \"display\": \"block\" } }
    }
]
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetColumnEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"dataSet.column.edit\", {id: dataSet.dataSetId, colId: dataSetColumn.dataSetColumnId}) }}\">
                {% set title %}{% trans \"Heading\" %}{% endset %}
                {% set helpText %}{% trans \"The heading for this Column\" %}{% endset %}
                {{ forms.input(\"heading\", title, dataSetColumn.heading, helpText, \"\", \"required\") }}

                {% set title %}{% trans \"Column Type\" %}{% endset %}
                {% set helpText %}{% trans \"Select the Column Type\" %}{% endset %}
                {{ forms.dropdown(\"dataSetColumnTypeId\", \"single\", title, dataSetColumn.dataSetColumnTypeId, dataSetColumnTypes, \"dataSetColumnTypeId\", \"dataSetColumnType\", helpText) }}

                {% set title %}{% trans \"Data Type\" %}{% endset %}
                {% set helpText %}{% trans \"The DataType of the Intended Data\" %}{% endset %}
                {{ forms.dropdown(\"dataTypeId\", \"single\", title, dataSetColumn.dataTypeId, dataTypes, \"dataTypeId\", \"dataType\", helpText) }}

                {% set title %}{% trans \"List Content\" %}{% endset %}
                {% set helpText %}{% trans \"A comma separated list of items to present in a combo box\" %}{% endset %}
                {{ forms.input(\"listContent\", title, dataSetColumn.listContent, helpText, \"listContent\") }}

                {% set title %}{% trans \"Remote Data Path\" %}{% endset %}
                {% if dataSet.sourceId == 1 %}
                    {% set helpText %}{% trans \"Give the JSON-path in the remote data for the value that you want to fill this column. This path should be relative to the DataRoot configured on the DataSet.\" %}{% endset %}
                {% else %}
                    {% set helpText %}{% trans \"Provide Column number relative to the spreadsheet, numeration starts from 0 ie to get values from Column A from spreadsheet to this column enter 0\" %}{% endset %}
                {% endif %}
                {{ forms.input(\"remoteField\", title, dataSetColumn.remoteField, helpText, \"remoteField\") }}

                {% set title %}{% trans \"Column Order\" %}{% endset %}
                {% set helpText %}{% trans \"The order this column should be displayed in when entering data\" %}{% endset %}
                {{ forms.number(\"columnOrder\", title, dataSetColumn.columnOrder, helpText) }}

                {% set title %}{% trans \"Formula\" %}{% endset %}
                {% set helpText %}{% trans \"A formula to use as a calculation for formula column types\" %}{% endset %}
                {{ forms.input(\"formula\", title, dataSetColumn.formula, helpText, \"formula\") }}

                {% set title %}{% trans \"Filter?\" %}{% endset %}
                {% set helpText %}{% trans \"Show as a filter option on the Data Entry Page?\" %}{% endset %}
                {{ forms.checkbox(\"showFilter\", title, dataSetColumn.showFilter, helpText) }}

                {% set title %}{% trans \"Sort?\" %}{% endset %}
                {% set helpText %}{% trans \"Enable sorting on the Data Entry Page? We recommend that the number of sortable columns is kept to a minimum.\" %}{% endset %}
                {{ forms.checkbox(\"showSort\", title, dataSetColumn.showSort, helpText) }}

                {% set message %}{% trans \"Two substitutions are available for formulas: [DisplayId] and [DisplayGeoLocation]. They will be substituted at run time with the Display ID / Display Geo Location (MySQL GEOMETRY).\" %}{% endset %}
                {{ forms.message(message, \"alert alert-info formula\") }}
            </form>
        </div>
    </div>
{% endblock %}", "dataset-column-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-column-form-edit.twig");
    }
}
