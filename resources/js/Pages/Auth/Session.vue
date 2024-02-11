
<template>
    <div class="bg-gray-900 text-white">

            <div 
                class="min-h-screen flex justify-center items-center"
            >
                <div class="bg-gray-800 p-8 rounded shadow-md w-full max-w-md">

                    <h2 
                        class="text-2xl font-semibold mb-4 text-center hover:underline"
                    >
                        {{  `${page.props.app_name} - register`  }}
                    </h2>

                   <form 
                        action="/register"
                        method="post"
                        @submit.prevent="register"
                   >
                    <input 
                        type="text" 
                        placeholder="username" 
                        v-model="users.username"
                    >
                    <input 
                        type="text" 
                        placeholder="email" 
                        v-model="users.email"
                    >
                    <input 
                        type="text" 
                        placeholder="username" 
                        v-model="users.password"
                    >
                    <button>Register</button>
                   </form>
                </div>
            </div>
    </div>
</template>

<script setup lang="ts">
import { reactive, ref } from 'vue';
import PrimaryButton from '../../Shared/PrimaryButton.vue'
import TextInput from '../../Shared/TextInput.vue'
import { router, useForm, usePage } from '@inertiajs/vue3';

const page = usePage();
const users = reactive({
    username:null,
    password : null,
    email : null
})
function register()
{
    router.post('/register', users);
    
}
</script>
