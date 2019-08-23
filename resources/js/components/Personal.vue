<template>
    <div class="col-lg-12 grid-margin stretch-card p-0">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Usuarios</h4>
          <button type="button" class="btn btn-success btn-xs mb-2" data-toggle="modal" data-target="#exampleModalCenter">
		  	Agregar Nuevo <i class="mdi mdi-account-plus"></i>
		  </button>
		  <div class="table-responsive">
	          <table class="table table-striped">
	            <thead>
	              <tr>
	                <th>
	                  User
	                </th>
	                <th>
	                  First name
	                </th>
	                <th>
	                  Progress
	                </th>
	                <th>
	                  Amount
	                </th>
	                <th>
	                  Deadline
	                </th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  Herman Beck
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $ 77.99
	                </td>
	                <td>
	                  May 15, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  Messsy Adam
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $245.30
	                </td>
	                <td>
	                  July 1, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  John Richards
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $138.00
	                </td>
	                <td>
	                  Apr 12, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  Peter Meggik
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $ 77.99
	                </td>
	                <td>
	                  May 15, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  Edward
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $ 160.25
	                </td>
	                <td>
	                  May 03, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  John Doe
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $ 123.21
	                </td>
	                <td>
	                  April 05, 2015
	                </td>
	              </tr>
	              <tr>
	                <td class="py-1">
	                  <img src="https://placehold.it/100x100" alt="image"/>
	                </td>
	                <td>
	                  Henry Tom
	                </td>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
	                  </div>
	                </td>
	                <td>
	                  $ 150.00
	                </td>
	                <td>
	                  June 16, 2015
	                </td>
	              </tr>
	            </tbody>
	          </table>
	       </div>  
        </div>
      </div>

      	<!-- Modal Profesores -->
		<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <form v-on:submit.prevent="" class="forms-sample" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Usuario</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="form-row">
		      		<div class="col-md-3 grid-margin stretch-card">
		              <div class="card">
		                <div class="card-body">
		                  <label>Foto de perfil</label>
		                  <slim-cropper :options="slimOptions" :key="componentSlimAdd"  id="slim1" >
						      <input type="file" name="slim1" />						      
						  </slim-cropper>
		                </div>
		              </div>
		            </div>
					
					<div class="col-md-9 p-5">
			            <div class="form-group row">
			              <label for="exampleInputName1"class="col-md-3 col-form-label text-md-right" >Nombre</label>
			              <div class="col-md-6">
			              	<input type="text"  class="form-control" id="exampleInputName1" placeholder="Nombre" required>
			              </div>	
			            </div>
			            <div class="form-group row">
			              <label for="exampleInputEmail1" class="col-md-3 col-form-label text-md-right">Correo Electrónico</label>
			              <div class="col-md-6">
			              	<input type="text"  class="form-control" id="exampleInputEmail1" placeholder="maria@correo.com" required>
			              </div>
			            </div>			           

			            <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Repite Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
			            <div class="form-group row">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises" class="col-md-3 col-form-label text-md-right">Tipo de cuenta</label>

		                    <div class="col-md-6">
			                    <select  class="form-control" id="type" required>          
			                    	<option value="">Selecione uno ..</option>
	                                <option value="root">Root</option>
	                                <option value="admin">Admin</option>
	                                <option value="usuario">Usuario</option>
			                    </select>  
			                </div>                    
			            </div>
			        </div>
	        	</div>						            		          
  		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="submit" class="btn btn-success">Agregar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<!-- End Modal -->

    </div>
</template>
<script>
	import Slim from 'slim/slim.vue';

	export default{
		components:{
			'slim-cropper' : Slim
		},
		data(){
			return{

				name:'',
				email:'',
				password:'',
				password_confirmation:'',


				imageEdit:null,
				componentSlimAdd:0,
				componentSlimEdit:0,
				slimOptions: {
                    ratio: '1:1',
                    saveInitialImage:true,
                    initialImage: '',
                    download: false,
                    uploadBase64:true,
                    label: 'Agregar foto <p><i class="material-icons" style="font-size:45px;">touch_app</i></p>',
                    willSave: function(data, ready) { //data imagen cargada o editada
                        ready(data);
                        //console.log(data);
                    },   	
                }


			}
		},
		setUser: function(){

		}
	}
</script>