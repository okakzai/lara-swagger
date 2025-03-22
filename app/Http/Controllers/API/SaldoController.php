<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaldoController extends Controller
{
        /**
    *    @OA\Get(
    *       path="/saldo",
    *       tags={"Saldo"},
    *       operationId="saldo",
    *       summary="Saldo Merchant",
    *       description="Mengambil Data Saldo Merchant",
    *       @OA\Response(
    *           response="200",
    *           description="Ok",
    *           @OA\JsonContent
    *           (example={
    *               "success": true,
    *               "message": "Berhasil mengambil Saldo Merchant",
    *               "data": {
    *                   {
    *                   "saldo": "50000",
    *                  }
    *              }
    *          }),
    *      ),
    *  )
    */
    public function info() {
        return 'true';
    }

}
