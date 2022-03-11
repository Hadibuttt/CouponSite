<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Website;
use App\Models\UserSupport;
use Validator;

class CreatorController extends Controller
{
    public function search($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = Website::select('name','supporting','website','profile_thumbnail','coupon_codes')->where('website', 'like', "%$url%")->get();
        
        return response()->json([
            'success' => 'true',
            'creators' => $creaters,
        ]);
    }


    public function searchName($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = Website::select('name','supporting','website','profile_thumbnail','coupon_codes')->where('website', 'like', "%$url%")->orWhere('name', 'like', "%$url%")->get();
        
        return response()->json([
            'success' => 'true',
            'results' => $creaters,
        ]);
    }

    public function support(Request $request)
    {
        $createrID = $request->createrID;
        $supporting = $request->supporting;

        if(!User::find($createrID)){
                return response()->json([
                    "success" => 'false',
                    "msg" => 'creator not found'
                ]);}

        User::where('id',$createrID)->update([
            'supporting' => $supporting
        ]);
        
        return response()->json([
            "success"=> 'true',
            "msg" => 'supporting started/stopped'
        ]);
    }

    public function supporters(Request $request)
    {
        $CreatorSupporting =  UserSupport::where('user_name','Hammad Butt')->get();

        $CreaterArray = array();
            
            foreach($CreatorSupporting as $c){
                $CreaterArray[] = $c->creator_name;
            }
        

        $CreatorSupports =  Website::select('name','supporting','website','profile_thumbnail','coupon_codes')->whereIn('name', $CreaterArray)->get();

        return response()->json([
            $CreatorSupports
        ]);
    }

}
