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

/* dataset-column-form-delete.twig */
class __TwigTemplate_a4f5fdc31d52145987cf0a1999ae3137b918cfc45677fa508bb1d35af8b37448 extends \Twig\Template
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
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-column-form-delete.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-column-form-delete.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Delete this Column?");
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
        echo __("Yes");
        echo ", \$(\"#dataSetColumnDeleteForm\").submit()    
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = [])
    {
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetColumnDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.column.delete", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "colId" => $this->getAttribute(($context["dataSetColumn"] ?? null), "dataSetColumnId", [])]), "html", null, true);
        echo "\">
                ";
        // line 26
        ob_start();
        echo __("Are you sure you want to delete?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dataset-column-form-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 26,  79 => 25,  75 => 23,  72 => 22,  66 => 19,  62 => 18,  55 => 17,  52 => 16,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
    {% trans \"Delete this Column?\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Yes\" %}, \$(\"#dataSetColumnDeleteForm\").submit()    
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetColumnDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"{{ urlFor(\"dataSet.column.delete\", {id: dataSet.dataSetId, colId: dataSetColumn.dataSetColumnId}) }}\">
                {% set message %}{% trans \"Are you sure you want to delete?\" %}{% endset %}
                {{ forms.message(message) }}
            </form>
        </div>
    </div>
{% endblock %}", "dataset-column-form-delete.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-column-form-delete.twig");
    }
}
