<template>
    <div class="card">
      <div class="card-img-container">
        <img :src="data.img" class="card-img" alt="Card Image">
      </div>
      <div class="card-content">
        <h5 class="card-title">{{ data.title }}</h5>
        <p class="card-text">{{ data.description }}</p>
      </div>
      <div class="acc">
        <div class="img">
          <img class="gambar" src="nako.jpg" alt="Foto Bulat"> <!-- Tambahkan class profile-pic -->
        </div>
        <div class="desc">
          <p class="nama">{{ data.nama }}</p>
        </div>
        <div>
          <p>{{  }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      data: Object
    }
  }
  </script>
 
  <style scoped>
  .gambar {
  width: 50px; 
  height: 50px;
  border-radius: 50%; 
}
.nama {
  font-size: 14px;
  font-weight: bold;
}
  .card {
  width: 600px; 
  height: 220px; 
  margin: 20px;
  text-align: left; 
  border: 1px solid #ccc;
  border-radius: 8px;
  background-color: #fff;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  display: flex;
  gap:10px;
}

.card-content {
  width: 50%;
  height: 100%;
}

.card-img-container {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card-img-container img{
  height: 100%;
  width: 100%;
  border-radius: 8px 0 0 8px;
}

.card-img {
  max-height: 100%;
  max-width: 100%;
}

.card-title {
  font-size: 1rem;
  margin-bottom: 0.5rem;
}

.card-text {
  font-size: 11px;
  margin-bottom: 0.5rem;
}
  </style>
  