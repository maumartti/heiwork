@extends('layouts.web')



@section('head')
<title>HeiWork</title>
<!--
<meta name="google-site-verification" content="JHA79Jo0JvKoAAb7CgdLIW4d3zfSIAVVSNfWGbgggsc">
<meta name="wot-verification" content="deb21c413e67c36dd37a">
<meta name="propeller" content="f1ff1fdc65ff95038e6b41eea7726c4c">
-->
<!--
<meta name="apple-mobile-web-app-title" content="Spell Checker Online">
<meta name="application-name" content="Spell Checker Online">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content=" #ffffff">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta property="og:url" content="https://spellcheckonline.net/">
<meta property="og:type" content="website">
<meta property="og:image" content="https://spellcheckonline.net/images/grammar.png">
<meta property="fb:app_id" content="138224130427286">
<meta name="twitter:card" content="summary_large_image">-->
<!--<meta name="twitter:site" content="@jspellchecker">-->
<!--
<meta name="twitter:image" content="https://spellcheckonline.net/images/grammar.png">
<meta name="twitter:image:alt" content="A student using spellcheckonline Checker in a classroom to correct their essay.">
<meta data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes">
<meta data-hid="og:title" name="og:title" property="og:title" content="spellcheckonline Checker - Spelling & Grammar">
<meta data-hid="og:site_name" name="og:site_name" property="og:site_name" content="spellcheckonline Checker - Spelling & Grammar">
<meta property="og:title" content="spellcheckonline Checker - Spelling & Grammar">
<meta property="og:description" content="Improve your writing with spellcheckonline. Spell check and grammar checker for English, Spanish, French, German, Italian.">
<meta name="twitter:title" content="tikilander">
<meta name="twitter:description" content="">
-->

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
.slim-btn-remove{
    display: none;
}
@media (max-width: 767px){
    .contEdit{
        padding-right:12px !important;
    }
}
</style>

