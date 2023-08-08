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

/* authed.twig */
class __TwigTemplate_35b5b05dbc28324a36f2f53257eff5f69964d916b67970405269f8be4557f563 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageFooter' => [$this, 'block_pageFooter'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.twig", "authed.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        $context["horizontalNav"] = ($this->getAttribute(($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method")], "method") == "horizontal");
        // line 27
        echo "    ";
        $context["hideNavigation"] = $this->getAttribute(($context["currentUser"] ?? null), "getOptionValue", [0 => "hideNavigation", 1 => "0"], "method");
        // line 28
        echo "    <div ";
        if (((($context["hideNavigation"] ?? null) == "0") &&  !($context["horizontalNav"] ?? null))) {
            echo "id=\"page-wrapper\"";
        }
        echo " class=\"active\">

        ";
        // line 30
        if ((($context["hideNavigation"] ?? null) == "0")) {
            // line 31
            echo "            ";
            if (($context["horizontalNav"] ?? null)) {
                // line 32
                echo "                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">
                                <img class=\"xibo-logo\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method"), "html", null, true);
                echo "\">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                            ";
                // line 49
                $this->loadTemplate("authed-topbar.twig", "authed.twig", 49)->display($context);
                // line 50
                echo "
                            <ul class=\"nav navbar-nav navbar-right\">
                                ";
                // line 52
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 52);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
                }
                // line 53
                echo "                                ";
                if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/drawer"], "method")) {
                    // line 54
                    echo "                                    ";
                    $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 54)->display($context);
                    // line 55
                    echo "                                ";
                }
                // line 56
                echo "                                ";
                $this->loadTemplate("authed-user-menu.twig", "authed.twig", 56)->display($context);
                // line 57
                echo "                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            ";
            } else {
                // line 62
                echo "                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    ";
                // line 63
                $this->loadTemplate("authed-sidebar.twig", "authed.twig", 63)->display($context);
                // line 64
                echo "                </div>
            ";
            }
            // line 66
            echo "        ";
        }
        // line 67
        echo "
        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                ";
        // line 70
        if ( !($context["horizontalNav"] ?? null)) {
            // line 71
            echo "                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method"), "html", null, true);
            echo "\"></div>
                        </div>
                        <div class=\"user pull-right\">
                            <button type=\"button\"  class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            ";
            // line 83
            $this->loadTemplate("authed-user-menu.twig", "authed.twig", 83)->display($context);
            // line 84
            echo "                        </div>
                        ";
            // line 85
            if ($this->getAttribute(($context["currentUser"] ?? null), "routeViewable", [0 => "/drawer"], "method")) {
                // line 86
                echo "                        <div class=\"user pull-right\">
                            ";
                // line 87
                $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 87)->display($context);
                // line 88
                echo "                        </div>
                        ";
            }
            // line 90
            echo "                        ";
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 90);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
            // line 91
            echo "                    </div>
                </div>
                ";
        }
        // line 94
        echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 96
        $this->displayBlock('actionMenu', $context, $blocks);
        // line 97
        echo "                        ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 98
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 102
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 103
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 96
    public function block_actionMenu($context, array $blocks = [])
    {
    }

    // line 97
    public function block_pageContent($context, array $blocks = [])
    {
    }

    // line 102
    public function block_pageFooter($context, array $blocks = [])
    {
    }

    // line 110
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        // line 111
        echo "
    <script type=\"text/javascript\">
        ";
        // line 113
        $context["userPreferences"] = $this->getAttribute(($context["currentUser"] ?? null), "getUserOptions", [], "method");
        // line 114
        echo "        var userPreferences = ";
        echo twig_jsonencode_filter(($context["userPreferences"] ?? null));
        echo ";
        var userPreferencesUrl = \"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\";
    </script>

    ";
        // line 333
        echo "
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                    <li class=\"divider\"></li>
                    {{else}}
                        {{#if external}}
                        <li class=\"{{ id }}\"><a tabindex=\"-1\" target=\"{{ linkType }}\" href=\"{{ url }}\">{{ text }}</a></li>
                        {{/if}}

                        {{#unless external}}
                            <li {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"{{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a>
                            </li>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group\">
            <button class=\"btn select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
                {{ withSelected }}
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                <li class=\"XiboMultiSelectFormButton\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a></li>
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-file-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ upload.validExt }}\$/i\">
            {{#if playlistId}}
                <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
            {{/if}}
            {{#if widgetId}}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
            {{/if}}
            {{#if oldMediaId}}
                <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            {{/if}}
            {{#if displayOrder}}
                <input type=\"hidden\" name=\"displayOrder\" value=\"{{ displayOrder }}\" />
            {{/if}}
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        <p>{{ upload.maxSizeMessage }}</p>
                        {{#if upload.validExtensionsMessage}}
                            <p><strong>{{ upload.validExtensionsMessage }}</strong></p>
                        {{/if}}                            
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        {{#if oldMediaId }}
                        <input type=\"file\" name=\"files[]\">
                        {{else}}
                        <input type=\"file\" name=\"files[]\" multiple>
                        {{/if}}
                    </span>
                    <button type=\"submit\" class=\"btn btn-primary start\">
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        <span>{{ trans.startUpload }}</span>
                    </button>
                    <button type=\"reset\" class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        <span>{{ trans.cancelUpload }}</span>
                    </button>
                    <!-- The loading indicator is shown during file processing -->
                    <span class=\"fileupload-loading\"></span>
                </div>
                <!-- The global progress information -->
                <div class=\"col-md-4 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class=\"progress-extended\">&nbsp;</div>
                    <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                </div>
            </div>
            {{#if oldMediaId}}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <label for=\"updateInLayouts\">
                        <input type=\"checkbox\" id=\"updateInLayouts\" name=\"updateInLayouts\" {{#if updateInAllChecked}}checked{{/if}}>
                        {{ trans.updateInLayouts.title }}
                    </label>
                    <span class=\"help-block\">{{ trans.updateInLayouts.helpText }}</span>

                    <label for=\"deleteOldRevisions\">
                        <input type=\"checkbox\" id=\"deleteOldRevisions\" name=\"deleteOldRevisions\" {{#if deleteOldRevisionsChecked}}checked{{/if}}>
                        {{ trans.deleteOldRevisions.title }}
                    </label>
                    <span class=\"help-block\">{{ trans.deleteOldRevisions.helpText }}</span>
                </div>
            </div>
            {{/if}}
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template for simple upload -->
    <script id=\"template-upload-simple\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-upload\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td class=\"title\" title=\"Name\">
                <label class=\"control-label\" title=\"Optional media name\" for=\"name\">Name</label>
                <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td class=\"title\" title=\"Tags\">
                <label class=\"control-label\" title=\"A comma separated list of tags to assign to this Media\" for=\"tags\">Tags</label>
                <label for=\"tags[]\"><input name=\"tags[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id=\"template-download\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-download fade\">
           <td>
                <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                    {%=file.name%}
                </p>
                {% if (file.error) { %}
                    <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                {% } %}
            </td>
            <td>
                <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
            </td>
        </tr>
    {% } %}
    </script>
    ";
        echo "

    <script type=\"text/x-handlebars-template\" id=\"layout-background-image-upload-template\">
        <form method=\"post\" action=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" data-max-file-size=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo "\" data-accept-file-types=\"/(\\.|\\/)";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "validImageExt", []), "html", null, true);
        echo "\$/i\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>";
        // line 341
        echo __("Browse/Add image");
        echo "</span>
                        <input type=\"file\" name=\"files[]\">
                    </span>
                    <span class=\"btn btn-danger fileinput-close-button\">
                        <i class=\"glyphicon glyphicon-remove glyphicon glyphicon-white\"></i>
                    </span>
                </div>

                <div class=\"upload-table-container\">
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>

                <div>
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                        <div class=\"progress-end\" style=\"display:none;\">";
        // line 366
        echo __("Processing...");
        echo "</div>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"attachment-upload-template\">
        <form method=\"post\" action=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("notification.addattachment"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" data-max-file-size=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["libraryUpload"] ?? null), "maxSize", []), "html", null, true);
        echo "\" data-accept-file-types=\"/(\\.|\\/)jpg|jpeg|png|bmp|gif|zip|pdf\$/i\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>";
        // line 379
        echo __("Browse/Add attachment");
        echo "</span>
                        <input type=\"file\" name=\"files[]\">
                    </span>
                    <span class=\"btn btn-danger hidden fileinput-close-button\">
                        <i class=\"glyphicon glyphicon-remove glyphicon glyphicon-white\"></i>
                    </span>
                </div>

                <div>
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>

                <div>
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                        <div class=\"progress-end\" style=\"display:none;\">";
        // line 404
        echo __("Processing...");
        echo "</div>
                    </div>
                </div>
            </div>
        </form>
    </script>



";
    }

    public function getTemplateName()
    {
        return "authed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 404,  533 => 379,  523 => 374,  512 => 366,  484 => 341,  472 => 336,  251 => 333,  245 => 115,  240 => 114,  238 => 113,  234 => 111,  231 => 110,  226 => 102,  221 => 97,  216 => 96,  207 => 103,  205 => 102,  199 => 98,  196 => 97,  194 => 96,  190 => 94,  185 => 91,  174 => 90,  170 => 88,  168 => 87,  165 => 86,  163 => 85,  160 => 84,  158 => 83,  146 => 74,  141 => 71,  139 => 70,  134 => 67,  131 => 66,  127 => 64,  125 => 63,  122 => 62,  115 => 57,  112 => 56,  109 => 55,  106 => 54,  103 => 53,  93 => 52,  89 => 50,  87 => 49,  78 => 43,  65 => 32,  62 => 31,  60 => 30,  52 => 28,  49 => 27,  46 => 26,  43 => 25,  33 => 23,);
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
/**
 * Copyright (C) 2019 Xibo Signage Ltd
 *
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo.
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
{% extends \"base.twig\" %}

{% block content %}
    {% set horizontalNav = currentUser.getOptionValue(\"navigationMenuPosition\", theme.getSetting(\"NAVIGATION_MENU_POSITION\", \"vertical\")) == \"horizontal\" %}
    {% set hideNavigation = currentUser.getOptionValue(\"hideNavigation\", \"0\") %}
    <div {% if hideNavigation == \"0\" and not horizontalNav %}id=\"page-wrapper\"{% endif %} class=\"active\">

        {% if hideNavigation == \"0\" %}
            {% if horizontalNav %}
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">
                                <img class=\"xibo-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                            {% include \"authed-topbar.twig\" %}

                            <ul class=\"nav navbar-nav navbar-right\">
                                {% include \"authed-theme-topbar.twig\" ignore missing %}
                                {% if currentUser.routeViewable(\"/drawer\") %}
                                    {% include \"authed-notification-drawer.twig\" %}
                                {% endif %}
                                {% include \"authed-user-menu.twig\" %}
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            {% else %}
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    {% include \"authed-sidebar.twig\" %}
                </div>
            {% endif %}
        {% endif %}

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                {% if not horizontalNav %}
                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></div>
                        </div>
                        <div class=\"user pull-right\">
                            <button type=\"button\"  class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            {% include \"authed-user-menu.twig\" %}
                        </div>
                        {% if currentUser.routeViewable(\"/drawer\") %}
                        <div class=\"user pull-right\">
                            {% include \"authed-notification-drawer.twig\" %}
                        </div>
                        {% endif %}
                        {% include \"authed-theme-topbar.twig\" ignore missing %}
                    </div>
                </div>
                {% endif %}
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block actionMenu %}{% endblock %}
                        {% block pageContent %}{% endblock %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block pageFooter %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScriptTemplates %}

    <script type=\"text/javascript\">
        {% set userPreferences = currentUser.getUserOptions() %}
        var userPreferences = {{ userPreferences|json_encode|raw }};
        var userPreferencesUrl = \"{{ urlFor(\"user.pref\") }}\";
    </script>

    {% raw %}
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                    <li class=\"divider\"></li>
                    {{else}}
                        {{#if external}}
                        <li class=\"{{ id }}\"><a tabindex=\"-1\" target=\"{{ linkType }}\" href=\"{{ url }}\">{{ text }}</a></li>
                        {{/if}}

                        {{#unless external}}
                            <li {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"{{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a>
                            </li>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group\">
            <button class=\"btn select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
                {{ withSelected }}
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                <li class=\"XiboMultiSelectFormButton\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a></li>
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-file-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ upload.validExt }}\$/i\">
            {{#if playlistId}}
                <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
            {{/if}}
            {{#if widgetId}}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
            {{/if}}
            {{#if oldMediaId}}
                <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            {{/if}}
            {{#if displayOrder}}
                <input type=\"hidden\" name=\"displayOrder\" value=\"{{ displayOrder }}\" />
            {{/if}}
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        <p>{{ upload.maxSizeMessage }}</p>
                        {{#if upload.validExtensionsMessage}}
                            <p><strong>{{ upload.validExtensionsMessage }}</strong></p>
                        {{/if}}                            
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        {{#if oldMediaId }}
                        <input type=\"file\" name=\"files[]\">
                        {{else}}
                        <input type=\"file\" name=\"files[]\" multiple>
                        {{/if}}
                    </span>
                    <button type=\"submit\" class=\"btn btn-primary start\">
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        <span>{{ trans.startUpload }}</span>
                    </button>
                    <button type=\"reset\" class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        <span>{{ trans.cancelUpload }}</span>
                    </button>
                    <!-- The loading indicator is shown during file processing -->
                    <span class=\"fileupload-loading\"></span>
                </div>
                <!-- The global progress information -->
                <div class=\"col-md-4 fileupload-progress fade\">
                    <!-- The global progress bar -->
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class=\"progress-extended\">&nbsp;</div>
                    <!-- Processing info container -->
                    <div class=\"progress-end\" style=\"display:none;\">{{ trans.processing }}</div>
                </div>
            </div>
            {{#if oldMediaId}}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <label for=\"updateInLayouts\">
                        <input type=\"checkbox\" id=\"updateInLayouts\" name=\"updateInLayouts\" {{#if updateInAllChecked}}checked{{/if}}>
                        {{ trans.updateInLayouts.title }}
                    </label>
                    <span class=\"help-block\">{{ trans.updateInLayouts.helpText }}</span>

                    <label for=\"deleteOldRevisions\">
                        <input type=\"checkbox\" id=\"deleteOldRevisions\" name=\"deleteOldRevisions\" {{#if deleteOldRevisionsChecked}}checked{{/if}}>
                        {{ trans.deleteOldRevisions.title }}
                    </label>
                    <span class=\"help-block\">{{ trans.deleteOldRevisions.helpText }}</span>
                </div>
            </div>
            {{/if}}
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template for simple upload -->
    <script id=\"template-upload-simple\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-upload\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td class=\"title\" title=\"Name\">
                <label class=\"control-label\" title=\"Optional media name\" for=\"name\">Name</label>
                <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td class=\"title\" title=\"Tags\">
                <label class=\"control-label\" title=\"A comma separated list of tags to assign to this Media\" for=\"tags\">Tags</label>
                <label for=\"tags[]\"><input name=\"tags[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
                        <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class=\"btn btn-warning cancel\">
                        <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id=\"template-download\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-download fade\">
           <td>
                <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                    {%=file.name%}
                </p>
                {% if (file.error) { %}
                    <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                {% } %}
            </td>
            <td>
                <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
            </td>
        </tr>
    {% } %}
    </script>
    {% endraw %}

    <script type=\"text/x-handlebars-template\" id=\"layout-background-image-upload-template\">
        <form method=\"post\" action=\"{{ urlFor(\"library.add\") }}\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ libraryUpload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ libraryUpload.validImageExt }}\$/i\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{% trans \"Browse/Add image\" %}</span>
                        <input type=\"file\" name=\"files[]\">
                    </span>
                    <span class=\"btn btn-danger fileinput-close-button\">
                        <i class=\"glyphicon glyphicon-remove glyphicon glyphicon-white\"></i>
                    </span>
                </div>

                <div class=\"upload-table-container\">
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>

                <div>
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                        <div class=\"progress-end\" style=\"display:none;\">{% trans \"Processing...\" %}</div>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"attachment-upload-template\">
        <form method=\"post\" action=\"{{ urlFor(\"notification.addattachment\") }}\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ libraryUpload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)jpg|jpeg|png|bmp|gif|zip|pdf\$/i\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{% trans \"Browse/Add attachment\" %}</span>
                        <input type=\"file\" name=\"files[]\">
                    </span>
                    <span class=\"btn btn-danger hidden fileinput-close-button\">
                        <i class=\"glyphicon glyphicon-remove glyphicon glyphicon-white\"></i>
                    </span>
                </div>

                <div>
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>

                <div>
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                        <!-- Processing info container -->
                        <div class=\"progress-end\" style=\"display:none;\">{% trans \"Processing...\" %}</div>
                    </div>
                </div>
            </div>
        </form>
    </script>



{% endblock %}", "authed.twig", "E:\\app\\laragon\\www\\xibo\\views\\authed.twig");
    }
}
