<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
 ->withMiddleware(function (Middleware $middleware) {
    $middleware->redirectTo(
        guests: '/user/login',
        users: function ($request) {
            $user = auth()->user();
            return $user ? "/user/{$user->id}" : '/user/login';
        }
    );
})

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
