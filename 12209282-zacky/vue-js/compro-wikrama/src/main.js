import '@/assets/style.css'

import { createRouter, createWebHistory } from 'vue-router';
import { createApp } from 'vue';

import App from './App.vue';
import Home from "@/components/Pages/Home.vue";
import Service from '@/components/Pages/Service.vue';
import Portfolio from "@/components/Pages/Portfolio.vue";
import Blog from "@/components/Pages/Blog.vue";


const routes = [
    {
        path: "/",
        component: Home
    },
    {
        path: "/Service",
        component: Service,
    },
    {
        path: "/Portfolio",
        component: Portfolio,
    },
    {
        path: "/Blog",
        component: Blog,
    }

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');
