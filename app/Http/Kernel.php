<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    
    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Routing\Middleware\ValidateSignature::class,
        ],

        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
        ],
    ];

    protected $middleware = [
        'one.vote' => \App\Http\Middleware\OneVotePerUser::class,
    ];
        protected $routeMiddleware = [
            // Middleware bawaan Laravel
            'auth' => \App\Http\Middleware\Authenticate::class,
        ];
        
}  

