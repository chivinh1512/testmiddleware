<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAge
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
        $birthday = Auth::user()->birthday;
        $now = getdate();
        $namsinh = explode('-', $birthday);
        $age = $now["year"]-$namsinh[0];
        if ($age <= 16) {
            return redirect('home')->with('faild', 'Bạn không đủ tuổi!');
        }
        return $next($request);
    }
}
