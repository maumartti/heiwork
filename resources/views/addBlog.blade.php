@extends('layouts.web')

@section('head')
<title>Agregar Blog - HeiWork</title>
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
                    
                    <form method="post" action="/AppBlog">
                    @csrf    
                       <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class=" col-sm-12 pt-4 col-lg-12 d-inline-block p-0 m-auto">
                            <label class="pl-2">Imagen</label>
                            <!-- edit image --->                                    
                            <div id="slim" class="slim mb-2 p-2" 
                                 data-button-edit-title="Editar"
                                 data-button-remove-title="Borrar"
                                 data-label="'Agregar Imagen (requerida)'<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                 data-ratio="5:2"
                                 data-size="700,300"
                                 data-fetcher="/slim-cropper-uploading/server/fetch.php"
                                 data-meta-user-id="1" >
                                 <input type="file" id="image" name="image" />
                            </div>
                          </div>
                        </div>
                      </div>    
                      <div class="form-group">
                        <label for="">Estado:</label>
                        <select name="state" class="form-control" required>
                            <option value="publish">Publicar ahora</option>
                            <option value="saved">Guardar para publicar luego</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Título: (admite: letras y ¿? )</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onkeypress="return /[a-z _ .¿? ñ , 0-9]/i.test(event.key)" required>                                 
                      </div>
                      <div class="form-group">
                        <label for="">Tipo:</label>
                        <select name="tipo" class="form-control" required>
                          <option value="codigo" selected>codigo</option>
                            <option value="blog">blog</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Cetegoría:</label>
                        <select name="category" class="form-control">
                            <option value="" selected>Seleccionar una</option>
                            <option value="Javascript" >Javascript</option>
                            <option value="Html">Html</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Cita: (resumen de que trata el post en 250 caracteres)</label>
                        <textarea name="cita" id="cita" class="form-control" cols="30" rows="4" maxlength="160" style="color:black;font-size:14px;font-weight:400"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="d-block">Texto:</label>
                        <div id="contText">
                          <button type="button" class="parrafo">P</button>
                          <button type="button" class="h2">H2</button>
                          <button type="button" class="h3">H3</button>
                          <button type="button" class="h4">H4</button>
                          <button type="button" class="h5">H5</button>
                          <button type="button" class="ul">UL</button>
                          <button type="button" class="ol">OL</button>
                          <button type="button" class="strong">Strong</button>
                          <button type="button" class="italy">Italy</button>
                          <button type="button" id="fixed">*F*</button>
                        </div>
                        <textarea name="text" id="textarea" contenteditable="true" cols="30" rows="40" class="form-control" style="color:black;font-size:14px;font-weight:400" style="resize: both;"></textarea>
                        <!--
                        <script>
                            tinymce.init({
                              selector: 'textarea',
                              plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                              toolbar_mode: 'floating',
                              setup: function(ed) {
                                var maxlength = parseInt($("#" + (ed.id)).attr("maxlength"));
                                var count = 0;
                                ed.on("keydown", function(e) {
                                  count++;
                                  if (count > maxlength) {
                                    // alert("You have reached the character limit");
                                    e.stopPropagation();
                                    return false;
                                  }
                                });
                             },
                           });
                        </script>-->
                      </div>
                      <div class="form-group">
                        <label for="">Tags: 
                            <button type="button" class="btn btn-info btn-xs ml-2" style="padding:1px;border-radius: 50px;" @click.prevent v-tooltip.bottom.over="{content:tooltipInfoTags,html:true,class:'tooltip-custom tooltip-other-custom'}"><i class="mdi mdi-information-variant" style="font-size:14px;margin:0px;"></i></button>
                        </label>
                        <input type="text" name="tags"  class="form-control" />
                        <p>
                            Tags ya agregados:
                            <span v-for="tag in tagsBlogs" style="font-weight:bold;">
                                 /
                            </span>
                        </p>
                      </div>
                      <button type="submit" class="btn btn-block btn-lg btn-success">Guardar Artículo</button>
                    </form>
              
                </div>
            </div>
        </div>   
    </div>       
@endsection   

@section('script')
<!-- slim cropper -->
<script src="{{ asset('slim-cropper-uploading/example/js/slim.kickstart.min.js') }}"></script>

<script type="text/javascript">

function getSelectionText() {//retorna texto selecionado con mouse
    if (window.getSelection) {
        try {
            var ta = $('#textarea').get(0);
            return ta.value.substring(ta.selectionStart, ta.selectionEnd);
        } catch (e) {
            console.log('Cant get selection text')
        }
    } 
}
/*
  $('.h2').click(function(){    
    $(this).nextAll('textarea').val(function(i, text) {
      return text + '<h2></h2>';
    });
  })
*/
  $('.h2').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<h2>'+selected +'</h2>');   
    $('#textarea').val(news);
  })

  $('.h3').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<h3>'+selected +'</h3>');   
    $('#textarea').val(news);
  })

  $('.h4').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<h4>'+selected +'</h4>');   
    $('#textarea').val(news);
  })

  $('.h5').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<h5>'+selected +'</h5>');   
    $('#textarea').val(news);
  })      
  $('.parrafo').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<p>'+selected +'</p>');   
    $('#textarea').val(news);
  })

  $('.ul').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var html = '<ul>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
      '</ul>';
    var news = old.replace(selected,html);   
    $('#textarea').val(news);
  })  
  $('.ol').click(function(){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var html = '<ol>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
        '<li></li>\n'+
      '</ol>';
    var news = old.replace(selected,html);   
    $('#textarea').val(news);
  })

/* strong */

$('.strong').click(function (e){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<strong>'+selected +'</strong>');   
    $('#textarea').val(news);
})
$('.italy').click(function (e){
    var selected = getSelectionText();  
    var old = $('#textarea').val();
    var news = old.replace(selected, '<em>'+selected +'</em>');   
    $('#textarea').val(news);
})

$('#fixed').click(function(){
  $('#contText').css('position','fixed');
  $('#contText').css('top','3px');
  $('.navbar').css('top','-15px');
  $('#contText').css('background','#629d60');
  $('#contText').css('padding','0px 20px');
  $('#contText').css('z-index','999999999');
})
</script>
@endsection


@section('footer')
<footer class="footer" style="">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="https://heiwork.com/" target="_blank" style="color:#507af2;">heiwork</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>
@endsection        
