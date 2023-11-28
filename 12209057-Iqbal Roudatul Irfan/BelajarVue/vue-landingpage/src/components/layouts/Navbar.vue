<template>
    <div>
      <div class="topnav" :class="{ 'responsive': isResponsive }">
        <div class="logo">
          <div><img src="@/assets/img/logo.png" alt="logo"></div>
          <a class="icon" @click="toggleResponsive">
            <img src="@/assets/img/hamburger.svg" alt="hamburger">
          </a>
        </div>
        <div class="menu" :class="{ 'vertical': isResponsive }">
          <a href="home">Home</a>
          <a href="portofolio">Portofolio</a>
          <a href="blog">Blog</a>
          <a href="contact">Contact</a>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isResponsive: false
      };
    },
    methods: {
      toggleResponsive() {
        this.isResponsive = !this.isResponsive;
      }
    }
  };
  </script>
  
  <style scoped>
  /* Your existing styles */
  .topnav {
    overflow: hidden;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .topnav a {
    float: left;
    color: black;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    border-bottom: 2px solid #4c55c4;
  }
  .topnav a:hover {
    color: black;
  }
  
  .topnav a.active{
    background-color: #04AA60;
    color: white;
  }
  
  .topnav .icon {
    display: none;
  }
  
  .logo {
    display: flex;
    justify-content: space-between;
    max-width: 100%;
    padding: 10px;
  }
  
  /* Add responsive styles for mobile */
  @media screen and (max-width: 600px){
    .topnav {
      display: block;
      padding: 0;
    }
  
    .topnav .menu {
      display: none;
    }
    
    .topnav a.icon {
      float: right;
      display: block;
    }
  
    .topnav.responsive .menu {
      display: flex;
      flex-direction: column; /* Make the menu items stack vertically */
    }
  
    .topnav.responsive .menu a {
      display: block;
      text-align: left;
    }
  }
  </style>
  
  