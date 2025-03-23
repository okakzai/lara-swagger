<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SaldoController;
use App\Http\Controllers\API\ApiKeyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:merchant'
    ]], function () {
        Route::post('/generate-api-key', [ApiKeyController::class, 'generateKey']);
});

Route::group(['prefix' => 'v1', 'middleware' => ['api.key']], function () {
    Route::get('/saldo', [SaldoController::class, 'info']);
});