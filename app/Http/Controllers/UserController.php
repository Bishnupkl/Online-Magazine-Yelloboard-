<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:visitor');
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userAuth.home');
        //$category = Category::all();
       // return view('front-end.user.chooseCategory',compact('category'));
    }

}
