<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;

class AuthController extends Controller
{
    //
    public function auth()
    {
        return view('authentification');
    }
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

    public function token()
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
