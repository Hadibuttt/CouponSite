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
use DB;
use Faker\Generator as Faker;
use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Collection;
use App\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class CreatorController extends Controller
{

    function get_domain($url)
    {
        $pieces = parse_url($url);
        $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
            return $regs['domain'];
        }
        
        return false;
    }

    public function search(Request $request)
    {
        $url = $request->query('query');

        if(empty($url)){

            $arr_creaters = [];
                
            $arr_join_data = Website::join('users', 'users.id', '=', 'websites.user_id')
            ->inRandomOrder()
            ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName']);
            foreach ($arr_join_data as $key => $value) {
                $objUser['id'] =$value->userID;
                $objUser['name'] =$value->createrName;
                $objUser['supporting'] =$value->userSupporting;
                $objUser['website'] =$value->websiteName;
                $objUser['profile_thumbnail'] = $value->userProfileImage;

                $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
                $arr_temp_coupan = array();

                foreach ($objCoupans as $key => $value) {
                    $arr_temp_coupan[$key] = $value->coupon_code;
                }
                
                $objUser['coupon_codes'] = $arr_temp_coupan;
                $arr_creaters[] = $objUser;
            }

            $data = (new Collection($arr_creaters))->paginate(20);

            return response()->json([
            'success' => true,
            'creators' => $data,
        ]);

        }

        $domain = $this->get_domain($url);
        
        if($domain == false){
            $HasUser = User::where('name', 'like', '%' . $url . '%')->get();
        }
        
        if($domain){
            
                $arr_creaters = [];
                
                $arr_join_data = Website::join('users', 'users.id', '=', 'websites.user_id')->where('websites.website', 'like', "%$domain%")
                ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName']);
                foreach ($arr_join_data as $key => $value) {
                    $objUser['id'] =$value->userID;
                    $objUser['name'] =$value->createrName;
                    $objUser['supporting'] =$value->userSupporting;
                    $objUser['website'] =$value->websiteName;
                    $objUser['profile_thumbnail'] = $value->userProfileImage;

                    $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
                    $arr_temp_coupan = array();

                    foreach ($objCoupans as $key => $value) {
                        $arr_temp_coupan[$key] = $value->coupon_code;
                    }
                    
                    $objUser['coupon_codes'] = $arr_temp_coupan;
                    $arr_creaters[] = $objUser;
                }
                
                $data = (new Collection($arr_creaters))->paginate(20);

                return response()->json([
                'success' => true,
                'creators' => $data,
            ]);
        }
        
        elseif ($HasUser->isEmpty() == true) {
                $arr_creaters = [];
                
                $arr_join_data = Website::join('users', 'users.id', '=', 'websites.user_id')->where('websites.website', 'like', "%$url%")
                ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName']);
                foreach ($arr_join_data as $key => $value) {
                    $objUser['id'] =$value->userID;
                    $objUser['name'] =$value->createrName;
                    $objUser['supporting'] =$value->userSupporting;
                    $objUser['website'] =$value->websiteName;
                    $objUser['profile_thumbnail'] = $value->userProfileImage;

                    $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
                    $arr_temp_coupan = array();

                    foreach ($objCoupans as $key => $value) {
                        $arr_temp_coupan[$key] = $value->coupon_code;
                    }
                    
                    $objUser['coupon_codes'] = $arr_temp_coupan;
                    $arr_creaters[] = $objUser;
                }

                $data = (new Collection($arr_creaters))->paginate(20);

                return response()->json([
                'success' => true,
                'creators' => $data,
            ]);
        }
                
        else{
                $arr_creaters = [];
                
                $arr_join_data = User::Where('users.name', 'like', "%$url%")
                ->get(['users.id as userID','users.name as createrName','users.supporting as userSupporting','users.image as userProfileImage']);
                foreach ($arr_join_data as $key => $value) {
                    $objUser['id'] =$value->userID;
                    $objUser['name'] =$value->createrName;
                    $objUser['supporting'] =$value->userSupporting;
                    $objUser['profile_thumbnail'] = $value->userProfileImage;
                    $website_array = Website::Where('websites.user_id', $value['userID'])->get();
                    if(count($website_array)){

                    
                    foreach($website_array as $index => $webRow){
                         $objCoupans = Coupon::where('website_id',$webRow->id)->get();
                    $arr_temp_coupan = array();
                    $arr_temp_coupan['domain'] = $webRow->website;

                    foreach ($objCoupans as $key => $value) {
                        $arr_temp_coupan['coupons'][$key] = $value->coupon_code;
                    }
                    
                    $objUser['coupons'][] = $arr_temp_coupan;
                    }
                }else{
                    $objUser['coupons'] = [];
                }
                    $arr_creaters[] = $objUser;
                }

                $data = (new Collection($arr_creaters))->paginate(20);
                
                return response()->json([
                    'success' => true,
                    'results' => $data,
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
                    User::where('id', $createrID)->update(['supporting'=>1]);

                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting started'
                ]);
            }else{
                User::where('id', $createrID)->update(['supporting'=>0]);

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
                                   User::whereId($createrID)->update(['supporting'=>1]);

                return response()->json([
                    "success"=> true,
                    "msg" => 'supporting started'
                ]);
            }else{
                User::where('id', $createrID)->update(['supporting'=>0]);
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
                $createridsObj = DB::table('usersupport')->whereUser_id($request->user()->id)->whereSupporting(1)->get();
               if(isset($createridsObj) && !empty($createridsObj)){
                foreach ($createridsObj as $key => $value) {
                    $createrDetails = User::whereId($value->creator_id)->first(['id','name','image','image'])->toArray();
                    $createrDetails['profile_thumbnail'] = $createrDetails['image'];
                    $createrDetails['supporting'] = $value->supporting;
                    unset($createrDetails['image']);
                    $website_array = Website::where('user_id', $value->creator_id)->get();
                    if(count($website_array) > 0){
                        foreach ($website_array as $key => $webRow) {
                            $website_array_selected['domain'] = $webRow->website;
                            $coupans = Coupon::where('website_id',$webRow->id)->get(['coupon_code']);
                            foreach ($coupans as $key => $f) {
                                $website_array_selected['coupons'][$key] = $f->coupon_code;
                            }
                            $createrDetails['coupons'][] = $website_array_selected;
    
                        }
                    }else{
                        $createrDetails['coupons'] = [];
                    }
                   


                    // print_r($createrDetails);
                    $arr_creaters[] = $createrDetails;
                    // $objUser['id'] =$createrDetails->id;
                    // $objUser['name'] =$createrDetails->name;
                    // $objUser['supporting'] =$createrDetails->supporting;
                    // $objUser['profile_thumbnail'] = $_SERVER['SERVER_NAME'].'/thumbnails/'.$createrDetails->image;
                    // $website_array = Website::where('user_id', $value->creator_id)->get();
                    // $arr_temp_coupan = array();
                    // foreach($website_array as $index => $webRow){
                    //      $objCoupans = Coupon::where('website_id',$webRow->id)->get();
                    // $arr_temp_coupan['domain'] = $webRow->website;

                    // foreach ($objCoupans as $key => $value) {
                    //     $arr_temp_coupan['coupons'][$key] = $value->coupon_code;
                    // }
                    
                    // $objUser['coupons'][] = $arr_temp_coupan;
                    // }

                }

               }
                
               $data = (new Collection($arr_creaters))->paginate(20);
                
                return response()->json([
                    'success' => true,
                    'results' => $data,
                ]);
        
        //Previous Query
        
        // $arr_creaters = [];
        // $i = 1;
        // $CreatorSupports =  Website::join('users','users.id','=','websites.user_id')
        // ->join('usersupport','usersupport.creator_id','=','websites.user_id')
        // ->where('usersupport.user_id',$request->user()->id)->where('usersupport.supporting',1)
        // ->get(['users.name as createrName','usersupport.supporting as userSupporting','users.image as userProfileImage', 'websites.id as websiteID','websites.website as websiteName','usersupport.id as UID']);

        // foreach ($CreatorSupports as $key => $value) {
        //     $objUser['id'] = $i;
        //     $objUser['name'] =$value->createrName;
        //     $objUser['supporting'] =$value->userSupporting;
        //     $objUser['profile_thumbnail'] = $_SERVER['SERVER_NAME'].'/thumbnails/'.$value->userProfileImage;

        //     $objCoupans = Coupon::where('website_id',$value->websiteID)->get();
        //     $arr_temp_coupan = array();
        //     $arr_temp_coupan['domain'] = $value->websiteName;

        //     foreach ($objCoupans as $key => $value) {
        //         $arr_temp_coupan['coupons'][$key] = $value->coupon_code;
        //     }
            
        //     $objUser['coupons'] = [$arr_temp_coupan];
        //     $arr_creaters[] = $objUser;
        //     $i++;
        // }

        // return response()->json([
        //     'success' => true,
        //     'results' => $arr_creaters,
        // ]);
    }
}