<template>
  <p>-------------------- templating ------------------</p>
  {{ nama }} <br>
  {{ nis }}
  <div v-html="rombel"></div>
  <!-- div v-html untuk menampilkan property 'rombel' dan agar tag html yg ada di property 'rombel' terbaca 
  sebagai tag html bukan sebagai string -->
  <p>-------------------- data binding ------------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">lubnaaaaa</h1>
  <input :type="typeInput">
  <!-- : diawal menandakan agar type menangkap  tag html atau -->
  {{ count == 0 ? count + 1 : count + 2 }}
  <!-- jika property count berisikan 0 maka akan + 1 jika property count bukan bernilai 0 maka akan + 2 -->
  <p>------------------- v-if -------------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
      number 2
  </div>
  <div v-else>
      kurang dari 1 atau lebih dari 2
  </div>
  <p>---------------- computed and methods -----------------</p>
  <button @click="counterNumber">Methods {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button><br><br>
  <!-- data dinding -->
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>------------------------- class dan style --------------------------</p>

  <ul>
    <li :class="{active:isActive, 
                fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>------------------ list rendering -----------------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index+1 }} {{ item }}</li>
  </ul>
  <p>------------------- v-model --------------------</p>
  <input type="text" v-model="Inputkelas" id="">{{ Inputkelas }}

</template>

<script>
export default{
  data(){
    return {
      Inputkelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput:'password',
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count : 4,
      nama: 'lubna',
      nis: 12209428,
      rombel: '<b>pplg xi-3</b>',
      nonaktif: false,
      // jika bernilai true maka disabled diaktifkan jika diisi nilai false maka disabled dihilangkan atau 
      //dinonaktifkan
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true

    }
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword(){
      if(this.typeInput=='password'){
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    }, 
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else {
        this.isActive = true;
      }
    }
  },
  computed: {
    countComputed() {
      this.numberComputed += 1;
    }
  }
}
</script>
<style>
  .color{
    color: red;
  }
  .fs40px {
    font-size: 40px;
  }
  .active{
    color: greenyellow;
  }
</style>
<!-- latihan todolist
  Buat project baru menggunakan vue js lalu ikutin turorial di bawah ini (tutorialnya bakal di share)
- membuat daftar siswa
- membuat hapus data siswa
 -->