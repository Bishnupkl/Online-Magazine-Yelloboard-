<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Post;
use App\Model\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Facades;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:visitor');
        $this->middleware('visitor');
    }

    public function index()
    {
        //return view('userAuth.visitor');
        $category = Category::all();

        $visitor = Auth::guard('visitor')->user();
        $subList = [];
        foreach($visitor->subcategories as $subcategory){
            $subList[]  = $subcategory->title;
        }
        //dd($subList);
        if (!empty($subList))
        {
            return redirect()->route('visitor.home');
        }

        return view('front-end.user.chooseCategory',compact('category','subList'));
    }

    public function change()
    {
        //return view('userAuth.visitor');
        $category = Category::all();

        $visitor = Auth::guard('visitor')->user();
        $subList = [];
        foreach($visitor->subcategories as $subcategory){
            $subList[]  = $subcategory->title;
        }


        return view('front-end.user.chooseCategory',compact('category','subList'));
    }



    public function profileMe()
    {
        return redirect()->route('visitor.home');


    }
    public function profile(Request $request)
    {
        if($request->has('sub') && is_array($request->sub) && count($request->sub))
        {
            foreach ($request->get('sub') as $key => $value) {
                $subcat[] = Subcategory::find($value);
                $category[] = $subcat[$key]->category;
//                dd($category);

                    $post[] =$subcat[$key]->posts;
                    //dd($post);

            }

            $unique_cat = array_unique($category);
           // dd($unique_cat);
            $sub = array_unique($subcat);

             $this->store($sub);
             return redirect()->route('visitor.home');

//            $unique_post =array_unique($post);
//            dd($unique_post[1]);
//            $post = Post::all();
//            return view('front-end.user.customerPage', compact('subcat', 'category', 'unique_cat', 'post'));
       }
            else
      {

          return redirect()->route('visitor.home');
            }

    }

    public function store($request) {

        foreach ($request as $key => $category){
            $category_id[] = $category->id;
//            $main_cat[] =
        }
        $visitor = Auth::guard('visitor')->user();
        //$visitor->subcategories()->attach($category_id);
        $visitor->subcategories()->sync($category_id);
        //return redirect()->back();
        $this->home();
    }




    public function home()
    {

        $visitor = Auth::guard('visitor')->user();

        $g=array();



        foreach($visitor->subcategories as $sub)
        {

            array_push($g,$sub->category);

        }



        $array=array_values(array_filter(array_unique($g)));
//        dd($array);



        return view('front-end.user.customerPage', compact('visitor','array'));

    }


}
