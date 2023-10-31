<template>
  <div>
    <table>
      <input type="text" placeholder="Masukan Nama" v-model="formdatakelas.nama">
      <br>
      <input type="text" placeholder="Masukan Kelas" v-model="formdatakelas.kelas">
      <br>
      <button @click="tambahkelas">tambah siswa</button>
      <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Kelas</td>
      </tr>
      <tr v-for="(murid, idex) in datakelas"  key="index">
        <td>{{ id + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <button @click="hapusdatakelas">hapus data siswa</button>

      </tr>
    </table>
  </div>
</template>


<script>
export default {
  data(){
    return{
      datakelas:[{
        nama:'radit',
        kelas:'10'
      }],
      formdatakelas:{
        nama:'',
        kelas:''
      }
    }
  },
  methods:{
    tambahkelas() {
      this.formdatakelas.id = Date.now();
      this. datakelas.push(this.formdatakelas);
      this.formdatakelas = { 
        nama:'',
        kelas:''
      }
    },
    hapusdatakelas(id){
      this.datakelas = this.datakelas.filter(item => item.id);
    }
  }
}
</script>