<template>
  <div class="all">
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p style="color: magenta;"> {{ item.date }} </p>
    </Card>
  </div>

  <div class="btn">
  <button class="btn-service">
    teszz
  </button>
  <MyBtn></MyBtn>
  </div>
  </div>
</template>

<script>
import Card from './components/my-components/Card.vue';
 export default{
  components:{
    Card
  },
  data() {
    return {
      data: [
        {
          title: 'title one',
          description: 'description one',
          date: '22 agustus'
        }, 
        {
          title: 'title two',
          description: 'description two',
          date: '22 agustus'
        },
        {
          title: 'title three',
          description: 'description three',
          date: '22 agustus'
        }
      ]
    }
  }
}
</script>

<style>

.all {
  justify-content: center;
  align-items: center;
  height: 100vh;
  display: flex;
  flex-direction: column;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.btn {
  justify-content: space-between;
  align-items: center;
  display: contents;
}

.btn-service-global {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background: linear-gradient(90deg, rgb(42, 216, 164) 0%, rgb(42, 216, 164) 50%, rgb(46, 163, 128) 50%, rgb(46, 163, 128) 100%);
    padding: 15px 20px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    background-size: 200% 100%;
    transition: background-position 0.3s ease;
}

.btn-service-global:hover {
    cursor: pointer;
    background-position: -100% 0;
    border: none;
}

</style>