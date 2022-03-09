<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\WebCode;
use Validator;

class CreatorController extends Controller
{
    public function search($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = WebCode::where('website', 'like', "%$url%")->get();
        
        return response()->json([
            'success' => 'true',
            'creators' => $creaters,
        ]);

    }


    public function searchName($url)
    {   
        $url = preg_replace("(www.)", "", $url);

        $creaters = WebCode::where('name', 'like', "%$url%")->get();
        
        return response()->json([
            'success' => 'true',
            'results' => $creaters,
        ]);

    }


}
