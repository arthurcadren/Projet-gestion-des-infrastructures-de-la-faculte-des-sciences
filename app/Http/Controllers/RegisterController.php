<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;

class RegisterController extends Controller
{
    //
    public function register(RegisterFormRequest $request):JsonResponse
    {
        $user=User::create([
            'name'      =>  $request->get('name'),
            'email'    =>  $request->get('email'),
            'password'  =>  Hash::make($request->get('password')),
        ]);

        $token=$user->createtoken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' =>$token,
            'token_type'   =>'Bearer'
        ],201);
    }

    
}
