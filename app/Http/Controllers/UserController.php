<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Website;
use App\Models\Coupon;
use App\Models\User;
use Image;

class UserController extends Controller
{
    public function dashboard()
    {
        $websites = Website::where('user_id',Auth::id())->get();

        $WebsiteArray = array();
            
        foreach($websites as $c){
            $WebsiteArray[] = $c->id;
        }

        $coupons = Coupon::where('user_id',Auth::id())->whereIn('website_id',$WebsiteArray)->orderBy('id','DESC')->get();

        
        $count = Coupon::where('user_id',Auth::id())->whereIn('website_id',$WebsiteArray)->count();

        return view('dashboard', compact('websites','coupons','count'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|',
            'email' => 'required|email|max:255|unique:users,email,'.Auth::id(),
        ]);

        //Image Resizing
        $image = $request->file('image');
        $validatedData['image'] = time().'.'.$image->extension();
     
        $filePath = public_path('/thumbnails');
        $img = Image::make($image->path());
        
        $img->resize(250, 250, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$validatedData['image']);
   
        $filePath = public_path('/images/profile-images/');
        $image->move($filePath, $validatedData['image']);

        User::where('id',Auth::id())->update([
            "image" => $validatedData['image'],
            "name" => $validatedData['name'],
            "email" => $validatedData['email'],
        ]);

        return redirect('/user-dashboard')->with('success', 'Profile updated successfully!');
    }


}
