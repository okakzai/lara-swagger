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
     *                 @OA\Property(property="user_id", type="integer", example=1),
     *                 @OA\Property(property="saldo", type="integer", example=1000000)
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized: API Key tidak valid",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Unauthorized: Invalid API Key.")
     *         )
     *     )
     * )
     */
    public function info(Request $request): JsonResponse
    {
        // Contoh mendapatkan saldo dari user yang sedang login
        $api_key = $request->header('X-API-KEY');
        $api = ApiKey::where('key', $api_key)->first();
        
        // Dummy saldo, ganti dengan query ke database jika diperlukan
        $data = [
            'saldo' => $api->user->saldo, // Contoh saldo (dalam rupiah)
        ];
        
        return response()->json([
            'success' => true,
            'message' => 'Saldo merchant berhasil diambil.',
            'data' => $data,
        ]);
    }

}
