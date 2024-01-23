

<template>
    <div class="container mx-auto mt-8">
      <h1 class="text-3xl font-bold mb-6">User Profile</h1>
  
      <div class="flex items-center mb-6">
        <img
          v-if="user.profile_photo"
          :src="user.profile_photo"
          alt="Profile Photo"
          class="w-16 h-16 rounded-full mr-4"
        />
        <div>
          <label for="profilePhoto" class="cursor-pointer text-blue-500">
            Change Profile Photo
          </label>
          <input
            type="file"
            id="profilePhoto"
            class="hidden"
            @change="uploadProfilePhoto"
          />
        </div>
      </div>
  
      <div class="mb-6">
        <label for="firstName" class="block text-sm font-medium text-gray-600">
          First Name
        </label>
        <input
          id="firstName"
          type="text"
          v-model="user.firstName"
          class="mt-1 p-2 w-full border rounded"
        />
      </div>
  
      <div class="mb-6">
        <label for="secondName" class="block text-sm font-medium text-gray-600">
          Second Name
        </label>
        <input
          id="secondName"
          type="text"
          v-model="user.secondName"
          class="mt-1 p-2 w-full border rounded"
        />
      </div>
  
      <!-- Add more fields as needed -->
  
      <button @click="saveProfile" class="bg-blue-500 text-white p-2 rounded">
        Save Profile
      </button>
    </div>
  </template>
  
<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

const user = reactive(
    {
        'firstName' :  null,
        'secondName' : null
        ,'profile_photo' : null
    }
)
function uploadProfilePhoto()
{
    
}
function saveProfile()
{
    router.post('/', user);
}

</script>
  