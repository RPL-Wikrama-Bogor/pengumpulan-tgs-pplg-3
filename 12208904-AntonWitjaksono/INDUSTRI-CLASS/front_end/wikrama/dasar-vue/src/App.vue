<template>
  <!-- templating -->
  <p>---------- template ----------</p>
  <p>
    {{ nama }}
    {{ number }}
  <div v-html="kelas"></div>
  </p>
  <p>---------- data binding ----------</p>
  <!-- blading -->
  <button :disabled="show">button</button>
  <h1 v-bind="property">kiwkiw cukurukuk</h1>
  <input :type="typeInput">
  <p>---------- data binding ----------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>----------- v-if ----------</p>
  <button v-if="show">button</button>
  <button v-show="show">PERIGUD PERI WELL</button>

  <div v-if="count == 1">
    number 1
  </div>

  <div v-else-if="count == 2">
    number 2
  </div>

  <div v-else="count == 3">
    number 3
  </div>
  <p>---------- computed dan method ----------</p>
  <button @click="counterNumber">methods {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>

  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>---------- class dan style ----------</p>
  <ul>
    <li class="fs" :class="{
      active: isActive,
      fs40px: isActive
    }">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>---------- list rendering ----------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index + 1 }} {{ item }}</li>
  </ul>
  <p>---------- v mode ----------</p>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
</template>

<script>
export default {
  data() {
    return {
      inputKelas: '',
      daftarKelas: ['PPLG XI-1', 'PPLG XI-2', 'PPLG XI-3', 'PPLG XI-4', 'PPLG XI-5', 'PPLG XI-6'],
      numberComputed: 0,
      counterButton: 0,
      show: false,
      count: 3,
      nama: 'Anton',
      number: 17,
      kelas: '<h1>kelas 11</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: "password",
      isActive: true,
    }
  },

  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },
    ubahWarna() {
      if (this.isActive) {
        this.isActive = false;
      } else {
        this.isActive = true;
      }
    }
  },


  computed: {
    countComputed() {
      this.numberComputed += 6;
    }
  }
}
</script>

<style>
.color {
  color: purple;
}

.fs40px {
  font-size: 40px;
}

.active {
  color: salmon;
}
</style>