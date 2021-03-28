require('./bootstrap');

window.Vue = require('vue');

Vue.config.devtools = true;

import Vue from 'vue';

Vue.component('validate-test', require('./components/validate.vue').default);

const app = new Vue({
    el: '#validate',
});