<template>
  <p>----------template----------</p>
  {{ nama }}
  {{ number }}
  <div v-html="Rombel"></div>
  <button :disabled="nonaktif">Clik Me Bro</button>
  <h1 v-bind="property">ka.zuxha</h1>
  <input :type="typeInput">
  <p>----------data binding----------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>----------v-if----------</p>


<button v-if="show">submit</button>
<!-- <button v-show="show">submit</button> -->

<div v-if="count ==1">
Number 1
</div>
<div v-else-if="count ==2">
Number 2
</div>
<div v-else>
  Number Lebih Dari 5
</div>

<p>----------computed dan methods----------</p>
<input :type="typeInput">
<button @click="showPassword">Show password</button>
<br>
<br>
<br>
<button @click="counterNumber">Methods {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button>

<p>----------class dan style----------</p>
<ul>
  <li :class="{active:isActive, fs40px: isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>
<p>----------list rendering----------</p>
<ul>
  <li v-for="(item,index) in daftarRombel">{{ index+1 }}{{ item }}</li>
</ul>
<p>----------v-model----------</p>
<input type="text" v-model="InputRombel">
{{ InputRombel }}
</template>

<script>
export default{
  data(){
    return{
      InputRombel:'',
      daftarRombel:['PPLG 1', 'PPLG 2', 'PPLG 3'],
      typeInput: 'password',
      counterButton : 0,  
      show: true,
      count: 1,
      nama: 'Leo' ,
      number: 1 ,
      Rombel: '<h1>Rombel PPLG XI-3</h1>',
      nonaktif: true ,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive:true
    }
  },
  methods: {
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
      if(this.typeInput == 'password'){
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
  computed: {
    countComputed() {
      this.counterButton += 1;
    }
  }
}
</script>
<style>
.color{
  color:#00f396;
}
.fs40px{
  font-size: 60px;
}
.active{
  color:#B31312;
}
</style>