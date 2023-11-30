@extends('layouts.web')

@section('head')
<title>Teletrabajo freelance | HeiWork</title>
<link rel="canonical" href="{{URL::current()}}">

<meta name="description" content="Que es el treletrabajo freelance, y todas las modalidades de teletrabajo con las que contamos hoy en día, los rubros, sectores, formas de teletrabajar 2021">
<meta name="keywords" content="artículos de tele-trabajo, heiwork, info freelance, freelance, freelancer, programador, trabajador, heiwork, heiwork.com">


<meta property="og:type" content="website" />
<meta property="og:title" content="Info - Heiwork">
<meta property="og:description" content="Que es el treletrabajo freelance, y todas las modalidades de teletrabajo con las que contamos hoy en día, los rubros, sectores, formas de teletrabajar y nuevas tecnologías que están siendo utilizadas para ejercer como freelancer.">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="heiwork" />
<meta property="og:image" content="https://heiwork.com/images/teletrabajo.jpg">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Que es el treletrabajo freelance, y todas las modalidades de teletrabajo con las que contamos hoy en día, los rubros, sectores, formas de teletrabajar y nuevas tecnologías que están siendo utilizadas para ejercer como freelancer." />
<meta name="twitter:title" content="Info - Heiwork" />
<meta name="twitter:image" content="https://heiwork.com/images/teletrabajo.jpg" />


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
                            <h1>Teletrabajo en modo freelance</h1>
                            <p>En este articulo hablaremos de todas las <strong>modalidades de teletrabajo</strong> y haremos una comparación <strong>sobre el teletrabajo y el trabajo como freelance</strong> ya que en muchos casos se suele confundir estos dos términos o darlos como iguales, pero no lo son, ya que ser freelancer es una modalidad dentro de el teletrabajo o trabajo remoto.</p>
                            <img src="/images/teletrabajo.jpg" alt="freelancer utilizando heiwork.com">

                            <div class="col-md-8 p-3 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                                <ol>
                                    <li>
                                        <a href="#modalidad-freelance-dentro-del-teletrabajo">Modalidad freelance dentro del Teletrabajo</a>
                                    </li>
                                    <li>
                                        <a href="#principales-ventajas-de-teletrabajar-de-forma-freelance">Principales ventajas de teletrabajar de forma freelance</a>
                                    </li>
                                    <li>
                                        <a href="#¿por-que-hay-cada-vez-más-empresas-contratando-trabajadores-en-línea?">¿por que hay cada vez más empresas contratando trabajadores en línea?</a>
                                    </li>
                                    <li>
                                        <a href="#Mejor-forma-de-empezar-a-trabajar-de-modo-freelance">Mejor forma de empezar a trabajar de modo freelance</a>
                                    </li>
                                    <li>
                                        <a href="#Cosas-a-tener-en-cuenta-para-trabajar-de-forma-óptima">Cosas a tener en cuenta para trabajar de forma óptima</a>
                                    </li>
                                    <li>
                                        <a href="#Proyecciones-del-mundo-del-trabajo-freelance-para-los-próximos-años">Proyecciones del mundo del trabajo freelance para los próximos años</a>
                                    </li>
                                </ol>
                            </div>

                            <p>El teletrabajo es una modalidad que esta creciendo fuertemente en nuestra época, sobre todo a partir del año 2010 en adelante es cuando, ha empezado a surgir con mucha fuerza esta modalidad de trabajo debido al mejoramiento y desarrollo constante de nuevas tecnologías, como también el acceso a las mismas por parte de las personas, que han encontrado una forma nueva y diferente de ejercer sus profesiones.</p>
                            <p>en medio de una tendencia que ha ido en crecimiento de forma constante hasta el surgimiento de la pandemia del  <strong>#coronavirus en 2020, 2021</strong> , donde se produjo un <strong>aceleración de teletrabajo y trabajo freelance</strong>, que  tuvo una explosión extraordinaria, obligando a muchas empresas de todos los sectores tanto publico como privado a adoptar esta modalidad de trabajo y convertir a sus empleados en teletrabajadores de forma temporal para evitar un contacto humano.</p>
                            <p>Lo que hasta antes de ese año era cotidiano, pero que marcaría un momento de quiebre muy grande a nivel mundial en lo que refiere a la forma de trabajar para muchas personas, sobre todo en los rubros de la educación y servicios tecnológicos como lo es el desarrollo de software, diseño gráfico y web, ilustradores, traductores entre otras decenas de rubros nuevos que han ido surgiendo en estas últimas décadas.</p>
                            <ul>
                                <strong>Algunas de las ventajas que tiene el teletrabajo eso:</strong>
                                <li>Disponer de flexibilidad horaria </li>
                                <li>Poder elegir el lugar de trabajo</li>
                                <li>Evitar y ahorrar en gastos de transporte </li>
                                <li>Mas control sobre la gestión de tiempos</li>
                            </ul>

                            <p>Actualmente el teletrabajo no esta implementado 100% ni en nuestras vidas, aunque si crecimiento haya sido grande este último año, serán las nuevas generaciones las que adopten y naturalicen el trabajo remoto como forma de vida, tanto sea para <strong>trabajar desde casa o desde un coworking</strong> o cualquier otra parte.</p>
                            <h2 id="modalidad-freelance-dentro-del-teletrabajo">Modalidad freelance dentro del Teletrabajo</h2>
                            <p>Hay una gran <strong>diferencia entre el teletrabajo como tal y ser freelancer</strong>, ya que si bien se pude ser teletrabajador, eso no quiere decir que eres un freelancer, ya que un teletrabajador puede trabajar para una empresa que puede estar ubicada en cualquier parte del mundo pero cumpliendo un horario  como si de ir a la oficina se tratara, pero conectado de forma remota a sus colegas y jefes desde la comodidad de su hogar o cualquier otra parte pero bajo las reglas de la empresa.</p>
                            <p>Aunque la compania en otro país sigue teniendo una organización y mandatos a lo que se debe acatar,por otra parte un trabajador freelance es la persona que busca ejercer como profesional generalmente para satisfacer proyectos específicos de clientes que pueden ser personas particulares, buscando alguien que pueda desarrollar una idea puntual, para luego continuar su camino por separado.</p>
                            <p>Esto puede no ser en todos los casos que ocurra como lo acabamos de relatar , quedan claras las principales diferencias que hay entre las dos <strong>modalidades de trabajo online o teletrabajo</strong> mas comunes que podemos encontrar hoy en día.</p>
                            <ul>
                                <h6>Lugares donde se puede teletrabajar:</h6>
                                <li>Trabajo desde casa</li>
                                <li>Trabajo desde telecentro propuesta por una empresa, si es que se trabaja para empresa</li>
                                <li>Trabajo parcialmente presencial , algunas días de forma remota otros días no.</li>
                            </ul>
                            <h2 id="principales-ventajas-de-teletrabajar-de-forma-freelance">¿Cuáles son las principales ventajas de teletrabajar de forma freelance?</h2>
                            <p>Como ya hemos hablado cuales son las grandes diferencias que hay entre ser un <strong>teletrabajador</strong> que ofrece sus servicios como empleado de una empresa y ser un profesional independiente, lo que se le llama <strong>ser freelance, o freelancer</strong>, en esta sección hablaremos sobre cuales son las <strong>principales ventajas de ser un trabajador independiente</strong> y ejercer tu profesión de forma remota para clientes en diferentes partes del Mundo.</p>
                            <p>Los freelancer son generalmente profesionales que trabajan en sectores donde la principal herramienta que necesitan para ejercer su labor es un computador o cualquier otro dispositivo tecnológico que le permita poder hacer su trabajo casi por completo desde cualquier lugar donde se pueda estar conectado a  una red de Internet.</p>
                            <p>Esta seria la principal ventaja y el motivo inicial por el cual se crea el concepto de <strong>empelo freelancer y trabajo remoto</strong>, ya que desde la llegada masiva de los dispositivos digitales acompañado de los fuertes avances que se han realizado en el flujo de datos masivos, como lo es <strong>la llegada de la fibra óptica y conexiones 4G, y 5G</strong>.</p>
                            <p>Todos estos factores están haciendo que lo que de momento es algo transitorio y especial, en un futuro muy próximo sea una modalidad establecida para un gran porcentaje de personas que se especializan en brindar servicios en muchas de estas especialidades:</p>
                            <ul style="font-weight:400;">
                                <li>Programación de páginas web, y aplicaciones de escritorio </li>
                                <li>Diseño web y diseño gráfico </li>
                                <li>Corrección de textos y traducción </li>
                                <li>Edición y creación de audiovisuales </li>
                                <li>Fotografía </li>
                                <li>Marketing digital y ventas</li>
                                <li>Soporte legal </li>
                                <li>Educación y venta de cursos online</li>
                                <li>Soporte administrativo </li>
                                <li>Creación de vídeo Juegos</li>
                                <li>Desarrollo de aplicaciones para Android y Ios</li>
                                <li>Modelado software 3D</li>
                            </ul>
                            <p>Muchas de las ventajas con las cuales cuentan los profesionales que forman parte de este mundo del trabajo a distancia es que cuentan con mayor cantidad de oportunidades a la hora de <strong>ofrecer sus servicios en la red</strong>, ya que al tener acceso ilimitado y sin fronteras físicas de distancia entre el <strong>cliente contratante y el teletrabajador</strong>.</p>
                            <p>Esto permite a ambas partes disponer de una mayor cantidad de candidatos disponibles a la hora de disponer de una persona como parte de un equipo de trabajo para desarrollar un proyecto determinado.</p>
                            <p>Si bien parecería que esto aumenta la competencia entre personas que se dedican a un determinado sector por el echo de tener mas competencia, los datos han demostrado todo lo contrario ya que la mayor parte de personas que aplican a una <strong>oferta laboral como freelancer</strong>.</p>
                            <p>Esto no lo podrían hacer de la misma manera si solo tuvieran que aplicar a propuestas dentro de su mismo país o ciudad en donde viven.</p>
                            <h2 id="¿por-que-hay-cada-vez-más-empresas-contratando-trabajadores-en-línea?">¿por que hay cada vez más empresas contratando trabajadores en línea?</h2>
                            <p>Para muchas empresas start up que están surgiendo en todo el mundo hoy en día es mas fácil <strong>contar con gente de diferentes partes</strong> del mundo que cuentan con habilidades necesarias de las que podrían encontrar en cantidad de personas en sus ciudades residencia, es por esto que muchas de estas empresas optan por <strong>encontrar y contratar trabajadores</strong> que cuenten con esas habilidades y no demanden costos de traslados y contratación a largo plazo.</p>
                            <p>La idea es que muchos de estos proyectos tienen una fecha de inicio y una fecha de finalización, por lo que no sería necesario contar con personal todo el tiempo, lo que hace mas dinámico también para la persona contratada poder demostrar sus habilidades sin tener la necesidad de atarse a un solo cliente por el resto de sus días.</p>
                            <p>La mayoría de los <strong>contratantes de servicios buscan personal por 3 o 6 meces</strong>, en algunos casos pude n llegar al año, o año y medio ,como también existen muchísimos casos en donde se necesita resolver un problema puntual, como puede ser en los casos donde se requiere reparar script de un sitio web o creación de un logo entre otras cosas.</p>
                            <h2 id="Mejor-forma-de-empezar-a-trabajar-de-modo-freelance">Mejor forma de empezar a trabajar de modo freelance</h2>
                            <img src="/images/teletrabajo2.jpeg" alt="La oficina en nuestro hogar, nuevas tendencias">
                            <p>Muchas personas intentan <strong>dedicarse al teletrabajo de forma freelancer</strong>, pero solo son algunas las personas que hoy en día logran hacerlo, esto se debe a diferentes factores entre los cuales esta la preparación y formación, como también el rubro al cual se apunta.</p>
                            <p>Como sucede en todos lados hay sectores laborales donde la cantidad de personas que ofrecen sus servicios excede con creces el numero de <strong>demanda del mercado laboral</strong>, y esto provoca que solo las personas con más trayectoria y experiencia puedan ejercer sus profesiones..</p>
                            <p>Por este motivo es que en este articulo se recomienda, sobre todo si estas pensando en <strong>dedicarte a intentar teletrabajar de forma independiente</strong>, que te centres en sectores con mayor especialidad, evitando salir de la gran competencia que hay y en donde en muchos de los casos hace bajar el <strong>precio y valor de tu trabajo</strong>.</p>
                            <h3>Mediante plataformas</h3>
                            <p>Cada año se suman <strong>nuevas plataformas de trabajo freelancer</strong> que disponen de gran cantidad de proyectos y publicaciónes tanto en español como en inglés, en <strong>Latinoamérica</strong> aun se esta gestando todo lo que tiene que ver con el <strong>trabajo online</strong> y las nuevas tecnologías aplicadas al mismo, por lo que en su gran mayoría de países hispanos la <strong>cantidad de profesionales</strong> abocados a experimentar llevar una vida diferente esta aumentando mucho.</p>
                            <h3>¿que pasa en Latinoamérica?</h3>
                            <p>Vemos como cada año miles de personas se suman al <strong>mundo del trabajo freelance</strong>, con el objetivo de poder hacer una <strong>carrera profesional en la red de redes</strong>, y muchos lo están logrando sin lugar a duda los números indican que cada año aumenta un 8% la <strong>cantidad de trabajadores</strong> que optan por el mundo del trabajo desde casa.</p>
                            <p>En algunos casos son personas que tenían un empelo tradicional en una empresa y decidieron dejar sus trabajos formales, para alcanzar una mejor calidad de vida y tiempo libre para dedicarle a sus familias o actividades favoritas, aunque por otro lado hay que mencionar que no todas las personas pueden llevar este modo de vida de una manera óptima, ya que la extrema libertad puede ser contraproducente a la hora de <strong>lograr productividad o auto control en las horas</strong> que uno dedica al trabajo cotidiano.</p>
                            <h2 id="Cosas-a-tener-en-cuenta-para-trabajar-de-forma-óptima">Cosas a tener en cuenta para trabajar de forma óptima</h2>
                            <p>Como mencionamos en el párrafo anterior <strong>trabajar de forma remota y libre</strong>, puede ser una tarea muy agradable según la persona y sus actitudes personales, ya que se necesita contar con un auto control en cuanto a la administración de tiempos, que aveces se puede convertir en una pesadilla si no se logra un <strong>equilibrio entre el trabajo y la vida personal</strong>.</p>
                            <p>Hay gente que lo puede lograr y se adapta fácilmente, por otro lado otras personas pueden llegar a trabajar muchas horas más de lo normal aplicando esta modalidad.</p>
                            <p>Por este motivo es recomendable hacer un testeo personal sobre las características a las que uno puede o no administrar en los casos donde se presente la <strong>oportunidad de formar parte de un proyecto</strong> en una <a href="https://heiwork.com">plataforma freelance</a>, se recomienda iniciar con trabajos pequeños de menos de 5 días como primeras experiencias antes de comprometerse en grandes empresas.</p>
                            <h3>Primeros pasos</h3>
                            <p>Como en cualquier aspecto de la <strong>vida laboral</strong> dar los primeros pasos siempre son objetivos que cualquier persona quiere alcanzar de la forma mas rápida posible, por eso es bueno primero testear bien el terreno y tener ejemplos de lo que puedes hacer <strong>dentro de tu sector laboral</strong>, un buen currículum nunca esta demás, poder <strong>tener tu CV en la nube</strong> para que sea mas fácil poder compartirlo con tus posibles empleadores es una buena practica que se esta utilizando mucho y la recomendamos plenamente.</p>
                            <h3>Mantener una buena reputación</h3>
                            <p>Antes de comprometerte a una propuesta, debes hacerlo sabiendo que puedes finalizar dicha tarea de forma completa como el cliente demando desde un principio, en esto se pone en juego tu reputación dentro le la plataforma, ya que luego serán los <strong>clientes los que van a analizar tus ofertas</strong> en base a los resultados que has obtenido de clientes anteriores, ser responsable es la mejor manera de crear una buena reputación que luego te servirá por mucho tiempo, y te hará crear enlaces fuertes que te <strong>brindarán un caudal de trabajos</strong> increíble.</p>
                            <h3>Fijar un precio en base al tiempo</h3>
                            <p>Suele pasar en muchas ocasiones que <strong>aceptamos una propuesta como freelancer</strong> a la que luego de ponernos manos a la obra nos damos cuenta que nos va a tomar mucho mas tiempo del que habíamos proyectado en un inicio, al momento de aceptar la tarea, esto es un problema muy recurrente que suele traer malos resultados tanto en la experiencia del trabajador como en los resultados en general del trabajo, ya que si estamos pasados de tiempo puede que tratemos de acelerar las cosas para poder terminar, y eso nos hace bajar la calidad y no testear bien todo antes de entregar el trabajo.</p>
                            <p>Por esta razón recomendamos que siempre se trate de avaluar lo mas posible el tiempo estimado que pensamos nos podría tomar realizar un proyecto, para evitar este tipo de cosas, pero al fin y al cabo solo la experiencia va hacer que tengamos una noción clara de estimaciones de este tipo, ya que a todos nos ha pasado alguna vez caer en este tipo de problemas, se recomienda siempre <strong>proponer un precio incluyendo un margen extra</strong> para amortiguar cualquier tipo de dificultad de este tipo.</p>
                            <h3>Llegar a un acuerdo claro</h3>
                            <p>En todas las <strong>propuestas de empleo que hay en la red o en las plataformas</strong>, siempre aparecen casos donde el cliente busca una persona para que le realice una tarea especifica , pero que luego al momento de iniciar los trabajos, puede que se presenten cambios extra que no estaban contemplados desde el acuerdo inicial, cosa que trataremos de evitar desde el comienzo , tratando de entender cuales son los <strong>requerimientos y soluciones que el cliente busca para su proyecto</strong>.</p>
                            <p>Estos son los mecanismos que nosotros vamos a poner en practica para solucionar dicho problema, teniendo una buena comunicación con el cliente y siendo claro en cuales son los objetivos a alcanzar es que se puede y debe trabajar, cualquier tarea que se presente de forma extra se tendrá que manejar con nuevos acuerdos que contemplen esas tareas o bien tener un conocimiento desde el principio al momento de tomar el trabajo.</p>
                            <h3>Verificación y testeo</h3>
                            <p>La calidad de un trabajo bien echo en la gran mayoría de casos esta asociada al <strong>testeo y verificación</strong> del mismo antes de entregarlo a los clientes, se recomienda siempre estimar un tiempo extra al momento de <strong>negociar sobre el desarrollo de un proyecto</strong> para testear y verificar que todo este correcto.</p>
                            <p>Suele pasar muchas veces que el tiempo nos aprieta contra las cuerdas y tratamos de entregar los trabajos lo mas rápido posible para cobrar y seguir con otros temas, pero en medio de toda locura tenemos que tener en cuenta algo muy importante y que es que todo nuestros esfuerzos se pueden ir por la borda si no hacemos una buena verificación del resultado, ten en cuenta que toda nuestra reputación esta en juego.</p>    
                            <h3>Estar siempre alerta a nuevas oportunidades</h3>
                            <p>Las propuestas llegan constantemente y <strong>un buen freelancer</strong> siempre debe estar atento a ellas, si buen no necesitas todo el tiempo estar trabajando con personas nuevas o tomando constantemente proyectos distintos, ya que en su gran mayoría de casos son los mismos clientes antiguos los que nos requieren para continuar con agregados nuevos a los <strong>proyectos desarrollados anteriormente</strong>.</p>
                            <p>Puede que nuestros resultados nos han recomendado para que sean ellos mismo los que nos contacten directamente para otros trabajos que se presentan, de todas formas pueden aparecer jugosas propuestas de un mayor pago o proyectos que nos pueden interesar más y hacer crecer como <strong>profesionales en nuestro sector</strong>.</p>
                            <p>Ocurre constantemente que un freelancer que se inicio tomando pequeños proyectos de 50 o 100 dólares , pasado poco tiempo se encuentra trabajando en proyectos de más de 1000 dólares, Por este motivo recomendamos siempre estar en la <strong>búsqueda y actualización de ofertas de proyectos nuevos</strong>.</p>
                            <h3>Métodos de pago para cobrar tus trabajos</h3>
                            <p>Este es un tema muy importante y al que mucha gente que se inicia en todo este mundo le cuesta mucho <strong>encontrar un método de pago eficiente</strong> a la hora de <strong>cobrar los trabajos como freelancer</strong>, siempre trata de buscar información sobre el método que menos comisión te quite, además de que sea una forma de pago internacional.</p>
                            <p>Existen metodos muy buenos para cobrar de forma local pero que luego se complica cuando se quiere hacerlo fuera de fronteras, un buen ejemplo de esto es el caso de «<strong>mercadopago</strong>» que es muy bueno pero solo acepta pesos dentro del país en el que se ofrece el servicio. Generalmente los <strong>más utilizados son paypal y payoner</strong>, sobre todo paypal que es el que mas facilidades puede dar, aunque puede ser polémico en cuanto a sus comisiones para algunas personas.</p>
                            <h3>Más recomendaciones</h3>    
                                <h4>Cumplir con las fechas pactadas</h4>
                                <h4>No cobrar demasiado bajo ni demasiado alto (buscar el equilibrio)</h4>
                                <h4>Ir mostrando avances del desarrollo del trabajos</h4>
                                <h4>Hacer respaldos de los trabajos realizados </h4>
                            <img src="/images/teletrabajo3.png" alt="el teletrabajo como nueva normalidad en las empresas">
                            <h2 id="Proyecciones-del-mundo-del-trabajo-freelance-para-los-próximos-años">Proyecciones del mundo del trabajo freelance para los próximos años</h2>
                            <p>En países de habla hispana como <strong>Uruguay , Argentina , Chile o México</strong> este ha sido un buen año de crecimiento en el sector y se espera que para los próximos años la tendencia siga aumentando. Cientos de nuevas empresas y emprendimientos se están gestando en todo el Mundo, sobre todo el rubros de alta tecnología y tecnologías de la información, donde la capacidad de crecimiento es infinita.</p>
                            <p>El PBI de muchas de las economías de nuestro continente esta siendo afectada de buena manera por el aporte de se realizan a través de <strong>personas que trabajan de forma autónoma desde sus casas</strong> trayendo divisas a sus países, lo que demuestra que la formas de trabajo están cambiando.</p>
                            <p>Las futuras generaciones tendrán una nueva visión del trabajo que hoy en día recién estamos empezando a visualizar en el horizonte. Para el año 2030 se estima que mas del 20% de las personas estarán <strong>ejerciendo sus profesiones desde lugares alejados</strong> a las centrales empresariales, como los son hoy en día el centro de las grande capitales del mundo.</p>
                            <p>En un futuro estarán cada vez menos necesarias de personal físico, <strong>trabajar de modo freelancer</strong> es algo que solo las personas que lo están empezando a descubrir pueden ver sus ventajas y desventajas.</p>
                            <p>Con la experiencia propia de algo que le queda camino de desarrollo durante y luego de la nueva normalidad que todos estamos viviendo en los inicios de la <strong>nueva década del 2020</strong>.</p>
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
                                <input type="hidden" name="id" value="{{ md5('teleTrabajo') }}">
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