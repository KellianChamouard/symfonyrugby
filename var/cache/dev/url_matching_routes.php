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
        '/admin/accueil' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\HomeController::articles'], null, null, null, false, false, null]],
        '/admin/joueurs' => [[['_route' => 'joueurs', '_controller' => 'App\\Controller\\HomeController::joueurs'], null, null, null, false, false, null]],
        '/admin/staff' => [[['_route' => 'staff', '_controller' => 'App\\Controller\\HomeController::staff'], null, null, null, false, false, null]],
        '/admin/dirigeants' => [[['_route' => 'dirigeants', '_controller' => 'App\\Controller\\HomeController::dirigeants'], null, null, null, false, false, null]],
        '/admin/club' => [[['_route' => 'club', '_controller' => 'App\\Controller\\HomeController::club'], null, null, null, false, false, null]],
        '/admin/site' => [[['_route' => 'site', '_controller' => 'App\\Controller\\HomeController::site'], null, null, null, false, false, null]],
        '/admin/social' => [[['_route' => 'social', '_controller' => 'App\\Controller\\HomeController::instagram'], null, null, null, false, false, null]],
        '/admin/saison' => [[['_route' => 'saison', '_controller' => 'App\\Controller\\HomeController::saison'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'utilisateurs', '_controller' => 'App\\Controller\\HomeController::utilisateurs'], null, null, null, false, false, null]],
        '/templatelettre' => [[['_route' => 'templatelettre', '_controller' => 'App\\Controller\\HomeController::templete'], null, null, null, false, false, null]],
        '/exportpdf' => [[['_route' => 'exportpdf', '_controller' => 'App\\Controller\\HomeController::exportpdf'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\SiteController::index'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe', '_controller' => 'App\\Controller\\SiteController::equipe'], null, null, null, false, false, null]],
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
                .'|/delete(?'
                    .'|player/([^/]++)(*:194)'
                    .'|staff/([^/]++)(*:216)'
                    .'|article/([^/]++)(*:240)'
                    .'|dirig/([^/]++)(*:262)'
                    .'|note/([^/]++)(*:283)'
                    .'|team/([^/]++)(*:304)'
                    .'|match/([^/]++)(*:326)'
                .')'
                .'|/admin/modif(?'
                    .'|player/([^/]++)(*:365)'
                    .'|team/([^/]++)(*:386)'
                .')'
                .'|/change_article_state/([^/]++)(*:425)'
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
        194 => [[['_route' => 'delete_player', '_controller' => 'App\\Controller\\HomeController::deletePlayer'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'delete_staff', '_controller' => 'App\\Controller\\HomeController::deleteStaff'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\HomeController::deleteArticle'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'delete_dirig', '_controller' => 'App\\Controller\\HomeController::deleteDirigeant'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'delete_note', '_controller' => 'App\\Controller\\HomeController::deleteNote'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'delete_team', '_controller' => 'App\\Controller\\HomeController::deleteTeam'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'delete_match', '_controller' => 'App\\Controller\\HomeController::deleteMatch'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'modif_player', '_controller' => 'App\\Controller\\HomeController::modifPlayer'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'modif_team', '_controller' => 'App\\Controller\\HomeController::modifTeam'], ['id'], null, null, false, true, null]],
        425 => [
            [['_route' => 'change_article_state', '_controller' => 'App\\Controller\\HomeController::ChangeStateArticle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
