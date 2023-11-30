<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Tools;
use App\Blog;
use App\User;
use App\Comment;
use App\Library;

class BlogController extends Controller
{   

    public function postComment(Request $request){
        if(!Auth::check()){
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:36'],
                'comment' => ['required', 'string', 'max:500'],
                'id' => ['required'],
                'type' => ['required']
                //'g-recaptcha-response' => ['required','captcha'],
            ]);
        }else{//logeado
            $validated = $request->validate([
                'comment' => ['required', 'string', 'max:500'],
                'id' => ['required'],
                'type' => ['required']
                //'g-recaptcha-response' => ['required','captcha'],
            ]);
        }
        $comment = new Comment;
        $articles = array(
            'teleTrabajo',
            'comunidadFreelanceLatinoamerica',
            'iniciarFreelancer',
            'mejoresTrabajosFreelancer',
            'trabajoDesdeCasa'
        );
        if($request->input('type') == '92a2b5cb9c6906035c2864fa225e1940'){
            $comment->article_name = $request->input('id');//comentario de article
            foreach ($articles as $value) {
                if(md5($value) == $request->input('id')){
                    $comment->article_name = $value;
                }
            }
        }else{//es un commentario de blog
            $comment->blog_id = $request->input('id');
        }
        if(Auth::check()){
            $comment->name = Auth::user()->name;
            $comment->email = Auth::user()->email;
            $comment->comment = $request->input('comment');
            $comment->user_id = Auth::user()->id;
        }else{
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            $comment->web = $request->input('web');
        }
        $comment->save();//guardamos commentario
        return redirect()->back();        
    }
    public function articleTrabajoFreelance(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        $comments = Comment::where('article_name','teleTrabajo')->get();
        foreach ($comments as $key => $value) {
            if($value->user_id != null){
                $comments[$key]->user = User::find($value->user_id);
            }
        }
        return view('articles.teleTrabajo')->with('comments',$comments);
    }

    public function iniciarFreelancer(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        $comments = Comment::where('article_name','iniciarFreelancer')->get();
        foreach ($comments as $key => $value) {
            if($value->user_id != null){
                $comments[$key]->user = User::find($value->user_id);
            }
        }
        return view('articles.iniciarFreelancer')->with('comments',$comments);
    }
    public function MejoresTrabajosFreelancer(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        $comments = Comment::where('article_name','mejoresTrabajosFreelancer')->get();
        foreach ($comments as $key => $value) {
            if($value->user_id != null){
                $comments[$key]->user = User::find($value->user_id);
            }
        }
        return view('articles.mejoresTrabajosFreelancer')->with('comments',$comments);
    }

    public function teletrabajoFreelanceLatinoamérica(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        $comments = Comment::where('article_name','comunidadFreelanceLatinoamerica')->get();
        foreach ($comments as $key => $value) {
            if($value->user_id != null){
                $comments[$key]->user = User::find($value->user_id);
            }
        }
        return view('articles.comunidadFreelanceLatinoamerica')->with('comments',$comments);
    }

    public function trabajosDesdeCasa(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        $comments = Comment::where('article_name','trabajoDesdeCasa')->get();
        foreach ($comments as $key => $value) {
            if($value->user_id != null){
                $comments[$key]->user = User::find($value->user_id);
            }
        }
        return view('articles.trabajoDesdeCasa')->with('comments',$comments);
    }

    public function trabajarCasa(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        return view('articles.trabajarCasa');
    }

    public function addBlog(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        return view('addBlog');
    }

    public function index(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
        if($request->route('title') != ''){//articulo
            $url = $request->route('title');
            $blog = Blog::where('url',$url)->first();
            if(!$blog){
                return view('404');
            }
            $blogPrev = Blog::select('title','url')->where('id', '<', $blog->id)->orderBy('id','desc')->first();
            $blogNext = Blog::select('title','url')->where('id', '>', $blog->id)->first();
            $blogsCat = Blog::where('category',$blog->category)->where('id','!=',$blog->id)->get();
/*
            $countries =  array("Argentina","Bolivia","Chile","Colombia","Costa Rica","Cuba","Dominica","Ecuador","El Salvador","España","Estados Unidos","Guatemala","Honduras","México","Nicaragua","Panamá","Paraguay","Perú","República Dominicana","Uruguay","Venezuela");
            $cities = array('Buenos Aires','La paz','Brasilia','Santiago','Bogotá','San José','La Habana','Quito','San Salvador','Ciudad de Guatemala','Puerto Príncipe','Tegucigalpa','Ciudad de México','Managua','Panamá','Asunción','Lima','Santo Domingo','Montevideo','Caracas');
            foreach ($countries as $key => $value) {
                $blog->text = str_replace($value, '<a href="/blog/pais/'.$value.'" >'.$value.'</a>', $blog->text);
            }
            foreach ($cities as $key => $value) {
                $blog->text = str_replace($value, '<a href="/blog/ciudad/'.$value.'" >'.$value.'</a>', $blog->text);
            }   */         

            $terminos = array('trabajo freelance');
            //foreach ($terminos as $key => $value) {
                $valueLink = str_replace(' ', '-', $terminos[0]);
                //quitamos por ahora link automatico
                //$blog->text = str_replace($terminos[0], '<a href="/teletrabajo-freelance" >'.$terminos[0].'</a>', $blog->text);
            //}
            //ponemos id="" dentro de los h2 para hacer anclas 
            $tools = New Tools;
            $arr = $tools->setIDtoH2Titles($blog->text);

            $blog->text = $arr[0];
            $blog->arrH2 = $arr[1];
            //¡¡return $blogsCat;
            return view('blog')->with('blog',$blog)->with('blogsCat',$blogsCat)->with('blogPrev',$blogPrev)->with('blogNext',$blogNext);
        }else{//todos los blogs
            $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
    	    return view('blogs')->with('blogs',$blogs);
        }
    }

    public function tag(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
    	$tag = str_replace('-', ' ', $request->route('tag'));
        $blogs = Blog::where('tags','like','%'.$tag.'%')->get();
        return view('blogs')->with('blogs',$blogs);
    }

    public function category(Request $request){
        $HomeController = new HomeController;
        $HomeController->getMessagesNotificationAuth();
    	$category = str_replace('-', ' ', $request->route('category'));
        $blogs = Blog::where('category',$category)->get();
        return view('blogs')->with('blogs',$blogs);
    }

    //********** APi REST

    public function store(Request $request){
    	$data = $request->all();
        //dd($data);
        $tools = New Tools;
        /*guardamos la imagen*/
        if($request->image != null && $request->image != 'null'){
            $imageJson = json_decode($request->image,true);
            $imageCode = $imageJson['output']['image'];//codigo64 imagen
            if($imageCode){
                if($imageCode != null && $imageCode != 'null'){
                    //guardamos imagen      
                    $data['image'] = $tools->saveImage64('/images/blogs/', $imageCode);
                }
            }
        }else{
            unset($data['image']);
        }

        $user = User::find(Auth::user()->id);
        $data['user_id'] = $user->id; //usuario publica blog
        $userName = explode(' ',$user->name);
        $data['user_name'] = $userName[0];

        $data['url'] = $tools->generateUrl($data['title']);
        //return $data['url'];

        if($data['tipo'] == 'codigo'){
            unset($data['tipo']);
            $blog = Library::create($data);
        }else{
            unset($data['tipo']);
    	    $blog = Blog::create($data);
        }
    	$blog->save();
        return redirect()->back();
    }

    public function show(Request $request){
        $tools = New Tools;
        $blogs = Blog::all();

        $arrTags = array();//array con todos los tags de blogs sin repetir
        foreach ($blogs as $key => $blog) {
            $tags = explode(',', $blog->tags);
            foreach ($tags as $key2 => $value) {
                //$urlTag = $tools->quitarAcentos(str_replace(' ', '-', $value));
                if(!in_array($value, $arrTags)){
                    array_push($arrTags, $value);
                }
            }
        }
        return $arrTags;
    }
}
