<template>
    <button @click="magicAlert" class="magic-button">Click Me</button>
</template>

<script>
export default {
    name: 'MagicButton',
    props: {

    },
    methods: {
        magicAlert () {
            alert("magic");
        }
    }
}
</script>

<style scoped>
.magic-button {
    color: #0077ee;
}
</style>