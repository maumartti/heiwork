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

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type="text"], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type="number"], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .tt-hint, .tt-query, .typeahead {
    font-size: 0.85rem !important;
}

@media (max-width: 767px){
    .contEdit{
        padding-right:12px !important;
    }
}

/** ckeditor */
.ck-editor__editable_inline {
    min-height: 500px;
}   
</style>

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<!-- slin cropper -->
<link href="{{ asset('slim-cropper-uploading/example/css/slim.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:15px;padding-bottom:15px;">
            <div class="row">
                <div class="d-none d-lg-block col-md-6 col-lg-2 grid-margin stretch-card p-0 mb-2">           
                  <div class="card" id="cardPreForm" style="border-radius:20px;">
                    <div class="card-body pt-3 pb-3">
                        <div class="row">
                            <div style="border:2px solid #69b766;background:#ebffeb;border-radius:10px;width:100%;margin-bottom:10px;">
                                <img src="/images/h30.jpeg" class="m-auto w-100" style="display: block;border-radius:8px 8px 0px 0px" >
                                <p class="w-100 p-3 text-center">
                                Gestiona los datos de tu perfil y cuenta, editando todos tus datos personales, y seleccionando el tipo de plan acorde a tus necesidades, recuerda que puedes ponerte en contacto con nuestro equipo de forma inmediata por cualquier consulta.
                                </p>
                            </div>                                
                        </div>
                    </div>
                  </div>  
                </div>
                <div class="col-md-6 col-lg-7 pr-0 contEdit">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2"> 
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <h3 class="text-center mb-3">Realizar publicación <i class="mdi mdi-plus-circle-outline" style="position:relative;top:2.2px;"></i></h3>          
                            <h4 style="font-size:1rem;">Postula tus habilidades o el proyecto en cuál necesitas contratar un profesional</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- @if(Auth::user()->register_by == 'web' /* && Auth::user()->email_verified_at == null || Auth::user()->completeProfile == false*/)
                                <div class="form-group">
                                    <div class="alert alert-danger" role="alert">
                                      <strong><i class="mdi mdi-account-alert"></i>Confirma tu correo para publicar</strong>
                                    </div>
                                </div>
                            @endif -->
                            <form action="/setApplication" method="POST" style="text-align:left;padding-top:6px;" @if(Auth::user()->register_by == 'web' && Auth::user()->email_verified_at == null /*|| Auth::user()->completeProfile == false*/) onsubmit="alert('Completa tu perfil y verifica tu correo!'); return false;" @endif>
                                 @csrf
                                <div class="form-group">
                                     <label style="font-weight:bold;font-size:10px;">Titulo descriptivo ( 122 caracteres max )</label>
                                     <input name="title" id="title" onkeypress="return /[a-z 0-9 ñ ´ _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)"  style="color:#71B951;" type="text" class="form-control font-weight-bold" placeholder="Titulo descriptivo" maxlength="122" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold;font-size:10px;">Tipo de publicación</label>
                                    <select name="type" id="type" class="form-control font-weight-bold" style="color:#71B951;" autocomplete="off" required>
                                        <option value="" selected="true">Selecciona uno..</option>
                                        <option value="Ofrezco">Ofrezco empleo</option>
                                        <option value="Busco">Busco empleo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label id="presupuestLabel" style="font-weight:bold;font-size:10px;">Presupuesto</label>
                                    <label id="hoursLabel" style="font-weight:bold;font-size:10px;display:none;">Aspiración x hora</label>
                                    <select id="presupuest" name="money" class="form-control font-weight-bold" autocomplete="off" style="display:none;color:#71B951;">
                                        <option value="">Selecciona uno..</option>
                                        <option value="Menos de $20">Menos de $20 dólares</option>
                                        <option value="$30 a $50">$30 a $50 dólares</option>
                                        <option value="$50 a $100">$50 a $100 dólares</option>
                                        <option value="$100 a $150">$100 a $150 dólares</option>
                                        <option value="$150 a $200">$150 a $200 dólares</option>
                                        <option value="$200 a $300">$200 a $300 dólares</option>
                                        <option value="$300 a $400">$300 a $400 dólares</option>
                                        <option value="$400 a $500">$400 a $500 dólares</option>
                                        <option value="$500 a $1000">$500 a $1000 dólares</option>
                                        <option value="$1000 a $3000">$1000 a $3000 dólares</option>
                                        <option value="Más de $3000">más de $3000 dólares</option>
                                    </select>
                                    <select id="hours" name="money2" class="form-control font-weight-bold" style="color:#71B951;" autocomplete="off">
                                        <option value="">Selecciona uno..</option>
                                        <option value="$2 a $5">$2 a $5 dólares x hora </option>
                                        <option value="$5 a $10">$5 a $10 dólares x hora </option>
                                        <option value="$10 a $15">$10 a $15 dólares x hora </option>
                                        <option value="$15 a $20">$15 a $20 dólares x hora </option>
                                        <option value="$20 a $25">$20 a $25 dólares x hora </option>
                                        <option value="$25 a $30">$25 a $30 dólares x hora </option>
                                        <option value="$30 a $35">$30 a $35 dólares x hora </option>
                                        <option value="$35 a $40">$35 a $40 dólares x hora </option>
                                        <option value="$45 a $50">$45 a $50 dólares</option>
                                        <option value="más de $50">más de $50 dólares x hora </option>
                                    </select>
                                </div>                            
                                <div class="form-group">
                                     <label style="font-weight:bold;font-size:10px;">Descripción ( 485 caracteres max )</label>
                                     <textarea name="text" id="editor" contenteditable="true" style="line-height:1.2rem;color:#71B951;" placeholder="Describe las Características ..." cols="30" rows="8" class="form-control font-weight-bold" maxlength="485" ></textarea>
                                    <!--<small id="emailHelp" class="form-text" style="color:black;line-height: 1.2;">
                                        Puede colocar información de contacto si desea para que le contacten directo
                                     </small>-->   
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold;font-size:10px;">Categoría</label>
                                    <select name="category" id="" class="form-control font-weight-bold" style="color:#71B951;" autocomplete="off" required>
                                        <option value="">Selecciona uno..</option>
                                        <option value="Programación Web">Programación Web</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="Apps Android, iOS">Apps Android, iOS</option>
                                        <option value="Aplicaciones de escritorio">Aplicaciones de escritorio</option>
                                        <option value="Diseño Web">Diseño Web</option>
                                        <option value="Diseño de Logo">Diseño de Logo</option>
                                        <option value="Ilustraciones">Ilustraciones</option>
                                        <option value="Crear o editar audio, video">Crear o editar audio, video</option>
                                        <option value="Modelos 3D">Modelos 3D</option>
                                        <option value="Fotografía">Fotografía</option>
                                        <option value="Diseño de moda">Diseño de moda</option>
                                        <option value="Redacción y Traducción">Redacción y Traducción</option>
                                        <option value="Marketing Digital y Ventas">Marketing Digital y Ventas</option>
                                        <option value="SEO">SEO</option>
                                        <option value="Soporte Administrativo">Soporte Administrativo</option>
                                        <option value="Legal">Legal</option>
                                        <option value="Finanzas y Negocios">Finanzas y Negocios</option>
                                        <option value="Ingeniería y Arquitectura">Ingeniería y Arquitectura</option>
                                    </select>
                                </div>
                                @if(Auth::user()->register_by == 'web' && Auth::user()->email_verified_at == null /*|| Auth::user()->completeProfile == false*/)
                                    <div class="form-group">
                                        <div class="alert alert-danger" role="alert">
                                          <strong><i class="mdi mdi-account-alert"></i>Confirma tu correo para publicar</strong>
                                        </div>
                                    </div>
                                @else
                                <div class="form-group">
                                    <button type="input" class="btn btn-primary btn-block btn-lg" style="display:inline-block;">Publicar</button>
                                </div>
                                @endif
                            </form>
                        </div>
                      </div>    
                    </div>
                </div>    
                <div class="col-md-6 col-lg-3">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">    
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                <h3 class="m-auto d-block pb-3">Planes de beneficios</h3>    
                                <div class="col-md-12">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'free') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Gratis <i class="mdi mdi-ticket-account"></i></h5>                                         
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;">5</span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;padding-top:5px;padding-top:5px;padding-top:5px;">12</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'free')
                                        <div>
                                            <span class="badge badge-info badge-pill float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                <span style="position: relative;top: -1.1px;font-weight:bold;color:#fbfa9c;">Tu Plan Actual</span> 
                                                <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                            </span>
                                        </div>
                                        <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                            <p class="m-0">Actualmente cuentas con:</p>
                                            <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                            <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
                                        </div>
                                        <small style="font-size:12px;font-weight:bold;">Fecha de renovación: {{ \Carbon\Carbon::parse(Auth::user()->expire_plan)->format('d / m / Y')}}</small>
                                        @endif
                                      </a>
                                      <a href="/plan/estandar" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'standard') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Estándar <i class="mdi mdi-medal"></i></h5>                                          
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;padding-top:5px;padding-top:5px;">15</span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;padding-top:5px;padding-top:5px;">45</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'standard')
                                            <div>
                                                <span class="badge badge-info badge-pill float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                    <span style="position: relative;top: -1.1px;font-weight:bold;color:#f0ef8e;">Tu Plan Actual</span> 
                                                    <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                                </span>
                                            </div>
                                            <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                                <p class="m-0">Actualmente cuentas con:</p>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
                                            </div>
                                            <small style="font-size:12px;font-weight:bold;">Fecha de expiración: {{ \Carbon\Carbon::parse(Auth::user()->expire_plan)->format('d / m / Y')}}</small>
                                        @else
                                            <span class="badge badge-primary badge-pill p-2 mt-1" style="font-size:12px;font-weight:bold;border:1px solid #c4ffaf;">
                                            <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                            Cámbiate ahora por solo $7.90 / mes
                                            </span>
                                        @endif
                                      </a>
                                      <a href="/plan/completo" class="list-group-item list-group-item-action flex-column align-items-start @if(Auth::user()->plan == 'full') active @endif">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 font-weight-bold">Plan Completo <i class="mdi mdi-trophy"></i></h5>                                          
                                        </div>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;padding-top:5px;">35 </span> Publicaciónes al mes
                                        </p>
                                        <p class="mb-1">
                                            <span class="badge badge-primary badge-pill" style="width:32px;font-weight:bold;padding-top:5px;">100</span> Propuestas al mes
                                        </p>
                                        @if(Auth::user()->plan == 'full')
                                            <div>
                                                <span class="badge badge-info badge-pill float-right mt-2" style="font-weight:bold;border:1px solid #fffb00;">
                                                    <span style="position: relative;top: -1.1px;font-weight:bold;color:#f0ef8e;">Tu Plan Actual</span> 
                                                    <i class="mdi mdi-star" style="font-size:15px;color:#fffb00;"></i>
                                                </span>
                                            </div>
                                            <div class="mt-5" style="font-size:14px;font-weight:bold;background: #206d84;padding: 8px;border-radius: 10px;">
                                                <p class="m-0">Actualmente cuentas con:</p>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->publications}}</span> Publicaciónes</div>
                                                <div class="mt-1"><span class="badge badge-primary badge-pill" style="width:25px;font-weight:bold;position: relative;top: -1px;padding-top:5px;">{{Auth::user()->proposals}}</span> Propuestas</div>
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



    </div>   
@endsection

@section('script')

<!-- Editor texto -->
<script>
ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                //{ model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } ); 
</script>

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

    });
</script>



@endsection

@section('footer')
    @include('footer')
@endsection   