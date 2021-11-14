<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Closure;
use Exception;
use Illuminate\Http\Request;

class UnderConstruction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role)
    {
        // return 2;
        // return $next($request);
        // return 'middleware requst';

        if($role ==='admin'){
            throw new HttpException('404');
        }
        dd($request);

        if($request->user ==='admin'){
            dd($request->user);
            // dd($next($request));
        }else{

            throw new HttpException('404');
        }
    }
}
