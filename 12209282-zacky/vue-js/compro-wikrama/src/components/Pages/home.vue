<template>
    <div class="container">
      <Beranda></Beranda>
      <Service></Service>
      <Portfolio></Portfolio>
      <blog></blog>
  </div>
  <router-view></router-view>
</template>

<script>
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
export default{
  components: {
    Beranda,
    Service,
    Portfolio,
    Blog
  }
}
</script>