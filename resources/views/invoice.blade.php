@extends('layouts.web')

@section('head')
<title>Pago - HeiWork</title>
<style>

</style>
@endsection
@section('content')

  <div class="container-scroller landing-page">

        <div class="container-fluid middle-section bg-white pt-0">
            <div class="row">
              <div class="col-sm-12 col-md-7 m-auto">

                <div class="alert alert-success mt-2" role="alert">
                  <h4 class="alert-heading font-weight-bold">Pago Exitoso!</h4>
                  <p class="font-weight-bold">Su pago fue procesado exitosamente <i class="mdi mdi-checkbox-marked-circle"></i></p>
                  <hr>
                  <p class="mb-0">Si tienes algún comentario o duda ponte en contacto con nosotros, por medio del formulario de contacto o mediante el chat de soporte <strong>¡Gracias!</strong>.</p>
                </div>
              
                  <div class="card px-2">
                      <div class="card-body">
                          <div class="container-fluid p-0">
                            <h3 class="text-right my-5">Pago&nbsp;&nbsp;# {{$code}}</h3>
                            <hr>
                          </div>
                          <div class="row container-fluid d-flex justify-content-between">
                            <div class="col-lg-6 col-sm-12 pl-0 text-left">
                              <p class="mt-5 mb-2"><b>Heiwork.com</b></p>
                              <p>Plan: {{$plan}}<br>Período: Mensual<br>Estado: <strong>Pago</strong></p>
                            </div>
                            <div class="col-lg-6 col-sm-12 pl-0 ">
                              <p class="mt-5 mb-2 text-right"><b>Pago de</b></p>
                              <p class="text-right">{{Auth::user()->name}},<br> {{Auth::user()->email}},<br>{{strtoupper(Auth::user()->country)}}.</p>
                            </div>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-6 pl-0 text-left">
                              <p class="mb-0 mt-5">Fecha de pago : {{date('d-m-Y')}}</p>
                              <p>Fecha expira : {{$new_expire_plan}}</p>
                            </div>
                          </div>
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100 p-0">
                            <div class="table-responsive w-100">
                                <table class="table">
                                  <thead>
                                    <tr class="bg-dark text-white text-left">
                                        <th style="color:white !important;">#</th>
                                        <th style="color:white !important;">Plan</th>
                                        <th class="text-left" style="color:white !important;">Precio</th>
                                        <th class="text-right" style="color:white !important;">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="text-right">
                                      <td class="text-left">{{$code}}</td>
                                      <td class="text-left">{{Auth::user()->plan}}</td>
                                      <td class="text-left">{{$valor}} USD</td>
                                      <td>{{$valor}} USD</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">Sub - Total: ${{$valor}}</p>
                            <p class="text-right">IVA (0%)</p>
                            <h4 class="text-right mb-5">Total : ${{$valor}}</h4>
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                            <a onclick="window.print()" href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Imprimir</a>
                            <!--<a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Pago</a>-->
                          </div>
                      </div>
                  </div>
              
              </div>

      
          </div>
      </div>
  </div>    
@endsection   

@section('footer')
<footer class="footer" style="">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="https://heiwork.com/" target="_blank" style="color:#507af2;">heiwork</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>
@endsection        
