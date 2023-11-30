@extends('layouts.web')

@section('head')
<title>Login - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/login">
<meta name="language" content="spanish">

<meta name="description" content="Inicia sesión en heiwork y publica tus proyectos ahora mismo! contamos con usuarios trabajadores y empleadores que puedes contactar y aplicar a sus proyectos">
<meta name="keywords" content="Contacto heiwork, soporte de usuarios, heiwork, email freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Login - Heiwork">
<meta property="og:description" content="Inicia sesión en heiwork y publica tus proyectos ahora mismo!, contamos con usuarios trabajadores y empleadores que puedes contactar y aplicar a sus proyectos en cualquier momento.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Inicia sesión en heiwork y publica tus proyectos ahora mismo!, contamos con usuarios trabajadores y empleadores que puedes contactar y aplicar a sus proyectos en cualquier momento." />
<meta name="twitter:title" content="Login - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />
@endsection


@section('content')
<style>

a.social_bt.facebook {
    border:1px solid #3B5998;
    background: white;
    color:#3B5998;
    /*display: block;*/
   /*margin: auto;*/
    /*margin-bottom: 5px;*/
    padding-bottom:19px;
    padding-top: 17px;
}
a.social_bt.google {
    border:1px solid #DC4E41;
    background: white;
    color:#DC4E41;
    /*margin-left: 10px;*/
    /*display: block;*/
    /*margin: auto;*/
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
    /*min-width: 100px;*/
    width: 49%;
    display: inline-block;
    padding: 12px;
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
#password, #email{
    border-radius:0px !important;
}
.formLogin .mdi::before {
    color: #555;
}
@media (max-width: 767px){
    .social_bt{
        width:100% !important;
        margin-bottom:8px;
    }
    .textP{
        font-size:10px !important;
    }
}
</style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 m-auto">
          <div class="col-lg-4 mx-auto p-0">
            <div class="auto-form-wrapper">
            <form method="POST" class="formLogin" action="{{ route('login') }}">
                @csrf
                <h3 class="mr-auto text-center">Iniciar sesión</h3>
                <p class="mb-5 mr-auto text-center">Hay muchas oportunidades esperándote</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend" style="height: 32px;">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control formlogs @error('email') is-invalid @enderror" name="email" value="" placeholder="Correo electronico" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend" style="height: 32px;">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control formlogs @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password" value="">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" style="border:none;">INICIAR SESIÓN</button>
                </div>

                <p class="text-center">Inicia sesión con redes sociales</p>
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
                </div>
                <div class="text-block text-center my-3 mb-0">
                  <span class="text-small font-weight-bold">No es un miembro ?</span>
                  <a href="/register" class="text-black text-small">Crear una nueva cuenta</a>
                </div>
                <div class="wrapper mt-2 mb-4 text-gray">            
                  <ul class="auth-footer text-gray">
                    <li style="color:black;"><a href="/terminos-condiciones" class="textP" style="color:black;">Terminos y Condiciones</a></li>
                    <li style="color:black;"><a href="password/reset" class="textP" style="color:black;">Recuperar Clave <i class="mdi mdi mdi-lock-outline" ></i></a></li>
                  </ul>
                </div>
                
            </form>            
            </div>
            <ul class="auth-footer d-none">
              <li style="border-color:black;"><a href="#" style="color:black;">Conditions</a></li>
              <li style="border-color:black;"><a href="/contact" style="color:black;">Help</a></li>
              <li style="border-color:black;"><a href="/terminos-condiciones" style="color:black;">Terms</a></li>
            </ul>
            <p class="footer-text text-center mt-3" style="color:#424242;font-weight:bold;">copyright © 2020 Heiwork. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


 
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
