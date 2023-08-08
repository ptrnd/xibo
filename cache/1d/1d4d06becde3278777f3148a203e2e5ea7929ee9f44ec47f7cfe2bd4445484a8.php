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

/* subplaylist-designer-javascript.twig */
class __TwigTemplate_78fbf5a22730764dd074ce40c6d9b28de63fc0bb1e6558ab7958691a11aa1e38 extends \Twig\Template
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
        // line 23
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function subplaylist_form_edit_open() {

        // Get form object
        const \$form = \$(this);

        // Bind our tooltips
        \$form.find('[data-toggle=\"tooltip\"]').tooltip();

        // Translations
        let fillTitle = \"";
        // line 36
        echo __("Fill");
        echo "\";
        let fillHelpText = \"";
        // line 37
        echo __("Fill - use the first Playlist to fill any remaining Spots");
        echo "\";
        let padTitle = \"";
        // line 38
        echo __("Pad");
        echo "\";
        let padHelpText = \"";
        // line 39
        echo __("Pad - use the first Playlist to pad any remaining Spots");
        echo "\";
        let repeatTitle = \"";
        // line 40
        echo __("Repeat");
        echo "\";
        let repeatHelpText = \"";
        // line 41
        echo __("Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled");
        echo "\";
        let noPlaylistsMessage = \"";
        // line 42
        echo __("No playlists");
        echo "\";
        let noPlaylistsHelpMessage = \"";
        // line 43
        echo __("You don't have available playlists");
        echo "\";
        let noPlaylistsAccessHelpMessage = \"";
        // line 44
        echo __("You don't have access to this playlist");
        echo "\";
        let playlistIdMessage = \"";
        // line 45
        echo __("Playlist Id ");
        echo "\";

        // Order Clause
        var subPlaylistFields = \$(\".sub-playlists\", \$form);

        // Get template
        var subPlaylistFormTemplate = formHelpers.getTemplate('subPlaylistFormTemplate');

        if(subPlaylistFields.length === 0)
            return;

        if(\$form.data().extra.subPlaylistId.length === 0) {
            // Add a template row
            subPlaylistFields.append(subPlaylistFormTemplate({
                playlists: \$form.data().extra.playlists,
                isPlaylistEditable: true,
                title: \"1\",
                subPlaylistId: \"\",
                subPlaylistIdSpots: \"\",
                subPlaylistIdSpotLength: \"\",
                subPlaylistIdSpotFill: \"\",
                buttonGlyph: \"fa-plus\",
                fillTitle: fillTitle,
                padTitle: padTitle,
                repeatTitle: repeatTitle,
                fillHelpText: fillHelpText,
                padHelpText: padHelpText,
                repeatHelpText: repeatHelpText,
                noPlaylistsMessage: noPlaylistsMessage,
                noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                playlistIdMessage: playlistIdMessage
            }));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(\$form.data().extra.subPlaylistId, function(index, field) {
                i++;

                let isPlaylistEditable = false;

                \$.each(\$form.data().extra.playlists, function(index2, field2) {
                    if(field == field2.playlistId) {
                        isPlaylistEditable = true;
                    }
                });

                subPlaylistFields.append(subPlaylistFormTemplate({
                    playlists: \$form.data().extra.playlists,
                    title: i,
                    isPlaylistEditable: isPlaylistEditable,
                    subPlaylistId: field,
                    subPlaylistIdSpots: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpots,
                    subPlaylistIdSpotLength: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpotLength,
                    subPlaylistIdSpotFill: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpotFill,
                    buttonGlyph: ((i === 1) ? \"fa-plus\" : \"fa-minus\"),
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                    noPlaylistsMessage: noPlaylistsMessage,
                    noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                    noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                    playlistIdMessage: playlistIdMessage
                }));
            });
        }

        // Nabble the resulting buttons
        subPlaylistFields.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                subPlaylistFields.append(subPlaylistFormTemplate({
                    playlists: \$form.data().extra.playlists,
                    isPlaylistEditable: true,
                    title: subPlaylistFields.find('.row-special').length + 1,
                    subPlaylistId: \"\",
                    subPlaylistIdSpots: \"\",
                    subPlaylistIdSpotLength: \"\",
                    subPlaylistIdSpotFill: \"\",
                    buttonGlyph: \"fa-minus\",
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                    noPlaylistsMessage: noPlaylistsMessage,
                    noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                    noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                    playlistIdMessage: playlistIdMessage
                }));

                subplaylist_init_row(\$form);
            } else {
                // Remove this row
                \$(this).closest(\".row-special\").remove();
            }
        });

        subplaylist_init_row(\$form);
    }

    function subplaylist_init_row(\$row) {
        \$row.find('.subPlaylistSelect').select2({
            dropdownAutoWidth: true
        });
        \$row.find('select[name=\"subPlaylistIdSpotFill[]\"]').select2({
            templateResult: function(state) {
                if (!state.id) {
                    return state.text;
                }
                return \$(state.element).data().templateResult;
            },
            dropdownAutoWidth: true,
            minimumResultsForSearch: -1
        });
    }

