<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], []],
    'admin_utilisateurs' => [[], ['_controller' => 'App\\Controller\\AdminController::usersList'], [], [['text', '/admin/utilisateurs']], [], []],
    'admin_modifier_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/utilisateurs/modifier']], [], []],
    'auteur_index' => [[], ['_controller' => 'App\\Controller\\AuteurController::index'], [], [['text', '/auteur/']], [], []],
    'auteur_new' => [[], ['_controller' => 'App\\Controller\\AuteurController::new'], [], [['text', '/auteur/new']], [], []],
    'auteur_show' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/auteur']], [], []],
    'auteur_edit' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/auteur']], [], []],
    'auteur_delete' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/auteur']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], []],
    'categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], []],
    'categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'editeur_index' => [[], ['_controller' => 'App\\Controller\\EditeurController::index'], [], [['text', '/editeur/']], [], []],
    'editeur_new' => [[], ['_controller' => 'App\\Controller\\EditeurController::new'], [], [['text', '/editeur/new']], [], []],
    'editeur_show' => [['id'], ['_controller' => 'App\\Controller\\EditeurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/editeur']], [], []],
    'editeur_edit' => [['id'], ['_controller' => 'App\\Controller\\EditeurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/editeur']], [], []],
    'editeur_delete' => [['id'], ['_controller' => 'App\\Controller\\EditeurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/editeur']], [], []],
    'emprunteur_index' => [[], ['_controller' => 'App\\Controller\\EmprunteurController::index'], [], [['text', '/emprunteur/']], [], []],
    'emprunteur_new' => [[], ['_controller' => 'App\\Controller\\EmprunteurController::new'], [], [['text', '/emprunteur/new']], [], []],
    'emprunteur_show' => [['id'], ['_controller' => 'App\\Controller\\EmprunteurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/emprunteur']], [], []],
    'emprunteur_edit' => [['id'], ['_controller' => 'App\\Controller\\EmprunteurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/emprunteur']], [], []],
    'emprunteur_delete' => [['id'], ['_controller' => 'App\\Controller\\EmprunteurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/emprunteur']], [], []],
    'livre_index' => [[], ['_controller' => 'App\\Controller\\LivreController::index'], [], [['text', '/livre/']], [], []],
    'livre_new' => [[], ['_controller' => 'App\\Controller\\LivreController::new'], [], [['text', '/livre/new']], [], []],
    'livre_show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livre']], [], []],
    'livre_edit' => [['id'], ['_controller' => 'App\\Controller\\LivreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/livre']], [], []],
    'livre_delete' => [['id'], ['_controller' => 'App\\Controller\\LivreController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livre']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SercurityController::registration'], [], [['text', '/inscription']], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\TestController::login'], [], [['text', '/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\TestController::logout'], [], [['text', '/deconnexion']], [], []],
];
