<template>
  <div>
    <div class="form-container">
      <input type="text" placeholder="Nama" v-model="formatDataKelas.nama" class="input-field">
      <br>
      <input type="text" placeholder="Kelas" v-model="formatDataKelas.kelas" class="input-field">
      <br>
      <input type="text" placeholder="Rombel" v-model="formatDataKelas.rombel" class="input-field">
      <br>
      <button v-if="!isEditing" @click="tambahKelas" class="btn">Tambah siswa</button>
      <button v-else @click="simpanPerubahan" class="btn">Simpan Perubahan</button>
    </div>
    <table class="data-table">
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Rombel</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td v-if="murid.id !== editedId">{{ murid.nama }}</td>
        <td v-else><input type="text" v-model="muridEdit.nama" class="input-field"></td>
        <td v-if="murid.id !== editedId">{{ murid.kelas }}</td>
        <td v-else><input type="text" v-model="muridEdit.kelas" class="input-field"></td>
        <td v-if="murid.id !== editedId">{{ murid.rombel }}</td>
        <td v-else><input type="text" v-model="muridEdit.rombel" class="input-field"></td>
        <td>
          <template v-if="murid.id !== editedId">
            <button @click="editDataKelas(murid.id)" class="btn-save">Edit</button>
          </template>
          <template v-else>
            <button @click="simpanPerubahanEdit(murid.id)" class="btn-edit">Simpan</button>
          </template>
          <button @click="hapusDataKelas(murid.id)" class="btn-delete">Hapus</button>
        </td>
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
        nama: 'Anton',
        kelas: '11',
        rombel: 'PPLG'
      }],
      formatDataKelas: {
        nama: '',
        kelas: '',
        rombel: ''
      },
      editedId: null,
      muridEdit: {
        id: null,
        nama: '',
        kelas: '',
        rombel: ''
      },
      isEditing: false
    }
  },
  methods: {
    tambahKelas() {
      this.formatDataKelas.id = Date.now();
      this.dataKelas.push(this.formatDataKelas);
      this.formatDataKelas = { nama: '', kelas: '', rombel: '' }
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter(item => item.id !== id)
    },
    editDataKelas(id) {
      this.isEditing = true;
      this.editedId = id;
      const murid = this.dataKelas.find(item => item.id === id);
      this.muridEdit = { ...murid };
    },
    simpanPerubahanEdit(id) {
      const index = this.dataKelas.findIndex(item => item.id === id);
      this.dataKelas[index] = { ...this.muridEdit };
      this.isEditing = false;
      this.editedId = null;
      this.muridEdit = { id: null, nama: '', kelas: '', rombel: '' };
    }
  }
}
</script>

<style>
/* Tambahkan gaya CSS sesuai kebutuhan Anda */
</style>
