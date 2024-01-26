

<template>
  <!-- Everything will be extracted to its components, in the mean time lets see some repetition hehe -->
  <div class="max-w-md mx-auto my-8 p-6 bg-white rounded-md shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Register Page</h1>
    <p class="underline">{{ form.email }} </p>
    <form @submit.prevent="form.post('/register', {preserveScroll : true})"
    >
        <input 
            v-model="form.username" 
            type="text" 
            :error="form.errors.username"
            placeholder="Username" 
            name="username"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-4"
        >

        <input 
            type="password" 
            name="password"
            :error="form.errors.password"
            v-model="form.password"
            placeholder="Password"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-4"
        >

        <input 
            type="email" 
            name="email"
            :error="form.errors.email"
            v-model="form.email"
            placeholder="Email"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-4"
        >

        <input 
            type="file" 
            name="profile_photo"
            :error="form.errors.profile_photo"
            @input="form.profile_photo = $event.target.files[0]"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-4"
        >

        <LoadingButton 
            type="submit" 
            class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue"
        >
            Register
        </LoadingButton>
    </form>
</div>

</template>

<script setup>

import { useForm } from '@inertiajs/vue3'
import LoadingButton from '../Shared/Loading-button.vue';


const form = useForm({
  email : null,
  username : null,
  password : null,
  profile_photo : null

});
</script>
