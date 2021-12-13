<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request){
       
        if(strtolower($request->email) == "erick.cantillo97@gmail.com" && $request->password == 'inventibaCreations'){
            return response()->json(['estado' => 'OK', 200]);
        }else{
            return response()->json(['estado' => 'No', 200]);
        }
    }
}
