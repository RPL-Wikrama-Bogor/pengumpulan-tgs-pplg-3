
<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" title="Ini iqbal" description="ini deskripsi nfjbsjdfbjebf"></Card>
    <Mybtn id="btn 1" name="btn"></Mybtn>
  </div>
</template>


<script>
import Card from './components/my-components/Card.vue'

export default {
  components: {
    Card,
    'card-service': Card
  },

  data() {
    return {
      data: [
        {
          title: "Card 1",
          description: "Ini adalah card 1",
          date: "31 oktober 2023"
        },
        {
          title: "Card 2",
          description: "Ini adalah card 2",
          date: "31 oktober 2023"
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
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color: rgb(8, 102, 0);
  padding: 15px 20px;
  border: none;
  border-radius: 5px;

}
</style>