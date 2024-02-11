

<template>
    <div>
        <input 
            :type="text" 
            :name="username" 
            class="mt-1 px-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white" 
            required
        >
    </div>
</template>

<script setup>
defineProps({ type : { type : String, }, name : {type : string}})
</script>
