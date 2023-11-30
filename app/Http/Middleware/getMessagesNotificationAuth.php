<?php

namespace App\Http\Middleware;
use Closure;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Message;
use App\Notification;

class getMessagesNotificationAuth
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
        if(Auth::check()){
            Auth::user()->messages = Message::where('application_user_id',Auth::user()->id)->where('writer_id','!=',Auth::user()->id)->where('read',0)->get();
            foreach (Auth::user()->messages as $key => $message) {
                $diff = explode(' ', $message->created_at->diffForHumans($now));
                Auth::user()->messages[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                Auth::user()->messages[$key]->user = User::find($message->writer_id);
            }
            Auth::user()->notifications = Notification::where('notification_user_id',Auth::user()->id)->orderByDesc("id")->get();
            foreach (Auth::user()->notifications as $key => $notification) {
                $diff = explode(' ', $notification->created_at->diffForHumans($now));
                Auth::user()->notifications[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
            }
        }
        return $next($request);
    }
}
