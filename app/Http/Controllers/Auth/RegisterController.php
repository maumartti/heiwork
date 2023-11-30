<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\Notifications\WelcomeUser;
use App\Error;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => ['required','captcha'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
        /**/
        $now = Carbon::now();
        $oneMonth = $now->addMonth();//un mes desde hoy
        $oneMonthFormat =  $oneMonth->format('Y-m-d H:i:s');
        /**/
        $code = strtolower(str_random(32));
        /**/
        $user = User::create([
            'name' => $data['name'],
            'code' => $code,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => null,
            'type' => 'usuario',
            'register_by' => 'web',
            'expire_plan' => $oneMonthFormat
        ]);


        //creamos notificacion de bienvenida para el usuario*/
        $data = array(
            'notification_user_id' => $user->id,
            'type' => 'welcome2',
            'message' => 'Bienvenido a Heiwork, aquí podrás encontrar empleo como freelance, publicar proyectos y postularte en las ofertas publicadas en nuestra web, comparte con tus colegas esta nueva comunidad. Gracias!',
        );
        Notification::create($data);
        // end notificacion

        //enviar correo de bienvenida
        $data = collect();       
        $data->user = $user;
        $user->notify(new WelcomeUser($data));

        //si NO existe error al enviar correo de bienvenida con este user se guarda
        $mailError = Error::where('user_email',$user->email)->first();
        if(!$mailError){//si no exite error de envio de mail dejamos en 1 
            $user->update(['email_welcome_send' => 1]);
        }
        // end correo

        return $user;
    }
}
