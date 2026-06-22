<?php

use Beebmx\KirbyEnv;

require_once 'helpers.php';
$base = dirname(__DIR__, 2);
$storage = $base . '/storage';

KirbyEnv::load($base);

// Secret salt for content tokens (e.g. media file URLs). Kept in .env so it
// stays out of version control. Only set the option when a value is present:
// an empty option would override Kirby's path-based default with an empty salt.
$contentSalt = env('KIRBY_CONTENT_SALT');

// Secret key used to sign cookies. Kept in .env (out of version control) and
// only applied when present, so an empty value never overrides Kirby's default.
$cookieKey = env('KIRBY_COOKIE_KEY');

return [
    'debug' => env('KIRBY_DEBUG', false),
    ...($contentSalt ? ['content' => ['salt' => $contentSalt]] : []),
    ...($cookieKey ? ['cookie' => ['key' => $cookieKey]] : []),
    'panel' => [
        'install' => env('KIRBY_INSTALL', false),
        'slug' => env('KIRBY_PANEL', 'panel'),
        // Load the lighter runtime-only Vue build. The full build's template
        // compiler is only needed by Panel plugins using runtime Vue templates,
        // which this site has none of. Removes the "Vue compiler is enabled" warning.
        'vue' => [
            'compiler' => false,
        ],
    ],
    'session' => [
        'durationNormal' => (int) env('KIRBY_SESSION_DURATION', 7200),
        'durationLong' => (int) env('KIRBY_SESSION_LONG_DURATION', 1209600),
        'timeout' => (int) env('KIRBY_SESSION_TIMEOUT', 1800),
        'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    ],
    'api' => env('KIRBY_API', true),
    'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    // Serve generated thumbs as WebP by default. Originals are kept untouched
    // and used as the <picture> <img> fallback for browsers without WebP support.
    'thumbs' => [
        'format' => 'webp',
        'quality' => 80,
    ],
    'hooks' => require_once 'hooks.php',
    'routes' => require_once 'routes.php',
    'beebmx.kirby-blade.views' => $storage . '/views',
    'email' => [
        'transport' => [
            'type' => env('MAIL_DRIVER', 'mail'),
            'host' => env('MAIL_HOST', 'smtp.server.com'),
            'port' => env('MAIL_PORT', 465),
            'security' => env('MAIL_ENCRYPTION', 'tls'),
            'auth' => env('MAIL_AUTH', false),
            'username' => env('MAIL_USERNAME', ''),
            'password' => env('MAIL_PASSWORD', ''),
        ]
    ],
    'beebmx.kirby-blade.ifs' => [
        'env' => function ($environment) {
            return env('KIRBY_ENV', 'production') === $environment;
        },
        'local' => function () {
            return env('KIRBY_ENV', 'production') === 'local';
        },
        'production' => function () {
            return env('KIRBY_ENV', 'production') === 'production';
        },
    ],
    'beebmx.kirby-blade.directives' => [
        'ray' => function ($expression) {
            return "<?php ray($expression); ?>";
        },
    ],

];
