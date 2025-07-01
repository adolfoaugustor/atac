<?php
return [
    'v3' => [
        'public_key' => env('RECAPTCHA_SITE_KEY'),
        'private_key' => env('RECAPTCHA_SECRET_KEY'),
        'minimum_score' => 0.6,
    ]
];
