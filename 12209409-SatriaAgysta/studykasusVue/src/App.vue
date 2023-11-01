<template>
  <div class="all">
    <div class="row-service">
      <Card v-for="item in data" :title="item.title" :description="item.description">
        <p style="color: #0f0f0f;"> {{ item.date }} </p>
      </Card>
    </div>
  </div>
</template>

<script>
import Card from './components/my-components/card.vue';

export default {
  components: {
    Card
  },
  data() {
    return {
      data: [
        {
          title: 'Sabbath Crew',
          description: 'A crew consisting of 4 members: Wooin, Joker, Grim Reaper, and an unnamed member. We only see them in one race but they have been shown to play with ruthless tactics to win. Grim Reaper has a reputation for being especially dangerous during a race.',
          date: '22 August',
          img: './components/image/img.jpg'
        },
      ]
    };
  },
};
</script>

<style>
.all {
  justify-content: center;
  align-items: center;
  height: 100vh;
  display: flex;
  flex-direction: column;
  width: 100%;
  grid-gap: 10px;
}

.row-service {
  display: grid;
  grid-gap: 10px;
  width: 60%;
}
</style>
