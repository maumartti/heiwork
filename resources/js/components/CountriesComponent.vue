<template>
	<div>
		<div class="col-lg-12 grid-margin stretch-card p-0">
	      <div class="card">
	        <div class="card-body">                        
	          <h4 class="card-title">Paises Agregados</h4>
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
		              		<img v-if="company.image != null && company.image != 'null'" class="rounded-circle img-lg" :src="'/images/countries/'+company.image">
		              		<img v-else class="rounded-circle img-lg" src='/images/no-image-company.png'>
		              	</td>
		                <td>{{company.title}}</td>
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
			        <h4 class="modal-title text-warning" id="exampleModalLongTitle">Editar País <i class="mdi mdi-pencil"></i></h4>
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
			                 <slim-cropper :options="slimOptions" :key="componentSlimEdit" :initialimage="'../../../images/countries/'+companySelectEdit.image" id="slim1" >
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
				              <label for="exampleInputName1">Continente <strong style="color:red;">*</strong></label>
				              <select v-model="companySelectEdit.continent_id" class="form-control" >
				              	<option v-for="continent in continents" :value="continent.id">{{continent.name}}</option>
				              </select>
							</div>				              	
				            <div class="form-group">
				              <label for="exampleInputName1">Name <strong style="color:red;">*</strong></label>
				              <select v-model="companySelectEdit.code"  @change="extractName($event)" class="form-control" >
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia, Plurinational State of</option>
								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CX">Christmas Island</option>
								<option value="CC">Cocos (Keeling) Islands</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo, the Democratic Republic of the</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Côte d'Ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CW">Curaçao</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FK">Falkland Islands (Malvinas)</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="TF">French Southern Territories</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard Island and McDonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran, Islamic Republic of</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, Democratic People's Republic of</option>
								<option value="KR">Korea, Republic of</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Lao People's Democratic Republic</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="YT">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia, Federated States of</option>
								<option value="MD">Moldova, Republic of</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Réunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="BL">Saint Barthélemy</option>
								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="MF">Saint Martin (French part)</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SX">Sint Maarten (Dutch part)</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia and the South Sandwich Islands</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan, Province of China</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania, United Republic of</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-Leste</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela, Bolivarian Republic of</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
				            </div>
				            <div class="form-group">
				              <label for="exampleInputName1">Name <strong style="color:red;">*</strong></label>
				              <input type="text" v-model="companySelectEdit.name" class="form-control" id="exampleInputName1" placeholder="Name" required>
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
			        <h4 class="modal-title text-success" id="exampleModalLongTitle">Agregar País <i class="mdi mdi-plus"></i></h4>
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
				              <label for="exampleInputName1">Continente <strong style="color:red;">*</strong></label>
				              <select v-model="continent_id" class="form-control" >
				              	<option v-for="continent in continents" :value="continent.id">{{continent.name}}</option>
				              </select>
							</div>				              	
				            <div class="form-group">
				              <label for="exampleInputName1">Name <strong style="color:red;">*</strong></label>
				              <select v-model="code"  @change="extractName($event)" class="form-control" >
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia, Plurinational State of</option>
								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CX">Christmas Island</option>
								<option value="CC">Cocos (Keeling) Islands</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo, the Democratic Republic of the</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Côte d'Ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CW">Curaçao</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FK">Falkland Islands (Malvinas)</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="TF">French Southern Territories</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard Island and McDonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran, Islamic Republic of</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, Democratic People's Republic of</option>
								<option value="KR">Korea, Republic of</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Lao People's Democratic Republic</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="YT">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia, Federated States of</option>
								<option value="MD">Moldova, Republic of</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Réunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="BL">Saint Barthélemy</option>
								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="MF">Saint Martin (French part)</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SX">Sint Maarten (Dutch part)</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia and the South Sandwich Islands</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan, Province of China</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania, United Republic of</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-Leste</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela, Bolivarian Republic of</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
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
				continents:[],
				companys:[],
				name:'',
				title:'',
				image:null,
				code:'',
				continent_id:null,
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
			this.getContinents();	
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

			extractName: function(e){//obtenemos el nombre del pais selecionado
        		this.name = e.target.options[e.target.options.selectedIndex].text;
			},
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
				axios.get('/AppCountry').then(response => {
					this.companys = response.data;	
					if(response.data.length == 0){
						this.companys = 'empty';
					}
				});
        	},	
			getContinents: function(){				
				axios.get('/AppContinent').then(response => {
					this.continents = response.data;	
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
				formData.append('code', this.code);
				formData.append('title', this.title);
				formData.append('continent_id', this.continent_id);
				formData.append('description_short', this.description_short);
				formData.append('description_long', this.description_long);
				formData.append('address_map',this.address_map);
				formData.append('lat',this.lat);
				formData.append('lng',this.lng);
				formData.append('zoom_map',this.zoom_map);				

				var url = '/AppCountry';
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

				axios.put('/AppCountry/'+this.companySelectEdit.id,this.companySelectEdit).then(response =>{
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
					axios.delete('/AppCountry/'+id).then(response =>{
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