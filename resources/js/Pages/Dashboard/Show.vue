

<template>
    <div class="container mx-auto mt-8">
      <div class="bg-white shadow-md rounded-lg p-8">
        <div class="flex items-center justify-between mb-6">
          <Link href="/" class="flex items-center text-blue-500 hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9.707 2.293a1 1 0 0 1 1.414 0l7 7a1 1 0 0 1 0 1.414l-7 7a1 1 0 0 1-1.414-1.414L15.586 11H2a1 1 0 0 1 0-2h13.586l-6.293-6.293a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
            </svg>
            Back
          </Link>
          <div>
            <button @click="deletePost" class="text-red-500 hover:text-red-600 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block align-middle" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v1zm2 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7zm5 9a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2z" clip-rule="evenodd" />
              </svg>
              Delete
            </button>
            <Link href="" class="text-green-500 hover:text-green-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block align-middle" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.883 3.883a1 1 0 0 1 1.414 0l6.324 6.324a1 1 0 0 1 0 1.414l-10 10a1 1 0 0 1-1.414 0l-6.324-6.324a1 1 0 0 1 0-1.414l10-10zM14 5l1.293 1.293-8.17 8.17a1 1 0 0 0-.242.374l-1.5 3a1 1 0 0 1-.117.155l-1.5 1.5a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414l8.17-8.17L11 5h3zm-1 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" clip-rule="evenodd" />
              </svg>
              Update
            </Link>
          </div>
        </div>
        <div>
          <p class="text-gray-800">{{ post.context }}</p>
        </div>
      </div>
    </div>
</template>
  
<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({post : Array})
const deletePost = () => 
{
    
    console.log('Deleting post...');
}

</script>
  