<!-- slin cropper -->
<link href="{{ asset('slim-cropper-uploading/example/css/slim.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:40px;">
            <div class="row">
                <!--
                <div class="col-md-2 grid-margin stretch-card p-0 mb-2">           
                  <div class="card" style="border-radius:20px;">
                    <div class="card-body pt-3 pb-3">
                        <div class="row">
                            <div style="border:2px solid #69b766;background:#ebffeb;border-radius:10px;width:100%;margin-bottom:10px;">
                                <img src="/images/p1.png" class="m-auto pt-3" style="display: block;" alt="contrato freelancer">
                                <p class="w-100 p-3 text-center">
                                Gestiona los datos de tu perfil y cuenta, editando todos tus datos personales, y seleccionando el tipo de plan acorde a tus necesidades, recuerda que puedes ponerte en contacto con nuestro equipo de forma inmediata por cualquier consulta.
                                </p>
                            </div>                                
                        </div>
                    </div>
                  </div>  
                </div>-->
                <div class="col-md-12 pr-0 contEdit">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <h3 class="text-center">Datos de Cuenta <i class="mdi mdi-account-outline mr-0"></i></h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/editUser" class="w-100 avatar" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col-sm-2 pt-0 col-lg-2 d-inline-block p-0 m-auto" style="margin-top:70px !important;">
                                    <!-- cuenta verificada o no -->
                                    <div class="">
                                    @if(Auth::user()->email_verified_at == null)
                                        <div class="alert alert-danger" role="alert">
                                         <i class="mdi mdi-close-octagon-outline m-0"></i> 
                                         <strong>Aún no has verificado tu correo electrónico <br><a href="https://heiwork.com/email/verify">( Verificar mi Correo )</a></strong> 
                                        </div>
                                    @else
                                        <div class="alert alert-success" role="alert">
                                          <strong>Correo electrónico verificado!</strong> <i class="mdi mdi-checkbox-marked-circle" style="position:relative;top:-1px;"></i>
                                        </div>
                                    @endif    
                                    </div>
                                    <!-- edit image --->                                    
                                    <div id="slim" class="slim mb-2 p-2" 
                                         data-button-edit-title="Editar"
                                         data-button-remove-title="Borrar"
                                         data-label="'Agregar Imagen (requerida)'<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                         data-ratio="1:1"
                                         data-size="150,150"
                                         data-max-file-size="2"
                                         data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                         data-meta-user-id="1" >
                                         @if(Auth::user()->image != null)
                                         <img src="/images/users/{{ Auth::user()->image }}" />
                                         @endif
                                         <input type="file" id="image" name="image" accept="image/png, image/jpeg"  />
                                    </div>
                                         <small class="mt-2 text-center text-black">
                                            <i>Haz click en la imagen para reemplazarla</i>
                                        </small>                             
                                </div>                                                           
                                <!-- end image -->
                                <div class="col-sm-6 pt-5">
                                    <div class="form-group">
                                        <label >Nombre</label>
                                        <input name="name" type="text" value="{{Auth::user()->name}}"  class="form-control" placeholder="Nombre" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input name="email" readonly type="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">País</label>
                                        <select name="country" class="form-control" required>
                                            <option value="ar" {{ Auth::user()->country == 'ar' ? 'selected' : ''}}>Argentina</option>
                                            <option value="de" {{ Auth::user()->country == 'de' ? 'selected' : ''}}>Alemania</option>
                                            <option value="bo" {{ Auth::user()->country == 'bo' ? 'selected' : ''}}>Bolivia</option>
                                            <option value="br" {{ Auth::user()->country == 'br' ? 'selected' : ''}}>Brasil</option>
                                            <option value="ca" {{ Auth::user()->country == 'ca' ? 'selected' : ''}}>Canada</option>
                                            <option value="cl" {{ Auth::user()->country == 'cl' ? 'selected' : ''}}>Chile</option>
                                            <option value="cn" {{ Auth::user()->country == 'cn' ? 'selected' : ''}}>China</option>
                                            <option value="co" {{ Auth::user()->country == 'co' ? 'selected' : ''}}>Colombia</option>
                                            <option value="cr" {{ Auth::user()->country == 'cr' ? 'selected' : ''}}>Costa Rica</option>
                                            <option value="cu" {{ Auth::user()->country == 'cu' ? 'selected' : ''}}>Cuba</option>
                                            <option value="ec" {{ Auth::user()->country == 'ec' ? 'selected' : ''}}>Ecuador</option>
                                            <option value="us" {{ Auth::user()->country == 'us' ? 'selected' : ''}}>EEUU</option>
                                            <option value="es" {{ Auth::user()->country == 'es' ? 'selected' : ''}}>España</option>
                                            <option value="gt" {{ Auth::user()->country == 'gt' ? 'selected' : ''}}>El Salvador</option>
                                            <option value="fr" {{ Auth::user()->country == 'fr' ? 'selected' : ''}}>Francia</option>
                                            <option value="gd" {{ Auth::user()->country == 'gd' ? 'selected' : ''}}>Granada</option>
                                            <option value="gt" {{ Auth::user()->country == 'gt' ? 'selected' : ''}}>Guatemala</option>
                                            <option value="hn" {{ Auth::user()->country == 'hn' ? 'selected' : ''}}>Honduras</option>
                                            <option value="ie" {{ Auth::user()->country == 'ie' ? 'selected' : ''}}>Irlanda</option>
                                            <option value="in" {{ Auth::user()->country == 'in' ? 'selected' : ''}}>India</option>
                                            <option value="it" {{ Auth::user()->country == 'it' ? 'selected' : ''}}>Italia</option>
                                            <option value="il" {{ Auth::user()->country == 'il' ? 'selected' : ''}}>Israel</option>
                                            <option value="mx" {{ Auth::user()->country == 'mx' ? 'selected' : ''}}>México</option>
                                            <option value="ni" {{ Auth::user()->country == 'ni' ? 'selected' : ''}}>Nicaragua</option>
                                            <option value="py" {{ Auth::user()->country == 'py' ? 'selected' : ''}}>Paraguay</option>
                                            <option value="pa" {{ Auth::user()->country == 'pa' ? 'selected' : ''}}>Panamá</option>
                                            <option value="pe" {{ Auth::user()->country == 'pe' ? 'selected' : ''}}>Perú</option>
                                            <option value="pr" {{ Auth::user()->country == 'pr' ? 'selected' : ''}}>Puerto Rico</option>
                                            <option value="pt" {{ Auth::user()->country == 'pt' ? 'selected' : ''}}>Portugal</option>
                                            <option value="do" {{ Auth::user()->country == 'do' ? 'selected' : ''}}>República Dominicana</option>
                                            <option value="gb" {{ Auth::user()->country == 'gb' ? 'selected' : ''}}>Gran Bretaña</option>
                                            <option value="uy" {{ Auth::user()->country == 'uy' ? 'selected' : ''}}>Uruguay</option>
                                            <option value="ve" {{ Auth::user()->country == 've' ? 'selected' : ''}}>Venezuela</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contraseña ( min 8 caracteres )</label>
                                        <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Repite contraseña</label>
                                        <input name="password_confirmation" type="password" class="form-control" placeholder="Repite contraseña" required>
                                    </div>
                                    <div class="form-check py-4 pl-0">
                                        <div class="custom-control custom-checkbox">
                                          <input name="news" value="1" type="checkbox" class="custom-control-input" id="customCheck1" autocomplete="off" @if(Auth::user()->news == 1) checked @endif>
                                          <label class="custom-control-label font-weight-bold text-dark" for="customCheck1">Deseo recibir noticias semanales a mi correo, con ofertas laborales de nuevos proyectos publicados <i class="mdi mdi-cube-send"></i></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button> 
                                      
                                </div>
                                <!--
                                <div class="d-none d-md-block col-sm-12 col-md- px-0 px-md-0 py-0 ">
                                    <h1 style="font-size: 1.4rem;text-align:center;">Completa tu perfil y aumenta tus posibilidades</h1>
                                    <p>...</p>
                                    <div style="border:2px solid white;background:white;border-radius:10px;width:100%;display:flex;margin-bottom:10px;">
                                        <img src="/images/perfil.png" class="m-auto w-100" alt="comunidad de freelancers"  style="border-radius:10px;">                                       
                                    </div>
                                </div>-->   
                            </div>
                            </form>
                            <div class="col-lg-12 p-3 mb-2 mt-5"  style="border: solid 1px silver;border-radius:10px;"> 
                                <p style="color:#4d4d4d;margin-bottom:0px;">En caso de haber creado tu cuenta con redes sociales y querer editar tu perfíl deberás agregar una contraseña que luego te permitirá poder ingresar también por correo electrónico si lo deseas.</p>
                                <p style="display:none;color:#4d4d4d;">Puedes cambiar de tipo de plan en el momento que te parezca más oportuno y expandir tus posibilidades de realizar propuestas a proyectos publicados como también publicar mas cantidad de proyectos.</p>
                                <p style="display:none;color:#4d4d4d;">La cantidad de publicaciones y propuestas se renovarán inmediatamente al momento de cambiar de plan.</p>
                            </div>
                            <div class="col-lg-12 p-3 mb-2 mt-1"  style="border: solid 1px #ebad30;border-radius:10px;">
                                <!--<p>Elimina tu cuenta</p>-->
                                <button onClick="deleteAccount()" type="button" class="btn btn-warning">Eliminar mi cuenta</button>
                            </div>
                        </div>
                      </div>    
                    </div>
                </div>    
                <div class="col-md-4 d-none">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">    
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                <h4 class="m-auto d-block pb-3">Planes de beneficios</h4>    
                                <div class="col-md-12">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'free') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Free <i class="mdi mdi-ticket-account"></i></h5>                                         
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;">5</span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;">12</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'free')
                                        <div>
                                            <span class="badge badge-pill badge-dark float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                <span style="position: relative;top: -1.1px;font-weight:bold;color:#fbfa9c;">Tu Plan Actual</span> 
                                                <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                            </span>
                                        </div>
                                        <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                            <p class="m-0">Actualmente cuentas con:</p>
                                            <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                            <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
                                        </div>
                                        <small style="font-size:12px;font-weight:bold;">Fecha de renovación: {{ \Carbon\Carbon::parse(Auth::user()->expire_plan)->format('d / m / Y')}}</small>
                                        @endif
                                      </a>
                                      <a href="@if(Auth::user()->plan != 'professional') /pay/professional @else /planes @endif" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'professional') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Profesional <i class="mdi mdi-medal"></i></h5>                                          
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;padding-top:5px;padding-top:5px;">20</span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;padding-top:5px;padding-top:5px;">35</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'professional')
                                            <div>
                                                <span class="badge badge-pill badge-dark float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                    <span style="position: relative;top: -1.1px;font-weight:bold;color:#f0ef8e;">Tu Plan Actual</span> 
                                                    <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                                </span>
                                            </div>
                                            <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                                <p class="m-0">Actualmente cuentas con:</p>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
                                            </div>
                                            <small style="font-size:12px;font-weight:bold;">Fecha de expiración: {{ \Carbon\Carbon::parse(Auth::user()->expire_plan)->format('d / m / Y')}}</small>
                                        @else
                                            <span class="badge badge-primary badge-pill p-2 mt-1" style="font-size:12px;font-weight:bold;border:1px solid #c4ffaf;">
                                            <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                            Cámbiate ahora por solo $7.90 / mes
                                            </span>
                                        @endif
                                      </a>
                                      <a href="@if(Auth::user()->plan != 'premium') /pay/premium @else /planes @endif" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'premium') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Premium <i class="mdi mdi-trophy"></i></h5>                                          
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;padding-top:5px;">45</span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:32px;font-weight:bold;padding-top:5px;">80</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'premium')
                                            <div>
                                                <span class="badge badge-pill badge-dark float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                    <span style="position: relative;top: -1.1px;font-weight:bold;color:#f0ef8e;">Tu Plan Actual</span> 
                                                    <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                                </span>
                                            </div>
                                            <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                                <p class="m-0">Actualmente cuentas con:</p>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="min-width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
                                            </div>
                                            <small style="font-size:12px;font-weight:bold;">Fecha de expiración: {{ \Carbon\Carbon::parse(Auth::user()->expire_plan)->format('d / m / Y')}}</small>
                                        @else
                                            <span class="badge badge-primary badge-pill p-2 mt-1" style="font-size:12px;font-weight:bold;border:1px solid #c4ffaf;">
                                            <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                            Obtén el plan completo por $10.90 / mes
                                            </span>
                                        @endif    
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>    
        </div>


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


