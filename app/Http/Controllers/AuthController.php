<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $rules = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:4'
        ]);

        Log::alert(bcrypt($request->password));
        if(auth()->attempt($rules))
        {
            $user = auth()->user();

            return response()->json([
                'user'=> $user,
                'access_token' => $user -> createToken('access_token')->plainTextToken,
                'token_type' => 'Bearer',
            ], 200);
        }
        return response()->json(['error' => 'Can not login please try again!!'], 403);

        //return response()->json('Invalid Credentials!!!', 401);
    }

    function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json('Bye!!!', 200);
    }

}