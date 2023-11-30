@extends('layouts.web')
@section('head')
    @php
        $cita = strip_tags($application->text);//sin html
        $cita = substr($cita,0,148);//cortamos menor a 160
        $cita = substr($cita, 0, strrpos($cita, ' '));//evita cortar palabras
    @endphp        
    <title>HeiWork | {{$application->title}}</title>
    <link rel="canonical" href="{{URL::current()}}">
    <meta name="description" content="{{$cita}}">
    <meta name="keywords" content="oferta, trabajo, empleo, propuesta, online, remoto, freelance, heiwork.com">

    <meta name="apple-mobile-web-app-title" content="Freelancers">
    <meta name="application-name" content="Freelancers">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content=" #ffffff">
    <meta property="og:site_name" content="HEIWORK">
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:image" content="https://heiwork.com/images/users/{{($user->image == null ? 'ofw.png' : 'ofw.png')}}">
    <meta property="og:title" content="SE BUSCA: {{$application->title}} | Heiwork.com | Trabajo online">
    <meta property="og:description" content="{{$cita}}">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="138224130427286">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{$cita}}" />
    <meta name="twitter:title" content="SE BUSCA: {{$application->title}} | Heiwork.com | Trabajo online" />
    <meta name="twitter:image" content="https://heiwork.com/images/users/{{($user->image == null ? 'ofw.png' : 'ofw.png')}}" />

<!-- Adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4949713421471029"
     crossorigin="anonymous"></script>
<style>
    #lateralIz{
      padding: 20px 20px !important;
      min-width:300px;
    }
    h1{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 32px !important;
        color: #3d3d3d !important;
        line-height: 1.2em !important;
        margin: auto !important;
    }

    h2{
        font-size: 24px !important;
    }
    h3{
        font-size: 1.40rem !important;
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
    #contPostulants > .rowPostulants:nth-child(odd){ 
        background: #f2f2f2 !important;
    }
    .latestCard:hover{
        background:#e7ffd9;
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
        /*overflow: hidden;*/
    }
    h1{
        font-size: 1.4rem !important;
    }
}

/******* scroll vertical usuarios ***/

.tagline {
  margin: 10px 0 0;
  text-align: center;
}

.tagline,
.tagline a {
  color: #aaa;
  text-decoration: none;
}

ul.container {
  width: 100px;
  padding: 0;
  background: #f7f7f7;
  /*margin: 50px auto 0;*/
  border: 10px solid #fff;
  border-radius:20px;
  box-shadow: 0px 2px 3px #eaeaea;
  position: fixed;
  /*z-index: 9;
  right:3%;*/
}

ul.container li {
  background: #f7f7f7;
  color: #ddd;
  list-style-type: none;
  padding: 0;
  margin: 0;
  transition: background-color 0.5s;
  text-align: center;
}

ul.container li:nth-child(2) {
  color: #fff;
  background: #a8e892;
  border-radius: 4px;
}

