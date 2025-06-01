<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'app_site_indexnolocale', '_controller' => 'App\\Controller\\SiteController::indexNoLocale'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\SiteController::home'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(de|en)(?'
                    .'|(*:18)'
                    .'|/(?'
                        .'|map(*:32)'
                        .'|deportationen(?'
                            .'|(*:55)'
                            .'|/(?'
                                .'|gruppe\\-300(*:77)'
                                .'|frauen\\-dessauer\\-ufer(*:106)'
                                .'|zwangsarbeit\\-ruestungsindustrie(*:146)'
                                .'|rauemung\\-luebberstedt(*:176)'
                            .')'
                        .')'
                        .'|biogra(?'
                            .'|fien(?'
                                .'|(*:202)'
                                .'|/(?'
                                    .'|gyula\\-fuerst(*:227)'
                                    .'|schwestern\\-mereny(*:253)'
                                    .'|yehuda\\-blum(*:273)'
                                    .'|katharina\\-hardy(*:297)'
                                .')'
                            .')'
                            .'|phytemplate(*:318)'
                        .')'
                        .'|quellen(*:334)'
                        .'|context(*:349)'
                        .'|hungmem(*:364)'
                        .'|impressum(*:381)'
                        .'|api/json(*:397)'
                        .'|studytemplate(*:418)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:459)'
                    .'|wdt/([^/]++)(*:479)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:521)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:558)'
                                .'|router(*:572)'
                                .'|exception(?'
                                    .'|(*:592)'
                                    .'|\\.css(*:605)'
                                .')'
                            .')'
                            .'|(*:615)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        18 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\SiteController::home'], ['_locale'], null, null, true, true, null]],
        32 => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\SiteController::map'], ['_locale'], null, null, false, false, null]],
        55 => [[['_route' => 'app_deportation', '_controller' => 'App\\Controller\\SiteController::deportation'], ['_locale'], null, null, true, false, null]],
        77 => [[['_route' => 'app_deportation_vw', '_controller' => 'App\\Controller\\SiteController::deportationVw'], ['_locale'], null, null, false, false, null]],
        106 => [[['_route' => 'app_deportation_dessauerUfer', '_controller' => 'App\\Controller\\SiteController::deportationDessauerUfer'], ['_locale'], null, null, false, false, null]],
        146 => [[['_route' => 'app_deportation_salzwedel', '_controller' => 'App\\Controller\\SiteController::deportationSalzwedel'], ['_locale'], null, null, false, false, null]],
        176 => [[['_route' => 'app_deportation_luebberstedt', '_controller' => 'App\\Controller\\SiteController::deportationLuebberstedt'], ['_locale'], null, null, false, false, null]],
        202 => [[['_route' => 'app_biographies', '_controller' => 'App\\Controller\\SiteController::biographies'], ['_locale'], null, null, true, false, null]],
        227 => [[['_route' => 'app_bio_fuerst', '_controller' => 'App\\Controller\\SiteController::biographyFuerst'], ['_locale'], null, null, false, false, null]],
        253 => [[['_route' => 'app_bio_mereny', '_controller' => 'App\\Controller\\SiteController::biographyMereny'], ['_locale'], null, null, false, false, null]],
        273 => [[['_route' => 'app_bio_blum', '_controller' => 'App\\Controller\\SiteController::biographyBlum'], ['_locale'], null, null, false, false, null]],
        297 => [[['_route' => 'app_bio_hardy', '_controller' => 'App\\Controller\\SiteController::biographyHardy'], ['_locale'], null, null, false, false, null]],
        318 => [[['_route' => 'app_biographytemplate', '_controller' => 'App\\Controller\\SiteController::biographytemplate'], ['_locale'], null, null, false, false, null]],
        334 => [[['_route' => 'app_sources', '_controller' => 'App\\Controller\\SiteController::sources'], ['_locale'], null, null, false, false, null]],
        349 => [[['_route' => 'app_context', '_controller' => 'App\\Controller\\SiteController::context'], ['_locale'], null, null, false, false, null]],
        364 => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\SiteController::about'], ['_locale'], null, null, false, false, null]],
        381 => [[['_route' => 'app_imprint', '_controller' => 'App\\Controller\\SiteController::imprint'], ['_locale'], null, null, false, false, null]],
        397 => [[['_route' => 'app_jsonapi', '_controller' => 'App\\Controller\\SiteController::jsonapi'], ['_locale'], null, null, false, false, null]],
        418 => [[['_route' => 'app_studytemplate', '_controller' => 'App\\Controller\\SiteController::studytemplate'], ['_locale'], null, null, false, false, null]],
        459 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        479 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        521 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        558 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        572 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        592 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        605 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        615 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
