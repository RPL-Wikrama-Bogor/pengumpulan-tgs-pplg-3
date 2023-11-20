<template>
    <div class="container">
         <Beranda></Beranda>
         <Blog></Blog>
         <Portfolio></Portfolio>
         <Service></Service>
    </div>
</template>

<script>
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';
export default {
    components: {
         Beranda,
         Service,
         Portfolio,
         Blog
    },
    data(){
        return {
            DataHome: [],
            DataLayanan: []
        }
    },
    async mounted(){
        const response = await Get('http://localhost:9000/api/home');
        console.log(response)
  }
}
</script>