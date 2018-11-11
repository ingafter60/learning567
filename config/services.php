<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    //socialite: github
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),             // Your Github Client ID
        'client_server' => env('GITHUB_CLIENT_SECRET'),     // Your Github Client Secret
        'redirect' => '/login/github/callback',
    ],

    //socialite: facebook
    'github' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),             // Your Facebook Client ID
        'client_server' => env('FACEBOOK_CLIENT_SECRET'),     // Your Facebook Client Secret
        'redirect' => '/login/facebook/callback',
    ],

];
