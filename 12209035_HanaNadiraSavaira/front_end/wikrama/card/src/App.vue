<template>
  <div class="row-service">
    <!-- 3. tampil -->
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <h5>{{ item.name }}</h5>
      <p>{{ item.date }}</p>
    </Card>
    <!-- <img v-for="img in images" v-bind:src="img"/> -->
  </div>
</template>

<script>
// tanda ./ ini memanggil ke folder components/my-components/Card.vue | @ memanggil barisan yang ada di folder src
// 1. manggil component
import Card from '@/components/my-components/Card.vue';
export default{
  components: {
    // 2. registrasi component
    Card,
    'card-service': Card 
  },
  data() {
    return {
      data: [
        {
          title: 'Shift the overall look and feel by addin these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was missing? Perhaps it felt slighty bare and uninviting. Ive got some simple tips to help you make any room feel complate',
          name: 'Hana Nadira Savaira',
          date: '14 Januari 2007',
          // file: 'https://i.pinimg.com/564x/96/da/33/96da335ffc2efedbf27177b54c9b4e7f.jpg',
          // file2: 'https://i.pinimg.com/474x/af/29/0d/af290dd75a20bdff1c5984594904cd79.jpg'
        }
      ]
    }
  }
}
</script>
<style>
.row-service {
  display: grid;
}
.row-service p {
  font-size: 14px;
  margin-right: 20px;
}
</style>