@extends('layouts.web')



@section('head')

@php
    //$user = Auth::user();
    $userName = explode(' ',$user->name);
@endphp

    <title>HeiWork | Perfil de {{$userName[0]}}</title>
    <link rel="canonical" href="https://heiwork.com/freelancer/{{$user->code}}">
    <meta name="description" content="Perfil de freelancer {{$user->name}}, de {{$user->country}}">
    <meta name="keywords" content="perfil, freelancer, {{$user->name}}, plataforma, heiwork">


    <meta name="apple-mobile-web-app-title" content="Perfíl Freelance">
    <meta name="application-name" content="Perfíl Freelance">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content=" #ffffff">
    <meta property="og:site_name" content="HEIWORK">
    <meta property="og:url" content="https://heiwork.com/freelancer/{{$user->code}}">
    <meta property="og:image" content="https://heiwork.com/images/users/{{$user->image}}">
    <meta property="og:title" content="Perfil de freelancer {{$user->name}}, de {{$user->country}}">
    <meta property="og:description" content="Perfil de freelancer {{$user->name}}, de {{$user->country}}">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="138224130427286">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Perfil de freelancer {{$user->name}}, de {{$user->country}}" />
    <meta name="twitter:title" content="Perfil de freelancer {{$user->name}} | Heiwork" />
    <meta name="twitter:image" content="https://heiwork.com/images/users/{{$user->image}}" />

<!-- galery -->
<link href="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/site.css" rel="stylesheet">
<link href="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/photoswipe.css" rel="stylesheet">
<link href="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/default-skin.css" rel="stylesheet">
<!-- end -->

    <!-- slin cropper -->
    <link href="{{ asset('slim-cropper-uploading/example/css/slim.min.css') }}" rel="stylesheet">

<!-- Adsense-->
<!-- Adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4949713421471029"
     crossorigin="anonymous"></script>

<style>
    @font-face {
      font-family: 'GeorgiaItalic';
       src: url('../fonts/Georgia-Italic.ttf') format('truetype');/*ome 4+, Firefox 3.5, Opera 10+, Safari 3—5 */
    } 
    h1{
        font-size: 1.78rem !important;
    }
    h2{
        font-size: 1.13rem !important;
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
    border-radius:2px;
    font-size: 14px;
    }
    .landing-page .middle-section{
        text-align: inherit;
    }
    .formLogin .mdi::before {
    color: #fff;
}
a.social_bt.facebook {
    border:1px solid #3B5998;
    background: white;
    color:#3B5998;
    display: block;
    margin: auto;
    margin-bottom: 5px;
    padding-bottom:19px;
    padding-top: 17px;
}
a.social_bt.google {
    border:1px solid #DC4E41;
    background: white;
    color:#DC4E41;
    margin-left: 10px;
    display: block;
    margin: auto;
    padding-top: 15px;
} 
a.social_bt.facebook .mdi::before{
    color:#3B5998;
}  
a.social_bt.google .mdi::before{
    color:#DC4E41;
} 
 a.social_bt {
    /*margin: auto;*/
    text-align: center;
    border-radius: 3px;
    color: #fff;
    min-width: 200px;
    width: 50%;
    display: inline;
    padding: 12px 20px;
    line-height: 1;
    position: relative;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out; 
    font-weight: 400;
    text-decoration: none;
    font-size:13px;
}
a.social_bt.facebook::before, a.social_bt.google::before, a.social_bt.linkedin::before {
    font-family: FontAwesome;
    position: absolute;
    left: 12px;
    top: 10px;
    font-size: 1.3rem;
    color: #fff;
}  
.access_social{
    text-align: center;
}
.fb_iframe_widget iframe {
    width: 240px !important;
}
.ContbtnsFloat{
    padding: 15px 30px !important;
}
.btnsFloat{
    padding: 15px 20px;
}
#pills-tab{
    padding:0px !important;
    margin-top:10px !important;
    margin-bottom:0px !important;
}
.nav-pills .nav-item .nav-link, .nav-tabs .nav-item .nav-link {
    font-size: 1rem !important;
    font-weight: bold;
    background: rgba(53, 176, 255, 0.2) !important;
    margin-right: 1px;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff !important;
    background-color: #55c12e !important;
    font-size: 1rem !important;
    font-weight: bold;
}
.rotated { 
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
.contFilter{
    height: 40px;
    overflow: hidden
}
textarea{
    font-weight: 400 !important;
    color: black !important;
    font-size: 16px !important;
    line-height: 1.3rem !important;
}
.target:hover{
    box-shadow: 2px 4px 8px 0 rgba(46, 61, 73, 0.2);
}
.contData{
    padding-top: 15px;
}
.contText p {
    font-size:16px;
}
@media (max-width: 767px){
    #btnOcultBox{
        display: block !important;
    }
    .ContbtnsFloat{
        padding:2px !important;       
    }
    #contPublicar{
        margin: 0px !important;
        width: 100% !important;
        bottom: 0px !important;
    }
    .btnsFloat, #contPublicar{
        border-radius: 0px !important;
    }
    .cardInfo{
        height: 80px;
        overflow: hidden;
    }
    h1{
        font-size: 1.9rem !important;
    }
    .contData{
        text-align: center !important; 
        padding-top: 0px !important;
    }
    .progress{
        margin: auto !important; 
    }
}

