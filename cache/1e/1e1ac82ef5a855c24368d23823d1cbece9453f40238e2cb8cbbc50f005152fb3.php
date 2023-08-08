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

/* authed-user-menu.twig */
class __TwigTemplate_0249be9d6ffdc583af3dbc8e17b964be72c49f56df56be7fdefd6aa75e161591 extends \Twig\Template
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
        echo "<li class=\"dropdown item\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <img class=\"nav-avatar\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/avatar.jpg"], "method"), "html", null, true);
        echo "\" />
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li class=\"dropdown-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? null), "userName", []), "html", null, true);
        echo "<br/>
            <div id=\"XiboClock\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["clock"] ?? null), "html", null, true);
        echo "</div>
        </li>
        <li class=\"divider\"></li>
        <li><a class=\"XiboFormButton\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.preferences.form"), "html", null, true);
        echo "\" title=\"";
        echo __("Preferences");
        echo "\">";
        echo __("Preferences");
        echo "</a></li>
        <li><a class=\"XiboFormButton\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.edit.profile.form"), "html", null, true);
        echo "\" title=\"";
        echo __("Edit Profile");
        echo "\">";
        echo __("Edit Profile");
        echo "</a></li>
        <li class=\"divider\"></li>
        <li><a id=\"reshowWelcomeMenuItem\" href=\"#\">";
        // line 13
        echo __("Reshow welcome");
        echo "</a></li>
        ";
        // line 14
        if (($context["horizontalNav"] ?? null)) {
            // line 15
            echo "            <li><a class=\"XiboFormButton\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
            echo "\" title=\"";
            echo __("About the CMS");
            echo "\">";
            echo __("About");
            echo "</a></li>
        ";
        }
        // line 17
        echo "        <li><a class=\"XiboHelpButton\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["helpService"] ?? null), "link", [], "method"), "html", null, true);
        echo "\">";
        echo __("Help");
        echo "</a></li>
        <li class=\"divider\"></li>
        <li><a title=\"";
        // line 19
        echo __("Logout");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["logoutUrl"] ?? null), "html", null, true);
        echo "\">";
        echo __("Logout");
        echo "</a></li>
    </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "authed-user-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  83 => 17,  73 => 15,  71 => 14,  67 => 13,  58 => 11,  50 => 10,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"dropdown item\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <img class=\"nav-avatar\" src=\"{{ theme.uri(\"img/avatar.jpg\") }}\" />
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li class=\"dropdown-header\">{{ currentUser.userName }}<br/>
            <div id=\"XiboClock\">{{ clock }}</div>
        </li>
        <li class=\"divider\"></li>
        <li><a class=\"XiboFormButton\" href=\"{{ urlFor(\"user.preferences.form\") }}\" title=\"{% trans \"Preferences\" %}\">{% trans \"Preferences\" %}</a></li>
        <li><a class=\"XiboFormButton\" href=\"{{ urlFor(\"user.edit.profile.form\") }}\" title=\"{% trans \"Edit Profile\" %}\">{% trans \"Edit Profile\" %}</a></li>
        <li class=\"divider\"></li>
        <li><a id=\"reshowWelcomeMenuItem\" href=\"#\">{% trans \"Reshow welcome\" %}</a></li>
        {% if horizontalNav %}
            <li><a class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About the CMS\" %}\">{% trans \"About\" %}</a></li>
        {% endif %}
        <li><a class=\"XiboHelpButton\" href=\"{{ helpService.link() }}\">{% trans \"Help\" %}</a></li>
        <li class=\"divider\"></li>
        <li><a title=\"{% trans \"Logout\" %}\" href=\"{{ logoutUrl }}\">{% trans \"Logout\" %}</a></li>
    </ul>
</li>", "authed-user-menu.twig", "E:\\app\\laragon\\www\\xibo\\views\\authed-user-menu.twig");
    }
}
