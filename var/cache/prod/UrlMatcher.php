<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|ccount/order/([^/]++)(*:33)'
                    .'|ddress/([^/]++)(?'
                        .'|(*:58)'
                        .'|/edit(*:70)'
                        .'|(*:77)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:122)'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:154)'
                        .'|delete(?'
                            .'|/([^/]++)(*:180)'
                            .'|\\-all/([^/]++)(*:202)'
                        .')'
                    .')'
                    .'|reate\\-checkout\\-session/([^/]++)(*:245)'
                .')'
                .'|/product/([^/]++)(*:271)'
                .'|/stripe\\-payment\\-(?'
                    .'|cancel/([^/]++)(*:315)'
                    .'|success/([^/]++)(*:339)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'account_order_details', '_controller' => 'App\\Controller\\Account\\AccountController::show'], ['id'], null, null, false, true, null]],
        58 => [[['_route' => 'address_show', '_controller' => 'App\\Controller\\Account\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\Account\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        77 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\Account\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Account\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        154 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\Cart\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        180 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\Cart\\CartController::deleteFromCart'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\Cart\\CartController::deleteAllToCart'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'create_checkout_session', '_controller' => 'App\\Controller\\Stripe\\StripeCheckoutSessionController::index'], ['reference'], null, null, false, true, null]],
        271 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\HomeController::show'], ['slug'], null, null, false, true, null]],
        315 => [[['_route' => 'stripe_payment_cancel', '_controller' => 'App\\Controller\\Stripe\\StripeStripeCancelPaymentController::index'], ['StripeCheckoutSessionId'], null, null, false, true, null]],
        339 => [
            [['_route' => 'stripe_payment_success', '_controller' => 'App\\Controller\\Stripe\\StripeStripeSuccessPaymentController::index'], ['StripeCheckoutSessionId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