@media (max-width: 776px){
    .middle-section{
        padding-top: 5px !important;
    }
    h1{
        margin: auto;
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
    .contCard{
        padding: 0px 0.35rem !important;
    }
}
/*** end scroll vertical **/

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
</style>
@endsection

@php
$userName = explode(' ',$user->name);

$icons = [
        'Programación Web' => '<i class="mdi mdi-cloud-tags" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Wordpress' => '<i class="mdi mdi-wordpress" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Apps Android, iOS' => '<i class="mdi mdi-cellphone-iphone" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Aplicaciones de escritorio' => '<i class="mdi mdi-code-array" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Diseño Web' => '<i class="mdi mdi-palette-advanced" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Diseño de Logo' => '<i class="mdi mdi-palette" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Ilustraciones' => '<i class="mdi mdi-palette" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Crear o editar audio, video' => '<i class="mdi mdi-file-video" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Modelos 3D' => '<i class="mdi mdi-printer-3d" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Fotografía' => '<i class="mdi mdi-film" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Diseño de moda' => '<i class="mdi mdi-tshirt-crew" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Redacción y Traducción' => '<i class="mdi mdi-xda" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Marketing Digital y Ventas' => '<i class="mdi mdi-cart" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'SEO' => '<i class="mdi mdi-search-web" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Soporte Administrativo' => '<i class="mdi mdi-desktop-mac" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Legal' => '<i class="mdi mdi-script" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Finanzas y Negocios' => '<i class="mdi mdi-chart-line-stacked" style="font-size:16px;position: relative;top: 1.2px;"></i>',
        'Ingeniería y Arquitectura' => '<i class="mdi mdi-ungroup" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    ];
$iconCatApp = '';    
foreach ($icons as $key => $value) {
    if($application->category == $key){
        $iconCatApp = $value;
    }
}
if($application->category == 'Marketing Digital y Ventas'){
    $categoryName = 'Marketing';
}else if($application->category == 'Aplicaciones de escritorio'){
    $categoryName = 'Aplicaciones esc';
}else if($application->category == 'Redacción y Traducción'){
    $categoryName = 'Redacción y Trad';
}else if($application->category == 'Soporte Administrativo'){
    $categoryName = 'Administrativo';
}else if($application->category == 'Finanzas y Negocios'){
    $categoryName = 'Negocios';
}else if($application->category == 'Ingeniería y Arquitectura'){
    $categoryName = 'Ing & Arquitectura';
}else if($application->category == 'Crear o editar audio, video'){
    $categoryName = 'Audio, video';
}else{
    $categoryName = $application->category;
}
@endphp

@section('content')

    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:20px;">

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
                @if(Cookie::get('ocultBoxHome') != 1)
                <div class="d-none d-lg-block col-md-4 col-lg-3 pr-0" id="contTextBox">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card cardInfo" style="border-radius:20px;">
                        <div class="card-body" style="padding:0.7rem !important">
                            
                                

<!-- vetical 220 x 400 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:220px;height:400px"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="1404397345"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                                                         
                           
                        </div>
                      </div>   
                    </div>
                </div>
                @endif
                <div class="col-md-10 col-lg-7 contCard">
                    
     
                    <div class="col-lg-12 p-0">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card cardInfo" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-4">
                            <div class="row" style="min-height:600px;">                                                    
                                @php
                                    $userName = explode(' ',$user->name);
                                @endphp
                                
                                <div class="col-4 col-md-2 pr-0 pl-sm-0 pl-0 text-center">
                                    <div style="width: ;width: 90px;margin: auto;position: relative;">
                                    @if($user->email_verified_at != null)
                                        <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#63bd30;position: absolute;right:1px;top:24px;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Correo Verificado">
                                            <i class="mdi mdi-checkbox-marked-circle" style="font-size: 15px;position: relative;top: -2.8px;left: -2.2px;"></i>
                                        </span>
                                    @endif    
                                    @if($user->plan == 'professional')
                                        <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#55c12e;position: absolute;right:1px;top: 47px;border: 1px solid #458e2b;" data-toggle="tooltip" data-placement="top" title="Usuario profesional">
                                            <i class="mdi mdi-medal"></i>
                                        </span>
                                    @elseif($user->plan == 'premium')
                                        <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;position: absolute;right:1px;top: 47px;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario premium">
                                            <i class="mdi mdi-trophy"></i>
                                        </span>
                                    @endif
                                    <a href="/freelancer/{{$user->code}}">
                                    <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:60px;height:60px; @if($user->plan == 'professional') border:3px solid #55c12e @elseif($user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                    </a>
                                    </div>
                                    <p class="font-weight-bold communityNameUS mb-0"><span><a href="/freelancer/{{$user->code}}">{{substr($userName[0],0,9)}}</a></span><a href="#"><i class="ml-1 flag-icon flag-icon-{{$user->country}}" title="{{$user->country}}" id="{{$user->country}}" style="position:relative;top:1px;"></i></a></p>
                                </div>
                                <div class="col-8 col-md-10 pl-1 pl-sm-2 text-left">
                                    <div class="py-2">
                                        <span class="float-right pr-2" style="margin-bottom:2px !important;color:black;top:2px;right:17px;font-weight:bold;">Publicado hace {{$application->diff}}</span>                                                                                 
                                    @if($application->expire == 'cerrado' || $application->active == 0)
                                        <span class="badge badge-pill badge-danger font-weight-bold" style="vertical-align:top;"><i class="mdi mdi-clock-alert"></i> El proyecto esta Cerrado</span><!--<span class="badge badge-pill badge-info ml-1 font-weight-bold" style="background:#5090b9;border-color:#286ba7;"><i class="mdi mdi-clock"></i> Proyecto finalizado</span>-->
                                    @else
                                        <span class="badge badge-primary font-weight-bold" style="vertical-align:top;"><i class="mdi mdi-checkbox-marked-circle"></i> Abierto</span><span class="badge badge-pill badge-info ml-1 font-weight-bold" style="background:#5090b9;border-color:#286ba7;vertical-align:top;min-width:130px;"><i class="mdi mdi-clock"></i> Cierra en {{$application->expire}}</span>
                                    @endif
                                    </div>
                                    <div class="col-12">
                                    <div class="row">
                                        <div class="mb-0 col-6 col-md-6 cont2 text-center "  data-toggle="tooltip" data-placement="bottom" title="Presupuesto estimado en dólares EEUU" style="cursor:pointer;border:1px solid #28a745;border-radius:4px;padding: 4px;font-size: 8px;background: #e7ffd9;color:#28a745;font-weight: bold;">
                                            <p class="m-0" style="font-size: 10px;font-weight: bold;">Presupuesto</p>
                                            <p class="m-0" style="font-size:13px;font-weight:bold;">{{$application->money}}</p>
                                        </div>
                                        <div class="mb-0 col-6 col-md-6 cont1 text-center " style="padding:4px;font-size:0.8rem;color:#286ba7;cursor:pointer;background: #ebf3ff;border:1px solid;border-radius:4px;font-weight:bold;right:-2px"  data-toggle="tooltip" data-placement="bottom" title="Ofrece empleo">
                                            <p class="m-0 prioridad" style="font-size: 10px;font-weight: bold;" >Trabajo Tipo</p>
                                            <p class="m-0" style="font-size:13px;font-weight:bold;"><i class="mdi mdi-eye"></i> Remoto</p>
                                        </div>
                                    </div> 
                                    </div>  
                                </div>

                                <div class="col-12 mt-2">
                                  <p class="pt-2 mb-0" style="font-size: 14px;color:#34373c;">
                                    <h1 class="mb-1 font-weight-bold">{{$application->title}}</h1>
                                    <div style="font-size:16px;margin-bottom:10px;font-weight: 400;">{!!$application->text!!}</div>
                                    <p data-toggle="tooltip" data-html="true" title="<em><b>{{count($application->messages)}} propuestas enviadas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 12px;width:max-content;margin:0px;display:inline-block;"><i class="mdi mdi-account"></i> {{count($application->messages)}}</p>
                                    <p class="category" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;left:80px;margin:0px;display:inline-block;">{!! $iconCatApp !!} {{$categoryName}}</p>
                                    <!--
                                    @auth
                                        @if($user->id != Auth::user()->id)
                                            @if(count($application->messages) > 0)
                                                @php
                                                    $exist = false;
                                                @endphp
                                                @foreach($application->messages as $message)
                                                    @if(in_array(Auth::user()->id ,json_decode($message,TRUE)))
                                                        @php $exist = true; @endphp
                                                    @endif    
                                                @endforeach 
                                                @if($exist == true)
                                                <button type="button" data-toggle="tooltip" data-html="true" title="Tu propuesta ha sido enviada, espera la respuesta del usuario para continuar" style="background:#b8e5ea;color:blue;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                    <i class="mdi mdi-check" style="font-size: 18px;position: relative;top: -3px;"></i>
                                                </button>
                                                @else
                                                    @if($application->active == 1)
                                                        <button type="button" data-toggle="modal" data-target="#modalResponse{{$application->id}}" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                            <i class="mdi mdi-comment-processing-outline" style="font-size: 18px;position: relative;top: -3px;"></i>
                                                        </button>
                                                    @else
                                                        <button type="button" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                            <i class="mdi mdi-close" style="font-size: 18px;position: relative;top: -4px;"  data-toggle="tooltip" data-html="true" title="Proyecto Cerrado"></i>
                                                        </button>    
                                                    @endif
                                                @endif
                                            @else
                                                @if($application->active == 1)
                                                    <button type="button" data-toggle="modal" data-target="#modalResponse{{$application->id}}" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                        <i class="mdi mdi-comment-processing-outline" style="font-size: 18px;position: relative;top: -3px;"></i>
                                                    </button>
                                                @else
                                                    <button type="button" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                        <i class="mdi mdi-close" style="font-size: 18px;position: relative;top: -4px;"  data-toggle="tooltip" data-html="true" title="Proyecto Cerrado"></i>
                                                    </button>  
                                                @endif
                                            @endif 
                                        @else
                                            @if($application->active == 1)
                                                <button type="button" data-toggle="modal" data-target="#modalCanelApp{{$application->id}}" style="background:#eab8b8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                    <i class="mdi mdi-close" style="color: red;font-size: 18px;position: relative;top: -4px;"  data-toggle="tooltip" data-html="true" title="Cerrar Proyecto"></i>
                                                </button>  
                                            @else
                                                <button type="button" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                    <i class="mdi mdi-close" style="color: red;font-size: 18px;position: relative;top: -4px;"  data-toggle="tooltip" data-html="true" title="Proyecto Cerrado"></i>
                                                </button> 
                                            @endif        
                                        @endif
                                    @endauth
                                    @guest
                                        @if($application->active == 1)
                                            <button type="button" class="btnWrite" data-toggle="tooltip" data-html="true" title="Inicia sesión para aplicar a esta oferta" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:80px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                <i class="mdi mdi-comment-processing-outline" style="font-size: 18px;position: relative;top: -3px;"></i>
                                            </button>
                                        @else
                                            <button type="button" data-toggle="tooltip" data-html="true" title="Proyecto Cerrado" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                <i class="mdi mdi-close" style="font-size: 18px;position: relative;top: -3px;"></i>
                                            </button>
                                        @endif    
                                    @endguest
                                -->
                                  </p>
                                </div>
                                <div class="col-12 col-md-12 px-0 px-md-3 py-2 mb-4" style="/*background:#EFFBEA;*/border-radius: 20px;text-align:left;position:relative;">
                                    <!-- ads -->
<!-- horizontal1 -->
<!--
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="1812048302"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
                                    <!-- ads -->
                                    @if($application->expire == 'cerrado' || $application->active == 0)
                                        <div class="alert alert-warning font-weight-bold" role="alert" style="font-size:12px;">
                                          <span style="color:#ca4343">Proyecto Cerrado !!</span> No admite nuevas inscripciones! 
                                        </div>
                                    @else
                                        @auth
                                        <button data-toggle="modal" data-target="#modalResponse{{$application->id}}" class="btn btn-primary btn-block mb-3 mt-2" style="box-shadow:0px 6px 10px rgba(0, 0, 0, 0.1);height:50px;font-size:17px;">INSCRIBIRME AL EMPLEO</button>
                                        @else
                                        <a data-toggle="modal" data-target="#modalLogin" class="btn btn-primary btn-block mb-3 mt-2 pt-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Inicia sesión para aplicar a esta oferta"  style="box-shadow:0px 6px 10px rgba(0, 0, 0, 0.1);height:50px;font-size:17px;">INSCRIBIRME AL EMPLEO</a>
                                        @endauth
                                    @endif    

                                    @if(count($application->messages) > 0)
                                    <h3>Freelancers inscriptos:</h3>
                                    @endif

                                    <!-- postulados -->
                                    <div id="contPostulants">
                                    @foreach($application->messages as $key => $userMsg)
                                    @php
                                    $userNameMsg = explode(' ',$userMsg->name);
                                    @endphp
                                        <div class="row p-2 rowPostulants">
                                        <div class="col-4 col-md-2 pr-0 pl-sm-0 pl-0 text-center">
                                            <div style="width: ;width: 90px;margin: auto;position: relative;">
                                            @if($userMsg->email_verified_at != null)
                                                <span class="badge badge-light badge-pill" style="height: 21.8px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#63bd30;position: absolute;right:1px;top:24px;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Correo Verificado">
                                                    <i class="mdi mdi-checkbox-marked-circle" style="font-size: 15px;position: relative;top: -2.8px;left: -2.2px;"></i>
                                                </span>
                                            @endif    
                                            @if($userMsg->plan == 'professional')
                                                <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#55c12e;position: absolute;right:1px;top: 47px;border: 1px solid #458e2b;" data-toggle="tooltip" data-placement="top" title="Usuario profesional">
                                                    <i class="mdi mdi-medal"></i>
                                                </span>
                                            @elseif($userMsg->plan == 'premium')
                                                <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;position: absolute;right:1px;top: 47px;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario premium">
                                                    <i class="mdi mdi-trophy"></i>
                                                </span>
                                            @endif
                                            <a href="/freelancer/{{$userMsg->code}}">
                                            <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($userMsg->image == null ? 'no-user.png' : $userMsg->image)}}" style="width:60px;height:60px; @if($userMsg->plan == 'professional') border:3px solid #55c12e @elseif($userMsg->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userNameMsg[0]}}" alt="{{$userNameMsg[0]}}">
                                            </a>
                                            </div>
                                            <p class="font-weight-bold communityNameUS mb-0"><span><a href="/freelancer/{{$userMsg->code}}">{{substr($userNameMsg[0],0,9)}}</a></span><a href="#"><i class="ml-1 flag-icon flag-icon-{{$userMsg->country}}" title="{{$userMsg->country}}" id="{{$userMsg->country}}" style="position:relative;top:1px;"></i></a></p>
                                        </div>
                                        @php
                                            //if($userMsg->signature != null){
                                                $userMsg->signatureSm = substr($userMsg->signature,0,50);
                                                //$userMsg->signatureSm = substr($userMsg->signature, 0,30);
                                                //calculamos porcentaje de los perfiles para ordenar luego
                                                $userMsg->profilePorcent = 0;
                                                if($userMsg->image != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->signature != null){
                                                    $userMsg->profilePorcent+=20;
                                                }
                                                if($userMsg->link != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->about != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->rubro != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->history != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->language1 != null){
                                                    $userMsg->profilePorcent+=10;
                                                }
                                                if($userMsg->image_work1 != null){
                                                    $userMsg->profilePorcent+=20;
                                                }
                                                /**/
                                            //}                                            
                                        @endphp
                                        <div class="col-8 col-md-10 pl-1 pr-0 pl-sm-2 text-left">
                                            <p class="text-left my-3" style="margin-bottom: 1.1rem !important;color:black;top:2px;right:17px;font-weight:bold;">Se ha postulado al proyecto
                                                <p class="mb-0 mt-2 font-weight-bold" style="font-size:12px;">Perfil completado:</p>
                                                <div class="progress" style="width: 200px;text-align: center;height: 12px;border-radius:10px;background:#dde0e2;margin-top:2px;">
                                                    @if($userMsg->profilePorcent <= 40)
                                                    <div class="progress-bar font-weight-bold" role="progressbar" style="width: {{$userMsg->profilePorcent}}%;background:#ee4a4a;border-radius:10px;" aria-valuenow="{{$userMsg->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$userMsg->profilePorcent}}%</div>
                                                    @elseif($userMsg->profilePorcent > 40 && $userMsg->profilePorcent < 70)
                                                    <div class="progress-bar font-weight-bold" role="progressbar" style="width: {{$userMsg->profilePorcent}}%;background:#ffc107;border-radius:10px;" aria-valuenow="{{$userMsg->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$userMsg->profilePorcent}}%</div>
                                                    @elseif($userMsg->profilePorcent >= 70)
                                                    <div class="progress-bar bg-success font-weight-bold" role="progressbar" style="width: {{$userMsg->profilePorcent}}%;border-radius:10px;" aria-valuenow="{{$userMsg->profilePorcent}}" aria-valuemin="0" aria-valuemax="100">{{$userMsg->profilePorcent}}%</div>
                                                    @endif
                                                </div> 
                                            </p> 
                                        </div>
                                        </div>
                                    @endforeach
                                    </div>



                                </div>

                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style m-auto">
                                <h3 class="text-center">Compartir Proyecto</h3>
                                <a class="a2a_dd" href="https://heiwork.com/{{URL::current()}}"></a>
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
                            </div>                                                                                                                                        
                        </div>
                       </div>
                    </div>
                    </div>
                

                    @auth
                        <!-- Modal Close proyect  -->
                        <div class="modal fade" id="modalCanelApp{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Cerrar proyecto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4>Al aceptar cerrar este proyecto quedara deshabilitado para recibir nuevas ofertas</h4>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button id="{{$application->id}}" type="button" class="btnCloseProyect btn btn-primary">Aceptar <i class="mdi mdi-download"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>                                                            
                        <!-- Modal response postulation -->
                        <div class="modal fade" id="modalResponse{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true" style="z-index:99999;">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Hacer una propuesta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body pt-3">
                                <form action="/setMessage" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                            <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:40px;height:40px;">
                                            <p class="font-weight-bold communityNameUS"><a href="/freelancer/{{$user->code}}">{{$userName[0]}}</a> <i class="ml-1 flag-icon flag-icon-{{$user->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                            @if($user->plan == 'professional')
                                                <span class="badge badge-light badge-pill" style="font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#55c12e;border: 1px solid #458e2b;">
                                                    <i class="mdi mdi-medal" style="font-size: 28px;"></i>
                                                </span>
                                                <div style="font-size: 10px;font-weight: bold;color: #458e2b;margin-bottom:12px;">Usuario Profesional</div>
                                            @elseif($user->plan == 'premium')
                                                <span class="badge badge-light badge-pill" style="font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;border: 1px solid #193d64;">
                                                    <i class="mdi mdi-trophy" style="font-size: 28px;"></i>
                                                </span>
                                                <div style="font-size: 10px;font-weight: bold;color: #193d64;margin-bottom:12px;">Usuario Premium</div>
                                            @endif
                                        </div>
                                        <div class="col-md-10 text-left">
                                            <h4 style="font-weight:bold;">{{$application->title}}</h4>
                                            <p style="font-size:16px;">{!!$application->text!!}</p>
                                            <div class="form-group">
                                                <label class="float-left">Propuesta ( 360 caracteres max )</label>
                                                <textarea name="message" clas="form-control font-weight-bold" placeholder="Escríbe tu propuesta aqui ... " cols="30" rows="4" maxlength="360" onkeypress="return /[a-z 0-9 ñ ´ _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)" style="width:100%;border-radius: 4px;border: 2px solid #35b0ff;" required></textarea>
                                            </div>
                                            <!--
                                            @if(Auth::user()->register_by == 'web' && Auth::user()->email_verified_at == null)
                                                <div class="form-group">
                                                    <div class="alert alert-danger" role="alert">
                                                      <strong>Debes confirmar tu dirección de correo electrónico para responder</strong>
                                                    </div>
                                                </div>
                                            @endif    
                                            -->
                                            
                                                <div class="form-group">
                                                    <input type="hidden" name="application_id" value="{{$application->id}}">
                                                    <button type="submit" class="btn btn-info">Enviar propuesta</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            
                                        </div> 
                                    </div>                                                                                                                                                                             
                                </form>     
                              </div>
                              <!--
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Enviar</button>
                              </div>-->
                            </div>
                          </div>
                        </div>
                        @endauth

       
                </div>  
                <!-- lateral drecho -->   
                <div class="col-md-2 col-lg-22 pl-1 contCard">
                    <div class="grid-margin stretch-card p-0 mb-2 m-auto" style="margin-bottom: 15px !important;">           
                          <div class="card" style="border-radius:0px;border-radius:10px;">
                            <div id="lateralIz" class="card-body pt-3 pb-3">
                                <h3 class="text-center">Otros proyectos <i class="mdi mdi-monitor-multiple"></i></h3>
                                @foreach($latest as $key => $last)
                                    @php
                                    $userName = explode(' ',$last->name);
                                    /**/
                                    $link = str_replace(' ','-',strtolower($last->title));
                                    $link= str_replace(',','',$link);
                                    $link = str_replace('ñ','n',$link);
                                    $link = str_replace('á','a',$link);
                                    $link = str_replace('é','e',$link);
                                    $link = str_replace('í','i',$link);
                                    $link = str_replace('ó','o',$link);
                                    $link = str_replace('ú','u',$link);
                                    @endphp
                                    <h5 class="latestCard mb-1" style="box-shadow:0px 1px 2px 0 rgba(46, 61, 73, 0.2);border: 1px solid #f4f4f4;padding: 4px 4px 12px 5px;border-radius: 5px;position: relative;min-height:74px;">
                                        <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($last->image == null ? 'no-user.png' : $last->image)}}" style="width:36px;height:36px;vertical-align:top; @if($user->plan == 'professional') border:2px solid #55c12e @elseif($user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                        <i class="ml-1 flag-icon flag-icon-{{$last->country}}" title="{{$last->country}}" id="{{$last->country}}" style="position:absolute;top:50px;left: 9.5px;"></i>
                                        <a href="/oferta/{{$link}}/{{$last->id}}"><div style="width: 80%;display: inline-block;padding-top:8px;font-weight:400;font-size:17px;font-family:'Poppins', sans-serif;">{{$last->title}}</div></a>
                                    </h5>
                                @endforeach
                                <h3 class="mt-3 text-center">Publica en nuestra Home <i class="mdi mdi-sticker-emoji"></i></h3>
                                <p class="text-center mb-1">Publica sin costo tus habilidades en nuestra Home para <strong>Ganar visibilidad</strong>, o si tienes un proyecto y estas en busca de un freelancer publica también sin costo.</p>
                                <a class="btn btn-primary btn-block text-white mb-3" href="/publicar" style="font-size:18px;">Publicar <i class="mdi mdi-plus-circle-outline ml-1" style="margin-left:0.5px;"></i></a>
                                
                                @guest
                                <h3 class="text-center">Forma parte de la comunidad <i class="mdi mdi-google-circles-extended"></i></h3>
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
                                        <a href="/register" class="btn btn-light mt-2" style="padding-top: 20px;height: 57px;width:200px;color:#4d7b3c;background: #c8eab8;">Crear nueva cuenta</a>                   
                                        </div>
                                    </div>
                                </div>                               
                                @endguest

                                
                            </div>
                        </div>
                    </div>

