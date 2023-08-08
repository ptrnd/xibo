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

/* get-resource.twig */
class __TwigTemplate_5450f9303b691c08bbebcb0868ad0cd41b7c2e0cf8bcdcaf812cff7097a406c0 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Xibo Open Source Digital Signage</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=";
        // line 6
        echo twig_escape_filter($this->env, ($context["viewPortWidth"] ?? null), "html", null, true);
        echo "\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Copyright 2006-2020 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            margin: 0;
            overflow: hidden;
            font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
        }
        h1, h2, h3, h4, p {
            margin-top: 0;
        }
        #iframe {
            border: 0;
        }
        .cycle-slide p, p.cycle-slide {
            margin-bottom:0;
        }
    </style>
    ";
        // line 25
        echo ($context["styleSheet"] ?? null);
        echo "
    ";
        // line 26
        echo ($context["head"] ?? null);
        echo "
</head>
<!--[if lt IE 7 ]><body class=\"ie6\"><![endif]-->
<!--[if IE 7 ]><body class=\"ie7\"><![endif]-->
<!--[if IE 8 ]><body class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><body class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
<div id=\"content\">";
        // line 33
        echo ($context["body"] ?? null);
        echo "</div>
</body>
";
        // line 35
        echo ($context["javaScript"] ?? null);
        echo "
</html>
";
        // line 37
        echo ($context["controlMeta"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "get-resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  78 => 35,  73 => 33,  63 => 26,  59 => 25,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>Xibo Open Source Digital Signage</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width={{ viewPortWidth }}\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Copyright 2006-2020 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            margin: 0;
            overflow: hidden;
            font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
        }
        h1, h2, h3, h4, p {
            margin-top: 0;
        }
        #iframe {
            border: 0;
        }
        .cycle-slide p, p.cycle-slide {
            margin-bottom:0;
        }
    </style>
    {{ styleSheet|raw }}
    {{ head|raw }}
</head>
<!--[if lt IE 7 ]><body class=\"ie6\"><![endif]-->
<!--[if IE 7 ]><body class=\"ie7\"><![endif]-->
<!--[if IE 8 ]><body class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><body class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
<div id=\"content\">{{ body|raw }}</div>
</body>
{{ javaScript|raw }}
</html>
{{ controlMeta|raw }}
", "get-resource.twig", "E:\\app\\laragon\\www\\xibo\\modules\\get-resource.twig");
    }
}
