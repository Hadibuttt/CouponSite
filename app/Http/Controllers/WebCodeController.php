<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Website;
use App\Models\Coupon;
use App\Models\User;
use File;
use Session;

class WebCodeController extends Controller
{
    public function createCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'website' => 'required|string|max:255|min:3',
            'code' => 'required|string|min:2',
        ]);

        $website = preg_replace("(^https?://)", "", $validatedData['website'] );

        $WithoutWWW = preg_replace("(www.)", "", $website );

        $ActualWebsite = preg_replace("(/)", "", $WithoutWWW );

        $alreadyAdded = Website::where('user_id',Auth::id())->where('website', $ActualWebsite)->first();

        if(!$alreadyAdded){
            $web = new Website();
            $web->user_id = Auth::id();
            $web->website = $ActualWebsite;
            $web->save();

            $websiteID = Website::latest('id')->value('id');
        
            $coupon = new Coupon();
            $coupon->user_id = Auth::id();
            $coupon->website_id = $websiteID;
            $coupon->coupon_code = $validatedData['code'];
            $coupon->save();

            $couponName = Coupon::latest('id')->value('coupon_code');

            Website::where('id', $websiteID )->update([
                "coupon_codes" => [$couponName]
            ]);
    }
    else{
            $coupon = new Coupon();
            $coupon->user_id = Auth::id();
            $coupon->website_id = $alreadyAdded['id'];
            $coupon->coupon_code = $validatedData['code'];
            $coupon->save();

            $website_id = Coupon::latest('id')->value('website_id');
            
            $coupons = Coupon::where('user_id',Auth::id())->where('website_id',$website_id)->select('coupon_code')->get();

            $coupons_codes = array();
            
            foreach($coupons as $c){
                $coupons_codes[] = $c['coupon_code'];
            }
            
            Website::where('user_id',Auth::id())->where('website', $alreadyAdded['website'])->update([
                "coupon_codes" => $coupons_codes
            ]);
    }
        return redirect('/coupon-submit')->with('success', 'Coupon added successfully!');
    }

    public function createMCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'website' => 'required|string|max:255|min:3',
            'code1' => 'required|string|min:2',
            'code2' => 'required|string|min:2',
            'code3' => 'required|string|min:2',
        ]);

        $website = preg_replace("(^https?://)", "", $validatedData['website'] );

        $WithoutWWW = preg_replace("(www.)", "", $website );

        $ActualWebsite = preg_replace("(/)", "", $WithoutWWW );

        $alreadyAdded = Website::where('user_id',Auth::id())->where('website', $ActualWebsite)->first();

        if(!$alreadyAdded){
            $web = new Website();
            $web->user_id = Auth::id();
            $web->website = $ActualWebsite;
            $web->save();

            $websiteID = Website::latest('id')->value('id');
        
            $coupon = new Coupon();
            $coupon->website_id = $websiteID;
            $coupon->coupon_code = $validatedData['code1'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $coupon1 = Coupon::latest('id')->value('coupon_code');

            $coupon = new Coupon();
            $coupon->website_id = $websiteID;
            $coupon->coupon_code = $validatedData['code2'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $coupon2 = Coupon::latest('id')->value('coupon_code');

            $coupon = new Coupon();
            $coupon->website_id = $websiteID;
            $coupon->coupon_code = $validatedData['code3'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $coupon3 = Coupon::latest('id')->value('coupon_code');

            Website::where('user_id',Auth::id())->where('id', $websiteID )->update([
                "coupon_codes" => [$coupon1,$coupon2,$coupon3]
            ]);
    }
    else{
            $coupon = new Coupon();
            $coupon->website_id = $alreadyAdded['id'];
            $coupon->coupon_code = $validatedData['code1'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $coupon = new Coupon();
            $coupon->website_id = $alreadyAdded['id'];
            $coupon->coupon_code = $validatedData['code2'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $coupon = new Coupon();
            $coupon->website_id = $alreadyAdded['id'];
            $coupon->coupon_code = $validatedData['code3'];
            $coupon->user_id = Auth::id();
            $coupon->save();

            $website_id = Coupon::latest('id')->value('website_id');
            
            $coupons = Coupon::where('website_id',$website_id)->select('coupon_code')->get();

            $coupons_codes = array();
            
            foreach($coupons as $c){
                $coupons_codes[] = $c['coupon_code'];
            }
            
            Website::where('user_id',Auth::id())->where('website', $alreadyAdded['website'])->update([
                "coupon_codes" => $coupons_codes
            ]);
    }
        
        return redirect('/coupon-submit')->with('success', 'Coupons added successfully!');
    }

    public function delete($id,$cid)
    {

        Coupon::where('user_id',Auth::id())->where('id',$cid)->delete();

        $coupons = Coupon::where('user_id',Auth::id())->where('website_id',$id)->select('coupon_code')->get();

            $coupons_codes = array();
            
            foreach($coupons as $c){
                $coupons_codes[] = $c['coupon_code'];
            }
            
            Website::where('user_id',Auth::id())->where('id', $id)->update([
                "coupon_codes" => $coupons_codes
            ]);

        return redirect('/user-dashboard')->with('danger', 'Coupon deleted successfully!');
    }

}