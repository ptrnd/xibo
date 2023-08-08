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

/* error.twig */
class __TwigTemplate_1e91158f826ad2aaf6a0560b7d12cef5bfa71849a057e4270729dfb95c02fccb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "non-authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("non-authed.twig", "error.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageContent($context, array $blocks = [])
    {
        // line 11
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 12
        echo __("Error");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "globalError", []), "html", null, true);
        echo "
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "message", []), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 16,  45 => 12,  42 => 11,  39 => 10,  29 => 8,);
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
{% extends \"non-authed.twig\" %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Error\" %}</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {{ flash.globalError }}
                    {{ flash.message }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "error.twig", "E:\\app\\laragon\\www\\xibo\\views\\error.twig");
    }
}
