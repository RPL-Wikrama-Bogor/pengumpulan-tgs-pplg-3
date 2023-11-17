<template>
  <ul>
    <li>
      <router-link :to="{name: 'home'}">Home</router-link>
      <router-link to="/About">About</router-link>
    </li>
  </ul>
  <router-view></router-view>
</template>