<!-- ads -->
<!-- vertiacal 1 -->

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="1999008309"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

                </div>
                <!-- end lateral -->

            </div>    
        </div>



        <div class="card mx-2" id="contPublicar" style="border-radius:8px;position: fixed;left: 0;z-index:9999;text-align: ;bottom:0.3%;background:#55c12e;width:320px;">
            <div id="downCompartir" class="closeCompartir d-none" style="background:#E0FFD3;border-radius:15px;width: 30px;height: 30px;float: right !important;position: absolute;padding: 3px;text-align: center;border: 1px solid gray;margin-left: 92%;margin-top: -15px;">
                <i class="mdi mdi mdi-chevron-double-down"></i>
            </div>
            <div class="card-body ContbtnsFloat">
                <div class="row">
                    <button type="button" id="publicar" class="btnsFloat col-md-120 text-center font-weight-bold" style="font-size:14px;width:49%;background:#E0FFD3;cursor:pointer;border:none;">
                        @if(Auth::check())
                        Publicar <i class="mdi mdi-plus"></i>
                        @else
                        Login <i class="mdi mdi-login"></i>
                        @endif
                    </button>  
                    <button type="button" id="compartir" class="btnsFloat col-md-120 text-center font-weight-bold" style="font-size:14px;width:49%;background:#E0FFD3;margin-left:2px;cursor:pointer;border:none;">
                        Compartir <i class="mdi mdi-share-variant"></i>
                    </button>                   
                    <div class="comparte content pt-2 pl-3 m-auto" style="display:none;width:90%;text-align:center;">
                        <h4 class="">Compartir por:</h4>
                        <p style="padding-left:1rem;text-align:left;">Comparte <strong>Heiwork</strong> con amigos y colegas</p>                        
                        <!-- AddToAny BEGIN -->
                            <style>
                            #contShareFloat .a2a_svg, .a2a_count { border-radius: 0 !important;}
                            #contShareFloat .a2a_default_style a { margin: 1px 2px; width:31.5% !important;}
                            @media (max-width: 772px){
                                #contShareFloat .a2a_svg, .a2a_count { width: 100% !important; height: auto !important;}
                            }
                            </style>
                            <div id="contShareFloat">
                            <div class="a2a_kit a2a_kit_size_64 a2a_default_style m-auto">
                            <a class="a2a_dd" href="{{URL::current()}}"></a>
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_whatsapp"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_pinterest"></a>
                            <a class="a2a_button_linkedin"></a>
                            <a class="a2a_button_google_gmail"></a>
                            <a class="a2a_button_telegram"></a>
                            <a class="a2a_button_facebook_messenger"></a>
                            </div>
                            </div>
                            <script>
                            var a2a_config = a2a_config || {};
                            a2a_config.locale = "es";
                            </script>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                            <div id="downCompartir" style="background:#E0FFD3;border-radius:15px;margin-top:1rem;">
                                <i class="mdi mdi-chevron-double-down"></i>
                                <i class="mdi mdi-chevron-double-down"></i>
                                <i class="mdi mdi-chevron-double-down"></i>
                            </div>
                    </div>
                    <div class="publica content pt-2 pl-3" style="display:none;width:90%;text-align:center;margin-left:6px;">
                        @guest
                        <h4 class="">Publica gratis ya!</h4>
                        <div class="access_social mb-5">
                            <p>inicia sesión rápida y publica ahora</p>
                            <a href="https://heiwork.com/auth/facebook" class="social_bt facebook">
                            <i class="mdi mdi-facebook-box" style="font-size:18px;color:#3B5998;top: 1px;position: relative;"></i> FACEBOOK
                            </a>
                                <a href="https://heiwork.com/auth/google" class="social_bt google">
                                <!--<i class="mdi mdi-google" style="font-size:18px;color:#DC4E41;top: 1px;position: relative;"></i> GOOGLE-->
                                <svg style="top:-2px;left:-2px;position: relative;" xmlns="https://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 48 48" aria-hidden="true" class="L5wZDc"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"></path><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"></path><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"></path><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"></path><path fill="none" d="M2 2h44v44H2z"></path></svg>
                                 GOOGLE
                            </a>                    
                        </div>
                        <div id="downPublicar" style="background:#E0FFD3;border-radius:15px;">
                            <i class="mdi mdi-chevron-double-down"></i>
                            <i class="mdi mdi-chevron-double-down"></i>
                            <i class="mdi mdi-chevron-double-down"></i>
                        </div>
                    </div>                    
                    @endguest
                    @auth
                        <a href="/publicar" class="btn btn-light btn-block btn-lg my-4" style="font-size:20px;border-radius: 90px;">Publicar ahora <i class="mdi mdi-plus-circle-outline" style="position:relative;top:2px;"></i></a>
                        <div id="downPublicar" style="background:#E0FFD3;border-radius:15px;">
                            <i class="mdi mdi-chevron-double-down"></i>
                            <i class="mdi mdi-chevron-double-down"></i>
                            <i class="mdi mdi-chevron-double-down"></i>
                        </div>
                    @endauth
                </div>
            </div>
        </div> 


        <!-- Modal Select country -->
        <div class="modal fade" id="modalCountry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Seleciona tu país de residencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ar" title="ar" id="ar" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Argentina</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-de" title="de" id="de" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Alemania</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-bo" title="bo" id="bo" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Bolivia</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-br" title="br" id="br" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Brasil</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ca" title="ca" id="ca" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Canada</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-cl" title="cl" id="cl" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Chile</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-cn" title="cn" id="cn" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">China</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-co" title="co" id="co" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Colombia</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-cr" title="cr" id="cr" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Costa Rica</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-cu" title="cu" id="cu" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Cuba</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ec" title="ec" id="ec" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Ecuador</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-us" title="us" id="us" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">EEUU</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-es" title="es" id="es" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">España</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-gt" title="gt" id="gt" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">El Salvador</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-fr" title="fr" id="fr" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Francia</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-gd" title="gd" id="gd" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Granada</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-gt" title="gt" id="gt" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Guatemala</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-hn" title="hn" id="hn" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Honduras</p>
                </button>  
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ie" title="ie" id="ie" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Irlanda</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-in" title="in" id="in" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">India</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-it" title="it" id="it" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Italia</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-il" tille="il" id="il" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Israel</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-mx" title="mx" id="mx" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">México</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ni" title="ni" id="ni" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Nicaragua</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-py" title="py" id="py" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Paraguay</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-pa" title="pa" id="pa" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Panamá</p>
                </button> 
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-pe" title="pe" id="pe" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Perú</p>
                </button>   
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-pr" title="pr" id="pr" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Puerto Rico</p>
                </button>  
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-pt" title="pt" id="pt" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Portugal</p>
                </button>  
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-do" title="do" id="do" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">República Dominicana</p>
                </button>  
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-gb" title="gb" id="gb" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Gran Bretaña</p>
                </button>
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-uy" title="uy" id="uy" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Uruguay</p>
                </button>  
                <button class="btnCountry btn btn-light pt-3 pb-2 col-md-4">
                    <i class="ml-1 flag-icon flag-icon-ve" title="ve" id="ve" style="font-size:30px;"></i> 
                    <p class="font-weight-bold pt-1">Venezuela</p>
                </button> 
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
        <!--- end pais -->


        <!-- Modal Select Rubro -->
        <div class="modal fade" id="modalRubro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona tu sector principal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
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

        <!-- Modal Login -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="width: 320px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div >
                    <h4 class="text-center">Aplica ahora a esta oferta!</h4>
                    <div class="access_social mb-5">
                        <p>inicia sesión rápida y forma parte</p>
                        <a href="https://heiwork.com/auth/facebook" class="social_bt facebook">
                        <i class="mdi mdi-facebook-box" style="font-size:18px;color:#3B5998;top: 1px;position: relative;"></i> FACEBOOK
                        </a>
                        <a href="https://heiwork.com/auth/google" class="social_bt google">
                            <!--<i class="mdi mdi-google" style="font-size:18px;color:#DC4E41;top: 1px;position: relative;"></i> GOOGLE-->
                            <svg style="top:-2px;left:-2px;position: relative;" xmlns="https://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 48 48" aria-hidden="true" class="L5wZDc"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"></path><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"></path><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"></path><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"></path><path fill="none" d="M2 2h44v44H2z"></path></svg>
                                GOOGLE
                        </a> 
                        <a href="/register" class="btn btn-light mt-2" style="padding-top: 20px;height: 57px;width:200px;color:#4d7b3c;background: #e3e3e3;">Registro web</a>                     
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
        <!--- end login -->

    </div>   
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
        //var width = $(window).width() * 2;
        //$('#contFlags').css('width','1200');
        $('#moveScroll').click(function(event) {
          event.preventDefault();
          $('#cardContFlags').animate({
           scrollLeft: "+=240px"
          }, "slow");
        });
        /*end */

        $('#compartir,#downCompartir').click(function(){            
            if($('.publica').is(':visible')){
                $('.publica').css('display','none');
            }
            //aparece desaparece cruz de cerrar el toggle
            if($('.comparte').is(':visible') || $('.publica').is(':visible')){
                $('.closeCompartir').addClass('d-none');
            }else{
                $('.closeCompartir').removeClass('d-none');
            }
            $header = $(this);
            $content = $('.comparte');
            $content.slideToggle(500, function () {});
        });
        $('#publicar,#downPublicar,#cancelPublicar,.btnWrite').click(function(){
            if($('.comparte').is(':visible')){
                $('.comparte').css('display','none');            
            }
            //aparece desaparece cruz de cerrar el toggle
            if($('.comparte').is(':visible') || $('.publica').is(':visible')){
                $('.closeCompartir').addClass('d-none');
            }else{
                $('.closeCompartir').removeClass('d-none');
            }
            $header = $(this);
            $content = $('.publica');
            $content.slideToggle(500, function () {});
        });

        $('.btnCountry').click(function(){
            var country_code = $(this).children().attr('id');            
            $.ajax('/setCountryUser/'+country_code,   // request url
                {
                    success: function (data, status, xhr) {// success callback function
                        toastr.success('Uno más!','Excelente!');
                        jQuery.noConflict();
                        $('#modalCountry').modal('hide');
                        //verifica si tiene rubro sino muestra modal rubro
                        if(userAuth.rubro == null){
                            setTimeout(function() {
                                jQuery.noConflict();
                                $('#modalRubro').modal('show');
                            },900);
                        }
                }
            });
            //var countryName = $(this).text();
            //var selectCountry = confirm("¿ Confirma a "+countryName+" coomo su país de recidencia ?")
        });

        $('.btnRubro').click(function(){
            var rubro_code = $(this).children().attr('id');            
            $.ajax('/setRubroUser/'+rubro_code,   // request url
                {
                    success: function (data, status, xhr) {// success callback function                        
                        toastr.success('Bienvenido a Heiwork!','Excelente!');
                        jQuery.noConflict();
                        $('#modalRubro').modal('hide');
                }
            });
            //var countryName = $(this).text();
            //var selectCountry = confirm("¿ Confirma a "+countryName+" coomo su país de recidencia ?")
        })


        //evitamos en mobil que al querer publicar el teclado suba el div flotante
        if ($(window).width() < 776) {
            $( "#title,#text" ).focus(function() {
                $('#contPublicar').css('position','relative');
            })
                $( "#title,#text" ).focusout(function() {
            $('#contPublicar').css('position','fixed');
            })

        }
        //get country code user
        /*
        $.get("https://api.ipdata.co?api-key=test", function (response) {
            var code = response.country_code;
            $("#country").val(code.toLowerCase());
        }, "jsonp");
        */
        $('#btnFilter').click(function(){
            var category = $('#categoryF').val();
            var type = $('#typeF').val();
            console.log(category);
            if(category === undefined || category == ''){
                category = null;
            }
            if(type === undefined || type == ''){
                type = null;
            }
            //alert(type);
            location.href ='/filter/'+type+'/'+category; 
        });

        $('#type').change(function(){
            if($(this).val() == 'Ofrezco'){
                $('#presupuest').show();
                $('#hours').hide();
                $('#presupuestLabel').show();
                $('#hoursLabel').hide();
            }else if($(this).val() == 'Busco'){
                $('#presupuest').hide();
                $('#hours').show();
                $('#presupuestLabel').hide();
                $('#hoursLabel').show();
            }
        }) 

        //oculta caja de texto y imagenes de inicio
        $('#btnOcultBox').click(function(){
            $('#contTextBox').css('display','none');
            $.ajax('/ocultBoxHome',{
                    success: function (data, status, xhr) {// success callback function
                        //respuesta no importa resultado
                }
            });
        });

        $('#closeScroll').click(function(){
            $('.contScrollsTop').css('display','none');
        })

        //desabbhilita el proyecto para q no manden mas ofertas
        $('.btnCloseProyect').click(function(){
            var id = $(this).attr('id');
            $.ajax('/closeProyect/'+id,{
                success: function (data, status, xhr) {// success callback function
                    jQuery.noConflict();
                    $('#modalCanelApp'+id).modal('hide');
                    //respuesta no importa resultado
                    if(data == 'ok'){
                        toastr.success('Proyecto Cerrado');
                    }
                }
            });
        });

        //muetra y oculta filtros
        $("#showFilter").click(function() {
           if ($(".contFilter").height() > 40) {
              $(".contFilter").animate({height: 40}, 200);
              $(this).css({
                    "-webkit-transform": "rotate(0deg)",
                    "-moz-transform": "rotate(0deg)",
                    "transform": "rotate(0deg)" /* For modern browsers(CSS3)  */
              });
           } else {
              if($(window).width() < 776){
                $(".contFilter").animate({height: 240}, 200);
              }else{
                $(".contFilter").animate({height: 120}, 200);  
              }  
              $(this).css({
                "-webkit-transform": "rotate(180deg)",
                "-moz-transform": "rotate(180deg)",
                "transform": "rotate(180deg)"
              });
           }
        });

    });
