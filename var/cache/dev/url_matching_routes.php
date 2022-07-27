<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_main_page', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\AdminController::categories'], null, null, null, false, false, null]],
        '/admin/edit-category' => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\AdminController::editCategory'], null, null, null, false, false, null]],
        '/admin/videos' => [[['_route' => 'videos', '_controller' => 'App\\Controller\\AdminController::videos'], null, null, null, false, false, null]],
        '/admin/upload-video' => [[['_route' => 'upload_video', '_controller' => 'App\\Controller\\AdminController::uploadVideo'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/video-details' => [[['_route' => 'video_details', '_controller' => 'App\\Controller\\FrontController::videoDetails'], null, null, null, false, false, null]],
        '/search-results' => [[['_route' => 'search_results', '_controller' => 'App\\Controller\\FrontController::searchResults'], null, ['POST' => 0], null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\FrontController::pricing'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\FrontController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\FrontController::login'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\FrontController::payment'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/video\\-list/category/([^/,]++),([^/]++)(*:47)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:85)'
                    .'|wdt/([^/]++)(*:104)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:150)'
                            .'|router(*:164)'
                            .'|exception(?'
                                .'|(*:184)'
                                .'|\\.css(*:197)'
                            .')'
                        .')'
                        .'|(*:207)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'video_list', '_controller' => 'App\\Controller\\FrontController::videoList'], ['categoryname', 'id'], null, null, false, true, null]],
        85 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        104 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        150 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        164 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        197 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        207 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
