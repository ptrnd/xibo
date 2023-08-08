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

/* inline.twig */
class __TwigTemplate_655670445c9a280fd93a87abcdf3deb92df32232fbae45116c226f76bdb58ccd extends \Twig\Template
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
        // line 10
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 28
        echo "
";
        // line 40
        echo "
";
        // line 49
        echo "
";
        // line 69
        echo "
";
        // line 78
        echo "
";
        // line 87
        echo "
";
        // line 96
        echo "
";
        // line 107
        echo "
";
        // line 120
        echo "
";
        // line 168
        echo "
";
        // line 187
        echo "
";
        // line 198
        echo "
";
        // line 209
        echo "
";
        // line 220
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
        <label class=\"control-label\" title=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
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

    // line 11
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
            // line 12
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

    // line 15
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
            // line 16
            echo "    <div class=\"col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 17
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

    // line 21
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
            // line 22
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 23
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            <p>";
            // line 24
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

    // line 29
    public function getbutton($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 \">
            ";
            // line 32
            if ((($context["type"] ?? null) == "link")) {
                // line 33
                echo "                <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 35
                echo "                <button class=\"btn btn-default\" type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</button>
            ";
            }
            // line 37
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

    // line 41
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
            // line 42
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
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

    // line 50
    public function getinputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "exactTag" => $__exactTag__,
            "exactTagTitle" => $__exactTagTitle__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 51
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        ";
            // line 53
            if (($context["exactTag"] ?? null)) {
                // line 54
                echo "            <div>
                <div class=\"input-group\">
                    <input class=\"form-control\" name=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputInline\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                    <span class=\"input-group-addon\">
                        <input title=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["exactTagTitle"] ?? null), "html", null, true);
                echo "\" type=\"checkbox\" id=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\">
                    </span>
                </div>
            </div>
        ";
            } else {
                // line 63
                echo "            <div>
                <input class=\"form-control\" name=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputInline\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
            </div>
        ";
            }
            // line 67
            echo "    </div>
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

    // line 70
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
            // line 71
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"number\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
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

    // line 79
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
            // line 80
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 83
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
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

    // line 88
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
            // line 89
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" for=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
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
    public function getcheckbox($__name__ = null, $__title__ = null, $__value__ = null, $__groupClass__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "groupClass" => $__groupClass__,
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
        <div class=\"\">
            <div class=\"checkbox\">
                <input title=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" class=\"form-control\" type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo ">
                <label for=\"";
            // line 102
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
            </div>
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

    // line 108
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
            // line 109
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 \">
            <div class=\"radio\">
                <label for=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">
                    <input type=\"radio\" id=\"";
            // line 113
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
            // line 114
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
                </label>
            </div>
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

    // line 121
    public function getdropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, ...$__varargs__)
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
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 122
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" for=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <select class=\"form-control\" ";
            // line 125
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
            // line 126
            if ((twig_length_filter($this->env, ($context["dataAttributes"] ?? null)) > 0)) {
                // line 127
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 128
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html", null, true);
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "            ";
            }
            echo ">

            ";
            // line 132
            $context["hasGroups"] = (twig_length_filter($this->env, ($context["optionGroups"] ?? null)) > 0);
            // line 133
            echo "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 134
                echo "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 135
                echo "            ";
            }
            // line 136
            echo "
            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["optionGroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 138
                echo "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 139
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", []), "html", null, true);
                    echo "\">
                    ";
                    // line 140
                    $context["tempOptions"] = $this->getAttribute(($context["options"] ?? null), $this->getAttribute($context["group"], "id", []));
                    // line 141
                    echo "                ";
                } else {
                    // line 142
                    echo "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 143
                    echo "                ";
                }
                // line 144
                echo "
                ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tempOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 146
                    echo "
                    ";
                    // line 147
                    $context["itemOptionId"] = $this->getAttribute($context["option"], ($context["optionId"] ?? null));
                    // line 148
                    echo "                    ";
                    $context["itemOptionValue"] = $this->getAttribute($context["option"], ($context["optionValue"] ?? null));
                    // line 149
                    echo "
                    ";
                    // line 150
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 151
                        echo "                        ";
                        $context["selected"] = twig_in_filter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 152
                        echo "                    ";
                    } else {
                        // line 153
                        echo "                        ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 154
                        echo "                    ";
                    }
                    // line 155
                    echo "
                    <option value=\"";
                    // line 156
                    echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "
                ";
                // line 159
                if (($context["hasGroups"] ?? null)) {
                    // line 160
                    echo "                    </optgroup>
                ";
                }
                // line 162
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "
            </select>
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

    // line 169
    public function getpermissions($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 170
            echo "    <table class=\"table table-bordered\">
        <tr>
            <th>";
            // line 172
            echo __("Group");
            echo "</th>
            <th>";
            // line 173
            echo __("View");
            echo "</th>
            <th>";
            // line 174
            echo __("Edit");
            echo "</th>
            <th>";
            // line 175
            echo __("Delete");
            echo "</th>
        </tr>
        ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 178
                echo "            <tr>
                <td>";
                // line 179
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "</td>
                <td><input type=\"checkbox\" name=\"";
                // line 180
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_view"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_view_checked"] ?? null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 181
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_edit"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_edit_checked"] ?? null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 182
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_del"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_del_checked"] ?? null), "html", null, true);
                echo "></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "    </table>
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

    // line 188
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
            // line 189
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 190
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 192
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 193
            ob_start();
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 194
            echo "            <input class=\"form-control datePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
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

    // line 199
    public function getdateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
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
            // line 200
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 201
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 203
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 204
            ob_start();
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 205
            echo "            <input class=\"form-control dateMonthPicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
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

    // line 210
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
            // line 211
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 212
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 214
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 215
            ob_start();
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 216
            echo "            <input class=\"form-control timePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-link-format=\"hh:ii\" />
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

    // line 221
    public function getswitch($__name__ = null, $__title__ = null, $__value__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
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
            // line 222
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"\">
            <div class=\"checkbox\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 225
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\"
                       ";
            // line 226
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            // line 227
            echo "                        ";
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            // line 228
            echo "                       data-label-text=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
                        ";
            // line 229
            if (!twig_in_filter(($context["onText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-on-text=\"";
                echo twig_escape_filter($this->env, ($context["onText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 230
            echo "                        ";
            if (!twig_in_filter(($context["offText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-off-text=\"";
                echo twig_escape_filter($this->env, ($context["offText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 231
            echo "                        ";
            if (!twig_in_filter(($context["switchSize"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo "data-size=\"";
                echo twig_escape_filter($this->env, ($context["switchSize"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "data-size=\"small\"";
            }
            // line 232
            echo "                        ";
            if (!twig_in_filter(($context["labelWidth"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-label-width=\"";
                echo twig_escape_filter($this->env, ($context["labelWidth"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 233
            echo "                >
            </div>
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
        return "inline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1339 => 233,  1332 => 232,  1323 => 231,  1316 => 230,  1310 => 229,  1305 => 228,  1300 => 227,  1296 => 226,  1288 => 225,  1281 => 222,  1260 => 221,  1234 => 216,  1229 => 215,  1221 => 214,  1210 => 212,  1205 => 211,  1187 => 210,  1161 => 205,  1156 => 204,  1148 => 203,  1137 => 201,  1132 => 200,  1114 => 199,  1088 => 194,  1083 => 193,  1075 => 192,  1064 => 190,  1059 => 189,  1041 => 188,  1025 => 185,  1012 => 182,  1004 => 181,  996 => 180,  992 => 179,  989 => 178,  985 => 177,  980 => 175,  976 => 174,  972 => 173,  968 => 172,  964 => 170,  951 => 169,  932 => 163,  926 => 162,  922 => 160,  920 => 159,  917 => 158,  903 => 156,  900 => 155,  897 => 154,  894 => 153,  891 => 152,  888 => 151,  886 => 150,  883 => 149,  880 => 148,  878 => 147,  875 => 146,  871 => 145,  868 => 144,  865 => 143,  862 => 142,  859 => 141,  857 => 140,  852 => 139,  849 => 138,  845 => 137,  842 => 136,  839 => 135,  836 => 134,  833 => 133,  831 => 132,  825 => 130,  814 => 128,  809 => 127,  807 => 126,  795 => 125,  784 => 123,  779 => 122,  754 => 121,  733 => 114,  721 => 113,  713 => 112,  706 => 109,  687 => 108,  665 => 102,  653 => 101,  646 => 98,  630 => 97,  605 => 92,  594 => 90,  589 => 89,  571 => 88,  546 => 83,  535 => 81,  530 => 80,  512 => 79,  487 => 74,  476 => 72,  471 => 71,  453 => 70,  437 => 67,  425 => 64,  422 => 63,  410 => 58,  399 => 56,  395 => 54,  393 => 53,  383 => 52,  378 => 51,  358 => 50,  333 => 45,  322 => 43,  317 => 42,  299 => 41,  282 => 37,  274 => 35,  266 => 33,  264 => 32,  258 => 30,  243 => 29,  224 => 24,  220 => 23,  217 => 22,  204 => 21,  186 => 17,  181 => 16,  168 => 15,  146 => 12,  133 => 11,  114 => 6,  107 => 4,  102 => 3,  86 => 2,  81 => 220,  78 => 209,  75 => 198,  72 => 187,  69 => 168,  66 => 120,  63 => 107,  60 => 96,  57 => 87,  54 => 78,  51 => 69,  48 => 49,  45 => 40,  42 => 28,  39 => 20,  36 => 14,  33 => 10,  30 => 1,);
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
        <label class=\"control-label\" title=\"{{ helpText }}\">{{ title }}</label>
        <div class=\"\">
            <p class=\"form-control-static\">{{ value }}</p>
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

{% macro button(title, type, link, groupClass) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 \">
            {% if type == \"link\" %}
                <a class=\"btn btn-default\" href=\"{{ link }}\">{{ title }}</a>
            {% else %}
                <button class=\"btn btn-default\" type=\"{{ type }}\">{{ title }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro input(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro inputWithTags(name, title, value, helpText, groupClass, validation, accessKey, exactTag, exactTagTitle) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        {% if exactTag %}
            <div>
                <div class=\"input-group\">
                    <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" data-role=\"tagsInputInline\" {{ validation }} />
                    <span class=\"input-group-addon\">
                        <input title=\"{{ exactTagTitle }}\" type=\"checkbox\" id=\"{{ exactTag }}\" name=\"{{ exactTag }}\">
                    </span>
                </div>
            </div>
        {% else %}
            <div>
                <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" data-role=\"tagsInputInline\" {{ validation }} />
            </div>
        {% endif %}
    </div>
{% endmacro %}

{% macro number(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"number\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro email(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"email\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro password(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"password\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro checkbox(name, title, value, groupClass, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"\">
            <div class=\"checkbox\">
                <input title=\"{{ title }}\" class=\"form-control\" type=\"checkbox\" id=\"{{ name }}\" name=\"{{ name }}\" {% if value == 1 %}checked{% endif %}>
                <label for=\"{{ name }}\">{{ title }}</label>
            </div>
        </div>
    </div>
{% endmacro %}

{% macro radio(name, id, title, value, helpText, groupClass, accessKey, setValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 \">
            <div class=\"radio\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"radio\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ setValue }}\" {% if value == setValue %}checked{% endif %}>
                    {{ title }}
                </label>
            </div>
        </div>
    </div>
{% endmacro %}

{% macro dropdown(name, type, title, value, options, optionId, optionValue, helpText, groupClass, validation, accessKey, callBack, dataAttributes, optionGroups) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
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

                    {% set itemOptionId = attribute(option, optionId) %}
                    {% set itemOptionValue = attribute(option, optionValue) %}

                    {% if type == \"dropdownmulti\" %}
                        {% set selected = (itemOptionId in value) %}
                    {% else %}
                        {% set selected = (itemOptionId == value) %}
                    {% endif %}

                    <option value=\"{{ itemOptionId }}\" {% if selected %}selected{% endif %}>{{ itemOptionValue }}</option>
                {% endfor %}

                {% if hasGroups %}
                    </optgroup>
                {% endif %}
            {% endfor %}

            </select>
        </div>
    </div>
{% endmacro %}

{% macro permissions(name, options) %}
    <table class=\"table table-bordered\">
        <tr>
            <th>{% trans \"Group\" %}</th>
            <th>{% trans \"View\" %}</th>
            <th>{% trans \"Edit\" %}</th>
            <th>{% trans \"Delete\" %}</th>
        </tr>
        {% for item in options %}
            <tr>
                <td>{{ name }}</td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_view }}\" {{ value_view_checked }}></td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_edit }}\" {{ value_edit_checked }}></td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_del }}\" {{ value_del_checked }}></td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro date(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control datePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
        </div>
    </div>
{% endmacro %}

{% macro dateMonth(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control dateMonthPicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
        </div>
    </div>
{% endmacro %}

{% macro time(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control timePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"hh:ii\" />
        </div>
    </div>
{% endmacro %}

{% macro switch(name, title, value, labelWidth, switchSize, onText, offText, groupClass, accessKey, disabled) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"\">
            <div class=\"checkbox\">
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
        </div>
    </div>
{% endmacro %}
", "inline.twig", "E:\\app\\laragon\\www\\xibo\\views\\inline.twig");
    }
}
