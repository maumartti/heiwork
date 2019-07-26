<template>
	<div>
      <div class="row">
		<div class="col-md-6 grid-margin stretch-card">
	      <div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Agregar nueva Institución educativa</h4>
	          <p class="card-description">
	          	Complete el formulario con los datos requeridos
	          </p>
	          <form v-on:submit.prevent="addSchool()" class="forms-sample">
	            <div class="form-group">
	              <label for="exampleInputName1">Name</label>
	              <input type="text" v-model="name" class="form-control" id="exampleInputName1" placeholder="Name">
	            </div>
	            <div class="form-group">
	              <label for="exampleInputEmail3">Email address</label>
	              <input type="email" v-model="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
	            </div>
	            <div class="form-group">
	            	<label for="frase">Frase de la Institución</label>
	            	<input type="text" v-model="subtitle" class="form-control" id="frase" placeholder="Frase">
	            </div>
	            <div class="form-group">
	              <label for="exampleTextarea1">Descripción</label>
	              <textarea v-model="description" class="form-control" id="exampleTextarea1" rows="2"></textarea>
	            </div>
	            <div class="form-group">	
	            	<!--<i class="flag-icon flag-icon-ad" title="ad" id="ad"></i>            	-->
                    <label for="exampleFormControlSelect1">País</label>
                    <select v-model="country" class="form-control form-control-lg" data-show-icon="true" id="paises">                    
						<option value="Argentina">Argentina</option>
						<option value="">Bolivia</option>
						<option value="">Chile</option>
						<option value="">Colombia</option>
						<option value="">Costa Rica</option>
						<option value="">Cuba</option>
						<option value="">Ecuador</option>
						<option value="">El Salvador</option>
						<option value="">España</option>
						<option value="">Guayana Francesa</option>
						<option value="">Granada</option>
						<option value="">Guatemala</option>
						<option value="">Guayana</option>
						<option value="">Haití</option>
						<option value="">Honduras</option>
						<option value="">Jamaica</option>
						<option value="">México</option>
						<option value="">Nicaragua</option>
						<option value="">Paraguay</option>
						<option value="">Panamá</option>
						<option value="">Perú</option>
						<option value="">Puerto Rico</option>
						<option value="">República Dominicana</option>
						<option value="">Surinam</option>
						<option value="">Uruguay</option>
						<option value="">Venezuela</option>
                    </select>                  
	            </div>
	            <div class="form-group">
	              <label for="exampleInputCity1">City</label>
	              <input type="text" v-model="city" class="form-control" id="exampleInputCity1" placeholder="Location">
	            </div>
	            <div class="form-group">
	              <label for="exampleTextarea1">Dirección</label>
	              <textarea v-model="address" class="form-control" id="exampleTextarea1" rows="2"></textarea>
	            </div>
	            <div class="form-group">
	              <label for="exampleInputTelefono">Telefono</label>
	              <input v-model="tel" type="tel" class="form-control" id="exampleInputTelefono" placeholder="Telefono">
	            </div>
	            <div class="form-group">
	              <label for="exampleInputCelular">Celular</label>
	              <input v-model="cel" type="tel" class="form-control" id="exampleInputCelular" placeholder="Celular">
	            </div>

	            <div class="col-lg-12 pl-0 grid-margin stretch-card">
	              <div class="card">
	                <div class="card-body pl-0 pt-0">
	                  <label>Logo del Instituto</label>
	                  <input @change="processFile" type="file" accept="image/*" class="dropify"/>
	                </div>
	              </div>
	            </div>

	            <button type="submit" class="btn btn-success mr-2">Agregar</button>
	          </form>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-6 grid-margin stretch-card">
	    	<div class="card">
	    		<div class="card-body">                           
                  <h4 class="card-title">Instituciones</h4>
                  <p class="card-description">
                    Lista de todos los Institutos
                  </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>País</th>
                        <th>Tipo</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="school in schools">
                        <td>{{school.name}}</td>
                        <td>{{school.country}}</td>
                        <td>{{school.type}}</td>
                        <td><label class="badge badge-success">Pending</label></td>
                      </tr>

                    </tbody>
                  </table>
                
	    		</div>
	    	</div>
	    </div>
	  </div>        
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
				type:'Gardin',
				email:'',
				subtitle:'',
				description:'',
				country:'',
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
				axios.get('school').then(response => {
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
			addSchool: function(){
				var url = 'school';
				axios.post(url,{
					name:this.name,
					type:this.type,
					email:this.email,
					subtitle:this.subtitle,
					description:this.description,
					country:this.country,
					city:this.city,
					address:this.address,
					tel:this.tel,
					cel:this.cel,
					image:this.image,
					lng:null,
					lat:null
				}).then(response => {
					toastr.success('Instituto Agregado');
					this.$swal({title:'Agregado',type:'success'});
					//$("html, body").animate({ scrollTop: 0 }, "slow");
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