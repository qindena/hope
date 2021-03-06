<?php

namespace App\Http\Middleware;

use Closure;

class HomeLoginMiddleware
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
        //request变量 记录所有的请求参数
        if($request->session()->has('uid')){
            return $next($request);
        } else {
            return redirect('/home/login');
        }
    }
}
