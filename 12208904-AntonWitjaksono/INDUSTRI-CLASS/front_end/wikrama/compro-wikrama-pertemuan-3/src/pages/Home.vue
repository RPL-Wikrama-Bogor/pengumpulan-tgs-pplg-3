<template>
    <div class="container">
        <Section1 :data="DataHome"></Section1>
        <Service :data="DataLayanan"></Service>
        <Portfolio :data="DataPortfolio"></Portfolio>
        <Blog :data="DataBlog"></Blog>
    </div>
</template>

<script>
import Section1 from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';

export default {
    components: {
        Section1,
        Service,
        Portfolio,
        Blog
    },
    data() {
        return {
            DataHome: [],
            DataLayanan: [],
            DataPortfolio: [],
            DataBlog: []
        }
    },
    async created() {
        const response = await Get('http://localhost:8000/api/home');
        this.DataHome = response.data;

        const responseLayanan = await Get('http://localhost:8000/api/services');
        this.DataLayanan = responseLayanan.data.data;

        const responsePortfolio = await Get('http://localhost:8000/api/portfolio');
        this.DataPortfolio = responsePortfolio.data.data;

        const responseBlog = await Get('http://localhost:8000/api/blog');
        this.DataBlog = responseBlog.data.data;
    }
}
</script>