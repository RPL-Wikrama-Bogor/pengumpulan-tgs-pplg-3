<template>
    <div class="card-blog">
      <img :src="blog.file" :alt="blog.title">
      <div class="card-blog-description">
        <h4>{{ blog.title }}</h4>
        <p>{{ blog.description }}</p>
        <div class="time">
          {{ blog.created_at }}
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['blog']
  };
  </script>
  
  <style>
  .card-blog {
    text-align: start;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    background: #1a1a1a; /* Warna latar belakang gelap */
    transition: all 0.5s ease;
    margin: 10px 10px;
    display: flex;
    align-items: center;
    border-radius: 10px;
  }
  
  .card-blog img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px 0 0 10px; /* Merapikan border untuk gambar */
    padding: 0 20px 0 0; /* Mengubah padding untuk penyesuaian tampilan */
  }
  
  .card-blog-description {
    padding: 20px;
  }
  
  .card-blog-description .time {
    font-weight: 500;
    font-size: 12px;
    line-height: 17px;
    color: #9e9e9e; /* Ubah warna waktu ke abu-abu lebih gelap */
  }
  
  .card-blog h4 {
    font-weight: 900;
    font-size: 24px;
    line-height: 28px;
    color: #d1d1d1; /* Ubah warna judul ke putih atau sesuai kebutuhan */
    margin-bottom: 5px;
    margin-top: 0;
  }
  
  .card-blog p {
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    color: #bdbdbd; /* Ubah warna deskripsi ke abu-abu lebih terang */
    margin-top: 10px;
    margin-bottom: 5px;
  }
  </style>
  