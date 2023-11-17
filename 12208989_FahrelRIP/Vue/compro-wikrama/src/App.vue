<template>
  
    <Navbar></Navbar>
    <router-view></router-view>
      
</template>

<script>
  import Navbar from '@/components/layouts/Navbar.vue'
  import Beranda from '@/components/Beranda/Beranda.vue'
  import Service from '@/components/Beranda/Service.vue'
  import Portofolio from '@/components/Beranda/Portofolio.vue'
  import Blog from '@/components/Beranda/Blog.vue'

  export default{
    components: {
      Navbar,
    }
  }
</script>