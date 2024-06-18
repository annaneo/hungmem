<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\SiteController::home'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\SiteController::home'], null, null, null, false, false, null],
        ],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\SiteController::test'], null, null, null, false, false, null]],
        '/placeholder' => [[['_route' => 'app_placeholder', '_controller' => 'App\\Controller\\SiteController::placeholder'], null, null, null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\SiteController::map'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\SiteController::about'], null, null, null, true, false, null]],
        '/context' => [[['_route' => 'app_context', '_controller' => 'App\\Controller\\SiteController::context'], null, null, null, false, false, null]],
        '/nutzung' => [[['_route' => 'app_usage', '_controller' => 'App\\Controller\\SiteController::usage'], null, null, null, false, false, null]],
        '/impressum' => [[['_route' => 'app_imprint', '_controller' => 'App\\Controller\\SiteController::imprint'], null, null, null, false, false, null]],
        '/api/json' => [[['_route' => 'app_jsonapi', '_controller' => 'App\\Controller\\SiteController::jsonapi'], null, null, null, false, false, null]],
        '/interview/fenyes' => [[['_route' => 'app_fenyes', '_controller' => 'App\\Controller\\SiteController::fenyes'], null, null, null, false, false, null]],
        '/interview/camargo' => [[['_route' => 'app_camargo', '_controller' => 'App\\Controller\\SiteController::camargo'], null, null, null, false, false, null]],
        '/interview/guenther' => [[['_route' => 'app_guenther', '_controller' => 'App\\Controller\\SiteController::guenther'], null, null, null, false, false, null]],
        '/interview/guggenheim' => [[['_route' => 'app_guggenheim', '_controller' => 'App\\Controller\\SiteController::guggenheim'], null, null, null, false, false, null]],
        '/interview/heimann' => [[['_route' => 'app_heimann', '_controller' => 'App\\Controller\\SiteController::heimann'], null, null, null, false, false, null]],
        '/interview/horwitz' => [[['_route' => 'app_horwitz', '_controller' => 'App\\Controller\\SiteController::horwitz'], null, null, null, false, false, null]],
        '/interview/korn' => [[['_route' => 'app_korn', '_controller' => 'App\\Controller\\SiteController::korn'], null, null, null, false, false, null]],
        '/interview/lahnstein' => [[['_route' => 'app_lahnstein', '_controller' => 'App\\Controller\\SiteController::lahnstein'], null, null, null, false, false, null]],
        '/interview/landshut' => [[['_route' => 'app_landshut', '_controller' => 'App\\Controller\\SiteController::landshut'], null, null, null, false, false, null]],
        '/interview/lohse' => [[['_route' => 'app_lohse', '_controller' => 'App\\Controller\\SiteController::lohse'], null, null, null, false, false, null]],
        '/interview/lubinska' => [[['_route' => 'app_lubinska', '_controller' => 'App\\Controller\\SiteController::lubinska'], null, null, null, false, false, null]],
        '/interview/melamed' => [[['_route' => 'app_melamed', '_controller' => 'App\\Controller\\SiteController::melamed'], null, null, null, false, false, null]],
        '/interview/nasirzadeh' => [[['_route' => 'app_nasirzadeh', '_controller' => 'App\\Controller\\SiteController::nasirzadeh'], null, null, null, false, false, null]],
        '/interview/parnass' => [[['_route' => 'app_parnass', '_controller' => 'App\\Controller\\SiteController::parnass'], null, null, null, false, false, null]],
        '/interview/pestov' => [[['_route' => 'app_pestov', '_controller' => 'App\\Controller\\SiteController::pestov'], null, null, null, false, false, null]],
        '/interview/rosenblum' => [[['_route' => 'app_rosenblum', '_controller' => 'App\\Controller\\SiteController::rosenblum'], null, null, null, false, false, null]],
        '/interview/trebitsch' => [[['_route' => 'app_trebitsch', '_controller' => 'App\\Controller\\SiteController::trebitsch'], null, null, null, false, false, null]],
        '/interview/wallenstein' => [[['_route' => 'app_wallenstein', '_controller' => 'App\\Controller\\SiteController::wallenstein'], null, null, null, false, false, null]],
        '/interview/wittenberg' => [[['_route' => 'app_wittenberg', '_controller' => 'App\\Controller\\SiteController::wittenberg'], null, null, null, false, false, null]],
        '/interview/zunik' => [[['_route' => 'app_zunik', '_controller' => 'App\\Controller\\SiteController::zunik'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
