<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype=='vendor'){
                return view('vendor.dashboard');
            }
            else if($usertype=='authorizer'){
                return view('authorizer.dashboard');
            }
            else{
                return redirect()->back();
            }

        }
    }
}
