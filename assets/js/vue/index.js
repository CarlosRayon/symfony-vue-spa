import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './router/';
import app from './components/App.vue';

Vue.use(VueRouter);

// bootstrap the app
let bootstrap = new Vue({
    el: '#app',
    router,
    template: '<app/>',
    components: { app }
})
