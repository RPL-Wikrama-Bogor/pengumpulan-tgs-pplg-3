//import './assets/main.css'

import {createRouter, createWebHistory} from 'vue-router';
import { createApp } from 'vue';
import App from './App.vue';
import home from '@/pages/home.vue';
import about from '@/pages/about.vue';

const routes=[
    {
        path:'/',
        component:home,
        name: 'Home'
    },
    {
        path:'/about',
        component:about,
        name: 'About'
    }
];
const router = createRouter({
    history:createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
