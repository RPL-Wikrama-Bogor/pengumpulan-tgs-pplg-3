<template>
  <ul>
    <li>
      <router-Link to="{name: 'Home'}">Home</router-link>
      <router-Link to="/about">About</router-link>
    </li>
  </ul>
  <router-view></router-view>
</template>