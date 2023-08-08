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

/* calendar-designer-javascript.twig */
class __TwigTemplate_4fd01a399dcbbe56c388db2ad5c7fc3aed9ef5b56487a892c7b5acd54648c71f extends \Twig\Template
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
    function calendar_form_edit_open() {

        // Set duration field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set template field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useCurrentTemplate', '.current-event-template');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'currentEventTemplate');
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
    }

    // Runs before form submit
    function calendar_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "calendar-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 22,);
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
    function calendar_form_edit_open() {

        // Set duration field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set template field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useCurrentTemplate', '.current-event-template');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'currentEventTemplate');
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
    }

    // Runs before form submit
    function calendar_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>
", "calendar-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\calendar-designer-javascript.twig");
    }
}
