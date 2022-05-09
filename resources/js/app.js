require('./bootstrap');

window.Vue = require('vue').default;
window.VueRouter = require('vue-router').default;

Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);

const routes = [
    {path: '/', component: ExampleComponent}
];

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
});

const app = new Vue({
    el: '#app',
});