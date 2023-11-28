<template>
    <Navbar></Navbar>
    <div class="container">
    <Beranda></Beranda>
    <service></service>
    <Portofolio></Portofolio>
    <Blog></Blog>
    <router-view></router-view>
    </div>
        </template>
    <script>
    import Navbar from './components/Layouts/Navbar.vue';
    import Beranda from './components/Beranda/Beranda.vue';
    // import Service from './components/Beranda/Service.vue';
    // import Portofolio from './components/Beranda/Portofolio.vue';
    // import Blog from './components/Beranda/Blog.vue';
    // // import Contact from "./components/Contact/Card.vue";


    
    export default{
      components:{
        Navbar,
        Beranda,
        // Service,
        // Portofolio,
        // Blog,
        // // Contact

     
   }
    }
    </script>
    