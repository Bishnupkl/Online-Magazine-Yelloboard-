<?php

namespace App\Http\Controllers\Admin;


use App\Model\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;



class UserController extends Controller
{

    public function register()
    {
        return view('admin.user.register');
    }


    public function login()
    {
        return view('admin.user.login');
    }


    public function save(Request $request)
    {

        User::create([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);

        return view('admin.user.login');
    }




    public function create(){

        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }

        $roles=Role::all();


        return view('admin.user.create',compact('roles'));
    }


    public function index()
    {

        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }
        $user=User::all();

        return view('admin.user.index',compact('user'));
    }

    public function store(Request $request)
    {
        User::create([
            'user_type'=>$request->input('role_name'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'created_by'=>Auth::user()->id,
            'updated_by'=>Auth::user()->id,
        ]);

    }


    public function edit($id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }

        $role = Role::all();

        $user = User::find($id);

        //dd($category);

        return view('admin.user.edit',compact('role','user'));
    }



    public function update(Request $request, $id)
    {
        if(!Gate::allows('IsAdmin')){
            abort(404,"sorry,you cannot do this action");
        }

        $user=User::find($id);
            $user->user_type=$request->input('role_name');
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            //$user->password=Hash::make($request->input('password'));

        $user->update();

        return redirect()->route('user.index');;

    }



}