/******* galeria fotos trabajos ***/

        /*galery*/
        .contImgGal{
            margin: 1px 0px;
            overflow: hidden;
            height: 230px;
        }
        .contImgGal img{
            position: relative;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100px;
            width: 100%;
            margin: 2px;
        }
        .contImgGal:hover img {
          -moz-transform: scale(1.1);
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }
        .btnLlegar{
            background: #B2B2B2;
            border: 1px solid #B2B2B2;
            cursor: pointer;
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
        }
        .btnLlegar:hover{
            background: #fff;
            color: #444;
            border: 1px solid #B2B2B2;
        }
    @media(max-width: 2000px){    
        .demo-gallery a{
          height: 113px;
        }
    }    
    @media(max-width: 767px){
        .contImgGal img, .contImgGal{
            height:100px;
        }
        .demo-gallery a{
          height: auto;
        }
    }     
    @media(max-width: 530px){
        .demo-gallery a {
            width: 32.8% !important;
        }
        .modal-body{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
    }   
        /******************/   
/*** end galeria ***/


@media (max-width: 776px){
    h1{
        margin: auto;
        text-align: center;
        margin-top: 0px !important;
    }
    .contRowInfo{
        padding-top: 20px;
    }
    #closeScroll{
        display: block !important;
    }
    .contScrollsTop{
        position: fixed !important;
    }
    .contScrolls{
        /*display: none;*/
        padding: 0px !important;
        right: 0;
        top: 65px;
        height:58px !important;
    }
    ul.container {
        width:100%;
    }
    .contScrolls li, .contTextBox{
        width: 60px !important;
    }
    ul.container li {
        display: inline-block;
    }
    .imgScrollUs{
        width:30px !important;
        height:30px !important;
    }
    .flagScroll{
        position: relative !important;
        top: 0 !important;
        left: 0 !important;
        width: 20px !important;
        margin: 0px !important;
    }
    .communityNameUS2{
        display: none;
        font-size:8px !important;
    }
    .signatureSm{
        display: inline-block !important;
    }
    .contRowInfo{
        padding-top:0px !important;
    }
    #contImgPerf{
        text-align: center !important;
    }
    #contLevels{
        float: inherit !important;
        margin: auto !important;
    }
}
/*** end scroll vertical **/


/** modificacion de grilla */
@media (max-width: 772px){
    .col-md-22{
        flex: 0 0 21.666666%;
        max-width: 21.666666%;
    }
}
@media (max-width: 992px){
    #contContactUser2{
        display: inline-block !important;
        width: 250px;
    }
    #contContactUser2 > a{
        width: 250px;
    }
}
@media (min-width: 992px){
    .col-lg-3{
        flex: 0 0 20% !important;
        max-width: 20% !important;
    }
    .col-lg-22{
        flex: 0 0 21.666666% !important;
        max-width: 21.666666% !important;
    }
    
}
@media(min-width: 1200px){
    #contContactUser{
        display: inline-block !important;
    }
}
/* border radius share buttons*/
.a2a_default_style .a2a_count, .a2a_default_style .a2a_svg, .a2a_floating_style .a2a_svg, .a2a_menu .a2a_svg, .a2a_vertical_style .a2a_count, .a2a_vertical_style .a2a_svg{
    border-radius: 0px !important;
}
</style>

@endsection


