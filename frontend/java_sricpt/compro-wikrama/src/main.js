import '@/assets/style.css'

import { createRouter, createWebHistory} from 'vue-router';
import { createApp } from 'vue';
import App from './App.vue';
import Beranda from "@/components/beranda/Beranda.vue";
import Blog from "@/components/beranda/Blog.vue";
import Portofolio from "@/components/beranda/Portofolio.vue";
import Service from "@/components/beranda/Service.vue";

const routes=[
    {
        path:'/',
        component:Beranda,
        name: "Beranda",
    },
    {
        path:'/portofolio',
        component:Portofolio,
        name: "Portofolio"
    },
    {
        path: '/blog',
        component:Blog,
        name: "Blog"
    },
    {
        path:'/service',
        component:Service,
        name:"Service"
    }
];
const router=createRouter({
    history:createWebHistory(),
    routes
});

createApp(App).use(router).mount('#app')
