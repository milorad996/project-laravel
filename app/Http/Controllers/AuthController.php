<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);

        

        $token  = Auth::attempt($credentials);

        return response()->json([
            "token" => $token
        ]);
    }

    public function logout(){
        Auth::logout();
        return response(null,"Log in again");
    }


}
