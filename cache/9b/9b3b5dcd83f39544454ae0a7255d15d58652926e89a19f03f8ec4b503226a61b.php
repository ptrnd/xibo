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

/* layout-designer-page.twig */
class __TwigTemplate_a0c9a3a38c8771a1e558404cda0044d68ae936e0ca71232d3c2109dd4722cc9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "layout-designer-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "layout-designer-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = [])
    {
        // line 13
        echo "
    <!-- Editor structure -->
    <div id=\"layout-editor\" data-layout-id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layout"] ?? null), "layoutId", []), "html", null, true);
        echo "\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
    }

    // line 23
    public function block_javaScript($context, array $blocks = [])
    {
        echo " 
        ";
        // line 25
        echo "        ";
        $this->loadTemplate("common.twig", "layout-designer-page.twig", 25)->display($context);
        // line 26
        echo "
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/layoutDesigner.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/playlistEditor.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">

            ";
        // line 32
        echo "            ";
        // line 33
        echo "                ";
        // line 34
        echo "                var layoutDesignerTrans = {
                    publishTitle: \"";
        // line 35
        echo __("Publish layout");
        echo "\",
                    discardTitle: \"";
        // line 36
        echo __("Discard layout");
        echo "\",
                    publishMessage: \"";
        // line 37
        echo __("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.");
        echo "\",
                    checkoutTitle: \"";
        // line 38
        echo __("Checkout");
        echo "\",
                    scheduleTitle: \"";
        // line 39
        echo __("Schedule Now");
        echo "\",
                    saveTemplateTitle: \"";
        // line 40
        echo __("Save Template");
        echo "\",
                    readOnlyModeTitle: \"";
        // line 41
        echo __("Read Only Mode");
        echo "\",
                    readOnlyModeMessage: \"";
        // line 42
        echo __("You are viewing this Layout in read only mode, checkout by clicking on this message or from the Actions menu above!");
        echo "\",
                    checkoutMessage: \"";
        // line 43
        echo __("Layout is not editable, please checkout!");
        echo "\",
                    viewModeTitle: \"";
        // line 44
        echo __("View");
        echo "\",
                    regionEditModeMessage: \"";
        // line 45
        echo __("Editing Regions");
        echo "\",
                    welcomeModalMessage: \"";
        // line 46
        echo __("This Layout is Published and cannot be edited. You can checkout the Layout for editing below, or continue to view it in a read only mode.");
        echo "\"
                };

                var viewerTrans = {
                    inlineEditor: \"";
        // line 50
        echo __("Inline Editor");
        echo "\",
                    toggleFullscreen: \"";
        // line 51
        echo __("Toggle Fullscreen Mode");
        echo "\",
                    backToLayout: \"";
        // line 52
        echo __("Go back to Layout view");
        echo "\",
                    saveEditorChanges: \"";
        // line 53
        echo __("Save editor changes");
        echo "\",
                    playPreviewLayout: \"";
        // line 54
        echo __("Play Layout preview");
        echo "\",
                    editLayout: \"";
        // line 55
        echo __("Edit Layout");
        echo "\",
                    stopPreviewLayout: \"";
        // line 56
        echo __("Stop Layout preview");
        echo "\",
                    nextWidget: \"";
        // line 57
        echo __("Next widget");
        echo "\",
                    previousWidget: \"";
        // line 58
        echo __("Previous widget");
        echo "\"
                };

                var timelineTrans = {
                    zoomIn: \"";
        // line 62
        echo __("Zoom in");
        echo "\",
                    zoomOut: \"";
        // line 63
        echo __("Zoom out");
        echo "\",
                    resetZoom: \"";
        // line 64
        echo __("Reset zoom");
        echo "\",
                    zoomDelta: \"";
        // line 65
        echo __("Visible area time span");
        echo "\",
                    zoomFindSelected: \"";
        // line 66
        echo __("Scroll to selected widget");
        echo "\",
                    startTime: \"";
        // line 67
        echo __("Visible area start time");
        echo "\",
                    endTime: \"";
        // line 68
        echo __("Visible area end time");
        echo "\",
                    layoutName: \"";
        // line 69
        echo __("Layout name");
        echo "\",
                    layoutDuration: \"";
        // line 70
        echo __("Layout duration");
        echo "\",
                    layoutDimensions: \"";
        // line 71
        echo __("Layout dimensions");
        echo "\",
                    emptyRegion: \"";
        // line 72
        echo __("Empty Region");
        echo "\",
                    addToThisPosition: \"";
        // line 73
        echo __("Add to this position");
        echo "\",
                    hiddenContentInWidget: \"";
        // line 74
        echo __("Zoom in to see more details!");
        echo "\",
                };

                var navigatorTrans = {
                    edit: \"";
        // line 78
        echo __("Edit layout regions");
        echo "\",
                    addRegion: \"";
        // line 79
        echo __("Add");
        echo "\",
                    addRegionDesc: \"";
        // line 80
        echo __("Add a new region");
        echo "\",
                    deleteRegion: \"";
        // line 81
        echo __("Delete region");
        echo "\",
                    toggleFullscreen: \"";
        // line 82
        echo __("Toggle Fullscreen Mode");
        echo "\",
                    undo: \"";
        // line 83
        echo __("Undo");
        echo "\",
                    undoDesc: \"";
        // line 84
        echo __("Revert last change");
        echo "\",
                    close: \"";
        // line 85
        echo __("Close");
        echo "\",
                    closeDesc: \"";
        // line 86
        echo __("Return to Layout View");
        echo "\",
                    save: \"";
        // line 87
        echo __("Save");
        echo "\",
                    saveDesc: \"";
        // line 88
        echo __("Save changes");
        echo "\"
                };
            ";
        // line 91
        echo "        </script>

        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 94
            echo "            ";
            if (($this->getAttribute($context["module"], "layoutDesignerJavaScript", [], "method") != "")) {
                // line 95
                echo "                ";
                $this->loadTemplate(($this->getAttribute($context["module"], "layoutDesignerJavaScript", [], "method") . ".twig"), "layout-designer-page.twig", 95)->display($context);
                // line 96
                echo "            ";
            }
            // line 97
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        ";
        // line 99
        $this->loadTemplate("region-designer-javascript.twig", "layout-designer-page.twig", 99)->display($context);
        // line 100
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout-designer-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 100,  330 => 99,  327 => 98,  313 => 97,  310 => 96,  307 => 95,  304 => 94,  287 => 93,  283 => 91,  278 => 88,  274 => 87,  270 => 86,  266 => 85,  262 => 84,  258 => 83,  254 => 82,  250 => 81,  246 => 80,  242 => 79,  238 => 78,  231 => 74,  227 => 73,  223 => 72,  219 => 71,  215 => 70,  211 => 69,  207 => 68,  203 => 67,  199 => 66,  195 => 65,  191 => 64,  187 => 63,  183 => 62,  176 => 58,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  137 => 46,  133 => 45,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  90 => 34,  88 => 33,  86 => 32,  78 => 28,  72 => 27,  69 => 26,  66 => 25,  61 => 23,  50 => 15,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
 * Copyright (C) 2018 Spring Signage Ltd
 * (\${FILE_NAME})
 */
