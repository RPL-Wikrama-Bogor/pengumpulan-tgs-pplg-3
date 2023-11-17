<template>
    <div class="container">
        <Beranda></Beranda>
        <Service></Service>
        <Portofolio></Portofolio>
        <Blog></Blog>
    </div>
</template>
<script>
import Beranda from '@/components/beranda/Beranda.vue';
import Service from '@/components/beranda/Service.vue';
import Portofolio from '@/components/beranda/Portofolio.vue';
import Blog from '@/components/beranda/Blog.vue';
import { Get } from '@/Api/index.js';
 
export default {
    components: {
        Beranda,
        Service,
        Portofolio,
        Blog
    },
    data () {
        return {
            DataHome: []
        }
    },

    async mounted() {
       const response = await Get('http://127.0.0.1:9000/api/home');
       this.DataHome = response.data;
       console.log(this.DataHome);
    },
}
</script>
