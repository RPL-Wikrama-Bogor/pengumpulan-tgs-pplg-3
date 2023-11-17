# dasar-vue

This template should help get you started developing with Vue 3 in Vite.

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur) + [TypeScript Vue Plugin (Volar)](https://marketplace.visualstudio.com/items?itemName=Vue.vscode-typescript-vue-plugin).

## Customize configuration

See [Vite Configuration Reference](https://vitejs.dev/config/).

## Project Setup

```sh
npm install
```

### Compile and Hot-Reload for Development

```sh
npm run dev
```

### Compile and Minify for Production

```sh
npm run build
```

### BELAJAR Vue.js

### CSS hello world

<script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it!" />
    </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>



### Program di bawah ini adalah codingan dasar belajar Vue.js

<template>
  <p>--------------template--------------</p>
  <p>{{ nama }}</p>
  <p>{{ number }}</p>
  <div v-html="kelas"></div>
  
  <p>------------data binding------------</p>
  <button :disabled="nonaktif">no</button>
  <h1 v-bind="property">Siuuuuuu</h1>
  <input :type="typeInput">
  
  <p>------------data binding------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  
  <p>----------------v-if----------------</p>
  <button v-if="show">submit</button>
  <br>
  <button v-show="show">submit</button>
  
  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  
  <p>---------computed and method---------</p>
  <!-- <button @click="counterNumber">{{ counterButton }}</button>
  <br>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <br> -->
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  
  <p>-----------class and style-----------</p>
  
  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">
        test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah warna</button>
  
  <p>-----------class and style-----------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ item }} {{ index+1 }}</li>
  </ul>
  
  <p>-----------form binding-----------</p>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
  
  </template>
  
  <script>
  export default{
    data() {
      return {
        inputKelas: '',
        daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
        counterButton : 0,
        numberComputed : 0,
        show:true,
        count:1,
        nama : 'Tio',
        number : 23,
        kelas : '<h1>kelas 11</h1>',
  
        nonaktif:false,
        // kalo true nanti jadi disable buttonnya
  
        property:{
          id:1,
          class:'color'
        },
  
        typeInput: 'password',
        isActive:true
      }
    },
    methods: {
      counterNumber() {
        alert(this.counterButton += 1)
      },
      showPassword() {
        if (this.typeInput == 'password') {
          this.typeInput = 'text'
        } else {
          this.typeInput = 'password'
        }
      },
      ubahWarna() {
      if(this.isActive) {
        this.isActive=false
      } else {
      this.isActive=true
        }
      }
    },
    computed: {
      countComputed() {
        this.numberComputed += 6
      }
    }
  }
  
  </script>
  
  <style>
  .color {
    color: red;
  }
  .fs40px{
    font-size: 20px;
  }
  .active {
    color: blueviolet;
  }
  </style>