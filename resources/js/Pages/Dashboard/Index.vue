

<template>
  <div>
    <p>welcome back {{ user.username }} </p>
    <li
      v-for="post in posts"
      class="list-disc"
    >
       <p class="underline mb-4">{{ post.title }} </p>
       {{  post.context }}
    </li>
  </div>
</template>

<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const user = computed(() => page.props.auth.user)
defineProps({posts : Object})

</script>
