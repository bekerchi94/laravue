/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';

import router from './router';
import Header from  './components/header';
import App from './components/App';

Vue.use(VueRouter);

const header = new Vue({
    el: '#header',
    render:h=>h(Header)
});

const app = new Vue({
    el: '#my-app',
    //render:h=>h(App),
    router
});

