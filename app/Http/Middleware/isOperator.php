<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isOperator
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
        if(Auth::user()->level == 2)
        {
            return $next($request);
        }
        else
        {
            return redirect()->back()->with('danger', 'Url not exist!');
        }
    }
}
