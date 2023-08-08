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

/* form-base.twig */
class __TwigTemplate_cb875ea5f8ff89c400567b706f00065ece3e2f7413502c87aad43919928ac18d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            '__internal_1835d3d4fb6fede5c90dd436a2411fc4790210f65c65600e4eb5768e8ac4ac9f' => [$this, 'block___internal_1835d3d4fb6fede5c90dd436a2411fc4790210f65c65600e4eb5768e8ac4ac9f'],
            'formHtml' => [$this, 'block_formHtml'],
            '__internal_8c4df3e63e9b271e1ffa03d9848112476ad2df9cea21afef524ac0573ad8e215' => [$this, 'block___internal_8c4df3e63e9b271e1ffa03d9848112476ad2df9cea21afef524ac0573ad8e215'],
            'formButtons' => [$this, 'block_formButtons'],
            '__internal_84a97adea249be60942129bd350e3c7fc36eac21daef6a5a1eb520e51a503b5d' => [$this, 'block___internal_84a97adea249be60942129bd350e3c7fc36eac21daef6a5a1eb520e51a503b5d'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
            '__internal_6bb3cba5c7b7bd4085bc429a6c73952f36fe716f2ad5888261273e42432ac7ff' => [$this, 'block___internal_6bb3cba5c7b7bd4085bc429a6c73952f36fe716f2ad5888261273e42432ac7ff'],
            'callBack' => [$this, 'block_callBack'],
            '__internal_26fba44382e795b65e0792238de74b3e98bf77dbc4f59b104556db14714a1607' => [$this, 'block___internal_26fba44382e795b65e0792238de74b3e98bf77dbc4f59b104556db14714a1607'],
            'extra' => [$this, 'block_extra'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "{
    \"title\": ";
        // line 2
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_1835d3d4fb6fede5c90dd436a2411fc4790210f65c65600e4eb5768e8ac4ac9f", $context, $blocks));
        echo ",
    \"html\": ";
        // line 3
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_8c4df3e63e9b271e1ffa03d9848112476ad2df9cea21afef524ac0573ad8e215", $context, $blocks));
        echo ",
    \"buttons\": ";
        // line 4
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_84a97adea249be60942129bd350e3c7fc36eac21daef6a5a1eb520e51a503b5d", $context, $blocks));
        echo ",
    \"fieldActions\": ";
        // line 5
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_6bb3cba5c7b7bd4085bc429a6c73952f36fe716f2ad5888261273e42432ac7ff", $context, $blocks));
        echo ",
    \"callBack\": ";
        // line 6
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_26fba44382e795b65e0792238de74b3e98bf77dbc4f59b104556db14714a1607", $context, $blocks));
        echo ",
    \"extra\": ";
        // line 7
        $this->displayBlock('extra', $context, $blocks);
        // line 8
        echo "}";
    }

    // line 2
    public function block_formTitle($context, array $blocks = [])
    {
    }

    public function block___internal_1835d3d4fb6fede5c90dd436a2411fc4790210f65c65600e4eb5768e8ac4ac9f($context, array $blocks = [])
    {
        $this->displayBlock('formTitle', $context, $blocks);
    }

    // line 3
    public function block_formHtml($context, array $blocks = [])
    {
    }

    public function block___internal_8c4df3e63e9b271e1ffa03d9848112476ad2df9cea21afef524ac0573ad8e215($context, array $blocks = [])
    {
        $this->displayBlock('formHtml', $context, $blocks);
    }

    // line 4
    public function block_formButtons($context, array $blocks = [])
    {
    }

    public function block___internal_84a97adea249be60942129bd350e3c7fc36eac21daef6a5a1eb520e51a503b5d($context, array $blocks = [])
    {
        $this->displayBlock('formButtons', $context, $blocks);
    }

    // line 5
    public function block_formFieldActions($context, array $blocks = [])
    {
    }

    public function block___internal_6bb3cba5c7b7bd4085bc429a6c73952f36fe716f2ad5888261273e42432ac7ff($context, array $blocks = [])
    {
        $this->displayBlock('formFieldActions', $context, $blocks);
    }

    // line 6
    public function block_callBack($context, array $blocks = [])
    {
    }

    public function block___internal_26fba44382e795b65e0792238de74b3e98bf77dbc4f59b104556db14714a1607($context, array $blocks = [])
    {
        $this->displayBlock('callBack', $context, $blocks);
    }

    // line 7
    public function block_extra($context, array $blocks = [])
    {
        echo "[]";
    }

    public function getTemplateName()
    {
        return "form-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 7,  110 => 6,  100 => 5,  90 => 4,  80 => 3,  70 => 2,  66 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{
    \"title\": {% filter json_encode|raw %}{% block formTitle %}{% endblock %}{% endfilter %},
    \"html\": {% filter json_encode|raw %}{% block formHtml %}{% endblock %}{% endfilter %},
    \"buttons\": {% filter json_encode|raw %}{% block formButtons %}{% endblock %}{% endfilter %},
    \"fieldActions\": {% filter json_encode|raw %}{% block formFieldActions %}{% endblock %}{% endfilter %},
    \"callBack\": {% filter json_encode|raw %}{% block callBack %}{% endblock %}{% endfilter %},
    \"extra\": {% block extra %}[]{% endblock %}
}", "form-base.twig", "E:\\app\\laragon\\www\\xibo\\views\\form-base.twig");
    }
}
