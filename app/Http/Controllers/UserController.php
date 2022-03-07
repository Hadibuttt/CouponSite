<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WebCode;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $datas = Webcode::where('user_id','1')->orderBy('id','DESC')->get();
        $count = Webcode::where('user_id','1')->count();
        $user = User::where('id', 1)->first();

        return view('dashboard', compact('datas','user','count'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'image' => 'required',
            'email' => 'required|email|max:255|unique:users,email,'.'1',
        ]);

        //Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/images/profile-images/', $name);

        User::where('id',1)->update([
            "image" => $name,
            "name" => $validatedData['name'],
            "email" => $validatedData['email'],
        ]);

        return redirect('/user-dashboard')->with('success', 'Profile updated successfully!');
    }


}
