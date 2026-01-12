<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // dd($email, $password);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            $user = auth()->user();
            return response()->json([
                'token' => JWTAuth::fromUser($user),
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
