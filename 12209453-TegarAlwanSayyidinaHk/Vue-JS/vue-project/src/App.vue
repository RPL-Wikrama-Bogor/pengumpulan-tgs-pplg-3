<!-- untuk membuat.. -->
<template>
  <!-- templating -->
  <p>----------Template----------</p>
  <p>
    {{ nama }}
    {{ number }}
    <div v-html="kelas"></div></p>
    <p>----------Data Binding----------</p>
    <!-- blading -->
    <button :disabled="show">button</button>
    <h1 v-bind="property">Gacor Bangggg</h1>
    <input :type="typeInput">
    <p>----------Data Binding----------</p>
    {{ count == 0 ? count + 1 : count + 2 }}
    <p>-----------v-if----------</p>
    <button v-if="show" >button</button>
    <button v-show="show">Pusing WEll</button>

    <div v-if="count == 1">
    Number 1
    </div>

    <div v-else-if="count == 2">
    Number 2
    </div>

    <div v-else="count == 3">
    Number 3
    </div>
    <p>----------Computed Dan Method----------</p>
    <!-- <button @click="counterNumber">methods {{ counterButton }}</button>
    <button @click="countComputed">computed {{ numberComputed }}</button> -->
    <input :type="typeInput">
    <button @click="showPassword">Show Password</button>

    <p>----------Class Dan Style Binding----------</p>
    <ul>
      <li class="fs" :class="{active:isActive, fs40px:isActive}">
        Lanjut
    </li>
    </ul>
    <button @click="ubahWarna">Ubah Warna</button>
    <p>---------List Rendering--------------</p>
    <ul>
      <li v-for="(item,index) in daftarKelas">
        {{ index+1 }} {{ item }}</li>
  </ul>


 <p>-----------v-Model-----------</p>
 <input type="text" v-model="inputkelas">
  {{ inputkelas }}
</template>

<script>
export default{
  data(){
    return {
      inputkelas:'',
      daftarKelas:['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 3 , 
      nama:'Tegar Alwan',
      number: 1,
      kelas: '<h1>Kelas 11</h1>',
      nonaktif : true,
      property: {
        id : 1,
        class : 'color'
      },
      typeInput: "password",
      isActive: true,
    }
  }, 
  methods:{
    counterNumber(){
      this.counterButton += 1;
    }, 
    showPassword(){
      if (this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    }, 
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else{
        this.isActive = true;
      }
    }
  },
  computed:{
    countComputed(){
      this.numberComputed += 6;
    }
  }, 

  active:{

  }
}
</script>

<style>
.color{
  color: red;
}

.fs40px{
  font-size: 50px;
}

.active{
  color: blue;
}
</style>