@extends('layouts.web')



@section('head')

    @if(Request::segment(2) == 'Ofrezco')
    <title>Comunidad Digital | HeiWork</title>
    <link rel="canonical" href="https://heiwork.com">
    <meta name="description" content="Comunidad de profesionales IT en heiwork.com, comunidad enfocada a brindar datos del mercado laboral para, freelancers del mundo IT, nomades digitáles que quieren emigrar, programadores, diseñadores, y más.">
    @elseif(Request::segment(2) == 'Busco')
    <title>Freelancers buscando empleo | HeiWork</title>
    <link rel="canonical" href="https://heiwork.com">
    <meta name="description" content="Comunidad de profesionales IT en heiwork.com, comunidad enfocada a brindar datos del mercado laboral para, freelancers del mundo IT, nomades digitáles que quieren emigrar, programadores, diseñadores, y más.">
    @else
    <title>HeiWork | Comunidad Digital</title>
    <link rel="canonical" href="https://heiwork.com">
    <meta name="description" content="Comunidad de profesionales IT en heiwork.com, comunidad enfocada a brindar datos del mercado laboral para, freelancers del mundo IT, nomades digitáles que quieren emigrar, programadores, diseñadores, y más.">
    <meta name="keywords" content="trabajo freelance, Mercado laboral, programador, e-commerce, heiwork.com">
    @endif

    <meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
    <meta name="application-name" content="Trabajos Freelance">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content=" #ffffff">
    <meta property="og:site_name" content="HEIWORK">
    <meta property="og:url" content="https://heiwork.com/">
    <meta property="og:image" content="https://heiwork.com/images/portada5555.jpg">
    <meta property="og:title" content="Publica aquí y Encuentra Trabajadores Freelance Gratis | Heiwork">
    <meta property="og:description" content="Busca y Encuentra trabajo, programadores, diseñadores y redactores en nuestra comunidad de freelancers para toda habla hispana.">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="138224130427286">

    <meta name="twitter:site" content="https://heiwork.com/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Busca y Encuentra trabajo, programadores, diseñadores y redactores en nuestra comunidad de freelancers para toda habla hispana." />
    <meta name="twitter:title" content="Teletrabajo Freelance en Latinoamérica | Heiwork" />
    <meta name="twitter:image" content="https://heiwork.com/images/h111.png" />

@endsection

@section('headfooter')
    <!-- css solo de home -->
    <link rel="stylesheet" type="text/css" href="/css/home.css">
@endsection

@section('content')
    <style type="text/css">
        #contHome{
            padding-top: 10px !important;
        }
        .cont1{
            margin-bottom: 0.25rem !important;
        }
        .zoomable-image:hover {
            transform: scale(1.1); /* Cambiar el valor para ajustar el nivel de zoom */
        }
        .zoomable-image:hover {
            transform: scale(1.1); /* Cambiar el valor para ajustar el nivel de zoom */
        }
        /* Estilo para rotar el ícono */
        .rotate-icon {
            transform: rotate(180deg);
            transition: transform 0.3s ease; /* Transición suave */
        }
        @media (max-width: 767px){
            #contHome{
                padding-top: 40px !important;
            }
            .prioridad{
                display: block !important;
            }
            .cont1{
                right:0.5px !important;
                margin-bottom: 0.5rem !important;
            }
            .cont2{
                left:0.5px !important;
            }
            .separateTiem{
                /* display:none !important; */
            }
            .titlePost{
                margin-top:10px !important;
            }
        }
        .text-break{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            font-family:'Poppins', sans-serif;
        }
        #listBox{
            background:#f6f6f6;
            list-style-type: none;
            text-align:left;
            padding:0px 5px;
            padding-top: 3px;
            margin-bottom:0px;
            height: 229px;
            overflow: auto;
        }
        #listBox > li{
            font-size:15px;
            font-weight:400;
        }
       /* #listBox > li:hover{
            background:silver;
        }*/
        /*+* efecto light en NEW ****/
        @-webkit-keyframes anim-glow {
            0% {
                /*color:  red;*/
            }
            50%{
                /*color: orange;*/
            }
            100% {
                color: #1a4d1a;
                border-width: 1px;
                transform: scale(1.6);
            }
        }
        @keyframes anim-glow {
            0% {
                /*color:  red;*/
            }
            50%{
                /*color: orange;*/
            }
            100% {
                color:  #1a4d1a;
                border-width: 1px;
                transform: scale(1.6);
            }
        }
        .icon::before{
        position: relative;
        -webkit-animation: anim-glow 1.2s alternate infinite ease-in;
                animation: anim-glow 1.2s alternate infinite ease-in;
        }

    </style>
