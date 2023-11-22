<template>
  <ul>
    <li>
      <!-- fungsingnya tidak akan mereeload -->
      <router-link :to="{name: 'Home'}">Home</router-link>
      <router-link to="/about">About</router-link>
      <!-- <a href="/">Home</a>
      <a href="/About">About</a> -->
    </li>
  </ul>
  <router-view></router-view>
</template>