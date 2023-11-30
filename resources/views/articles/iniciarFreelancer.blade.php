@extends('layouts.web')

@section('head')
<title>Iniciarse como freelance | HeiWork</title>
<link rel="canonical" href="{{URL::current()}}">

<meta name="description" content="Consejos para iniciarse como trabajador freelancer, cosas a tener en cuenta al momento de querer empezar a trabajar de forma remota en Internet">
<meta name="keywords" content="inicar como freelance, empezar, trabajo freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">


<meta property="og:type" content="website" />
<meta property="og:title" content="Info - Heiwork">
<meta property="og:description" content="Consejos para iniciarse como trabajador freelancer, cosas a tener en cuenta al momento de querer empezar a trabajar de forma remota e independiente en Internet.">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="heiwork" />
<meta property="og:image" content="https://heiwork.com/images/ini.jpeg">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Consejos para iniciarse como trabajador freelancer, cosas a tener en cuenta al momento de querer empezar a trabajar de forma remota e independiente en Internet." />
<meta name="twitter:title" content="Info - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/ini.jpeg" />


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
                            <h1>Iniciarse en el mundo freelancer</h1>
                            <p>En el mundo freelance hay un montón de oportunidades opciones nuevas por descubrir.</p>
                            <p>Optar por ser freelance es un gran desafío Qué puede tener muchas desventajas también cuentan con grandes ventajas a nivel personal y laboral.</p>
                            <p>Por este motivo hemos armado una serie de consejos para que ellos que desean <strong>iniciarse en este nuevo mundo del trabajo freelance</strong>.</p>
                            <p>Recorrido será diferente para todas las personas va a depender el tiempo dedicado y el rubro laboral elegido, como también el compromiso asumido y la responsabilidad que tengamos hacia el labor con nuestros clientes, por esto es que basado en todas estas incertidumbres es que vamos a ofrecerles esta serie de consejos.</p>
                            <img src="/images/ini.jpeg" alt="nuevo como freelancer heiwork.com">

                            <div class="col-md-8 p-3 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                                <ol>
                                    <li>
                                        <a href="#como-iniciarme-en-el-mundo-freelance">¿Cómo es que puedo iniciarme en el mundo freelancer ningún tipo de experiencia?</a>
                                    </li>
                                    <li>
                                        <a href="#12-consejos-para-iniciar-en-el-mundo-freelance">12 consejos para iniciar en el mundo freelance</a>
                                    </li>
                                    <li>
                                        <a href="#conocer-otras-personas-que-ya-se-dediquen-trabajar-de-forma-freelance">conocer otras personas que ya se dediquen trabajar de forma freelance</a>
                                    </li>
                                    <li>
                                        <a href="#Conocer-las-plataformas-o-empresas-qué-ofrecen-trabajo">Conocer las plataformas o empresas qué ofrecen trabajo</a>
                                    </li>
                                    <li>
                                        <a href="#Mostrar-lo-que-podemos-hacer">Mostrar lo que podemos hacer</a>
                                    </li>
                                    <li>
                                        <a href="#Organiza-tu-tiempos-de-trabajo">Organiza tu tiempos de trabajo</a>
                                    </li>
                                    <li>
                                        <a href="#Establecer-una-tarifa-por-hora">Establecer una tarifa por hora</a>
                                    </li>
                                    <li>
                                        <a href="#No-comprometerse-más-de-la-cuenta">No comprometerse más de la cuenta</a>
                                    </li>
                                    <li>
                                        <a href="#Iniciar-con-trabajos-pequeños">Iniciar con trabajos pequeños</a>
                                    </li>
                                    <li>
                                        <a href="#Enviar-propuestas-constantemente">Enviar propuestas constantemente</a>
                                    </li>
                                    <li>
                                        <a href="#Mejor-pasarse-Que-quedarse-corto">Mejor pasarse Que quedarse corto</a>
                                    </li>
                                    <li>
                                        <a href="#Si-es-en-inglés-mejor">Si es en inglés mejor</a>
                                    </li>
                                    <li>
                                        <a href="#Por-dónde-extraer-los-pagos">Por dónde extraer los pagos</a>
                                    </li>
                                    <li>
                                        <a href="#Pensar-a-largo-plazo">Pensar a largo plazo</a>
                                    </li>
                                </ol>
                            </div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4949713421471029"
     crossorigin="anonymous"></script>
