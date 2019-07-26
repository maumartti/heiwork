require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueRouter);
Vue.use(VueSweetalert2);

const routes = [
	{path:'/AgregarInstituto', name:'AgregarInstituto', component:require('./components/AgregarInstituto.vue').default}
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

