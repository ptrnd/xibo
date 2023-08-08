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

/* non-authed.twig */
class __TwigTemplate_e3151f295e3a897b34940196c91a39ac210bed42f8c5b9d3801eba89cf850f2e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageFooter' => [$this, 'block_pageFooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.twig", "non-authed.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"page-wrapper\" class=\"active\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar\">
                    <li class=\"sidebar-main\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo __("Dashboard");
        echo "</a></li>
                </ul>

                <div class=\"sidebar-footer\">
                    <div class=\"col-sm-6\">
                        <a class=\"XiboFormButton\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About the CMS");
        echo "\">";
        echo __("About");
        echo "</a>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["helpService"] ?? null), "address", [], "method"), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo __("Open the Manual in a new Window");
        echo "\">";
        echo __("Manual");
        echo "</a>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method"), "html", null, true);
        echo "\"></div>
                        </div>
                        <div class=\"user pull-right\">

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 36
        $this->displayBlock('actionMenu', $context, $blocks);
        // line 37
        echo "                        ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 38
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 42
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 43
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 36
    public function block_actionMenu($context, array $blocks = [])
    {
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
    }

    // line 42
    public function block_pageFooter($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "non-authed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  128 => 37,  123 => 36,  114 => 43,  112 => 42,  106 => 38,  103 => 37,  101 => 36,  89 => 27,  71 => 16,  61 => 13,  51 => 8,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
    <div id=\"page-wrapper\" class=\"active\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar\">
                    <li class=\"sidebar-main\"><a href=\"{{ urlFor(\"home\") }}\">{% trans \"Dashboard\" %}</a></li>
                </ul>

                <div class=\"sidebar-footer\">
                    <div class=\"col-sm-6\">
                        <a class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About the CMS\" %}\">{% trans \"About\" %}</a>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"{{ helpService.address() }}\" target=\"_blank\" title=\"{% trans \"Open the Manual in a new Window\" %}\">{% trans \"Manual\" %}</a>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></div>
                        </div>
                        <div class=\"user pull-right\">

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block actionMenu %}{% endblock %}
                        {% block pageContent %}{% endblock %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block pageFooter %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "non-authed.twig", "E:\\app\\laragon\\www\\xibo\\views\\non-authed.twig");
    }
}
