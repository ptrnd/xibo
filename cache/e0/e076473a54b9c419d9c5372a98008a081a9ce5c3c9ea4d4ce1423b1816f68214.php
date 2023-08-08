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

/* template-page.twig */
class __TwigTemplate_49f658e49a7a299c1d8526437b75dc80c423d9b68556b7e47ab527a6716732b1 extends \Twig\Template
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
        $context["inline"] = $this->loadTemplate("inline.twig", "template-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "template-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 14
        echo __("Templates");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 20
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "                            ";
        echo $context["inline"]->getinput("template", ($context["title"] ?? null));
        echo "

                            ";
        // line 23
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "                            ";
        echo $context["inline"]->getinput("tags", ($context["title"] ?? null));
        echo "

                            ";
        // line 26
        ob_start();
        echo __("Exact match?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                            ";
        echo $context["inline"]->getcheckbox("exactTags", ($context["title"] ?? null));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"templates\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 35
        echo __("Name");
        echo "</th>
                                <th>";
        // line 36
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 37
        echo __("Description");
        echo "</th>
                                <th>";
        // line 38
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 39
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 40
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 41
        echo __("Row Menu");
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
";
    }

    // line 54
    public function block_javaScript($context, array $blocks = [])
    {
        // line 55
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#templates\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=templateGrid\",
                    dataType: 'json',
                    success: function (json) {
                        try {
                            if (json.success) {
                                data = JSON.parse(json.data.value);
                            }
                        } catch (e) {
                            // Do nothing
                        }
                    }
                });
                return data;
            },
            stateSaveCallback: function (settings, data) {
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    data: {
                        preference: [{
                            option: \"templateGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\"},
                { \"data\": \"owner\"},
                { \"data\": \"descriptionWithMarkup\"},
                {
                    \"sortable\": false,
                    \"visible\": false,
                    \"data\": dataTableCreateTags
                },
                { \"data\": \"thumbnail\"},
                { \"data\": \"permissions\", \"sortable\": false},
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.col-sm-6').eq(1));
    </script>
";
    }

    public function getTemplateName()
    {
        return "template-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 93,  170 => 80,  150 => 63,  140 => 55,  137 => 54,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  85 => 27,  81 => 26,  75 => 24,  71 => 23,  65 => 21,  61 => 20,  54 => 16,  49 => 14,  46 => 13,  43 => 12,  38 => 9,  36 => 10,  30 => 9,);
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
 * (template-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Templates\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"template\", title) }}

                            {% set title %}{% trans \"Tags\" %}{% endset %}
                            {{ inline.input(\"tags\", title) }}

                            {% set title %}{% trans \"Exact match?\" %}{% endset %}
                            {{ inline.checkbox(\"exactTags\", title) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"templates\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Row Menu\" %}</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        var table = \$(\"#templates\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true, stateDuration: 0,
            stateLoadCallback: function (settings, callback) {
                var data = {};
                \$.ajax({
                    type: \"GET\",
                    async: false,
                    url: \"{{ urlFor(\"user.pref\") }}?preference=templateGrid\",
                    dataType: 'json',
                    success: function (json) {
                        try {
                            if (json.success) {
                                data = JSON.parse(json.data.value);
                            }
                        } catch (e) {
                            // Do nothing
                        }
                    }
                });
                return data;
            },
            stateSaveCallback: function (settings, data) {
                \$.ajax({
                    type: \"POST\",
                    url: \"{{ urlFor(\"user.pref\") }}\",
                    data: {
                        preference: [{
                            option: \"templateGrid\",
                            value: JSON.stringify(data)
                        }]
                    }
                });
            },
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"template.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\"},
                { \"data\": \"owner\"},
                { \"data\": \"descriptionWithMarkup\"},
                {
                    \"sortable\": false,
                    \"visible\": false,
                    \"data\": dataTableCreateTags
                },
                { \"data\": \"thumbnail\"},
                { \"data\": \"permissions\", \"sortable\": false},
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.col-sm-6').eq(1));
    </script>
{% endblock %}", "template-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\template-page.twig");
    }
}
