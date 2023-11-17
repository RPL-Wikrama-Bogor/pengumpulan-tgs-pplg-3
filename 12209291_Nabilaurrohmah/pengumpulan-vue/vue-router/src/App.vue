<template>
  <Card v-for="(item, index) in cardContents" :key="index" :judul="item.title" :text1="item.text1" :text2="item.text2" :image="item.image" :profil="item.profil" :tanggal="item.tanggal" :nama="item.nama">
  </Card>
</template>
<script>
//panggil file
//component apa sj yg akn d tampilkan
import Card from '@/components/my-components/Card.vue';
export default {
  components: {
    //definisi component agr bs d gunakan d template
    Card,
  },
  data() {
    return {
      cardContents: [
        {
          title: 'Shift the overall look and feel by  adding these wonderful touches to furniture in your home',
          image: 'foto.jpg',
          profil : 'kucing.jpg',
          nama: 'Nabila',
          tanggal: '1 November 2021',
          text1: 'Hello.', 
          text2: 'Hai',
        }
      ]
    }
  }
}
</script>

<style>

</style>