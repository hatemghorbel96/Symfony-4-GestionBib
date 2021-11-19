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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/auteur' => [[['_route' => 'auteur_index', '_controller' => 'App\\Controller\\AuteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/auteur/new' => [[['_route' => 'auteur_new', '_controller' => 'App\\Controller\\AuteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/editeur' => [[['_route' => 'editeur_index', '_controller' => 'App\\Controller\\EditeurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/editeur/new' => [[['_route' => 'editeur_new', '_controller' => 'App\\Controller\\EditeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/emprunteur' => [[['_route' => 'emprunteur_index', '_controller' => 'App\\Controller\\EmprunteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/emprunteur/new' => [[['_route' => 'emprunteur_new', '_controller' => 'App\\Controller\\EmprunteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre' => [[['_route' => 'livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livre/new' => [[['_route' => 'livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SercurityController::registration'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\TestController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\TestController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/utilisateurs/modifier/([^/]++)(*:209)'
                    .'|uteur/([^/]++)(?'
                        .'|(*:234)'
                        .'|/edit(*:247)'
                        .'|(*:255)'
                    .')'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:289)'
                        .'|remove/([^/]++)(*:312)'
                    .')'
                    .'|tegorie/([^/]++)(?'
                        .'|(*:340)'
                        .'|/edit(*:353)'
                        .'|(*:361)'
                    .')'
                .')'
                .'|/e(?'
                    .'|diteur/([^/]++)(?'
                        .'|(*:394)'
                        .'|/edit(*:407)'
                        .'|(*:415)'
                    .')'
                    .'|mprunteur/([^/]++)(?'
                        .'|(*:445)'
                        .'|/edit(*:458)'
                        .'|(*:466)'
                    .')'
                .')'
                .'|/livre/([^/]++)(?'
                    .'|(*:494)'
                    .'|/edit(*:507)'
                    .'|(*:515)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        209 => [[['_route' => 'admin_modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'auteur_show', '_controller' => 'App\\Controller\\AuteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'auteur_edit', '_controller' => 'App\\Controller\\AuteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        289 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        394 => [[['_route' => 'editeur_show', '_controller' => 'App\\Controller\\EditeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'editeur_edit', '_controller' => 'App\\Controller\\EditeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'editeur_delete', '_controller' => 'App\\Controller\\EditeurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        445 => [[['_route' => 'emprunteur_show', '_controller' => 'App\\Controller\\EmprunteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'emprunteur_edit', '_controller' => 'App\\Controller\\EmprunteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'emprunteur_delete', '_controller' => 'App\\Controller\\EmprunteurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        494 => [[['_route' => 'livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        515 => [
            [['_route' => 'livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
