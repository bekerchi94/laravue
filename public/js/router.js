import VueRouter from 'vue-router';
import Tovar from './components/Tovar';

export default new VueRouter({
    routes:[{
        path:'/',
        component: Tovar
    }],
    mode:'history'
})