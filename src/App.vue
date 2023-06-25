<script setup>
import NavMenu from './components/NavMenu.vue';
</script>


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

</style>