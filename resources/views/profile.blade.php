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
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb card mb-2" style="flex-direction:initial !important;">
                                <li class="breadcrumb-item"><a href="/"><strong>Heiwork</strong></a></li>
                                <li class="breadcrumb-item"><a href="/freelancers"><strong>Freelancers</strong></a></li>
                                <li class="breadcrumb-item"><a href="/freelancers/{{$linkCountry}}"><strong>Freelancers en {{$allCountries[$user->country]}}</strong></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><strong>{{$userName[0]}} @if(isset($userName[1])) {{$userName[1][0]}} @endif</strong></li>
                              </ol>
                            </nav>
                        </div>
                    </div>
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

                                    @if($myprofile == true && $user->completeProfile == false)
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                      <strong><i class="mdi mdi-account-alert mr-0"></i> Perfil incompleto! Completa tu perfil para ganar más visibilidad dentro de la comunidad</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    @endif
                                    @auth
                                    @if(Auth::user()->email_verified_at == null)
                                        <div class="alert alert-danger" role="alert">
                                         <i class="mdi mdi-close-octagon-outline m-0"></i> 
                                         <strong>Aún no has verificado correo tu electrónico <a href="https://heiwork.com/email/verify">( Verificar mi Correo )</a></strong> 
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position:relative;top:-2px;">
                                            <span aria-hidden="true">&times;</span>
                                         </button>   
                                        </div>
                                    @endif
                                    @if(Auth::user()->news == 0)
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                          <strong><i class="mdi mdi-cube-send mr-0"></i> ¿Aceptas recibir notificaciones semanales con ofertas de empleo?</strong>
                                          <form action="/editUserNews" class="w-100 avatar" method="POST">
                                            @csrf
                                            <input type="hidden" name="news" value="1">
                                            <button type="submit" class="btn btn-info m-1" style="position: absolute;top: 0;right: 0;">
                                                Acepto
                                            </button>
                                          </form>
                                        </div>
                                    @endif
                                    @endauth

                                    <div class="col-sm-12 col-md-12 px-0 px-md-4 py-4 " style="/*background:#EFFBEA;*/border-radius: 20px;text-align:left;position:relative;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 pl-0 pr-0" style="display: flex;flex-wrap: wrap;">
                                                <div id="contImgPerf" class="col-sm-12 col-md-4 col-lg-4 p-0" style="text-align:center;">
                                                    <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:140px;height:140px; @if($user->plan == 'professional') border:4px solid #55c12e @elseif($user->plan == 'premium') border:4px solid #007bff @else border:4px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="freelancer {{$userName[0]}}">   
                                                    <p class="mb-1 mt-1" style="font-size:13px;font-weight: bold;"><i class="mdi mdi-octagram d-none" style="position: relative;top: -4px;"></i>
                                                        @if($user->countApp > 0)   
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Publicó en Home">
                                                                <i class="mdi mdi-tooltip-text" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @else
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:grey;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Sin Publicaciones en Home">
                                                                <i class="mdi mdi-message-bulleted-off" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @endif    
                                                        @if($user->email_verified_at != null)
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#63bd30;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Correo Verificado">
                                                                <i class="mdi mdi-checkbox-marked-circle" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @else    
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#bd3030;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Correo No Verificado">
                                                                <i class="mdi mdi-email-alert" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @endif 
                                                        @if($user->completeProfile == true)
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#63bd30;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Perfil Completado">
                                                                <i class="mdi mdi-account-check" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @else
                                                            <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#bd3030;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Perfil Incompleto">
                                                                <i class="mdi mdi-account-remove" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                            </span>
                                                        @endif                                                                                                                
                                                    </p>
                                                </div>
                                            
                                            
                                            <div class="col-sm-12 col-md-8 col-lg-5 pt-2 contData">  
                                                <h1>{{$userName[0]}} {{$userSurname}}</h1>                                                                                        
                                                <p class="mb-1"><i class="mdi mdi-map-marker"></i><span style="font-size:13px;font-weight:bold;"><a href="/freelancers/{{$linkCountry}}">{{$allCountries[$user->country]}}</a></span><i class="ml-1 flag-icon flag-icon-{{$user->country}}" title="{{$user->country}}" id="{{$user->country}}" style="position:relative;top:1px;"></i></p>
                                                <p class="mb-1" style="font-size:13px;font-weight:bold;"><i class="mdi mdi-account-circle"></i> Miembro desde {{$user->created}}</p>
                                                <p class="mb-1" style="font-size:13px;font-weight:bold;"><span style="position: relative;top:-5px;">Cuenta tipo ( {{$user->plan}} )</span>
                                                    @if($user->plan == 'free')
                                                        <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:grey;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario free">
                                                            <i class="mdi mdi mdi-ticket-account" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                        </span>
                                                    @elseif($user->plan == 'professional')
                                                        <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#63bd30;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario profesional">
                                                            <i class="mdi mdi mdi-medal" style="font-size: 15px;position: relative;top: -2.9px;left: -2.1px;"></i>
                                                        </span>
                                                    @elseif($user->plan == 'premium')
                                                        <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario premium">
                                                            <i class="mdi mdi mdi-trophy" style="font-size: 15px;position: relative;top: -2.4px;left: -1.9px;"></i>
                                                        </span>
                                                    @endif
                                                </p>   
                                                <p class="mb-0 mt-2 font-weight-bold">Porcentaje completado:</p>
                                                <div class="progress" style="width: 250px;text-align: center;height: 12px;border-radius:10px;background:#dde0e2;margin-top:2px;">
                                                    @if($user->profilePorcent <= 40)
                                                    <div class="progress-bar font-weight-bold" role="progressbar" style="width: {{$user->profilePorcent}}%;background:#ee4a4a;border-radius:10px;" aria-valuenow="{{$user->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$user->profilePorcent}}%</div>
                                                    @elseif($user->profilePorcent > 40 && $user->profilePorcent < 70)
                                                    <div class="progress-bar font-weight-bold" role="progressbar" style="width: {{$user->profilePorcent}}%;background:#ffc107;border-radius:10px;" aria-valuenow="{{$user->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$user->profilePorcent}}%</div>
                                                    @elseif($user->profilePorcent >= 70)
                                                    <div class="progress-bar bg-success font-weight-bold" role="progressbar" style="width: {{$user->profilePorcent}}%;border-radius:10px;" aria-valuenow="{{$user->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$user->profilePorcent}}%</div>
                                                    @endif
                                                </div> 
                                                <!-- boton contactar solo aparece en mobile -->
                                                <div id="contContactUser2" class="d-none col-md-3 pt-2 pl-0 pr-0 mt-2">
                                                @if($myprofile != true)
                                                  <a @if(! Auth::check()) href="/publicar" @endif class="btn btn-primary text-white">
                                                    <span class="pb-2 font-weight-bold">Contactar</span><i class="mdi mdi-message-text-outline ml-2 font-weight-bold" style="font-size: 17px !important;top: 1px;position: relative;"></i>
                                                  </a> 
                                                @endif
                                            </div>                                            
                                            </div>
                                            <!-- boton contactar solo en modo tablet y pc -->
                                            <div id="contContactUser" class="d-none col-md-3 pt-2 pl-2 pr-1">
                                                @if($myprofile != true)
                                                  <a @if(! Auth::check()) href="/publicar" @endif class="btn btn-primary w-100 text-white">
                                                    <span class="pb-2 font-weight-bold">Contactar</span><i class="mdi mdi-message-text-outline ml-2 font-weight-bold" style="font-size: 17px !important;top: 1px;position: relative;"></i>
                                                  </a> 
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-md-12 p-0 text-center">
                                                <h4 class="mt-5 mb-0" style="font-weight: 600;">Presentación <i class="mdi mdi-account-card-details"></i>
                                                    @if($myprofile == true)
                                                    <i id="editSignature" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar texto" style="font-size: 28px;color: #55c12e;position: relative;top: 4px;"></i>
                                                    @endif
                                                </h4>
                                                <div class="col-sm-12 pt-2 px-0">
                                                    <p id="textSignature" style="font-family: GeorgiaItalic;font-size:18px;margin-bottom:20px;min-height:48px;font-weight:500;background:#c8eab84a;padding: 10px;border-radius:4px;text-align:center;">"@if($user->signature != null){{$user->signature}}@else ... @endif"</p>                                               
                                                    @if($myprofile == true)
                                                    <div id="textareaSignature" style="display:none;">
                                                        <form action="/editProfile" method="POST">
                                                            @csrf
                                                            <textarea name="signature" class="form-control" rows="4" minlength="50" maxlength="255" placeholder="mínimo 50 caracteres, máximo 255 caracteres">{{$user->signature}}</textarea>
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="col-sm-12 pt-2 px-0">
                                                    <p class="font-weight-bold text-left mb-1"><i class="mdi mdi-web"></i> Portfolio externo o Web personal: (Agrega 1 link)@if($myprofile == true)<i id="editLink" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar enlace" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                    <p id="textLink" style="font-size:16px;min-height:50px;text-align:left;">
                                                        {!! $user->link == null ? '...' : '<a href="'.$user->link.'" rel="nofollow" target="_blank">'.$user->link.'</a>'!!}
                                                    </p>
                                                    @if($myprofile == true)
                                                    <div id="textareaLink" style="display:none;">
                                                        <form action="/editProfile" method="POST">
                                                            @csrf
                                                            <input type="text" name="link" value="{{$user->link}}" class="form-control font-weight-bold" minlength="8" maxlength="200" rows="4" placeholder="Link de Portfolio">
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </form>    
                                                    </div>
                                                    @endif
                                                </div>

                                                <p class="mb-2 font-weight-bold text-left"><i class="mdi mdi-lock-pattern"></i> Tecnologías y habilidades: @if($myprofile == true)<i id="editTec" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar habilidades" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                <div class="text-left">
                                                    @if($user->rubro == 'Programación Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Programación Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Wordpress')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Wordpress</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Apps Android, iOS')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Apps Android, IOS</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Aplicaciones de escritorio')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Aplicaciones de escritorio</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Diseño Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Diseño de Logo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de Logo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Ilustraciones')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ilustraciones</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Crear o editar audio, video')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Crear o editar audio, video</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Modelos 3D')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Modelos 3D</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Fotografía')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Fotografía</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Diseño de moda')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de moda</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Redacción y Traducción')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Redacción y Traducción</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Marketing Digital y Ventas')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Marketing Digital y Ventas</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'SEO')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">SEO</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Soporte Administrativo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Soporte Administrativo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Legal')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Legal</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Finanzas y Negocios')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Finanzas y Negocios</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro == 'Ingeniería y Arquitectura')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ingeniería y Arquitectura</span>                                                
                                                        </p>
                                                    @endif
                                                    <!-- Rubro 2 -->
                                                    @if($user->rubro2 == 'Programación Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Programación Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Wordpress')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Wordpress</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Apps Android, iOS')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Apps Android, IOS</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Aplicaciones de escritorio')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Aplicaciones de escritorio</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Diseño Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Diseño de Logo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de Logo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Ilustraciones')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ilustraciones</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Crear o editar audio, video')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Crear o editar audio, video</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Modelos 3D')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Modelos 3D</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Fotografía')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Fotografía</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Diseño de moda')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de moda</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Redacción y Traducción')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Redacción y Traducción</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Marketing Digital y Ventas')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Marketing Digital y Ventas</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'SEO')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">SEO</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Soporte Administrativo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Soporte Administrativo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Legal')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Legal</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Finanzas y Negocios')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Finanzas y Negocios</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro2 == 'Ingeniería y Arquitectura')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ingeniería y Arquitectura</span>                                                
                                                        </p>
                                                    @endif                                        
                                                    <!-- rubro 3 -->
                                                    @if($user->rubro3 == 'Programación Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Programación Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Wordpress')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Wordpress</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Apps Android, iOS')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Apps Android, IOS</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Aplicaciones de escritorio')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Aplicaciones de escritorio</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Diseño Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Diseño de Logo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de Logo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Ilustraciones')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ilustraciones</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Crear o editar audio, video')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Crear o editar audio, video</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Modelos 3D')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Modelos 3D</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Fotografía')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Fotografía</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Diseño de moda')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de moda</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Redacción y Traducción')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Redacción y Traducción</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Marketing Digital y Ventas')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Marketing Digital y Ventas</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'SEO')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">SEO</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Soporte Administrativo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Soporte Administrativo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Legal')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Legal</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Finanzas y Negocios')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Finanzas y Negocios</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro3 == 'Ingeniería y Arquitectura')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ingeniería y Arquitectura</span>                                                
                                                        </p>
                                                    @endif                                       
                                                    <!-- Rubro 4 -->
                                                    @if($user->rubro4 == 'Programación Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Programación Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Wordpress')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Wordpress</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Apps Android, iOS')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Apps Android, IOS</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Aplicaciones de escritorio')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Aplicaciones de escritorio</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Diseño Web')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño Web</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Diseño de Logo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de Logo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Ilustraciones')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ilustraciones</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Crear o editar audio, video')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Crear o editar audio, video</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Modelos 3D')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Modelos 3D</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Fotografía')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Fotografía</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Diseño de moda')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Diseño de moda</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Redacción y Traducción')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Redacción y Traducción</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Marketing Digital y Ventas')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Marketing Digital y Ventas</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'SEO')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">SEO</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Soporte Administrativo')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Soporte Administrativo</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Legal')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Legal</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Finanzas y Negocios')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Finanzas y Negocios</span>                                                
                                                        </p>
                                                    @endif
                                                    @if($user->rubro4 == 'Ingeniería y Arquitectura')
                                                        <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                
                                                            <span style="float: right;margin-top: 4px;margin-left:4px;margin-right:4px;">Ingeniería y Arquitectura</span>                                                
                                                        </p>
                                                    @endif 
                                                </div>                                                                                                                                                                         
                                            </div>
                                            @if($myprofile == true)
                                            <div id="textareaTec" style="display:none;" class="col-12 col-md- m-auto">
                                                <form action="/editProfile" method="POST">
                                                @csrf
                                                    @php
                                                      $iconRubro = '';
                                                      $iconRubro2 = '';
                                                      $iconRubro3 = '';
                                                      $iconRubro4 = '';
                                                        $icons = [
                                                            'Programación Web' => '<i class="mdi mdi-cloud-tags"></i>',
                                                            'Wordpress' => '<i class="mdi mdi-wordpress"></i>',
                                                            'Apps Android, iOS' => '<i class="mdi mdi-cellphone-iphone"></i>',
                                                            'Aplicaciones de escritorio' => '<i class="mdi mdi-code-array"></i>',
                                                            'Diseño Web' => '<i class="mdi mdi-palette-advanced"></i>',
                                                            'Diseño de Logo' => '<i class="mdi mdi-palette"></i>',
                                                            'Ilustraciones' => '<i class="mdi mdi-palette"></i>',
                                                            'Crear o editar audio, video' => '<i class="mdi mdi-file-video"></i>',
                                                            'Modelos 3D' => '<i class="mdi mdi-printer-3d"></i>',
                                                            'Fotografía' => '<i class="mdi mdi-film"></i>',
                                                            'Diseño de moda' => '<i class="mdi mdi-tshirt-crew"></i>',
                                                            'Redacción y Traducción' => '<i class="mdi mdi-xda"></i>',
                                                            'Marketing Digital y Ventas' => '<i class="mdi mdi-cart"></i>',
                                                            'SEO' => '<i class="mdi mdi-search-web"></i>',
                                                            'Soporte Administrativo' => '<i class="mdi mdi-desktop-mac"></i>',
                                                            'Legal' => '<i class="mdi mdi-script"></i>',
                                                            'Finanzas y Negocios' => '<i class="mdi mdi-chart-line-stacked"></i>',
                                                            'Ingeniería y Arquitectura' => '<i class="mdi mdi-ungroup"></i>',
                                                        ];
                                                        foreach ($icons as $key => $value) {
                                                            if(Auth::user()->rubro == $key){$iconRubro = $value;}
                                                            if(Auth::user()->rubro2 == $key){$iconRubro2 = $value;}
                                                            if(Auth::user()->rubro3 == $key){$iconRubro3 = $value;}
                                                            if(Auth::user()->rubro4 == $key){$iconRubro4 = $value;}
                                                        }
                                                      @endphp
                                                    <div class="list-group">
                                                      <button id="BtnRubro" type="button" class="list-group-item list-group-item-action">
                                                          {!! $iconRubro !!} {{Auth::user()->rubro}}
                                                      </button>


                                                      <div id="ContBtnRubro2">
                                                        <button id="BtnRubro2" type="button" class="list-group-item list-group-item-action" style="width: 85%;float: left;">@if(Auth::user()->rubro2 == null) # agregar </button> <button id="deleteRubro2" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@else {!! $iconRubro2 !!} {{Auth::user()->rubro2}} </button> <button id="deleteRubro2" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@endif
                                                      </div>
                                                      <div id="ContBtnRubro3">
                                                        <button id="BtnRubro3" type="button" class="list-group-item list-group-item-action" style="width: 85%;float: left;">@if(Auth::user()->rubro3 == null) # agregar </button> <button id="deleteRubro3" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@else {!! $iconRubro3 !!} {{Auth::user()->rubro3}} </button> <button id="deleteRubro3" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@endif
                                                      </div>
                                                      <div id="ContBtnRubro4">
                                                        <button id="BtnRubro4" type="button" class="list-group-item list-group-item-action" style="width: 85%;float: left;">@if(Auth::user()->rubro4 == null) # agregar </button> <button id="deleteRubro4" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@else {!! $iconRubro4 !!} {{Auth::user()->rubro4}} </button> <button id="deleteRubro4" type="button" class="btn btn-danger" style="width: 15%;height:50px;float: left;padding:10px 10px 10px 15px;"><i class="mdi mdi-close-circle" ></i></button>@endif
                                                      </div>
                                                    
                                                      <input type="hidden" id="rubro" name="rubro" value="{{Auth::user()->rubro}}" autocomplete="off">
                                                      <input type="hidden" id="rubro2" name="rubro2" value="{{Auth::user()->rubro2}}" autocomplete="off">
                                                      <input type="hidden" id="rubro3" name="rubro3" value="{{Auth::user()->rubro3}}" autocomplete="off">
                                                      <input type="hidden" id="rubro4" name="rubro4" value="{{Auth::user()->rubro4}}" autocomplete="off">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                </form>
                                            </div>
                                            @endif
                                            <!--
                                            <div class="col-4 col-md-2" style="background:silver">
                                                Ver pefil
                                            </div>  
                                        -->
                                            
                                            <div class="row">
                                                <div class="col-sm-12 pt-4">
                                                    <p class="font-weight-bold text-left mb-0"><i class="mdi mdi-account-box"></i> Sobre mi: @if($myprofile == true)<i id="editAbout" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar texto" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                    <p id="textAbout" style="font-size:16px;min-height:50px;text-align:left;">
                                                        {!! $user->about == null ? '...' : $user->about !!}
                                                    </p>
                                                    @if($myprofile == true)
                                                    <div id="textareaAbout" style="display:none;">
                                                        <form action="/editProfile" method="POST">
                                                            @csrf
                                                            <textarea name="about" class="form-control" rows="10" minlength="80" maxlength="600" placeholder="máximo 600 caracteres">{{ str_replace('<br />', '', $user->about)}}</textarea>
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-sm-12 pt-2">
                                                    <p class="font-weight-bold text-left mb-0"><i class="mdi mdi-file-restore"></i> Historia laboral: @if($myprofile == true)<i id="editHistory" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar texto" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                    <p id="textHistory" style="font-size:16px;min-height:80px;text-align:left;">
                                                        {!! $user->history == null ? '...' : $user->history !!}
                                                    </p>
                                                    @if($myprofile == true)
                                                    <div id="textareaHistory" style="display:none;">
                                                        <form action="/editProfile" method="POST">
                                                            @csrf
                                                            <textarea name="history" class="form-control" minlength="80" maxlength="600" rows="10" placeholder="máximo 600 caracteres">{{ str_replace('<br />', '', $user->history)}}</textarea>
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </form>    
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-sm-12 pt-2">
                                                    <p class="font-weight-bold text-left mb-2"><i class="mdi mdi-camera-burst"></i> Muestra de mis trabajos: @if($myprofile == true)<i id="editImagesWork" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar trabajos" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                    @if($myprofile == true)
                                                    <p class="mb-3">Agrega impresiones de pantalla o imágenes de tus trabajos realizados</p>
                                                    @endif
                                                    <div id="textImagesWork" style="font-size:16px;min-height:80px;text-align:left;">
                                                        @if($user->image_work1 == null)
                                                            ... 
                                                        @else
                                                        <div class="row">

                                                            <!-- START GALERY FOTOS -->
                                                            <div class="row-gal mt-0">
                                                              <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">
                                                                  @if($user->image_work1 != null)
                                                                  <a href="/images/images_works/{{$user->image_work1}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work1}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work1}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work2 != null)
                                                                  <a href="/images/images_works/{{$user->image_work2}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work2}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work2}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work3 != null)
                                                                  <a href="/images/images_works/{{$user->image_work3}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work3}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work3}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work4 != null)
                                                                  <a href="/images/images_works/{{$user->image_work4}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work4}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work4}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work5 != null)
                                                                  <a href="/images/images_works/{{$user->image_work5}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work5}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work5}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work6 != null)
                                                                  <a href="/images/images_works/{{$user->image_work6}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work6}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work6}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work7 != null)
                                                                  <a href="/images/images_works/{{$user->image_work7}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work7}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work7}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work8 != null)
                                                                  <a href="/images/images_works/{{$user->image_work8}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work8}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work8}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work9 != null)
                                                                  <a href="/images/images_works/{{$user->image_work9}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work9}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work9}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work10 != null)
                                                                  <a href="/images/images_works/{{$user->image_work10}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work10}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work10}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work11 != null)
                                                                  <a href="/images/images_works/{{$user->image_work11}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work11}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work11}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                                  @if($user->image_work12 != null)
                                                                  <a href="/images/images_works/{{$user->image_work12}}" data-size="1600x1068" data-med="/images/images_works/{{$user->image_work12}}" data-med-size="1024x683" data-author="">
                                                                    <img class="imgGal" src="/images/images_works/{{$user->image_work12}}" alt="trabajo 1 de {{$userName[0]}}">
                                                                    <!--<figure>{{$key}}</figure>-->
                                                                  </a>
                                                                  @endif
                                                              </div>
                                                              <!-- <figure class="demo-gallery__title">Demo gallery &middot; 5 photos</figure> -->

                                                              <div class="style-select"></div> 
                                                              <section class="team assigned mt-0 mb-5 col-12 white"></section>
                                                            </div>    
                                                            <!-- END SECTION GALERY -->
                                                                                                                                                                                                            
                                                       </div>
                                                        
                                                        @endif
                                                    </div>
                                                    @if($myprofile == true)
                                                    <div id="textareaImagesWork" style="display:none;">
                                                        <div class="alert alert-info font-weight-bold" role="alert"><i class="mdi mdi-clippy"></i>Haz Click dentro de la imagen para reemplazarla</div>
                                                        <form action="/editProfile" method="POST">
                                                            @csrf
                                                            <div class="row" style="padding-right: 0.7rem !important;">
                                                                <!-- edit image --->  
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work1 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work1 }}" />                                                                 
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work1" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work2 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work2 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work2" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work3 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work3 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work3" />
                                                                    </div>
                                                                </div>                                                      
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work4 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work4 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work4" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="padding-right: 0.7rem !important;">
                                                                <!-- edit image --->  
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work5 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work5 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work5" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work6 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work6 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work6" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work7 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work7 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work7" />
                                                                    </div>
                                                                </div>                                                      
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work8 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work8 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work8" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work9 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work9 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work9" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work10 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work10 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work10" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work11 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work11 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work11" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 pr-0">                                 
                                                                    <div id="slim" class="slim mb-2 p-2" 
                                                                         data-button-edit-title="Editar"
                                                                         data-button-remove-title="Borrar"
                                                                         data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                                                         data-ratio="5:3"
                                                                         data-size="1000,600"
                                                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                                                         data-meta-user-id="1" >
                                                                         @if($user->image_work12 != null)
                                                                         <img src="/images/images_works/{{ $user->image_work12 }}" />
                                                                         @endif
                                                                         <input type="file" id="image" name="image_work12" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </form>    
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-sm-12 pt-2 pb-5">
                                                    <p class="font-weight-bold text-left mb-2"><i class="mdi mdi-spellcheck"></i> Idiomas: @if($myprofile == true)<i id="editLanguages" class="mdi mdi-pencil-circle" data-toggle="tooltip" data-placement="right" title="Editar idiomas" style="font-size: 28px;color: #55c12e;top: 4px;position: relative;"></i>@endif</p>
                                                    <div id="textLanguages" class="text-left">
                                                        @if($user->language1 != null)
                                                        <p style="font-size:16px;margin-bottom:5px;">
                                                            <strong>{{ $user->language1 }}</strong> : {{ $user->language1_level }}
                                                        </p> 
                                                        @endif 
                                                        @if($user->language2 != null)
                                                        <p style="font-size:16px;margin-bottom:5px;">  
                                                            <strong>{{ $user->language2 }}</strong> : {{ $user->language2_level }}
                                                        </p>
                                                        @endif
                                                        @if($user->language3 != null)
                                                        <p style="font-size:16px;margin-bottom:5px;">    
                                                            <strong>{{ $user->language3 }}</strong> : {{ $user->language3_level }}
                                                        </p>
                                                        @endif
                                                        @if($user->language4 != null)
                                                        <p style="font-size:16px;margin-bottom:5px;">    
                                                            <strong>{{ $user->language4 }}</strong> : {{ $user->language4_level }}
                                                        </p>
                                                        @endif
                                                        @if($user->language5 != null)
                                                        <p style="font-size:16px;margin-bottom:5px;">    
                                                            <strong>{{ $user->language5 }}</strong> : {{ $user->language5_level }}
                                                        </p>
                                                        @endif
                                                    </div>
                                                    @if($myprofile == true)
                                                    <div id="textareaLanguages" style="display:none;" >
                                                        <form action="/editProfile" method="POST">
                                                        @csrf
                                                        <div class="form-group row px-1">
                                                            <select name="language1" class="form-control font-weight-bold col-5 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="Español" {{ $user->language1 == 'Español' ? 'selected' : '' }} selected>Español</option>
                                                                <option value="Inglés" {{ $user->language1 == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                                                <option value="Italiano" {{ $user->language1 == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                                                                <option value="Francés" {{ $user->language1 == 'Francés' ? 'selected' : '' }}>Francés</option>
                                                                <option value="Alemán" {{ $user->language1 == 'Alemán' ? 'selected' : '' }}>Alemán</option>
                                                            </select>
                                                            <label style="padding-top: 6px;margin: 0px;"><i class="mdi mdi-arrow-right-box" style="font-size:20px;"></i></label>
                                                            <select name="language1_level" class="form-control font-weight-bold col-6 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="Lengua Materna" {{ $user->language1_level == 'Lengua Materna' ? 'selected' : '' }} selected>Lengua Materna</option>
                                                                <option value="Nivel Básico" {{ $user->language1_level == 'Nivel Básico' ? 'selected' : '' }}>Nivel Básico</option>
                                                                <option value="Nivel pre-intermedio" {{ $user->language1_level == 'Nivel pre-intermedio' ? 'selected' : '' }}>Nivel pre-intermedio</option>
                                                                <option value="Nivel intermedio" {{ $user->language1_level == 'Nivel intermedio' ? 'selected' : '' }}>Nivel intermedio</option>
                                                                <option value="Nivel avanzado" {{ $user->language1_level == 'Nivel avanzado' ? 'selected' : '' }}>Nivel avanzado</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group row px-1">
                                                            <select name="language2" class="form-control font-weight-bold col-5 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Español" {{ $user->language2 == 'Español' ? 'selected' : '' }}>Español</option>
                                                                <option value="Inglés" {{ $user->language2 == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                                                <option value="Italiano" {{ $user->language2 == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                                                                <option value="Francés" {{ $user->language2 == 'Francés' ? 'selected' : '' }}>Francés</option>
                                                                <option value="Alemán" {{ $user->language2 == 'Alemán' ? 'selected' : '' }}>Alemán</option>
                                                            </select>
                                                            <label style="padding-top: 6px;margin: 0px;"><i class="mdi mdi-arrow-right-box" style="font-size:20px;"></i></label>
                                                            <select name="language2_level" class="form-control font-weight-bold col-6 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Lengua Materna" {{ $user->language2_level == 'Lengua Materna' ? 'selected' : '' }}>Lengua Materna</option>
                                                                <option value="Nivel Básico" {{ $user->language2_level == 'Nivel Básico' ? 'selected' : '' }}>Nivel Básico</option>
                                                                <option value="Nivel pre-intermedio" {{ $user->language2_level == 'Nivel pre-intermedio' ? 'selected' : '' }}>Nivel pre-intermedio</option>
                                                                <option value="Nivel intermedio" {{ $user->language2_level == 'Nivel intermedio' ? 'selected' : '' }}>Nivel intermedio</option>
                                                                <option value="Nivel avanzado" {{ $user->language2_level == 'Nivel avanzado' ? 'selected' : '' }}>Nivel avanzado</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group row px-1">
                                                            <select name="language3" class="form-control font-weight-bold col-5 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Español" {{ $user->language3 == 'Español' ? 'selected' : '' }}>Español</option>
                                                                <option value="Inglés" {{ $user->language3 == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                                                <option value="Italiano" {{ $user->language3 == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                                                                <option value="Francés" {{ $user->language3 == 'Francés' ? 'selected' : '' }}>Francés</option>
                                                                <option value="Alemán" {{ $user->language3 == 'Alemán' ? 'selected' : '' }}>Alemán</option>
                                                            </select>
                                                            <label style="padding-top: 6px;margin: 0px;"><i class="mdi mdi-arrow-right-box" style="font-size:20px;"></i></label>
                                                            <select name="language3_level" class="form-control font-weight-bold col-6 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Lengua Materna" {{ $user->language4_level == 'Lengua Materna' ? 'selected' : '' }}>Lengua Materna</option>
                                                                <option value="Nivel Básico" {{ $user->language4_level == 'Nivel Básico' ? 'selected' : '' }}>Nivel Básico</option>
                                                                <option value="Nivel pre-intermedio" {{ $user->language4_level == 'Nivel pre-intermedio' ? 'selected' : '' }}>Nivel pre-intermedio</option>
                                                                <option value="Nivel intermedio" {{ $user->language4_level == 'Nivel intermedio' ? 'selected' : '' }}>Nivel intermedio</option>
                                                                <option value="Nivel avanzado" {{ $user->language4_level == 'Nivel avanzado' ? 'selected' : '' }}>Nivel avanzado</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group row px-1">
                                                            <select name="language4" class="form-control font-weight-bold col-5 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Español" {{ $user->language4 == 'Español' ? 'selected' : '' }}>Español</option>
                                                                <option value="Inglés" {{ $user->language4 == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                                                <option value="Italiano" {{ $user->language4 == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                                                                <option value="Francés" {{ $user->language4 == 'Francés' ? 'selected' : '' }}>Francés</option>
                                                                <option value="Alemán" {{ $user->language4 == 'Alemán' ? 'selected' : '' }}>Alemán</option>
                                                            </select>
                                                            <label style="padding-top: 6px;margin: 0px;"><i class="mdi mdi-arrow-right-box" style="font-size:20px;"></i></label> 
                                                            <select name="language4_level" class="form-control font-weight-bold col-6 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Lengua Materna" {{ $user->language4_level == 'Lengua Materna' ? 'selected' : '' }}>Lengua Materna</option>
                                                                <option value="Nivel Básico" {{ $user->language4_level == 'Nivel Básico' ? 'selected' : '' }}>Nivel Básico</option>
                                                                <option value="Nivel pre-intermedio" {{ $user->language4_level == 'Nivel pre-intermedio' ? 'selected' : '' }}>Nivel pre-intermedio</option>
                                                                <option value="Nivel intermedio" {{ $user->language4_level == 'Nivel intermedio' ? 'selected' : '' }}>Nivel intermedio</option>
                                                                <option value="Nivel avanzado" {{ $user->language4_level == 'Nivel avanzado' ? 'selected' : '' }}>Nivel avanzado</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group row px-1">
                                                            <select name="language5" class="form-control font-weight-bold col-5 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Español" {{ $user->language5 == 'Español' ? 'selected' : '' }}>Español</option>
                                                                <option value="Inglés" {{ $user->language5 == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                                                <option value="Italiano" {{ $user->language5 == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                                                                <option value="Francés" {{ $user->language5 == 'Francés' ? 'selected' : '' }}>Francés</option>
                                                                <option value="Alemán" {{ $user->language5 == 'Alemán' ? 'selected' : '' }}>Alemán</option>
                                                            </select>
                                                            <label style="padding-top: 6px;margin: 0px;"><i class="mdi mdi-arrow-right-box" style="font-size:20px;"></i></label>
                                                            <select name="language5_level" class="form-control font-weight-bold col-6 col-md-4" style="color:#4d9f2f;" autocomplete="off">
                                                                <option value="" selected>Selecciona uno</option>
                                                                <option value="Lengua Materna" {{ $user->language5_level == 'Lengua Materna' ? 'selected' : '' }}>Lengua Materna</option>
                                                                <option value="Nivel Básico" {{ $user->language5_level == 'Nivel Básico' ? 'selected' : '' }}>Nivel Básico</option>
                                                                <option value="Nivel pre-intermedio" {{ $user->language5_level == 'Nivel pre-intermedio' ? 'selected' : '' }}>Nivel pre-intermedio</option>
                                                                <option value="Nivel intermedio" {{ $user->language5_level == 'Nivel intermedio' ? 'selected' : '' }}>Nivel intermedio</option>
                                                                <option value="Nivel avanzado" {{ $user->language5_level == 'Nivel avanzado' ? 'selected' : '' }}>Nivel avanzado</option>
                                                            </select>
                                                        </div>
                                                        <div class="row px-1">
                                                            <button type="submit" class="btn btn-primary w-100">Guardar Cambios <i class="mdi mdi-content-save"></i></button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                @endif
                                                 
                                            </div>

                                            <!-- AddToAny BEGIN -->
                                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style m-auto">
                                                <h4>Compartir Perfil</h4>
                                            <a class="a2a_dd" href="https://heiwork.com/freelancer/{{$user->code}}"></a>
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_whatsapp"></a>
                                            <a class="a2a_button_twitter"></a>
                                            <a class="a2a_button_pinterest"></a>
                                            <a class="a2a_button_linkedin"></a>
                                            <a class="a2a_button_google_gmail"></a>
                                            <a class="a2a_button_telegram"></a>
                                            </div>
                                            <script>
                                            var a2a_config = a2a_config || {};
                                            a2a_config.locale = "es";
                                            </script>
                                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                                            <!-- AddToAny END -->
                                            

<!-- cuadrado -->
<!-- horizontal perfil -->
<!--
<div class="mt-5" style="width:100%;height:340px !important;">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="4440482582"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>-->


                                        </div>
                                    </div>
                                </div>


                                </div>
                            </div>
                          </div>
                      </div>

                 @if(!Auth::check() || $myprofile != true)
                    </div>                          
                </div>  
                @endif

                <!-- end card principal perfil -->
                <!-- lateral drecho -->   
                <div class="d-none d-lg-block col-md-3 col-lg-22 pl-1">
                    <div class="grid-margin stretch-card p-0 mb-2 m-auto" style="margin-bottom: 15px !important;">           
                          <div class="card" style="border-radius:0px;border-radius:10px;">
                            <div class="card-body pt-3 pb-3">

<!-- vetical 220 x 400 -->
<!--
<ins class="adsbygoogle"
     style="display:inline-block;width:220px;height:400px"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="1404397345"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>-->

                                <h4 class="text-center">Publica en nuestra Home <i class="mdi mdi-sticker-emoji"></i></h4>
                                <p class="text-center mb-1">Publica sin costo tus habilidades en nuestra Home para <strong>ganar visibilidad</strong>, o si tienes un proyecto y estas en busca de un freelancer publica también sin costo.</p>
                                <a class="btn btn-primary btn-block text-white mb-3" href="/publicar" style="font-size:18px;">Publicar <i class="mdi mdi-plus-circle-outline ml-1" style="margin-left:0.5px;"></i></a>
                                
                                @guest
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
                                @endguest

                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end lateral -->
 
            </div>    
        </div>


       </div>
    </div> 




        <!-- Modal Select Rubro -->
        <div class="modal fade" id="modalRubro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Selecciona uno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="col-12">
                <div class="row">
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-cloud-tags" title="Programación Web" id="Programación Web" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Programación Web</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-wordpress" title="Wordpress" id="Wordpress" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Wordpress</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-cellphone-iphone" title="Apps Android, iOS" id="Apps Android, iOS" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Apps Android, iOS</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-code-array" title="Aplicaciones de escritorio" id="Aplicaciones de escritorio" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Aplicaciones de escritorio</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-palette-advanced" title="Diseño Web" id="Diseño Web" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Diseño Web</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-palette" title="Diseño de Logo" id="Diseño de Logo" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Diseño de Logo</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-palette" title="Ilustraciones" id="Ilustraciones" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Ilustraciones</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-file-video" title="Crear o editar video" id="Crear o editar audio, video" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Crear o editar audio, video</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-printer-3d" title="Modelos 3D" id="Modelos 3D" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Modelos 3D</p>
                </button> 
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-film" title="Fotografía" id="Fotografía" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Fotografía</p>
                </button> 
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-tshirt-crew" title="Diseño de moda" id="Diseño de moda" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Diseño de moda</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-xda" title="Redacción y Traducción" id="Redacción y Traducción" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Redacción y Traducción</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-cart" title="Marketing Digital y Ventas" id="Marketing Digital y Ventas" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Marketing Digital y Ventas</p>
                </button>
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-search-web" title="SEO" id="SEO" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">SEO</p>
                </button>  
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-desktop-mac" title="Soporte Administrativo" id="Soporte Administrativo" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Soporte Administrativo</p>
                </button> 
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-script" title="Legal" id="Legal" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Legal</p>
                </button> 
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-chart-line-stacked" title="Finanzas y Negocios" id="Finanzas y Negocios" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Finanzas y Negocios</p>
                </button> 
                <button class="btnRubro btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 mdi mdi-ungroup" title="Ingeniería y Arquitectura" id="Ingeniería y Arquitectura" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Ingeniería y Arquitectura</p>
                </button> 
                </div>     
                </div>                                                                                                                                                                        
              </div>
              <!--
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            -->
            </div>
          </div>
        </div>
        <!--- end rubro -->


        <!-- DESPLIEGUE DE GALERIA (FOTO EXPANDIDA) -->
        <div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>

            <div class="pswp__scroll-wrap">

              <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
              </div>

              <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip">
                        <!-- <a href="#" class="pswp__share--facebook"></a>
                        <a href="#" class="pswp__share--twitter"></a>
                        <a href="#" class="pswp__share--pinterest"></a>
                        <a href="#" download class="pswp__share--download"></a> -->
                    </div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                  <div class="pswp__caption__center">
                  </div>
                </div>
              </div>

            </div>
        </div>    
        <!-- END GALERIA -->

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