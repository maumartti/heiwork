@extends('layouts.web')



@section('head')

    @if(Request::segment(2))
    @php
        $countryTxt = str_replace('-', ' ', Request::segment(2));
        $countryTxt = ucfirst($countryTxt);
    @endphp        
    <title>HeiWork | Freelancers en {{$countryTxt}}</title>
    <link rel="canonical" href="https://heiwork.com/freelancers/{{Request::segment(2)}}">
    <meta name="description" content="Lista de trabajadores freelaners en {{$countryTxt}}, busca colegas o profesionales freelance para contratar en {{$countryTxt}} dentro de nuestra comunidad.">
     <meta name="keywords" content="freelancers,  {{$countryTxt}}, lista, trabajadores, profesionales, comunidad freelance, heiwork.com">
    @else
    <title>HeiWork | Freelancers</title>
    <link rel="canonical" href="https://heiwork.com/freelancers">
    <meta name="description" content="Todos los trabajadores freelancers que forman parte de nuestra comunidad, encuentra profesionales para contratar en nuestras listas.">
    <meta name="keywords" content="freelancers, lista, trabajadores, profesionales, comunidad freelance, heiwork.com">
    @endif

    <meta name="apple-mobile-web-app-title" content="Freelancers">
    <meta name="application-name" content="Freelancers">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content=" #ffffff">
    <meta property="og:site_name" content="HEIWORK">
    <meta property="og:url" content="https://heiwork.com/freelancers">
    <meta property="og:image" content="https://heiwork.com/images/h111click555.jpeg">
    <meta property="og:title" content="Listado de profesionales freelancers | Heiwork">
    <meta property="og:description" content="Todos los trabajadores freelancers que forman parte de nuestra comunidad, encuentra profesionales para contratar en nuestras listas.">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="138224130427286">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Todos los trabajadores freelancers que forman parte de nuestra comunidad, encuentra profesionales para contratar en nuestras listas." />
    <meta name="twitter:title" content="Teletrabajo Freelance en Latinoamérica | Heiwork" />
    <meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />



