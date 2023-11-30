@extends('layouts.web')

@section('head')
<title>Contacto - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/contacto">

<meta name="description" content="Contacta con nuestro equipo de soporte, nuestra plataforma de trabajo online cuenta con un servicio de contacto vía email para que todos nuestros clientes">
<meta name="keywords" content="Contacto heiwork, soporte de usuarios, heiwork, email freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Contacto - Heiwork">
<meta property="og:description" content="Contacta con nuestro equipo de soporte, nuestra plataforma de trabajo online cuenta con un servicio de contacto vía email para que todos nuestros clientes puedan recibir soporte.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Contacta con nuestro equipo de soporte, nuestra plataforma de trabajo online cuenta con un servicio de contacto vía email para que todos nuestros clientes puedan recibir soporte." />
<meta name="twitter:title" content="Contacto - Heiwork" />
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

  <div class="container-scroller landing-page">

        <div class="container-fluid middle-section bg-white p-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>Contacto</h2>
                    <p>Ponte en contacto con nuestro equipo, por dudas o consultas acerca de nuestros servicios.</p>
                    @if (session('success'))
                        <div class="alert alert-success font-weight-bold" role="alert" style="font-size:14px;">
                            Gracias por ponerte en contacto con nosotros! Nuestro equipo se pondrá en contacto contigo pronto.
                        </div>
                    @endif
                    <div class="col-md-7 pl-0 pb-5">
                    <form method="POST" id="formContact" action="/sendMessageContact">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="name" placeholder="Nombre completo" class="form-control" required="true"> 
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico:</label>
                            <input type="text" name="email" placeholder="Correo electrónico" class="form-control" required="true" />
                        </div>
                        <div class="form-group">
                            <label>Mensaje:</label>
                            <textarea name="message" class="form-control" cols="30" rows="5" required="true" ></textarea>
                        </div> 
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label p-0">Captcha</label>
                            <div class="col-md-6 pull-center p-0"  style="transform: scale(0.77); -webkit-transform: scale(0.77); transform-origin: 0 0; -webkit-transform-origin: 0 0;">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group pb-5">
                            <input type="submit" class="form-control btn btn-sm btn-primary" style="width:100px;"value="Enviar">
                        </div>   
                    </form>
                    <cite style="color:#949494;font-size:14px;">heiwork company - Av. Luis Alberto Herrera 1248, Montevideo, Uruguay</cite>
                    </div>
                </div>
            </div>
        </div>     
        {!! NoCaptcha::renderJs() !!}
@endsection   


@section('footer')
    @include('footer')
@endsection