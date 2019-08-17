require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

const routes = [
	{path:'/institutos', name:'institutos', component:require('./components/Institutos.vue').default},
	{path:'/instituto/:id', name:'instituto', component:require('./components/Instituto.vue').default},
	{path:'/personal/:id', name:'personal', component:require('./components/Personal.vue').default}
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

