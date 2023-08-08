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

/* layout-form-delete.twig */
class __TwigTemplate_7577a7513fbaf808c9fc3e5b1a19d2dbc4d567c05ab681b84db4999fda2a6efb extends \Twig\Template
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
        // line 1
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-delete.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-delete.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_formTitle($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        $context["layout"] = $this->getAttribute(($context["layout"] ?? null), "layout", []);
        // line 6
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Delete %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
    }

    // line 9
    public function block_formButtons($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["help"] ?? null), "delete", []), "html", null, true);
        echo "\")
    ";
        // line 11
        echo __("Retire");
        echo ", XiboSwapDialog(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.retire.form", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\")
    ";
        // line 12
        echo __("No");
        echo ", XiboDialogClose()
    ";
        // line 13
        echo __("Yes");
        echo ", \$(\"#layoutDeleteForm\").submit()
";
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.delete", ["id" => $this->getAttribute(($context["layout"] ?? null), "layoutId", [])]), "html", null, true);
        echo "\">
                ";
        // line 20
        ob_start();
        echo __("Are you sure you want to delete this layout?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "                ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "
                
                ";
        // line 23
        ob_start();
        echo __("All media will be unassigned and any layout specific media such as text/rss will be lost. The layout will be removed from all Schedules.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
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
        return "layout-form-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  102 => 23,  96 => 21,  92 => 20,  88 => 19,  84 => 17,  81 => 16,  75 => 13,  71 => 12,  65 => 11,  58 => 10,  55 => 9,  50 => 6,  47 => 5,  44 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% set layout = layout.layout %}
    {% trans %}Delete {{ layout }}{% endtrans %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help.delete }}\")
    {% trans \"Retire\" %}, XiboSwapDialog(\"{{ urlFor(\"layout.retire.form\", {id: layout.layoutId}) }}\")
    {% trans \"No\" %}, XiboDialogClose()
    {% trans \"Yes\" %}, \$(\"#layoutDeleteForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"{{ urlFor(\"layout.delete\", {id: layout.layoutId}) }}\">
                {% set message %}{% trans \"Are you sure you want to delete this layout?\" %}{% endset %}
                {{ forms.message(message) }}
                
                {% set message %}{% trans \"All media will be unassigned and any layout specific media such as text/rss will be lost. The layout will be removed from all Schedules.\" %}{% endset %}
                {{ forms.message(message) }}
            </form>
        </div>
    </div>
{% endblock %}", "layout-form-delete.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-form-delete.twig");
    }
}
