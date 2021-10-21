import Vue from 'vue';
require('./bootstrap');
import router from './router';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
window.Vue = Vue;
import common from './common';
Vue.component('mainapp', require('./components/mainapp.vue').default);
Vue.use(iView);
Vue.mixin(common);
const app = new Vue({
    el: '#app',
    router
})