</script>";
    }

    public function getTemplateName()
    {
        return "subplaylist-designer-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 45,  77 => 44,  73 => 43,  69 => 42,  65 => 41,  61 => 40,  57 => 39,  53 => 38,  49 => 37,  45 => 36,  30 => 23,);
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
 * Copyright (C) 2019 Xibo Signage Ltd
 *
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */
#}

<script type=\"text/javascript\">

    // Runs after form opens
    function subplaylist_form_edit_open() {

        // Get form object
        const \$form = \$(this);

        // Bind our tooltips
        \$form.find('[data-toggle=\"tooltip\"]').tooltip();

        // Translations
        let fillTitle = \"{% trans \"Fill\" %}\";
        let fillHelpText = \"{% trans \"Fill - use the first Playlist to fill any remaining Spots\" %}\";
        let padTitle = \"{% trans \"Pad\" %}\";
        let padHelpText = \"{% trans \"Pad - use the first Playlist to pad any remaining Spots\" %}\";
        let repeatTitle = \"{% trans \"Repeat\" %}\";
        let repeatHelpText = \"{% trans \"Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled\" %}\";
        let noPlaylistsMessage = \"{% trans \"No playlists\" %}\";
        let noPlaylistsHelpMessage = \"{% trans \"You don't have available playlists\" %}\";
        let noPlaylistsAccessHelpMessage = \"{% trans \"You don't have access to this playlist\" %}\";
        let playlistIdMessage = \"{% trans \"Playlist Id \" %}\";

        // Order Clause
        var subPlaylistFields = \$(\".sub-playlists\", \$form);

        // Get template
        var subPlaylistFormTemplate = formHelpers.getTemplate('subPlaylistFormTemplate');

        if(subPlaylistFields.length === 0)
            return;

        if(\$form.data().extra.subPlaylistId.length === 0) {
            // Add a template row
            subPlaylistFields.append(subPlaylistFormTemplate({
                playlists: \$form.data().extra.playlists,
                isPlaylistEditable: true,
                title: \"1\",
                subPlaylistId: \"\",
                subPlaylistIdSpots: \"\",
                subPlaylistIdSpotLength: \"\",
                subPlaylistIdSpotFill: \"\",
                buttonGlyph: \"fa-plus\",
                fillTitle: fillTitle,
                padTitle: padTitle,
                repeatTitle: repeatTitle,
                fillHelpText: fillHelpText,
                padHelpText: padHelpText,
                repeatHelpText: repeatHelpText,
                noPlaylistsMessage: noPlaylistsMessage,
                noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                playlistIdMessage: playlistIdMessage
            }));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(\$form.data().extra.subPlaylistId, function(index, field) {
                i++;

                let isPlaylistEditable = false;

                \$.each(\$form.data().extra.playlists, function(index2, field2) {
                    if(field == field2.playlistId) {
                        isPlaylistEditable = true;
                    }
                });

                subPlaylistFields.append(subPlaylistFormTemplate({
                    playlists: \$form.data().extra.playlists,
                    title: i,
                    isPlaylistEditable: isPlaylistEditable,
                    subPlaylistId: field,
                    subPlaylistIdSpots: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpots,
                    subPlaylistIdSpotLength: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpotLength,
                    subPlaylistIdSpotFill: (\$form.data().extra.subPlaylistOptions[field] === undefined) ? \"\" : \$form.data().extra.subPlaylistOptions[field].subPlaylistIdSpotFill,
                    buttonGlyph: ((i === 1) ? \"fa-plus\" : \"fa-minus\"),
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                    noPlaylistsMessage: noPlaylistsMessage,
                    noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                    noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                    playlistIdMessage: playlistIdMessage
                }));
            });
        }

        // Nabble the resulting buttons
        subPlaylistFields.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                subPlaylistFields.append(subPlaylistFormTemplate({
                    playlists: \$form.data().extra.playlists,
                    isPlaylistEditable: true,
                    title: subPlaylistFields.find('.row-special').length + 1,
                    subPlaylistId: \"\",
                    subPlaylistIdSpots: \"\",
                    subPlaylistIdSpotLength: \"\",
                    subPlaylistIdSpotFill: \"\",
                    buttonGlyph: \"fa-minus\",
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                    noPlaylistsMessage: noPlaylistsMessage,
                    noPlaylistsHelpMessage: noPlaylistsHelpMessage,
                    noPlaylistsAccessHelpMessage: noPlaylistsAccessHelpMessage,
                    playlistIdMessage: playlistIdMessage
                }));

                subplaylist_init_row(\$form);
            } else {
                // Remove this row
                \$(this).closest(\".row-special\").remove();
            }
        });

        subplaylist_init_row(\$form);
    }

    function subplaylist_init_row(\$row) {
        \$row.find('.subPlaylistSelect').select2({
            dropdownAutoWidth: true
        });
        \$row.find('select[name=\"subPlaylistIdSpotFill[]\"]').select2({
            templateResult: function(state) {
                if (!state.id) {
                    return state.text;
                }
                return \$(state.element).data().templateResult;
            },
            dropdownAutoWidth: true,
            minimumResultsForSearch: -1
        });
    }

</script>", "subplaylist-designer-javascript.twig", "E:\\app\\laragon\\www\\xibo\\modules\\subplaylist-designer-javascript.twig");
    }
}
