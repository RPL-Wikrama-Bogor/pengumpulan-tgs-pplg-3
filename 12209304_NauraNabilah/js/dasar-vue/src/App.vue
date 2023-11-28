<template>
<p>--------------templating------------------</p>
{{ nama }}
{{ number }}
<div v-html="kelas"></div>
<p>----------------data binding----------------</p>
<button :disabled="nonaktif">button</button>
<h1 v-bind="property">Nau</h1>
<input :type="typeInput">
<p>----------------data binding----------------</p>
{{ count == 0 ? count + 1 : count + 2 }}
<p>----------------v-if----------------</p>

<button v-if="show">submit</button> <br> <br>
<button v-show="show">submit</button> <br> <br>

<div v-if="count==1">
number 1
</div>
<div v-else-if="count==2">
number 2
</div>
<div v-else>
  lebih dari 2
</div>
<p>----------------computed dan methods----------------</p>
<button @click="counterNumber">methods {{ counterButton }}</button> <br> <br>
<button @click="countComputed">Computed {{ numberComputed }}</button> <br> <br>

<!-- data dinding -->
<input :type="typeInput">
<button @click="showPassword">show password</button>

<p>----------------class dan style----------------</p>
<ul>
  <li class="fs" :class="{ active:isActive, fs40px:isActive }">test</li>
</ul>
<button @click="ubahWarna">ubah warna</button>
<p>----------------list rendering----------------</p>
<ul>
  <li v-for="(item, index) in daftarKelas">{{ index+1 }} {{ item }}</li>
</ul>
<p>----------------v-models----------------</p>
<input type="text" v-model="Inputkelas">
{{ Inputkelas }}
</template>

<script>
export default{
  data(){
    return {
      Inputkelas:'',
      daftarKelas:['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 3,
      nama:'Naura',
      number: 27,
      kelas:'<h1>kelas 11</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true

    }
  },
  methods: {
    counterNumber(){
      alert(this.counterButton += 1)
    },
    showPassword(){
      if(this.typeInput=='password'){
        this.typeInput='text';
      }else{
        this.typeInput = 'password';
      }
    },
    ubahWarna(){
      if (this.isActive) {
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    },
  },

  computed: {
    countComputed(){
      this.numberComputed += 6;
    }
  }
}
</script>

<style>
.color {
  color: rgb(255, 150, 127);
}
.fs40px {
  font-size: 40px;
}
.active {
  color: blueviolet;
}
</style>