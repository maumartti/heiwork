@extends('layouts.web')

@section('head')
<title>beneficios y consejos de trabajar desde casa | HeiWork</title>
<link rel="canonical" href="{{URL::current()}}">

<meta name="description" content="Formas, beneficios y consejos de trabajar desde casa como freelancer y de forma remota para clientes en diferentes sectores profesionales.">
<meta name="keywords" content="trabajar en casa, trabajos freelance, empleo freelance, freelance, freelancer, trabajos, casa, heiwork, heiwork.com">


<meta property="og:type" content="website" />
<meta property="og:title" content="Trabajos en casa - Heiwork">
<meta property="og:description" content="Formas de trabajar desde casa como freelancer y de forma remota para clientes en diferentes sectores profesionales.">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="heiwork" />
<meta property="og:image" content="https://heiwork.com/images/ini.jpeg">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Formas de trabajar desde casa como freelancer y de forma remota para clientes en diferentes sectores profesionales." />
<meta name="twitter:title" content="Trabajos en casa - Heiwork" />
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
                            <h1>beneficios y consejos de trabajar desde casa</h1>
                            <img src="/images/trabajarCasa.jpg" alt="chica trabajando desde su casa">

                            <div class="col-md-8 p-3 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                                <ol>
                                    <li>
                                        <a href="#Espacio-físico-de-trabajo">Espacio físico de trabajo:</a>
                                    </li>
                                    <li>
                                        <a href="#Organización-de-las-tareas">Organización de las tareas</a>
                                    </li>
                                    <li>
                                        <a href="#Consejos-generales-para-nuestra-salud-al-trabajar-en-casa">Consejos generales para nuestra salud al trabajar en casa</a>
                                    </li>                                  
                                </ol>
                            </div>
<!--                            
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4949713421471029"
     crossorigin="anonymous"></script>
-->
<!-- horizontal 1 -->
<!--
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4949713421471029"
     data-ad-slot="7638296493"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>  
