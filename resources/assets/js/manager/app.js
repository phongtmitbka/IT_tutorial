import Vue from 'vue';
import VueRouter from 'vue-router';
import Routers from './routes';
import App from './components/App.vue';

Vue.use(VueRouter);

const router = new VueRouter(Routers);
const app = new Vue({
    el: '#manager-app',
    router,
    render: h => h(App),
});
window.router = router;