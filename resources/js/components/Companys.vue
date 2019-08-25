<template>
	<div class="col-lg-12 grid-margin stretch-card p-0">
      <div class="card">
        <div class="card-body">                        
          <h4 class="card-title">Empresas Agregadas <i class="mdi mdi-store"></i></h4>
          <button type="button" class="btn btn-success btn-xs mb-2" @click="reloadSlim" data-toggle="modal" data-target="#exampleModalCenter">
		  	Agregar Nuevo <i class="mdi mdi-store"></i>
		  </button>
		  <div class="table-responsive">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>Nombre</th>
	                <th>País</th>
	                <th>Tipo</th>
	                <th>Status</th>
	                <th>Ver</th>
	                <th>Editar</th>
	                <th>Borrar</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr v-for="company in companys">
	                <td><router-link :to="'company/'+company.id">{{company.name}}</router-link></td>
	                <td>{{company.country}} <i :class="'flag-icon flag-icon-'+company.country.toLowerCase()"></i></td>
	                <td>{{company.type}}</td>
	                <td><label class="badge badge-success">Pending</label></td>
	                <td><router-link :to="'company/'+company.id" class="btn btn-info p-1">
	                		<i class="mdi mdi-eye fs20 ml-1"></i>
	                	</router-link>
	                </td>
	                <td>
	                	<button type="button" @click="companyEdit(company.id)" class="btn btn-warning p-1" data-toggle="modal" data-target="#modalEdit">
	                		<i class="mdi mdi-pencil fs20 ml-1"></i>
	                	</button>
	                </td>
	                <td>
	                	<button type="button" @click="companyDelete(company.id)" class="btn btn-danger p-1" >
	                		<i class="mdi mdi-delete fs20 ml-1"></i>
	                	</button>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	       </div>   					                
		</div>						    	
      </div>
	


		<!-- Modal Editar -->
		<div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
	          <form v-on:submit.prevent="editCompany()" class="forms-sample" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title text-warning" id="exampleModalLongTitle">Editar Institución <i class="mdi mdi-pencil"></i></h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="form-row">
		      		<div class="col-md-3 grid-margin stretch-card">
		              <div class="card">
		                <div class="card-body">
		                  <label>Logo</label>
		                 <slim-cropper :options="slimOptions" :key="componentSlimEdit" :initialimage="'../../../images/companys/'+companySelectEdit.image" id="slim1" >
						      <input type="file" name="slim1" />						      
						  </slim-cropper> 
		                </div>
		              </div>
		            </div>
					<div class="col-md-3">
			            <div class="form-group">
			              <label for="exampleInputName1">Name</label>
			              <input type="text" v-model="companySelectEdit.name" class="form-control" id="exampleInputName1" placeholder="Name" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputEmail3">Email address</label>
			              <input type="email" v-model="companySelectEdit.email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
			            </div>
			            <div class="form-group">
			            	<label for="frase">Frase de la Institución</label>
			            	<input type="text" v-model="companySelectEdit.subtitle" class="form-control" id="frase" placeholder="Frase">
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Descripción</label>
			              <textarea v-model="companySelectEdit.description" class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
		        	</div>
		        	<div class="col-md-3">
			            <div class="form-group">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises">País</label>
		                    <select v-model="companySelectEdit.country" class="form-control" id="paises" required>                    
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
			              <input type="text" v-model="companySelectEdit.city" class="form-control" id="exampleInputCity1" placeholder="Location" required>
			            </div>
			            <div class="form-group">
			              <label for="exampleTextarea1">Dirección</label>
			              <textarea v-model="companySelectEdit.address" class="form-control" id="exampleTextarea1" rows="2"></textarea>
			            </div>
			            <div class="form-group">
			              <label for="exampleInputTelefono">Telefono</label>
			              <input type="tel" v-model="companySelectEdit.tel" class="form-control" id="exampleInputTelefono" placeholder="Telefono">
			            </div>
			        </div>
			        <div class="col-md-3">    
			            <div class="form-group">
			              <label for="exampleInputCelular">Celular</label>
			              <input type="tel" v-model="companySelectEdit.cel" class="form-control" id="exampleInputCelular" placeholder="Celular">
			            </div>		            
						
						<div class="form-group">
							<label for="estado">Estado</label>
							<select v-model="companySelectEdit.status" id="estado" class="form-control">
								<option value="Demo">Demo</option>
								<option value="Pendiente">Pendiente</option>
								<option value="Activo">Activo</option>
								<option value="Atrasado">Atrasado</option>
								<option value="Suspendido">Suspendido</option>
							</select>
						</div>
						<div class="form-group">
							<label for="type">Tipo</label>
							<select v-model="companySelectEdit.type" id="type" class="form-control">
								<option value="Kinder">Kinder</option>
								<option value="Primaria">Primaria</option>
							</select>
						</div>
					</div>	
	        	</div>						            		          
			      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="submit" class="btn btn-warning" id="btnGuardar" :disabled="!formSend">Guardar</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<!-- End Modal -->


		<!-- Modal Agregar -->
		<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
	          <form v-on:submit.prevent="addCompany()" class="forms-sample" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title text-success" id="exampleModalLongTitle">Agregar Empresa <i class="mdi mdi-plus"></i></h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="form-row">
		      		<div class="col-md-3 grid-margin stretch-card">
		              <div class="card">
		                <div class="card-body">
		                  <label>Logo</label>
		                  <slim-cropper :options="slimOptions" id="slim" :key="componentSlimAdd" >
						      <!--<img :src="'../../../images/proyectos/'+proyecto.foto" alt="">-->
						      <input type="file" name="slim" />
						  </slim-cropper> 
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
		        <button type="submit" class="btn btn-success" id="btnAgregar" :disabled="!formSend">Agregar</button>
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
	import VueDropify from 'vue-dropify';
	import Slim from 'slim/slim.vue';

	export default {
		components: {
    		'vue-dropify': VueDropify,
    		'slim-cropper': Slim
  		},
		data(){
			return{
				companys:[],
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
				lat:'',
				companySelectEdit:[],
				formSend:true,
				
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
		created(){
			this.getCompanys();
		},
		methods:{
			reloadSlim: function(){
				this.componentSlimAdd += 1;//esto recarga el slim cropper image
			},
			getCompanys: function(){
				axios.get('AppCompany').then(response => {
					this.companys = response.data;
				});
			},
            processImage: function(e){
                this.image = e.target.files[0];
                //console.log(this.image);
            },
			addCompany: function(){
				this.formSend = false;//bloquea boton enviar para no reenviar
				if($('#slim').find('input:hidden').attr('value')){//si exsiste valor
					let imageValue = JSON.parse($('#slim').find('input:hidden').attr('value'));//objeto value image
					this.image = imageValue.output.image; //solo codigo base64
				}

				const formData = new FormData();
				formData.append('image', this.image);
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

				var url = 'AppCompany';
				axios.post(url,
					formData
				).then(response => {
					this.image = '';
					$('#exampleModalCenter').modal('hide');
					this.formSend = true;//desbloquea boton send
					toastr.success('company Agregado');
					//this.$swal({title:'Agregado',type:'success'});
					this.getCompanys();
				}).catch(error =>{
					toastr.error('Error al agregar');
					this.formSend = true;//desbloquea boton send
				})
			},
			companyEdit: function(id){
				for(var i in this.companys){
					if(this.companys[i].id == id){
						this.companySelectEdit = this.companys[i];						
					}
				}
				this.componentSlimEdit+=1;
			},
			editCompany: function(){
				this.formSend = false;//bloquea boton enviar para no reenviar
				if($('#slim1').find('input:hidden').attr('value')){//si exsiste valor
					let imageValue = JSON.parse($('#slim1').find('input:hidden').attr('value'));//objeto value image
					this.companySelectEdit.image = imageValue.output.image; //solo codigo base64
				}				
				if($('#slim1').attr('data-state') == 'empty'){//por si se borra la imagen y queda sin imagen
					this.companySelectEdit.image = null;
				}

				axios.put('/AppCompany/'+this.companySelectEdit.id,this.companySelectEdit).then(response =>{
					toastr.success('Actualizado con exito!');
					this.companySelectEdit = [];//lo vaciamos 
					this.getCompanys();
					$('#modalEdit').modal('hide');
					this.formSend = true;//desbloquea boton send
				}).catch(error =>{
					toastr.error('Error al guardar !');
					this.formSend = true;//desbloquea boton send
				});
			},
			companyDelete: function(id){
				if(confirm("¿seguro de eliminar este company?")){
					axios.delete('AppCompany/'+id).then(response =>{
						toastr.success('Eliminado!');
						this.getCompanys();
					}).catch(error => {
						toastr.error('Error');
					});
				}
			}
		}
	}
</script>
<style scoped>
</style>