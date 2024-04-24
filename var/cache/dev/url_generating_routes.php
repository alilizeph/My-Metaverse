<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin']], [], [], []],
    'app_admin_new' => [[], ['_controller' => 'App\\Controller\\AdminController::adminAddVideoGame'], [], [['text', '/admin/new']], [], [], []],
    'app_admin_edit' => [[], ['_controller' => 'App\\Controller\\AdminController::adminEditVideoGame'], ['id' => '[1-999]\\d*'], [['text', '/admin/edit/']], [], [], []],
    'app_admin_remove' => [[], ['_controller' => 'App\\Controller\\AdminController::adminRemoveVideoGame'], [], [['text', '/admin/remove/']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'videogames_list' => [[], ['_controller' => 'App\\Controller\\DefaultController::videogamesList'], [], [['text', '/videogames']], [], [], []],
    'videogame_card' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::videogamesCard'], ['id' => '[1-999]\\d*'], [['variable', '/', '[1-999]\\d*', 'id', true], ['text', '/videogames']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::check'], [], [['text', '/check']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'user_public_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::publicProfile'], [], [['text', '/public'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'user_private_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::privateProfile'], [], [['text', '/private'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'update_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::updateProfileFields'], [], [['text', '/private/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_video_game_index' => [[], ['_controller' => 'App\\Controller\\VideoGameController::index'], [], [['text', '/videogame/']], [], [], []],
    'app_video_game_new' => [[], ['_controller' => 'App\\Controller\\VideoGameController::new'], [], [['text', '/videogame/new']], [], [], []],
    'app_video_game_show' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
    'app_video_game_edit' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
    'app_video_game_delete' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
    'App\Controller\AdminController::admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::adminAddVideoGame' => [[], ['_controller' => 'App\\Controller\\AdminController::adminAddVideoGame'], [], [['text', '/admin/new']], [], [], []],
    'App\Controller\AdminController::adminEditVideoGame' => [[], ['_controller' => 'App\\Controller\\AdminController::adminEditVideoGame'], ['id' => '[1-999]\\d*'], [['text', '/admin/edit/']], [], [], []],
    'App\Controller\AdminController::adminRemoveVideoGame' => [[], ['_controller' => 'App\\Controller\\AdminController::adminRemoveVideoGame'], [], [['text', '/admin/remove/']], [], [], []],
    'App\Controller\DefaultController::index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\DefaultController::videogamesList' => [[], ['_controller' => 'App\\Controller\\DefaultController::videogamesList'], [], [['text', '/videogames']], [], [], []],
    'App\Controller\DefaultController::videogamesCard' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::videogamesCard'], ['id' => '[1-999]\\d*'], [['variable', '/', '[1-999]\\d*', 'id', true], ['text', '/videogames']], [], [], []],
    'App\Controller\SecurityController::registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::check' => [[], ['_controller' => 'App\\Controller\\SecurityController::check'], [], [['text', '/check']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UserController::publicProfile' => [['id'], ['_controller' => 'App\\Controller\\UserController::publicProfile'], [], [['text', '/public'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\UserController::privateProfile' => [['id'], ['_controller' => 'App\\Controller\\UserController::privateProfile'], [], [['text', '/private'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\UserController::updateProfileFields' => [['id'], ['_controller' => 'App\\Controller\\UserController::updateProfileFields'], [], [['text', '/private/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\VideoGameController::index' => [[], ['_controller' => 'App\\Controller\\VideoGameController::index'], [], [['text', '/videogame/']], [], [], []],
    'App\Controller\VideoGameController::new' => [[], ['_controller' => 'App\\Controller\\VideoGameController::new'], [], [['text', '/videogame/new']], [], [], []],
    'App\Controller\VideoGameController::show' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
    'App\Controller\VideoGameController::edit' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
    'App\Controller\VideoGameController::delete' => [['id'], ['_controller' => 'App\\Controller\\VideoGameController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/videogame']], [], [], []],
];
