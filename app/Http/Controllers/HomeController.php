<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('verified');
        //$h = new HomeController;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){ 
        //enviar correo de al uaurio receptor 
        /*$user = User::find(544);
        $data = collect();  
        $data->title = 'hola heiwork';
        $data->message = 'ffffdfdfdfdfdfdf';
        $data->userSend = User::find(544);
        $data->user = $user;
        // dd($data);
        $user->notify(new WelcomeUser($data));*/
        //return $user->email;

        //reenvio a confirmar cuenta
    /*
        $users = User::where('email_welcome_send',0)->latest()->take(100);
        foreach($users as $key => $user){
            $data = collect();       
            $data->user = $user;
            $user->notify(new WelcomeUser($data));
        }*/
        // endcorreo

        $now = Carbon::now();
        $posts = Post::all()->sortByDesc("id");
        $applications = Application::all()->sortByDesc("id");
        $libraries = Library::all()->sortByDesc("id");

        foreach ($libraries as $key => $value) {
            $libraries[$key]->user = User::find($value->user_id);
            //$libraries[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');
            
            $created_at = Carbon::parse($value['created_at']);

            // $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            // $libraries[$key]->diff = $diff[0].' '.$diff[1];

            // if($value->expire_at < $now && $value->active == 1){//si expiro ponemos active = 0
            //     Library::find($value->id)->update(['active' => 0]);
            // }
        }
        foreach ($posts as $key => $value) {
            $posts[$key]->user = User::find($value->user_id);
            $posts[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');
            
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $posts[$key]->diff = $diff[0].' '.$diff[1];

            if($value->expire_at < $now && $value->active == 1){//si expiro ponemos active = 0
                Application::find($value->id)->update(['active' => 0]);
            }
        }
        foreach ($applications as $key => $value) {
            $applications[$key]->user = User::find($value->user_id);
            $applications[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');
            
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $applications[$key]->diff = $diff[0].' '.$diff[1];

            if($value->expire_at < $now && $value->active == 1){//si expiro ponemos active = 0
                Application::find($value->id)->update(['active' => 0]);
            }
        }
        if(Auth::check()){
            self::getMessagesNotificationAuth();
        }
        //dd($applications);
        $users = User::orderByDesc('id')->limit(11)->get();
        return view('home')->with('posts',$posts)->with('applications',$applications)->with('libraries',$libraries)->with('users',$users);
    }

    public function oferta(Request $request){
        self::getMessagesNotificationAuth();
        $application = Application::find($request->route('id'));
        $application->messages = Message::where('messages.application_id',$request->route('id'))->where('users.id','!=',$application->user_id)->join('users','users.id','=','messages.writer_id')->select('messages.code','users.*')->get()->unique('id');
        Application::where('id',$request->route('id'))->Increment('views');//views +1
        /**/
        $now = Carbon::now();
        $created_at = Carbon::parse($application->created_at);
        $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
        $application->diff = $diff[0].' '.$diff[1];
        /**/
        //expira el proyecto en (time)
        $applicationExpire = $application->expire_at;
        $applicationExpire = Carbon::parse($applicationExpire);
        $Expirediff = explode(' ',$applicationExpire->diffForHumans($now));// 3 Months ago
        $application->expire = $Expirediff[0].' '.$Expirediff[1];
        /**/
        $latest = Application::where('applications.id','!=',$application->id)->where('applications.type','Ofrezco')->join('users','users.id','=','applications.user_id')->select('users.name','users.code','users.image','users.country','applications.id','applications.title')->latest('applications.created_at')->take(10)->get();                
        $user = User::find($application->user_id);
        return view('job')->with('application',$application)->with('user',$user)->with('latest',$latest);
    }
    public function freelancers(Request $request){        
        $allCountries = array(
            'ar' => 'Argentina',
            'de' => 'Alemania',
            'bo' => 'Bolivia',
            'br' => 'Brasil',
            'ca' => 'Canada',
            'cl' => 'Chile',
            'cn' => 'China',
            'co' => 'Colombia',
            'cr' => 'Costa rica',
            'cu' => 'Cuba',
            'ec' => 'Ecuador',
            'us' => 'Eeuu',
            'es' => 'España',
            'gt' => 'El salvador',
            'fr' => 'Francia',
            'gd' => 'Granada',
            'gt' => 'Guatemala',
            'hn' => 'Honduras',
            'ie' => 'Irlanda',
            'in' => 'India',
            'it' => 'Italia',
            'il' => 'Israel',
            'mx' => 'México',
            'ni' => 'Nicaragua',
            'py' => 'Paraguay',
            'pa' => 'Panamá',
            'pe' => 'Perú',
            'pr' => 'Puerto rico',
            'pt' => 'Portugal',
            'do' => 'República dominicana',
            'gb' => 'Gran bretaña',
            'uy' => 'Uruguay',
            've' => 'Venezuela'
        );
        self::getMessagesNotificationAuth();
        if($request->route('country')){//si es url de un pais
            $country = $request->route('country');
            $country = str_replace('-', ' ', $country);
            $country = ucfirst($country);
            //dd($country);
            $co = null;
            foreach ($allCountries as $key2 => $value2) {
                if($value2 == $country){
                    $co = $key2;
                }
            }
            //dd($co);
            $users = User::where('rubro','!=',null)->where('country','!=','wl')->where('country',$co)->where('active',1)->orderBy('id','DESC')->get();
        }else{//todos los freelancers
            $users = User::where('rubro','!=',null)->where('country','!=','wl')->where('active',1)->orderBy('id','DESC')->get();
        }

        $allUsersFlags = User::where('rubro','!=',null)->where('country','!=','wl')->where('active',1)->orderBy('id','DESC')->get();
        $countries = array();
        foreach ($users as $key => $user) {
            if($user->signature != null){
                $users[$key]->signatureSm = substr($user->signature,0,50);
                //$user->signatureSm = substr($user->signature, 0,30);
                //calculamos porcentaje de los perfiles para ordenar luego
                $users[$key]->profilePorcent = 0;
                if($user->image != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->signature != null){
                    $users[$key]->profilePorcent+=20;
                }
                if($user->link != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->about != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->rubro != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->history != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->language1 != null){
                    $users[$key]->profilePorcent+=10;
                }
                if($user->image_work1 != null){
                    $users[$key]->profilePorcent+=20;
                }
                /**/
            }
        }
        foreach ($allUsersFlags as $key => $user) {
            if(!in_array($user->country,$allCountries)){
                foreach ($allCountries as $key2 => $value2) {
                    if($user->country == $key2){
                        $countries[$user->country] = $value2;
                    }
                }
            }
        }    
        //return dd($countries);
        return view('freelancers')->with('users',$users)->with('countries',$countries); 
    }

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

    public function blogs(){
        return view('blogs');
    }
    public function plans(){

        //reenvio a confirmar cuenta
        /*
        $users = User::where('email_verified_at',null)->latest()->take(50)->get();
        //dd($users);
         
        foreach($users as $key => $user){
            $data = collect();       
            $data->user = $user;
            $user->notify(new WelcomeUser($data));
        }*/
        // endcorreo

        //prueba envio a maumartti
        /*$user = User::where('email','maumartti@gmail.com')->first();
        $data = collect();       
        $data->user = $user;
        $user->notify(new WelcomeUser($data));*/


        self::getMessagesNotificationAuth();
        //$data = User::find(Auth::user()->id);
        //return view('invoice')->with('data',$data);
        return view('plans');
    }

    /************ PARTE PAGOS ***************/
    public function pay(Request $request){

        if(!Auth::check()){
            return redirect('/login');
        }
        self::getMessagesNotificationAuth();
        $type = $request->route('type');
        if($type == 'professional' || $type == 'premium'){
            $session = substr(md5(uniqid(mt_rand(), true)) , 0, 36);//codigo alfanumerico 36
            session(['datetimepay' => $session]);//crea sesion de tiempo unica
            return view('pay')->with('type',$type)->with('session',$session);            
        }else{
            return redirect('/planes');
        }
    }
    public function confirmedPay(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $code = $request->route('code');
        $code = explode('-', $code);

        if($code[0] == 1 || $code[0] == '1'){
            $type = 'professional';
        }else if($code[0] == 2 || $code[0] == '2'){
            $type = 'premium';
        }

        $session = $request->session()->get('datetimepay');
        //return $session.' '.$code[2];
        if($session == $code[2]){//SI COINCIDE SESSION CON CODE CRIPT DE MISMA SESSION ENVIADA ANTES A PAGINA PAGO
            $data = array('code_init' => $code[1], 'user_id' => Auth::user()->id, 'plan' => $type);
            $payment = Payment::create($data);
            return redirect('/invoicePay/'.$code[1]);
        }else{
            return redirect('/planes');
        }
    }
    public function invoicePay(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $code = $request->route('code');
        $payment = Payment::where('code_init',$code)->where('code_end',null)->first();
        if($payment){//confirma q es pago ya fue iniciado en el paso anterior
            Payment::where('code_init',$code)->update(['code_end' => $code]);
            /**/
            $expire_plan = Carbon::parse(Auth::user()->expire_plan);//fecha q expira el plan hasta el momento
            $oneMonth = $expire_plan->addMonth();//un mes desde la fecha q expira
            $oneMonthFormat =  $oneMonth->format('Y-m-d H:i:s');
            /**/
            //sumamos propuestas y publicaciones segun el plan seleccionado
            $publications = Auth::user()->publications;
            $proposals = Auth::user()->proposals;
            if($payment->plan == 'professional'){
                $publications = Auth::user()->publications + 20;
                $proposals = Auth::user()->proposals + 35;
                $valor = '7,90';
            }else if($payment->plan == 'premium'){
                $publications = Auth::user()->publications + 45;
                $proposals = Auth::user()->proposals + 80;
                $valor = '10,90';
            }
            /**/
            $data = array('plan' => $payment->plan, 'expire_plan' => $oneMonthFormat, 'publications' => $publications, 'proposals' => $proposals);
            User::where('id',Auth::user()->id)->update($data);
            self::getMessagesNotificationAuth();
            $new_expire_plan = Carbon::parse($oneMonthFormat);
            $new_expire_plan = $new_expire_plan->format('d-m-Y');
            /**/
            //enviar correo de pago
            $user = Auth::user();
            $data = collect();       
            $data->user = Auth::user();
            $data->code = $code;
            $data->plan = $payment->plan;
            $data->valor = $valor;
            $data->expire = $new_expire_plan;
            $user->notify(new Invoice($data));
            /**/
            return view('invoice')->with('data',$data)->with('code',$code)->with('valor',$valor)->with('new_expire_plan',$new_expire_plan)->with('plan',$payment->plan);
        }else{
            return redirect('/planes');
        }
    }
    /************ END PAGOS ******************/

    public function messages(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        if($request->route('id')){//mensaje especifico
            $message = Message::find($request->route('id'));
            Message::where('code',$message->code)->where('application_user_id',Auth::user()->id)->update(['read' => 1]);//marca como leido
            $application = Application::find($message->application_id);
            //return $application;
            if($message->writer_id != Auth::user()->id){
                $partnerId = $message->writer_id;
            }else{
                $partnerId = $message->application_user_id;
            }
            $partner = User::find($partnerId);
            $messages = Message::where('code',$message->code)->get();
            foreach ($messages as $key => $message) {
                $messages[$key]->user = User::find($message->writer_id);
            }
            //return $message;
            self::getMessagesNotificationAuth();
            return view('messages')->with('partner',$partner)->with('application',$application)->with('messagesList',$messages);
        }else{//todos los mensajes
            $now = Carbon::now();
            if(Auth::check()){
                Auth::user()->messagesBox = Message::where('application_user_id',Auth::user()->id)->orderByDesc("id")->get()->unique('code');
                Auth::user()->messagesUnreadCount = Message::where('application_user_id',Auth::user()->id)->where('writer_id','!=',Auth::user()->id)->where('read',0)->count();
                Auth::user()->newMessagesSendMe = Message::where('writer_id',Auth::user()->id)->where('start',1)->orderByDesc("id")->get()->unique('code');
                Auth::user()->notifications = Notification::where('notification_user_id',Auth::user()->id)->orderByDesc("id")->get();
                foreach (Auth::user()->messagesBox as $key => $message) {
                    $diff = explode(' ', $message->created_at->diffForHumans($now));
                    Auth::user()->messagesBox[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                    Auth::user()->messagesBox[$key]->user = User::find($message->writer_id);
                }
                foreach (Auth::user()->newMessagesSendMe as $key => $message) {
                    $diff = explode(' ', $message->created_at->diffForHumans($now));
                    Auth::user()->newMessagesSendMe[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                    Auth::user()->newMessagesSendMe[$key]->user = User::find($message->application_user_id);
                }
                foreach (Auth::user()->notifications as $key => $notification) {
                    $diff = explode(' ', $notification->created_at->diffForHumans($now));
                    Auth::user()->notifications[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                }
            }
            self::getMessagesNotificationAuth();
            return view('messages');
        }
    }

    public function sitemap(){
        $blogs = Blog::all();
        $categories = array();
        $tags = array();
        $tagsDates = array();
        foreach ($blogs as $key => $value) {
            if(!in_array($value,$categories)){
                array_push($categories, $value->category.'|'.$value->created_at->format('Y-m-d').'T'.$value->created_at->format('h:i:s'));
            }
            $tagsBlog = explode(',', $value->tags);
            foreach ($tagsBlog as $key2 => $tag) {
                if(!in_array($tag,$tags)){
                    array_push($tags, $tag);
                    array_push($tagsDates, $value->created_at->format('Y-m-d').'T'.$value->created_at->format('h:i:s'));
                }
            }
        }
        //dd($tags);
        $users = User::all();
        return view('sitemap')->with('blogs',$blogs)->with('categories',$categories)->with('tags',$tags)->with('tagsDates',$tagsDates)->with('users',$users);
    }

    public function setCountryUser(Request $request){
        $code = $request->route('country_code');
        User::find(Auth::user()->id)->update(['country' => $code]);
        return 'success';
    }

    public function setRubroUser(Request $request){
        $code = $request->route('rubro_code');
        User::find(Auth::user()->id)->update(['rubro' => $code]);
        return 'success';
    }

    public function setApplication(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }    

        $validated = $request->validate([
            'title' => 'required|max:122',
            'category' => 'required|max:60',
            'type' => 'required|max:60',
            'text' => 'required'
        ]);

        if(Auth::user()->publications > 0){//si tiene publicaciones
            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            if(isset($data['money'])){
                unset($data['money2']);
            }else if(isset($data['money2'])){
                $data['money'] = $data['money2'];
                unset($data['money2']);
            }

            if($data['type'] == 'Ofrezco'){
                $now = date("Y-m-d H:i:s");
                $nowSum = date("Y-m-d H:i:s",strtotime($now."+ 29 days"));//sumo 29 día
                $data['expire_at'] = $nowSum;
            }

            $application = Application::create($data);
            $application->save();
            $userAuth = User::find(Auth::user()->id)->decrement('publications',1);//restamos uno
        }    
        return redirect('/');
    }

    public function setPost(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }    

        // $validated = $request->validate([
        //     'title' => 'required|max:122',
        //     'country' => 'required|max:2',
        //     'cita' => 'required|max:250',
        //     'text' => 'required|max:5000',
        //     'category' => 'required',
        //     'technology' => 'required'
        // ]);

        if(Auth::user()->publications > 0){//si tiene publicaciones
            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['code'] = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            //dd($data);
            
            //procesamos los checkbox technology
            $techFields = [];
            foreach ($data as $key => $value) {
                if (strpos($key, 'tech-') === 0) {
                    $techFields[] = $value;
                    unset($data[$key]);//borramos los originales
                }
            }
            //asignamos 
            $data['tec1'] = isset($techFields[0]) ? $techFields[0] : null;
            $data['tec2'] = isset($techFields[1]) ? $techFields[1] : null;
            $data['tec3'] = isset($techFields[2]) ? $techFields[2] : null;
            $data['tec4'] = isset($techFields[3]) ? $techFields[3] : null;

            //dd($data);
            $tools = New Tools;
            $data['url'] = $tools->crearUrlTitle($data['title']);
            $postUniqueUrl = Post::where('url',$data['url'])->first();
            if($postUniqueUrl){//si existe esta url entonces le agregamos code al final
                $data['url'] = $data['url'].'-'.$data['code'];
            }

            $arrIconCountries = [
                'ar' => '🇦🇷 AR |',
                'au' => '🇦🇺 AU |', // Australia
                'de' => '🇩🇪 DE |',
                'bo' => '🇧🇴 BO |',
                'br' => '🇧🇷 BR |',
                'ca' => '🇨🇦 CA |',
                'cl' => '🇨🇱 CL |',
                'cn' => '🇨🇳 CN |',
                'co' => '🇨🇴 CO |',
                'cr' => '🇨🇷 CR |',
                'cu' => '🇨🇺 CU |',
                'dk' => '🇩🇰 DK |', // Dinamarca
                'ec' => '🇪🇨 EC |',
                'us' => '🇺🇸 US |',
                'es' => '🇪🇸 ES |',
                'fi' => '🇫🇮 FI |', // Finlandia
                'sv' => '🇸🇻 SV |',
                'fr' => '🇫🇷 FR |',
                'gd' => '🇬🇩 GD |',
                'gt' => '🇬🇹 GT |',
                'hn' => '🇭🇳 HN |',
                'ie' => '🇮🇪 IE |',
                'in' => '🇮🇳 IN |',
                'it' => '🇮🇹 IT |',
                'il' => '🇮🇱 IL |',
                'mx' => '🇲🇽 MX |',
                'ni' => '🇳🇮 NI |',
                'nz' => '🇳🇿 NZ |',
                'no' => '🇳🇴 NO |', // Noruega
                'py' => '🇵🇾 PY |',
                'pa' => '🇵🇦 PA |',
                'pe' => '🇵🇪 PE |',
                'pr' => '🇵🇷 PR |',
                'pt' => '🇵🇹 PT |',
                'do' => '🇩🇴 DO |',
                'gb' => '🇬🇧 GB |',
                'uy' => '🇺🇾 UY |',
                'se' => '🇸🇪 SE |', // Suecia
                've' => '🇻🇪 VE |'
            ];
            if($data['country'] && $data['country'] != 'gg'){
                $data['country_icon'] = $arrIconCountries[$data['country']];
            }

            $post = Post::create($data);
            $post->save();
            //$userAuth = User::find(Auth::user()->id)->decrement('publications',1);//restamos uno
        }    
        return redirect('/');
    }

    public function closeProyect(Request $request){
        $id = $request->route('id');
        Application::where('id',$id)->update(['active' => 0]);
        return 'ok';
    }

    public function setMessage(Request $request){
        if(Auth::user()->proposals > 0){//si tiene propuestas
            $data = $request->all();
            $data['writer_id'] = Auth::user()->id;
            $applicationDB = Application::find($data['application_id']);
            $data['application_user_id'] = $applicationDB->user_id;
            $data['start'] = 1;
            $data['code'] = md5(time() . rand());//codigo alfanumerico 32 caract
            $message = Message::create($data);
            $message->save();
            $userAuth = User::find(Auth::user()->id)->decrement('proposals',1);//restamos uno

            //enviar correo de al uaurio receptor 
            $user = User::find($data['application_user_id']);
            $data = collect();  
            $data->title = $applicationDB->title;
            $data->message = $request->message;
            $data->userSend = User::find(Auth::user()->id);
            $data->user = $user;
            $user->notify(new NewMessageSend($data));
            // end correo
        }
        return redirect()->back();
    }    
    public function responseMessage(Request $request){
        $idAuth = Auth::user()->id;
        $data = $request->all();
        $messageBase = Message::where('code',$data['code'])->where('writer_id',$idAuth)->where('start',1)->first();
        //return $data;
        if(!$messageBase){
            $messageBase = Message::where('code',$data['code'])->where('application_user_id',$idAuth)->where('start',1)->first();
        }
        if(!$messageBase){//mensaje posible cambio de datos , no pasa seguridad - no encuentra mensaje base
            return redirect()->back();
        }

        if($messageBase->writer_id != $idAuth){
            $data['application_user_id'] = $messageBase->writer_id;
        }else{
            $data['application_user_id'] = $messageBase->application_user_id;
        }
        $data['writer_id'] = $idAuth;

        //return $data;
        //return $messageBase;
        unset($data['id']);
        $data['code'] = $messageBase->code;//codigo alfanumerico 32 caract
        $data['application_id'] = $messageBase->application_id;
        $message = Message::create($data);
        $message->save();

        //enviar correo de al uaurio receptor 
        $applicationDB = Application::find($data['application_id']);
        $user = User::find($data['application_user_id']);
        $data = collect();  
        $data->title = $applicationDB->title;
        $data->message = $request->message;
        $data->userSend = User::find(Auth::user()->id);
        $data->user = $user;
        $user->notify(new NewMessageSend($data));
        // end correo

        return redirect()->back();
    }   


    public function myProjects(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $applications = Application::all()->where('user_id',Auth::user()->id)->sortByDesc("id"); 
        foreach ($applications as $key => $value) {
            $applications[$key]->user = User::find($value->user_id);
            $applications[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');

            $now = Carbon::now();
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $applications[$key]->diff = $diff[0].' '.$diff[1];
        }
        self::getMessagesNotificationAuth();
        //return $applications;
        return view('projects')->with('applications',$applications);        
    }

    public function myProjectsFreelance(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $applications = Application::all()->where('user_id',Auth::user()->id)->sortByDesc("id"); 
        foreach ($applications as $key => $value) {
            $applications[$key]->user = User::find($value->user_id);
            $applications[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');

            $now = Carbon::now();
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $applications[$key]->diff = $diff[0].' '.$diff[1];
        }
        self::getMessagesNotificationAuth();
        //return $applications;
        return view('projects')->with('applications',$applications);        
    }    

    public function myProjectsClient(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        $applications = Application::all()->where('user_id',Auth::user()->id)->sortByDesc("id"); 
        foreach ($applications as $key => $value) {
            $applications[$key]->user = User::find($value->user_id);
            $applications[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');

            $now = Carbon::now();
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $applications[$key]->diff = $diff[0].' '.$diff[1];
        }
        self::getMessagesNotificationAuth();
        //return $applications;
        return view('projects')->with('applications',$applications);        
    }    

    public function deleteApplication(Request $request){
        $application = Application::find($request->route('id'));
        $messagesApp = Message::where('application_id',$request->route('id'))->get();
        foreach ($messagesApp as $key => $message) {
            $message->delete();
        }
        $application->delete();
    }  

    public function account(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }
        self::getMessagesNotificationAuth();
        return view('account');
    }

    public function editUser(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required'],
            //'signature' => ['required', 'min:50', 'max:200']
        ]);
        $tools = New Tools;
        $data = $request->all();
        //return $data;

        $data['image'] = Auth::user()->image;
        $data['email'] = Auth::user()->email;//mantiene el mismo por si acaso algun vivo
        $data['password'] = Hash::make($data['password']);

        $imageJson = json_decode($request->image,true);
        $imageCode = $imageJson['output']['image'];//codigo64 imagen
        if($imageCode){
            if($imageCode != null && $imageCode != 'null'){
                //guardamos imagen      
                $tools->deleteImage('/images/users/', Auth::user()->image);
                $data['image'] = $tools->saveImage64('/images/users/', $imageCode);   
            }
        }
        //return $data;
        
        if(isset($data['news'])){
            $data['news'] = (int)$data['news'];
        }else{
            $data['news'] = 0;
        }

        //return $data;
        $userBD = User::find(Auth::user()->id);
        $userBD->update($data);
        //return User::find(Auth::user()->id);
        return redirect()->back();
    }

    public function editUserNews(Request $request){//acepta recibir emails news
        $data = $request->all();
        //return $data;
        if(isset($data['news'])){
            $data['news'] = (int)$data['news'];
        }else{
            $data['news'] = 0;
        }
        $userBD = User::find(Auth::user()->id);
        $userBD->update(['news' => $data['news']]);
        return redirect()->back();
    }
    public function editProfile(Request $request){
        $tools = New Tools;
        $data = $request->all();

        if(isset($data['image_work1']) || isset($data['image_work2']) || isset($data['image_work3']) || isset($data['image_work4']) || isset($data['image_work5']) || isset($data['image_work6']) || isset($data['image_work7']) || isset($data['image_work8']) || isset($data['image_work9']) || isset($data['image_work10']) || isset($data['image_work11']) || isset($data['image_work12'])){//si se guarda otra info que no entre aqui
            if($data['image_work1'] != ""){
                $imageJson = json_decode($request->image_work1,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work1);
                        $data['image_work1'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work1'] == "" && Auth::user()->image_work1 != null){
                $data['image_work1'] = Auth::user()->image_work1;
            }
            if($data['image_work2'] != ""){
                $imageJson = json_decode($request->image_work2,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work2);
                        $data['image_work2'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work2'] == "" && Auth::user()->image_work2 != null){
                $data['image_work2'] = Auth::user()->image_work2;
            }
            if($data['image_work3'] != ""){
                $imageJson = json_decode($request->image_work3,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work3);
                        $data['image_work3'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work3'] == "" && Auth::user()->image_work3 != null){
                $data['image_work3'] = Auth::user()->image_work3;
            }   
            if($data['image_work4'] != ""){
                $imageJson = json_decode($request->image_work4,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work4);
                        $data['image_work4'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work4'] == "" && Auth::user()->image_work4 != null){
                $data['image_work4'] = Auth::user()->image_work4;
            }    
            if($data['image_work5'] != ""){
                $imageJson = json_decode($request->image_work5,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work5);
                        $data['image_work5'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work5'] == "" && Auth::user()->image_work5 != null){
                $data['image_work5'] = Auth::user()->image_work5;
            }        
            if($data['image_work6'] != ""){
                $imageJson = json_decode($request->image_work6,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work6);
                        $data['image_work6'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work6'] == "" && Auth::user()->image_work6 != null){
                $data['image_work6'] = Auth::user()->image_work6;
            }       
            if($data['image_work7'] != ""){
                $imageJson = json_decode($request->image_work7,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work7);
                        $data['image_work7'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work7'] == "" && Auth::user()->image_work7 != null){
                $data['image_work7'] = Auth::user()->image_work7;
            }         
            if($data['image_work8'] != ""){
                $imageJson = json_decode($request->image_work8,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work8);
                        $data['image_work8'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work8'] == "" && Auth::user()->image_work8 != null){
                $data['image_work8'] = Auth::user()->image_work8;
            }   
            if($data['image_work9'] != ""){
                $imageJson = json_decode($request->image_work9,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work9);
                        $data['image_work9'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work9'] == "" && Auth::user()->image_work9 != null){
                $data['image_work9'] = Auth::user()->image_work9;
            } 
            if($data['image_work10'] != ""){
                $imageJson = json_decode($request->image_work10,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work10);
                        $data['image_work10'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work10'] == "" && Auth::user()->image_work10 != null){
                $data['image_work10'] = Auth::user()->image_work10;
            } 
            if($data['image_work11'] != ""){
                $imageJson = json_decode($request->image_work11,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work11);
                        $data['image_work11'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work11'] == "" && Auth::user()->image_work11 != null){
                $data['image_work11'] = Auth::user()->image_work11;
            } 
            if($data['image_work12'] != ""){
                $imageJson = json_decode($request->image_work12,true);
                $imageCode = $imageJson['output']['image'];//codigo64 imagen
                if($imageCode){
                    if($imageCode != null && $imageCode != 'null'){
                        //guardamos imagen      
                        $tools->deleteImage('/images/images_works/', Auth::user()->image_work12);
                        $data['image_work12'] = $tools->saveImage64('/images/images_works/', $imageCode);
                    }
                }
            }if($data['image_work12'] == "" && Auth::user()->image_work12 != null){
                $data['image_work12'] = Auth::user()->image_work12;
            } 
        }     
        //return $data;

        if(isset($data['link'])){
            $data['link'] = strip_tags($data['link']);//qitamos todo HTML que tenga el link
            /*if (strpos($data['link'] , 'http://') == false && strpos($data['link'] , 'https://') == false){
                $data['link'] = 'http://'.$data['link'];
            }else{*/
                $data['link'] = $data['link'];
            /*}*/
        }

        $userBD = User::find(Auth::user()->id);
        $userBD->update($data);
        //return $data;
        return redirect()->back();
    }


    public function profile(Request $request){
        //enviar correo de bienvenida
        /*
        if(Auth::check()){
        if(Auth::user()->id == 400){
            $ids = array();
            $users = User::all();
            foreach ($users as $key => $user) {
                //calculamos porcentaje de perfil completo
                if($user->id > 430 && $user->id < 442){
                    $profilePorcent = 0;
                    if($user->image != null){
                        $profilePorcent+=10;
                    }
                    if($user->signature != null){
                        $profilePorcent+=20;
                    }
                    if($user->link != null){
                        $profilePorcent+=10;
                    }
                    if($user->about != null){
                        $profilePorcent+=10;
                    }
                    if($user->rubro != null){
                        $profilePorcent+=10;
                    }
                    if($user->history != null){
                        $profilePorcent+=10;
                    }
                    if($user->language1 != null){
                        $profilePorcent+=10;
                    }
                    if($user->image_work1 != null){
                        $profilePorcent+=20;
                    }
                    
                    if($profilePorcent < 70){
                        array_push($ids, $user->id);
                        
                        sleep(5);
                        $data = collect();       
                        $data->user = $user;
                        $user->notify(new CompleteProfileMessage($data));
                        
                    }
                }    
            }dd($ids);
        }}*/
        /*
        if(Auth::check()){
            if(Auth::user()->id == 400){
            $data = collect();       
            $data->user = User::find(434);
            $user = User::find(434);
            $user->notify(new CompleteProfileMessage($data)); //WelcomeUser
            }
        }*/
        /*
        $users = User::all();
        foreach ($users as $key => $value) {
            $code = strtolower(str_random(32));
            User::where('id',$value->id)->update(['code' => $code]);
        }*/
        self::getMessagesNotificationAuth();
        $user = User::where('code',$request->route('code'))->first();
        if ($user) {
            
            //creamos fecha en español para mostrar
            $months = array(
              'January' => 'Enero',
              'February' => 'Febrero',
              'March' => 'Marzo',
              'April' => 'Abril',
              'May' => 'Mayo',
              'June' => 'Junio',
              'July' => 'Julio',
              'August' => 'Agosto',
              'September' => 'Septiembre',
              'October' => 'Octubre',
              'November' => 'Noviembre',
              'December' => 'Diciembre'
            );
            $mes =  $months[date('F', strtotime($user->created_at))];
            $dia = $user->created_at->format('d');
            $ano = $user->created_at->format('Y');
            $user->created = $mes.' '.$dia.', '.$ano;
            //end fecha
            

            //calculamos porcentaje de perfil completo
            $user->profilePorcent = 0;
            if($user->image != null){
                $user->profilePorcent+=10;
            }
            if($user->signature != null){
                $user->profilePorcent+=20;
            }
            if($user->link != null){
                $user->profilePorcent+=10;
            }
            if($user->about != null){
                $user->profilePorcent+=10;
            }
            if($user->rubro != null){
                $user->profilePorcent+=10;
            }
            if($user->history != null){
                $user->profilePorcent+=10;
            }
            if($user->language1 != null){
                $user->profilePorcent+=10;
            }
            if($user->image_work1 != null){
                $user->profilePorcent+=20;
            }
            /**/

            //mayor a 70% se da como completo
            if($user->profilePorcent >= 70){
                $user->completeProfile = true;
            }else{
                $user->completeProfile = false;
            }

            $user->countApp = Application::where('user_id',$user->id)->count();

            $code = $request->route('code');

            $user->about =preg_replace('#<a.*?>(.*?)</a>#i', '\1', $user->about);//quita enlaces
            $user->about = nl2br($user->about);//respeta saltos de linea en texto
            $user->history =preg_replace('#<a.*?>(.*?)</a>#i', '\1', $user->history);//quita enlaces
            $user->history = nl2br($user->history);//respeta saltos de linea en texto

            //si no es enlace con http o https, agregamos http
            if($user->link != null){
                if(!preg_match("@^http://@i",$user->link) && !preg_match("@^https://@i",$user->link)){
                    $user->link = 'http://'.$user->link;
                }
            }

            $users = User::orderByDesc('id')->where('signature','!=',null)->where('image','!=',null)->where('country','!=','wl')->limit(15)->get();
            return view('profile')->with('user',$user)->with('users',$users);
        }else{
            return view('404');
        }
    }

    public function example(Request $request){
        self::getMessagesNotificationAuth();
        $example = Library::where('url',$request->route('url'))->first();
        if ($example) {
            $users = User::orderByDesc('id')->where('signature','!=',null)->where('image','!=',null)->where('country','!=','wl')->limit(15)->get();
            return view('library')->with('example',$example)->with('users',$users);
        }else{
            return view('404');
        }
    }

    public function ocultBoxHome(Request $request){
        Cookie::queue(Cookie::make('ocultBoxHome', 1, 21600));//12600 minuto = 15 dias
        return redirect()->back();
    }


    public function filter(Request $request){        
        $now = Carbon::now();
        if($request->route('type') != 'null' && $request->route('category') != 'null'){
            $applications = Application::where('type',$request->route('type'))->where('category',$request->route('category'))->get();        
        }else if($request->route('type') == 'null' && $request->route('category') != 'null'){
            $applications = Application::where('category',$request->route('category'))->get();
         }else if($request->route('type') != 'null' && $request->route('category') == 'null'){
            $applications = Application::where('type',$request->route('type'))->get();
        }else{
            $applications = Application::all()->sortByDesc("id"); 
        }

        foreach ($applications as $key => $value) {
            $applications[$key]->user = User::find($value->user_id);
            $applications[$key]->messages = Message::where('application_id',$value->id)->get()->unique('code');
           
            $created_at = Carbon::parse($value['created_at']);

            $diff = explode(' ',$created_at->diffForHumans($now));// 3 Months ago
            $applications[$key]->diff = $diff[0].' '.$diff[1];
        }
        self::getMessagesNotificationAuth();
        //return $applications;
        $users = User::orderByDesc('id')->get();
        return view('home')->with('applications',$applications)->with('users',$users);
    }    

    public function sendMessageContact(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required','captcha'],
        ]);
        $data = array(
            'name'      =>  $request->name,
            'email'   =>   $request->email,
            'message'   =>   $request->message
        );
        Mail::to('support@heiwork.com')->send(new DemoEmail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

    public function newPost(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }

        //$user = User::find(Auth::user()->id);
        if(Auth::user()->signature != null && Auth::user()->rubro != null && Auth::user()->about != null && Auth::user()->history != null && Auth::user()->language1 != null){
            Auth::user()->completeProfile = true;
        }else{
            Auth::user()->completeProfile = false;
        }
        $technologies = Technology::all();
        $categoriesPost = CategoryPost::orderBy('table_order')->get();

        self::getMessagesNotificationAuth();
        return view('newPost')->with('technologies',$technologies)->with('categoriesPost',$categoriesPost);
    }

    public function verifyexplireplan(Request $request){//cuando se loguea el usuario se verifica siempre esto
        if(!Auth::check()){
            return redirect('/login');
        }else{
            $now = Carbon::now();
            if($now > Auth::user()->expire_plan){//si plan esta expirado
                if(Auth::user()->plan == 'free' ){//si es plan free
                    $oneMonth = $now->addMonth();//un mes desde hoy
                    $oneMonthFormat =  $oneMonth->format('Y-m-d H:i:s');
                    User::where('id',Auth::user()->id)->update(['expire_plan' => $oneMonthFormat]);
                }else{//es otro de los planes pagos . aumentan 1 mes pero lo regreza a plan fee
                    $oneMonth = $now->addMonth();//un mes desde la fecha q expira
                    $oneMonthFormat =  $oneMonth->format('Y-m-d H:i:s');
                    User::where('id',Auth::user()->id)->update(['plan' => 'free','expire_plan' => $oneMonthFormat]);
                }
            }else{
                if(Auth::user()->plan != 'free'){
                    $sevenDays = $now->addDays(7);
                    $fiveDays = $now->addDays(5)->format('Y-m-d H:i:s');
                    $threeDays = $now->addDays(3)->format('Y-m-d H:i:s');

                    $expire_plan = Carbon::parse(Auth::user()->expire_plan);
                    if($sevenDays > $expire_plan){//se vence antes de 7 dias el plan
                        $diff = explode(' ',$expire_plan->diffForHumans($now));// 3 Months ago
                        $diff = $diff[0].' '.$diff[1];
                        Cookie::queue(Cookie::make('expire_plan', $diff, 2880));//2880 minuto = 48 horas
                    }    
                }
            }
            return redirect('/');
        }
    }

    public function deleteAccount(Request $request){
        Notification::where('notification_user_id',Auth::user()->id)->delete();
        Message::where('application_user_id',Auth::user()->id)->delete();
        Application::where('user_id',Auth::user()->id)->delete();
        User::where('id',Auth::user()->id)->delete();
        //User::where('id',Auth::user()->id)->update(['active' => 0]);
        //Auth::logout();
        return back()->with('success');
    }

    public function sobreNosotros(Request $request){
        self::getMessagesNotificationAuth();
        return view('about');
    }
    public function terminos(Request $request){
        self::getMessagesNotificationAuth();
        return view('terminos');
    }
    public function contacto(Request $request){
        self::getMessagesNotificationAuth();
        return view('contacto');
    }


    public function addEmails(Request $request){
        self::getMessagesNotificationAuth();
        return view('addEmails');
    }
    public function addEmail(Request $request){
        $data = $request->all();
        $exist = Company::where('email',$request->email)->first();
        if(!$exist){
            $company = Company::create($data);
            return back()->with('success', 'Agegado con exito!');
        }else{
            return back()->with('error', 'El correo ya estaba agregado!');
        }
    }

    public function ganarDinero(Request $request){
        self::getMessagesNotificationAuth();
        $users = User::where('rubro','!=',null)->where('country','!=','wl')->where('active',1)->orderBy('id','DESC')->get();
        return view('sorteo')->with('users',$users); 
    }

//************** */ panel manejar fakes accounts and correos *****************

    public function getfakeAccounts(Request $request){
        $allCountries = array(
            'ar' => 'Argentina',
            'de' => 'Alemania',
            'bo' => 'Bolivia',
            'br' => 'Brasil',
            'ca' => 'Canada',
            'cl' => 'Chile',
            'cn' => 'China',
            'co' => 'Colombia',
            'cr' => 'Costa rica',
            'cu' => 'Cuba',
            'ec' => 'Ecuador',
            'us' => 'Eeuu',
            'es' => 'España',
            'gt' => 'El salvador',
            'fr' => 'Francia',
            'gd' => 'Granada',
            'gt' => 'Guatemala',
            'hn' => 'Honduras',
            'ie' => 'Irlanda',
            'in' => 'India',
            'it' => 'Italia',
            'il' => 'Israel',
            'mx' => 'México',
            'ni' => 'Nicaragua',
            'py' => 'Paraguay',
            'pa' => 'Panamá',
            'pe' => 'Perú',
            'pr' => 'Puerto rico',
            'pt' => 'Portugal',
            'do' => 'República dominicana',
            'gb' => 'Gran bretaña',
            'uy' => 'Uruguay',
            've' => 'Venezuela'
        );
        self::getMessagesNotificationAuth();
        $users = User::where('email','LIKE','%user%')->get();
        
        //ultimos mensajes de la gente en lateral
        $lastMessages = Message::where('start',1)->where('writer_id','!=',18)->orderBy('id','Desc')->get();
        foreach($lastMessages as $key => $msg){
            $lastMessages[$key]->application = Application::find($msg->application_id);
            $lastMessages[$key]->user = User::find($msg->writer_id);
            $lastMessages[$key]->userApp = User::find($msg->application_user_id);
        }
        return view('fakeAccounts')->with('users',$users)->with('countries',$allCountries)->with('lastMessages',$lastMessages); 
    }
    
    //mensajes de cuenta fake selecionada
    public function messagesFakes(Request $request){
        $fakeUsID = $request->route('id');
        $messages = (object) null;
        if(!Auth::check()){
            return redirect('/login');
        }
        if($request->route('idMsj')){//mensaje especifico
            $message = Message::find($request->route('idMsj'));
            Message::where('code',$message->code)->where('application_user_id',$fakeUsID)->update(['read' => 1]);//marca como leido
            $application = Application::find($message->application_id);
            //return $application;
            if($message->writer_id != $fakeUsID){
                $partnerId = $message->writer_id;
            }else{
                $partnerId = $message->application_user_id;
            }
            $partner = User::find($partnerId);
            $messages = Message::where('code',$message->code)->get();
            foreach ($messages as $key => $message) {
                $messages[$key]->user = User::find($message->writer_id);
            }
            //return $message;
            self::getMessagesNotificationAuth();
            $users = User::where('email','LIKE','%user%')->get();

            //ultimos mensajes de la gente en lateral
            $lastMessages = Message::where('start',1)->where('writer_id','!=',18)->orderBy('id','Desc')->get();
            foreach($lastMessages as $key => $msg){
                $lastMessages[$key]->application = Application::find($msg->application_id);
                $lastMessages[$key]->user = User::find($msg->writer_id);
                $lastMessages[$key]->userApp = User::find($msg->application_user_id);
            }

            return view('fakeAccounts')->with('users',$users)->with('partner',$partner)->with('application',$application)->with('messagesList',$messages)->with('lastMessages',$lastMessages);
        }else{//todos los mensajes
            $now = Carbon::now();
            if(Auth::check()){
                $messages->messagesBox = Message::where('application_user_id',$fakeUsID)->orderByDesc("id")->get()->unique('code');
                $messages->messagesUnreadCount = Message::where('application_user_id',$fakeUsID)->where('writer_id','!=',$fakeUsID)->where('read',0)->count();
                $messages->newMessagesSendMe = Message::where('writer_id',$fakeUsID)->where('start',1)->orderByDesc("id")->get()->unique('code');
                $messages->notifications = Notification::where('notification_user_id',$fakeUsID)->orderByDesc("id")->get();
                foreach ($messages->messagesBox as $key => $message) {
                    $diff = explode(' ', $message->created_at->diffForHumans($now));
                    $messages->messagesBox[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                    $messages->messagesBox[$key]->user = User::find($message->writer_id);
                }
                foreach ($messages->newMessagesSendMe as $key => $message) {
                    $diff = explode(' ', $message->created_at->diffForHumans($now));
                    $messages->newMessagesSendMe[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                    $messages->newMessagesSendMe[$key]->user = User::find($message->application_user_id);
                }
                foreach ($messages->notifications as $key => $notification) {
                    $diff = explode(' ', $notification->created_at->diffForHumans($now));
                    $messages->notifications[$key]->diff = $diff[0].' '.$diff[1];// hace 1 hora
                }
            }
            self::getMessagesNotificationAuth();
            $users = User::where('email','LIKE','%user%')->get();

            //ultimos mensajes de la gente en lateral
            $lastMessages = Message::where('start',1)->where('writer_id','!=',18)->orderBy('id','Desc')->get();
            foreach($lastMessages as $key => $msg){
                $lastMessages[$key]->application = Application::find($msg->application_id);
                $lastMessages[$key]->user = User::find($msg->writer_id);
                $lastMessages[$key]->userApp = User::find($msg->application_user_id);
            }

            return view('fakeAccounts')->with('users',$users)->with('messages',$messages)->with('lastMessages',$lastMessages); 
        }
    }

    public function responseMessageFake(Request $request){
        $idAuth = $request->input('userFakeID');
        $data = $request->all();
        $messageBase = Message::where('code',$data['code'])->where('writer_id',$idAuth)->where('start',1)->first();
        //return $data;
        if(!$messageBase){
            $messageBase = Message::where('code',$data['code'])->where('application_user_id',$idAuth)->where('start',1)->first();
        }
        if(!$messageBase){//mensaje posible cambio de datos , no pasa seguridad - no encuentra mensaje base
            return redirect()->back();
        }

        if($messageBase->writer_id != $idAuth){
            $data['application_user_id'] = $messageBase->writer_id;
        }else{
            $data['application_user_id'] = $messageBase->application_user_id;
        }
        $data['writer_id'] = $idAuth;

        //return $data;
        //return $messageBase;
        unset($data['userFakeID']);
        unset($data['id']);
        $data['code'] = $messageBase->code;//codigo alfanumerico 32 caract
        $data['application_id'] = $messageBase->application_id;
        $message = Message::create($data);
        $message->save();

        //enviar correo de al uaurio receptor 
        $applicationDB = Application::find($data['application_id']);
        $user = User::find($data['application_user_id']);
        $data = collect();  
        $data->title = $applicationDB->title;
        $data->message = $request->message;
        $data->userSend = User::find($idAuth);
        $data->user = $user;
        $user->notify(new NewMessageSend($data));
        // end correo

        return redirect()->back();
    } 

}

