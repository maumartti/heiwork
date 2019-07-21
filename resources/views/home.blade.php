@extends(Auth::check() ? 'layouts.app' : 'layouts.web')

@section('content')
<div class="container">
    <h1>Web Contents</h1>
</div>
@endsection

@section('footer')
<footer class="footer">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="http://kinderin.io/" target="_blank">Kinderin</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>
@endsection        