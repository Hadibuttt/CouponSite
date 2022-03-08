<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WebCode;
use App\Models\User;
use Image;

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
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|',
            'email' => 'required|email|max:255|unique:users,email,'.'1',
        ]);


        $image = $request->file('image');
        $validatedData['image'] = time().'.'.$image->extension();
     
        $filePath = public_path('/thumbnails');
        $img = Image::make($image->path());
        
        $img->resize(250, 250, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$validatedData['image']);
   
        $filePath = public_path('/images/profile-images/');
        $image->move($filePath, $validatedData['image']);

        User::where('id',1)->update([
            "image" => $validatedData['image'],
            "name" => $validatedData['name'],
            "email" => $validatedData['email'],
        ]);

        return redirect('/user-dashboard')->with('success', 'Profile updated successfully!');
    }


}
