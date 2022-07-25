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
        '/video-list' => [[['_route' => 'video_list', '_controller' => 'App\\Controller\\FrontController::videoList'], null, null, null, false, false, null]],
        '/video-details' => [[['_route' => 'video_details', '_controller' => 'App\\Controller\\FrontController::videoDetails'], null, null, null, false, false, null]],
        '/search-results' => [[['_route' => 'search_results', '_controller' => 'App\\Controller\\FrontController::searchResults'], null, ['POST' => 0], null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\FrontController::pricing'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\FrontController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\FrontController::login'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\FrontController::payment'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
