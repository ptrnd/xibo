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

/* htmlpackage-designer-javascript.twig */
class __TwigTemplate_1b9a51c39464be6dad56e5c3c552588938dc1088bf3f8508164b22c5aed47cc5 extends \Twig\Template
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
    function htmlpackage_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');
        formHelpers.mediaEditFormOpen(this);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "htmlpackage-designer-javascript.twig";
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
 * Copyright (C) 2018 Xibo Signage Ltd
 * (htmlpackage-designer-javascript.twig)
 */
#}
<script type=\"text/javascript\">

    // Runs after form opens
    function htmlpackage_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');
        formHelpers.mediaEditFormOpen(this);
    }

</script>", "htmlpackage-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\htmlpackage-designer-javascript.twig");
    }
}
