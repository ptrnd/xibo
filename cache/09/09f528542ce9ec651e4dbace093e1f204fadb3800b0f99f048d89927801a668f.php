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

/* chart-designer-javascript.twig */
class __TwigTemplate_07d955beb9f96216fe7cff8264cea8863f714f5a510f059e407ce0507993e016 extends \Twig\Template
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
        // line 22
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function chart_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;

            if(dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Setup show legend fields
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#showLegend', '.legend-fields');

            graphFormSetup(this);
        }
    }

    // Runs before form submit
    function chart_form_edit_submit() {
        
        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#graphEditFormStep2\");

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

    // Graph specific params setup
    function graphFormSetup(dialog) {

        var \$graphConfig = \$(\"#graphConfig\", dialog);

        // Get template
        var graphConfigTemplate = formHelpers.getTemplate('chartGraphConfigTemplate');

        var columnTypeOptions = [
            {
                id: \"x-axis\",
                value: \"";
        // line 80
        echo __("X-Axis");
        echo "\"
            },{
                id: \"y-axis\",
                value: \"";
        // line 83
        echo __("Y-Axis");
        echo "\"
            },{
                id: \"series-identifier\",
                value: \"";
        // line 86
        echo __("Series Identifier");
        echo "\"
            }
        ];

        if (dialog.data().extra.config.length === 0) {
            // No existing config, so we add a row to our config div
            context = {
                columns: dialog.data().extra.columns,
                columnTypeOptions: columnTypeOptions,
                title: \"1\",
                columnType: \"\",
                dataSetColumnId: \"\",
                buttonGlyph: \"fa-plus\"
            };
            \$graphConfig.append(graphConfigTemplate(context));
        } else {
            // For each of the existing config options, create form components
            var j = 0;
            \$.each(dialog.data().extra.config, function (index, field) {
                j++;

                var context = {
                    columns: dialog.data().extra.columns,
                    columnTypeOptions: columnTypeOptions,
                    title: j,
                    columnType: field.columnType,
                    dataSetColumnId: parseInt(field.dataSetColumnId),
                    buttonGlyph: ((j === 1) ? \"fa-plus\" : \"fa-minus\")
                };

                \$graphConfig.append(graphConfigTemplate(context));
            });
        }

        // Nabble the resulting buttons
        \$graphConfig.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    columns: dialog.data().extra.columns,
                    columnTypeOptions: columnTypeOptions,
                    title: \$graphConfig.find('.form-group').length + 1,
                    columnType: \"\",
                    dataSetColumnId: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                \$graphConfig.append(graphConfigTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        // Series Colors
        var \$seriesColors = \$(\"#seriesColors\", dialog);

        // Get template
        var seriesColorsTemplate = formHelpers.getTemplate('chartColorsTemplate');

        if (dialog.data().extra.seriesColors.length === 0) {
            // No existing config, so we add a row to our config div
            context = {
                title: \"1\",
                color: \"\",
                buttonGlyph: \"fa-plus\"
            };
            \$seriesColors.append(seriesColorsTemplate(context));

            \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
        } else {
            // For each of the existing config options, create form components
            var j = 0;
            \$.each(dialog.data().extra.seriesColors, function (index, field) {
                j++;

                var context = {
                    title: j,
                    color: field,
                    buttonGlyph: ((j === 1) ? \"fa-plus\" : \"fa-minus\")
                };

                \$seriesColors.append(seriesColorsTemplate(context));
            });

            \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
        }

        // Nabble the resulting buttons
        \$seriesColors.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    title: \$seriesColors.find('.form-group').length + 1,
                    color: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                \$seriesColors.append(seriesColorsTemplate(context));

                \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });
                // Configure the query for sorting and filtering
        formHelpers.configureQueryBuilder(dialog, datasetQueryBuilderTranslations);

        // Fill the font colour in with a complimentary colour (if it isn't already filled in)
        var \$fontInput = \$(\"#fontColor\", dialog);
        let mainObjectBGColor = (formHelpers.mainObject !== undefined) ? formHelpers.mainObject.backgroundColor : formHelpers.defaultBackgroundColor;

        if (\$fontInput.val() == \"\") {
            // Choose a complementary color
            var color = \$c.complement(mainObjectBGColor);

            \$fontInput.val(color);
        }

        // Set up the colour selectors
        \$(\"#backgroundColor\", dialog).colorpicker({format: \"hex\"});

        \$fontInput.colorpicker({format: \"hex\"});

        // Tidy up colorpickers on modal close
        if(dialog.hasClass('modal')) {
            dialog.on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    dialog.find(\".colorpicker-element\").colorpicker('destroy');
                }
            });
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "chart-designer-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 86,  96 => 83,  90 => 80,  30 => 22,);
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
 * Xibo - Digital Signage - http://www.xibo.org.uk
 * Copyright (C) 2018 Spring Signage Ltd
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

<script type=\"text/javascript\">

    // Runs after form opens
    function chart_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            let dataSetId = \$(this).find('form').data().elementOptions.dataSetId;

            if(dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Setup show legend fields
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#showLegend', '.legend-fields');

            graphFormSetup(this);
        }
    }

    // Runs before form submit
    function chart_form_edit_submit() {
        
        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#graphEditFormStep2\");

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

    // Graph specific params setup
    function graphFormSetup(dialog) {

        var \$graphConfig = \$(\"#graphConfig\", dialog);

        // Get template
        var graphConfigTemplate = formHelpers.getTemplate('chartGraphConfigTemplate');

        var columnTypeOptions = [
            {
                id: \"x-axis\",
                value: \"{% trans \"X-Axis\" %}\"
            },{
                id: \"y-axis\",
                value: \"{% trans \"Y-Axis\" %}\"
            },{
                id: \"series-identifier\",
                value: \"{% trans \"Series Identifier\" %}\"
            }
        ];

        if (dialog.data().extra.config.length === 0) {
            // No existing config, so we add a row to our config div
            context = {
                columns: dialog.data().extra.columns,
                columnTypeOptions: columnTypeOptions,
                title: \"1\",
                columnType: \"\",
                dataSetColumnId: \"\",
                buttonGlyph: \"fa-plus\"
            };
            \$graphConfig.append(graphConfigTemplate(context));
        } else {
            // For each of the existing config options, create form components
            var j = 0;
            \$.each(dialog.data().extra.config, function (index, field) {
                j++;

                var context = {
                    columns: dialog.data().extra.columns,
                    columnTypeOptions: columnTypeOptions,
                    title: j,
                    columnType: field.columnType,
                    dataSetColumnId: parseInt(field.dataSetColumnId),
                    buttonGlyph: ((j === 1) ? \"fa-plus\" : \"fa-minus\")
                };

                \$graphConfig.append(graphConfigTemplate(context));
            });
        }

        // Nabble the resulting buttons
        \$graphConfig.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    columns: dialog.data().extra.columns,
                    columnTypeOptions: columnTypeOptions,
                    title: \$graphConfig.find('.form-group').length + 1,
                    columnType: \"\",
                    dataSetColumnId: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                \$graphConfig.append(graphConfigTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        // Series Colors
        var \$seriesColors = \$(\"#seriesColors\", dialog);

        // Get template
        var seriesColorsTemplate = formHelpers.getTemplate('chartColorsTemplate');

        if (dialog.data().extra.seriesColors.length === 0) {
            // No existing config, so we add a row to our config div
            context = {
                title: \"1\",
                color: \"\",
                buttonGlyph: \"fa-plus\"
            };
            \$seriesColors.append(seriesColorsTemplate(context));

            \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
        } else {
            // For each of the existing config options, create form components
            var j = 0;
            \$.each(dialog.data().extra.seriesColors, function (index, field) {
                j++;

                var context = {
                    title: j,
                    color: field,
                    buttonGlyph: ((j === 1) ? \"fa-plus\" : \"fa-minus\")
                };

                \$seriesColors.append(seriesColorsTemplate(context));
            });

            \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
        }

        // Nabble the resulting buttons
        \$seriesColors.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    title: \$seriesColors.find('.form-group').length + 1,
                    color: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                \$seriesColors.append(seriesColorsTemplate(context));

                \$seriesColors.find('.color-picker').colorpicker({format: \"hex\"});
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });
                // Configure the query for sorting and filtering
        formHelpers.configureQueryBuilder(dialog, datasetQueryBuilderTranslations);

        // Fill the font colour in with a complimentary colour (if it isn't already filled in)
        var \$fontInput = \$(\"#fontColor\", dialog);
        let mainObjectBGColor = (formHelpers.mainObject !== undefined) ? formHelpers.mainObject.backgroundColor : formHelpers.defaultBackgroundColor;

        if (\$fontInput.val() == \"\") {
            // Choose a complementary color
            var color = \$c.complement(mainObjectBGColor);

            \$fontInput.val(color);
        }

        // Set up the colour selectors
        \$(\"#backgroundColor\", dialog).colorpicker({format: \"hex\"});

        \$fontInput.colorpicker({format: \"hex\"});

        // Tidy up colorpickers on modal close
        if(dialog.hasClass('modal')) {
            dialog.on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    dialog.find(\".colorpicker-element\").colorpicker('destroy');
                }
            });
        }
    }
</script>
", "chart-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\chart-designer-javascript.twig");
    }
}
