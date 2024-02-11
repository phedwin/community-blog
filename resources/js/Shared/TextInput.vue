

<template>
    <div>
        <label 
            :for="id" 
            class="block"
        >
         {{  label }}
        </label>
    </div>
</template>

<script setup>

defineProps({ label : { type : String } , id : {   type : String, required :true}})
</script>