@php
$categories = array('Programación Web','Diseño Web','Diseño de Logo','Ilustraciones','Wordpress','SEO');

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
    'Diseño gráfico' => '<i class="mdi mdi-tshirt-crew" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Redacción y Traducción' => '<i class="mdi mdi-xda" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Marketing Digital' => '<i class="mdi mdi-cart" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'SEO' => '<i class="mdi mdi-search-web" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Soporte Administrativo' => '<i class="mdi mdi-desktop-mac" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Tecnología' => '<i class="mdi mdi-script" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Finanzas y Negocios' => '<i class="mdi mdi-chart-line-stacked" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Ingeniería y Arquitectura' => '<i class="mdi mdi-ungroup" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Trámites y visas' => '<i class="mdi mdi-file-document" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Bases de Datos' => '<i class="mdi mdi-database" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Noticias' => '<i class="mdi mdi-bullhorn" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Software escritorio' => '<i class="mdi mdi-bullhorn" style="font-size:16px;position: relative;top: 1.2px;"></i>',
    'Temas generales' => '<i class="mdi mdi-bullhorn" style="font-size:16px;position: relative;top: 1.2px;"></i>',
];
$iconsClass = [
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
    'Diseño gráfico' => 'mdi mdi-tshirt-crew',
    'Redacción y Traducción' => 'mdi mdi-xda',
    'Marketing Digital' => 'mdi mdi-cart',
    'SEO' => 'mdi mdi-search-web',
    'Soporte Administrativo' => 'mdi mdi-desktop-mac',
    'Tecnología' => 'mdi mdi-script',
    'Finanzas y Negocios' => 'mdi mdi-chart-line-stacked',
    'Ingeniería y Arquitectura' => 'mdi mdi-ungroup',
    'Trámites y visas' => 'mdi mdi-file-document',
    'Bases de Datos' => 'mdi mdi-database',
    'Noticias' => 'mdi mdi-bullhorn',
    'Software escritorio' => 'mdi mdi-bullhorn',
    'Temas generales' => 'mdi mdi-bullhorn',
];
$arrIconCountries = [
    'ar' => 'Argentina',
    'au' => 'Australia',
    'de' => 'Alemania',
    'bo' => 'Bolivia',
    'br' => 'Brasil',
    'ca' => 'Canadá',
    'cl' => 'Chile',
    'cn' => 'China',
    'co' => 'Colombia',
    'cr' => 'Costa Rica',
    'cu' => 'Cuba',
    'dk' => 'Dinamarca',
    'ec' => 'Ecuador',
    'us' => 'Estados Unidos',
    'es' => 'España',
    'fi' => 'Finlandia',
    'sv' => 'El Salvador',
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
    'nz' => 'Nueva Zelanda',
    'no' => 'Noruega',
    'py' => 'Paraguay',
    'pa' => 'Panamá',
    'pe' => 'Perú',
    'pr' => 'Puerto Rico',
    'pt' => 'Portugal',
    'do' => 'República Dominicana',
    'gb' => 'Reino Unido',
    'uy' => 'Uruguay',
    'se' => 'Suecia',
    've' => 'Venezuela'
];
@endphp
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" id="contHome">

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
                <div class="col-md-3" id="contTextBox">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card cardInfo" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                @if(Request::segment(2) == 'Ofrezco')
                                    <h2 style="font-size: 1.6rem;text-align:center;">Ofertas para freelancers</h2>
                                    <p><strong>proyectos freelance</strong> en la búsqueda de profesionales freelancers interesados en trabajar para nuestros oferentes particulares u o empresas que publican con nosotros.Aquí tienes las lista de ofertas actualizada al día de hoy, <strong>puedes ofrecer tus servicios</strong> en los proyectos en los cuales te sientas capacitado .</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/h111.png" class="m-auto w-100" alt="trabajos y proyectos freelance"  style="border-radius:10px;">
                                        <!--<img src="/images/h33.jpeg" class="m-auto w-50" alt="diseñadora freelancer" style="border-radius:10px;">-->
                                    </div>
                                    <p>Siempre hay <strong>trabajadores freelancers buscando proyectos</strong> en los cuales poder participar, nuestra plataforma te brindará ofertas laborales acorde a tu sector para que te puedas desarrollar en este mundo cada vez más demandante como lo es: el <strong>teletrabajo online</strong>.</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/h222.png" class="m-auto" alt="contrato freelancer" style="width:160px;">
                                        <p class="w-50 p-3">
                                        Cada día se agregan mas cantidad de ofertas y proyectos en los que puedes aplicar, espera tu momento, muchos proyectos están por llegar. 
                                        </p>
                                    </div> 
                                @elseif(Request::segment(2) == 'Busco')  
                                    <h2 style="font-size: 1.6rem;text-align:center;">Buscando trabajo freelance</h2>
                                    <p>Profesionales freelancer buscando proyectos en los cuales participar, <strong>teletrabajadores de toda Latinoamérica</strong> ofrecen sus servicios en esta sección filtrada con toda la lista de profesionales de todas las áreas, contacta y contrata personas capacitadas y finaliza tus proyectos ahora mismo.</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/h111.png" class="m-auto w-100" alt="trabajos y proyectos freelance"  style="border-radius:10px;">
                                        <!--<img src="/images/h33.jpeg" class="m-auto w-50" alt="diseñadora freelancer" style="border-radius:10px;">-->
                                    </div>
                                    <p>Puedes esperar a que un <strong>trabajador freelance</strong> aplique a unos de tus proyectos o puedes tu aplicar a una de sus <strong>ofertas como profesional</strong>, a diario se ofrecen teletrabajadores esperando ser contactados para iniciar su camino en nuestra plataforma, te invitamos a que te animes a dar tu mejor oferta.</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/h222.png" class="m-auto" alt="contrato freelancer" style="width:160px;">
                                        <p class="w-50 p-3">
                                        Muchos emprendedores del sector de empresas start up, están buscando personal para poner en marcha sus emprendimientos ahora.
                                        </p>
                                    </div>   
                                @else    
                                    <h1 style="font-size: 1.6rem;text-align:center;">Heiwork - Comunidad Digital</h1>
                                    <p>Forma parte de <strong>la comunidad de programadores y profesionales del mundo Digital</strong>,es una comunidad creada para que puedas compartir informacieon y ver ofertas de <strong>trabajo freelance</strong> puedes aplicar a ofertas de <strong><a href="/teletrabajo-freelance">teletrabajo</a></strong> en toda la región, Latinoamérica y el mundo. Regístrate gratis y publica tus habilidades en nuestra plataforma diseñada de forma ágil y práctica, <strong>consigue los mejores resultados hoy mismo.</strong></p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/h111.png" class="m-auto w-100" alt="trabajos y proyectos freelance"  style="border-radius:10px;">
                                        <!--<img src="/images/h33.jpeg" class="m-auto w-50" alt="diseñadora freelancer" style="border-radius:10px;">-->
                                    </div>
                                    <p>Únete a la <strong>comunidad IT de trabajadores freelancer y nómadas digigáles</strong> creada para toda Latinoamérica y países hispanohablantes, con el fin de conectar clientes con profesionales freelancers dispuestos a crecer tu ecommerce y dar lo mejor de si en todo momento, <strong>Únete ahora a Heiwork.</strong>.</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:0px;">
                                        <img src="/images/h222.png" class="m-auto" alt="contrato freelancer" style="width:160px;">
                                        <p class="w-50 p-3 mb-0">
                                        Trabaja o contrata nuevos clientes, genera pagos online desde tu proppio punto de venta en linea, haciendo visible tus productos con nosotros rápidamente y en pocos pasos. 
                                        </p>
                                    </div>    
                                    <p><strong>Buscas emigrar como IT ?.</strong> trabajando y puliendo tus habilidades en nuevos proyectos desde cualquiér parte del mundo, trabajando para empresas, clientes y emprendedores que buscan talento humano.</p>
                                @endif
                                     <!--botones like fb -->
                                     <!--
                                <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px 15px;">
                                    <p class="mb-2 font-weight-bold">Danos tu like</p>
                                    <div class="fb-like" data-href="https://www.facebook.com/heiworkoficialpage" data-width="" data-layout="box_count" data-action="like" data-size="large" data-share="true"></div>
                                </div>-->
                                <!-- end fb -->
                            </div>
                            <button class="btn btn-block btn-info btn-lg d-none mt-3" id="btnOcultBox">Ocultar este cuadro <i class="mdi mdi-file-excel-box" style="position: relative;top: 1px;"></i></button>
                        </div>
                      </div>    
                    </div>
                </div>
                @endif
                <div class="col-md-8 col-sm-12 pl-1">

                    <!-- pestañas links ofertas / codigos ejemplo -->
                    <!-- <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px;padding:0px;">
                        <p style="font-size:12px;margin:0px;font-weight:bold;">Selecciona ver proyectos o perfiles freelancers</p>
                    </div> -->
                    

                    <div class="tab-content" id="pills-tabContent-one">
                         <!-- pesta;a  1 -->
                        <div class="tab-pane fade show active" id="pills-home-one" role="tabpanel" aria-labelledby="pills-home-tab-one">
                        @foreach($libraries as $key => $application)
                            @if($application->type == 'Busco')
                                @php
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
                                            'Diseño de gráfico' => '<i class="mdi mdi-tshirt-crew" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Redacción y Traducción' => '<i class="mdi mdi-xda" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Marketing Digital' => '<i class="mdi mdi-cart" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'SEO' => '<i class="mdi mdi-search-web" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Soporte Administrativo' => '<i class="mdi mdi-desktop-mac" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Tecnología' => '<i class="mdi mdi-script" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Finanzas y Negocios' => '<i class="mdi mdi-chart-line-stacked" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Ingeniería y Arquitectura' => '<i class="mdi mdi-ungroup" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Trámites y visas' => '<i class="mdi mdi-file-document" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                            'Bases de Datos' => '<i class="mdi mdi-database" style="font-size:16px;position: relative;top: 1.2px;"></i>',
                                        ];
                                    $iconCatApp = '';    
                                    foreach ($icons as $key => $value) {
                                        if($application->category == $key){
                                            $iconCatApp = $value;
                                        }
                                    }  
                                @endphp
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                  <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-md-12 px-4 py-3" style="background:#EFFBEA;border-radius: 20px;text-align:left;position:relative;">
                                                <h2 class="mt-4 font-weight-bold"><a href="/es/{{$application->url}}">{{$application->title}}</a></h2>
                                                @php                                                       
                                                    $text = substr($application->text,0,280);//cortamos menor a 160
                                                    $text = substr($text, 0, strrpos($text, ' '));//evita cortar palabras                                                        
                                                    $text = strip_tags($text);//quitamos etiquetas html
                                                @endphp
                                                <p class="pt-2 mb-0" style="font-size: 14px;color:#34373c;">
                                                    <p style="font-size:15px;margin-bottom:55px;">{{$text}} ... <a href="/es/{{$application->url}}">Ver ejemplo <i class="mdi mdi-share"></i></a></p>
                                                    <p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;position:absolute;bottom:10px;left:24px;margin:0px;display:inline-block;">{!! $iconCatApp !!} {{$application->category}}</p>
                                                </p>                        
                                            </div>
                                        </div>
                                    </div>
                                  </div>    
                                </div>
                            @endif
                        @endforeach
                        </div>
                        <!-- pesta;a  2 -->
                        <div class="tab-pane fade" id="pills-profile-one" role="tabpanel" aria-labelledby="pills-profile-tab-one">
                        <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                            <div class="card" style="background:#fff;border-radius:20px;">
                                <div class="card-body pt-1 pb-1 px-2 text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 style="font-size:2.40rem !important">Comunidad de profesionales IT</h2>
                                        </div>
                                    </div>
                                    <div class="row mt-2 px-2">
                                        @foreach($categories as $catName)
                                        <div class="col-md-4 col-sm-12 px-0">
                                            <div class="px-1 pt-0 mb-2">
                                                <h3 class="mb-0" style="color:white;background:#55c12e;border-radius:4px 4px 0px 0px;">
                                                    <p class="p-1 mb-0">
                                                        @foreach($icons as $iconN => $icon)
                                                            @if($iconN == $catName)
                                                                {!! $icon !!}
                                                            @endif
                                                        @endforeach
                                                        <span style="font-size:15px;font-weight:bold;">{{$catName}}</span>
                                                    </p>
                                                </h3>
                                                <ul id="listBox">
                                                @foreach($applications as $key => $application)
                                                    @if($application->type == 'Ofrezco' && $application->category == $catName)
                                                    @php
                                                        //title link
                                                        $link = str_replace(' ','-',strtolower($application->title));
                                                        $link = str_replace(',','',$link);
                                                        $link = str_replace('ñ','n',$link);
                                                        $link = str_replace('á','a',$link);
                                                        $link = str_replace('é','e',$link);
                                                        $link = str_replace('í','i',$link);
                                                        $link = str_replace('ó','o',$link);
                                                        $link = str_replace('ú','u',$link);

                                                        $userName = explode(' ',$application->user->name);
                                                        $today = $date = date('Y-m-d');
                                                        $yesterday = $date = date('Y-m-d',strtotime("-1 days"));
                                                        $isNew = false;
                                                        if($application->created_at->format('Y-m-d') == $today || $application->created_at->format('Y-m-d') == $yesterday){
                                                            $isNew = true;
                                                        }
                                                    @endphp
                                                    <li class="text-break" @if($isNew == true) style="background: #fffad3;" @endif>
                                                        <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($application->user->image == null ? 'no-user.png' : $application->user->image)}}" style="width:22px;height:22px; @if($application->user->plan == 'professional') border:2px solid #55c12e @elseif($application->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                            <i class="mdi mdi-circle @if($application->active == 0) text-danger @else text-success @endif"></i>
                                                        @if($isNew == true)
                                                            <i class="mdi mdi-new-box icon" style="color:green;font-size:15.5px;position:relative;top:1px;"></i>  
                                                            <a href="/oferta/{{$link}}/{{$application->id}}" style="font-weight: bold;color: green;">{{$application->title}}</a>
                                                        @else
                                                            <a href="/oferta/{{$link}}/{{$application->id}}" >{{$application->title}}</a>
                                                        @endif
                                                    </li>
                                                    @endif
                                                    @endforeach    
                                                </ul>
                                                <div style="font-weight:bold;background:#D9D9D9;border-radius:0px 0px 5px 5px;cursor:pointer;">
                                                    ver <i class="mdi mdi-plus-circle-outline" style="position:relative;top:1px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>  
                                </div>
                            </div>
                        </div>                                      
                </div>             
                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                    <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-2 pb-3 px-3 text-center">                            
                            <!-- <a class="btn btn-info btn-block text-white mt-3 mb-3 p-3 rounded-pill" href="/publicar" style="font-size:18px;">Publicar Oferta de Empleo <i class="mdi mdi-plus-circle-outline ml-1" style="margin-left:0.5px;"></i></a> -->
                            
                            <!-- pestañas -->
                            <!-- <div class="col-md-10 px-4 py-3 mt-3" style="background:#EFFBEA;border-radius: 20px;text-align:left;position:relative;">
                            oooo
                            </div> -->
                            <!-- <div class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="font-size:16px;width:100%;text-align:center;padding-right:15px;margin:0px;padding:0px;">
                                <p style="font-size:12px;margin:0px;font-weight:bold;">Selecciona ver empleos o temas de la comunidad</p>
                            </div> -->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              @if(Request::segment(2) != 'Ofrezco')
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                  <a class="nav-link active p-3  @if(Request::segment(2) == 'Busco') active @endif" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" @if(Request::segment(2) == 'Busco') aria-selected="true" @else aria-selected="false" @endif><i class="mdi mdi-file-multiple" style="font-size: 17px;position: relative;top: -2px;margin-right: 3px;"></i> Posts</a>                             
                                </li>
                                @endif
                                @if(Request::segment(2) != 'Busco')  
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                  <a class="nav-link p-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-tooltip-text" style="margin-right:2px;"></i> Shorts</a>
                                </li>
                                @endif
                                <li class="nav-item" style="width:33.333%;" role="presentation">
                                  <a class="nav-link p-3" id="pills-jobs-tab" data-toggle="pill" href="#pills-jobs" role="tab" aria-controls="pills-jobs" aria-selected="true"><i class="mdi mdi-bullhorn" style="margin-right:2px;"></i> Offers</a>
                                </li>
                            </ul>

                        </div>
                      </div>
                    </div>

        

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
                        <!-- btn postear -->
                        <div class="card mb-2" style="border-radius:20px;">
                            <div class="card-body pt-2 pb-2 px-3 text-center">     
                                <button type="button" id="publicar" class="p-1 col-md-120 text-center font-weight-bold text-white" style="font-size:18px;width:100%;background:#55c12e;cursor:pointer;border:none;border-radius:12px;">
                                    Postear Short <i class="mdi mdi-plus"></i>
                                </button>                       
                            </div>
                        </div> 
                        <!-- end postear -->  
                        @foreach($applications as $key => $application)
                            @if($application->type == 'Ofrezco' && $application->created_at < '2022-02-01 00:00:00')
                                @php
                                    $userName = explode(' ',$application->user->name);

                                    $iconCatApp = '';    
                                    foreach ($icons as $key => $value) {
                                        if($application->category == $key){
                                            $iconCatApp = $value;
                                        }
                                    }
                                    if($application->category == 'Marketing Digital'){
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
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                  <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3">

                                        <div class="row">
                                            <!-- <div class="col-md-2 text-center">
                                                <div style="width: ;width: 90px;margin: auto;position: relative;">
                                                @if($application->user->plan == 'professional')
                                                    <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#55c12e;position: absolute;right:0px;top: 67px;border: 1px solid #458e2b;" data-toggle="tooltip" data-placement="top" title="Usuario profesional">
                                                        <i class="mdi mdi-medal"></i>
                                                    </span>
                                                @elseif($application->user->plan == 'premium')
                                                    <span class="badge badge-light badge-pill" style="height: 21.4px;width: 22px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;position: absolute;right:0px;top: 67px;border: 1px solid #193d64;" data-toggle="tooltip" data-placement="top" title="Usuario premium">
                                                        <i class="mdi mdi-trophy"></i>
                                                    </span>
                                                @endif
                                                <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($application->user->image == null ? 'no-user.png' : $application->user->image)}}" style="width:90px;height:90px; @if($application->user->plan == 'professional') border:3px solid #55c12e @elseif($application->user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                </div>
                                                <p class="font-weight-bold communityNameUS" style="margin-bottom:0.5rem !important;"><span><a href="/freelancer/{{$application->user->code}}">{{substr($userName[0],0,9)}}</a></span><i class="ml-1 flag-icon flag-icon-{{$application->user->country}}" title="{{$application->user->country}}" id="{{$application->user->country}}" style="position:relative;top:1px;"></i></p>
                                               
                                            </div> -->
                                            <div class="col-12 px-4 py-3" style="background:#F8F8F8;border-radius: 20px;text-align:left;position:relative;">
                                                @php
                                                //title link
                                                $link = str_replace(' ','-',strtolower($application->title));
                                                $link = str_replace(',','',$link);
                                                $link = str_replace('ñ','n',$link);
                                                $link = str_replace('á','a',$link);
                                                $link = str_replace('é','e',$link);
                                                $link = str_replace('í','i',$link);
                                                $link = str_replace('ó','o',$link);
                                                $link = str_replace('ú','u',$link);
                                                @endphp
                                                <div class="col-4 col-md-2 p-0" style="width: 230px;white-space: nowrap;">
                                                    <img class="rounded-circle mt-1 mb-0 mr-1 " src="/images/users/{{($application->user->image == null ? 'no-user.png' : $application->user->image)}}" style="margin: 8px 0px auto !important;width:30px;height:30px; @if($application->user->plan == 'professional') border:2px solid #55c12e @elseif($application->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                    <p class="font-weight-bold m-0 mt-2 communityNameUS" style="display: inline; position: relative; top:6px;font-size: 18px;">
                                                        <span>
                                                            <i class="ml-1 flag-icon flag-icon-{{$application->user->country}}" title="{{$application->user->country}}" id="{{$application->user->country}}" style="font-size:16px;"></i>
                                                            <a href="/p/{{$application->user->code}}">{{$userName[0]}}</a>
                                                        </span>
                                                    </p>
                                                </div>
                                                    @php
                                                        $text = substr($application->text,0,174);//cortamos menor a 160
                                                        $text = substr($text, 0, strrpos($text, ' '));//evita cortar palabras                                                        
                                                        $text = strip_tags($text);//quitamos etiquetas html
                                                    @endphp
                                                    <p style="font-size:15px;margin-bottom:42px;">{{$text}}</p>
                                                    <!-- <p class="category" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:5px 12px;width:max-content;position:absolute;bottom:10px;left:22px !important;margin:0px;display:inline-block;">{!! $iconCatApp !!}</p> -->
                                                    <p class="comments" data-toggle="collapse" href="#collapseCommentsShorts{{$application->id}}" role="button" aria-expanded="false" aria-controls="collapseCommentsShorts{{$application->id}}" style="font-size:13px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;position:absolute;left:24px;bottom:10px;margin:0px;display:inline-block;padding-right: 40px;">19 Comentarios <i class="mdi mdi-arrow-down-drop-circle-outline" style="font-size: 18px;position: absolute;top: 4px;right: 3px;margin-right: 4px;"></i></p>
                                                
                                                    @auth
                                                        @if($application->user->id != Auth::user()->id)
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
                                                            @endif
                                                        @else
                                                            <button type="button" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                                <i class="mdi mdi-close" style="color: red;font-size: 18px;position: relative;top: -4px;"  data-toggle="tooltip" data-html="true" title="Proyecto Cerrado"></i>
                                                            </button>      
                                                        @endif
                                                    @endauth
                                                    @guest
                                                        <button type="button" data-toggle="tooltip" data-html="true" title="Denunciar esto" style="background:#c8eab8;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                                            <i class="mdi mdi-alert-circle-outline" style="font-size: 18px;position: relative;top: -4px;"></i>
                                                        </button>
                                                    @endguest
                                                </p>
                                                <p class="text-left mb-2 mt-0" style="color:black;top:2px;right:17px;position: absolute;font-weight:bold;">hace {{$application->diff}}</p>  
                                            </div>
                                            <!-- comments -->
                                            <div class="collapse w-100" id="collapseCommentsShorts{{$application->id}}" style="box-shadow: none;margin-top: 10px;border-color: silver;">
                                                <div class="card" style="box-sizing: none;box-shadow: none;border-color: silver;">
                                                    <div class="card-bod p-3">
                                                        <!-- <textarea class="form-control mb-1" id="validationTextarea" placeholder="Agrega un comentario…" style="border: 1px solid rgb(85, 193, 46); font-size: 14px; line-height: 14px;border-radius:4px;"></textarea> -->
                                                        <!-- <button type="button" class="btn btn-primary btn-block text-white mb-3" href="/publicar" style="font-size:18px;">Comentar</button> -->
                                                        <div class="mb-2" style="background: #f0f0f0;padding: 10px;border-radius: 12px;">
                                                            <h5 class="m-0">19 Comentarios</h5>
                                                        </div>
                                                        <div class="mb-2" style="background: #f0f0f0;padding: 10px;border-radius: 12px;">
                                                            <div class="col-12 p-0" style="">
                                                                <img class="rounded-circle mt-0 mb-0 mr-1 " src="/images/users/14THtvZvtsB7CojA.jpg" style="width:30px;height:30px;  border:2px solid grey " data-toggle="tooltip" data-placement="top" title="" alt="FREDDI" data-original-title="FREDDI">
                                                                <p class="font-weight-bold m-0 mt-2 communityNameUS" style="display:inline;position: relative;top:3px;">
                                                                    <span><a href="/p/nyyykds7yxwp0uzqywxkxpkurfqqemec">FREDDI</a></span>
                                                                    <i class="ml-1 flag-icon flag-icon-co" title="co" id="co" style="position: relative;top: 0px;"></i>
                                                                </p>
                                                            </div>
                                                            <p class="m-0 mt-1">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                                        </div>

                                                        <div class="mb-2" style="background: #f0f0f0;padding: 10px;border-radius: 12px;">
                                                            <div class="col-12 p-0" style="">
                                                                <img class="rounded-circle mt-0 mb-0 mr-1 " src="/images/users/14THtvZvtsB7CojA.jpg" style="width:30px;height:30px;  border:2px solid grey " data-toggle="tooltip" data-placement="top" title="" alt="FREDDI" data-original-title="FREDDI">
                                                                <p class="font-weight-bold m-0 mt-2 communityNameUS" style="display:inline;position: relative;top:3px;">
                                                                    <span><a href="/p/nyyykds7yxwp0uzqywxkxpkurfqqemec">Mauricio Díaz</a></span>
                                                                    <i class="ml-1 flag-icon flag-icon-uy" title="uy" id="uy" style="position: relative;top: 0px;"></i>
                                                                </p>
                                                            </div>
                                                            <p class="m-0 mt-1">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- comments end -->
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
                                                    <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($application->user->image == null ? 'no-user.png' : $application->user->image)}}" style="width:40px;height:40px;">
                                                    <p class="font-weight-bold communityNameUS"><a href="/freelancer/{{$application->user->code}}">{{$userName[0]}}</a> <i class="ml-1 flag-icon flag-icon-{{$application->user->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                                    @if($application->user->plan == 'professional')
                                                        <span class="badge badge-light badge-pill" style="font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#55c12e;border: 1px solid #458e2b;">
                                                            <i class="mdi mdi-medal" style="font-size: 28px;"></i>
                                                        </span>
                                                        <div style="font-size: 10px;font-weight: bold;color: #458e2b;margin-bottom:12px;">Usuario Profesional</div>
                                                    @elseif($application->user->plan == 'premium')
                                                        <span class="badge badge-light badge-pill" style="font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;background:#007bff;border: 1px solid #193d64;">
                                                            <i class="mdi mdi-trophy" style="font-size: 28px;"></i>
                                                        </span>
                                                        <div style="font-size: 10px;font-weight: bold;color: #193d64;margin-bottom:12px;">Usuario Premium</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-10 text-center">
                                                    <h4 style="font-weight:bold;">{{$application->title}}</h4>
                                                    <p style="font-size:14px;">{{$application->text}}</p>
                                                    <div class="form-group">
                                                        <label class="float-left">Propuesta ( 360 caracteres max )</label>
                                                        <textarea name="message" clas="form-control font-weight-bold" placeholder="Escríbe tu propuesta aqui ... " cols="30" rows="4" maxlength="360" onkeypress="return /[a-z 0-9 ñ ´ _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)" style="width:100%;border-radius: 4px;border: 2px solid #35b0ff;" required></textarea>
                                                    </div>
                                                    @if(Auth::user()->register_by == 'web' && Auth::user()->email_verified_at == null)
                                                        <div class="form-group">
                                                            <div class="alert alert-danger" role="alert">
                                                              <strong>Debes confirmar tu dirección de correo electrónico para responder</strong>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="form-group">
                                                            <input type="hidden" name="application_id" value="{{$application->id}}">
                                                            <button type="submit" class="btn btn-info">Enviar propuesta</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    @endif
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
                            @endif
                        @endforeach
                        @if(count($applications) == 0 )
                            <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                              <div class="card" style="border-radius:20px;">
                                <div class="card-body pt-3 pb-3 text-center">                            
                                    <div class="p-5 text-center">
                                        <h2 class="text-gray">Sin resultados</h2>
                                    </div>
                                </div>
                               </div>
                            </div>            
                        @endif    
                        </div>



                        <div class="tab-pane  active @if(Request::segment(2) == 'Busco')  @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <!-- <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-0">
                                        <h4 class="mb-3">Mercados IT</h4>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><img src="/images/earth.svg" style="width:16px;position:relative;top: -2px;"> Global</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-ar" title="ar" id="ar" style="position:relative;top:1px;"></i> Argentina</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-au" title="au" id="au" style="position:relative;top:1px;"></i> Australia</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-ca" title="ca" id="ca" style="position:relative;top:1px;"></i> Canadá</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-cl" title="cl" id="cl" style="position:relative;top:1px;"></i> Chile</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-co" title="co" id="co" style="position:relative;top:1px;"></i> Colombia</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-es" title="es" id="es" style="position:relative;top:1px;"></i> España</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-mx" title="mx" id="mx" style="position:relative;top:1px;"></i> Mexico</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-pe" title="pe" id="pe" style="position:relative;top:1px;"></i> Perú</p></a>
                                    </div>
                                    <a href="#"><p style="font-size:13px;font-weight:bold;border-radius: 20px;padding:3px 12px;width:max-content;margin:0px;display:inline-block;width: 100%;text-align: center;padding: 0px;"><i class="mdi mdi-arrow-down-drop-circle" title="ver todos" style="font-size:16px;"></i> Ver Todos</p></a>
                                </div>
                            </div> -->





                            <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3 px-2">
                                    <!-- temas de la comunidad -->
                                    @foreach($posts as $key => $post)
                                        @if($post->type == 'post')
                                            @php
                                                $userName = explode(' ',$post->user->name);
                                            @endphp    
                                            <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                            <div class="card" style="border-radius:20px;">
                                                <div class="card-body pt-3 pb-3 px-2">

                                                <!-- temas de la comunidad -->
                                                    <div class="d-flex justify-content-end align-items-center"">
                                                        <div class="col-md-12 px-4 py-3" style="background:#F8F8F8;border-radius: 20px;text-align:left;position:relative;">
                                                            <h3 class="titlePost mt-0 mb-0 font-weight-bold">
                                                                <!-- <img class="rounded-circle mt-1 mb-0 mr-1 float-left" src="/images/users/{{($post->user->image == null ? 'no-user.png' : $post->user->image)}}" style="width:34px;height:34px; @if($post->user->plan == 'professional') border:2px solid #55c12e @elseif($post->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}"> -->
                                                                <a href="/p/{{$post->url}}/{{$post->id}}">{{$post->title}}</a>
                                                            </h3>
                                                            @php                                                       
                                                            $text = strip_tags($post->cita);//quitamos etiquetas html
                                                            @endphp
                                                            @if($post->image_upload == 1)
                                                                <img src="{{$post->image}}" class="zoomable-image" style="float: left;height:66px;width:66px !important;border-radius:8px;margin-right:8px;margin-top:10px;">
                                                            @else
                                                                <img src="{{$post->image}}" class="zoomable-image" style="float: left;height:66px;width:66px !important;border-radius:8px;margin-right:8px;margin-top:10px;">
                                                            @endif
                                                            <p class="mt-1" style="font-size:15px;margin-bottom:0px;min-height:72px;">{{$text}}</p>
                                                            <ul class="list-inline p-0 mb-1 mt-0">
                                                                <li class="list-inline-item mr-1">
                                                                    <p data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>" style="font-weight:bold;background:#e3e5e2;border-radius: 20px;padding:4px 5px;bottom:10px;margin:0px;display:inline-block;height: 24px;text-align: center;/*! margin-top: 4px; */position: relative;top: 8px;">
                                                                        <i class="ml-1 {{$iconsClass[$post->categoryPost->name]}}" style="font-size:16px;margin: 0px !important;top: -7px;left: -1px;position: relative;"></i><span style="position: relative;top: -9px;font-size:11px;">{{$post->categoryPost->name}}</span>                                                                                           
                                                                    </p>
                                                                </li><li class="list-inline-item mx-1 separateTiem">|</li>
                                                                <li class="list-inline-item separateTiem">
                                                                @if($post->country == 'gg')
                                                                    <strong>Tema Global</strong><p class="pr-0" data-toggle="tooltip" data-placement="top" title="Tema Global" style="font-size:11px;font-weight:bold;border-radius: 20px;padding:5px 8px;width:max-content;margin:2px 0px;display:inline-block;"><img src="/images/earth.svg" style="width:16px;position:relative;top: -2px;" alt="ícono del mundo"></p>
                                                                @else
                                                                    <p class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Refiere a: {{$post->country}}" style="font-size:11px;font-weight:bold;border-radius:8px;padding:3px ;width:max-content;margin:0px;"><strong class="mr-1 text-uppercase">{{$arrIconCountries[$post->country]}}</strong><i class="ml-1 flag-icon flag-icon-{{$post->country}}" title="{{$post->country}}" id="{{$post->country}}" style="position:relative;top:1px;"></i></p>
                                                                @endif
                                                                </li>
                                                                <!-- <li class="list-inline-item separateTiem">|</li>
                                                                @if($post->tec1)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost1->name}}</strong></a></li>@endif
                                                                @if($post->tec2)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost2->name}}</strong></a></li>@endif
                                                                @if($post->tec3)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost3->name}}</strong></a></li>@endif
                                                                @if($post->tec4)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost4->name}}</strong></a></li>@endif -->
                                                            </ul>
                                                            <div class="row">
                                                                <div class="col-4 col-md-2 px-1" style="width: 230px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;padding-left: 0.8rem !important;">
                                                                    <i class="ml-1 flag-icon flag-icon-{{$post->user->country}}" title="{{$post->user->country}}" id="{{$post->user->country}}" style="position:absolute;top:24px;left:42px;font-size:12px;"></i>
                                                                    <img class="rounded-circle mt-1 mb-0 mr-1 " src="/images/users/{{($post->user->image == null ? 'no-user.png' : $post->user->image)}}" style="margin: 8px 0px auto !important;width:30px;height:30px; @if($post->user->plan == 'professional') border:2px solid #55c12e @elseif($post->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                                    <p class="font-weight-bold m-0 mt-2 communityNameUS" style="display: inline; position: relative; top:-2px;">
                                                                        <span><a href="/p/{{$post->user->code}}">{{$userName[0]}}</a></span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4 col-md-2 px-1">
                                                                    <div class="mb-0 mt-2 text-center"  data-toggle="tooltip" data-placement="bottom" title="vistas" style="cursor:pointer;border:1px solid #28a745;border-radius:4px;padding: 4px;font-size: 8px;background: #e7ffd9;color:#28a745;font-weight: bold;">
                                                                        <p class="m-0" style="font-size: 14px;font-weight: bold;"><i class="mdi mdi-eye"></i> {{$post->views}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 col-md-2 px-1">
                                                                    <div class="mb-0 mt-2 cont1 text-center" style="padding:4px;font-size:0.8rem;color:#286ba7;cursor:pointer;background: #ebf3ff;border:1px solid;border-radius:4px;font-weight:bold;right:0px;margin-bottom: 0px !important;"  data-toggle="tooltip" data-placement="bottom" title="Comentarios">
                                                                        <p class="m-0" style="font-size:14px;font-weight:bold;"> <i class="mdi mdi-tooltip-text"></i> 0</p>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-1 col-md-1  px-1">
                                                                    <div class="mb-0 mt-0 pt-2 pl-0 cont1 text-left" style="padding:4px;font-size:0.8rem;color:#286ba7;cursor:pointer;font-weight:bold;right:0px;margin-bottom: 0px !important;"  data-toggle="tooltip" data-placement="bottom" title="Ofrece empleo">
                                                                    <p data-toggle="tooltip" data-html="true" title="" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;" data-original-title="<em><b>Aplicaciones de escritorio</b>">
                                                                        <i class="ml-1 mdi mdi mdi-code-array" style="font-size:18px;margin: 0px !important;top: -6px;position: relative;"></i>                                                                                             
                                                                    </p>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <div class="text-right pr-2" style="top:-2px;position:absolute;width:100%;left: 0px;">
                                                                
                                                                <!-- <p data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>" style="font-weight:bold;background:#e3e5e2;border-radius: 20px;padding: 5px;bottom:10px;margin:0px;display:inline-block;height: 24px;text-align: center;/*! margin-top: 4px; */position: relative;top: 8px;">
                                                                    <i class="ml-1 {{$iconsClass[$post->categoryPost->name]}}" style="font-size:16px;margin: 0px !important;top: -7px;left: -1px;position: relative;"></i><span style="position: relative;top: -9px;font-size:11px;">{{$post->categoryPost->name}}</span>                                                                                           
                                                                </p>-->
                                                                <p class="m-0 p-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>">
                                                                    <span style="color:#2e2e2e;font-weight:bold;font-size:13px;position:relative;top:2px;">Publicado hace <time datetime="{{$post->created_at}}">{{$post->diff}}</span>                                                                                       
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                            @if(count($applications) == 0 )
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3 text-center">                            
                                        <div class="p-5 text-center">
                                            <h2 class="text-gray">Sin resultados</h2>
                                        </div>
                                    </div>
                                </div>
                                </div>            
                            @endif   
                        </div> 
                        <div class="tab-pane  active @if(Request::segment(2) == 'Busco') show active @endif" id="pills-jobs" role="tabpanel" aria-labelledby="pills-jobs-tab">
                            <!-- <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-0">
                                        <h4 class="mb-3">Mercados IT</h4>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><img src="/images/earth.svg" style="width:16px;position:relative;top: -2px;"> Global</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-ar" title="ar" id="ar" style="position:relative;top:1px;"></i> Argentina</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-au" title="au" id="au" style="position:relative;top:1px;"></i> Australia</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-ca" title="ca" id="ca" style="position:relative;top:1px;"></i> Canadá</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-cl" title="cl" id="cl" style="position:relative;top:1px;"></i> Chile</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-co" title="co" id="co" style="position:relative;top:1px;"></i> Colombia</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-es" title="es" id="es" style="position:relative;top:1px;"></i> España</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-mx" title="mx" id="mx" style="position:relative;top:1px;"></i> Mexico</p></a>
                                        <a href="#"><p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding:7.5px 12px;width:max-content;margin:2px 0px;display:inline-block;"><i class="ml-1 flag-icon flag-icon-pe" title="pe" id="pe" style="position:relative;top:1px;"></i> Perú</p></a>
                                    </div>
                                    <a href="#"><p style="font-size:13px;font-weight:bold;border-radius: 20px;padding:3px 12px;width:max-content;margin:0px;display:inline-block;width: 100%;text-align: center;padding: 0px;"><i class="mdi mdi-arrow-down-drop-circle" title="ver todos" style="font-size:16px;"></i> Ver Todos</p></a>
                                </div>
                            </div> -->





                            <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3 px-2">
                                    <!-- temas de la comunidad -->
                                    @foreach($posts as $key => $post)
                                        @if($post->type == 'job')
                                            @php
                                                $userName = explode(' ',$post->user->name);
                                            @endphp    
                                            <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                            <div class="card" style="border-radius:20px;">
                                                <div class="card-body pt-3 pb-3 px-2">

                                                <!-- temas de la comunidad -->
                                                    <div class="d-flex justify-content-end align-items-center"">
                                                        <div class="col-md-12 px-4 py-3" style="background:#F8F8F8;border-radius: 20px;text-align:left;position:relative;">
                                                            <h3 class="titlePost mt-0 mb-0 font-weight-bold">
                                                                <!-- <img class="rounded-circle mt-1 mb-0 mr-1 float-left" src="/images/users/{{($post->user->image == null ? 'no-user.png' : $post->user->image)}}" style="width:34px;height:34px; @if($post->user->plan == 'professional') border:2px solid #55c12e @elseif($post->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}"> -->
                                                                <a href="/p/{{$post->url}}/{{$post->id}}">{{$post->title}}</a>
                                                            </h3>
                                                            @php                                                       
                                                            $text = strip_tags($post->cita);//quitamos etiquetas html
                                                            @endphp
                                                            <img src="{{$post->image}}" class="zoomable-image" style="float: left;height:66px;width:66px !important;border-radius:8px;margin-right:8px;margin-top:10px;">
                                                            <p class="mt-1" style="font-size:15px;margin-bottom:0px;min-height:72px;">{{$text}}</p>
                                                            <ul class="list-inline p-0 mb-1 mt-0">
                                                                <li class="list-inline-item mr-1">
                                                                    <p data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>" style="font-weight:bold;background:#e3e5e2;border-radius: 20px;padding:4px 5px;bottom:10px;margin:0px;display:inline-block;height: 24px;text-align: center;/*! margin-top: 4px; */position: relative;top: 8px;">
                                                                        <i class="ml-1 {{$iconsClass[$post->categoryPost->name]}}" style="font-size:16px;margin: 0px !important;top: -7px;left: -1px;position: relative;"></i><span style="position: relative;top: -9px;font-size:11px;">{{$post->categoryPost->name}}</span>                                                                                           
                                                                    </p>
                                                                </li>
                                                                <li class="list-inline-item mx-1 separateTiem">|</li>
                                                                <li class="list-inline-item separateTiem">
                                                                @if($post->country == 'gg')
                                                                    <strong>Tema Global</strong><p class="pr-0" data-toggle="tooltip" data-placement="top" title="Tema Global" style="font-size:11px;font-weight:bold;border-radius: 20px;padding:5px 8px;width:max-content;margin:2px 0px;display:inline-block;"><img src="/images/earth.svg" style="width:16px;position:relative;top: -2px;" alt="ícono del mundo"></p>
                                                                @else
                                                                    <p class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Refiere a: {{$post->country}}" style="font-size:11px;font-weight:bold;border-radius:8px;padding:3px ;width:max-content;margin:0px;"><strong class="mr-1 text-uppercase">{{$arrIconCountries[$post->country]}}</strong><i class="ml-1 flag-icon flag-icon-{{$post->country}}" title="{{$post->country}}" id="{{$post->country}}" style="position:relative;top:1px;"></i></p>
                                                                @endif
                                                                </li>
                                                                <!-- <li class="list-inline-item separateTiem">|</li>
                                                                @if($post->tec1)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost1->name}}</strong></a></li>@endif
                                                                @if($post->tec2)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost2->name}}</strong></a></li>@endif
                                                                @if($post->tec3)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost3->name}}</strong></a></li>@endif
                                                                @if($post->tec4)<li class="list-inline-item"><a href="#"><strong>{{$post->tecPost4->name}}</strong></a></li>@endif -->
                                                            </ul>
                                                            <div class="row">
                                                                <div class="col-4 col-md-2 px-1" style="width: 230px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;padding-left: 0.8rem !important;">
                                                                    <i class="ml-1 flag-icon flag-icon-{{$post->user->country}}" title="{{$post->user->country}}" id="{{$post->user->country}}" style="position:absolute;top:24px;left:42px;font-size:12px;"></i>
                                                                    <img class="rounded-circle mt-1 mb-0 mr-1 " src="/images/users/{{($post->user->image == null ? 'no-user.png' : $post->user->image)}}" style="margin: 8px 0px auto !important;width:30px;height:30px; @if($post->user->plan == 'professional') border:2px solid #55c12e @elseif($post->user->plan == 'premium') border:2px solid #007bff @else border:2px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                                    <p class="font-weight-bold m-0 mt-2 communityNameUS" style="display: inline; position: relative; top:-2px;">
                                                                        <span><a href="/p/{{$post->user->code}}">{{$userName[0]}}</a></span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4 col-md-2 px-1">
                                                                    <div class="mb-0 mt-2 text-center"  data-toggle="tooltip" data-placement="bottom" title="vistas" style="cursor:pointer;border:1px solid #28a745;border-radius:4px;padding: 4px;font-size: 8px;background: #e7ffd9;color:#28a745;font-weight: bold;">
                                                                        <p class="m-0" style="font-size: 14px;font-weight: bold;"><i class="mdi mdi-eye"></i> {{$post->views}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 col-md-2 px-1">
                                                                    <div class="mb-0 mt-2 cont1 text-center" style="padding:4px;font-size:0.8rem;color:#286ba7;cursor:pointer;background: #ebf3ff;border:1px solid;border-radius:4px;font-weight:bold;right:0px;margin-bottom: 0px !important;"  data-toggle="tooltip" data-placement="bottom" title="Comentarios">
                                                                        <p class="m-0" style="font-size:14px;font-weight:bold;"> <i class="mdi mdi-tooltip-text"></i> 0</p>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-1 col-md-1  px-1">
                                                                    <div class="mb-0 mt-0 pt-2 pl-0 cont1 text-left" style="padding:4px;font-size:0.8rem;color:#286ba7;cursor:pointer;font-weight:bold;right:0px;margin-bottom: 0px !important;"  data-toggle="tooltip" data-placement="bottom" title="Ofrece empleo">
                                                                    <p data-toggle="tooltip" data-html="true" title="" style="font-size:8px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 8px;bottom:10px;margin:0px;display:inline-block;height: 33px;text-align: center;" data-original-title="<em><b>Aplicaciones de escritorio</b>">
                                                                        <i class="ml-1 mdi mdi mdi-code-array" style="font-size:18px;margin: 0px !important;top: -6px;position: relative;"></i>                                                                                             
                                                                    </p>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <div class="text-right pr-2" style="top:-2px;position:absolute;width:100%;left: 0px;">
                                                                
                                                                <!-- <p data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>" style="font-weight:bold;background:#e3e5e2;border-radius: 20px;padding: 5px;bottom:10px;margin:0px;display:inline-block;height: 24px;text-align: center;/*! margin-top: 4px; */position: relative;top: 8px;">
                                                                    <i class="ml-1 {{$iconsClass[$post->categoryPost->name]}}" style="font-size:16px;margin: 0px !important;top: -7px;left: -1px;position: relative;"></i><span style="position: relative;top: -9px;font-size:11px;">{{$post->categoryPost->name}}</span>                                                                                           
                                                                </p>-->
                                                                <p class="m-0 p-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<em><b>{{$post->categoryPost->name}}</b>">
                                                                    <span style="color:#2e2e2e;font-weight:bold;font-size:13px;position:relative;top:2px;">Publicado hace {{$post->diff}}</span>                                                                                       
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                            @if(count($applications) == 0 )
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                <div class="card" style="border-radius:20px;">
                                    <div class="card-body pt-3 pb-3 text-center">                            
                                        <div class="p-5 text-center">
                                            <h2 class="text-gray">Sin resultados</h2>
                                        </div>
                                    </div>
                                </div>
                                </div>            
                            @endif   
                        </div> 
                    </div>        
                </div>  
            </div>   
            <!-- ROTOR USUARIOS NUEVOS -->  
            <div class="col-md-1 pl-0 contScrollsTop">
                <!-- SCROLL USUARIOS NUEVOS -->  
                <ul class="container fixed contScrolls">
                <a href="/freelancers" class="d-none d-md-block btn btn-primary mb-2" style="z-index:9999;position: relative;">Ver todos <i class="mdi mdi-account-multiple"></i></a>
                    @foreach($users as $user)
                        @php
                        $userName = explode(' ',$user->name);
                        @endphp
                        <li class="p-0">
                        <div style="position:relative;">
                            <img class="rounded-circle mt-1 mb-1 imgScrollUs" src="/images/users/{{($user->image == null ? 'no-user.png' : $user->image)}}" style="width:60px;height:60px; @if($user->plan == 'professional') border:3px solid #55c12e @elseif($user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}} - {{$user->country}} - {{$user->rubro}} freelance">
                            <i class="ml-0 flag-icon flag-icon-{{$user->country}} flagScroll" title="{{$user->country}}" id="{{$user->country}}" style="position:absolute;top:45px;left:50px;width: 20px;"></i>
                            <p class="font-weight-bold communityNameUS2 text-black" style="font-size: 12px;"><span>{{substr($userName[0],0,8)}}</span></p>
                        </div>
                        </li>
                    @endforeach 
                </ul>
                <div id="closeScroll" style="display:none;width: 26.5px;height:26.5px;text-align: center;right:0px;position: relative;top:-50px;float: right;background: white;border-radius: 100%;border: 1px solid grey;">
                    <i class="mdi mdi-window-close"></i>
                </div> 
                <a href="/freelancers" class="d-md-none btn btn-primary btn-sm mb-2" style="margin: auto;text-align: center;position: absolute;left:1%;top: -51px;border-radius: 20px;font-size: 12px;margin-bottom:0px !important;padding:0.5rem 0.41rem;">Ver todos <i class="mdi mdi-account-multiple"></i></a>
                <!-- END SCROLL USUARIOS -->
            </div> 
            <!--  END ROTOR -->                                     
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


        <!-- Modal Select country -->
        <div class="modal fade" id="modalCountry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Seleciona tu país</h5>
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



    </div>   
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 


        //Gira el icono al abrir el acordeon de comentario
        $('.comments').on('click', function(){
            // Encontrar el ícono dentro del elemento con la clase 'comments' y rotarlo 180 grados
            $(this).find('.mdi').toggleClass('rotate-icon');
        });
        //-----

        
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
$(document).ready(function(){
    setTimeout(function(){//en cel aparece luego de 2.5 segundos
        $('.contScrolls').css('display','block');
    },2400);
});

//script de scroll vertical usuarios 
    var x = 0,
    container = $('.container'),
    items = container.find('li'),
    containerHeight = 45,
    numberVisible = 8,
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
  container.find('li.first').animate({ marginTop: "-50px" }, 600, function(){  $(this).remove(); container.find('li:first').addClass("first"); });
}

if(intervalSec < 700){
  intervalSec = 700;
}

function vertCycleSm() {
  var firstItem = container.find('li.first').html();
    
  container.append('<li>'+firstItem+'</li>');
  firstItem = '';
  container.find('li.first').animate({ marginLeft: "-50px" }, 800, function(){  $(this).remove(); container.find('li:first').addClass("first"); });
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
        if(userAuth.country == 'wl'){//wl = world / sin pais
            jQuery.noConflict();
            $('#modalCountry').modal('show');     
        }  
        if(userAuth.rubro == null && userAuth.country != 'wl'){
             jQuery.noConflict();
            $('#modalRubro').modal('show');
        }        
    </script>
@endauth

@endsection


@section('footer')
    @include('footer')
@endsection     