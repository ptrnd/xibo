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

/* layout-preview.twig */
class __TwigTemplate_264fdf7a70cb06af49b8a94e3063831235a4946f366322598573a7d6b4b53750 extends \Twig\Template
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
        // line 8
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 11
        echo __("Preview for Layout");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "\"/>
        
        <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/preview/html-preview.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/html-preview.css"], "method"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->loadTemplate("layout-preview-partial.twig", "layout-preview.twig", 23)->display(twig_array_merge($context, ["layout" => ($context["layout"] ?? null), "previewOptions" => ($context["previewOptions"] ?? null)]));
        // line 24
        echo "        ";
        // line 25
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/html5preloader/html5Preloader.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/preview/html-preview.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
        
            var emptyRegionMessage = \"";
        // line 30
        echo __("Empty Region");
        echo "\"; 
        
            (function(\$){
              \$(document).ready(function(){
                dsInit(";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo ", ";
        echo twig_jsonencode_filter(($context["previewOptions"] ?? null));
        echo ", true)
              });
            }(jQuery));
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  89 => 30,  81 => 27,  75 => 26,  68 => 25,  66 => 24,  64 => 23,  58 => 20,  54 => 19,  50 => 18,  45 => 16,  35 => 11,  30 => 8,);
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
<!DOCTYPE html>
<html>
    <head>
        <title>{% trans \"Preview for Layout\" %} {{ layout.layoutId }}</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"{{ theme.rootUri() }}\"/>
        
        <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme.rootUri() }}dist/preview/html-preview.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme.uri(\"css/html-preview.css\") }}\" />
    </head>
    <body>
        {% include 'layout-preview-partial.twig' with {'layout': layout, 'previewOptions': previewOptions} %}
        {# Import JS bundle from dist #}
        <script src=\"{{ theme.rootUri() }}dist/vendor.bundle.min.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/html5preloader/html5Preloader.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/preview/html-preview.js?{{ version }}\"></script>
        <script type=\"text/javascript\">
        
            var emptyRegionMessage = \"{% trans \"Empty Region\" %}\"; 
        
            (function(\$){
              \$(document).ready(function(){
                dsInit({{ layout.layoutId }}, {{ previewOptions|json_encode()|raw }}, true)
              });
            }(jQuery));
        </script>
    </body>
</html>
", "layout-preview.twig", "E:\\app\\laragon\\www\\xibo\\modules\\layout-preview.twig");
    }
}
