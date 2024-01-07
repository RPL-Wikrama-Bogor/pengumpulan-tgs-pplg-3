<template>
  <div class="all">
    <div class="all-in">
    <div class="home">
      <h1>Selamat Datang</h1>
      <p>ini adalah tampilan <span style="color: magenta;">home</span></p>
    </div>
    <div class="image">
      <img src="src/assets/image/wb.jpg" alt="">
    </div>
  </div>
</div>

</template>

<style>
  body {
    height: 100vh;
    width: auto;
  }

  .all .image {
    width: 50%;
    align-items: flex;
    justify-content: right;
    display: flex;
    padding: 0 auto;

  }

  .image img{
    width: 60%;
    height: 60%;
    border-radius: 10px;
  }

  .all .home{
    display: grid;
    align-items: center;
    padding: 20px;
    justify-content: left;
    font-size: 20px;
    height: auto;
    width: 50%;
  }

  .all {
    display: flex;
    justify-content: center; /* Rata tengah horizontal */
    align-items: center; /* Rata tengah vertikal */
  }

  .all-in {
    height: 85%;
    width: 85%;
    display: flex;
    justify-content: center; /* Rata tengah horizontal */
    align-items: center; /* Rata tengah vertikal */
    margin-bottom: 70px;
  }
</style>