@section('content')
@php
    $allCountries = array('ar' => 'Argentina','de' => 'Alemania','bo' => 'Bolivia','br' => 'Brasil','ca' => 'Canada','cl' => 'Chile','cn' => 'China','co' => 'Colombia','cr' => 'Costa rica','cu' => 'Cuba','ec' => 'Ecuador','us' => 'EEUU','es' => 'España','gt' => 'El salvador','fr' => 'Francia','gd' => 'Granada','gt' => 'Guatemala','hn' => 'Honduras','ie' => 'Irlanda','in' => 'India','it' => 'Italia','il' => 'Israel','mx' => 'México','ni' => 'Nicaragua','py' => 'Paraguay','pa' => 'Panamá','pe' => 'Perú','pr' => 'Puerto rico','pt' => 'Portugal','do' => 'República dominicana','gb' => 'Gran bretaña','uy' => 'Uruguay','ve' => 'Venezuela', 'wl' => '');
    $icons = [
        'Programación Web' => 'mdi mdi-cloud-tags',
        'Wordpress' => 'mdi mdi-wordpress',
        'Apps Android, iOS' => 'mdi mdi-cellphone-iphone',
        'Aplicaciones de escritorio' => 'mdi mdi-code-array',
        'Diseño Web' => 'mdi mdi-palette-advanced',
        'Diseño de Logo' => 'mdi mdi-palette',
        'Ilustraciones' => 'mdi mdi-palette',
        'Crear o editar audio, video' => 'mdi mdi-file-video',
        'Modelos 3D' => 'mdi mdi-printer-3d',
        'Fotografía' => 'mdi mdi-film',
        'Diseño de moda' => 'mdi mdi-tshirt-crew',
        'Redacción y Traducción' => 'mdi mdi-xda',
        'Marketing Digital y Ventas' => 'mdi mdi-cart',
        'SEO' => 'mdi mdi-search-web',
        'Soporte Administrativo' => 'mdi mdi-desktop-mac',
        'Legal' => 'mdi mdi-script',
        'Finanzas y Negocios' => 'mdi mdi-chart-line-stacked',
        'Ingeniería y Arquitectura' => 'mdi mdi-ungroup',
    ];


    $linkCountry = str_replace(' ', '-', strtolower($allCountries[$user->country]));


