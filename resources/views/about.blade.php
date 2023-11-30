@extends('layouts.web')

@section('head')
<title>Sobre Nosotros - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/sobre-nosotros">

<meta name="description" content="Nuestra plataforma freelance fue creada para facilitarle a todos los profesionales de Latinoamérica poder encontrar proyectos en los cuales trabajar">
<meta name="keywords" content="sobre heiwork, que es heiwork, plataforma freelance heiwork, trabajadores freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Sobre Nosotros | Heiwork">
<meta property="og:description" content="¿Que es heiwork? conoce nuestra plataforma de trabajo freelance totalmente gratis y publica con nosotros tus proyectos, muchos trabajadores están esperando para trabajar.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="¿Que es heiwork? conoce nuestra plataforma de trabajo freelance totalmente gratis y publica con nosotros tus proyectos, muchos trabajadores están esperando para trabajar." />
<meta name="twitter:title" content="Sobre Nosotros | Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />


<style>
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
    .flag-icon{
    line-height: 1em;
    font-size: 32px;
    top: 45px;
    left: 35px;
    border-radius:2px;
    }
    p{
    	font-size:14px;
    }
    .landing-page > .container-fluid{
        /*background: linear-gradient(0deg, rgba(84,9,121,1) 0%, rgba(165,32,176,1) 100%);*/
        text-align: left;
    }
    .container-fluid .middle-section{
    	padding-top: 90px;
    }
    @media screen and (max-width: 992px){
        .contBtns{
            text-align: center;
        }
    }
    @media screen and (max-width: 768px){
        .top-banner-content{
            padding-top: 40px !important;
        }
    }
    @media screen and (max-width: 400px){
        .btn-warning{
            margin-bottom: 15px;
        }
    }

</style>
@endsection
@section('content')
<!--
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="row">
                        <div class="col-md-12 pb-5 mb-3">
                            <h1>Software de gestión de clínicas y citas medicas!</h1>
                            <h2>Inicia sesión para ver el prototipo en marcha</h2>
                        </div>    
                    </div>
                    <div class="row">
                        <p>Gestiona tus citas medicas de forma sencilla y profesional con Ayster, te ofrecemos el mejor software para poder administrar tu clínica de forma intuitiva y eficiente cada día.</p>
                        <p>Puedes agendar turnos a tus pacientes cualquier día y hora de forma simple, Asyster es una plataforma online que trabaja 100% en la nube sin necesidad de descargar ni instalar.</p>
                        <p>Contamos con clientes en toda latinoamerica que ya están utilizando Asyster para gestionar sus clínicas privadas, siendo estas de diferentes sectores dentro de la medicina y rubros similares a esta.</p>
                        <h4>Proyecto en desarrollo</h4>
                    </div>
                    <div class="row mt-5 mb-5">
                    </div>
                    
                </div>
            </div>
        </div>    
    </div> 
    -->
  <div class="container-scroller landing-page">
        <div class="container-fluid middle-section bg-white p-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                	<h2>Sobre Heiwork</h2>
                	<p>Heiwork es una plataforma que ofrece servicios de contacto de forma ágil y practica entre trabajadores y contratantes que estén buscando personas para participar en proyectos de corto y mediano plazo. Nuestra web fue creada bajo un concepto de simpleza , para que todas las personas puedan acceder de forma directa y conectar rápidamente con, con trabajadores o con ofertántes de trabajo, accediendo mediante las cuentas de redes sociales, que generan una participación inmediata.</p>
                    <p class="text-center">
                        <img src="/images/h8.jpeg" class="img-fluid" alt="Nuestro equipo de trabajo">
                    </p>
                    <h3><a href="https://vk.com/@684116244-trabajos-desde-casa-en-2022">post trabajos en casa 2022</a></h3>
                </div>
            </div>
        </div>
        <div class="container-fluid middle-section p-5">
        	<div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>La comunidad</h2>
                    <p>Nuestro objetivo es formar una comunidad de personas procedentes de todo Latinoamérica y países de habla hispana, que trabajan diariamente de forma remota o estén empezando y quieran contactar con personas de forma inmediata, para poder ejercer sus talentos sin restricciones de ningún tipo, nuestra filosofía es lo mas rápido y fácil posible, que todas las personas encuentren lo que están buscando con la facilidad que merece el mundo altamente conectado en el que vivimos.</p>
                    <p class="text-center">
                        <img src="/images/h11111.jpeg" class="img-fluid" alt="Nuestra comunidad freelance">
                    </p>
                </div>
            </div>
        </div>
		<div class="container-fluid middle-section bg-white p-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>Nuestros Servicios</h2>
                    <p>De forma gratuita ofrecemos a todas las personas interesadas en contactar con clientes o empleados, un espacio para que puedan publicar sus necesidades laborales, haciéndolas visibles a todos nuestros usuarios las 24 horas, y brindando las herramientas para que pueda generar una comunicación rápida dentro de nuestra plataforma, al menos desde un inicio, y luego si las partes lo desean podrán continuar de forma privada por los medios que les resulten mas cómodos de utilizar.</p>
                    <p class="text-center">
                        <img src="/images/h40.jpeg" class="img-fluid" alt="Todos nuestros Servicios y planes">
                    </p>
                </div>
            </div>
        </div>    
        <!--
        <div class="container-fluid middle-section p-5">
        	<div class="row">
                <div class="col-md-8 mx-auto">
                	<h2>Card title that wraps to a new line</h2>
                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet optio laudantium fugiat laboriosam ut libero placeat quis fuga officia consectetur magnam, quas iusto, quos repellendus eius reiciendis ratione maiores neque.</p>
                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet optio laudantium fugiat laboriosam ut libero placeat quis fuga officia consectetur magnam, quas iusto, quos repellendus eius reiciendis ratione maiores neque.</p>
                </div>
            </div>
        -->
        </div>            
@endsection   


@section('footer')
    @include('footer')
@endsection  