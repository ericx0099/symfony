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
        '/arbitre' => [[['_route' => 'arbitre', '_controller' => 'App\\Controller\\ArbitreController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\ArbitreController::register'], null, null, null, false, false, null]],
        '/jugador' => [[['_route' => 'jugador_index', '_controller' => 'App\\Controller\\JugadorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/jugador/new' => [[['_route' => 'jugador_new', '_controller' => 'App\\Controller\\JugadorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'inici', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null],
        ],
        '/miPerfil' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::miPerfil'], null, null, null, false, false, null]],
        '/misTorneos' => [[['_route' => 'user_torneigos', '_controller' => 'App\\Controller\\TestController::misTorneos'], null, null, null, false, false, null]],
        '/torneig' => [[['_route' => 'torneig_all_public', '_controller' => 'App\\Controller\\TestController::torneigs'], null, null, null, false, false, null]],
        '/torneigadmin' => [[['_route' => 'torneig_index', '_controller' => 'App\\Controller\\TorneigController::index'], null, ['GET' => 0], null, true, false, null]],
        '/torneigadmin/new' => [[['_route' => 'torneig_new', '_controller' => 'App\\Controller\\TorneigController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/torneigadmin/blank' => [[['_route' => 'torneig_blank', '_controller' => 'App\\Controller\\TorneigController::createBlank'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/jugador/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/perfil/([^/]++)(*:235)'
                .'|/arbitre/([^/]++)(*:260)'
                .'|/torneig(?'
                    .'|/([^/]++)(*:288)'
                    .'|admin(?'
                        .'|/([^/]++)(?'
                            .'|(*:316)'
                            .'|/(?'
                                .'|edit(*:332)'
                                .'|addJugadors(*:351)'
                            .')'
                            .'|(*:360)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|([^/]++)/deleteJugador(*:403)'
                            .'|rondes(*:417)'
                        .')'
                        .'|/([^/]++)/(?'
                            .'|start(*:444)'
                            .'|newRound(*:460)'
                        .')'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:488)'
                    .'|/edit(*:501)'
                    .'|(*:509)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'jugador_show', '_controller' => 'App\\Controller\\JugadorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'jugador_edit', '_controller' => 'App\\Controller\\JugadorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'jugador_delete', '_controller' => 'App\\Controller\\JugadorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        235 => [[['_route' => 'jugador_perfil', '_controller' => 'App\\Controller\\TestController::userProfile'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'arbitre_perfil', '_controller' => 'App\\Controller\\TestController::arbitreProfile'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'torneig_perfil', '_controller' => 'App\\Controller\\TestController::torneigPerfil'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'torneig_show', '_controller' => 'App\\Controller\\TorneigController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'torneig_edit', '_controller' => 'App\\Controller\\TorneigController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'torneig_addJugadors', '_controller' => 'App\\Controller\\TorneigController::addJugadors'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'torneig_delete', '_controller' => 'App\\Controller\\TorneigController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        403 => [[['_route' => 'torneig_deleteJugador', '_controller' => 'App\\Controller\\TorneigController::deleteJugador'], ['id', 'idJ'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        417 => [[['_route' => 'torneig_gestiorondes', '_controller' => 'App\\Controller\\TorneigController::gestioRondes'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        444 => [[['_route' => 'torneig_start', '_controller' => 'App\\Controller\\TorneigController::startTourn'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'ronda', '_controller' => 'App\\Controller\\TorneigController::new_round'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
