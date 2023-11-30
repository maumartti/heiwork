@extends('layouts.web')

@section('head')
<title>Planes - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/planes">

<meta name="description" content="Nuestros planes de beneficios ayudan a nuestros anunciantes y trabajadores freelancer a obtener mayores resultados en sus publicaciones en nuestra plataforma.">
<meta name="keywords" content="Planes de heiwork, Planes de beneficios, heiwork, contrato freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Planes - Heiwork">
<meta property="og:description" content="Nuestros planes de beneficios ayudan a nuestros anunciantes y trabajadores freelancer a obtener mayores resultados en sus publicaciones dentro de nuestra plataforma.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Nuestros planes de beneficios ayudan a nuestros anunciantes y trabajadores freelancer a obtener mayores resultados en sus publicaciones dentro de nuestra plataforma." />
<meta name="twitter:title" content="Planes - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />
<style>

    .landing-page .middle-section .card {
        box-shadow: none;
        border: 1px solid #eae2e2;
    }
    .landing-page .middle-section .card{
       
    }
    .accordion > .card:not(:first-of-type):not(:last-of-type){
        border-bottom:1px solid #eae2e2;
    }
    .btn-primary2 {
        color: #fff !important;
        background-color: #007bff !important;
        border-color: #007bff !important;
    }
    .border-primary2{
      border: 1px solid #007bff !important;
    }
    .btn-primary2:hover{
      color: #fff !important;
      background-color: #0975ea !important;
      border-color: #0975ea !important;
    }
    .btn-primary{
      color: #fff !important;
      background-color: #55c12e !important;
      border-color: #55c12e !important;
    }
    .btn-primary:hover{
      color: #fff !important;
      background-color: #55b533 !important;
      border-color: #55b533 !important;
    }
    .btn-outline-primary{
      color: grey !important;
      border: 1px solid grey;
    }
    .btn-outline-primary:hover{
      background-color: #00000012 !important;
      border-color: grey !important;
    }
    .btnW{
      border-radius: 20px !important;
    }
    .pricing-table .pricing-card .pricing-card-body .plan-features li{
      text-align: center !important;
      font-weight: 400 !important; 
      font-size: 0.83rem !important;
    }
