<template>
	<div>
		<div class="col-lg-12 grid-margin stretch-card p-0">
	      <div class="card">
	        <div class="card-body">                        
	          <h4 class="card-title">Destinos Agregados</h4>
	          <button type="button" class="btn btn-success btn-xs mb-2" @click="reloadSlim" data-toggle="modal" data-target="#exampleModalCenter">
			  	Agregar Nuevo
			  </button>
			  <div  v-if="companys.length != 0 && companys != 'empty'" class="table-responsive">
		          <table class="table">
		            <thead>
		              <tr>
		              	<th>Imagen</th>
		              	<th>Titulo</th>
		                <th>Nombre</th>
		                <th>Ver</th>
		                <th>Editar</th>
		                <th>Borrar</th>
		              </tr>
		            </thead>
		            <tbody>
		              <tr v-for="company in companys">
		              	<td>
		              		<img v-if="company.image != null && company.image != 'null'" class="rounded-circle img-lg" :src="'/images/destinations/'+company.image">
		              		<img v-else class="rounded-circle img-lg" src='/images/no-image-company.png'>
		              	</td>
		                <td><a :href="'/'+company.countryCode+'/'+company.link">{{company.title}}</a></td>
		                <td>{{company.name}}</td>
		                <td>
		                	<button type="button" class="btn btn-info p-1">
		                		<i class="mdi mdi-eye fs20 ml-1"></i>
		                	</button>
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
		       <div v-else-if="companys == 'empty'" class="col-md-12">
			    	<div class="card pt-5">
			      	<div class="card-body text-center pt-5">  
			      		<h2>Sin resultados</h2>					
					</div>  
				  </div>
			   </div>
		       <div v-else class="col-lg-12">
			    	<div class="card pt-5">
				      	<div class="card-body text-center pt-5">  
				      		<div class="spinner-border text-primary" role="status" style="font-size: 40px;width: 100px;height: 100px;">
							  <span class="sr-only">Loading...</span>
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
		          <form v-on:submit.prevent="editCompany()" class="forms-sample" enctype="multipart/form-data">
			      <div class="modal-header">
			        <h4 class="modal-title text-warning" id="exampleModalLongTitle">Editar Destino <i class="mdi mdi-pencil"></i></h4>
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
			                 <slim-cropper :options="slimOptions" :key="componentSlimEdit" :initialimage="'../../../images/cities/'+companySelectEdit.image" id="slim1" >
							      <input type="file" name="slim1" />						      
							  </slim-cropper> 
			                </div>
			              </div>
			            </div>
						<div class="col-md-6">    
				        	<div class="form-group">
				        	<label for="exampleTextarea1">Descripción larga</label>
				            <vue-editor v-model="companySelectEdit.description_long" style="height:300px;"></vue-editor>	            					
				        	</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
				              <label for="exampleInputName1">Title <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="companySelectEdit.title" class="form-control" id="exampleInputTitle1" placeholder="Title" required>
				            </div>	
				            <div class="form-group">
				              <label for="exampleInputName1">Destino Name <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="companySelectEdit.name" class="form-control" id="exampleInputTitle1" placeholder="Nombre Destino" required>
				            </div>		              	
				            <div class="form-group">
				              <label for="exampleInputName1">País <strong style="color:red;">*</strong></label>
				              <select v-model="companySelectEdit.country_id" class="form-control" >
								<option v-for="country in countries" :value="country.id">{{country.name}}</option>	
							  </select>
				            </div>
				            <div class="form-group">
				              <label for="exampleInputName1">Región <strong style="color:red;">*</strong></label>
				              <select v-model="companySelectEdit.region_id" class="form-control" >
								<option v-for="region in regions" :value="region.id">{{region.name}}</option>	
							  </select>
				            </div>
				            <div class="form-group">
				              <label for="exampleInputName1">Ciudad Name <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="companySelectEdit.city_id" class="form-control" id="exampleInputTitle1" placeholder="Region" required>
				            </div>
				            <div class="form-group">
				              <label for="exampleTextarea1">Descripción corta</label>
				              <textarea v-model="companySelectEdit.description_short" class="form-control" id="exampleTextarea1" rows="5"></textarea>
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
			        <h4 class="modal-title text-success" id="exampleModalLongTitle">Agregar Destino <i class="mdi mdi-plus"></i></h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<div class="form-row">
			      		<div class="col-md-3 grid-margin stretch-card">
			              <div class="card">
			                <div class="card-body">
			                  <label>Imagen</label>
			                  <slim-cropper :options="slimOptions" id="slim" :key="componentSlimAdd" >
							      <!--<img :src="'../../../images/proyectos/'+proyecto.foto" alt="">-->
							      <input type="file" name="slim" />
							  </slim-cropper> 
			                </div>
			              </div>
			            </div>
				        <div class="col-md-6">    
				        	<div class="form-group">
				        	<label for="exampleTextarea1">Descripción larga</label>
				            <vue-editor v-model="description_long" style="height:300px;"></vue-editor>            					
				        	</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
				              <label for="exampleInputName1">Title <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="title" class="form-control" id="exampleInputTitle1" placeholder="Title" required>
				            </div>	
				            <div class="form-group">
				              <label for="exampleInputName1">Destino Name <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="name" class="form-control" id="exampleInputTitle1" placeholder="Nombre Destino" required>
				            </div>		              	
				            <div class="form-group">
				              <label for="exampleInputName1">País <strong style="color:red;">*</strong></label>
				              <select @change="getRegions(country_id)" v-model="country_id" class="form-control" >
								<option v-for="country in countries" :value="country.id">{{country.name}}</option>	
							  </select>
				            </div>
				            <div class="form-group">
				              <label for="exampleInputName1">Región <strong style="color:red;">*</strong></label>
				              <select v-model="region_id" class="form-control" >
								<option v-for="region in regions" :value="region.id">{{region.name}}</option>	
							  </select>
				            </div>
				            <div class="form-group">
				              <label for="exampleInputName1">Ciudad Name <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="city_id" class="form-control" id="exampleInputTitle1" placeholder="Region" required>
				            </div>
				            <div class="form-group">
				              <label for="exampleTextarea1">Descripción corta</label>
				              <textarea v-model="description_short" class="form-control" id="exampleTextarea1" rows="2"></textarea>
				            </div>

				            <!-- mapa -->
							<div class="form-group">
							  <div>
							    <label>
							      AutoComplete
							    </label>
							      <GmapAutocomplete @place_changed="setPlace" class="form-control" style="width:70%;display:inline-block;" >
							      </GmapAutocomplete>
							      <input name="zoom "type="number" min="1" step="1" style="width: 60px;display: inline-block;" class="form-control" v-model="zoomInput" @change="changeZoom()">							      
							      <button type="button" @click="setPlace">add</button>
							    <br/>
							    <GmapMap style="width: 280px; height: 200px; margin-top:12px;" :zoom="zoom_map" :center="mapCenter" :options="{
								   zoomControl: false,
								   mapTypeControl: false,
								   scaleControl: false,
								   streetViewControl: false,
								   rotateControl: false,
								   fullscreenControl: false,
								   disableDefaultUi: false
								 }" >								 
							      <GmapMarker v-for="(marker, index) in markers"
							        :key="index"
							        :position="marker.position"
							        />
							      <GmapMarker
							        v-if="this.place"
							        label="★"
							        :position="{
							          lat: this.place.geometry.location.lat(),
							          lng: this.place.geometry.location.lng(),
							        }"
							        zoom="12"
							        />
							    </GmapMap>
							  </div>
							</div>
							<!-- end mapa -->

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
	    
	</div>
