<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: ['salon']);

        // Add Sanctum middleware to the web group
        $middleware->validateCsrfTokens(except: ['salon','']);

        // Ensure Sanctum authentication for API routes
        $middleware->group('api', [
            EnsureFrontendRequestsAreStateful::class,
            'auth:sanctum',  // Require authentication using Sanctum
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