@endphp
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:20px;padding-bottom:0px;">

          <!-- AVISO PLAN POR EXPIRAR -->
          @if(Cookie::get('expire_plan'))
          <div class="alert alert-info alert-dismissible fade show" role="alert" style="font-size:16px;">
            <strong>  <i class="mdi mdi-alert-octagon m-0"></i> Aviso  -  Tu plan expira en {{request()->cookie('expire_plan')}}  <a class="btn btn-primary btn-sm" href="/planes">Renovar plan ahora!</a></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <!-- END AVISO -->

            <div class="row contRowInfo">
                <div class="col-md-12">
                @php
                    //$user = Auth::user();
                    $userName = explode(' ',$user->name);
                    $userSurname = '';
                    if(isset($userName[1])){
                        $userSurname = $userName[1][0];
                    }
                    $myprofile = false;
                    if(Auth::check()){
                        if($user->id == Auth::user()->id){
                            $myprofile = true;
                        }
                    }
                @endphp
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb card mb-2" style="flex-direction:initial !important;">
                                <li class="breadcrumb-item"><a href="/"><strong>Home</strong></a></li>
                                <li class="breadcrumb-item"><a href="/category/{{$post->categoryPost->url}}"><strong>{{$post->categoryPost->name}}</strong></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><strong>{{$post->title}}</strong></li>
                              </ol>
                            </nav>
                        </div>
                    </div> -->
                    <div class="row">
                        <!-- listado otros freelancers -->
                        <div class="d-none d-md-block col-md-4 col-lg-3 pr-1">
                            <div class="grid-margin stretch-card p-0 mb-2 m-auto" style="margin-bottom: 15px !important;">           
                              <div class="card" style="border-radius:0px;border-radius:10px;">
                                <div class="card-body pt-3 pb-3">
                                    <h2 class="font-weight-bold mb-3">Otros freelancers en Heiwork</h2>
                                    @foreach($users as $key => $freelancer)
                                        @php
                                        $freelancerName = explode(' ', $freelancer->name);
                                        $freelancerSurname = '';
                                        if(isset($freelancerName[1])){
                                            $freelancerSurname = $freelancerName[1][0];
                                        }
                                        $linkCountryFreelancer = str_replace(' ', '-', strtolower($allCountries[$freelancer->country]));
                                        @endphp
                                        <div class="col-12 p-0 my-2">
                                            <div class="row p-2 target" style="border:1px solid #55c12e;border-radius:10px;">
                                                <div class="col-4 p-0 text-center">
                                                    <img class="rounded-circle m-auto mt-1 mb-1" src="/images/users/{{($freelancer->image == null ? 'no-user.png' : $freelancer->image)}}" style="width:60px;height:60px; @if($freelancer->plan == 'professional') border:4px solid #55c12e @elseif($freelancer->plan == 'premium') border:4px solid #007bff @else border:4px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$freelancerName[0]}}" alt="{{$freelancerName[0]}} - freelancer de {{$allCountries[$freelancer->country]}}">   
                                                </div>
                                                <div class="col-8 p-1 pt-2">
                                                    <h4 class="mb-1"><a href="/freelancer/{{$freelancer->code}}">{{$freelancerName[0]}} {{$freelancerSurname}}</a></h4>
                                                    <p class="mb-1"><i class="mdi mdi-map-marker"></i><span style="font-size:13px;font-weight:bold;"><a href="/freelancers/{{$linkCountryFreelancer}}">{{$allCountries[$freelancer->country]}}</a></span><i class="ml-1 flag-icon flag-icon-{{$freelancer->country}}" title="{{$freelancer->country}}" id="{{$freelancer->country}}" style="position:relative;top:1px;"></i></p>
                                                </div>
                                                <div class="col-12 p-0 px-1 pt-1 text-center">
                                                    @if($freelancer->rubro != null)
                                                    <p data-toggle="tooltip" data-html="true" title="<em><b>{{$freelancer->rubro}}</b>" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;">
                                                        <i class="ml-1 mdi {{$icons[$freelancer->rubro]}}" style="font-size:18px;margin: 0px !important;top: -5px;position: relative;"></i>                                                                                             
                                                        @if($freelancer->rubro2 == null && $freelancer->rubro3 == null && $freelancer->rubro4 == null)
                                                        <span style="float: right;margin-left:4px;font-size: 11px;">
                                                            {{$freelancer->rubro}}
                                                        </span>
                                                        @endif
                                                    </p>
                                                    @endif
                                                    @if($freelancer->rubro2 != null)
                                                    <p data-toggle="tooltip" data-html="true" title="<em><b>{{$freelancer->rubro2}}</b>" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;">
                                                        <i class="ml-1 mdi {{$icons[$freelancer->rubro2]}}" style="font-size:18px;margin: 0px !important;top: -5px;position: relative;"></i>                                                                                             
                                                    </p>
                                                    @endif
                                                    @if($freelancer->rubro3 != null)
                                                    <p data-toggle="tooltip" data-html="true" title="<em><b>{{$freelancer->rubro3}}</b>" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;">
                                                        <i class="ml-1 mdi {{$icons[$freelancer->rubro3]}}" style="font-size:18px;margin: 0px !important;top: -5px;position: relative;"></i>                                                                                             
                                                    </p>
                                                    @endif
                                                    @if($freelancer->rubro4 != null)
                                                    <p data-toggle="tooltip" data-html="true" title="<em><b>{{$freelancer->rubro4}}</b>" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;">
                                                        <i class="ml-1 mdi {{$icons[$freelancer->rubro4]}}" style="font-size:18px;margin: 0px !important;top: -5px;position: relative;"></i>                                                                                             
                                                    </p>
                                                    @endif
                                                </div>    
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                              </div>
                            </div> 
                        </div>       
                        <!-- end listado -->
                        <div class="col-md-8 col-lg-7">
                            <div class="grid-margin stretch-card p-0 mb-2" style="margin-bottom: 15px !important;">         
                                <div class="card" style="border-radius:0px;border-radius:10px;">
                                    <div class="card-body pt-3 pb-3">
                                    @php
                                        $freelancerName = explode(' ', $post->user->name);
                                        $freelancerSurname = '';
                                        if(isset($freelancerName[1])){
                                            $freelancerSurname = $freelancerName[1][0];
                                        }
                                        $linkCountryFreelancer = str_replace(' ', '-', strtolower($allCountries[$freelancer->country]));
                                        @endphp
                                        <div class="col-12 p-0 text-right">  
                                            <p class="text-right p-0 m-0" style="color:black;font-weight:bold;">hace {{$post->diff}}</p>  
                                        </div> 
                                        <div class="col-12 p-0 my-0">
                                            <div class="row py-0 px-2">
                                                <div class="col-3 col-md-1 p-0 text-center">
                                                    <img class="rounded-circle m-auto mt-1 mb-1" src="/images/users/{{($post->user->image == null ? 'no-user.png' : $post->user->image)}}" style="width:60px;height:60px; @if($freelancer->plan == 'professional') border:4px solid #55c12e @elseif($freelancer->plan == 'premium') border:4px solid #007bff @else border:4px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$freelancerName[0]}}" alt="{{$freelancerName[0]}} - freelancer de {{$allCountries[$freelancer->country]}}">   
                                                </div>
                                                <div class="col-8 col-md-2 p-1 pt-2">
                                                    <h4 class="mb-1"><a href="/freelancer/{{$freelancer->code}}">{{$freelancerName[0]}} {{$freelancerSurname}}</a></h4>
                                                    <p class="mb-1"><span style="font-size:13px;font-weight:bold;"><a href="/freelancers/{{$allCountries[$post->user->country]}}">{{$allCountries[$post->user->country]}}</a></span><i class="ml-1 flag-icon flag-icon-{{$post->user->country}}" title="{{$post->user->country}}" id="{{$post->user->country}}" style="position:relative;top:1px;"></i></p>
                                                </div>
                                                <div class="col-12 col-md-6 p-0 px-3 text-left" style="padding-top:0.6rem !important">
                                                    @if($freelancer->rubro != null)
                                                    <p class="d-inline-block" data-toggle="tooltip" data-html="true" title="<em>Categoría: <b>{{$freelancer->rubro}}</b>" style="font-size:8px;font-weight:bold;background:#e3e5e2;border-radius: 8px;padding:3px 5px;bottom:10px;margin:0px;display:inline-block;height:23px;text-align: center;">
                                                        <i class="ml-1 mdi {{$icons[$freelancer->rubro]}}" style="font-size:18px;margin: 0px !important;top: -5px;position: relative;"></i>                                                                                             
                                                        @if($freelancer->rubro2 == null && $freelancer->rubro3 == null && $freelancer->rubro4 == null)
                                                        <span style="float: right;margin-left:4px;font-size: 11px;">
                                                            {{$freelancer->rubro}}
                                                        </span>
                                                        @endif
                                                    </p>
                                                    @endif 
                                                    @if($post->country == 'gg')
                                                        <p class="d-inline-block" data-toggle="tooltip" data-placement="top" title="No va dirigido a un país en específico" style="background:#e3e5e2;border-radius: 8px;padding:3px;font-size:11px;font-weight:bold;border-radius:8px;padding:3px 8px;width:max-content;margin:0px;vertical-align:top;"><img src="/images/earth.svg" style="width:16px;position:relative;top: -2px;"> Tema global</p>
                                                    @else
                                                        <p class=""d-inline-block" data-toggle="tooltip" data-placement="top" title="{{$post->country}}" style="font-size:11px;font-weight:bold;border-radius:10px;padding:3px ;width:max-content;margin:0px;vertical-align:top;"><i class="ml-1 flag-icon flag-icon-{{$post->country}}" title="{{$post->country}}" id="{{$post->country}}" style="position:relative;top:1px;"></i> Dirigido al mercado</p>
                                                    @endif 
                                                </div>       
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h1>{{$post->title}}</h1>
                                            <div class="contText">{!! $post->text !!}</div>
                                            <ul class="list-inline p-0 mb-1 mt-2">
                                                <li class="list-inline-item"><a href="#"><strong>Nuxt</strong></a></li>
                                                <li class="list-inline-item"><a href="#"><strong>JavaScript</strong></a></li>
                                                <li class="list-inline-item"><a href="#"><strong>Vue</strong></a></li>
                                                <li class="list-inline-item"><a href="#"><strong>Asure</strong></a></li>
                                                <li class="list-inline-item separateTiem">|</li>
                                                <li class="list-inline-item"><span style="color:#2e2e2e;font-weight:bold;margin-top: 0px !important;font-size:11px;">Publicado hace 2 horas</span></li>
                                            </ul>    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>

                 @if(Auth::check() && $myprofile == true)
                    </div>                          
                </div>  
                @endif

                <!-- end card principal perfil -->
                <!-- lateral drecho -->   
                <div class="d-none d-lg-block col-md-3 col-lg-22 pl-1">
                    <div class="grid-margin stretch-card p-0 mb-2 m-auto" style="margin-bottom: 15px !important;">           
                          <div class="card" style="border-radius:0px;border-radius:10px;">
                            <div class="card-body pt-3 pb-3">

                                <h4 class="text-center">Publica en nuestra Home <i class="mdi mdi-sticker-emoji"></i></h4>
                                <p class="text-center mb-1">Publica sin costo tus habilidades en nuestra Home para <strong>ganar visibilidad</strong>, o si tienes un proyecto y estas en busca de un freelancer publica también sin costo.</p>
                                <a class="btn btn-primary btn-block text-white mb-3" href="/publicar" style="font-size:18px;">Publicar <i class="mdi mdi-plus-circle-outline ml-1" style="margin-left:0.5px;"></i></a>
                                
                                
                                <h4 class="text-center">Forma parte de la comunidad <i class="mdi mdi-google-circles-extended"></i></h4>
                                <p class="text-center mb-1">Inicia sesión con redes sociales</p>
                                <div class="access_social mb-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <a href="https://heiwork.com/auth/facebook" class="social_bt facebook">
                                        <i class="mdi mdi-facebook-box" style="font-size:18px;color:#3B5998;top: 1px;position: relative;"></i> FACEBOOK
                                        </a>
                                            <a href="https://heiwork.com/auth/google" class="social_bt google">
                                            <!--<i class="mdi mdi-google" style="font-size:18px;color:#DC4E41;top: 1px;position: relative;"></i> GOOGLE-->
                                            <svg style="top:-2px;left:-2px;position: relative;" xmlns="https://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 48 48" aria-hidden="true" class="L5wZDc"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"></path><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"></path><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"></path><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"></path><path fill="none" d="M2 2h44v44H2z"></path></svg>
                                             GOOGLE
                                        </a> 
                                        </div>
                                    </div>
                                    <a href="/register" class="btn btn-light mt-2" style="color:#4d7b3c;background: #c8eab8;">Crear una nueva cuenta</a>                   
                                </div>                               
                              

                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end lateral -->
 
            </div>    
        </div>


       </div>
    </div> 






    </div>
