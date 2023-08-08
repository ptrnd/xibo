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

/* displayprofile-form-edit-common-fields.twig */
class __TwigTemplate_36d87bfacb1eafc0c34da8efe5293bedd6f47289cde21406162f0be278e41227 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        ob_start();
        echo __("The Name of the Profile - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "input", [0 => "name", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "name", []), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
        echo "

";
        // line 27
        ob_start();
        echo __("Default Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        ob_start();
        echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["forms"] ?? null), "checkbox", [0 => "isDefault", 1 => ($context["title"] ?? null), 2 => $this->getAttribute(($context["displayProfile"] ?? null), "isDefault", []), 3 => ($context["helpText"] ?? null)], "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit-common-fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 29,  47 => 28,  43 => 27,  38 => 25,  34 => 24,  30 => 23,);
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
/**
 * Copyright (C) 2019 Xibo Signage Ltd
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
 */
#}
{% set title %}{% trans \"Name\" %}{% endset %}
{% set helpText %}{% trans \"The Name of the Profile - (1 - 50 characters)\" %}{% endset %}
{{ forms.input(\"name\", title, displayProfile.name, helpText) }}

{% set title %}{% trans \"Default Profile?\" %}{% endset %}
{% set helpText %}{% trans \"Is this the default profile for all Displays of this type? Only 1 profile can be the default.\" %}{% endset %}
{{ forms.checkbox(\"isDefault\", title, displayProfile.isDefault, helpText) }}", "displayprofile-form-edit-common-fields.twig", "E:\\app\\laragon\\www\\xibo\\views\\displayprofile-form-edit-common-fields.twig");
    }
}
