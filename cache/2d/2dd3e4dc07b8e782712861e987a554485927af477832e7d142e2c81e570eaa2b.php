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

/* dataset-form-edit.twig */
class __TwigTemplate_d84ed976b1143ad5ab39e455b5d579bbc4b8b95999d506158a5912f61be4642a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["forms"] = $this->loadTemplate("forms.twig", "dataset-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "dataset-form-edit.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        echo __("Edit DataSet");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        echo ", \$(\"#dataSetEditForm\").submit()    
";
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        echo "dataSetFormOpen";
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        echo "</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#gateway\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Remote");
        echo "</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#auth\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Authentication");
        echo "</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#data\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Data");
        echo "</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#params\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Advanced");
        echo "</span></a></li>
            </ul>
            <form id=\"dataSetEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataSet.edit", ["id" => $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", [])]), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"testDataSetId\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataSet"] ?? null), "dataSetId", []), "html", null, true);
        echo "\"/>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 53
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start();
        echo __("A name for this DataSet");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo $context["forms"]->getinput("dataSet", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "dataSet", []), ($context["helpText"] ?? null), "", "required");
        echo "

                        ";
        // line 57
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        ob_start();
        echo __("An optional description");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        echo $context["forms"]->getinput("description", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "description", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 61
        ob_start();
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start();
        echo __("A code which can be used to lookup this DataSet - usually for an API application");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        echo $context["forms"]->getinput("code", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "code", []), ($context["helpText"] ?? null));
        echo "

                        ";
        // line 65
        ob_start();
        echo __("Remote?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start();
        echo __("Is this DataSet connected to a remote data source?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        echo $context["forms"]->getcheckbox("isRemote", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "isRemote", []), ($context["helpText"] ?? null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"gateway\">
                        ";
        // line 70
        ob_start();
        echo __("Method");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        ob_start();
        echo __("What type of request needs to be made to get the remote data?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                        ";
        ob_start();
        echo __("GET");
        $context["request_get"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start();
        echo __("POST");
        $context["request_post"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        $context["options"] = [0 => ["typeid" => "GET", "type" =>         // line 75
($context["request_get"] ?? null)], 1 => ["typeid" => "POST", "type" =>         // line 76
($context["request_post"] ?? null)]];
        // line 78
        echo "                        ";
        echo $context["forms"]->getdropdown("method", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "method", []), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 80
        ob_start();
        echo __("URI");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        ob_start();
        echo __("URL to the Remote DataSet for GET and POST.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        echo $context["forms"]->getinput("uri", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "uri", []), ($context["helpText"] ?? null), "", "required");
        echo "

                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <div class=\"help-block\">
                                    <strong>";
        // line 87
        echo __("Replacements");
        echo "</strong><br>
                                    ";
        // line 88
        echo __("Request date: {{DATE}}");
        echo "<br>
                                    ";
        // line 89
        echo __("Request time: {{TIME}}");
        echo "<br>
                                    ";
        // line 90
        echo __("Dependant fields: {{COL.NAME}} where NAME is a FieldName from the dependant DataSet");
        echo "<br>
                                </div>
                                <div class=\"help-block\">
                                    ";
        // line 93
        echo __("Data to add to this request. This should be URL encoded, e.g. paramA=1&amp;paramB=2.");
        // line 94
        echo "                                </div>
                                <textarea class=\"form-control\" name=\"postData\" id=\"postData\" rows=\"10\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataSet"] ?? null), "postData", []), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"auth\">
                        ";
        // line 101
        ob_start();
        echo __("Authentication");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                        ";
        ob_start();
        echo __("Select the authentication requirements for the remote data source. These will be added to the request.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        ob_start();
        echo __("None");
        $context["auth_none"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        ob_start();
        echo __("Basic");
        $context["auth_basic"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                        ";
        ob_start();
        echo __("Digest");
        $context["auth_digest"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                        ";
        ob_start();
        echo __("NTLM");
        $context["auth_ntlm"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        ";
        ob_start();
        echo __("Bearer");
        $context["auth_bearer"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "                        ";
        $context["options"] = [0 => ["typeid" => "none", "type" =>         // line 109
($context["auth_none"] ?? null)], 1 => ["typeid" => "basic", "type" =>         // line 110
($context["auth_basic"] ?? null)], 2 => ["typeid" => "digest", "type" =>         // line 111
($context["auth_digest"] ?? null)], 3 => ["typeid" => "ntlm", "type" =>         // line 112
($context["auth_ntlm"] ?? null)], 4 => ["typeid" => "bearer", "type" =>         // line 113
($context["auth_bearer"] ?? null)]];
        // line 115
        echo "                        ";
        echo $context["forms"]->getdropdown("authentication", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "authentication", []), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 117
        ob_start();
        echo __("Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                        ";
        ob_start();
        echo __("Enter the authentication Username");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        echo $context["forms"]->getinput("username", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "username", []), ($context["helpText"] ?? null), "auth-field-username", "");
        echo "

                        ";
        // line 121
        ob_start();
        echo __("Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                        ";
        ob_start();
        echo __("Corresponding Password");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "                        ";
        echo $context["forms"]->getinput("password", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "password", []), ($context["helpText"] ?? null), "auth-field-password", "");
        echo "

                        ";
        // line 125
        ob_start();
        echo __("Custom Headers");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                        ";
        ob_start();
        echo __("Comma separated string of custom HTTP headers in headerName:headerValue format");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        echo $context["forms"]->getinput("customHeaders", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "customHeaders", []), ($context["helpText"] ?? null));
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"data\">
                        ";
        // line 131
        ob_start();
        echo __("Source");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start();
        echo __("Select source type of the provided remote Dataset URL");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        ob_start();
        echo __("JSON");
        $context["json"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                        ";
        ob_start();
        echo __("CSV");
        $context["csv"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                        ";
        $context["options"] = [0 => ["sourceId" => 1, "source" =>         // line 136
($context["json"] ?? null)], 1 => ["sourceId" => 2, "source" =>         // line 137
($context["csv"] ?? null)]];
        // line 139
        echo "                        ";
        echo $context["forms"]->getdropdown("sourceId", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "sourceId", []), ($context["options"] ?? null), "sourceId", "source", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 141
        ob_start();
        echo __("Data root");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        echo "                        ";
        ob_start();
        echo __("Please enter the element in your remote data which we should use as the starting point when we match the remote Columns. This should be an array or an object. You can use the test button below to see the structure that is returned.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                        ";
        echo $context["forms"]->getinput("dataRoot", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "dataRoot", []), ($context["helpText"] ?? null), "json-source-field", "");
        echo "

                        ";
        // line 145
        ob_start();
        echo __("Ignore first row?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        echo "                        ";
        ob_start();
        echo __("For CSV source, should the first row be ignored?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        echo "                        ";
        echo $context["forms"]->getcheckbox("ignoreFirstRow", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "ignoreFirstRow", []), ($context["helpText"] ?? null), "csv-source-field");
        echo "

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <a class=\"btn btn-default\" id=\"dataSetRemoteTestButton\" href=\"#\">
                                    ";
        // line 152
        echo __("Test data URL");
        // line 153
        echo "                                </a>
                            </div>
                        </div>

                        ";
        // line 157
        ob_start();
        echo __("Aggregation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                        ";
        ob_start();
        echo __("Aggregate received data by the given method");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        ob_start();
        echo __("None");
        $context["summ_none"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                        ";
        ob_start();
        echo __("Summarize");
        $context["summ_sum"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        ob_start();
        echo __("Count");
        $context["summ_count"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        $context["options"] = [0 => ["typeid" => "none", "type" =>         // line 163
($context["summ_none"] ?? null)], 1 => ["typeid" => "sum", "type" =>         // line 164
($context["summ_sum"] ?? null)], 2 => ["typeid" => "count", "type" =>         // line 165
($context["summ_count"] ?? null)]];
        // line 167
        echo "                        ";
        echo $context["forms"]->getdropdown("summarize", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "summarize", []), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "json-source-field");
        echo "

                        <div class=\"form-group json-source-field\">
                            <label class=\"col-sm-2 control-label\" for=\"summarizeField\">";
        // line 170
        echo __("By Field");
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input class=\"form-control\" type=\"text\" name=\"summarizeField\" id=\"summarizeField\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataSet"] ?? null), "summarizeField", []), "html", null, true);
        echo "\"/>
                                <div class=\"help-block\">
                                    ";
        // line 174
        echo __("Using JSON syntax enter the path below the Data root by which the above aggregation should be applied.");
        echo "<br>
                                    ";
        // line 175
        echo __("Summarize: Values in this field will be summarized and stored in one column.");
        echo "<br>
                                    ";
        // line 176
        echo __("Count: All individual values in this field will be counted and stored in one Column for each value");
        echo "<br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"params\">
                        ";
        // line 183
        ob_start();
        echo __("Refresh");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        echo "                        ";
        ob_start();
        echo __("How often should this remote data be fetched and imported?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        echo "
                        ";
        // line 186
        ob_start();
        echo __("Constantly");
        $context["refresh_everytime"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "                        ";
        ob_start();
        echo __("Hourly");
        $context["refresh_hour"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        echo "                        ";
        ob_start();
        echo __("Daily");
        $context["refresh_day"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        echo "                        ";
        ob_start();
        echo __("Weekly");
        $context["refresh_week"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "                        ";
        ob_start();
        echo __("Every two Weeks");
        $context["refresh_two_week"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        echo "                        ";
        ob_start();
        echo __("Monthly");
        $context["refresh_month"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        echo "                        ";
        ob_start();
        echo __("Quaterly");
        $context["refresh_quater"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 193
        echo "                        ";
        ob_start();
        echo __("Yearly");
        $context["refresh_year"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        echo "                        ";
        $context["options"] = [0 => ["typeid" => "0", "type" =>         // line 195
($context["refresh_everytime"] ?? null)], 1 => ["typeid" => "3600", "type" =>         // line 196
($context["refresh_hour"] ?? null)], 2 => ["typeid" => "86400", "type" =>         // line 197
($context["refresh_day"] ?? null)], 3 => ["typeid" => "604800", "type" =>         // line 198
($context["refresh_week"] ?? null)], 4 => ["typeid" => "1209600", "type" =>         // line 199
($context["refresh_two_week"] ?? null)], 5 => ["typeid" => "2419200", "type" =>         // line 200
($context["refresh_month"] ?? null)], 6 => ["typeid" => "7257600", "type" =>         // line 201
($context["refresh_quater"] ?? null)], 7 => ["typeid" => "29030400", "type" =>         // line 202
($context["refresh_year"] ?? null)]];
        // line 204
        echo "                        ";
        echo $context["forms"]->getdropdown("refreshRate", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "refreshRate", []), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 206
        ob_start();
        echo __("Truncate DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 207
        echo "                        ";
        ob_start();
        echo __("Select when you would like the Data to be truncated out of this DataSet. The criteria is assessed when synchronisation occurs and is truncated before adding new data.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 208
        echo "
                        ";
        // line 209
        ob_start();
        echo __("Never");
        $context["truncate_never"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        echo "                        ";
        ob_start();
        echo __("Always");
        $context["truncate_everytime"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        echo "                        ";
        ob_start();
        echo __("Hourly");
        $context["truncate_hour"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 212
        echo "                        ";
        ob_start();
        echo __("Daily");
        $context["truncate_day"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 213
        echo "                        ";
        ob_start();
        echo __("Weekly");
        $context["truncate_week"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        echo "                        ";
        ob_start();
        echo __("Every two Weeks");
        $context["truncate_two_week"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        echo "                        ";
        ob_start();
        echo __("Monthly");
        $context["truncate_month"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 216
        echo "                        ";
        ob_start();
        echo __("Quaterly");
        $context["truncate_quater"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        echo "                        ";
        ob_start();
        echo __("Yearly");
        $context["truncate_year"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 218
        echo "                        ";
        ob_start();
        echo __("Every second Year");
        $context["truncate_two_year"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 219
        echo "                        ";
        $context["options"] = [0 => ["typeid" => "0", "type" =>         // line 220
($context["truncate_never"] ?? null)], 1 => ["typeid" => "1", "type" =>         // line 221
($context["truncate_everytime"] ?? null)], 2 => ["typeid" => "3600", "type" =>         // line 222
($context["truncate_hour"] ?? null)], 3 => ["typeid" => "86400", "type" =>         // line 223
($context["truncate_day"] ?? null)], 4 => ["typeid" => "604800", "type" =>         // line 224
($context["truncate_week"] ?? null)], 5 => ["typeid" => "1209600", "type" =>         // line 225
($context["truncate_two_week"] ?? null)], 6 => ["typeid" => "2419200", "type" =>         // line 226
($context["truncate_month"] ?? null)], 7 => ["typeid" => "7257600", "type" =>         // line 227
($context["truncate_quater"] ?? null)], 8 => ["typeid" => "29030400", "type" =>         // line 228
($context["truncate_year"] ?? null)], 9 => ["typeid" => "58060800", "type" =>         // line 229
($context["truncate_two_year"] ?? null)]];
        // line 231
        echo "                        ";
        echo $context["forms"]->getdropdown("clearRate", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "clearRate", []), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null));
        echo "

                        ";
        // line 233
        ob_start();
        echo __("Depends on DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 234
        echo "                        ";
        $context["dataSets"] = twig_array_merge([0 => ["dataSetId" => null, "dataSet" => ""]], ($context["dataSets"] ?? null));
        // line 235
        echo "                        ";
        ob_start();
        echo __("The DataSet you select here will be processed in advance and have its values available for subsitution in the data to add to this request on the Remote tab.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        echo "                        ";
        echo $context["forms"]->getdropdown("runsAfter", "single", ($context["title"] ?? null), $this->getAttribute(($context["dataSet"] ?? null), "runsAfter", []), ($context["dataSets"] ?? null), "dataSetId", "dataSet", ($context["helpText"] ?? null));
        echo "
                    </div>
                </div>
            </form>
            <div id=\"datasetRemoteTestRequestResult\" class=\"col-sm-12\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dataset-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 236,  645 => 235,  642 => 234,  638 => 233,  632 => 231,  630 => 229,  629 => 228,  628 => 227,  627 => 226,  626 => 225,  625 => 224,  624 => 223,  623 => 222,  622 => 221,  621 => 220,  619 => 219,  614 => 218,  609 => 217,  604 => 216,  599 => 215,  594 => 214,  589 => 213,  584 => 212,  579 => 211,  574 => 210,  570 => 209,  567 => 208,  562 => 207,  558 => 206,  552 => 204,  550 => 202,  549 => 201,  548 => 200,  547 => 199,  546 => 198,  545 => 197,  544 => 196,  543 => 195,  541 => 194,  536 => 193,  531 => 192,  526 => 191,  521 => 190,  516 => 189,  511 => 188,  506 => 187,  502 => 186,  499 => 185,  494 => 184,  490 => 183,  480 => 176,  476 => 175,  472 => 174,  467 => 172,  462 => 170,  455 => 167,  453 => 165,  452 => 164,  451 => 163,  449 => 162,  444 => 161,  439 => 160,  434 => 159,  429 => 158,  425 => 157,  419 => 153,  417 => 152,  408 => 147,  403 => 146,  399 => 145,  393 => 143,  388 => 142,  384 => 141,  378 => 139,  376 => 137,  375 => 136,  373 => 135,  368 => 134,  363 => 133,  358 => 132,  354 => 131,  346 => 127,  341 => 126,  337 => 125,  331 => 123,  326 => 122,  322 => 121,  316 => 119,  311 => 118,  307 => 117,  301 => 115,  299 => 113,  298 => 112,  297 => 111,  296 => 110,  295 => 109,  293 => 108,  288 => 107,  283 => 106,  278 => 105,  273 => 104,  268 => 103,  263 => 102,  259 => 101,  250 => 95,  247 => 94,  245 => 93,  239 => 90,  235 => 89,  231 => 88,  227 => 87,  218 => 82,  213 => 81,  209 => 80,  203 => 78,  201 => 76,  200 => 75,  198 => 74,  193 => 73,  188 => 72,  183 => 71,  179 => 70,  172 => 67,  167 => 66,  163 => 65,  157 => 63,  152 => 62,  148 => 61,  142 => 59,  137 => 58,  133 => 57,  127 => 55,  122 => 54,  118 => 53,  112 => 50,  108 => 49,  103 => 47,  99 => 46,  95 => 45,  91 => 44,  87 => 43,  82 => 40,  79 => 39,  73 => 37,  67 => 34,  63 => 33,  56 => 32,  53 => 31,  48 => 28,  45 => 27,  40 => 24,  38 => 25,  32 => 24,);
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
 * contributions by LukyLuke aka Lukas Zurschmiede - https://github.com/LukyLuke
 *
 * (dataset-form-edit.twig) This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */
#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit DataSet\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#dataSetEditForm\").submit()    
{% endblock %}

{% block callBack %}dataSetFormOpen{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#gateway\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Remote\" %}</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#auth\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Authentication\" %}</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#data\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Data\" %}</span></a></li>
                <li class=\"tabForRemoteDataSet\"><a href=\"#params\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
            </ul>
            <form id=\"dataSetEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"dataSet.edit\", {id: dataSet.dataSetId}) }}\">
                <input type=\"hidden\" name=\"testDataSetId\" value=\"{{ dataSet.dataSetId }}\"/>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"A name for this DataSet\" %}{% endset %}
                        {{ forms.input(\"dataSet\", title, dataSet.dataSet, helpText, \"\", \"required\") }}

                        {% set title %}{% trans \"Description\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional description\" %}{% endset %}
                        {{ forms.input(\"description\", title, dataSet.description, helpText) }}

                        {% set title %}{% trans \"Code\" %}{% endset %}
                        {% set helpText %}{% trans \"A code which can be used to lookup this DataSet - usually for an API application\" %}{% endset %}
                        {{ forms.input(\"code\", title, dataSet.code, helpText) }}

                        {% set title %}{% trans \"Remote?\" %}{% endset %}
                        {% set helpText %}{% trans \"Is this DataSet connected to a remote data source?\" %}{% endset %}
                        {{ forms.checkbox(\"isRemote\", title, dataSet.isRemote, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"gateway\">
                        {% set title %}{% trans \"Method\" %}{% endset %}
                        {% set helpText %}{% trans \"What type of request needs to be made to get the remote data?\" %}{% endset %}
                        {% set request_get %}{% trans \"GET\" %}{% endset %}
                        {% set request_post %}{% trans \"POST\" %}{% endset %}
                        {% set options = [
                            { typeid: \"GET\", type: request_get },
                            { typeid: \"POST\", type: request_post }
                        ] %}
                        {{ forms.dropdown(\"method\", \"single\", title, dataSet.method, options, \"typeid\", \"type\", helpText) }}

                        {% set title %}{% trans \"URI\" %}{% endset %}
                        {% set helpText %}{% trans \"URL to the Remote DataSet for GET and POST.\" %}{% endset %}
                        {{ forms.input(\"uri\", title, dataSet.uri, helpText, \"\", \"required\") }}

                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <div class=\"help-block\">
                                    <strong>{% trans \"Replacements\" %}</strong><br>
                                    {% trans \"Request date: {{DATE}}\" %}<br>
                                    {% trans \"Request time: {{TIME}}\" %}<br>
                                    {% trans \"Dependant fields: {{COL.NAME}} where NAME is a FieldName from the dependant DataSet\" %}<br>
                                </div>
                                <div class=\"help-block\">
                                    {% trans \"Data to add to this request. This should be URL encoded, e.g. paramA=1&amp;paramB=2.\" %}
                                </div>
                                <textarea class=\"form-control\" name=\"postData\" id=\"postData\" rows=\"10\">{{ dataSet.postData }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"auth\">
                        {% set title %}{% trans \"Authentication\" %}{% endset %}
                        {% set helpText %}{% trans \"Select the authentication requirements for the remote data source. These will be added to the request.\" %}{% endset %}
                        {% set auth_none %}{% trans \"None\" %}{% endset %}
                        {% set auth_basic %}{% trans \"Basic\" %}{% endset %}
                        {% set auth_digest %}{% trans \"Digest\" %}{% endset %}
                        {% set auth_ntlm %}{% trans \"NTLM\" %}{% endset %}
                        {% set auth_bearer %}{% trans \"Bearer\" %}{% endset %}
                        {% set options = [
                            { typeid: \"none\", type: auth_none },
                            { typeid: \"basic\", type: auth_basic },
                            { typeid: \"digest\", type: auth_digest },
                            { typeid: \"ntlm\", type: auth_ntlm },
                            { typeid: \"bearer\", type: auth_bearer }
                        ] %}
                        {{ forms.dropdown(\"authentication\", \"single\", title, dataSet.authentication, options, \"typeid\", \"type\", helpText) }}

                        {% set title %}{% trans \"Username\" %}{% endset %}
                        {% set helpText %}{% trans \"Enter the authentication Username\" %}{% endset %}
                        {{ forms.input(\"username\", title, dataSet.username, helpText, \"auth-field-username\", \"\") }}

                        {% set title %}{% trans \"Password\" %}{% endset %}
                        {% set helpText %}{% trans \"Corresponding Password\" %}{% endset %}
                        {{ forms.input(\"password\", title, dataSet.password, helpText, \"auth-field-password\", \"\") }}

                        {% set title %}{% trans \"Custom Headers\" %}{% endset %}
                        {% set helpText %}{% trans \"Comma separated string of custom HTTP headers in headerName:headerValue format\" %}{% endset %}
                        {{ forms.input(\"customHeaders\", title, dataSet.customHeaders, helpText) }}
                    </div>

                    <div class=\"tab-pane\" id=\"data\">
                        {% set title %}{% trans \"Source\" %}{% endset %}
                        {% set helpText %}{% trans \"Select source type of the provided remote Dataset URL\" %}{% endset %}
                        {% set json %}{% trans \"JSON\" %}{% endset %}
                        {% set csv %}{% trans \"CSV\" %}{% endset %}
                        {% set options = [
                            { sourceId: 1, source: json },
                            { sourceId: 2, source: csv },
                        ] %}
                        {{ forms.dropdown(\"sourceId\", \"single\", title, dataSet.sourceId, options, \"sourceId\", \"source\", helpText) }}

                        {% set title %}{% trans \"Data root\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the element in your remote data which we should use as the starting point when we match the remote Columns. This should be an array or an object. You can use the test button below to see the structure that is returned.\" %}{% endset %}
                        {{ forms.input(\"dataRoot\", title, dataSet.dataRoot, helpText, \"json-source-field\", \"\") }}

                        {% set title %}{% trans \"Ignore first row?\" %}{% endset %}
                        {% set helpText %}{% trans \"For CSV source, should the first row be ignored?\" %}{% endset %}
                        {{ forms.checkbox(\"ignoreFirstRow\", title, dataSet.ignoreFirstRow, helpText, 'csv-source-field') }}

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <a class=\"btn btn-default\" id=\"dataSetRemoteTestButton\" href=\"#\">
                                    {% trans \"Test data URL\" %}
                                </a>
                            </div>
                        </div>

                        {% set title %}{% trans \"Aggregation\" %}{% endset %}
                        {% set helpText %}{% trans \"Aggregate received data by the given method\" %}{% endset %}
                        {% set summ_none %}{% trans \"None\" %}{% endset %}
                        {% set summ_sum %}{% trans \"Summarize\" %}{% endset %}
                        {% set summ_count %}{% trans \"Count\" %}{% endset %}
                        {% set options = [
                            { typeid: \"none\", type: summ_none },
                            { typeid: \"sum\", type: summ_sum },
                            { typeid: \"count\", type: summ_count }
                        ] %}
                        {{ forms.dropdown(\"summarize\", \"single\", title, dataSet.summarize, options, \"typeid\", \"type\", helpText, \"json-source-field\") }}

                        <div class=\"form-group json-source-field\">
                            <label class=\"col-sm-2 control-label\" for=\"summarizeField\">{% trans \"By Field\" %}</label>
                            <div class=\"col-sm-10\">
                                <input class=\"form-control\" type=\"text\" name=\"summarizeField\" id=\"summarizeField\" value=\"{{ dataSet.summarizeField }}\"/>
                                <div class=\"help-block\">
                                    {% trans \"Using JSON syntax enter the path below the Data root by which the above aggregation should be applied.\" %}<br>
                                    {% trans \"Summarize: Values in this field will be summarized and stored in one column.\" %}<br>
                                    {% trans \"Count: All individual values in this field will be counted and stored in one Column for each value\" %}<br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"params\">
                        {% set title %}{% trans \"Refresh\" %}{% endset %}
                        {% set helpText %}{% trans \"How often should this remote data be fetched and imported?\" %}{% endset %}

                        {% set refresh_everytime %}{% trans \"Constantly\" %}{% endset %}
                        {% set refresh_hour %}{% trans \"Hourly\" %}{% endset %}
                        {% set refresh_day %}{% trans \"Daily\" %}{% endset %}
                        {% set refresh_week %}{% trans \"Weekly\" %}{% endset %}
                        {% set refresh_two_week %}{% trans \"Every two Weeks\" %}{% endset %}
                        {% set refresh_month %}{% trans \"Monthly\" %}{% endset %}
                        {% set refresh_quater %}{% trans \"Quaterly\" %}{% endset %}
                        {% set refresh_year %}{% trans \"Yearly\" %}{% endset %}
                        {% set options = [
                            { typeid: \"0\", type: refresh_everytime },
                            { typeid: \"3600\", type: refresh_hour },
                            { typeid: \"86400\", type: refresh_day },
                            { typeid: \"604800\", type: refresh_week },
                            { typeid: \"1209600\", type: refresh_two_week },
                            { typeid: \"2419200\", type: refresh_month },
                            { typeid: \"7257600\", type: refresh_quater },
                            { typeid: \"29030400\", type: refresh_year }
                        ] %}
                        {{ forms.dropdown(\"refreshRate\", \"single\", title, dataSet.refreshRate, options, \"typeid\", \"type\", helpText) }}

                        {% set title %}{% trans \"Truncate DataSet\" %}{% endset %}
                        {% set helpText %}{% trans \"Select when you would like the Data to be truncated out of this DataSet. The criteria is assessed when synchronisation occurs and is truncated before adding new data.\" %}{% endset %}

                        {% set truncate_never %}{% trans \"Never\" %}{% endset %}
                        {% set truncate_everytime %}{% trans \"Always\" %}{% endset %}
                        {% set truncate_hour %}{% trans \"Hourly\" %}{% endset %}
                        {% set truncate_day %}{% trans \"Daily\" %}{% endset %}
                        {% set truncate_week %}{% trans \"Weekly\" %}{% endset %}
                        {% set truncate_two_week %}{% trans \"Every two Weeks\" %}{% endset %}
                        {% set truncate_month %}{% trans \"Monthly\" %}{% endset %}
                        {% set truncate_quater %}{% trans \"Quaterly\" %}{% endset %}
                        {% set truncate_year %}{% trans \"Yearly\" %}{% endset %}
                        {% set truncate_two_year %}{% trans \"Every second Year\" %}{% endset %}
                        {% set options = [
                            { typeid: \"0\", type: truncate_never },
                            { typeid: \"1\", type: truncate_everytime },
                            { typeid: \"3600\", type: truncate_hour },
                            { typeid: \"86400\", type: truncate_day },
                            { typeid: \"604800\", type: truncate_week },
                            { typeid: \"1209600\", type: truncate_two_week },
                            { typeid: \"2419200\", type: truncate_month },
                            { typeid: \"7257600\", type: truncate_quater },
                            { typeid: \"29030400\", type: truncate_year },
                            { typeid: \"58060800\", type: truncate_two_year }
                        ] %}
                        {{ forms.dropdown(\"clearRate\", \"single\", title, dataSet.clearRate, options, \"typeid\", \"type\", helpText) }}

                        {% set title %}{% trans \"Depends on DataSet\" %}{% endset %}
                        {% set dataSets = [{dataSetId: null, dataSet: \"\"}]|merge(dataSets) %}
                        {% set helpText %}{% trans \"The DataSet you select here will be processed in advance and have its values available for subsitution in the data to add to this request on the Remote tab.\" %}{% endset %}
                        {{ forms.dropdown(\"runsAfter\", \"single\", title, dataSet.runsAfter, dataSets, \"dataSetId\", \"dataSet\", helpText) }}
                    </div>
                </div>
            </form>
            <div id=\"datasetRemoteTestRequestResult\" class=\"col-sm-12\"></div>
        </div>
    </div>
{% endblock %}", "dataset-form-edit.twig", "E:\\app\\laragon\\www\\xibo\\views\\dataset-form-edit.twig");
    }
}
