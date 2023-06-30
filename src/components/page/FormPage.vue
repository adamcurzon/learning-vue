<template>
  <div class="hello">
    <h1>Form Page</h1>
    <form>
      <input type="text" placeholder="Your name" name="name" v-model="v.name.$model"/><br/>
      <div v-if="v.name.$error">Name field has an error.</div>
      <br v-if="!v.name.$error"/>
      <input type="email" name="email" placeholder="Your email" v-model="v.contact.email.$model" /><br/>
      <div v-if="v.contact.email.$error">Email field has an error.</div>
      <br v-if="!v.contact.email.$error"/>
      <input type="password" name="password" placeholder="Your password" v-model="password">
      <button @click="submitForm">Save</button>
    </form>
  </div>
</template>

<script>
import {useVuelidate} from '@vuelidate/core'
import {required, email} from '@vuelidate/validators'

const containsAdam = value => value.includes("adam");

const checkApiForValidation = async (value) => {
  if (!value) {
    return true;
  }
  let url = "";
  if(location.host === "localhost:8080") {
    url = "http://localhost:8000/api/truefalse";
  } else {
    url = "/api/truefalse";
  }
  return await fetch(url) === "true" ? true : false;
}


export default {
  setup: () => ({v: useVuelidate()}),
  data() {
    return {
      name: '',
      contact: {
        email: ''
      },
      password: ''
    }
  },
  methods: {
    async submitForm(e) {
      e.preventDefault();
      const isFormCorrect = await this.v.$validate()
      if (!isFormCorrect) return;

      alert("form submitted");
    },
  },
  validations() {
    return {
      name: {required, containsAdam},
      contact: {
        email: {required, email}
      },
      password: {checkApiForValidation, $lazy: true},
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
