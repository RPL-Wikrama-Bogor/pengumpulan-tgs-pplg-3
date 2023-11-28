<template>
    <div>
      <div class="selection_1">
        <div class="selection1_content">
          <h1 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, qui.
          </p>
        </div>
        <div class="selection1_img">
          <img src="src/assets/img/section_1.jpg" alt="beranda">
        </div>
      </div>
    </div>
  </template>
  
  <style scoped>
  .selection_1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .selection1_content {
    text-align: left;
    max-width: 50%;
    padding: 20px;
    font-family: 'Open Sans', sans-serif; /* Mengubah font dengan Open Sans */
    margin-left: 30px;
  }
  
  .title {
    font-weight: bold;
    color: black;
    font-size: 40px; /* Mengatur ukuran font h1 */
  }
  
  .selection1_img {
    max-width: 50%;
    padding: 20px;
    margin-right: 30px;
  }
  
  .selection1_img img {
    max-width: 100%;
    display: block;
  }
  
  @media screen and (max-width: 600px) {
    .selection_1 {
      flex-direction: column;
    }
    
    .selection1_content,
    .selection1_img {
      max-width: 100%;
      margin: 0; /* Hapus margin saat layar kecil */
    }
  }
  </style>
  