@endsection

@section('script')

<!-- scripts de galería -->
<script type="text/javascript" async="" src="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/watch.js"></script>
<script async="" src="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/analytics.js"></script>
<script src="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/photoswipe.js"></script>
<script src="/PhotoSwipe%20Responsive%20JavaScript%20Image%20Gallery_files/photoswipe-ui-default.js"></script>
<!-- end scripts galería -->

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
-->

<!-- slim cropper -->
<script src="{{ asset('slim-cropper-uploading/example/js/slim.kickstart.min.js') }}"></script>


<script>

    function getIcon(rubro){
        icons = {
            'Programación Web':'<i class="mdi mdi-cloud-tags"></i>',
            'Wordpress':'<i class="mdi mdi-wordpress"></i>',
            'Apps Android, iOS':'<i class="mdi mdi-cellphone-iphone"></i>',
            'Aplicaciones de escritorio':'<i class="mdi mdi-code-array"></i>',
            'Diseño Web':'<i class="mdi mdi-palette-advanced"></i>',
            'Diseño de Logo':'<i class="mdi mdi-palette"></i>',
            'Ilustraciones':'<i class="mdi mdi-palette"></i>',
            'Crear o editar audio, video':'<i class="mdi mdi-file-video"></i>',
            'Modelos 3D':'<i class="mdi mdi-printer-3d"></i>',
            'Fotografía':'<i class="mdi mdi-film"></i>',
            'Diseño de moda':'<i class="mdi mdi-tshirt-crew"></i>',
            'Redacción y Traducción':'<i class="mdi mdi-xda"></i>',
            'Marketing Digital y Ventas':'<i class="mdi mdi-cart"></i>',
            'SEO':'<i class="mdi mdi-search-web"></i>',
            'Soporte Administrativo':'<i class="mdi mdi-desktop-mac"></i>',
            'Legal':'<i class="mdi mdi-script"></i>',
            'Finanzas y Negocios':'<i class="mdi mdi-chart-line-stacked"></i>',
            'Ingeniería y Arquitectura':'<i class="mdi mdi-ungroup"></i>',
        }
        for(var i in icons){
            if(i == rubro){
                return icons[i];
            }
        }
    }    
    $(document).ready(function(){ 
        
        $('#editSignature').click(function(){
            if($('#textareaSignature').is(':hidden')){
                $('#textareaSignature').show();
                $('#textSignature').hide();
            }else{
                $('#textareaSignature').hide();
                $('#textSignature').show();
            }
        })

        $('#editTec').click(function(){
            if($('#textareaTec').is(':hidden')){
                $('#textareaTec').show();
                $('#textTec').hide();
            }else{
                $('#textareaTec').hide();
                $('#textTec').show();
            }
        })

        $('#editAbout').click(function(){
            if($('#textareaAbout').is(':hidden')){
                $('#textareaAbout').show();
                $('#textAbout').hide();
            }else{
                $('#textareaAbout').hide();
                $('#textAbout').show();
            }
        })
        $('#editHistory').click(function(){
            if($('#textareaHistory').is(':hidden')){
                $('#textareaHistory').show();
                $('#textHistory').hide();
            }else{
                $('#textareaHistory').hide();
                $('#textHistory').show();
            }
        })
        $('#editLink').click(function(){
            if($('#textareaLink').is(':hidden')){
                $('#textareaLink').show();
                $('#textLink').hide();
            }else{
                $('#textareaLink').hide();
                $('#textLink').show();
            }
        })        
        $('#editImagesWork').click(function(){
            if($('#textareaImagesWork').is(':hidden')){
                $('#textareaImagesWork').show();
                $('#textImagesWork').hide();
            }else{
                $('#textareaImagesWork').hide();
                $('#textImagesWork').show();
            }
        })
        $('#editLanguages').click(function(){
            if($('#textareaLanguages').is(':hidden')){
                $('#textareaLanguages').show();
                $('#textLanguages').hide();
            }else{
                $('#textareaLanguages').hide();
                $('#textLanguages').show();
            }
        })    



        //cosas galeria imagenes
        
        $('.imgGalery').click(function(){
            $('#modalGalery').modal('show');
            //var src = $(this).children().attr('src');
            //$('#imageModalGalery').attr('src',src);
        });

        //end galeria


        //select rubro
        var numRubroSelect = null;
        $('#BtnRubro').click(function(){
            numRubroSelect = ''            
            $('#modalRubro').modal('show');
        })
        $('#BtnRubro2').click(function(){
            numRubroSelect = '2'
            $('#modalRubro').modal('show');
        })
        $('#BtnRubro3').click(function(){
            numRubroSelect = '3'
            $('#modalRubro').modal('show');
        })
        $('#BtnRubro4').click(function(){
            numRubroSelect = '4'
            $('#modalRubro').modal('show');
        })
        //into modal 
        $('.btnRubro').click(function(){
            var rubro_code = $(this).children().attr('id');
            $('#rubro'+numRubroSelect).val(rubro_code);
            var icon = getIcon(rubro_code);        
            $('#BtnRubro'+numRubroSelect).html(icon+' '+rubro_code);
            //$('#ContBtnRubro'+numRubroSelect).append('<button id="deleteRubro'+numRubroSelect+'" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;"><i class="mdi mdi-close-circle" ></i></button>');
            $('#deleteRubro'+numRubroSelect).show();
            $('#modalRubro').modal('hide');
        });
        //delete rubro
        $('#deleteRubro2').click(function(){
            $('#rubro2').val('');
            $('#BtnRubro2').text('# agregar');
        })
        $('#deleteRubro3').click(function(){
            $('#rubro3').val('');
            $('#BtnRubro3').text('# agregar');
        })
        $('#deleteRubro4').click(function(){
            $('#rubro4').val('');
            $('#BtnRubro4').text('# agregar');
        })
        //end select rubro


    });
