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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories_home', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin/categories/add' => [[['_route' => 'admin_categories_add', '_controller' => 'App\\Controller\\Admin\\CategoriesController::addCategories'], null, null, null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_posts_home', '_controller' => 'App\\Controller\\Admin\\PostsController::index'], null, null, null, true, false, null]],
        '/admin/posts/add' => [[['_route' => 'admin_posts_add', '_controller' => 'App\\Controller\\Admin\\PostsController::addPosts'], null, null, null, false, false, null]],
        '/admin/slider' => [[['_route' => 'admin_slider_home', '_controller' => 'App\\Controller\\Admin\\SliderController::index'], null, null, null, true, false, null]],
        '/admin/slider/add' => [[['_route' => 'admin_slider_add', '_controller' => 'App\\Controller\\Admin\\SliderController::addSlider'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories_home', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/posts' => [[['_route' => 'posts_home', '_controller' => 'App\\Controller\\PostsController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|categories/update/([^/]++)(*:204)'
                    .'|posts/(?'
                        .'|update/([^/]++)(*:236)'
                        .'|delete/([^/]++)(*:259)'
                        .'|activate/([^/]++)(*:284)'
                    .')'
                    .'|slider/(?'
                        .'|update/([^/]++)(*:318)'
                        .'|delete/([^/]++)(*:341)'
                        .'|activate/([^/]++)(*:366)'
                    .')'
                .')'
                .'|/categories/single/([^/]++)(*:403)'
                .'|/posts/([^/]++)(*:426)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:475)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:518)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        204 => [[['_route' => 'admin_categories_update', '_controller' => 'App\\Controller\\Admin\\CategoriesController::updateCatgeory'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'admin_posts_update', '_controller' => 'App\\Controller\\Admin\\PostsController::updatePost'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'admin_posts_delete', '_controller' => 'App\\Controller\\Admin\\PostsController::deletePost'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'admin_posts_activate', '_controller' => 'App\\Controller\\Admin\\PostsController::activatePost'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'admin_slider_update', '_controller' => 'App\\Controller\\Admin\\SliderController::updateSlider'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'admin_slider_delete', '_controller' => 'App\\Controller\\Admin\\SliderController::deletePost'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'admin_slider_activate', '_controller' => 'App\\Controller\\Admin\\SliderController::activateSlider'], ['id'], null, null, false, true, null]],
        403 => [[['_route' => 'categories_single', '_controller' => 'App\\Controller\\CategoriesController::single'], ['slug'], null, null, false, true, null]],
        426 => [[['_route' => 'posts_single', '_controller' => 'App\\Controller\\PostsController::single'], ['slug'], null, null, false, true, null]],
        475 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        518 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
