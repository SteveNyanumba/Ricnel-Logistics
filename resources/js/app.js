/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
const VueRouter = require('vue-router').default
window.Vue = require('vue')


Vue.use(VueRouter)


const routes = [
    {
        path:'/home',
        component: require('./components/Dashboard.vue').default
    },
    {
        path:'/categories',
        component: require('./components/Categories.vue').default
    },
    {
        path:'/stocks',
        component: require('./components/Stocks.vue').default
    },
    {
        path:'/orders',
        component: require('./components/Orders.vue').default
    },
    {
        path:'/purchases',
        component: require('./components/Purchases.vue').default
    },
]

const router = new VueRouter({
    routes,
    mode:'history',
})


const app = new Vue({
    el: '#app',
    router
});
