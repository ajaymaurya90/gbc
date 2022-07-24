<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/video-list' => [[['_route' => 'video_list', '_controller' => 'App\\Controller\\FrontController::videoList'], null, null, null, false, false, null]],
        '/video-details' => [[['_route' => 'video_details', '_controller' => 'App\\Controller\\FrontController::videoDetails'], null, null, null, false, false, null]],
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
