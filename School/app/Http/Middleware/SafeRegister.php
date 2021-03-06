<?php

namespace App\Http\Middleware;
use App\Models\Code;
use Closure;
use Illuminate\Http\Request;

class SafeRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $existe = false;
        $codes = Code::all();
        foreach($codes as $code){
            if($request('code') == $code->code){
                $existe = true;
                break;
            }
        }
        if($existe){
            return $next($request);
        }
        return redirect(route('register'));
    }
}
