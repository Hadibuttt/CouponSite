<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WebCode;
use App\Models\User;

class WebCodeController extends Controller
{
    public function Index()
    {
        $data = Webcode::where('user_id','1')->orderBy('id','DESC')->get();

        return response()->json([
            "Message" => 'Showing Data',
            "Displayed data" => $data,
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'website' => 'required|string|max:255',
            'code' => 'required|string|min:8',
        ]);

        $data = WebCode::create([
            'user_id' => $validatedData['user_id'],
            'website' => $validatedData['website'],
            'code' => $validatedData['code'],
        ]);

        return response()->json([
            "Message" => 'Success',
            "Inserted data" => $data,
        ]);
    }


    public function createCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'website' => 'required|string|max:255|min:3',
            'code' => 'required|string|min:2',
        ]);

        $data = WebCode::create([
            'user_id' => $validatedData['user_id'],
            'website' => $validatedData['website'],
            'code' => $validatedData['code'],
        ]);
        
        return redirect('/coupon-submit')->with('success', 'Coupon added successfully!');
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);

        //Main Image Upload  
        // $name = time().$request->image->getClientOriginalName();
        // $image= $request->image->move(public_path().'/img/product-img/main/', $name);

        User::where('id',1)->update([
            "image" => $request->image
        ]);

        return response()->json([
            "Message" => 'Success',
            "Inserted Image" => $request->image,
        ]);
    }


    public function dashboard()
    {
        $data = Webcode::where('user_id','1')->orderBy('id','DESC')->get();
        $user = User::where('id', 1)->first();

        return view('dashboard', compact('data','user'));
    }




}
