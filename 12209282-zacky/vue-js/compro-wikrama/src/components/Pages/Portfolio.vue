<template>
    <div class="container">
      <Portfolio></Portfolio>
  </div>
  <router-view></router-view>
</template>
<script>
import Portfolio from '@/components/Beranda/Portfolio.vue';
export default{
  components: {
    Portfolio
  }
}
</script>