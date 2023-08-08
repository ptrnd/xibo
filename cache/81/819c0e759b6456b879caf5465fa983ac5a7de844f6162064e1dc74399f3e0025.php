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

/* ticker-designer-javascript.twig */
class __TwigTemplate_998bcf23948a83ebb46a82b92382cdf2e762c3cbf49648c94e9536de717f93b4 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">

    // Runs after form opens
    function ticker_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));

        // Initialise CKEditor for the noDataMessage
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#ta_text_advanced': 'defaultVisualEditor',
                '#ta_text': 'template',
                '#ta_css': 'css'
            });
        
        // Set colorpicker for the bg colour
        \$(this).find('#backgroundColor').colorpicker({format: 'rgba'});

        // Tidy up colorpickers on modal close
        if(\$(this).hasClass('modal')) {
            \$(this).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    \$(this).find(\"#backgroundColor\").colorpicker('destroy');
                }
            });
        }
    }

    // Runs before form submit
    function ticker_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "ticker-designer-javascript.twig";
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
    function ticker_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));

        // Initialise CKEditor for the noDataMessage
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#ta_text_advanced': 'defaultVisualEditor',
                '#ta_text': 'template',
                '#ta_css': 'css'
            });
        
        // Set colorpicker for the bg colour
        \$(this).find('#backgroundColor').colorpicker({format: 'rgba'});

        // Tidy up colorpickers on modal close
        if(\$(this).hasClass('modal')) {
            \$(this).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    \$(this).find(\"#backgroundColor\").colorpicker('destroy');
                }
            });
        }
    }

    // Runs before form submit
    function ticker_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>", "ticker-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\ticker-designer-javascript.twig");
    }
}
