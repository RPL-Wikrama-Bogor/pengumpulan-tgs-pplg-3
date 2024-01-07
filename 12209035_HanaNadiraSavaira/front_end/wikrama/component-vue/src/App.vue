<template>
  <div class="row-service">
    <!-- 3. tampil -->
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
  </div>
  <button class="btn-service">Detail</button>
    <MyBtn id="btn 1" name="btn"></MyBtn>
    <MyBtn id="btn 2" name="btn"></MyBtn>
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
          title: 'title 1',
          description: 'description',
          date: '31 Oktober '
        },
        {
          title: 'title 2',
          description: 'description',
          date: '1 November'
        }
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
  margin-top: 10px;
  font-size: 15px;
  font-weight: 400;
  color: rgb(117, 117, 117);
  background-color: aquamarine;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>