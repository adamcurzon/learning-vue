<template>
  <div class="hello">
    <h1>PDF Page</h1>
    <a :href="source1">Download PDF</a>
    <vue-pdf-embed align="center" width="800" :source="source1"/>
  </div>
</template>

<script>
import {mapMutations} from 'vuex';
import VuePdfEmbed from 'vue-pdf-embed'



export default {
  components: {
    VuePdfEmbed,
  },
  methods: {
    ...mapMutations([
      'storeInfo'
    ]),
    getUrl() {
      if(location.host === "localhost:8080") {
        return "http://localhost:8000";
      } else {
        return "";
      }
    }
  },
  computed: {},
  data() {
    return {
      source1: this.getUrl()+'/api/pdf',
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
.vue-pdf-embed {
  margin: 50px auto;
}
</style>
