<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiKey;
use Illuminate\Http\JsonResponse;

class SaldoController extends Controller
{
        /**
    *    @OA\Get(
    *       path="/saldo",
    *       tags={"Saldo"},
    *       operationId="saldo",
    *       summary="Saldo Merchant",
    *       description="Mengambil Data Saldo Merchant",
    *     @OA\SecurityScheme(
     *         securityScheme="api_key",
     *         type="apiKey",
     *         in="header",
     *         name="X-API-KEY"
     *     ),
     *     @OA\Parameter(
     *         name="X-API-KEY",
     *         in="header",
     *         required=true,
     *         description="API Key untuk autentikasi",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Berhasil mengambil saldo",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Saldo merchant berhasil diambil."),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(property="saldo", type="integer", example=1000000)
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="API Key tidak ditemukan.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="API Key tidak ditemukan.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="API Key tidak valid.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="API Key tidak valid.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Hanya pengguna dengan role merchant yang dapat mengakses.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Hanya pengguna dengan role merchant yang dapat mengakses.")
     *         )
     *     )
     * )
     */
    public function info(Request $request): JsonResponse
    {
        // Pastikan API key tersedia dalam header
        $api_key = $request->header('X-API-KEY');
        if (!$api_key) {
            return response()->json([
                'success' => false,
                'message' => 'API Key tidak ditemukan.',
            ], 400);
        }
    
        // Cari API Key di database
        $api = ApiKey::where('key', $api_key)->first();
        if (!$api) {
            return response()->json([
                'success' => false,
                'message' => 'API Key tidak valid.',
            ], 401);
        }
    
        // Dapatkan user terkait
        $user = $api->user;
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Pengguna () tidak ditemukan.',
            ], 404);
        }
    
        // Pastikan user memiliki role 'merchant' menggunakan Spatie
        if (!$user->hasRole('merchant')) {
            return response()->json([
                'success' => false,
                'message' => 'Hanya pengguna dengan role merchant yang dapat mengakses.',
            ], 403);
        }
    
        // Ambil saldo user
        $saldo = $user->saldo ?? 0;
    
        return response()->json([
            'success' => true,
            'message' => 'Saldo merchant berhasil diambil.',
            'data' => [
                'saldo' => $saldo,
            ],
        ]);
    }

}
