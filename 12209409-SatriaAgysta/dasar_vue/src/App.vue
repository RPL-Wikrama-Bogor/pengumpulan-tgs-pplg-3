<template>
  <h1 style="@import url('https://fonts.googleapis.com/css?family=Creepster&display=swap'); font-family: 'Creepster', cursive; color: #fff; text-align: center;">Satria Agysta</h1>

<div class="seluruh">
  <div class="all">
  <h2>template</h2><br>
  <p>{{ nama }}</p>
  <p>{{ number }}</p>
  <div v-html="kelas"></div>
  </div>
  
  <div class="all">
  <h2>data binding</h2>
  <button :disabled="nonaktif">no</button>
  <h1 v-bind="property">AGY</h1>
  <input :type="typeInput">
  </div>
  
  <div class="all">
  <h2>data binding</h2>
  {{ count == 0 ? count + 1 : count + 2 }}
  </div>
  
  <div class="all">
  <h2>v-if</h2>
  <button v-if="show">submit</button>
  <br>
  <button v-show="show">submit</button>
  
  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  </div>
</div>
  
<div class="seluruh">
  <div class="all">
  <h2>computed and method</h2>
  <!-- <button @click="counterNumber">{{ counterButton }}</button>
  <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <br> -->
  <input :type="typeInput" style="margin-right: 5px;">
  <button @click="showPassword">show password</button>
  </div>
  
  <div class="all">
  <h2>class and style</h2>
  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">
        test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah warna</button>
  </div>
  
  <div class="all">
  <h2>class and style</h2>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ item }} {{ index+1 }}</li>
  </ul>
  </div>
  
  <div class="all">
  <h2>form binding</h2>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
  </div>
</div>
  
  </template>
  
  <script>
  export default{
    data() {
      return {
        inputKelas: '',
        daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
        counterButton : 0,
        numberComputed : 0,
        show:true,
        count:1,
        nama : 'satria',
        number : '5',
        kelas : '<h1>kelas</h1>',
  
        nonaktif:false,
        // kalo true nanti jadi disable buttonnya
  
        property:{
          id:1,
          class:'color'
        },
  
        typeInput: 'password',
        isActive:true
      }
    },
    methods: {
      counterNumber() {
        alert(this.counterButton += 1)
      },
      showPassword() {
        if (this.typeInput == 'password') {
          this.typeInput = 'text'
        } else {
          this.typeInput = 'password'
        }
      },
      ubahWarna() {
      if(this.isActive) {
        this.isActive=false
      } else {
      this.isActive=true
        }
      }
    },
    computed: {
      countComputed() {
        this.numberComputed += 6
      }
    }
  }
  
  </script>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

  * {
    font-family: 'Poppins', sans-serif;
  }

  .seluruh {
    gap: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }

  .all {
    padding: 10px;
    justify-content: center;
    align-items: center;
    display: block;
    height: 250px;
    width: 25%;
    background-color: #fff;
    border-radius: 10px;
  }

  h2 {
    text-decoration: underline rgb(136, 100, 215);
  }

  body {
    background-color: #0f0f0f;
    color: #0f0f0f;
  }

  input {
    border-radius: 5px;
    border: 1px solid rgb(90, 90, 90);
  }

  button {
    border-radius: 5px;
    border: 1px solid rgb(90, 90, 90);
    background-color: rgb(90, 90, 90);
    color: #fff;
  }

  .color {
    color: rgb(136, 100, 215);
  }

  .fs40px{
    font-size: 20px;
  }

  .active {
    color: rgb(136, 100, 215);
  }

  </style>