<!-- horizontal 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="7638296493"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>  
                            <p>No siempre es fácil la vida de un freelancer, así se logra un buen equilibrio en planificación de horarios trabajo se puede llegar lejos.</p>
                            <p>Si has llegado a este punto te puedes estar preguntando <strong>¿Pero entonces cómo es la vida de freelance?</strong> <strong>¿Cómo podría yo comenzar en este mundo freelance?</strong> Si Estas son las primeras preguntas qué te vienen a la mente, tranquilo empezaremos por responder las una a una.</p>
                            <h2 id="como-iniciarme-en-el-mundo-freelance">¿Cómo es que puedo iniciarme en el mundo freelancer ningún tipo de experiencia?</h2>
                            <p>Para empezar a contestar esta pregunta hay que aclarar que un freelance no es más que un <strong>trabajador autónomo e independiente</strong> Qué ofrece sus servicios mediante plataformas online, redes sociales entre otras webs.</p>
                            <p>Un freelancer tiene el control total de su tiempo llega a un acuerdo con el cliente por un determinado trabajo Qué debe realizar, también hay casos en que el cliente es una empresa qué necesita contratar a una persona Autónoma para resolver alguna tarea.</p>
                            <p><strong>Los beneficios lo que cuenta el trabajador freelance</strong> en un acuerdo como éste son, trabajar desde su hogar, administrar sus horarios, cómo trabajar en diferentes proyectos de forma simultánea, además de ser su propio jefe.</p>
                            <p>Por otra parte también sabemos qué <strong>dedicarse al mundo freelance</strong> tiene también desventajas, aquí nombraremos algunas de ellas, no recibir ingresos fijos y constantes, no tener salario vacacional, dificultad en los inicios para encontrar clientes, trabajar en horario extendido para <strong>completar los proyectos</strong>.</p>
                            <p>Antes de comenzar como freelance debemos tener presente todos estos consejos, además debemos proyectar si no queremos dedicar a esta <strong>modalidad de trabajo</strong> de forma continua O solamente de tiempo parcial y temporal, para esto debemos tener en cuenta unos cuantos factores cómo lo ves el tema económico, nuestra vida personal, y asumir los cambios que esta nueva modalidad nos traerá en nuestra vida.</p>
                            <p>Como todo nuevo inicio al principio podemos caer en errores y luego iremos solucionando mientras iremos adquiriendo experiencia, por este motivo siempre es bueno mantener una actitud optimista, hay que tener en cuenta que todo lo nuevo trae consigo aprendizajes y obstáculos desconocidos.</p>
                            <p>El mejor consejo para <strong>tener éxito el mundo del trabajo freelance</strong> es no decaer ante los primeros obstáculos mantenerse con una mentalidad fuerte qué será necesaria en las primeras etapas, y que nos llevarán la concreción de nuestros primeros proyectos que serán un mojón clave el inicio esta nueva etapa.</p>

                            <img src="/images/init2.jpeg" alt="escritorio de trabajo, home office">

                            <h2 id="12-consejos-para-iniciar-en-el-mundo-freelance">12 consejos para iniciar en el mundo freelance</h2>
                            <p>La mayoría de las personas que están iniciando en este nuevo mundo, puede estarse preguntando <strong>¿Cómo empezar hacer un freelance?</strong> La respuesta va a depender de que sepas hacer o que esté dispuesto a ofrecer por internet, <strong>el camino de un programador freelancer</strong>, no es el mismo que el de un traductor o el de un diseñador, para cada realidad hay diferentes demandas y diferentes factores qué van a influir de manera contundente es la mitad de la pregunta planteada, la otra mitad se responderá con las actitudes personales y profesionales de cada persona.</p>

                            <h2 id="conocer-otras-personas-que-ya-se-dediquen-trabajar-de-forma-freelance">1 conocer otras personas que ya se dediquen trabajar de forma freelance</h2>
                            <p>Como en todas las ocasiones y en todos los trabajos tener a una persona que ya ya ha recorrido un camino y nos puede asesorar sobre qué hacer y qué no hacer, es una gran ventaja Aunque dicha persona se dedique a un rubro diferente al nuestro, si eres una de estas personas afortunadas, aprovecha esta circunstancia y dale el valor que se merece poder Contar con alguien.</p>

                            <h2 id="Conocer-las-plataformas-o-empresas-qué-ofrecen-trabajo">2. Conocer las plataformas o empresas qué ofrecen trabajo</h2>
                            <p>Existen una gran cantidad de empresas y personas particulares, que buscan contratar personas cada día, tanto sean grupo de Facebook Cómo en plataforma de trabajo freelance, dedicadas exclusivamente a <strong>conectar clientes con trabajadores</strong>, te recomendamos crearte una cuenta en una de estas plataformas primera experiencia, algunas de estas webs son en español y otras sólo en inglés.</p>

                            <h2 id="Mostrar-lo-que-podemos-hacer">3. Mostrar lo que podemos hacer</h2>
                            <p>Es muy importante el hecho de poder Mostrar Cuál es la calidad de nuestro trabajo a nuestros potenciales clientes, para ello Es recomendable tener un portafolio de trabajo realizado que acorde mucho más la decisión de un potencial cliente en contratarnos.Para un cliente qué busca los resultados específicos cómo lo puede ser la <strong>creación de un logo</strong> por ejemplo, es muy importante y quizás diríamos que hasta definitorio poder ver con sus propios ojos qué es lo que tú puedes hacer.</p>

                            <h2 id="Organiza-tu-tiempos-de-trabajo">4. Organiza tu tiempos de trabajo</h2>
                            <p>Como ya hemos hablado una de las <strong>ventajas de trabajar de moda freelance</strong> es poder controlar tus tiempos, y para que esto funcione de una forma óptima Es recomendable seleccionar la parte del día aquí podemos ser más productivos, y trabajar para nuestros proyectos en esos horarios.</p>
                            <p>Uno de los grandes problemas qué podemos tener <strong>trabajando de forma independiente</strong> es el hecho de trabajar demasiadas horas o bien en diferentes horarios de forma interrumpida, puede generar no alcanzar nuestros objetivos en el plazo de tiempo establecido, por eso es importante manejar lo más posible un horario. Lo bueno de esto es que si se sabe administrar se puede disfrutar y alcanzar un estilo de vida mucho más sano para nuestra miente y vida.</p>

                            <h2 id="Establecer-una-tarifa-por-hora">5. Establecer una tarifa por hora</h2>
                            <p>Si bien en muchos de los proyectos a los cuales tendremos la oportunidad de <strong>desarrollar proyectos</strong> por una fecha de inicio y una ficha final, dónde si nos pagará por los resultados y por trabajo finalizado, más que por horas, aunque esto sea así nosotros debemos tener un costo promedio por hora para nuestros clientes, ya que el tiempo que nos tomé realizar una tarea va a determinar el costo de la misma.</p>

                            <h2 id="No-comprometerse-más-de-la-cuenta">6. No comprometerse más de la cuenta</h2>
                            <p>Luego de pasar la primera etapa de descubrir <strong>nuestros primeros trabajos como freelance</strong>, empezaremos a tener más ofertas y clientes demandando nuestros servicios, y es por esto que hay que tener mucho cuidado de no asumir contrato con todos ellos, saqué sabremos personalmente qué de hacerlo nos demandara una carga laboral qué será imposible sostener.</p>

                            <h2 id="Iniciar-con-trabajos-pequeños">7. Iniciar con trabajos pequeños</h2>
                            <p>Tanto sea si nuestros primeros trabajos son dentro de una <strong>plataforma trabajo freelance</strong>, es bueno siempre iniciar contrabajo pequeños que lo puedan dejar un legajo de recomendación para luego y así poder asumir responsabilidades laborales más grandes, ya que te encontrarás con cliente que prefiera tener una garantía de trabajos anteriores, a no ser que tengas bueno por folio trabajos realizados.</p>

                            <h2 id="Enviar-propuestas-constantemente">8. Enviar propuestas constantemente</h2>
                            <p>Al inicio el recorrido es necesario tener una alta motivación para empujar esa gran roca pesada Qué es <strong>empezar generar un abanico de clientes desde cero</strong>, ya que luego esto clientes no tendrán en cuenta y nos contactaran ellos mismos a nosotros para poder continuar esos proyectos, según nuestro rubro y la cantidad de demanda Es que esto se dará más o menos, en caso como programación y sectores con el requerimiento especialidad es mayor se dará más, y sumado a nuestros resultados alcanzados.</p>

                            <h2 id="Mejor-pasarse-Que-quedarse-corto">9. Mejor pasarse Que quedarse corto</h2>
                            <p>Al momento de decidir el <strong>presupuesto de nuestro proyecto</strong> siempre es recomendable tener en cuenta que quizás el tiempo que nos tomé pues desarrollarlos puedo aumentar, esto se gana con la experiencia que luego de un tiempo aprenderemos a hacerlo tomaremos muy en serio este consejo, ya que sobre todo en los primeros proyectos a todos nos ha pasado un error con el tiempo estimado iniciar, lo que termina aceptando a nuestras finanzas.</p>

                            <h2 id="Si-es-en-inglés-mejor">10. Si es en inglés mejor</h2>
                            <p><strong>Dentro del mercado freelance actual</strong> podemos encontrar muchas <strong>ofertas laborales de toda Latinoamérica y el mundo</strong>, bien sabido la diferencia que existe entre el mundo del habla inglesa Comparado con el mundo hispano, Aunque no es algo totalmente ni 100% excluyente, lo que sí genera cualquier persona trabajadora freelance de un mundo globalizado como el de hoy es el hecho te podré ver tener acceso oportunidades que se presentan en clientes a nivel global.</p>

                            <h2 id="Por-dónde-extraer-los-pagos">11. Por dónde extraer los pagos</h2>
                            <p>Como todo trabajo Qué es un <strong>intercambio reconocimientos, servicios por dinero</strong> debemos conocer Cuáles son nuestras opciones de retirar los fondos enviados por nuestros <strong>clientes desde internet</strong> al mundo físico.</p>
                            <p>En cada país hay diferentes opciones nosotros en este blog hemos hablado ya anteriormente algunos métodos de cobro más internacionales y fáciles de utilizar, cómo lo puede ser PayPal o Payoneer, Qué son bancos online que nos permiten cobrar pero que también es necesario estar con la tarjeta de débito o crédito para poder extraerlos al mundo físico.</p>

                            <h2 id="Pensar-a-largo-plazo">12. Pensar a largo plazo</h2>
                            <p>Si bien es importante todos los trabajos tener objetivos a corto plazo que nos hará generar ingresos semanales y mensuales también es importante poder dedicar tiempo a construir una marca personal, una web en donde podamos ir Armando una estructura que nos permita en un tiempo subir el siguiente nivel Qué es una de las mayores ventajas Qué puede tener un <strong>trabajador dependiente en estos tiempos</strong>, cómo lo es el mundo de emprender y del emprendimiento online.</p>
                            <p>Este último consejo quizás no sea para la gente que está Iniciando el camino y que quiera tomar en cuenta hoy, pero pero sí lo es para las personas que han acumulado experiencia este <strong>mundillo del trabajo freelance online</strong>.</p>


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
                            <div class="form-group font-weight-bold">                                
                                <input name="email" type="email" class="form-control font-weight-bold" maxlength="36" aria-describedby="emailHelp" placeholder="Tu Correo *" required>
                            </div>
                            <div class="form-group font-weight-bold">                                
                                <input name="web" type="text" class="form-control font-weight-bold" maxlength="200" placeholder="Sitio Web">                                
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ md5('iniciarFreelancer') }}">
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