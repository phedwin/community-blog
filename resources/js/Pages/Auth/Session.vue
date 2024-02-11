
<template>
    <div class="bg-gray-900 text-white">

            <div 
                class="min-h-screen flex justify-center items-center"
            >
                <div class="bg-gray-800 p-8 rounded shadow-md w-full max-w-md">

                    <h2 
                        class="text-2xl font-semibold mb-4 text-center hover:underline"
                    >
                        Register
                    </h2>

                    <form 
                        action="/register" 
                        method="POST"
                    >
                       
                        <div 
                            class="mb-4"
                        >
                            <label 
                                for="username" 
                                class="block"
                            >
                                Username:
                            </label>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                class="mt-1 px-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white" 
                                required
                            >

                            <TextInput
                                for="password"
                            >
                                password
                            </TextInput>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</template>

<script setup lang="ts">


</script>
