<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Control Panel
    |--------------------------------------------------------------------------
    |
    | Whether the Control Panel should be enabled, and through what route.
    |
    */

    'enabled' => env('CP_ENABLED', true),

    'route' => env('CP_ROUTE', 'hub'),

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    |
    | Whether the Control Panel's authentication pages should be enabled,
    | and where users should be redirected in order to authenticate.
    |
    */

    'auth' => [
        'enabled' => true,
        'redirect_to' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Start Page
    |--------------------------------------------------------------------------
    |
    | When a user logs into the Control Panel, they will be taken here.
    | For example: "dashboard", "collections/pages", etc.
    |
    */

    'start_page' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Here you may define any number of dashboard widgets. You're free to
    | use the same widget multiple times in different configurations.
    |
    */

    'widgets' => [
        [
            'type' => 'collection',
            'collection' => 'pages',
            'width' => 50,
        ],
        [
            'type' => 'form',
            'form' => 'contact',
            'fields' => ['name', 'email'],
            'limit' => 10,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Date Format
    |--------------------------------------------------------------------------
    |
    | When a date is encountered throughout the Control Panel, it will be
    | rendered in the following format unless overridden in specific
    | fields, and so on. Any PHP date variables are permitted.
    |
    | This takes precedence over the date_format in system.php.
    |
    | https://www.php.net/manual/en/function.date.php
    |
    */

    'date_format' => 'Y-m-d',

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | Here you may define the default pagination size as well as the options
    | the user can select on any paginated listing in the Control Panel.
    |
    */

    'pagination_size' => 50,

    'pagination_size_options' => [10, 25, 50, 100, 500],

    /*
    |--------------------------------------------------------------------------
    | Links to Documentation
    |--------------------------------------------------------------------------
    |
    | Show contextual links to documentation throughout the Control Panel.
    |
    */

    'link_to_docs' => env('STATAMIC_LINK_TO_DOCS', true),

    /*
    |--------------------------------------------------------------------------
    | Support Link
    |--------------------------------------------------------------------------
    |
    | Set the location of the support link in the "Useful Links" header
    | dropdown. Use 'false' to remove it entirely.
    |
    */

    'support_url' => env('STATAMIC_SUPPORT_URL', 'https://statamic.com/support'),

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Optionally spice up the login and other outside-the-control-panel
    | screens. You may choose between "rad" or "business" themes.
    |
    */

    'theme' => env('STATAMIC_THEME', 'rad'),

    /*
    |--------------------------------------------------------------------------
    | White Labeling
    |--------------------------------------------------------------------------
    |
    | When in Pro Mode you may replace the Statamic name, logo, favicon,
    | and add your own CSS to the control panel to match your
    | company or client's brand.
    |
    */

    'custom_cms_name' => env('STATAMIC_CUSTOM_CMS_NAME', 'Statamic'),

    'custom_logo_url' => env('STATAMIC_CUSTOM_LOGO_URL', null),

    'custom_dark_logo_url' => env('STATAMIC_CUSTOM_DARK_LOGO_URL', null),

    'custom_logo_text' => env('STATAMIC_CUSTOM_LOGO_TEXT', null),

    'custom_favicon_url' => env('STATAMIC_CUSTOM_FAVICON_URL', null),

    'custom_css_url' => env('STATAMIC_CUSTOM_CSS_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Thumbnails
    |--------------------------------------------------------------------------
    |
    | Here you may define additional CP asset thumbnail presets.
    |
    */

    'thumbnail_presets' => [
        // 'medium' => 800,
    ],
];
