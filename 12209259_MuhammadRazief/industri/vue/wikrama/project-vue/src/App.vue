<template>
  <div id="app">
    <Card v-for="item in cardData" :key="item.id" :data="item" />
  </div>
</template>

<script>
import Card from '@/components/my_components/Card.vue'

export default {
  components: {
    Card
  },
  data() {
    return {
      cardData: [
        {
          id: 1,
          img: 'nako.jpg',
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was missing? Perhaps it felt slightly bare and uninviting.I ve got some simple tips to help you make any room fell complate. ',
          nama: 'Muhammad Razief',
          tanggal: '21-01-2007'
        }
      ]
    }
  }
}
</script>

<style>
#app {
  background-color: #ADC4CE;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-align: center;
  color: #4D4C7D;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  height: 100%;
  width: 100%;
}
p{
 font-family: Arial, Helvetica, sans-serif;
 color: #4D4C7D;
 line-height: 15px;
}
</style>
