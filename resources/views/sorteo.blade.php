@extends('layouts.web')

@section('head')
       
    <title>HeiWork | Gana! 60%</title>
    <link rel="canonical" href="https://heiwork.com/freelancers">
    <meta name="description" content="Todos los trabajadores freelancers que forman parte de nuestra comunidad, encuentra profesionales para contratar en nuestras listas.">
    <meta name="keywords" content="freelancers, lista, trabajadores, profesionales, comunidad freelance, heiwork.com">
 
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
    .btnVote:hover{
        cursor: pointer;
        background-color: #3c4a3f !important;
        border-color: #000 !important;
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
    #h1{
        font-size: 1.4rem !important;
        font-family: 'Montserrat', sans-serif !important;
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

/********** contador de timer **************/

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap");

.countdown-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.big-text {
    font-weight: bold;
    font-size: 3rem;
    line-height: 0.5;
    margin: 1rem 2rem;
    color:white;
    text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);
}

.countdown-el {
    text-align: center;
}

.countdown-el span {
    font-size: 1.3rem;
    color:white;
}
@media (max-width: 500px){
    .cachic{
        display:none !important;
    }
    .big-text{
        line-height: initial;
        font-size:1.4rem !important;
    }
    #contH2Data{
        margin:20px 0px !important;
    }
    #contH2Data2{
        margin:20px 0px !important;
    }
    #contH2Data3{
        margin:20px 0px !important;
    }
}
</style>
@endsection


@section('content')

