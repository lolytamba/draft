
require('./bootstrap');
import Buefy from 'buefy';
import router from './routes';

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;
Vue.use(Buefy,{defaultIconPack: 'fa'}, VueRouter, axios);

const AppLayout = Vue.component('app-layout', require('./components/appLayout.vue'));
Vue.config.productionTip = false;
new Vue(
    Vue.util.extend(
        {router},
        AppLayout
    )
).$mount('#mainLayout');
