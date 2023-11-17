<template>
  <!-- jika kita tidak membuat tag template maka tidak akan berjalan -->
  <!-- template ini digunakan untuk mengikat/menampilkan data -->
  <p>--------------------------templating------------------------</p>
  {{ nama }}
  {{ number }}
  <!-- jika ingin menampilkan element html bisa mengguanakan v-html -->
  <!-- kelas adalah nama property -->
  <div v-html="kelas"></div>
  <p>--------------------------data binding----------------------</p>
  <button :disabled="nonaktif">button </button>
  <!-- yang diawali oleh v- itu adalah directive (data langsung berubah jika data properti juga berubah) -->
  <h1 v-bind="property">bahtiar</h1>
  <!-- tanda titik dua (:) untuk mengikat atribut dengan html dan data nya akan menuju ke property -->  
  <input :type="type">
  <p>--------------------------data binding----------------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-----------------------------v-if---------------------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">sumbit</button>
  
  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else="count">
    number 3
  </div>
  <p>-----------------------computed & method---------------------</p>
  <button @click="counterNumber">method {{ counterButton }}</button> <br> <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button> <br> <br>
  
  <!-- data dinding -->
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  
  <p>------------------------class & method----------------------</p>
  <ul>
    <li class="fs" :class="{active:isActive, 
                            fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  
  <p>------------------------list rendering----------------------</p>
  <ul>
    <li v-for="(item,index) in daftarKelas">{{ index+1 }} {{ item }}</li>
  </ul>
  <p>----------------------------v-model-------------------------</p>
  <input type="text" v-model="Inputkelas"> 
  {{ Inputkelas }}
  </template>
  
  <script>
  export default{
    data(){
      return {
        Inputkelas: '',
        daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
        typeInput: 'password',
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 9,
        nama: 'bahtiar', 
        number: 1,
        kelas: '<h1>kelas 11</h1>',
        nonaktif: true,
        property: {
          id : 1,
          class: 'color',
        },
        type: 'password',
        isActive: true
      }
    },
    methods: {
      counterNumber(){
        this.counterButton += 1;
      },
      showPassword(){
        if(this.typeInput=='password'){
          this.typeInput = 'text';
        } else {
          this.typeInput = 'password';
        }
      },
      ubahWarna() {
        if (this.isActive) {
          this.isActive = false;
        } else {
          this.isActive = true;
        }
      }
    },
    computed: {
      countComputed(){
        this.numberComputed += 1;
      }
    }
  }
  </script>
  
  <style>
  .color {
    color: rgb(84, 196, 224);
  }

  .fs40px {
    font-size: 40px;
  }

  .active {
    color: burlywood;
  }
  </style> 