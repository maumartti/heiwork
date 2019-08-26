@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">    
                            <!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>               -->
                            <label class="col-md-4 col-form-label text-md-right" for="paises">País</label>
                            <div class="col-md-6">
                                <select name="country" class="form-control" id="paises" required>                    
                                    <option value="AR">Argentina</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="CL">Chile</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="ES">España</option>
                                    <option value="GD">Granada</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GY">Guayana</option>
                                    <option value="HT">Haití</option>
                                    <option value="HN">Honduras</option>
                                    <option value="MX">México</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PE">Perú</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="DO">República Dominicana</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="VE">Venezuela</option>
                                </select> 
                            </div>                 
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleInputCity1">City</label>
                            <div class="col-md-6">
                                <input type="text" name="city" class="form-control" id="exampleInputCity1" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleInputTelefono">Cel (oculto)</label>
                            <div class="col-md-6">
                                <input type="tel" name="cel" class="form-control" id="exampleInputTelefono" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleInputSub1">Tu frase de cabecera</label>
                            <div class="col-md-6">
                                <input type="text" name="subtitle" class="form-control" id="exampleInputSub1" placeholder="Frase de cabecera">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleTextarea1">Descripción de ti</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" id="exampleTextarea1" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Sector') }}</label>
                            <div class="col-md-6">
                                <select name="sector" id="sector" class="form-control" required>
                                    <option value="">Selecione uno ..</option>
                                    <option value="IT Programción">IT Programción</option>
                                    <option value="Traducción">Traducción</option>
                                    <option value="Diseño Grafico">Diseño Grafico</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Estado actual') }}</label>
                            <div class="col-md-6">
                                <select name="state" id="state" class="form-control" required>
                                    <option value="">Selecione uno ..</option>
                                    <option value="trabajando">Trabajando</option>
                                    <option value="buscando">Buscando</option>
                                    <option value="vacaciones">Vacaciónes</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Typo de cuenta') }}</label>
                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control" required>
                                    <option value="">Selecione uno ..</option>
                                    <option value="root">Root</option>
                                    <option value="admin">Admin</option>
                                    <option value="usuario">Usuario</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
