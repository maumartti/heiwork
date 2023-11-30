<template>
	<div>
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
        	<ul class="nav">
	          <li class="nav-item nav-profile">
	            <div class="nav-link">
	              <div class="profile-image"> 
	              	<img src="/images/mauro.jpg" alt="image"/> 
	              	<span class="online-status online"></span> 
	              </div>
	              <div class="profile-name">
	                <p class="name"><router-link :to="'/user/'+userAuth.id">{{userAuth.name}}</router-link></p>
	                <p class="designation">IT Programador</p>
	              </div>
	              <div class="notification-panel mt-4">
	                <span><i class="mdi mdi-settings"></i></span>
	                <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
	                <span><i class="mdi mdi-email"></i></span>
	              </div>
	            </div>
	          </li>
	          
	         
	          
	          <li class="nav-item" > 
	          	<router-link class="nav-link" to="/continents" >
	          		<img class="menu-icon" src="/images/menu_icons/011111.png" alt="menu icon"> <span class="menu-title">Continentes</span>
	          	</router-link> 
	          </li>
	          <li class="nav-item" > 
	          	<router-link class="nav-link" to="/countries" >
	          		<img class="menu-icon" src="/images/menu_icons/01111.png" alt="menu icon"> <span class="menu-title">Países</span>
	          	</router-link> 
	          </li>
	          <li class="nav-item" > 
	          	<router-link class="nav-link" to="/regions" >
	          		<img class="menu-icon" src="/images/menu_icons/01111.png" alt="menu icon"> <span class="menu-title">Regiones</span>
	          	</router-link> 
	          </li>
	          <li class="nav-item" > 
	          	<router-link class="nav-link" to="/cities" >
	          		<img class="menu-icon" src="/images/menu_icons/01111.png" alt="menu icon"> <span class="menu-title">Ciudades</span>
	          	</router-link> 
	          </li>
	          <li class="nav-item" > 
	          	<router-link class="nav-link" to="/destinations" >
	          		<img class="menu-icon" src="/images/menu_icons/0111111.png" alt="menu icon"> <span class="menu-title">Destinos</span>
	          	</router-link> 
	          </li>
	          <!--
	          <li class="nav-item">
	            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">Alumnos</span><i class="menu-arrow"></i></a>
	            <div class="collapse" id="page-layouts">
	              <ul class="nav flex-column sub-menu">
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 1</a></li>
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 2</a></li>
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 3</a></li>
	              </ul>
	            </div>
	          </li>
	          <li class="nav-item" >
	            <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown"> <img class="menu-icon" src="/images/menu_icons/002.png" alt="menu icon"> <span class="menu-title">Profesores</span><i class="menu-arrow"></i></a>
	            <div class="collapse" id="apps-dropdown">
	              <ul class="nav flex-column sub-menu">
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 1</a></li>
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 2</a></li>
	                <li class="nav-item"> <a class="nav-link" href="#">Menu option 3</a></li>
	              </ul>
	            </div>
	          </li>
	          <li class="nav-item" > <a class="nav-link" href="pages/widgets.html"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Clases</span> </a> </li>
	      -->
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