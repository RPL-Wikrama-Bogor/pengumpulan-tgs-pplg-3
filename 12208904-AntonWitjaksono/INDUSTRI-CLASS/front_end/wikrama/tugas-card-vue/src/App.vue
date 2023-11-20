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
          title: 'ZEE JKT48',
          description: 'Azizi Shafaa Asadel lahir 16 Mei 2004, dikenal dengan nama mononim Zee JKT48, adalah seorang penyanyi dan aktris asal Indonesia yang tergabung sebagai anggota grup idola JKT48. Ia merupakan anggota generasi ketujuh JKT48 yang diperkenalkan pada 29 September 2018.',
          date: '1 Mei 2006',
          name: 'Anton Witjaksono',
        }]
      }
    }
  }
</script>

<style>
  *{
    font-family: 'Times New Roman', Times, serif;
  }

  .card{
    margin: 175px auto;
    max-width: 50%;
    background-color: #fff;
  }
</style>