-->                            
                        <p>Sabemos que esta situación nos sorprende. No tenemos tiempo para preparar o ajustar <strong>nuestro espacio de trabajo en casa</strong>. Nos encontramos con que necesitamos dar espacio para todos y para todo: espacio de trabajo, espacio de niños, ellos toman clases a distancia, para nuestro padres, Brindar espacio para que las personas mayores vean la televisión y escuchen la radio. Nuestros estudios y restaurantes se han convertido en oficinas, aulas, cines, etc.</p>
                        <p>Esta situación hace que cambiemos nuestro día a día y coordinemos nuestra vida profesional y personal en circunstancias inciertas, en este caso, cuidar nuestra salud física y mental es fundamental. Sin embargo, en este caso, debemos discutir las actividades que promueven y mantienen la aptitud física para <em><strong>acomodar el espacio y la organización del trabajo desde casa</strong></em>.</p>
                        <h4>A continuación se ofrecen algunos consejos que le ayudarán a trabajar de forma saludable en casa durante el parto.</h4>
                        <h2 id="Espacio-físico-de-trabajo">Espacio físico de trabajo:</h2>
                        <p>1. Debe haber un lugar adecuado con <strong>buena iluminación</strong>, preferiblemente luz natural.</p>
                        <p>2. Una mesa o una mesa, una silla ergonómica es el elemento menos a considerar. La computadora debe estar frente al usuario y el escritorio debe ser lo suficientemente ancho para acomodar los elementos de trabajo de uso frecuente, así como el teclado y el mouse. <strong>La altura de la silla debe ser regulable</strong> y debe permitirnos apoyar adecuadamente nuestra espalda. No se recomienda utilizar una silla fija.</p>
                        <p>3. La superficie debajo de la mesa debe estar libre para que las piernas y los pies puedan moverse sin restricciones.
                        <p>4. Si usa computadoras portátiles, <strong>tenga en cuenta que el tiempo máximo de uso de estas computadoras es de 2 horas</strong>. Y ascensor. La pantalla hace estos ajustes para que tengamos una postura adecuada mientras trabajamos.
                        <p>5. Cabe señalar que la postura debe alternarse, se recomienda cambiar la postura cada hora, ponerse de pie y estirarse. Sentarse durante más de 2 horas sin cambiar de postura es perjudicial para su cuerpo, y más de 4 horas es fundamental.
                        <p>6. Se pueden realizar una variedad de ejercicios en el lugar de trabajo sin requerir grandes recursos, estos ejercicios deben concentrarse en el cuello, manos y piernas.
                        <h2 id="Organización-de-las-tareas">Organización de las tareas</h2>
                        <p>7. Es muy importante <strong>establecer rutinas de trabajo diarias</strong>, y que incluyan diversas actividades (trabajo, tiempo de familia, actividades domésticas, ejercicio físico, etc.) el tener un plan de trabajo para el día que fomente el desarrollo de todos los roles en los que nos desempeñamos, nos ayuda a mantener en forma nuestra salud física, mental y emocional.</p>
                        <p>8. Tener control del tiempo es muy importante en este periodo de confinamiento, donde podemos perder la noción de las horas del día o el día de la semana, lo que puede llevar a <strong>extralimitar la disponibilidad horaria de trabajo</strong> de nuestros colaboradores o de nosotros mismos.</p>
                        <p>9. Debemos generar una buena estrategia para gestionar mejor nuestro <strong>trabajo y tareas desde casa</strong> de la forma más eficiente posible, en la que podamos cumplir adecuada y oportunamente con nuestros objetivos de trabajo; esta estrategia debe ser la que se adapte mejor a nuestra forma de vida y que permita tener un buen balance vida/trabajo, reservando espacios específicos para el descanso y la vida personal.</p>
                        <p>10. Es muy importante mantener el contacto con nuestros compañeros, equipos de trabajo, encargados o de mayor rango, la comunicación fluida nos permite evaluar mucho mejor cómo se está desarrollando en trabajo en si, y cómo se están dando forma nuestros colegas y empleados a esta <strong>nueva forma de trabajo</strong>. De la misma forma, la diferencia esta en la comunicación permanente adoptada, qué nos permite adoptar expectativas mucho más claras y reales sobre de lo que esperamos del trabajo de los demás o de lo que se espera del trabajo propio.</p>
                        <p>11. Debemos utilizar los recursos, <strong>herramientas tecnológicas y aplicaciones que permitan que nuestro trabajo a distancia se realice de la mejor manera</strong>, esto implica adoptar una mejor formación antes de iniciar, debe ser adecuada para el manejo de las labores encomendadas, si bien la tecnología nos facilita el trabajo, el no saber utilizar adecuadamente estas herramientas puede aumentar la carga mental al momento de realizar nuestras actividades laborales.</p>
                        <h2 id="Consejos-generales-para-nuestra-salud-al-trabajar-en-casa">Consejos generales para nuestra salud al trabajar en casa</h2>
                        <p>Prevención del sedentarismo: las largas jornadas de trabajo, la combinación de actividades laborales y familiares y el confinamiento prolongado conducirán inevitablemente a nuestro estilo de vida sedentario. El ejercicio regular o la actividad física diaria es muy importante. Es importante destacar que una buena regla no es necesaria. Actividades simples , como subir y bajar las escaleras de un edificio una o dos veces al día, caminar por nuestra casa o áreas públicas de nuestra casa, son suficientes para <strong>mantenernos físicamente activos</strong>.</p>
                        <p>¡Ten cuidado con lo que cómes! En este momento, fácilmente podemos descuidar nuestra dieta, la ansiedad y la incertidumbre harán que comamos demasiada comida o que comamos comida rápida inapropiada, lo que hará que ganemos peso de manera incontrolable.                        
                        </div>  
                    </div>
                        
                        <!-- AddToAny BEGIN -->
                        <div class="row my-4">
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style m-auto">
                            <h4 class="text-center">Compartir</h4>
                        <a class="a2a_dd" href="{{URL::current()}}"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_pinterest"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_google_gmail"></a>
                        <a class="a2a_button_telegram"></a>
                        </div>
                        <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.locale = "es";
                        </script>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div>
                        <!-- AddToAny END -->
                         



                    <!-- SECCION DE COMENTARIOS Y COMENTAR -->
                    <div class="col-md-12 pt-5 px-0"></div>
                    <!-- END SECCION COMENTARIOS -->

                    
                </div>
            </div>    
        </div>  
    </div>      
@endsection

@section('footer')
    @include('footer')
@endsection         