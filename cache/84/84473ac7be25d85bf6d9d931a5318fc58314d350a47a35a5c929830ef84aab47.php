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

/* base.twig */
class __TwigTemplate_c1ed55be33547e650eae440ea7719d0b040fdaceff6dd2c6056626c8f0ca391c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'headContent' => [$this, 'block_headContent'],
            'content' => [$this, 'block_content'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsShortLocale", []), "html", null, true);
        echo "\">
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
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        ";
        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/style.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 17
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/dashboard.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/timeline.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/xibo.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/calendar.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/override.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "uri", [0 => "css/print.css"], "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        ";
        // line 26
        $this->displayBlock('headContent', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "        <script type=\"text/javascript\">
            var calendar_type = \"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "CALENDAR_TYPE", []), "html", null, true);
        echo "\";
            var jsLocale = \"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsLocale", []), "html", null, true);
        echo "\";
            var jsShortLocale = \"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsShortLocale", []), "html", null, true);
        echo "\";
        </script>

        ";
        // line 37
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 40
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/systemTools.bundle.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 43
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/tmpl.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-load-image/load-image.all.min.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.iframe-transport.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-process.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-resize.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-validate.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-ui.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-image.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-video.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/jquery-file-upload/js/jquery.fileupload-audio.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 56
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/ckeditor/ckeditor.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/vendor/bootstrap-fix/bootstrap-ckeditor-fix.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/core/xibo-cms.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/core/xibo-forms.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/core/xibo-preview-timeline.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/core/xibo-calendar.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
        echo "dist/core/xibo-datasets.js?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>


        ";
        // line 68
        echo "        ";
        if (($this->getAttribute(($context["settings"] ?? null), "CALENDAR_TYPE", []) == "Jalali")) {
            // line 69
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo "dist/vendor/bootstrap-datetimepicker/js/jalali-date.js?";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo "dist/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker-jalali.min.js?";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo "dist/vendor/calendar/js/calendar-jalali.js?";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\">
                moment.loadPersian();
            </script>
        ";
        } else {
            // line 76
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo "dist/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo "dist/vendor/calendar/js/calendar.js?";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 79
        echo "
        ";
        // line 81
        echo "        ";
        ob_start();
        echo "dist/vendor/calendar/js/language/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsShortLocale", []), "html", null, true);
        echo ".js";
        $context["calendarTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "fileExists", [0 => ($context["calendarTranslation"] ?? null)], "method")) {
            // line 83
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo twig_escape_filter($this->env, ($context["calendarTranslation"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 85
        echo "
        ";
        // line 86
        ob_start();
        echo "dist/vendor/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsShortLocale", []), "html", null, true);
        echo ".js";
        $context["datePickerTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "fileExists", [0 => ($context["datePickerTranslation"] ?? null)], "method")) {
            // line 88
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "rootUri", [], "method"), "html", null, true);
            echo twig_escape_filter($this->env, ($context["datePickerTranslation"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 90
        echo "
        <script type=\"text/javascript\">

            var translations = ";
        // line 93
        echo ($context["translations"] ?? null);
        echo ";
            // Translations we want always available
            ";
        // line 96
        echo "            translations.withselected = \"";
        echo twig_escape_filter($this->env, __("With Selected"), "js", null, true);
        echo "\";
            translations.selectAll = \"";
        // line 97
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\";
            translations.multiselect = \"";
        // line 98
        echo twig_escape_filter($this->env, __("Multiple Items Selected"), "js", null, true);
        echo "\";
            translations.multiselectNoItemsMessage = \"";
        // line 99
        echo twig_escape_filter($this->env, __("Sorry, no items have been selected."), "js", null, true);
        echo "\";
            translations.multiselectMessage = \"";
        // line 100
        echo twig_escape_filter($this->env, __("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        echo "\";
            translations.validExtensions = \"";
        // line 101
        echo twig_escape_filter($this->env, __("Valid Extensions"), "js", null, true);
        echo "\";
            translations.save = \"";
        // line 102
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\";
            translations.cancel = \"";
        // line 103
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\";
            translations.close = \"";
        // line 104
        echo twig_escape_filter($this->env, __("Close"), "js", null, true);
        echo "\";
            translations.success = \"";
        // line 105
        echo twig_escape_filter($this->env, __("Success"), "js", null, true);
        echo "\";
            translations.failure = \"";
        // line 106
        echo twig_escape_filter($this->env, __("Failure"), "js", null, true);
        echo "\";
            translations.enterText = \"";
        // line 107
        echo twig_escape_filter($this->env, __("Enter text..."), "js", null, true);
        echo "\";
            translations.noDataMessage = \"";
        // line 108
        echo twig_escape_filter($this->env, __("No Data returned from the source"), "js", null, true);
        echo "\";
            translations.statusPending = \"";
        // line 109
        echo twig_escape_filter($this->env, __("Status Pending"), "js", null, true);
        echo "\";
            translations.duplicate = \"";
        // line 110
        echo twig_escape_filter($this->env, __("Duplicate"), "js", null, true);
        echo "\";
            translations.deleteRecurring = \"";
        // line 111
        echo twig_escape_filter($this->env, __("Delete from Schedule"), "js", null, true);
        echo "\";
            translations.spacesWarning = \"";
        // line 112
        echo twig_escape_filter($this->env, __("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        echo "\";
            translations.done = \"";
        // line 113
        echo twig_escape_filter($this->env, __("Done"), "js", null, true);
        echo "\";
            translations.tagInputValueHelpText = \"";
        // line 114
        echo twig_escape_filter($this->env, __("Provide an optional Value for this Tag. If no Value is required, this field can be left blank"), "js", null, true);
        echo "\";
            translations.tagInputValueRequiredHelpText = \"";
        // line 115
        echo twig_escape_filter($this->env, __("Please provide the value for this Tag and confirm by pressing enter on your keyboard."), "js", null, true);
        echo "\";
            translations.dayPartExceptionErrorMessage = \"";
        // line 116
        echo twig_escape_filter($this->env, __("You already set an exception for this day."), "js", null, true);
        echo "\";
            ";
        // line 118
        echo "
            var language = \"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsLocale", []), "html", null, true);
        echo "\";
            var timezone = \"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "defaultTimezone", []), "html", null, true);
        echo "\";
            var dateFormat = \"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "DATE_FORMAT", []), "html", null, true);
        echo "\";
            var jsDateFormat = \"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "DATE_FORMAT_JS", []), "html", null, true);
        echo "\";
            var timeFormat = \"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "TIME_FORMAT", []), "html", null, true);
        echo "\";
            var jsTimeFormat = \"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "TIME_FORMAT_JS", []), "html", null, true);
        echo "\";
            var systemDateFormat = \"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "systemDateFormat", []), "html", null, true);
        echo "\";
            var systemTimeFormat = \"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "systemTimeFormat", []), "html", null, true);
        echo "\";
            var bootstrapDateFormat = \"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "DATE_FORMAT_BOOTSTRAP", []), "html", null, true);
        echo "\";
            var bootstrapDateFormatDateOnly = \"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "DATE_FORMAT_BOOTSTRAP_DATEONLY", []), "html", null, true);
        echo "\";
            var calendarType = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "CALENDAR_TYPE", []), "html", null, true);
        echo "\";
            var clockUrl = \"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("clock"), "html", null, true);
        echo "\";
            var calendarLanguage = \"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsShortLocale", []), "html", null, true);
        echo "\";
            var pingUrl = \"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("ping"), "html", null, true);
        echo "\";

            ";
        // line 135
        echo "            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"";
        // line 137
        echo twig_escape_filter($this->env, __("No data available in table"), "js", null, true);
        echo "\",
                \"info\":           \"";
        // line 138
        echo twig_escape_filter($this->env, __("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        echo "\",
                \"infoEmpty\":      \"";
        // line 139
        echo twig_escape_filter($this->env, __("Showing 0 to 0 of 0 entries"), "js", null, true);
        echo "\",
                \"infoFiltered\":   \"";
        // line 140
        echo twig_escape_filter($this->env, __("(filtered from _MAX_ total entries)"), "js", null, true);
        echo "\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"";
        // line 143
        echo twig_escape_filter($this->env, __("Show _MENU_ entries"), "js", null, true);
        echo "\",
                \"loadingRecords\": \"";
        // line 144
        echo twig_escape_filter($this->env, __("Loading..."), "js", null, true);
        echo "\",
                \"processing\":     \"";
        // line 145
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                \"search\":         \"";
        // line 146
        echo twig_escape_filter($this->env, __("Search:"), "js", null, true);
        echo "\",
                \"zeroRecords\":    \"";
        // line 147
        echo twig_escape_filter($this->env, __("No matching records found"), "js", null, true);
        echo "\",
                \"paginate\": {
                    \"first\":      \"";
        // line 149
        echo twig_escape_filter($this->env, __("First"), "js", null, true);
        echo "\",
                    \"last\":       \"";
        // line 150
        echo twig_escape_filter($this->env, __("Last"), "js", null, true);
        echo "\",
                    \"next\":       \"";
        // line 151
        echo twig_escape_filter($this->env, __("Next"), "js", null, true);
        echo "\",
                    \"previous\":   \"";
        // line 152
        echo twig_escape_filter($this->env, __("Previous"), "js", null, true);
        echo "\"
                },
                \"aria\": {
                    \"sortAscending\":  \"";
        // line 155
        echo twig_escape_filter($this->env, __(": activate to sort column ascending"), "js", null, true);
        echo "\",
                    \"sortDescending\": \"";
        // line 156
        echo twig_escape_filter($this->env, __(": activate to sort column descending"), "js", null, true);
        echo "\"
                },
                \"buttons\": {
                    \"colvis\":  \"";
        // line 159
        echo twig_escape_filter($this->env, __("Column visibility"), "js", null, true);
        echo "\",
                    \"print\": \"";
        // line 160
        echo twig_escape_filter($this->env, __("Print"), "js", null, true);
        echo "\"
                }
            };
            ";
        // line 164
        echo "
            moment.locale(\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute(($context["translate"] ?? null), "jsLocale", []), "html", null, true);
        echo "\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-center\";

            // CKEditor default config
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: [ CKEDITOR.getUrl('contents.css'), \"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" ],
                font_names: '";
        // line 181
        echo twig_escape_filter($this->env, ($context["ckeditorConfig"] ?? null), "html", null, true);
        echo "' + CKEDITOR.config.font_names,
                imageDownloadUrl: \"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1\"
            }

        </script>

        ";
        // line 187
        $this->displayBlock('javaScriptTemplates', $context, $blocks);
        // line 188
        echo "        ";
        $this->displayBlock('javaScript', $context, $blocks);
        // line 189
        echo "
        ";
        // line 190
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("theme-javascript.twig", "base.twig", 190);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 191
        echo "
        ";
        // line 192
        $this->loadTemplate("user-welcome.twig", "base.twig", 192)->display($context);
        // line 193
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_headContent($context, array $blocks = [])
    {
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
    }

    // line 187
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
    }

    // line 188
    public function block_javaScript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 188,  665 => 187,  660 => 29,  655 => 26,  648 => 193,  646 => 192,  643 => 191,  633 => 190,  630 => 189,  627 => 188,  625 => 187,  617 => 182,  613 => 181,  609 => 180,  591 => 165,  588 => 164,  582 => 160,  578 => 159,  572 => 156,  568 => 155,  562 => 152,  558 => 151,  554 => 150,  550 => 149,  545 => 147,  541 => 146,  537 => 145,  533 => 144,  529 => 143,  523 => 140,  519 => 139,  515 => 138,  511 => 137,  507 => 135,  502 => 132,  498 => 131,  494 => 130,  490 => 129,  486 => 128,  482 => 127,  478 => 126,  474 => 125,  470 => 124,  466 => 123,  462 => 122,  458 => 121,  454 => 120,  450 => 119,  447 => 118,  443 => 116,  439 => 115,  435 => 114,  431 => 113,  427 => 112,  423 => 111,  419 => 110,  415 => 109,  411 => 108,  407 => 107,  403 => 106,  399 => 105,  395 => 104,  391 => 103,  387 => 102,  383 => 101,  379 => 100,  375 => 99,  371 => 98,  367 => 97,  362 => 96,  357 => 93,  352 => 90,  345 => 88,  342 => 87,  336 => 86,  333 => 85,  326 => 83,  323 => 82,  316 => 81,  313 => 79,  306 => 77,  299 => 76,  289 => 71,  283 => 70,  276 => 69,  273 => 68,  265 => 64,  259 => 63,  253 => 62,  247 => 61,  240 => 60,  233 => 57,  226 => 56,  219 => 53,  213 => 52,  207 => 51,  201 => 50,  195 => 49,  189 => 48,  183 => 47,  177 => 46,  171 => 45,  165 => 44,  158 => 43,  150 => 40,  142 => 37,  136 => 33,  132 => 32,  128 => 31,  125 => 30,  123 => 29,  119 => 27,  117 => 26,  111 => 23,  105 => 22,  99 => 21,  93 => 20,  87 => 19,  81 => 18,  74 => 17,  66 => 14,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 2,  34 => 1,);
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
<html lang=\"{{ translate.jsShortLocale }}\">
    <head>
        <title>{{ theme.getThemeConfig(\"theme_title\") }}</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"{{ csrfToken }}\"/>
        <meta name=\"public-path\" content=\"{{ theme.rootUri() }}\"/>
        <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />
        <link href=\"{{ urlFor(\"library.font.css\") }}\" rel=\"stylesheet\">
        
        {# Import CSS bundle from dist #}
        <script src=\"{{ theme.rootUri() }}dist/style.bundle.min.js?{{ version }}\"></script>

        {# Import user made CSS from theme #}
        <link href=\"{{ theme.uri(\"css/dashboard.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/timeline.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/xibo.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/calendar.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/override.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/print.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ urlFor(\"library.font.css\") }}\" rel=\"stylesheet\">
        <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        {% block headContent %}{% endblock %}
    </head>
    <body>
        {% block content %}{% endblock %}
        <script type=\"text/javascript\">
            var calendar_type = \"{{ settings.CALENDAR_TYPE }}\";
            var jsLocale = \"{{ translate.jsLocale }}\";
            var jsShortLocale = \"{{ translate.jsShortLocale }}\";
        </script>

        {# Import JS bundle from dist #}
        <script src=\"{{ theme.rootUri() }}dist/vendor.bundle.min.js?{{ version }}\"></script>

        {# Import JS system tools #}
        <script src=\"{{ theme.rootUri() }}dist/systemTools.bundle.min.js?{{ version }}\"></script>

        {# jquery-file-upload #}
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/tmpl.min.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-load-image/load-image.all.min.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.iframe-transport.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-process.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-resize.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-validate.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-ui.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-image.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-video.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/jquery-file-upload/js/jquery.fileupload-audio.js?{{ version }}\"></script>

        {# Import libraries copied to dist #}
        <script src=\"{{ theme.rootUri() }}dist/vendor/ckeditor/ckeditor.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/vendor/bootstrap-fix/bootstrap-ckeditor-fix.js?{{ version }}\"></script>

        {# Import XIBO js files #}
        <script src=\"{{ theme.rootUri() }}dist/core/xibo-cms.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/core/xibo-forms.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/core/xibo-preview-timeline.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/core/xibo-calendar.js?{{ version }}\"></script>
        <script src=\"{{ theme.rootUri() }}dist/core/xibo-datasets.js?{{ version }}\"></script>


        {# Dates #}
        {% if settings.CALENDAR_TYPE == \"Jalali\" %}
            <script src=\"{{ theme.rootUri() }}dist/vendor/bootstrap-datetimepicker/js/jalali-date.js?{{ version }}\"></script>
            <script src=\"{{ theme.rootUri() }}dist/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker-jalali.min.js?{{ version }}\"></script>
            <script src=\"{{ theme.rootUri() }}dist/vendor/calendar/js/calendar-jalali.js?{{ version }}\"></script>
            <script type=\"text/javascript\">
                moment.loadPersian();
            </script>
        {% else %}
            <script src=\"{{ theme.rootUri() }}dist/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?{{ version }}\"></script>
            <script src=\"{{ theme.rootUri() }}dist/vendor/calendar/js/calendar.js?{{ version }}\"></script>
        {% endif %}

        {# Handle the inclusion of i18n #}
        {% set calendarTranslation %}dist/vendor/calendar/js/language/{{ translate.jsShortLocale }}.js{% endset %}
        {% if theme.fileExists(calendarTranslation) %}
            <script src=\"{{ theme.rootUri() }}{{ calendarTranslation }}\"></script>
        {% endif %}

        {% set datePickerTranslation %}dist/vendor/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.{{ translate.jsShortLocale }}.js{% endset %}
        {% if theme.fileExists(datePickerTranslation) %}
            <script src=\"{{ theme.rootUri() }}{{ datePickerTranslation }}\"></script>
        {% endif %}

        <script type=\"text/javascript\">

            var translations = {{ translations|raw }};
            // Translations we want always available
            {% autoescape \"js\" %}
            translations.withselected = \"{{ \"With Selected\"|trans }}\";
            translations.selectAll = \"{{ \"Select All\"|trans }}\";
            translations.multiselect = \"{{ \"Multiple Items Selected\"|trans }}\";
            translations.multiselectNoItemsMessage = \"{{ \"Sorry, no items have been selected.\"|trans }}\";
            translations.multiselectMessage = \"{{ \"Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items.\"|trans }}\";
            translations.validExtensions = \"{{ \"Valid Extensions\"|trans }}\";
            translations.save = \"{{ \"Save\"|trans }}\";
            translations.cancel = \"{{ \"Cancel\"|trans }}\";
            translations.close = \"{{ \"Close\"|trans }}\";
            translations.success = \"{{ \"Success\"|trans }}\";
            translations.failure = \"{{ \"Failure\"|trans }}\";
            translations.enterText = \"{{ \"Enter text...\"|trans }}\";
            translations.noDataMessage = \"{{ \"No Data returned from the source\"|trans }}\";
            translations.statusPending = \"{{ \"Status Pending\"|trans }}\";
            translations.duplicate = \"{{ \"Duplicate\"|trans }}\";
            translations.deleteRecurring = \"{{ \"Delete from Schedule\"|trans }}\";
            translations.spacesWarning = \"{{ \"Warning - starts with or ends with a space, or contains double spaces\"|trans }}\";
            translations.done = \"{{ \"Done\"|trans }}\";
            translations.tagInputValueHelpText = \"{{ \"Provide an optional Value for this Tag. If no Value is required, this field can be left blank\"|trans }}\";
            translations.tagInputValueRequiredHelpText = \"{{ \"Please provide the value for this Tag and confirm by pressing enter on your keyboard.\"|trans }}\";
            translations.dayPartExceptionErrorMessage = \"{{ \"You already set an exception for this day.\"|trans }}\";
            {% endautoescape %}

            var language = \"{{ translate.jsLocale }}\";
            var timezone = \"{{ settings.defaultTimezone }}\";
            var dateFormat = \"{{ settings.DATE_FORMAT }}\";
            var jsDateFormat = \"{{ settings.DATE_FORMAT_JS }}\";
            var timeFormat = \"{{ settings.TIME_FORMAT }}\";
            var jsTimeFormat = \"{{ settings.TIME_FORMAT_JS }}\";
            var systemDateFormat = \"{{ settings.systemDateFormat }}\";
            var systemTimeFormat = \"{{ settings.systemTimeFormat }}\";
            var bootstrapDateFormat = \"{{ settings.DATE_FORMAT_BOOTSTRAP }}\";
            var bootstrapDateFormatDateOnly = \"{{ settings.DATE_FORMAT_BOOTSTRAP_DATEONLY }}\";
            var calendarType = \"{{ settings.CALENDAR_TYPE }}\";
            var clockUrl = \"{{ urlFor(\"clock\") }}\";
            var calendarLanguage = \"{{ translate.jsShortLocale }}\";
            var pingUrl = \"{{ urlFor(\"ping\") }}\";

            {% autoescape \"js\" %}
            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"{{ \"No data available in table\"|trans }}\",
                \"info\":           \"{{ \"Showing _START_ to _END_ of _TOTAL_ entries\"|trans }}\",
                \"infoEmpty\":      \"{{ \"Showing 0 to 0 of 0 entries\"|trans }}\",
                \"infoFiltered\":   \"{{ \"(filtered from _MAX_ total entries)\"|trans }}\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"{{ \"Show _MENU_ entries\"|trans }}\",
                \"loadingRecords\": \"{{ \"Loading...\"|trans }}\",
                \"processing\":     \"{{ \"Processing...\"|trans }}\",
                \"search\":         \"{{ \"Search:\"|trans }}\",
                \"zeroRecords\":    \"{{ \"No matching records found\"|trans }}\",
                \"paginate\": {
                    \"first\":      \"{{ \"First\"|trans }}\",
                    \"last\":       \"{{ \"Last\"|trans }}\",
                    \"next\":       \"{{ \"Next\"|trans }}\",
                    \"previous\":   \"{{ \"Previous\"|trans }}\"
                },
                \"aria\": {
                    \"sortAscending\":  \"{{ \": activate to sort column ascending\"|trans }}\",
                    \"sortDescending\": \"{{ \": activate to sort column descending\"|trans }}\"
                },
                \"buttons\": {
                    \"colvis\":  \"{{ \"Column visibility\"|trans }}\",
                    \"print\": \"{{ \"Print\"|trans }}\"
                }
            };
            {% endautoescape %}

            moment.locale(\"{{ translate.jsLocale }}\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-center\";

            // CKEditor default config
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: [ CKEDITOR.getUrl('contents.css'), \"{{ urlFor(\"library.font.css\") }}\" ],
                font_names: '{{ ckeditorConfig }}' + CKEDITOR.config.font_names,
                imageDownloadUrl: \"{{ urlFor(\"library.download\") }}?preview=1\"
            }

        </script>

        {% block javaScriptTemplates %}{% endblock %}
        {% block javaScript %}{% endblock %}

        {% include \"theme-javascript.twig\" ignore missing %}

        {% include \"user-welcome.twig\" %}

    </body>
</html>
", "base.twig", "E:\\app\\laragon\\www\\xibo\\views\\base.twig");
    }
}
