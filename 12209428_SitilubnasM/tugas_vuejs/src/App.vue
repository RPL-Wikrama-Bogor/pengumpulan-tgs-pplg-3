<template>
  <div>
    <h3>Isi data Siswa </h3>
    <input type="text" placeholder="masukkan nama" v-model="formDataKelas.nama">
    <br>
    <br>
    <input type="text" placeholder="masukkan kelas" v-model="formDataKelas.kelas">
    <br>
    <br>
    <button @click="tambahKelas">Tambah Siswa</button>
    <br>
    <br>
    <table>
      <tr>
        <th>Id </th>
        <th>Nama </th>
        <th>Kelas </th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
      <td>{{ index + 1 }}</td>
      <td>{{ murid.nama }}</td>
      <td>{{ murid.kelas }}</td>
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
        nama: 'radit',
        kelas: '11'
      }],
      formDataKelas: {
        nama: '',
        kelas: ''
      }
    }
  },
  methods: {
    tambahKelas() {
      this.formDataKelas.id = Date.now();
      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama: '',
        kelas: ''
      }
    },
    hapusDataKelas(id){
      this.dataKelas = this.dataKelas.filter(item => item.id != id);
    }

  }
}
</script>