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
.nav-pills .nav-item .nav-link, .nav-tabs .nav-item .nav-link {
    font-size: 14px;
    font-weight: bold;
    background: rgba(53, 176, 255, 0.2) !important;
    margin-right: 1px;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff !important;
    background-color: #007bff !important;
    font-size: 14px;
    font-weight: bold;
}
.nav-link{
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.text-primaryBlue{
  color:#007bff;
}

@media (max-width: 500px){
  .nav-link{
    font-size:12px !important;
  }
  .titleNoti{
    font-size: 1.4rem;
  }
  .titeConv{
    font-size:1.3rem;
  }
}
</style>
@endsection



@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:15px;">
            <div class="row">
                <div class="col-md-8">                    
                    <div class="col-sm-12 grid-margin stretch-card p-0 mb-2">           
                      <div class="card" style="border-radius:20px;">
                        @if(Request::is('messages'))
                        <div class="card-body pt-3 pb-3 px-0">
                            <h3 class="text-center mb-3 titleNoti">Mensajes y Notificaciónes</h3>
                            <ul class="nav nav-pills mb-3 px-0" id="pills-tab" role="tablist">
                              <li class="nav-item" style="width:33.333%;" role="presentation">
                                <a class="nav-link active p-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style=""><i class="mdi mdi-message-text" style="margin-right:2px;"></i> Chats</a>
                              </li>
                              <li class="nav-item" style="width:33.333%;" role="presentation">
                                <a class="nav-link p-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style=""><i class="mdi mdi-send" style="margin-right:2px;"></i> Enviados</a>
                              </li>
                              <li class="nav-item" style="width:33.333%;" role="presentation">
                                <a class="nav-link p-3" id="pills-noti-tab" data-toggle="pill" href="#pills-noti" role="tab" aria-controls="pills-noti" aria-selected="false" style="padding-left:10px !important;"><i class="mdi mdi-bell" style="margin-right:2px;"></i> Notificaciónes</a>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                @if(isset(Auth::user()->messagesBox))
                                  <div class="d-flex align-items-center justify-content-between mb-4 px-2">
                                    <h3 class="card-title mb-0 text-primaryBlue titeConv">Conversaciones establecidas</h3>
                                    <small class="text-gray d-none d-sm-block">Total de conversaciones: ( <strong>{{count(Auth::user()->messagesBox)}}</strong> )</small>
                                  </div>
                                  <div class="new-accounts">
                                    <ul class="chats ps px-0" style="min-height: 300px;">
                                      @foreach(Auth::user()->messagesBox as $key => $message)
                                      @php
                                        $userMessageName = explode(' ',$message->user->name);
                                      @endphp  
                                      <li class="chat-persons p-2" @if($message->read == 0) style="background:#f4f4f4;border-bottom: 1px solid #dfdfdf;" @else style="border-bottom: 1px solid #dfdfdf;" @endif>
                                        <a href="/messages/{{$message->id}}">
                                          <span class="pro-pic"><img src="/images/users/{{($message->user->image == null ? 'no-user.png' : $message->user->image)}}" alt="profile image"></span>
                                          <div class="user">
                                            <p class="u-name">{{$userMessageName[0]}} <i class="ml-1 flag-icon flag-icon-{{$message->user->country}}" title="uy" id="uy" style="position:relative;top:0px;"></i></p>
                                            <p class="u-designation"> {{str_limit($message->message,30)}}..</p>
                                          </div>
                                          <p class="joined-date">hace {{$message->diff}}</p>
                                        </a>
                                      </li>
                                      @endforeach
                                      @if(count(Auth::user()->messagesBox) == 0)
                                      <h4 class="text-gray text-center p-5" style="border: 1px solid silver;border-radius:20px;">No tienes ningún mensaje</h4>
                                      @endif
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                  </div>
                                @endif
                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h3 class="card-title mb-0 text-primaryBlue titeConv px-2">Propuestas enviadas <a data-toggle="tooltip" data-placement="bottom" title="Cuando respondes una propuesta publicada abres un canal de comunicación con el usuario publicante, que tendrá que ser respondido por este usario para establecer un chat e iniciar las cominicaciónes que te perminitrán conocer mas detalles y llegar a un acuerdo."><i class="mdi mdi-help-circle-outline" style="position:relative;top:2px;"></i></a></h3>
                                </div>                                  
                                <div class="new-accounts">
                                    <ul class="chats ps px-0" style="min-height: 300px;">
                                      @foreach(Auth::user()->newMessagesSendMe as $key => $message)
                                      @php
                                        $userMessageName = explode(' ',$message->user->name);
                                      @endphp  
                                      <li class="chat-persons p-2" >
                                        <a href="/messages/{{$message->id}}">
                                          <span class="pro-pic"><img src="/images/users/{{($message->user->image == null ? 'no-user.png' : $message->user->image)}}" alt="profile image"></span>
                                          <div class="user">
                                            <p class="u-name">{{$userMessageName[0]}} <i class="ml-1 flag-icon flag-icon-{{$message->user->country}}" title="uy" id="uy" style="position:relative;top:0px;"></i></p>
                                            <p class="u-designation"> {{str_limit($message->message,30)}}..</p>
                                          </div>
                                          <p class="joined-date">@if($message->read == 0) <i class="mdi mdi-check-all"></i> @else <i class="mdi mdi-check-all text-info"></i> @endif hace {{$message->diff}}</p>
                                        </a>
                                      </li>
                                      @endforeach
                                      @if(count(Auth::user()->newMessagesSendMe) == 0)
                                      <h4 class="text-gray text-center p-5" style="border: 1px solid silver;border-radius:20px;">No has enviado ningún mensaje</h4>
                                      @endif
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="pills-noti" role="tabpanel" aria-labelledby="pills-noti-tab">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h3 class="card-title mb-0 text-primaryBlue titeConv px-2">Notificaciónes</h3>
                                </div>
                                <div class="new-accounts">
                                    <ul class="chats ps px-1">
                                      @foreach(Auth::user()->notifications as $key => $notification) 
                                      <li class="chat-persons p-2" style="padding: 15px 0px !important;background: #f5fdf3;border-bottom:5px solid white;">
                                        <a>
                                          <div class="user" style="width:100% !important;">
                                          <span class="pro-pic" style="max-width:100%;width: 100%;">
                                            @if($notification->type == null)
                                              <img src="/images/icN.jpeg" style="width: 60px;display: inline-block;">
                                            @else
                                              <img src="/images/noti/{{$notification->type}}.png" style="width: 60px;display: inline-block;">  
                                            @endif
                                            <p class="u-name pl-2 font-weight-bold d-inline-block" style="width:90%;">
                                              Heiwork <i class="ml-1" style="position:relative;top:0px;"></i> <span style="float:right;font-size:10px;color:#636363;">hace {{$notification->diff}}</span>
                                            </p>
                                          </span>
                                            <p class="u-designation mt-1" style="white-space:normal;width:100%;padding-left:5px;font-weight:400 !important;line-height: 1.5;font-size: 14px;">
                                              {{$notification->message}}
                                            </p>
                                          </div>
                                        </a>
                                      </li>
                                      @endforeach
                                      @if(count(Auth::user()->notifications) == 0)
                                      <h4 class="text-gray text-center p-5" style="border: 1px solid silver;border-radius:20px;">No has enviado ningún mensaje</h4>
                                      @endif
                                    </ul>
                                  </div>
                              </div>                              
                            </div>
                        </div>
                        @else
                        <div class="card-body pt-3 pb-3 px-2">                            
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                  <div class="new-accounts">
                                    <a href="/messages" style="text-decoration:none;">  
                                        <h5 style="padding: 10px;background: #eaeaea;padding: 10px;background: #eaeaea;border-radius: 10px;"><i class="mdi mdi-arrow-left-thick"></i> Regresar a mensajes</h5>
                                    </a>
                                    <ul class="chats ps px-0">
                                      <li class="chat-persons">
                                        @php
                                        $userMessageName = explode(' ',$partner->name);
                                        @endphp 
                                        <a>
                                          <span class="pro-pic"><img src="/images/users/{{($partner->image == null ? 'no-user.png' : $partner->image)}}" alt="profile image"></span>
                                          <div class="user">
                                            <p class="u-name">{{$userMessageName[0]}}</p>
                                            <p class="u-designation">País <i class="ml-1 flag-icon flag-icon-{{$partner->country}}" title="uy" id="uy" style="position:relative;top:1px;"></i></p>
                                          </div>
                                        </a>
                                      </li>
                                      <p class="m-0 text-gray">publicación:</p>
                                      <h5>{{$application->title}}</h5>
                                      <li class="chat-persons">
                                        <div class="chatContent p-2" style="border:1px solid #e3e3e3;border-radius:8px;padding-bottom:0px !important;">
                                            @foreach($messagesList as $key => $message)
                                                @if($message->writer_id == Auth::user()->id)
                                                    <div style="padding: 10px;background:#d9eaff;border-radius:10px;margin:0px 0px 7px 0px;">
                                                    <p class="mb-1">Tu:</p>
                                                @else
                                                    @php
                                                    $userMessageName2 = explode(' ',$message->user->name);
                                                    @endphp 
                                                     <div style="padding: 10px;background:#D6F4C9;border-radius:10px;margin:0px 0px 7px 0px;">
                                                    <p class="mb-1">{{$userMessageName2[0]}}:</p>
                                                @endif
                                                {{$message->message}}
                                                    </div>  
                                            @endforeach    
                                        </div>
                                        <form action="/responseMessage" method="POST">
                                        @csrf
                                            <div class="form-group mt-2">
                                                <input type="hidden" name="code" value="{{$message->code}}">
                                                <div class="col-sm-12">
                                                  @if(count($messagesList) == 1 && $messagesList[0]->writer_id == Auth::user()->id)
                                                    <div class="row">
                                                      <p class="text-gray pl-2"><i>Esperando respuesta ...</i></p>
                                                    </div>
                                                  @else  
                                                    <div class="row">
                                                        <textarea name="message" clas="form-control col-md-12" placeholder="Responder ( 360 caracteres max ) ... " rows="3" maxlength="360" onkeypress="return /[a-z 0-9 ñ ´ _ .¿? , @ # * = - $ ! + % & ()]/i.test(event.key)" style="width:100%;border-radius: 4px;border: 2px solid #35b0ff;" required></textarea>
                                                        <button type="submit" class="btn btn-info col-md-12 mt-2 p-2 text-center font-weight-bold" >Enviar <i class="mdi mdi-send" style="margin:auto;"></i></button>
                                                    </div>
                                                  @endif  
                                                </div>
                                            </div>
                                        </form>
                                      </li>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                  </div>
                              </div>                              
                            </div>
                        </div>                        
                        @endif
                      </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border-radius:20px;">
                        <div class="card-body pt-3 pb-3">
                           <div style="border:2px solid white;background:white;border-radius:10px;width:100%;margin-bottom:10px;">
                                <img src="/images/h77.jpeg" class="m-auto pt-3" style="display: block;width:100%;" alt="contrato freelancer">
                                <p class="w-100 p-3">
                                Administra todos los mensajes con tus clientes desde aquí, recuerda que <strong>heiwork NO se opone a que puedas continuar las comunicaciones fuera de la plataforma</strong>, ni tampoco hace de intermediario en ninguno de los acuerdos que puedas generar con la contraparte, te damos la libertad que necesitas para que puedas trabajar de la forma que tu prefieras.
                                </p>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>    
        </div>






    </div>   
@endsection

@section('script')
<script>
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

        function modalResponse(idApplication){

        }
        //get country code user
        /*
        $.get("https://api.ipdata.co?api-key=test", function (response) {
            var code = response.country_code;
            $("#country").val(code.toLowerCase());
        }, "jsonp");
        */
    });
</script>

@auth
    <script>
        const userAuth = {!! json_encode(Auth::user()) !!};
        if(userAuth.country == null){
            jQuery.noConflict();
            $('#modalCountry').modal('show'); 
        }           
    </script>
@endauth

@endsection

@section('footer')
    @include('footer')
@endsection      