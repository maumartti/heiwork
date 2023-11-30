@extends('layouts.web')

@section('head')
<title>Pago - HeiWork</title>
<style>
</style>
@endsection

@section('content')	
  	<div class="row" >
        <div class="container">
          
            <div class="">
				<div class="col-md-6 col-xs-10 m-auto text-center" >
					<h3 class="p-3">Completar Pago</h3>
					<!-- boton paypal -->
					<!--
					<button id="btnReload" type="button" class="btn btn-primary btn-lg btn-block mb-3" style="font-size: 16px;">Recargar <span class="mdi mdi-reload"></span></button>
					-->

					<img src="/images/card-mark.png" style="height:25px;margin-bottom:60px;"> 	
					<div style="padding:20px 10px;border-radius:10px;border:1px solid silver;">
						<p style="font-size: 18px;font-weight:bold;margin-bottom:5px;font-family:'Open Sans', sans-serif !important;">
							Plan Seleccionado: {{Request::segment(2)}} 
							@if(Request::segment(2) == 'professional')
								<i class="mdi mdi-medal" style="position:relative;top:1px;"></i>
							@elseif(Request::segment(2) == 'premium')
								<i class="mdi mdi-trophy" style="position:relative;top:1px;"></i>
							@endif	
						</p>
						<p style="font-size: 18px;font-weight:bold;margin-bottom: 25px;font-family:'Open Sans', sans-serif !important;">
							Importe Total:
							@if(Request::segment(2) == 'professional')
								<span style="color:green;font-family:'Open Sans', sans-serif !important;">$7,90 USD</span>
							@elseif(Request::segment(2) == 'premium')
								<span style="color:green;font-family:'Open Sans', sans-serif !important;">$10,90 USD</span>
							@endif
						</p>
						<img id="spinner" style="display:none;margin:auto;" src="/images/Spinner2.gif">
						<div id="contBlock" class="d-none" style="background:#fff;width:100%;height:350px;position: absolute;z-index: 999;left: 0px;top: 110px;padding: 20px;">
							<img id="spinner2" style="margin:auto;" src="/images/Spinner1.gif">
						</div>
						<div id="paypal-button-container"></div><!-- buttons paypal -->
 					</div>
					
					<img src="/images/pago-seguro2.png" style="width:60%;margin-top:30px;margin-bottom:50px"> 		
					<style>
						.paypal-button.paypal-button-color-black {
					    	background: #9e22a8 !important;
						}

					</style>
				</div>
			</div>
			
		</div>
	</div>
@endsection

@section('script')
<script
src="https://www.paypal.com/sdk/js?client-id=AT3BrJq71ia-nIYkEYhURu302H0lKLXzOBSUIyJM4o13v8Ju5FXh2b7U3SCkkcTGOo68oCI0Xr3eg5sE&currency=USD&locale=es_ES"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.

// sandbox_ID: Aa9mJvwKzNeyh-zf3C-1ebTzqR-eE7PTdDG1InepkN-_sqRMCR3NoLz7M5zTxVxEBIDj8GFtfSAwEr9H
//real ID: AT3BrJq71ia-nIYkEYhURu302H0lKLXzOBSUIyJM4o13v8Ju5FXh2b7U3SCkkcTGOo68oCI0Xr3eg5sE
</script>
<script src="/js/paycodeoff.js" type="text/javascript"></script>
<script>
var s = <?php echo json_encode($session) ?>;
var typePlan = <?php echo json_encode(Request::segment(2)) ?>;
if(typePlan == 'professional'){
	var valP = '7.90';
	var tP = 1;
}else if(typePlan == 'premium'){
	var valP = '10.90';
	var tP = 2;
}
//console.log(valP);

var country_user = 'UY';

//paypal.Buttons().render('#paypal-button-container');
paypal.Buttons({
	style: {
	    color:   'blue',	    
	},
	createOrder: function(data, actions) {	
	  return actions.order.create({
	    purchase_units: [{
	      amount: {
	        currency : 'USD',
	        value: valP,
	    	locale:'es_ES',
	      },
	      description: 'Purchase Unit test description',
	    }],
	    application_context: {
	    	
	        shipping_preference: 'NO_SHIPPING',
	    },
	    payer: {
		    address: {
	          country_code: country_user
        	}
    	},
	  });	  
	},
	/*onInit: function() {
      console.log('initt')
    },*/
    /*
    payment: function (data, actions) {
    	console.log('click2');
    	document.getElementById('spinner').style.display = "block";
  	},
  	onError: function (err) {
    	console.log('click2');
    	document.getElementById('spinner').style.display = "none";
  	},
    onClick: function(){
    	console.log('click');
    	//document.getElementById('spinner').style.display = "block";
    },*/

    /*
    onAuthorize: function (data, actions) {
    	console.log('click2');
	    // Get the payment details
	    return actions.payment.get()
	      .then(function (paymentDetails) {
	        // Show a confirmation using the details from paymentDetails
	        // Then listen for a click on your confirm button
	        document.querySelector('#confirm-button')
	          .addEventListener('click', function () {
	            // Execute the payment
	            return actions.payment.execute()
	              .then(function () {
	                // Show a success page to the buyer
	              });
	         });
	     });
	},*/
	onApprove: function(data, actions) {
	  return actions.order.capture().then(function(details) {
	    //alert('Transaction completed by ' + details.payer.name.given_name);
	    //console.log(details);
	    if (details.error === 'INSTRUMENT_DECLINED') {
	    	alert('Pago Rechazado');
        	//document.getElementById('spinner').style.display = "none";
      	}
	    if(details.status == 'COMPLETED'){
	    	document.getElementById('spinner').style.display = "block";
	    	window.location.href = "/"+url+"/"+tP+"-"+details.id+"-"+s;
	    }else{
	    	alert('Error');
	    	//document.getElementById('spinner').style.display = "none";
	    }
	  });
	}
}).render('#paypal-button-container');




//***************

$(document).ready(function(){//boton regargar pagina
	//obtenemos la ubicacion del visitan para sacar su contruy code UY,AR,ES
	//y ponerlo en conunty_code de pagar con tarjeta
	$.get("https://ipinfo.io", function(response) {
	    country_user = response.country;
	}, "jsonp");

	$('#btnReload').click(function(){
		location.reload();
	})

	setTimeout(function(){
		//document.getElementById('contBlock').style.display = "none";
	},5000)
 })
</script>
	
@endsection


@section('footer')
    @include('footer')
@endsection          
