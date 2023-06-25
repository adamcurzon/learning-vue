<template>
  <HelloWorld msg="Adam Curzon"/>
  <MagicButton></MagicButton>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import MagicButton from './components/MagicButton.vue';

export default {
  name: 'App',
  components: {
    HelloWorld,
    MagicButton
}
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