<!-- slim cropper -->
<script src="{{ asset('slim-cropper-uploading/example/js/slim.kickstart.min.js') }}"></script>


<script>
    function deleteApp(id){
        var r = confirm("¿estás seguro de eliminar esta publicación?");
        if(r ==  true){
            $.ajax('/deleteApplication/'+id,   // request url
                {
                    success: function (data, status, xhr) {// success callback function
                        toastr.success('eliminanda con éxito', 'Eliminada!')
                        setTimeout(function(){
                            window.location.reload()
                        },2000);
                }
            });
        }
    }
    function deleteAccount(id){
        var r = confirm("¿estás seguro de eliminar tu cuenta de forma definitiva?");
        if(r ==  true){
            $.ajax('/deleteAccount',   // request url
                {
                    success: function (data, status, xhr) {// success callback function
                        //toastr.success('eliminanda con éxito', 'Eliminada!')
                        //window.location.href("/login");
                        $("#logout-form").submit();
                }
            });
        }
    }


    $(document).ready(function(){         

        $('#compartir,#downCompartir').click(function(){
            if($('.publica').is(':visible')){
                $('.publica').css('display','none');
            }
            $header = $(this);
            $content = $('.comparte');
            $content.slideToggle(500, function () {
            });
        });
        $('#publicar,#downPublicar,#cancelPublicar,.btnWrite').click(function(){
            if($('.comparte').is(':visible')){
                $('.comparte').css('display','none');
            }
            $header = $(this);
            $content = $('.publica');
            $content.slideToggle(500, function () {
            });
        });

        $('.btnCountry').click(function(){
            var country_code = $(this).children().attr('id');            
            $.ajax('/setCountryUser/'+country_code,   // request url
                {
                    success: function (data, status, xhr) {// success callback function
                        toastr.success('te la chomastes toda!', 'Gracias chinwenguencha!')
                        $('#modalCountry').modal('hide');
                }
            });
            //var countryName = $(this).text();
            //var selectCountry = confirm("¿ Confirma a "+countryName+" coomo su país de recidencia ?")
        })



    });
</script>



@endsection

@section('footer')
    @include('footer')
@endsection        