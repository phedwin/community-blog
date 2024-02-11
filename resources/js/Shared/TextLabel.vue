

<template>
    <label 
        :for="id" 
        class="block"
    >
        {{ label }}
    </label>
</template>

<script setup lang="ts">


defineProps({  label : { type :String}, id : { type :String}})
</script>