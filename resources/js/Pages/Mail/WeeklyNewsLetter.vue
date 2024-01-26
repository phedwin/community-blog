<!-- resources/js/Pages/Auth/SignupForm.vue -->

<template>
    <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-bold mb-4">Signup For weekly NewsLetter</h2>
      <form 
        @submit.prevent="form.post('/mail' ,
        {preserveScroll : true})"
      >
        <div 
            class="mb-4"
        >
            <label 
                for="email" 
                class="block text-sm font-medium text-gray-700"
            >Email:
            </label>
            <input
                type="email"
                v-model="form.email"
                required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
            />
        </div>
  
        <div 
            class="mb-4"
        >
            <label 
                for="password" class="block text-sm font-medium text-gray-700"
            >Password:</label>
          <input
            type="password"
            v-model="form.password"
            required
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
          />
        </div>
  
        <button
          type="submit"
          class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue"
        >
          Signup
        </button>
      </form>
    </div>
  </template>
  
<script setup lang="ts">

import { useForm } from '@inertiajs/vue3'

  const form = useForm(
    {
        email : '',
        password : ''
    }
  )


</script>
  