<style>
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
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body pt-3 pb-3">
                            @foreach($lastMessages as $msg)
                                <div style="border:1px solid silver;">
                                    <strong>{{$msg->application->title}}</strong>
                                    @isset($msg->user)<p class="py-2 text-info"><strong><i>{{$msg->user->name}}</i></strong></p>@endisset
                                    <p>{{$msg->message}}</p>
                                    @isset($msg->userApp)<p class="py-2 text-danger"><strong><i>{{$msg->userApp->name}}</i></strong></p>@endisset
                                </div>    
                            @endforeach
                        </div>
                    </div>    
                </div>
                <div class="col-md-7">
                    
                
                        
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                        <div class="card p-3"> 
                            <h1>Cuentas creadas fakes</h1>                           
                        </div>
                    </div>     


                    <!-- pestañas -->
                    <!--
                    <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px;padding:0px;">
                        <p style="font-size:12px;margin:0px;">Selecciona ver proyectos o perfiles freelancers</p>
                    </div>
                    -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> 
                        <li class="nav-item" style="width:50%;" role="presentation">
                        <a class="nav-link active p-3" id="pills-recomended-tab" data-toggle="pill" href="#pills-recomended" role="tab" aria-controls="pills-recomended" aria-selected="true"><i class="mdi mdi-account-multiple" style="margin-right:2px;"></i> 
                        Cuentas Fakes
                        </a>
                      </li>
                      <li class="nav-item" style="width:50%;" role="presentation">
                        <a class="nav-link p-3" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false"><i class="mdi mdi-email" style="margin-right:2px;"></i> 
                        Mensajes 
                        </a>                             
                      </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- PESTAÑA RECOMENDADOS -->
                        <div class="tab-pane fade show active" id="pills-recomended" role="tabpanel" aria-labelledby="pills-recomended-tab">
                            @foreach($users as $key => $user)
                                @if($key < 61)
                                    @php
                                        $userName = explode(' ',$user->name);
                                    @endphp
                                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2 mt-1">           
                                      <div class="card" @if($user->plan == 'premium') style="border-radius:0px;border: 3px solid #007bff;" @elseif($user->plan == 'professional') style="border-radius:0px;border: 3px solid #55c12e" @elseif($user->plan == 'free') style="border-radius:20px;" @endif>
                                        <div class="card-body pt-3 pb-3">
    
    
                                            <div class="row">
                                                <div class="col-4 col-md-2 pl-0 pl-sm-2 text-center">
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
                                                <div class="col-8 col-md-10 px-0 px-md-4 py-0 " style="/*background:#EFFBEA;*/border-radius: 20px;text-align:left;position:relative;">
                                                    <!--<h2 class="mt-4 font-weight-bold">{{$userName[0]}}</h2>--> 
                                                    <div class="row">
                                                    <div class="col-12">                                               
                                                        <p class="d-sm-block d-md-none" style="font-size:14px;margin-bottom:10px;min-height:42px;">{{$user->signatureSm}}...</p> 
                                                        <p class="d-none d-md-block" style="font-size:14px;margin-bottom:10px;min-height:42px;">{{$user->signature}}...</p>                                               
                                                        @if($user->rubro == 'Programación Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Programación Web</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Wordpress')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Wordpress</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Apps Android, iOS')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Apps Android, IOS</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Aplicaciones de escritorio')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Aplicaciones de escritorio</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Diseño Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Diseño Web</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Diseño de Logo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Diseño de Logo</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Ilustraciones')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Ilustraciones</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Crear o editar audio, video')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Crear o editar audio, video</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Modelos 3D')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Modelos 3D</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Fotografía')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Fotografía</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Diseño de moda')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Diseño de moda</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Redacción y Traducción')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Redacción y Traducción</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Marketing Digital y Ventas')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Marketing Digital y Ventas</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'SEO')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">SEO</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Soporte Administrativo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Soporte Administrativo</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Legal')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Legal</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Finanzas y Negocios')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Finanzas y Negocios</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if($user->rubro == 'Ingeniería y Arquitectura')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>
                                                                @if($user->rubro2 == null && $user->rubro3 == null && $user->rubro4 == null)
                                                                <span style="float: right;margin-top: 4px;margin-left:4px;">Ingeniería y Arquitectura</span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        <!-- Rubro 2 -->
                                                        @if($user->rubro2 == 'Programación Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                           
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Wordpress')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Apps Android, iOS')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                            
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Aplicaciones de escritorio')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Diseño Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Diseño de Logo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Ilustraciones')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                        
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Crear o editar audio, video')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                   
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Modelos 3D')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Fotografía')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Diseño de moda')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Redacción y Traducción')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Marketing Digital y Ventas')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'SEO')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Soporte Administrativo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Legal')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Finanzas y Negocios')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro2 == 'Ingeniería y Arquitectura')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif   
                                                        <!-- rubro 3 -->
                                                        @if($user->rubro3 == 'Programación Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                           
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Wordpress')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Apps Android, iOS')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                            
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Aplicaciones de escritorio')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Diseño Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Diseño de Logo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Ilustraciones')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                        
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Crear o editar audio, video')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                   
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Modelos 3D')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Fotografía')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Diseño de moda')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Redacción y Traducción')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Marketing Digital y Ventas')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'SEO')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Soporte Administrativo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Legal')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Finanzas y Negocios')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro3 == 'Ingeniería y Arquitectura')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif 
                                                        <!-- Rubro 4 -->
                                                        @if($user->rubro4 == 'Programación Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Programación Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cloud-tags" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                           
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Wordpress')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Wordpress</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-wordpress" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Apps Android, iOS')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Apps Android, iOS</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cellphone-iphone" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                            
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Aplicaciones de escritorio')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Aplicaciones de escritorio</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-code-array" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Diseño Web')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño Web</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette-advanced" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Diseño de Logo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de Logo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Ilustraciones')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ilustraciones</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-palette" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                        
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Crear o editar audio, video')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Crear o editar audio, video</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-file-video" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                   
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Modelos 3D')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Modelos 3D</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-printer-3d" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Fotografía')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Fotografía</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-film" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                     
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Diseño de moda')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Diseño de moda</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-tshirt-crew" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                         
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Redacción y Traducción')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Redacción y Traducción</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-xda" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Marketing Digital y Ventas')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Marketing Digital y Ventas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-cart" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                   
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'SEO')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>SEO</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-search-web" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Soporte Administrativo')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Soporte Administrativo</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-desktop-mac" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                 
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Legal')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Legal</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-script" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Finanzas y Negocios')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Finanzas y Negocios</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-chart-line-stacked" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                              
                                                            </p>
                                                        @endif
                                                        @if($user->rubro4 == 'Ingeniería y Arquitectura')
                                                            <p data-toggle="tooltip" data-html="true" title="<em><b>Ingeniería y Arquitectura</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                                <i class="ml-1 mdi mdi-ungroup" style="font-size:24px;margin: 0px !important;top: -8px;position: relative;"></i>                                                                                                                                                                                    
                                                            </p>
                                                        @endif                                                                                                                                                        
                                                        <span style="float:right;font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                            <a href="/messagesFakes/{{$user->id}}">Ver Mensajes</a>
                                                        </span>    
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>    
                                    </div>
                                @endif    
                            @endforeach
                        </div>
                                     

                        <!-- PESTAÑA NUEVOS FREELANCERS -->
                        <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab"> 
                            <h3 class="text-center mb-3 pt-3 titleNoti">Mensajes</h3>
                            <ul class="nav nav-pills mb-3 px-0" id="pills-tab" role="tablist">
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                    <a class="nav-link active p-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style=""><i class="mdi mdi-message-text" style="margin-right:2px;"></i> Chats</a>
                                </li>
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                    <a class="nav-link p-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style=""><i class="mdi mdi-send" style="margin-right:2px;"></i> Enviados</a>
                                </li>
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                    <a class="nav-link p-3" id="pills-noti-tab" data-toggle="pill" href="#pills-noti" role="tab" aria-controls="pills-noti" aria-selected="false" style="padding-left:10px !important;"><i class="mdi mdi-bell" style="margin-right:2px;"></i> Conversación</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              @if(isset($messages))
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                @if(isset($messages->messagesBox))
                                  <div class="d-flex align-items-center justify-content-between mb-4 px-2">
                                    <h3 class="card-title mb-0 pt-3 text-primaryBlue titeConv">Conversaciones establecidas</h3>
                                    <small class="text-gray d-none d-sm-block">Total de conversaciones: ( <strong>{{count($messages->messagesBox)}}</strong> )</small>
                                  </div>
                                  <div class="new-accounts">
                                    <ul class="chats ps px-0" style="min-height: 300px;">
                                      @foreach($messages->messagesBox as $key => $message)
                                      @php
                                        $userMessageName = explode(' ',$message->user->name);
                                      @endphp  
                                      <li class="chat-persons p-2" @if($message->read == 0) style="background:#f4f4f4;border-bottom: 1px solid #dfdfdf;" @else style="border-bottom: 1px solid #dfdfdf;" @endif>
                                        <a href="/messagesFakes/{{Request::route('id')}}/{{$message->id}}">
                                          <span class="pro-pic"><img src="/images/users/{{($message->user->image == null ? 'no-user.png' : $message->user->image)}}" alt="profile image"></span>
                                          <div class="user">
                                            <p class="u-name">{{$userMessageName[0]}} <i class="ml-1 flag-icon flag-icon-{{$message->user->country}}" title="uy" id="uy" style="position:relative;top:0px;"></i></p>
                                            <p class="u-designation"> {{str_limit($message->message,30)}}..</p>
                                          </div>
                                          <p class="joined-date">hace {{$message->diff}}</p>
                                        </a>
                                      </li>
                                      @endforeach
                                      @if(count($messages->messagesBox) == 0)
                                      <h4 class="text-gray text-center p-5" style="border: 1px solid silver;border-radius:20px;">No tienes ningún mensaje</h4>
                                      @endif
                                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                    </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h3 class="card-title mb-0 pt-3 text-primaryBlue titeConv px-2">Propuestas enviadas <a data-toggle="tooltip" data-placement="bottom" title="Cuando respondes una propuesta publicada abres un canal de comunicación con el usuario publicante, que tendrá que ser respondido por este usario para establecer un chat e iniciar las cominicaciónes que te perminitrán conocer mas detalles y llegar a un acuerdo."><i class="mdi mdi-help-circle-outline" style="position:relative;top:2px;"></i></a></h3>
                                    </div>   
                                    <!--                               
                                    <div class="new-accounts">
                                        <ul class="chats ps px-0" style="min-height: 300px;">
                                            @foreach($messages->newMessagesSendMe as $key => $message)
                                            @php
                                            $userMessageName = explode(' ',$message->user->name);
                                            @endphp  
                                            <li class="chat-persons p-2" >
                                                <a href="/messagesFakes/{{Request::route('id')}}/{{$message->id}}">
                                                    <span class="pro-pic"><img src="/images/users/{{($message->user->image == null ? 'no-user.png' : $message->user->image)}}" alt="profile image"></span>
                                                    <div class="user">
                                                        <p class="u-name">{{$userMessageName[0]}} <i class="ml-1 flag-icon flag-icon-{{$message->user->country}}" title="uy" id="uy" style="position:relative;top:0px;"></i></p>
                                                        <p class="u-designation"> {{str_limit($message->message,30)}}..</p>
                                                    </div>
                                                    <p class="joined-date">@if($message->read == 0) <i class="mdi mdi-check-all"></i> @else <i class="mdi mdi-check-all text-info"></i> @endif hace {{$message->diff}}</p>
                                                </a>
                                            </li>
                                            @endforeach
                                            @if(count($messages->newMessagesSendMe) == 0)
                                            <h4 class="text-gray text-center p-5" style="border: 1px solid silver;border-radius:20px;">No has enviado ningún mensaje</h4>
                                            @endif
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                    </div>-->
                                </div>
                              @endif    
                              <div class="tab-pane fade" id="pills-noti" role="tabpanel" aria-labelledby="pills-noti-tab">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h3 class="card-title mb-0 pt-3 text-primaryBlue titeConv px-2">Notificaciónes</h3>
                                </div>
                                <div class="new-accounts">
                                    @if(isset($partner))
                                    <ul class="chats ps px-0">
                                        <li class="chat-persons">
                                            @php
                                            $userMessageName = explode(' ',$partner->name);
                                            @endphp 
                                            <a>
                                            <span class="pro-pic"><img src="/images/users/{{($partner->image == null ? 'no-user.png' : $partner->image)}}" alt="profile image"></span>
                                            <div class="user">
                                                <p class="u-name">{{$userMessageName[0]}}</p>
                                                <p class="u-designation">País <i class="ml-1 flag-icon flag-icon-{{$partner->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                            </div>
                                            </a>
                                        </li>
                                        <p class="m-0 text-gray">publicación:</p>
                                        <h5>{{$application->title}}</h5>
                                        <li class="chat-persons">
                                            <div class="chatContent p-2" style="border:1px solid #e3e3e3;border-radius:8px;padding-bottom:0px !important;">
                                                @foreach($messagesList as $key => $message)
                                                    @if($message->writer_id == Auth::user()->id)
                                                        <div style="padding: 10px;background:#d9eaff;border-radius:10px;margin:0px 0px 7px 0px;">
                                                        <p class="mb-1">Tu:</p>
                                                    @else
                                                        @php
                                                        $userMessageName2 = explode(' ',$message->user->name);
                                                        @endphp 
                                                        <div style="padding: 10px;background:#D6F4C9;border-radius:10px;margin:0px 0px 7px 0px;">
                                                        <p class="mb-1">{{$userMessageName2[0]}}:</p>
                                                    @endif
                                                    {{$message->message}}
                                                        </div>  
                                                @endforeach    
                                            </div>
                                            <form action="/responseMessageFake" method="POST">
                                            @csrf
                                                <div class="form-group mt-2">
                                                    <input type="hidden" name="code" value="{{$message->code}}">
                                                    <div class="col-sm-12"> 
                                                        <div class="row">
                                                            <textarea name="message" clas="form-control col-md-12" placeholder="Responder ( 360 caracteres max ) ... " rows="3" maxlength="360" onkeypress="return /[a-z 0-9 ñ ´ _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)" style="width:100%;border-radius: 4px;border: 2px solid #35b0ff;" required></textarea>
                                                            <input type="hidden" name="userFakeID" value="{{Request::route('id')}}">
                                                            <button type="submit" class="btn btn-info col-md-12 mt-2 p-2 text-center font-weight-bold" >Enviar <i class="mdi mdi-send" style="margin:auto;"></i></button>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                                    </ul>
                                    @endif

                                </div>
                            </div>
                            </div>
                        </div>
                        <!--  END PESTAÑA NUEVOS FREELANCERS -->
                    </div>    
                    <!-- END SISTEMA PESTAÑAS-->
                </div> 

                <!-- lateral drecho -->   
                <div class="d-none d-lg-block col-md-2 col-lg-22 pl-1">
                    <div class="grid-margin stretch-card p-0 mb-2 m-auto" style="margin-bottom: 15px !important;">           
                          <div class="card" style="border-radius:0px;border-radius:10px;">
                            <div class="card-body pt-3 pb-3">
<!-- vetical 220 x 400 -->
<!--                                
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4949713421471029"
     crossorigin="anonymous"></script>
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
                            .a2a_svg, .a2a_count { border-radius: 0 !important;}
                            .a2a_default_style a { margin: 1px 2px; width:31.5% !important;}
                            @media (max-width: 772px){
                                .a2a_svg, .a2a_count { width: 100% !important; height: auto !important;}
                            }
                            </style>
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