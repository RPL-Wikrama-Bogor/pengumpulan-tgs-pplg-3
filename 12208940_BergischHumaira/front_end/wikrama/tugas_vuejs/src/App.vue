<template>
  <div>
    <h1>Data Siswa</h1>
    <!-- v-model digunakan agar bisa memasukan data yang di input ke formDataKelas -->
    <input type="text" placeholder="masukan nama" v-model="formDataKelas.nama">
    <br><br>
    <input type="text" placeholder="masukan kelas" v-model="formDataKelas.kelas">
    <br><br>
    <button @click="tambahKelas">Tambah Siswa</button>
<!-- event click berguna saat button di klik makan ia akan menjalankan method tambahKelas -->
    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <!-- id berguna agar diketahui mana data yang akan dihapus -->
        <td><button @click="hapusDataKelas(murid.id)">hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      dataKelas: [{
        nama: 'bergisch',
        kelas: '11'
      }],
      formDataKelas: {
        nama: '',
        kelas: ''
      }
    }
  },
  methods: {
// tambahKelas () adalah method untuk menambahkan data yang akan diinpt ke dataKelas
    tambahKelas() {
      this.formDataKelas.id = Date.now();

      this.dataKelas.push(this.formDataKelas);
// object dataKelas beefungsi jika sudah menginput data maka data/form nya akan kosong kembali 
      this.formDataKelas = {
        nama: '',
        kelas: ''
      }
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }
  }
}
</script>