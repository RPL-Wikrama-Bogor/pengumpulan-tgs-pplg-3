<template>
  <div class="app">
    <nav class="navbar">
      <div class="container">
        <router-link to="/" class="nav-link">Home</router-link>
        <router-link to="/about" class="nav-link">About</router-link>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<style>
.app {
  text-align: center;
}

.navbar {
  background: #007bff;
  color: #fff;
  padding: 10px 0;
}

.container {
  display: flex;
  justify-content: center;
}

.nav-link {
  color: #fff;
  text-decoration: none;
  margin: 0 20px;
  font-size: 18px;
  transition: color 0.2s;
}

.nav-link:hover {
  color: #0056b3;
}
</style>

<script>
export default {
  name: 'App',
};
</script>
