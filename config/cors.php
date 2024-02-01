<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

    // 'supports_credentials' => false,
    
    // is a configuration option in Laravel Sanctum that allows cross-site requests to include cookies and other credentials. 
    // When making requests across different domains or subdomains, the browser may block the requests due to security reasons. This is known as the Same-Origin Policy, which restricts how a web page from one domain can interact with resources from another domain.
    //To allow cross-site requests, you can use Cross-Origin Resource Sharing (CORS) headers, which allow a web page to access resources from a different domain. Laravel Sanctum provides a middleware called EnsureFrontendRequestsAreStateful, which sets the required CORS headers for Sanctum to work correctly with cookies.
    //The 'supports_credentials' => true configuration option is used to indicate that cookies and other credentials should be included in cross-site requests. If this option is set to false, then the CORS headers will not include any credentials, and the browser will not send cookies or other authentication information with the request.

];
