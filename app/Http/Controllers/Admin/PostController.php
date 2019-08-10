<?php

namespace App\Http\Controllers\Admin;

use App\Mail\notifySponsorApproved;
use App\Model\Category;

use App\Model\Post;
use App\Model\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gate;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }
        $post=Post::limit(100000)->orderBy('created_at','desc')->get();
        return view('admin.post.index',compact('post'));
    }

    public function create()
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }

        $category = Category::all();
        //$subcategory = Subcategory::all();
        //dd($category);
        return view('admin.post.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request);
        $filename ='';
        $image =$request->file('image');
        if (!empty($image)){
            $path = base_path().'/public/assets/admin/img';
            //for unique
            $name = uniqid().'_'.$image->getClientOriginalName();
            //
            if ($image->move($path,$name)){
                $filename = $name;
            }
        }

        Post::create([


            'category_id'=>$request->input('category_id'),
            'subcategory_id'=>$request->input('sub_category_id'),
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'status'=>$request->input('status'),
            'sponsored'=>$request->input('sponsored'),
            'description'=>$request->input('description'),
            'keywords'=>$request->input('keywords'),
            'excerpt'=>$request->input('excerpt'),
            'image'=>$filename,
            'user_id'=>Auth::user()->id,
            'visitor_id'=> 0 ,
        ]);

       return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $post = Post::find($id);
        $post->postNotify = 0;
        $post->update();
       return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }
        $posts = Post::find($id);
        $category = Category::find($posts->category_id);
        $subcategory = Subcategory::find($posts->subcategory_id);

        //dd($category);
        return view('admin.post.edit',compact('posts','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request);
        $posts=Post::find($id);

//        $posts->category_id =$request->input('category_id');
        $posts->title =$request->input('title');
        $posts->status =$request->input('status');
        $posts->description =$request->input('description');
        //$category->image =$request->input('image');
        $image =$request->file('image');

        if (!empty($image)){
            $path = base_path().'/public/assets/admin/img';
            //for unique
            $name = uniqid().'_'.$image->getClientOriginalName();
            //
            if ($image->move($path,$name)){
                $posts->image = $name;
            }
        }

//        $posts->updated_by =Auth::user()->id;
//        $posts->created_by =Auth::user()->id;
        $posts->update();
        return redirect()->route('admin.post.index');

    }

    public function destroy($id)
    {
        $post =Post::find($id);


        if($post->image){
                //dd('dome');
            unlink(public_path().DIRECTORY_SEPARATOR.'assets\admin\img'.DIRECTORY_SEPARATOR.$post->image);
            $post->delete();
            return redirect()->route('admin.post.index');
        }
        else
        {
            $post->delete();
            return redirect()->route('admin.post.index');
        }


    }


    public function sponsor($id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"Sorry, You cannot do this action.");
        }

        //dd($id);
        $a = Post::find($id);
        $a->sponsored=1;
        $a->sponsor_request = 0;

        $email=$a->visitor;
        $this->sendEmailForSponsorApproved($email);

        $a->update();
        return redirect()->route('admin.post.index');
    }

    public function sendEmailForSponsorApproved($thisUserEmail)
    {
        //  dd($thisUserEmail);
        Mail::to($thisUserEmail['email'])->send(new notifySponsorApproved($thisUserEmail));
        //  dd('hello sus');
        //here verifyEmail is a mailable that is created inside mail folder
    }




    public function sponsorCancel($id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"Sorry, You cannot do this action.");
        }

        //dd($id);
        $a = Post::find($id);
        $a->sponsored=0;
        $a->sponsor_request = 0;
        $a->update();

        return redirect()->route('admin.post.index');

    }

}
