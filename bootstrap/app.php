<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;
use Stancl\Tenancy\Middleware\PreventAccessFromTenantDomains;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        function (Router $router)
        {
            foreach (config('tenancy.central_domains') as $domain) {
                $router->middleware('web')
                    ->domain($domain)
                    ->group(base_path('routes/web.php'));
            }
        },
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
       
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
