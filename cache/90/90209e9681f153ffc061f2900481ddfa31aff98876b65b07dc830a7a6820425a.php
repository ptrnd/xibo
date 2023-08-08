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

/* layout-form-export.twig */
class __TwigTemplate_5f9129450702b5a7aed1cec83d5b0cdaa20dd78e2b9854e1dee8b9fa3aa159d0 extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-export.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-export.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Export");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Export");
        echo ", layoutExportFormSubmit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutExportForm\" class=\"form-horizontal\" method=\"get\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.export", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\">
                ";
        // line 25
        $context["layoutName"] = $this->getAttribute(($context["layout"] ?? null), "layout", []);
        // line 26
        echo "                ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("You have selected %layoutName% for export. A ZIP file will be downloaded which contains the layout, its widgets and media. It will also contain the structure for associated DataSets."), array("%layoutName%" => ($context["layoutName"] ?? null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        echo $context["forms"]->getmessage(($context["helpText"] ?? null));
        echo "

                ";
        // line 29
        if (($this->getAttribute(($context["currentUser"] ?? null), "isSuperAdmin", [], "method") == false)) {
            // line 30
            echo "                    ";
            ob_start();
            echo __("If you do not have permission for the Layout contents, the export will fail.");
            $context["exportMessageWarning"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            echo "                    ";
            echo $context["forms"]->getmessage(($context["exportMessageWarning"] ?? null), "alert alert-info");
            echo "
                ";
        }
        // line 33
        echo "
                ";
        // line 34
        ob_start();
        echo __("Include DataSet data?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                ";
        ob_start();
        echo __("Do you want to include the DataSet data?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        echo $context["forms"]->getcheckbox("includeData", ($context["title"] ?? null), 0, ($context["helpText"] ?? null));
        echo "

                ";
        // line 38
        ob_start();
        echo __("Save as");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                ";
        ob_start();
        echo __("Change the name of the downloaded file if desired.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                ";
        echo $context["forms"]->getinput("saveAs", ($context["title"] ?? null), ($context["saveAs"] ?? null), ($context["helpText"] ?? null));
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  125 => 39,  121 => 38,  115 => 36,  110 => 35,  106 => 34,  103 => 33,  97 => 31,  92 => 30,  90 => 29,  84 => 27,  79 => 26,  77 => 25,  73 => 24,  69 => 22,  66 => 21,  60 => 18,  55 => 17,  52 => 16,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
 * Copyright (C) 2016 Spring Signage Ltd
 * (layout-form-export.twig)
 */
#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Export\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Export\" %}, layoutExportFormSubmit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutExportForm\" class=\"form-horizontal\" method=\"get\" action=\"{{ urlFor(\"layout.export\",  {id: layout.layoutId}) }}\">
                {% set layoutName = layout.layout %}
                {% set helpText %}{% trans %}You have selected {{ layoutName }} for export. A ZIP file will be downloaded which contains the layout, its widgets and media. It will also contain the structure for associated DataSets.{% endtrans %}{% endset %}
                {{ forms.message(helpText) }}

                {% if currentUser.isSuperAdmin() == false %}
                    {% set exportMessageWarning %}{% trans \"If you do not have permission for the Layout contents, the export will fail.\" %}{% endset %}
                    {{ forms.message(exportMessageWarning, 'alert alert-info') }}
                {% endif %}

                {% set title %}{% trans \"Include DataSet data?\" %}{% endset %}
                {% set helpText %}{% trans \"Do you want to include the DataSet data?\" %}{% endset %}
                {{ forms.checkbox(\"includeData\", title, 0, helpText) }}

                {% set title %}{% trans \"Save as\" %}{% endset %}
                {% set helpText %}{% trans \"Change the name of the downloaded file if desired.\" %}{% endset %}
                {{ forms.input(\"saveAs\", title, saveAs, helpText) }}

            </form>
        </div>
    </div>
{% endblock %}", "layout-form-export.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-form-export.twig");
    }
}
