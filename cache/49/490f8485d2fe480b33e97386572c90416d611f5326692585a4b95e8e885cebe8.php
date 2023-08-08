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

/* clock-designer-javascript.twig */
class __TwigTemplate_fbdc9ca3f75100b56673bee35f5b3257cb10ac2b230da22f69c5556f5adf5fc8 extends \Twig\Template
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
        // line 8
        echo "<script type=\"text/javascript\">

    // Runs after form opens
    function clock_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set clock type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#clockTypeId', ['.analogue-control-group', '.digital-control-group', '.flip-control-group'], [1, 2, 3]);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'), '[' + jsTimeFormat + ']');

        // For the clock type, we need to check if it's not digital, and destroy the inline editor for that specific case
        const self = this;
        const clockTypeChangeBehaviour = function(form) {
            if(!\$(self).data('formEditorOnly')) {
                if(\$(form).find('form #clockTypeId').val() !== '2') {
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', false);
                } else {
                    let isChecked = \$(form).find('#ta_text_advanced').is(':checked');
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', isChecked);
                }
            }
        };

        // On select input change, check clock type
        \$(this).find('form #clockTypeId').on('change input', () => {
            clockTypeChangeBehaviour(\$(this));
        });

        clockTypeChangeBehaviour(\$(this));
    }

    // Runs before form submit
    function clock_form_edit_submit() {  

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "clock-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,);
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
 * Copyright (C) 2017 Spring Signage Ltd
 * (notification-designer-javascript.twig)
 */
#}
<script type=\"text/javascript\">

    // Runs after form opens
    function clock_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set clock type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#clockTypeId', ['.analogue-control-group', '.digital-control-group', '.flip-control-group'], [1, 2, 3]);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'), '[' + jsTimeFormat + ']');

        // For the clock type, we need to check if it's not digital, and destroy the inline editor for that specific case
        const self = this;
        const clockTypeChangeBehaviour = function(form) {
            if(!\$(self).data('formEditorOnly')) {
                if(\$(form).find('form #clockTypeId').val() !== '2') {
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', false);
                } else {
                    let isChecked = \$(form).find('#ta_text_advanced').is(':checked');
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', isChecked);
                }
            }
        };

        // On select input change, check clock type
        \$(this).find('form #clockTypeId').on('change input', () => {
            clockTypeChangeBehaviour(\$(this));
        });

        clockTypeChangeBehaviour(\$(this));
    }

    // Runs before form submit
    function clock_form_edit_submit() {  

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>", "clock-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\clock-designer-javascript.twig");
    }
}
