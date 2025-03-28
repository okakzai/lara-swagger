<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // if ($request->is('docs/api-docs.json')) {
        //     return null; // Biarkan Swagger tetap diakses
        // }
        // Log::info('Log', ['request' =>  $request->is('docs/api-docs.json')]);
        return $request->expectsJson() ? null : route('login');
    }
}
