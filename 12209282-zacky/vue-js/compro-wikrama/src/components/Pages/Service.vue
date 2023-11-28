<template>
    <div class="container">
      <Service></Service>
  </div>
  <router-view></router-view>
</template>
<script>
import Service from '@/components/Beranda/Service.vue';
export default{
  components: {
    Service
  }
}
</script>