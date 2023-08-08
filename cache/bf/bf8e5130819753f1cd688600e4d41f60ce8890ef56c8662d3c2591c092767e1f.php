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

/* template-form-add-from-layout.twig */
class __TwigTemplate_4d738a81631c2c9b8b46cd01ee5732b76c21eadaa2ea87667065afcca2fe1394 extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "template-form-add-from-layout.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "template-form-add-from-layout.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Save this Layout as a Template?");
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
        echo ", \$(\"#templateAddForm\").submit()
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = [])
    {
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"templateAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.add.from.layout", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                ";
        // line 26
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        ob_start();
        echo __("The Name of the Template - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        ob_start();
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layout", []), "html", null, true);
        echo " ";
        echo __("Template");
        $context["templateName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), ($context["templateName"] ?? null), ($context["helpText"] ?? null));
        echo "

                ";
        // line 31
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                ";
        ob_start();
        echo __("Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                ";
        echo $context["forms"]->getinputWithTags("tags", ($context["title"] ?? null), ($context["tags"] ?? null), ($context["helpText"] ?? null), "tags-with-value");
        echo "

                <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                ";
        // line 37
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                ";
        echo $context["forms"]->getdropdown("tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value");
        echo "

                <div id=\"tagValueContainer\">
                    ";
        // line 41
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                    ";
        ob_start();
        echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                    ";
        echo $context["forms"]->getinput("tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "
                </div>

                <div id=\"tagValueRequired\" class=\"alert alert-info\">
                    <p>";
        // line 47
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
                </div>
                
                ";
        // line 50
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                ";
        ob_start();
        echo __("An optional description of the Template. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                ";
        echo $context["forms"]->gettextarea("description", ($context["title"] ?? null), $this->getAttribute(($context["layout"] ?? null), "description", []), ($context["helpText"] ?? null));
        echo "

                ";
        // line 54
        ob_start();
        echo __("Include Widgets?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                ";
        ob_start();
        echo __("Add all the widgets to the template?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                ";
        echo $context["forms"]->getcheckbox("includeWidgets", ($context["title"] ?? null), 0, ($context["helpText"] ?? null));
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "template-form-add-from-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  177 => 55,  173 => 54,  167 => 52,  162 => 51,  158 => 50,  152 => 47,  144 => 43,  139 => 42,  135 => 41,  128 => 38,  124 => 37,  116 => 33,  111 => 32,  107 => 31,  101 => 29,  94 => 28,  89 => 27,  85 => 26,  79 => 25,  75 => 23,  72 => 22,  66 => 19,  62 => 18,  55 => 17,  52 => 16,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
    {% trans \"Save this Layout as a Template?\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#templateAddForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"templateAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"{{ urlFor(\"template.add.from.layout\", {id: layout.layoutId}) }}\" data-gettag=\"{{ urlFor(\"tag.getByName\") }}\">
                {% set title %}{% trans \"Name\" %}{% endset %}
                {% set helpText %}{% trans \"The Name of the Template - (1 - 50 characters)\" %}{% endset %}
                {% set templateName %}{{ layout.layout }} {% trans \"Template\" %}{% endset %}
                {{ forms.input(\"name\", title, templateName, helpText) }}

                {% set title %}{% trans \"Tags\" %}{% endset %}
                {% set helpText %}{% trans \"Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.\" %}{% endset %}
                {{ forms.inputWithTags(\"tags\", title, tags, helpText, 'tags-with-value') }}

                <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                {% set title %}{% trans \"Tag value\" %}{% endset %}
                {{ forms.dropdown(\"tagValue\", \"single\", title, \"\", options, \"key\", \"value\") }}

                <div id=\"tagValueContainer\">
                    {% set title %}{% trans \"Tag value\" %}{% endset %}
                    {% set helpText %}{% trans \"Please provide the value for this Tag and confirm by pressing enter on your keyboard.\" %}{% endset %}
                    {{ forms.input(\"tagValueInput\", title, \"\", helpText) }}
                </div>

                <div id=\"tagValueRequired\" class=\"alert alert-info\">
                    <p>{% trans \"This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.\" %}</p>
                </div>
                
                {% set title %}{% trans \"Description\" %}{% endset %}
                {% set helpText %}{% trans \"An optional description of the Template. (1 - 250 characters)\" %}{% endset %}
                {{ forms.textarea(\"description\", title, layout.description, helpText) }}

                {% set title %}{% trans \"Include Widgets?\" %}{% endset %}
                {% set helpText %}{% trans \"Add all the widgets to the template?\" %}{% endset %}
                {{ forms.checkbox(\"includeWidgets\", title, 0, helpText) }}

            </form>
        </div>
    </div>
{% endblock %}", "template-form-add-from-layout.twig", "E:\\app\\laragon\\www\\xibo\\views\\template-form-add-from-layout.twig");
    }
}
