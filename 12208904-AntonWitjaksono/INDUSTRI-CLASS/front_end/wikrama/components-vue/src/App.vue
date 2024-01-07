<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p>
        {{ item.date }}
      </p>
  </Card>
  </div>

  <button class="btn-service">Detail</button>
  <MyBtn id="btn1" name="btn1"></MyBtn>
  <MyBtn id="btn2" name="btn2"></MyBtn>

</template>
<script>

import Card from '@/components/my-components/Card.vue';

export default {
  components: {
    Card,
    'card-service': Card,
  },
  data() {
    return {
      data:
        [
          {
            title: 'Anton',
            description: 'saya berumur 17 tahun dan saya bersekolah di SMK Wikrama Bogor',
            date:'saya lahir pada tanggal 1, bulan Mei',
          },
          {
            title: 'Fajar',
            description: 'saya berumur 16 tahun dan saya bersekolah di SMK Wikrama Bogor',
            date:'saya lahir pada tanggal 6, bulan Desember'
          },
          {
            title: 'Gama',
            description: 'saya berumur 16 tahun dan saya bersekolah di SMK Wikrama Bogor',
            date:'saya lahir pada tanggal 14, bulan Oktober'
          },

        ]
    }
  }
}


</script>
<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.btn-service-global {
  margin-bottom: 30px;
  margin-top: 10px;
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color: rgb(23, 0, 128);
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>
