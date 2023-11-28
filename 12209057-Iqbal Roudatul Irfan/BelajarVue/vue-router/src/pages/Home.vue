<template>
  <div class="home-page">
    <div class="content">
      <h2>Welcome to Our Website</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo, quam eget bibendum fringilla, metus dolor convallis ligula, at facilisis risus velit sed nunc.</p>
      <button @click="exploreMore">Explore More</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
  methods: {
    exploreMore() {
      this.$router.push('/about');
    },
  },
};
</script>

<style scoped>
.home-page {
  background: #f5f5f5;
  padding: 20px;
  text-align: center;
}

.content {
  background: #fff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h2 {
  color: #007bff;
  font-size: 24px;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
  line-height: 1.5;
}

button {
  background: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  margin-top: 20px;
}

button:hover {
  background: #0056b3;
}
</style>

  