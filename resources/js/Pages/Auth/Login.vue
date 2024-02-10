
<template>
    <div>
        <p>Hello world</p>
        <li v-for="d in data">
            <p> {{ d }} </p>
        </li>
        
        <p>{{ Inertia }} </p>
    </div>
</template>

<script setup>
defineProps(['data'])
setInterval(() => {
    "hello world"
})
</script>
