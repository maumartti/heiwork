<template>
    <div class="col-lg-12 grid-margin stretch-card p-0">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Personal De la Institución</h4>
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
		        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Trabajador</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="form-row">
		      		<div class="col-md-3 grid-margin stretch-card">
		              <div class="card">
		                <div class="card-body">
		                  <label>Logo del Instituto</label>
		                  <input  type="file" accept="image/*" class="dropify"/>
		                </div>
		              </div>
		            </div>
					<div class="col-md-3">
			            <div class="form-group">
			              <label for="exampleInputName1">Name</label>
			              <input type="text"  class="form-control" id="exampleInputName1" placeholder="Name" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputEmail3">Email address</label>
			              <input type="email"  class="form-control" id="exampleInputEmail3" placeholder="Email" required>
			            </div>
			            <div class="form-group">
			            	<label for="frase">Frase de la Institución</label>
			            	<input type="text"  class="form-control" id="frase" placeholder="Frase">
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Descripción</label>
			              <textarea  class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
		        	</div>
		        	<div class="col-md-3">
			            <div class="form-group">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises">País</label>
		                    <select  class="form-control" id="paises" required>                    
								<option value="AR">Argentina</option>
								<option value="BO">Bolivia</option>
								<option value="CL">Chile</option>
								<option value="CO">Colombia</option>
								<option value="CR">Costa Rica</option>
								<option value="EC">Ecuador</option>
								<option value="SV">El Salvador</option>
								<option value="ES">España</option>
								<option value="GD">Granada</option>
								<option value="GT">Guatemala</option>
								<option value="GY">Guayana</option>
								<option value="HT">Haití</option>
								<option value="HN">Honduras</option>
								<option value="MX">México</option>
								<option value="NI">Nicaragua</option>
								<option value="PY">Paraguay</option>
								<option value="PA">Panamá</option>
								<option value="PE">Perú</option>
								<option value="PR">Puerto Rico</option>
								<option value="DO">República Dominicana</option>
								<option value="UY">Uruguay</option>
								<option value="VE">Venezuela</option>
		                    </select>                  
			            </div>
			            <div class="form-group">
			              <label for="exampleInputCity1">City</label>
			              <input type="text"  class="form-control" id="exampleInputCity1" placeholder="Location" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Dirección</label>
			              <textarea  class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputTelefono">Telefono</label>
			              <input type="tel" class="form-control" id="exampleInputTelefono" placeholder="Telefono">
			            </div>
			        </div>
			        <div class="col-md-3">    
			            <div class="form-group">
			              <label for="exampleInputCelular">Celular</label>
			              <input type="tel" class="form-control" id="exampleInputCelular" placeholder="Celular">
			            </div>		            
						
						<div class="form-group">
							<label for="estado">Estado</label>
							<select  id="estado" class="form-control">
								<option value="Demo">Demo</option>
								<option value="Pendiente">Pendiente</option>
								<option value="Activo">Activo</option>
								<option value="Atrasado">Atrasado</option>
								<option value="Suspendido">Suspendido</option>
							</select>
						</div>
						<div class="form-group">
							<label for="type">Tipo</label>
							<select  id="type" class="form-control">
								<option value="Kinder">Kinder</option>
								<option value="Primaria">Primaria</option>
							</select>
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
	export default{

	}
</script>