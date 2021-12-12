<?php
// This example sets up an endpoint using the Slim framework.
// Watch this video to get started: https://youtu.be/sGcNPFX1Ph4.

use Slim\Http\Request;
use Slim\Http\Response;
use Stripe\Stripe;

$app = new \Slim\App;

$app->add(function ($request, $response, $next) {
    \Stripe\Stripe::setApiKey('sk_test_51JvYOzAgmIGXfk008uFkLg29HVA01y2vltu5At1bUZ08C0NnQ1do8fETUxMA2Tb0EiyojLicbMFHTI9KE3Up3z6I009ZPmqL4w');
    return $next($request, $response);
});

$app->post('/create-checkout-session', function (Request $request, Response $response) {
    $session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            'price_data' => [
                'currency' => 'mxn',
                'product_data' => [
                    'name' => 'T-shirt',
                ],
                'unit_amount' => 2000,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://example.com/success',
        'cancel_url' => 'https://example.com/cancel',
    ]);

    return $response->withHeader('Location', $session->url)->withStatus(303);
});

$app->run();
