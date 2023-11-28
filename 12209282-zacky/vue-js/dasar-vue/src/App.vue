<template>
  <p>--------------------tamplating--------------------</p>
{{ nama }}
{{ number }}
<div v-html = kelas></div>

<p>--------------------data binding--------------------</p>
<button v-if="show" :disabled ="nonaktif" >button</button>
<h1 v-bind="proprty">zac</h1>
<input type="typeinput">

<p>--------------------tamplating--------------------</p>
{{ count == 0 ? count + 1 : count + 2 }}

<p>--------------------v-if--------------------</p>
<button v-if="show">submit</button>
<button v-show="show">submit</button>

<div v-if="count">
 number 1
</div>
<div v-else-if="count == 2">
 number 2
</div>
<div v-else>
  lebih dari 2
</div>

<p>--------------------computer dan method--------------------</p>
<button @click="counterNumber">{{ counterbutton }}</button>
<button @click="countcomputed">computed{{ numbercomputed }}</button>
<input type="typeinput">
<button @click="showpassword">show password</button>

<p>--------------------class dan style--------------------</p>
<ul>
  <li class="fs" :class="{active:isActive, fs400px:isActive}">
    test
  </li>
</ul>
<button @click="ubahwarna">ubah warna dan ukuran</button>

<p>--------------------list rendering--------------------</p>
<ul>
  <li v-for="(item, index) in daftarkelas">{{ index+1 }} {{ item }}</li>
</ul>

<p>--------------------v-model--------------------</p>
<input type="text" v-model="inputkelas">
{{ inputkelas }}

</template>

<script>
export default{
  data(){
    return{
      inputkelas:'',
      daftarkelas:['RPL 1','RPL 2','RPL 3'],
      counterbutton:0,
      numbercomputed:0,
      show: true,
      count:2,
      nama:'zacky',
      number:1,
      kelas: '<h1>kelas 11</h1>',
      nonaktif: false,
      proprty : {
        id : 1,
        class:'color'
      },
      typeinput :'pasword',
      isActive:true
    }
  },
  methods:{
    counterNumber(){
        alert(this.counterbutton += 1)
    },
    showpassword(){
      if (this.typeinput == 'password') {
        this.typeinput ='text';
      }else{
        this.typeinput ='password';
      }
      },
      ubahwarna(){
        if (this.isActive) {
          this.isActive = false;
        }else{
          this.isActive = true;
        }
    }
  },
  computed:{
    countcomputed(){
        this.numbercomputed += 6;
    }
  }
}

</script>

<style>
.color{
  color:turquoise;
}
.active{
  color: aquamarine;

}
.fs400px{
  font-size: 400px;
}
</style>