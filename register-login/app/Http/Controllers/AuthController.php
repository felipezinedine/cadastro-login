<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


class AuthController extends Controller
{

   public function login(Request $request)
   {

       $credentials = $request->validate([
        'email' => 'required|email', 
        'password' => 'required|min:4']);

       if(!$token = auth()->attempt($credentials))
       {
            return response()->json(['error' => 'Unauthorizade'], 401);
       }  

       return redirect('api.started');
   }



   protected function createNewToken($token)
   {
        return response()->json([[
            'acess_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        ]]);
   }
}
