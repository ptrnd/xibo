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

/* datasetview-designer-javascript.twig */
class __TwigTemplate_4aaeaf864ef429c058696fd1e2eb4fca74364d957784aa04906283fdbb1c570b extends \Twig\Template
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
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function datasetview_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;
            
            if(dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set override template field, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

            // Setup template override
            formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#styleSheet': 'css'
            });

            dataSetFormSetup(this);
        }
    }

    // Runs before form submit
    function datasetview_form_edit_submit() {
        
        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetViewEditForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

    function dataSetFormSetup(dialog) {

        // Setup lists drag and sort ( with double click )
        \$(\"#columnsIn, #columnsOut\").sortable({
            connectWith: '.connectedSortable',
            dropOnEmpty: true
        }).disableSelection();
        \$(\".li-sortable\", dialog).dblclick(switchLists);

        // Configure the query for sorting and filtering
        formHelpers.configureQueryBuilder(dialog, datasetQueryBuilderTranslations);

        // Configure some color pickers
        \$(dialog).find(\"#backgroundColor\").colorpicker();
        \$(dialog).find(\"#borderColor\").colorpicker();
        \$(dialog).find(\"#fontColor\").colorpicker();

        // Populate the font list with options
        var \$fontFamily = \$(dialog).find(\"#fontFamily\");
        \$.ajax({
            method: \"GET\",
            url: \$fontFamily.data('searchUrl'),
            success: function(res) {
                if (res.success) {
                    \$.each(res.data, function(index, element) {
                        if (\$fontFamily.data('value') === element.familyName) {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\" selected>' + element.displayName + '</option>'));
                        } else {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\">' + element.displayName + '</option>'));
                        }
                    });
                }
            }
        });

        if(\$(dialog).hasClass('modal')) {
            \$(dialog).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    \$(dialog).find(\".colorpicker-element\").colorpicker('destroy');
                }
            });
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "datasetview-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,);
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
 * Copyright (C) 2016 Spring Signage Ltd
 * (\${FILE_NAME})
 */

#}

<script type=\"text/javascript\">

    // Runs after form opens
    function datasetview_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;
            
            if(dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set override template field, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

            // Setup template override
            formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#styleSheet': 'css'
            });

            dataSetFormSetup(this);
        }
    }

    // Runs before form submit
    function datasetview_form_edit_submit() {
        
        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetViewEditForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

    function dataSetFormSetup(dialog) {

        // Setup lists drag and sort ( with double click )
        \$(\"#columnsIn, #columnsOut\").sortable({
            connectWith: '.connectedSortable',
            dropOnEmpty: true
        }).disableSelection();
        \$(\".li-sortable\", dialog).dblclick(switchLists);

        // Configure the query for sorting and filtering
        formHelpers.configureQueryBuilder(dialog, datasetQueryBuilderTranslations);

        // Configure some color pickers
        \$(dialog).find(\"#backgroundColor\").colorpicker();
        \$(dialog).find(\"#borderColor\").colorpicker();
        \$(dialog).find(\"#fontColor\").colorpicker();

        // Populate the font list with options
        var \$fontFamily = \$(dialog).find(\"#fontFamily\");
        \$.ajax({
            method: \"GET\",
            url: \$fontFamily.data('searchUrl'),
            success: function(res) {
                if (res.success) {
                    \$.each(res.data, function(index, element) {
                        if (\$fontFamily.data('value') === element.familyName) {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\" selected>' + element.displayName + '</option>'));
                        } else {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\">' + element.displayName + '</option>'));
                        }
                    });
                }
            }
        });

        if(\$(dialog).hasClass('modal')) {
            \$(dialog).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    \$(dialog).find(\".colorpicker-element\").colorpicker('destroy');
                }
            });
        }
    }
</script>", "datasetview-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetview-designer-javascript.twig");
    }
}
