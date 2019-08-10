<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PublisherController extends Controller
{
    public function index()
    {


        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }
        $user=Visitor::all();

       // dd($user->name );

        return view('admin.publisher.index',compact('user'));
    }

    public function edit($key)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }

        //dd($id);
        //$a = Visitor::find($id);
        $s = Visitor::where('verification_key',$key)->get();
        $a =$s[0];
       $a->status=1;
       $a->publisher_status=1;
        $a->verification_key="";
       $a->update();
        return redirect()->route('admin.publisher.index');
    }


}
