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

/* user-welcome.twig */
class __TwigTemplate_a0743e7f1e3d2befd9b2d836c4a6fe82e15d06140cedbad22cf8e42ed8aed050 extends \Twig\Template
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
        // line 1
        echo "<style type=\"text/css\">
    .popover-double-width {
        max-width: 652px !important;
        background-color: #d9edf7 !important;
    }
    .popover-normal-width {
        max-width: 552px !important;
        min-width: 150px;
        background-color: #d9edf7 !important;
    }
    .padminus {
        padding-right: 5px !important;
    }
    .popover-content-large{
        font-size: large !important;
    }
    .tour .popover-title{
        background-color: #b2bfdc;
    }

</style>

<script type=\"text/javascript\">

    ";
        // line 25
        $context["appName"] = $this->getAttribute(($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method");
        // line 26
        echo "    ";
        $context["horizontalNav"] = ($this->getAttribute(($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method")], "method") == "horizontal");
        // line 27
        echo "
    var hasSeenNewUserWizard = ";
        // line 28
        if (($this->getAttribute(($context["currentUser"] ?? null), "userTypeId", []) != 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? null), "newUserWizard", []), "html", null, true);
        } else {
            echo "-1";
        }
        echo ";
    
    \$(document).ready(function () {
        var tour, layoutDesignerTour, no_nav_template, start_template, next_template, final_template;
        final_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default' data-role='end'>";
        // line 32
        echo __("Close");
        echo "</button>\";
        next_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success pull-right' data-role='next'>";
        // line 33
        echo __("Next");
        echo "</button>\";
        no_nav_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div>\";
        start_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success' data-role='next'>";
        // line 35
        echo __("Get started with the basics");
        echo "</button><button class='btn btn-default' data-role='end'>";
        echo __("Skip this tutorial");
        echo "</button>\";

        // New wizard tour
        tour = window.tour = new Tour({
            debug: false,
            keyboard: false,
            framework: \"bootstrap3\", 
            showProgressBar: false,     // don't show the progress bar on this step only
            showProgressText: false,    // don't show the progress text on this step only
            highlightOpacity: 0.6,
            onElementUnavailable: cmsOnElementUnavailable,
            onEnd: function () {
                setNewUserWizardState();
            },
            onModalHidden: function(tour, stepNumber) {
                // If the modal is closed in step 19, go to next step automaticaly
                console.debug('onModalHidden');
                console.debug(stepNumber == 6);
                return (stepNumber == 6);
            },
            steps: [
                { // 0
                    orphan: true,
                    placement: \"bottom\",
                    title: \"";
        // line 59
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %appName% CMS!"), array("%appName%" => ($context["appName"] ?? null), ));
        echo "\",
                    content: \"";
        // line 60
        echo __("We'd like to take you on a short tour of the CMS to get you up and running quickly. If you already know your way around, you can skip the tutorial");
        echo "\",
                    template: start_template
                }, 
                ";
        // line 63
        if (($context["horizontalNav"] ?? null)) {
            // line 64
            echo "                    {
                        element: \".navbar-nav:eq(0) > li:eq(0)\",
                        placement: \"bottom\",
                        title: \"\",
                        content: \"";
            // line 68
            echo __("The CMS main menu allows for navigation to all key areas.");
            echo "\",
                        template: next_template
                    }, { // 2
                        element: '.navbar-nav:eq(0) > li:eq(2)',
                        placement: \"right\",
                        title: \"\",
                        content: \"";
            // line 74
            echo __("Start by clicking on <b>Layouts</b> under the Design section of the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template,
                        onShown: function (tour) {
                            // Open dropdown
                            \$('.navbar-nav:eq(0) > li:eq(2)').addClass('open');
                        }
                    }, 
                ";
        } else {
            // line 83
            echo "                    {
                        element: \".sidebar-main:eq(0)\",
                        placement: \"right\",
                        title: \"\",
                        content: \"";
            // line 87
            echo __("The CMS main menu allows for navigation to all key areas.");
            echo "\",
                        template: next_template
                    }, { // 2
                        element: \".sidebar-list:eq(3)\",
                        placement: \"right\",
                        title: \"\",
                        content: \"";
            // line 93
            echo __("Start by clicking on <b>Layouts</b> under the Design section of the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template
                    }, 
                ";
        }
        // line 98
        echo "                {
                    element: '#layouts_wrapper',
                    placement: \"top\",
                    backdrop: true,
                    title: \"\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    },
                    content: \"";
        // line 107
        echo __("This is the layout grid and from here is where you can add new and manage existing layouts.");
        echo "\",
                    template: next_template,
                    onElementUnavailableStep: 1
                }, { // 4
                    element: \".btn-success a\",
                    placement: \"left\",
                    title: \"\",
                    content: \"";
        // line 114
        echo __("Create a new layout by clicking on <b>Add Layout</b>");
        echo "\",
                    reflex: true,
                    template: no_nav_template,
                    onElementUnavailableStep: 1
                }, {
                    element: \"#name\",
                    placement: \"bottom\",
                    container: '.bootbox',
                    title: \"\",
                    content: \"";
        // line 123
        echo __("Name your layout so you can easily identify it for scheduling.");
        echo "\",
                    reflex: \"click change\",
                    template: no_nav_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    },
                    onElementUnavailableStep: 4
                }, { // 6
                    element: \".save-button\",
                    container: '.bootbox',
                    placement: \"top\",
                    title: \"\",
                    content: \"";
        // line 136
        echo __("Press <b>Save</b>.");
        echo "\",
                    template: no_nav_template,
                    onElementUnavailableStep: 4
                },
                {
                    element: '#layout-editor',
                    placement: \"top\",
                    title: \"\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 10000
                    },
                    content: \"";
        // line 148
        echo __("This is the layout designer screen where you will add and configure content.");
        echo "\",
                    template: next_template
                }, { // 8
                    title: \"\",
                    content: \"";
        // line 152
        echo __("This is the <b>Preview</b> window, that shows previews for layouts, regions and widgets.");
        echo "\",
                    element: \"#layout-editor #layout-viewer-container\",
                    placement: \"bottom\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 163
        echo __("This is the <b>Editor</b>, where we can change layout properties, region options and assigned widgets.");
        echo "\",
                    element: \"#properties-panel-parent\",
                    placement: \"bottom\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    backdrop: true,
                    template: next_template
                }, { // 10
                    title: \"\",
                    content: \"";
        // line 174
        echo __("This is the <b>Layout Timeline</b>, which shows the total layout duration as well as the duration of assigned media.");
        echo "\",
                    element: \"#timeline-container\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 182
        echo __("This is the <b>Toolbar</b>, used to interact with the layout designer.");
        echo "\",
                    element: \"#layout-editor-toolbar\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template,
                    onElementUnavailable: 10
                }, {
                    title: \"\",
                    content: \"";
        // line 191
        echo __("Let's start by opening the Navigator edit mode. Click on the edit button.");
        echo "\",
                    element: \"#layout-viewer-navbar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, { // 13
                    title: \"\",
                    content: \"";
        // line 198
        echo __("Click anywhere inside the region to edit it");
        echo "\",
                    element: '#layout-navigator div[data-type=\"region\"]:first',
                    smartPlacement: true,
                    delay: 500,
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 206
        echo __("Grab the Region handle, and drag to resize.");
        echo "\",
                    element: '#layout-navigator div[data-type=\"region\"]:first .ui-resizable-se',
                    placement: \"bottom\",
                    reflex: \"mouseover\",
                    delay: 400,
                    template: no_nav_template
                }, { // 15
                    title: \"\",
                    content: \"";
        // line 214
        echo __("When you are happy with your positioning, click save to save changes.");
        echo "\",
                    element: \"#properties-panel button[data-action='save']\",
                    placement: \"left\",
                    reflex: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 1000
                    },
                    template: no_nav_template
                }, { 
                    title: \"\",
                    content: \"";
        // line 225
        echo __("Click back to go back to the main editor.");
        echo "\",
                    element: \"#layout-navigator #close-btn\",
                    placement: \"right\",
                    reflex: true,
                    delay: 4000,
                    template: no_nav_template
                }, { // 17
                    title: \"\",
                    container: '#layout-editor',
                    content: \"";
        // line 234
        echo __("You will now have an empty region that has been resized and positioned on a black background. Let's add some content!");
        echo "\",
                    element: '#layout-timeline .designer-region:first',
                    placement: \"bottom\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                }, { // 18
                    title: \"\",
                    content: \"";
        // line 244
        echo __("Use the Toolbar tabs to select <b>Widgets</b>");
        echo "\",
                    element: \"#layout-editor-toolbar #btn-menu-2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-2.active').length > 0) {
                            tour.goTo(19);
                            return false;
                        }
                    }
                }, { // 19
                    title: \"\",
                    content: \"";
        // line 258
        echo __("These are the widgets you can add. Find the <b>Text</b> widget using the right and left buttons.");
        echo "\",
                    element: \"#layout-editor-toolbar #content-2 .toolbar-pane-content\",
                    placement: \"top\",
                    template: next_template,
                    delay: 500
                }, { // 20
                    title: \"\",
                    content: \"";
        // line 265
        echo __("Add by <b>dragging</b> the widget to a region, or clicking on the <b>plus button</b> and click on the target region. Click <b>Next</b> after adding the widget.");
        echo "\",
                    element: '#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]',
                    placement: \"top\",
                    template: next_template,
                    onShown: function (tour) {
                        // Check if the text widget is into view
                        function isScrolledIntoView(elem, parent) {
                            var parentViewLeft = \$(parent).offset().left;
                            var parentViewRight = parentViewLeft + \$(parent).width();

                            var elemLeft = \$(elem).offset().left;
                            var elemRight = elemLeft + \$(elem).width();

                            return ((elemRight <= parentViewRight) && (elemLeft >= parentViewLeft));
                        }

                        // Go back if the element isn't still visible
                        if (!isScrolledIntoView('#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]', '.toolbar-pane-content-container')){
                            tour.goTo(19);
                            return false;
                        }
                    },
                    next: 21
                }, { // 21
                    title: \"\",
                    content: \"";
        // line 290
        echo __("The Layout Timeline will now show that the Text widget has been added.");
        echo "\",
                    element: '#layout-timeline',
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template,
                    onShown: function (tour) {
                        // If we don't have widget yet, got to the add step
                        if (\$('#layout-timeline .designer-widget').length === 0) {
                            tour.goTo(18);
                            return false;
                        }
                    },
                    next: 22
                }, { // 22
                    title: \"\",
                    content: \"";
        // line 305
        echo __("Click on the widget in the Layout Timeline!");
        echo "\",
                    element: '#layout-timeline .designer-widget',
                    placement: \"bottom\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 311
        echo __("Let's edit the template now. Click in the preview window to open the text editor.");
        echo "\",
                    element: '#layout-viewer',
                    placement: \"right\",
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to previous step
                        if (\$('#properties-panel .form-title-widget').length === 0) {
                            tour.goTo(22);
                            return false;
                        }
                    },
                    reflex: true,
                    delay: 1000
                }, { // 24
                    title: \"\",
                    content: \"";
        // line 326
        echo __("Add and format your text. The thin red line is showing your region border. Ensure that when you are editing, your text remains within these guidelines.");
        echo "\",
                    element: '#layout-viewer .viewer-element ',
                    placement: \"right\",
                    template: next_template,
                    delay: 500
                }, {
                    title: \"\",
                    content: \"";
        // line 333
        echo __("Enter some text, apply some formatting such as font style and size.");
        echo "\",
                    element: '#layout-viewer .viewer-element ',
                    placement: \"right\",
                    template: next_template,
                    delay: 500
                }, { // 26
                    title: \"\",
                    content: \"";
        // line 340
        echo __("Give an optional name to this widget.");
        echo "\",
                    element: '#properties-panel input#name',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                }, {
                    title: \"\",
                    content: \"";
        // line 347
        echo __("Click in the <b>Set a duration</b> box to select that option.");
        echo "\",
                    element: '#properties-panel input#useDuration',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500
                }, { // 28
                    title: \"\",
                    content: \"";
        // line 355
        echo __("Let’s override the default time to 30 seconds.");
        echo "\",
                    element: '#properties-panel input#duration',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                    delay: 500
                }, {
                    title: \"\",
                    content: \"";
        // line 363
        echo __("Click <b>Save</b> to save the widget edits.");
        echo "\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500,
                    onShown: function (tour) {
                        // If the input duration is not visible, go back to the checkbox step
                        if (!\$('#properties-panel input#duration').is(\":visible\")) {
                            tour.goTo(27);
                            return false;
                        }
                    }
                }, { // 30
                    title: \"\",
                    content: \"";
        // line 378
        echo __("The Region Timeline will now show the new updated duration for this Text widget.");
        echo "\",
                    element: '#layout-timeline .designer-widget .widgetLabel .widgetDuration',
                    placement: \"top\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                }, {
                    title: \"\",
                    content: \"";
        // line 388
        echo __("Now change the default background from black to a colour of your choice. Click in the back button to go back to the layout options.");
        echo "\",
                    element: '#layout-viewer-container #back-btn',
                    placement: \"bottom\",
                    template: no_nav_template,
                    reflex: \"mousedown\",
                    delay: 500
                }, { // 32
                    title: \"\",
                    content: \"";
        // line 396
        echo __("Edit options for the layout will open in the Layout Editor.");
        echo "\",
                    element: '#properties-panel',
                    placement: \"left\",
                    template: next_template,
                    delay: 500,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to previous step
                        if (\$('#properties-panel #layoutEditForm').length === 0) {
                            tour.goTo(31);
                            return false;
                        }
                    }
                }, {
                    title: \"\",
                    content: \"";
        // line 410
        echo __("Click in the background colour field and select a colour using the colour picker.");
        echo "\",
                    element: '#properties-panel input#backgroundColor',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                    delay: 500
                }, { // 34
                    title: \"\",
                    content: \"";
        // line 418
        echo __("Click <b>Save</b> to save the layout edits.");
        echo "\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500
                },  {
                    title: \"\",
                    content: \"";
        // line 426
        echo __("You can take a look at how your layout will look on your displays by clicking on the Play button on the Preview window.");
        echo "\",
                    element: '#layout-viewer-navbar #play-btn',
                    placement: \"right\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    },
                    template: next_template
                }, { // 36
                    title: \"\",
                    content: \"";
        // line 436
        echo __("When happy with your layout you will need to publish before being able to schedule to displays.");
        echo "\",
                    orphan: true,
                    placement: \"top\",
                    template: next_template,
                    delay: 1500
                }, {
                    title: \"\",
                    content: \"";
        // line 443
        echo __("Select <b>Actions</b> to see the publish option.");
        echo "\",
                    element: '#layout-editor-topbar #actionsSubmenu a',
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template
                }, { // 38
                    title: \"\",
                    content: \"";
        // line 450
        echo __("Click on the <b>Publish</b> button to open the form.");
        echo "\",
                    element: '#layout-editor-topbar #publishLayout',
                    placement: \"bottom\",
                    reflex: true,
                    delay: 500,
                    template: no_nav_template
                }, {
                    element: '.bootbox button[data-bb-handler=\"Publish\"]',
                    reflex: true,
                    placement: \"bottom\",
                    container: '.bootbox',
                    title: \"\",
                    content: \"";
        // line 462
        echo __("Press <b>Publish</b>.");
        echo "\",
                    template: no_nav_template,
                    delay: 500
                }, { // 40
                    title: \"\",
                    element: '.welcome-screen-modal .modal-dialog',
                    content: \"";
        // line 468
        echo __("Your layout is now ready to be scheduled to displays / display groups!");
        echo "\",
                    element: '#layout-editor',
                    placement: \"top\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 10000
                    }
                }, {
                    title: \"Success!\",
                    content: \"";
        // line 478
        echo __("And that is how easy it is to create a basic layout. Ready for more? Jump into the User Manual for guidance and top tips!");
        echo "\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        // Layout Designer tour
        layoutDesignerTour = window.layoutDesignerTour = new Tour({
            debug: false,
            framework: \"bootstrap3\", 
            showProgressBar: false,     // don't show the progress bar on this step only
            showProgressText: false,    // don't show the progress text on this step only
            steps: [
                {
                    container: '#layout-editor',
                    orphan: true,
                    placement: \"auto\",
                    title: \"\",
                    content: \"";
        // line 497
        echo __("This is the layout designer screen where you will add and configure content. By default, your layout is in read-only mode, and needs to be checked out, to enable editing.");
        echo "\",
                    template: next_template
                }, { // 1
                    element: '#layout-editor-topbar #actionsSubmenu',
                    reflex: true,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"";
        // line 504
        echo __("Click to open the Actions sub-menu!");
        echo "\",
                    template: no_nav_template,
                    delay:  200,
                    onShown: function (tour) {
                        // If we don't have checked  out the layout yet, got to the checkout step
                        if (!\$('#read-only-message').is(\":visible\")) {
                            tour.goTo(4);
                            return false;
                        }
                    }
                }, {
                    element: '#layout-editor-topbar #actionsSubmenu #checkoutLayout',
                    reflex: true,
                    placement: \"left\",
                    title: \"\",
                    content: \"";
        // line 519
        echo __("Open the checkout form by clicking on this option!");
        echo "\",
                    template: no_nav_template,
                    delay:  200,
                }, 
                {
                    element: '.bootbox button[data-bb-handler=\"checkout\"]',
                    reflex: true,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"";
        // line 528
        echo __("Press <b>Checkout</b>.");
        echo "\",
                    template: no_nav_template,
                    delay: 200
                }, { // 4
                    title: \"\",
                    content: \"";
        // line 533
        echo __("This is the <b>Preview</b> window, that shows previews for layouts, regions and widgets.");
        echo "\",
                    element: \"#layout-viewer-container\",
                    placement: \"bottom\",
                    delay: {show: 1500, hide: 100},
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 541
        echo __("This is the <b>Editor</b>, where we can change layout properties, region options and assigned widgets.");
        echo "\",
                    element: \"#properties-panel\",
                    placement: \"bottom\",
                    delay: 100,
                    backdrop: true,
                    template: next_template
                }, { 
                    title: \"\",
                    content: \"";
        // line 549
        echo __("Let's open the Navigator edit mode. Click on the edit button.");
        echo "\",
                    element: \"#layout-viewer-navbar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    delay: 500,
                    template: no_nav_template
                }, { //7
                    element: '#layout-navigator',
                    delay: 500,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"";
        // line 560
        echo __("This is the Navigator edit mode, where you can edit regions and change their properties.");
        echo "\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 564
        echo __("Click back to go back to the main editor.");
        echo "\",
                    element: \"#layout-navigator #close-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 571
        echo __("This is the <b>Layout Timeline</b>, which shows the total layout duration as well as the duration of assigned media.");
        echo "\",
                    element: \"#layout-timeline\",
                    placement: \"bottom\",
                    delay: 1000,
                    backdrop: true,
                    template: next_template
                }, { //10
                    title: \"\",
                    content: \"";
        // line 579
        echo __("This is the <b>Toolbar</b>, used to interact with the layout designer.");
        echo "\",
                    element: \"#layout-editor-toolbar\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 587
        echo __("Use the Toolbar tabs to select <b>Widgets</b>");
        echo "\",
                    element: \"#layout-editor-toolbar #btn-menu-2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-2.active').length > 0) {
                            tour.goTo(12);
                            return false;
                        }
                    }
                }, {
                    title: \"\",
                    content: \"";
        // line 601
        echo __("These are the widgets you can add.");
        echo "\",
                    element: \"#layout-editor-toolbar #content-2 .toolbar-pane-content\",
                    placement: \"top\",
                    delay: 100,
                    template: next_template
                }, { //13
                    title: \"\",
                    content: \"";
        // line 608
        echo __("You can take a look at how your layout will look on your displays by clicking on the Play button on the Preview window.");
        echo "\",
                    element: '#layout-viewer-navbar #play-btn',
                    placement: \"right\",
                    delay: 500,
                    template: next_template
                }, {
                    title: \"\",
                    element: '#layout-editor-topbar #actionsSubmenu',
                    content: \"";
        // line 616
        echo __("When happy with your layout you will need to publish before being able to schedule to displays.");
        echo "\",
                    placement: \"bottom\",
                    template: next_template,
                    delay: 500
                }, {
                    title: \"Success!\",
                    content: \"";
        // line 622
        echo __("And that is how easy it is to use the layout designer. Ready for more? Jump into the User Manual for guidance and top tips!");
        echo "\",
                    orphan: true,
                    template: final_template,
                    delay: 300
                }
            ]
        });

        if (hasSeenNewUserWizard === 0) {
            restartTour(tour);
        }

        \$(\"#reshowWelcomeMenuItem\").on(\"click\", function() {
            restartTour(tour);
        });
    });

    function tourStepBroken(tour, stepNumber) {
        // Restart tour and go to a stable step
        restartTour(tour, Number(stepNumber-1));
    }

    // Restart tour and/or save to prefs
    function restartTour(tour, fromStep, saveToPrefs) {
        saveToPrefs = (saveToPrefs === undefined) ? true : saveToPrefs;

        if(tour == undefined) {
            return false;
        }

        if(saveToPrefs) {
            setNewUserWizardState(false);
        }

        // Reshow the user welcome wizard
        if(tour.ended()) {
            tour.restart();
        } else if(fromStep != undefined && (fromStep != tour.getCurrentStepIndex() || tour.getCurrentStepIndex() == null)) {
            tour.restart();
            setTimeout(function() { tour.goTo(fromStep); }, 500);
        } else {
            // Start tour
            tour.start();
        }
    }

    function cmsOnElementUnavailable(tour, step) {
        var currentStep = tour.getStep(step);

        if(currentStep.onElementUnavailableStep != undefined) {
            restartTour(tour, currentStep.onElementUnavailableStep);
        } else {
            restartTour(tour, step - 1);
        }
    }

    function setNewUserWizardState(seen) {
        seen = (seen === undefined) ? true : seen;

        // If var is invalid, skip set
        if(hasSeenNewUserWizard == -1) {
            return;
        }

        if(seen) {
            // Set the new user wizard flag to 1
            hasSeenNewUserWizard = 1;

            \$.ajax({
                url: '";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("welcome.wizard.seen"), "html", null, true);
        echo "',
                type: 'PUT'
            });
        } else {
            // Set the new user wizard flag to 0
            \$.ajax({
                url: '";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("welcome.wizard.unseen"), "html", null, true);
        echo "',
                type: 'POST'
            });

            hasSeenNewUserWizard = 0;
        }
    }

