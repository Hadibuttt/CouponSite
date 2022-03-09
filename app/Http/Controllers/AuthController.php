<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ExtensionUser;
use Validator;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:extension_users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => 'false',
                'msg' => 'email already exists'
            ]);
        }

        $user = ExtensionUser::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => 'true',
            'msg' => 'signup successfully',
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => 'false',
                'msg' => 'invalid email or password'
                ]);
            }
    
        $user = ExtensionUser::where('email', $request['email'])->firstOrFail();
    
        $token = $user->createToken('auth_token')->plainTextToken;
    
        return response()->json([
                'success' => 'true',
                'token' => $token,
                'msg' => 'logged in successfully',
        ]);
    }

}