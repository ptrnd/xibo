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

/* authed-notification-drawer.twig */
class __TwigTemplate_8735d876a820a2b5c01fe7c7fed52fac7217316c9672cc02b53d5715522ea5eb extends \Twig\Template
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
    <a href=\"#\" class=\"dropdown-toggle notification-drawer-icon\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell\"></i> ";
        // line 3
        if ((($context["notificationCount"] ?? null) > 0)) {
            echo "<span class=\"badge red\">";
            echo twig_escape_filter($this->env, ($context["notificationCount"] ?? null), "html", null, true);
            echo "</span>";
        }
        // line 4
        echo "    </a>
    <ul class=\"dropdown-menu dropdown-menu-right notification-drawer\">
        <li class=\"dropdown-header\">";
        // line 6
        echo __("Notifications");
        echo "<br/>

        </li>
        ";
        // line 9
        if ((twig_length_filter($this->env, ($context["notifications"] ?? null)) > 0)) {
            // line 10
            echo "            <li class=\"divider\"></li>
        ";
        }
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 13
            echo "            <li>
                <a href=\"#\" class=\"notification\">
                    ";
            // line 15
            if ($this->getAttribute($context["notification"], "notificationId", [])) {
                // line 16
                echo "                        <a class=\"XiboFormButton\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("notification.show", ["id" => $this->getAttribute($context["notification"], "notificationId", [])]), "html", null, true);
                echo "\"><span class=\"";
                if ($this->getAttribute($context["notification"], "read", [])) {
                    echo "notification-unread";
                } else {
                    echo "notification-read";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", []), "html", null, true);
                echo " - <span class=\"notification-date\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "releaseDt", []), "html", null, true);
                echo "</span></span></a>
                    ";
            } else {
                // line 18
                echo "                        <span class=\"fa fa-exclamation-circle\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", []), "html", null, true);
                echo " - <span class=\"notification-date\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "releaseDt", []), "html", null, true);
                echo "</span>
                    ";
            }
            // line 20
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/notification"], "method")) {
            // line 25
            echo "            <li class=\"divider\"></li>

            <li><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("notification.view"), "html", null, true);
            echo "\">";
            echo __("Notification Centre");
            echo "</a></li>
        ";
        }
        // line 29
        echo "    </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "authed-notification-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  108 => 27,  104 => 25,  102 => 24,  99 => 23,  91 => 20,  83 => 18,  67 => 16,  65 => 15,  61 => 13,  56 => 12,  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  30 => 1,);
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
    <a href=\"#\" class=\"dropdown-toggle notification-drawer-icon\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell\"></i> {% if notificationCount > 0 %}<span class=\"badge red\">{{ notificationCount }}</span>{% endif %}
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right notification-drawer\">
        <li class=\"dropdown-header\">{% trans \"Notifications\" %}<br/>

        </li>
        {% if notifications|length > 0 %}
            <li class=\"divider\"></li>
        {% endif %}
        {% for notification in notifications %}
            <li>
                <a href=\"#\" class=\"notification\">
                    {% if notification.notificationId %}
                        <a class=\"XiboFormButton\" href=\"{{ urlFor(\"notification.show\", {id: notification.notificationId}) }}\"><span class=\"{% if notification.read %}notification-unread{% else %}notification-read{% endif %}\">{{ notification.subject }} - <span class=\"notification-date\">{{ notification.releaseDt }}</span></span></a>
                    {% else %}
                        <span class=\"fa fa-exclamation-circle\"></span> {{ notification.subject }} - <span class=\"notification-date\">{{ notification.releaseDt }}</span>
                    {% endif %}
                </a>
            </li>
        {% endfor %}

        {% if currentUser.routeViewable(\"/notification\") %}
            <li class=\"divider\"></li>

            <li><a href=\"{{ urlFor(\"notification.view\") }}\">{% trans \"Notification Centre\" %}</a></li>
        {% endif %}
    </ul>
</li>", "authed-notification-drawer.twig", "E:\\app\\laragon\\www\\xibo\\views\\authed-notification-drawer.twig");
    }
}
