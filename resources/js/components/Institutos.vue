<template>
	<div class="col-lg-12 grid-margin stretch-card p-0">
      <div class="card">
        <div class="card-body">                        
          <h4 class="card-title">Instituciones Agregadas</h4>
          <button type="button" class="btn btn-success btn-xs mb-2" data-toggle="modal" data-target="#exampleModalCenter">
		  	Agregar Nuevo <i class="mdi mdi-account-plus"></i>
		  </button>
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>País</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Ver</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="school in schools">
                <td><router-link :to="'VerInstituto/'+school.id">{{school.name}}</router-link></td>
                <td>{{school.country}} <i :class="'flag-icon flag-icon-'+school.country.toLowerCase()"></i></td>
                <td>{{school.type}}</td>
                <td><label class="badge badge-success">Pending</label></td>
                <td><router-link :to="'instituto/'+school.id" class="btn btn-primary p-0">
                		<i class="mdi mdi-eye fs20 ml-1"></i>
                	</router-link>
                </td>
              </tr>
            </tbody>
          </table>					                
		</div>						    	
      </div>
	





		<!-- Modal Agregar -->
		<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
	          <form v-on:submit.prevent="addSchool()" class="forms-sample" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title" id="exampleModalLongTitle">Agregar Institución</h4>
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
		                  <input  @change="processImage"  type="file" accept="image/*" class="dropify"/>
		                </div>
		              </div>
		            </div>
					<div class="col-md-3">
			            <div class="form-group">
			              <label for="exampleInputName1">Name</label>
			              <input type="text" v-model="name" class="form-control" id="exampleInputName1" placeholder="Name" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputEmail3">Email address</label>
			              <input type="email" v-model="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
			            </div>
			            <div class="form-group">
			            	<label for="frase">Frase de la Institución</label>
			            	<input type="text" v-model="subtitle" class="form-control" id="frase" placeholder="Frase">
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Descripción</label>
			              <textarea v-model="description" class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
		        	</div>
		        	<div class="col-md-3">
			            <div class="form-group">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises">País</label>
		                    <select v-model="country" class="form-control" id="paises" required>                    
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
			              <input type="text" v-model="city" class="form-control" id="exampleInputCity1" placeholder="Location" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Dirección</label>
			              <textarea v-model="address" class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputTelefono">Telefono</label>
			              <input type="tel" v-model="tel" class="form-control" id="exampleInputTelefono" placeholder="Telefono">
			            </div>
			        </div>
			        <div class="col-md-3">    
			            <div class="form-group">
			              <label for="exampleInputCelular">Celular</label>
			              <input type="tel" v-model="cel" class="form-control" id="exampleInputCelular" placeholder="Celular">
			            </div>		            
						
						<div class="form-group">
							<label for="estado">Estado</label>
							<select v-model="status" id="estado" class="form-control">
								<option value="Demo">Demo</option>
								<option value="Pendiente">Pendiente</option>
								<option value="Activo">Activo</option>
								<option value="Atrasado">Atrasado</option>
								<option value="Suspendido">Suspendido</option>
							</select>
						</div>
						<div class="form-group">
							<label for="type">Tipo</label>
							<select v-model="type" id="type" class="form-control">
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
	//import $ from 'jquery';
	import axios from 'axios';
	import toastr from 'toastr';

	export default {
		data(){
			return{
				schools:[],
				name:'',
				type:'Kinder',
				status:'Demo',
				email:'',
				subtitle:'',
				description:'',
				country:'AR',
				city:'',
				address:'',
				tel:'',
				cel:'',
				image:null,
				lng:'',
				lat:''			
			}
		},
		created(){
			this.getSchools();
		},
		methods:{
			getSchools: function(){
				axios.get('AppSchool').then(response => {
					this.schools = response.data;
				});
			},
			processFile: function(e){
                const image = e.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e =>{
                    this.image = e.target.result; //base 64
                    //console.log(this.image);
                };
            },
            processImage: function(e){
                this.image = e.target.files[0];
            },
			addSchool: function(){
				const formData = new FormData();
				formData.append('image', this.image, this.image.filename);
				formData.append('name', this.name);
				formData.append('type', this.type);
				formData.append('status', this.status);
				formData.append('email', this.email);
				formData.append('subtitle', this.subtitle);
				formData.append('description', this.description);
				formData.append('country', this.country);
				formData.append('city', this.city);
				formData.append('address', this.address);
				formData.append('tel', this.tel);
				formData.append('cel', this.cel);
				formData.append('lng', null);
				formData.append('lat', null);

				var url = 'AppSchool';
				axios.post(url,
					formData
				).then(response => {
					$('#exampleModalCenter').modal('hide');
					toastr.success('Instituto Agregado');
					//this.$swal({title:'Agregado',type:'success'});
					this.getSchools();
				}).catch(error =>{
					toastr.error('Error al agregar');
				})
			}
		}
	}
</script>
<style scoped>

</style>