<script setup>
import NavMenu from './components/NavMenu.vue';
</script>

<style>
  @import './assets/css/global.css';
</style>

<template>
  <div id="app">
    <NavMenu />
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
}
</script>

<style>
body {
  margin: 0;
  font-family: sans-serif;
  text-align: center;
}
pre {
  text-align: left;
  width: 400px;
  background-color: #EFEFEF;
  margin: 20px auto;
}

</style>