<template>
  <p>---------------templating-----------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>

  <p>----------------data banding----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Deway</h1>
  <input :type="typeInput">

  <p>----------------data biding----------</p>
  {{ count== 0 ? count + 1 : count + 2 }}

  <p>----------------v-if-----------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count==1">
    number 1
  </div>
  <div v-else="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>

  <p>------------computed dan methods------</p>
  <button @click="counterNumber">methods{{ counterButton }}</button>
  <button @click="countComputed">Computed{{ numberComputed }}</button>

  <input :type="typeInput">
  <button @click="showPassword">Show Password</button>

  <p>-------------class dan style---------</p>
  <ul>
    <li :class="{active:isActive, fs40px: isActive}">
      tes
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>

  <p>------------list rendering-----------</p>
  <ul>
    <li v-for="(item,index) in daftarKelas">{{ index }}{{ item }}</li>
  </ul>

  <p>----------------v-model--------------</p>
  <input type="text" v-model="Inputkelas">
  {{ Inputkelas }}
</template>

  <script>
    export default{
      data(){
        return{
          Inputkelas:'',
          daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
          typeInput: 'password',
          counterButton: 0,
          numberComputed: 0,
          show: false,
          count: 2,
          nama: 'dewi',
          number: 12,
          kelas:'<h1>kelas 11</h2>',
          nonaktif: true,
          property: {
            id: 1,
            class:'color'
          },
          typeInput: 'password',
          isActive:true
        }
      },
      methods:{
        counterNumber(){
          this.counterButton += 1;
        },

      showPassword(){
        if (this.typeInput == 'password'){
          this.typeInput = 'text';
        } else{
          this.typeInput = 'password';
        }
      },

      ubahWarna(){
        if (this.isActive){
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
      }
    }
  </script>
  <style>
  .color{
    color: rgb(148, 25, 255);
  }

  .fs40px{
    font-size: 40px;
  }

  .active{
    color: blueviolet;
  }
</style>
