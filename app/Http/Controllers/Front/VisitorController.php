<?php

namespace App\Http\Controllers\Front;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visitor;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:visitor');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::all();
        //dd($category);
        return view('front-end.user.chooseCategory',compact('category'));

    }

    public function show(Request $request)
    {
        //dd($request);
//        $list =[];
//        $list[] = $request;
//        for ($i=0;$i<=count($list) ;$i++ ){
//            dd($list);
//        }

        for ($i=0;$i< count($request->input('category_list'));$i++)
        {
            $an=[];
            $an[$i] =$request->input('category_list');
                //dd(count($an));
            //dd($an[$i]);

            $list =Category::find($an[$i]);
        }

        return view('front-end.user.customerPage',compact('list'));

    }



}
