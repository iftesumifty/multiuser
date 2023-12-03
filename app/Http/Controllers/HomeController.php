<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('admin.dashboard');
            }

            else if($usertype=='admin')
            {
                return view('admin.home');
            }
            else{
                return redirect()->back();
            }
            
    }
}
}
