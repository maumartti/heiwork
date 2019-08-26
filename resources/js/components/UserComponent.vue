<template>
		<div class="row profile-page">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-header text-white" :style="{backgroundImage:'url(/images/'+user.image_cover+')'}">
                    <div class="row">
                      <div class="col-md-3 col-sm-12 text-center">
                      	<img v-if="user.image == null" class="rounded-circle img-lg" src="/images/no-user.png" alt="profile image">
                        <img v-else class="rounded-circle img-lg" :src="'/images/users/'+user.image" alt="profile image">
                      </div>
                      <div class="col-md-3 col-sm-12">                                           
                        <div class="p-2">
                          <h4><span class="badge badge-pill badge-light text-dark p-2"><strong>País :</strong> {{user.country}} <i :class="'flag-icon flag-icon-'+user.countryLow"></i></span></h4>
                        </div>
                        <div class="p-2">
                          <h4><span class="badge badge-pill badge-light text-dark p-2"><strong>Ciudad <i class="mdi mdi-city"></i> :</strong> {{user.city}} </span></h4>
                        </div>
                        <div class="p-2">
                          <h4>
                            <span class="badge badge-pill badge-light text-dark p-2"> 
                              <span v-if="user.state == 'trabajando'" :style="'border: 2px solid #2fae70;'" class="badge badge-pill badge-success badgeCircle">&nbsp;</span>
                              <span v-if="user.state == 'buscando'" :style="'border: 2px solid #3c91c8;'" class="badge badge-pill badge-info badgeCircle">&nbsp;</span>
                              <span v-if="user.state == 'vacaciones'" :style="'border: 2px solid #ea6060;'" class="badge badge-pill badge-danger badgeCircle">&nbsp;</span>
                              <strong>{{user.state}}</strong> 
                            </span>
                          </h4>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                      	<h1>{{user.name}}</h1>
                        <h2 class="font-italic">"{{user.subtitle}}"</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 col-sm-12 pt-4 text-center">  
                        <h4>
                          <span class="badge badge-pill badge-light text-dark p-2 badgeBig"><strong>
                            <!--
                            <i v-if="user.sector=='IT Programción'" class="fas fa-code"></i>
                            <i v-else-if="user.sector=='Diseño Grafico'" class="fas fa-paint-brush"></i>
                            <i v-else-if="user.sector=='Traducción'" class="fas fa-language"></i>
                            <i v-else class="fas fa-cube"></i>
                          -->
                            <i class="fas fa-cube"></i>
                            {{user.sector}} 
                          </strong></span>
                        </h4>
                      </div> 
                    </div>  
                  </div>
                  <div class="profile-body">
                    <button v-if="userAuth.id == user.id" type="button" id="btnPerfil" @click="userEdit(user.id)" class="btn btn-rounded btn-warning p-1" data-toggle="modal" data-target="#modalEdit">
                      <strong>Editar mi perfil <i class="mdi mdi-pencil fs20 ml-1"></i></strong>
                    </button>
                    <div class="row">
                      <div class="col-md-9">

                        <table class="table table-borderless w-100 mt-4">
                          <tr>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Nombre :</strong> {{user.name}}</h4>
                            </td>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Sector :</strong> {{user.sector}}</h4>
                            </td>
                          </tr>
                          <tr>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>País :</strong> {{user.country}} <i :class="'flag-icon flag-icon-'+user.countryLow"></i></h4>
                            </td>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Email :</strong> {{user.email}}</h4>
                            </td>
                          </tr>
                          <tr>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Ciudad :</strong> {{user.city}}</h4>
                            </td>
                          	<td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Web :</strong> <a :href="user.web">Página web</a></h4>
                            </td>
                          </tr>
                          <tr>
                          	<td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong>Descripción :</strong> {{user.description}}</h4>
                            </td>
                          </tr>
                          <tr>
                            <td><h4 class="badge badge-pill badge-light text-dark p-2 badgeBig">
                              <strong><i class="fab fa-whatsapp"></i> <a :href="'https://wa.me/'+user.cel" target="_blank" style="vertical-align: text-top;">Contactar por Whatsapp</a></strong></h4>
                            </td>
                          </tr>  
                        </table>
                                                                            
                      </div>
                      <div class="col-md-3">
                        <h5 class="my-4">Cercanos</h5>
                        <div class="new-accounts">
                          <ul class="chats">
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Marina Michel</p>
                                    <p class="u-designation">Business Development</p>
                                  </div>
                                </router-link>
                            </li>
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Stella Johnson</p>
                                    <p class="u-designation">SEO Expert</p>
                                  </div>
                                </router-link>
                            </li>
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Peter Joo</p>
                                    <p class="u-designation">UI/UX designer</p>
                                  </div>
                                </router-link>
                            </li>
                          </ul>
                          <router-link :to="'/personal/'+user.id" class="btn btn-xs btn-rounded btn-warning ml-1" >ver todos <i class="mdi mdi-eye"></i></router-link>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Editar -->
            <div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form v-on:submit.prevent="editUser()" class="forms-sample" enctype="multipart/form-data">
                  <div class="modal-header">
                    <h4 class="modal-title text-warning" id="exampleModalLongTitle">Editar Perfil <i class="mdi mdi-pencil"></i></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-row">
                      <div class="col-md-3 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <label>Foto</label>
                             <slim-cropper :options="slimOptions" :key="componentSlimEdit" :initialimage="'/images/users/'+user.image" id="slim1" >
                                  <input type="file" name="slim1" />                  
                             </slim-cropper> 
                            </div>
                          </div>
                        </div>
                      <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" v-model="user.name" class="form-control" id="exampleInputName1" placeholder="Name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" v-model="user.email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                            <label for="frase">Frase de la Institución</label>
                            <input type="text" v-model="user.subtitle" class="form-control" id="frase" placeholder="Frase">
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Descripción</label>
                            <textarea v-model="user.description" class="form-control" id="exampleTextarea1" rows="2"></textarea>
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">  
                            <!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>             -->
                            <label for="paises">País</label>
                            <select v-model="user.country" class="form-control" id="paises" required>                    
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
                            <input type="text" v-model="user.city" class="form-control" id="exampleInputCity1" placeholder="Location" required>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputCelular">Celular</label>
                          <input type="tel" v-model="user.cel" class="form-control" id="exampleInputCelular" placeholder="Celular">
                        </div>                
                    
                        <div class="form-group">
                          <label for="state">Estado</label>
                          <select v-model="user.state" id="state" class="form-control">
                            <option value="">Selecione uno ..</option>
                            <option value="trabajando">Trabajando</option>
                            <option value="buscando">Buscando</option>
                            <option value="vacaciones">Vacaciónes</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">    
                        <div class="form-group">
                          <label for="sector">Sector</label>
                          <select v-model="user.sector" id="sector" class="form-control">
                            <option value="IT Programción">IT Programción</option>
                            <option value="Traducción">Traducción</option>
                            <option value="Diseño Grafico">Diseño Grafico</option>
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


            <!-- Modal Profesores -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Personal Docente</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- End Modal -->


        </div>
   
