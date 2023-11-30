@extends('layouts.web')

@section('head')
<title>{{$blog->title}}</title>
<link rel="canonical" href="{{URL::current()}}">
@php
    $cita = substr($blog->cita,0,148);//cortamos menor a 160
    $cita = substr($cita, 0, strrpos($cita, ' '));//evita cortar palabras
@endphp
  <meta name="description" content="{{$cita}}"/>
  <meta name="author" content="heiwork">
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{$blog->title}}" />
  <meta property="og:description" content="{{$cita}}" />
  <meta property="og:url" content="{{URL::current()}}" />
  <meta property="og:site_name" content="heiwork" />
  <meta property="og:image" content="https://heiwork.com/images/blogs/{{$blog->image}}" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="{{$cita}}" />
  <meta name="twitter:title" content="{{$blog->title}}" />

<style>
    .landing-page p ,.landing-page div, .landing-page span{
        font-family: 'Quicksand', sans-serif !important;
        font-size: 16px !important;
    }
    ol,ul,li,p,div,span, .landing-page p,.landing-page div, .landing-page span{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
    }
    .middle-section a{
        color: #007bff im !important;
        text-decoration: none;
        background-color: transparent;
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
        font-size: 26px !important;
        color: #3d3d3d !important;
    }
    h4{
        font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif !important;
        font-weight: 700 !important;
        font-size: 1.22rem !important;
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
    .breadcrumb {
        border: 1px solid #dedede !important;
    }
    .breadcrumb .breadcrumb-item {
        font-size: 0.73rem !important;
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
    .flag-icon{
    line-height: 1em;
    font-size: 32px;
    top: 45px;
    left: 35px;
    border-radius:2px;
    }
    p{
        font-size:14px;
    }
    .twitter-share-button{
        position: relative !important;
        top:8px !important;
    }
    .landing-page > .container-fluid{
        /*background: linear-gradient(0deg, rgba(84,9,121,1) 0%, rgba(165,32,176,1) 100%);*/
        text-align: left;
    }
    .container-fluid .middle-section{
        padding-top: 90px;
    }
    @media screen and (max-width: 992px){
        .contBtns{
            text-align: center;
        }
    }
    @media screen and (max-width: 768px){
        .top-banner-content{
            padding-top: 40px !important;
        }
    }
    @media screen and (max-width: 400px){
        .btn-warning{
            margin-bottom: 15px;
        }
    }
</style>
@endsection
@section('content')
<?php
use App\Tools;
$tools = new Tools;
?>
  <div class="container-scroller landing-page">
        <div class="container-fluid middle-section bg-white px-5 py-3 pb-5">

            <div class="row">
                <div class="col-md-12 pr-0">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                        <li class="breadcrumb-item"><a href="/blog/category/{{$tools->quitarAcentos(strtolower(str_replace(' ','-',$blog->category)))}}">{{$blog->category}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                      </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="w-100 cont">
                        <img src="/images/blogs/{{$blog->image}}" class="col-md-12 p-0 mx-auto mt-0 img-responsive" alt="Imagen - {{$blog->tags}} - {{$blog->title}} - {{$blog->category}}" style="border-radius: 5px !important;">
                        @php
                            $tags = explode(',',$blog->tags);
                        @endphp
                        <h1 class="pt-1 pb-2 mb-0">{{$blog->title}}</h1>

                        @if(count($blog->arrH2) > 0)
                        <div class="col-md-12 p-3 pl-4 my-3" style="border: 1px solid #dedede;">
                            <p class="mb-1">Tabla de contenidos</p>
                            <ol>
                            @foreach($blog->arrH2 as $key => $value)
                                <li style="font-size:14px !important;">
                                    <a href="#{!! $tools->quitarAcentos($value['link']) !!}">{!! $value['title'] !!}</a>
                                </li>
                            @endforeach
                            </ol>
                        </div>
                        @endif

                        <div class="pt-0">
                            {!! $blog->text !!}
                        </div>

                        <div class="pt-1">
                        <strong>Tags: </strong> @foreach($tags as $tag)<a href="/blog/tags/{{ $tools->quitarAcentos(str_replace(' ','-',$tag))}}" style="font-size:16px;">{{$tag}},</a>
                            @endforeach
                        </div> 

                         <!-- AddToAny BEGIN -->
                        <div class="row my-4">
                        <div class="a2a_kit a2a_kit_size_64 a2a_default_style m-auto">
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
                         </div>

                        <div class="pt-3 mb-5">
                            @if($blogPrev != null)
                                <div>
                                <i class="mdi mdi-arrow-left-drop-circle" style="color:#55c12e;"></i>
                                <a href="/blog/{{$blogPrev->url}}">{{$blogPrev->title}}</a>
                                </div>
                            @endif
                            @if($blogNext != null)
                                <hr>
                                <div>
                                <a href="/blog/{{$blogNext->url}}">{{$blogNext->title}}</a>
                                <i class="mdi mdi-arrow-right-drop-circle" style="color:#55c12e;"></i>
                                </div>
                            @endif
                        </div>

                    </div>
                
                <div class="col-md-3 py-4" style="border: 1px solid #dedede;border-radius: 0.25rem;">
                    <div>
                        Categoría:
                        <a href="/blog/category/{{$tools->quitarAcentos(str_replace(' ','-',$blog->category))}}">
                            {{$blog->category}}
                        </a>

                        @if(count($blogsCat) > 0)
                            <ul class="pt-3 pl-0" style="list-style:none;">
                                Más artículos de esta categoría:
                            @foreach($blogsCat as $blogCat)
                                <li>
                                    <a href="/blog/{{$blogCat->url}}">{{$blogCat->title}}
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        @endif

                    </div>
                                       
                </div>

            </div>
        </div>
 
   

        </div>            
@endsection   