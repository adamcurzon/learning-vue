<script setup>
  import apiView from "../apiView.vue";</script>
<template>
    <div class="hello">
      <h1>New Page!!!</h1>
      <apiView :data="apiData"></apiView>
      <pre v-if="!apiData">No data</pre>
      <button @click="getApiInfo">Reload data</button>
    </div>
  </template>
  
  <script>
  import api from "../../api.js";
  import {mapMutations} from 'vuex';
  export default {
    methods: {
      ...mapMutations([
        'storeInfo'
      ]),
      async getApiInfo (){
        let apiData = await api();
        this.storeInfo(apiData);
      }
    },
    computed: {
      apiData () {
        return this.$store.state.api_data
      }
    },
    mounted() {
      console.log("Mounted");
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
  