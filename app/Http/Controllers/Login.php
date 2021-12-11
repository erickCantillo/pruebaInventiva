<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request){
        if($request->email == "erick.cantillo97@gmail.com" && $request->password == 'inventibaCreations'){

            return 'OK';
        }else{
            return 'NO';
        }
    }
}
