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

/* layout-preview-partial.twig */
class __TwigTemplate_bd1c8f882717901812d3452823c3f48ac2b8abccf4ab8579c346ba5e09e76bec extends \Twig\Template
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
        // line 1
        echo "<div id=\"player_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-player\">
    <div id=\"info_";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-info\"></div>
    <div id=\"log_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-log\"></div>
    <div id=\"screen_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-screen\">
        <div id=\"splash_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-splash\">
            <div id=\"loader_";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-loader\"></div>
            <div id=\"loaderCaption_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-loaderCaption\">
                <p>";
        // line 8
        echo __("Loading Layout...");
        echo "</p>
            </div>
        </div>
        <div id=\"end_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\" class=\"preview-end\"><a href=\"javascript:history.go(0)\" style=\"text-decoration: none; color: #ffffff\">";
        echo __("Play again?");
        echo "</a></div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "layout-preview-partial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"player_{{layout.layoutId}}\" class=\"preview-player\">
    <div id=\"info_{{layout.layoutId}}\" class=\"preview-info\"></div>
    <div id=\"log_{{layout.layoutId}}\" class=\"preview-log\"></div>
    <div id=\"screen_{{layout.layoutId}}\" class=\"preview-screen\">
        <div id=\"splash_{{layout.layoutId}}\" class=\"preview-splash\">
            <div id=\"loader_{{layout.layoutId}}\" class=\"preview-loader\"></div>
            <div id=\"loaderCaption_{{layout.layoutId}}\" class=\"preview-loaderCaption\">
                <p>{% trans \"Loading Layout...\" %}</p>
            </div>
        </div>
        <div id=\"end_{{layout.layoutId}}\" class=\"preview-end\"><a href=\"javascript:history.go(0)\" style=\"text-decoration: none; color: #ffffff\">{% trans \"Play again?\" %}</a></div>
    </div>
</div>

", "layout-preview-partial.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-preview-partial.twig");
    }
}
