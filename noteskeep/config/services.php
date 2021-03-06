<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
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

    'facebook' => [
        'client_id' => '1174807592563257',
        'client_secret' => '579fcee90375dda642716996bb531c34',
        'redirect' => 'http://rp2keep.site/callback/facebook',
    ],

    'google' => [
        'client_id' => '620481928896-bcvq4ie8vc50kge7idqtite6969rrjga.apps.googleusercontent.com',
        'client_secret' => 'YzYT6tvUfrt2wIjSshxhIFrb',
        'redirect' => 'http://rp2keep.site/callback/google',
    ],

    'github' => [
        'client_id' => '5d4b6751371269388de2',
        'client_secret' => 'f689954a19b160ae88459a95617d01b48e237042',
        'redirect' => 'http://rp2keep.site/callback/github',
    ],

];
