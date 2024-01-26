

<template>
  <!-- Everything will be extracted to its components, in the mean time lets see some repetition -->
  <div class="max-w-md mx-auto my-8 p-6 bg-white rounded-md shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Register Page</h1>
    <form @submit.prevent="form.post('/register')" method="post">
        
        <div class="mb-4">
            <input 
                v-model="form.username" 
                type="text" 
                placeholder="Username" 
                name="username"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
            >
        </div>
        <div class="mb-4">
            <input 
                type="password" 
                name="password"
                v-model="form.password"
                placeholder="Password"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
            >
        </div>
        <div class="mb-4">
            <input 
                type="email" 
                name="email"
                v-model="email"
                placeholder="Email"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
            >
        </div>
        <div class="mb-4">
            <input 
                type="file" 
                name="profile_photo"
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
            >
        </div>
        <button 
            type="submit" 
            class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue"
        >
            Register
        </button>
    </form>
</div>

</template>

<script setup>

import { useForm } from '@inertiajs/vue3'

const form = useForm({
  email : null,
  username : null,
  password : null
});

</script>
