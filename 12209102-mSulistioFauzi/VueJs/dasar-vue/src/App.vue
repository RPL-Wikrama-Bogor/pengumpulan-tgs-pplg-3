<template>
  <p>--------------template--------------</p>
  <p>{{ nama }}</p>
  <p>{{ number }}</p>
  <div v-html="kelas"></div>
  
  <p>------------data binding------------</p>
  <button :disabled="nonaktif">no</button>
  <h1 v-bind="property">Siuuuuuu</h1>
  <input :type="typeInput">
  
  <p>------------data binding------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  
  <p>----------------v-if----------------</p>
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
  
  <p>---------computed and method---------</p>
  <!-- <button @click="counterNumber">{{ counterButton }}</button>
  <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <br> -->
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  
  <p>-----------class and style-----------</p>
  
  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">
        test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah warna</button>
  
  <p>-----------class and style-----------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ item }} {{ index+1 }}</li>
  </ul>
  
  <p>-----------form binding-----------</p>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
  
  </template>
  
  <script>
  export default{
    data() {
      return {
        inputKelas: '',
        daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
        counterButton : 0,
        numberComputed : 0,
        show:true,
        count:1,
        nama : 'Tio',
        number : 23,
        kelas : '<h1>kelas 11</h1>',
  
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
  .color {
    color: red;
  }
  .fs40px{
    font-size: 20px;
  }
  .active {
    color: blueviolet;
  }
  </style>