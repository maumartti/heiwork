@extends('layouts.web')
@section('head')
<title>Error 404</title>
<meta name="description" content="Error 404, The page you’re looking for was not found.">


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

  <div class="container-scroller landing-page">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h1 class="display-1 mb-0">404</h1>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h2>SORRY!</h2>
                <h3 class="font-weight-light">The page you’re looking for was not found.</h3>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
                <a class="text-white font-weight-medium" href="/">Back to home</a>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 mt-xl-2">
                <p class="text-white font-weight-medium text-center">Copyright &copy; 2018  All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>    
  </div>            
@endsection   

@section('footer')
    @include('footer')
@endsection    
