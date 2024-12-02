<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

class rootController extends Controller
{
    public function root(){
        $exampleData = [
            "datacık" => "hello"
        ];

        return view("pages.api");
    }
}
