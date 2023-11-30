@extends('layouts.web')


@section('head')
<title>Registro - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/register">
<meta name="language" content="spanish">

<meta name="description" content="Registrate en nuestra plataforma y aplica a los mejores proyectos freelance de toda habla hispana, heiwork cuenta con miles de profesionales freelancer">
<meta name="keywords" content="Registro heiwork, Nueva cuenta de usuarios, heiwork, darte de alta como freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">

<meta name="apple-mobile-web-app-title" content="Trabajos Freelance">
<meta name="application-name" content="Trabajos Freelance">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta property="og:site_name" content="HEIWORK">
<meta property="og:url" content="https://heiwork.com/">
<meta property="og:image" content="https://heiwork.com/images/h111.jpeg">
<meta property="og:title" content="Registro - Heiwork">
<meta property="og:description" content="Registrate en nuestra plataforma y aplica a los mejores proyectos freelance de toda habla hispana, heiwork cuenta con miles de personas con las que puedes conectarte.">
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="138224130427286">

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Registrate en nuestra plataforma y aplica a los mejores proyectos freelance de toda habla hispana, heiwork cuenta con miles de personas con las que puedes conectarte." />
<meta name="twitter:title" content="Registro - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/h111.jpeg" />
@endsection


@section('content')
<style type="text/css">
.input-group-text{
  border-right:1px solid grey;
}
.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #55c12e;
    border-color: #55c12e;
}
</style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper align-items-center auth register-bg-1 theme-one">
        <div class="row mx-auto">
          <div class="col-md-5 col-lg-4 mx-auto">
            <h2 class="text-center mb-3">Registro</h2>
            <div class="auto-form-wrapper">
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group mb-1">
                  <label>Nombre</label>
                  <div class="input-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" max="20" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="input-group-append" style="height: 32px;">
                      <span class="input-group-text"><i class="mdi mdi mdi-account-outline" style="color: #495057;"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-1">
                    <label>Correo electrónico</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" max="80" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append" style="height: 32px;">
                            <span class="input-group-text"><i class="mdi mdi-email-outline" style="color: #495057;"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-1">
                  <label>Contraseña</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" max="20" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="input-group-append" style="height: 32px;">
                      <span class="input-group-text"><i class="mdi mdi mdi-lock-outline" style="color: #495057;"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <label>Repite Contraseña</label>
                  <div class="input-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" max="20" required autocomplete="new-password">
                    <div class="input-group-append" style="height: 32px;">
                      <span class="input-group-text"><i class="mdi mdi mdi-lock-outline" style="color: #495057;"></i></span>
                    </div>
                  </div>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                  <label class="custom-control-label" for="customCheck1" style="font-size:12px;padding-top:2px;">He leído y acepto los <a href="/terminos-condiciones">términos y condiciones</a></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input name="news" type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2" style="font-size:12px;padding-top:2px;">Deseo recibir ofertas de empleos en mi correo</label>
                </div>
                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label p-0">Captcha</label>
                  <div class="col-12 col-md-6 pull-center p-0"  style="transform: scale(0.77); -webkit-transform: scale(0.77); transform-origin: 0 0; -webkit-transform-origin: 0 0;">
                      {!! app('captcha')->display() !!}
                      @if ($errors->has('g-recaptcha-response'))
                          <span class="help-block">
                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group mb-1">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">¿Ya tienes una cuenta?</span>
                  <a href="/login" class="text-black text-small" style="color: #0056b3;">Inicia sesión</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  {!! NoCaptcha::renderJs() !!}
@endsection
