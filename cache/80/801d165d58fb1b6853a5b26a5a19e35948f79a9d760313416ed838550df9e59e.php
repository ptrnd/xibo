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

/* shellcommand-designer-javascript.twig */
class __TwigTemplate_409292286c338cb0b625e3a7d7011695216bdcc710d346613f55b7ab502b2d82 extends \Twig\Template
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
    function shellcommand_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set command code field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#commandCode', ['.non-command-fields'], ['']);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "shellcommand-designer-javascript.twig";
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
    function shellcommand_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set command code field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#commandCode', ['.non-command-fields'], ['']);
    }

</script>", "shellcommand-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\shellcommand-designer-javascript.twig");
    }
}
