
<!-- this component would make so much sense if the styling wasnt hardcoded -->
<template>
    <div>
      <input 
        :placeholder="placeholder"
        :type="type"
        :name="name"
        :value="values"
        @input="$emit('update:values', $event.target.value)"
        class="mb-4 mt-1 px-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white" 
      >
    </div>
  </template>
  
<script setup>
  
defineProps({
    type: { type: String, default: 'text' },
    name: { type: String },
    values : { type : String},
    placeholder: { type: String }
  });


defineEmits(['update:values'])
</script>
  
