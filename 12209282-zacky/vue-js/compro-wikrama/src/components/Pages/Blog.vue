<template>
      <div class="container">
        <Blog></Blog>
    </div>
    <router-view></router-view>
  </template>
  <script>
  import Blog from '@/components/Beranda/Blog.vue';
  export default{
    components: {
      Blog
    }
  }
  </script>