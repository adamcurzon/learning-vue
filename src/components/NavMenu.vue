<template>
    <nav>
    <router-link to="/">Home</router-link>
    <router-link to="/new">New Page</router-link>
    <button @click="toggleTheme">Toggle Theme</button>
    </nav>
</template>

<script>
import {mapMutations} from 'vuex';
export default {    
    name: "NavMenu",
    methods:{
        ...mapMutations([
        'changeTheme'
      ]),
        toggleTheme(){
            let theme = this.$store.state.theme;

            if (theme == "light"){
                document.querySelector("body").classList.add("dark");
                document.querySelector("body").classList.remove("light");
                this.changeTheme("dark");
            } else {
                document.querySelector("body").classList.add("light");
                document.querySelector("body").classList.remove("dark");
                this.changeTheme("light")
            }
        }
    },
    mounted() {
        this.toggleTheme();
    }
}
</script>

<style scoped>
nav {
    width: 100%;
    height: 40px;
    line-height: 40px;
    display: flex;
    gap: 30px;
    justify-content: center;
}
nav a {
    padding: 0px 50px;
    text-decoration: none;
    color: black;
    cursor: pointer;
}
nav a:hover {
    background-color: rgba(0,0,0,0.1);
}
</style>