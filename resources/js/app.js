
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';

require('./bootstrap');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import { HomePage, DetailsPage, CreatePage, EditPage, NotFound, Navbar } from './components';

const routes = {
	'/': HomePage,// EditPage, //DetailsPage, //
	'/details/': DetailsPage,
	'/create/': CreatePage,
	'/edit/': EditPage,
	'/notfound': NotFound,
};

Vue.component('navbar', Navbar);

const app = new Vue({
	el: '#app',
	data: {
		currentRoute: window.location.pathname,
	},
	computed: {
		ViewComponent() {
			const matchRoute = this.currentRoute.split('/#/')[0];
			console.log(matchRoute);
			return routes[matchRoute] || NotFound;
		}
	},
	render(h) {
		return h(this.ViewComponent);
	}
});