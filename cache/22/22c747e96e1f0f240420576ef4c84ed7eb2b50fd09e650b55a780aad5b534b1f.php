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

/* video-designer-javascript.twig */
class __TwigTemplate_efa990468448a5ef2560ed491dd056d7fce2d37edb19f580c587d3661478eb96 extends \Twig\Template
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
    function video_form_edit_open() {

        let form = \$(this).find('form');
        // Set command code field, using the helper ()
        formHelpers.setupConditionalInputFields(
            form.find('#duration, #useDuration'), //triggerFields
            form.find('.loop-fields'), //targetFields
            form.data('mediaDuration'), //compareValue
            (compare) => {
                const valueComparison = parseFloat(form.find('#duration').val()) > parseFloat(compare);
                const useDurationIsChecked = form.find('#useDuration').is(':checked');
                return valueComparison && useDurationIsChecked;
            } //conditionTest
        );

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(form, '#useDuration', '.duration-fields');


        formHelpers.mediaEditFormOpen(this);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "video-designer-javascript.twig";
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
    function video_form_edit_open() {

        let form = \$(this).find('form');
        // Set command code field, using the helper ()
        formHelpers.setupConditionalInputFields(
            form.find('#duration, #useDuration'), //triggerFields
            form.find('.loop-fields'), //targetFields
            form.data('mediaDuration'), //compareValue
            (compare) => {
                const valueComparison = parseFloat(form.find('#duration').val()) > parseFloat(compare);
                const useDurationIsChecked = form.find('#useDuration').is(':checked');
                return valueComparison && useDurationIsChecked;
            } //conditionTest
        );

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(form, '#useDuration', '.duration-fields');


        formHelpers.mediaEditFormOpen(this);
    }

</script>", "video-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\video-designer-javascript.twig");
    }
}
