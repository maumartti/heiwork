@extends('layouts.web')

@section('head')
<title>Los 50 mejores trabajos freelance en 2021 | HeiWork</title>
<link rel="canonical" href="{{URL::current()}}">

<meta name="description" content="Los 50 mejores trabajos freelance en el 2021, Miles de teletrabajadores están buscando poder  trabajar de forma freelancer desde su hogar en algunos de estos.">
<meta name="keywords" content="trabajos freelance, mejores trabajos, trabajo online, rubros teletrabajo, heiwork, heiwork.com">


<meta property="og:type" content="website" />
<meta property="og:title" content="50 trabajos freelance - Heiwork">
<meta property="og:description" content="Los 50 mejores trabajos freelance en el 2021, Miles de teletrabajadores están buscando poder  trabajar de forma freelancer desde su hogar en algunos de estos.">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="heiwork" />
<meta property="og:image" content="https://heiwork.com/images/50freelance.jpeg">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Los 50 mejores trabajos freelance en el 2021, Miles de teletrabajadores están buscando poder  trabajar de forma freelancer desde su hogar en algunos de estos." />
<meta name="twitter:title" content="50 trabajos freelance - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/50freelance.jpeg" />


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
        margin-bottom: 15px !important;
    }
    h1{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 44px !important;
        color: #3d3d3d !important;
        line-height: 1.2em !important;
    }
    h2{
         font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-size: 2.3rem !important;
        text-decoration: underline;
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
                            <h1>50 trabajos freelance para realizar de forma remota</h1>
                            <p>Hoy en día, cada vez son más las <strong>personas que consiguen empleo remoto por internet</strong>. El trabajo independiente brinda múltiples beneficios y las opciones disponibles en la web son muy variadas.</p>
                            <p>Para empezar, es importante especializarse en un área de interés, formarse constantemente y mantenerse actualizado.</p>
                            <p>También es recomendable presentar tus <strong>trabajos en un portfolio para demostrar tus habilidades</strong> profesionales.</p>
                            <p><strong>Aquí presentamos 50 empleos con los que podrías trabajar desde tu casa</strong>, o desde cualquier parte del mundo en donde haya una buena conexión a internet.</p>
                            <img src="/images/50freelance.jpeg" alt="mujer buscando trabajo como freelance">

                            
                            <div class="col-md-8 p-3 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                                <ol>
                                    <li>
                                        <a href="#Programación-y-tecnología">Programación y tecnología</a>
                                    </li>
                                    <li>
                                        <a href="#Diseño-y-multimedia">Diseño y multimedia</a>
                                    </li>
                                    <li>
                                        <a href="#Escritura">Escritura</a>
                                    </li>
                                    <li>
                                        <a href="#Ventas-online-y-marketing">Ventas online y marketing</a>
                                    </li>
                                    <li>
                                        <a href="#Soporte-administrativo">Soporte administrativo</a>
                                    </li>
                                    <li>
                                        <a href="#Servicio-al-cliente">Servicio al cliente</a>
                                    </li>
                                    <li>
                                        <a href="#Arquitectura-e-ingeniería">Arquitectura e ingeniería</a>
                                    </li>
                                    <li>
                                        <a href="#Asesoramiento-legal">Asesoramiento legal</a>
                                    </li>
                                    <li>
                                        <a href="#Clases-en-línea">Clases en línea</a>
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
                            <h2 id="Programación-y-tecnología">Programación y tecnología</h2>
                            <p>La programación es una de las carreras mejor pagas que pueden realizarse online, debido a que requiere conocimientos técnicos específicos que no cualquier persona tiene.</p>
                            <h3>Desarrollo web</h3>
                            <p>En la actualidad, muchas empresas y profesionales de distintas áreas necesitan <strong>crear o renovar sus sitios web</strong>. El desarrollo web es un servicio con bastante demanda que requiere conocimientos y experiencia en backend o frontend para llevarlo a cabo.</p>
                            <h3>Desarrollo de sitios web e-commerce</h3>
                            <p>Actualmente, las plataformas e-commerce se encuentran en pleno auge. El desarrollo de estas herramientas posibilita la transformación digital de negocios de rubros variados a través de tiendas virtuales donde se concretan las ventas.</p>
                            <h3>Desarrollo de aplicaciones</h3>
                            <p>En los últimos años, han surgido numerosas aplicaciones que buscan facilitar distintos aspectos de la vida de las personas. El <strong>desarrollo de aplicaciones</strong> es otra de las profesiones cada vez más demandadas que puede realizarse de forma remota, sin necesidad de tener contacto presencial con los clientes. </p>
                            <h3>Desarrollo de plantillas y plugins de WordPress</h3>
                            <p>El desarrollo de plantillas a medida y plugins de WordPress son bastante solicitados en los sitios en los que se buscan freelancers. WordPress es una plataforma de código abierto, en la que se puede ver el código de distintos sitios web y adaptarlo a las necesidades del cliente.</p>
                            <h3>Mantenimiento web</h3>
                            <p>Todos los sitios web necesitan mantenerse actualizados y funcionales. Para ello, es posible contratar servicios de mantenimiento web solo cuando el sitio lo necesite. También se puede solicitar ayuda de <strong>profesionales freelance</strong> para corregir errores en programas o aplicaciones.</p>
                            <h3>QA testing</h3>
                            <p>Los QA tester cumplen una función muy importante en el desarrollo de cualquier sistema informático. Así, se encargan de detectar problemas, bugs o fallas en la usabilidad de los programas. Si bien para ser tester no es necesario tener <strong>conocimientos en programación o diseño web</strong>, suele ser útil contar con experiencia en tecnología.</p>
                            
                            <img src="/images/50freelance2.jpeg" alt="diseñadores freelancer en la oficina">

                            <h2 id="Diseño-y-multimedia">Diseño y multimedia</h2>
                            <p>El diseño comprende un conjunto de procesos que buscan soluciones en cualquier campo. Las distintas ramas del diseño tienen en cuenta la funcionalidad, la operatividad, la eficiencia, el aspecto, entre otros aspectos que involucran diversos métodos creativos.</p>
                            <h3>Diseño UX/UI</h3>
                            <p>Una de las carreras más prometedoras de este último tiempo es el diseño de experiencias de usuarios e interacciones (UX/UI). Este enfoque novedoso propone una metodología de <strong>diseño de productos o servicios digitales</strong> centrada en las personas, comprendiendo sus necesidades y proponiendo soluciones que brinden experiencias memorables.</p>
                            <h3>Diseño gráfico</h3>
                            <p>Los diseñadores gráficos freelance se encargan de realizar distintos <strong>trabajos como logos</strong>, banners, branding e imagen corporativa, imágenes vectorizadas, portadas y diagramación de libros, revistas, folletos, estampas de textiles, etc. Es un área profesional en la que se combinan conocimientos técnicos con creatividad.</p>
                            <h3>Diseño de presentaciones e infografías</h3>
                            <p>Cada vez es más frecuente la contratación de diseñadores para crear presentaciones atractivas que mejoren la comunicación de los resultados de los clientes. Las infografías también son un recurso muy utilizado para representar información de forma visual y escaneable.</p>
                            <h3>Ilustraciones</h3>
                            <p>Los <strong>ilustradores freelance</strong> se encargan de ilustrar todo aquello que lo clientes soliciten: libros, carteles, infografías, sitios web, animaciones, etc. Trabajan con herramientas digitales o con soportes físicos y materiales de dibujo.</p>
                            <h3>Modelado 3D</h3>
                            <p>Los modelos 3D son el resultado de un proceso de desarrollo y diseño a través de un software especializado. El avance de la tecnología permitió plasmar tridimensionalmente imágenes que resultaban ambiguas de interpretar en dos dimensiones. Este tipo de técnica es requerida por <strong>arquitectos, dibujantes, diseñadores, entre otros</strong>.</p>
                            <h3>Animaciones</h3>
                            <p>Los animadores freelance, como otros <strong>profesionales remotos</strong>, muestran sus trabajos y habilidades con herramientas digitales a través de sus sitios web o redes sociales. Pueden especializarse en estilos concretos o mostrar versatilidad para ofrecer varias alternativas a sus clientes.</p>
                            <h3>Edición de video</h3>
                            <p>Actualmente existen diferentes programas de edición de videos, con los cuales es posible conseguir empleo freelance. Generalmente los trabajos se centran en <strong>publicidades, videos para redes sociales o videos institucionales, videoclips</strong>, entre otros.</p>
                            <h3>Locución</h3>
                            <p>Los locutores se dedican a grabar audios para presentaciones, material educativo, traducciones, etc. Este servicio se puede prestar de <strong>forma freelance</strong> si se cuenta con un buen equipo de grabación.</p>
                            <h3>Doblaje</h3>
                            <p>Los profesionales de <strong>doblaje les dan voz</strong> a personajes de películas y series de televisión actuadas o animadas. Actúan por medio de la voz generando distintos matices expresivos.</p>
                            <h2 id="Escritura">Escritura</h2>
                            <p>Los proyectos para <strong>escritores freelance</strong> que se encuentran en la web son sumamente variados. Los clientes buscan diferentes perfiles de acuerdo a sus necesidades.</p>
                            <h3>Redacción de contenidos</h3>
                            <p>Los redactores de contenidos escriben textos para otras personas, es decir, no firman lo que escriben sino que el contenido pertenece al cliente que lo contrata. Su trabajo no solo se basa en contar con una buena ortografía y gramática, sino que deben tener en cuenta el estilo de la redacción y la cantidad de palabras para comunicar de manera eficaz.</p>
                            <h3>Ghostwriter</h3>
                            <p>Un escritor fantasma, o ghostwriter, es un escritor profesional que es contratado para escribir bajo el nombre de otra persona. Suelen ser contratados para <strong>redactar novelas, cuentos, autobiografías, artículos</strong> y hasta discursos.</p>
                            <h3>Copywriter</h3>
                            <p>Muchos de los textos de los miles de millones de sitios que hay hoy en día en internet son <strong>escritos por copywriters</strong>. El copywriting es una técnica de escritura persuasiva con la que se busca captar la atención de los usuarios para que realicen acciones concretas, teniendo en cuenta sus deseos y motivaciones.</p>
                            <h3>Editor de textos y corrector de estilos</h3>
                            <p>A través de <strong>distintas plataformas digitales</strong> es posible contratar editores y correctores de estilo que mejoren la redacción de diferentes textos escritos por otras personas. Las correcciones pueden ser ortotipográficas o de estilo, según lo acordado con el cliente.</p>
                            <h3>Traducción</h3>
                            <p>En internet es posible encontrar traductores en distintos idiomas, expertos en lenguaje técnico, literario, jurídico o de subtítulos. Como en otros rubros, este tipo de empleos se pueden realizar de forma remota, y se basan fundamentalmente en dominar los idiomas con los que trabaja.</p>
                            <h3>Periodismo</h3>
                            <p>En algunos países, las empresas de medios de comunicación empezaron a cambiar sus modelos de contratación y emplean periodistas freelance. Estos profesionales se encargan de buscar y proponer proyectos, armar redes de contactos, investigar por su cuenta, entre otras tareas.</p>
                            <h2 id="Ventas-online-y-marketing">Ventas online y marketing</h2>
                            <img src="/images/50freelance3.jpeg" alt="Teletrabajador organizando tareas">
                            <p>Sin lugar a dudas las ventas online llegaron para quedarse. Esta transformación del comercio implicó la aparición de diversas profesiones que pueden <strong>realizarse de forma remota y freelance</strong>.</p>
                            <h3>Analista de marketing digital</h3>
                            <p>El marketing digital abarca las estrategias y acciones comerciales y publicitarias que se realizan a través de internet. Los <strong>analistas de marketing digital</strong> son los responsables de planificar las estrategias de una empresa para que incremente sus ganancias.</p>
                            <h3>Consultor e-commerce</h3>
                            <p>Las tiendas online son creadas por profesionales en informática, pero integran diferentes funciones. Las ventas por internet son un mercado creciente y los consultores e-commerce realizan análisis del negocio, investigan el público objetivo, brindan alternativas y soluciones, entre otras acciones relacionadas con el negocio.</p>
                            <h3>Community manager</h3>
                            <p>Los profesionales del marketing digital responsables de crear y desarrollar la comunidad online de una marca o empresa son los community managers. Durante su gestión, detectan potenciales clientes y establecen planes de acción.</p>
                            <h3>Publicidad</h3>
                            <p>Los publicistas son el punto de contacto entre las empresas, los medios de comunicación y los consumidores. <strong>Muchos trabajan de forma freelance gestionando campañas</strong> como realizan las agencias publicitarias.</p>
                            <h3>Automatización de correo electrónico y email marketing</h3>
                            <p>La publicidad por correo electrónico o email marketing sirve para enviar mensajes comerciales usando el correo electrónico como canal para cumplir con los objetivos del negocio. Las campañas personalizadas hechas por profesionales del <strong>email marketing</strong> se basan en estrategias, plan de contenidos y envíos, métricas, etc.</p>
                            <h3>Especialistas en SEO</h3>
                            <p>La competencia por el mercado en internet se incrementa día a día. Por ello, los consultores o especialistas en <strong>SEO se ocupan de posicionar sitios web</strong> en los buscadores más usados para impulsar el negocio al mejorar su visibilidad.</p>
                            <h3>Expertos en Google Ads (ADWords)</h3>
                            <p>Los profesionales especializados en Google Ads ayudan a maximizar las inversiones, optimizando las campañas en internet. A partir de este método creado por Google, las publicidades se afinan según los distintos públicos de interés.</p>
                            <h3>Telemarketing</h3>
                            <p>Los telemarketers son asesores telefónicos comerciales que promueven y venden productos o servicios de empresas a posibles clientes. Algunos operadores telefónicos trabajan de forma freelance y se dedican a ofrecer nuevos productos o a brindar asistencia técnica, comercial o administrativa.</p>
                            <h3>Gestor de cobros vía telefónica</h3>
                            <p>Existen muchas empresas que subcontratan a <strong>profesionales en gestión de cobros</strong> para dar seguimiento a los pagos pendientes de sus acreedores. La empresa proporciona la información requerida respecto a los cobros y ofrece comisiones por los cobros cerrados.</p>
                            <h3>Asesor financiero</h3>
                            <p>Los asesores financieros freelance ayudan a definir estrategias financieras. Guían en la implementación de planes de inversiones, facilitan la organización y la comprensión de las finanzas, entre otras tareas.</p>
                            <h3>Contador</h3>
                            <p>Los contadores freelance ejercen diferentes tareas dentro de la contabilidad. Comprenden distintos aspectos de la gestión de una empresa, teniendo en cuenta las finanzas, las bases jurídicas, la sistematización de la información contable, etc.</p>
                            <h2 id="Soporte-administrativo">Soporte administrativo</h2>
                            <p>Cada vez es más frecuente la contratación de <strong>soporte administrativo freelance y remoto</strong> que contribuya a mejorar el funcionamiento de las empresas.</p>
                            <h3>Asistencia virtual</h3>
                            <p>Muchas tareas administrativas se pueden realizar por internet y, al contar con una <strong>oficina virtual</strong>, es posible ahorrar espacio y recursos. Los asistentes virtuales realizan una amplia variedad de tareas que se adecúan a las demandas de cada empresa.</p>
                            <h3>Transcripción</h3>
                            <p>Los transcriptores pueden trabajar de forma remota convirtiendo audios en textos, con la mayor precisión posible. Los rubros en los que se emplean son muy amplios, aunque fundamentalmente transcriben eventos, congresos, reuniones de negocios, audiencias judiciales, etc.</p>
                            <h3>Data entry</h3>
                            <p>Los profesionales en data entry introducen datos o información en diferentes formularios electrónicos, mediante un procesador de textos o utilizando algún software específico de procesamiento de datos.</p>
                            <h3>Encuestas telefónicas</h3>
                            <p>Las empresas consultoras o de estudios de mercado se ocupan de sondear el mercado a través de encuestas a determinados grupos. Este trabajo de encuestador telefónico se suele <strong>subcontratar de manera freelance</strong>. Por lo general, se abona por encuesta completada y se guarda un registro de las llamadas realizadas.</p>
                            <h3>Project manager</h3>
                            <p>Los jefes de proyecto o <strong>project managers freelance</strong> son profesionales con gran experiencia, encargados de la supervisión de proyectos dentro de una empresa. Se caracterizan por tener una gran capacidad de análisis y habilidades interpersonales para facilitar la comunicación entre los actores involucrados.</p>
                            <h3>Reclutamiento de personal técnico</h3>
                            <p>Los reclutadores se especializan en encontrar a los candidatos ideales para ocupar un determinado puesto. Algunos trabajan de forma freelance para empresas creando listas de candidatos recomendados que mejor se adaptan a una posición vacante.</p>
                            <h2 id="Servicio-al-cliente">Servicio al cliente</h2>
                            <p>Las acciones implementadas por los usuarios en todo el proceso de compra deben contar con un servicio al cliente. </p>
                            <h3>Representante de servicio al cliente</h3>
                            <p>Un representante de servicio al cliente proporciona información y soporte a los usuarios en relación a los productos o servicios que comercializa la empresa para la cual trabaja. Gestiona las quejas, los reclamos y las sugerencias.</p>
                            <h3>Especialista en soporte técnico</h3>
                            <p>Los especialistas en soporte técnico participan del <strong>contacto con los clientes</strong> para proporcionales soluciones a sus problemas técnicos. También pueden ser <strong>contratados de manera freelance</strong> para realizar seguimientos, derivar consultas, elaborar informes, entre otras tareas.</p>
                            <h3>Agente de chat</h3>
                            <p>Aunque actualmente los chat bots están teniendo una presencia predominante, todavía existen trabajos freelance para agentes de chat. Estos chatean en tiempo real con los usuarios y pueden adaptarse a situaciones poco comunes para resolver los problemas de las personas.</p>
                            <h2 id="Arquitectura-e-ingeniería">Arquitectura e ingeniería</h2>
                            <p>Los avances de la tecnología posibilitan que haya cada vez más profesionales de las áreas de la arquitectura e ingeniería volcándose al trabajo freelance.</p>
                            <h3>Arquitectura</h3>
                            <p>Los <strong>arquitectos freelance</strong> suelen especializarse en un nicho de mercado y definen sus habilidades técnicas por medio de herramientas digitales, como AutoCAD, ArchiCad, CorelCad, etc. Estos profesionales tienen su propio <strong>sitio web para promocionar su trabajo</strong>.</p>
                            <h3>Ingeniería</h3>
                            <p>El <strong>trabajo independiente</strong> puede ser una buena opción para los ingenieros. Esta tendencia busca optimizar los recursos y flexibilizar la forma de contratación. Aunque gran parte del <strong>trabajo se pueda hacer de forma remota</strong>, cada un determinado tiempo se suelen realizar reuniones o exposiciones presenciales.</p>
                            <h2 id="Asesoramiento-legal">Asesoramiento legal</h2>
                            <p>El asesoramiento legal o jurídico ofrece información y asesoría para solucionar problemas relacionados con la aplicación de normativas, leyes y reglamentos.</p>
                            <h3>Asistencia legal</h3>
                            <p>Muchos abogados trabajan como <strong>asistentes legales</strong> de forma freelance. Se especializan en asesorías oficiales o privadas y buscan satisfacer el derecho a la defensa.</p>
                            <h3>Auditoría externa</h3>
                            <p>Los <strong>auditores externos o independientes</strong> evalúan el correcto funcionamiento de las empresas, en relación a los marcos normativos a los que están sujetas. Estos profesionales realizan exhaustivos procesos de análisis y evaluaciones que se vuelcan en informes de auditoría, en los que se sugieren posibles mejoras.</p>
                            <h3>Consultoría logística</h3>
                            <p>Los consultores o asesores de logística ofrecen servicios de <strong>gestión a empresas que necesitan colaboración externa</strong> para llevar a cabo sus procesos o para implementar tecnología innovadora que le permita volverse más competitiva.</p>
                            <h2 id="Clases-en-línea">Clases en línea</h2>
                            <p>La educación a distancia es una forma de enseñanza en la que los estudiantes no asisten presencialmente a clases, sino que se basa en nuevas <strong>tecnologías y estrategias de aprendizaje</strong>. Esta reciente metodología se imparte en todos los niveles educativos y algunas <strong>instituciones contratan profesionales freelance</strong>.</p>
                            <h3>Coordinación general</h3>
                            <p>Existen distintos roles que permiten la educación a distancia. Los coordinadores generales son el nexo entre los distintos actores y se dedican a articular todos los procesos implicados.</p>
                            <h3>Especialistas en contenidos</h3>
                            <p>Los diferentes cursos online suelen tener expertos en contenidos, que son los responsables de fijar los contenidos y las estrategias didácticas del curso que se dicte.</p>
                            <h3>Tutorías</h3>
                            <p>Los profesores tutores guían y orientan a los estudiantes en su proceso de aprendizaje. A veces este rol es tomado por tutores, personas que son entendidas del tema impartido aunque no cuentan con formación docente.</p>
                            <h3>Asesorías en tecnología</h3>
                            <p>Los asesores en tecnología apoyan al equipo docente, sugieren herramientas tecnológicas acordes a cada nivel para que los alumnos alcancen los objetivos de aprendizaje propuestos. También se conocen como <strong>tecnopedagogos</strong>.</p>
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
                                <input type="hidden" name="id" value="{{ md5('mejoresTrabajosFreelancer') }}">
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