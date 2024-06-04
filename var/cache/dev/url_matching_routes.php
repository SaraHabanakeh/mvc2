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
        '/api/quote' => [[['_route' => 'api-quote', '_controller' => 'App\\Controller\\ApiController::getDailyQuote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api-deck', '_controller' => 'App\\Controller\\ApiController::getDeck'], null, null, null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api-shuffle', '_controller' => 'App\\Controller\\ApiController::getShuffleCards'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\ApiController::apiGame'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game-page', '_controller' => 'App\\Controller\\BlackJackGame::home'], null, null, null, true, false, null]],
        '/game/doc' => [[['_route' => 'game-doc', '_controller' => 'App\\Controller\\BlackJackGame::doc'], null, null, null, false, false, null]],
        '/setup' => [[['_route' => 'game_setup', '_controller' => 'App\\Controller\\BlackJackGame::setup'], null, null, null, false, false, null]],
        '/dealer' => [[['_route' => 'game_dealer', '_controller' => 'App\\Controller\\BlackJackGame::dealer'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, true, false, null]],
        '/library/create' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::create'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'show_books', '_controller' => 'App\\Controller\\BookController::apiIndex'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session_debug', '_controller' => 'App\\Controller\\CardGameController::showSession'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\CardGameController::deleteSession'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_start', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::showDeck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_draw', '_controller' => 'App\\Controller\\CardGameController::drawCard'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'me', '_controller' => 'App\\Controller\\PresentationController::presentation'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\PresentationController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\PresentationController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\PresentationController::lucky'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'code_metrics', '_controller' => 'App\\Controller\\PresentationController::metrics'], null, null, null, true, false, null]],
        '/proj' => [
            [['_route' => 'project', '_controller' => 'App\\Controller\\PresentationController::proj'], null, null, null, false, false, null],
            [['_route' => 'game_start', '_controller' => 'App\\Controller\\Project::menu'], null, null, null, false, false, null],
        ],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\PresentationController::api'], null, null, null, false, false, null]],
        '/game/reset' => [[['_route' => 'game_reset', '_controller' => 'App\\Controller\\Project::reset'], null, ['POST' => 0], null, false, false, null]],
        '/proj/game' => [[['_route' => 'game_proj', '_controller' => 'App\\Controller\\Project::setup'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'about_proj', '_controller' => 'App\\Controller\\Project::about'], null, null, null, false, false, null]],
        '/start/proj' => [[['_route' => 'start_proj', '_controller' => 'App\\Controller\\Project::start'], null, ['POST' => 0], null, false, false, null]],
        '/dealer/proj' => [[['_route' => 'dealer_proj', '_controller' => 'App\\Controller\\Project::dealer'], null, null, null, false, false, null]],
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
                .'|/api/(?'
                    .'|deck/draw/([^/]++)(*:228)'
                    .'|library/book/([^/]++)(*:257)'
                .')'
                .'|/library/(?'
                    .'|([^/]++)(*:286)'
                    .'|edit/([^/]++)(*:307)'
                    .'|delete/([^/]++)(*:330)'
                .')'
                .'|/card/deck/draw/([^/]++)(*:363)'
                .'|/hit/proj/([^/]++)(*:389)'
                .'|/stay/proj/([^/]++)(*:416)'
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
        228 => [[['_route' => 'api_draw_cards', '_controller' => 'App\\Controller\\ApiController::drawCards'], ['number'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        257 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BookController::apiShow'], ['isbn'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'show_book', '_controller' => 'App\\Controller\\BookController::show'], ['title'], null, null, false, true, null]],
        307 => [[['_route' => 'edit_book', '_controller' => 'App\\Controller\\BookController::edit'], ['title'], null, null, false, true, null]],
        330 => [[['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['title'], null, null, false, true, null]],
        363 => [[['_route' => 'card_draw_number', '_controller' => 'App\\Controller\\CardGameController::drawMultipleCards'], ['num'], null, null, false, true, null]],
        389 => [[['_route' => 'game_hit', '_controller' => 'App\\Controller\\Project::hit'], ['playerIndex'], null, null, false, true, null]],
        416 => [
            [['_route' => 'game_stay', '_controller' => 'App\\Controller\\Project::stay'], ['playerIndex'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
