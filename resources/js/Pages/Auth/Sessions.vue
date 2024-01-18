
<script setup>
import Form from '../Shared/Form.vue'
import Label from '../Shared/Label.vue'
import Input from '../Shared/Input.vue';
import PrimaryButton from '../Shared/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3'

let form = useForm({
    username : ' ',
    password : ' ',
    email : ' '
});
</script>


<template>

    <section class="">
        <div class="flex items-center justify-center p-6 min-h-screen bg-indigo-100">

            <Form 
                @submit.prevent="form.post('/')"
            >
                <h1 class="underline mb-2">Welcome Back</h1>
                <Label>Email</Label>
                <Input
                    name="email"
                    placeholder="email"
                    v-model="form.email"
                    
                >
                </Input>

                <Label>Username</Label>
                <Input
                    v-model="form.username"
                    placeholder="username"
                    name="username"
                >
                </Input>

                <Label>Password</Label>
                <Input
                    placeholder="password"
                    name="password"
                    v-model="form.password"
                >
                </Input>

                <PrimaryButton type="submit">Register</PrimaryButton>
            </Form>
            
        </div>
      </section>
    
      </template>

