import * as VueRouter from 'vue-router';
import ExampleComponent from './components/ExampleComponent.vue';

const routes = [
    {path: '/', component: ExampleComponent}
];

export default new VueRouter({
    routes: routes,
    mode: 'history'
});