require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

const routes = [
	{path:'/companys', name:'companys', component:require('./components/Companys.vue').default},
	{path:'/company/:id', name:'company', component:require('./components/Company.vue').default},
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

