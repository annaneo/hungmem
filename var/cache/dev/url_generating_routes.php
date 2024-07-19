<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_home' => [[], ['_controller' => 'App\\Controller\\SiteController::home'], [], [['text', '/']], [], [], []],
    'app_map' => [[], ['_controller' => 'App\\Controller\\SiteController::map'], [], [['text', '/map']], [], [], []],
    'app_deportation' => [[], ['_controller' => 'App\\Controller\\SiteController::deportation'], [], [['text', '/deportationen/']], [], [], []],
    'app_biographies' => [[], ['_controller' => 'App\\Controller\\SiteController::biographies'], [], [['text', '/biographien/']], [], [], []],
    'app_sources' => [[], ['_controller' => 'App\\Controller\\SiteController::sources'], [], [['text', '/quellen']], [], [], []],
    'app_context' => [[], ['_controller' => 'App\\Controller\\SiteController::context'], [], [['text', '/context']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\SiteController::about'], [], [['text', '/hungmem']], [], [], []],
    'app_imprint' => [[], ['_controller' => 'App\\Controller\\SiteController::imprint'], [], [['text', '/impressum']], [], [], []],
    'app_jsonapi' => [[], ['_controller' => 'App\\Controller\\SiteController::jsonapi'], [], [['text', '/api/json']], [], [], []],
    'app_deportation_vw' => [[], ['_controller' => 'App\\Controller\\SiteController::deportationVw'], [], [['text', '/deportationen/gruppe-der-300']], [], [], []],
    'app_deportation_salzwedel' => [[], ['_controller' => 'App\\Controller\\SiteController::deportationSalzwedel'], [], [['text', '/deportationen/salzwedel']], [], [], []],
    'app_studytemplate' => [[], ['_controller' => 'App\\Controller\\SiteController::studytemplate'], [], [['text', '/studytemplate']], [], [], []],
    'app_biographytemplate' => [[], ['_controller' => 'App\\Controller\\SiteController::biographytemplate'], [], [['text', '/biographytemplate']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\SiteController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\SiteController::home' => [[], ['_controller' => 'App\\Controller\\SiteController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\SiteController::map' => [[], ['_controller' => 'App\\Controller\\SiteController::map'], [], [['text', '/map']], [], [], []],
    'App\Controller\SiteController::deportation' => [[], ['_controller' => 'App\\Controller\\SiteController::deportation'], [], [['text', '/deportationen/']], [], [], []],
    'App\Controller\SiteController::biographies' => [[], ['_controller' => 'App\\Controller\\SiteController::biographies'], [], [['text', '/biographien/']], [], [], []],
    'App\Controller\SiteController::sources' => [[], ['_controller' => 'App\\Controller\\SiteController::sources'], [], [['text', '/quellen']], [], [], []],
    'App\Controller\SiteController::context' => [[], ['_controller' => 'App\\Controller\\SiteController::context'], [], [['text', '/context']], [], [], []],
    'App\Controller\SiteController::about' => [[], ['_controller' => 'App\\Controller\\SiteController::about'], [], [['text', '/hungmem']], [], [], []],
    'App\Controller\SiteController::imprint' => [[], ['_controller' => 'App\\Controller\\SiteController::imprint'], [], [['text', '/impressum']], [], [], []],
    'App\Controller\SiteController::jsonapi' => [[], ['_controller' => 'App\\Controller\\SiteController::jsonapi'], [], [['text', '/api/json']], [], [], []],
    'App\Controller\SiteController::deportationVw' => [[], ['_controller' => 'App\\Controller\\SiteController::deportationVw'], [], [['text', '/deportationen/gruppe-der-300']], [], [], []],
    'App\Controller\SiteController::deportationSalzwedel' => [[], ['_controller' => 'App\\Controller\\SiteController::deportationSalzwedel'], [], [['text', '/deportationen/salzwedel']], [], [], []],
    'App\Controller\SiteController::studytemplate' => [[], ['_controller' => 'App\\Controller\\SiteController::studytemplate'], [], [['text', '/studytemplate']], [], [], []],
    'App\Controller\SiteController::biographytemplate' => [[], ['_controller' => 'App\\Controller\\SiteController::biographytemplate'], [], [['text', '/biographytemplate']], [], [], []],
];
