
import Vue from 'vue';
// import VueRouter from 'vue-router';

Vue.use(VueRouter);
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// Components
Vue.component('navbar', require('./components/NavigationBar.vue'));
Vue.component('itemcollections', require('./components/ItemCollections.vue'));
Vue.component('singlecollection', require('./components/SingleCollection.vue'));
Vue.component('singleitem', require('./components/SingleItem.vue'));
Vue.component('packagedeals', require('./components/PackageDeals.vue'));


// Route Vars
const NotFound = { template: "<p>Not found error</p>"};
const Home = { template: '<p>abc home</p>'};
const Courses = { template: '<p>abc courses</p>'};

const Store = Vue.component('itemcollections');
const Wrapper = {
    template: '<div><router-view></router-view></div>'
};
const SingleCollection = Vue.component('singlecollection');
const PackageDeals = Vue.component('packagedeals');
const SingleItem = Vue.component('singleitem');


const About = { template: '<p>abc about</p>'};
const Contact = { template: '<p>abc Contact</p>'};


// Vue router
const router = new VueRouter({
    //mode: 'history',
    routes: [
        { path: '/', component: Home },
        { path: '/courses', component: Courses },
        { path: '/store', component: Wrapper,
        children: [
            { path: '', component: Store },
            { path: 'collection', component: Wrapper,
            children: [
                { path: ':id', component: SingleCollection, name: 'collection' },
                { path: ':id/item/:item_id', component: SingleItem, name: 'item' }
            ]},
            { path: 'packageDeals', component: PackageDeals }
        ]},
        { path: '/about', component: About },
        { path: '/contact', component: Contact }
    ]
});
  

const app = new Vue({
    router,
    el: '#app',
}).$mount('#app');
