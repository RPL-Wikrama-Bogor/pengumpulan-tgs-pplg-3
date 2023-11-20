<template>
  <div class="row-services">
    <Card v-for="item in data" :nama="item.nama" :title="item.title" :description="item.description" :gambar="item.gambar" :logo="item.logo" :date="item.date" :key="item.date">
          <span>{{ item.date }}</span>
    </Card>
  </div>
</template>

<script>
import Card from '@/components/my-components/Card.vue';

export default {
  components: {
    Card,
  },
  data() {
    return {
      data: [
        {
          nama: 'Muhammad Fawwaz Zahran',
          logo: null,
          gambar: '@/assets/img/bg.jpg',
          title: 'Fawwaz Baik',
          description: 'Perkenalkan nama saya Muhammad Fawwaz Zahran dari rombel PPLG XI-3 selama 5 hari diminggu ini saya belajar VUE JS',
          date: '11 Oktober 2023',
        },
        {
          nama: 'Muhammad Fawwaz Zahran',
          logo: null,
          gambar: '@/assets/img/bg.jpg',
          title: 'Fawwaz Baik',
          description: 'Perkenalkan nama saya Muhammad Fawwaz Zahran dari rombel PPLG XI-3 selama 5 hari diminggu ini saya belajar VUE JS',
          date: '11 Oktober 2023',
        }
      ],
    };
  },
  created() {
  // Memuat gambar secara dinamis saat komponen telah dibuat
  import('@/assets/img/bg.jpg').then(module => {
    this.data.forEach(item => {
      item.gambar = module.default;
    });
  });
}};

</script>

<style>
.row-services {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

span {
    font-weight: 400;
    color: #827f8d;
    margin-left: 60px;
    font-size: 12px;
  }
</style>
