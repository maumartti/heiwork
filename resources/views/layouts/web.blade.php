<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- printerest -->
  <meta name="p:domain_verify" content="23d6b6c294cea5fc77b35279fe875fc1"/>
  
@yield('head')

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  
  <!-- toastR -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200&display=swap" rel="stylesheet"> 
  
  <!-- icons google materialize -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="/css/ti-icons/css/themify-icons.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 

  <!--  Google Analytics  -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVKMJ5EP95"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YVKMJ5EP95');
  </script>
  <!--- end google Analitics -->

<script type="application/ld+json">
{
 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Example",
 "url" : "https://heiwork.com",
 "sameAs" : [
   "https://twitter.com/heiworkers ",
   "https://www.facebook.com/heiworkoficialpage",
   "https://www.linkedin.com/in/heiwork-plataforma-freelance-0217b2202/",
   "https://instagram.com/heiwork "
  ],
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "torres garcía 443",
   "addressRegion": "UY",
   "postalCode": "90200",
   "addressCountry": "UY"
 }
}
</script>

<style>
    body, h2,h4,h3,h5,h6,p,span,div{
      /*font-family: 'Raleway', sans-serif;*/
      font-family: 'Montserrat', sans-serif;
    }
    p{
      font-size: 14px;
    }
    .landing-page .middle-section {
      text-align: left;
    }

    #listMobile > li{
      font-size: 16px !important;
      color: white !important;
    }
    #listMobile > li > a{
      color: white !important;
      font-weight: bold;
    }
    #listMobile > li:hover{
      background:white  !important;
      color:#7BD454  !important;
    }
    #listMobile > li > a:hover{
      background:white  !important;
      color:#7BD454  !important;
    }
    .navbar-nav .nav-item.dropdown .count-indicator{
      position: initial !important;
    }
    #nbarLg{
      padding-right:2%;
    }
    @media (max-width: 930px){
      .navbar.default-layout .navbar-menu-wrapper .navbar-nav.header-links .nav-item .nav-link {
        padding: 10px !important; 
      }
    }
    @media (max-width: 792px){
      #boxNotificationsHead{
        width:350px;
      }
      #boxMessagesHead{
        right: -115px;
      }
      .textNotifications{
        width: inherit !important;
      }
      .navbar-nav{
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
    }
    @media (max-width: 400px){
      #contLogo{
        width: 90px !important; 
      }
    }
    @media (max-width: 350px){
      #contLogo{
        width: 80px !important; 
      }
    }
  </style>

  @yield('headfooter')

</head>

