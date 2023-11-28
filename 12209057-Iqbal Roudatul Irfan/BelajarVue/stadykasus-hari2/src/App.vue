<template>
  <div id="app">
    <div class="card-container">
      <Card
        v-for="item in cardData"
        :key="item.id"
        :bannerImg="item.bannerImg"
        :profileImg="item.profileImg"
        :title="item.title"
        :description="item.description"
        :nama="item.nama"
        :tanggal="item.tanggal"
      />
    </div>
  </div>
</template>

<script>
import Card from './components/Card.vue';

export default {
  data() {
    return {
      cardData: [
        {
          id: 1,
          bannerImg: 'src/assets/foto.png', // Gambar banner
          profileImg: 'src/assets/profile.png', // Gambar profil
          title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          nama: 'John Doe',
          tanggal: '2023-11-01',
        },
      ],
    };
  },
  components: {
    Card,
  },
};
</script>

<style>
.card-container {
  display: flex;
  justify-content: center;
}
</style>
