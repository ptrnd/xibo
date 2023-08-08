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

/* login.twig */
class __TwigTemplate_6ea69980eb0cb353f5d3213c1a9ff1e3ff656eccf55f59ee1c386533c3f1adc5 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method"), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"public-path\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method"), "html", null, true);
        echo "\" />

    <!-- Import CSS bundle from dist -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/style.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

    <!-- Copyright 2006-2020 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>

    <!-- Import user made CSS from theme -->
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/override.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
</head>
<body>
    <div class=\"container\">
        ";
        // line 58
        if (($context["authCASEnabled"] ?? null)) {
            // line 59
            echo "        <form id=\"cas-login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("cas.login"), "html", null, true);
            echo "\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "priorRoute", []), "html", null, true);
            echo "\" />
            <p><img class=\"login-logo\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method"), "html", null, true);
            echo "\"></p>

            <p>";
            // line 63
            echo __("Connect with the Central Authentication Server");
            echo "</p>

            ";
            // line 65
            if ($this->getAttribute(($context["flash"] ?? null), "cas_login_message", [])) {
                // line 66
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "cas_login_message", []), "html", null, true);
                echo "</div>
            ";
            }
            // line 68
            echo "
            <p><button class=\"btn btn-large btn-primary\" type=\"submit\" name=\"logincas\">";
            // line 69
            echo __("CAS Login");
            echo "</button></p>
        </form>
        ";
        } else {
            // line 72
            echo "        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("login"), "html", null, true);
            echo "\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "priorRoute", []), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />
            <p><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getThemeConfig", [0 => "theme_url"], "method"), "html", null, true);
            echo "\"><img class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method"), "html", null, true);
            echo "\"></a></p>

            <p>";
            // line 77
            echo __("Please provide your credentials");
            echo "</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 79
            echo __("User");
            echo "\" autofocus autocomplete=\"username\">
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"";
            // line 80
            echo __("Password");
            echo "\" autocomplete=\"current-password\">

            ";
            // line 82
            if ($this->getAttribute(($context["flash"] ?? null), "login_message", [])) {
                // line 83
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "login_message", []), "html", null, true);
                echo "</div>
            ";
            }
            // line 85
            echo "
            <p><button class=\"btn btn-large btn-primary\" type=\"submit\">";
            // line 86
            echo __("Login");
            echo "</button></p>

            ";
            // line 88
            if (($context["passwordReminderEnabled"] ?? null)) {
                echo "<p><a href=\"#\" id=\"reminder-form-toggle\">";
                echo __("Forgotten your password?");
                echo "</a></p>";
            }
            // line 89
            echo "        </form>
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (($context["passwordReminderEnabled"] ?? null)) {
            // line 93
            echo "        <form id=\"reminder-form\" class=\"form-signin text-center hidden\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("login.forgotten"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />

            <p>";
            // line 96
            echo __("Please provide your user name");
            echo "</p>
            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 97
            echo __("User");
            echo "\">

            ";
            // line 99
            if ($this->getAttribute(($context["flash"] ?? null), "login_message", [])) {
                // line 100
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "login_message", []), "html", null, true);
                echo "</div>
            ";
            }
            // line 102
            echo "
            <p><button class=\"btn btn-large btn-primary\" type=\"submit\">";
            // line 103
            echo __("Send Reset");
            echo "</button></p>

            <p><a href=\"#\" id=\"login-form-toggle\">";
            // line 105
            echo __("Login instead?");
            echo "</a></p>
        </form>
        ";
        }
        // line 108
        echo "
        <p class=\"text-center\">";
        // line 109
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        // line 110
        echo "            | <a id=\"source-link\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getThemeConfig", [0 => "cms_source_url"], "method"), "html", null, true);
        echo "\">";
        echo __("Source");
        echo "</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About");
        echo "\">";
        echo __("About");
        echo "</a>
        </p>
    </div> <!-- /container -->
    <!-- Import JS bundle from dist -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#reminder-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").addClass(\"hidden\");
                \$(\"#reminder-form\").removeClass(\"hidden\");
            });

            \$(\"#login-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").removeClass(\"hidden\");
                \$(\"#reminder-form\").addClass(\"hidden\");
            });
        });
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 115,  271 => 111,  264 => 110,  262 => 109,  259 => 108,  253 => 105,  248 => 103,  245 => 102,  239 => 100,  237 => 99,  232 => 97,  228 => 96,  221 => 94,  216 => 93,  214 => 92,  211 => 91,  207 => 89,  201 => 88,  196 => 86,  193 => 85,  187 => 83,  185 => 82,  180 => 80,  176 => 79,  171 => 77,  164 => 75,  158 => 74,  154 => 73,  149 => 72,  143 => 69,  140 => 68,  134 => 66,  132 => 65,  127 => 63,  122 => 61,  118 => 60,  113 => 59,  111 => 58,  102 => 54,  56 => 13,  50 => 10,  46 => 9,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{{ theme.getThemeConfig(\"theme_title\") }}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"token\" content=\"{{ csrfToken }}\"/>
    <meta name=\"public-path\" content=\"{{ theme.rootUri() }}\"/>
    <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />

    <!-- Import CSS bundle from dist -->
    <script src=\"{{ theme.rootUri() }}dist/style.bundle.min.js?{{ version }}\"></script>

    <!-- Copyright 2006-2020 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>

    <!-- Import user made CSS from theme -->
    <link href=\"{{ theme.uri(\"css/override.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
</head>
<body>
    <div class=\"container\">
        {% if authCASEnabled %}
        <form id=\"cas-login-form\" class=\"form-signin text-center\" action=\"{{ urlFor(\"cas.login\") }}\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"{{ flash.priorRoute }}\" />
            <p><img class=\"login-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></p>

            <p>{% trans \"Connect with the Central Authentication Server\" %}</p>

            {% if flash.cas_login_message %}
            <div class=\"alert alert-danger\">{{ flash.cas_login_message }}</div>
            {% endif %}

            <p><button class=\"btn btn-large btn-primary\" type=\"submit\" name=\"logincas\">{% trans \"CAS Login\" %}</button></p>
        </form>
        {% else %}
        <form id=\"login-form\" class=\"form-signin text-center\" action=\"{{ urlFor(\"login\") }}\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"{{ flash.priorRoute }}\" />
            <input type=\"hidden\" name=\"{{ csrfKey }}\" value=\"{{ csrfToken }}\" />
            <p><a href=\"{{ theme.getThemeConfig(\"theme_url\") }}\"><img class=\"login-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></a></p>

            <p>{% trans \"Please provide your credentials\" %}</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"{% trans \"User\" %}\" autofocus autocomplete=\"username\">
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"{% trans \"Password\" %}\" autocomplete=\"current-password\">

            {% if flash.login_message %}
            <div class=\"alert alert-danger\">{{ flash.login_message }}</div>
            {% endif %}

            <p><button class=\"btn btn-large btn-primary\" type=\"submit\">{% trans \"Login\" %}</button></p>

            {% if passwordReminderEnabled %}<p><a href=\"#\" id=\"reminder-form-toggle\">{% trans \"Forgotten your password?\" %}</a></p>{% endif %}
        </form>
        {% endif %}

        {% if passwordReminderEnabled %}
        <form id=\"reminder-form\" class=\"form-signin text-center hidden\" action=\"{{ urlFor(\"login.forgotten\") }}\" method=\"post\">
            <input type=\"hidden\" name=\"{{ csrfKey }}\" value=\"{{ csrfToken }}\" />

            <p>{% trans \"Please provide your user name\" %}</p>
            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"{% trans \"User\" %}\">

            {% if flash.login_message %}
                <div class=\"alert alert-danger\">{{ flash.login_message }}</div>
            {% endif %}

            <p><button class=\"btn btn-large btn-primary\" type=\"submit\">{% trans \"Send Reset\" %}</button></p>

            <p><a href=\"#\" id=\"login-form-toggle\">{% trans \"Login instead?\" %}</a></p>
        </form>
        {% endif %}

        <p class=\"text-center\">{% trans %}Version {{ version }}{% endtrans %}
            | <a id=\"source-link\" href=\"{{ theme.getThemeConfig(\"cms_source_url\") }}\">{% trans \"Source\" %}</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About\" %}\">{% trans \"About\" %}</a>
        </p>
    </div> <!-- /container -->
    <!-- Import JS bundle from dist -->
    <script src=\"{{ theme.rootUri() }}dist/vendor.bundle.min.js?{{ version }}\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#reminder-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").addClass(\"hidden\");
                \$(\"#reminder-form\").removeClass(\"hidden\");
            });

            \$(\"#login-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").removeClass(\"hidden\");
                \$(\"#reminder-form\").addClass(\"hidden\");
            });
        });
    </script>
</body>
</html>
", "login.twig", "E:\\app\\laragon\\www\\xibo\\views\\login.twig");
    }
}
