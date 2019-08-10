<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PublisherMiddleware
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

        if ($user_type == 'Publisher' || $user_type == 'author')
        {
            return $next($request);
            // dd('i m a publisher');
            //return redirect('user/publisher');
        }

        return redirect('/');
    }
}
