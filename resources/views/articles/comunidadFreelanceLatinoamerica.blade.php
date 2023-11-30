@extends('layouts.web')

@section('head')
<title>Teletrabajo freelance | HeiWork</title>
<link rel="canonical" href="{{URL::current()}}">

<meta name="description" content="Teletrabajo freelance en Latinoamérica, todas las ventajas y recomendaciones de parte de la comunidad heiwork hacia los trabajadores de habla hispana.">
<meta name="keywords" content="Latinoamérica y tele-trabajo, heiwork, comunidad, freelance, freelancer, consejos, trabajador, heiwork, heiwork.com">


<meta property="og:type" content="website" />
<meta property="og:title" content="Info - Heiwork">
<meta property="og:description" content="Teletrabajo freelance en Latinoamérica, todas las ventajas y recomendaciones de parte de la comunidad heiwork hacia los trabajadores de habla hispana.">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="heiwork" />
<meta property="og:image" content="https://heiwork.com/images/latinoamerica.jpg">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Teletrabajo freelance en Latinoamérica, todas las ventajas y recomendaciones de parte de la comunidad heiwork hacia los trabajadores de habla hispana." />
<meta name="twitter:title" content="Info - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/latinoamerica.jpg" />


<!-- font google blog -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

<style>
    ol,ul,li,p,div,span, .landing-page p,.landing-page div, .landing-page span{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
    }
    .landing-page p ,.landing-page div, .landing-page span{
        /*font-family: 'Quicksand', sans-serif !important;*/
        font-size: 16px !important;
    }
    .cont h1{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 41px !important;
        color: #3d3d3d !important;
        line-height: 1.2em !important;
    }
    h2{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 32px !important;
        color: #3d3d3d !important;
    }
    h3{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 24px !important;
        color: #3d3d3d !important;
    }
    .landing-page p ,.landing-page div, .landing-page span, .landing-page ul, .landing-page li{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-size: 18px !important;
    }
    .landing-page ul{
        font-weight:400;
    }
    img{
        max-width: 100%;
    }
    h1{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 44px !important;
        color: #3d3d3d !important;
        line-height: 1.2em !important;
    }
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
    top: 45px;
    left: 35px;
    border-radius:2px;
    }
    .landing-page .middle-section{
        text-align: inherit;
    }
