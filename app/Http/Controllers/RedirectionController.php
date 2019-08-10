<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectionController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:visitor');
//
//    }
    public function redirection(Request $request)
    {
        if (Auth::guard('visitor')->user()->user_type != 'Visitor') {

            return redirect('/publisher_dashboard')->with('message', 'You are already logined as ');
        }
        else
            return redirect('/user/visitor')->with('message', 'You are already logined as ');
    }
}
