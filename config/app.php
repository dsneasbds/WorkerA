<?php
/*
|--------------------------------------------------------------------------
| Application Config
|--------------------------------------------------------------------------
*/
return [
    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */
    'debug' => TRUE,

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Default timezone for your application, which
    | will be used by the PHP date and date-time functions. 
    |
    */
    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | HTTP Response content Compress
    |--------------------------------------------------------------------------
    |
    | Set compress options you can change the HTTP Response Header 'Content-Encoding'.
    |
    | encoding: encoding type of Content-Encoding
    | level: encoding level, from 1 to 9
    | content_type: content type you want to compress
    |
    */
    'compress' => [
        'encoding'     => 'gzip', // If you don't want to compress, set it to ''
        'level'        => '5',
        'content_type' => [
            'application/json',
            'text/html',
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Application Base URL
    |--------------------------------------------------------------------------
    |
    | Your Application base url, which will be used by 
    | some method (like Route::redirect) to generate target url
    |
    | example: http://www.test.com/
    */
    'base_url' => '',

    /*
    |--------------------------------------------------------------------------
    | Exception Handler
    |--------------------------------------------------------------------------
    |
    | You render an exception into an HTTP response in this Handler. 
    | If you want to use the default Handler, set it to NULL or ''
    |
    | example: http://www.test.com/
    */
    'exception_handler' => App\Exceptions\Handler::class,
];
