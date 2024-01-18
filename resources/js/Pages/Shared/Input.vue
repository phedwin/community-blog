


<template>
    <div>
        <input  
            :name="name"
            :placeholder="placeholder" 
            class="border px-12 py-3 mb-3 border-green-400 text-gray-900 sm:text-sm rounded-lg w-full" 
            required
        >
    </div>
</template>

<script setup>

defineProps(
    {
        'name' : String, 
        'placeholder' :String
    }
)
</script>

