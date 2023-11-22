<template>
    <div class="card-service">
      <img class="img" src="@/assets/homerose.jpg">
      <div class="text-container">
        <h3>{{ title }}</h3>
        <p>{{ description }}</p>
        <div class="footer">
          <img class="img2" src="@/assets/img.jpg">
          <p class="text-footer">
            {{ name }}
            <br>
            <span id="date">
              {{ date }}
            </span>
          </p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['title', 'description', 'name', 'date', 'img'],
  };
  </script>
  
  <style scoped>
  #date {
    font-size: 12px;
  }
  .card-service {
    display: flex;
  }
  .img {
    margin-bottom:-22px;
    max-width: 45%;
  }
  .footer {
    display: flex;
  }
  .text-footer {
    margin-top: 95px;
    margin-left: 10px ;
    color: rgb(112, 112, 112);
  }
  .img2 {
    margin-top: 100px;
    border-radius: 50%;
    width: 33px;
    height: 33px;
  }
  .text-container {
    flex: 1;
    padding: 15px;
  }
  </style>