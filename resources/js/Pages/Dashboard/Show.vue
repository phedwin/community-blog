

<template>
    <div>
        <!-- @ts-nocheck -->

        <p class="underline"> Name :  {{ show.firstName}}</p>
        <p class="underline"> Second Name: {{ show.secondName }} </p>
    </div>
</template>

<script setup lang="ts">

defineProps({
    show: Object
});
</script>
