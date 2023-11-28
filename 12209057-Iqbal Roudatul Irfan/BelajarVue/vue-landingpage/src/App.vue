<template>
  <div>
    <Navbar></Navbar>
    <div class="container">
      <Beranda></Beranda>
      <Service></Service>
      <portofolio></portofolio>
      <Blog></Blog>
      <Contact></Contact>
    </div>
  </div>
</template>

<script>
import Navbar from './components/layouts/Navbar.vue';
import Beranda from './components/Beranda/Beranda.vue';
import Service from './components/Beranda/Service.vue';
import Portofolio from './components/Beranda/Portofolio.vue';
import Blog from './components/Beranda/Blog.vue';
import Contact from './components/Beranda/Contact.vue';

export default {
  components: {
    Navbar,
    Beranda,
    Service,
    Portofolio,
    Blog,
    Contact
  }
}
</script>
