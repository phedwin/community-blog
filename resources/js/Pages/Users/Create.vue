

<template>
    <div>
        <form class="mt-4 " @submit.prevent="submit">
            <label>username</label>
            <input 
                type="text" 
                name="username"
                v-model="form.username"
            >
            <label>Email</label>
            <input 
                type="email" 
                name="email" 
                v-model="form.email"
            >
            <label>password</label>
            <input 
                type="password" 
                name="password" 
                v-model="form.password"
            >
            
            <button 
                type="submit"
                class="bg-violet-400 px-6 py-2 rounded"
            >
                Save user
            </button>
        </form>
    </div>
</template>

<script setup lang="ts">
// import { Inertia } from '@inertiajs/inertia';
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';


let form = reactive({
    username: ' ', 
    email : ' ', 
    password :' '
})

const submit = () => {
    router.post('/users',form)
}

</script>