</style>
@endsection
@section('content')

  <div class="container-scroller landing-page">

        <div class="container-fluid middle-section bg-white pt-0">
            <div class="row">

            <div class="col-12">
              <div class="">
                <div class="">
                  <div class="container text-center">
                    <h1 class="mb-3 mt-4">Nuestros Planes</h1>
                    <h4 class="w-75 mx-auto mb-4">Selecciona el plan que te parezca más optimo para publicar o hacer propuestas de empleo.</h4>
                    <div class="row pricing-table">
                      <div class="col-md-4 grid-margin stretch-card pricing-card">
                        <div class="card border-secondary border pricing-card-body" style="border-top: 18px solid #656565 !important;border-bottom: 5px solid #656565 !important;border-radius:0px !important; @if(Auth::check() && Auth::user()->plan == 'free') background:#656565 !important; @endif">
                          <div class="text-center pricing-card-head" style="color:#656565;@if(Auth::check() && Auth::user()->plan == 'free') color:#fff; @endif">
                            <h3>Free <i class="mdi mdi mdi-ticket-account" style="position:relative;top:2px;"></i></h3>                            
                            @if(Auth::check() && Auth::user()->plan == 'free')
                              <p><span class="badge badge-pill badge-dark">Tu plan actual <i class="mdi mdi-star"></i></span></p>
                            @else
                              <p>Plan básico</p>
                            @endif
                            <h1 class="font-weight-normal mb-3">$0.00</h1>
                          </div>
                          <p style="font-size:16px;"></p>
                          <ul class="list-unstyled plan-features" @if(Auth::check() && Auth::user()->plan == 'free') style="color:#fff;" @endif>
                            <li>Publicaciónes al mes <strong>5</strong></li>
                            <li>Propuestas al mes <strong>12</strong></li>
                            <li>Sin Sello</li>
                            <li>Servicio de soporte estandar</li>
                            <li>Visibilidad estándar</li>                          
                          </ul>
                          <div class="wrapper">
                            @if(Auth::check() && Auth::user()->plan == 'free')
                            <div class="btn btn-outline-primary btn-block btn-lg btnW" style="font-size:18px;background:#fff !important;">Tu plan actual <i class="mdi mdi-ticket-account" style="position:relative;top:1px;"></i></div>
                            @else
                            <a href=" @if(Auth::check() && Auth::user()->plan != 'free') # @else /register @endif" class="btn btn-outline-primary btn-block btn-lg btnW">Seleccionar</a>
                            @endif
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-md-4 grid-margin stretch-card pricing-card">
                        <div class="card border border-success pricing-card-body" style="border-top: 18px solid #55c12e !important; border-bottom: 5px solid #55c12e !important;border-radius:0px !important; @if(Auth::check() && Auth::user()->plan == 'professional') background:#55c12e !important; @endif">
                          <div class="text-center pricing-card-head" style="color:#55c12e; @if(Auth::check() && Auth::user()->plan == 'professional') color:#fff; @endif">
                            <h3>Professional <i class="mdi mdi-medal" style="position:relative;top:2px;"></i></h3>
                            @if(Auth::check() && Auth::user()->plan == 'professional')
                              <p><span class="badge badge-pill badge-dark">Tu plan actual <i class="mdi mdi-star"></i></span></p>
                            @else
                              <p>Ideal para freelance</p>
                            @endif
                            <h1 class="font-weight-normal mb-3">$7.90</h1>
                          </div>
                          
                          <p style="font-size:16px;"></p>
                          <ul class="list-unstyled plan-features" @if(Auth::check() && Auth::user()->plan == 'professional') style="color:#fff;" @endif>
                            <li>Publicaciónes al mes <strong>20</strong></li>
                            <li>Propuestas al mes <strong>35</strong></li>
                            <li>Sello de usuario professional</li>
                            <li>Servicio de soporte estandar</li>
                            <li>Visibilidad alta</li>
                          </ul>
                          <div class="wrapper">
                            @if(Auth::check() && Auth::user()->plan == 'professional')
                            <a href="/pay/professional" class="btn btn-primary btn-block btn-lg btnW" style="font-size:18px;background:#55b533 !important;">Renovar plan <i class="mdi mdi-medal" style="position:relative;top:0px;"></i></a>
                            @else
                            <a href="/pay/professional" class="btn btn-primary btn-block btn-lg btnW">Seleccionar</a>
                            @endif
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-md-4 grid-margin stretch-card pricing-card">
                        <div class="card border border-primary2 pricing-card-body" style="border-top: 18px solid #007bff !important;border-bottom: 5px solid #007bff !important; border-radius:0px !important; @if(Auth::check() && Auth::user()->plan == 'premium') background:#007bff !important; @endif">
                          <div class="text-center pricing-card-head" style="color:#007bff; @if(Auth::check() && Auth::user()->plan == 'premium') color:#fff; @endif">
                            <h3 >Premium <i class="mdi mdi-trophy" style="position:relative;top:2px;"></i></h3>
                            @if(Auth::check() && Auth::user()->plan == 'premium')
                              <p><span class="badge badge-pill badge-dark">Tu plan actual <i class="mdi mdi-star"></i></span></p>
                            @else
                              <p>Máximos beneficios</p>
                            @endif
                            <h1 class="font-weight-normal mb-3">$10.90</h1>
                          </div>
                          <p style="font-size:16px;"></p>
                          <ul class="list-unstyled plan-features" @if(Auth::check() && Auth::user()->plan == 'premium') style="color:#fff;" @endif>
                            <li>Publicaciónes al mes <strong>45</strong></li>
                            <li>Propuestas al mes <strong>80</strong></li>
                            <li>Sello de usuario premium</li>
                            <li>Servicio de soporte premium</li>
                            <li>Visibilidad extrema</li>
                          </ul>
                          <div class="wrapper">
                            @if(Auth::check() && Auth::user()->plan == 'premium')
                            <a href="/pay/premium" class="btn btn-primary2 btn-block btn-lg btnW" style="font-size:18px;background:#0975ea !important;">Renovar plan <i class="mdi mdi-trophy" style="position:relative;top:0px;"></i></a>
                            @else
                            <a href="/pay/premium" class="btn btn-primary2 btn-block btn-lg btnW" >Seleccionar</a>
                            @endif
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!--
                <div class="col-md-10 mx-auto">
                	
                  <h2 class="mb-4">Nuestros Planes</h2>  

                  <div class="row">  
                    <div class="col-md-4">
                      <h3>Plan básico</h3>
                      <p style="font-size:16px;">Administra los turnos de tu clínica privada, pacientes, tratamientos, historial medico y todo lo que tiene que ver con la administración de horarios, consultas con módulos de mensajes internos , y generación de espacios a los usuarios. tendrás acceso online a 3 cuentas básicas que podrás asignarle a dos profesionales y una secretaria del centro médico.</p>
                    </div>
                    <div class="col-md-4">
                      <h3>Plan Estandar</h3>
                      <p style="font-size:16px;">Accede a un control total de tu consultorio , teniendo en cuenta la cantidad de usuarios necesario para su buen funcionamiento , administra , turno, cuentas, pacientes, usuarios, tratamientos, mensajes, espacios de atención, como también acceso y prioridad en cualquier momento para resolver dudas, con nuestro equipo de soporte.</p>
                    </div>
                    <div class="col-md-4">
                      <h3>Plan Completo</h3>
                      <p style="font-size:16px;">Tendrás acceso a todas las prestaciones con las que cuenta el plan básico sumadas a las del plan estándar, mas módulos adicionales que son desarrollados específicamente para tu rubro en especial, con estas funcionalidades podrás no solo tener una buena gestión de todo el centro de atención, sino también datos mas precisos acerca de lo que pasa mes a mes y semana a semana.</p>
                    </div>
                  </div>

-->
      
                </div>
            </div>
        </div>    
@endsection   

@section('footer')
    @include('footer')
@endsection         
