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

/* notificationview-designer-javascript.twig */
class __TwigTemplate_a3989d9bdfb16eaf96d29de80a5b6b42313209e2a0e67976efa8481f69ce3721 extends \Twig\Template
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
    function notificationview_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
    }

    // Runs before form submit
    function notificationview_form_edit_submit() {        

        // Update text callback fields
        formHelpers.updateCKEditor();
    }
    
</script>";
    }

    public function getTemplateName()
    {
        return "notificationview-designer-javascript.twig";
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
    function notificationview_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
    }

    // Runs before form submit
    function notificationview_form_edit_submit() {        

        // Update text callback fields
        formHelpers.updateCKEditor();
    }
    
</script>", "notificationview-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\notificationview-designer-javascript.twig");
    }
}
