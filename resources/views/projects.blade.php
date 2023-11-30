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
</style>
@endsection

@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:40px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                @if(Request::segment(1) == 'projects-freelance')
                                <div style="border:2px solid white;background:white;border-radius:10px;width:100%;margin-bottom:10px;">
                                    <img src="/images/h55.jpeg" class="m-auto pt-3" style="display: block;width:100%;" alt="contrato freelancer">
                                    <p class="w-100 p-3 text-center">
                                    Aquí estan todos tus proyectos publicados en la plataforma,
                                    puedes adminitrar eliminando las publicaciónes existentes si lo deseas.
                                    </p>
                                </div>
                                @else
                                <div style="border:2px solid white;background:white;border-radius:10px;width:100%;margin-bottom:10px;">
                                    <img src="/images/h4.jpeg" class="m-auto pt-3" style="display: block;width:100%;" alt="contrato freelancer">
                                    <p class="w-100 p-3 text-center">
                                    Aquí estan todos tus proyectos publicados en la plataforma,
                                    puedes adminitrar eliminando las publicaciónes existentes si lo deseas.
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                      </div>    
                    </div>
 
                </div>
                <div class="col-md-8">
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3 text-center">
                             @if(Request::segment(1) == 'projects-freelance')
                             <h3>Tus proyectos como freelance</h3>
                             @elseif(Request::segment(1) == 'projects-cliente')
                             <h3>Tus proyectos como cliente</h3>
                             @else
                             <h3>Tus proyectos</h3>
                             @endif
                        </div>         
                      </div>
                    </div>            
                    @foreach($applications as $key => $application)
                    @php
                        $userName = explode(' ',$application->user->name);
                    @endphp
                    <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <img class="rounded-circle mt-1 mb-1" src="/images/users/{{($application->user->image == null ? 'no-user.png' : $application->user->image)}}" style="width:90px;height:90px;">
                                    <p class="font-weight-bold communityNameUS">{{$userName[0]}} <i class="ml-1 flag-icon flag-icon-{{$application->user->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                   @if($application->type == 'Busco')
                                    <p class="mb-2" style="padding-bottom:2px;font-size:0.8rem;color:#a49200;cursor:pointer;background: #ffffd9;border:1px solid;border-radius: 10px;font-weight:bold;"  data-toggle="tooltip" data-placement="bottom" title="Busca empleo">Busco <i class="mdi mdi-magnify" style="font-size:1rem;top: 2px;position: relative;"></i></p>
                                    <div class="mb-3" data-toggle="tooltip" data-placement="bottom" title="Salario estimado en dólares EEUU" style="cursor:pointer;border:1px solid #28a745;border-radius:10px;padding: 4px;font-size: 8px;background: #e7ffd9;color:#28a745;font-weight: bold;">
                                        <p class="m-0" style="font-size: 10px;font-weight: bold;">Aspiración x hora</p>
                                        <p class="m-0" style="font-size:13px;font-weight:bold;">{{$application->money}}</p>
                                   </div>
                                   @else
                                    <p class="mb-2" style="padding-bottom:2px;font-size:0.8rem;color:#286ba7;cursor:pointer;background: #ebf3ff;border:1px solid;border-radius: 10px;font-weight:bold;"  data-toggle="tooltip" data-placement="bottom" title="Ofrece empleo">Ofrezco <i class="mdi mdi-square-inc-cash" style="font-size:1rem;top: 2px;position: relative;"></i></p>
                                    <div class="mb-3"  data-toggle="tooltip" data-placement="bottom" title="Presupuesto estimado en dólares EEUU" style="cursor:pointer;border:1px solid #28a745;border-radius:10px;padding: 4px;font-size: 8px;background: #e7ffd9;color:#28a745;font-weight: bold;">
                                        <p class="m-0" style="font-size: 10px;font-weight: bold;">Presupuesto</p>
                                        <p class="m-0" style="font-size:13px;font-weight:bold;">{{$application->money}}</p>
                                    </div>
                                   @endif
                                </div>
                                <div class="col-md-10 px-4 py-3" style="background:#EFFBEA;border-radius: 20px;">
                                    <h4 class="mt-4">{{$application->title}}</h4>
                                    <p class="pt-2 mb-0" style="font-size: 14px;color:#34373c;">
                                        <p style="font-size:15px;margin-bottom:55px;">{{$application->text}}</p>
                                        <p style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 12px;width:max-content;position:absolute;bottom:10px;left:80px;margin:0px;display:inline-block;">{{$application->category}}</p>
                                        <p data-toggle="tooltip" data-html="true" title="<em><b>{{count($application->messages)}} propuestas enviadas</b>" style="font-size:11px;font-weight:bold;background:#c8eab8;border-radius: 20px;padding: 12px;width:max-content;position:absolute;bottom:10px;margin:0px;display:inline-block;"><i class="mdi mdi-account"></i> {{count($application->messages)}}</p>
                                        
                                        <button type="button" onclick="deleteApp({{$application->id}})" class="btnWrite" data-toggle="tooltip" data-html="true" title="Eliminar publicación" style="background:#eab8b8;color:#dd2f2f;border-radius: 20px;padding: 9px;width:40px;height:40px;display:inline-block;position:absolute;bottom:10px;right:10px;margin:0px;border:none;">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </p>
                                    <p class="text-left my-2" style="color:black;top:2px;right:17px;position: absolute;font-weight:bold;">hace {{$application->diff}}</p>                                    
                                </div>
                            </div>
                        </div>
                      </div>    
                    </div>
                    <!-- Modal response postulation -->
                    <div class="modal fade" id="modalResponse{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true" style="z-index:99999;">
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
                                        <img class="rounded-circle mt-1 mb-1" src="/images/users/{{$application->user->image}}" style="width:40px;height:40px;">
                                        <p class="font-weight-bold communityNameUS">{{$userName[0]}} <i class="ml-1 flag-icon flag-icon-{{$application->user->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                    </div>
                                    <div class="col-md-10 text-center">
                                        <h4 style="font-weight:bold;">{{$application->title}}</h4>
                                        <p style="font-size:14px;">{{$application->text}}</p>
                                        <div class="form-group">
                                            <label class="float-left">Propuesta ( 360 caracteres max )</label>
                                            <textarea name="message" clas="form-control" placeholder="Escríbe tu propuesta aqui ... " cols="30" rows="4" maxlength="360" onkeypress="return /[a-z 0-9 _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)" style="width:100%;border-radius: 4px;border: 2px solid #35b0ff;" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="application_id" value="{{$application->id}}">
                                            <button type="submit" class="btn btn-info">Enviar propuesta</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        </div>
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
                    @endforeach
                    @if(count($applications) == 0)
                        <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                            <div class="card" style="border-radius:20px;">
                                <div class="card-body pt-3 pb-3">
                                    <div class="row">
                                    <h4 class="text-gray text-center w-100 p-5" style="border: 1px solid silver;border-radius:20px;">No tienes ningúna publicación</h4>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    @endif
                </div>    
            </div>    
        </div>



    </div>   
@endsection

@section('script')
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


    });
</script>



@endsection

@section('footer')
    @include('footer')
@endsection    