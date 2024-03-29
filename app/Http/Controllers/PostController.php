<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Cookie;
use Mail;
use App\Mail\DemoEmail;
use Carbon\Carbon;
use App\User;
use App\Blog;
use App\Application;
use App\Library;
use App\Message;
use App\Notification;
use App\Payment;
use App\Company;
use App\Error;
use App\Tools;
use App\Technology;
use App\Post;
use App\CategoryPost;
use App\Notifications\HelloUser;
use App\Notifications\WelcomeUser;
use App\Notifications\Invoice;
use App\Notifications\NewMessageSend;
use App\Notifications\CompleteProfileMessage;
use \Mailjet\Resources;
use Mailjet\LaravelMailjet\Facades\Mailjet;

class PostController extends Controller
{
			public function getMessagesNotificationAuth(){//seteamos en Auth todas las notificaicones y mensajes q tiene el logeado
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
		}

		public function uploadImage(Request $request){
				$image = $request->file('upload');
				// Genera un nombre único para el archivo
				$name = Str::random(32) . '.' . $image->getClientOriginalExtension();
				// Guarda el archivo en la carpeta deseada dentro de public
				$image->move(public_path('images/posts'), $name);
				// Construye la URL del archivo
				$url = asset('images/posts/' . $name);
				return response()->json([
						'uploaded' => true,
						'fileName' => $name,
						'url'      => $url,
				]);
		}
		

    public function show(Request $request, $url, $id){
			$post = Post::find($id);
			$post->views = $post->views + 1;
			$post->save();

      self::getMessagesNotificationAuth();
			$user = Auth::user();
			if($post){
					$now = Carbon::now();
					$created_at = Carbon::parse($post->created_at);
					$diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
          $post->diff = $diff[0].' '.$diff[1];
					$users = User::orderByDesc('id')->where('signature','!=',null)->where('image','!=',null)->where('country','!=','wl')->limit(15)->get();
					return view('post')->with('post',$post)->with('user',$user)->with('users',$users);
			}else{
					return view('404');
			}
	}
}
