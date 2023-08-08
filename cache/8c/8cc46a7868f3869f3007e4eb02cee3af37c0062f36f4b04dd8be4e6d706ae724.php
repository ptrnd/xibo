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

/* display-form-authorise.twig */
class __TwigTemplate_059e052fb5c540877e664c9ff40db1261d38185678dfac8a34327a7c9894751a extends \Twig\Template
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
        $context["forms"] = $this->loadTemplate("forms.twig", "display-form-authorise.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-authorise.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo __("Toggle Authorise");
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
        echo __("Yes");
        echo ", \$(\"#displayAuthoriseForm\").submit()
";
    }

    // line 35
    public function block_formHtml($context, array $blocks = [])
    {
        // line 36
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAuthoriseForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.authorise", ["id" => $this->getAttribute(($context["display"] ?? null), "displayId", [])]), "html", null, true);
        echo "\">
                ";
        // line 39
        if (($this->getAttribute(($context["display"] ?? null), "licensed", []) == 1)) {
            // line 40
            echo "                    ";
            ob_start();
            echo __("Are you sure you want to de-authorise this Display?");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            echo "                ";
        } else {
            // line 42
            echo "                    ";
            ob_start();
            echo __("Are you sure you want to authorise this Display?");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "                ";
        }
        // line 44
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
        return "display-form-authorise.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 44,  92 => 43,  87 => 42,  84 => 41,  79 => 40,  77 => 39,  73 => 38,  69 => 36,  66 => 35,  60 => 32,  55 => 31,  52 => 30,  47 => 27,  44 => 26,  39 => 23,  37 => 24,  31 => 23,);
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
    {% trans \"Toggle Authorise\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Yes\" %}, \$(\"#displayAuthoriseForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAuthoriseForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"display.authorise\", {id: display.displayId}) }}\">
                {% if display.licensed == 1 %}
                    {% set message %}{% trans \"Are you sure you want to de-authorise this Display?\" %}{% endset %}
                {% else %}
                    {% set message %}{% trans \"Are you sure you want to authorise this Display?\" %}{% endset %}
                {% endif %}
                {{ forms.message(message) }}
            </form>
        </div>
    </div>
{% endblock %}", "display-form-authorise.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-form-authorise.twig");
    }
}