</script>

<!-- CODIGO DE GALERIA -->
<script type="text/javascript">
    (function() {

        var initPhotoSwipeFromDOM = function(gallerySelector) {

            var parseThumbnailElements = function(el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    el,
                    childElements,
                    thumbnailEl,
                    size,
                    item;

                for(var i = 0; i < numNodes; i++) {
                    el = thumbElements[i];

                    // include only element nodes 
                    if(el.nodeType !== 1) {
                      continue;
                    }

                    childElements = el.children;

                    size = el.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: el.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10),
                        author: el.getAttribute('data-author')
                    };

                    item.el = el; // save link to element for getThumbBoundsFn

                    if(childElements.length > 0) {
                      item.msrc = childElements[0].getAttribute('src'); // thumbnail url
                      if(childElements.length > 1) {
                          item.title = childElements[1].innerHTML; // caption (contents of figure)
                      }
                    }


                    var mediumSrc = el.getAttribute('data-med');
                    if(mediumSrc) {
                        size = el.getAttribute('data-med-size').split('x');
                        // "medium-sized" image
                        item.m = {
                            src: mediumSrc,
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };
                    }
                    // original image
                    item.o = {
                        src: item.src,
                        w: item.w,
                        h: item.h
                    };

                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && ( fn(el) ? el : closest(el.parentNode, fn) );
            };

            var onThumbnailsClick = function(e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                var clickedListItem = closest(eTarget, function(el) {
                    return el.tagName === 'A';
                });

                if(!clickedListItem) {
                    return;
                }

                var clickedGallery = clickedListItem.parentNode;

                var childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if(childNodes[i].nodeType !== 1) { 
                        continue; 
                    }

                    if(childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }

                if(index >= 0) {
                    openPhotoSwipe( index, clickedGallery );
                }
                return false;
            };

            var photoswipeParseHash = function() {
                var hash = window.location.hash.substring(1),
                params = {};

                if(hash.length < 5) { // pid=1
                    return params;
                }

                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if(!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');  
                    if(pair.length < 2) {
                        continue;
                    }           
                    params[pair[0]] = pair[1];
                }

                if(params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }

                return params;
            };

            var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {

                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                    getThumbBoundsFn: function(index) {
                        // See Options->getThumbBoundsFn section of docs for more info
                        var thumbnail = items[index].el.children[0],
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect(); 

                        return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                    },

                    addCaptionHTMLFn: function(item, captionEl, isFake) {
                        if(!item.title) {
                            captionEl.children[0].innerText = '';
                            return false;
                        }
                        captionEl.children[0].innerHTML = item.title +  '<br/><small>Photo: ' + item.author + '</small>';
                        return true;
                    },
                    
                };


                if(fromURL) {
                    if(options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // https://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for(var j = 0; j < items.length; j++) {
                            if(items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }

                // exit if index not found
                if( isNaN(options.index) ) {
                    return;
                }



                var radios = document.getElementsByName('gallery-style');
                for (var i = 0, length = radios.length; i < length; i++) {
                    if (radios[i].checked) {
                        if(radios[i].id == 'radio-all-controls') {

                        } else if(radios[i].id == 'radio-minimal-black') {
                            options.mainClass = 'pswp--minimal--dark';
                            options.barsSize = {top:0,bottom:0};
                            options.captionEl = false;
                            options.fullscreenEl = false;
                            options.shareEl = false;
                            options.bgOpacity = 0.85;
                            options.tapToClose = true;
                            options.tapToToggleControls = false;
                        }
                        break;
                    }
                }

                if(disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

                // see: http://photoswipe.com/documentation/responsive-images.html
                var realViewportWidth,
                    useLargeImages = false,
                    firstResize = true,
                    imageSrcWillChange;

                gallery.listen('beforeResize', function() {

                    var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
                    dpiRatio = Math.min(dpiRatio, 2.5);
                    realViewportWidth = gallery.viewportSize.x * dpiRatio;


                    if(realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200 ) {
                        if(!useLargeImages) {
                            useLargeImages = true;
                            imageSrcWillChange = true;
                        }
                        
                    } else {
                        if(useLargeImages) {
                            useLargeImages = false;
                            imageSrcWillChange = true;
                        }
                    }

                    if(imageSrcWillChange && !firstResize) {
                        gallery.invalidateCurrItems();
                    }

                    if(firstResize) {
                        firstResize = false;
                    }

                    imageSrcWillChange = false;

                });

                gallery.listen('gettingData', function(index, item) {
                    if( useLargeImages ) {
                        item.src = item.o.src;
                        item.w = item.o.w;
                        item.h = item.o.h;
                    } else {
                        item.src = item.m.src;
                        item.w = item.m.w;
                        item.h = item.m.h;
                    }
                });

                gallery.init();
            };

            // select all gallery elements
            var galleryElements = document.querySelectorAll( gallerySelector );
            for(var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i+1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if(hashData.pid && hashData.gid) {
                openPhotoSwipe( hashData.pid,  galleryElements[ hashData.gid - 1 ], true, true );
            }
        };

        initPhotoSwipeFromDOM('.demo-gallery');

    })();

</script>
<!-- END GALERIA CODIGO -->


@endsection


@section('footer')
    @include('footer')
@endsection     