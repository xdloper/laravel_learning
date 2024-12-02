<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class usersController extends Controller
{
    public function getUsers(Request $request){

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

        $accessToken = JWT::encode($payload, $secretKey, 'HS256');

        return response()->json([
            'cameData' => [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ],
            'token' => $accessToken
        ]);
    }
}
