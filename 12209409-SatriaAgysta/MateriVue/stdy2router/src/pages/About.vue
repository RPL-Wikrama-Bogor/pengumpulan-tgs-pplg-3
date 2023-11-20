<template>
  <div class="all">
  <div class="about">
    <h1>Selamat Datang</h1>
    <p>ini adalah tampilan <span style="color: red;">about</span></p>
  </div>
</div>
</template>

<script setup>
</script>

<style>
  body {
    height: 100vh;
    width: auto;
  }

  .about {
    display: grid;
    align-items: center;
    padding: 20px;
    justify-content: center;
    font-size: 20px;
    height: auto;
    width: 25%;
  }

  .all {
    height: 100vh;
    display: flex;
    justify-content: center; /* Rata tengah horizontal */
    align-items: center; /* Rata tengah vertikal */
  }
</style>