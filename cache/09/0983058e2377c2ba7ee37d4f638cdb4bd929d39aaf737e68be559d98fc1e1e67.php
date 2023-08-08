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

/* forms.twig */
class __TwigTemplate_db606a0b56c7b1a90c8c82a4321df0d633f4cdf268b4512d04c1b1c1f62c410c extends \Twig\Template
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
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 21
        echo "
";
        // line 29
        echo "
";
        // line 37
        echo "
";
        // line 49
        echo "
";
        // line 59
        echo "
";
        // line 76
        echo "
";
        // line 86
        echo "
";
        // line 96
        echo "
";
        // line 106
        echo "
";
        // line 116
        echo "
";
        // line 125
        echo "
";
        // line 139
        echo "
";
        // line 153
        echo "
";
        // line 217
        echo "
";
        // line 230
        echo "
";
        // line 242
        echo "
";
        // line 254
        echo "
";
    }

    // line 2
    public function getdisabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</p>
            <span class=\"help-block\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function gethidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 13
            echo "    <input name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getraw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 17
            echo "    <div class=\"col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 18
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getmessage($__message__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 24
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            <p>";
            // line 25
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getalert($__message__ = null, $__alertType__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "alertType" => $__alertType__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 31
            echo "    <div class=\"row\">
        <div class=\"alert alert-";
            // line 32
            echo twig_escape_filter($this->env, ($context["alertType"] ?? null), "html", null, true);
            echo " col-sm-10 col-sm-offset-2 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            <p>";
            // line 33
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getbutton($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 39
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            ";
            // line 41
            if ((($context["type"] ?? null) == "link")) {
                // line 42
                echo "            <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 44
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-default\" type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</button>
            ";
            }
            // line 46
            echo "        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 50
    public function getinput($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 51
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 60
    public function getinputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 61
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-8\" style=\"padding-right: 0;\">
            <input class=\"form-control\" name=\"";
            // line 64
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 65
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
        <div class=\"col-sm-2 text-right\" style=\"padding-left: 0;\">
            ";
            // line 68
            if ((($context["buttonType"] ?? null) == "link")) {
                // line 69
                echo "                <a class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 71
                echo "                <button id=\"";
                echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" type=\"";
                echo twig_escape_filter($this->env, ($context["buttonType"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</button>
            ";
            }
            // line 73
            echo "        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function getinputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 78
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" data-role=\"tagsInputForm\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 82
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function getnumber($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 88
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 89
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"number\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 92
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getemail($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 98
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 102
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function getpassword($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 108
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 111
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 112
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function gettextarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 118
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-12\">
            <span class=\"help-block\">";
            // line 120
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
            <textarea class=\"form-control\" name=\"";
            // line 121
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 126
    public function getcheckbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 127
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\">
                <label for=\"";
            // line 130
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" id=\"";
            // line 131
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo " ";
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            echo ">
                    ";
            // line 132
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
                </label>
            </div>
            <span class=\"help-block\">";
            // line 135
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 140
    public function getradio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 141
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"radio\">
                <label for=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">
                    <input type=\"radio\" id=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["setValue"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == ($context["setValue"] ?? null))) {
                echo "checked";
            }
            echo ">
                    ";
            // line 146
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
                </label>
            </div>
            <span class=\"help-block\">";
            // line 149
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 154
    public function getdropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__optionImageValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "optionImageValue" => $__optionImageValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 155
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 156
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 158
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                echo "multiple";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["callBack"] ?? null), "html", null, true);
            echo "
                ";
            // line 159
            if ((twig_length_filter($this->env, ($context["dataAttributes"] ?? null)) > 0)) {
                // line 160
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 161
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html", null, true);
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                ";
            }
            echo ">

            ";
            // line 165
            $context["hasGroups"] = (twig_length_filter($this->env, ($context["optionGroups"] ?? null)) > 0);
            // line 166
            echo "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 167
                echo "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 168
                echo "            ";
            }
            // line 169
            echo "
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["optionGroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 171
                echo "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 172
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", []), "html", null, true);
                    echo "\">
                    ";
                    // line 173
                    $context["tempOptions"] = $this->getAttribute(($context["options"] ?? null), $this->getAttribute($context["group"], "id", []));
                    // line 174
                    echo "                ";
                } else {
                    // line 175
                    echo "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 176
                    echo "                ";
                }
                // line 177
                echo "
                ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tempOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 179
                    echo "
                    ";
                    // line 180
                    if ((($context["optionId"] ?? null) == "")) {
                        // line 181
                        echo "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 182
                        echo "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 183
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 184
                            echo "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 185
                            echo "                        ";
                        }
                        // line 186
                        echo "                    ";
                    } else {
                        // line 187
                        echo "                        ";
                        $context["itemOptionId"] = $this->getAttribute($context["option"], ($context["optionId"] ?? null));
                        // line 188
                        echo "                        ";
                        $context["itemOptionValue"] = $this->getAttribute($context["option"], ($context["optionValue"] ?? null));
                        // line 189
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 190
                            echo "                            ";
                            $context["itemOptionImageValue"] = $this->getAttribute($context["option"], ($context["optionImageValue"] ?? null));
                            // line 191
                            echo "                        ";
                        }
                        // line 192
                        echo "                    ";
                    }
                    // line 193
                    echo "
                    ";
                    // line 194
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 195
                        echo "                        ";
                        $context["selected"] = twig_in_filter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 196
                        echo "                    ";
                    } else {
                        // line 197
                        echo "                        ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 198
                        echo "                    ";
                    }
                    // line 199
                    echo "
                    <option value=\"";
                    // line 200
                    echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "selected";
                    }
                    // line 201
                    echo "                            ";
                    if (($context["itemOptionImageValue"] ?? null)) {
                        // line 202
                        echo "                                data-content=\"<span class='media'><span class='media-left'><img style='max-width: 100px' src='";
                        echo twig_escape_filter($this->env, ($context["itemOptionImageValue"] ?? null), "html", null, true);
                        echo "' /></span> <span class='media-body'>";
                        echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                        echo "</span></span>\"
                            ";
                    }
                    // line 204
                    echo "                    >";
                    echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "
                ";
                // line 207
                if (($context["hasGroups"] ?? null)) {
                    // line 208
                    echo "                    </optgroup>
                ";
                }
                // line 210
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "
            </select>
            <span class=\"help-block\">";
            // line 213
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 218
    public function getdateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 219
            echo "    <div class=\"form-group dateTimePicker ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\" data-link-combined=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 220
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"";
            // line 221
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
        <div class=\"col-sm-10\">
            ";
            // line 224
            echo "            <input class=\"form-control form-control-inline dateTimePickerDate dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_Link1\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_Link1\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-combined=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" />
            <input class=\"form-control form-control-inline dateTimePickerTime dateControl\" name=\"";
            // line 225
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_Link2\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_Link2\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-combined=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" />
            <span class=\"help-block\">";
            // line 226
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function getdate($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 232
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 233
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"";
            // line 235
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 236
            ob_start();
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 237
            echo "            <input class=\"form-control datePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
            <span class=\"help-block\">";
            // line 238
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 243
    public function gettime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 244
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 245
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"";
            // line 247
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 248
            ob_start();
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 249
            echo "            <input class=\"form-control timePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-link-format=\"hh:ii\"/>
            <span class=\"help-block\">";
            // line 250
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 255
    public function getswitch($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "labelWidth" => $__labelWidth__,
            "switchSize" => $__switchSize__,
            "onText" => $__onText__,
            "offText" => $__offText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 256
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\" title=\"";
            // line 258
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 259
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 260
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo " 
                    ";
            // line 261
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            // line 262
            echo "                    data-label-text=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 263
            if (!twig_in_filter(($context["onText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-on-text=\"";
                echo twig_escape_filter($this->env, ($context["onText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 264
            echo "                    ";
            if (!twig_in_filter(($context["offText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-off-text=\"";
                echo twig_escape_filter($this->env, ($context["offText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 265
            echo "                    ";
            if (!twig_in_filter(($context["switchSize"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo "data-size=\"";
                echo twig_escape_filter($this->env, ($context["switchSize"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "data-size=\"small\"";
            }
            // line 266
            echo "                    ";
            if (!twig_in_filter(($context["labelWidth"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-label-width=\"";
                echo twig_escape_filter($this->env, ($context["labelWidth"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 267
            echo "                    >
            </div>
            <span class=\"help-block\">";
            // line 269
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1511 => 269,  1507 => 267,  1500 => 266,  1491 => 265,  1484 => 264,  1478 => 263,  1473 => 262,  1469 => 261,  1463 => 260,  1455 => 259,  1451 => 258,  1445 => 256,  1423 => 255,  1404 => 250,  1393 => 249,  1388 => 248,  1380 => 247,  1371 => 245,  1366 => 244,  1348 => 243,  1329 => 238,  1318 => 237,  1313 => 236,  1305 => 235,  1296 => 233,  1291 => 232,  1273 => 231,  1254 => 226,  1244 => 225,  1233 => 224,  1224 => 221,  1216 => 220,  1209 => 219,  1191 => 218,  1172 => 213,  1168 => 211,  1162 => 210,  1158 => 208,  1156 => 207,  1153 => 206,  1144 => 204,  1136 => 202,  1133 => 201,  1127 => 200,  1124 => 199,  1121 => 198,  1118 => 197,  1115 => 196,  1112 => 195,  1110 => 194,  1107 => 193,  1104 => 192,  1101 => 191,  1098 => 190,  1095 => 189,  1092 => 188,  1089 => 187,  1086 => 186,  1083 => 185,  1080 => 184,  1077 => 183,  1074 => 182,  1071 => 181,  1069 => 180,  1066 => 179,  1062 => 178,  1059 => 177,  1056 => 176,  1053 => 175,  1050 => 174,  1048 => 173,  1043 => 172,  1040 => 171,  1036 => 170,  1033 => 169,  1030 => 168,  1027 => 167,  1024 => 166,  1022 => 165,  1016 => 163,  1005 => 161,  1000 => 160,  998 => 159,  986 => 158,  975 => 156,  970 => 155,  944 => 154,  925 => 149,  919 => 146,  907 => 145,  899 => 144,  892 => 141,  873 => 140,  854 => 135,  848 => 132,  834 => 131,  826 => 130,  819 => 127,  801 => 126,  774 => 121,  770 => 120,  764 => 118,  746 => 117,  727 => 112,  717 => 111,  708 => 109,  703 => 108,  685 => 107,  666 => 102,  656 => 101,  647 => 99,  642 => 98,  624 => 97,  605 => 92,  595 => 91,  586 => 89,  581 => 88,  563 => 87,  544 => 82,  534 => 81,  525 => 79,  520 => 78,  502 => 77,  485 => 73,  475 => 71,  467 => 69,  465 => 68,  459 => 65,  449 => 64,  440 => 62,  435 => 61,  413 => 60,  394 => 55,  384 => 54,  375 => 52,  370 => 51,  352 => 50,  335 => 46,  325 => 44,  317 => 42,  315 => 41,  309 => 39,  293 => 38,  274 => 33,  268 => 32,  265 => 31,  251 => 30,  232 => 25,  228 => 24,  225 => 23,  212 => 22,  194 => 18,  189 => 17,  176 => 16,  154 => 13,  141 => 12,  122 => 7,  118 => 6,  113 => 4,  108 => 3,  92 => 2,  87 => 254,  84 => 242,  81 => 230,  78 => 217,  75 => 153,  72 => 139,  69 => 125,  66 => 116,  63 => 106,  60 => 96,  57 => 86,  54 => 76,  51 => 59,  48 => 49,  45 => 37,  42 => 29,  39 => 21,  36 => 15,  33 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% macro disabled(name, title, value, helpText, groupClass) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ value }}</p>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro hidden(name, value) %}
    <input name=\"{{ name }}\" type=\"hidden\" id=\"{{ name }}\" value=\"{{ value }}\" />
{% endmacro %}

{% macro raw(text, groupClass) %}
    <div class=\"col-sm-12 {{ groupClass }}\">
        {{ text }}
    </div>
{% endmacro %}

{% macro message(message, groupClass) %}
    <div class=\"row\">
        <div class=\"col-sm-12 {{ groupClass }}\">
            <p>{{ message }}</p>
        </div>
    </div>
{% endmacro %}

{% macro alert(message, alertType, groupClass) %}
    <div class=\"row\">
        <div class=\"alert alert-{{ alertType }} col-sm-10 col-sm-offset-2 {{ groupClass }}\">
            <p>{{ message }}</p>
        </div>
    </div>
{% endmacro %}

{% macro button(title, type, link, groupClass, id) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            {% if type == \"link\" %}
            <a class=\"btn btn-default\" href=\"{{ link }}\">{{ title }}</a>
            {% else %}
            <button id=\"{{ id }}\" class=\"btn btn-default\" type=\"{{ type }}\">{{ title }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro input(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro inputWithButton(name, title, value, helpText, groupClass, validation, accessKey, buttonId, buttonTitle, buttonType, buttonLink) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-8\" style=\"padding-right: 0;\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
        <div class=\"col-sm-2 text-right\" style=\"padding-left: 0;\">
            {% if buttonType == \"link\" %}
                <a class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" href=\"{{ link }}\">{{ buttonTitle }}</a>
            {% else %}
                <button id=\"{{ buttonId }}\" class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" type=\"{{ buttonType }}\">{{ buttonTitle }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro inputWithTags(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" data-role=\"tagsInputForm\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro number(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"number\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro email(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"email\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro password(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"password\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro textarea(name, title, value, helpText, groupClass, validation, rows) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-12\">
            <span class=\"help-block\">{{ helpText }}</span>
            <textarea class=\"form-control\" name=\"{{ name }}\" id=\"{{ name }}\" rows=\"{{ rows }}\" {{ validation }}>{{ value }}</textarea>
        </div>
    </div>
{% endmacro %}

{% macro checkbox(name, title, value, helpText, groupClass, accessKey, disabled) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"checkbox\" id=\"{{ name }}\" name=\"{{ name }}\" {% if value == 1 %}checked{% endif %} {% if disabled == 1 %}disabled{% endif %}>
                    {{ title }}
                </label>
            </div>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro radio(name, id, title, value, helpText, groupClass, accessKey, setValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"radio\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"radio\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ setValue }}\" {% if value == setValue %}checked{% endif %}>
                    {{ title }}
                </label>
            </div>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro dropdown(name, type, title, value, options, optionId, optionValue, helpText, groupClass, validation, accessKey, callBack, dataAttributes, optionGroups, optionImageValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" {% if type == \"dropdownmulti\" %}multiple{% endif %} name=\"{{ name }}\" id=\"{{ name }}\" {{ callBack }}
                {% if dataAttributes|length > 0 %}
                    {% for attribute in dataAttributes %}
                        {{ attribute.name }}=\"{{ attribute.value }}\"
                    {% endfor %}
                {% endif %}>

            {% set hasGroups = optionGroups|length > 0 %}
            {% if not hasGroups %}
                {% set optionGroups = {label: \"General\"} %}
            {% endif %}

            {% for group in optionGroups %}
                {% if hasGroups %}
                    <optgroup label=\"{{ group.label }}\">
                    {% set tempOptions = attribute(options, group.id) %}
                {% else %}
                    {% set tempOptions = options %}
                {% endif %}

                {% for option in tempOptions %}

                    {% if optionId == \"\" %}
                        {% set itemOptionId = option %}
                        {% set itemOptionValue = option %}
                        {% if optionImageValue %}
                            {% set itemOptionImageValue = option %}
                        {% endif %}
                    {% else %}
                        {% set itemOptionId = attribute(option, optionId) %}
                        {% set itemOptionValue = attribute(option, optionValue) %}
                        {% if optionImageValue %}
                            {% set itemOptionImageValue = attribute(option, optionImageValue) %}
                        {% endif %}
                    {% endif %}

                    {% if type == \"dropdownmulti\" %}
                        {% set selected = (itemOptionId in value) %}
                    {% else %}
                        {% set selected = (itemOptionId == value) %}
                    {% endif %}

                    <option value=\"{{ itemOptionId }}\" {% if selected %}selected{% endif %}
                            {% if itemOptionImageValue %}
                                data-content=\"<span class='media'><span class='media-left'><img style='max-width: 100px' src='{{ itemOptionImageValue }}' /></span> <span class='media-body'>{{ itemOptionValue }}</span></span>\"
                            {% endif %}
                    >{{ itemOptionValue }}</option>
                {% endfor %}

                {% if hasGroups %}
                    </optgroup>
                {% endif %}
            {% endfor %}

            </select>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro dateTime(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group dateTimePicker {{ groupClass }}\" data-link-combined=\"{{ name }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
        <div class=\"col-sm-10\">
            {# form-control-inline brings these two columns back onto the same line (resetting form-control) #}
            <input class=\"form-control form-control-inline dateTimePickerDate dateControl\" name=\"{{ name }}_Link1\" type=\"text\" id=\"{{ name }}_Link1\" {{ validation }} data-link-combined=\"{{ name }}\" />
            <input class=\"form-control form-control-inline dateTimePickerTime dateControl\" name=\"{{ name }}_Link2\" type=\"text\" id=\"{{ name }}_Link2\" {{ validation }} data-link-combined=\"{{ name }}\" />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro date(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control datePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro time(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control timePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"hh:ii\"/>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro switch(name, title, value, helpText, labelWidth, switchSize, onText, offText, groupClass, accessKey, disabled) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\" title=\"{{ helpText }}\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"{{ name }}\" name=\"{{ name }}\" accesskey=\"{{ accessKey }}\"
                    {% if value == 1 %}checked{% endif %} 
                    {% if disabled == 1 %}disabled{% endif %}
                    data-label-text=\"{{ title }}\"
                    {% if onText not in [null, undefined, \"\"] %} data-on-text=\"{{ onText }}\"{% endif %}
                    {% if offText not in [null, undefined, \"\"] %} data-off-text=\"{{ offText }}\"{% endif %}
                    {% if switchSize not in [null, undefined, \"\"] %}data-size=\"{{ switchSize }}\"{% else %}data-size=\"small\"{% endif %}
                    {% if labelWidth not in [null, undefined, \"\"] %} data-label-width=\"{{ labelWidth }}\"{% endif %}
                    >
            </div>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}", "forms.twig", "E:\\app\\laragon\\www\\xibo\\views\\forms.twig");
    }
}
