<template>
  <p>----------templating---------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <button :disabled="nonaktif">Submit</button>
  <h1 v-bind="property">Fah</h1>
  <input :type="typeInput">
  <p>----------data binding---------</p>
  {{ count==0 ? count + 1 : count + 2 }}
  <p>----------v-if---------</p>

  <button v-if="show" >Submit</button>
  <button v-show="show">Submit</button>

  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>-----computed and method----------</p>
  <button @click="counterNumber">{{ counterButton }}</button>
    <button @click="countComputed">Computed {{ numberComputed }}</button>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
    <p>-----class dan style----------</p>

    <ul>
      <li :class="{active: isActive, fs40px: isActive}">
        test
      </li>
    </ul>
    <button @click="ubahWarna">ubah warna</button>
    <p>----------list and rendering-----------</p>
    <ul>
      <li v-for="(item, index) in daftarKelas">{{ index + 1 }}{{ item }}</li>

    </ul>
    <p>----------v-model---------</p>
    <input type="text" v-model="inputKelas">
    <br>
    {{ inputKelas }}
</template>

<script>
  export default{
    data(){
      return { 
        inputKelas: '',
        daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
        counterButton: 0,
        numberComputed: 0,
        show: false,
        count: 2,
        nama: 'Fahrel',
        number: 1,
        kelas: '<h1>kelas 11</h1>',
        nonaktif: true,
        property:{
            id: 1,
            class: 'color'
        },
        typeInput: 'password',
        isActive: true,
      }
    },
    methods: {
      counterNumber(){
        this.counterButton += 1;
      },

      showPassword(){
        if (this.typeInput == 'password'){
          this.typeInput = 'text';
        }else{
          this.typeInput = 'password';
        }
      },

      ubahWarna(){
        if(this.isActive){
          this.isActive = false;
        }else{
          this.isActive = true;
        }
      }
    },


    computed:{
      countComputed(){
        this.numberComputed += 6;
      }
    }
  }
</script>

<style>

  .active{
    color: blue;
  }

  .fs40px{
    font-size: 40px;
  }

  .color{
    color: rgb(69, 125, 129);
  }
</style>