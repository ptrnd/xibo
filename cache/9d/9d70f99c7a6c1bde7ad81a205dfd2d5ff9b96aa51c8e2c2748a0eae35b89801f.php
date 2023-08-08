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

/* dataset-data-form-delete.twig */
class __TwigTemplate_c46ae97519f59ef18eb2e5b5965de0ecae2c6b28178a910f105bbcffebda31d0 extends \Twig\Template
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
        // line 10
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-data-form-delete.twig", 11)->unwrap();
        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-data-form-delete.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        echo __("Delete Row");
    }

    // line 17
    public function block_formButtons($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 19
        echo __("No");
        echo ", XiboDialogClose()
    ";
        // line 20
        echo __("Yes");
        echo ", \$(\"#dataSetDataDelete\").submit()
";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetDataDelete\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.data.delete", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "rowId" => $this->getAttribute(($context["row"] ?? null), "id", [])]), "html", null, true);
        echo "\">
                ";
        // line 27
        ob_start();
        echo __("Are you sure you want to delete this row?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
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
        return "dataset-data-form-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  83 => 27,  79 => 26,  75 => 24,  72 => 23,  66 => 20,  62 => 19,  55 => 18,  52 => 17,  47 => 14,  44 => 13,  39 => 10,  37 => 11,  31 => 10,);
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
{ action missing }
#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Delete Row\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"No\" %}, XiboDialogClose()
    {% trans \"Yes\" %}, \$(\"#dataSetDataDelete\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"dataSetDataDelete\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"{{ urlFor(\"dataSet.data.delete\", {id: dataSet.dataSetId, rowId: row.id}) }}\">
                {% set message %}{% trans \"Are you sure you want to delete this row?\" %}{% endset %}
                {{ forms.message(message) }}
            </form>
        </div>
    </div>
{% endblock %}", "dataset-data-form-delete.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-data-form-delete.twig");
    }
}
