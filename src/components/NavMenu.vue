<template>
    <nav>
    <router-link to="/">Home</router-link>
    <router-link to="/new">New Page</router-link>
    </nav>
</template>

<script>
export default {
    name: "NavMenu",
}
</script>

<style scoped>
nav {
    width: 100%;
    height: 40px;
    line-height: 40px;
    background-color: #ddd;
    display: flex;
    gap: 30px;
}
nav a {
    padding: 0px 50px;
    text-decoration: none;
    color: black;
    cursor: pointer;
}
nav a:hover {
    background-color: #d0d0d0;
}
</style>