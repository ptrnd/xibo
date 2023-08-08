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

/* layout-form-publish.twig */
class __TwigTemplate_56557b019790394d049b6f6f90ada91ea6069f636c3b33219ab6ad90bf7b2edf extends \Twig\Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-publish.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-publish.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $context["layout"] = $this->getAttribute(($context["layout"] ?? null), "layout", []);
        // line 28
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Publish %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 33
        echo __("Publish");
        echo ", \$(\"#layoutPublishForm\").submit()
";
    }

    // line 36
    public function block_formFieldActions($context, array $blocks = [])
    {
        // line 37
        echo "    [{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"block\" }
    }
    }]
";
    }

    // line 72
    public function block_formHtml($context, array $blocks = [])
    {
        // line 73
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutPublishForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.publish", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 76
        echo $context["forms"]->getmessage("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.");
        echo "

                ";
        // line 78
        ob_start();
        echo __("Publish Now?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                ";
        ob_start();
        echo __("When selected, layout will be published immediately, if it should be published at a specific time, uncheck this checkbox and pick a date in the field below");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                ";
        echo $context["forms"]->getcheckbox("publishNow", ($context["title"] ?? null), 1, ($context["helpText"] ?? null));
        echo "

                ";
        // line 82
        ob_start();
        echo __("Publish Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                ";
        ob_start();
        echo __("Select the date and time to publish the layout");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                ";
        echo $context["forms"]->getdateTime("publishDate", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "publishedDate", []), ($context["helpText"] ?? null), "publish-date-control", "");
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-publish.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 84,  145 => 83,  141 => 82,  135 => 80,  130 => 79,  126 => 78,  121 => 76,  117 => 75,  113 => 73,  110 => 72,  73 => 37,  70 => 36,  64 => 33,  59 => 32,  56 => 31,  51 => 28,  48 => 27,  45 => 26,  40 => 23,  38 => 24,  32 => 23,);
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
 * Copyright (C) 2018 Spring Signage Ltd
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
    {% set layout = layout.layout %}
    {% trans %}Publish {{ layout }}{% endtrans %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Publish\" %}, \$(\"#layoutPublishForm\").submit()
{% endblock %}

{% block formFieldActions %}
    [{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"block\" }
    }
    }]
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutPublishForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"layout.publish\", {id: layout.layoutId}) }}\">
\t\t\t\t{{ forms.message(\"Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.\") }}

                {% set title %}{% trans \"Publish Now?\" %}{% endset %}
                {% set helpText %}{% trans \"When selected, layout will be published immediately, if it should be published at a specific time, uncheck this checkbox and pick a date in the field below\" %}{% endset %}
                {{ forms.checkbox(\"publishNow\", title, 1, helpText) }}

                {% set title %}{% trans \"Publish Date\" %}{% endset %}
                {% set helpText %}{% trans \"Select the date and time to publish the layout\" %}{% endset %}
                {{ forms.dateTime(\"publishDate\", title, layout.publishedDate, helpText, \"publish-date-control\", \"\") }}
            </form>
        </div>
    </div>
{% endblock %}", "layout-form-publish.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-form-publish.twig");
    }
}
