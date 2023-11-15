<template>
  <p>-----------templating------------</p>
  {{ nama }}
  {{ absen }}
  <div v-html="kelas"></div>
  <p>-----------data binding------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Fawwaz</h1>
  <p>-----------data binding------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-----------v-if------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
{{ counterButton }}
  <div v-if="count">
    number 1
  </div>
  <div v-else-if="count">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>--------------------computed and method--------------</p>
  <input :type="typeInput" v-model="nama">
  <button @click="showPw">Show Password</button>
  <!-- <button @click="counternumber">method{{ counterButton }}</button>
  <button @click="counterComputed">computed{{ numberComputed }}</button> -->
  <p>---------class dan style----------</p>
 <ul>
  <li :class="{active:isActive,fs30px:isActive}">
    test
  </li>
 </ul>
 <button @click="ubahwarna">ubah warna</button>
 <P>-----------list rendering-------</P>
 <ul>
  <li v-for="(item,index) in daftarKelas">{{ index+1 }}{{ item }}</li> <!--INDEX KAN DIMULAI DARI 0  JADI JIKA INGIN BERURUTAN INDEX HARUS DI TAMBAH 1-->
 </ul>

 <P>-----------V-MODEL-------</P>
 <input type="text" v-model="inputKelas"> <!--v-model buat supaya text yang di input ngikutin di pinggrinya-->
{{ inputKelas }}
  
</template>

<script>
export default{
  data(){
    return {
      inputKelas: 'sds',
      daftarKelas:['PPLG 1','PPLG 2', 'PPLG 3'],
      typeInput: 'password',
      numberComputed : 0,
      counterButton: 0,
      show: false,
      count: 1,
      nama: 'Fawwaz',
      absen: 12,
      kelas: '<h1>PPLG XI-3</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
    }
  },
  methods:{
    counternumber(){
      this.counterButton +=1;

    },
    showPw(){
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
     
      }else{
        this.typeInput = 'password';
      }
    },
    ubahwarna(){
      if(this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
    
  },
    computed:{
      counterComputed(){
        this.numberComputed += 6
      }
    }

  }
</script>

<style>
.color{
  color: red;
}
.fs30px{
  font-size: 30px;
}
.active{
  color: rgb(0, 204, 255);
}
</style>
