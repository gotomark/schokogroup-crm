<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CrmOperator
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
        if (!Auth::guest() && Auth::user()->user_role_id == 2) {
            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}
