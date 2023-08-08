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

/* common.twig */
class __TwigTemplate_c0726205aed9f34d774f497c2352968834e20452089961fc3d84408082b5ce42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 5
        $this->displayBlock('javaScript', $context, $blocks);
    }

    public function block_javaScript($context, array $blocks = [])
    {
        echo " 
    <script type=\"text/javascript\">

        // COMMON VARIABLES
        const serverMode = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "SERVER_MODE", []), "html", null, true);
        echo "\";
        let playlistRegionColouring =  \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "REGION_OPTIONS_COLOURING", []), "html", null, true);
        echo "\";
        let libraryUpload = ";
        // line 11
        echo twig_jsonencode_filter(($context["libraryUpload"] ?? null));
        echo ";
        var librarySearchUrl = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\";
        var libraryAddUrl = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\";
        var imageDownloadUrl = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1\";
        var uploadFormUpdateAllDefault = ";
        // line 15
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var uploadFormDeleteOldDefault = ";
        // line 16
        if (($this->getAttribute(($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", []) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var tooltipDelay = {'show': 250, 'hide': 0};
        var playlistEditorUrl = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.timeline.form"), "html", null, true);
        echo "\";
        
        // Save navbar position
        var navbarPosition = 'vertical';
        ";
        // line 22
        $context["horizontalNav"] = ($this->getAttribute(($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => $this->getAttribute(($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method")], "method") == "horizontal");
        // line 23
        echo "        ";
        if (($context["horizontalNav"] ?? null)) {
            // line 24
            echo "            navbarPosition = 'horizontal';
        ";
        }
        // line 26
        echo "
        // MODULES LIST
        var modulesList = [];
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 30
            echo "            modulesList.push(";
            echo twig_jsonencode_filter($this->getAttribute($context["module"], "getModule", [], "method"));
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        // USERS LIST
        var usersList = [];
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "            usersList.push(";
            echo twig_jsonencode_filter($context["user"]);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        // Structure with API URLs
        let urlsForApi = {
            layout: {
                designer: {
                    url: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                get: {
                    url: \"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.background.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.edit.background"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                downloadBackground: {
                    url: \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.download.background"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                preview: {
                    url: \"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.preview"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                checkout: {
                    url: \"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.checkout"), "html", null, true);
        echo "\",
                    type: 'PUT'
                }, 
                publish: {
                    url: \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.publish"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                discard: {
                    url: \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.discard"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                list: {
                    url: \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.view"), "html", null, true);
        echo "\"
                },
                status: {
                    url: \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.status"), "html", null, true);
        echo "\"
                },
                designer: {
                    url: \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer"), "html", null, true);
        echo "\"
                },
                schedule: {
                    url: \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedulenow.now.form", ["from" => "Layout"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTemplate: {
                    url: \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.from.layout.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                publishForm: {
                    url: \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.publish.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                discardForm: {
                    url: \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.discard.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            region: {
                transform: {
                    url: \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.position.all"), "html", null, true);
        echo "\",
                    type: 'PUT',
                    useMainObjectId: true
                },
                getForm: {
                    url: \"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.edit.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.edit"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                create: {
                    url: \"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.add"), "html", null, true);
        echo "\",
                    type: 'POST',
                    useMainObjectId: true
                },
                delete: {
                    url: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.delete"), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                preview: {
                    url: \"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.preview"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getPermissions:  {
                    url: \"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.permissions.form", ["entity" => "Region"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            widget: {
                getForm: {
                    url: \"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                preview: {
                    url: \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.preview"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                add: {
                    url: \"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.add"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                delete: {
                    url: \"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.delete"), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                getAudio: {
                    url: \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.audio.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveAudio:  {
                    url: \"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.audio"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getExpiry: {
                    url: \"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.expiry.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveExpiry:  {
                    url: \"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.expiry"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getTransition: {
                    url: \"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.transition.edit.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTransition:  {
                    url: \"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.transition.edit"), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getPermissions:  {
                    url: \"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.permissions.form", ["entity" => "Widget"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            library: {
                get: {
                    url: \"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            playlist: {
                get: {
                    url: \"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.edit.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addMedia: {
                    url: \"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.library.assign"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                addWidget: {
                    url: \"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.add"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                preview: {
                    url: \"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.preview"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                order: {
                    url: \"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.order"), "html", null, true);
        echo "\",
                    type: 'POST'
                }
            },
            user: {
                getPref: {
                    url: \"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                savePref: {
                    url: \"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                permissions: {
                    url: \"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.permissions.form"), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            media: {
                isUsed: {
                    url: \"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.isused"), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            }
        };

        ";
        // line 241
        echo "            // TRANSLATIONS
            var editorsTrans = {
                deleteTitle: \"";
        // line 243
        echo twig_escape_filter($this->env, __("Delete %obj%"), "js", null, true);
        echo "\",
                deleteMultipleTitle: \"";
        // line 244
        echo twig_escape_filter($this->env, __("Delete selected elements"), "js", null, true);
        echo "\",
                deleteConfirm: \"";
        // line 245
        echo twig_escape_filter($this->env, __("Are you sure? All changes related to this object will be erased"), "js", null, true);
        echo "\",
                yes: \"";
        // line 246
        echo twig_escape_filter($this->env, __("Yes"), "js", null, true);
        echo "\",
                no: \"";
        // line 247
        echo twig_escape_filter($this->env, __("No"), "js", null, true);
        echo "\",
                selectAll: \"";
        // line 248
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\",
                allChangesSaved: \"";
        // line 249
        echo twig_escape_filter($this->env, __("All changes saved!"), "js", null, true);
        echo "\",
                back: \"";
        // line 250
        echo twig_escape_filter($this->env, __("Back"), "js", null, true);
        echo "\",
                loadPropertyForObject: \"";
        // line 251
        echo twig_escape_filter($this->env, __("Load %prop% for %obj%"), "js", null, true);
        echo "\",
                loading: \"";
        // line 252
        echo twig_escape_filter($this->env, __("Loading"), "js", null, true);
        echo "\",
                resetTourNotification: \"";
        // line 253
        echo twig_escape_filter($this->env, __("Layout Designer Tour enabled!"), "js", null, true);
        echo "\",
                tooltipsDisabled: \"";
        // line 254
        echo twig_escape_filter($this->env, __("Tooltips disabled!"), "js", null, true);
        echo "\",
                tooltipsEnabled: \"";
        // line 255
        echo twig_escape_filter($this->env, __("Tooltips enabled!"), "js", null, true);
        echo "\",
                publish: \"";
        // line 256
        echo twig_escape_filter($this->env, __("Publish"), "js", null, true);
        echo "\",
                discard: \"";
        // line 257
        echo twig_escape_filter($this->env, __("Discard"), "js", null, true);
        echo "\"
            };

            var uploadTrans = {
                uploadMessage: \"";
        // line 261
        echo twig_escape_filter($this->env, __("Upload media"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 262
        echo twig_escape_filter($this->env, __("Add files"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 263
        echo twig_escape_filter($this->env, __("Start upload"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 264
        echo twig_escape_filter($this->env, __("Cancel upload"), "js", null, true);
        echo "\",
                processing: \"";
        // line 265
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                viewLibrary: \"";
        // line 266
        echo twig_escape_filter($this->env, __("View Library"), "js", null, true);
        echo "\",
            };

            var deleteMenuTrans = {
                mainMessage: \"";
        // line 270
        echo twig_escape_filter($this->env, __("Are you sure you want to remove this %obj%? This action cannot be undone."), "js", null, true);
        echo "\",
                infoDeleteMessage: \"";
        // line 271
        echo twig_escape_filter($this->env, __("This widget is linked to Media in the Library which is also in use elsewhere. If this should be deleted then please do so from the Library page."), "js", null, true);
        echo "\",
                deleteMediaFromLibraryTitle: \"";
        // line 272
        echo twig_escape_filter($this->env, __("Also delete from the Library?"), "js", null, true);
        echo "\",
                deleteMediaFromLibraryMessage: \"";
        // line 273
        echo twig_escape_filter($this->env, __("This widget is linked to Media in the Library. Check this option to also delete that Media."), "js", null, true);
        echo "\",
                deleteMultipleObjects: \"";
        // line 274
        echo twig_escape_filter($this->env, __("Are you sure you want to remove these elements? This action cannot be undone."), "js", null, true);
        echo "\"
            };

            var contextMenuTrans = {
                editAudio: \"";
        // line 278
        echo twig_escape_filter($this->env, __("Edit Attached Audio"), "js", null, true);
        echo "\",
                editExpiry: \"";
        // line 279
        echo twig_escape_filter($this->env, __("Edit Expiry Dates"), "js", null, true);
        echo "\",
                editTransIn: \"";
        // line 280
        echo twig_escape_filter($this->env, __("Edit Transition In"), "js", null, true);
        echo "\",
                editTransOut: \"";
        // line 281
        echo twig_escape_filter($this->env, __("Edit Transition Out"), "js", null, true);
        echo "\",
                editPermissions: \"";
        // line 282
        echo twig_escape_filter($this->env, __("Edit Permissions"), "js", null, true);
        echo "\",
                moveLeft: \"";
        // line 283
        echo twig_escape_filter($this->env, __("Move one step left"), "js", null, true);
        echo "\",
                moveRight: \"";
        // line 284
        echo twig_escape_filter($this->env, __("Move one step right"), "js", null, true);
        echo "\",
                moveTopLeft: \"";
        // line 285
        echo twig_escape_filter($this->env, __("Move to the top left"), "js", null, true);
        echo "\",
                moveTopRight: \"";
        // line 286
        echo twig_escape_filter($this->env, __("Move to the top right"), "js", null, true);
        echo "\",
                delete: \"";
        // line 287
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\"
            };

            var propertiesPanelTrans = {
                width: \"";
        // line 291
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                height: \"";
        // line 292
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                scale: \"";
        // line 293
        echo twig_escape_filter($this->env, __("Scale"), "js", null, true);
        echo "\"
            };

            var toolbarTrans = {
                toolbarTagsMessage: \"";
        // line 297
        echo twig_escape_filter($this->env, __("%tagCount% tags"), "js", null, true);
        echo "\",
                deleteObject: \"";
        // line 298
        echo twig_escape_filter($this->env, __("Delete selected %object%"), "js", null, true);
        echo "\",
                selectMultipleWidgets: \"";
        // line 299
        echo twig_escape_filter($this->env, __("Select multiple widgets"), "js", null, true);
        echo "\",
                changeLayout: \"";
        // line 300
        echo twig_escape_filter($this->env, __("Change Layout"), "js", null, true);
        echo "\",
                options: \"";
        // line 301
        echo twig_escape_filter($this->env, __("Options"), "js", null, true);
        echo "\",
                displayTooltipsName: \"";
        // line 302
        echo twig_escape_filter($this->env, __("Tooltips?"), "js", null, true);
        echo "\",
                displayTooltipsTitle: \"";
        // line 303
        echo twig_escape_filter($this->env, __("Show/Hide Tooltips"), "js", null, true);
        echo "\",
                resetTour: \"";
        // line 304
        echo twig_escape_filter($this->env, __("Show tour!"), "js", null, true);
        echo "\",
                resetTourTitle: \"";
        // line 305
        echo twig_escape_filter($this->env, __("Show Layout Designer tour"), "js", null, true);
        echo "\",
                createNewTab: \"";
        // line 306
        echo twig_escape_filter($this->env, __("Library Media Search"), "js", null, true);
        echo "\",
                closeAllTabs: \"";
        // line 307
        echo twig_escape_filter($this->env, __("Close all tabs"), "js", null, true);
        echo "\",
                actions: \"";
        // line 308
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                search: \"";
        // line 309
        echo twig_escape_filter($this->env, __("Search"), "js", null, true);
        echo "\",
                add: \"";
        // line 310
        echo twig_escape_filter($this->env, __("Add"), "js", null, true);
        echo "\",
                grab: \"";
        // line 311
        echo twig_escape_filter($this->env, __("Grab"), "js", null, true);
        echo "\",
                addAsFavourite: \"";
        // line 312
        echo twig_escape_filter($this->env, __("Mark as favourite"), "js", null, true);
        echo "\",
                addedToFavourites: \"";
        // line 313
        echo twig_escape_filter($this->env, __("Module added to favourites!"), "js", null, true);
        echo "\",
                moduleNavStart: \"";
        // line 314
        echo twig_escape_filter($this->env, __("Scroll to the start!"), "js", null, true);
        echo "\",
                moduleNavEnd: \"";
        // line 315
        echo twig_escape_filter($this->env, __("Scroll to the end!"), "js", null, true);
        echo "\",
                moduleNavLeft: \"";
        // line 316
        echo twig_escape_filter($this->env, __("Scroll left!"), "js", null, true);
        echo "\",
                moduleNavRight: \"";
        // line 317
        echo twig_escape_filter($this->env, __("Scroll right!"), "js", null, true);
        echo "\",
                removedFromFavourites: \"";
        // line 318
        echo twig_escape_filter($this->env, __("Module removed from favourites!"), "js", null, true);
        echo "\",
                noResults: \"";
        // line 319
        echo twig_escape_filter($this->env, __("No results for the filter!"), "js", null, true);
        echo "\",
                searchFilters: {
                    name: \"";
        // line 321
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    tag: \"";
        // line 322
        echo twig_escape_filter($this->env, __("Tag"), "js", null, true);
        echo "\",
                    type: \"";
        // line 323
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    owner: \"";
        // line 324
        echo twig_escape_filter($this->env, __("Owner"), "js", null, true);
        echo "\"
                },
                tabName: \"";
        // line 326
        echo twig_escape_filter($this->env, __("Library Search %tagId%"), "js", null, true);
        echo "\",
                tableHeader: {
                    toolsName: \"";
        // line 328
        echo twig_escape_filter($this->env, __("Tools"), "js", null, true);
        echo "\",
                    id: \"";
        // line 329
        echo twig_escape_filter($this->env, __("Id"), "js", null, true);
        echo "\",
                    name: \"";
        // line 330
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    type: \"";
        // line 331
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    tags: \"";
        // line 332
        echo twig_escape_filter($this->env, __("Tags"), "js", null, true);
        echo "\",
                    thumbnail: \"";
        // line 333
        echo twig_escape_filter($this->env, __("Thumbnail"), "js", null, true);
        echo "\"
                },
                queue: {
                    title: \"";
        // line 336
        echo twig_escape_filter($this->env, __("Media Add Queue"), "js", null, true);
        echo "\",
                    clear: \"";
        // line 337
        echo twig_escape_filter($this->env, __("Clear Queue"), "js", null, true);
        echo "\",
                    addToRegion: \"";
        // line 338
        echo twig_escape_filter($this->env, __("Add to Selected Region"), "js", null, true);
        echo "\",
                    addToPlaylist: \"";
        // line 339
        echo twig_escape_filter($this->env, __("Add to Playlist"), "js", null, true);
        echo "\",
                    selectRegion: \"";
        // line 340
        echo twig_escape_filter($this->env, __("Click in Region to Add"), "js", null, true);
        echo "\",
                    cancel: \"";
        // line 341
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\"
                },
                menuItems: {
                    toolsName: \"";
        // line 344
        echo twig_escape_filter($this->env, __("Tools"), "js", null, true);
        echo "\",
                    toolsTitle: \"";
        // line 345
        echo twig_escape_filter($this->env, __("Layout Designer tools"), "js", null, true);
        echo "\",
                    widgetsName: \"";
        // line 346
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                    widgetsTitle: \"";
        // line 347
        echo twig_escape_filter($this->env, __("Layout Designer widgets"), "js", null, true);
        echo "\",
                    libraryName: \"";
        // line 348
        echo twig_escape_filter($this->env, __("Library"), "js", null, true);
        echo "\",
                    libraryTitle: \"";
        // line 349
        echo twig_escape_filter($this->env, __("Library search"), "js", null, true);
        echo "\"
                },
                tools: {
                    region: {
                        name: \"";
        // line 353
        echo twig_escape_filter($this->env, __("Region"), "js", null, true);
        echo "\",
                        description: \"";
        // line 354
        echo twig_escape_filter($this->env, __("Add a Region"), "js", null, true);
        echo "\"
                    },
                    audio: {
                        name: \"";
        // line 357
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                        description: \"";
        // line 358
        echo twig_escape_filter($this->env, __("Upload Audio files to assign to Widgets"), "js", null, true);
        echo "\"
                    },
                    expiry: {
                        name: \"";
        // line 361
        echo twig_escape_filter($this->env, __("Expiry Dates"), "js", null, true);
        echo "\",
                        description: \"";
        // line 362
        echo twig_escape_filter($this->env, __("Enter start and end times for Widgets"), "js", null, true);
        echo "\"
                    },
                    transitionIn: {
                        name: \"";
        // line 365
        echo twig_escape_filter($this->env, __("Transition In"), "js", null, true);
        echo "\",
                        description: \"";
        // line 366
        echo twig_escape_filter($this->env, __("Apply a Transition type for the start of a media item"), "js", null, true);
        echo "\"
                    },
                    transitionOut: {
                        name: \"";
        // line 369
        echo twig_escape_filter($this->env, __("Transition Out"), "js", null, true);
        echo "\",
                        description: \"";
        // line 370
        echo twig_escape_filter($this->env, __("Apply a Transition type for the end of a media item"), "js", null, true);
        echo "\"
                    },
                    permissions: {
                        name: \"";
        // line 373
        echo twig_escape_filter($this->env, __("Permissions"), "js", null, true);
        echo "\",
                        description: \"";
        // line 374
        echo twig_escape_filter($this->env, __("Set View, Edit and Delete Permissions for Widgets and Regions"), "js", null, true);
        echo "\"
                    }
                },
                window: {
                    drag: \"";
        // line 378
        echo twig_escape_filter($this->env, __("Move Window"), "js", null, true);
        echo "\",
                    close: \"";
        // line 379
        echo twig_escape_filter($this->env, __("Close Window"), "js", null, true);
        echo "\",
                    minimise: \"";
        // line 380
        echo twig_escape_filter($this->env, __("Minimise Window"), "js", null, true);
        echo "\",
                    newTab: \"";
        // line 381
        echo twig_escape_filter($this->env, __("New Tab"), "js", null, true);
        echo "\"
                }
            };

            var topbarTrans = {
                name: \"";
        // line 386
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                nameDetail: \"";
        // line 387
        echo twig_escape_filter($this->env, __("Layout name"), "js", null, true);
        echo "\",
                duration: \"";
        // line 388
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                durationDetail: \"";
        // line 389
        echo twig_escape_filter($this->env, __("Layout duration"), "js", null, true);
        echo "\",
                dimensions: \"";
        // line 390
        echo twig_escape_filter($this->env, __("Dimensions"), "js", null, true);
        echo "\",
                dimensionsDetail: \"";
        // line 391
        echo twig_escape_filter($this->env, __("Layout dimensions"), "js", null, true);
        echo "\"
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"";
        // line 396
        echo twig_escape_filter($this->env, __("Revert %target% form save"), "js", null, true);
        echo "\",
                    order: \"";
        // line 397
        echo twig_escape_filter($this->env, __("Revert %target% order"), "js", null, true);
        echo "\",
                    transform: \"";
        // line 398
        echo twig_escape_filter($this->env, __("Revert %target% transformation"), "js", null, true);
        echo "\",
                    addWidget: \"";
        // line 399
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\",
                    addMedia: \"";
        // line 400
        echo twig_escape_filter($this->env, __("Revert %target% assignment"), "js", null, true);
        echo "\",
                    create: \"";
        // line 401
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\"
                }
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"";
        // line 406
        echo twig_escape_filter($this->env, __("Replace"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 407
        echo twig_escape_filter($this->env, __("Add Replacement"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 408
        echo twig_escape_filter($this->env, __("Start Replace"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 409
        echo twig_escape_filter($this->env, __("Cancel Replace"), "js", null, true);
        echo "\",
                processing: \"";
        // line 410
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                updateInLayouts: {
                    title: \"";
        // line 412
        echo twig_escape_filter($this->env, __("Update this media in all layouts it is assigned to?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 413
        echo twig_escape_filter($this->env, __("Note: It will only be updated in layouts you have permission to edit."), "js", null, true);
        echo "\"
                },
                deleteOldRevisions: {
                    title: \"";
        // line 416
        echo twig_escape_filter($this->env, __("Delete the old version?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 417
        echo twig_escape_filter($this->env, __("Completely remove the old version of this media item if a new file is being uploaded."), "js", null, true);
        echo "\"
                }
            };

            var errorMessagesTrans = {
                error: \"";
        // line 422
        echo twig_escape_filter($this->env, __("ERROR"), "js", null, true);
        echo "\",
                loadingLayout: \"";
        // line 423
        echo twig_escape_filter($this->env, __("There was a problem loading the Layout!"), "js", null, true);
        echo "\",
                loadingPlaylist: \"";
        // line 424
        echo twig_escape_filter($this->env, __("There was a problem loading the Playlist!"), "js", null, true);
        echo "\",
                userSavePreferencesFailed: \"";
        // line 425
        echo twig_escape_filter($this->env, __("User save preferences failed!"), "js", null, true);
        echo "\",
                userLoadPreferencesFailed: \"";
        // line 426
        echo twig_escape_filter($this->env, __("User load preferences failed!"), "js", null, true);
        echo "\",
                libraryLoadFailed: \"";
        // line 427
        echo twig_escape_filter($this->env, __("Library load failed!"), "js", null, true);
        echo "\",
                formLoadFailed: \"";
        // line 428
        echo twig_escape_filter($this->env, __("Form load failed!"), "js", null, true);
        echo "\",
                revertFailed: \"";
        // line 429
        echo twig_escape_filter($this->env, __("Revert failed: %error%"), "js", null, true);
        echo "\",
                saveOrderFailed: \"";
        // line 430
        echo twig_escape_filter($this->env, __("Save order failed: %error%"), "js", null, true);
        echo "\",
                deleteFailed: \"";
        // line 431
        echo twig_escape_filter($this->env, __("Object delete failed: %error%"), "js", null, true);
        echo "\",
                saveAllChangesFailed: \"";
        // line 432
        echo twig_escape_filter($this->env, __("Save all changes failed!"), "js", null, true);
        echo "\",
                removeAllChangesFailed: \"";
        // line 433
        echo twig_escape_filter($this->env, __("Remove all changes failed!!"), "js", null, true);
        echo "\",
                addMediaFailed: \"";
        // line 434
        echo twig_escape_filter($this->env, __("Add media failed: %error%"), "js", null, true);
        echo "\",
                addModuleFailed: \"";
        // line 435
        echo twig_escape_filter($this->env, __("Add module failed: %error%"), "js", null, true);
        echo "\",
                createRegionFailed: \"";
        // line 436
        echo twig_escape_filter($this->env, __("Create region failed: %error%"), "js", null, true);
        echo "\",
                listOrderNotChanged: \"";
        // line 437
        echo twig_escape_filter($this->env, __("List order not Changed!"), "js", null, true);
        echo "\",
                playlistOrderSave: \"";
        // line 438
        echo twig_escape_filter($this->env, __("Playlist save order failed!"), "js", null, true);
        echo "\",
                getFormFailed: \"";
        // line 439
        echo twig_escape_filter($this->env, __("Get form failed!"), "js", null, true);
        echo "\",
                transformRegionFailed: \"";
        // line 440
        echo twig_escape_filter($this->env, __("Transform region failed!"), "js", null, true);
        echo "\",
                previewFailed: \"";
        // line 441
        echo twig_escape_filter($this->env, __("Preview failed!"), "js", null, true);
        echo "\",
                noWidgetsNeedSaving: \"";
        // line 442
        echo twig_escape_filter($this->env, __("No widgets need saving!"), "js", null, true);
        echo "\"
            };

            var widgetStatusTrans = {
                setToStart: \"";
        // line 446
        echo twig_escape_filter($this->env, __("Set to start"), "js", null, true);
        echo "\",
                setToExpire: \"";
        // line 447
        echo twig_escape_filter($this->env, __("Set to expire"), "js", null, true);
        echo "\",
                expired: \"";
        // line 448
        echo twig_escape_filter($this->env, __("Expired"), "js", null, true);
        echo "\",
                startTime: \"";
        // line 449
        echo twig_escape_filter($this->env, __("Start Time"), "js", null, true);
        echo "\",
                endTime: \"";
        // line 450
        echo twig_escape_filter($this->env, __("End Time"), "js", null, true);
        echo "\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"";
        // line 454
        echo twig_escape_filter($this->env, __("Ascending"), "js", null, true);
        echo "\",
                descTitle: \"";
        // line 455
        echo twig_escape_filter($this->env, __("Descending"), "js", null, true);
        echo "\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"";
        // line 459
        echo twig_escape_filter($this->env, __("starts with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"ends-with\",
                        value: \"";
        // line 462
        echo twig_escape_filter($this->env, __("ends with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"contains\",
                        value: \"";
        // line 465
        echo twig_escape_filter($this->env, __("contains"), "js", null, true);
        echo "\"
                    }, {
                        id: \"equals\",
                        value: \"";
        // line 468
        echo twig_escape_filter($this->env, __("equals"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"";
        // line 471
        echo twig_escape_filter($this->env, __("does not start with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"";
        // line 474
        echo twig_escape_filter($this->env, __("does not end with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-contains\",
                        value: \"";
        // line 477
        echo twig_escape_filter($this->env, __("does not contain"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-equals\",
                        value: \"";
        // line 480
        echo twig_escape_filter($this->env, __("does not equal"), "js", null, true);
        echo "\"
                    }, {
                        id: \"greater-than\",
                        value: \"";
        // line 483
        echo twig_escape_filter($this->env, __("greater than"), "js", null, true);
        echo "\"
                    }, {
                        id: \"less-than\",
                        value: \"";
        // line 486
        echo twig_escape_filter($this->env, __("less than"), "js", null, true);
        echo "\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"";
        // line 492
        echo twig_escape_filter($this->env, __("Or"), "js", null, true);
        echo "\"
                    }, {
                        id: \"AND\",
                        value: \"";
        // line 495
        echo twig_escape_filter($this->env, __("And"), "js", null, true);
        echo "\"
                    }
                ]
            };
        ";
        // line 500
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "common.twig";
    }

    public function getDebugInfo()
    {
        return array (  1223 => 500,  1216 => 495,  1210 => 492,  1201 => 486,  1195 => 483,  1189 => 480,  1183 => 477,  1177 => 474,  1171 => 471,  1165 => 468,  1159 => 465,  1153 => 462,  1147 => 459,  1140 => 455,  1136 => 454,  1129 => 450,  1125 => 449,  1121 => 448,  1117 => 447,  1113 => 446,  1106 => 442,  1102 => 441,  1098 => 440,  1094 => 439,  1090 => 438,  1086 => 437,  1082 => 436,  1078 => 435,  1074 => 434,  1070 => 433,  1066 => 432,  1062 => 431,  1058 => 430,  1054 => 429,  1050 => 428,  1046 => 427,  1042 => 426,  1038 => 425,  1034 => 424,  1030 => 423,  1026 => 422,  1018 => 417,  1014 => 416,  1008 => 413,  1004 => 412,  999 => 410,  995 => 409,  991 => 408,  987 => 407,  983 => 406,  975 => 401,  971 => 400,  967 => 399,  963 => 398,  959 => 397,  955 => 396,  947 => 391,  943 => 390,  939 => 389,  935 => 388,  931 => 387,  927 => 386,  919 => 381,  915 => 380,  911 => 379,  907 => 378,  900 => 374,  896 => 373,  890 => 370,  886 => 369,  880 => 366,  876 => 365,  870 => 362,  866 => 361,  860 => 358,  856 => 357,  850 => 354,  846 => 353,  839 => 349,  835 => 348,  831 => 347,  827 => 346,  823 => 345,  819 => 344,  813 => 341,  809 => 340,  805 => 339,  801 => 338,  797 => 337,  793 => 336,  787 => 333,  783 => 332,  779 => 331,  775 => 330,  771 => 329,  767 => 328,  762 => 326,  757 => 324,  753 => 323,  749 => 322,  745 => 321,  740 => 319,  736 => 318,  732 => 317,  728 => 316,  724 => 315,  720 => 314,  716 => 313,  712 => 312,  708 => 311,  704 => 310,  700 => 309,  696 => 308,  692 => 307,  688 => 306,  684 => 305,  680 => 304,  676 => 303,  672 => 302,  668 => 301,  664 => 300,  660 => 299,  656 => 298,  652 => 297,  645 => 293,  641 => 292,  637 => 291,  630 => 287,  626 => 286,  622 => 285,  618 => 284,  614 => 283,  610 => 282,  606 => 281,  602 => 280,  598 => 279,  594 => 278,  587 => 274,  583 => 273,  579 => 272,  575 => 271,  571 => 270,  564 => 266,  560 => 265,  556 => 264,  552 => 263,  548 => 262,  544 => 261,  537 => 257,  533 => 256,  529 => 255,  525 => 254,  521 => 253,  517 => 252,  513 => 251,  509 => 250,  505 => 249,  501 => 248,  497 => 247,  493 => 246,  489 => 245,  485 => 244,  481 => 243,  477 => 241,  468 => 234,  459 => 228,  452 => 224,  445 => 220,  436 => 214,  429 => 210,  422 => 206,  415 => 202,  408 => 198,  401 => 194,  392 => 188,  383 => 182,  376 => 178,  369 => 174,  362 => 170,  355 => 166,  348 => 162,  341 => 158,  334 => 154,  327 => 150,  320 => 146,  313 => 142,  306 => 138,  297 => 132,  290 => 128,  283 => 124,  275 => 119,  268 => 115,  261 => 111,  253 => 106,  244 => 100,  237 => 96,  230 => 92,  223 => 88,  217 => 85,  211 => 82,  205 => 79,  198 => 75,  191 => 71,  184 => 67,  177 => 63,  170 => 59,  163 => 55,  156 => 51,  149 => 47,  142 => 43,  135 => 38,  126 => 36,  122 => 35,  117 => 32,  108 => 30,  104 => 29,  99 => 26,  95 => 24,  92 => 23,  90 => 22,  83 => 18,  74 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  31 => 5,);
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
    Common files ( translations and other common variables )
        Add by including in another twig file javaScript block: {% include \"common.twig\" %}
#}
{% block javaScript %} 
    <script type=\"text/javascript\">

        // COMMON VARIABLES
        const serverMode = \"{{ settings.SERVER_MODE }}\";
        let playlistRegionColouring =  \"{{ settings.REGION_OPTIONS_COLOURING }}\";
        let libraryUpload = {{ libraryUpload|json_encode|raw }};
        var librarySearchUrl = \"{{ urlFor(\"library.search\") }}\";
        var libraryAddUrl = \"{{ urlFor(\"library.add\") }}\";
        var imageDownloadUrl = \"{{ urlFor(\"library.download\") }}?preview=1\";
        var uploadFormUpdateAllDefault = {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == 1 %}true{% else %}false{% endif %};
        var uploadFormDeleteOldDefault = {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == 1 %}true{% else %}false{% endif %};
        var tooltipDelay = {'show': 250, 'hide': 0};
        var playlistEditorUrl = \"{{ urlFor(\"playlist.timeline.form\") }}\";
        
        // Save navbar position
        var navbarPosition = 'vertical';
        {% set horizontalNav = currentUser.getOptionValue(\"navigationMenuPosition\", theme.getSetting(\"NAVIGATION_MENU_POSITION\", \"vertical\")) == \"horizontal\" %}
        {% if horizontalNav %}
            navbarPosition = 'horizontal';
        {% endif %}

        // MODULES LIST
        var modulesList = [];
        {% for module in modules %}
            modulesList.push({{ module.getModule()|json_encode|raw }});
        {% endfor %}

        // USERS LIST
        var usersList = [];
        {% for user in users %}
            usersList.push({{ user|json_encode|raw }});
        {% endfor %}

        // Structure with API URLs
        let urlsForApi = {
            layout: {
                designer: {
                    url: \"{{ urlFor(\"layout.designer\") }}\",
                    type: 'GET'
                },
                get: {
                    url: \"{{ urlFor(\"layout.search\") }}\",
                    type: 'GET'
                },
                getForm: {
                    url: \"{{ urlFor(\"layout.background.form\") }}\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"{{ urlFor(\"layout.edit.background\") }}\",
                    type: 'PUT'
                },
                downloadBackground: {
                    url: \"{{ urlFor(\"layout.download.background\") }}\",
                    type: 'GET'
                },
                preview: {
                    url: \"{{ urlFor(\"layout.preview\") }}\",
                    type: 'GET'
                },
                checkout: {
                    url: \"{{ urlFor(\"layout.checkout\") }}\",
                    type: 'PUT'
                }, 
                publish: {
                    url: \"{{ urlFor(\"layout.publish\") }}\",
                    type: 'PUT'
                },
                discard: {
                    url: \"{{ urlFor(\"layout.discard\") }}\",
                    type: 'PUT'
                },
                list: {
                    url: \"{{ urlFor(\"layout.view\") }}\"
                },
                status: {
                    url: \"{{ urlFor(\"layout.status\") }}\"
                },
                designer: {
                    url: \"{{ urlFor(\"layout.designer\") }}\"
                },
                schedule: {
                    url: \"{{ urlFor(\"schedulenow.now.form\", {from: 'Layout'}) }}\",
                    type: 'GET'
                },
                saveTemplate: {
                    url: \"{{ urlFor(\"template.from.layout.form\") }}\",
                    type: 'GET'
                },
                publishForm: {
                    url: \"{{ urlFor(\"layout.publish.form\") }}\",
                    type: 'GET'
                },
                discardForm: {
                    url: \"{{ urlFor(\"layout.discard.form\") }}\",
                    type: 'GET'
                }
            },
            region: {
                transform: {
                    url: \"{{ urlFor(\"region.position.all\") }}\",
                    type: 'PUT',
                    useMainObjectId: true
                },
                getForm: {
                    url: \"{{ urlFor(\"region.edit.form\") }}\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"{{ urlFor(\"region.edit\") }}\",
                    type: 'PUT'
                },
                create: {
                    url: \"{{ urlFor(\"region.add\") }}\",
                    type: 'POST',
                    useMainObjectId: true
                },
                delete: {
                    url: \"{{ urlFor(\"region.delete\") }}\",
                    type: 'DELETE'
                },
                preview: {
                    url: \"{{ urlFor(\"region.preview\") }}\",
                    type: 'GET'
                },
                getPermissions:  {
                    url: \"{{ urlFor(\"user.permissions.form\", {entity: 'Region'}) }}\",
                    type: 'GET'
                }
            },
            widget: {
                getForm: {
                    url: \"{{ urlFor(\"module.widget.edit.form\") }}\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"{{ urlFor(\"module.widget.edit\") }}\",
                    type: 'PUT'
                },
                preview: {
                    url: \"{{ urlFor(\"region.preview\") }}\",
                    type: 'GET'
                },
                add: {
                    url: \"{{ urlFor(\"module.widget.add\") }}\",
                    type: 'POST'
                },
                delete: {
                    url: \"{{ urlFor(\"module.widget.delete\") }}\",
                    type: 'DELETE'
                },
                getAudio: {
                    url: \"{{ urlFor(\"module.widget.audio.form\") }}\",
                    type: 'GET'
                },
                saveAudio:  {
                    url: \"{{ urlFor(\"module.widget.audio\") }}\",
                    type: 'PUT'
                },
                getExpiry: {
                    url: \"{{ urlFor(\"module.widget.expiry.form\") }}\",
                    type: 'GET'
                },
                saveExpiry:  {
                    url: \"{{ urlFor(\"module.widget.expiry\") }}\",
                    type: 'PUT'
                },
                getTransition: {
                    url: \"{{ urlFor(\"module.widget.transition.edit.form\") }}\",
                    type: 'GET'
                },
                saveTransition:  {
                    url: \"{{ urlFor(\"module.widget.transition.edit\") }}\",
                    type: 'PUT'
                },
                getPermissions:  {
                    url: \"{{ urlFor(\"user.permissions.form\", {entity: 'Widget'}) }}\",
                    type: 'GET'
                }
            },
            library: {
                get: {
                    url: \"{{ urlFor(\"library.search\") }}\",
                    type: 'GET'
                }
            },
            playlist: {
                get: {
                    url: \"{{ urlFor(\"playlist.search\") }}\",
                    type: 'GET'
                },
                getForm: {
                    url: \"{{ urlFor(\"playlist.edit.form\") }}\",
                    type: 'GET'
                },
                addMedia: {
                    url: \"{{ urlFor(\"playlist.library.assign\") }}\",
                    type: 'POST'
                },
                addWidget: {
                    url: \"{{ urlFor(\"module.widget.add\") }}\",
                    type: 'POST'
                },
                preview: {
                    url: \"{{ urlFor(\"region.preview\") }}\",
                    type: 'GET'
                },
                order: {
                    url: \"{{ urlFor(\"playlist.order\") }}\",
                    type: 'POST'
                }
            },
            user: {
                getPref: {
                    url: \"{{ urlFor(\"user.pref\") }}\",
                    type: 'GET'
                },
                savePref: {
                    url: \"{{ urlFor(\"user.pref\") }}\",
                    type: 'POST'
                },
                permissions: {
                    url: \"{{ urlFor(\"user.permissions.form\") }}\",
                    type: 'GET'
                }
            },
            media: {
                isUsed: {
                    url: \"{{ urlFor(\"library.isused\") }}\",
                    type: 'GET'
                }
            }
        };

        {% autoescape \"js\" %}
            // TRANSLATIONS
            var editorsTrans = {
                deleteTitle: \"{{ \"Delete %obj%\" |trans }}\",
                deleteMultipleTitle: \"{{ \"Delete selected elements\" |trans }}\",
                deleteConfirm: \"{{ \"Are you sure? All changes related to this object will be erased\" |trans }}\",
                yes: \"{{ \"Yes\" |trans }}\",
                no: \"{{ \"No\" |trans }}\",
                selectAll: \"{{ \"Select All\" |trans }}\",
                allChangesSaved: \"{{ \"All changes saved!\" |trans }}\",
                back: \"{{ \"Back\" |trans }}\",
                loadPropertyForObject: \"{{ \"Load %prop% for %obj%\" |trans }}\",
                loading: \"{{ \"Loading\" |trans }}\",
                resetTourNotification: \"{{ \"Layout Designer Tour enabled!\" |trans }}\",
                tooltipsDisabled: \"{{ \"Tooltips disabled!\" |trans }}\",
                tooltipsEnabled: \"{{ \"Tooltips enabled!\" |trans }}\",
                publish: \"{{ \"Publish\" |trans }}\",
                discard: \"{{ \"Discard\"|trans }}\"
            };

            var uploadTrans = {
                uploadMessage: \"{{ \"Upload media\" |trans }}\",
                addFiles: \"{{ \"Add files\" |trans }}\",
                startUpload: \"{{ \"Start upload\" |trans }}\",
                cancelUpload: \"{{ \"Cancel upload\" |trans }}\",
                processing: \"{{ \"Processing...\" |trans }}\",
                viewLibrary: \"{{ \"View Library\" |trans }}\",
            };

            var deleteMenuTrans = {
                mainMessage: \"{{ \"Are you sure you want to remove this %obj%? This action cannot be undone.\" |trans }}\",
                infoDeleteMessage: \"{{ \"This widget is linked to Media in the Library which is also in use elsewhere. If this should be deleted then please do so from the Library page.\" |trans }}\",
                deleteMediaFromLibraryTitle: \"{{ \"Also delete from the Library?\" |trans }}\",
                deleteMediaFromLibraryMessage: \"{{ \"This widget is linked to Media in the Library. Check this option to also delete that Media.\" |trans }}\",
                deleteMultipleObjects: \"{{ \"Are you sure you want to remove these elements? This action cannot be undone.\"|trans }}\"
            };

            var contextMenuTrans = {
                editAudio: \"{{ \"Edit Attached Audio\" |trans }}\",
                editExpiry: \"{{ \"Edit Expiry Dates\" |trans }}\",
                editTransIn: \"{{ \"Edit Transition In\"|trans }}\",
                editTransOut: \"{{ \"Edit Transition Out\" |trans }}\",
                editPermissions: \"{{ \"Edit Permissions\" |trans }}\",
                moveLeft: \"{{ \"Move one step left\" |trans }}\",
                moveRight: \"{{ \"Move one step right\" |trans }}\",
                moveTopLeft: \"{{ \"Move to the top left\" |trans }}\",
                moveTopRight: \"{{ \"Move to the top right\" |trans }}\",
                delete: \"{{ \"Delete\"|trans }}\"
            };

            var propertiesPanelTrans = {
                width: \"{{ \"Width\" |trans }}\",
                height: \"{{ \"Height\" |trans }}\",
                scale: \"{{ \"Scale\"|trans }}\"
            };

            var toolbarTrans = {
                toolbarTagsMessage: \"{{ \"%tagCount% tags\" |trans }}\",
                deleteObject: \"{{ \"Delete selected %object%\" |trans }}\",
                selectMultipleWidgets: \"{{ \"Select multiple widgets\" |trans }}\",
                changeLayout: \"{{ \"Change Layout\" |trans }}\",
                options: \"{{ \"Options\" |trans }}\",
                displayTooltipsName: \"{{ \"Tooltips?\" |trans }}\",
                displayTooltipsTitle: \"{{ \"Show/Hide Tooltips\" |trans }}\",
                resetTour: \"{{ \"Show tour!\" |trans }}\",
                resetTourTitle: \"{{ \"Show Layout Designer tour\" |trans }}\",
                createNewTab: \"{{ \"Library Media Search\" |trans }}\",
                closeAllTabs: \"{{ \"Close all tabs\" |trans }}\",
                actions: \"{{ \"Actions\" |trans }}\",
                search: \"{{ \"Search\" |trans }}\",
                add: \"{{ \"Add\" |trans }}\",
                grab: \"{{ \"Grab\" |trans }}\",
                addAsFavourite: \"{{ \"Mark as favourite\" |trans }}\",
                addedToFavourites: \"{{ \"Module added to favourites!\" |trans }}\",
                moduleNavStart: \"{{ \"Scroll to the start!\" |trans }}\",
                moduleNavEnd: \"{{ \"Scroll to the end!\" |trans }}\",
                moduleNavLeft: \"{{ \"Scroll left!\" |trans }}\",
                moduleNavRight: \"{{ \"Scroll right!\" |trans }}\",
                removedFromFavourites: \"{{ \"Module removed from favourites!\" |trans }}\",
                noResults: \"{{ \"No results for the filter!\" |trans }}\",
                searchFilters: {
                    name: \"{{ \"Name\" |trans }}\",
                    tag: \"{{ \"Tag\" |trans }}\",
                    type: \"{{ \"Type\" |trans }}\",
                    owner: \"{{ \"Owner\"|trans }}\"
                },
                tabName: \"{{ \"Library Search %tagId%\" |trans }}\",
                tableHeader: {
                    toolsName: \"{{ \"Tools\" |trans }}\",
                    id: \"{{ \"Id\"|trans }}\",
                    name: \"{{ \"Name\"|trans }}\",
                    type: \"{{ \"Type\"|trans }}\",
                    tags: \"{{ \"Tags\"|trans }}\",
                    thumbnail: \"{{ \"Thumbnail\"|trans }}\"
                },
                queue: {
                    title: \"{{ \"Media Add Queue\"|trans }}\",
                    clear: \"{{ \"Clear Queue\"|trans }}\",
                    addToRegion: \"{{ \"Add to Selected Region\"|trans }}\",
                    addToPlaylist: \"{{ \"Add to Playlist\"|trans }}\",
                    selectRegion: \"{{ \"Click in Region to Add\"|trans }}\",
                    cancel: \"{{ \"Cancel\"|trans }}\"
                },
                menuItems: {
                    toolsName: \"{{ \"Tools\" |trans }}\",
                    toolsTitle: \"{{ \"Layout Designer tools\" |trans }}\",
                    widgetsName: \"{{ \"Widgets\" |trans }}\",
                    widgetsTitle: \"{{ \"Layout Designer widgets\" |trans }}\",
                    libraryName: \"{{ \"Library\" |trans }}\",
                    libraryTitle: \"{{ \"Library search\"|trans }}\"
                },
                tools: {
                    region: {
                        name: \"{{ \"Region\" |trans }}\",
                        description: \"{{ \"Add a Region\"|trans }}\"
                    },
                    audio: {
                        name: \"{{ \"Audio\" |trans }}\",
                        description: \"{{ \"Upload Audio files to assign to Widgets\"|trans }}\"
                    },
                    expiry: {
                        name: \"{{ \"Expiry Dates\" |trans }}\",
                        description: \"{{ \"Enter start and end times for Widgets\"|trans }}\"
                    },
                    transitionIn: {
                        name: \"{{ \"Transition In\" |trans }}\",
                        description: \"{{ \"Apply a Transition type for the start of a media item\"|trans }}\"
                    },
                    transitionOut: {
                        name: \"{{ \"Transition Out\" |trans }}\",
                        description: \"{{ \"Apply a Transition type for the end of a media item\"|trans }}\"
                    },
                    permissions: {
                        name: \"{{ \"Permissions\" |trans }}\",
                        description: \"{{ \"Set View, Edit and Delete Permissions for Widgets and Regions\"|trans }}\"
                    }
                },
                window: {
                    drag: \"{{ \"Move Window\" |trans }}\",
                    close: \"{{ \"Close Window\" |trans }}\",
                    minimise: \"{{ \"Minimise Window\" |trans }}\",
                    newTab: \"{{ \"New Tab\"|trans }}\"
                }
            };

            var topbarTrans = {
                name: \"{{ \"Name\" |trans }}\",
                nameDetail: \"{{ \"Layout name\" |trans }}\",
                duration: \"{{ \"Duration\" |trans }}\",
                durationDetail: \"{{ \"Layout duration\" |trans }}\",
                dimensions: \"{{ \"Dimensions\" |trans }}\",
                dimensionsDetail: \"{{ \"Layout dimensions\"|trans }}\"
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"{{ \"Revert %target% form save\" |trans }}\",
                    order: \"{{ \"Revert %target% order\" |trans }}\",
                    transform: \"{{ \"Revert %target% transformation\" |trans }}\",
                    addWidget: \"{{ \"Revert %target% creation\" |trans }}\",
                    addMedia: \"{{ \"Revert %target% assignment\" |trans }}\",
                    create: \"{{ \"Revert %target% creation\"|trans }}\"
                }
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"{{ \"Replace\" |trans }}\",
                addFiles: \"{{ \"Add Replacement\" |trans }}\",
                startUpload: \"{{ \"Start Replace\" |trans }}\",
                cancelUpload: \"{{ \"Cancel Replace\" |trans }}\",
                processing: \"{{ \"Processing...\" |trans }}\",
                updateInLayouts: {
                    title: \"{{ \"Update this media in all layouts it is assigned to?\" |trans }}\",
                    helpText: \"{{ \"Note: It will only be updated in layouts you have permission to edit.\"|trans }}\"
                },
                deleteOldRevisions: {
                    title: \"{{ \"Delete the old version?\" |trans }}\",
                    helpText: \"{{ \"Completely remove the old version of this media item if a new file is being uploaded.\"|trans }}\"
                }
            };

            var errorMessagesTrans = {
                error: \"{{ \"ERROR\" |trans }}\",
                loadingLayout: \"{{ \"There was a problem loading the Layout!\" |trans }}\",
                loadingPlaylist: \"{{ \"There was a problem loading the Playlist!\" |trans }}\",
                userSavePreferencesFailed: \"{{ \"User save preferences failed!\" |trans }}\",
                userLoadPreferencesFailed: \"{{ \"User load preferences failed!\" |trans }}\",
                libraryLoadFailed: \"{{ \"Library load failed!\" |trans }}\",
                formLoadFailed: \"{{ \"Form load failed!\" |trans }}\",
                revertFailed: \"{{ \"Revert failed: %error%\" |trans }}\",
                saveOrderFailed: \"{{ \"Save order failed: %error%\" |trans }}\",
                deleteFailed: \"{{ \"Object delete failed: %error%\" |trans }}\",
                saveAllChangesFailed: \"{{ \"Save all changes failed!\" |trans }}\",
                removeAllChangesFailed: \"{{ \"Remove all changes failed!!\" |trans }}\",
                addMediaFailed: \"{{ \"Add media failed: %error%\" |trans }}\",
                addModuleFailed: \"{{ \"Add module failed: %error%\" |trans }}\",
                createRegionFailed: \"{{ \"Create region failed: %error%\" |trans }}\",
                listOrderNotChanged: \"{{ \"List order not Changed!\" |trans }}\",
                playlistOrderSave: \"{{ \"Playlist save order failed!\" |trans }}\",
                getFormFailed: \"{{ \"Get form failed!\" |trans }}\",
                transformRegionFailed: \"{{ \"Transform region failed!\" |trans }}\",
                previewFailed: \"{{ \"Preview failed!\" |trans }}\",
                noWidgetsNeedSaving: \"{{ \"No widgets need saving!\"|trans }}\"
            };

            var widgetStatusTrans = {
                setToStart: \"{{ \"Set to start\" |trans }}\",
                setToExpire: \"{{ \"Set to expire\" |trans }}\",
                expired: \"{{ \"Expired\" |trans }}\",
                startTime: \"{{ \"Start Time\"|trans }}\",
                endTime: \"{{ \"End Time\"|trans }}\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"{{ \"Ascending\" |trans }}\",
                descTitle: \"{{ \"Descending\" |trans }}\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"{{ \"starts with\"|trans }}\"
                    }, {
                        id: \"ends-with\",
                        value: \"{{ \"ends with\"|trans }}\"
                    }, {
                        id: \"contains\",
                        value: \"{{ \"contains\"|trans }}\"
                    }, {
                        id: \"equals\",
                        value: \"{{ \"equals\"|trans }}\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"{{ \"does not start with\"|trans }}\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"{{ \"does not end with\"|trans }}\"
                    }, {
                        id: \"not-contains\",
                        value: \"{{ \"does not contain\"|trans }}\"
                    }, {
                        id: \"not-equals\",
                        value: \"{{ \"does not equal\"|trans }}\"
                    }, {
                        id: \"greater-than\",
                        value: \"{{ \"greater than\"|trans }}\"
                    }, {
                        id: \"less-than\",
                        value: \"{{ \"less than\"|trans }}\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"{{ \"Or\"|trans }}\"
                    }, {
                        id: \"AND\",
                        value: \"{{ \"And\"|trans }}\"
                    }
                ]
            };
        {% endautoescape %}
    </script>
{% endblock %}", "common.twig", "E:\\app\\laragon\\www\\xibo\\views\\common.twig");
    }
}
