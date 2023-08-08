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

/* usergroup-page.twig */
class __TwigTemplate_50382cb71e8b283f37603f639017ee3ee088875d84463f9c6f399f1fe64413fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
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
        $context["inline"] = $this->loadTemplate("inline.twig", "usergroup-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "usergroup-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        ";
        // line 14
        if ($this->getAttribute(($context["currentUser"] ?? null), "isSuperAdmin", [], "method")) {
            // line 15
            echo "        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Add a new User Group");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.add.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            echo __("Add User Group");
            echo "</a></li>
        ";
        }
        // line 17
        echo "    </ul>
";
    }

    // line 21
    public function block_pageContent($context, array $blocks = [])
    {
        // line 22
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 23
        echo __("User Groups");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"userGroup\" accesskey=\"\">";
        // line 31
        echo __("Name");
        echo "</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"userGroup\" type=\"text\" id=\"userGroup\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"";
        // line 36
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"userGroups\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 48
        echo __("User Group");
        echo "</th>
                                <th>";
        // line 49
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 50
        echo __("Receive System Notifications?");
        echo "</th>
                                <th>";
        // line 51
        echo __("Receive Display Notifications?");
        echo "</th>
                                <th>";
        // line 52
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

    // line 65
    public function block_javaScript($context, array $blocks = [])
    {
        // line 66
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=userGroupGrid\",
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"userGroupGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                filter: false,
                \"order\": [[0, \"asc\"]],
                ajax: {
                    url: \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#userGroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"group\", \"render\": dataTableSpacingPreformatted },
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {
                        \"data\": \"isSystemNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"isDisplayNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#userGroups_wrapper').find('.col-sm-6').eq(1));
        });

        function userGroupFormOpen() {
            // Bind to the add form submit
            \$(\".UserGroupForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function(event, validator) {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                    // https://github.com/xibosignage/xibo/issues/1589
                    \$(this).closest(\".modal-dialog\").find(\".save-button\").removeClass(\"disabled\");
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "usergroup-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 106,  177 => 93,  157 => 76,  145 => 66,  142 => 65,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  95 => 36,  87 => 31,  78 => 25,  73 => 23,  70 => 22,  67 => 21,  62 => 17,  52 => 15,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        {% if currentUser.isSuperAdmin() %}
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new User Group\" %}\" href=\"{{ urlFor(\"group.add.form\") }}\"> <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {% trans \"Add User Group\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"User Groups\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"userGroup\" accesskey=\"\">{% trans \"Name\" %}</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"userGroup\" type=\"text\" id=\"userGroup\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"userGroups\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"User Group\" %}</th>
                                <th>{% trans \"Library Quota\" %}</th>
                                <th>{% trans \"Receive System Notifications?\" %}</th>
                                <th>{% trans \"Receive Display Notifications?\" %}</th>
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
        \$(document).ready(function() {
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=userGroupGrid\",
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
                                option: \"userGroupGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                filter: false,
                \"order\": [[0, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"group.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#userGroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"group\", \"render\": dataTableSpacingPreformatted },
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {
                        \"data\": \"isSystemNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"isDisplayNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#userGroups_wrapper').find('.col-sm-6').eq(1));
        });

        function userGroupFormOpen() {
            // Bind to the add form submit
            \$(\".UserGroupForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function(event, validator) {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                    // https://github.com/xibosignage/xibo/issues/1589
                    \$(this).closest(\".modal-dialog\").find(\".save-button\").removeClass(\"disabled\");
                }
            });
        }
    </script>
{% endblock %}", "usergroup-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\usergroup-page.twig");
    }
}