</template>
<script>
	//import $ from 'jquery';
  import Slim from 'slim/slim.vue';
	import axios from 'axios';
	import toastr from 'toastr';

	export default {
    props:['userauth'],
    components:{
      'slim-cropper' : Slim
    },
		data(){
			return{
        userAuth:JSON.parse(this.userauth), 
				user:[],

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
			this.getUser();
		},
		methods:{
			getUser: function(){
				axios.get('/AppUser/'+this.$route.params.id).then(response => {
					this.user = response.data;
					this.user.countryLow = this.user.country.toLowerCase();
					this.user.web = 'www.losDuenedes.com';
				});
			},
      userEdit: function(id){
        this.componentSlimEdit +=1;
      },
      editUser: function(){
        this.formSend = false;//bloquea boton enviar para no reenviar
        if($('#slim1').find('input:hidden').attr('value')){//si exsiste valor
          let imageValue = JSON.parse($('#slim1').find('input:hidden').attr('value'));//objeto value image
          this.user.image = imageValue.output.image; //solo codigo base64
        }       
        if($('#slim1').attr('data-state') == 'empty'){//por si se borra la imagen y queda sin imagen
          this.user.image = null;
        }

        axios.put('/AppUser/'+this.user.id,this.user).then(response =>{
          toastr.success('Actualizado con exito!');
          this.getUser();
          $('#modalEdit').modal('hide');
          this.formSend = true;//desbloquea boton send
        }).catch(error =>{
          toastr.error('Error al guardar !');
          this.formSend = true;//desbloquea boton send
        });
      },
			/*
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

				var url = 'school';
				axios.post(url,
					formData
				).then(response => {
					toastr.success('Instituto Agregado');
					this.$swal({title:'Agregado',type:'success'});
					//$("html, body").animate({ scrollTop: 0 }, "slow");
					this.getSchools();
				}).catch(error =>{
					toastr.error('Error al agregar');
				})
			}*/
		}
	}
</script>
<style scoped>
h1, p, label, span{
  font-family: 'Montserrat', sans-serif;
}
h2{
    font-family: 'Sriracha', cursive;
}
h4, strong{
  color: #354168 !important;
}
.fa-whatsapp{
  font-size: 20px;
  color:lime;
}
#btnPerfil{
  padding:6px 10px !important;
}
#btnPerfil > strong{
  vertical-align: sub;
  font-size: 12px;
}
#btnPerfil > strong > i{
  font-size: 14px;
}
.badgeCircle{
  width: 20.8px;
}
.badgeBig{
  font-size: 0.75rem;
}

</style>