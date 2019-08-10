<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   //protected $redirectTo = '/user/visitor';

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('guest:visitor')->except('userLogout','logout');
    }


    /*changes are only made here*/
    protected function credentials(Request $request)
    {

        return [ 'email'=>$request->{$this->username()},'password'=>$request->password,'status'=>'1'];
        //return $request->only($this->username(), 'password');
    }
    //

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
        //dd($this->guard()->user()->user_type);
        //for checking role
        $user_type = $this->guard()->user()->user_type;

        if ($user_type == 'Publisher' || $user_type == 'author')
        {
           // dd('i m a publisher');
            //return redirect('user/publisher');
            return redirect('/publisher_dashboard');

        }
        elseif ($user_type=='Visitor')
        {
            //dd('i am a visitor');
            return redirect('/user/visitor');
        }
    }



    public function showLoginForm()
    {
        //dd('show me form');
        return view('userAuth.login');
        //return view('admin.user.login');
    }

    public function userLogout(Request $request)
    {

        Auth::guard('visitor')->logout();
//        return redirect()->guest(route( 'user.login' ));
        return redirect()->route('front.index');
    }




     protected function guard()
    {
        return Auth::guard('visitor');
    }





}
