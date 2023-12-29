

<template>
    <div>
        <p>Hello world</p>
        <p>{{ name.value }}</p>
    </div>
</template>

<script setup>

import { ref } from 'vue';

const name = ref('');

</script>

<style scoped>

</style>