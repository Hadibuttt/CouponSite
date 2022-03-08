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

    public function createMCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'website' => 'required|string|max:255|min:3',
            'code1' => 'required|string|min:2',
            'code2' => 'required|string|min:2',
            'code3' => 'required|string|min:2',
        ]);

        $webcode = new WebCode();
        $webcode->user_id = $validatedData['user_id'];
        $webcode->website = $validatedData['website'];
        $webcode->code = $validatedData['code1'];
        $webcode->save();

        $webcode = new WebCode();
        $webcode->user_id = $validatedData['user_id'];
        $webcode->website = $validatedData['website'];
        $webcode->code = $validatedData['code2'];
        $webcode->save();

        $webcode = new WebCode();
        $webcode->user_id = $validatedData['user_id'];
        $webcode->website = $validatedData['website'];
        $webcode->code = $validatedData['code3'];
        $webcode->save();
        
        return redirect('/coupon-submit')->with('success', 'Coupons added successfully!');
    }

    public function delete($slug)
    {
        Webcode::where('user_id','1')->where('code',$slug)->delete();
        return redirect('/user-dashboard')->with('danger', 'Coupon deleted successfully!');
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



}
