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

/* authed-sidebar.twig */
class __TwigTemplate_82ac970e2f38b6ca92db06ee0f7ae8112d6ec3b913ab0faf5d95f7daccc340da extends \Twig\Template
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
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo __("Dashboard");
        echo "</a></li>

        ";
        // line 5
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/schedule"], "method")) {
            // line 6
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\">";
            echo __("Schedule");
            echo "</a></li>
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/daypart"], "method")) {
            // line 10
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.view"), "html", null, true);
            echo "\">";
            echo __("Dayparting");
            echo "</a></li>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (((($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/campaign"], "method") || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/layout"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/template"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/resolution"], "method"))) {
            // line 14
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            echo "</a></li>
            ";
            // line 15
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/campaign"], "method")) {
                // line 16
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("campaign.view"), "html", null, true);
                echo "\">";
                echo __("Campaigns");
                echo "</a></li>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/layout"], "method")) {
                // line 20
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.view"), "html", null, true);
                echo "\">";
                echo __("Layouts");
                echo "</a></li>
            ";
            }
            // line 22
            echo "
            ";
            // line 23
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/template"], "method")) {
                // line 24
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.view"), "html", null, true);
                echo "\">";
                echo __("Templates");
                echo "</a></li>
            ";
            }
            // line 26
            echo "
            ";
            // line 27
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/resolution"], "method")) {
                // line 28
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.view"), "html", null, true);
                echo "\">";
                echo __("Resolutions");
                echo "</a></li>
            ";
            }
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if ((($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/library"], "method") || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/playlist"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/dataset"], "method"))) {
            // line 33
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            echo "</a></li>
            ";
            // line 34
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/playlist"], "method")) {
                // line 35
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.view"), "html", null, true);
                echo "\">";
                echo __("Playlists");
                echo "</a></li>
            ";
            }
            // line 37
            echo "
            ";
            // line 38
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/library"], "method")) {
                // line 39
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.view"), "html", null, true);
                echo "\">";
                echo __("Media");
                echo "</a></li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/dataset"], "method")) {
                // line 43
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataset.view"), "html", null, true);
                echo "\">";
                echo __("DataSets");
                echo "</a></li>
            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if (((($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/display"], "method") || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/displaygroup"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/displayprofile"], "method"))) {
            // line 48
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            echo "</a></li>
            ";
            // line 49
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/display"], "method")) {
                // line 50
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.view"), "html", null, true);
                echo "\">";
                echo __("Displays");
                echo "</a></li>
            ";
            }
            // line 52
            echo "
            ";
            // line 53
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/displaygroup"], "method")) {
                // line 54
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displaygroup.view"), "html", null, true);
                echo "\">";
                echo __("Display Groups");
                echo "</a></li>
            ";
            }
            // line 56
            echo "
            ";
            // line 57
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/displayprofile"], "method")) {
                // line 58
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayprofile.view"), "html", null, true);
                echo "\">";
                echo __("Display Settings");
                echo "</a></li>
            ";
            }
            // line 60
            echo "
            ";
            // line 61
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/playersoftware"], "method")) {
                // line 62
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playersoftware.view"), "html", null, true);
                echo "\">";
                echo __("Player Versions");
                echo "</a></li>
            ";
            }
            // line 64
            echo "
            ";
            // line 65
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/command"], "method")) {
                // line 66
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("command.view"), "html", null, true);
                echo "\">";
                echo __("Commands");
                echo "</a></li>
            ";
            }
            // line 68
            echo "        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if (($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/user"], "method") && ($this->getAttribute(($context["currentUser"] ?? null), "isGroupAdmin", [], "method") || $this->getAttribute(($context["currentUser"] ?? null), "isSuperAdmin", [], "method")))) {
            // line 71
            echo "            ";
            $context["userMenuViewable"] = true;
            // line 72
            echo "        ";
        } else {
            // line 73
            echo "            ";
            $context["userMenuViewable"] = false;
            // line 74
            echo "        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if ((((((($context["userMenuViewable"] ?? null) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/usergroup"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/admin"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/application"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/module"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/transition"], "method"))) {
            // line 77
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            echo "</a></li>

            ";
            // line 79
            if (($context["userMenuViewable"] ?? null)) {
                // line 80
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.view"), "html", null, true);
                echo "\">";
                echo __("Users");
                echo "</a></li>
            ";
            }
            // line 82
            echo "
            ";
            // line 83
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/group"], "method")) {
                // line 84
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.view"), "html", null, true);
                echo "\">";
                echo __("User Groups");
                echo "</a></li>
            ";
            }
            // line 86
            echo "
            ";
            // line 87
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/admin"], "method")) {
                // line 88
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("admin.view"), "html", null, true);
                echo "\">";
                echo __("Settings");
                echo "</a></li>
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/application"], "method")) {
                // line 92
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("application.view"), "html", null, true);
                echo "\">";
                echo __("Applications");
                echo "</a></li>
            ";
            }
            // line 94
            echo "
            ";
            // line 95
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/module"], "method")) {
                // line 96
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.view"), "html", null, true);
                echo "\">";
                echo __("Modules");
                echo "</a></li>
            ";
            }
            // line 98
            echo "
            ";
            // line 99
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/transition"], "method")) {
                // line 100
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("transition.view"), "html", null, true);
                echo "\">";
                echo __("Transitions");
                echo "</a></li>
            ";
            }
            // line 102
            echo "
            ";
            // line 103
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/task"], "method")) {
                // line 104
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("task.view"), "html", null, true);
                echo "\">";
                echo __("Tasks");
                echo "</a></li>
            ";
            }
            // line 106
            echo "
            ";
            // line 107
            if ($this->getAttribute(($context["currentUser"] ?? null), "isSuperAdmin", [], "method")) {
                // line 108
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("tag.view"), "html", null, true);
                echo "\">";
                echo __("Tags");
                echo "</a></li>
            ";
            }
            // line 110
            echo "        ";
        }
        // line 111
        echo "

        ";
        // line 113
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
            // line 114
            echo "
            <li class=\"sidebar-title\"><a>";
            // line 115
            echo __("Reporting");
            echo "</a></li>

            ";
            // line 117
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
                // line 118
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.view"), "html", null, true);
                echo "\">";
                echo __("Display Statistics");
                echo "</a></li>
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
                // line 122
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.proofofplay.view"), "html", null, true);
                echo "\">";
                echo __("Proof of Play");
                echo "</a></li>
            ";
            }
            // line 124
            echo "
            ";
            // line 125
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/stats"], "method")) {
                // line 126
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.library.view"), "html", null, true);
                echo "\">";
                echo __("Library Usage");
                echo "</a></li>
            ";
            }
            // line 128
            echo "        ";
        }
        // line 129
        echo "

        ";
        // line 131
        if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/report"], "method")) {
            // line 132
            echo "            ";
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/report"], "method")) {
                // line 133
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("reportschedule.view"), "html", null, true);
                echo "\">";
                echo __("Report Schedules");
                echo "</a></li>
            ";
            }
            // line 135
            echo "
            ";
            // line 136
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/report"], "method")) {
                // line 137
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("savedreport.view"), "html", null, true);
                echo "\">";
                echo __("Saved Reports");
                echo "</a></li>
            ";
            }
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 141
        if ((((($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/log"], "method") || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/sessions"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/auditlog"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/fault"], "method")) || $this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/help"], "method"))) {
            // line 142
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            echo "</a></li>
            ";
            // line 143
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/log"], "method")) {
                // line 144
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("log.view"), "html", null, true);
                echo "\">";
                echo __("Log");
                echo "</a></li>
            ";
            }
            // line 146
            echo "
            ";
            // line 147
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/sessions"], "method")) {
                // line 148
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("sessions.view"), "html", null, true);
                echo "\">";
                echo __("Sessions");
                echo "</a></li>
            ";
            }
            // line 150
            echo "
            ";
            // line 151
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/auditlog"], "method")) {
                // line 152
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("auditlog.view"), "html", null, true);
                echo "\">";
                echo __("Audit Trail");
                echo "</a></li>
            ";
            }
            // line 154
            echo "
            ";
            // line 155
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/fault"], "method")) {
                // line 156
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("fault.view"), "html", null, true);
                echo "\">";
                echo __("Report Fault");
                echo "</a></li>
            ";
            }
            // line 158
            echo "
            ";
            // line 159
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/help"], "method")) {
                // line 160
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("help.view"), "html", null, true);
                echo "\">";
                echo __("Help Links");
                echo "</a></li>
            ";
            }
            // line 162
            echo "        ";
        }
        // line 163
        echo "    </ul>

    <div class=\"sidebar-footer\">
        <div class=\"col-sm-6\">
            <a class=\"XiboFormButton\" href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About the CMS");
        echo "\">";
        echo __("About");
        echo "</a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["helpService"] ?? null), "address", [], "method"), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo __("Open the Manual in a new Window");
        echo "\">";
        echo __("Manual");
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "authed-sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 170,  549 => 167,  543 => 163,  540 => 162,  532 => 160,  530 => 159,  527 => 158,  519 => 156,  517 => 155,  514 => 154,  506 => 152,  504 => 151,  501 => 150,  493 => 148,  491 => 147,  488 => 146,  480 => 144,  478 => 143,  473 => 142,  471 => 141,  468 => 140,  465 => 139,  457 => 137,  455 => 136,  452 => 135,  444 => 133,  441 => 132,  439 => 131,  435 => 129,  432 => 128,  424 => 126,  422 => 125,  419 => 124,  411 => 122,  409 => 121,  406 => 120,  398 => 118,  396 => 117,  391 => 115,  388 => 114,  386 => 113,  382 => 111,  379 => 110,  371 => 108,  369 => 107,  366 => 106,  358 => 104,  356 => 103,  353 => 102,  345 => 100,  343 => 99,  340 => 98,  332 => 96,  330 => 95,  327 => 94,  319 => 92,  317 => 91,  314 => 90,  306 => 88,  304 => 87,  301 => 86,  293 => 84,  291 => 83,  288 => 82,  280 => 80,  278 => 79,  272 => 77,  270 => 76,  267 => 75,  264 => 74,  261 => 73,  258 => 72,  255 => 71,  253 => 70,  250 => 69,  247 => 68,  239 => 66,  237 => 65,  234 => 64,  226 => 62,  224 => 61,  221 => 60,  213 => 58,  211 => 57,  208 => 56,  200 => 54,  198 => 53,  195 => 52,  187 => 50,  185 => 49,  180 => 48,  178 => 47,  175 => 46,  172 => 45,  164 => 43,  162 => 42,  159 => 41,  151 => 39,  149 => 38,  146 => 37,  138 => 35,  136 => 34,  131 => 33,  129 => 32,  126 => 31,  123 => 30,  115 => 28,  113 => 27,  110 => 26,  102 => 24,  100 => 23,  97 => 22,  89 => 20,  87 => 19,  84 => 18,  76 => 16,  74 => 15,  69 => 14,  67 => 13,  64 => 12,  56 => 10,  54 => 9,  51 => 8,  43 => 6,  41 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"{{ urlFor(\"home\") }}\">{% trans \"Dashboard\" %}</a></li>

        {% if currentUser.routeViewable(\"/schedule\") %}
            <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"schedule.view\") }}\">{% trans \"Schedule\" %}</a></li>
        {% endif %}

        {% if currentUser.routeViewable(\"/daypart\") %}
            <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"daypart.view\") }}\">{% trans \"Dayparting\" %}</a></li>
        {% endif %}

        {% if currentUser.routeViewable(\"/campaign\") or currentUser.routeViewable(\"/layout\") or currentUser.routeViewable(\"/template\") or currentUser.routeViewable(\"/resolution\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Design\" %}</a></li>
            {% if currentUser.routeViewable(\"/campaign\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"campaign.view\") }}\">{% trans \"Campaigns\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/layout\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"layout.view\") }}\">{% trans \"Layouts\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/template\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"template.view\") }}\">{% trans \"Templates\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/resolution\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"resolution.view\") }}\">{% trans \"Resolutions\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/library\") or currentUser.routeViewable(\"/playlist\")  or currentUser.routeViewable(\"/dataset\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Library\" %}</a></li>
            {% if currentUser.routeViewable(\"/playlist\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"playlist.view\") }}\">{% trans \"Playlists\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/library\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"library.view\") }}\">{% trans \"Media\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/dataset\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"dataset.view\") }}\">{% trans \"DataSets\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/display\") or currentUser.routeViewable(\"/displaygroup\") or currentUser.routeViewable(\"/stats\") or currentUser.routeViewable(\"/displayprofile\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Displays\" %}</a></li>
            {% if currentUser.routeViewable(\"/display\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"display.view\") }}\">{% trans \"Displays\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/displaygroup\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"displaygroup.view\") }}\">{% trans \"Display Groups\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/displayprofile\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"displayprofile.view\") }}\">{% trans \"Display Settings\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/playersoftware\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"playersoftware.view\") }}\">{% trans \"Player Versions\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/command\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"command.view\") }}\">{% trans \"Commands\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/user\") and (currentUser.isGroupAdmin() or currentUser.isSuperAdmin()) %}
            {% set userMenuViewable = true %}
        {% else %}
            {% set userMenuViewable = false %}
        {% endif %}

        {% if userMenuViewable or currentUser.routeViewable(\"/usergroup\") or currentUser.routeViewable(\"/admin\") or currentUser.routeViewable(\"/application\") or currentUser.routeViewable(\"/module\") or currentUser.routeViewable(\"/transition\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Administration\" %}</a></li>

            {% if userMenuViewable %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"user.view\") }}\">{% trans \"Users\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/group\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"group.view\") }}\">{% trans \"User Groups\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/admin\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"admin.view\") }}\">{% trans \"Settings\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/application\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"application.view\") }}\">{% trans \"Applications\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/module\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"module.view\") }}\">{% trans \"Modules\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/transition\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"transition.view\") }}\">{% trans \"Transitions\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/task\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"task.view\") }}\">{% trans \"Tasks\" %}</a></li>
            {% endif %}

            {% if currentUser.isSuperAdmin() %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"tag.view\") }}\">{% trans \"Tags\" %}</a></li>
            {% endif %}
        {% endif %}


        {% if currentUser.routeViewable(\"/stats\") %}

            <li class=\"sidebar-title\"><a>{% trans \"Reporting\" %}</a></li>

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.view\") }}\">{% trans \"Display Statistics\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.proofofplay.view\") }}\">{% trans \"Proof of Play\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.library.view\") }}\">{% trans \"Library Usage\" %}</a></li>
            {% endif %}
        {% endif %}


        {% if currentUser.routeViewable(\"/report\") %}
            {% if currentUser.routeViewable(\"/report\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"reportschedule.view\") }}\">{% trans \"Report Schedules\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/report\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"savedreport.view\") }}\">{% trans \"Saved Reports\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/log\") or currentUser.routeViewable(\"/sessions\") or currentUser.routeViewable(\"/auditlog\") or currentUser.routeViewable(\"/fault\") or currentUser.routeViewable(\"/help\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Advanced\" %}</a></li>
            {% if currentUser.routeViewable(\"/log\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"log.view\") }}\">{% trans \"Log\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/sessions\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"sessions.view\") }}\">{% trans \"Sessions\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/auditlog\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"auditlog.view\") }}\">{% trans \"Audit Trail\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/fault\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"fault.view\") }}\">{% trans \"Report Fault\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/help\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"help.view\") }}\">{% trans \"Help Links\" %}</a></li>
            {% endif %}
        {% endif %}
    </ul>

    <div class=\"sidebar-footer\">
        <div class=\"col-sm-6\">
            <a class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About the CMS\" %}\">{% trans \"About\" %}</a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"{{ helpService.address() }}\" target=\"_blank\" title=\"{% trans \"Open the Manual in a new Window\" %}\">{% trans \"Manual\" %}</a>
        </div>
    </div>
</div>", "authed-sidebar.twig", "E:\\app\\laragon\\www\\xibo\\views\\authed-sidebar.twig");
    }
}
