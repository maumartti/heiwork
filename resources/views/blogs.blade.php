@extends('layouts.web')

@section('head')

<link rel="canonical" href="{{URL::current()}}">

@if(Request::segment(2) == 'category')
<title>{{str_replace('-',' ',ucfirst(Request::segment(3)))}}</title>
<meta name="description" content="Artículos relacionados con la categoría : {{str_replace('-',' ',ucfirst(Request::segment(3)))}}">
@elseif(Request::segment(2) == 'tags')
<title>{{str_replace('-',' ',ucfirst(Request::segment(3)))}}</title>
<meta name="description" content="Artículos relacionados con el tag : {{str_replace('-',' ',ucfirst(Request::segment(3)))}}">
@else
<title>Blog y Noticias - HeiWork</title>
<meta name="description" content="Todas las noticias y artículos relacionados con el mundo del trabajo freelancer y tele-trabajo online, dentro de nuestra sección de blog con info informativa">
@endif

<meta name="keywords" content="Blog heiwork, artículos de tele-trabajo, heiwork, info freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Blog - Heiwork">
<meta property="og:description" content="Todas las noticias y artículos relacionados con el mundo del trabajo freelancer y tele-trabajo online, dentro de nuestra sección de blog, creada para informar a todos nuestros usuarios.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Todas las noticias y artículos relacionados con el mundo del trabajo freelancer y tele-trabajo online, dentro de nuestra sección de blog, creada para informar a todos nuestros usuarios." />
<meta name="twitter:title" content="Blog - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />

<!-- font google blog -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

<style>
    .landing-page p ,.landing-page div, .landing-page span{
        font-family: 'Quicksand', sans-serif !important;
        font-size: 18px !important;
    }
    h1{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 44px !important;
        color: #3d3d3d !important;
        line-height: 1.2em !important;
    }
    #imgVue{
        width: 100px;height:100px;top: -50px;left: calc(50% - 50px);
    }
    #imgLaravel{
        width: 105px;
    height: 105px;
    top: -51px;
    left: calc(50% - 60px);
    }
    .profile-image{
        padding: 10px !important;
    }
    #imgMauro{
            max-width: 100px;
    width: 100px;
    border-radius: 100%;
    }
    #imgIonic{
        width: 100px;height:100px;top: -48px;left: calc(50% - 50px);
        padding:8px;
    }
    .flag-icon{
    line-height: 1em;
    font-size: 32px;
    top: 45px;
    left: 35px;
    border-radius:2px;
    }
    .landing-page .middle-section{
        text-align: inherit;
    }
</style>
@endsection
@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:40px;">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            @if(Request::segment(2) == 'category')
                                <h1>Categoría: 
                                    @if(Request::segment(3) == 'diseno')
                                        diseño
                                    @elseif(Request::segment(3) == 'programacion')
                                        programación  
                                    @elseif(Request::segment(3) == 'traduccion')
                                        traducción          
                                    @else
                                        {{str_replace('-',' ',Request::segment(3))}}
                                    @endif
                                </h1>
                            @elseif(Request::segment(2) == 'tags')
                                <h1>Tag: 
                                @if(Request::segment(3) == 'diseno')
                                    diseño
                                @elseif(Request::segment(3) == 'traduccion')
                                    traducción    
                                @else
                                    {{str_replace('-',' ',Request::segment(3))}}
                                @endif
                            </h1>
                            @else
                                @if (Request::fullUrl() == 'https://heiwork.com/blog')
                                <h1>Blog y Noticias - Heiwork.com</h1>
                                <p>Espacio creado para informar a todos nuestros usuarios y colegas freelancer sobre las mejores formas de <a href="/trabajos-desde-casa">trabajar desde casa</a> y formarse en este nuevo <strong>mundo del teletrabajo y trabajo freelance</strong> en sus diferentes modalidades, en este apartado de blog hablaremos de como nuestra plataforma esta creando <strong>nueva información con artículos de calidad</strong> para mantener informado a todo nuestros usuarios, y que puedan ejercer su profesiones de la mejor manera y para eso les brindamos una serie de consejos que pueden ser de utilidad a la hora de aplicar para <strong>proyectos freelancer dentro y fuera nuestra plataforma Heiwork.com</strong>. Aquí nuestros artículos del blog:</p>
                                @else                                
                                    <h1>Blog: Página {{$blogs->currentPage()}} - Heiwork.com</h1>
                                @endif
                            @endif
                        </div>  
                        @foreach($blogs as $key => $blog)
                            @if($blog->state == 'publish')
                            <div class="col-md-6" style="border-radius: 0.25rem;">
                                <div class="card my-2 p-3">
                                    <img src="/images/blogs/{{$blog->image}}" class="col-md-11 p-0 mx-auto mt-3 img-responsive" alt="{{$blog->tags}} - {{$blog->title}} - {{$blog->category}}" style="border-radius: 10px !important;">
                                    <h2 class="px-3 pt-3 pb-2 mb-0">
                                        <a href="/blog/{{$blog->url}}">{{$blog->title}}</a>
                                    </h2>
                                    <div class="px-3 pt-0">
                                        {!! $blog->cita !!}
                                    </div>
                                 </div>
                            </div>
                            @endif
                        @endforeach      
                        
                        <!-- pagianador / paginate -->
                        @if(url()->current() == 'https://heiwork.com/blog')
                            <div class="col-12 text-center m-auto pt-5">
                                {{$blogs->render()}}
                                <p style="color:black;"><!--página {{$blogs->currentPage()}}--></p>
                            </div>
                            <style>
                                .pagination{
                                    width: 160px;
                                    margin: auto;
                                }
                                .pagination > li > a{
                                    color:black;
                                }
                            </style>
                            <!-- end paginate -->
                        @endif

                    </div>
                </div>
            </div>    
        </div>  
    </div>      
@endsection

@section('footer')
    @include('footer')
@endsection         