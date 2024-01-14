


<script setup lang="ts">
import { router, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';



defineProps({
    users : Object,
    posts : Object
})

const username = ref("")

router.post('/users', {
  name: username.value,
//   _token: this.$page.props.csrf_token,
})
</script>

<template>
    <div>
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
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/settings">settings</a></li>
            </ul>
           </nav>
    </div>   
 
</template>