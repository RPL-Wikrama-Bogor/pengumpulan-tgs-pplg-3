<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <h5>{{ item.nama }}</h5>
      <p>{{ item.date }}</p>
    </Card>
  </div>
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
      data: [
        {
          title: 'Shift the overall look and feel bby adding these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was misiing? Perhaps it felt slighty bare and uninviting ive gpt some simple tips to help you make any room feel complete',
          nama: 'Naura Siti Nabilah',
          date: '27 April 2023'

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
  font-size: 13px;
  color: #827f8d;
}

</style>

