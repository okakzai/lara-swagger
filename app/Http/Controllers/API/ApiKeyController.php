<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApiKey;
use Illuminate\Support\Facades\Auth;

class ApiKeyController extends Controller
{
    /**
     * @OA\Post(
     *     path="/generate-api-key",
     *     tags={"API Key"},
     *     summary="Generate API Key",
     *     @OA\Response(
     *         response=200,
     *         description="Generated API Key",
     *         @OA\JsonContent(
     *             @OA\Property(property="api_key", type="string")
     *         )
     *     )
     * )
     */
    public function generateKey(Request $request)
    {
        $user = Auth::user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        $userId = $user->id;
        // $userId = 1;

        $apiKey = bin2hex(random_bytes(16));
        // Cari API key berdasarkan user_id
        $apiKeyRecord = ApiKey::where('user_id', $userId)->first();
        
        if ($apiKeyRecord) {
            // Jika sudah ada, update key
            $apiKeyRecord->update(['key' => $apiKey]);
        } else {
            $apiKeyRecord = ApiKey::Create(['key' => $apiKey, 'user_id' => $userId]);
        }
        
        return response()->json(['api_key' => $apiKeyRecord->key]);
    }
}