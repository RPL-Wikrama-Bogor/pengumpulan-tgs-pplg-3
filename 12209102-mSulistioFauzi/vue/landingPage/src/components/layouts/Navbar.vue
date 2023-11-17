<template>
    <div class="container-nav">
      <div class="topnav container" :class="{responsive: navbarActive}">
        <div class="logo">
        <div><img src="src/components/image/logo.png" alt="logo"></div>
          <a class="icon">
            <img src="src/components/image/hamburger.svg" @click="navbar" alt="hamburger">
          </a>
        </div>
        <div class="menu">
          <a href="">Home</a>
          <a href="">Portofolio</a>
          <a href="">Blog</a>
          <a href="">Contact</a>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
  data() {
    return {
      navbarActive: false
    }
  },
  methods: {
    navbar() {
      if (this.navbarActive) {
        this.navbarActive = false;
      } else {
        this.navbarActive = true;
      }
    }
  }
}
</script>
  
  <style scoped>
  
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
  
    * {
      font-family: 'Poppins', sans-serif;
    }
  
  
  .topnav {
    overflow: hidden;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .topnav a{
    float: left;
    color: black;
    text-align: center;
    padding: 16px 10px;
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
    background-color: cyan;
    color: white;
  }
  
  .topnav .icon{
    display: none;
  }
  
  .logo {
    display: flex;
    justify-content: space-between;
    max-width: 100%;
    padding: 10px;
  }
  
  @media screen and (max-width: 600px) {
    .topnav {
      display: block;
      padding: 0;
    }
    .topnav .menu a{
      display: none;
    }
  
    .topnav a.icon{
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width:600px){
    .topnav.responsive{
      position: relative;
      display: block;
    }
  
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
  </style>