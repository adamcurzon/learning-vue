<template>
  <div class="hello">
    <h1>Home Page</h1>
    {{ count }}
    <button @click="incrementCounter">Increment</button>
    <button @click="resetCounter">Reset</button>
  </div>
</template>

<script>
import { mapMutations } from 'vuex';
export default {
  methods: {
    ...mapMutations([
      'increment',
      'reset'
    ]),
    incrementCounter(){
      this.increment();
    },
    resetCounter (){
      this.reset();
    }
  },
  computed: {
    count () {
      return this.$store.state.count
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
