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

/* display-form-addViaCode.twig */
class __TwigTemplate_fe4929658d522fb4647e2732b442c243abffbd681380b1b9a63d521082c9363f extends \Twig\Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["forms"] = $this->loadTemplate("forms.twig", "display-form-addViaCode.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-addViaCode.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        echo __("Add Display via Code");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        echo ", \$(\"#displayAddViaCodeForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAddViaCodeForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.addViaCode"), "html", null, true);
        echo "\">

                <div class=\"alert alert-info\">
                    ";
        // line 43
        $context["message"] = __("After submitting this form with valid code, your CMS Address and Key will be sent and stored in the temporary storage in our Authentication Service.");
        // line 44
        echo "                    ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "
                    ";
        // line 45
        $context["message2"] = __("The Player linked to the submitted code, will make regular calls to our Authentication Service to retrive the CMS details and configure itself with them.
                     Your details are removed from the temporary storage once the Player is configured");
        // line 47
        echo "                    ";
        echo $context["forms"]->getmessage(($context["message2"] ?? null));
        echo "
                    ";
        // line 48
        $context["message3"] = __("Please note that your CMS needs to make a successful call to our Authentication Service for this feature to work.");
        // line 49
        echo "                    ";
        echo $context["forms"]->getmessage(($context["message3"] ?? null));
        echo "
                </div>

                ";
        // line 52
        ob_start();
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                ";
        ob_start();
        echo __("Please provide the code displayed on the Player screen");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                ";
        echo $context["forms"]->getinput("user_code", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display-form-addViaCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  113 => 53,  109 => 52,  102 => 49,  100 => 48,  95 => 47,  92 => 45,  87 => 44,  85 => 43,  79 => 40,  75 => 38,  72 => 37,  66 => 34,  62 => 33,  55 => 32,  52 => 31,  47 => 28,  44 => 27,  39 => 24,  37 => 25,  31 => 24,);
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

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Add Display via Code\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#displayAddViaCodeForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAddViaCodeForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"{{ urlFor(\"display.addViaCode\") }}\">

                <div class=\"alert alert-info\">
                    {% set message = \"After submitting this form with valid code, your CMS Address and Key will be sent and stored in the temporary storage in our Authentication Service.\"|trans %}
                    {{ forms.message(message) }}
                    {% set message2 = \"The Player linked to the submitted code, will make regular calls to our Authentication Service to retrive the CMS details and configure itself with them.
                     Your details are removed from the temporary storage once the Player is configured\"|trans %}
                    {{ forms.message(message2) }}
                    {% set message3 = \"Please note that your CMS needs to make a successful call to our Authentication Service for this feature to work.\"|trans %}
                    {{ forms.message(message3) }}
                </div>

                {% set title %}{% trans \"Code\" %}{% endset %}
                {% set helpText %}{% trans \"Please provide the code displayed on the Player screen\" %}{% endset %}
                {{ forms.input(\"user_code\", title, \"\", helpText) }}

            </form>
        </div>
    </div>
{% endblock %}", "display-form-addViaCode.twig", "E:\\app\\laragon\\www\\xibo\\views\\display-form-addViaCode.twig");
    }
}