</style>
@endsection
@section('content')
    <div class="container-scroller landing-page">    
        <div class="container-fluid middle-section bg-white" style="padding-top:40px;">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h1>Teletrabajo freelance en Latinoamérica</h1>
                            <p>En este articulo haremos un informe de cual es el <strong>estado del teletrabajo y trabajo freelance en Latinoamérica</strong> en el presente, tomaremos datos de estudios realizados recientemente para dar una visión mas completa de todo lo que esta pasando en nuestra región con <strong>respecto al futuro del trabajo remoto</strong> y cuales son las novedades y desafíos que se están planteando a niveles estatales y del sector privado.</p>
                            <img src="/images/latinoamerica.jpg" alt="Latinoamérica y el teletrabajo, trabajo freelance, trabajo remoto">

                            <div class="col-md-8 p-3 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                                <ol>
                                    <li>
                                        <a href="#Teletrabajo-como-nueva-modalidad-en-las-empresas">Teletrabajo como nueva modalidad en las empresas</a>
                                    </li>
                                    <li>
                                        <a href="#Empresas-públicas-teletrabajando">Empresas públicas teletrabajando</a>
                                    </li>
                                    <li>
                                        <a href="#Lista-países-donde-las-empresas-públicas-están-utilizando-teletrabajo">Lista países donde las empresas públicas están utilizando teletrabajo</a>
                                    </li>
                                    <li>
                                        <a href="#Teletrabajo-+-trabajo-freelance">Teletrabajo + trabajo freelance</a>
                                    </li>
                                    <li>
                                        <a href="#Latinoamérica-aprovechando-al-resto-del-mundo">Latinoamérica aprovechando al resto del mundo</a>
                                    </li>
                                    <li>
                                        <a href="#¿El-teletrabajo-mejora-salario-en-Latinoamérica?">¿El teletrabajo mejora salario en Latinoamérica?</a>
                                    </li>
                                    <li>
                                        <a href="#conclusión">Conclusión</a>
                                    </li>
                                </ol>
                            </div>

                            <p>El teletrabajo puede parecer una forma o un termino nuevo pero ya cuenta con una trayectoria de <strong>más de 20 años en Latinoamérica</strong>, por el año de 1997 en Brasil ya se hablaba de teletrabajo, quien ha sabido ser el país pionero en esta modalidad, si bien en ese momento se pensó que esta modalidad de trabajo pudiera ser algo que crecería muy rápido, lo cierto es que pasaron muchos años para que todo ese sueño llegara a transformarse en una realidad que pudiera ser absorbida por la mayoría de la población latinoamericana.</p>
                            <p>Si bien hoy en día con la velocidad del surgimiento de estos nuevos términos como <strong>teletrabajo, trabajo remoto, trabajo freelance</strong>, hay que hacer una separación en su uso, si bien pueden estar compartiendo algunas características no son ni representan lo mismo, veremos cuales son las diferencias y por que en todo el <strong>continente latinoamericano</strong> se esta aplicando de forma voraz en estos momentos, y cuales son sus mayores ventajas o desventajas.</p>
                            
                            <h2 id="Teletrabajo-como-nueva-modalidad-en-las-empresas">Teletrabajo como nueva modalidad en las empresas</h2>
                            <p>La tendencia era muy timida a partir del año 2012 muchas <strong>empresas latinoamericanas hacían una pequeña apuesta por el teletrabajo</strong> dentro de sus filas, solo el 0,4 % de las mismas estaban dando como opción esta modalidad y en su mayoría era por temas de distancia entre las <strong>oficinas y trabajadores calificados</strong> que se encontraban en otras ciudades o países cercanos.</p>
                            <p>A partir de que los años pasaron fue que el aumento se hizo exponencial , en el año 2016 ya se podría notar una <strong>suba fuerte del teletrabajo siguiendo la línea de las empresas privadas</strong>, y sobre todo del rubro de las TICs,  2018, y 2019 ya muchas de estas empresas estaban dando la posibilidad a sus trabajadores de <strong>trabajar 2 o 3 días desde sus casas</strong> y el resto en la oficina, algo que sin duda fue revolucionario y se lo miraba un poco como experimento al que no se podría esperar demasiado, ya que existían muchos prejuicios sobre la </trong>productividad de las personas trabajando desde sus hogares</strong>, cosa que fue revocada mas adelante a la llegada de la pandemia de covid-19 en el año 2020.</p>
                            <p>Sin dudas algo inesperado para las empresas, tanto las empresas privadas como las públicas se tuvieron que adaptar rápidamente a la <strong>nueva modalidad y normalidad del trabajo</strong>, para los empleados trajo una enorme cantidad de ventajas el echo de poder trabajar desde sus casas, si bien muchas personas nos han comentado que al inicio preferían regresar a la modalidad de la oficina, <strong>(cosa que era imposible por la pandemia )</strong> , pasado un tiempo de adaptación, la mayoría de los <strong>teletrabajadores</strong> prefirieron continuar trabajando desde sus hogares, pero <i>¿a que se debe este cambio de comportamiento?</i> , según un estudio realizado, este cambio se debió principal mente al momento de mover a la gente de su <strong>"zona de confort"</strong>, pasar de tener todo armado para trabajar en la oficina a <strong>tener que montar todo un sistema nuevo en sus casas</strong>, fue un poco estresante al principio , pero una vez pasada esa etapa ya los trabajadores pudieron adaptarse perfectamente y fue en ese momento donde empezaron a ver las ventajas del teletrabajo.</p>

                            <h2 id="Empresas-públicas-teletrabajando">Empresas públicas teletrabajando</h2>
                            <p>Las <strong>empresas públicas de la mayoría de países de latinoamérica</strong> también tuvieron que adaptarse junto con sus empleados a la nueva normativa, países como México, Argentina, Uruguay, Chile, Colombia, Panamá, Perú entre otros más de la región, tuvieron que apostar casi de forma obligada por mandar a toda su plantilla de trabajadores estatales a <strong>hacer tele-trabajo desde casa</strong>, pasaron de tener un 0,6 % a casi un 12% de personas trabajando de forma remota en los primeros 6 meces del año 2020, y luego algunos países llegaron a superar el 40% en los inicios del 2021, como lo fueron el caso de <strong>Panamá, Uruguay y Chile</strong>.</p>
                            <p>Hoy en día al momento de escribir este artículo las cosas no han cambiado ya que en este año 2021 no solo se continúan con las mismas medidas en la mayoría de países sino que en muchos casos estas se han agravado debido a que es necesario que mucha gente siga encerrada , pero a la vez trabajando y produciendo para poder <strong>mantener la economía a flote</strong>, que pasará luego de que todo se vaya normalizando, nadie lo sabe, pero lo que si se sabe es que el mundo le ha echado mano a una <strong>modalidad de trabajar a distancia</strong> en todos los sectores que va a dejar abierta la posibilidad de que se pueda aplicar de forma estándar, en todo <strong>Latinoamérica y el mundo</strong>.</p>
                                                        
                            <ul><h3 id="Lista-países-donde-las-empresas-públicas-están-utilizando-teletrabajo">Lista países donde las empresas públicas están utilizando teletrabajo</h3>
                                <li>Brasil</li>
                                <li>Colombia</li>
                                <li>Perú</li>
                                <li>Panamá</li>
                                <li>
                                    <a href="/blog/mercado-perspectivas-del-trabajo-freelance-uruguay">Uruguay</a></li>
                                <li>Argentina</li>
                                <li>México</li>
                                <li>Chile</li>
                                <li>Puerto Rico</li>
                                <li>Costa Rica</li>
                            </ul>

                            <h2 id="Teletrabajo-+-trabajo-freelance">Teletrabajo + trabajo freelance</h2>
                            <p>Sobre todo en <strong>empresas que se dedican a desarrollar páginas web</strong>, <strong>diseño grafico</strong>, <strong>marketing digital</strong>, <strong>edición y desarrollo de audiovisuales</strong> es que se encuentran los mayores <strong>contratantes de trabajadores freelancer por tiempo determinado</strong>, por proyectos con una fecha determinada y un contrato virtual que puede tener una duración de entre 1 a 6 meces en algunas casos se puede extender por años inclusive.</p>
                            <p>Esa es <strong>la modalidad de teletrabajo freelancer que es una variante del teletrabajo</strong> como tal, ya que el trabajador participa del proyecto y no forma parte de la empresa como empleado fijo, eso es un freelancer en si, y esa es la diferencia que lo hace especial, vale la pena hacer la aclaración para evitar confusiones ya que como ha todos nos ha pasado, la llegada de nuevas terminologías ha confundido un poco todo, y esto ha llevado a que muchas personas no entiendan cuales son las <strong>diferencias entre un teletrabajador que trabaja para una empresa</strong>, pudiendo esta estar dentro o fuera de su país o inclusive fuera de la región, y ser un <strong>trabajador independiente</strong> que hace un papel determinado hasta que el proyecto llega a puerto.</p>

                            <h2 id="Latinoamérica-aprovechando-al-resto-del-mundo">Latinoamérica aprovechando al resto del mundo</h2>
                            <p>El fenómeno de la globalización esta haciendo cada vez menos importante el lugar en donde resida cada persona, si tienes talento o te has esforzado miles de horas tratando de <strong>aprender a programar</strong>, ha entender como funciona un <strong>programa que edita imágenes</strong> , o <strong>eres traductor</strong> , o simplemente te gusta trabajar sentado en frente a una pantalla, esta es tu gran oportunidad, es el <strong>momento clave del que Latinoamérica</strong> se nutre del resto del mundo, exportando talentos y mano de obra digital en grandes cantidades, donde antes era una cuestión de tener que vivir cerca de las grandes empresas, de tener que aplicar a las entrevistas de trabajo que muchas veces eran decisivas por temas que estaban por <strong>fuera del trabajo o las habilidades de las personas</strong>, hoy en día gracias al trabajo remoto la balanza se hace mas democrática en ese sentido.</p>
                            <p>Si bien no podemos decir que ya todo esta echo, no que todo es perfecto , al menos estos cambios se han producido para mejorar la calidad de vida de las personas, muchos trabajan desde lugares muy alejados <strong>dentro de Latinoamérica para empresas de Estados Unidos o Europa</strong>, donde los salarios son mucho mas altos, pero también se requiere mas experiencia y manejo de idiomas cosa que se hace vital para poder aprovechar esta ventaja si el objetivo es entrar a la puerta grande del mundo laboral mundial.</p>
                        
                            <h2 id="¿El-teletrabajo-mejora-salario-en-Latinoamérica?">¿El teletrabajo mejora salario en Latinoamérica?</h2>
                            <img src="/images/latino.jpg" alt="países latinoamericanas aplicando teletrabajo y sueldos" style="width:300px;">
                            <p>Según los datos la respuesta a esta pregunta es que si se ha visto una <strong>mejora de los salarios entre los trabajadores independientes</strong> y también entre los que son contratados no independientes y trabajan para una empresa de su mismo país.</p>
                            <p>Para los del primer caso, personas que trabajan para empresas del exterior como <strong>freelancers que realizan un trabajo temporal</strong>, el echo de poder acceder a mercados del primer mundo los han elevado en sus sueldos, además que sumado a esto hay que tener en cuenta que si se compara con el gasto de visa de <strong>algunos países latinoamericano</strong> puede ser aún mas fructífero para la persona.</p>
                            <p>En los casos del segundo grupo que hemos nombrado, el ahorro viene siendo una mejora que se va presentando en los gastos de locomoción hasta las oficinas de sus respectivos puestos laborales, como también todo lo que tiene que ver con gastos adicionales del día a día que se presentan, que en este caso donde esa <strong>persona realiza sus tareas desde su casa</strong>, ahorra toda esa cantidad de dinero pudiéndolo gastar en otras cosas mas importantes.</p>
                            <p>si vemos en la imagen de comparación de salarios mínimos que presenta <strong>cada país de Latinoamérica expresado en dólares</strong> podemos ver que que existen diferencias entre ellos, pero esto no quiere decir que en un país por tener más ingresos en sus salarios mínimos, esto se refleje directamente en la calidad de vida de esas personas, ya que cuenta también el <strong>costo de vida que cada país tenga</strong>, por ej en Uruguay el salario mínimo que muestra este estudio es de 424 dólares , pero el gasto de vida es mucho y esto hace que una persona en México por ejemplo con un salario mínimo de 217 dólares, pueda vivir prácticamente de la misma manera que un ciudadano Uruguayo.</p>
                        
                            <h2 id="conclusión">Conclusión</h2>
                            <p><strong>El teletrabajo tanto en su modalidad freelance</strong> como por contrato es algo que ha irrumpido en nuestras sociedades, y ha llegado para cambiar la forma de conectarnos al mundo y <strong>aportar desde Latinoamérica talentos</strong> y mano de obra nueva, que se tendrá que ir adaptando si no se quiere quedar por fuera de toda <strong>esta carrera donde la tecnología esta haciendo no solo un papel principal</strong> sino casi que el único medio de vida para el futuro próximo.</p>
                            <p>Nos queda mucho camino por recorrer, muchas cosas a las cuales adaptarnos si queremos aprovechar de manera optima esta gran oportunidad que se nos esta presentando a nivel global, tenemos cada vez mas personas preparadas y cada vez mas <strong>herramientas digitales</strong> para hacer frente al <strong>futuro de la nueva Latinoamérica</strong> que será conectada o no será.</p>
                        </div>  
                        <div class="fb-share-button" data-href="{{URL::current()}}" data-layout="box_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fheiwork.com%2Fteletrabajo-freelance&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>              
                    </div>

                    <!-- SECCION DE COMENTARIOS Y COMENTAR -->
                    <div class="col-md-12 pt-5 px-0">
                        @foreach($comments as $key => $comment)
                            @if($comment->user)
                                @php
                                    $userName = explode(' ',$comment->user->name);
                                @endphp
                            @else
                                @php
                                    $userName = explode(' ',$comment->name);
                                @endphp
                            @endif    
                                <div class="col-lg-12 grid-margin stretch-card p-0 mb-2">           
                                  <div class="card" style="border-radius:20px;border:1px solid silver;box-shadow: none !important;">
                                    <div class="card-body pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-4 col-md-2 pl-0 pl-sm-2 pr-0 text-center">
                                                <div style="width: ;width: 90px;margin: auto;position: relative;">                                                
                                                    <a @if($comment->user) href="/freelancer/{{$comment->user->code}}" @endif>
                                                    <img class="rounded-circle mt-1 mb-1" @if($comment->user) src="/images/users/{{($comment->user->image == null ? 'no-user.png' : $comment->user->image)}}" @else src="/images/users/no-user.png" @endif  style="width:60px;height:60px; @if($comment->user) @if($comment->user->plan == 'professional') border:3px solid #55c12e @elseif($comment->user->plan == 'premium') border:3px solid #007bff @else border:3px solid grey @endif @endif" data-toggle="tooltip" data-placement="top" title="{{$userName[0]}}" alt="{{$userName[0]}}">
                                                    </a>
                                                </div>
                                                <p class="font-weight-bold communityNameUS mb-0">
                                                    @if($comment->user)
                                                    <span><a href="/freelancer/{{$comment->user->code}}" style="font-size:14px;">{{substr($userName[0],0,9)}}</a></span><a href="#"><i class="ml-1 flag-icon flag-icon-{{$comment->user->country}}" title="{{$comment->user->country}}" id="{{$comment->user->country}}" style="position:relative;top:1px;left:0px;border-radius: 2px;font-size: 14px;"></i></a>
                                                    @else
                                                        <span><a @if($comment->web != null) href="{{$comment->web}}" rel="nofollow" target=”_blank” @endif style="font-size:14px;">{{$comment->name}}</a></span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-8 col-md-10 px-0 px-md-4 py-0 " style="/*background:#EFFBEA;*/border-radius: 20px;text-align:left;position:relative;">                                               
                                                <div class="row">
                                                <div class="col-12">
                                                  <strong style="font-size:14px !important;">{{date("d/m/Y", strtotime($comment->created_at))}}</strong>
                                                  <p>{{$comment->comment}}</p>  
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>    
                                </div>   
                        @endforeach

                        <!-- formulario de commentarios -->
                        <form action="/postComment" method="POST"> 
                            @csrf
                            <h3 class="mt-5">Publicar comentario</h3>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                           
                            <div class="form-group font-weight-bold">
                                <textarea name="comment" class="form-control font-weight-bold" cols="10" rows="10" maxlength="500" placeholder="Escribe aquí tu comentario *" required></textarea>
                            </div>
                            @if(!Auth::check())
                            <div class="form-group mt-3 font-weight-bold">                                
                                <input name="name" type="text" class="form-control font-weight-bold" maxlength="20" placeholder="Tu Nombre *" required>                            
                            </div>
                            <!-- <div class="form-group font-weight-bold">                                
                                <input name="email" type="email" class="form-control font-weight-bold" maxlength="36" aria-describedby="emailHelp" placeholder="Tu Correo *" required>
                            </div> -->
                            <div class="form-group font-weight-bold">                                
                                <input name="web" type="text" class="form-control font-weight-bold" maxlength="200" placeholder="Sitio Web">                                
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ md5('comunidadFreelanceLatinoamerica') }}">
                                <input type="hidden" name="type" value="{{ md5('article') }}">
                                <input type="submit" class="btn btn-primary btn-block" value="Publicar Comentario">
                            </div>  
                        </form>
                    </div>
                    <!-- END SECCION COMENTARIOS -->
                    
                </div>
            </div>    
        </div>  
    </div>      
@endsection

@section('footer')
    @include('footer')
@endsection         