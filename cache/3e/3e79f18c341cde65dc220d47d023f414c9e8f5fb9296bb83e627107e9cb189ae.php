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

/* datasetticker-designer-javascript.twig */
class __TwigTemplate_e3b38689df61eff54d58cfaaf1aaee2c3484ddd2d63677f52bca08b52d540454 extends \Twig\Template
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
        // line 21
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function datasetticker_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;

            if( dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set clock type input field, using the helper ()
            formHelpers.setupObjectValueInputFields(\$(this), '#effect', ['.effect-controls'], ['none'], true);

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Configure the query for sorting and filtering
            formHelpers.configureQueryBuilder(this, datasetQueryBuilderTranslations);

            // Set up the colour selectors
            \$(this).find(\"#backgroundColor\").colorpicker().attr('autocomplete', 'off');

            // Setup editors
            formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));
            
            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
        }
    }

    // Runs before form submit
    function datasetticker_form_edit_submit() {

        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetTickerForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            // Submit the form
            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

</script>";
    }

    public function getTemplateName()
    {
        return "datasetticker-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 21,);
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
 * Copyright (C) 2017-2018 Xibo Signage Ltd
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
#}

<script type=\"text/javascript\">

    // Runs after form opens
    function datasetticker_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;

            if( dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set clock type input field, using the helper ()
            formHelpers.setupObjectValueInputFields(\$(this), '#effect', ['.effect-controls'], ['none'], true);

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Configure the query for sorting and filtering
            formHelpers.configureQueryBuilder(this, datasetQueryBuilderTranslations);

            // Set up the colour selectors
            \$(this).find(\"#backgroundColor\").colorpicker().attr('autocomplete', 'off');

            // Setup editors
            formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));
            
            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
        }
    }

    // Runs before form submit
    function datasetticker_form_edit_submit() {

        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetTickerForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            // Submit the form
            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

</script>", "datasetticker-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\datasetticker-designer-javascript.twig");
    }
}
