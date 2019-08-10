<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        if (Auth::guard($guard)->check()) {
//           // return redirect('admin/home');
//            return redirect('admin/dashboard');
//        }

        switch ($guard) {
            case 'visitor':
                if (Auth::guard($guard)->check()) {
                    //this redirect to login page after we type to url ....after login is made
                       // dd('i am user ajshdfkjsahk');
                   return redirect('/user/visitor');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    //same case for also this guard
                   // dd('i m admin'); //login page for admin after
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
