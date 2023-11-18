<template>
  <div class="card">
    <card v-for="item in data" :title="item.title" :description="item.description" :name="item.name" :date="item.date"></card>
    <br>
  </div>
</template>

<script>
import Card from '@/components/my-components/Card.vue';
export default {
  components: {
    Card,
  },
  data() {
    return{
      data: [{
        title: 'Desain kamar minimalis cukup sederhana dan menghemat pengeluaran',
        description: 'Gambar di samping bisa kita lihat sebuah kamar dengan desain kamar yang cukup minimalis, menarik dan aesthetic. Kamar tersebut adalah kamar seorang member blackpink yaitu rose',
        date: '12 September 2006',
        name:'Dewi Rismawati',
      }]
    }
  }
}
</script>

<style>
  *{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card{
    border-radius: 0px 0 55px 0;
    margin: 175px auto;
    max-width: 55%;
    background-color: rgba(255, 255, 255, 0.918);
    box-shadow: 0 0 10px black;
  }
</style>