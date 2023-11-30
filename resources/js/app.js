require('./bootstrap');
require('bootstrap/js/dist/modal');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Tooltip from 'vue-directive-tooltip';
import 'vue-directive-tooltip/dist/vueDirectiveTooltip.css';
Vue.use(Tooltip);

import * as VueGoogleMaps from 'vue2-google-maps'
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyCL_t8PpAJ8ngFVGetxVeET4j2RWkyVK4E',
    libraries: 'places', // This is required if you use the Autocomplete plugin
  },
})


const routes = [

	{path:'/continents', name:'continents', component:require('./components/ContinentsComponent.vue').default},
	{path:'/countries', name:'countries', component:require('./components/CountriesComponent.vue').default},
	{path:'/regions', name:'regions', component:require('./components/RegionsComponent.vue').default},
	{path:'/cities', name:'cities', component:require('./components/CitiesComponent.vue').default},
	{path:'/destinations', name:'destinations', component:require('./components/DestinationsComponent.vue').default},
	/*{path:'/company/:id', name:'company', component:require('./components/Company.vue').default},
	{path:'/personal', name:'personal', component:require('./components/Personal.vue').default},
	{path:'/user/:id', name:'user', component:require('./components/UserComponent.vue').default}*/
	
];

const router = new VueRouter({
	routes,
	mode:'history'
});

Vue.component('menu-app-component', require('./components/MenuAppComponent.vue').default);

const app = new Vue({
	el:'#app',
	router
});

