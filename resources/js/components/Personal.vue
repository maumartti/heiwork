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
	                  Nombre
	                </th>
	                <th>
	                  Tipo
	                </th>
	                <th>
	                  Email
	                </th>
	                <th>
	                  Empresa
	                </th>
	                <th>
	                  Creado
	                </th>
	                <th>
	                	Ver
	                </th>
	                <th>
	                	Editar
	                </th>
	                <th>
	                	Borrar
	                </th>
	              </tr>
	            </thead>
	            <tbody>	              
	              <tr v-for="user in usersCompany">
	                <td class="py-1">
	                  <img v-if="user.image == 'null'" src="/images/no-user.png" alt="image" />		
	                  <img v-else :src="'/images/users/'+user.image" alt="image"/>
	                </td>
	                <td>
	                  {{user.name}}
	                </td>
	                <td>
	                	<label v-if="user.type == 'admin'" class="badge badge-success">{{user.type}}</label>
	                	<label v-if="user.type == 'usuario'" class="badge badge-info">{{user.type}}</label>
	                </td>
	                <td>
	                  {{user.email}}
	                </td>
	                <td>
	                  {{company.name}}
	                </td>
	                <td>	                  
	                  {{ momentDate(user.created_at) }}
	                </td>
	                <td>
	                	<router-link :to="'/user/'+user.id" class="btn btn-info p-1">
	                		<i class="mdi mdi-eye fs20 ml-1"></i>
	                	</router-link>
	                </td>
	                <td>
	                	<button type="button" @click="userEdit(user.id)" class="btn btn-warning p-1" data-toggle="modal" data-target="#modalEdit">
	                		<i class="mdi mdi-pencil fs20 ml-1"></i>
	                	</button>
	                </td>
	                <td>
	                	<button type="button" @click="userDelete(user.id)" class="btn btn-danger p-1" >
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
	          <form v-on:submit.prevent="editUser()" class="forms-sample" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title text-warning" id="exampleModalLongTitle">Editar Usuario <i class="mdi mdi-pencil"></i></h4>
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
		                  <slim-cropper :options="slimOptions" :key="componentSlimEdit" :initialimage="'/images/users/'+userSelectEdit.image" id="slim1" >
						      <input type="file" name="slim1" />						      
						  </slim-cropper>
		                </div>
		              </div>
		            </div>
					
					<div class="col-md-9 p-5">
			            <div class="form-group row">
			              <label for="exampleInputName1"class="col-md-3 col-form-label text-md-right" >Nombre</label>
			              <div class="col-md-6">
			              	<input type="text" v-model="userSelectEdit.name" class="form-control" id="exampleInputName1" placeholder="Nombre" required>
			              </div>	
			            </div>
			            <div class="form-group row">
			              <label for="exampleInputEmail1" class="col-md-3 col-form-label text-md-right">Correo Electrónico</label>
			              <div class="col-md-6">
			              	<input type="text" v-model="userSelectEdit.email" class="form-control" id="exampleInputEmail1" placeholder="maria@correo.com" required>
			              </div>
			            </div>			           

			            <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" v-model="userSelectEdit.password" type="password" class="form-control" name="password" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Repite Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" v-model="userSelectEdit.password_confirmation" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>
                        
			            <div class="form-group row">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises" class="col-md-3 col-form-label text-md-right">Tipo de cuenta</label>

		                    <div class="col-md-6">
			                    <select v-model="userSelectEdit.type" class="form-control" id="type" required>          
			                    	<option value="">Selecione uno ..</option>	                                
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
		      <form v-on:submit.prevent="setUser" class="forms-sample" enctype="multipart/form-data">
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
		                  <slim-cropper :options="slimOptions" :key="componentSlimAdd"  id="slim" >
						      <input type="file" name="slim" />						      
						  </slim-cropper>
		                </div>
		              </div>
		            </div>
					
					<div class="col-md-9 p-5">
			            <div class="form-group row">
			              <label for="exampleInputName1"class="col-md-3 col-form-label text-md-right" >Nombre</label>
			              <div class="col-md-6">
			              	<input type="text" v-model="name" class="form-control" id="exampleInputName1" placeholder="Nombre" required>
			              </div>	
			            </div>
			            <div class="form-group row">
			              <label for="exampleInputEmail1" class="col-md-3 col-form-label text-md-right">Correo Electrónico</label>
			              <div class="col-md-6">
			              	<input type="text" v-model="email" class="form-control" id="exampleInputEmail1" placeholder="maria@correo.com" required>
			              </div>
			            </div>			           

			            <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" v-model="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Repite Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" v-model="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
			            <div class="form-group row">	
			            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
		                    <label for="paises" class="col-md-3 col-form-label text-md-right">Tipo de cuenta</label>

		                    <div class="col-md-6">
			                    <select v-model="type" class="form-control" id="type" required>          
			                    	<option value="">Selecione uno ..</option>	                                
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
		        <button :disabled="!formSend" type="submit" class="btn btn-success">Agregar</button>
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
	import axios from 'axios';
	import toastr from 'toastr';
	import moment from 'moment';

	export default{
		components:{
			'slim-cropper' : Slim
		},
		data(){
			return{
				company:[],
				usersCompany:[],
				userSelectEdit:[],

				name:'',
				email:'',
				password:'',
				password_confirmation:'',
				type:'',
				company_id: this.$route.params.id,
				image:null,

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
			this.getUsers();
		},
		methods:{
			momentDate: function(date){
				return moment(date).format('DD-MM-YYYY');
			},
			setUser: function(){
				if(this.password != this.password_confirmation){
					toastr.error('Las contraseñas son distintas');
					return;
				}
				this.formSend = false;//bloquea boton enviar para no reenviar
				if($('#slim').find('input:hidden').attr('value')){//si exsiste valor
					let imageValue = JSON.parse($('#slim').find('input:hidden').attr('value'));//objeto value image
					this.image = imageValue.output.image; //solo codigo base64
				}

				const formData = new FormData();
				formData.append('company_id', this.company_id);
				formData.append('name', this.name);
				formData.append('email', this.email);
				formData.append('password', this.password);
				formData.append('password_confirmation', this.password_confirmation);
				formData.append('type', this.type);
				formData.append('image', this.image);

				 axios.post('/AppUser',
				 	formData
			 	).then(response =>{
			 		this.getUsers();
			 		toastr.success('Usuario Agregado!');
			 		$('#exampleModalCenter').modal('hide');
			 		this.formSend = true;//desbloquea boton send
			 	}).catch(error =>{
			 		console.log(error.response.data.errors);
			 		toastr.error('Error! '+error);
			 		this.formSend = true;//desbloquea boton send
			 	})
			},
			getUsers: function(){
				axios.get('/AppUser/'+this.$route.params.id).then(response=>{
					this.usersCompany = response.data[0];
					/*for(var i in this.usersCompany){
						var date = this.usersCompany[i].created_at;
						this.usersCompany[i].created_at = moment(date).format('DD-MM-YYYY');
					}*/
					this.company = response.data[1];
				})
			},
			userEdit: function(id){
				for(var i in this.usersCompany){
					if(this.usersCompany[i].id == id ){
						this.userSelectEdit = this.usersCompany[i];
						this.componentSlimEdit +=1;
					}
				}

			},
			editUser: function(){
				this.formSend = false;//bloquea boton enviar para no reenviar
				if($('#slim1').find('input:hidden').attr('value')){//si exsiste valor
					let imageValue = JSON.parse($('#slim1').find('input:hidden').attr('value'));//objeto value image
					this.userSelectEdit.image = imageValue.output.image; //solo codigo base64
				}				
				if($('#slim1').attr('data-state') == 'empty'){//por si se borra la imagen y queda sin imagen
					this.userSelectEdit.image = null;
				}

				axios.put('/AppUser/'+this.userSelectEdit.id,this.userSelectEdit).then(response =>{
					toastr.success('Actualizado con exito!');
					this.userSelectEdit = [];//lo vaciamos 
					this.getUsers();
					$('#modalEdit').modal('hide');
					this.formSend = true;//desbloquea boton send
				}).catch(error =>{
					toastr.error('Error al guardar !');
					this.formSend = true;//desbloquea boton send
				});
			},

			userDelete: function(id){
				if(confirm('¿seguro de eliminar este usuario?')){
					axios.delete('/AppUser/'+id).then(response=>{
						toastr.success('Usuario Eliminado!');
						this.getUsers();
					}).catch(error=>{
						toastr.error('Error!');
					})
				}
			}
		}	
	}
</script>