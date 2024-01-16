


<script setup lang="ts">

import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';



defineProps({
    users : Object,
    posts : Object,
    errors : Object

})

const username = ref("")

router.post('/users', {
  name: username.value,
})
</script>

<template>
    <div>

        <div v-if="true">
            <Link 
                method="post" 
                href="/logout"
                class="bg-green-400 rounded py-2 px-6 mt-4 z-20"
            >
                Logout
            </Link>
        </div>
        
        <form 
            action="/users" 
            method="post"
            submit.prevent="login"
        >
            
            <label for="username">username</label>
            <input 
                type="text" 
                name="username"
                v-model="username"
                
            >
            <div>
                <p class="text-red-600 text-xs">  </p>
            </div>
            <button 
                type="submit"
                submit="login"
            >
                Save Details
            </button>
        </form>
        
        <h2 class="font-bold">Hello users page</h2>
        <ul>
            <li v-for="post in posts">
                <pre> {{ post }} </pre>
            </li>
        </ul>
        <nav>
            <ul>

                <!-- demo but should use Link from Inertia -->
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/settings">settings</a></li>
                
            </ul>
           </nav>
    </div>   
 
</template>