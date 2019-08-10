<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_type = Auth::guard('visitor')->user()->user_type;

        //dd($user_type);
        if ($user_type == 'Visitor')
        {
            return $next($request);
            // dd('i m a publisher');
            //return redirect('user/publisher');
        }

return redirect('/');

    }
}
