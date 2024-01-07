import './assets/style.css'
import {  createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue'
import App from './App.vue'
import Portofolio from "@/components/Beranda/Portofolio.vue";
import Beranda from "@/components/Beranda/Beranda.vue";
import Blog from "@/components/Beranda/Blog.vue";
import Contact from "@/components/Beranda/Contact.vue";
import Service from "@/components/Beranda/Service.vue";


const routes = [{
    path: '/',
    component: Beranda,
    name: 'Beranda',
},
{
    path: '/portofolio',
    component: Portofolio,
    name: 'Portofolio',
},
{
    path: '/blog',
    component: Blog,
    name: 'blog,'
},
{
    path: '/contact',
    component: Contact,
    name: 'contact',
},
{
    path: '/service',
    component: Service,
    name: 'service',
}

];

const router=createRouter({
    history:  createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')