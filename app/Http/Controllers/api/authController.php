<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class authController extends Controller
{
    public function authentication(Request $request){
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');

        $secretKey = '123456';
        $payload = [
            'iat' => time(),                
            'exp' => time() + 3600,         
            'data' => [
                'id' => '123456',
                'name' => 'example',
                'surname' => 'one'
            ]
        ];

        // => burada db ye gidilecek

        $accessToken = JWT::encode($payload, $secretKey, 'HS256');

        return response()->json([
            'cameData' => [
                ...$request->all()
            ],
            'token' => $accessToken
        ]);
    }
}
