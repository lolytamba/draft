import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const HomeLayout = Vue.component('HomeLayout',require('./components/layout/homelayout.vue'));
const LandingHome = Vue.component('LandingHome',require('./components/home/landing.vue'));
const PostHome = Vue.component('PostHome',require('./components/home/post.vue'));
const routes = [
    {
        path: '/',
        component: HomeLayout,
        children:[
            {
                name: 'LandingHome',
                path: '/',
                component: LandingHome    
            },
            {
                name: 'PostHome',
                path: '/post',
                component: PostHome    
            },
        ]
      }
]

const router = new VueRouter({mode: 'history', routes: routes});
export default router