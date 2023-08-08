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

/* schedule-page.twig */
class __TwigTemplate_f02c92df12ccde3297792a02c7e7220b73b207225d9a77fc010cf41813081ca1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"year\">";
        // line 16
        echo __("Year");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning active\" data-calendar-view=\"month\">";
        // line 17
        echo __("Month");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"week\">";
        // line 18
        echo __("Week");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"day\">";
        // line 19
        echo __("Day");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"agenda\">";
        // line 20
        echo __("Agenda");
        echo "</button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class='input-group date' id='dateInput'>
                    <input type='hidden' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <i class=\"glyphicon glyphicon-calendar\"></i>
                    </span>
                </button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span class=\"glyphicon glyphicon-backward\"></span> ";
        // line 31
        echo __("Prev");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-calendar-nav=\"today\">";
        // line 32
        echo __("Today");
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"next\">";
        // line 33
        echo __("Next");
        echo " <span class=\"glyphicon glyphicon-forward\"></span></button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class=\"btn btn-success XiboFormButton\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.add.form"), "html", null, true);
        echo "\">
                    ";
        // line 37
        echo __("Add Event");
        // line 38
        echo "                </button>
            </div>

            <div class=\"xibo-calendar-controls dropdown pull-right\">
                ";
        // line 43
        echo "                ";
        ob_start();
        echo __("Layout / Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        ob_start();
        echo __("Please select a Layout or Campaign for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
                <select name=\"campaignId\" id=\"campaignId\" class=\"hidden form-control\"
                    data-search-url= \"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.campaign.search"), "html", null, true);
        echo "\"
                    data-trans-campaigns= \"";
        // line 48
        echo __("Campaigns");
        echo "\"
                    data-trans-layouts= \"";
        // line 49
        echo __("Layouts");
        echo "\"
                    data-allow-clear=\"true\"
                    data-width=\"100%\"
                    title=\"";
        // line 52
        echo __("Layout / Campaign");
        echo "\"
                    data-placeholder=\"";
        // line 53
        echo __("Layout / Campaign");
        echo "\"
                    data-dropdownAutoWidth
                    >
                </select>
            </div>

            <div class=\"xibo-calendar-controls dropdown pull-right\">
                <select id=\"DisplayList\" class=\"form-control\" name=\"displayGroupIds[]\"
                        data-placeholder=\"";
        // line 61
        echo __("Displays");
        echo "\"
                        data-search-url=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.displayGroup.search"), "html", null, true);
        echo "\"
                        data-trans-groups=\"";
        // line 63
        echo __("Groups");
        echo "\"
                        data-trans-display=\"";
        // line 64
        echo __("Display");
        echo "\"
                        data-allow-clear=\"true\"
                        data-width=\"100%\"
                        data-placeholder=\"";
        // line 67
        echo __("Select Displays");
        echo "\" multiple>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["displayGroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 69
            echo "                        ";
            $context["itemOptionId"] = $this->getAttribute($context["option"], "displayGroupId");
            // line 70
            echo "                        ";
            $context["itemOptionValue"] = $this->getAttribute($context["option"], "displayGroup");
            // line 71
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
            echo "\" selected >";
            echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </select>
            </div>

            <div class=\"xibo-calendar-controls pull-right\">
                <input title=\"Show All\" type=\"checkbox\" id=\"showAll\" name=\"showAll\" data-search-url=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.displayGroup.search"), "html", null, true);
        echo "\"
                    ";
        // line 78
        if ((($context["displayGroupsShowAll"] ?? null) ==  -1)) {
            // line 79
            echo "                        checked
                    ";
        }
        // line 81
        echo "                >
                <label for=\"showAll\">";
        // line 82
        echo __("Show All");
        echo "</label>
            </div>

            <div class=\"progress pull-right\"><span id=\"calendar-progress\"></span></div>

            <h1 class=\"page-header\"></h1>
        </div>         
    </div>
    <div class=\"row\">
        <!-- Time Slider -->
        <div class=\"col-sm-12 cal-event-time-bar\" style=\"display:none;\">
            <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"-1\">
                <span class=\"fa fa-step-backward\"></span>
            </div>
            <input id=\"timePicker\" data-slider-id='timePickerSlider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"1439\" data-slider-step=\"1\" data-slider-value=\"0\" data-slider-handle=\"square\" />
            <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"1\">
                <span class=\"fa fa-step-forward\"></span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"CalendarContainer\" data-event-source=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.calendar.data"), "html", null, true);
        echo "\" data-agenda-link=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.events"), "html", null, true);
        echo "\" data-calendar-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "CALENDAR_TYPE", []), "html", null, true);
        echo "\" class=\"col-sm-12\">
            <div id=\"Calendar\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"cal-legend\">
                <ul>
                    <li class=\"event-always\"><span class=\"fa fa-retweet\"></span> ";
        // line 111
        echo __("Always showing");
        echo "</li>
                    <li class=\"event-info\"><span class=\"fa fa-desktop\"></span> ";
        // line 112
        echo __("Single Display");
        echo "</li>
                    <li class=\"event-success\"><span class=\"fa fa-desktop\"></span> ";
        // line 113
        echo __("Multi Display");
        echo "</li>
                    <li class=\"event-important\"><span class=\"fa fa-bullseye\"></span> ";
        // line 114
        echo __("Priority");
        echo "</li>
                    <li class=\"event-special\"><span class=\"fa fa-repeat\"></span> ";
        // line 115
        echo __("Recurring");
        echo "</li>
                    <li class=\"event-inverse\"><span class=\"fa fa-lock\"></span> ";
        // line 116
        echo __("View Permission Only");
        echo "</li>
                    <li class=\"event-command\"><span class=\"fa fa-wrench\"></span> ";
        // line 117
        echo __("Command");
        echo "</li>
                    <li class=\"event-interrupt\"><span class=\"fa fa-hand-paper\"></span> ";
        // line 118
        echo __("Interrupt");
        echo "</li>
                    <li class=\"event-geo-location\"><span class=\"fa fa-map-marker\"></span> ";
        // line 119
        echo __("Geo Location");
        echo "</li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 126
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        // line 127
        echo "    ";
        // line 314
        echo "
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-xs-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-xs-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-xs-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.isAlways == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-xs-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-xs-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-xs-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event <% if (event.lines < 1) { %>day-event-small<% } %> day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-xs-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-xs-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"day\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>

                <% if (events.length > 0) { %>
                    <span class=\"cal-month-day-number-events label label-info\" data-toggle=\"tooltip\" title=\"";
        echo __("Number of events");
        // line 552
        echo "\"><%= events.length %></span>
                <% } %>

                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";

            if (event.event.isAlways != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.isAlways == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority == 1) {
            eventClass = \"event-important\";
            eventIcon = \"fa-bullseye\";
            }

            if (event.event.eventTypeId == 4) {
                eventIcon = \"fa-hand-paper\";
            }

            if (event.event.isGeoAware === 1) {
                eventIcon = \"fa-map-marker\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                   data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                   data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"panel with-nav-tabs panel-default agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 1) { %>
                        <div class=\"panel-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"active\">
                                        <% } else { %>
                                            <li>
                                        <% }; %>
                                        
                                        <%
                                            // If it is a simple display show an 
                                            var displayGroupIcon = \"\";
                                            if (displayGroup['isDisplaySpecific'] == 0)
                                                displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                        %>
                                        
                                        <a data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                            <%= (displayGroupIcon + displayGroup['name']) %>
                                        </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"panel-body\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       ";
        echo "
                       <!-- Request failed - Show Error Message -->
                       <div class=\"text-danger text-center\">
                           <% if (agenda.errorMessage == 'display_not_selected') { %>
                               <p>";
        // line 556
        echo __("Display not selected!");
        echo "</p>
                           <% } else if (agenda.errorMessage == 'all_displays_selected') { %>
                               <p>";
        // line 558
        echo __("Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!");
        echo "</p>
                           <% } else if (agenda.errorMessage == 'no_events') { %>
                               <p>";
        // line 560
        echo __("No events for the chosen Display/Display Group on the selected date!");
        echo "</p>    
                           <% } else  if (agenda.errorMessage == 'request_failed') { %>
                               <p>";
        // line 562
        echo __("Data request failed!");
        echo "</p>
                           <% } %>
                       </div>
                       ";
        // line 617
        echo "
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-xs-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane fade in <%= isActive %> container-fluid\">
                                        <% if(typeof resultItem.events != 'undefined') { %>
                                            <div class=\"col-lg-9 agenda-col\">
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 4) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 5) %>
                                            </div>
                                            <div class=\"col-lg-3 agenda-col\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-6 col-lg-12 agenda-col\">
                                                        <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                    </div> 
                                                    <div class=\"col-xs-6 col-lg-12 agenda-col\">
                                                        <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                                    </div>
                                                </div>
                                            </div>
                                         <% } %>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table class=\"table agenda-table agenda-table-layouts\" data-type=\"layouts\" width=\"100%\">
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"10\">
                            <% if (layouts.type == 1) { %>
                                ";
        echo __("Layouts");
        // line 619
        echo "</span>
                            <% } else if (layouts.type == 3) { %>
                                ";
        echo __("Overlay Layouts");
        // line 621
        echo "
                            <% } else if (layouts.type == 4) { %>
                                ";
        echo __("Interrupt Layouts");
        // line 623
        echo "
                            <% } else if (layouts.type == 5) { %>
                                ";
        echo __("Campaign Layouts");
        // line 626
        echo "
                            <% } %>
                            
                            <span class=\"pull-right badge\" title=\"";
        echo __("Number of Layouts");
        // line 631
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                <%= layouts.length %>
                            </span>
                        </th>
                    </tr>
                    ";
        echo "
                    <tr>
                        <th></th>
                        <th>";
        // line 634
        echo __("ID");
        echo "</th>
                        <th>";
        // line 635
        echo __("Layout Name");
        echo "</th>
                        <th>";
        // line 636
        echo __("Status");
        echo "</th>
                        <th>";
        // line 637
        echo __("From Date");
        echo "</th>
                        <th>";
        // line 638
        echo __("To Date");
        echo "</th>
                        <th>";
        // line 639
        echo __("Layout Duration");
        echo "</th>
                        <th>";
        // line 640
        echo __("Display Order");
        echo "</th>
                        <th>";
        // line 641
        echo __("Priority");
        echo "</th>
                        <th>";
        // line 642
        echo __("Visible");
        echo "</th>
                    </tr>
                    ";
        // line 654
        echo "
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"";
        echo __("This layout will not be shown as there are higher priority layouts scheduled at this time");
        // line 673
        echo "\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.isAlways == 1) { %>
                                <td>";
        echo __("Always");
        // line 699
        echo "</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\" data-type=\"displaygroups\"  width=\"100%\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">";
        // line 702
        echo __("Display Groups");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 706
        echo __("ID");
        echo "</th>
                        <th>";
        // line 707
        echo __("Name");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 730
        echo "
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\" data-type=\"campaigns\"  width=\"100%\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">";
        // line 733
        echo __("Campaigns");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 737
        echo __("ID");
        echo "</th>
                        <th>";
        // line 738
        echo __("Name");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 777
        echo "
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                <a href=\"<%= layout.link %>\"><%= layout.name %></a>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\" data-event-start=\"<%= schedule.fromDt %>\" data-event-end=\"<%= schedule.toDt %>\">
                    ";
        echo "
                        ";
        // line 778
        echo __("Schedule");
        // line 779
        echo "                    ";
        // line 810
        echo "
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>


        <script type=\"text/x-handlebars-template\" id=\"reminderEventTemplate\">
            <div class=\"form-group\">
                <input class=\"form-control\" name=\"reminder_scheduleReminderId[]\" type=\"hidden\" value=\"{{ scheduleReminderId }}\" />

                <div class=\"col-sm-2\">
                    <label for=\"reminder_value[]\">
                        <input class=\"form-control\" name=\"reminder_value[]\" type=\"number\" value=\"{{ value }}\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <label for=\"reminder_type[]\">
                        <select class=\"form-control\" name=\"reminder_type[]\">
                            <option value=\"1\" {{#eq type 1}}selected{{/eq}}>";
        echo __("Minute");
        // line 811
        echo "</option>
                            <option value=\"2\" {{#eq type 2}}selected{{/eq}}>";
        echo __("Hour");
        // line 812
        echo "</option>
                            <option value=\"3\" {{#eq type 3}}selected{{/eq}}>";
        echo __("Day");
        // line 813
        echo "</option>
                            <option value=\"4\" {{#eq type 4}}selected{{/eq}}>";
        echo __("Week");
        // line 814
        echo "</option>
                            <option value=\"5\" {{#eq type 5}}selected{{/eq}}>";
        echo __("Month");
        // line 821
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_option[]\">
                        <select class=\"form-control\" name=\"reminder_option[]\">
                            <option value=\"1\" {{#eq option 1}}selected{{/eq}}>";
        echo __("Before schedule starts");
        // line 822
        echo "</option>
                            <option value=\"2\" {{#eq option 2}}selected{{/eq}}>";
        echo __("After schedule starts");
        // line 823
        echo "</option>
                            <option value=\"3\" {{#eq option 3}}selected{{/eq}}>";
        echo __("Before schedule ends");
        // line 824
        echo "</option>
                            <option value=\"4\" {{#eq option 4}}selected{{/eq}}>";
        echo __("After schedule ends");
        // line 831
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_isEmail[]\">
                        <input type=\"checkbox\" name=\"reminder_isEmail[]\" {{#eq isEmail 1}}checked{{/eq}}/>
                        ";
        echo __("Notify by email?");
        // line 841
        echo "
                        <input type=\"hidden\" name=\"reminder_isEmailHidden[]\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
        </script>

        ";
        echo "
