<template>
  <div  class="nav">
    <h3 style="justify-content: right; padding: 0 20px auto; align-items: left; margin-left: 10px;">Sabbath</h3>
  <div class="navdam">
    <router-link style="color: #0f0f0f; text-decoration: none;" :to="{ name: 'Home'}">Home</router-link>
    <router-link style="color: #0f0f0f; text-decoration: none;" to="/about">About</router-link>
  </div>
  </div>
  <router-view></router-view>
</template>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

  * {
    font-family: 'Poppins', sans-serif;
  }

  body {
    height: 100vh;
    width: auto;
  }

  .nav {
    display: flex;
    padding: 0 auto;
    width: 100%;
    height: 50px;
    align-items: center;
    border-radius: 8px;
    box-shadow: 2px 1.5px 3px 2px black;
  }

  .navdam {
    display: flex;
    justify-content: right;
    gap: 20px;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    align-items: center;
  }
</style>