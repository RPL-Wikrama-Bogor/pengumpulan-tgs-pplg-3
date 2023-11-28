<template>
  <div class="about-page">
    <div class="content">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo, quam eget bibendum fringilla, metus dolor convallis ligula, at facilisis risus velit sed nunc.</p>
      <a href="/contact">Contact Us</a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
};
</script>

<style scoped>
.about-page {
  background: #f0f0f0;
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

a {
  background: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
  border-radius: 5px;
  display: inline-block;
  margin-top: 20px;
}

a:hover {
  background: #0056b3;
}
</style>

  