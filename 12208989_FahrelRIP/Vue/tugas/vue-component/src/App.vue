<template>
  <div class="card">
    <Card v-for="item in data" :title="item.title" :description="item.description" :name="item.name" :date="item.date">
    </Card>
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
          title: 'Desain Kamar Minimalis Cukup Sederhana Dan Menghemat Pengeluaran',
          description: 'Gambar disamping bisa kita lihat sebuah kamar dengan desain yang cukup minimalis dan sederhana namun tetap terlihat aesthetic. Desain kamar ini pula hanya memerlukan sedikit biaya pengeluaran, dan untuk furniture bisa menyesuaikan, untuk warna tembok di sarankan warna yang cerah agar tidak terlihat gelap dan enak dipandang.',
          date: '1 November 2023',
          name: 'Fahrel Rhozian',
        }]
      }
    }
  }
</script>

<style>
  *{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card{
    border-radius: 50px 0 0 50px;
    margin: 175px auto;
    max-width: 55%;
    background-color: #fff;
    box-shadow: 0 0 60px black;
  }
</style>