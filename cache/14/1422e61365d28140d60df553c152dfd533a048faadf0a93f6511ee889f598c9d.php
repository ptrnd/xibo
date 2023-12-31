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

/* displayprofile-form-edit-javascript.twig */
class __TwigTemplate_b64c1ad650397197126ef61f245e4e7125e6ced4878f7131e9d4d869d20fadf3 extends \Twig\Template
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
        // line 9
        echo "<script type=\"text/javascript\">
    /**
    * Setup Display Profile setting forms
    */
    function displayProfileFormOpen() {
        
        // TIMERS
        setupFormFields(
            \$('#timers-container'),
            Handlebars.compile(\$('#template-timers').html()),
            \$('#timers-container').data('values'),
            \$('#timers-container').data('options'),
            timersFormInit,
            timersFormInit
        );

        // PICTURE OPTIONS
        setupFormFields(
            \$('#picture-options-container'),
            Handlebars.compile(\$('#template-picture-options').html()),
            \$('#picture-options-container').data('values'),
            \$('#picture-options-container').data('options'),
            pictureOptionsFormInit,
            pictureOptionsFormUpdate
        );
    }

    /**
    * Setup form dynamic fields
    * @param {jquery} container
    * @param {hbstemplate} template
    * @param {Object} values - Defined values
    * @param {Object} options - All the options
    */
    function setupFormFields(container, template, values, options, callbackFuncInit, callbackFuncUpdate) {

        // Prevent forms to setup inexisting fields
        if(container.length === 0) {
            return;
        }

        if(Object.keys(values).length == 0) {
            // Add a template row
            var context = {
                options: options,
                index: 1,
                name: \"\",
                values: {},
                buttonGlyph: \"fa-plus\"
            };
            container.append(template(context));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(values, function(index, values) {
                i++;

                var context = {
                    options: options,
                    index: i,
                    name: index,
                    values: values,
                    buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\")
                };
                container.append(template(context));
            });
        }

        // Button click handle
        container.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                
                var context = {
                    options: options,
                    index: container.find('.multiSelect:last').data('index') + 1,
                    name: \"\",
                    values: {},
                    buttonGlyph: \"fa-minus\"
                };
                
                // Append new object to container
                container.append(template(context));

                // Initialize form fields
                callbackFuncUpdate(container, options, values);
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        // Initialize form fields
        callbackFuncInit(container, options, values);
    }

    /**
    * Init/Update timePicker fields
    */
    function timersFormInit(container) {

        container.find('.timePickerDisplayEditForm').each(function() {

            \$(this).timepicker({
                'timeFormat': timeFormat,
                'step': 15
            }).change(function() {
                var value = moment(\$(this).val(), jsTimeFormat);
                \$(this).closest(\"form\").find(\"#\" + \$(this).data().linkField).val(value.format('HH:mm'));
            });

            // Get the linked field and use it to set the time
            var preset = \$(this).closest(\"form\").find(\"#\" + \$(this).data().linkField).val();

            if (preset != undefined && preset != \"\") {
                \$(this).timepicker('setTime', preset);
            }
        
        });
    }

    /**
    * Initialise all form fields
    */
    function pictureOptionsFormInit(container, options, values) {

        container.find('.multiSelect').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });

        container.on('change', '.multiSelect', function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Update the last added field
    */
    function pictureOptionsFormUpdate(container, options, values) {

        container.find('.multiSelect:last').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Populate and create the slider
    */
    function pictureOptionsFormChangeInputs(selProperty, row, propertyOptions, values) {
        if(selProperty == undefined || selProperty == '') {
            row.find('.multiSelectInputs').html(Handlebars.compile(\$('#template-picture-options-none').html())());
            return;
        }

        // Add empty template to the container
        const template = Handlebars.compile(\$('#template-picture-options-slider').html());
        row.find('.multiSelectInputs').html(template({
            index: row.find('.multiSelect').data('index')
        }));
        
        let propertyValue = values[selProperty];
        let sliderOptions = propertyOptions.sliderOptions;

        // Find respective index
        if(typeof(propertyValue) == \"string\") {
            for (let index = 0; index < sliderOptions.ticks_labels.length; index++) {
                const label = sliderOptions.ticks_labels[index];
                
                if(label == propertyValue) {
                    propertyValue = index;
                }
            }
        }

        // Set value to the options
        sliderOptions.value = ((propertyValue != undefined) ? propertyValue : 0);

        // Init slider
        row.find('.pictureControlsSlider').slider(sliderOptions); 

        // Refresh on tab switch to fix broken labels
        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', () =>  {
            row.find('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });
        });
    }

    // Equals helper for the templates below
    Handlebars.registerHelper('eq', function(v1, v2, opts) {
        if (v1 === v2) {
            return opts.fn(this);
        } else {
            return opts.inverse(this);
        }
    });
</script>

<style>
    /*
    * Slider width fix
    */
    .slider:not(.scaled-slider) {
        width: 100% !important;
    }
</style>

";
        // line 255
        echo "
    <script type=\"text/x-handlebars-template\" id=\"template-timers\">
        <div class=\"form-group col-sm-12 row form-group-timers\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"timers[{{ index }}][day]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{ id }}\" {{#eq id ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <input type=\"hidden\" class=\"timersOn\" name=\"timers[{{ index }}][on]\" id=\"timersOn{{ index }}\" value=\"{{ values.on }}\" />
                <input class=\"form-control timePickerDisplayEditForm\" type=\"text\" id=\"timersOn{{ index }}Link\" data-link-field=\"timersOn{{ index }}\" data-link-format=\"H:i\"/>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <input type=\"hidden\" class=\"timersOff\" name=\"timers[{{ index }}][off]\" id=\"timersOff{{ index }}\" value=\"{{ values.off }}\" />
                <input class=\"form-control timePickerDisplayEditForm\" type=\"text\" id=\"timersOff{{ index }}Link\" data-link-field=\"timersOff{{ index }}\" data-link-format=\"H:i\"/>
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options\">
            <div class=\"form-group col-sm-12 row form-group-picture-options\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"pictureControls[{{ index }}][property]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{@key}}\" {{#eq @key ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-6 multiSelectInputs\">
                ";
        echo "
                    <p class=\"btn btn-block btn-primary\" disabled>";
        // line 256
        echo __("Select a property to display inputs");
        echo "</p>
                ";
        // line 267
        echo "
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-slider\">
        <input type=\"text\" class=\"pictureControlsSlider\" name=\"pictureControls[{{ index }}][value]\"/>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-none\">
        ";
        echo "
            <p class=\"btn btn-block btn-primary\" disabled>";
        // line 268
        echo __("Select a property to display inputs");
        echo "</p>
        ";
        // line 271
        echo "
    </script>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 271,  300 => 268,  286 => 267,  282 => 256,  239 => 255,  30 => 9,);
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
<script type=\"text/javascript\">
    /**
    * Setup Display Profile setting forms
    */
    function displayProfileFormOpen() {
        
        // TIMERS
        setupFormFields(
            \$('#timers-container'),
            Handlebars.compile(\$('#template-timers').html()),
            \$('#timers-container').data('values'),
            \$('#timers-container').data('options'),
            timersFormInit,
            timersFormInit
        );

        // PICTURE OPTIONS
        setupFormFields(
            \$('#picture-options-container'),
            Handlebars.compile(\$('#template-picture-options').html()),
            \$('#picture-options-container').data('values'),
            \$('#picture-options-container').data('options'),
            pictureOptionsFormInit,
            pictureOptionsFormUpdate
        );
    }

    /**
    * Setup form dynamic fields
    * @param {jquery} container
    * @param {hbstemplate} template
    * @param {Object} values - Defined values
    * @param {Object} options - All the options
    */
    function setupFormFields(container, template, values, options, callbackFuncInit, callbackFuncUpdate) {

        // Prevent forms to setup inexisting fields
        if(container.length === 0) {
            return;
        }

        if(Object.keys(values).length == 0) {
            // Add a template row
            var context = {
                options: options,
                index: 1,
                name: \"\",
                values: {},
                buttonGlyph: \"fa-plus\"
            };
            container.append(template(context));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(values, function(index, values) {
                i++;

                var context = {
                    options: options,
                    index: i,
                    name: index,
                    values: values,
                    buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\")
                };
                container.append(template(context));
            });
        }

        // Button click handle
        container.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                
                var context = {
                    options: options,
                    index: container.find('.multiSelect:last').data('index') + 1,
                    name: \"\",
                    values: {},
                    buttonGlyph: \"fa-minus\"
                };
                
                // Append new object to container
                container.append(template(context));

                // Initialize form fields
                callbackFuncUpdate(container, options, values);
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        // Initialize form fields
        callbackFuncInit(container, options, values);
    }

    /**
    * Init/Update timePicker fields
    */
    function timersFormInit(container) {

        container.find('.timePickerDisplayEditForm').each(function() {

            \$(this).timepicker({
                'timeFormat': timeFormat,
                'step': 15
            }).change(function() {
                var value = moment(\$(this).val(), jsTimeFormat);
                \$(this).closest(\"form\").find(\"#\" + \$(this).data().linkField).val(value.format('HH:mm'));
            });

            // Get the linked field and use it to set the time
            var preset = \$(this).closest(\"form\").find(\"#\" + \$(this).data().linkField).val();

            if (preset != undefined && preset != \"\") {
                \$(this).timepicker('setTime', preset);
            }
        
        });
    }

    /**
    * Initialise all form fields
    */
    function pictureOptionsFormInit(container, options, values) {

        container.find('.multiSelect').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });

        container.on('change', '.multiSelect', function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Update the last added field
    */
    function pictureOptionsFormUpdate(container, options, values) {

        container.find('.multiSelect:last').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Populate and create the slider
    */
    function pictureOptionsFormChangeInputs(selProperty, row, propertyOptions, values) {
        if(selProperty == undefined || selProperty == '') {
            row.find('.multiSelectInputs').html(Handlebars.compile(\$('#template-picture-options-none').html())());
            return;
        }

        // Add empty template to the container
        const template = Handlebars.compile(\$('#template-picture-options-slider').html());
        row.find('.multiSelectInputs').html(template({
            index: row.find('.multiSelect').data('index')
        }));
        
        let propertyValue = values[selProperty];
        let sliderOptions = propertyOptions.sliderOptions;

        // Find respective index
        if(typeof(propertyValue) == \"string\") {
            for (let index = 0; index < sliderOptions.ticks_labels.length; index++) {
                const label = sliderOptions.ticks_labels[index];
                
                if(label == propertyValue) {
                    propertyValue = index;
                }
            }
        }

        // Set value to the options
        sliderOptions.value = ((propertyValue != undefined) ? propertyValue : 0);

        // Init slider
        row.find('.pictureControlsSlider').slider(sliderOptions); 

        // Refresh on tab switch to fix broken labels
        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', () =>  {
            row.find('.pictureControlsSlider').slider('refresh', { useCurrentValue: true });
        });
    }

    // Equals helper for the templates below
    Handlebars.registerHelper('eq', function(v1, v2, opts) {
        if (v1 === v2) {
            return opts.fn(this);
        } else {
            return opts.inverse(this);
        }
    });
</script>

<style>
    /*
    * Slider width fix
    */
    .slider:not(.scaled-slider) {
        width: 100% !important;
    }
</style>

{% raw %}
    <script type=\"text/x-handlebars-template\" id=\"template-timers\">
        <div class=\"form-group col-sm-12 row form-group-timers\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"timers[{{ index }}][day]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{ id }}\" {{#eq id ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <input type=\"hidden\" class=\"timersOn\" name=\"timers[{{ index }}][on]\" id=\"timersOn{{ index }}\" value=\"{{ values.on }}\" />
                <input class=\"form-control timePickerDisplayEditForm\" type=\"text\" id=\"timersOn{{ index }}Link\" data-link-field=\"timersOn{{ index }}\" data-link-format=\"H:i\"/>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <input type=\"hidden\" class=\"timersOff\" name=\"timers[{{ index }}][off]\" id=\"timersOff{{ index }}\" value=\"{{ values.off }}\" />
                <input class=\"form-control timePickerDisplayEditForm\" type=\"text\" id=\"timersOff{{ index }}Link\" data-link-field=\"timersOff{{ index }}\" data-link-format=\"H:i\"/>
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options\">
            <div class=\"form-group col-sm-12 row form-group-picture-options\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"pictureControls[{{ index }}][property]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{@key}}\" {{#eq @key ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-6 multiSelectInputs\">
                {% endraw %}
                    <p class=\"btn btn-block btn-primary\" disabled>{% trans \"Select a property to display inputs\" %}</p>
                {% raw %}
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-slider\">
        <input type=\"text\" class=\"pictureControlsSlider\" name=\"pictureControls[{{ index }}][value]\"/>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-none\">
        {% endraw %}
            <p class=\"btn btn-block btn-primary\" disabled>{% trans \"Select a property to display inputs\" %}</p>
        {% raw %}
    </script>
{% endraw %}", "displayprofile-form-edit-javascript.twig", "E:\\app\\laragon\\www\\xibo\\views\\displayprofile-form-edit-javascript.twig");
    }
}
