<template>
  <div class="head">
    <h1>Data Siswa</h1>
  </div>

  <div class="body">
    <div class="container">
      <input class="input" type="text" placeholder="Masukkan Nama" v-model="formDataKelas.nama">
      <br>
      <input class="input" type="text" placeholder="Masukkan Kelas" v-model="formDataKelas.kelas">
      <br>
      <button class="plus" @click="tambahKelas">Tambah Siswa</button>
    </div>
      <table class="table">
        <tr>
          <th> Id</th> 
          <th> Nama</th> 
          <th> Kelas</th> 
          <th> Aksi</th>
        </tr>
        <tr v-for="(murid, index) in dataKelas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ murid.nama }}</td>
          <td>{{ murid.kelas }}</td>
          <td><button class="del" @click="hapusDataKelas(murid.id)">Hapus</button></td>
        </tr>
      </table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        dataKelas: [{
          id: Date.now(),
          nama: 'Fahrel',
          kelas: '11'
        }],
        formDataKelas:{
          nama:'',
          kelas:''
        }
      }
    },

    methods: {
      tambahKelas() {
        if (this.formDataKelas.kelas && this.formDataKelas.nama) {
          this.formDataKelas.id = Date.now()
          this.dataKelas.push(this.formDataKelas)
          this.formDataKelas = {
            nama:'',
            keals:''
          }
        }else{
          alert('Data Harap Di isi')
        }

      },
      hapusDataKelas(id) {
        if(this.dataKelas = this.dataKelas.filter(item => item.id != id)) {
          alert('Data berhasil Dihapus!');
        }else{
          alert('Data Gagal Dihapus!');
        }
        
      }
    }
  }
</script>

<style>
  *{
    font-family: Arial, Helvetica, sans-serif;
  }

  .head{
    text-align: center;
  }

  .body{
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    background-color: white;
    box-shadow: 1px 1px 8px black;
    border-radius: 20px;
    max-width: 50%;
    padding: 2%;
  }

  .container{
    padding: 20px;
  }

  .input{
    padding: 5px;
    margin-bottom: 10px;
    width: 50%;
  }

  .table{
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
  }

  .table, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
  }

  .plus{
    background-color: rgb(155, 212, 241);
    padding: 10px;
    border-radius: 10px;
    transition: 0.3s;
  }

  .plus:hover{
    background-color: rgb(73, 192, 196);
  }

  .del{
    background-color: rgb(213, 53, 53);
    padding: 7.5px;
    border-radius: 10px;
    transition: 0.3s;
  }

  .del:hover{
    background-color: rgb(135, 4, 4);
  }
</style>