<body class="sidebar-light">
  <div class="container-scroller">
    <!-- nav guest -->
    @guest
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div  class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        <a class="navbar-brand brand-logo" href="/"></a>
        @if(Request::path() != 'login')
          <a class="navbar-brand brand-logo-mini" href="/"></a>
        @else
          <a id="navApp" class="navbar-brand brand-logo-mini" href="/"></a>
        @endif
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul id="nbarLg" class="navbar-nav navbar-nav-right header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="/" class="nav-link"><i class="mdi mdi-home"></i>Proyectos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-book-open"></i> Guia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="position:absolute;background:#55c12e;">
              <a class="dropdown-item" href="/trabajos-desde-casa">20 trabajos desde casa</a> 
              <a class="dropdown-item" href="/iniciar-como-freelancer">Iniciar como freelance</a>
              <a class="dropdown-item" href="/50-mejores-trabajos-freelance">50 mejores trabajos freelance</a> 
              <a class="dropdown-item" href="/teletrabajo-freelance-latinoamerica">Teletrabajo freelance en Latinoamérica</a> 
              <!--
              <a class="dropdown-item" href="#">Consejos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">más info</a>-->
            </div>
          </li>
          <!--
          <li class="nav-item">
            <a href="/sobre-nosotros" class="nav-link"><i class="mdi mdi-sticker-emoji"></i>Sobre Nosotros</a>
          </li>
          -->
          <li class="nav-item">
            <a href="/freelancers" class="nav-link"><i class="mdi mdi-account-multiple"></i>Perfiles</a>
          </li>
          <!-- <li class="nav-item">
            <a href="/planes"  class="nav-link"><i class="mdi mdi-bookmark-outline"></i>Planes</a>
          </li> -->
          <!--
          <li class="nav-item" style="background: #58ac58;">
            <a href="/ganar-dinero" class="nav-link "><i class="mdi mdi-currency-usd mr-1"></i>Gana! 60%</a>
          </li>-->
          <li class="nav-item">
            <a href="/blog" class="nav-link"><i class="mdi mdi-blogger"></i>Blog</a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="mdi mdi-login-variant"></i>Login</a>
          </li>
        </ul>
      </div>

      <div class="dropdown show d-none d-sm mr-3">
        <a class="btn btn-light dropdown-toggle p-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
          <span class="mdi mdi-menu" style="font-size:24px;margin-left:3px;"></span>
        </a>
      </div>
      <!-- menu desplegable para mobile -->
      <div class="collapse w-100" id="navbarSupportedContent" style="/*height:300px;*/">
        <ul class="navbar-nav w-100 px-0" id="listMobile">
          <!--
          <li class="nav-item text-center p-3">
            <a href="/ganar-dinero" class="nav-link"><i class="mdi mdi-currency-usd mr-1"></i>Gana! 60%</a>
          </li>-->
          <li class="nav-item text-center p-3">
            <a href="/" class="nav-link"><i class="mdi mdi-home mr-1"></i>E-commerce</a>
          </li>
          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="position:absolute;background:#55c12e;">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          -->
          <li class="nav-item text-center p-3">
            <a href="/freelancers" class="nav-link"><i class="mdi mdi-account-multiple mr-1"></i>Freelancers</a>
          </li>
          <!--
          <li class="nav-item text-center p-3">
            <a href="/terminos-condiciones" class="nav-link"><i class="mdi mdi-bookmark-outline mr-1"></i>Términos y condiciones</a>
          </li>-->
          <li class="nav-item text-center p-3">
            <a href="/contacto" class="nav-link"><i class="mdi mdi-message-text-outline mr-1"></i>Contacto</a>
          </li>
          <li class="nav-item text-center p-3">
            <a href="/blog" class="nav-link"><i class="mdi mdi-blogger mr-1"></i>Blog</a>
          </li>
          <li class="nav-item text-center p-3">
            <a href="/login" class="nav-link"><i class="mdi mdi-login-variant mr-1"></i>Login</a>
          </li>
        </ul>
      </div>

    </nav>

    @endguest
    <!-- end Nav guest -->
    <!-- Nav for login user -->
    @auth
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div id="contLogo" class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="/"></a>
        <a class="navbar-brand brand-logo-mini" href="/"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center" style="padding:4px !important;">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <!--
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>-->
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <!--
          <li class="nav-item dropdown" style="margin-right:4px !important;">
            <a href="/ganar-dinero" title="Ver Proyectos" class="nav-link count-indicator" id="notificationDropdown">
              <i class="mdi mdi-currency-usd"></i>
            </a>
          </li>-->
          <li class="nav-item dropdown" style="margin-right:4px !important;">
            <a href="/" title="Ver Proyectos" class="nav-link count-indicator" id="notificationDropdown">
              <i class="mdi mdi-view-list"></i>
            </a>
          </li>
          <li class="nav-item dropdown" style="margin-right:4px !important;">
            <a href="/freelancers" title="Ver Freelancers" class="nav-link count-indicator" id="notificationDropdown">
              <i class="mdi mdi-account-multiple"></i>
            </a>
          </li>
          
@auth

          @if(isset(Auth::user()->messages))
          <li class="nav-item dropdown" style="margin-right:4px !important;">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-text-outline"></i>
                @if(count(Auth::user()->messages) != 0)
                <span class="count bg-info">{{count(Auth::user()->messages)}}</span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" id="boxMessagesHead" aria-labelledby="messageDropdown">
                <div class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">Tienes {{count(Auth::user()->messages)}} mensajes sin leer
                  </p>
                  <a href="/messages" class="badge badge-inverse-info badge-pill float-right" style="cursor:pointer;">Ver todos</a>
                </div>
                @foreach(Auth::user()->messages as $key => $message)
                <div class="dropdown-divider"></div>
                <a href="/messages" class="dropdown-item preview-item" style="cursor:pointer;">
                  <div class="preview-thumbnail">
                    <img src="/images/users/{{($message->user->image == null ? 'no-user.png' : $message->user->image)}} " alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                  @php
                      $userMessageName = explode(' ',$message->user->name);
                  @endphp
                    <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">{{$userMessageName[0]}}
                      <span class="float-right font-weight-light small-text text-gray">hace {{$message->diff}}</span>
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      {{str_limit($message->message,30)}}...
                    </p>
                  </div>
                </a>    
         
                @endforeach
              </div>
          </li>
          @endif
       

          
          @if(isset(Auth::user()->notifications))
          <li class="nav-item dropdown" style="margin-right:4px !important;">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                @if(count(Auth::user()->notifications) != 0)
                <span class="count" style="background-color: #ffbc34 !important;">
                  {{count(Auth::user()->notifications)}}
                </span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" id="boxNotificationsHead" aria-labelledby="messageDropdown">
                <div class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">Tienes {{count(Auth::user()->notifications)}} notificaciónes nuevas
                  </p>
                  <a href="/messages" class="badge badge-inverse-info badge-pill float-right" style="cursor:pointer;background-color: #ffbc34 !important;color:white;">Ver todos</a>
                </div>
                @foreach(Auth::user()->notifications as $key => $notification)
                <div class="dropdown-divider"></div>
                <a href="/messages" class="dropdown-item preview-item" style="cursor:pointer;">
                  <div class="preview-thumbnail">
                    @if($notification->type == null)
                      <img src="/images/icN.jpeg" class="profile-pic" style="display: inline-block;">
                    @else
                      <img src="/images/noti/{{$notification->type}}.png" class="profile-pic" style="display: inline-block;">  
                    @endif
                  </div>
                  <div class="preview-item-content flex-grow">              
                    <p class="font-weight-light small-text mb-0 textNotifications" style="white-space:normal;width:300px;padding-left:5px;font-weight:400 !important;">
                      {{$notification->message}}
                    </p>
                  </div>
                </a>    
                @endforeach
              </div>
          </li>
          @endif  
