<?php

namespace App\Http\Controllers\UserAuth;

use App\Mail\registrationConfirmation;
use App\Mail\verifyEmail;
use App\Visitor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:visitor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator

     */
    public function showRegistrationForm()
    {
       // dd('i m sign up');
        return view('userAuth.register');
    }

    public function showRegistrationFormPublisher()
    {
        // dd('i m sign up');
        return view('userAuth.publisher_register');
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:visitors',
            'password' => 'required|string|min:6|confirmed',
            //'name' =>'required|unique:visitors,user_name,',
            'companyname'=>'required|string',
            'phone'=>'required|max:10|min:10',
            'address'=>'required',
        ]);
    }




    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        //dd($data);
       Session::flash('status','Registered! Go to email to verify your email to activate your account.');
       Session::flash('msg','Registered! but verify your email to activate your account.');
        $visitor= Visitor::create([
          //  return Visitor::create([
            'name' => $data['companyname'], //company name in
            'user_name'=>$data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'term' =>$data['term'],
            'verification_key'=>Str::random(40), //for token generate---this is inside dbtoken repository
            'user_type'=>$data['user_type'],
        ]);


        $thisUser =Visitor::findOrFail($visitor->id);
//      dd($thisUser->user_type);
        $this->sendEmail($thisUser);
        return $visitor;

//        if ($thisUser->user_type=='Visitor' or $thisUser->user_type=='Publisher' )
//        {
//            //dd('heloo');
//            return redirect()->route('front.index')->with('msg','hello');
//        }

//        if ($thisUser->user_type=='Visitor')
//        {
//            $this->sendEmail($thisUser);
//        }
//        else
//        {
//            dd('asdf');
//            Session::flash('status','You are signed in as publisher, so wait until you are verified by admin!');
//            return redirect(route('user.login'));
//        }
    }

    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
      //  dd('hello sus');
        //here verifyEmail is a mailable that is created inside mail folder
    }

    public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    public function sendEmailDone($email, $verification_key)
    {
          //  return $email.'='.$verification_key;
        $user = Visitor::where(['email'=>$email,'verification_key'=>$verification_key])->first();
        if ($user)
        {
             Visitor::where(['email'=>$email,'verification_key'=>$verification_key])->update(['status'=>'1','verification_key'=>'null']);

//             newww
            Mail::to($user['email'])->send(new registrationConfirmation($user));

             return redirect(route('front.index'));
        }
        else{
            return 'User is not found';
        }
    }

}
