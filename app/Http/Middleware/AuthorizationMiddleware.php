<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $authorization = $request->header('Authorization');

        if (!$authorization) {
            return response()->json([
                'success' => false,
                'message' => 'Authorization header is missing'
            ], 400);
        }

        if(!$authorization || !str_starts_with($authorization, 'Bearer ')){
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }

        $accessToken = str_replace('Bearer ', '', $authorization);
        
        try{
            $decodedAccessToken = JWT::decode($accessToken, new Key('123456','HS256')); 
        }catch(\Exception $error){
            return response()->json([
                'success' => false,
                'message' => 'Invalid token' . $error->getMessage(),
            ], 401);
        }

        $request->attributes->set('accessToken', $decodedAccessToken);
        
        return $next($request);
    }
}
