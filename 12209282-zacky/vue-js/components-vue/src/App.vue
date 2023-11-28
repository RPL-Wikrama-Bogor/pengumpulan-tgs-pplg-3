<template>
  <div class="row-service">
    <Card v-for="item in data " :title="item. title" :description="item. description"></Card>
    <card-service></card-service>
  </div>
  <button class="btn-service">Detail</button>
  <mybtn></mybtn>
</template>

<script>
  import Card from'@/components/my-components/Card.vue';
  export default {
    components: {
          Card,
          'card-service':Card
        },
    data(){
      return{
        data:[
          {
          title:'title 1',
          description:'description 2'
         }
        ]
      }
    }
  }
</script>

<style>
.row-service{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
</style>