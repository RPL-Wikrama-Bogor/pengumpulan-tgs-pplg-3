<template>
    <div class="card-service">
      <img class="img" src="https://i.pinimg.com/564x/7d/be/c2/7dbec2ae773f5f20e04ca4f54579972d.jpg">
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
    border-radius: 50px 0 0 50px;
    margin-bottom: -20px;
    max-width: 40%;
    margin-right: 10px;
  }
  .footer {
    display: flex;
  }
  .text-footer {
    margin-top: 100px;
    margin-left: 10px;
    color: rgb(112, 112, 112);
  }
  .img2 {
    margin-top: 100px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
  }
  .text-container {
    flex: 1;
    padding: 10px;
  }
  </style>
  