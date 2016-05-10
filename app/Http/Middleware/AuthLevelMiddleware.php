<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class AuthLevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {

        if (is_array($levels) || is_object($levels)){
            foreach ($levels as $level) {
                if ($request->user()->auth_level === $level) {
                    return $next($request);
                }    
            }

            return redirect()->action('IndexController@index');
            
        }else{
            if ($request->user()->auth_level === $levels) {
                return $next($request); 
            }

            return redirect()->action('IndexController@index');     
        }
        
    }
}
