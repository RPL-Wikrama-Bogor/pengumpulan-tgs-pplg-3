<template>
  <p>--------------templating---------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <button  :disabled="nonaktif">Click button apabila ingin tidur</button>
  <h1 v-bind="property">ngga bisa yaa wkwkwkwk</h1>
  <input :type="text">
  <p>-------------data binding-------------</p>
  {{ count == 0 ? count + 1 :count + 2 }}
  <p>-------------v-if-------------</p>
  <button v-if="show">lamaaa</button> <br>  
  <button v-show="show">banget</button>

  <div v-if="count == 1">
  number 1
  </div>

  <div v-else-if="count ==2">
    number 2
  </div>
  <div v-else-if="count ==0">
    number tidak boleh 0
  </div>

  <div v-else>
    number lebih dari 2
  </div>

  <p>-------------computed dan method-------------</p>
  <button @click="counterNumber">counter{{ counterButton }}</button>
  <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <br>
  <input :type="typeInput">
  <button @click="showPassword">showpassword</button>

  <p>-------------class dan style-------------</p>
  <ul>
    <li class="fs" :class="{active:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>

    <p>-------------list rendering-------------</p>
    <ul>
      <li v-for="(item, index) in daftarKelas">{{ index+1 }} {{    item   }}</li>
    </ul>

    <p>-------------v-model-------------</p>
    <input type="text" v-model="inputKelas">
    {{ inputKelas }}
</template>

<script>
export default{
  data(){
    return {
      inputKelas:'',
      daftarKelas: ['rpl_1','rpl_2','rpl_3'],
      typeInput: 'text',
      show:true,
      counterButton:0,
      numberComputed:0,
      count:0,
      nama : 'rivaldo',
      number : 1,
      kelas : '<h1>Kelas 11</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class : 'color'
      },
      text: 'password',
      isActive: true
    }
  },
  methods: {
    counterNumber(){
      this.counterButton +=1
    },
    showPassword() {
      if (this.typeInput == 'password') {
        this.typeInput = 'text';
      }else{
        this.typeInput = 'password'
      }

    },
    ubahWarna(){
      if (this.isActive) {
        this.isActive = false;
      } else {
        this.isActive = true;
      }
    }
  },
  computed : {
    countComputed(){
      this.numberComputed +=6;
    }
  }

}
</script>

<style>
.color{
  color: red;
}

.active{
  color:fuchsia;
  font-size: 50px;
}
</style>