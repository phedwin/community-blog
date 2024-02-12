

<template>
  <div>
    <p>welcome back {{ user.username }}</p>
    <form 
        action="/logout" 
        method="post"
      >
      <div class="text-centre">
        <Link 
          href="/logout"
          method="post"
          as="button"
          type="button"
          class="bg-green-400 px-4 rounded"
        >
          Logout
        </Link>
      </div>
        
      </form>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <p class="underline">The Title</p>
        {{ post.title }}
        <Link href="/" class="text-blue-700"> {{ post.context }} </Link>
      </li>
    </ul>

    </div>

</template>

<script setup>
import { usePage, Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const user = computed(() => page.props.auth.user);
defineProps({posts : Object})

</script>
