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

/* countdown-designer-javascript.twig */
class __TwigTemplate_4341d310e18234645d7782d6ed2f40f122a5a32d932c90862d23c277ae62bfcc extends \Twig\Template
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
        // line 23
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function countdown_form_edit_open() {
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set countdown type input fields, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#countdownType', ['.widget-duration-group', '.duration-group', '.date-group'], [1, 2, 3]);

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');
        
        // Set warning duration fields
        formHelpers.setupCheckboxInputFields(\$(this), '#useWarning', '.template-use-warning-controls', '');

        // Setup form Editor
        formHelpers.setupDualTypeTextArea(this, 'mainTemplate');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#mainTemplate_advanced': 'defaultVisualEditor',
                '#mainTemplate': 'template',
                '#styleSheet': 'css',
                '#widgetOriginalWidth': 'widgetOriginalWidth',
                '#widgetOriginalHeight': 'widgetOriginalHeight'
            });
    }

    // Runs before form submit
    function countdown_form_edit_submit() {  
        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "countdown-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 23,);
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
 * Copyright (C) 2020 Xibo Signage Ltd
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

<script type=\"text/javascript\">

    // Runs after form opens
    function countdown_form_edit_open() {
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set countdown type input fields, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#countdownType', ['.widget-duration-group', '.duration-group', '.date-group'], [1, 2, 3]);

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');
        
        // Set warning duration fields
        formHelpers.setupCheckboxInputFields(\$(this), '#useWarning', '.template-use-warning-controls', '');

        // Setup form Editor
        formHelpers.setupDualTypeTextArea(this, 'mainTemplate');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#mainTemplate_advanced': 'defaultVisualEditor',
                '#mainTemplate': 'template',
                '#styleSheet': 'css',
                '#widgetOriginalWidth': 'widgetOriginalWidth',
                '#widgetOriginalHeight': 'widgetOriginalHeight'
            });
    }

    // Runs before form submit
    function countdown_form_edit_submit() {  
        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>", "countdown-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\countdown-designer-javascript.twig");
    }
}
