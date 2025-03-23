<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ApiKey;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');
        
        if (!$apiKey) {
            return response()->json(['error' => 'Unauthorized: API Key tidak boleh kosong.'], 401);
        } else if(!ApiKey::where('key', $apiKey)->exists()){
            return response()->json(['error' => 'Unauthorized: Invalid API Key.'], 401);
        }

        return $next($request);
    }
}