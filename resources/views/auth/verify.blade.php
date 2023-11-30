@extends('layouts.web')

@section('content')
<style type="text/css">
.content-wrapper{
    background: white !important;
}
</style>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3>{{ __('Verifique su dirección de correo electrónico') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <h6 class="">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico, revise su casilla de correo spam o correo no deseado') }}
                            </h6>
                        </div>
                    @endif
                    <h4>
                    {{ __('Haga click en el enlace para recibir un correo electrónico con el código de activación de su cuenta') }}: 
                    <br><br>
                    <a class="btn btn-primary btn-lg" href="{{ route('verification.resend') }}">
                     @if (!session('resent'))
                        {{ __('Enviar código de verificación') }}
                     @else
                        {{ __('Reenviar código') }}
                     @endif   
                    </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
