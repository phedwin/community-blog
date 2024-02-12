

<template>
  <div class="container mx-auto mt-8">
    <p class="text-3xl font-semibold mb-4">Welcome back, {{ user.username }}</p>
    
    <form 
        action="/logout" 
        method="post"
    >
      <div 
          class="text-center mb-6"
        >
        <button 
            type="submit" 
            class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
        >
          Logout
        </button>
      </div>

    </form>
    
    <ul>
      <li v-for="post in posts" :key="post.id" class="mb-4">
        <p class="text-lg font-semibold text-blue-700 mb-2">The Title</p>
        <p class="text-gray-800">{{ post.title }}</p>
        <Link 
          :href=" 'posts/'.concat(post.id)" 
          class="text-blue-500 hover:text-blue-700"
        >
          Read More
          </Link>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { usePage, Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();
const user = computed(() => page.props.auth.user);
defineProps({ posts: Object });
</script>

