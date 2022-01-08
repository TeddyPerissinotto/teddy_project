<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'admin_categories_home' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], [], [['text', '/admin/categories/']], [], []],
    'admin_categories_add' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::addCategories'], [], [['text', '/admin/categories/add']], [], []],
    'admin_categories_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::updateCatgeory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories/update']], [], []],
    'admin_posts_home' => [[], ['_controller' => 'App\\Controller\\Admin\\PostsController::index'], [], [['text', '/admin/posts/']], [], []],
    'admin_posts_add' => [[], ['_controller' => 'App\\Controller\\Admin\\PostsController::addPosts'], [], [['text', '/admin/posts/add']], [], []],
    'admin_posts_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PostsController::updatePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/posts/update']], [], []],
    'admin_posts_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PostsController::deletePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/posts/delete']], [], []],
    'admin_posts_activate' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PostsController::activatePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/posts/activate']], [], []],
    'admin_slider_home' => [[], ['_controller' => 'App\\Controller\\Admin\\SliderController::index'], [], [['text', '/admin/slider/']], [], []],
    'admin_slider_add' => [[], ['_controller' => 'App\\Controller\\Admin\\SliderController::addSlider'], [], [['text', '/admin/slider/add']], [], []],
    'admin_slider_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SliderController::updateSlider'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider/update']], [], []],
    'admin_slider_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SliderController::deletePost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider/delete']], [], []],
    'admin_slider_activate' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SliderController::activateSlider'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider/activate']], [], []],
    'admin_slider_activate_img_mobile' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SliderController::activateImageMobile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider/activate-on-mobile']], [], []],
    'categories_home' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories/']], [], []],
    'categories_single' => [['slug'], ['_controller' => 'App\\Controller\\CategoriesController::single'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/categories/single']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'posts_home' => [[], ['_controller' => 'App\\Controller\\PostsController::index'], [], [['text', '/posts/']], [], []],
    'posts_single' => [['slug'], ['_controller' => 'App\\Controller\\PostsController::single'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/posts']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
