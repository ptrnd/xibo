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

/* region-designer-javascript.twig */
class __TwigTemplate_51ae20de326b154366f191a5474b75396e8817c2f5733ca14130ef0400db171c extends \Twig\Template
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
    function regionFormEditOpen() {
        
        // Transition type affects the transition-group visibility
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#transitionType', ['.transition-group'], null, true);

        // Handle set region as fullscreen button
        // Get layout object
        const layout = lD.layout;
        const form = \$(this).find('form');
        let buttonText = form.find('#setFullScreenButton').html();

        // Replace button text tags
        if(buttonText) {
            form.find('#setFullScreenButton').html(buttonText.replace('[width]', layout.width).replace('[height]', layout.height));
        }

        // Handle click action
        form.find('#setFullScreenButton').click(() => {
            // Set position values to 0
            form.find('#top').val(0);
            form.find('#left').val(0);

            // Set dimensions values to be the same as the layout's
            form.find('#width').val(layout.width);
            form.find('#height').val(layout.height);

            formChangesRegion({
                'width': layout.width,
                'height': layout.height,
                'top': 0,
                'left': 0 
            });
        });
        
        form.find('#top, #left, #width, #height').on('change', function(){
            formChangesRegion();
        });

        form.find('#zIndex').on('change', function(){
            formChangesRegionZIndex();
        });

        regionChangesForm();
    }

    function formChangesRegion() {
        const app = lD;
        const layout = app.layout;
        const regionId = app.selectedObject.id;
        const form = \$(app.propertiesPanel.DOMObject).find('form');

        layout.regions[regionId].transform({
            'width': form.find('#width').val(),
            'height': form.find('#height').val(),
            'top': form.find('#top').val(),
            'left': form.find('#left').val()
        }, false);

        app.renderContainer(app.navigator);
    }

    function formChangesRegionZIndex() {
        const app = lD;
        const form = \$(app.propertiesPanel.DOMObject).find('form');
        const newZIndex = parseInt(form.find('#zIndex').val());

        app.navigator.DOMObject.find('#' + app.selectedObject.id).css('zIndex', newZIndex);
        app.selectedObject.zIndex = newZIndex;
    }

    function regionChangesForm() {
        const app = lD;
        const form = \$(app.propertiesPanel.DOMObject).find('form')
        
        // If form not loaded, prevent changes
        if(form.length == 0 || app.layout.regions[app.selectedObject.id] == undefined) {
            return;
        }
        
        const regionDimensions = app.layout.regions[app.selectedObject.id].dimensions;

        form.find('#top').val(regionDimensions.top);
        form.find('#left').val(regionDimensions.left);

        // Set dimensions values to be the same as the layout's
        form.find('#width').val(regionDimensions.width);
        form.find('#height').val(regionDimensions.height);
    }
</script>";
    }

    public function getTemplateName()
    {
        return "region-designer-javascript.twig";
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
    function regionFormEditOpen() {
        
        // Transition type affects the transition-group visibility
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#transitionType', ['.transition-group'], null, true);

        // Handle set region as fullscreen button
        // Get layout object
        const layout = lD.layout;
        const form = \$(this).find('form');
        let buttonText = form.find('#setFullScreenButton').html();

        // Replace button text tags
        if(buttonText) {
            form.find('#setFullScreenButton').html(buttonText.replace('[width]', layout.width).replace('[height]', layout.height));
        }

        // Handle click action
        form.find('#setFullScreenButton').click(() => {
            // Set position values to 0
            form.find('#top').val(0);
            form.find('#left').val(0);

            // Set dimensions values to be the same as the layout's
            form.find('#width').val(layout.width);
            form.find('#height').val(layout.height);

            formChangesRegion({
                'width': layout.width,
                'height': layout.height,
                'top': 0,
                'left': 0 
            });
        });
        
        form.find('#top, #left, #width, #height').on('change', function(){
            formChangesRegion();
        });

        form.find('#zIndex').on('change', function(){
            formChangesRegionZIndex();
        });

        regionChangesForm();
    }

    function formChangesRegion() {
        const app = lD;
        const layout = app.layout;
        const regionId = app.selectedObject.id;
        const form = \$(app.propertiesPanel.DOMObject).find('form');

        layout.regions[regionId].transform({
            'width': form.find('#width').val(),
            'height': form.find('#height').val(),
            'top': form.find('#top').val(),
            'left': form.find('#left').val()
        }, false);

        app.renderContainer(app.navigator);
    }

    function formChangesRegionZIndex() {
        const app = lD;
        const form = \$(app.propertiesPanel.DOMObject).find('form');
        const newZIndex = parseInt(form.find('#zIndex').val());

        app.navigator.DOMObject.find('#' + app.selectedObject.id).css('zIndex', newZIndex);
        app.selectedObject.zIndex = newZIndex;
    }

    function regionChangesForm() {
        const app = lD;
        const form = \$(app.propertiesPanel.DOMObject).find('form')
        
        // If form not loaded, prevent changes
        if(form.length == 0 || app.layout.regions[app.selectedObject.id] == undefined) {
            return;
        }
        
        const regionDimensions = app.layout.regions[app.selectedObject.id].dimensions;

        form.find('#top').val(regionDimensions.top);
        form.find('#left').val(regionDimensions.left);

        // Set dimensions values to be the same as the layout's
        form.find('#width').val(regionDimensions.width);
        form.find('#height').val(regionDimensions.height);
    }
</script>", "region-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\views\\region-designer-javascript.twig");
    }
}
