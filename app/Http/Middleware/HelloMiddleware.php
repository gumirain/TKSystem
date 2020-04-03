<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data2 = [
        ['name'=>'山田たろう','mail'=>'taro@yamada','age'=>23],
        ['name'=>'田中はなこ','mail'=>'hanako@tanaka','age'=>24],
        ['name'=>'鈴木さちこ','mail'=>'satiko@suzuki','age'=>25],
       ];
       $request->merge(['data2'=>$data2]);
       
       return $next($request);
    }
}