@php
$countryFlag = '';
if(Request::segment(2)){
    foreach($countries as $key => $country){
            $country = strtolower($country);
            $country = str_replace(' ', '-', $country);
        if($country == Request::segment(2)){
            $countryFlag = $key;
        }
    }
}
@endphp

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
                <div class="d-none d-md-block col-md-4 col-lg-3" id="contTextBox">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card cardInfo" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                    <h2 style="font-size: 1.6rem !important;text-align:center;">Gana dinero online hoy mismo</h2>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/perfil2.png" class="m-auto w-100" alt="comunidad de freelancers"  style="border-radius:10px;">
                                        <!--<img src="/images/h33.jpeg" class="m-auto w-50" alt="diseñadora freelancer" style="border-radius:10px;">-->
                                    </div>
                                    <p>Conecta con cientos de <strong>freelancers en @if(Request::segment(2)){{$countryTxt}} @else Latinoamérica @endif</strong> de forma inmediata para trabajar en tus proyectos y agrandar tu equipo de trabajo de forma dinámica y simple.</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:block;margin-bottom:10px;">
                                        <img src="/images/perfil4.png" class="m-auto" alt="grupo de freelancers trabajando" style="width:100%;">
                                        <p class="w-100 p-3">
                                        La comunidad esta creciendo con el fin de apoyar a todos las personas que estén en busca de trabajo de forma independiente y remota, desde cualquier parte del mundo, únete a nuestra comunidad si aun no formas parte.
                                        </p>
                                        <p>
                                            Estamos trabajando cada día para poder ofrecer la mejor calidad y llevarles a todos nuestros usuarios y <strong>colegas freelancers de @if(Request::segment(2)){{$countryTxt}} @else Latinoamérica @endif</strong> las oportunidades laborales necesarias dentro de un entorno amigable y seguro, además de lograr generar una comunidad donde todos puedan beneficiarse de la colaboración mutua entre personas de todas las áreas interactuando entre si.
                                        </p>
                                    </div>    
                            </div>
                            <button class="btn btn-block btn-info btn-lg d-none mt-3" id="btnOcultBox">Ocultar este cuadro <i class="mdi mdi-file-excel-box" style="position: relative;top: 1px;"></i></button>
                        </div>
                      </div>    
                    </div>
                </div>

                <div class="col-md-7">

                           
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                        <div class="card pt-2">
                            <div class="card-body pt-3 pb-3">
                                <h1 id="h1"  class="text-center font-weight-bold">Invierte y Gana! 70% del Total Acumulado</h1>
                                <h2 class="text-center mt-4 mb-2 font-weight-bold" style="font-size:24px !important;">¡Ingresa ahora con una inversión mínima de 10 Dólares y llévate el premio!</h2>
                            </div>    
                        </div>
                    </div>    
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                        <div class="card" style="background:#47bd1c !important">                            
                            <div class="card-body pt-3 pb-3 ">
                                <div id="contH2Data" class="mx-5 p-2"  role="alert">
                                    <h2 id="contH2Data2" class="big-text text-center mt-4 mb-4" style="font-size:2em !important" >Premio Al Ganador de Hoy</h2>
                                    <h2 id="contH2Data3" class="big-text text-center mt-4 mb-4 pt-2" style="font-size:3.4em !important">u$s 140</h2>
                                    <!--<h2 class="big-text text-center my-4" style="font-size:2em !important" ><strong>Premio Al Ganador de Hoy = $120 USD</strong></h2>-->
                                </div>
                                <h1 class="text-center my-3" style="text-shadow: 2px 4px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3);">Cierra en <i class="mdi mdi-clock-fast" style="position:relative;top:4px;"></i> 

                                <div class="countdown-container">
                                    <div class="countdown-el days-c d-none">
                                        <p class="big-text mb-0" id="days">0</p>
                                        <span>days</span>
                                    </div>
                                    <div class="countdown-el hours-c">
                                        <p class="big-text mb-0" id="hours">0</p>
                                        <span>hours</span>
                                    </div>
                                    <div class="countdown-el mins-c">
                                        <p class="big-text mb-0" id="mins">0</p>
                                        <span>mins</span>
                                    </div>
                                    <div class="countdown-el seconds-c">
                                        <p class="big-text mb-0" id="seconds">0</p>
                                        <span>seconds</span>
                                    </div>
                                </div>

                                </h1>
                                <div class="text-center">
                                    <a @if(Auth::check()) href="#" @else data-toggle="modal" data-target="#modalLogin" @endif class="btn btn-dark rounded-pill btnVote text-white my-4 py-3" style="font-size:20px;background:#34373e;"><i class="mdi mdi-square-inc-cash cachic"></i> <i class="mdi mdi-square-inc-cash cachic"></i> <i class="mdi mdi-square-inc-cash"></i> Invertir Ahora!  <i class="mdi mdi-square-inc-cash"></i> <i class="mdi mdi-square-inc-cash cachic"></i> <i class="mdi mdi-square-inc-cash cachic"></i></a>
                                </div>
                            </div>                     
                        </div>
                    </div>    
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                        <div class="card">                            
                            <div class="card-body pt-3 pb-3">
                                <a class="btn btn-info btn-block" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1" style="font-size:18px;">¿ De que se trata y como funciona ? <i class="mdi mdi-chevron-down float-right" style="font-size:30px;position: relative;top: -8px;"></i></a>
                                <div class="collapse w-100" id="collapseExample1">
                                    <h2 class="text-center mt-3 mb-2 font-weight-bold" >¿ De que se trata ?</h2>
                                    <p><strong>Esto no es un sorteo! Ni un juego de azar!</strong>, es un fondo de inversión donde los participantes ingresan invirtiendo un monto mínimo que es acumulado generando un monto total de dinero, donde el ganador que se ubique primero en la lista será recompensado con el premio principal, que es el 60% del total acumulado, <strong>cuando el coronómetro llegue a 00:00:00</strong>.</p>
                                    <h2 class="text-center mt-3 mb-2 font-weight-bold" >¿ Cómo funciona ?</h2>
                                    <p>Cada participante al ingresar en el fondo debe votar por uno de los participantes ya inscriptos, <strong>generándole un voto</strong>, El participante que acumula más votos siempre estará primero en la lista y será el ganador cuando el tiempo llegue a su fin.</p>
                                    <p><strong>Cada fondo tiene una duración de 24 horas</strong>, tiempos suficientes para que todos puedan participar y generar estrategias.</p>
                                    <p>Cada participante podrá ingresar una <strong>frase con un máximo de 216 caracteres</strong>, el contenido de este texto será su presentación y principal herramienta para convencer a los nuevos participantes a que le den su voto.</p>
                                    <p>Los primeros participantes inscriptos en un fondo, siempre tendrán la ventaja de ser visibles desde el inicio del conteo regresivo, generándole así más oportunidades de <strong>ser votado por los demás</strong>. </p>
                                    <p>Todos los datos que se generan en los fondos de inversión son <strong>públicos y transparentes</strong>, pudiendo cualquier persona calcular por sí misma, el número de inscriptos, los votos de cada participante, el total acumulado, etc.. etc.. </p>
                                </div>
                                <a class="btn btn-info btn-block mt-1" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2" style="font-size:18px;">Estrategia para ganar <i class="mdi mdi-chevron-down float-right" style="font-size:30px;position: relative;top: -8px;"></i></a>
                                <div class="collapse w-100" id="collapseExample2">
                                    <h2 class="text-center mt-3 mb-2 font-weight-bold">¿ De que se trata ?</h2>
                                    <p><strong>Esto no es un sorteo! Ni un juego de azar!</strong>, es un fondo de inversión donde los participantes ingresan invirtiendo un monto mínimo que es acumulado generando un monto total de dinero, donde el ganador que se ubique primero en la lista será recompensado con el premio principal, que es el 60% del total acumulado, <strong>cuando el coronómetro llegue a 00:00:00</strong>.</p>
                                    <h2 class="text-center mt-3 mb-2 font-weight-bold" >¿ Cómo funciona ?</h2>
                                    <p>Cada participante al ingresar en el pozo debe votar por uno de los participantes ya inscriptos, <strong>generándole un voto</strong>, El participante que acumula más votos siempre estará primero en la lista y será el ganador cuando el tiempo llegue a su fin.</p>
                                    <p><strong>Cada pozo tiene una duración de 24 horas</strong>, tiempos suficientes para que todos puedan participar y generar estrategias.</p>
                                    <p>Cada participante podrá ingresar una <strong>frase con un máximo de 216 caracteres</strong>, el contenido de este texto será su presentación y principal herramienta para convencer a los nuevos participantes a que le den su voto.</p>
                                    <p>Los primeros participantes inscriptos en un pozo, siempre tendrán la ventaja de ser visibles desde el inicio del conteo regresivo, generándole así más oportunidades de <strong>ser votado por los demás</strong>. </p>
                                    <p>Todos los datos que se generan en los pozos son <strong>públicos y transparentes</strong>, pudiendo cualquier persona calcular por sí misma, el número de inscriptos, los votos de cada participante, el total acumulado, etc.. etc.. </p>
                                </div>
                            </div>
                        </div>
                    </div>             


                    <!-- pestañas -->
                    <!--
                    <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px;padding:0px;">
                        <p style="font-size:12px;margin:0px;">Selecciona ver proyectos o perfiles freelancers</p>
                    </div>
                    -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> 
                      <li class="nav-item" style="width:33%;" role="presentation">
                        <a class="nav-link active p-3" id="pills-recomended-tab" data-toggle="pill" href="#pills-recomended" role="tab" aria-controls="pills-recomended" aria-selected="true"><i class="mdi mdi-account-multiple" style="font-size: 20px;"></i> 
                         <span style="margin-top: 2px;">Lista</span>
                        </a>
                      </li>
                      <li class="nav-item" style="width:33%;" role="presentation">
                        <a class="nav-link p-3" id="pills-moviments-tab" data-toggle="pill" href="#pills-moviments" role="tab" aria-controls="pills-moviments" aria-selected="false"><i class="mdi mdi-account-switch" style="font-size: 20px;"></i> 
                         <span style="margin-top: 2px;">Votos</span> 
                        </a>                             
                      </li>
                      <li class="nav-item" style="width:33%;" role="presentation">
                        <a class="nav-link p-3" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false"><i class="mdi mdi-account-star" style="font-size: 20px;"></i> 
                         <span style="margin-top: 2px;">Últimos Ganadores</span>
                        </a>                             
                      </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- PESTAÑA RECOMENDADOS -->
                        <div class="tab-pane fade show active" id="pills-recomended" role="tabpanel" aria-labelledby="pills-recomended-tab">
                        <div class="alert alert-info alert-dismissible fade show mt-2 mb-1" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px;padding:0px;">
                            <p style="font-size:12px;margin:0px;font-weight:bold;">
                            El participante con más votos ganará el premio, cuando el coronómetro llegue a 00:00:00
                            </p>
                        </div>
                        @foreach($users as $key => $user)
                                @php
                                    $userName = explode(' ',$user->name);
                                @endphp
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2" >           
                                  <div class="card" @if($key == 0) style="background:#e4f6ff;" @endif>
                                    <div class="card-body pt-3 pb-3">
                                        @if($key == 0) <i data-toggle="tooltip" data-placement="top" title="Por el momento Ganando" class="mdi mdi-trophy" style="float: right;font-size: 22px;color: #978d3f;position: absolute;top: 0px;left: 9px;"></i> @endif
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
                                                <a href="#">
                                                <img class="rounded-circle mb-1" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:60px;height:60px; @if($user->plan == 'professional') border:3px solid #55c12e @elseif($user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                </a>
                                                </div>
                                                <p class="font-weight-bold communityNameUS mb-0"><span><a href="/freelancer/{{$user->code}}">{{substr($userName[0],0,9)}}</a></span><a href="#"><i class="ml-1 flag-icon flag-icon-{{$user->country}}" title="{{$user->country}}" id="{{$user->country}}" style="position:relative;top:1px;"></i></a></p>
                                                <p class="mt-2 font-weight-bold" style="font-size:14px !important;background: #eaeaea;border-radius: 10px;width: 80%;margin: auto;">Votos: 19</p>
                                            </div>
                                            <div class="col-8 col-md-10 px-0 px-md-4 py-0 " style="border-radius: 20px;text-align:left;position:relative;">
                                                <!--<h2 class="mt-4 font-weight-bold">{{$userName[0]}}</h2>--> 
                                                <div class="row">
                                                <div class="col-10">   
                                                    <!--<p style="font-size:11px;font-weight:bold;padding: 8px 8px 5px 0px;bottom:10px;margin:0px;display:inline-block;height: 38px;text-align: center;">
                                                        <i class="ml-1 mdi mdi-code-greater-than" style="font-size:20px;margin: 0px !important;top: -5px;position: relative;"></i>
                                                        <span data-toggle="tooltip" data-placement="top" title="Usa este Código para votar por {{substr($userName[0],0,9)}}" style="font-size:15px;float:right;margin-left:5px;">02mhpccx06c1jldctehkjdghjrqmwtv3</span>
                                                    </p> -->                                           
                                                    <p style="font-size:14px;margin-bottom:10px;min-height:42px;">
                                                    {{$user->signature}} is done for easier customization from the moment you start using Bootstrap. Learn about our Sass options to the moment you start using the moment you start using enable these classes and morem vomr ok using the momen
                                                    </p>   
                                            </div>
                                            <div class="col-2">  
                                                <button type="button" data-toggle="modal" data-target="#modalVotar{{$key}}" class="btnVote btn btn-primary btn-block px-2" style="height:100%;">
                                                    <i class="mdi mdi-arrow-up-thick mb-1 d-block" style="font-size: 20px;"></i>
                                                    <strong class="mt-2" >VOTAR</strong>
                                                </button>    
                                            </div>                                                                                                                                                                               
                                                <!--
                                                <div class="col-4 col-md-2" style="background:silver">
                                                    Ver pefil
                                                </div>  
                                            -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>    
                                </div>  


        <!-- Modal Votar -->
        <div class="modal fade" id="modalVotar{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="width: 360px;">
            <div class="modal-content">
              <div class="modal-header">
                <!--<h5 class="modal-title" id="exampleModalLongTitle">Votar por  {{substr($userName[0],0,9)}}</h5>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pt-3">
                  <h4 class="text-center mb-4 font-weight-bold">Votar por  {{substr($userName[0],0,9)}}</h4>
                    <!--<p class="text-center mb-2">Inicia sesión con redes sociales</p>-->
                    <div class="row">
                        <div class="col-12 pl-0 pl-sm-2 text-center">
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
                            <a href="#">
                            <img class="rounded-circle mb-1" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:60px;height:60px; @if($user->plan == 'professional') border:3px solid #55c12e @elseif($user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                            </a>
                            </div>
                            <p class="font-weight-bold communityNameUS mb-0"><span><a href="/freelancer/{{$user->code}}">{{substr($userName[0],0,9)}}</a></span><a href="#"><i class="ml-1 flag-icon flag-icon-{{$user->country}}" title="{{$user->country}}" id="{{$user->country}}" style="position:relative;top:1px;"></i></a></p>
                            <p class="mt-2 font-weight-bold" style="font-size:14px !important;background: #eaeaea;border-radius: 10px;width: 80%;margin: auto;">Votos: 19</p>
                        </div>
                        <div class="col-12 px-4 py-3">
                            <p style="font-size:14px;margin-bottom:10px;min-height:42px;">
                            {{$user->signature}} is done for easier customization from the moment you start using Bootstrap. Learn about our Sass options to the moment you start using the moment you start using enable these classes and morem vomr ok using the momen
                            </p> 
                        </div>
                        <div class="col-12">
                            <label class="font-weight-bold">Votos disponibles: 40</label>
                            <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1 w-60">
                                <label class="font-weight-bold" for="inlineFormCustomSelect">Dar:</label>
                                <input type="number" value="0" autocomplete="off" class="form-control font-weight-bold d-inline-block" style="width:150px;" id="inlineFormCustomSelect">
                                </div>
                                <div class="col-auto my-1 w-40">
                                <button type="submit" class="btn btn-primary btn-block">Votar!</button>
                                </div>
                            </div>
                            </form>
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
        <!--- end modal votar -->

                        @endforeach
                        </div>
                        <!-- END PESTAÑA RECOMENDADOS -->

                        <!-- PESTAÑA NUEVOS MOVIMIENTOS -->
                        <div class="tab-pane fade" id="pills-moviments" role="tabpanel" aria-labelledby="pills-moviments-tab"> 
                          
                        @foreach($users as $key => $user)
                            @if($key < 61)
                                @php
                                    $userName = explode(' ',$user->name);
                                @endphp
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2 mt-1">           
                                  <div class="card">
                                    <div class="card-body pt-3 pb-3">
                                        ddd
                                    </div>
                                  </div>  
                                </div>  
                            @endif
                        @endforeach
                        </div>         
                        <!-- END PESTAÑA MOVIMIENTOS --> 

                        <!-- PESTAÑA NUEVOS FREELANCERS -->
                        <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab"> 
                          
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
                                                                                                                                                                      
                                                </div>
                                                <!--
                                                <div class="col-4 col-md-2" style="background:silver">
                                                    Ver pefil
                                                </div>  
                                            -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>    
                                </div>
                            @endif    
                        @endforeach
                        
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
                                    <a href="/register" class="btn btn-light mt-2 py-4" style="color:#4d7b3c;background: #c8eab8;width:200px">Registro web</a>                   
                                </div>                               
                                @endguest


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end lateral -->

            </div>    
        </div>


        @guest
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
                        <h4 class="">Ingresa y participa ahora!</h4>
                        <div class="access_social mb-5">
                            <p>inicia sesión rápida</p>
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
        @endguest


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
          <div class="modal-dialog modal-dialog-centered" role="document" style="width: 360px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Login </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pt-3">
                    <h4 class="text-center">Ingresa y participa ahora!</h4>
                    <p class="text-center mb-2">Inicia sesión rápida</p>
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
                        <a href="/register" class="btn btn-light mt-2 py-4" style="color:#4d7b3c;background: #c8eab8;width:200px">Registro web</a>                   
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
        <!--- end modal login -->



        <!-- Modal Participar -->
        <div class="modal fade" id="modalParticipar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="width: 360px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <!--<h4 class="text-center"> <i class="mdi mdi-google-circles-extended"></i></h4>-->
                    <p class="text-center mb-2">Inicia sesión con redes sociales</p>
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
                        <a href="/register" class="btn btn-light mt-2 py-4" style="color:#4d7b3c;background: #c8eab8;width:200px">Registro web</a>                   
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
        <!--- end modal participar -->



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

//******************** */ cuenta regresiva timer *******************

const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEl = document.getElementById("mins");
const secondsEl = document.getElementById("seconds");

const newYears = "31 Dec 2022";

function countdown() {
    const newYearsDate = new Date(newYears);
    const currentDate = new Date();

    const totalSeconds = (newYearsDate - currentDate) / 1000;

    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds / 3600) % 24;
    const mins = Math.floor(totalSeconds / 60) % 60;
    const seconds = Math.floor(totalSeconds) % 60;

    daysEl.innerHTML = days;
    hoursEl.innerHTML = formatTime(hours);
    minsEl.innerHTML = formatTime(mins);
    secondsEl.innerHTML = formatTime(seconds);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

// initial call
countdown();

setInterval(countdown, 1000);
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