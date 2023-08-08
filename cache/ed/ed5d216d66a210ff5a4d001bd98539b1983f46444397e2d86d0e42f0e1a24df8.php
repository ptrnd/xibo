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

/* playlist-form-add.twig */
class __TwigTemplate_bdc47fdce1ecbff980054c4589d507e18b08172e99b1cdc3f44c924aa79cefa0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "playlist-form-add.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-add.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo __("Add Playlist");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Save");
        echo ", \$(\"#playlistAddForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        echo "playlistFormOpen";
    }

    // line 23
    public function block_formFieldActions($context, array $blocks = [])
    {
        // line 24
        echo "    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"block\" },
    \".static-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"block\" },
    \".static-message\": { \"display\": \"none\" }
    }
    }]
";
    }

    // line 63
    public function block_formHtml($context, array $blocks = [])
    {
        // line 64
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 67
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#populate\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 68
        echo __("Filter");
        echo "</span></a></li>
            </ul>
            <form id=\"playlistAddForm\" class=\"form-horizontal playlistForm\" method=\"post\" action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.add"), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 73
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start();
        echo __("The Name of the Playlist - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        echo $context["forms"]->getinput("name", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 77
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        ob_start();
        echo __("Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        echo $context["forms"]->getinputWithTags("tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value");
        echo "

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        ";
        // line 83
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        echo $context["forms"]->getdropdown("tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value");
        echo "

                        <div id=\"tagValueContainer\">
                            ";
        // line 87
        ob_start();
        echo __("Tag value");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                            ";
        ob_start();
        echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                            ";
        echo $context["forms"]->getinput("tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null));
        echo "
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>";
        // line 93
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
                        </div>

                        ";
        // line 96
        ob_start();
        echo __("Dynamic?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        ";
        ob_start();
        echo __("Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        echo $context["forms"]->getcheckbox("isDynamic", ($context["title"] ?? null), 0, ($context["helpText"] ?? null));
        echo "

                        ";
        // line 100
        ob_start();
        echo __("Enable Playlist Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        ob_start();
        echo __("Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "
                        ";
        // line 103
        ob_start();
        echo __("If you want to prepopulate your Playlist with Media using a search, then you can do so on the filter tab. Leave the Dynamic checkbox unticked to make it a one-time assignment.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        echo $context["forms"]->getalert(($context["message"] ?? null), "info");
        echo "
                        
                        ";
        // line 106
        ob_start();
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        ";
        ob_start();
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "                        ";
        ob_start();
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 110
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 111
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 112
($context["inheritOption"] ?? null)]];
        // line 114
        echo "                        ";
        echo $context["forms"]->getdropdown("enableStat", "single", ($context["title"] ?? null), $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method"), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            ";
        // line 118
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 119
        echo "                            ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "
                        </div>
                        <div class=\"static-message\">
                            ";
        // line 122
        $context["message"] = __("Populate with Library Media matching the criteria below. This is a one time assignment and is not automatically maintained.");
        // line 123
        echo "                            ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "
                        </div>

                        <div class=\"widget\">
                            <div class=\"widget-title\">";
        // line 127
        echo __("Library Media");
        echo "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv\" id=\"Filter\">
                                    ";
        // line 130
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 131
        echo "                                    ";
        echo $context["forms"]->getmessage(($context["message"] ?? null));
        echo "

                                    ";
        // line 133
        ob_start();
        echo __("Name filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                                    ";
        echo $context["forms"]->getinput("filterMediaName", ($context["title"] ?? null));
        echo "

                                    ";
        // line 136
        ob_start();
        echo __("Tag filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                                    ";
        echo $context["forms"]->getinputWithTags("filterMediaTag", ($context["title"] ?? null));
        echo "
                                </div>

                                <div class=\"XiboData\">
                                    <table id=\"playlistLibraryMedia\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 144
        echo __("ID");
        echo "</th>
                                            <th>";
        // line 145
        echo __("Name");
        echo "</th>
                                            <th>";
        // line 146
        echo __("Type");
        echo "</th>
                                            <th>";
        // line 147
        echo __("Tags");
        echo "</th>
                                            <th>";
        // line 148
        echo __("Duration");
        echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "playlist-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 148,  344 => 147,  340 => 146,  336 => 145,  332 => 144,  321 => 137,  317 => 136,  311 => 134,  307 => 133,  301 => 131,  299 => 130,  293 => 127,  285 => 123,  283 => 122,  276 => 119,  274 => 118,  266 => 114,  264 => 112,  263 => 111,  262 => 110,  260 => 109,  255 => 108,  250 => 107,  246 => 106,  240 => 104,  236 => 103,  233 => 102,  228 => 101,  224 => 100,  218 => 98,  213 => 97,  209 => 96,  203 => 93,  195 => 89,  190 => 88,  186 => 87,  179 => 84,  175 => 83,  167 => 79,  162 => 78,  158 => 77,  152 => 75,  147 => 74,  143 => 73,  135 => 70,  130 => 68,  126 => 67,  121 => 64,  118 => 63,  77 => 24,  74 => 23,  68 => 21,  62 => 18,  57 => 17,  54 => 16,  49 => 13,  46 => 12,  41 => 9,  39 => 10,  33 => 9,);
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
 * Copyright (C) 2015-2018 Spring Signage Ltd
 * (playlist-form-add.twig)
 */
#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Add Playlist\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#playlistAddForm\").submit()
{% endblock %}

{% block callBack %}playlistFormOpen{% endblock %}

{% block formFieldActions %}
    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"block\" },
    \".static-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"block\" },
    \".static-message\": { \"display\": \"none\" }
    }
    }]
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#populate\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Filter\" %}</span></a></li>
            </ul>
            <form id=\"playlistAddForm\" class=\"form-horizontal playlistForm\" method=\"post\" action=\"{{ urlFor(\"playlist.add\") }}\" data-gettag=\"{{ urlFor(\"tag.getByName\") }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"The Name of the Playlist - (1 - 50 characters)\" %}{% endset %}
                        {{ forms.input(\"name\", title, \"\", helpText) }}

                        {% set title %}{% trans \"Tags\" %}{% endset %}
                        {% set helpText %}{% trans \"Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.\" %}{% endset %}
                        {{ forms.inputWithTags(\"tags\", title, \"\", helpText, 'tags-with-value') }}

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        {% set title %}{% trans \"Tag value\" %}{% endset %}
                        {{ forms.dropdown(\"tagValue\", \"single\", title, \"\", options, \"key\", \"value\") }}

                        <div id=\"tagValueContainer\">
                            {% set title %}{% trans \"Tag value\" %}{% endset %}
                            {% set helpText %}{% trans \"Please provide the value for this Tag and confirm by pressing enter on your keyboard.\" %}{% endset %}
                            {{ forms.input(\"tagValueInput\", title, \"\", helpText) }}
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>{% trans \"This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.\" %}</p>
                        </div>

                        {% set title %}{% trans \"Dynamic?\" %}{% endset %}
                        {% set helpText %}{% trans \"Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.\" %}{% endset %}
                        {{ forms.checkbox(\"isDynamic\", title, 0, helpText) }}

                        {% set title %}{% trans \"Enable Playlist Stats Collection?\" %}{% endset %}
                        {% set helpText %}{% trans \"Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.\" %}{% endset %}

                        {% set message %}{% trans \"If you want to prepopulate your Playlist with Media using a search, then you can do so on the filter tab. Leave the Dynamic checkbox unticked to make it a one-time assignment.\" %}{% endset %}
                        {{ forms.alert(message, \"info\") }}
                        
                        {% set offOption %}{% trans \"Off\" %}{% endset %}
                        {% set onOption %}{% trans \"On\" %}{% endset %}
                        {% set inheritOption %}{% trans \"Inherit\" %}{% endset %}
                        {% set options = [
                            { id: \"Off\", value: offOption },
                            { id: \"On\", value: onOption },
                            { id: \"Inherit\", value: inheritOption }
                        ] %}
                        {{ forms.dropdown(\"enableStat\", \"single\", title, theme.getSetting(\"PLAYLIST_STATS_ENABLED_DEFAULT\"), options, \"id\", \"value\", helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            {% set message = \"Populate with Library Media matching the criteria below and automatically maintain the Playlist.\"|trans %}
                            {{ forms.message(message) }}
                        </div>
                        <div class=\"static-message\">
                            {% set message = \"Populate with Library Media matching the criteria below. This is a one time assignment and is not automatically maintained.\"|trans %}
                            {{ forms.message(message) }}
                        </div>

                        <div class=\"widget\">
                            <div class=\"widget-title\">{% trans \"Library Media\" %}</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv\" id=\"Filter\">
                                    {% set message = \"Populate with Library Media matching the criteria below and automatically maintain the Playlist.\"|trans %}
                                    {{ forms.message(message) }}

                                    {% set title %}{% trans \"Name filter\" %}{% endset %}
                                    {{ forms.input(\"filterMediaName\", title) }}

                                    {% set title %}{% trans \"Tag filter\" %}{% endset %}
                                    {{ forms.inputWithTags(\"filterMediaTag\", title) }}
                                </div>

                                <div class=\"XiboData\">
                                    <table id=\"playlistLibraryMedia\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>{% trans \"ID\" %}</th>
                                            <th>{% trans \"Name\" %}</th>
                                            <th>{% trans \"Type\" %}</th>
                                            <th>{% trans \"Tags\" %}</th>
                                            <th>{% trans \"Duration\" %}</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "playlist-form-add.twig", "E:\\app\\laragon\\www\\xibo\\views\\playlist-form-add.twig");
    }
}
