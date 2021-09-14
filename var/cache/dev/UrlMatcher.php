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
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\Account\\AccountController::index'], null, null, null, true, false, null]],
        '/address' => [[['_route' => 'address_index', '_controller' => 'App\\Controller\\Account\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/address/new' => [[['_route' => 'address_new', '_controller' => 'App\\Controller\\Account\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Account\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\Account\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\Account\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\Account\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Account\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Account\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cgu/conditions-generales-utilisation' => [[['_route' => 'cgu_conditions', '_controller' => 'App\\Controller\\CGU\\CGUController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\Cart\\CartController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\Cart\\CheckoutController::index'], null, null, null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'checkout_confirm', '_controller' => 'App\\Controller\\Cart\\CheckoutController::confirm'], null, null, null, false, false, null]],
        '/checkout/edit' => [[['_route' => 'checkout_edit', '_controller' => 'App\\Controller\\Cart\\CheckoutController::checkoutEdit'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\HomeController::shop'], null, null, null, false, false, null]],
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
                    .'|ccount/order/([^/]++)(*:195)'
                    .'|ddress/([^/]++)(?'
                        .'|(*:221)'
                        .'|/edit(*:234)'
                        .'|(*:242)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:288)'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:320)'
                        .'|delete(?'
                            .'|/([^/]++)(*:346)'
                            .'|\\-all/([^/]++)(*:368)'
                        .')'
                    .')'
                    .'|reate\\-checkout\\-session/([^/]++)(*:411)'
                .')'
                .'|/product/([^/]++)(*:437)'
                .'|/stripe\\-payment\\-(?'
                    .'|cancel/([^/]++)(*:481)'
                    .'|success/([^/]++)(*:505)'
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
        195 => [[['_route' => 'account_order_details', '_controller' => 'App\\Controller\\Account\\AccountController::show'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'address_show', '_controller' => 'App\\Controller\\Account\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\Account\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\Account\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Account\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        320 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\Cart\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\Cart\\CartController::deleteFromCart'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\Cart\\CartController::deleteAllToCart'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'create_checkout_session', '_controller' => 'App\\Controller\\Stripe\\StripeCheckoutSessionController::index'], ['reference'], null, null, false, true, null]],
        437 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\HomeController::show'], ['slug'], null, null, false, true, null]],
        481 => [[['_route' => 'stripe_payment_cancel', '_controller' => 'App\\Controller\\Stripe\\StripeStripeCancelPaymentController::index'], ['StripeCheckoutSessionId'], null, null, false, true, null]],
        505 => [
            [['_route' => 'stripe_payment_success', '_controller' => 'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController::index'], ['StripeCheckoutSessionId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