#}

{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}

    <!-- Editor structure -->
    <div id=\"layout-editor\" data-layout-id=\"{{ layout.layoutId }}\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

{% endblock %}

    {% block javaScript %} 
        {# Add common file #}
        {% include \"common.twig\" %}

        <script src=\"{{ theme.rootUri() }}dist/layoutDesigner.bundle.min.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/playlistEditor.bundle.min.js?{{ version }}\"></script>
        <script type=\"text/javascript\">

            {# Custom translations #}
            {% autoescape \"js\" %}
                {# Insert custom translations here #}
                var layoutDesignerTrans = {
                    publishTitle: \"{% trans \"Publish layout\" %}\",
                    discardTitle: \"{% trans \"Discard layout\" %}\",
                    publishMessage: \"{% trans \"Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.\" %}\",
                    checkoutTitle: \"{% trans \"Checkout\" %}\",
                    scheduleTitle: \"{% trans \"Schedule Now\" %}\",
                    saveTemplateTitle: \"{% trans \"Save Template\" %}\",
                    readOnlyModeTitle: \"{% trans \"Read Only Mode\" %}\",
                    readOnlyModeMessage: \"{% trans \"You are viewing this Layout in read only mode, checkout by clicking on this message or from the Actions menu above!\" %}\",
                    checkoutMessage: \"{% trans \"Layout is not editable, please checkout!\" %}\",
                    viewModeTitle: \"{% trans \"View\" %}\",
                    regionEditModeMessage: \"{% trans \"Editing Regions\" %}\",
                    welcomeModalMessage: \"{% trans \"This Layout is Published and cannot be edited. You can checkout the Layout for editing below, or continue to view it in a read only mode.\" %}\"
                };

                var viewerTrans = {
                    inlineEditor: \"{% trans \"Inline Editor\" %}\",
                    toggleFullscreen: \"{% trans \"Toggle Fullscreen Mode\" %}\",
                    backToLayout: \"{% trans \"Go back to Layout view\" %}\",
                    saveEditorChanges: \"{% trans \"Save editor changes\" %}\",
                    playPreviewLayout: \"{% trans \"Play Layout preview\" %}\",
                    editLayout: \"{% trans \"Edit Layout\" %}\",
                    stopPreviewLayout: \"{% trans \"Stop Layout preview\" %}\",
                    nextWidget: \"{% trans \"Next widget\" %}\",
                    previousWidget: \"{% trans \"Previous widget\" %}\"
                };

                var timelineTrans = {
                    zoomIn: \"{% trans \"Zoom in\" %}\",
                    zoomOut: \"{% trans \"Zoom out\" %}\",
                    resetZoom: \"{% trans \"Reset zoom\" %}\",
                    zoomDelta: \"{% trans \"Visible area time span\" %}\",
                    zoomFindSelected: \"{% trans \"Scroll to selected widget\" %}\",
                    startTime: \"{% trans \"Visible area start time\" %}\",
                    endTime: \"{% trans \"Visible area end time\" %}\",
                    layoutName: \"{% trans \"Layout name\" %}\",
                    layoutDuration: \"{% trans \"Layout duration\" %}\",
                    layoutDimensions: \"{% trans \"Layout dimensions\" %}\",
                    emptyRegion: \"{% trans \"Empty Region\" %}\",
                    addToThisPosition: \"{% trans \"Add to this position\" %}\",
                    hiddenContentInWidget: \"{% trans \"Zoom in to see more details!\" %}\",
                };

                var navigatorTrans = {
                    edit: \"{% trans \"Edit layout regions\" %}\",
                    addRegion: \"{% trans \"Add\" %}\",
                    addRegionDesc: \"{% trans \"Add a new region\" %}\",
                    deleteRegion: \"{% trans \"Delete region\" %}\",
                    toggleFullscreen: \"{% trans \"Toggle Fullscreen Mode\" %}\",
                    undo: \"{% trans \"Undo\" %}\",
                    undoDesc: \"{% trans \"Revert last change\" %}\",
                    close: \"{% trans \"Close\" %}\",
                    closeDesc: \"{% trans \"Return to Layout View\" %}\",
                    save: \"{% trans \"Save\" %}\",
                    saveDesc: \"{% trans \"Save changes\" %}\"
                };
            {% endautoescape %}
        </script>

        {% for module in modules %}
            {% if module.layoutDesignerJavaScript() != \"\" %}
                {% include module.layoutDesignerJavaScript() ~ \".twig\" %}
            {% endif %}
        {% endfor %}

        {% include \"region-designer-javascript.twig\" %}

    {% endblock %}
", "layout-designer-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\layout-designer-page.twig");
    }
}
