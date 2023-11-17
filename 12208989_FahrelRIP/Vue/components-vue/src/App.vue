<script>
import Card from '@/components/my-components/Card.vue';
export default{
  components: { 
    Card,
    'card-service': Card,
  },
  data(){
    return{
      data:[
      {
        title: 'title 1',
        description: 'description 2',
        date: '31 Oktober',
      },
      {
        title: 'title 1',
        description: 'description 2',
        date: '31 Oktober',
      },
    ]
    }
  }
}
</script>

<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p></Card>
    
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn id="btn"></MyBtn>
</template>


<style>
  .row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
  }

  .btn-sevice-global{
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400; 
        color: #fff;
        background-color: rgb(27, 83, 74);
        padding: 15px 20px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
    }
</style>