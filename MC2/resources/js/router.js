import Vue from "vue";
import Router from 'vue-router';
Vue.use(Router);
import firstPage from './components/pages/myFirstRealPage';
import newRoutePage from './components/pages/newRoutePage';
import home from './components/pages/home';
import tags from './components/pages/tags';

const routes = [
    {
        path : '/',
        component: home,
    },
    {
        path : '/tags',
        component: tags,
    },


    {
        path : '/my_new_vue_route',
        component: firstPage,
    },
    {
        path : '/my_new_vue_route',
        component: firstPage,
    },
    {
        path : '/new_route',
        component: newRoutePage,
    },
]

export default new Router({
    mode : 'history',
    routes
});