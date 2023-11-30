<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title>Mensaje contacto</title>
	<link rel="stylesheet" href="http://heiwork.com/css/styles.css">
	<style>

	button, input, optgroup, select, textarea{
	  font-family: 'Montserrat', sans-serif;!important;
	}
	html {
	  font-size: 15px; }

	body {
	  font-family: 'Montserrat', sans-serif !important;
	  font-size: 15px;
	  font-weight: 400;
	  color: #666;
	  overflow-x: hidden !important; }
@media screen and (max-width: 768px){
	  #contData{
		width: 90% !important;
	  }
}	  
	</style>
</head>

<body>
	<div style="background-color:#fff;width:100%;">
		<!--
			<img src="http://heiwork.com/images/logo22.jpg" style="width:280px;margin:auto;display:block;padding-top: 5px;">
			-->	
		
	</div>
	<div id="contData" style="width:75%;margin:auto;margin-top:30px;min-width: 470px;">

		Mensaje desde página de contacto heiwork.com: 
		<p>-</p>
		 
		<div>
		<p><b>Nombre:</b>&nbsp;{{ $name }}</p>
		<p><b>Correo:</b>&nbsp;{{ $email }}</p>
		</div>
		 
		<p><b>Mensaje:</b></p>
		 
		<div>
		<p>
			{{ $text }}
		</p>
		</div>
		 
		--End,
		<br/>
		
		
		
	</div>

</body>

</html>