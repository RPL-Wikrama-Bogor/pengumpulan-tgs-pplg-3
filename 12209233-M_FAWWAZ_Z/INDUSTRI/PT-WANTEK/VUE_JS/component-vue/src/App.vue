<template>
  <div class="row-services">
  <Card v-for="item in data" :title="item.title" :description="item.description">
    <span>{{item.date}}</span>
  </Card>
  
  <MyBtn id="btn 1" name="btn"></MyBtn>
  <MyBtn id="btn 2" name="btn"></MyBtn>
</div>
</template>
<script>
import Card from '@/components/my-components/Card.vue'
export default {
  components:{
    Card,
    'card-services': Card
  },
  data(){
    return {
      data: [{
        title: 'title',
        description: 'FAWWAZ BAIK',
        date: '11 Oktober 2023'
      },{
        title: 'title 2',
        description: 'FAWWAZ RAMAH',
        date: '21 Oktober 2023'
      },{
        title: 'title 3',
        description: 'FAWWAZ BAGEUR',
        date: '41 Oktober 2023'
      }]
    }
  }
}
</script>
<style>
.row-services{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
.btn-services-global {
    margin-top: 10px;
    font-size: 10px;
    font-weight: 400;
    color: white;
    background-color: rgb(8, 102, 0);
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>
