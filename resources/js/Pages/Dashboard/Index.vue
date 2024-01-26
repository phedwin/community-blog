

<script setup lang="ts">

defineProps(
    {
        users : Object
    }
)
</script>


<template>
    <div>
       <p>Hello world</p>
       <li v-for="user in users">
        {{ user.firstName }}
       </li>
    </div>
</template>