@endauth

          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="mr-3">Hola, {{auth()->user()->name}} !</span>
                @if(Auth::user()->image != null)
                <img class="img-xs rounded-circle" src="/images/users/{{Auth::user()->image}}" alt="image" class="profile-pic">
                @else
                <img class="img-xs rounded-circle" src="/images/no-user.png" alt="image" class="profile-pic">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center" style="width:33%;">
                    <a href="/planes" ><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></a>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right" style="width:33%;">
                     <a href="/freelancer/{{Auth::user()->code}}"><i class="mdi mdi-account-outline mr-0 text-gray"></i></a>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center" style="width:33%;">
                    <a href="/messages"><i class="mdi mdi-message-text-outline mr-0 text-gray"></i></a>
                  </div>
                </div>
              <a href="/freelancer/{{Auth::user()->code}}" class="dropdown-item  mt-2">
                Perfil
              </a>
              <a href="/account" class="dropdown-item ">
                Cuenta
              </a>
              <a href="/messages" class="dropdown-item">
                Mensajes
              </a>
              <a href="/projects" class="dropdown-item">
                Tus proyectos
              </a>
              <a href="/publicar" class="dropdown-item">
                Publicar<i class="mdi mdi-plus-circle-outline ml-1" style="margin-left:0.5px;color:#636363"></i>
              </a>
              <a href="/planes"  class="dropdown-item">
                Planes de beneficios<i class="mdi mdi-bookmark-plus-outline ml-1 text-gray"></i> 
              </a>
              @if(Auth::user()->type == 'root' || Auth::user()->type == 'writer')
              <a href="/fakeAccounts" class="dropdown-item">
                Cuentas fake<i class="mdi  mdi-blogger ml-1 text-gray"></i> 
              </a>
              <a href="/addBlog" class="dropdown-item">
                Agregar Blog<i class="mdi  mdi-blogger ml-1 text-gray"></i> 
              </a>
              <a href="/addEmails" class="dropdown-item">
                Agregar Emails<i class="mdi  mdi-email ml-1 text-gray"></i> 
              </a>
              @endif
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Cerrar sesión
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-xl-inline-block m-0 mt-0" style="margin-top:0px !important;margin-right:0px !important;">
            <a class="nav-link dropdown-toggle d-lg-none" id="UserDropdown2" href="#" data-toggle="dropdown" aria-expanded="false" style="padding:15px 5px !important;">
                @if(Auth::user()->image != null)
                <img class="img-xs rounded-circle" src="/images/users/{{Auth::user()->image}}" alt="image" class="profile-pic">
                @else
                <img class="img-xs rounded-circle" src="/images/no-user.png" alt="image" class="profile-pic">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown2" style="right:0px !important;">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                </div>
              </a>
              <a href="/freelancer/{{Auth::user()->code}}" class="dropdown-item  mt-2">
                Perfil
              </a>
              <a href="/account" class="dropdown-item">
                Cuenta
              </a>
              <a href="/messages" class="dropdown-item">
                Mensajes
              </a>
              <a href="/projects" class="dropdown-item">
                Tus proyectos
              </a>              
              <a href="/publicar" class="dropdown-item">
                Publicar<i class="mdi mdi-plus-circle-outline ml-1" style="color:#636363"></i>
              </a>
              <a href="/planes"  class="dropdown-item">
                Planes de beneficios<i class="mdi mdi-bookmark-plus-outline ml-1 text-gray"></i> 
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">
                  Cerrar sesión
                <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
         <!--
        <button id="menuBtn" class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      -->
      </div>

      <!-- AVISO PLAN POR EXPIRAR -->
      <!--
      @if(Cookie::get('expire_plan'))
      <div class="alert alert-danger alert-dismissible fade show fixed-top d-flex flex-row" role="alert" style="position:fixed;top:75px;background-color:#f8d7da;height:50px;font-size:18px;">
        <strong> [ <i class="mdi mdi-alert-octagon m-0"></i> Aviso ] -  Tu plan expira en {{request()->cookie('expire_plan')}}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    -->
      <!-- END AVISO -->

    </nav>



    @endauth
    <!-- end nav login -->


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      <div class="container-fluid p-0">
        <div class="content-wrapper p-0">
          @yield('content')
        </div>
        @yield('footer')
      </div>
      <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="/js/scripts.js"></script>  
  @yield('script')

  <!-- toastr -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0&appId=1584028015093558&autoLogAppEvents=1" nonce="MisWjPBe"></script>

</body>

</html>