</script>";
    }

    public function getTemplateName()
    {
        return "user-welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  944 => 697,  935 => 691,  863 => 622,  854 => 616,  843 => 608,  833 => 601,  816 => 587,  805 => 579,  794 => 571,  784 => 564,  777 => 560,  763 => 549,  752 => 541,  741 => 533,  733 => 528,  721 => 519,  703 => 504,  693 => 497,  671 => 478,  658 => 468,  649 => 462,  634 => 450,  624 => 443,  614 => 436,  601 => 426,  590 => 418,  579 => 410,  562 => 396,  551 => 388,  538 => 378,  520 => 363,  509 => 355,  498 => 347,  488 => 340,  478 => 333,  468 => 326,  450 => 311,  441 => 305,  423 => 290,  395 => 265,  385 => 258,  368 => 244,  355 => 234,  343 => 225,  329 => 214,  318 => 206,  307 => 198,  297 => 191,  285 => 182,  274 => 174,  260 => 163,  246 => 152,  239 => 148,  224 => 136,  208 => 123,  196 => 114,  186 => 107,  175 => 98,  167 => 93,  158 => 87,  152 => 83,  140 => 74,  131 => 68,  125 => 64,  123 => 63,  117 => 60,  113 => 59,  84 => 35,  79 => 33,  75 => 32,  64 => 28,  61 => 27,  58 => 26,  56 => 25,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
    .popover-double-width {
        max-width: 652px !important;
        background-color: #d9edf7 !important;
    }
    .popover-normal-width {
        max-width: 552px !important;
        min-width: 150px;
        background-color: #d9edf7 !important;
    }
    .padminus {
        padding-right: 5px !important;
    }
    .popover-content-large{
        font-size: large !important;
    }
    .tour .popover-title{
        background-color: #b2bfdc;
    }

</style>

<script type=\"text/javascript\">

    {% set appName = theme.getThemeConfig(\"app_name\") %}
    {% set horizontalNav = currentUser.getOptionValue(\"navigationMenuPosition\", theme.getSetting(\"NAVIGATION_MENU_POSITION\", \"vertical\")) == \"horizontal\" %}

    var hasSeenNewUserWizard = {% if currentUser.userTypeId != 0 %}{{currentUser.newUserWizard}}{% else %}-1{% endif %};
    
    \$(document).ready(function () {
        var tour, layoutDesignerTour, no_nav_template, start_template, next_template, final_template;
        final_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default' data-role='end'>{% trans \"Close\" %}</button>\";
        next_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success pull-right' data-role='next'>{% trans \"Next\" %}</button>\";
        no_nav_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div>\";
        start_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success' data-role='next'>{% trans \"Get started with the basics\" %}</button><button class='btn btn-default' data-role='end'>{% trans \"Skip this tutorial\" %}</button>\";

        // New wizard tour
        tour = window.tour = new Tour({
            debug: false,
            keyboard: false,
            framework: \"bootstrap3\", 
            showProgressBar: false,     // don't show the progress bar on this step only
            showProgressText: false,    // don't show the progress text on this step only
            highlightOpacity: 0.6,
            onElementUnavailable: cmsOnElementUnavailable,
            onEnd: function () {
                setNewUserWizardState();
            },
            onModalHidden: function(tour, stepNumber) {
                // If the modal is closed in step 19, go to next step automaticaly
                console.debug('onModalHidden');
                console.debug(stepNumber == 6);
                return (stepNumber == 6);
            },
            steps: [
                { // 0
                    orphan: true,
                    placement: \"bottom\",
                    title: \"{% trans %}Welcome to the {{ appName }} CMS!{% endtrans %}\",
                    content: \"{% trans \"We'd like to take you on a short tour of the CMS to get you up and running quickly. If you already know your way around, you can skip the tutorial\" %}\",
                    template: start_template
                }, 
                {% if horizontalNav %}
                    {
                        element: \".navbar-nav:eq(0) > li:eq(0)\",
                        placement: \"bottom\",
                        title: \"\",
                        content: \"{% trans \"The CMS main menu allows for navigation to all key areas.\" %}\",
                        template: next_template
                    }, { // 2
                        element: '.navbar-nav:eq(0) > li:eq(2)',
                        placement: \"right\",
                        title: \"\",
                        content: \"{% trans \"Start by clicking on <b>Layouts</b> under the Design section of the main menu.\" %}\",
                        reflex: true,
                        template: no_nav_template,
                        onShown: function (tour) {
                            // Open dropdown
                            \$('.navbar-nav:eq(0) > li:eq(2)').addClass('open');
                        }
                    }, 
                {% else %}
                    {
                        element: \".sidebar-main:eq(0)\",
                        placement: \"right\",
                        title: \"\",
                        content: \"{% trans \"The CMS main menu allows for navigation to all key areas.\" %}\",
                        template: next_template
                    }, { // 2
                        element: \".sidebar-list:eq(3)\",
                        placement: \"right\",
                        title: \"\",
                        content: \"{% trans \"Start by clicking on <b>Layouts</b> under the Design section of the main menu.\" %}\",
                        reflex: true,
                        template: no_nav_template
                    }, 
                {% endif %}
                {
                    element: '#layouts_wrapper',
                    placement: \"top\",
                    backdrop: true,
                    title: \"\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    },
                    content: \"{% trans \"This is the layout grid and from here is where you can add new and manage existing layouts.\" %}\",
                    template: next_template,
                    onElementUnavailableStep: 1
                }, { // 4
                    element: \".btn-success a\",
                    placement: \"left\",
                    title: \"\",
                    content: \"{% trans \"Create a new layout by clicking on <b>Add Layout</b>\" %}\",
                    reflex: true,
                    template: no_nav_template,
                    onElementUnavailableStep: 1
                }, {
                    element: \"#name\",
                    placement: \"bottom\",
                    container: '.bootbox',
                    title: \"\",
                    content: \"{% trans \"Name your layout so you can easily identify it for scheduling.\" %}\",
                    reflex: \"click change\",
                    template: no_nav_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    },
                    onElementUnavailableStep: 4
                }, { // 6
                    element: \".save-button\",
                    container: '.bootbox',
                    placement: \"top\",
                    title: \"\",
                    content: \"{% trans \"Press <b>Save</b>.\" %}\",
                    template: no_nav_template,
                    onElementUnavailableStep: 4
                },
                {
                    element: '#layout-editor',
                    placement: \"top\",
                    title: \"\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 10000
                    },
                    content: \"{% trans \"This is the layout designer screen where you will add and configure content.\" %}\",
                    template: next_template
                }, { // 8
                    title: \"\",
                    content: \"{% trans \"This is the <b>Preview</b> window, that shows previews for layouts, regions and widgets.\" %}\",
                    element: \"#layout-editor #layout-viewer-container\",
                    placement: \"bottom\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is the <b>Editor</b>, where we can change layout properties, region options and assigned widgets.\" %}\",
                    element: \"#properties-panel-parent\",
                    placement: \"bottom\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    backdrop: true,
                    template: next_template
                }, { // 10
                    title: \"\",
                    content: \"{% trans \"This is the <b>Layout Timeline</b>, which shows the total layout duration as well as the duration of assigned media.\" %}\",
                    element: \"#timeline-container\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is the <b>Toolbar</b>, used to interact with the layout designer.\" %}\",
                    element: \"#layout-editor-toolbar\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template,
                    onElementUnavailable: 10
                }, {
                    title: \"\",
                    content: \"{% trans \"Let's start by opening the Navigator edit mode. Click on the edit button.\" %}\",
                    element: \"#layout-viewer-navbar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, { // 13
                    title: \"\",
                    content: \"{% trans \"Click anywhere inside the region to edit it\" %}\",
                    element: '#layout-navigator div[data-type=\"region\"]:first',
                    smartPlacement: true,
                    delay: 500,
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Grab the Region handle, and drag to resize.\" %}\",
                    element: '#layout-navigator div[data-type=\"region\"]:first .ui-resizable-se',
                    placement: \"bottom\",
                    reflex: \"mouseover\",
                    delay: 400,
                    template: no_nav_template
                }, { // 15
                    title: \"\",
                    content: \"{% trans \"When you are happy with your positioning, click save to save changes.\" %}\",
                    element: \"#properties-panel button[data-action='save']\",
                    placement: \"left\",
                    reflex: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 1000
                    },
                    template: no_nav_template
                }, { 
                    title: \"\",
                    content: \"{% trans \"Click back to go back to the main editor.\" %}\",
                    element: \"#layout-navigator #close-btn\",
                    placement: \"right\",
                    reflex: true,
                    delay: 4000,
                    template: no_nav_template
                }, { // 17
                    title: \"\",
                    container: '#layout-editor',
                    content: \"{% trans \"You will now have an empty region that has been resized and positioned on a black background. Let's add some content!\" %}\",
                    element: '#layout-timeline .designer-region:first',
                    placement: \"bottom\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                }, { // 18
                    title: \"\",
                    content: \"{% trans \"Use the Toolbar tabs to select <b>Widgets</b>\" %}\",
                    element: \"#layout-editor-toolbar #btn-menu-2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-2.active').length > 0) {
                            tour.goTo(19);
                            return false;
                        }
                    }
                }, { // 19
                    title: \"\",
                    content: \"{% trans \"These are the widgets you can add. Find the <b>Text</b> widget using the right and left buttons.\" %}\",
                    element: \"#layout-editor-toolbar #content-2 .toolbar-pane-content\",
                    placement: \"top\",
                    template: next_template,
                    delay: 500
                }, { // 20
                    title: \"\",
                    content: \"{% trans \"Add by <b>dragging</b> the widget to a region, or clicking on the <b>plus button</b> and click on the target region. Click <b>Next</b> after adding the widget.\" %}\",
                    element: '#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]',
                    placement: \"top\",
                    template: next_template,
                    onShown: function (tour) {
                        // Check if the text widget is into view
                        function isScrolledIntoView(elem, parent) {
                            var parentViewLeft = \$(parent).offset().left;
                            var parentViewRight = parentViewLeft + \$(parent).width();

                            var elemLeft = \$(elem).offset().left;
                            var elemRight = elemLeft + \$(elem).width();

                            return ((elemRight <= parentViewRight) && (elemLeft >= parentViewLeft));
                        }

                        // Go back if the element isn't still visible
                        if (!isScrolledIntoView('#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]', '.toolbar-pane-content-container')){
                            tour.goTo(19);
                            return false;
                        }
                    },
                    next: 21
                }, { // 21
                    title: \"\",
                    content: \"{% trans \"The Layout Timeline will now show that the Text widget has been added.\" %}\",
                    element: '#layout-timeline',
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template,
                    onShown: function (tour) {
                        // If we don't have widget yet, got to the add step
                        if (\$('#layout-timeline .designer-widget').length === 0) {
                            tour.goTo(18);
                            return false;
                        }
                    },
                    next: 22
                }, { // 22
                    title: \"\",
                    content: \"{% trans \"Click on the widget in the Layout Timeline!\" %}\",
                    element: '#layout-timeline .designer-widget',
                    placement: \"bottom\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Let's edit the template now. Click in the preview window to open the text editor.\" %}\",
                    element: '#layout-viewer',
                    placement: \"right\",
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to previous step
                        if (\$('#properties-panel .form-title-widget').length === 0) {
                            tour.goTo(22);
                            return false;
                        }
                    },
                    reflex: true,
                    delay: 1000
                }, { // 24
                    title: \"\",
                    content: \"{% trans \"Add and format your text. The thin red line is showing your region border. Ensure that when you are editing, your text remains within these guidelines.\" %}\",
                    element: '#layout-viewer .viewer-element ',
                    placement: \"right\",
                    template: next_template,
                    delay: 500
                }, {
                    title: \"\",
                    content: \"{% trans \"Enter some text, apply some formatting such as font style and size.\" %}\",
                    element: '#layout-viewer .viewer-element ',
                    placement: \"right\",
                    template: next_template,
                    delay: 500
                }, { // 26
                    title: \"\",
                    content: \"{% trans \"Give an optional name to this widget.\" %}\",
                    element: '#properties-panel input#name',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                }, {
                    title: \"\",
                    content: \"{% trans \"Click in the <b>Set a duration</b> box to select that option.\" %}\",
                    element: '#properties-panel input#useDuration',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500
                }, { // 28
                    title: \"\",
                    content: \"{% trans \"Let’s override the default time to 30 seconds.\" %}\",
                    element: '#properties-panel input#duration',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                    delay: 500
                }, {
                    title: \"\",
                    content: \"{% trans \"Click <b>Save</b> to save the widget edits.\" %}\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500,
                    onShown: function (tour) {
                        // If the input duration is not visible, go back to the checkbox step
                        if (!\$('#properties-panel input#duration').is(\":visible\")) {
                            tour.goTo(27);
                            return false;
                        }
                    }
                }, { // 30
                    title: \"\",
                    content: \"{% trans \"The Region Timeline will now show the new updated duration for this Text widget.\" %}\",
                    element: '#layout-timeline .designer-widget .widgetLabel .widgetDuration',
                    placement: \"top\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                }, {
                    title: \"\",
                    content: \"{% trans \"Now change the default background from black to a colour of your choice. Click in the back button to go back to the layout options.\" %}\",
                    element: '#layout-viewer-container #back-btn',
                    placement: \"bottom\",
                    template: no_nav_template,
                    reflex: \"mousedown\",
                    delay: 500
                }, { // 32
                    title: \"\",
                    content: \"{% trans \"Edit options for the layout will open in the Layout Editor.\" %}\",
                    element: '#properties-panel',
                    placement: \"left\",
                    template: next_template,
                    delay: 500,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to previous step
                        if (\$('#properties-panel #layoutEditForm').length === 0) {
                            tour.goTo(31);
                            return false;
                        }
                    }
                }, {
                    title: \"\",
                    content: \"{% trans \"Click in the background colour field and select a colour using the colour picker.\" %}\",
                    element: '#properties-panel input#backgroundColor',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: 'click change',
                    delay: 500
                }, { // 34
                    title: \"\",
                    content: \"{% trans \"Click <b>Save</b> to save the layout edits.\" %}\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500
                },  {
                    title: \"\",
                    content: \"{% trans \"You can take a look at how your layout will look on your displays by clicking on the Play button on the Preview window.\" %}\",
                    element: '#layout-viewer-navbar #play-btn',
                    placement: \"right\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    },
                    template: next_template
                }, { // 36
                    title: \"\",
                    content: \"{% trans \"When happy with your layout you will need to publish before being able to schedule to displays.\" %}\",
                    orphan: true,
                    placement: \"top\",
                    template: next_template,
                    delay: 1500
                }, {
                    title: \"\",
                    content: \"{% trans \"Select <b>Actions</b> to see the publish option.\" %}\",
                    element: '#layout-editor-topbar #actionsSubmenu a',
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template
                }, { // 38
                    title: \"\",
                    content: \"{% trans \"Click on the <b>Publish</b> button to open the form.\" %}\",
                    element: '#layout-editor-topbar #publishLayout',
                    placement: \"bottom\",
                    reflex: true,
                    delay: 500,
                    template: no_nav_template
                }, {
                    element: '.bootbox button[data-bb-handler=\"Publish\"]',
                    reflex: true,
                    placement: \"bottom\",
                    container: '.bootbox',
                    title: \"\",
                    content: \"{% trans \"Press <b>Publish</b>.\" %}\",
                    template: no_nav_template,
                    delay: 500
                }, { // 40
                    title: \"\",
                    element: '.welcome-screen-modal .modal-dialog',
                    content: \"{% trans \"Your layout is now ready to be scheduled to displays / display groups!\" %}\",
                    element: '#layout-editor',
                    placement: \"top\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 10000
                    }
                }, {
                    title: \"Success!\",
                    content: \"{% trans \"And that is how easy it is to create a basic layout. Ready for more? Jump into the User Manual for guidance and top tips!\" %}\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        // Layout Designer tour
        layoutDesignerTour = window.layoutDesignerTour = new Tour({
            debug: false,
            framework: \"bootstrap3\", 
            showProgressBar: false,     // don't show the progress bar on this step only
            showProgressText: false,    // don't show the progress text on this step only
            steps: [
                {
                    container: '#layout-editor',
                    orphan: true,
                    placement: \"auto\",
                    title: \"\",
                    content: \"{% trans \"This is the layout designer screen where you will add and configure content. By default, your layout is in read-only mode, and needs to be checked out, to enable editing.\" %}\",
                    template: next_template
                }, { // 1
                    element: '#layout-editor-topbar #actionsSubmenu',
                    reflex: true,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"{% trans \"Click to open the Actions sub-menu!\" %}\",
                    template: no_nav_template,
                    delay:  200,
                    onShown: function (tour) {
                        // If we don't have checked  out the layout yet, got to the checkout step
                        if (!\$('#read-only-message').is(\":visible\")) {
                            tour.goTo(4);
                            return false;
                        }
                    }
                }, {
                    element: '#layout-editor-topbar #actionsSubmenu #checkoutLayout',
                    reflex: true,
                    placement: \"left\",
                    title: \"\",
                    content: \"{% trans \"Open the checkout form by clicking on this option!\" %}\",
                    template: no_nav_template,
                    delay:  200,
                }, 
                {
                    element: '.bootbox button[data-bb-handler=\"checkout\"]',
                    reflex: true,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"{% trans \"Press <b>Checkout</b>.\" %}\",
                    template: no_nav_template,
                    delay: 200
                }, { // 4
                    title: \"\",
                    content: \"{% trans \"This is the <b>Preview</b> window, that shows previews for layouts, regions and widgets.\" %}\",
                    element: \"#layout-viewer-container\",
                    placement: \"bottom\",
                    delay: {show: 1500, hide: 100},
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is the <b>Editor</b>, where we can change layout properties, region options and assigned widgets.\" %}\",
                    element: \"#properties-panel\",
                    placement: \"bottom\",
                    delay: 100,
                    backdrop: true,
                    template: next_template
                }, { 
                    title: \"\",
                    content: \"{% trans \"Let's open the Navigator edit mode. Click on the edit button.\" %}\",
                    element: \"#layout-viewer-navbar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    delay: 500,
                    template: no_nav_template
                }, { //7
                    element: '#layout-navigator',
                    delay: 500,
                    placement: \"bottom\",
                    title: \"\",
                    content: \"{% trans \"This is the Navigator edit mode, where you can edit regions and change their properties.\" %}\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Click back to go back to the main editor.\" %}\",
                    element: \"#layout-navigator #close-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is the <b>Layout Timeline</b>, which shows the total layout duration as well as the duration of assigned media.\" %}\",
                    element: \"#layout-timeline\",
                    placement: \"bottom\",
                    delay: 1000,
                    backdrop: true,
                    template: next_template
                }, { //10
                    title: \"\",
                    content: \"{% trans \"This is the <b>Toolbar</b>, used to interact with the layout designer.\" %}\",
                    element: \"#layout-editor-toolbar\",
                    placement: \"top\",
                    delay: 500,
                    backdrop: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Use the Toolbar tabs to select <b>Widgets</b>\" %}\",
                    element: \"#layout-editor-toolbar #btn-menu-2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-2.active').length > 0) {
                            tour.goTo(12);
                            return false;
                        }
                    }
                }, {
                    title: \"\",
                    content: \"{% trans \"These are the widgets you can add.\" %}\",
                    element: \"#layout-editor-toolbar #content-2 .toolbar-pane-content\",
                    placement: \"top\",
                    delay: 100,
                    template: next_template
                }, { //13
                    title: \"\",
                    content: \"{% trans \"You can take a look at how your layout will look on your displays by clicking on the Play button on the Preview window.\" %}\",
                    element: '#layout-viewer-navbar #play-btn',
                    placement: \"right\",
                    delay: 500,
                    template: next_template
                }, {
                    title: \"\",
                    element: '#layout-editor-topbar #actionsSubmenu',
                    content: \"{% trans \"When happy with your layout you will need to publish before being able to schedule to displays.\" %}\",
                    placement: \"bottom\",
                    template: next_template,
                    delay: 500
                }, {
                    title: \"Success!\",
                    content: \"{% trans \"And that is how easy it is to use the layout designer. Ready for more? Jump into the User Manual for guidance and top tips!\" %}\",
                    orphan: true,
                    template: final_template,
                    delay: 300
                }
            ]
        });

        if (hasSeenNewUserWizard === 0) {
            restartTour(tour);
        }

        \$(\"#reshowWelcomeMenuItem\").on(\"click\", function() {
            restartTour(tour);
        });
    });

    function tourStepBroken(tour, stepNumber) {
        // Restart tour and go to a stable step
        restartTour(tour, Number(stepNumber-1));
    }

    // Restart tour and/or save to prefs
    function restartTour(tour, fromStep, saveToPrefs) {
        saveToPrefs = (saveToPrefs === undefined) ? true : saveToPrefs;

        if(tour == undefined) {
            return false;
        }

        if(saveToPrefs) {
            setNewUserWizardState(false);
        }

        // Reshow the user welcome wizard
        if(tour.ended()) {
            tour.restart();
        } else if(fromStep != undefined && (fromStep != tour.getCurrentStepIndex() || tour.getCurrentStepIndex() == null)) {
            tour.restart();
            setTimeout(function() { tour.goTo(fromStep); }, 500);
        } else {
            // Start tour
            tour.start();
        }
    }

    function cmsOnElementUnavailable(tour, step) {
        var currentStep = tour.getStep(step);

        if(currentStep.onElementUnavailableStep != undefined) {
            restartTour(tour, currentStep.onElementUnavailableStep);
        } else {
            restartTour(tour, step - 1);
        }
    }

    function setNewUserWizardState(seen) {
        seen = (seen === undefined) ? true : seen;

        // If var is invalid, skip set
        if(hasSeenNewUserWizard == -1) {
            return;
        }

        if(seen) {
            // Set the new user wizard flag to 1
            hasSeenNewUserWizard = 1;

            \$.ajax({
                url: '{{ urlFor(\"welcome.wizard.seen\") }}',
                type: 'PUT'
            });
        } else {
            // Set the new user wizard flag to 0
            \$.ajax({
                url: '{{ urlFor(\"welcome.wizard.unseen\") }}',
                type: 'POST'
            });

            hasSeenNewUserWizard = 0;
        }
    }

</script>", "user-welcome.twig", "E:\\app\\laragon\\www\\xibo\\views\\user-welcome.twig");
    }
}
