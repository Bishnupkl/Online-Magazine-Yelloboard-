<?php

namespace App\Http\Controllers;

use App\Mail\notifySponsor;
use App\Model\Category;
use App\Model\Post;
use App\Model\Subcategory;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PublisherController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:visitor');
        $this->middleware('publisher');
        $this->middleware('author')->except('index','show','throughLink','publishing','store','show','getSubcat','myProfile','editmyProfile','updatemyProfile');

        
    }

    public function index()
    {
      // return view('userAuth.publisher');
       return view('front-end.publisher.profile');
    }

    public function throughLink()
    {
        return view('front-end.publisher.profile');
    }

    public function publishing()

    {

        if (\auth()->user()->user_type == 'Publisher'){

            $category=Category::pluck('title','id');
        }
        else{
            $currentUser = auth()->user();
           $category= $currentUser->categories->pluck('title','id');

        }
        return view('front-end.publisher.profile',compact('category'));
    }


    public function store(Request $request)
    {        //dd($request);
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
       $p = Post::create([
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
            'url' => $request->url,
            'user_id'=>0,
            'postNotify'=>1,
            'visitor_id'=>Auth::guard('visitor')->user()->id,
        ]);
        if($p)
        {
        return redirect()->route('publisher.show')->with('message','Your data are successfully stored.');
        }

    }




    public function show()
    {
        $user= auth()->user();

        if($user->user_type == 'Publisher'){
            $visitor_id= Auth::guard('visitor')->user()->id;
            //dd($visitor_id);

            $post =Post::find('visitor_id');
            $post = Post::where("visitor_id", "=", $visitor_id)->get();
       // dd($post);
        }elseif($user->user_type == 'author'){
            $post = Post::where('visitor_id',$user->id)->limit(100000)->orderBy('created_at','desc')->get();
//            return view('front-end.publisher.profile',compact('post','user'));
        }

        return view('front-end.publisher.profile',compact('post','user'));
    }

    public function recent()
    {
//        $post =Post::orderBy('created_at','desc')->get();
//        return view('front-end.publisher.profile',compact('post'));

        $user= auth()->user();

        if($user->user_type == 'Publisher'){
            $visitor_id= Auth::guard('visitor')->user()->id;
            //dd($visitor_id);

            $post =Post::find('visitor_id');
            $post = Post::where("visitor_id", "=", $visitor_id)->orderBy('created_at','desc')->get();
            // dd($post);
        }elseif($user->user_type == 'author'){
            $post = Post::where('visitor_id',$user->id)->limit(100000)->orderBy('created_at','desc')->get();
        }

        return view('front-end.publisher.profile',compact('post','user'));
    }





    public function sponsor($id)
    {

        $a = Post::find($id);
        $a->visitor_id;
        $a->sponsored=1;
        $a->sponsor_request = 1;

        $email=$a->visitor;
        $this->sendEmailForSponsor($email);
        $a->update();
        return redirect()->route('publisher.show');


    }


    public function sendEmailForSponsor($thisUserEmail)
    {
      //  dd($thisUserEmail);
        Mail::to($thisUserEmail['email'])->send(new notifySponsor($thisUserEmail));
        //  dd('hello sus');
        //here verifyEmail is a mailable that is created inside mail folder
    }


    public function sponsorCancel($id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"Sorry, You cannot do this action.");
        }

        $a = Post::find($id);
        $a->sponsored=0;

        $a->sponsor_request = 0;
        $a->update();

        return redirect()->route('publisher.show');

    }


    public function indexAuthor()
    {

        $categories = Category::all();

        return view('admin.publisher.create',compact('categories'));
    }

    public function storeAuthor(Request $request)
    {
        $user= auth()->user();

        $visitor= Visitor::create([
            'name' => $user->name, //company name input
            'user_name'=>$request->input('user_name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),

            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),

            'verification_key' => Str::random(40), //for token generate---this is inside dbtoken repository

            'status' => $request->input('status'),
            'pubisherstatus' => $request->input('pubisher_status'),

            'user_type' => 'author',
            'publisher_id' => $user->id,

        ]);

        $visitor->categories()->sync(
            $request->get('category_id')
        );


        return redirect()->route('publisher.authors');

    }



    public function authorList(){

        $user= auth()->user();


        $author=Visitor::where('publisher_id',$user->id)->get();


        return view('front-end.publisher.authorlist',compact('author','user'));
    }


    public function myProfile(){

        $myprofile=auth()->user();

        return view('front-end.publisher.profile',compact('myprofile'));

    }


    public function editmyProfile($id){
        $myprofile = Visitor::find($id);

        return view('admin.publisher.edit',compact('myprofile'));
    }


    public function updatemyProfile(Request $request, $id){
        $visitor = Visitor::find($id);

        $visitor->user_name = $request->input('user_name');
        $visitor->phone = $request->input('phone');
        $visitor->address = $request->input('address');


        $visitor->update();
        return redirect()->route('user.profile');
    }



    public function authorEdit(){
        $user= auth()->user();

        $categories = Category::all();

        $authordetail = Visitor::where('publisher_id',$user->id)->first();

        return view('front-end.publisher.authoredit',compact('authordetail','categories'));
    }


    public function updateAuthor(Request $request, $id){
        $visitor = Visitor::find($id);

        $visitor->categories()->sync(
            $request->get('category_id')
        );

        return redirect()->route('publisher.authors');


    }


    public function getSubcat(Request $request)
    {

        $a = Subcategory::where('category_id',$request->input('id'))->get();


        $bb ='<option value="">Choose Sub Category</option>';
        foreach ($a as $f){
            $bb .="<option value='$f->id'> $f->title </option>";
        }
        return $bb;
    }



    public function publisher_edit($id)
    {
        $posts = Post::find($id);
        $category = Category::find($posts->category_id);
        $subcategory = Subcategory::find($posts->subcategory_id);

        return view('front-end.publisher.postedit',compact('posts','category','subcategory'));
    }


    public function publisher_update(Request $request, $id)
    {
        $posts=Post::find($id);

        $posts->title = $request->input('title');
        $posts->status = $request->input('status');
        $posts->description = $request->input('description');
        $posts->slug = $request->input('slug');
        $posts->sponsored = $request->input('sponsored');
        $posts->keywords = $request->input('keywords');
        $posts->excerpt = $request->input('excerpt');

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
        return redirect()->route('publisher.show');
    }





    public function publisher_destroy($id)
    {
        $post =Post::find($id);


        if($post->image){
            //dd('dome');
            unlink(public_path().DIRECTORY_SEPARATOR.'assets\admin\img'.DIRECTORY_SEPARATOR.$post->image);
            $post->delete();
            return redirect()->route('publisher.show');
        }
        else
        {
            $post->delete();
            return redirect()->route('publisher.show');
        }
    }




}
