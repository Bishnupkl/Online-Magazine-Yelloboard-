<?php

namespace App\Http\Controllers\Front;

use App\Model\Category;
use App\Model\Comment;
use App\Model\Post;
use App\Model\Reply;
use App\Model\Role;
use App\Model\Subcategory;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visitor;
use Illuminate\Support\Collection;

class FrontUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $category=Category::limit(6)->get();

        //$post =Post::find(4);
        //dd($post->category);

        return view('front-end.home.index',compact('category' ));
    }

//    march

    public function commentReplyStore(Request $request)
    {
        //dd($request);
        $reply = new Reply();

        //dd($post);
        $reply->comment_id= $request->input('comment_id');

        $reply->reply = $request->input('reply');
        $reply->save();


        return redirect()->back();

}

    public function showLoginForm()
    {
        return view('front-end.user.login');
    }
    public function login()
    {
        return view('front-end.home.index');
    }

    public function signup()
    {
        $role = Role::all();
        return view('front-end.user.register',compact('role'));
    }





    public function postdetail($id)
    {
        $category=Category::limit(5)->get();
        $subcategory=Subcategory::all();
        //$comments=Comment::all();
        //dd($comments);
        //dd($subcategory);

        //dd($comment);
        $data = [];

        $post=Post::find($id);


        $view = $post->view_count + 1;


         $post->view_count = $view;
         $post->update();

        $comm = Comment::where('post_id','=',$id)->get();

        $data['category_id'] = $post->category->id;
       //
        $data['posts'] = Post::where('category_id','=',$data['category_id'])->limit(5)->get();

        return view('front-end.post.postdetail',compact('category','subcategory','post','data','comm','view'));
    }




    public function categorydetail($id)
    {
        $category=Category::limit(6)->get();

        $data = [];
        $cat =Category::find($id);
        $mostpopularcategory = Post::where('category_id','=',$id)->orderBy('view_count','desc')->limit(6)->get();

        $data['posts'] = Post::where('category_id','=',$id)->orderBy('created_at','desc')->paginate(4);



        return view('front-end.category.categorypage',compact('category','cat','data','mostpopularcategory'));
    }

  public function store(Request $request ,$id){

        //dd($request->all());

        $comments = new Comment();

        //dd($post);
        $comments->post_id= $id;
        $comments->fullname = $request->input('fullname');
        $comments->email=$request->input('email');
        $comments->comment=$request->input('comment');


        $comments->save();

        return redirect()->back();

//        return view('front-end.post.postdetail',compact('comments','post'));


    }


    function subcategorydetail($id)
    {
        $category=Category::limit(6)->get();

        $data = [];

        $subcat =Subcategory::find($id);

        $mostpopularsubcategory = Post::where('subcategory_id','=',$id)->orderBy('view_count','desc')->limit(6)->get();

        $data['posts'] = Post::where('subcategory_id','=',$id)->get();

        return view('front-end.subcategory.subcategorypage',compact('category','data','subcat','mostpopularsubcategory'));
    }

    function NewsSearch(){

        $posts=Post::where('title','keywords','%'. request('query').'%')
                ->orWhere('description','like','%'. request('query').'%')->get();

        //dd($posts);
        $category=Category::limit(6)->get();
        return view('front-end.search.search',compact('category','posts'));
    }


    function about(){

        $category=Category::limit(6)->get();

        return view('front-end.about.index',compact('category' ));
    }


    function contact(){

        $category=Category::limit(6)->get();

        return view('front-end.contact.index',compact('category' ));
    }



    public function about_uploader($email)
    {

        $user = User::where('email',$email)->first();

        if ( User::where('email',$email)->first() == null)
        {
            $type ='visitor';
            $visitor = Visitor::where('email',$email)->first();
            return view('front-end.home.about_uploader',compact('visitor','type'));
        }
        else
        {
            $admin = $user;
            $type = 'admin';
            return view('front-end.home.about_uploader',compact('admin','type'));
        }


    }

    public function getMe()
    {
     //dd('hello');
        return redirect()->route('front.index')->with('msg','hello');
    }



}
