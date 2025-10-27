<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(RegisterRequest $request)
    {
        $user = ModelsUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['user' => $user], 201);
    }
}
