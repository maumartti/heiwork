<?php

namespace App\Http\Middleware;
use Closure;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Message;
use App\Notification;

class VerifyExplirePlan
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
        $now = Carbon::now();
        /*if(Auth::check()){
            dd('ddd');
        }*/
        return $next($request);
    }
}
