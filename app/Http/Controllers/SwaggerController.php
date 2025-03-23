<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SwaggerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:sanctum'); // Pastikan hanya pengguna yang terautentikasi
    }

    public function index()
    {
        return view('l5-swagger::index');
    }

    public function json()
    {
        $swaggerJsonPath = storage_path('api-docs/api-docs.json');

        if (!file_exists($swaggerJsonPath)) {
            return response()->json(['error' => 'Swagger JSON file not found'], 404);
        }

        return response()->file($swaggerJsonPath);
    }
}
