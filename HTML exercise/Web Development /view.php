<!DOCTYPE html>

<html  dir="ltr" lang="de" xml:lang="de">
<head>
    <title>Passerelle-25/26: Write HTML+CSS to looking like a sample | BFH Moodle – Die Lernplattform der Berner Fachhochschule</title>
    <link rel="shortcut icon" href="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/favicon/64x64/1756121078/logo_subpages.svg" />
    <style type="text/css">.admin_settingspage_tabs_with_tertiary .dropdown-toggle { font-size: 1.875rem !important; }
h2:has(+ .admin_settingspage_tabs_with_tertiary) { display: none; }</style><link rel="apple-touch-icon" sizes="120x120" href="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/touchiconsios/1756121078/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="152x152" href="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/touchiconsios/1756121078/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="167x167" href="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/touchiconsios/1756121078/apple-icon-167x167.png"><link rel="apple-touch-icon" sizes="180x180" href="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/touchiconsios/1756121078/apple-icon-180x180.png"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Passerelle-25/26: Write HTML+CSS to looking like a sample | BFH Moodle – Die Lernplattform der Berner Fachhochschule" />
<link rel="stylesheet" type="text/css" href="https://moodle.bfh.ch/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.bfh.ch/theme/styles.php/bfh/1756121078_1756117060/all" />
<link rel="stylesheet" type="text/css" href="https://moodle.bfh.ch/filter/syntaxhighlighter/styles/github.min.css" />
<link rel="stylesheet" type="text/css" href="https://moodle.bfh.ch/pluginfile.php/1/tiny_elements/css/tiny_elements_styles.css%3Frev%3D1756117957" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.bfh.ch","apibase":"https:\/\/moodle.bfh.ch\/r.php\/api","homeurl":{},"sesskey":"8Kbrp07EIM","sessiontimeout":"28800","sessiontimeoutwarning":1200,"themerev":"1756121078","slasharguments":1,"theme":"bfh","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1756117957","admin":"admin","svgicons":true,"usertimezone":"Europa\/Z\u00fcrich","language":"de","courseId":40718,"courseContextId":3446341,"contextid":3513039,"contextInstanceId":2520604,"langrev":1756347607,"templaterev":"1756117957","siteId":1,"userId":81409};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.bfh.ch\/lib\/yuilib\/3.18.1\/","comboBase":"https:\/\/moodle.bfh.ch\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.bfh.ch\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.bfh.ch\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.bfh.ch\/theme\/yui_combo.php?m\/1756117957\/","combine":true,"comboBase":"https:\/\/moodle.bfh.ch\/theme\/yui_combo.php?","ext":false,"root":"m\/1756117957\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_language-form":{"requires":["base","node","event","node-event-simulate","moodle-core_availability-form"]},"moodle-availability_mobileapp-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_quizquestion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_role-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_xp-form":{"requires":["base","node","event","handlebars","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form","datatype-date-format"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_xp-notification":{"requires":["base","node","handlebars","button-plugin","moodle-core-notification-dialogue"]},"moodle-block_xp-filters":{"requires":["base","node","moodle-core-dragdrop","moodle-core-notification-confirm","moodle-block_xp-rulepicker"]},"moodle-block_xp-rulepicker":{"requires":["base","node","handlebars","moodle-core-notification-dialogue"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_editrolesbycap-capabilityformfield":{"requires":["base","dom","event","cookie"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-local_kaltura-ltipanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-ltitinymcepanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-lticontainer":{"requires":["base","node"]},"moodle-local_kaltura-ltiservice":{"requires":["base","node","node-event-simulate"]},"moodle-local_wikiexport-printlinks":{"requires":["base","node"]},"moodle-local_wikiexport-sortpages":{"requires":["base","node","io-base","dd-constrain","dd-proxy","dd-drop","json-parse"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.bfh.ch\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.bfh.ch\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1756117957\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.bfh.ch\/lib\/javascript.php\/1756117957\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.bfh.ch\/lib\/javascript.php\/1756117957\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mod_assign":{"name":"mod_assign","fullpath":"https:\/\/moodle.bfh.ch\/lib\/javascript.php\/1756117957\/mod\/assign\/module.js","requires":[]}},"logInclude":[],"logExclude":[],"logLevel":null};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="moodle-validation" content="a7e2fafdf37a01cb0567f64e595e571b">
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://moodle-matomo.bfh.ch/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '7']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-assign-view" class="format-topics limitedwidth  path-mod path-mod-assign safari dir-ltr lang-de yui-skin-sam yui3-skin-sam moodle-bfh-ch pagelayout-incourse course-40718 context-3513039 cmid-2520604 cm-type-assign category-2819 category-6 category-5 theme uses-drawers nocourseindexcmicons theme_bfh-footerbuttonnone">
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>
<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="visually-hidden-focusable" href="#maincontent">Zum Hauptinhalt</a>
</div><script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/polyfills/polyfill.js"></script>
<script src="https://moodle.bfh.ch/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.js"></script><script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    
    <nav class="navbar fixed-top bg-body navbar-expand "  aria-label="Site-Navigation">
        <div class="container-fluid">
            <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
                <span class="navbar-toggler-icon"></span>
                <span class="visually-hidden">Website-Übersicht</span>
            </button>
    
            <a href="https://moodle.bfh.ch/my/" class="navbar-brand align-items-center m-0 me-4 p-0 aabtn   d-none d-md-flex  ">
    
                    <img src="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/logocompact/1/1756121078/logo_subpages.svg" class="logo me-1" alt="BFH Moodle">
            </a>
                <div class="primary-navigation">
                    <nav class="moremenu navigation">
                        <ul id="moremenu-68b01bc310851-navbar-nav" role="menubar" class="nav more-nav navbar-nav" data-bs-theme="light">
                                        <li data-key="home" class="nav-item " role="none" data-forceintomoremenu="false">
                                                    <a role="menuitem" class="nav-link   "
                                                        href="https://moodle.bfh.ch/?redirect=0"
                                                        
                                                        
                                                        
                                                        data-disableactive="true"
                                                        tabindex="-1"
                                                    >
                                                        Startseite
                                                    </a>
                                        </li>
                                        <li data-key="myhome" class="nav-item " role="none" data-forceintomoremenu="false">
                                                    <a role="menuitem" class="nav-link   "
                                                        href="https://moodle.bfh.ch/my/"
                                                        
                                                        
                                                        
                                                        data-disableactive="true"
                                                        tabindex="-1"
                                                    >
                                                        Dashboard
                                                    </a>
                                        </li>
                                        <li data-key="mycourses" class="nav-item " role="none" data-forceintomoremenu="false">
                                                    <a role="menuitem" class="nav-link   "
                                                        href="https://moodle.bfh.ch/my/courses.php"
                                                        
                                                        
                                                        
                                                        data-disableactive="true"
                                                        tabindex="-1"
                                                    >
                                                        Meine Kurse
                                                    </a>
                                        </li>
                                        <li data-key="" class="nav-item " role="none" data-forceintomoremenu="false">
                                                    <a role="menuitem" class="nav-link   "
                                                        href="https://moodle.bfh.ch/local/mymedia/mymedia.php"
                                                        
                                                        
                                                        
                                                        data-disableactive="true"
                                                        tabindex="-1"
                                                    >
                                                        Meine Medien
                                                    </a>
                                        </li>
                                <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
                                    <a class="dropdown-toggle nav-link " href="#" id="moremenu-dropdown-68b01bc310851" role="menuitem" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                        Mehr
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-region="moredropdown" aria-labelledby="moremenu-dropdown-68b01bc310851" role="menu">
                                    </ul>
                                </li>
                        </ul>
                    </nav>
                </div>
    
            <ul class="navbar-nav d-none d-md-flex my-1 px-1">
                <!-- page_heading_menu -->
                
            </ul>
    
            <div id="usernavigation" class="navbar-nav ms-auto h-100">
                    <div id="searchinput-navbar-68b01bc3177d768b01bc2a0fe86" class="simplesearchform">
    <div class="collapse" id="searchform-navbar">
        <form autocomplete="off" action="https://moodle.bfh.ch/search/index.php" method="get" accept-charset="utf-8" class="mform d-flex flex-wrap align-items-center searchform-navbar">
                <input type="hidden" name="context" value="3513039">
            <div class="input-group" role="group" aria-labelledby="searchgrouplabel-68b01bc3177d768b01bc2a0fe86">
                    <span id="searchgrouplabel-68b01bc3177d768b01bc2a0fe86" class="visually-hidden">Systemweite Suche</span>
                <input type="text"
                    id="searchinput-68b01bc3177d768b01bc2a0fe86"
                    class="form-control withclear"
                    placeholder="Suchen"
                    aria-label="Suchen"
                    name="q"
                    data-region="input"
                    autocomplete="off"
                >
                <label for="searchinput-68b01bc3177d768b01bc2a0fe86">
                    <span class="visually-hidden">Suchen</span>
                </label>
                <a class="btn btn-close"
                    data-action="closesearch"
                    data-bs-toggle="collapse"
                    href="#searchform-navbar"
                    role="button"
                    title="Schliessen"
                >
                    <span class="visually-hidden">Schliessen</span>
                </a>
                <button type="submit" class="btn btn-submit" data-action="submit" title="Suche durchführen">
                    <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                    <span class="visually-hidden">Suche durchführen</span>
                </button>
            </div>
        </form>
    </div>
    <a
        class="rounded-0 nav-link icon-no-margin"
        data-bs-toggle="collapse"
        data-action="opensearch"
        href="#searchform-navbar"
        role="button"
        aria-expanded="false"
        aria-controls="searchform-navbar"
        title="Sucheingabe umschalten"
    >
        <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
        <span class="visually-hidden">Sucheingabe umschalten</span>
    </a>
</div>
                    <div class="divider border-start h-75 align-self-center mx-1"></div>
                <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="81409"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link icon-no-margin"
        data-region="popover-region-toggle"
        aria-controls="popover-region-container-68b01bc3180d168b01bc2a0fe87"
        aria-haspopup="true"
        aria-expanded="false"
        aria-label=" Mitteilungsfenster ohne neue Systemnachrichten anzeigen   "
        title=" Mitteilungsfenster ohne neue Systemnachrichten anzeigen   "
        tabindex="0"
        role="button">
                <i class="icon fa fa-bell fa-fw " aria-hidden="true" ></i>
        <div
            class="count-container hidden"
            data-region="count-container"
            aria-hidden=true
        >
            0
        </div>

    </div>
    <div         aria-modal="true"
        tabindex="-1"

        id="popover-region-container-68b01bc3180d168b01bc2a0fe87"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-hidden="true"
        aria-label="Mitteilungsfenster"
        role="dialog">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Systemnachrichten</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button btn btn-sm btn-link m-0 py-0 icon-no-margin"
           href="#"
           title="Alle als gelesen markieren"
           data-action="mark-all-read"
           role="button"
           aria-label="Alle als gelesen markieren">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true" ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
            <span aria-live="polite" class="visually-hidden" data-region="notification-read-feedback"></span>
        </a>
            <a href="https://moodle.bfh.ch/message/notificationpreferences.php"
               title="Systemnachrichten"
               aria-label="Systemnachrichten"
               class="btn btn-sm btn-link m-0 py-0 icon-no-margin" >
                <i class="icon fa fa-gear fa-fw " aria-hidden="true" ></i></a>
        <button type="button" class="btn btn-sm btn-link m-0 py-0 icon-no-margin" aria-label="Schliessen" title="Schliessen" data-action="close-notification-popover">
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Keine Systemnachrichten</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle.bfh.ch/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Alle anzeigen</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
    <a
        id="message-drawer-toggle-68b01bc3191af68b01bc2a0fe88"
        class="nav-link popover-region-toggle position-relative icon-no-margin"
        href="#"
        aria-label="Mitteilungen"
        title="Mitteilungen"
        role="button"
        aria-expanded="false"
        aria-describedby="unread-messages-count-68b01bc3191af68b01bc2a0fe88"
    >
        <i class="icon fa fa-message fa-fw " aria-hidden="true" ></i>
        <div
            class="count-container hidden"
            data-region="count-container"
        >
            <span aria-hidden="true">0</span>
            <span class="visually-hidden" id="unread-messages-count-68b01bc3191af68b01bc2a0fe88">0 ungelesene Diskussionen</span>
        </div>
    </a>
    <span class="visually-hidden-focusable" data-region="jumpto" tabindex="-1"></span>
</div>
                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                        <div class="usermenu">
                                <div class="dropdown show">
                                    <a href="#" role="button" id="user-menu-toggle" data-bs-toggle="dropdown" aria-label="Nutzermenü"
                                       aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle">
                                        <span class="userbutton">
                                            <span class="avatars">
                                                    <span class="avatar current">
                                                        <span class="userinitials size-35" title="Nazifa Sarwari" aria-label="Nazifa Sarwari" role="img">NS</span>
                                                    </span>
                                            </span>
                                        </span>
                                    </a>
                                    <div id="user-action-menu" class="dropdown-menu dropdown-menu-end" data-bs-theme="light">
                                        <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
                                            <div class="carousel-inner">
                                                <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="Nutzer/in">
                                                            <a href="https://moodle.bfh.ch/user/profile.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Profil
                                                            </a>
                                                        
                                                            <a href="https://moodle.bfh.ch/grade/report/overview/index.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Bewertungen
                                                            </a>
                                                        
                                                            <a href="https://moodle.bfh.ch/calendar/view.php?view=month" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Kalender
                                                            </a>
                                                        
                                                            <a href="https://moodle.bfh.ch/message/index.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Mitteilungen
                                                            </a>
                                                        
                                                            <a href="https://moodle.bfh.ch/user/files.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Meine Dateien
                                                            </a>
                                                        
                                                            <a href="https://moodle.bfh.ch/reportbuilder/index.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Berichte
                                                            </a>
                                                        
                                                        <div class="dropdown-divider"></div>
                                                            <a href="https://moodle.bfh.ch/user/preferences.php" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Einstellungen
                                                            </a>
                                                        
                                                            <a href="#" class="carousel-navigation-link dropdown-item " role="menuitem" tabindex="-1" data-carousel-target-id="carousel-item-68b01bc310f07" 
                                                            >
                                                                    
                                                                Sprache
                                                            </a>
                                                        <div class="dropdown-divider"></div>
                                                            <a href="https://moodle.bfh.ch/login/logout.php?sesskey=8Kbrp07EIM" class="dropdown-item " role="menuitem" tabindex="-1"  >
                                                                    
                                                                Logout
                                                            </a>
                                                        
                                                </div>
                                                    <div id="carousel-item-68b01bc310f07" role="menu" class="carousel-item submenu" tabindex="-1" aria-label="Sprachwahl">
                                                        <div class="d-flex flex-column h-100">
                                                            <div class="header">
                                                                <button type="button" class="btn btn-icon carousel-navigation-link text-decoration-none text-body" data-carousel-target-id="carousel-item-main" aria-label="Zurück zum Nutzermenü">
                                                                    <span class="dir-rtl-hide"><img class="icon " alt="" aria-hidden="true" src="https://moodle.bfh.ch/theme/image.php/bfh/core/1756121078/i/arrow-left" /></span>
                                                                    <span class="dir-ltr-hide"><img class="icon " alt="" aria-hidden="true" src="https://moodle.bfh.ch/theme/image.php/bfh/core/1756121078/i/arrow-right" /></span>
                                                                </button>
                                                                <span class="ps-2" id="carousel-item-title-68b01bc310f07">Sprachwahl</span>
                                                            </div>
                                                            <div class="dropdown-divider"></div>
                                                            <div class="items h-100 overflow-auto" role="menu" aria-labelledby="carousel-item-title-68b01bc310f07">
                                                                
                                                                            <a href="#" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" aria-current="true"
                                                                                
                                                                                >
                                                                                Deutsch ‎(de)‎
                                                                            </a>
                                                                        
                                                                
                                                                            <a href="https://moodle.bfh.ch/mod/assign/view.php?id=2520604&amp;rownum=0&amp;useridlistid=68b01bc29914c266671543&amp;action&amp;lang=en" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" 
                                                                                lang="en"   
                                                                                >
                                                                                English ‎(en)‎
                                                                            </a>
                                                                        
                                                                
                                                                            <a href="https://moodle.bfh.ch/mod/assign/view.php?id=2520604&amp;rownum=0&amp;useridlistid=68b01bc29914c266671543&amp;action&amp;lang=es" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" 
                                                                                lang="es"   
                                                                                >
                                                                                Español ‎(es)‎
                                                                            </a>
                                                                        
                                                                
                                                                            <a href="https://moodle.bfh.ch/mod/assign/view.php?id=2520604&amp;rownum=0&amp;useridlistid=68b01bc29914c266671543&amp;action&amp;lang=fr" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" 
                                                                                lang="fr"   
                                                                                >
                                                                                Français ‎(fr)‎
                                                                            </a>
                                                                        
                                                                
                                                                            <a href="https://moodle.bfh.ch/mod/assign/view.php?id=2520604&amp;rownum=0&amp;useridlistid=68b01bc29914c266671543&amp;action&amp;lang=it" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" 
                                                                                lang="it"   
                                                                                >
                                                                                Italiano ‎(it)‎
                                                                            </a>
                                                                        
                                                                
                                                                        <div class="dropdown-divider"></div>
                                                                
                                                                            <a href="https://moodle.bfh.ch/user/language.php" class="dropdown-item  ps-5" role="menuitem" tabindex="-1" 
                                                                                
                                                                                >
                                                                                Bevorzugte Sprache wählen
                                                                            </a>
                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                
    
            </div>
        </div>
    </nav>
    
<div  class="drawer   drawer-left  drawer-primary d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0" data-close-on-resize="1">
    <div class="drawerheader">
        <button
            class="btn btn-icon drawertoggle hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-primary"
            data-bs-toggle="tooltip"
            data-bs-placement="right"
            title="Leiste schließen"
        >
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
        <a
            href="https://moodle.bfh.ch/my/"
            title="BFH Moodle"
            data-region="site-home-link"
            class="aabtn text-reset d-flex align-items-center py-1 h-100 d-md-none"
        >
                        <img src="https://moodle.bfh.ch/pluginfile.php/1/theme_bfh/logocompact/1/1756121078/logo_subpages.svg" class="logo py-1 h-100" alt="BFH Moodle">

        </a>
        <div class="drawerheadercontent hidden">
            
        </div>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                <div class="list-group">
                <a href="https://moodle.bfh.ch/?redirect=0"  class=" list-group-item list-group-item-action  "  >
                    Startseite
                </a>
                <a href="https://moodle.bfh.ch/my/"  class=" list-group-item list-group-item-action  "  >
                    Dashboard
                </a>
                <a href="https://moodle.bfh.ch/my/courses.php"  class=" list-group-item list-group-item-action  "  >
                    Meine Kurse
                </a>
                <a href="https://moodle.bfh.ch/local/mymedia/mymedia.php"  class=" list-group-item list-group-item-action  "  >
                    Meine Medien
                </a>
        </div>

    </div>
</div>
        <div  class="drawer drawer-left  d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-courseindex" data-preference="drawer-open-index" data-state="show-drawer-left" data-forceopen="0" data-close-on-resize="0">
    <div class="drawerheader">
        <button
            class="btn btn-icon drawertoggle hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-courseindex"
            data-bs-toggle="tooltip"
            data-bs-placement="right"
            title="Kursindex schließen"
        >
            <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
        </button>
        <a
            href="https://moodle.bfh.ch/my/"
            title="BFH Moodle"
            data-region="site-home-link"
            class="aabtn text-reset d-flex align-items-center py-1 h-100 d-md-none"
        >
            
        </a>
        <div class="drawerheadercontent hidden">
                            <div id="courseindexdrawercontrols" class="dropdown">
                    <button class="btn btn-icon mx-2"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            title="Optionen für den Kursindex"
                    >
                        <i class="icon fa fa-ellipsis-v fa-fw m-0" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item"
                           href="#"
                           data-action="expandallcourseindexsections"
                        >
                            <i class="icon fa fa-angles-down fa-fw " aria-hidden="true" ></i>
                            Alles aufklappen
                        </a>
                        <a class="dropdown-item"
                           href="#"
                           data-action="collapseallcourseindexsections"
                        >
                            <span class="dir-rtl-hide"><i class="icon fa fa-angles-right fa-fw " aria-hidden="true" ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-angles-left fa-fw " aria-hidden="true" ></i></span>
                            Alles einklappen
                        </a>
                    </div>
                </div>

        </div>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                        <nav id="courseindex" class="courseindex">
    <div id="courseindex-content">
        <div data-region="loading-placeholder-content" aria-hidden="true" id="course-index-placeholder">
            <ul class="placeholders list-unstyled px-5">
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle me-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </div>
</div>


    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers   drag-container">



        <div class="main-inner-wrapper main-inner-outside-none main-inner-outside-nextmaincontent">

        <div id="topofscroll" class="main-inner">
            <div class="drawer-toggles d-flex">
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-courseindex"
                            data-bs-toggle="tooltip"
                            data-bs-placement="right"
                            title="Kursindex öffnen"
                        >
                            <span class="visually-hidden">Kursindex öffnen</span>
                            <i class="icon fa fa-list fa-fw " aria-hidden="true" ></i>
                        </button>
                    </div>
            </div>
            
            
            <header id="page-header" class="header-maxwidth d-print-none">
    <div class="w-100">
        <div class="d-flex flex-wrap">
            <div id="page-navbar">
                <nav aria-label="Navigationsleiste">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://moodle.bfh.ch/course/view.php?id=40718"
                        
                        title="Passerelle Informatik 2025"
                        
                    >
                        Passerelle-25/26
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.bfh.ch/course/section.php?id=572928"
                        
                        
                        data-section-name-for="572928" 
                    >
                        Web Dev
                    </a>
                </li>
        
                <li class="breadcrumb-item">
                    <span >
                        Write HTML+CSS to looking like a sample
                    </span>
                </li>
        </ol>
</nav>
            </div>
            <div class="ms-auto d-flex">
                
            </div>
            <div id="course-header">
                
            </div>
        </div>
                <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <div class="page-context-header d-flex flex-wrap align-items-center mb-2">
    <div class="page-header-image">
        <div class="assessment activityiconcontainer icon-size-6 modicon_assign"><img class="icon activityicon " aria-hidden="true" src="https://moodle.bfh.ch/theme/image.php/bfh/assign/1756121078/monologo?filtericon=1" alt="" /></div>
    </div>
    <div class="page-header-headings">
        <h1 class="h2 mb-0">Write HTML+CSS to looking like a sample</h1>
    </div>
</div>
                        </div>
                    <div class="header-actions-container ms-auto" data-region="header-actions-container">
                    </div>
                </div>
    </div>
</header>
            <div id="page-content" class="pb-3 d-print-block">
                <div id="region-main-box">
                    <div id="region-main">

                        <span class="notifications" id="user-notifications"></span>
                            <span id="maincontent"></span>
                            <div class="activity-header" data-for="page-activity-header">
                                    <span class="visually-hidden">Abschlussbedingungen</span>
                                    <div data-region="activity-information" data-activityname="Write HTML+CSS to looking like a sample" class="activity-information">


    <div data-region="activity-dates" class="activity-dates">
            <div>
                <strong>Geöffnet:</strong> Mittwoch, 28. August 2024, 00:00
            </div>
            <div>
                <strong>Fällig:</strong> Dienstag, 3. September 2024, 08:30
            </div>
    </div>
</div>
                                    <div class="activity-description" id="intro">
                                        <div class="box py-3 generalbox boxaligncenter"><div class="no-overflow"><p>Identifying elements and styling them with CSS.</p></div><div id="assign_files_tree68b01bc2a0fe81"><ul><li yuiConfig='{"type":"html"}'><div><div class="fileuploadsubmission"><img class="icon icon" alt="assignment_day_002.zip" title="assignment_day_002.zip" src="https://moodle.bfh.ch/theme/image.php/bfh/core/1756121078/f/archive" /> <a target="_blank" href="https://moodle.bfh.ch/pluginfile.php/3513039/mod_assign/introattachment/0/assignment_day_002.zip?forcedownload=1">assignment_day_002.zip</a>   </div><div class="fileuploadsubmissiontime">1. Juli 2025, 08:42</div></div></li><li yuiConfig='{"type":"html"}'><div><div class="fileuploadsubmission"><img class="icon icon" alt="target.gif" title="target.gif" src="https://moodle.bfh.ch/theme/image.php/bfh/core/1756121078/f/gif" /> <a target="_blank" href="https://moodle.bfh.ch/pluginfile.php/3513039/mod_assign/introattachment/0/target.gif?forcedownload=1">target.gif</a>   </div><div class="fileuploadsubmissiontime">1. Juli 2025, 08:42</div></div></li></ul></div></div>
                                    </div>
                                </div>
                        
                        <div role="main"><div class="container-fluid mb-4">
    <div class="d-flex flex-wrap gap-2">
    </div>
</div><div class="submissionstatustable"><h3>Abgabestatus</h3><div class="box py-3 boxaligncenter submissionsummarytable"><div class="table-responsive"><table class="generaltable table table-striped table-bordered">
<tbody><tr class="">
<th class="cell c0" style="" scope="row">Abgabestatus</th>
<td class="cell c1 lastcol" style="">Bisher wurden keine Aufgaben abgegeben</td>
</tr>
<tr class="">
<th class="cell c0" style="" scope="row">Bewertungsstatus</th>
<td class="submissionnotgraded cell c1 lastcol" style="">Nicht bewertet</td>
</tr>
<tr class="lastrow">
<th class="cell c0" style="" scope="row">Verbleibende Zeit</th>
<td class="overdue cell c1 lastcol" style="">Abgabeende überschritten seit: 359 Tage 2 Stunden</td>
</tr>
</tbody>
</table>
</div></div></div></div>
                        
                        

                    </div>
                </div>
            </div>
        </div>

        </div>



        
        <footer id="page-footer" class="footer-popover bg-white">
            <div data-region="footer-container-popover">
                <div id="bfh-footer-buttons">
                </div>
            </div>
            <div class="footer-content-popover container" data-region="footer-content-popover">
            </div>
        </footer>
        
        
        <div id="footnote" class="py-3 bg-dark">
            <div class="container-fluid px-0">
                <div class="col-12 row">
                    <div class="col-sm-3"><a class="simple-link" href="https://moodle.bfh.ch/local/bfh_requestform">Kurs beantragen/Help-Kontakt</a><br><a class="simple-link" href="https://bfh.ch/virtuelle-akademie" target="_blank" rel="noopener">Virtuelle Akademie</a><br><a class="simple-link" href="https://bernerfachhochschule.sharepoint.com/sites/mybfh-Home-de" target="_blank" rel="noopener">BFH Intranet</a><br><a class="simple-link" href="https://campusapp.bfh.ch/dashboard" target="_blank" rel="noopener">BFH Campus App</a></div>
<div class="col-sm-3"><a class="simple-link" href="https://portfolio.switch.ch" target="_blank" rel="noopener">Mahara E-Portfolio</a><br><a class="simple-link" href="https://moodle.bfh.ch/local/differentiator">Differentiator</a></div>
<div class="col-sm-3"><a class="simple-link" href="https://moodle.org/?lang=de" target="_blank" rel="noopener">Moodle Community</a><br><a class="simple-link" href="https://docs.moodle.org/500/de/Moodle-Kurs_verwalten" target="_blank" rel="noopener">Moodle Hilfe zu einzelnen Werkzeugen</a></div>
                    <div class="col-sm-3">
                        <div class="logininfo">Sie sind angemeldet als <a href="https://moodle.bfh.ch/user/profile.php?id=81409" title="Profil anzeigen">Nazifa Sarwari</a> (<a href="https://moodle.bfh.ch/login/logout.php?sesskey=8Kbrp07EIM">Logout</a>)</div>
                        <div class="matomoinfo"><a href="#piwikcontrol" title ="Wir nutzen das Webanalyse-System Matomo, um die Besuche auf unserer Website zu messen und zu analysieren. Sie bleiben als Nutzer:in hierbei anonym." class="nested-link" onClick="setCookie('matomo_ignore','yes',3650);"><img src="https://moodle.bfh.ch/theme/image.php/bfh/core/1756121078/i/completion-manual-enabled" alt="An Matomo Webseitenanalyse teilnehmen"/></a> <a href="#piwikcontrol" title ="Wir nutzen das Webanalyse-System Matomo, um die Besuche auf unserer Website zu messen und zu analysieren. Sie bleiben als Nutzer:in hierbei anonym." class="simple-link" onClick="setCookie('matomo_ignore','yes',3650);">Matomo Webseitenanalyse opt-out</a><a name = "piwikcontrol">&#160;</a></div>
                        <div class="tool_usertours-resettourcontainer"></div>
                        <div class="homelink"><a href="https://moodle.bfh.ch/course/view.php?id=40718">Passerelle-25/26</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.bfh.ch/lib/requirejs.php/1756117957/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/jquery/jquery-3.7.1.min',
        jqueryui: 'https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/jquery/ui-1.14.1/jquery-ui.min',
        jqueryprivate: 'https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
M.util.js_pending('filter_glossary/autolinker'); require(['filter_glossary/autolinker'], function(amd) {amd.init(); M.util.js_complete('filter_glossary/autolinker');});;
M.util.js_pending('filter_mathjaxloader/loader'); require(['filter_mathjaxloader/loader'], function(amd) {amd.configure({"mathjaxurl":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@3.2.2\/es5\/tex-mml-chtml.js","mathjaxconfig":"","lang":"de"}); M.util.js_complete('filter_mathjaxloader/loader');});;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('de');
});;
M.util.js_pending('plagiarism_turnitin/new_rubric'); require(['plagiarism_turnitin/new_rubric'], function(amd) {amd.newRubric(); M.util.js_complete('plagiarism_turnitin/new_rubric');});;
M.util.js_pending('plagiarism_turnitin/new_rubric'); require(['plagiarism_turnitin/new_rubric'], function(amd) {amd.newRubric(); M.util.js_complete('plagiarism_turnitin/new_rubric');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_oembed/oembed'); require(['filter_oembed/oembed'], function(amd) {amd.init(); M.util.js_complete('filter_oembed/oembed');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('core_courseformat/courseeditor'); require(['core_courseformat/courseeditor'], function(amd) {amd.setViewFormat("40718", {"editing":false,"supportscomponents":true,"statekey":"1756371204_1756371219","overriddenStrings":[]}); M.util.js_complete('core_courseformat/courseeditor');});;

require(['core_courseformat/local/courseindex/placeholder'], function(component) {
    component.init('#course-index-placeholder');
});
;

require(['core_courseformat/local/courseindex/drawer'], function(component) {
    component.init('#courseindex');
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('core_courseformat/local/content/activity_header'); require(['core_courseformat/local/content/activity_header'], function(amd) {amd.init(); M.util.js_complete('core_courseformat/local/content/activity_header');});;
M.util.js_pending('theme_bfh/backtotopbutton'); require(['theme_bfh/backtotopbutton'], function(amd) {amd.init(); M.util.js_complete('theme_bfh/backtotopbutton');});;
M.util.js_pending('theme_bfh/footerbuttons'); require(['theme_bfh/footerbuttons'], function(amd) {amd.init(); M.util.js_complete('theme_bfh/footerbuttons');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

    require(['core/moremenu'], function(moremenu) {
        moremenu(document.querySelector('#moremenu-68b01bc310851-navbar-nav'));
    });
;

require(
[
    'jquery',
],
function(
    $
) {
    const container = document.getElementById('searchform-navbar');
    const opensearch = container.parentElement.querySelector('[data-action="opensearch"]');
    const input = container.querySelector('[data-region="input"]');
    const submit = container.querySelector('[data-action="submit"]');

    submit.addEventListener('click', (e) => {
        if (input.valUE === '') {
            e.preventDefault();
        }
    });

    container.addEventListener('hidden.bs.collapse', () => {
        opensearch.classList.remove('d-none');
        input.value = '';
    });

    container.addEventListener('show.bs.collapse', () => {
        opensearch.classList.add('d-none');
    });

    container.addEventListener('shown.bs.collapse', () => {
        input.focus();
    });
});
;

require(
[
    'jquery',
],
function(
    $
) {
    const container = document.getElementById('searchform-navbar');
    const opensearch = container.parentElement.querySelector('[data-action="opensearch"]');
    const input = container.querySelector('[data-region="input"]');
    const submit = container.querySelector('[data-action="submit"]');

    submit.addEventListener('click', (e) => {
        if (input.valUE === '') {
            e.preventDefault();
        }
    });

    container.addEventListener('hidden.bs.collapse', () => {
        opensearch.classList.remove('d-none');
        input.value = '';
    });

    container.addEventListener('show.bs.collapse', () => {
        opensearch.classList.add('d-none');
    });

    container.addEventListener('shown.bs.collapse', () => {
        input.focus();
    });
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, Controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new Controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-68b01bc3191af68b01bc2a0fe88');
    Popover.init(toggle);
});
;

    require(['core/usermenu'], function(UserMenu) {
        UserMenu.init();
    });
;

M.util.js_pending('theme_boost/drawers:load');
require(['theme_boost/drawers'], function() {
    M.util.js_complete('theme_boost/drawers:load');
});
;

    require(['theme_boost/courseindexdrawercontrols'], function(component) {
    component.init('courseindexdrawercontrols');
    });
;

M.util.js_pending('theme_boost/drawers:load');
require(['theme_boost/drawers'], function() {
    M.util.js_complete('theme_boost/drawers:load');
});
;

    require(['theme_boost/footer-popover'], function(FooterPopover) {
    FooterPopover.init();
    });
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

    require(['theme_boost/footer-popover'], function(FooterPopover) {
    FooterPopover.init();
    });
;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-68b01bc31bdae68b01bc2a0fe89');
    MessageDrawer.init(root, '68b01bc31bdae68b01bc2a0fe89', false);
});
;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader', 'theme_boost/drawer'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete('theme_boost/loader');


});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
(function () {
        console.dir('AnnotoBackend: Moodle version 5.0.2 (Build: 20250811)');
        console.dir('AnnotoBackend: Plugin version 5.4.0 - 2025060800');
        console.dir('AnnotoBackend: theme BFH');
        console.dir('AnnotoBackend: Page 1');
    }());;
M.util.js_pending('local_annoto/annoto'); require(['local_annoto/annoto'], function(amd) {amd.init("40718", 2520604); M.util.js_complete('local_annoto/annoto');});;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(3513039, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});;
M.util.js_pending('core/storage_validation'); require(['core/storage_validation'], function(amd) {amd.init(1756362950); M.util.js_complete('core/storage_validation');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/question/type/coderunner/ace/ace.js"></script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/question/type/coderunner/ace/ext-language_tools.js"></script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/question/type/coderunner/ace/ext-modelist.js"></script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/question/type/coderunner/ace/ext-static_highlight.js"></script>
<script src="https://moodle.bfh.ch/pluginfile.php/1/tiny_elements/js/tiny_elements_scripts.js%3Frev%3D1756117957"></script>
<script src="https://moodle.bfh.ch/lib/javascript.php/1756117957/local/annoto/initkaltura.js"></script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Zuletzt ge\u00e4ndert","name":"Name","error":"Fehler","info":"Infos","yes":"Ja","no":"Nein","cancel":"Abbrechen","confirm":"Best\u00e4tigen","areyousure":"Sind Sie sicher?","closebuttontitle":"Schliessen","unknownerror":"Unbekannter Fehler","file":"Datei","url":"URL","collapseall":"Alles einklappen","expandall":"Alles aufklappen"},"repository":{"type":"Typ","size":"Gr\u00f6\u00dfe","invalidjson":"Ung\u00fcltiger JSON-Text","nofilesattached":"Keine Datei","filepicker":"Dateiauswahl","logout":"Abmelden","nofilesavailable":"Keine Dateien vorhanden","norepositoriesavailable":"Sie k\u00f6nnen hier zur Zeit keine Dateien hochladen.","fileexistsdialogheader":"Datei bereits vorhanden","fileexistsdialog_editor":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt, den Sie gerade bearbeiten","fileexistsdialog_filemanager":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt","renameto":"Nach '{$a}' umbenennen","referencesexist":"Es gibt {$a} Links zu dieser Datei.","select":"W\u00e4hlen Sie"},"admin":{"confirmdeletecomments":"M\u00f6chten Sie die ausgew\u00e4hlten Kommentare wirklich l\u00f6schen?","confirmation":"Best\u00e4tigung"},"debug":{"debuginfo":"Debug-Info","line":"Zeile","stacktrace":"Stack trace"},"langconfig":{"labelsep":":\u00a0"}};
//]]>
</script>
<script>
//<![CDATA[
(function() { M.util.js_pending('random68b01bc2a0fe82'); Y.use('mod_assign', function(Y) { M.mod_assign.init_tree(Y, true, "assign_files_tree68b01bc2a0fe81");  M.util.js_complete('random68b01bc2a0fe82'); });
M.util.help_popups.setup(Y);
 M.util.js_pending('random68b01bc2a0fe810'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random68b01bc2a0fe810'); });
})();
//]]>
</script>

    </div>
    <div
    id="drawer-68b01bc31bdae68b01bc2a0fe89"
    class=" drawer bg-white hidden"
    aria-hidden="true"
    data-region="right-hand-drawer"
    role="dialog"
    tabindex="-1"
            aria-modal="true"
        aria-labelledby="message-drawer-header-68b01bc31bdae68b01bc2a0fe89"

>
            <div id="message-drawer-68b01bc31bdae68b01bc2a0fe89" class="message-app" data-region="message-drawer" role="region" tabindex="0">
            <h2 class="visually-hidden" id="message-drawer-header-68b01bc31bdae68b01bc2a0fe89">Mitteilungen</h2>
            <div class="closewidget text-end pe-2">
                <a class="text-dark btn-link" data-action="closedrawer" href="#"
                   title="Schliessen" aria-label="Schliessen"
                >
                    <i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i>
                </a>
            </div>
            <div class="header-container position-relative" data-region="header-container">
                <div class="hidden border-bottom p-1 px-sm-2" aria-hidden="true" data-region="view-contacts">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex align-items-center me-2" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Kontakte
                        </div>
                        <div class="ms-auto">
                            <a href="#" data-route="view-search" role="button" aria-label="Suchen">
                                <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                            </a>
                        </div>
                    </div>
                </div>                
                <div
                    class="hidden bg-white position-relative border-bottom p-1 px-sm-2"
                    aria-hidden="true"
                    data-region="view-conversation"
                >
                    <div class="hidden" data-region="header-content"></div>
                    <div class="hidden" data-region="header-edit-mode">
                        
                        <div class="d-flex p-2 align-items-center">
                            Ausgewählte Mitteilungen:
                            <span class="ms-1" data-region="message-selected-court">1</span>
                            <button type="button" class="ms-auto btn-close" aria-label="Mitteilungsauswahl abbrechen"
                                data-action="cancel-edit-mode">
                            </button>
                        </div>
                    </div>
                    <div data-region="header-placeholder">
                        <div class="d-flex">
                            <div
                                class="ms-2 rounded-circle bg-pulse-grey align-self-center"
                                style="height: 38px; width: 38px"
                            >
                            </div>
                            <div class="ms-2 " style="flex: 1">
                                <div
                                    class="mt-1 bg-pulse-grey w-75"
                                    style="height: 16px;"
                                >
                                </div>
                            </div>
                            <div
                                class="ms-2 bg-pulse-grey align-self-center"
                                style="height: 16px; width: 20px"
                            >
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                <div class="border-bottom p-1 px-sm-2" aria-hidden="false"  data-region="view-overview">
                    <div class="d-flex align-items-center">
                        <div class="input-group simplesearchform" role="group" aria-labelledby="messageoverviewgrouplabel">
                            <span class="visually-hidden" id="messageoverviewgrouplabel">Personen und Mitteilungen suchen</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Suchen"
                                aria-label="Suchen"
                                data-region="view-overview-search-input"
                            >
                            <span class="icon-no-margin btn btn-submit">
                                <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                            </span>
                        </div>
                        <div class="ms-2">
                            <a
                                href="#"
                                data-route="view-settings"
                                data-route-param="81409"
                                aria-label="Einstellungen"
                                role="button"
                            >
                                <i class="icon fa fa-gear fa-fw " aria-hidden="true" ></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-end mt-sm-3">
                        <a href="#" data-route="view-contacts" role="button">
                            <i class="icon fa fa-user fa-fw " aria-hidden="true" ></i>
                            Kontakte
                            <span
                                class="badge bg-primary text-white ms-2 hidden"
                                data-region="contact-request-count"
                            >
                                <span aria-hidden="true">0</span>
                                <span class="visually-hidden">Es gibt 0 anstehende Kontaktanfragen.</span>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="hidden border-bottom p-1 px-sm-2 view-search"  aria-hidden="true" data-region="view-search">
                    <div class="d-flex align-items-center">
                        <a
                            class="me-2 align-self-stretch d-flex align-items-center"
                            href="#"
                            data-route-back
                            data-action="cancel-search"
                            role="button"
                        >
                            <div class="icon-back-in-drawer">
                                <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                            </div>
                            <div class="icon-back-in-app">
                                <span class="dir-rtl-hide"><i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i></span>
                            </div>                        </a>
                        <div class="input-group simplesearchform" role="group" aria-labelledby="messagesearchgrouplabel">
                            <span class="visually-hidden" id="messagesearchgrouplabel">Personen und Mitteilungen suchen</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Suchen"
                                aria-label="Suchen"
                                data-region="search-input"
                            >
                            <button
                                class="btn btn-submit icon-no-margin"
                                type="button"
                                data-action="search"
                                aria-label="Suche durchführen"
                                title="Suche durchführen"
                            >
                                <span data-region="search-icon-container">
                                    <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                                </span>
                                <span class="hidden" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="hidden border-bottom p-1 px-sm-2 pb-sm-3" aria-hidden="true" data-region="view-settings">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch" >
                            <a class="h-100 d-flex me-2 align-items-center" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-xmark fa-fw " aria-hidden="true" ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Einstellungen
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-container position-relative" data-region="body-container">
                
                <div
                    class="hidden"
                    data-region="view-contact"
                    aria-hidden="true"
                >
                    <div class="p-2 pt-3" data-region="content-container"></div>
                </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="81409">
                    <div class="d-flex flex-column h-100">
                        <div class="p-3 border-bottom">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a
                                        id="contacts-tab-68b01bc31bdae68b01bc2a0fe89"
                                        class="nav-link active"
                                        href="#contacts-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                                        data-bs-toggle="tab"
                                        data-action="show-contacts-section"
                                        role="tab"
                                        aria-controls="contacts-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                                        aria-selected="true"
                                    >
                                        Kontakte
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        id="requests-tab-68b01bc31bdae68b01bc2a0fe89"
                                        class="nav-link"
                                        href="#requests-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                                        data-bs-toggle="tab"
                                        data-action="show-requests-section"
                                        role="tab"
                                        aria-controls="requests-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                                        aria-selected="false"
                                    >
                                        Anfragen
                                        <span class="badge bg-primary text-white ms-2 hidden"
                                            data-region="contact-request-count"
                                        >
                                            <span aria-hidden="true">0</span>
                                            <span class="visually-hidden">Es gibt 0 anstehende Kontaktanfragen.</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content d-flex flex-column h-100">
                                            <div
                    class="tab-pane fade show active h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="81409"
                                        id="contacts-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-68b01bc31bdae68b01bc2a0fe89"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        Keine Kontakte
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                    </div>
                </div>
                
                                            <div
                    class="tab-pane fade h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="81409"
                                        id="requests-tab-panel-68b01bc31bdae68b01bc2a0fe89"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-68b01bc31bdae68b01bc2a0fe89"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        Keine Kontaktanfragen
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
                
                <div
                    class="view-conversation hidden h-100"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-user-id="81409"
                    data-midnight="1756332000"
                    data-message-poll-min="10"
                    data-message-poll-max="120"
                    data-message-poll-after-max="300"
                    style="overflow-y: auto; overflow-x: hidden"
                >
                    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                            <div class="py-3 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                <p class="m-0">Kontaktanfrage gesendet</p>
                                <p class="fst-italic fw-light" data-region="text"></p>
                            </div>
                            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                <p class="m-0">Persönlicher Bereich</p>
                                <p class="fst-italic fw-light" data-region="text">Speichern Sie Entwürfe von Nachrichten, Links, Notizen usw. für einen späteren Zugriff.</p>
                           </div>
                            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</div>
                        </div>
                        <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                            
                            <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                <p class="text-muted" data-region="dialogue-text"></p>
                                <div class="mb-2 form-check hidden" data-region="delete-messages-for-all-users-toggle-container">
                                    <input type="checkbox" class="form-check-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                    <label class="form-check-label text-muted" for="delete-messages-for-all-users">
                                        Für mich und alle anderen löschen
                                    </label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-block">
                                        <span data-region="dialogue-button-text">Blockieren</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-unblock">
                                        <span data-region="dialogue-button-text">Blockierung aufheben</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-remove-contact">
                                        <span data-region="dialogue-button-text">Entfernen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-add-contact">
                                        <span data-region="dialogue-button-text">Hinzufügen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-delete-selected-messages">
                                        <span data-region="dialogue-button-text">Löschen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="confirm-delete-conversation">
                                        <span data-region="dialogue-button-text">Löschen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="request-add-contact">
                                        <span data-region="dialogue-button-text">Kontaktanfrage senden</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary hidden" data-action="accept-contact-request">
                                        <span data-region="dialogue-button-text">Annehmen und zu Kontakten hinzufügen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary hidden" data-action="decline-contact-request">
                                        <span data-region="dialogue-button-text">Ablehnen</span>
                                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-action="okay-confirm">OK</button>
                                    <button type="button" class="btn btn-secondary" data-action="cancel-confirm">Abbrechen</button>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                            <div class="h-100 d-flex flex-column">
                                <div
                                    class="px-2 pb-2 pt-0 bg-light h-100"
                                    style="overflow-y: auto"
                                >
                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="me-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ms-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                </div>
                            </div>                        </div>
                    </div>
                </div>
                
                <div
                    class="hidden"
                    aria-hidden="true"
                    data-region="view-group-info"
                >
                    <div
                        class="pt-3 h-100 d-flex flex-column"
                        data-region="group-info-content-container"
                        style="overflow-y: auto"
                    ></div>
                </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview"  data-user-id="81409">
                    <div id="message-drawer-view-overview-container-68b01bc31bdae68b01bc2a0fe89" class="d-flex flex-column h-100" style="overflow-y: auto">
                            
                            
                            <div
                                class="section border-0 card rounded-0"
                                data-region="view-overview-favourites"
                            >
                                <div id="view-overview-favourites-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-start p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#view-overview-favourites-target-68b01bc31bdae68b01bc2a0fe89"
                                        aria-expanded="false"
                                        aria-controls="view-overview-favourites-target-68b01bc31bdae68b01bc2a0fe89"
                                    >
                                        <span class="collapsed-icon-container">
                                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                                        </span>
                                        <span class="fw-bold ms-1">Favoriten</span>
                                        <small
                                            class="hidden ms-1"
                                            data-region="section-total-count-container" aria-labelledby="view-overview-favourites-total-count-label"
                                        >
                                            (<span aria-hidden="true" data-region="section-total-count"></span>)
                                            <span class="visually-hidden" id="view-overview-favourites-total-count-label">
                                                Insgesamt  Kommunikationen
                                            </span>
                                        </small>
                                        <span class="hidden ms-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                        </span>
                                        <span
                                            class="hidden badge rounded-pill bg-primary text-white ms-auto"
                                            data-region="section-unread-count-container" aria-labelledby="view-overview-favourites-unread-count-label"
                                        >
                                            <span aria-hidden="true" data-region="section-unread-count"></span>
                                            <span class="visually-hidden" id="view-overview-favourites-unread-count-label">
                                                 ungelesene Diskussionen
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="81409"
                                            id="view-overview-favourites-target-68b01bc31bdae68b01bc2a0fe89"
            aria-labelledby="view-overview-favourites-toggle"
            data-bs-parent="#message-drawer-view-overview-container-68b01bc31bdae68b01bc2a0fe89"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">Keine Kommunikation als Favorit markiert</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card rounded-0"
                                data-region="view-overview-group-messages"
                            >
                                <div id="view-overview-group-messages-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-start p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#view-overview-group-messages-target-68b01bc31bdae68b01bc2a0fe89"
                                        aria-expanded="false"
                                        aria-controls="view-overview-group-messages-target-68b01bc31bdae68b01bc2a0fe89"
                                    >
                                        <span class="collapsed-icon-container">
                                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                                        </span>
                                        <span class="fw-bold ms-1">Gruppe</span>
                                        <small
                                            class="hidden ms-1"
                                            data-region="section-total-count-container" aria-labelledby="view-overview-group-messages-total-count-label"
                                        >
                                            (<span aria-hidden="true" data-region="section-total-count"></span>)
                                            <span class="visually-hidden" id="view-overview-group-messages-total-count-label">
                                                Insgesamt  Kommunikationen
                                            </span>
                                        </small>
                                        <span class="hidden ms-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                        </span>
                                        <span
                                            class="hidden badge rounded-pill bg-primary text-white ms-auto"
                                            data-region="section-unread-count-container" aria-labelledby="view-overview-group-messages-unread-count-label"
                                        >
                                            <span aria-hidden="true" data-region="section-unread-count"></span>
                                            <span class="visually-hidden" id="view-overview-group-messages-unread-count-label">
                                                 ungelesene Diskussionen
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="81409"
                                            id="view-overview-group-messages-target-68b01bc31bdae68b01bc2a0fe89"
            aria-labelledby="view-overview-group-messages-toggle"
            data-bs-parent="#message-drawer-view-overview-container-68b01bc31bdae68b01bc2a0fe89"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">Keine Gruppenkommunikation</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card rounded-0"
                                data-region="view-overview-messages"
                            >
                                <div id="view-overview-messages-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-start p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#view-overview-messages-target-68b01bc31bdae68b01bc2a0fe89"
                                        aria-expanded="false"
                                        aria-controls="view-overview-messages-target-68b01bc31bdae68b01bc2a0fe89"
                                    >
                                        <span class="collapsed-icon-container">
                                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
                                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true" ></i>
                                        </span>
                                        <span class="fw-bold ms-1">Persönlich</span>
                                        <small
                                            class="hidden ms-1"
                                            data-region="section-total-count-container" aria-labelledby="view-overview-messages-total-count-label"
                                        >
                                            (<span aria-hidden="true" data-region="section-total-count"></span>)
                                            <span class="visually-hidden" id="view-overview-messages-total-count-label">
                                                Insgesamt  Kommunikationen
                                            </span>
                                        </small>
                                        <span class="hidden ms-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                        </span>
                                        <span
                                            class="hidden badge rounded-pill bg-primary text-white ms-auto"
                                            data-region="section-unread-count-container" aria-labelledby="view-overview-messages-unread-count-label"
                                        >
                                            <span aria-hidden="true" data-region="section-unread-count"></span>
                                            <span class="visually-hidden" id="view-overview-messages-unread-count-label">
                                                 ungelesene Diskussionen
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="81409"
                                            id="view-overview-messages-target-68b01bc31bdae68b01bc2a0fe89"
            aria-labelledby="view-overview-messages-toggle"
            data-bs-parent="#message-drawer-view-overview-container-68b01bc31bdae68b01bc2a0fe89"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">Keine persönliche Kommunikation</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
                <div
                    data-region="view-search"
                    aria-hidden="true"
                    class="h-100 hidden"
                    data-user-id="81409"
                    data-users-offset="0"
                    data-messages-offset="0"
                    style="overflow-y: auto"
                    
                >
                    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                        
                        <div class="d-flex flex-column">
                            <div class="mb-3 bg-white" data-region="all-contacts-container">
                                <div data-region="contacts-container"  class="pt-2">
                                    <h3 class="h6 px-2">Kontakte</h3>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div data-region="non-contacts-container" class="pt-2 border-top">
                                    <h3 class="h6 px-2">Weitere Personen</h3>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-link text-primary" data-action="load-more-users">
                                        <span data-region="button-text">Mehr laden</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white" data-region="messages-container">
                                <h3 class="h6 px-2 pt-2">Mitteilungen</h3>
                                <div class="list-group" data-region="list"></div>
                                <div class="text-end">
                                    <button class="btn btn-link text-primary" data-action="load-more-messages">
                                        <span data-region="button-text">Mehr laden</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <p class="hidden p-3 text-center" data-region="no-results-container">Keine Ergebnisse</p>
                        </div>                    </div>
                    <div class="hidden" data-region="loading-placeholder">
                        <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</div>
                    </div>
                    <div class="p-3 text-center" data-region="empty-message-container">
                        <p>Personen und Mitteilungen suchen</p>
                    </div>
                </div>                
                <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                    <div class="hidden" data-region="content-container">
                        
                        <div data-region="settings" class="p-3">
                            <h3 class="h6 fw-bold">Datenschutz</h3>
                            <p>Welche Personen sollen Ihnen persönliche Mitteilungen senden können?</p>
                            <div data-preference="blocknoncontacts" class="mb-3">
                                <fieldset>
                                    <legend class="visually-hidden">Mitteilungen akzeptieren von:</legend>
                                        <div class="form-check mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="form-check-input"
                                                id="block-noncontacts-68b01bc31bdae68b01bc2a0fe89-1"
                                                value="1"
                                            >
                                            <label class="form-check-label ms-2" for="block-noncontacts-68b01bc31bdae68b01bc2a0fe89-1">
                                                Nur meine Kontakte
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="form-check-input"
                                                id="block-noncontacts-68b01bc31bdae68b01bc2a0fe89-0"
                                                value="0"
                                            >
                                            <label class="form-check-label ms-2" for="block-noncontacts-68b01bc31bdae68b01bc2a0fe89-0">
                                                Kontakte und aus meinen Kursen
                                            </label>
                                        </div>
                                </fieldset>
                            </div>
                        
                            <div class="hidden" data-region="notification-preference-container" role="group" aria-labelledby="notification-preferences-header-68b01bc31bdae68b01bc2a0fe89">
                                <h3 class="mb-2 mt-4 h6 fw-bold" id="notification-preferences-header-68b01bc31bdae68b01bc2a0fe89">Systemnachrichten</h3>
                            </div>
                        
                            <h3 class="mb-2 mt-4 h6 fw-bold">Allgemein</h3>
                            <div data-preference="entertosend">
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="enter-to-send-68b01bc31bdae68b01bc2a0fe89" >
                                    <label class="form-check-label" for="enter-to-send-68b01bc31bdae68b01bc2a0fe89">
                                        Eingabetaste zum Senden tippen
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-region="placeholder-container">
                        
                        <div class="d-flex flex-column p-3">
                            <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                            <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ms-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ms-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ms-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-4">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ms-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ms-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-50 ms-2" style="height: 18px"></div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>            </div>
            <div class="footer-container position-relative" data-region="footer-container">
                
                <div
                    class="hidden border-top bg-white position-relative"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-enter-to-send="0"
                >
                    <div class="hidden p-sm-2" data-region="content-messages-footer-container">
                        
                            <div
                                class="emoji-auto-complete-container w-100 hidden"
                                data-region="emoji-auto-complete-container"
                                aria-live="polite"
                                aria-hidden="true"
                            >
                            </div>
                        <div class="d-flex mt-sm-1">
                            <textarea
                                dir="auto"
                                data-region="send-message-txt"
                                class="form-control bg-light"
                                rows="3"
                                data-auto-rows
                                data-min-rows="3"
                                data-max-rows="5"
                                aria-label="Mitteilung schreiben..."
                                placeholder="Mitteilung schreiben..."
                                style="resize: none"
                                maxlength="4096"
                            ></textarea>
                        
                            <div class="position-relative d-flex flex-column">
                                    <div
                                        data-region="emoji-picker-container"
                                        class="emoji-picker-container hidden"
                                        aria-hidden="true"
                                    >
                                        
                                        <div
                                            data-region="emoji-picker"
                                            class="card shadow emoji-picker"
                                        >
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0 selected"
                                                    data-action="show-category"
                                                    data-category="Recent"
                                                    title="Kürzlich verwendete"
                                                >
                                                    <i class="icon fa-regular fa-clock fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Smileys & Emotion"
                                                    title="Smileys & Emotionen"
                                                >
                                                    <i class="icon fa-regular fa-face-smile fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="People & Body"
                                                    title="Menschen & Körperteile"
                                                >
                                                    <i class="icon fa fa-person fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Animals & Nature"
                                                    title="Tiere & Natur"
                                                >
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Food & Drink"
                                                    title="Essen & Trinken"
                                                >
                                                    <i class="icon fa fa-pizza-slice fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Travel & Places"
                                                    title="Reisen & Orte"
                                                >
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Activities"
                                                    title="Aktivitäten"
                                                >
                                                    <i class="icon fa fa-futbol fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Objects"
                                                    title="Objekte"
                                                >
                                                    <i class="icon fa fa-hammer fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Symbols"
                                                    title="Symbole"
                                                >
                                                    <i class="icon fa fa-peace fa-fw " aria-hidden="true" ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
                                                    data-action="show-category"
                                                    data-category="Flags"
                                                    title="Nationalflaggen"
                                                >
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true" ></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <span class="input-group-text pe-0 bg-white text-muted">
                                                        <i class="icon fa fa-magnifying-glass fa-fw " aria-hidden="true" ></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        class="form-control border-start-0"
                                                        placeholder="Suchen"
                                                        aria-label="Suchen"
                                                        data-region="search-input"
                                                    >
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer d-flex flex-shrink-0"
                                                data-region="footer"
                                            >
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ms-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-icon ms-1"
                                        aria-label="Emoji-Auswahl umschalten"
                                        data-action="toggle-emoji-picker"
                                    >
                                        <i class="icon fa-regular fa-face-smile fa-fw " aria-hidden="true" ></i>
                                    </button>
                                <button
                                    class="btn btn-icon ms-1 mt-auto"
                                    aria-label="Mitteilung senden"
                                    data-action="send-message"
                                >
                                    <span data-region="send-icon-container"><i class="icon fa-regular fa-paper-plane fa-fw " aria-hidden="true" ></i></span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-sm-2" data-region="content-messages-footer-edit-mode-container">
                        
                        <div class="d-flex p-3 justify-content-end">
                            <button
                                class="btn btn-icon my-1 icon-size-4"
                                data-action="delete-selected-messages"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Ausgewählte Mitteilungen löschen"
                            >
                                <span data-region="icon-container"><i class="icon fa fa-trash-can fa-fw " aria-hidden="true" ></i></span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                                <span class="visually-hidden">Ausgewählte Mitteilungen löschen</span>
                            </button>
                        </div>                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-contact-container">
                        
                        <div class="p-3 bg-white">
                            <p data-region="title"></p>
                            <p class="text-muted" data-region="text"></p>
                            <button type="button" class="btn btn-primary w-100" data-action="request-add-contact">
                                <span data-region="dialogue-button-text">Kontaktanfrage senden</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-unblock-container">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">Sie haben diese Person blockiert.</p>
                            <button type="button" class="btn btn-primary w-100" data-action="request-unblock">
                                <span data-region="dialogue-button-text">Blockierung für diese Person aufheben</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-spinner fa-spin fa-fw "  title="Laden ..." role="img" aria-label="Laden ..."></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-unable-to-message">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">Sie können dieser Person keine Mitteilung senden.</p>
                        </div>
                    </div>
                    <div class="p-sm-2" data-region="placeholder-container">
                        <div class="d-flex">
                            <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                            <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                        </div>                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                    <div data-region="view-overview" class="text-center">
                        <a href="https://moodle.bfh.ch/message/index.php">
                            Alle anzeigen
                        </a>
                    </div>
            </div>
        </div>

</div>
</div>



<script type="text/javascript">
    function setCookie(name,value,exdays)
    {
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) +
                ((exdays==null) ? "" : ("; expires="+exdate.toUTCString()));
        document.cookie=name + "=" + c_value + ";path=/";
        window.location.reload();
    }

    function eraseCookie(name) {
        setCookie(name,"path=/",-1);
        window.location.reload();
    }
</script></body></html>