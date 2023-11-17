<template>
  <div class="container">
    <Beranda :data="DataHome"></Beranda>
    <Service :data="DataLayanan"></Service>
    <Portofolio :data="DataPortofolio"></Portofolio>
    <Blog :data="DataBlog"></Blog>
  </div>
</template>
<script>
import Navbar from '@/components/Layouts/Navbar.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue'
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';

export default {
  components: {
    Navbar,
    Beranda,
    Service,
    Portofolio,
    Blog
  },
  data() {
    return {
      DataHome: [],
      DataLayanan: [],
      DataPortofolio: [],
      DataBlog: [],
    }
  },
  async created() {
    console.log('Home');
    // api untuk home
    const response = await Get('http://127.0.0.1:9000/api/home');
    this.DataHome = response.data;
    // api untuk layanan
    const responseLayanan = await Get('http://127.0.0.1:9000/api/services');
    this.DataLayanan = responseLayanan.data.data;
    // api untuk portfolio
    const responsePortofolio = await Get('http://127.0.0.1:9000/api/portofolio');
    this.DataPortofolio = responsePortofolio.data.data;
    // api untuk blog
    const responseBlog = await Get('http://127.0.0.1:9000/api/blog');
    this.DataBlog = responseBlog.data.data;
  },
}
</script>