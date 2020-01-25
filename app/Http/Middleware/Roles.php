<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role = array())
    {
		$access_roles_id = explode(';',$role);
		
        if (!Auth::guest() && in_array(Auth::user()->user_role_id,$access_roles_id)) {
            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}
