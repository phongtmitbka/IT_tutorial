import Vue from 'vue';
import VueI18n from 'vue-i18n';
import VueRouter from 'vue-router';
import Routers from './routes';
import App from './components/App.vue';
import message from './lang/message';

Vue.use(VueRouter);
Vue.use(VueI18n);
const messages = message;

// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: 'en', // set locale
  messages, // set locale messages
});
const router = new VueRouter(Routers);
const app = new Vue({
    el: '#app',
    router,
    i18n,
    render: h => h(App),
});
window.i18n = i18n;