</script>
<script type="text/javascript">
//script de scroll vertical usuarios 

    var x = 0,
    container = $('.container'),
    items = container.find('li'),
    containerHeight = 0,
    numberVisible = 5,
    intervalSec = 2000;

if(!container.find('li:first').hasClass("first")){
  container.find('li:first').addClass("first");
}

items.each(function(){
  if(x < numberVisible){
    containerHeight = containerHeight + $(this).outerHeight();
    x++;
  }
});

container.css({ height: containerHeight, overflow: "hidden" });
  
function vertCycle() {
  var firstItem = container.find('li.first').html();
    
  container.append('<li>'+firstItem+'</li>');
  firstItem = '';
  container.find('li.first').animate({ marginTop: "-50px" }, 300, function(){  $(this).remove(); container.find('li:first').addClass("first"); });
}

if(intervalSec < 700){
  intervalSec = 700;
}

function vertCycleSm() {
  var firstItem = container.find('li.first').html();
    
  container.append('<li>'+firstItem+'</li>');
  firstItem = '';
  container.find('li.first').animate({ marginLeft: "-50px" }, 300, function(){  $(this).remove(); container.find('li:first').addClass("first"); });
}

if(intervalSec < 700){
  intervalSec = 700;
}

if($(window).width() < 776){//en cel
    var init = setInterval("vertCycleSm()",intervalSec);
}else{//en pc
    var init = setInterval("vertCycle()",intervalSec);
}

container.hover(function(){
  clearInterval(init);
}, function(){
  init = setInterval("vertCycle()",intervalSec);
});

</script>

@auth
    <script>
        const userAuth = {!! json_encode(Auth::user()) !!};
        if(userAuth.country == null){
            jQuery.noConflict();
            $('#modalCountry').modal('show');     
        }  
        if(userAuth.rubro == null && userAuth.country != null){
             jQuery.noConflict();
            $('#modalRubro').modal('show');
        }        
    </script>
@endauth

@endsection


@section('footer')
    @include('footer')
@endsection     