</template>
<script>

	//import $ from 'jquery';
	import axios from 'axios';
	import toastr from 'toastr';
	import VueDropify from 'vue-dropify';
	import Slim from 'slim/slim.vue';
	import { VueEditor } from "vue2-editor";
	/*import JQuery from 'jquery';
	let $ = JQuery;*/

	export default {
		components: {
    		'vue-dropify': VueDropify,
    		'slim-cropper': Slim,
    		VueEditor
  		},
		data(){
			return{
				countries:[],
				companys:[],
				regions:[],
				name:'',
				title:'',
				image:null,
				country_id:null,
				region_id:null,
				city_id:null,
				description_short:'',
				description_long:'',

				companySelectEdit:[],
				formSend:true,
				pop:0,

				//google map
				lng:'',
				lat:'',
				address_map:'',
				markers: [],
      			place: null,
      			zoom_map:1,
      			mapCenter:{lat: 0, lng: 0},
      			zoomInput:8,				
				
				//image slim
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
                //end image 	
			}
		},
		created(){
			this.getCompanys();		
			this.getCountries();
		},
		mounted() {		
			var cookie = this.readCookie('mauro');
			if(cookie){
				//$('.tooltip-content').prepend('<i class="mdi mdi-beaker"></i>');
	        	//luego borramos la cookie para q no aparezca mas el tooltip
	        	document.cookie = 'mauro=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	    	}
		},
		methods:{
			/** GOOGLE MAP **/
		    setPlace(place) {
		      this.place = place;
		      this.zoom_map = 8;
		      var lat = place.geometry.location.lat();
		      var lng = place.geometry.location.lng();
		      this.mapCenter = {lat:lat, lng:lng}      
	      	  this.lat = this.place.geometry.location.lat();
              this.lng = this.place.geometry.location.lng();
              this.address_map = '';
              this.address_map += place.address_components[0].short_name;
              if(place.address_components[1].short_name)
              this.address_map += '|-|'+place.address_components[1].short_name;
          	  if(place.address_components[2].short_name)
              this.address_map += '|-|'+place.address_components[2].short_name;
		      console.log(this.address_map)        
              console.log(this.lat)
              console.log(this.lng)
		    },
		    changeZoom: function(){
		    	this.zoom_map = parseInt(this.zoomInput);
		    },
		    /** END GOOGLE MAP **/		

			readCookie: function(name) {
			   var ca = document.cookie.split('; ');
			    return _.find(ca, function (cookie) {
			        return cookie.indexOf(name) === 0;
			    });			
			},
			reloadSlim: function(){
				this.componentSlimAdd += 1;//esto recarga el slim cropper image
			},
			getCompanys: function(){				
				axios.get('/AppDestination').then(response => {
					this.companys = response.data;	
					if(response.data.length == 0){
						this.companys = 'empty';
					}
				});
        	},	
			getCountries: function(){				
				axios.get('/AppCountry').then(response => {
					this.countries = response.data;	
				});
        	},	
        	getRegions: function(country_id){				
				axios.get('/AppRegions/'+country_id).then(response => {
					this.regions = response.data;	
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
				formData.append('title', this.title);
				formData.append('region_id', this.region_id);
				formData.append('country_id', this.country_id);
				formData.append('description_short', this.description_short);
				formData.append('description_long', this.description_long);
				formData.append('address_map',this.address_map);
				formData.append('lat',this.lat);
				formData.append('lng',this.lng);
				formData.append('zoom_map',this.zoom_map);	

				var url = '/AppDestination';
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
						this.getRegions(this.companys[i].country_id);					
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

				axios.put('/AppDestination/'+this.companySelectEdit.id,this.companySelectEdit).then(response =>{
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
				if(confirm("¿seguro de eliminar esta empresa?")){
					axios.delete('/AppDestination/'+id).then(response =>{
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
<style>
.vue-tooltip.tooltip-custom {
  background-color: #39a9f0;
}

.vue-tooltip.tooltip-custom .tooltip-arrow {
  border-color: #39a9f0;
}

</style>