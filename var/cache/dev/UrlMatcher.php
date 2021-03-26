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
        '/home_admin/admin' => [[['_route' => 'home_admine', '_controller' => 'App\\Controller\\HomeAdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::indexProfil'], null, ['GET' => 0], null, false, false, null]],
        '/homeA' => [[['_route' => 'home_admin', '_controller' => 'App\\Controller\\HomeController::indexAdmin'], null, null, null, false, false, null]],
        '/homeA/hotel' => [[['_route' => 'AgestionHotel', '_controller' => 'App\\Controller\\HomeController::indexHotel'], null, null, null, false, false, null]],
        '/homeA/promotion' => [[['_route' => 'AgestionPromotion', '_controller' => 'App\\Controller\\HomeController::indexPromotion'], null, null, null, false, false, null]],
        '/homeA/maison' => [[['_route' => 'AgestionMaison', '_controller' => 'App\\Controller\\HomeController::indexMaison'], null, null, null, false, false, null]],
        '/homeA/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\HomeController::recherche'], null, null, null, false, false, null]],
        '/homeA/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\HomeController::searchAction'], null, ['POST' => 0], null, false, false, null]],
        '/pdfH' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\HomeController::afficheReclPdf'], null, null, null, false, false, null]],
        '/exportXML' => [[['_route' => 'export', '_controller' => 'App\\Controller\\HomeController::export'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel_all', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, true, false, null]],
        '/hotel/new' => [[['_route' => 'hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/maison' => [[['_route' => 'maison_all', '_controller' => 'App\\Controller\\MaisonController::index'], null, null, null, true, false, null]],
        '/maison/new' => [[['_route' => 'maison_new', '_controller' => 'App\\Controller\\MaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion' => [[['_route' => 'promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/new' => [[['_route' => 'promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/ho(?'
                    .'|meA/supp(?'
                        .'|H/([^/]++)(*:196)'
                        .'|P/([^/]++)(*:214)'
                        .'|M/([^/]++)(*:232)'
                    .')'
                    .'|tel/(?'
                        .'|([^/]++)(?'
                            .'|(*:259)'
                            .'|/edit(*:272)'
                            .'|(*:280)'
                        .')'
                        .'|triH(*:293)'
                    .')'
                .')'
                .'|/maison/(?'
                    .'|([^/]++)(?'
                        .'|(*:325)'
                        .'|/edit(*:338)'
                        .'|(*:346)'
                    .')'
                    .'|triH(*:359)'
                .')'
                .'|/promotion/([^/]++)(?'
                    .'|(*:390)'
                    .'|/edit(*:403)'
                    .'|(*:411)'
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
        196 => [[['_route' => 'ADeleteHotel', '_controller' => 'App\\Controller\\HomeController::deleteAHotel'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => 'ADeletePromotion', '_controller' => 'App\\Controller\\HomeController::deleteAPromotion'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'ADeleteMaison', '_controller' => 'App\\Controller\\HomeController::deleteAMaison'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'triH', '_controller' => 'App\\Controller\\HotelController::Tri'], [], null, null, false, false, null]],
        325 => [[['_route' => 'maison_show', '_controller' => 'App\\Controller\\MaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'maison_edit', '_controller' => 'App\\Controller\\MaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'maison_delete', '_controller' => 'App\\Controller\\MaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        359 => [[['_route' => 'triM', '_controller' => 'App\\Controller\\MaisonController::Tri'], [], null, null, false, false, null]],
        390 => [[['_route' => 'promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        411 => [
            [['_route' => 'promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
