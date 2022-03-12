<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;
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
        if (!Auth::guard('extensionUser')->attempt($request->only('email', 'password'))) {
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

    public function forgot(Request $request)
    {
        $credentials = $request->validate(['email' => 'required|email']);
        $emailIs = ExtensionUser::where('email',$credentials)->first();
        
        if($emailIs){
            Password::broker('extensionUser')->sendResetLink($credentials);
            return response()->json([
                'success' => 'true',
                'msg' => 'password resent link sent to email',
        ]);
        }else{
            return response()->json([
                'success' => 'false',
                'msg' => 'email not found',
            ]);
        }
    }

    public function reset() {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::broker('extensionUser')->reset($credentials, function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(["msg" => "Invalid token provided"], 400);
        }

        return response()->json(["msg" => "Password has been successfully changed"]);
    }

    public function update(Request $request)
    {
        $hashedPassword = $request->user()->password;

        if (\Hash::check($request->currentPassword , $hashedPassword )) {
 
            if (!\Hash::check($request->newPassword , $hashedPassword)) {
    
                 $users = ExtensionUser::find($request->user()->id);
                 $users->password = bcrypt($request->newPassword);
                 ExtensionUser::where('id', $request->user()->id)->update(['password' =>  $users->password]);
    
                    return response()->json([
                        'success' => 'true',
                        'msg' => 'password updated successfully',
                    ]);
               }
    
               else{
                    return response()->json([
                        'success' => 'false',
                        'msg' => 'New Password can not be the Old Password!',
                    ]);    
                }
              }
    
             else{
                    return response()->json([
                        'success' => 'false',
                        'msg' => 'invalid current password',
                    ]);
                }
    }



}