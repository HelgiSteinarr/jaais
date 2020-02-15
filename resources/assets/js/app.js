import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/NavigationBar.vue'));
Vue.component('itemcollections', require('./components/ItemCollections.vue'));

const NotFound = { template: "<p>Not found error</p>"};
const Home = { template: '<p>abc home</p>'};
const Courses = { template: '<p>abc courses</p>'};
const Store = Vue.component('itemcollections');
const About = { template: '<p>abc about</p>'};
const Contact = { template: '<p>abc Contact</p>'};

/*const routes = {
    '/in_dev': Home,
    '/in_dev/courses': Courses,
    '/in_dev/store': Store,
    '/in_dev/about': About,
    '/in_dev/contact': Contact
};*/

const router = new VueRouter({
    routes: [
        { path: '/in_dev/:id', component: Home,
        children: [
            { path: '', component: Home},
            { path: 'courses', component: Courses},
            { path: 'store', component: Store},
            { path: 'about', component: About},
            { path: 'contact', component: Contact}
        ]}
    ]
});
  

const app = new Vue({
    router,
    el: '#app',
    /*data: {
        currentRoute: window.location.pathname
    },
    computed: {
        ViewComponent () {
        return routes[this.currentRoute] || NotFound
        }
    },
    render (h) { return h(this.ViewComponent) }*/
}).$mount('#app');
