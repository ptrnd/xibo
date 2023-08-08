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

/* user-page.twig */
class __TwigTemplate_fcbaabccda0d7b0dc70769f20bff202d373524731034434a2396d955eb084acd extends \Twig\Template
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
        // line 8
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 9
        $context["inline"] = $this->loadTemplate("inline.twig", "user-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "user-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_actionMenu($context, array $blocks = [])
    {
        // line 12
        echo "    <ul class=\"nav nav-pills pull-right\">
        ";
        // line 13
        if (($this->getAttribute(($context["currentUser"] ?? null), "isSuperAdmin", [], "method") || $this->getAttribute(($context["currentUser"] ?? null), "isGroupAdmin", [], "method"))) {
            // line 14
            echo "        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Add a new User");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ";
            echo __("Add User");
            echo "</a></li>
        ";
        }
        // line 16
        echo "        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        echo __("View my authenticated applications");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.applications"), "html", null, true);
        echo "\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> ";
        echo __("My Applications");
        echo "</a></li>
    </ul>
";
    }

    // line 20
    public function block_pageContent($context, array $blocks = [])
    {
        // line 21
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 22
        echo __("Users");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"userName\" accesskey=\"\">";
        // line 30
        echo __("Name");
        echo "</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"userName\" type=\"text\" id=\"userName\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"";
        // line 35
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 41
        ob_start();
        echo __("User Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                            ";
        echo $context["inline"]->getdropdown("userTypeId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userTypeId" => null, "userType" => ""]], ($context["userTypes"] ?? null)), "userTypeId", "userType");
        echo "

                            ";
        // line 44
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        $context["values"] = [0 => ["id" => 1, "value" => "Yes"], 1 => ["id" => 0, "value" => "No"]];
        // line 46
        echo "                            ";
        echo $context["inline"]->getdropdown("retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"users\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 54
        echo __("Name");
        echo "</th>
                                <th>";
        // line 55
        echo __("Homepage");
        echo "</th>
                                <th>";
        // line 56
        echo __("Email");
        echo "</th>
                                <th>";
        // line 57
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 58
        echo __("Last Login");
        echo "</th>
                                <th>";
        // line 59
        echo __("Logged In?");
        echo "</th>
                                <th>";
        // line 60
        echo __("Retired?");
        echo "</th>
                                <th>";
        // line 61
        echo __("Two Factor");
        echo "</th>
                                <th>";
        // line 62
        echo __("First Name");
        echo "</th>
                                <th>";
        // line 63
        echo __("Last Name");
        echo "</th>
                                <th>";
        // line 64
        echo __("Phone");
        echo "</th>
                                <th>";
        // line 65
        echo __("Ref 1");
        echo "</th>
                                <th>";
        // line 66
        echo __("Ref 2");
        echo "</th>
                                <th>";
        // line 67
        echo __("Ref 3");
        echo "</th>
                                <th>";
        // line 68
        echo __("Ref 4");
        echo "</th>
                                <th>";
        // line 69
        echo __("Ref 5");
        echo "</th>
                                <th>";
        // line 70
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

    // line 83
    public function block_javaScript($context, array $blocks = [])
    {
        // line 84
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=userGrid\",
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"userGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\"},
                    {\"data\": \"homePage\"},
                    {\"data\": \"email\"},
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false},
                    {
                        \"data\": \"loggedIn\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"twoFactorTypeId\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-envelope\";
                            else if (data == 2)
                                icon = \"fa-google\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"' title='\" + (row.twoFactorDescription) + \"'></span>\";
                        }
                    },
                    {\"data\": \"firstName\", \"visible\": false},
                    {\"data\": \"lastName\", \"visible\": false},
                    {\"data\": \"phone\", \"visible\": false},
                    {\"data\": \"ref1\", \"visible\": false},
                    {\"data\": \"ref2\", \"visible\": false},
                    {\"data\": \"ref3\", \"visible\": false},
                    {\"data\": \"ref4\", \"visible\": false},
                    {\"data\": \"ref5\", \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.col-sm-6').eq(1));
        });

        function userFormOpen() {
            // Bind to the add form submit
            \$(\".UserForm\").validate({
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
        return "user-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 124,  255 => 111,  235 => 94,  223 => 84,  220 => 83,  204 => 70,  200 => 69,  196 => 68,  192 => 67,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  128 => 46,  125 => 45,  121 => 44,  115 => 42,  111 => 41,  102 => 35,  94 => 30,  85 => 24,  80 => 22,  77 => 21,  74 => 20,  62 => 16,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  39 => 8,  37 => 9,  31 => 8,);
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
 * Copyright (C) 2015-16 Spring Signage Ltd
 * (user-page.twig)
 */
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        {% if currentUser.isSuperAdmin() or currentUser.isGroupAdmin() %}
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new User\" %}\" href=\"{{ urlFor(\"user.add.form\") }}\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> {% trans \"Add User\" %}</a></li>
        {% endif %}
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"View my authenticated applications\" %}\" href=\"{{ urlFor(\"user.applications\") }}\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> {% trans \"My Applications\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Users\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            <div class=\"form-group \">
                                <label class=\"control-label\" title=\"\" for=\"userName\" accesskey=\"\">{% trans \"Name\" %}</label>
                                <div>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" name=\"userName\" type=\"text\" id=\"userName\" value=\"\">
                                        <span class=\"input-group-addon\">
                                            <input title=\"{% trans \"Use Regex?\" %}\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {% set title %}{% trans \"User Type\" %}{% endset %}
                            {{ inline.dropdown(\"userTypeId\", \"single\", title, \"\", [{userTypeId:null, userType:\"\"}]|merge(userTypes), \"userTypeId\", \"userType\") }}

                            {% set title %}{% trans \"Retired\" %}{% endset %}
                            {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                            {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"users\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Homepage\" %}</th>
                                <th>{% trans \"Email\" %}</th>
                                <th>{% trans \"Library Quota\" %}</th>
                                <th>{% trans \"Last Login\" %}</th>
                                <th>{% trans \"Logged In?\" %}</th>
                                <th>{% trans \"Retired?\" %}</th>
                                <th>{% trans \"Two Factor\" %}</th>
                                <th>{% trans \"First Name\" %}</th>
                                <th>{% trans \"Last Name\" %}</th>
                                <th>{% trans \"Phone\" %}</th>
                                <th>{% trans \"Ref 1\" %}</th>
                                <th>{% trans \"Ref 2\" %}</th>
                                <th>{% trans \"Ref 3\" %}</th>
                                <th>{% trans \"Ref 4\" %}</th>
                                <th>{% trans \"Ref 5\" %}</th>
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
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data = {};
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=userGrid\",
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
                                option: \"userGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"{{ urlFor(\"user.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\"},
                    {\"data\": \"homePage\"},
                    {\"data\": \"email\"},
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false},
                    {
                        \"data\": \"loggedIn\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"twoFactorTypeId\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-envelope\";
                            else if (data == 2)
                                icon = \"fa-google\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"' title='\" + (row.twoFactorDescription) + \"'></span>\";
                        }
                    },
                    {\"data\": \"firstName\", \"visible\": false},
                    {\"data\": \"lastName\", \"visible\": false},
                    {\"data\": \"phone\", \"visible\": false},
                    {\"data\": \"ref1\", \"visible\": false},
                    {\"data\": \"ref2\", \"visible\": false},
                    {\"data\": \"ref3\", \"visible\": false},
                    {\"data\": \"ref4\", \"visible\": false},
                    {\"data\": \"ref5\", \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.col-sm-6').eq(1));
        });

        function userFormOpen() {
            // Bind to the add form submit
            \$(\".UserForm\").validate({
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
{% endblock %}", "user-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\user-page.twig");
    }
}