";
    }

    // line 844
    public function block_javaScript($context, array $blocks = [])
    {
        // line 845
        echo "    <script type=\"text/javascript\">
\t\t// We are using this variable in xibo-calendar.js
        var scheduleRecurrenceDeleteUrl = \"";
        // line 847
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.recurrence.delete.form"), "html", null, true);
        echo "\";

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        // Init campaign select2
        \$(function() {
            // Select lists
            const dialog = 'body';

            let \$campaignSelect = \$('.xibo-calendar-controls #campaignId');
            \$campaignSelect.select2({
                dropdownParent: \$(dialog),
                ajax: {
                    url: \$campaignSelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    placeholder: 'This is my placeholder',
                    allowClear: true,
                    data: function(params) {

                        var query = {
                            isLayoutSpecific: -1,
                            retired: 0,
                            totalDuration: 0,
                            name: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isLayoutSpecific\"
                                },
                                {
                                    \"data\": \"campaign\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };

                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }

                        return query;
                    },
                    processResults: function(data, params) {

                        var results = [];
                        var campaigns = [];
                        var layouts = [];

                        \$.each(data.data, function(index, element) {
                            if (element.isLayoutSpecific === 1) {
                                layouts.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            } else {
                                campaigns.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            }
                        });

                        if (campaigns.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transCampaigns'),
                                \"children\": campaigns
                            })
                        }

                        if (layouts.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transLayouts'),
                                \"children\": layouts
                            })
                        }

                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;

                        return {
                            results: results,
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            let \$displaySelect = \$('#DisplayList', dialog);
            \$displaySelect.select2({
                dropdownParent: \$(dialog),
                dropdownAutoWidth: true,
                ajax: {
                    url: \$displaySelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    data: function(params) {
                        const query = {
                            isDisplaySpecific: -1,
                            forSchedule: 1,
                            displayGroup: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isDisplaySpecific\"
                                },
                                {
                                    \"data\": \"displayGroup\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };
                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }
                        return query;
                    },
                    processResults: function(data, params) {
                        var groups = [];
                        var displays = [];
                        \$.each(data.data, function(index, element) {
                            if (element.isDisplaySpecific === 1) {
                                displays.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            } else {
                                groups.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            }
                        });
                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;
                        return {
                            results: [
                                {
                                    \"text\": \$displaySelect.data('transGroups'),
                                    \"children\": groups
                                },{
                                    \"text\": \$displaySelect.data('transDisplay'),
                                    \"children\": displays
                                }
                            ],
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            }).on('select2:unselecting', function() {
                // Prevent the ajax request when we deselect an option ( change will still be called )
                var opts = \$(this).data('select2').options;
                opts.set('disabled', true);

                setTimeout(function() {
                    opts.set('disabled', false);
                }, 100);
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            // Set up our show all selector control
            \$('#showAll', dialog).on('change', function() {
                setTimeout(calendar.view(), 1000);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "schedule-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1155 => 847,  1151 => 845,  1148 => 844,  1132 => 841,  1122 => 831,  1118 => 824,  1114 => 823,  1110 => 822,  1100 => 821,  1096 => 814,  1092 => 813,  1088 => 812,  1084 => 811,  1050 => 810,  1048 => 779,  1046 => 778,  1006 => 777,  1000 => 738,  996 => 737,  989 => 733,  963 => 730,  957 => 707,  953 => 706,  946 => 702,  914 => 699,  892 => 673,  879 => 654,  874 => 642,  870 => 641,  866 => 640,  862 => 639,  858 => 638,  854 => 637,  850 => 636,  846 => 635,  842 => 634,  831 => 631,  825 => 626,  820 => 623,  815 => 621,  810 => 619,  755 => 617,  749 => 562,  744 => 560,  739 => 558,  734 => 556,  489 => 552,  299 => 314,  297 => 127,  294 => 126,  284 => 119,  280 => 118,  276 => 117,  272 => 116,  268 => 115,  264 => 114,  260 => 113,  256 => 112,  252 => 111,  237 => 103,  213 => 82,  210 => 81,  206 => 79,  204 => 78,  200 => 77,  194 => 73,  183 => 71,  180 => 70,  177 => 69,  173 => 68,  169 => 67,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  140 => 53,  136 => 52,  130 => 49,  126 => 48,  122 => 47,  118 => 45,  113 => 44,  108 => 43,  102 => 38,  100 => 37,  96 => 36,  90 => 33,  86 => 32,  82 => 31,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  47 => 13,  44 => 12,  39 => 9,  37 => 10,  31 => 9,);
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
 * Copyright (C) 2015 Spring Signage Ltd
 * (\${FILE_NAME})
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"year\">{% trans \"Year\" %}</button>
                <button type=\"button\" class=\"btn btn-warning active\" data-calendar-view=\"month\">{% trans \"Month\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"week\">{% trans \"Week\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"day\">{% trans \"Day\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"agenda\">{% trans \"Agenda\" %}</button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class='input-group date' id='dateInput'>
                    <input type='hidden' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <i class=\"glyphicon glyphicon-calendar\"></i>
                    </span>
                </button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span class=\"glyphicon glyphicon-backward\"></span> {% trans \"Prev\" %}</button>
                <button type=\"button\" class=\"btn btn-default\" data-calendar-nav=\"today\">{% trans \"Today\" %}</button>
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"next\">{% trans \"Next\" %} <span class=\"glyphicon glyphicon-forward\"></span></button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class=\"btn btn-success XiboFormButton\" href=\"{{ urlFor(\"schedule.add.form\") }}\">
                    {% trans \"Add Event\" %}
                </button>
            </div>

            <div class=\"xibo-calendar-controls dropdown pull-right\">
                {# Campaign / Layout list. We want to build two arrays for us to use. #}
                {% set title %}{% trans \"Layout / Campaign\" %}{% endset %}
                {% set helpText %}{% trans \"Please select a Layout or Campaign for this Event to show\" %}{% endset %}

                <select name=\"campaignId\" id=\"campaignId\" class=\"hidden form-control\"
                    data-search-url= \"{{ urlFor(\"schedule.campaign.search\") }}\"
                    data-trans-campaigns= \"{% trans \"Campaigns\" %}\"
                    data-trans-layouts= \"{% trans \"Layouts\" %}\"
                    data-allow-clear=\"true\"
                    data-width=\"100%\"
                    title=\"{% trans \"Layout / Campaign\" %}\"
                    data-placeholder=\"{% trans \"Layout / Campaign\" %}\"
                    data-dropdownAutoWidth
                    >
                </select>
            </div>

            <div class=\"xibo-calendar-controls dropdown pull-right\">
                <select id=\"DisplayList\" class=\"form-control\" name=\"displayGroupIds[]\"
                        data-placeholder=\"{% trans \"Displays\" %}\"
                        data-search-url=\"{{ urlFor(\"schedule.displayGroup.search\") }}\"
                        data-trans-groups=\"{% trans \"Groups\" %}\"
                        data-trans-display=\"{% trans \"Display\" %}\"
                        data-allow-clear=\"true\"
                        data-width=\"100%\"
                        data-placeholder=\"{% trans \"Select Displays\" %}\" multiple>
                    {% for option in displayGroups %}
                        {% set itemOptionId = attribute(option, \"displayGroupId\") %}
                        {% set itemOptionValue = attribute(option, \"displayGroup\") %}
                        <option value=\"{{ itemOptionId }}\" selected >{{ itemOptionValue }}</option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"xibo-calendar-controls pull-right\">
                <input title=\"Show All\" type=\"checkbox\" id=\"showAll\" name=\"showAll\" data-search-url=\"{{ urlFor(\"schedule.displayGroup.search\") }}\"
                    {% if displayGroupsShowAll == -1 %}
                        checked
                    {% endif %}
                >
                <label for=\"showAll\">{% trans \"Show All\" %}</label>
            </div>

            <div class=\"progress pull-right\"><span id=\"calendar-progress\"></span></div>

            <h1 class=\"page-header\"></h1>
        </div>         
    </div>
    <div class=\"row\">
        <!-- Time Slider -->
        <div class=\"col-sm-12 cal-event-time-bar\" style=\"display:none;\">
            <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"-1\">
                <span class=\"fa fa-step-backward\"></span>
            </div>
            <input id=\"timePicker\" data-slider-id='timePickerSlider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"1439\" data-slider-step=\"1\" data-slider-value=\"0\" data-slider-handle=\"square\" />
            <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"1\">
                <span class=\"fa fa-step-forward\"></span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"CalendarContainer\" data-event-source=\"{{ urlFor(\"schedule.calendar.data\") }}\" data-agenda-link=\"{{ urlFor(\"schedule.events\") }}\" data-calendar-type=\"{{ settings.CALENDAR_TYPE }}\" class=\"col-sm-12\">
            <div id=\"Calendar\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"cal-legend\">
                <ul>
                    <li class=\"event-always\"><span class=\"fa fa-retweet\"></span> {% trans \"Always showing\" %}</li>
                    <li class=\"event-info\"><span class=\"fa fa-desktop\"></span> {% trans \"Single Display\" %}</li>
                    <li class=\"event-success\"><span class=\"fa fa-desktop\"></span> {% trans \"Multi Display\" %}</li>
                    <li class=\"event-important\"><span class=\"fa fa-bullseye\"></span> {% trans \"Priority\" %}</li>
                    <li class=\"event-special\"><span class=\"fa fa-repeat\"></span> {% trans \"Recurring\" %}</li>
                    <li class=\"event-inverse\"><span class=\"fa fa-lock\"></span> {% trans \"View Permission Only\" %}</li>
                    <li class=\"event-command\"><span class=\"fa fa-wrench\"></span> {% trans \"Command\" %}</li>
                    <li class=\"event-interrupt\"><span class=\"fa fa-hand-paper\"></span> {% trans \"Interrupt\" %}</li>
                    <li class=\"event-geo-location\"><span class=\"fa fa-map-marker\"></span> {% trans \"Geo Location\" %}</li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScriptTemplates %}
    {% raw %}
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-xs-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-xs-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-xs-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.isAlways == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-xs-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-xs-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-xs-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event <% if (event.lines < 1) { %>day-event-small<% } %> day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-xs-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-xs-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"day\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>

                <% if (events.length > 0) { %>
                    <span class=\"cal-month-day-number-events label label-info\" data-toggle=\"tooltip\" title=\"{% endraw %}{% trans \"Number of events\" %}{% raw %}\"><%= events.length %></span>
                <% } %>

                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";

            if (event.event.isAlways != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.isAlways == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority == 1) {
            eventClass = \"event-important\";
            eventIcon = \"fa-bullseye\";
            }

            if (event.event.eventTypeId == 4) {
                eventIcon = \"fa-hand-paper\";
            }

            if (event.event.isGeoAware === 1) {
                eventIcon = \"fa-map-marker\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                   data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                   data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"panel with-nav-tabs panel-default agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 1) { %>
                        <div class=\"panel-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"active\">
                                        <% } else { %>
                                            <li>
                                        <% }; %>
                                        
                                        <%
                                            // If it is a simple display show an 
                                            var displayGroupIcon = \"\";
                                            if (displayGroup['isDisplaySpecific'] == 0)
                                                displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                        %>
                                        
                                        <a data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                            <%= (displayGroupIcon + displayGroup['name']) %>
                                        </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"panel-body\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       {% endraw %}
                       <!-- Request failed - Show Error Message -->
                       <div class=\"text-danger text-center\">
                           <% if (agenda.errorMessage == 'display_not_selected') { %>
                               <p>{% trans \"Display not selected!\" %}</p>
                           <% } else if (agenda.errorMessage == 'all_displays_selected') { %>
                               <p>{% trans \"Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!\" %}</p>
                           <% } else if (agenda.errorMessage == 'no_events') { %>
                               <p>{% trans \"No events for the chosen Display/Display Group on the selected date!\" %}</p>    
                           <% } else  if (agenda.errorMessage == 'request_failed') { %>
                               <p>{% trans \"Data request failed!\" %}</p>
                           <% } %>
                       </div>
                       {% raw %}
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-xs-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane fade in <%= isActive %> container-fluid\">
                                        <% if(typeof resultItem.events != 'undefined') { %>
                                            <div class=\"col-lg-9 agenda-col\">
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 4) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 5) %>
                                            </div>
                                            <div class=\"col-lg-3 agenda-col\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-6 col-lg-12 agenda-col\">
                                                        <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                    </div> 
                                                    <div class=\"col-xs-6 col-lg-12 agenda-col\">
                                                        <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                                    </div>
                                                </div>
                                            </div>
                                         <% } %>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table class=\"table agenda-table agenda-table-layouts\" data-type=\"layouts\" width=\"100%\">
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"10\">
                            <% if (layouts.type == 1) { %>
                                {% endraw %}{% trans \"Layouts\" %}{% raw %}</span>
                            <% } else if (layouts.type == 3) { %>
                                {% endraw %}{% trans \"Overlay Layouts\" %}{% raw %}
                            <% } else if (layouts.type == 4) { %>
                                {% endraw %}{% trans \"Interrupt Layouts\" %}{% raw %}
                            <% } else if (layouts.type == 5) { %>
                                {% endraw %}{% trans \"Campaign Layouts\" %}{% raw %}
                            <% } %>
                            
                            <span class=\"pull-right badge\" title=\"{% endraw %}{% trans \"Number of Layouts\" %}{% raw %}\" data-toggle=\"tooltip\" data-placement=\"top\">
                                <%= layouts.length %>
                            </span>
                        </th>
                    </tr>
                    {% endraw %}
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Layout Name\" %}</th>
                        <th>{% trans \"Status\" %}</th>
                        <th>{% trans \"From Date\" %}</th>
                        <th>{% trans \"To Date\" %}</th>
                        <th>{% trans \"Layout Duration\" %}</th>
                        <th>{% trans \"Display Order\" %}</th>
                        <th>{% trans \"Priority\" %}</th>
                        <th>{% trans \"Visible\" %}</th>
                    </tr>
                    {% raw %}
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"{% endraw %}{% trans \"This layout will not be shown as there are higher priority layouts scheduled at this time\" %}{% raw %}\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.isAlways == 1) { %>
                                <td>{% endraw %}{% trans \"Always\" %}{% raw %}</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\" data-type=\"displaygroups\"  width=\"100%\">
                {% endraw %}
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">{% trans \"Display Groups\" %}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Name\" %}</th>
                    </tr>
                </thead>
                {% raw %}
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\" data-type=\"campaigns\"  width=\"100%\">
                {% endraw %}
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">{% trans \"Campaigns\" %}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Name\" %}</th>
                    </tr>
                </thead>
                {% raw %}
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                <a href=\"<%= layout.link %>\"><%= layout.name %></a>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\" data-event-start=\"<%= schedule.fromDt %>\" data-event-end=\"<%= schedule.toDt %>\">
                    {% endraw %}
                        {% trans \"Schedule\" %}
                    {% raw %}
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>


        <script type=\"text/x-handlebars-template\" id=\"reminderEventTemplate\">
            <div class=\"form-group\">
                <input class=\"form-control\" name=\"reminder_scheduleReminderId[]\" type=\"hidden\" value=\"{{ scheduleReminderId }}\" />

                <div class=\"col-sm-2\">
                    <label for=\"reminder_value[]\">
                        <input class=\"form-control\" name=\"reminder_value[]\" type=\"number\" value=\"{{ value }}\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <label for=\"reminder_type[]\">
                        <select class=\"form-control\" name=\"reminder_type[]\">
                            <option value=\"1\" {{#eq type 1}}selected{{/eq}}>{% endraw %}{% trans \"Minute\" %}{% raw %}</option>
                            <option value=\"2\" {{#eq type 2}}selected{{/eq}}>{% endraw %}{% trans \"Hour\" %}{% raw %}</option>
                            <option value=\"3\" {{#eq type 3}}selected{{/eq}}>{% endraw %}{% trans \"Day\" %}{% raw %}</option>
                            <option value=\"4\" {{#eq type 4}}selected{{/eq}}>{% endraw %}{% trans \"Week\" %}{% raw %}</option>
                            <option value=\"5\" {{#eq type 5}}selected{{/eq}}>{% endraw %}{% trans \"Month\" %}{% raw %}</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_option[]\">
                        <select class=\"form-control\" name=\"reminder_option[]\">
                            <option value=\"1\" {{#eq option 1}}selected{{/eq}}>{% endraw %}{% trans \"Before schedule starts\" %}{% raw %}</option>
                            <option value=\"2\" {{#eq option 2}}selected{{/eq}}>{% endraw %}{% trans \"After schedule starts\" %}{% raw %}</option>
                            <option value=\"3\" {{#eq option 3}}selected{{/eq}}>{% endraw %}{% trans \"Before schedule ends\" %}{% raw %}</option>
                            <option value=\"4\" {{#eq option 4}}selected{{/eq}}>{% endraw %}{% trans \"After schedule ends\" %}{% raw %}</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_isEmail[]\">
                        <input type=\"checkbox\" name=\"reminder_isEmail[]\" {{#eq isEmail 1}}checked{{/eq}}/>
                        {% endraw %}{% trans \"Notify by email?\" %}{% raw %}
                        <input type=\"hidden\" name=\"reminder_isEmailHidden[]\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
        </script>

        {% endraw %}
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
\t\t// We are using this variable in xibo-calendar.js
        var scheduleRecurrenceDeleteUrl = \"{{ urlFor(\"schedule.recurrence.delete.form\") }}\";

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        // Init campaign select2
        \$(function() {
            // Select lists
            const dialog = 'body';

            let \$campaignSelect = \$('.xibo-calendar-controls #campaignId');
            \$campaignSelect.select2({
                dropdownParent: \$(dialog),
                ajax: {
                    url: \$campaignSelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    placeholder: 'This is my placeholder',
                    allowClear: true,
                    data: function(params) {

                        var query = {
                            isLayoutSpecific: -1,
                            retired: 0,
                            totalDuration: 0,
                            name: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isLayoutSpecific\"
                                },
                                {
                                    \"data\": \"campaign\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };

                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }

                        return query;
                    },
                    processResults: function(data, params) {

                        var results = [];
                        var campaigns = [];
                        var layouts = [];

                        \$.each(data.data, function(index, element) {
                            if (element.isLayoutSpecific === 1) {
                                layouts.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            } else {
                                campaigns.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            }
                        });

                        if (campaigns.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transCampaigns'),
                                \"children\": campaigns
                            })
                        }

                        if (layouts.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transLayouts'),
                                \"children\": layouts
                            })
                        }

                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;

                        return {
                            results: results,
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            let \$displaySelect = \$('#DisplayList', dialog);
            \$displaySelect.select2({
                dropdownParent: \$(dialog),
                dropdownAutoWidth: true,
                ajax: {
                    url: \$displaySelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    data: function(params) {
                        const query = {
                            isDisplaySpecific: -1,
                            forSchedule: 1,
                            displayGroup: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isDisplaySpecific\"
                                },
                                {
                                    \"data\": \"displayGroup\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };
                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }
                        return query;
                    },
                    processResults: function(data, params) {
                        var groups = [];
                        var displays = [];
                        \$.each(data.data, function(index, element) {
                            if (element.isDisplaySpecific === 1) {
                                displays.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            } else {
                                groups.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            }
                        });
                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;
                        return {
                            results: [
                                {
                                    \"text\": \$displaySelect.data('transGroups'),
                                    \"children\": groups
                                },{
                                    \"text\": \$displaySelect.data('transDisplay'),
                                    \"children\": displays
                                }
                            ],
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            }).on('select2:unselecting', function() {
                // Prevent the ajax request when we deselect an option ( change will still be called )
                var opts = \$(this).data('select2').options;
                opts.set('disabled', true);

                setTimeout(function() {
                    opts.set('disabled', false);
                }, 100);
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            // Set up our show all selector control
            \$('#showAll', dialog).on('change', function() {
                setTimeout(calendar.view(), 1000);
            });
        });
    </script>
{% endblock %}", "schedule-page.twig", "E:\\app\\laragon\\www\\xibo\\views\\schedule-page.twig");
    }
}
