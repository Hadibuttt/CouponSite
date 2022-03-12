<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Website;
use App\Models\UserSupport;
use App\Models\ExtensionUser;
use Validator;

class CreatorController extends Controller
{
    public function search($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = Website::select('users.name','users.supporting','website','users.profile_thumbnail','coupon_codes')->join('users','users.id','=','websites.user_id')->where('website', 'like', "%$url%")->get();
        
        return response()->json([
            'success' => 'true',
            'creators' => $creaters,
        ]);
    }


    public function searchName($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = Website::select('users.name','users.supporting','website','users.profile_thumbnail','coupon_codes')->join('users','users.id','=','websites.user_id')->where('website', 'like', "%$url%")->orWhere('users.name', 'like', "%$url%")->get();
        
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

        $AlreadySupporting = UserSupport::where('user_id', $request->user()->id)->where('creator_id',$createrID)->first();

        if(!$AlreadySupporting){
            $UserSupporting = new UserSupport();
            $UserSupporting->user_id = $request->user()->id;
            $UserSupporting->creator_id = $createrID;
            $UserSupporting->supporting = $supporting;
            $UserSupporting->save();

            return response()->json([
                "success"=> 'true',
                "msg" => 'supporting started'
            ]);
        }
        
        else{
            UserSupport::where('user_id',$request->user()->id)->where('creator_id',$createrID)->update([
                'supporting' => $supporting
            ]);

            return response()->json([
                "success"=> 'true',
                "msg" => 'supporting stopped'
            ]);
        }
    }

    public function supporters(Request $request)
    {
        $CreatorSupports =  Website::select('usersupport.id','users.name','usersupport.supporting','users.profile_thumbnail','website','coupon_codes')
        ->join('users','users.id','=','websites.user_id')
        ->join('usersupport','usersupport.creator_id','=','websites.user_id')
        ->where('usersupport.user_id',$request->user()->id)->where('usersupport.supporting',1)
        ->get();

        return response()->json([
            $CreatorSupports
        ]);
    }

}
