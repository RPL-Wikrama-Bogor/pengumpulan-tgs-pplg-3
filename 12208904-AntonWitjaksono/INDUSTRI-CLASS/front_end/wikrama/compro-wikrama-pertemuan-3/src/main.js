import '@/assets/style.css'
import { createRouter, createWebHistory } from "vue-router"
import { createApp } from 'vue'
import App from './App.vue'
import Home from '@/pages/Home.vue'
import Portfolio from '@/pages/Portfolio.vue'
import Blog from '@/pages/Blog.vue'

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/Portfolio',
        component: Portfolio
    },
    {
        path: '/Blog',
        component: Blog
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes
});

createApp(App).use(router).mount('#app')
