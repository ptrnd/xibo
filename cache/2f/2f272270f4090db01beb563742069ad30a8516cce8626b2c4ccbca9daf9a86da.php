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

/* display-form-defaultlayout.twig */
class __TwigTemplate_abafd3e8a85c1a8864e7a9b9e9ab6d409952d52b0a89c2a6a8bee96a33f8dbd0 extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "display-form-defaultlayout.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-defaultlayout.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo __("Set Default Layout");
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
        echo __("Save");
        echo ", \$(\"#displayDefaultLayoutForm\").submit()
";
    }

    // line 35
    public function block_formHtml($context, array $blocks = [])
    {
        // line 36
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayDefaultLayoutForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.defaultlayout", ["id" => $this->getAttribute(($context["display"] ?? null), "displayId", [])]), "html", null, true);
        echo "\">
                ";
        // line 39
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search")], 1 => ["name" => "data-search-term", "value" => "layout"], 2 => ["name" => "data-search-term-tags", "value" => "tags"], 3 => ["name" => "data-id-property", "value" => "layoutId"], 4 => ["name" => "data-text-property", "value" => "layout"], 5 => ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 47
        echo "
                ";
        // line 48
        ob_start();
        echo __("Default Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                ";
        ob_start();
        echo __("The Default Layout to Display where there is no other content.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                ";
        echo $context["forms"]->getdropdown("layoutId", "single", ($context["title"] ?? null), $this->getAttribute(($context["display"] ?? null), "defaultLayoutId", []), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null));
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display-form-defaultlayout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 50,  86 => 49,  82 => 48,  79 => 47,  77 => 39,  73 => 38,  69 => 36,  66 => 35,  60 => 32,  55 => 31,  52 => 30,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
    {% trans \"Set Default Layout\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#displayDefaultLayoutForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayDefaultLayoutForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"display.defaultlayout\", {id: display.displayId}) }}\">
                {% set attributes = [
                    { name: \"data-search-url\", value: urlFor(\"layout.search\") },
                    { name: \"data-search-term\", value: \"layout\" },
                    { name: \"data-search-term-tags\", value: \"tags\" },
                    { name: \"data-id-property\", value: \"layoutId\" },
                    { name: \"data-text-property\", value: \"layout\" },
                    { name: \"data-filter-options\", value: '{\"retired\":\"0\"}' }
                ] %}

                {% set title %}{% trans \"Default Layout\" %}{% endset %}
                {% set helpText %}{% trans \"The Default Layout to Display where there is no other content.\" %}{% endset %}
                {{ forms.dropdown(\"layoutId\", \"single\", title, display.defaultLayoutId, layouts, \"layoutId\", \"layout\", helpText, \"pagedSelect\", \"\", \"\", \"\", attributes) }}
            </form>
        </div>
    </div>
{% endblock %}", "display-form-defaultlayout.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-form-defaultlayout.twig");
    }
}
