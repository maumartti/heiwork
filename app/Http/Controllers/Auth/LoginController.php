<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Mail;
use App\Notification;
use App\Notifications\HelloUser;
use App\Notifications\WelcomeUser;
use App\Error;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/verifyexplireplan';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {  
        $this->middleware('guest')->except('logout'); 
    }

    /*************** agrega login facebook y google *****************/
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver){
        try {
            $user = Socialite::driver($driver)->stateless()->user();//usuario con datos de red social  
            $registerBy = $driver;
        } catch (InvalidStateException $e) {
            $user = Socialite::driver($driver)->user();//usuario con datos de red social  
            $registerBy = $driver;
        }
        //dd($driver);
        $userExist = User::where('email',$user->email)->first();

        if($userExist){//si ya esta registrado
            auth()->login($userExist);
        }else{//lo registramos
            /*guardamos la imagen que da la red social*/
            $imageName = str_random(16).'.jpg';
            $fileContents = file_get_contents($user->avatar);
            $path = public_path() . '/images/users/'.$imageName;
            file_put_contents($path, $fileContents);
            /**/
            $now = Carbon::now();
            $oneMonth = $now->addMonth();//un mes desde hoy
            $oneMonthFormat =  $oneMonth->format('Y-m-d H:i:s');
            //return $oneMonthFormat;
            /**/
            $code = strtolower(str_random(32));
            /**/
            $newUser = User::create([
                'name' => $user->name,
                'code' => $code,
                'email' => $user->email,
                'image' => $imageName,
                'type' => 'usuario',
                'register_by' => $registerBy,
                'expire_plan' => $oneMonthFormat
            ]);


            //creamos notificacion de bienvenida para el usuario*/
            $data = array(
                'notification_user_id' => $newUser->id,
                'type' => 'welcome2',
                'message' => 'Bienvenido a Heiwork, aquí podrás encontrar empleo como freelance, publicar proyectos y postularte en las ofertas publicadas en nuestra web, comparte con tus colegas esta nueva comunidad. Gracias!',
            );
            Notification::create($data);
            // end notificacion

            //enviar correo de bienvenida
            $user = User::where('email',$newUser->email)->first();//get user registrado recien
            $data = collect();       
            $data->user = $user;
            $user->notify(new WelcomeUser($data));
            
            //si NO existe error al enviar correo de bienvenida con este user se guarda
            $mailError = Error::where('user_email',$newUser->email)->first();
            if(!$mailError){//si no exite error de envio de mail dejamos en 1
                $user->update(['email_welcome_send' => 1]);
            }
            // end correo

            auth()->login($newUser);
        }

        return redirect('/verifyexplireplan');
        // $user->token;
    }
    /*********** end facebook google auth *************/    
}
