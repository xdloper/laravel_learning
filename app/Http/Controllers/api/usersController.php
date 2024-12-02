<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{ 
    public function getUsers(Request $request){
        return response()->json([
            'success' => true,
            'message' => 'users get successfuly',
            'data' => [
                'data' => [],
                'totalCount' => 0,
            ]
        ]);
    }
}
