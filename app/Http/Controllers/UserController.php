<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
//use App\Http\Controllers\UserController;

class UserController extends Controller
{
    public function me(Request $request):UserResource
    {
        return new UserResource($request->user());
    }
}
