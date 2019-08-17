<template>
	<div>
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
        	<ul class="nav">
	          <li class="nav-item nav-profile">
	            <div class="nav-link">
	              <div class="profile-image"> <img src="https://placehold.it/100x100" alt="image"/> <span class="online-status online"></span> </div>
	              <div class="profile-name">
	                <p class="name">Sebastian Brayden</p>
	                <p class="designation">UI/UX Designer</p>
	              </div>
	              <div class="notification-panel mt-4">
	                <span><i class="mdi mdi-settings"></i></span>
	                <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
	                <span><i class="mdi mdi-email"></i></span>
	              </div>
	            </div>
	          </li>
	          
	          <li class="nav-item" v-if="userAuth.type == 'admin'">
	            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="/images/menu_icons/00.png" alt="menu icon"> <span class="menu-title">Admin</span><i class="menu-arrow"></i></a>
	            <div class="collapse" id="page-layouts">
	              <ul class="nav flex-column sub-menu">
	                <li class="nav-item"> 
	                	<router-link class="nav-link p-0" to="/institutos" >
	                		<span class="col-12 p-3" @click="closeMenu">Agregar Instituto</span>
	                	</router-link>
                	</li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">Institutos Agregados</a></li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Menu 3</a></li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu-2.html">Menu 4</a></li>
	              </ul>
	            </div>
	          </li>
	          
	          <li class="nav-item" v-if="userAuth.type == 'SchoolDirector'"> 
	          	<a class="nav-link" href="index.html"> 
	          		<img class="menu-icon" src="/images/menu_icons/61.png" alt="menu icon"> <span class="menu-title">Instituto</span></a> </li>
	          <li class="nav-item" v-if="userAuth.type == 'SchoolDirector'">
	            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">Alumnos</span><i class="menu-arrow"></i></a>
	            <div class="collapse" id="page-layouts">
	              <ul class="nav flex-column sub-menu">
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
	                <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu-2.html">Horizontal Menu 2</a></li>
	              </ul>
	            </div>
	          </li>
	          <li class="nav-item" v-if="userAuth.type == 'SchoolDirector'">
	            <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown"> <img class="menu-icon" src="/images/menu_icons/002.png" alt="menu icon"> <span class="menu-title">Profesores</span><i class="menu-arrow"></i></a>
	            <div class="collapse" id="apps-dropdown">
	              <ul class="nav flex-column sub-menu">
	                <li class="nav-item"> <a class="nav-link" href="pages/apps/email.html">E-mail</a> </li>
	                <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html">Calendar</a> </li>
	                <li class="nav-item"> <a class="nav-link" href="pages/apps/todo.html">Todo List</a> </li>
	                <li class="nav-item"> <a class="nav-link" href="pages/apps/gallery.html">Gallery</a> </li>
	              </ul>
	            </div>
	          </li>
	          <li class="nav-item" v-if="userAuth.type == 'SchoolDirector'"> <a class="nav-link" href="pages/widgets.html"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Clases</span> </a> </li>
        	</ul>
      	</nav>
	</div>
</template>
<script>

	import JQuery from 'jquery';
	let $ = JQuery;

	export default{
		props:['user'],
		data(){
			return{
				userAuth:JSON.parse(this.user)
			}
		},
		mounted(){
			this.closeMenu;

		},
		methods:{
			closeMenu: function(){//cerramos el menu lateral al cambiar de pagina
				if($('#sidebar').hasClass('active')){
					$('#sidebar').removeClass('active');
				}
			}
		},
	}
</script>