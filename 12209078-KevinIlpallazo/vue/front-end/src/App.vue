<template>
  <div>
    <p>----------------------------------------</p>
    <li :class="property.class">{{ nama }}</li>
    <li>{{ umur }}</li>
    <li>{{ kelas }}</li>
    <p>----------------------------------------</p>
    <h1 :class="property.class">saxcy</h1>
    <p>----------------------------------------</p>
    <input v-model="inputValue"><br>
    <p>Input Value: {{ inputValue }}</p>
    <p>----------------------------------------</p>
    <button @click="count--">_</button>
    <button>Count is: {{ count }}</button>
    <button @click="count++">+</button>
    <div :class="{ red: count % 2 == 1, blue: count % 2 == 0 }">
      {{ count % 2 == 1 ? 'ganjil' : 'genap' }}
    </div>
    <p>----------------------------------------</p>
    <div>
      <h2>To-Do List</h2>
      <input v-model="newTask" @keyup.enter="addTask" placeholder="Tambahkan tugas baru">
      <ul>
        <li v-for="(task, index) in tasks" :key="index">
          {{ task }}
          <button @click="removeTask(index)">Hapus</button>
        </li>
      </ul>
    </div>
    <p>----------------------------------------</p>
    <div>
      <h2>Random number and color </h2>
      <button @click="generateRandomNumber">Generate</button>
      <p v-if="randomNumber !== null">Angka acak: <span :style="{ color: randomColor }">{{ numberWithCommas(randomNumber) }}</span></p>
    </div>
  </div>
    <p>----------------------------------------</p>
      <div>
    <input type="text" placeholder="Masukan Nama" v-model="formData.nama" />
    <br />
    <input type="text" placeholder="Masukan Kelas" v-model="formData.kelas" />
    <br />
    <button @click="tambahKelas">Tambah Siswa</button>

    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Kelas</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(murid, index) in dataKelas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ murid.nama }}</td>
          <td>{{ murid.kelas }}</td>
          <td><button @click="hapusDataKelas(murid.nama)">Hapus</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      count: 1,
      nama: "mamat",
      umur: 19,
      kelas: 29,
      inputValue: '',
      property: {
        id: 1,
        class: 'color',
      },
      red: {
        class: 'red',
      },
      blue: {
        class: 'blue',
      },
      type: "text",
      newTask: "",
      tasks: [],
      randomNumber: null,
      randomColor: 'black', 
      dataKelas: [
        {
          nama: "radit",
          kelas: "10",
        },
      ],
      formData: {
        nama: "",
        kelas: "",
      },
    };
  },
  methods: {
    addTask() {
      if (this.newTask.trim() !== "") {
        this.tasks.push(this.newTask);
        this.newTask = "";
      }
    },
    removeTask(index) {
      this.tasks.splice(index, 1);
    },
    generateRandomNumber() {
      this.randomNumber = Math.floor(Math.random() * 1000) + 1;
      this.randomColor = getRandomColor();
    },
    numberWithCommas(number) {
      return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
    tambahKelas() {
      this.formData.id = Date.now();
      this.dataKelas.push(this.formData);
      this.formData = {
        nama: "",
        kelas: "",
      };
    },
    hapusDataKelas(nama) {
      this.dataKelas = this.dataKelas.filter((item) => item.nama !== nama);
    },
  },
};

function getRandomColor() {
  const letters = '0123456789ABCDEF';
  let color = '#';
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
</script>

<style>
.color {
  color: violet;
}

.red {
  color: red;
}

.blue {
  color: blue;
}
</style>
