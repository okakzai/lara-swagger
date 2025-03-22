<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApiKey;
use Illuminate\Support\Facades\Auth;

class ApiKeyController extends Controller
{
    public function getKey(Request $request)
    {
        $user = Auth::user();
               
        $userId = $user->id;
        
        // Cari API key berdasarkan user_id
        $apiKeyRecord = ApiKey::where('user_id', $userId)->first();
        
        if ($apiKeyRecord) {
            $api_key = $apiKeyRecord->key;
        } else {
            $api_key = 'API Key';
        }
        
        return view('api-key',[
            'title' => 'API Key',
            'description' => 'Generate API Key',
            'menu' => 'merchant-api',
            'submenu' => false,
            'api_key' => $api_key
        ]);
    }
    public function getDoc(Request $request)
    {
        return view('api-documentation',[
            'title' => 'API Documentation',
            'description' => 'Dokumentasi Merchant API',
            'menu' => 'merchant-api',
            'submenu' => false
        ]);
    }

    public function generateKey(Request $request)
    {
        $user = Auth::user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        $userId = $user->id;
        
        $apiKey = bin2hex(random_bytes(16));
        // Cari API key berdasarkan user_id
        $apiKeyRecord = ApiKey::where('user_id', $userId)->first();
        
        if ($apiKeyRecord) {
            // Jika sudah ada, update key
            $apiKeyRecord->update(['key' => $apiKey]);
        } else {
            $apiKeyRecord = ApiKey::Create(['key' => $apiKey, 'user_id' => $userId]);
        }
        
        return view('api-key',[
            'title' => 'API Key',
            'description' => 'Generate API Key',
            'menu' => 'merchant-api',
            'submenu' => false,
            'api_key' => $apiKeyRecord->key
        ]);
    }
}