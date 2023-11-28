<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
    <p> {{ item.date }}</p>
  </Card>
  </div>
  <button class="btn-service">detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn2"></MyBtn>
</template>

<script>
  import Card from '@/components/my-components/Card.vue';
  export default{
    components:{
      Card,
      'card-service': Card
    },
    data() {
      return {
        data: [
          {
            title: 'title 1',
            description: 'description 2',
            date: '18 oktober'
          },
          {
            title: 'title 1',
            description: 'description 2',
            date: '8 oktober'
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
    font-size: 13px;
    font-weight: 400;
    color: white;
    background-color:aquamarine;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    }
</style>