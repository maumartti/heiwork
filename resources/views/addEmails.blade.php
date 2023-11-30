@extends('layouts.web')

@section('head')
<title>Agregar Emails - HeiWork</title>
<link rel="canonical" href="https://heiwork.com/addBlog">

<style>

</style>
<!-- slin cropper -->
<link href="https://heiwork.com/slim-cropper-uploading/example/css/slim.min.css" rel="stylesheet">

<script src="https://cdn.tiny.cloud/1/l43hx0vt9pt2w5u1uuc6k2w1tvx8m3bydfw8ixm5k9c4xqz2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

@endsection
@section('content')

  <div class="container-scroller landing-page">

        <div class="container-fluid middle-section bg-white p-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="m-4 mb-5">Agregar correo de empresas</h1>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <strong>{{ session()->get('error') }}</strong>
                        </div>
                    @endif
                    <form method="post" action="/addEmail">
                    @csrf    
                      <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                          <input name="email" type="email" value="" class="form-control font-weight-bold" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">País</label>
                          <select name="country" class="form-control font-weight-bold" required>
                              <!--
                              <option value="ar">Argentina</option>
                              <option value="bo">Bolivia</option>
                              <option value="br">Brasil</option>
                              <option value="cl">Chile</option>
                              <option value="co">Colombia</option>
                              <option value="cr">Costa Rica</option>
                              <option value="cu">Cuba</option>
                              <option value="ec">Ecuador</option>
                              <option value="us">EEUU</option>
                              <option value="es">España</option>
                              <option value="gt">El Salvador</option>
                              <option value="gd">Granada</option>
                              <option value="gt">Guatemala</option>
                              <option value="hn">Honduras</option>-->
                              <option value="mx" selected>México</option>
                              <!--
                              <option value="ni">Nicaragua</option>
                              <option value="py">Paraguay</option>
                              <option value="pa">Panamá</option>
                              <option value="pe">Perú</option>
                              <option value="pr">Puerto Rico</option>
                              <option value="do">República Dominicana</option>
                              <option value="sr">Surinam</option>
                              <option value="uy">Uruguay</option>
                              <option value="ve">Venezuela</option>-->
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="">Tipo Empresa:</label>
                        <select name="type" class="form-control font-weight-bold" required>
                            <option value="marketing">Marketing</option>
                        </select>
                      </div>

                       
                      <button type="submit" class="btn btn-block btn-lg btn-success mt-5">Guardar Email</button>
                    </form>
              
                </div>
            </div>
        </div>   
    </div>       
@endsection   

@section('script')
<!-- slim cropper -->
<script src="{{ asset('slim-cropper-uploading/example/js/slim.kickstart.min.js') }}"></script>
@endsection


@section('footer')
<footer class="footer" style="">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="https://heiwork.com/" target="_blank" style="color:#507af2;">heiwork</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>
@endsection        
