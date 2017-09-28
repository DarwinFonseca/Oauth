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

    'facebook' => [
        'client_id' => '132958203996072',
        'client_secret' => '32e8621bae654ea03280584e3a7398fe',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'Rw7dnfsPMdg0Ysox66MhGpSR8',
        'client_secret' => 'p98C7JBKFuMnhl6zYSfpuGp7xEWovIClWLCWEFs1JoMuLZRiso',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

    'github' => [
        'client_id' => '9ccb2cb4d2df8b134db4',
        'client_secret' => 'fc5f6b6033a389d311d1a3dab613de332e244619',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

    'google' => [
        'client_id' => '116376125074-4ktmf74nt6i5gn1146omnq2omiggh7f1.apps.googleusercontent.com',
        'client_secret' => 'ok3RJDLdZc7RwUUMCFTZp7D3',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
