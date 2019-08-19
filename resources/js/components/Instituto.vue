<template>
		<div class="row profile-page">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-header text-white">
                    <div class="row">
                      <div class="col-md-3 col-sm-12 text-center">
                        <img class="rounded-circle img-lg" :src="'/images/schools/'+school.image" alt="profile image">
                      </div>
                      <div class="col-md-3 col-sm-12">                                           
                        <div class="p-2">
                          <h4><span class="badge badge-pill badge-light text-dark p-2">Alumnos <strong>38</strong></span></h4>
                        </div>
                        <div class="p-2">
                          <h4><span class="badge badge-pill badge-light text-dark p-2">Personal <strong>14</strong></span></h4>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                      	<h1>{{school.name}}</h1>
                      </div>
                    </div>
                      <div class="col-md-4 col-sm-12 pt-4">  
                        <h4><span class="badge badge-pill badge-success text-dark p-2">Director: <strong>Noelia Machado</strong></span></h4>
                      </div> 
                  </div>
                  <div class="profile-body">
                    <ul class="nav tab-switch" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Activity</a>
                      </li>
                    </ul>
                    <div class="row">
                      <div class="col-md-9">
                        <div class="tab-content tab-body" id="profile-log-switch">
                          <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                            <table class="table table-borderless w-100 mt-4">
                              <tr>
                                <td><strong>Institución :</strong> {{school.name}}</td>
                                <td><strong>Tipo :</strong> {{school.type}}</td>
                              </tr>
                              <tr>
                                <td><strong>País :</strong> {{school.country}} <i :class="'flag-icon flag-icon-'+school.countryLow"></i></td>
                                <td><strong>Email :</strong> {{school.email}}</td>
                              </tr>
                              <tr>
                                <td><strong>Ciudad :</strong> {{school.city}}</td>
                                <td><strong>Teléfono :</strong> {{school.tel}}</td>
                              </tr>
                              <tr>
                              	<td><strong>Dirección :</strong> {{school.address}}</td>
                              	<td><strong>Web :</strong> <a :href="school.web">Página web</a></td>
                              </tr>
                            </table>
                            <div class="row mt-5 pb-4 border-bottom">
                              <div class="col-6">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                  <img src="https://placehold.it/50x50" alt="brand logo">
                                  <div class="wrapper pl-4">
                                    <p class="font-weight-bold mb-0">Photoshop</p>
                                    <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                                  </div>
                                </div>
                                <div class="d-flex align-items-start py-3 border-bottom">
                                  <img src="https://placehold.it/50x50" alt="brand logo">
                                  <div class="wrapper pl-4">
                                    <p class="font-weight-bold mb-0">Photoshop</p>
                                    <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                                  </div>
                                </div>
                                <div class="d-flex align-items-start py-3">
                                  <img src="https://placehold.it/50x50" alt="brand logo">
                                  <div class="wrapper pl-4">
                                    <p class="font-weight-bold mb-0">Photoshop</p>
                                    <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="row">
                                  <div class="col-12">
                                    <img class="img-fluid rounded" src="https://placehold.it/335x120" alt="banner image">
                                  </div>
                                  <div class="col-12 mt-3">
                                    <img class="img-fluid rounded" src="https://placehold.it/335x120" alt="banner image">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 mt-5">
                                <h5 class="mb-5">Stages</h5>
                                <div class="stage-wrapper pl-4">
                                  <div class="stages border-left pl-5 pb-4">
                                    <div class="btn btn-icons btn-rounded stage-badge btn-inverse-success">
                                      <i class="mdi mdi-texture"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 justify-content-between">
                                      <h5 class="mb-0">Task Added</h5>
                                      <small class="text-muted">28 mins ago</small>
                                    </div>
                                    <p>Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework</p>
                                  </div>
                                  <div class="stages border-left pl-5 pb-4">
                                    <div class="btn btn-icons btn-rounded stage-badge btn-inverse-danger">
                                      <i class="mdi mdi-download"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 justify-content-between">
                                      <h5 class="mb-0">Download Completed</h5>
                                      <small class="text-muted">45 mins ago</small>
                                    </div>
                                    <p>one of the best admin panel templates. With this bootstrap admin template, you can quick start your project.</p>
                                    <div class="file-icon-wrapper">
                                      <div class="btn btn-outline-danger file-icon">
                                        <i class="mdi mdi-file-pdf"></i>
                                      </div>
                                      <div class="btn btn-outline-primary file-icon">
                                        <i class="mdi mdi-file-word"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="stages pl-5 pb-4">
                                    <div class="btn btn-icons btn-rounded stage-badge btn-inverse-primary">
                                      <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 justify-content-between">
                                      <h5 class="mb-0">New Task Completed</h5>
                                      <small class="text-muted">55 mins ago</small>
                                    </div>
                                    <p>Admin dashboard works seamlessly on all major web browsers and devices.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                            <div class="horizontal-timeline">
                              <section class="time-frame">
                                <h4 class="section-time-frame">Today</h4>
                                <div class="event">
                                  <p class="event-text">We’re big on real names around here, so people know who’s who</p>
                                  <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                                  <div class="event-info">New Dashboard Design - 9:24 PM</div>
                                </div>
                                <div class="event">
                                  <p class="event-text">Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework</p>
                                  <div class="tumbnail-views">
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                  </div>
                                  <div class="event-info">New Dashboard Design - 9:24 PM</div>
                                </div>
                                <div class="event">
                                  <p class="event-text">It is a fully responsive bootstrap admin template / bootstrap admin dashboard</p>
                                  <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                                  <div class="event-info">New Dashboard Design - 9:24 PM</div>
                                </div>
                              </section>
                              <section class="time-frame">
                                <h4 class="section-time-frame">Yesterday</h4>
                                <div class="event">
                                  <p class="event-text">Night fill together itself. Midst. Beginning. Behold living god had.</p>
                                  <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                                  <div class="event-info">New Dashboard Design - 11:24 PM</div>
                                </div>
                                <div class="event">
                                  <p class="event-text">Why waste time starting from scratch; try out our admin dashboard template</p>
                                  <div class="event-info">New Dashboard Design - 11:30 PM</div>
                                </div>
                              </section>
                              <section class="time-frame">
                                <h4 class="section-time-frame">30 March</h4>
                                <div class="event">
                                  <p class="event-text">Gerald Vaughn changed the status to QA on MA-86 - Retargeting Ads</p>
                                  <div class="tumbnail-views">
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                    <div class="thumbnail"><img src="https://placehold.it/100x90" alt="thumbnail"></div>
                                  </div>
                                  <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                                  <div class="event-info">New Dashboard Design - 11:45 PM</div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <h5 class="my-4">Personal Docente</h5>
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
                        <router-link :to="'/personal/'+school.id" class="btn btn-xs btn-rounded btn-warning ml-1" >ver todos <i class="mdi mdi-eye"></i></router-link>
                        </div>
                        <h5 class="my-4">Pending</h5>
                        <div class="new-accounts">
                          <ul class="chats">
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Marina Michel</p>
                                    <p class="u-designation">Business Development</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </router-link>
                            </li>
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Stella Johnson</p>
                                    <p class="u-designation">SEO Expert</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </router-link>
                            </li>
                            <li class="chat-persons">
                              <router-link to="#">
                                  <span class="pro-pic"><img src="https://placehold.it/100x100" alt="profile image"></span>
                                  <div class="user">
                                    <p class="u-name">Peter Joo</p>
                                    <p class="u-designation">UI/UX designer</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </router-link>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
	import axios from 'axios';
	import toastr from 'toastr';

	export default {
		data(){
			return{
				school:[]
			}
		},
		created(){
			this.getSchool();
		},
		methods:{
			getSchool: function(){
				axios.get('/AppSchool/'+this.$route.params.id).then(response => {
					this.school = response.data;
					this.school.countryLow = this.school.country.toLowerCase();
					this.school.web = 'www.losDuenedes.com';
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

</style>