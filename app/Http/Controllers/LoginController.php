<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;

class LoginController extends Controller
{
    //
    public function token(RegisterFormRequest $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'message' => 'Login invalide'
            ],401);
        }

        $user =User::where('email',$request->get('email'))->firstOrFail();

        $token=$user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' =>$token,
            'token_type'   =>'Bearer'
        ],201);
    }
}
