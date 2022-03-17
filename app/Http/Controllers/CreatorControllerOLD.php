<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Coupon;
use App\Models\Website;
use App\Models\UserSupport;
use App\Models\ExtensionUser;
use Validator;

class CreatorController extends Controller
{
    public function search($url)
    {   
        $url = preg_replace("(www.)", "", $url);
        $webResult = str_contains($url, '.com');
        
        if($webResult){
            
                $arr_creaters = [];
                $url = preg_replace("(www.)", "", $url);
                
                $arr_join_data = Website::join('users', 'users.id', '=', 'websites.user_id')->where('websites.website', 'like', "%$url%")
                ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName']);
        
                foreach ($arr_join_data as $key => $value) {
                    $objUser['name'] =$value->createrName;
                    $objUser['supporting'] =$value->userSupporting;
                    $objUser['website'] =$value->websiteName;
                    $objUser['profile_thumbnail'] = $_SERVER['SERVER_NAME'].'/thumbnails/'.$value->userProfileImage;

                    $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
                    $arr_temp_coupan = array();

                    foreach ($objCoupans as $key => $value) {
                        $arr_temp_coupan[$key] = $value->coupon_code;
                    }
                    
                    $objUser['coupon_codes'] = $arr_temp_coupan;
                    $arr_creaters[] = $objUser;
                }

                return response()->json([
                'success' => true,
                'creators' => $arr_creaters,
            ]);
        }
                
        else{
                $arr_creaters = [];
                $url = preg_replace("(www.)", "", $url);
                
                $arr_join_data = Website::join('users', 'users.id', '=', 'websites.user_id')->where('websites.website', 'like', "%$url%")->orWhere('users.name', 'like', "%$url%")
                ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName']);
        
                foreach ($arr_join_data as $key => $value) {
                    $objUser['name'] =$value->createrName;
                    $objUser['supporting'] =$value->userSupporting;
                    $objUser['profile_thumbnail'] = $_SERVER['SERVER_NAME'].'/thumbnails/'.$value->userProfileImage;

                    $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
                    $arr_temp_coupan = array();
                    $arr_temp_coupan['domain'] = $value->websiteName;

                    foreach ($objCoupans as $key => $value) {
                        $arr_temp_coupan['coupons'][$key] = $value->coupon_code;
                    }
                    
                    $objUser['coupons'] = [$arr_temp_coupan];
                    $arr_creaters[] = $objUser;
                }
                
                return response()->json([
                    'success' => true,
                    'results' => $arr_creaters,
                ]);
        }  
    }

    public function support(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'createrID' => 'required',
            'supporting' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        $createrID = $request->createrID;
        $supporting = $request->supporting;

        if(!User::find($createrID)){
                return response()->json([
                    "success" => false,
                    "msg" => 'creator not found'
                ]);}

        $AlreadySupporting = UserSupport::where('user_id', $request->user()->id)->where('creator_id',$createrID)->first();

        if(!$AlreadySupporting){
            $UserSupporting = new UserSupport();
            $UserSupporting->user_id = $request->user()->id;
            $UserSupporting->creator_id = $createrID;
            $UserSupporting->supporting = $supporting;
            $UserSupporting->save();

            if($supporting == 1){
                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting started'
                ]);
            }else{
                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting stopped'
                ]);
            }
        }
        
        else{
            UserSupport::where('user_id',$request->user()->id)->where('creator_id',$createrID)->update([
                'supporting' => $supporting
            ]);

            if($supporting == 1){
                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting started'
                ]);
            }else{
                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting stopped'
                ]);
            }
        }
    }

    public function supporters(Request $request)
    {
        $arr_creaters = [];
        $i = 1;
        $CreatorSupports =  Website::join('users','users.id','=','websites.user_id')
        ->join('usersupport','usersupport.creator_id','=','websites.user_id')
        ->where('usersupport.user_id',$request->user()->id)->where('usersupport.supporting',1)
        ->get(['users.name as createrName','usersupport.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName','usersupport.id as UID']);

        foreach ($CreatorSupports as $key => $value) {
            $objUser['id'] = $i;
            $objUser['name'] =$value->createrName;
            $objUser['supporting'] =$value->userSupporting;
            $objUser['profile_thumbnail'] = $_SERVER['SERVER_NAME'].'/thumbnails/'.$value->userProfileImage;

            $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
            $arr_temp_coupan = array();
            $arr_temp_coupan['domain'] = $value->websiteName;

            foreach ($objCoupans as $key => $value) {
                $arr_temp_coupan['coupons'][$key] = $value->coupon_code;
            }
            
            $objUser['coupons'] = [$arr_temp_coupan];
            $arr_creaters[] = $objUser;
            $i++;
        }

        return response()->json([
            'success' => true,
            'results' => $arr_creaters,
        ]);
    }
}