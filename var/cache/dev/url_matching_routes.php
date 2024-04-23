<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::adminAddVideoGame'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/videogames' => [[['_route' => 'videogames_list', '_controller' => 'App\\Controller\\DefaultController::videogamesList'], null, ['GET' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/check' => [[['_route' => 'app_login_check', '_controller' => 'App\\Controller\\SecurityController::check'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/videogame' => [[['_route' => 'app_video_game_index', '_controller' => 'App\\Controller\\VideoGameController::index'], null, ['GET' => 0], null, true, false, null]],
        '/videogame/new' => [[['_route' => 'app_video_game_new', '_controller' => 'App\\Controller\\VideoGameController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|edit/([1-999]\\d*)(*:229)'
                    .'|remove/([1-999]\\d*)(*:256)'
                .')'
                .'|/videogames/([1-999]\\d*)(*:289)'
                .'|/([^/]++)/p(?'
                    .'|ublic(*:316)'
                    .'|rivate(?'
                        .'|(*:333)'
                        .'|/edit(*:346)'
                    .')'
                .')'
                .'|/videogame/([^/]++)(?'
                    .'|(*:378)'
                    .'|/edit(*:391)'
                    .'|(*:399)'
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
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::adminEditVideoGame'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        256 => [[['_route' => 'app_admin_remove', '_controller' => 'App\\Controller\\AdminController::adminRemoveVideoGame'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'videogame_card', '_controller' => 'App\\Controller\\DefaultController::videogamesCard'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        316 => [[['_route' => 'user_public_profile', '_controller' => 'App\\Controller\\UserController::publicProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'user_private_profile', '_controller' => 'App\\Controller\\UserController::privateProfile'], ['id'], ['GET' => 0], null, false, false, null]],
        346 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updateProfileFields'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        378 => [[['_route' => 'app_video_game_show', '_controller' => 'App\\Controller\\VideoGameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_video_game_edit', '_controller' => 'App\\Controller\\VideoGameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [
            [['_route' => 'app_video_game_delete', '_controller' => 'App\\Controller\\VideoGameController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];